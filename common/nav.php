<?php
// Load service taxonomy data
$serviceData = json_decode(file_get_contents('config/service_taxonomy.json'), true);
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
                            <h3><?php echo htmlspecialchars($category['name']); ?></h3>
                            <ul class="subcategories">
                                <?php foreach ($category['subCategories'] as $subCategory): ?>
                                <li class="subcategory-item">
                                    <a href="<?php echo strtolower(str_replace([' ', '&'], ['-', 'and'], $category['name'])); ?>.php#<?php echo strtolower(str_replace([' ', ',', '&'], ['-', '', 'and'], $subCategory['name'])); ?>" 
                                       class="subcategory-link">
                                        <?php echo htmlspecialchars($subCategory['name']); ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- Featured Image -->
                        <div class="dropdown-image">
                            <?php 
                            // Get first image from first sub-category
                            $firstSubCategory = $category['subCategories'][0];
                            if (!empty($firstSubCategory['images'])) {
                                $firstImage = $firstSubCategory['images'][0];
                                echo '<img src="images/' . htmlspecialchars($firstImage['name']) . '" alt="' . htmlspecialchars($firstSubCategory['name']) . '">';
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
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.main-navigation')) {
            navMenu.classList.remove('active');
            mobileToggle.classList.remove('active');
        }
    });
});
</script>
