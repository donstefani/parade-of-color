<?php
// Set page title for meta.php
$pageTitle = 'Service Category Name - Parade of Color Professional Services';

// Include header
include 'common/header.php';

// Get the category image from image_name_mapping.json
$imageMapping = json_decode(file_get_contents('../storage/image_name_mapping.json'), true);
// Replace 'Service Category Name' with the actual category name
$categoryImage = $imageMapping['Service Category Name']['cat_image'] ?? 'default_service_image.jpg';
?>

<!-- Service Page Hero Section -->
<section class="service-hero">
    <div class="service-hero-content">
        <div class="service-hero-layout">
            <!-- Service Image -->
            <div class="service-image-container">
                <img src="images/<?php echo $categoryImage; ?>" alt="Service Category" class="service-hero-image">
            </div>
            
            <!-- Service Introduction -->
            <div class="service-intro">
                <h1>Service Category Name</h1>
                <div class="service-intro-text">
                    <p>This is where your SEO-optimized introductory paragraph will go. It should provide a comprehensive overview of the service category, highlighting key benefits, expertise areas, and what makes Parade of Color the right choice for this type of work. Include relevant keywords naturally while maintaining readability and providing value to potential customers.</p>
                    
                    <p>You can add additional paragraphs here to expand on the service details, process, or benefits. This content will help with search engine optimization while providing visitors with the information they need to understand your capabilities in this service area.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Content Section (placeholder for future content) -->
<section class="service-content">
    <div class="service-content-container">
        <!-- This is where we'll add the category/subcategory content later -->
        <div class="placeholder-content">
            <h2>Service Details Coming Soon</h2>
            <p>Detailed information about this service category will be added here, including subcategories, pricing, process, and more.</p>
        </div>
    </div>
</section>

<?php include 'common/footer.php'; ?>
