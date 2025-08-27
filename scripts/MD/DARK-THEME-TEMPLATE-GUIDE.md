# Dark Theme Template Guide

This template system provides a comprehensive GitHub-inspired dark theme for creating new pages across the portfolio website. It follows the same principles as the light theme template but with a professional dark aesthetic.

## 📁 Template Files

### Core Template Files
- `dark-theme-template.css` - Complete dark CSS framework
- `dark-theme-template.html` - HTML structure template with dark theme defaults
- `dark-theme-template.js` - JavaScript functionality with dark theme enhancements
- `DARK-THEME-TEMPLATE-GUIDE.md` - This documentation

## 🎨 Dark Theme Design System

### Color Palette (GitHub-Inspired)
- **Primary Background**: `#0d1117` (Main dark background)
- **Secondary Background**: `#21262d` (Alternating sections)
- **Card Background**: `#273C50` (Your preferred card color)
- **Border Color**: `#30363d` (Subtle borders)
- **Text Primary**: `#f0f6fc` (Main text color)
- **Text Secondary**: `#8b949e` (Secondary text)
- **Accent Blue**: `#58a6ff` (Links, headings, highlights)
- **Accent Hover**: `#79c0ff` (Hover states)
- **Success Green**: `#39d353` (Highlight boxes)

### Typography
- **Font Family**: `-apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif`
- **Hero Title**: `3rem, font-weight: 800, color: #58a6ff`
- **Section Titles**: `2.5rem, font-weight: 800, color: #58a6ff`
- **Card Titles**: `1.3rem, font-weight: 700, color: #f0f6fc`
- **Body Text**: `1rem, line-height: 1.6, color: #8b949e`

### Visual Effects
- **Card Hover**: Subtle lift with blue glow
- **Process Numbers**: Glow effect on hover
- **Feature Icons**: Pulse animation on hover
- **Background**: Subtle radial gradients for depth
- **Shadows**: Enhanced for dark theme visibility

## 🚀 Quick Start

### 1. Create New Dark Theme Page
```bash
# Copy the template
cp dark-theme-template.html "Case Studies/[Project Name]/index.html"
```

### 2. Update HTML Template
The template starts in dark mode by default (`data-theme="dark"` on html element):

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
<link rel="stylesheet" href="../../dark-theme-template.css">
<script src="../../dark-theme-template.js"></script>
```

## 🧩 Dark Theme Component System

### 1. Header Component
```html
<header>
    <nav class="container">
        <a href="../../index.html" class="logo">Sonny Steele</a>
        <div style="display: flex; align-items: center; gap: 20px;">
            <button class="theme-toggle" id="themeToggle">Dark</button>
            <a href="../../index.html" class="back-link">← Back to Portfolio</a>
        </div>
    </nav>
</header>
```

### 2. Hero Section (Dark Mode)
```html
<section class="hero">
    <div class="container">
        <h1>Your Project Title</h1>
        <p>Brief project description explaining the challenge and your role.</p>
    </div>
</section>
```

### 3. Problem Statement (Dark Theme Specific)
```html
<div class="problem-statement">
    <h3>Problem Statement</h3>
    <p>Detailed description of the core problem with dark theme styling.</p>
</div>
```

### 4. Highlight Box (Dark Theme Special)
```html
<div class="highlight-box">
    <h3>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <!-- Icon SVG -->
        </svg>
        Key Insight Title
    </h3>
    <p>Important insight or accomplishment that deserves special attention.</p>
</div>
```

### 5. Stats Grid (Dark Theme)
```html
<div class="stats-grid">
    <div class="stat-item">
        <h3>95%</h3>
        <p>User Satisfaction</p>
    </div>
    <div class="stat-item">
        <h3>40%</h3>
        <p>Performance Increase</p>
    </div>
    <div class="stat-item">
        <h3>3x</h3>
        <p>Faster Workflow</p>
    </div>
</div>
```

### 6. Callout Box
```html
<div class="callout-box">
    <h3>Design Challenge</h3>
    <p>Specific challenge or constraint that required creative solution.</p>
</div>
```

## 🌙 Dark Theme Specific Features

### Enhanced Visual Effects
- **Glow Effects**: Process numbers and buttons have subtle glow on hover
- **Pulse Animations**: Feature icons pulse when hovered
- **Blue Accents**: Strategic use of #58a6ff for visual hierarchy
- **Depth**: Multiple background layers create visual depth
- **Shadows**: Enhanced shadows for better component separation

### Dark Theme Colors in Detail
```css
/* Primary Colors */
--dark-bg-primary: #0d1117;
--dark-bg-secondary: #21262d;
--dark-bg-tertiary: #273C50;

/* Text Colors */
--dark-text-primary: #f0f6fc;
--dark-text-secondary: #8b949e;
--dark-text-accent: #58a6ff;

/* Border and UI */
--dark-border: #30363d;
--dark-border-muted: #21262d;

