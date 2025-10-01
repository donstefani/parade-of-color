<?php
/**
 * Subcategory Module Generator
 * Reads JSON configuration and generates hard-coded subcategory modules
 * for SEO-friendly static content
 */

// Load the image mapping configuration
$imageMapping = json_decode(file_get_contents('../config/services_map.json'), true);

if (!$imageMapping) {
    die("Error: Could not load image mapping configuration\n");
}

/**
 * Generate a single subcategory module
 */
function generateSubcategoryModule($categoryName, $subcategoryName, $subcategoryData, $categoryImage) {
    $images = $subcategoryData['images'] ?? [];
    $subSortOrder = $subcategoryData['sub_sort_order'] ?? 0;
    
    // Generate unique gallery ID
    $galleryId = strtolower(str_replace([' ', '&', '-'], ['_', 'and', '_'], $subcategoryName)) . '_gallery';
    
    // Generate gallery initialization JavaScript
    $jsImages = json_encode($images);
    
    $module = "
<!-- {$subcategoryName} Subcategory Section -->
<section class=\"subcategory\">
    <div class=\"service-content-container\">
        <h2>{$subcategoryName}</h2>
        <div class=\"subcategory-content\">
            <div class=\"subcategory-image\">
                <div id=\"{$galleryId}\"></div>
            </div>
            <div class=\"subcategory-text\">
                <p>
                    <!-- Add your descriptive content here for {$subcategoryName} -->
                    This is placeholder content for {$subcategoryName}. Replace this with your actual service description.
                </p>
                <p>
                    <!-- Add additional descriptive content here -->
                    Additional details about {$subcategoryName} services can be added here.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the {$subcategoryName} gallery
document.addEventListener('DOMContentLoaded', function() {
    const {$galleryId}Images = {$jsImages};
    
    if ({$galleryId}Images.length > 0) {
        new ImageGallery('{$galleryId}', {$galleryId}Images, {
            showNavigation: true
        });
    }
});
</script>
";
    
    return [
        'order' => $subSortOrder,
        'name' => $subcategoryName,
        'module' => $module
    ];
}

/**
 * Generate all subcategory modules for a category
 */
function generateCategoryModules($categoryName, $categoryData) {
    $modules = [];
    $categoryImage = $categoryData['cat_image'] ?? '';
    
    // Extract subcategories (skip cat_image)
    foreach ($categoryData as $key => $value) {
        if ($key === 'cat_image') continue;
        
        if (is_array($value) && isset($value['images'])) {
            $modules[] = generateSubcategoryModule($categoryName, $key, $value, $categoryImage);
        }
    }
    
    // Sort by sub_sort_order
    usort($modules, function($a, $b) {
        return $a['order'] - $b['order'];
    });
    
    return $modules;
}

/**
 * Generate complete page content
 */
function generatePageContent($categoryName, $modules) {
    $content = "<!-- Generated subcategory modules for {$categoryName} -->\n";
    $content .= "<!-- Generated on: " . date('Y-m-d H:i:s') . " -->\n\n";
    
    foreach ($modules as $module) {
        $content .= $module['module'] . "\n";
    }
    
    return $content;
}

// Main execution
if (isset($argv[1])) {
    $categoryName = $argv[1];
    
    if (!isset($imageMapping[$categoryName])) {
        die("Error: Category '{$categoryName}' not found in configuration\n");
    }
    
    $modules = generateCategoryModules($categoryName, $imageMapping[$categoryName]);
    $content = generatePageContent($categoryName, $modules);
    
    // Output to file
    $filename = strtolower(str_replace([' ', '&'], ['_', 'and'], $categoryName)) . '_modules.html';
    file_put_contents($filename, $content);
    
    echo "Generated {$filename} with " . count($modules) . " subcategory modules:\n";
    foreach ($modules as $module) {
        echo "- {$module['name']} (order: {$module['order']})\n";
    }
    
} else {
    // Show available categories
    echo "Available categories:\n";
    foreach (array_keys($imageMapping) as $category) {
        echo "- {$category}\n";
    }
    echo "\nUsage: php generate-modules.php \"Category Name\"\n";
    echo "Example: php generate-modules.php \"Painting Services\"\n";
}
?>
