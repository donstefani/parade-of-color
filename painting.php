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
                    Protect and enhance your home's exterior with our professional exterior painting services. We use premium exterior paints and proven techniques to provide weather-resistant protection while dramatically improving your home's curb appeal and value.
                </p>
                <p>
                    Our exterior painting process includes thorough surface preparation, primer application, and multiple coats of high-quality paint to ensure lasting protection against the elements. We work with all exterior surfaces including wood, stucco, brick, and metal siding.
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
                    Transform your living spaces with our expert interior painting services. We specialize in creating beautiful, lasting finishes that reflect your personal style while using low-VOC paints for a healthier indoor environment.
                </p>
                <p>
                    Our interior painting services include detailed surface preparation, color consultation, and precision application techniques. We handle everything from single rooms to complete home makeovers, ensuring clean lines and professional results.
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
                    Maintain your business's professional appearance with our commercial painting services. We understand the importance of minimal disruption to your operations and work efficiently to complete projects on time and within budget.
                </p>
                <p>
                    Our commercial painting services include office buildings, retail spaces, warehouses, and other commercial properties. We use commercial-grade paints and follow all safety protocols to ensure a professional finish that enhances your business image.
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
                    Complete your new construction project with our professional new construction painting services. We work closely with builders and contractors to ensure timely completion and seamless integration with your construction timeline.
                </p>
                <p>
                    Our new construction painting includes both interior and exterior work, from primer application to final finish coats. We ensure proper surface preparation and use appropriate paints for new construction materials to provide lasting protection and beauty.
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
