# Portfolio Template System Guide

## Overview
This template system provides a consistent design framework for creating new portfolio pages that match the existing Sonny Steele portfolio aesthetic, typography, and functionality.

## File Structure
```
portfolio-template.css     # Core CSS styles and components
portfolio-template.js      # JavaScript functionality
template-system.html       # HTML template with placeholders
TEMPLATE-GUIDE.md          # This documentation
```

## Quick Start

### 1. Copy the Template
```html
<!-- Copy template-system.html and rename it -->
cp template-system.html new-project-case-study.html
```

### 2. Replace Placeholders
Search and replace these placeholders with your content:

#### Page Meta
- `[PAGE_TITLE]` → Your project name
- `[HERO_THEME_CLASS]` → hero-kasisto, hero-ottermon, hero-bravemind, etc.
- `[FOOTER_THEME_CLASS]` → footer-kasisto, footer-ottermon, etc.

#### Hero Section
- `[HERO_TITLE]` → Main project title
- `[HERO_DESCRIPTION]` → Project description paragraph

#### Sections
- `[SECTION_TITLE]` → Section heading
- `[SECTION_DESCRIPTION]` → Section description
- `[HIGHLIGHTS_TITLE]` → "Visual Design Highlights", "Platform Wireframes", etc.

#### Process Items
- `[NUMBER]` → Step number (1, 2, 3, 4)
- `[PROCESS_TITLE]` → Process step title
- `[PROCESS_DESCRIPTION]` → Process step description

#### Images & Content
- `[IMAGE_PATH]` → Path to image (images/project-name.png)
- `[IMAGE_ALT]` → Alt text for accessibility
- `[HIGHLIGHT_TITLE]` → Individual highlight title
- `[HIGHLIGHT_DESCRIPTION]` → Individual highlight description

## Available Themes

### Hero Themes
```html
<!-- Kasisto: Purple gradient -->
<section class="hero hero-kasisto">

<!-- Ottermon: Dark blue gradient -->
<section class="hero hero-ottermon">

<!-- BraveMind: Teal gradient -->
<section class="hero hero-bravemind">

<!-- HealthKarma: Light gradient -->
<section class="hero hero-healthkarma">

<!-- Generic options -->
<section class="hero hero-purple">
<section class="hero hero-blue">
<section class="hero hero-green">
<section class="hero hero-orange">
```

### Footer Themes
```html
<footer class="footer footer-kasisto">
<footer class="footer footer-ottermon">
<footer class="footer footer-bravemind">
<footer class="footer footer-healthkarma">
```

## Components Reference

### 1. Process Grid
```html
<div class="process-grid">
    <div class="process-item">
        <div class="process-number">1</div>
        <h3>Process Title</h3>
        <p>Process description...</p>
    </div>
    <!-- Repeat for more items -->
</div>
```

### 2. Highlights Grid
```html
<div class="highlights-grid">
    <div class="highlight-item">
        <div class="highlight-image">
            <img src="images/example.png" alt="Description">
        </div>
        <div class="highlight-content">
            <h3>Title</h3>
            <p>Description...</p>
        </div>
    </div>
    <!-- Repeat for more items -->
</div>
```

### 3. Features Grid
```html
<div class="features-grid">
    <div class="feature-item">
        <div class="feature-icon">🎯</div>
        <h4>Feature Title</h4>
        <p>Feature description...</p>
    </div>
    <!-- Repeat for more items -->
</div>
```

### 4. Before/After Comparison
```html
<div class="before-after-container">
    <div class="before-section">
        <div class="comparison-header">
            <span class="before">
                <span class="indicator"></span>
                Before: Old System
            </span>
        </div>
        <div class="comparison-image">
            <img src="images/before.png" alt="Before">
        </div>
        <div class="comparison-details">
            <h4>Issues:</h4>
            <ul>
                <li>Problem 1</li>
                <li>Problem 2</li>
            </ul>
        </div>
    </div>
    
    <div class="after-section">
        <div class="comparison-header">
            <span class="after">
                <span class="indicator"></span>
                After: New System
            </span>
        </div>
        <div class="comparison-image">
            <img src="images/after.png" alt="After">
        </div>
        <div class="comparison-details">
            <h4>Benefits:</h4>
            <ul>
                <li>Benefit 1</li>
                <li>Benefit 2</li>
            </ul>
        </div>
    </div>
</div>
```

