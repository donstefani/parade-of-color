<?php
// Set page title for meta.php
$pageTitle = 'Specialty Finishes - Parade of Color Professional Painting & Construction';

// Include header
include 'common/header.php';

renderHeader(false);

// Get the category image and subcategory images for Specialty Finishes from services_map.json
$imageMapping = json_decode(file_get_contents('config/services_map.json'), true);
$categoryImage = $imageMapping['Specialty Finishes']['cat_image'] ?? 'deck_pergola_and_porch_re_staining_1.jpg';
?>

<!-- Service Page Hero Section -->
<section class="service-hero">
    <div class="service-hero-content">
        <div class="service-hero-layout">
            <!-- Service Image -->
            <div class="service-image-container">
                <img src="images/<?php echo $categoryImage; ?>" alt="Specialty Finishes" class="service-hero-image">
            </div>
            
            <!-- Service Introduction -->
            <div class="service-intro">
                <h1>Specialty Finishes</h1>
                <div class="service-intro-text">
                    <p>Enhance your space with our specialty finish services. From deck and porch restoration to epoxy floors and cabinet refinishing, we provide expert craftsmanship that transforms and protects your surfaces. Our attention to detail and premium materials ensure lasting beauty and durability.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Deck, Pergola, and Porch Re-Staining Subcategory Section -->
<section class="subcategory" id="deck-pergola-and-porch-re-staining">
    <div class="service-content-container">
        <h2>Deck, Pergola, and Porch Re-Staining</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="deck_pergola_and_porch_re_staining_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    Restore and protect your outdoor wooden structures with our professional re-staining services. We specialize in deck, pergola, and porch restoration that brings new life to weathered wood while providing long-lasting protection against the elements.
                </p>
                <p>
                    Our process includes thorough cleaning, sanding, and application of premium stains that enhance the natural beauty of your wood while providing superior weather resistance.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Deck, Pergola, and Porch Re-Staining gallery
document.addEventListener('DOMContentLoaded', function() {
    const deck_pergola_and_porch_re_staining_galleryImages = [{"new_name":"deck_pergola_and_porch_re_staining_1.jpg","sort_order":0},{"new_name":"deck_pergola_and_porch_re_staining_2.jpg","sort_order":0},{"new_name":"deck_pergola_and_porch_re_staining_3.jpg","sort_order":0},{"new_name":"deck_pergola_and_porch_re_staining_4.jpg","sort_order":0}];
    
    if (deck_pergola_and_porch_re_staining_galleryImages.length > 0) {
        new ImageGallery('deck_pergola_and_porch_re_staining_gallery', deck_pergola_and_porch_re_staining_galleryImages, {
            showNavigation: true
        });
    }
});
</script>

<!-- Epoxy Floors Subcategory Section -->
<section class="subcategory" id="epoxy-floors">
    <div class="service-content-container">
        <h2>Epoxy Floors</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="epoxy_floors_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    Transform your floors with our durable epoxy floor coatings. Perfect for garages, basements, and commercial spaces, epoxy floors provide a seamless, easy-to-clean surface that resists stains, chemicals, and heavy traffic.
                </p>
                <p>
                    We offer a variety of finishes and colors to match your aesthetic preferences while providing maximum durability and protection for your investment.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Epoxy Floors gallery
document.addEventListener('DOMContentLoaded', function() {
    const epoxy_floors_galleryImages = [{"new_name":"epoxy_floors_1.jpg","sort_order":0},{"new_name":"epoxy_floors_2.jpg","sort_order":0},{"new_name":"epoxy_floors_3.jpg","sort_order":0}];
    
    if (epoxy_floors_galleryImages.length > 0) {
        new ImageGallery('epoxy_floors_gallery', epoxy_floors_galleryImages, {
            showNavigation: true
        });
    }
});
</script>

<!-- Stain Restoration - Cabinets Subcategory Section -->
<section class="subcategory" id="stain-restoration-cabinets">
    <div class="service-content-container">
        <h2>Stain Restoration - Cabinets</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="stain_restoration_cabinets_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    Breathe new life into your kitchen and bathroom cabinets with our professional stain restoration services. We carefully restore the original beauty of your wooden cabinets while protecting them for years to come.
                </p>
                <p>
                    Our restoration process includes thorough cleaning, sanding, and application of premium stains that enhance the wood grain and provide lasting protection against daily wear and moisture.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Stain Restoration - Cabinets gallery
document.addEventListener('DOMContentLoaded', function() {
    const stain_restoration_cabinets_galleryImages = [{"new_name":"stain_restoration___cabinets_1.jpg","sort_order":0},{"new_name":"stain_restoration___cabinets_2.jpg","sort_order":0},{"new_name":"stain_restoration___cabinets_3.jpg","sort_order":0},{"new_name":"stain_restoration___cabinets_4.jpg","sort_order":0},{"new_name":"stain_restoration___cabinets_5.jpg","sort_order":0},{"new_name":"stain_restoration___cabinets_6.jpg","sort_order":0},{"new_name":"stain_restoration___cabinets_7.jpg","sort_order":0}];
    
    if (stain_restoration_cabinets_galleryImages.length > 0) {
        new ImageGallery('stain_restoration_cabinets_gallery', stain_restoration_cabinets_galleryImages, {
            showNavigation: true
        });
    }
});
</script>

<!-- Stain Restoration - Doors Subcategory Section -->
<section class="subcategory" id="stain-restoration-doors">
    <div class="service-content-container">
        <h2>Stain Restoration - Doors</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="stain_restoration_doors_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    Restore the beauty and protection of your wooden doors with our professional stain restoration services. Whether interior or exterior doors, we bring back their original luster while providing superior weather protection.
                </p>
                <p>
                    Our door restoration process ensures proper preparation, stain application, and finishing to achieve professional results that enhance your home's curb appeal and interior aesthetics.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Stain Restoration - Doors gallery
document.addEventListener('DOMContentLoaded', function() {
    const stain_restoration_doors_galleryImages = [{"new_name":"stain_restoration___doors_1.jpg","sort_order":0},{"new_name":"stain_restoration___doors_2.jpg","sort_order":0},{"new_name":"stain_restoration___doors_3.jpg","sort_order":0},{"new_name":"stain_restoration___doors_4.jpg","sort_order":0},{"new_name":"stain_restoration___doors_5.jpg","sort_order":0}];
    
    if (stain_restoration_doors_galleryImages.length > 0) {
        new ImageGallery('stain_restoration_doors_gallery', stain_restoration_doors_galleryImages, {
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
