<?php
// Set page title for meta.php
$pageTitle = 'Carpentry & Outdoor Structures - Parade of Color Professional Painting & Construction';

// Include header
include 'common/header.php';

renderHeader(false);

// Get the category image and subcategory images for Carpentry & Outdoor Structures from services_map.json
$imageMapping = json_decode(file_get_contents('config/services_map.json'), true);
$categoryImage = $imageMapping['Carpentry & Outdoor Structures']['cat_image'] ?? 'deck_pergola_and_patio_covers_1.jpg';
?>

<!-- Service Page Hero Section -->
<section class="service-hero">
    <div class="service-hero-content">
        <div class="service-hero-layout">
            <!-- Service Image -->
            <div class="service-image-container">
                <img src="images/<?php echo $categoryImage; ?>" alt="Carpentry & Outdoor Structures" class="service-hero-image">
            </div>
            
            <!-- Service Introduction -->
            <div class="service-intro">
                <h1>Carpentry & Outdoor Structures</h1>
                <div class="service-intro-text">
                    <p>Enhance your outdoor living space with our professional carpentry and outdoor structure services. From custom deck construction to fence building, we create durable, beautiful structures that extend your living space and add value to your property.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wood Fence Construction Subcategory Section -->
<section class="subcategory" id="wood-fence-construction">
    <div class="service-content-container">
        <h2>Wood Fence Construction</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="wood_fence_construction_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    Secure and beautify your property with our professional wood fence construction services. We build custom fences that provide privacy, security, and aesthetic appeal while standing up to the elements.
                </p>
                <p>
                    Our fence construction process includes proper planning, quality materials, and expert installation to ensure your fence provides years of reliable service and maintains its appearance.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Wood Fence Construction gallery
document.addEventListener('DOMContentLoaded', function() {
    const wood_fence_construction_galleryImages = [{"new_name":"wood_fence_construction_1.jpg","sort_order":0}];
    
    if (wood_fence_construction_galleryImages.length > 0) {
        new ImageGallery('wood_fence_construction_gallery', wood_fence_construction_galleryImages, {
            showNavigation: true
        });
    }
});
</script>

<!-- Deck, Pergola, and Patio Covers Subcategory Section -->
<section class="subcategory" id="deck-pergola-and-patio-covers">
    <div class="service-content-container">
        <h2>Deck, Pergola, and Patio Covers</h2>
        <div class="subcategory-content">
            <div class="subcategory-image">
                <div id="deck_pergola_and_patio_covers_gallery"></div>
            </div>
            <div class="subcategory-text">
                <p>
                    Create the perfect outdoor living space with our custom deck, pergola, and patio cover construction services. We design and build structures that enhance your outdoor experience while providing shade and protection.
                </p>
                <p>
                    Our outdoor structure construction includes detailed planning, quality materials, and expert craftsmanship to create beautiful, functional spaces that complement your home and lifestyle.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// Initialize the Deck, Pergola, and Patio Covers gallery
document.addEventListener('DOMContentLoaded', function() {
    const deck_pergola_and_patio_covers_galleryImages = [{"new_name":"deck_pergola_and_patio_covers_1.jpg","sort_order":0},{"new_name":"deck_pergola_and_patio_covers_2.jpg","sort_order":0},{"new_name":"deck_pergola_and_patio_covers_3.jpg","sort_order":0},{"new_name":"deck_pergola_and_patio_covers_4.jpg","sort_order":0},{"new_name":"deck_pergola_and_patio_covers_5.jpg","sort_order":0}];
    
    if (deck_pergola_and_patio_covers_galleryImages.length > 0) {
        new ImageGallery('deck_pergola_and_patio_covers_gallery', deck_pergola_and_patio_covers_galleryImages, {
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
