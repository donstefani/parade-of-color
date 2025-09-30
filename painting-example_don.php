<?php
// Set page title for meta.php
$pageTitle = 'Painting Services - Parade of Color Professional Painting & Construction';

// Include header
include 'common/header.php';

// Get the category image for Painting Services from image_name_mapping.json
$imageMapping = json_decode(file_get_contents('../storage/image_name_mapping.json'), true);
$categoryImage = $imageMapping['Painting Services']['cat_image'] ?? 'interior_painting_1.jpg';
?>

<!-- Service Page Hero Section -->
<section class="service-hero">
    <div class="service-hero-content">
        <div class="service-hero-layout">
            <!-- Service Image -->
            <div class="service-image-container">
                <img src="images/<?php echo $categoryImage; ?>" alt="Professional Painting Services" class="service-hero-image">
            </div>
            
            <!-- Service Introduction -->
            <div class="service-intro">
                <h1>Professional Painting Services</h1>
                <div class="service-intro-text">
                    <p>Transform your space with Parade of Color's professional painting services. With over 15 years of experience, we specialize in interior painting, exterior painting, commercial painting, and new construction projects. Our skilled team uses premium materials and proven techniques to deliver exceptional results that enhance your property's beauty and value.</p>
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
            <h2>Painting Service Details Coming Soon</h2>
            <p>Detailed information about our painting services will be added here, including:</p>
            <ul style="text-align: left; max-width: 600px; margin: 0 auto; color: #666;">
                <li>Interior Painting Services</li>
                <li>Exterior Painting Services</li>
                <li>Commercial Painting Projects</li>
                <li>New Construction Painting</li>
                <li>Process & Timeline</li>
                <li>Materials & Techniques</li>
            </ul>
        </div>
    </div>
</section>

<?php include 'common/footer.php'; ?>
