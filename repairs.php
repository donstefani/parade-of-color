<?php
// Set page title for meta.php
$pageTitle = 'Repairs & Replacement - Parade of Color Professional Painting & Construction';

// Include header
include 'common/header.php';

renderHeader(false);

// Get the category image and subcategory images for Repairs & Replacement from services_map.json
$imageMapping = json_decode(file_get_contents('config/services_map.json'), true);
$categoryImage = $imageMapping['Repairs & Replacement']['cat_image'] ?? 'siding_replacement_1.jpg';
?>

<!-- Service Page Hero Section -->
<section class="service-hero">
    <div class="service-hero-content">
        <div class="service-hero-layout">
            <!-- Service Image -->
            <div class="service-image-container">
                <img src="images/<?php echo $categoryImage; ?>" alt="Repairs & Replacement Services" class="service-hero-image">
            </div>
            
            <!-- Service Introduction -->
            <div class="service-intro">
                <h1>Repairs & Replacement</h1>
                <div class="service-intro-text">
                    <p>Keep your property in top condition with our professional repair and replacement services. From siding replacement to trim work, we provide expert craftsmanship that restores and protects your home's exterior. Our skilled team ensures quality workmanship and lasting results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Siding Replacement Subcategory Section -->
<section class="subcategory" id="siding-replacement">
    <div class="service-content-container">
        <h2>Siding Replacement</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="siding_replacement_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    Protect and beautify your home with our professional siding replacement services. We work with a variety of siding materials to provide weather-resistant protection while enhancing your home's curb appeal.
                </p>
                <p>
                    Our siding replacement process includes proper preparation, installation, and finishing to ensure your new siding provides years of protection and maintains its appearance through all weather conditions.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Siding Replacement gallery
document.addEventListener('DOMContentLoaded', function() {
    const siding_replacement_galleryImages = [{"new_name":"siding_replacement_1.jpg","sort_order":0},{"new_name":"siding_replacement_2.jpg","sort_order":0}];
    
    if (siding_replacement_galleryImages.length > 0) {
        new ImageGallery('siding_replacement_gallery', siding_replacement_galleryImages, {
            showNavigation: true
        });
    }
});
</script>

<!-- Trim Replacement Subcategory Section -->
<section class="subcategory" id="trim-replacement">
    <div class="service-content-container">
        <h2>Trim Replacement</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="trim_replacement_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    Complete your home's exterior with our professional trim replacement services. We install and finish trim work that provides the perfect finishing touch to your home's architectural details.
                </p>
                <p>
                    Our trim replacement services include precise measurements, custom cutting, and professional installation to ensure a perfect fit and finish that complements your home's style.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Trim Replacement gallery
document.addEventListener('DOMContentLoaded', function() {
    const trim_replacement_galleryImages = [{"new_name":"trim_replacement_1.jpg","sort_order":0}];
    
    if (trim_replacement_galleryImages.length > 0) {
        new ImageGallery('trim_replacement_gallery', trim_replacement_galleryImages, {
            showNavigation: true
        });
    }
});
</script>

<!-- Services CSS -->
<link rel="stylesheet" href="/css/pages/services.css">

<!-- Gallery CSS -->
<link rel="stylesheet" href="/css/gallery.css">

<!-- Gallery JavaScript -->
<script src="/scripts/gallery.js"></script>

<?php include 'common/footer.php'; ?>
