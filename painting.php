<?php
// Set page title for meta.php
$pageTitle = 'Painting Services - Parade of Color Professional Painting & Construction';

// Include header
include 'common/header.php';

renderHeader(false);

// Get the category image and subcategory images for Painting Services from image_name_mapping.json
$imageMapping = json_decode(file_get_contents('config/services_map.json'), true);
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


<!-- Exterior Painting Subcategory Section -->
<section class="subcategory" id="exterior-painting">
    <div class="service-content-container">
        <h2>Exterior Painting</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="exterior_painting_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    <!-- Add your descriptive content here for Exterior Painting -->
                    This is placeholder content for Exterior Painting. Replace this with your actual service description.
                </p>
                <p>
                    <!-- Add additional descriptive content here -->
                    Additional details about Exterior Painting services can be added here.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Exterior Painting gallery
document.addEventListener('DOMContentLoaded', function() {
    const exterior_painting_galleryImages = [{"new_name":"exterior_painting_1.jpg","sort_order":0},{"new_name":"exterior_painting_2.jpg","sort_order":0},{"new_name":"exterior_painting_3.jpg","sort_order":0},{"new_name":"exterior_painting_4.jpg","sort_order":0},{"new_name":"exterior_painting_5.jpg","sort_order":0},{"new_name":"exterior_painting_6.jpg","sort_order":0},{"new_name":"exterior_painting_7.jpg","sort_order":0}];
    
    if (exterior_painting_galleryImages.length > 0) {
        new ImageGallery('exterior_painting_gallery', exterior_painting_galleryImages, {
            showNavigation: true
        });
    }
});
</script>


<!-- Interior Painting Subcategory Section -->
<section class="subcategory" id="interior-painting">
    <div class="service-content-container">
        <h2>Interior Painting</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="interior_painting_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    <!-- Add your descriptive content here for Interior Painting -->
                    This is placeholder content for Interior Painting. Replace this with your actual service description.
                </p>
                <p>
                    <!-- Add additional descriptive content here -->
                    Additional details about Interior Painting services can be added here.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Interior Painting gallery
document.addEventListener('DOMContentLoaded', function() {
    const interior_painting_galleryImages = [{"new_name":"interior_painting_1.jpg","sort_order":0},{"new_name":"interior_painting_2.jpg","sort_order":0},{"new_name":"interior_painting_3.jpg","sort_order":0},{"new_name":"interior_painting_4.jpg","sort_order":0},{"new_name":"interior_painting_5.jpg","sort_order":0},{"new_name":"interior_painting_6.jpg","sort_order":0},{"new_name":"interior_painting_7.jpg","sort_order":0},{"new_name":"interior_painting_8.jpg","sort_order":0}];
    
    if (interior_painting_galleryImages.length > 0) {
        new ImageGallery('interior_painting_gallery', interior_painting_galleryImages, {
            showNavigation: true
        });
    }
});
</script>


<!-- Commercial Painting Subcategory Section -->
<section class="subcategory" id="commercial-painting">
    <div class="service-content-container">
        <h2>Commercial Painting</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="commercial_painting_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    <!-- Add your descriptive content here for Commercial Painting -->
                    This is placeholder content for Commercial Painting. Replace this with your actual service description.
                </p>
                <p>
                    <!-- Add additional descriptive content here -->
                    Additional details about Commercial Painting services can be added here.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Commercial Painting gallery
document.addEventListener('DOMContentLoaded', function() {
    const commercial_painting_galleryImages = [{"new_name":"commercial_painting_1.jpg","sort_order":0},{"new_name":"commercial_painting_2.jpg","sort_order":0},{"new_name":"commercial_painting_3.jpg","sort_order":0},{"new_name":"commercial_painting_4.jpg","sort_order":0}];
    
    if (commercial_painting_galleryImages.length > 0) {
        new ImageGallery('commercial_painting_gallery', commercial_painting_galleryImages, {
            showNavigation: true
        });
    }
});
</script>


<!-- New Construction Painting Subcategory Section -->
<section class="subcategory" id="new-construction-painting">
    <div class="service-content-container">
        <h2>New Construction Painting</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="new_construction_painting_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    <!-- Add your descriptive content here for New Construction Painting -->
                    This is placeholder content for New Construction Painting. Replace this with your actual service description.
                </p>
                <p>
                    <!-- Add additional descriptive content here -->
                    Additional details about New Construction Painting services can be added here.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the New Construction Painting gallery
document.addEventListener('DOMContentLoaded', function() {
    const new_construction_painting_galleryImages = [{"new_name":"new_construction_painting_1.jpg","sort_order":0},{"new_name":"new_construction_painting_2.jpg","sort_order":0}];
    
    if (new_construction_painting_galleryImages.length > 0) {
        new ImageGallery('new_construction_painting_gallery', new_construction_painting_galleryImages, {
            showNavigation: true
        });
    }
});
</script>

<!-- Gallery JavaScript -->
<script src="scripts/gallery.js"></script>


<?php include 'common/footer.php'; ?>