## Typography Scale

### Headings
- `h1`: 3rem (48px) - Hero titles
- `h2`: 2.5rem (40px) - Section titles  
- `h3`: 1.5rem (24px) - Component titles
- `h4`: 1.2rem (19.2px) - Sub-component titles

### Body Text
- `p`: 1rem (16px) - Default paragraph text
- `.hero p`: 1.3rem (20.8px) - Hero descriptions
- `.section-title p`: 1.2rem (19.2px) - Section descriptions

## Color System

### Light Theme
- Primary text: `#111`
- Secondary text: `#666`
- Background: `#fff`
- Section alternate: `#f8f9fa`

### Dark Theme
- Primary text: `#fff`
- Secondary text: `#ccc`
- Background: `#1a1a1a`
- Section alternate: `#2d2d2d`

### Accent Colors
- Kasisto: `#667eea` to `#764ba2`
- Ottermon: `#1a1a2e` to `#0f3460`
- BraveMind: `#43cea2` to `#185a9d`
- HealthKarma: `#a8edea` to `#fed6e3`

## JavaScript Features

### Automatic Features
- Theme toggle with localStorage persistence
- Image modal functionality
- Smooth scrolling
- Scroll-based header effects
- Responsive animations

### Manual Usage
```javascript
// Apply custom theme
const portfolio = new PortfolioTemplate();
portfolio.applyProjectTheme('ottermon');

// Open modal programmatically
portfolio.openModal('images/example.png', 'Alt text');

// Animate elements in sequence
const elements = document.querySelectorAll('.animate-me');
portfolio.animateSequence(elements, 300);
```

## Best Practices

### 1. Images
- Use consistent aspect ratios within sections
- Optimize images for web (WebP when possible)
- Always include descriptive alt text
- Use the modal functionality for detailed viewing

### 2. Content Structure
- Keep section descriptions concise (1-2 sentences)
- Use 3-4 process steps maximum
- Limit features to 6 items for best visual balance
- Write benefit-focused copy

### 3. Responsive Design
- Test on mobile devices
- Use the provided responsive utilities
- Consider content hierarchy on smaller screens

### 4. Performance
- Load images lazily when possible
- Use the debounce utility for scroll events
- Minimize custom JavaScript additions

## Example Implementation

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project - Case Study | Sonny Steele</title>
    <link rel="stylesheet" href="portfolio-template.css">
</head>
<body>
    <header class="header">
        <nav class="container">
            <a href="index.html" class="logo">Sonny Steele</a>
            <div class="nav-right">
                <button class="theme-toggle" id="themeToggle">Light</button>
                <a href="index.html" class="back-link">← Back to Portfolio</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero hero-purple">
            <div class="container">
                <h1>My Amazing Project</h1>
                <p>A revolutionary approach to solving complex user problems through thoughtful design and innovative solutions.</p>
            </div>
        </section>

        <!-- Add your sections here -->
    </main>

    <footer class="footer footer-purple">
        <div class="container">
            <h3>Ready to discuss your project?</h3>
            <p>Let's create something amazing together.</p>
            <a href="index.html#contact" class="footer-link">Get in touch →</a>
        </div>
    </footer>

    <div class="modal" id="imageModal">
        <div class="modal-content">
            <button class="modal-close" id="modalClose">&times;</button>
            <img class="modal-image" id="modalImage" src="" alt="">
        </div>
    </div>

    <script src="portfolio-template.js"></script>
</body>
</html>
```

## Troubleshooting

### Common Issues
1. **Images not clickable**: Ensure images are inside `.highlight-image`, `.comparison-image`, or similar containers
2. **Theme not persisting**: Check that `themeToggle` ID exists and JavaScript is loaded
3. **Styles not applying**: Verify CSS file is properly linked and path is correct
4. **Modal not working**: Ensure modal HTML structure is complete and JavaScript is loaded

### Browser Support
- Modern browsers (Chrome 88+, Firefox 85+, Safari 14+)
- CSS Grid and Flexbox support required
- ES6+ JavaScript features used

This template system ensures consistency across all portfolio pages while allowing for project-specific customization and theming.