/* Status Colors */
--dark-success: #39d353;
--dark-warning: #d29922;
--dark-error: #f85149;
```

## 📱 Dark Theme Responsive Design

### Mobile Optimizations
- Adjusted contrast ratios for mobile screens
- Enhanced touch targets in dark mode
- Optimized text sizes for readability
- Reduced motion for battery conservation

### Accessibility Features
- High contrast ratios (WCAG AA compliant)
- Enhanced focus indicators
- Reduced motion support
- Screen reader optimized structure

## 🛠️ Dark Theme Customization

### Adding Page-Specific Dark Styles
```html
<style>
    /* Dark theme specific styles */
    .custom-dark-component {
        background: #273C50;
        border: 1px solid #30363d;
        color: #f0f6fc;
    }
    
    .custom-dark-component:hover {
        background: #1e2f42;
        box-shadow: 0 0 20px rgba(88, 166, 255, 0.2);
    }
    
    /* Light theme fallback (if supporting theme switching) */
    [data-theme="light"] .custom-dark-component {
        background: white;
        border: 1px solid #eee;
        color: #333;
    }
</style>
```

### Dark Theme JavaScript Enhancements
```javascript
// Dark theme specific animations
document.addEventListener('DOMContentLoaded', function() {
    // Add glow effects to important elements
    const importantElements = document.querySelectorAll('.highlight-item');
    importantElements.forEach(el => {
        el.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 8px 32px rgba(88, 166, 255, 0.2)';
        });
        
        el.addEventListener('mouseleave', function() {
            this.style.boxShadow = 'none';
        });
    });
});
```

## 🔧 Dark Theme Components Reference

### Cards and Containers
```html
<!-- Standard Card -->
<div class="card">
    <h3>Card Title</h3>
    <p>Card content with proper dark theme styling.</p>
</div>

<!-- Highlight Card with Image -->
<div class="highlight-item">
    <div class="highlight-image">
        <img src="image.png" alt="Description" onclick="openModal(this)">
    </div>
    <div class="highlight-content">
        <h3>Feature Title</h3>
        <p>Feature description.</p>
    </div>
</div>
```

### Process Steps
```html
<div class="process-grid">
    <div class="process-item">
        <div class="process-number">1</div>
        <h3>Research</h3>
        <p>Understanding user needs and business requirements.</p>
    </div>
</div>
```

### Feature Items
```html
<div class="features-grid">
    <div class="feature-item">
        <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24">
                <!-- Icon path -->
            </svg>
        </div>
        <h4>Feature Name</h4>
        <p>Feature description.</p>
    </div>
</div>
```

### Interactive Elements
```html
<!-- Button -->
<button class="button">Primary Action</button>
<button class="button-outline">Secondary Action</button>

<!-- Tags -->
<span class="tag">Design</span>
<span class="tag">UX Research</span>
<span class="tag">Prototyping</span>
```

## 🎯 Dark Theme Best Practices

### Content Guidelines
1. **Contrast**: Ensure sufficient contrast for readability
2. **Hierarchy**: Use color and size to establish clear hierarchy
3. **Consistency**: Maintain consistent spacing and alignment
4. **Focus**: Use blue accents sparingly for maximum impact

### Visual Guidelines
1. **Depth**: Layer backgrounds to create visual depth
2. **Glow**: Use subtle glow effects for interactive elements
3. **Animation**: Keep animations smooth and purposeful
4. **Icons**: Use outline icons for better visibility

### Performance Considerations
1. **GPU**: Leverage GPU acceleration for animations
2. **Battery**: Consider reduced motion for mobile devices
3. **Loading**: Optimize for dark theme image loading
4. **Memory**: Efficient use of CSS animations

## 🔄 Theme Switching Support

The template includes optional light theme overrides if you want to support theme switching:

```html
<!-- Theme toggle in header -->
<button class="theme-toggle" id="themeToggle">Dark</button>
```

```css
/* Light theme overrides (optional) */
[data-theme="light"] {
    background: #fff;
    color: #333;
}

[data-theme="light"] .card {
    background: white;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
}
```

## 📋 Dark Theme Checklist

### Setup
- [ ] Copy dark theme template files
- [ ] Update all placeholder content
- [ ] Add project-specific images
- [ ] Test modal functionality
- [ ] Verify theme toggle (if enabled)

### Design Quality
- [ ] Check contrast ratios
- [ ] Test hover effects
- [ ] Verify glow animations
- [ ] Test mobile responsiveness
- [ ] Check accessibility features

### Content
- [ ] Update SEO meta tags
- [ ] Add descriptive alt text
- [ ] Test all links and functionality
- [ ] Verify dark theme image optimization

## 🎨 Dark Theme Advantages

### User Experience
- **Eye Strain**: Reduced eye strain in low-light conditions
- **Battery**: Better battery life on OLED screens
- **Focus**: Better content focus with darker backgrounds
- **Modern**: Contemporary, professional appearance

### Technical Benefits
- **Performance**: Efficient rendering of dark colors
- **Accessibility**: High contrast options
- **Flexibility**: Easy customization of accent colors
- **Consistency**: Matches system dark modes

## 🔗 Integration with Light Theme

Both templates can coexist and share similar structure:

```html
<!-- Choose your primary theme -->
<link rel="stylesheet" href="../../dark-theme-template.css">
<!-- OR -->
<link rel="stylesheet" href="../../light-theme-template.css">
```

### Switching Between Templates
1. **Dark First**: Start with dark template, add light theme overrides
2. **Light First**: Start with light template, add dark theme overrides
3. **Dual Support**: Include both stylesheets with theme switching

---

*This dark theme template system ensures every new page maintains a professional, modern dark aesthetic while providing the same structural consistency and component flexibility as the light theme template.*