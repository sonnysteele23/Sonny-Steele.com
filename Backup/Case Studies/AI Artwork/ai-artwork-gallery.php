<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Artwork Gallery - Just for Fun | Sonny Steele</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="description" content="Explore Sonny Steele's AI-generated artwork and creative experiments using various AI tools and platforms.">
    <meta name="keywords" content="AI artwork, generative art, creative AI, Sonny Steele, digital art, experimental design">
    <meta name="author" content="Sonny Steele">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://sonny-steele.com/Case%20Studies/AI%20Artwork/ai-artwork-gallery.html">
    
    <!-- Open Graph tags for social media -->
    <meta property="og:title" content="AI Artwork Gallery - Just for Fun | Sonny Steele">
    <meta property="og:description" content="Explore Sonny Steele's AI-generated artwork and creative experiments using various AI tools and platforms.">
    <meta property="og:url" content="https://sonny-steele.com/ai-artwork-gallery.html">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sonny Steele - Senior UX Design Leader">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../../favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="../../favicon.svg">
    <link rel="manifest" href="../../site.webmanifest">
    
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            padding: 20px 0;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #111;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #111;
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            flex-direction: column;
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            gap: 4px;
        }

        .mobile-menu-toggle span {
            width: 25px;
            height: 3px;
            background: #333;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .mobile-menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .mobile-menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .mobile-menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* Mobile Navigation */
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 81px;
                right: -100%;
                width: 100%;
                height: calc(100vh - 81px);
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 50px;
                transition: right 0.3s ease;
                z-index: 999;
                border-left: 1px solid rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links li {
                margin: 20px 0;
            }

            .nav-links a {
                font-size: 1.2rem;
                padding: 15px 30px;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .nav-links a:hover {
                background: rgba(0, 0, 0, 0.05);
            }

            .mobile-menu-toggle {
                display: flex;
                z-index: 1000;
            }
        }

        /* Main content */
        main {
            padding: 60px 0;
        }

        .hero {
            padding: 80px 0;
            background: linear-gradient(135deg, #2c5aa0 0%, #1e3a8a 50%, #1e40af 100%);
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: white;
        }

        .hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Gallery sections */
        .gallery-section {
            margin-bottom: 80px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #333;
        }

        .section-title p {
            font-size: 1.1rem;
            color: #666;
        }

        /* Gallery grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .artwork-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .artwork-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .artwork-image {
            width: 100%;
            height: 250px;
            background: #f5f5f5;
            position: relative;
            overflow: hidden;
        }

        .artwork-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .artwork-content {
            padding: 20px;
        }

        .artwork-content h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .artwork-content p {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .artwork-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            background: #2c5aa0;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Modal Carousel Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal.active {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 60px 20px;
            overflow-y: auto;
        }

        .modal-content {
            max-width: min(95vw, 1440px);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: auto;
            min-height: calc(100vh - 120px);
        }

        .modal-image {
            max-width: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transition: opacity 0.3s ease;
        }

        .close {
            position: fixed;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            border: none;
            padding: 10px;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1001;
        }

        .close:hover {
            opacity: 0.7;
        }

        .carousel-nav {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 24px;
            padding: 20px 15px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s ease;
            z-index: 1001;
        }

        .carousel-nav:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .prev {
            left: 20px;
        }

        .next {
            right: 20px;
        }

        .modal-info {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            padding: 15px 25px;
            border-radius: 25px;
            z-index: 1001;
        }

        .modal-counter {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-bottom: 5px;
        }

        .modal-title {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .artwork-image {
            cursor: pointer;
        }

        /* Theme Toggle Button */
        .theme-toggle {
            background: none;
            border: 2px solid #333;
            border-radius: 6px;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.3s ease;
            color: #333;
        }

        .theme-toggle:hover {
            background: #333;
            color: white;
        }

        /* Dark Theme - GitHub Inspired */

        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .container {
                padding: 0 15px;
            }

            .close {
                top: 10px;
                right: 20px;
                font-size: 30px;
            }
        }
        
        /* Footer */
        .footer {
            background: #000000;
            color: white;
            padding: 80px 0 60px;
            position: relative;
            overflow: visible;
        }
        .footer-content {
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
        }
        .footer-title {
            font-size: 3.5rem;
            font-weight: 400;
            color: white;
            margin-bottom: 30px;
            line-height: 1.1;
            font-family: Georgia, 'Times New Roman', serif;
        }
        .footer-description {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            margin-bottom: 40px;
            max-width: 500px;
        }
        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .footer-link {
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-size: 1rem;
            font-weight: 400;
            transition: all 0.3s ease;
            padding: 8px 0;
        }
        .footer-link:hover {
            color: white;
            transform: translateX(5px);
        }
        .footer-link svg {
            flex-shrink: 0;
            opacity: 0.8;
        }
        
        /* Dark theme support */
        
        /* Mobile responsive */
        @media (max-width: 768px) {
            .footer-content {
                text-align: center;
                padding: 0 20px;
            }
            .footer-title {
                font-size: 2.5rem;
                margin-bottom: 25px;
            }
            .footer-description {
                font-size: 1rem;
                margin-bottom: 35px;
            }
            .footer-links {
                gap: 18px;
            }
            .footer-link {
                justify-content: center;
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <a href="https://sonny-steele.com" class="logo">Sonny Steele</a>
            <ul class="nav-links" id="mobileMenu">
                <li><a href="https://sonny-steele.com">Home</a></li>
                <li><a href="https://sonny-steele.com#work">Work</a></li>
                <li><a href="https://sonny-steele.com#contact">Contact</a></li>
                <li><a href="javascript:void(0)" onclick="window.open('https://sonny-steele.com', '_blank')">Resume</a></li>
            </ul>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <main>
        <div class="container">
        <section class="hero">
            <div class="container">
                <h1>AI Artwork Gallery</h1>
                <p>A collection of creative experiments and artwork generated using various AI tools and platforms. These pieces showcase the intersection of technology and creativity.</p>
            </div>
        </section>

        <div class="container">

            <!-- Character Design Section -->
            <section class="gallery-section">
                <div class="section-title">
                    <h2>Character Design</h2>
                    <p>AI-generated characters and creatures</p>
                </div>
                <div class="gallery-grid">
                    <div class="artwork-card">
                        <div class="artwork-image" onclick="openCarousel('otters', 0)">
                            <img src="images/otter-geometric.png" alt="Otter Design Collection" loading="eager" width="400" height="250">
                        </div>
                        <div class="artwork-content">
                            <h3>Otter Design Collection</h3>
                            <p>A series of otter designs exploring geometric shapes, line art, and low-poly aesthetics. From light bulb concepts to transparent wireframes.</p>
                            <div class="artwork-tags">
                                <span class="tag">Character Design</span>
                                <span class="tag">Geometric</span>
                                <span class="tag">Low Poly</span>
                                <span class="tag">Series</span>
                            </div>
                        </div>
                    </div>

                    <div class="artwork-card">
                        <div class="artwork-image" onclick="openModal('images/portrait-realistic.png', 'Hyperrealistic Portrait')">
                            <img src="images/portrait-realistic.png" alt="Hyperrealistic Portrait" loading="lazy" width="400" height="250">
                        </div>
                        <div class="artwork-content">
                            <h3>Hyperrealistic Portrait</h3>
                            <p>Detailed AI-generated portrait showcasing photorealistic rendering capabilities.</p>
                            <div class="artwork-tags">
                                <span class="tag">Portrait</span>
                                <span class="tag">Hyperrealistic</span>
                                <span class="tag">Digital Art</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Logo Experiments Section -->
            <section class="gallery-section">
                <div class="section-title">
                    <h2>Logo Experiments</h2>
                    <p>Creative logo concepts and brand explorations</p>
                </div>
                <div class="gallery-grid">
                    <div class="artwork-card">
                        <div class="artwork-image" onclick="openCarousel('steele-logos', 0)">
                            <img src="images/steele-infusion-3d.png" alt="Steele Infusion Logo Concepts" loading="eager" width="400" height="250">
                        </div>
                        <div class="artwork-content">
                            <h3>Steele Infusion Logo Concepts</h3>
                            <p>Logo explorations for Steele Infusion PM Services featuring 3D rendering and low-poly geometric interpretations.</p>
                            <div class="artwork-tags">
                                <span class="tag">3D Rendering</span>
                                <span class="tag">Medical</span>
                                <span class="tag">Branding</span>
                                <span class="tag">Low Poly</span>
                            </div>
                        </div>
                    </div>

                    <div class="artwork-card">
                        <div class="artwork-image" onclick="openCarousel('media-logos', 0)">
                            <img src="images/local-media-logo.png" alt="Local Media LLC Logo" loading="lazy" width="400" height="250">
                        </div>
                        <div class="artwork-content">
                            <h3>Local Media LLC Concept</h3>
                            <p>Isometric 2.5D logo design featuring cityscape elements and broadcast towers.</p>
                            <div class="artwork-tags">
                                <span class="tag">Isometric</span>
                                <span class="tag">Media</span>
                                <span class="tag">Cityscape</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Creative Experiments Section -->
            <section class="gallery-section">
                <div class="section-title">
                    <h2>Creative Experiments</h2>
                    <p>Artistic explorations and style experiments</p>
                </div>
                <div class="gallery-grid">
                    <div class="artwork-card">
                        <div class="artwork-image" onclick="openCarousel('creative', 0)">
                            <img src="images/momo-demon.png" alt="Momo Demon Artwork" loading="lazy" width="400" height="250">
                        </div>
                        <div class="artwork-content">
                            <h3>Horror Character Study</h3>
                            <p>Hyperrealistic rendering of iconic horror character with dramatic lighting effects.</p>
                            <div class="artwork-tags">
                                <span class="tag">Horror</span>
                                <span class="tag">Character Study</span>
                                <span class="tag">Dramatic</span>
                            </div>
                        </div>
                    </div>

                    <div class="artwork-card">
                        <div class="artwork-image" onclick="openCarousel('tattoo', 0)">
                            <img src="images/tattoo-design.png" alt="Tattoo Design Concept" loading="lazy" width="400" height="250">
                        </div>
                        <div class="artwork-content">
                            <h3>Tattoo Design Concept</h3>
                            <p>Full arm tattoo design featuring intricate details and symbolic elements.</p>
                            <div class="artwork-tags">
                                <span class="tag">Tattoo Art</span>
                                <span class="tag">Body Art</span>
                                <span class="tag">Symbolic</span>
                            </div>
                        </div>
                    </div>

                    <div class="artwork-card">
                        <div class="artwork-image" onclick="openCarousel('gaming', 0)">
                            <img src="images/sonic-tails.png" alt="Sonic and Tails Artwork" loading="lazy" width="400" height="250">
                        </div>
                        <div class="artwork-content">
                            <h3>Gaming Character Reimagining</h3>
                            <p>Creative reinterpretation of classic gaming characters in dramatic scene.</p>
                            <div class="artwork-tags">
                                <span class="tag">Gaming</span>
                                <span class="tag">Fan Art</span>
                                <span class="tag">Action</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Modal Carousel for image viewing -->
    <div id="imageModal" class="modal" onclick="closeModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <span class="close" onclick="closeModal()">&times;</span>
            <button class="carousel-nav prev" onclick="prevImage()" title="Previous Image">&#10094;</button>
            <button class="carousel-nav next" onclick="nextImage()" title="Next Image">&#10095;</button>
            <img id="modalImage" class="modal-image" alt="">
            <div class="modal-info">
                <div class="modal-counter" id="modalCounter">1 / 1</div>
                <div class="modal-title" id="modalTitle">Artwork Title</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <h2 class="footer-title">Get In Touch.</h2>
                <p class="footer-description">I'm currently available for freelance work and exciting new opportunities. If you have a project in mind or just want to say hello, feel free to reach out.</p>
                
                <div class="footer-links">
                    <a href="mailto:ssteele23@icloud.com" class="footer-link">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                            <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        ssteele23@icloud.com
                    </a>
                    
                    <a href="https://www.linkedin.com/in/sonnysteele/" target="_blank" rel="noopener" class="footer-link">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8V8Z" stroke="currentColor" stroke-width="2"/>
                            <rect x="2" y="9" width="4" height="12" stroke="currentColor" stroke-width="2"/>
                            <circle cx="4" cy="4" r="2" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        LinkedIn Profile
                    </a>
                    
                    <a href="tel:+14135706737" class="footer-link">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92V19.92C22 20.5 21.59 21 21.09 21C10.03 21 1 11.97 1 0.91C1 0.41 1.41 0 1.91 0H4.91C5.51 0 6.01 0.41 6.01 0.91C6.01 2.66 6.27 4.37 6.76 5.99C6.89 6.38 6.78 6.81 6.49 7.1L4.74 8.85C6.42 12.05 9.05 14.68 12.25 16.36L13.99 14.61C14.28 14.32 14.71 14.21 15.1 14.34C16.72 14.83 18.43 15.09 20.18 15.09C20.68 15.09 21.09 15.5 21.09 16.1V19.1C21.09 19.5 20.68 19.91 20.18 19.91Z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        +1 (413) 570-6737
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Category-specific gallery images
        const galleryCategories = {
            otters: [
                {
                    src: 'images/otter-geometric.png',
                    title: 'Geometric Otter with Light Bulb',
                    description: 'Original geometric otter design holding a light bulb, using simple line art'
                },
                {
                    src: 'images/otter-lightbulb-2.png',
                    title: 'Geometric Otter Variation',
                    description: 'Alternative geometric otter design with light bulb concept'
                },
                {
                    src: 'images/otter-lowpoly.png',
                    title: 'Low Poly Otter (Blue)',
                    description: 'Blue low-poly otter with thick black borders on geometric shapes'
                },
                {
                    src: 'images/otter-lowpoly-dots.png',
                    title: 'Low Poly Otter with Dots',
                    description: 'Low-poly otter with interconnected dots and darkened lines'
                },
                {
                    src: 'images/otter-transparent-lines.png',
                    title: 'Transparent Wireframe Otter',
                    description: 'Color-agnostic transparent otter made of geometric lines and shapes'
                },
                {
                    src: 'images/otter-triangles-outlined.png',
                    title: 'Triangular Outlined Otter',
                    description: 'Otter composed of geometric triangles with dark prominent outlines'
                },
                {
                    src: 'images/otter-no-hood.png',
                    title: 'Otter Without Hood',
                    description: 'Clean geometric otter design with hood removed'
                },
                {
                    src: 'images/otter-svg-duplicate.png',
                    title: 'SVG-Ready Otter',
                    description: 'Optimized otter design prepared for SVG conversion'
                }
            ],
            portraits: [
                {
                    src: 'images/portrait-realistic.png',
                    title: 'Hyperrealistic Portrait',
                    description: 'Detailed AI-generated portrait showcasing photorealistic rendering capabilities'
                }
            ],
            'steele-logos': [
                {
                    src: 'images/steele-infusion-3d.png',
                    title: '3D Steele Infusion Logo',
                    description: 'Hyperrealistic 3D rendering of the Steele Infusion PM Services logo with metallic finish'
                },
                {
                    src: 'images/steele-infusion-lowpoly.png',
                    title: 'Low Poly Medical Logo',
                    description: 'Geometric interpretation of medical device logos with angular, blocky aesthetics'
                },
                {
                    src: 'images/steele-caduceus.png',
                    title: 'Caduceus Infusion Pump',
                    description: 'Calibrated infusion pump integrated within a caduceus, symbolizing medical technology precision'
                },
                {
                    src: 'images/steele-isometric-1.png',
                    title: 'Isometric Infusion Pump (Version 1)',
                    description: 'Isometric 2.5D logo with pixel-edge details and color-pop lighting'
                },
                {
                    src: 'images/steele-isometric-2.png',
                    title: 'Isometric Infusion Pump (Version 2)',
                    description: 'Alternative isometric design with enhanced lighting effects'
                },
                {
                    src: 'images/steele-isometric-3.png',
                    title: 'Isometric Infusion Pump (Version 3)',
                    description: 'Final isometric variation with refined component highlighting'
                },
                {
                    src: 'images/steele-alaris-1.png',
                    title: 'Hyperrealistic Alaris Pump (Version 1)',
                    description: 'High-resolution photograph of meticulously maintained Alaris infusion pump'
                },
                {
                    src: 'images/steele-alaris-2.png',
                    title: 'Hyperrealistic Alaris Pump (Version 2)',
                    description: 'Alternative angle of state-of-the-art medical facility Alaris pump'
                },
                {
                    src: 'images/steele-alaris-3.png',
                    title: 'Hyperrealistic Alaris Pump (Version 3)',
                    description: 'Final hyperrealistic rendering with razor-sharp detail and precision'
                },
                {
                    src: 'images/steele-gothic-spectral.png',
                    title: 'Gothic Spectral Infusion Pump',
                    description: 'Surreal gothic icon with spectral pump entwined with cracked-stone ruins'
                },
                {
                    src: 'images/steele-horror-1.png',
                    title: 'Dark Fantasy Horror Pump (Version 1)',
                    description: 'Grim infusion pump crafted from cracked-stone and shadowed metal'
                },
                {
                    src: 'images/steele-horror-2.png',
                    title: 'Dark Fantasy Horror Pump (Version 2)',
                    description: 'Alternative dark fantasy design with pale-moon glow and rune-etched surface'
                },
                {
                    src: 'images/steele-horror-3.png',
                    title: 'Dark Fantasy Horror Pump (Version 3)',
                    description: 'Final horror-themed variation with integrated Steele Infusion branding'
                }
            ],
            'media-logos': [
                {
                    src: 'images/local-media-logo.png',
                    title: 'Local Media LLC Concept',
                    description: 'Isometric 2.5D logo design featuring cityscape elements and broadcast towers'
                }
            ],
            creative: [
                {
                    src: 'images/momo-demon.png',
                    title: 'Horror Character Study',
                    description: 'Hyperrealistic rendering of iconic horror character with dramatic lighting effects'
                }
            ],
            tattoo: [
                {
                    src: 'images/tattoo-design.png',
                    title: 'Tattoo Design Concept',
                    description: 'Full arm tattoo design featuring intricate details and symbolic elements'
                }
            ],
            gaming: [
                {
                    src: 'images/sonic-tails.png',
                    title: 'Gaming Character Reimagining',
                    description: 'Creative reinterpretation of classic gaming characters in dramatic scene'
                }
            ]
        };

        let currentCategory = '';
        let currentImageIndex = 0;

        // Theme toggle functionality
        const themeToggle = document.getElementById('themeToggle');
        const currentTheme = localStorage.getItem('theme') || 'light';

        // Set initial theme
        document.documentElement.setAttribute('data-theme', currentTheme);
        themeToggle.textContent = currentTheme === 'dark' ? 'Dark' : 'Light';

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            themeToggle.textContent = newTheme === 'dark' ? 'Dark' : 'Light';
        });

        function openCarousel(category, startIndex = 0) {
            currentCategory = category;
            currentImageIndex = startIndex;
            
            const modal = document.getElementById('imageModal');
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            
            showImage(currentImageIndex);
        }

        function showImage(index) {
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalCounter = document.getElementById('modalCounter');
            const prevBtn = document.querySelector('.carousel-nav.prev');
            const nextBtn = document.querySelector('.carousel-nav.next');
            
            const images = galleryCategories[currentCategory];
            const image = images[index];
            
            modalImage.src = image.src;
            modalImage.alt = image.title;
            modalTitle.textContent = image.title;
            modalCounter.textContent = `${index + 1} / ${images.length}`;
            
            // Hide navigation if only one image
            if (images.length <= 1) {
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'none';
            } else {
                prevBtn.style.display = 'block';
                nextBtn.style.display = 'block';
            }
        }

        function nextImage() {
            const images = galleryCategories[currentCategory];
            currentImageIndex = (currentImageIndex + 1) % images.length;
            showImage(currentImageIndex);
        }

        function prevImage() {
            const images = galleryCategories[currentCategory];
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            showImage(currentImageIndex);
        }

        function openModal(imageSrc, imageTitle = '') {
            // For single images, create a temporary category
            const tempCategory = 'temp';
            galleryCategories[tempCategory] = [{
                src: imageSrc,
                title: imageTitle,
                description: ''
            }];
            openCarousel(tempCategory, 0);
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(event) {
            const modal = document.getElementById('imageModal');
            if (modal.classList.contains('active')) {
                switch(event.key) {
                    case 'Escape':
                        closeModal();
                        break;
                    case 'ArrowRight':
                        nextImage();
                        break;
                    case 'ArrowLeft':
                        prevImage();
                        break;
                }
            }
        });

        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
                mobileMenuToggle.classList.toggle('active');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                    mobileMenu.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                }
            });

            // Close mobile menu when clicking on links
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                });
            });
        }
    </script>
</body>
</html>