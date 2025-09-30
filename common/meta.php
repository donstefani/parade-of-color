<?php
// Default meta data
$defaultMeta = [
    'description' => 'Professional painting and construction services by Parade of Color. Quality workmanship for residential and commercial projects.',
    'keywords' => 'painting, construction, carpentry, repairs, exterior painting, interior painting, commercial painting',
    'author' => 'Parade of Color',
    'og:title' => 'Parade of Color Services',
    'og:description' => 'Professional painting and construction services by Parade of Color.',
    'og:type' => 'website',
    'og:url' => 'https://paradeofcolor.com',
    'og:image' => 'images/parade-of-color.jpg'
];

// Page-specific meta data
$pageMeta = [
    'index' => [
        'title' => 'Parade of Color - Professional Painting & Construction Services',
        'description' => 'Parade of Color provides professional painting, carpentry, and construction services. Quality workmanship for residential and commercial projects.',
        'keywords' => 'painting services, construction, carpentry, home improvement, exterior painting, interior painting'
    ],
    'painting' => [
        'title' => 'Painting Services - Parade of Color',
        'description' => 'Professional painting services including interior, exterior, commercial, and new construction painting. Quality workmanship guaranteed.',
        'keywords' => 'interior painting, exterior painting, commercial painting, new construction painting, house painting'
    ],
    'speciality' => [
        'title' => 'Specialty Finishes - Parade of Color',
        'description' => 'Specialty finishing services including epoxy floors, stain restoration, deck staining, and custom finishes.',
        'keywords' => 'epoxy floors, stain restoration, deck staining, specialty finishes, cabinet restoration'
    ],
    'repairs' => [
        'title' => 'Repairs & Replacement - Parade of Color',
        'description' => 'Professional repair and replacement services for siding, trim, and other construction elements.',
        'keywords' => 'siding replacement, trim replacement, home repairs, construction repairs'
    ],
    'carpentry-outdoors' => [
        'title' => 'Carpentry & Outdoor Structures - Parade of Color',
        'description' => 'Custom carpentry and outdoor structure construction including fences, decks, and outdoor living spaces.',
        'keywords' => 'carpentry, outdoor structures, fence construction, deck building, custom woodwork'
    ],
    'about' => [
        'title' => 'About Us - Parade of Color',
        'description' => 'Learn about Parade of Color\'s commitment to quality workmanship and customer satisfaction in painting and construction services.',
        'keywords' => 'about parade of color, construction company, painting contractor, quality workmanship'
    ],
    'contact' => [
        'title' => 'Contact Us - Parade of Color',
        'description' => 'Contact Parade of Color for your painting and construction needs. Free estimates and professional service.',
        'keywords' => 'contact parade of color, free estimate, construction quote, painting quote'
    ]
];

// Get current page name
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$currentMeta = isset($pageMeta[$currentPage]) ? $pageMeta[$currentPage] : [];

// Merge with defaults
$meta = array_merge($defaultMeta, $currentMeta);
?>

<!-- Meta Tags -->
<meta name="description" content="<?php echo htmlspecialchars($meta['description']); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($meta['keywords']); ?>">
<meta name="author" content="<?php echo htmlspecialchars($meta['author']); ?>">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="<?php echo htmlspecialchars($meta['og:title']); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta['og:description']); ?>">
<meta property="og:type" content="<?php echo htmlspecialchars($meta['og:type']); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($meta['og:url']); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($meta['og:image']); ?>">

<!-- Additional Meta Tags -->
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
