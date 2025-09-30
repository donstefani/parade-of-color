<?php
// Set page title for meta.php
$pageTitle = 'Parade of Color - Professional Painting & Construction Services';

// Include header
include 'common/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Professional Painting & Construction Services</h1>
            <p>Transform your space with quality workmanship and attention to detail. From interior painting to custom carpentry, Parade of Color delivers exceptional results for residential and commercial projects.</p>
            <div class="hero-buttons">
                <a href="contact.php" class="btn btn-primary">Get Free Estimate</a>
                <a href="about.php" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </div>
</section>


<!-- Main Categories Section -->
<section class="categories-section">
    <div class="section-header">
        <h2>Our Services</h2>
        <p>Professional solutions for all your painting and construction needs</p>
    </div>
    
    <div class="categories-grid">
        <!-- Painting Services -->
        <div class="category-card">
            <div class="category-image">
                <img src="images/interior_painting_1.jpg" alt="Painting Services">
            </div>
            <div class="category-content">
                <h3>Painting Services</h3>
                <p>Professional painting services for interior, exterior, commercial, and new construction projects. Quality finishes that last.</p>
            </div>
            <div class="category-cta">
                <a href="painting.php" class="learn-more-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Specialty Finishes -->
        <div class="category-card">
            <div class="category-image">
                <img src="images/deck_pergola_and_porch_re_staining_1.jpg" alt="Specialty Finishes">
            </div>
            <div class="category-content">
                <h3>Specialty Finishes</h3>
                <p>Specialty finishing services including epoxy floors, stain restoration, and custom decorative finishes.</p>
            </div>
            <div class="category-cta">
                <a href="speciality.php" class="learn-more-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Repairs & Replacement -->
        <div class="category-card">
            <div class="category-image">
                <img src="images/siding_replacement_1.jpg" alt="Repairs & Replacement">
            </div>
            <div class="category-content">
                <h3>Repairs & Replacement</h3>
                <p>Expert repair and replacement services for siding, trim, and other construction elements.</p>
            </div>
            <div class="category-cta">
                <a href="repairs.php" class="learn-more-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Carpentry & Outdoor Structures -->
        <div class="category-card">
            <div class="category-image">
                <img src="images/deck_pergola_and_patio_covers_1.jpg" alt="Carpentry & Outdoor Structures">
            </div>
            <div class="category-content">
                <h3>Carpentry & Outdoor Structures</h3>
                <p>Custom carpentry and outdoor structure construction including fences, decks, and outdoor living spaces.</p>
            </div>
            <div class="category-cta">
                <a href="carpentry-outdoors.php" class="learn-more-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
    </div> <!-- End site-container -->

    <!-- Why Choose Us Section - Full width background -->
    <section class="why-choose-section">
        <div class="why-choose-content">
            <div class="why-choose-text">
                <h2>Why Choose Parade of Colors?</h2>
                <p>At Parade of Color, we believe that every project deserves the highest level of craftsmanship and attention to detail. Our team combines years of experience with the latest techniques and premium materials to deliver results that exceed your expectations.</p>
                <p>We're not just contractors – we're your partners in transforming your space. From the initial consultation to the final walkthrough, we maintain clear communication and ensure every detail meets our high standards. Our commitment to quality and customer satisfaction has made us the trusted choice for homeowners and businesses throughout the area.</p>
                <div class="why-choose-features">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Licensed & Insured</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>15+ Years Experience</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Quality Guarantee</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Free Estimates</span>
                    </div>
                </div>
            </div>
            
            <div class="customer-review">
                <div class="review-card">
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <blockquote>
                        "Parade of Color transformed our entire home! The exterior painting job was flawless, and the team was professional, punctual, and respectful of our property. The quality of work exceeded our expectations, and we couldn't be happier with the results. Highly recommended!"
                    </blockquote>
                    <div class="review-author">
                        <div class="author-info">
                            <strong>Sarah & Mike Johnson</strong>
                            <span>Homeowners - Residential Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'common/footer.php'; ?>
