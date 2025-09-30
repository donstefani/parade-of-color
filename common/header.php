<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Parade of Color Services'; ?></title>
    
    <!-- Include page-specific meta data -->
    <?php include 'common/meta.php'; ?>
    
    <!-- Base CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Font Awesome for icons (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Main container with max-width constraint -->
    <div class="site-container">
        <!-- Header Section -->
        <header class="site-header">
            <div class="header-content">
                <!-- Logo/Brand Area -->
                <div class="brand">
                    <h1 class="site-title">
                        <a href="index.php">Parade of Color</a>
                    </h1>
                    <p class="site-tagline"><strong>Professional Painting & Construction Services</strong></p>
                </div>
                
                <!-- Contact Info (hidden on mobile) -->
                <div class="header-contact">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>(208) 922-8618</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@paradeofcolor.com</span>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Navigation Section -->
        <?php include 'common/nav.php'; ?>
        
        <!-- Main Content Area -->
        <main class="main-content">
