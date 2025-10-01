<?php
// Load service taxonomy data
$rawServiceData = json_decode(file_get_contents('config/services_map.json'), true);

// Transform the data structure to match navigation expectations
$serviceData = ['categories' => []];
$categoryIndex = 0;

foreach ($rawServiceData as $categoryName => $categoryData) {
    $subCategories = [];
    $subCategoryIndex = 0;
    
    // Process each subcategory in the category
    foreach ($categoryData as $key => $value) {
        // Skip the cat_image key
        if ($key === 'cat_image') {
            continue;
        }
        
        // Handle different subcategory structures
        if (is_array($value)) {
            // Check if this is a Painting Services style subcategory (object with images property)
            if (isset($value['images']) && is_array($value['images'])) {
                // Painting Services format: { "sub_sort_order": 1, "images": [...] }
                $subCategories[] = [
                    'id' => $subCategoryIndex,
                    'name' => $key,
                    'sub_sort_order' => isset($value['sub_sort_order']) ? $value['sub_sort_order'] : 999,
                    'images' => $value['images']
                ];
            } else {
                // Other categories format: direct array of images
                $subCategories[] = [
                    'id' => $subCategoryIndex,
                    'name' => $key,
                    'sub_sort_order' => 999, // Default sort order for categories without sub_sort_order
                    'images' => $value
                ];
            }
            $subCategoryIndex++;
        }
    }
    
    // Sort subcategories by sub_sort_order
    usort($subCategories, function($a, $b) {
        return $a['sub_sort_order'] - $b['sub_sort_order'];
    });
    
    // Add the transformed category
    $serviceData['categories'][] = [
        'id' => $categoryIndex,
        'name' => $categoryName,
        'cat_image' => isset($categoryData['cat_image']) ? $categoryData['cat_image'] : null,
        'cat_link' => isset($categoryData['cat_link']) ? $categoryData['cat_link'] : null,
        'subCategories' => $subCategories
    ];
    $categoryIndex++;
}
?>

<nav class="main-navigation">
    <div class="nav-container">
        <!-- Mobile menu toggle -->
        <button class="mobile-menu-toggle" aria-label="Toggle navigation menu">
            <span class="hamburger"></span>
            <span class="hamburger"></span>
            <span class="hamburger"></span>
        </button>
        
        <!-- Main Navigation Menu -->
        <ul class="nav-menu">
            <!-- Mobile close button -->
            <li class="mobile-close-btn">
                <button class="mobile-menu-close" aria-label="Close navigation menu">
                    <i class="fas fa-times"></i>
                </button>
            </li>
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            
            <!-- Service Categories with Dropdowns -->
            <?php foreach ($serviceData['categories'] as $category): ?>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-category="<?php echo $category['id']; ?>">
                    <?php echo htmlspecialchars($category['name']); ?>
                    <i class="fas fa-chevron-down"></i>
                </a>
                
                <!-- Dropdown Panel -->
                <div class="dropdown-panel" data-category="<?php echo $category['id']; ?>">
                    <div class="dropdown-content">
                        <!-- Sub-categories List -->
                        <div class="subcategories-list">
                            <?php if (!empty($category['cat_link'])): ?>
                            <h3><a href="<?php echo htmlspecialchars($category['cat_link']); ?>" class="category-title-link"><?php echo htmlspecialchars($category['name']); ?></a></h3>
                            <?php else: ?>
                            <h3><?php echo htmlspecialchars($category['name']); ?></h3>
                            <?php endif; ?>
                            <ul class="subcategories">
                                <?php foreach ($category['subCategories'] as $subCategory): ?>
                                <li class="subcategory-item">
                                    <?php if (!empty($category['cat_link'])): ?>
                                    <a href="<?php echo htmlspecialchars($category['cat_link']); ?>#<?php echo strtolower(str_replace([' ', ',', '&'], ['-', '', 'and'], $subCategory['name'])); ?>" 
                                       class="subcategory-link">
                                        <?php echo htmlspecialchars($subCategory['name']); ?>
                                    </a>
                                    <?php else: ?>
                                    <a href="<?php echo strtolower(str_replace([' ', '&'], ['-', 'and'], $category['name'])); ?>.php#<?php echo strtolower(str_replace([' ', ',', '&'], ['-', '', 'and'], $subCategory['name'])); ?>" 
                                       class="subcategory-link">
                                        <?php echo htmlspecialchars($subCategory['name']); ?>
                                    </a>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- Featured Image -->
                        <div class="dropdown-image">
                            <?php 
                            // Use the category image from the JSON
                            if (!empty($category['cat_image'])) {
                                echo '<img src="images/' . htmlspecialchars($category['cat_image']) . '" alt="' . htmlspecialchars($category['name']) . '">';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
            
            <li class="nav-item">
                <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- JavaScript for dropdown functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    const dropdownPanels = document.querySelectorAll('.dropdown-panel');
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileCloseBtn = document.querySelector('.mobile-menu-close');
    const navMenu = document.querySelector('.nav-menu');
    
    // Desktop dropdown functionality
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('mouseenter', function() {
            const categoryId = this.getAttribute('data-category');
            const panel = document.querySelector(`.dropdown-panel[data-category="${categoryId}"]`);
            
            // Hide all other panels
            dropdownPanels.forEach(p => p.classList.remove('active'));
            
            // Show current panel
            if (panel) {
                panel.classList.add('active');
            }
        });
    });
    
    // Hide dropdowns when mouse leaves navigation
    document.querySelector('.main-navigation').addEventListener('mouseleave', function() {
        dropdownPanels.forEach(panel => panel.classList.remove('active'));
    });
    
    // Mobile menu toggle
    mobileToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active');
        this.classList.toggle('active');
    });
    
    // Mobile menu close button
    if (mobileCloseBtn) {
        mobileCloseBtn.addEventListener('click', function() {
            navMenu.classList.remove('active');
            mobileToggle.classList.remove('active');
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.main-navigation')) {
            navMenu.classList.remove('active');
            mobileToggle.classList.remove('active');
        }
    });
});
</script>
