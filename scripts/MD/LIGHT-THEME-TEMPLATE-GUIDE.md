# Light Theme Template Guide

This template system is based on the **Steele Infusion case study design** and provides a consistent, professional light theme for creating new pages across the portfolio website.

## 📁 Template Files

### Core Template Files
- `light-theme-template.css` - Complete CSS framework
- `light-theme-template.html` - HTML structure template
- `light-theme-template.js` - JavaScript functionality
- `LIGHT-THEME-TEMPLATE-GUIDE.md` - This documentation

## 🎨 Design System Overview

### Color Palette
- **Primary Blue**: `#2c5aa0` (Main brand color)
- **Secondary Blue**: `#1e40af` (Darker shade)
- **Hero Gradient**: `linear-gradient(135deg, #2c5aa0 0%, #1e3a8a 50%, #1e40af 100%)`
- **Text Primary**: `#111` (Headings)
- **Text Secondary**: `#666` (Body text)
- **Background**: `#fff` (Main)
- **Background Alt**: `#f8f9fa` (Alternating sections)
- **Card Background**: `white`
- **Card Shadow**: `0 4px 24px rgba(0, 0, 0, 0.06)`

### Typography
- **Font Family**: `-apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif`
- **Hero Title**: `3rem, font-weight: 800`
- **Section Titles**: `2.5rem, font-weight: 800`
- **Card Titles**: `1.3rem, font-weight: 700`
- **Body Text**: `1rem, line-height: 1.6`

## 🚀 Quick Start

### 1. Create New Page
```bash
# Copy the template
cp light-theme-template.html "Case Studies/[Project Name]/index.html"
```

### 2. Update HTML Template
Replace these placeholders in your new HTML file:

```html
<!-- Required Updates -->
<title>[PAGE TITLE] - Case Study | Sonny Steele</title>
<meta name="description" content="[PAGE DESCRIPTION]">
<meta name="keywords" content="[PAGE KEYWORDS]">
<meta property="og:url" content="https://sonny-steele.com/[PAGE-URL]">

<!-- Hero Section -->
<h1>[PROJECT TITLE]</h1>
<p>[PROJECT DESCRIPTION - Brief overview of the project and your role]</p>

<!-- Content Sections -->
<h2>[SECTION TITLE]</h2>
<p>[SECTION DESCRIPTION]</p>
```

### 3. Link Template Files
Ensure correct paths to template files:
```html
<link rel="stylesheet" href="../../light-theme-template.css">
<script src="../../light-theme-template.js"></script>
```

## 🧩 Component System

### 1. Header Component
```html
<header>
    <nav class="container">
        <a href="../../index.html" class="logo">Sonny Steele</a>
        <div style="display: flex; align-items: center; gap: 20px;">
            <button class="theme-toggle" id="themeToggle">Light</button>
            <a href="../../index.html" class="back-link">← Back to Portfolio</a>
        </div>
    </nav>
</header>
```

### 2. Hero Section
```html
<section class="hero">
    <div class="container">
        <h1>Your Project Title</h1>
        <p>Brief project description explaining the challenge and your role.</p>
    </div>
</section>
```

### 3. Content Sections
```html
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Section Title</h2>
            <p>Section description</p>
        </div>
        <!-- Content goes here -->
    </div>
</section>
```

### 4. Highlight Cards
```html
<div class="highlights-grid">
    <div class="highlight-item">
        <div class="highlight-image">
            <img src="images/example.png" alt="Description" onclick="openModal(this)" loading="lazy">
        </div>
        <div class="highlight-content">
            <h3>Card Title</h3>
            <p>Card description explaining the feature or outcome.</p>
        </div>
    </div>
</div>
```

### 5. Process Steps
```html
<div class="process-grid">
    <div class="process-item">
        <div class="process-number">1</div>
        <h3>Process Step</h3>
        <p>Description of what happened in this step.</p>
    </div>
</div>
```

### 6. Feature Items
```html
<div class="features-grid">
    <div class="feature-item">
        <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <!-- Your icon SVG path -->
            </svg>
        </div>
        <h4>Feature Title</h4>
        <p>Feature description</p>
    </div>
</div>
```

## 🌙 Dark Theme Support

The template includes comprehensive dark theme support using GitHub's dark color palette:

### Dark Theme Colors
- **Background**: `#0d1117`
- **Text Primary**: `#f0f6fc`
- **Text Secondary**: `#8b949e`
- **Accent Blue**: `#58a6ff`
- **Card Background**: `#273C50`
- **Border**: `#21262d`

### Implementation
Dark theme is automatically applied when `[data-theme="dark"]` is set on the `<html>` element. The JavaScript handles theme toggling and persistence.

## 📱 Responsive Design

