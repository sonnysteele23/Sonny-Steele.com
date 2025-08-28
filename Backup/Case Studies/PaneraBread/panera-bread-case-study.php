<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panera Bread Mobile App - UX Case Study | Sonny Steele</title>
    <meta name="description" content="UX case study: Designing intuitive mobile ordering experience for Panera Bread with 'You Pick 2' customization, menu navigation, and seamless food ordering workflows.">
    <meta name="author" content="Sonny Steele">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://sonny-steele.com/Case%20Studies/PaneraBread/">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://sonny-steele.com/Case%20Studies/PaneraBread/">
    <meta property="og:title" content="Panera Bread Mobile App - UX Case Study | Sonny Steele">
    <meta property="og:description" content="UX case study: Designing intuitive mobile ordering experience for Panera Bread with 'You Pick 2' customization and seamless food ordering workflows.">
    <meta property="og:image" content="https://sonny-steele.com/Case%20Studies/PaneraBread/images/Sonny%20Steele%20-%20Examples.004.jpeg">
    <meta property="og:site_name" content="Sonny Steele - AI UX Designer">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://sonny-steele.com/Case%20Studies/PaneraBread/">
    <meta property="twitter:title" content="Panera Bread Mobile App - UX Case Study">
    <meta property="twitter:description" content="UX case study: Designing intuitive mobile ordering experience for Panera Bread with 'You Pick 2' customization and seamless food ordering workflows.">
    <meta property="twitter:image" content="https://sonny-steele.com/Case%20Studies/PaneraBread/images/Sonny%20Steele%20-%20Examples.004.jpeg">
    
    <!-- Schema.org markup for case study -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CreativeWork",
      "name": "Panera Bread Mobile App - UX Case Study",
      "description": "UX case study: Designing intuitive mobile ordering experience for Panera Bread with 'You Pick 2' customization, menu navigation, and seamless food ordering workflows.",
      "url": "https://sonny-steele.com/Case%20Studies/PaneraBread/",
      "image": "https://sonny-steele.com/Case%20Studies/PaneraBread/images/Sonny%20Steele%20-%20Examples.004.jpeg",
      "author": {
        "@type": "Person",
        "name": "Sonny Steele",
        "jobTitle": "AI UX Designer & Design Leader",
        "url": "https://sonny-steele.com"
      },
      "datePublished": "2018-01-01",
      "keywords": "Panera Bread, Mobile App, Food Ordering, You Pick 2, Menu Navigation, Restaurant UX, Mobile Design, Wireframes",
      "genre": "UX Case Study",
      "about": {
        "@type": "MobileApplication",
        "name": "Panera Bread Mobile App",
        "applicationCategory": "Food & Drink",
        "description": "Mobile food ordering application with customizable meal combinations and intuitive menu navigation"
      }
    }
    </script>
    
    <meta name="keywords" content="Panera Bread, mobile app UX, food ordering, You Pick 2, restaurant mobile design, menu navigation, wireframes, mobile ordering, Sonny Steele">
    <link rel="icon" type="image/svg+xml" href="../../favicon.svg">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #fff;
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
            gap: 20px;
            align-items: center;
        }

        .nav-links a {
            color: #666;
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

        /* Hero Section - Professional Blue Theme */
        .hero {
            padding: 80px 0;
            background: linear-gradient(135deg, #2c5aa0 0%, #1e3a8a 50%, #1e40af 100%);
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Content Sections */
        .section {
            padding: 80px 0;
        }

        .section:nth-child(even) {
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #111;
            margin-bottom: 20px;
        }

        .section-title p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Dashboard Showcase */
        .dashboard-showcase {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            margin-top: 60px;
        }

        .dashboard-tile {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .dashboard-tile:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 60px rgba(0, 0, 0, 0.15);
        }

        .dashboard-image {
            width: 100%;
            height: 500px;
            background: #f5f5f5;
            overflow: hidden;
            position: relative;
        }

        .dashboard-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            display: block;
        }

        .dashboard-content {
            padding: 40px;
        }

        .dashboard-content h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 20px;
        }

        .dashboard-content p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .dashboard-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            background: rgba(44, 90, 160, 0.15);
            color: #2c5aa0;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(44, 90, 160, 0.2);
        }

        /* Process Section */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .process-item {
            text-align: center;
            padding: 40px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
        }

        .process-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2c5aa0 0%, #1e40af 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin: 0 auto 20px;
        }

        .process-item h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 15px;
        }

        .process-item p {
            color: #666;
            line-height: 1.6;
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .feature-item {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
            border-top: 4px solid #2c5aa0;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #2c5aa0 0%, #1e40af 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .feature-icon svg {
            width: 24px;
            height: 24px;
            color: rgba(255, 255, 255, 0.9);
        }

        .feature-item h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 10px;
        }

        .feature-item p {
            color: #666;
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* Footer Styles */
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

        /* Modal Styles */
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
            max-height: 100%;
            width: auto;
            height: auto;
            border-radius: 8px;
            object-fit: contain;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
        }

        .modal-close {
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

        .modal-close:hover {
            opacity: 0.7;
        }

        /* Carousel Navigation */
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

        .carousel-prev {
            left: 20px;
        }

        .carousel-next {
            right: 20px;
        }

        .carousel-dots {
            position: absolute;
            bottom: -60px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
        }

        .carousel-dot.active {
            background: white;
            transform: scale(1.2);
        }

        .carousel-counter {
            position: absolute;
            bottom: -100px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 0.9rem;
            background: rgba(0, 0, 0, 0.7);
            padding: 8px 16px;
            border-radius: 20px;
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
                justify-content: flex-start;
                align-items: center;
                padding-top: 50px;
                gap: 30px;
                font-size: 1.2rem;
                transition: right 0.3s ease;
                z-index: 999;
                border-left: 1px solid rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                right: 0;
            }

            .mobile-menu-toggle {
                display: flex;
                z-index: 1000;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .dashboard-image {
                height: 300px;
            }

            .dashboard-content {
                padding: 30px 20px;
            }

            .process-grid {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .carousel-nav {
                font-size: 18px;
                padding: 15px 12px;
            }
            
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
            <ul class="nav-links">
                <li><a href="https://sonny-steele.com">Home</a></li>
                <li><a href="https://sonny-steele.com#work">Work</a></li>
                <li><a href="https://sonny-steele.com#contact">Contact</a></li>
                <li><a href="javascript:void(0)" id="resumeLinkHeader">Resume</a></li>
            </ul>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Panera Bread Mobile App</h1>
                <p>Comprehensive mobile ordering experience featuring intuitive menu navigation, customizable 'You Pick 2' combinations, and streamlined food ordering workflows. Designed to enhance customer convenience while maintaining Panera's brand experience across all touchpoints.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Design Challenge</h2>
                    <p>Creating an intuitive mobile ordering platform that simplifies complex menu combinations while maintaining flexibility</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-number">1</div>
                        <h3>Menu Complexity</h3>
                        <p>Panera's extensive menu with multiple categories, customization options, and combination meals required clear information architecture and intuitive navigation patterns.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">2</div>
                        <h3>You Pick 2 Feature</h3>
                        <p>The signature 'You Pick 2' meal combination needed seamless integration allowing customers to mix and match soups, salads, sandwiches, and sides with clear pricing.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">3</div>
                        <h3>Mobile Optimization</h3>
                        <p>Designing for small screens while maintaining full functionality including detailed product information, customization options, and easy checkout flow.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">4</div>
                        <h3>Order Efficiency</h3>
                        <p>Streamlining the ordering process to reduce friction while ensuring accuracy in complex customizations and special dietary requirements.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Mobile App Wireframes</h2>
                    <p>Click to explore the complete mobile ordering system with detailed user flows and interaction patterns</p>
                </div>
                
                <div class="dashboard-showcase">
                    <div class="dashboard-tile" onclick="openCarousel()">
                        <div class="dashboard-image">
                            <img src="images/Sonny Steele - Examples.004.jpeg" alt="Panera Bread Mobile App Wireframes" loading="eager" width="1200" height="500">
                        </div>
                        <div class="dashboard-content">
                            <h3>Complete Mobile App Wireframe Suite</h3>
                            <p>Comprehensive wireframe documentation showing menu browsing, 'You Pick 2' selection process, product customization, shopping cart management, and checkout flow. Navigate through 9 detailed wireframe screens showcasing the complete mobile ordering experience from initial menu browsing to order confirmation.</p>
                            <div class="dashboard-tags">
                                <span class="tag">Mobile App Design</span>
                                <span class="tag">You Pick 2</span>
                                <span class="tag">Menu Navigation</span>
                                <span class="tag">Food Ordering</span>
                                <span class="tag">User Experience</span>
                                <span class="tag">Wireframes</span>
                                <span class="tag">Mobile Commerce</span>
                                <span class="tag">Restaurant UX</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Key Features</h2>
                    <p>Mobile-first design elements that enhance the Panera Bread ordering experience</p>
                </div>
                
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 7V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7z"/>
                                <polyline points="14,2 14,8 20,8"/>
                                <line x1="10" y1="11" x2="8" y2="17"/>
                                <line x1="8" y1="11" x2="10" y2="17"/>
                            </svg>
                        </div>
                        <h4>Intuitive Menu Organization</h4>
                        <p>Clear categorization with visual hierarchy allowing customers to easily browse soups, salads, sandwiches, and sides with filtering and search capabilities.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 12l2 2 4-4"/>
                                <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"/>
                                <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"/>
                                <path d="M12 3c0 1-1 3-3 3s-3-2-3-3 1-3 3-3 3 2 3 3"/>
                                <path d="M12 21c0-1 1-3 3-3s3 2 3 3-1 3-3 3-3-2-3-3"/>
                            </svg>
                        </div>
                        <h4>You Pick 2 Combinations</h4>
                        <p>Seamless selection interface for Panera's signature meal combinations with visual pairing suggestions and real-time pricing updates for all valid combinations.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h4>Product Customization</h4>
                        <p>Comprehensive customization options for each menu item including dietary restrictions, portion sizes, and ingredient modifications with clear visual feedback.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="9" cy="21" r="1"/>
                                <circle cx="20" cy="21" r="1"/>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                            </svg>
                        </div>
                        <h4>Smart Shopping Cart</h4>
                        <p>Intelligent cart management with order summaries, modification capabilities, and suggested add-ons based on current selections and customer preferences.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                            </svg>
                        </div>
                        <h4>Order Communication</h4>
                        <p>Real-time order tracking with pickup notifications, estimated wait times, and direct communication channel with store staff for special requests or modifications.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <path d="M9 12l2 2 4-4"/>
                            </svg>
                        </div>
                        <h4>Secure Checkout</h4>
                        <p>Streamlined payment processing with saved payment methods, loyalty program integration, and secure transaction handling with order confirmation details.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Image Modal with Carousel -->
    <div class="modal" id="imageModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeCarousel()">&times;</button>
            <button class="carousel-nav carousel-prev" onclick="previousImage()">&#10094;</button>
            <button class="carousel-nav carousel-next" onclick="nextImage()">&#10095;</button>
            <img class="modal-image" id="modalImage" src="" alt="">
            <div class="carousel-dots" id="carouselDots"></div>
            <div class="carousel-counter" id="carouselCounter">1 / 9</div>
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
        // Mobile menu functionality
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const navLinks = document.querySelector('.nav-links');

        if (mobileMenuToggle && navLinks) {
            mobileMenuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                mobileMenuToggle.classList.toggle('active');
            });

            document.addEventListener('click', (e) => {
                if (!navLinks.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                    navLinks.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                }
            });

            const mobileNavLinks = navLinks.querySelectorAll('a');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                });
            });
        }

        // Resume link functionality
        const resumeLinkHeader = document.getElementById('resumeLinkHeader');
        if (resumeLinkHeader) {
            resumeLinkHeader.addEventListener('click', () => {
                window.open('https://sonny-steele.com', '_blank');
            });
        }

        // Carousel functionality
        const images = [
            {
                src: 'images/Sonny Steele - Examples.004.jpeg',
                alt: 'Panera Bread Mobile App - Menu Navigation and You Pick 2 Interface'
            },
            {
                src: 'images/Sonny Steele - Examples.005.jpeg',
                alt: 'Panera Bread Mobile App - Product Selection and Customization'
            },
            {
                src: 'images/Sonny Steele - Examples.006.jpeg',
                alt: 'Panera Bread Mobile App - Order Summary and Cart Management'
            },
            {
                src: 'images/Sonny Steele - Examples.007.jpeg',
                alt: 'Panera Bread Mobile App - Checkout Process and Payment'
            },
            {
                src: 'images/Sonny Steele - Examples.008.jpeg',
                alt: 'Panera Bread Mobile App - User Account and Order History'
            },
            {
                src: 'images/Sonny Steele - Examples.009.jpeg',
                alt: 'Panera Bread Mobile App - Location Services and Store Finder'
            },
            {
                src: 'images/Sonny Steele - Examples.010.jpeg',
                alt: 'Panera Bread Mobile App - Loyalty Program Integration'
            },
            {
                src: 'images/Sonny Steele - Examples.011.jpeg',
                alt: 'Panera Bread Mobile App - Order Tracking and Notifications'
            },
            {
                src: 'images/Sonny Steele - Examples.012.jpeg',
                alt: 'Panera Bread Mobile App - Final Order Confirmation and Receipt'
            }
        ];

        let currentImageIndex = 0;
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const carouselDots = document.getElementById('carouselDots');
        const carouselCounter = document.getElementById('carouselCounter');

        function createDots() {
            carouselDots.innerHTML = '';
            images.forEach((_, index) => {
                const dot = document.createElement('button');
                dot.className = 'carousel-dot';
                if (index === 0) dot.classList.add('active');
                dot.onclick = () => goToImage(index);
                carouselDots.appendChild(dot);
            });
        }

        function updateCarousel() {
            const image = images[currentImageIndex];
            modalImage.src = image.src;
            modalImage.alt = image.alt;
            
            // Update dots
            const dots = carouselDots.querySelectorAll('.carousel-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentImageIndex);
            });
            
            // Update counter
            carouselCounter.textContent = `${currentImageIndex + 1} / ${images.length}`;
        }

        function openCarousel() {
            currentImageIndex = 0;
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            createDots();
            updateCarousel();
        }

        function closeCarousel() {
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            updateCarousel();
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            updateCarousel();
        }

        function goToImage(index) {
            currentImageIndex = index;
            updateCarousel();
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (modal.classList.contains('active')) {
                if (e.key === 'Escape') {
                    closeCarousel();
                } else if (e.key === 'ArrowLeft') {
                    previousImage();
                } else if (e.key === 'ArrowRight') {
                    nextImage();
                }
            }
        });

        // Close modal when clicking outside the image
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeCarousel();
            }
        });
    </script>
</body>
</html>