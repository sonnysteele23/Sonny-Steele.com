# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is Sonny Steele's professional portfolio website - a hybrid static/WordPress site showcasing UX design work, case studies, and professional information. The site combines custom HTML/CSS/JS for portfolio content with WordPress infrastructure for hosting and SEO.

## Architecture & Structure

### Core Files
- `index.html` - Main portfolio homepage with embedded CSS/JS
- `portfolio-template.css` - Reusable CSS framework for case studies
- `portfolio-template.js` - JavaScript functionality for portfolio pages
- `template-system.html` - HTML template for creating new case studies
- `TEMPLATE-GUIDE.md` - Comprehensive documentation for the template system

### Case Study Pages
Organized in individual folders under `/casestudies/`:
- `casestudies/Kasisto/index.html` - AI conversation management platform
- `casestudies/Ottermon/index.html` - AI monitoring platform (featured project)  
- `casestudies/BraveMind/index.html` - VR therapy platform
- `casestudies/HealthKarma/index.html` - Digital health platform
- `casestudies/SteeleInfusion/index.html` - Medical device branding

Each case study folder contains:
- `index.html` - The case study content
- `images/` - All images specific to that case study

### Legacy Redirects
Redirect files in root directory for backward compatibility:
- `ottermon-case-study.html` → `casestudies/Ottermon/`
- `kasisto-case-study.html` → `casestudies/Kasisto/`
- `bravemind-case-study.html` → `casestudies/BraveMind/`
- `healthkarma-case-study.html` → `casestudies/HealthKarma/`
- `steele-infusion-case-study.html` → `casestudies/SteeleInfusion/`
- `ai-artwork-gallery.html` → `casestudies/AIArtwork/`

### WordPress Integration
- WordPress backend provides hosting infrastructure and SEO capabilities
- Main content served as static HTML rather than through WordPress themes
- Uses GoDaddy hosting with WordPress management
- Custom wp-config setup with hosting-managed database configs

## Development Workflow

### Creating New Case Studies

**New Folder Structure (Updated):**
1. Create folder: `casestudies/ProjectName/`
2. Create subfolder: `casestudies/ProjectName/images/`
3. Copy template to: `casestudies/ProjectName/index.html`
4. Move project images to: `casestudies/ProjectName/images/`
5. Update navigation links to use `../../` paths for root files1. Copy `template-system.html` to new filename
2. Follow placeholder replacement system documented in `TEMPLATE-GUIDE.md`
3. Use predefined theme classes (hero-kasisto, hero-ottermon, etc.)
4. Update `sitemap.xml` with new page entry
5. Add navigation links in main `index.html`

### Template System Components
The template system provides these reusable components:
- **Process Grid**: Step-by-step workflow visualization
- **Highlights Grid**: Project features with image/description pairs
- **Before/After Comparison**: Side-by-side improvement showcases
- **Features Grid**: Icon-based feature listings
- **Modal Image System**: Clickable images with overlay display

### Theme System
Each project has custom color schemes:
- Kasisto: Purple gradient (`#667eea` to `#764ba2`)
- Ottermon: Dark blue gradient (`#1a1a2e` to `#0f3460`)
- BraveMind: Teal gradient (`#43cea2` to `#185a9d`)
- HealthKarma: Light gradient (`#a8edea` to `#fed6e3`)

## File Organization

### Images
- `/images/` - All portfolio images and case study assets
- `/images/ai-gallery/` - AI-generated artwork collection
- Organized by project with descriptive filenames
- /casestudies/{ProjectName}/images/ - Case study specific images
- Each case study has its own images folder for better organization
### Assets
- `assets.css` - Additional styling (check if used)
- `favicon.svg` and `icon-large.svg` - Site branding
- PDF portfolio documents in root directory

### SEO & Discovery
- `robots.txt` - Search engine directives
- `sitemap.xml` - Structured sitemap with image metadata
- Schema.org structured data in main HTML
- OpenGraph and Twitter Card meta tags

## Key Features

### Dark/Light Theme Toggle
- JavaScript-based theme switching with localStorage persistence
- CSS custom properties for theme values
- Comprehensive dark mode styling for all components

### Image Modal System
- Click-to-expand functionality for all portfolio images
- Keyboard navigation and accessibility features
- Responsive modal sizing

### Mobile Optimization
- Responsive grid layouts that adapt to mobile
- Hamburger menu with smooth animations
- Touch-friendly interactive elements

### Performance Optimizations
- Lazy loading for non-critical images
- CSS containment for animated elements
- Debounced scroll event handlers

## Content Management

### Adding New Projects
1. Create new HTML file using template system
2. Add project images to `/images/` directory
3. Update main `index.html` projects grid
4. Add entry to `sitemap.xml`
5. Update any relevant navigation menus

### Updating Content
- Portfolio text content is embedded directly in HTML files
- No CMS - all updates require direct file editing
- Ensure consistency with existing tone and structure

## Deployment

### Domain & Hosting
- Primary domain: `sonny-steele.com`
- Hosted on GoDaddy with WordPress infrastructure
- Static files served directly, WordPress handles hosting/SEO

### File Structure on Server
- WordPress files provide server infrastructure
- Custom portfolio files override WordPress theme system
- Images and assets served from document root

## WordPress Theme Integration

### Active Themes
- Primary theme: "go" (GoDaddy managed)
- Fallback theme: "twentytwentyfive"
- Portfolio content bypasses WordPress theming system

### Plugin Considerations
- Object cache optimization enabled
- GoDaddy system plugin active
- Minimal WordPress plugin usage for performance

## Best Practices

### When Making Changes
- Test theme toggle functionality after CSS modifications
- Verify mobile responsiveness on actual devices
- Check image modal functionality for any new images
- Validate HTML markup for accessibility compliance

### Content Guidelines  
- Maintain professional UX industry terminology
- Use benefit-focused copy rather than feature descriptions
- Keep case study sections concise with clear visual hierarchy
- Ensure all images have descriptive alt text for accessibility

### Performance Considerations
- Optimize new images for web delivery (WebP preferred)
- Test loading performance on slower connections
- Minimize JavaScript additions to maintain site speed
- Use the provided CSS containment for animations