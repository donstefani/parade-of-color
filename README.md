# Parade of Color - Professional Painting & Construction Services Website

## Technology Stack Overview

This is a traditional server-side rendered PHP website for Parade of Color, a professional painting and construction services business.

### Backend Technologies
- **PHP 7.4+** - Server-side scripting language
- **PDO (PHP Data Objects)** - Database abstraction layer for secure MySQL connections
- **MySQL** - Database management system (hosted on donstefani.com)
- **Server-side rendering** - Traditional PHP templating with includes

### Frontend Technologies
- **HTML5** - Semantic markup with modern standards
- **CSS3** - Custom responsive styling with:
  - Flexbox and Grid layouts
  - Mobile-first responsive design
  - CSS custom properties (variables)
  - Smooth animations and transitions
- **Vanilla JavaScript** - Client-side interactivity
- **Font Awesome 6.0** - Icon library for UI elements

### Architecture & Structure
- **Modular PHP includes** - Reusable components (header, footer, nav, meta)
- **Service-based organization** - Separate pages for different service categories
- **JSON configuration** - Service taxonomy and image mapping stored in JSON files
- **Static asset management** - Organized image galleries by service type

### Key Features
- **Responsive Design** - Mobile-first approach with breakpoints
- **Service Showcase** - Four main categories:
  - Painting Services (interior, exterior, commercial, new construction)
  - Specialty Finishes (epoxy floors, stain restoration)
  - Repairs & Replacement (siding, trim)
  - Carpentry & Outdoor Structures (fences, decks, pergolas)
- **Portfolio Galleries** - Image showcases for each service category
- **Contact Forms** - Lead generation and customer inquiries
- **SEO Optimization** - Proper meta tags and semantic HTML structure

### File Organization
```
site/
├── common/           # Reusable PHP components
│   ├── header.php    # Site header with navigation
│   ├── footer.php    # Site footer
│   ├── nav.php       # Navigation menu
│   └── meta.php      # SEO meta tags
├── config/           # Configuration files
│   ├── database.php  # PDO database wrapper class
│   ├── dbConfig.php  # Database connection settings
│   └── service_taxonomy.json # Service categories and images
├── css/              # Stylesheets
│   └── style.css     # Main stylesheet
├── images/           # Portfolio images organized by service
├── *.php            # Service pages and main site pages
└── README.md        # This file
```

### Database Configuration
- **Host**: donstefani.com
- **Database**: dstefani_castillo
- **Connection**: Secure PDO with prepared statements
- **Error Handling**: Comprehensive exception handling and logging

### Development Notes
- Uses `.gitignore` to exclude sensitive configuration files
- Images are organized by service category for easy management
- Service taxonomy is managed through JSON configuration files
- Responsive design tested across multiple device sizes
- SEO-friendly URL structure and meta tag implementation

### Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive design
- Progressive enhancement approach
- Graceful degradation for older browsers

---

*This website serves as a professional showcase for Parade of Color's painting and construction services, featuring a clean, modern design with comprehensive service information and portfolio galleries.*