### Breakpoints
- **Desktop**: `> 768px`
- **Mobile**: `≤ 768px`

### Mobile Optimizations
- Single column layouts
- Reduced font sizes
- Adjusted padding and spacing
- Touch-friendly interactions

## 🖼️ Modal System

### Image Modal Features
- Click any image with `onclick="openModal(this)"` to open
- Keyboard navigation (Arrow keys, Escape)
- Navigation between multiple images
- Special `branding` class for larger logo images
- Responsive sizing

### Usage
```html
<img src="image.png" alt="Description" onclick="openModal(this)" loading="lazy">
```

## ⚡ JavaScript Features

### Core Functions
- `openModal(image)` - Open image in modal
- `closeModal()` - Close modal
- `nextImage()` / `prevImage()` - Navigate between modal images
- Theme toggle functionality
- Smooth scrolling for anchor links
- Intersection Observer animations

### Dynamic Content Functions
```javascript
// Add new highlight item
LightThemeTemplate.addHighlightItem(
    'images/example.png',
    'Alt text',
    'Card Title',
    'Card description',
    '.highlights-grid'
);

// Add new process step
LightThemeTemplate.addProcessItem(
    4, // Step number
    'Process Title',
    'Process description',
    '.process-grid'
);

// Add new feature
LightThemeTemplate.addFeatureItem(
    '<svg>...</svg>', // Icon SVG
    'Feature Title',
    'Feature description',
    '.features-grid'
);
```

## 🛠️ Customization

### Adding Page-Specific Styles
Add custom CSS in the `<style>` block within the HTML template:

```html
<style>
    /* Page-specific styles */
    .custom-component {
        background: #f0f0f0;
        padding: 20px;
        border-radius: 8px;
    }
    
    /* Dark theme override */
    [data-theme="dark"] .custom-component {
        background: #273C50;
    }
</style>
```

### Adding Page-Specific JavaScript
Add custom JavaScript after the template script:

```html
<script>
    // Page-specific functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Your custom code here
    });
</script>
```

## 📂 File Structure

```
/html/
├── light-theme-template.css          # Main CSS framework
├── light-theme-template.html         # HTML template
├── light-theme-template.js           # JavaScript functionality
├── LIGHT-THEME-TEMPLATE-GUIDE.md     # This guide
└── Case Studies/
    └── [Project Name]/
        ├── index.html                 # Your page (copied from template)
        └── images/                    # Project images
            ├── hero-image.png
            ├── process-1.png
            └── result-comparison.png
```

## ✅ Best Practices

### Content Structure
1. Always start with a hero section
2. Use alternating section backgrounds (automatic with `:nth-child(even)`)
3. Include descriptive alt text for all images
4. Use semantic HTML elements
5. Maintain consistent spacing with provided classes

### Image Optimization
- Use WebP format when possible
- Add `loading="lazy"` for below-the-fold images
- Provide descriptive alt text
- Use appropriate image sizes (optimize for web)

### SEO Considerations
- Update all meta tags with relevant content
- Use descriptive headings (H1, H2, H3 hierarchy)
- Include relevant keywords naturally
- Ensure fast loading times

### Accessibility
- Maintain proper heading hierarchy
- Include alt text for images
- Ensure good color contrast
- Test keyboard navigation
- Use semantic HTML elements

## 🔧 Troubleshooting

### Common Issues

**1. Template files not loading**
- Check file paths in HTML links
- Ensure files are in correct directory structure

**2. Dark theme not working**
- Verify JavaScript is loading
- Check localStorage for theme preference
- Ensure `[data-theme="dark"]` selectors are present

**3. Modal not opening**
- Verify `onclick="openModal(this)"` is on image
- Check JavaScript console for errors
- Ensure modal HTML is present

**4. Images not displaying**
- Check image paths relative to HTML file
- Verify image files exist
- Check image file permissions

## 📋 Checklist for New Pages

- [ ] Copy template HTML file
- [ ] Update all placeholder content
- [ ] Add project-specific images
- [ ] Test image modal functionality
- [ ] Verify dark/light theme toggle
- [ ] Test responsive design on mobile
- [ ] Update SEO meta tags
- [ ] Add to site navigation if needed
- [ ] Test all links and functionality

## 🎯 Template Benefits

### Consistency
- Unified design language across all pages
- Consistent component behavior
- Standardized color palette and typography

### Efficiency
- Rapid page creation
- Pre-built components
- Tested functionality

### Maintainability
- Centralized CSS and JavaScript
- Easy global updates
- Consistent structure

### Professional Quality
- Based on proven Steele Infusion design
- Responsive and accessible
- Modern web standards

---

*This template system ensures every new page maintains the professional quality and consistency of the Steele Infusion case study while providing the flexibility to customize content for each project's unique needs.*