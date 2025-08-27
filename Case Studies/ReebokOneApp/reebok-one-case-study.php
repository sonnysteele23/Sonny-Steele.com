<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reebok ONE Fitness App - UX Case Study | Sonny Steele</title>
    <meta name="description" content="UX case study: Designing comprehensive fitness tracking app for Reebok ONE with trainer profiles, sensor integration, workout analytics, and personalized fitness coaching.">
    <meta name="author" content="Sonny Steele">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://sonny-steele.com/Case%20Studies/ReebokOneApp/">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://sonny-steele.com/Case%20Studies/ReebokOneApp/">
    <meta property="og:title" content="Reebok ONE Fitness App - UX Case Study | Sonny Steele">
    <meta property="og:description" content="UX case study: Designing comprehensive fitness tracking app for Reebok ONE with trainer profiles, sensor integration, and personalized fitness coaching.">
    <meta property="og:image" content="https://sonny-steele.com/Case%20Studies/ReebokOneApp/images/Sonny%20Steele%20-%20Examples.033.jpeg">
    <meta property="og:site_name" content="Sonny Steele - AI UX Designer">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://sonny-steele.com/Case%20Studies/ReebokOneApp/">
    <meta property="twitter:title" content="Reebok ONE Fitness App - UX Case Study">
    <meta property="twitter:description" content="UX case study: Designing comprehensive fitness tracking app for Reebok ONE with trainer profiles, sensor integration, and personalized fitness coaching.">
    <meta property="twitter:image" content="https://sonny-steele.com/Case%20Studies/ReebokOneApp/images/Sonny%20Steele%20-%20Examples.033.jpeg">
    
    <!-- Schema.org markup for case study -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CreativeWork",
      "name": "Reebok ONE Fitness App - UX Case Study",
      "description": "UX case study: Designing comprehensive fitness tracking app for Reebok ONE with trainer profiles, sensor integration, workout analytics, and personalized fitness coaching.",
      "url": "https://sonny-steele.com/Case%20Studies/ReebokOneApp/",
      "image": "https://sonny-steele.com/Case%20Studies/ReebokOneApp/images/Sonny%20Steele%20-%20Examples.033.jpeg",
      "author": {
        "@type": "Person",
        "name": "Sonny Steele",
        "jobTitle": "AI UX Designer & Design Leader",
        "url": "https://sonny-steele.com"
      },
      "datePublished": "2018-01-01",
      "keywords": "Reebok ONE, Fitness App, Wearable Technology, Personal Training, Sensor Integration, Workout Tracking, Mobile Fitness, Health Analytics",
      "genre": "UX Case Study",
      "about": {
        "@type": "MobileApplication",
        "name": "Reebok ONE Fitness App",
        "applicationCategory": "Health & Fitness",
        "description": "Comprehensive fitness tracking application with personal trainer integration and wearable sensor connectivity"
      }
    }
    </script>
    
    <meta name="keywords" content="Reebok ONE, fitness app UX, wearable technology, personal training, sensor integration, workout tracking, mobile fitness, health analytics, Sonny Steele">
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
                <h1>Reebok ONE Fitness App</h1>
                <p>Revolutionary fitness tracking application that seamlessly integrates wearable sensor technology with personalized coaching. Featuring trainer profiles, advanced biometric monitoring, and intelligent workout analytics to deliver a comprehensive fitness experience.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Design Challenge</h2>
                    <p>Creating an integrated fitness ecosystem that bridges wearable technology with personal training expertise</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-number">1</div>
                        <h3>Sensor Integration</h3>
                        <p>Developing seamless connectivity with Reebok's wearable sensors to capture real-time biometric data including heart rate, movement patterns, and performance metrics.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">2</div>
                        <h3>Personal Training Platform</h3>
                        <p>Building comprehensive trainer profiles with qualifications, specializations, and ratings to match users with optimal fitness coaches based on goals and preferences.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">3</div>
                        <h3>Data Visualization</h3>
                        <p>Translating complex biometric data into intuitive visual insights that help users understand their progress and make informed fitness decisions.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">4</div>
                        <h3>Workout Optimization</h3>
                        <p>Creating intelligent workout recommendations based on sensor data, trainer expertise, and individual fitness goals to maximize training effectiveness.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Fitness App Interface</h2>
                    <p>Click to explore the complete fitness tracking system with trainer integration and advanced analytics</p>
                </div>
                
                <div class="dashboard-showcase">
                    <div class="dashboard-tile" onclick="openCarousel()">
                        <div class="dashboard-image">
                            <img src="images/Sonny Steele - Examples.033.jpeg" alt="Reebok ONE Fitness App Interface" loading="eager" width="1200" height="500">
                        </div>
                        <div class="dashboard-content">
                            <h3>Complete Fitness Tracking Platform</h3>
                            <p>Comprehensive mobile fitness application featuring trainer profiles with detailed qualifications and reviews, real-time sensor data integration displaying heart rate and performance metrics, and intelligent workout tracking with progress analytics. Navigate through 5 detailed interface screens showcasing the complete fitness ecosystem from trainer selection to workout analytics.</p>
                            <div class="dashboard-tags">
                                <span class="tag">Wearable Technology</span>
                                <span class="tag">Personal Training</span>
                                <span class="tag">Sensor Integration</span>
                                <span class="tag">Fitness Analytics</span>
                                <span class="tag">Biometric Tracking</span>
                                <span class="tag">Mobile Fitness</span>
                                <span class="tag">Health Monitoring</span>
                                <span class="tag">Workout Optimization</span>
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
                    <p>Advanced fitness technology designed for the modern athlete</p>
                </div>
                
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                            </svg>
                        </div>
                        <h4>Real-time Sensor Data</h4>
                        <p>Live biometric monitoring with Reebok wearable sensors tracking heart rate, movement patterns, and performance metrics with instant feedback and analysis.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <h4>Certified Trainer Profiles</h4>
                        <p>Comprehensive trainer directory with detailed qualifications, specializations, user ratings, and availability for personalized fitness coaching and guidance.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 3v5h5"/>
                                <path d="M3 8a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 4"/>
                                <path d="M5 9v5h5"/>
                                <path d="M9 14a5 5 0 0 0 7-7"/>
                            </svg>
                        </div>
                        <h4>Workout Analytics</h4>
                        <p>Advanced performance analysis with progress tracking, goal achievement metrics, and personalized recommendations based on historical workout data and sensor insights.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                            </svg>
                        </div>
                        <h4>Social Integration</h4>
                        <p>Community features including trainer connections, workout sharing, progress celebrations, and social challenges to maintain motivation and accountability.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2v6.5"/>
                                <path d="M12 15.5V22"/>
                                <path d="M4.93 4.93l4.24 4.24"/>
                                <path d="M14.83 14.83l4.24 4.24"/>
                                <path d="M2 12h6.5"/>
                                <path d="M15.5 12H22"/>
                                <path d="M4.93 19.07l4.24-4.24"/>
                                <path d="M14.83 9.17l4.24-4.24"/>
                            </svg>
                        </div>
                        <h4>Smart Notifications</h4>
                        <p>Intelligent alerts and reminders for workout schedules, training sessions, achievement milestones, and health monitoring based on user preferences and goals.</p>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                <line x1="8" y1="9" x2="16" y2="9"/>
                                <line x1="8" y1="13" x2="14" y2="13"/>
                            </svg>
                        </div>
                        <h4>Direct Trainer Communication</h4>
                        <p>Integrated messaging system enabling direct communication with personal trainers for real-time coaching feedback, form corrections, and personalized workout adjustments.</p>
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
            <div class="carousel-counter" id="carouselCounter">1 / 5</div>
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
                src: 'images/Sonny Steele - Examples.033.jpeg',
                alt: 'Reebok ONE Fitness App - Trainer Profiles and Sensor Integration'
            },
            {
                src: 'images/Sonny Steele - Examples.034.jpeg',
                alt: 'Reebok ONE Fitness App - Workout Tracking and Biometric Monitoring'
            },
            {
                src: 'images/Sonny Steele - Examples.035.jpeg',
                alt: 'Reebok ONE Fitness App - Performance Analytics and Progress Tracking'
            },
            {
                src: 'images/Sonny Steele - Examples.036.jpeg',
                alt: 'Reebok ONE Fitness App - Social Features and Community Integration'
            },
            {
                src: 'images/Sonny Steele - Examples.037.jpeg',
                alt: 'Reebok ONE Fitness App - Settings and Personal Dashboard'
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