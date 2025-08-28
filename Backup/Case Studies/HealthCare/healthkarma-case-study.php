<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthKarma Healthcare Platform - UX Case Study | Sonny Steele</title>
    <meta name="description" content="UX case study: Designing HealthKarma healthcare platform for patient care management. Streamlining medical workflows and improving healthcare accessibility.">
    <meta name="author" content="Sonny Steele">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://sonny-steele.com/Case%20Studies/HealthCare/healthkarma-case-study.html">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://sonny-steele.com/Case%20Studies/HealthCare/healthkarma-case-study.html">
    <meta property="og:title" content="HealthKarma Healthcare Platform - UX Case Study | Sonny Steele">
    <meta property="og:description" content="UX case study: Designing HealthKarma healthcare platform for patient care management. Streamlining medical workflows and improving healthcare accessibility.">
    <meta property="og:image" content="https://sonny-steele.com/Case%20Studies/HealthCare/images/healthkarma-hero.png">
    <meta property="og:site_name" content="Sonny Steele - AI UX Designer">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://sonny-steele.com/Case%20Studies/HealthCare/healthkarma-case-study.html">
    <meta property="twitter:title" content="HealthKarma Healthcare Platform - UX Case Study">
    <meta property="twitter:description" content="UX case study: Designing HealthKarma healthcare platform for patient care management. Streamlining medical workflows.">
    <meta property="twitter:image" content="https://sonny-steele.com/Case%20Studies/HealthCare/images/healthkarma-hero.png">
    
    <!-- Schema.org markup for case study -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CreativeWork",
      "name": "HealthKarma Healthcare Platform - UX Case Study",
      "description": "UX case study: Designing HealthKarma healthcare platform for patient care management. Streamlining medical workflows and improving healthcare accessibility.",
      "url": "https://sonny-steele.com/Case%20Studies/HealthCare/healthkarma-case-study.html",
      "image": "https://sonny-steele.com/Case%20Studies/HealthCare/images/healthkarma-hero.png",
      "author": {
        "@type": "Person",
        "name": "Sonny Steele",
        "jobTitle": "AI UX Designer & Design Leader",
        "url": "https://sonny-steele.com"
      },
      "datePublished": "2024-01-01",
      "keywords": "Healthcare UX, Patient Care, Medical Platform, Healthcare Technology, EMR Design, Digital Health, User Interface Design",
      "genre": "UX Case Study",
      "about": {
        "@type": "SoftwareApplication",
        "name": "HealthKarma Healthcare Platform",
        "applicationCategory": "Healthcare Software",
        "description": "Healthcare platform for patient care management and medical workflow optimization"
      }
    }
    </script>
    
    <meta name="keywords" content="HealthKarma, healthcare UX, UX case study, patient care, medical platform, EMR design, digital health, Sonny Steele">
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

        .back-link {
            color: #666;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: #111;
        }

        /* Hero Section - Professional colors */
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

        /* Design Highlights Grid */
        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .highlight-item {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .highlight-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
        }

        .highlight-image {
            width: 100%;
            height: 300px;
            background: #f5f5f5;
            overflow: hidden;
        }

        .highlight-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            display: block;
            margin: 0;
        }

        .highlight-content {
            padding: 30px;
            margin: 0;
        }

        .highlight-content h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 15px;
        }

        .highlight-content p {
            color: #666;
            line-height: 1.6;
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

        /* Key Features Section */
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
        }

        /* Light mode icon styling */
        .feature-icon svg {
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

        /* Wireframes */
        .wireframes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 40px;
            margin: 60px 0;
        }

        .wireframe-item {
            display: grid;
            grid-template-rows: auto auto 1fr;
            gap: 20px;
        }

        .wireframe-item h4 {
            font-size: 1.3rem;
            color: #2c3e50;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-align: center;
            margin: 0;
            align-self: start;
        }

        .image-container {
            background: #f8f9fa;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            align-self: start;
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .wireframe-notes {
            font-size: 0.95rem;
            color: #6c757d;
            text-align: left;
            line-height: 1.6;
            background: rgba(33, 150, 243, 0.1);
            padding: 16px;
            border-radius: 8px;
            border-left: 3px solid #2196f3;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-self: end;
        }

        /* Horizontal layout for feature lists */
        .feature-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .feature-tag {
            background: rgba(33, 150, 243, 0.15);
            color: #1976d2;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(33, 150, 243, 0.2);
        }

        .tag {
            background: rgba(33, 150, 243, 0.15);
            color: #1976d2;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(33, 150, 243, 0.2);
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
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

            .nav-links li {
                text-align: center;
            }

            .nav-links a {
                display: block;
                padding: 15px 30px;
                border-radius: 8px;
                transition: all 0.2s ease;
            }

            .nav-links a:hover {
                background: rgba(0, 0, 0, 0.05);
            }

            .mobile-menu-toggle {
                display: flex;
                z-index: 1000;
            }
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

        /* Clickable images */
        .highlight-image img {
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        .highlight-image img:hover {
            opacity: 0.8;
        }

        /* Modal Image Selector */
        .modal-selector {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.8);
            border-radius: 25px;
            padding: 10px 20px;
            display: none;
            gap: 10px;
            z-index: 1002;
        }

        .modal-selector.active {
            display: flex;
        }

        .selector-button {
            background: rgba(255, 255, 255, 0.3);
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            color: white;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .selector-button.active {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            border-color: rgba(255, 255, 255, 0.9);
        }

        .selector-button:hover {
            background: rgba(255, 255, 255, 0.6);
            color: #333;
        }

        /* Modal Navigation Arrows for Healthcare Platform */
        .modal-nav-arrow {
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
            display: none;
        }

        .modal-nav-arrow.active {
            display: block;
        }

        .modal-nav-arrow:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .modal-prev-arrow {
            left: 20px;
        }

        .modal-next-arrow {
            right: 20px;
        }

        /* Enhanced modal selector for grouped navigation */
        .modal-selector.grouped {
            bottom: 60px;
            flex-direction: column;
            gap: 15px;
            padding: 15px 25px;
        }

        .modal-group {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .modal-group-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.8rem;
            font-weight: 600;
            margin-right: 10px;
            min-width: 60px;
        }

        .modal-image-counter {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            z-index: 1002;
            display: none;
        }

        .modal-image-counter.active {
            display: block;
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

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .highlights-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .highlight-image {
                height: 250px;
            }

            .process-grid {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .wireframes-grid {
                grid-template-columns: 1fr;
                gap: 40px;
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
                <h1>HealthKarma Healthcare Platform</h1>
                <p>Designing comprehensive healthcare cost management and wellness platform to help families make informed healthcare decisions and reduce medical expenses. Complete platform wireframes and visual design for healthcare cost tracking, family health management, and savings optimization.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Design Philosophy</h2>
                    <p>Creating transparent healthcare cost management through intuitive design and family-centered workflows</p>
                </div>
                
                <div class="process-grid">
                    <div class="process-item">
                        <div class="process-number">1</div>
                        <h3>Cost Transparency</h3>
                        <p>Clear visualization of healthcare costs, deductibles, and savings opportunities to empower families with financial decision-making insights.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">2</div>
                        <h3>Family-Centered Design</h3>
                        <p>Unified dashboard for tracking multiple family members' health metrics, appointments, and cost breakdowns in one comprehensive view.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">3</div>
                        <h3>Preventive Focus</h3>
                        <p>Health scoring system and wellness tracking that encourages preventive care to reduce long-term healthcare costs and improve outcomes.</p>
                    </div>
                    
                    <div class="process-item">
                        <div class="process-number">4</div>
                        <h3>Integrated Marketplace</h3>
                        <p>Seamless integration with healthcare providers and services, offering member pricing and savings recommendations based on individual needs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Data Science Presentation Section -->
        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Data Science Presentation</h2>
                    <p>Comprehensive product analytics and user behavior insights for healthcare decision-making</p>
                </div>
                
                <div class="highlights-grid">
                    <div class="highlight-item">
                        <div class="highlight-image">
                            <img src="images/DataScienceSlide.png" alt="Membership Portal Annotations - Healthcare platform wireframes showing user interface design with numbered callouts explaining functionality and user flow" loading="eager" width="600" height="400">
                        </div>
                        <div class="highlight-content">
                            <h3>Data Science Presentation</h3>
                            <p>Comprehensive product report showcasing full-story analytics, user behavior patterns, and data-driven insights for healthcare platform optimization. Includes user journey analysis, conversion metrics, and actionable recommendations for platform improvement.</p>
                            <div class="project-tags" style="margin: 20px 0;">
                                <span class="tag">Product Analytics</span>
                                <span class="tag">User Behavior Analysis</span>
                                <span class="tag">Conversion Metrics</span>
                                <span class="tag">Data Visualization</span>
                                <span class="tag">Performance Insights</span>
                                <span class="tag">Healthcare Metrics</span>
                            </div>
                            <div style="margin-top: 20px;">
                                <a href="https://www.figma.com/board/cE6FR6Wla35uiMj3xzW8SC/Product-Report---Full-Story-4.24?node-id=0-1&t=4mT11s48jDqhmyfJ-1" target="_blank" rel="noopener" style="display: inline-block; background: #1976d2; color: white; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;">View Presentation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Homepage & Site Design Section -->
        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Homepage and Health Karma</h2>
                    <p>Healthcare platform designs and comprehensive site architecture</p>
                </div>
                
                <div class="highlights-grid">
                    <div class="highlight-item">
                        <div class="highlight-image">
                            <img src="images/1.0.1 - MVP - Desktop - Membership Portal.png" alt="HealthKarma Homepage Design" onclick="openHealthcarePlatformModal()" loading="eager" width="600" height="400">
                        </div>
                        <div class="highlight-content">
                            <h3>HealthKarma Platform</h3>
                            <p>The main landing page establishes the platform's value proposition with clear navigation, trust indicators, and primary user actions. Features healthcare decision tools, cost savings messaging, and trusted partner logos.</p>
                            <div class="project-tags" style="margin: 20px 0;">
                                <span class="tag">Value Proposition Messaging</span>
                                <span class="tag">Primary Action Buttons</span>
                                <span class="tag">Trust Indicators</span>
                                <span class="tag">Healthcare Decision Support</span>
                                <span class="tag">Mobile-Responsive Navigation</span>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-item">
                        <div class="highlight-image">
                            <img src="images/healthcare-homepage-card.png" alt="Healthcare.com Homepage Design" onclick="openHealthcareModal()" loading="lazy" width="600" height="400" style="cursor: pointer;">
                        </div>
                        <div class="highlight-content">
                            <h3>Healthcare.com Homepage Design</h3>
                            <p>Complete platform presentation showcasing healthcare UX definitions, user experience principles, and comprehensive design methodology. Click the image to view the full presentation with detailed design documentation and process insights.</p>
                            <div class="project-tags" style="margin: 20px 0;">
                                <span class="tag">UX Definitions</span>
                                <span class="tag">Design Methodology</span>
                                <span class="tag">User Experience Principles</span>
                                <span class="tag">Platform Architecture</span>
                                <span class="tag">Design Documentation</span>
                                <span class="tag">Process Framework</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HealthKarma Platform Section -->
        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>HealthKarma Platform</h2>
                    <p>Comprehensive healthcare cost management and wellness platform design</p>
                </div>

                <!-- Presentation Subsection -->
                <div class="highlights-grid">
                    <div class="highlight-item">
                        <div class="highlight-image">
                            <img src="images/healthkarma-presentation.png" alt="HealthKarma Platform Presentation" loading="eager" width="600" height="400">
                        </div>
                        <div class="highlight-content">
                            <h3>Platform Presentation</h3>
                            <p>Comprehensive presentation showcasing the HealthKarma platform ecosystem, including personal health scoring, expense tracking, benefit optimization, and curated healthcare marketplace functionality designed to empower informed healthcare decisions.</p>
                            <div class="project-tags" style="margin: 20px 0;">
                                <span class="tag">Healthcare Cost Management</span>
                                <span class="tag">Personal Health Scoring</span>
                                <span class="tag">Family Health Tracking</span>
                                <span class="tag">Benefit Optimization</span>
                                <span class="tag">Healthcare Marketplace</span>
                            </div>
                            <a href="https://www.figma.com/slides/byLcLF9M5h7EW0j5qqIjy9/Healthcare-Portfolio?t=OPja3nUmv5rAoihg-1" target="_blank" style="display: inline-block; margin-top: 15px; padding: 8px 16px; background: #1976d2; color: white; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 0.9rem;">View Full Presentation →</a>
                        </div>
                    </div>
                </div>

                <!-- Wireframes Subsection -->
                <h3 style="font-size: 2rem; font-weight: 700; color: #2c3e50; margin: 60px 0 40px 0; text-align: center;">Wireframes</h3>
                <div class="wireframes-grid">
                    <div class="wireframe-item">
                        <h4>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                <rect x="7" y="7" width="3" height="9"/>
                                <rect x="14" y="7" width="3" height="5"/>
                            </svg>
                            Personal Health Dashboard
                        </h4>
                        <div class="image-container">
                            <img src="images/healthkarma-dashboard.png" alt="HealthKarma Personal Health Dashboard Wireframe" loading="lazy" width="600" height="400">
                        </div>
                        <div class="wireframe-notes">
                            <strong>Dashboard Features:</strong>
                            <div class="feature-list">
                                <span class="feature-tag">Personal health score with family view</span>
                                <span class="feature-tag">Comprehensive cost tracking and breakdowns</span>
                                <span class="feature-tag">Appointment and procedure scheduling</span>
                                <span class="feature-tag">Healthcare store with member pricing</span>
                                <span class="feature-tag">Savings recommendations and insights</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="wireframe-item">
                        <h4>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="22,12 18,12 15,21 9,3 6,12 2,12"/>
                            </svg>
                            Family Health Dashboard
                        </h4>
                        <div class="image-container">
                            <img src="images/healthkarma-summary-alt.png" alt="HealthKarma Family Health Dashboard Wireframe" loading="lazy" width="600" height="400">
                        </div>
                        <div class="wireframe-notes">
                            <strong>Analytics Features:</strong>
                            <div class="feature-list">
                                <span class="feature-tag">Visual health score trends over time</span>
                                <span class="feature-tag">Family member individual tracking</span>
                                <span class="feature-tag">Deductible and HSA balance monitoring</span>
                                <span class="feature-tag">Procedure and prescription tracking</span>
                                <span class="feature-tag">Detailed cost breakdowns by category</span>
                            </div>
                        </div>
                    </div>

                    <div class="wireframe-item">
                        <h4>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                                <line x1="8" y1="21" x2="16" y2="21"/>
                                <line x1="12" y1="17" x2="12" y2="21"/>
                            </svg>
                            Interactive Modal System
                        </h4>
                        <div class="image-container">
                            <img src="images/healthkarma-modal-1.png" alt="HealthKarma Interactive Modal System" onclick="openInteractiveSystemModal()" loading="lazy" width="600" height="400" style="cursor: pointer;">
                        </div>
                        <div class="wireframe-notes">
                            <strong>System Features:</strong>
                            <div class="feature-list">
                                <span class="feature-tag">Health plan integration flows</span>
                                <span class="feature-tag">Navigation structure & user flows</span>
                                <span class="feature-tag">Platform architecture & data management</span>
                                <span class="feature-tag">Interactive modal workflows</span>
                                <span class="feature-tag">Scalable design patterns</span>
                                <span class="feature-tag">System integration points</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Insurance Matchmaker Wireframes Subsection -->
                <h3 style="font-size: 2rem; font-weight: 700; color: #2c3e50; margin: 60px 0 40px 0; text-align: center;">Insurance Matchmaker Wireframes</h3>
                <div class="wireframes-grid">
                    <div class="wireframe-item">
                        <h4>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                                <polyline points="3.27,6.96 12,12.01 20.73,6.96"/>
                                <line x1="12" y1="22.08" x2="12" y2="12"/>
                            </svg>
                            Landing Page Flow
                        </h4>
                        <div class="image-container">
                            <img src="images/1.0 Landing Page v1.png" alt="HealthKarma Landing Page Wireframes" onclick="openInsuranceMatchmakerModal()" loading="lazy" width="600" height="400" style="cursor: pointer;">
                        </div>
                        <div class="wireframe-notes">
                            <strong>Landing Features:</strong>
                            <div class="feature-list">
                                <span class="feature-tag">Hero section with value proposition</span>
                                <span class="feature-tag">Primary navigation structure</span>
                                <span class="feature-tag">Call-to-action placement</span>
                                <span class="feature-tag">Trust indicators and testimonials</span>
                                <span class="feature-tag">Mobile-responsive design</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="wireframe-item">
                        <h4>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="3"/>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                            </svg>
                            Insurance Matchmaker Tool
                        </h4>
                        <div class="image-container">
                            <img src="images/3.0 Matchmaker.png" alt="Insurance Matchmaker Tool Interface" loading="lazy" width="600" height="400">
                        </div>
                        <div class="wireframe-notes">
                            <strong>Matchmaker Features:</strong>
                            <div class="feature-list">
                                <span class="feature-tag">Multi-step form wizard</span>
                                <span class="feature-tag">Progressive disclosure</span>
                                <span class="feature-tag">Real-time validation</span>
                                <span class="feature-tag">Progress indicators</span>
                                <span class="feature-tag">Insurance criteria matching</span>
                            </div>
                        </div>
                    </div>

                    <div class="wireframe-item">
                        <h4>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14,2 14,8 20,8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                                <polyline points="10,9 9,9 8,9"/>
                            </svg>
                            Plan Results & Comparison
                        </h4>
                        <div class="image-container">
                            <img src="images/4.0 Plan Results.png" alt="Insurance Plan Results Display" loading="lazy" width="600" height="400">
                        </div>
                        <div class="wireframe-notes">
                            <strong>Results Features:</strong>
                            <div class="feature-list">
                                <span class="feature-tag">Sortable plan listings</span>
                                <span class="feature-tag">Comparison functionality</span>
                                <span class="feature-tag">Filter and search options</span>
                                <span class="feature-tag">Cost breakdown displays</span>
                                <span class="feature-tag">Plan detail previews</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Membership Portal Annotations Subsection -->
                <h3 style="font-size: 2rem; font-weight: 700; color: #2c3e50; margin: 60px 0 40px 0; text-align: center;">Membership Portal Annotations</h3>
                <div class="highlights-grid">

                    <div class="highlight-item">
                        <div class="highlight-image">
                            <img src="images/1.0.1 - MVP - Desktop - Membership Portal - Unkown Insurance.png" alt="HealthKarma MVP Wireframes" onclick="openMVPWireframesModal()" loading="lazy" width="600" height="400" style="cursor: pointer;">
                        </div>
                        <div class="highlight-content">
                            <h3>MVP Membership Portal Wireframes</h3>
                            <p>Comprehensive wireframe collection showcasing the complete HealthKarma MVP membership portal across multiple versions and user states. Features desktop and mobile responsive designs for unknown insurance users, insured members, and account management workflows.</p>
                            <div class="project-tags" style="margin: 20px 0;">
                                <span class="tag">MVP Wireframes</span>
                                <span class="tag">Membership Portal</span>
                                <span class="tag">Multi-Version Design</span>
                                <span class="tag">Insurance Integration</span>
                                <span class="tag">User State Management</span>
                                <span class="tag">Desktop & Mobile</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Image Modal -->
    <div class="modal" id="imageModal">
        <div class="modal-content">
            <button class="modal-close" id="modalClose">&times;</button>
            <button class="modal-nav-arrow modal-prev-arrow" id="modalPrevArrow">&#10094;</button>
            <button class="modal-nav-arrow modal-next-arrow" id="modalNextArrow">&#10095;</button>
            <img class="modal-image" id="modalImage" src="" alt="">
        </div>
        <div class="modal-selector" id="modalSelector">
            <button class="selector-button active" onclick="switchHealthcareImage(0)">Desktop</button>
            <button class="selector-button" onclick="switchHealthcareImage(1)">Mobile</button>
        </div>
        <div class="modal-image-counter" id="modalImageCounter">1 / 6</div>
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

        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const navLinks = document.querySelector('.nav-links');

        if (mobileMenuToggle && navLinks) {
            mobileMenuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                mobileMenuToggle.classList.toggle('active');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!navLinks.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                    navLinks.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                }
            });

            // Close mobile menu when clicking on links
            const mobileNavLinks = navLinks.querySelectorAll('a');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                });
            });
        }

        // Resume link functionality (redirect to main site)
        const resumeLinkHeader = document.getElementById('resumeLinkHeader');
        if (resumeLinkHeader) {
            resumeLinkHeader.addEventListener('click', () => {
                window.open('https://sonny-steele.com', '_blank');
            });
        }

        // Healthcare Modal Functionality
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalClose = document.getElementById('modalClose');
        const modalSelector = document.getElementById('modalSelector');
        const modalPrevArrow = document.getElementById('modalPrevArrow');
        const modalNextArrow = document.getElementById('modalNextArrow');
        const modalImageCounter = document.getElementById('modalImageCounter');

        // Healthcare images array (simple homepage/mobile)
        const healthcareImages = [
            'images/homepage healthcare.com desktop.png',
            'images/mobile healthcare.com mobile.jpg'
        ];
        let currentHealthcareIndex = 0;

        // Interactive System images array
        const interactiveSystemImages = [
            'images/healthkarma-modal-1.png',
            'images/Frame 11.png',
            'images/Frame 9.png'
        ];
        let currentInteractiveSystemIndex = 0;

        // MVP Wireframes images array
        const mvpWireframesImages = [
            'images/1.0.1 - MVP - Desktop - Membership Portal - Unkown Insurance.png',
            'images/1.0.1 - MVP - Mobile - Membership Portal - Unkown Insurance.png',
            'images/1.0.2 - MVP - Desktop - Membership Portal - Unkown Insurance - View Member Details.png',
            'images/1.0.2 - MVP - Mobile - Membership Portal - Unkown Insurance - View Member Details.png',
            'images/2.0.1 - MVP - Desktop - Membership Portal - Insured.png',
            'images/2.0.1 - MVP - Mobile - Membership Portal - Insured.png',
            'images/3.0.1- MVP - Desktop - Membership Portal - My Account.png',
            'images/3.0.1- MVP - Mobile - Membership Portal - My Account.png',
            'images/3.0.1 - MVP - Mobile - Membership Portal - Unkown Insurance.png',
            'images/3.0.2 - MVP - Mobile - Membership Portal - Unkown Insurance - View Member Details.png',
            'images/3.0.7 - MVP - Mobile - Membership Portal - Unkown Insurance - View Member Details.png',
            'images/3.0.9 - MVP - Mobile - Membership Portal - Unkown Insurance - View Member Details.png'
        ];
        let currentMVPWireframesIndex = 0;

        // Insurance Matchmaker images array
        const insuranceMatchmakerImages = [
            'images/1.0 Landing Page v1.png',
            'images/1.0.0 - Insurance Matchmaker - Additonal Categories.png',
            'images/1.0.0 - Insurance Matchmaker - Teaser.png',
            'images/1.0.2 - Desktop Landing Page - Collapsed Nav.png',
            'images/1.0.2 - Insurance Matchmaker - Teaser.png',
            'images/3.0 Matchmaker.png',
            'images/4.0 Plan Results.png',
            'images/5.0 Plan Comparrison.png',
            'images/6.0 Plan Details.png',
            'images/Frame 4617.png'
        ];
        let currentInsuranceMatchmakerIndex = 0;

        // Healthcare Platform images array (grouped by desktop/mobile)
        const healthcarePlatformImages = {
            desktop: [
                'images/1.0.1 - Sign In - Desktop.jpg',
                'images/1.0.2 - Incorrect Credentials - Desktop.jpg', 
                'images/1.0.1 - MVP - Desktop - Membership Portal.png',
                'images/3.0.7 - MVP - Desktop - Membership Portal - Unkown Insurance - View Member Details.png'
            ],
            mobile: [
                'images/1.0.1 - Sign In - Mobile.jpg',
                'images/1.0.1 - MVP - Mobile - Membership Portal.png'
            ]
        };
        let currentPlatformImages = [];
        let currentPlatformIndex = 0;
        let currentPlatformGroup = 'desktop';

        // Open healthcare modal (simple homepage/mobile)
        function openHealthcareModal() {
            currentHealthcareIndex = 0;
            modal.classList.add('active');
            modalImage.src = healthcareImages[currentHealthcareIndex];
            modalImage.alt = 'Healthcare.com Homepage Design';
            modalSelector.classList.add('active');
            modalSelector.classList.remove('grouped');
            modalPrevArrow.classList.remove('active');
            modalNextArrow.classList.remove('active');
            modalImageCounter.classList.remove('active');
            document.body.style.overflow = 'hidden';
            updateSelectorButtons();
        }

        // Open healthcare platform modal (grouped desktop/mobile)
        function openHealthcarePlatformModal() {
            currentPlatformGroup = 'desktop';
            currentPlatformIndex = 0;
            currentPlatformImages = healthcarePlatformImages[currentPlatformGroup];
            
            modal.classList.add('active');
            modalImage.src = currentPlatformImages[currentPlatformIndex];
            modalImage.alt = 'Healthcare Platform Desktop Design';
            
            // Setup grouped selector
            modalSelector.innerHTML = `
                <div class="modal-group">
                    <span class="modal-group-label">Desktop:</span>
                    <button class="selector-button active" onclick="switchPlatformGroup('desktop')">Desktop</button>
                    <button class="selector-button" onclick="switchPlatformGroup('mobile')">Mobile</button>
                </div>
            `;
            modalSelector.classList.add('active', 'grouped');
            modalPrevArrow.classList.add('active');
            modalNextArrow.classList.add('active');
            modalImageCounter.classList.add('active');
            
            document.body.style.overflow = 'hidden';
            updatePlatformCounter();
        }

        // Switch healthcare image
        function switchHealthcareImage(index) {
            currentHealthcareIndex = index;
            modalImage.src = healthcareImages[currentHealthcareIndex];
            modalImage.alt = index === 0 ? 'Healthcare.com Desktop Homepage' : 'Healthcare.com Mobile Homepage';
            updateSelectorButtons();
        }

        // Update selector button states
        function updateSelectorButtons() {
            const buttons = modalSelector.querySelectorAll('.selector-button');
            buttons.forEach((button, index) => {
                if (index === currentHealthcareIndex) {
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
        }

        // Switch platform group (desktop/mobile)
        function switchPlatformGroup(group) {
            currentPlatformGroup = group;
            currentPlatformIndex = 0;
            currentPlatformImages = healthcarePlatformImages[group];
            
            modalImage.src = currentPlatformImages[currentPlatformIndex];
            modalImage.alt = `Healthcare Platform ${group.charAt(0).toUpperCase() + group.slice(1)} Design`;
            
            // Update selector buttons
            const buttons = modalSelector.querySelectorAll('.selector-button');
            buttons.forEach((button, index) => {
                if ((index === 0 && group === 'desktop') || (index === 1 && group === 'mobile')) {
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
            
            updatePlatformCounter();
        }

        // Navigate platform images with arrows
        function navigatePlatformImage(direction) {
            if (direction === 'next') {
                currentPlatformIndex = (currentPlatformIndex + 1) % currentPlatformImages.length;
            } else {
                currentPlatformIndex = (currentPlatformIndex - 1 + currentPlatformImages.length) % currentPlatformImages.length;
            }
            
            modalImage.src = currentPlatformImages[currentPlatformIndex];
            modalImage.alt = `Healthcare Platform ${currentPlatformGroup.charAt(0).toUpperCase() + currentPlatformGroup.slice(1)} Design`;
            updatePlatformCounter();
        }

        // Update platform counter
        function updatePlatformCounter() {
            const totalImages = healthcarePlatformImages.desktop.length + healthcarePlatformImages.mobile.length;
            let currentPosition = currentPlatformIndex + 1;
            if (currentPlatformGroup === 'mobile') {
                currentPosition += healthcarePlatformImages.desktop.length;
            }
            modalImageCounter.textContent = `${currentPosition} / ${totalImages}`;
        }

        // Open interactive system modal
        function openInteractiveSystemModal() {
            currentInteractiveSystemIndex = 0;
            modal.classList.add('active');
            modalImage.src = interactiveSystemImages[currentInteractiveSystemIndex];
            modalImage.alt = 'Interactive Modal System';
            modalSelector.classList.add('active');
            modalSelector.classList.remove('grouped');
            modalPrevArrow.classList.add('active');
            modalNextArrow.classList.add('active');
            modalImageCounter.classList.add('active');
            document.body.style.overflow = 'hidden';
            updateInteractiveSystemSelector();
            updateInteractiveSystemCounter();
        }

        // Update interactive system selector buttons
        function updateInteractiveSystemSelector() {
            modalSelector.innerHTML = `
                <button class="selector-button ${currentInteractiveSystemIndex === 0 ? 'active' : ''}" onclick="goToInteractiveSystemImage(0)">Modal System</button>
                <button class="selector-button ${currentInteractiveSystemIndex === 1 ? 'active' : ''}" onclick="goToInteractiveSystemImage(1)">UI Wireframes</button>
                <button class="selector-button ${currentInteractiveSystemIndex === 2 ? 'active' : ''}" onclick="goToInteractiveSystemImage(2)">Architecture</button>
            `;
        }

        // Go to specific interactive system image
        function goToInteractiveSystemImage(index) {
            currentInteractiveSystemIndex = index;
            modalImage.src = interactiveSystemImages[currentInteractiveSystemIndex];
            const imageNames = ['Interactive Modal System', 'UI Wireframes', 'Platform Architecture'];
            modalImage.alt = imageNames[currentInteractiveSystemIndex];
            updateInteractiveSystemSelector();
            updateInteractiveSystemCounter();
        }

        // Navigate interactive system images with arrows
        function navigateInteractiveSystemImage(direction) {
            if (direction === 'next') {
                currentInteractiveSystemIndex = (currentInteractiveSystemIndex + 1) % interactiveSystemImages.length;
            } else {
                currentInteractiveSystemIndex = (currentInteractiveSystemIndex - 1 + interactiveSystemImages.length) % interactiveSystemImages.length;
            }
            
            const imageNames = ['Interactive Modal System', 'UI Wireframes', 'Platform Architecture'];
            modalImage.src = interactiveSystemImages[currentInteractiveSystemIndex];
            modalImage.alt = imageNames[currentInteractiveSystemIndex];
            updateInteractiveSystemSelector();
            updateInteractiveSystemCounter();
        }

        // Update interactive system counter
        function updateInteractiveSystemCounter() {
            modalImageCounter.textContent = `${currentInteractiveSystemIndex + 1} / ${interactiveSystemImages.length}`;
        }

        // Open MVP wireframes modal
        function openMVPWireframesModal() {
            currentMVPWireframesIndex = 0;
            modal.classList.add('active');
            modalImage.src = mvpWireframesImages[currentMVPWireframesIndex];
            modalImage.alt = 'MVP Membership Portal Wireframes';
            modalSelector.classList.add('active');
            modalSelector.classList.remove('grouped');
            modalPrevArrow.classList.add('active');
            modalNextArrow.classList.add('active');
            modalImageCounter.classList.add('active');
            document.body.style.overflow = 'hidden';
            updateMVPWireframesSelector();
            updateMVPWireframesCounter();
        }

        // Update MVP wireframes selector buttons
        function updateMVPWireframesSelector() {
            modalSelector.innerHTML = `
                <button class="selector-button ${currentMVPWireframesIndex === 0 ? 'active' : ''}" onclick="goToMVPWireframesImage(0)">v1.0.1 Desktop</button>
                <button class="selector-button ${currentMVPWireframesIndex === 1 ? 'active' : ''}" onclick="goToMVPWireframesImage(1)">v1.0.1 Mobile</button>
                <button class="selector-button ${currentMVPWireframesIndex === 2 ? 'active' : ''}" onclick="goToMVPWireframesImage(2)">v1.0.2 Desktop</button>
                <button class="selector-button ${currentMVPWireframesIndex === 3 ? 'active' : ''}" onclick="goToMVPWireframesImage(3)">v1.0.2 Mobile</button>
                <button class="selector-button ${currentMVPWireframesIndex === 4 ? 'active' : ''}" onclick="goToMVPWireframesImage(4)">v2.0.1 Desktop</button>
                <button class="selector-button ${currentMVPWireframesIndex === 5 ? 'active' : ''}" onclick="goToMVPWireframesImage(5)">v2.0.1 Mobile</button>
                <button class="selector-button ${currentMVPWireframesIndex === 6 ? 'active' : ''}" onclick="goToMVPWireframesImage(6)">v3.0.1 Desktop</button>
                <button class="selector-button ${currentMVPWireframesIndex === 7 ? 'active' : ''}" onclick="goToMVPWireframesImage(7)">v3.0.1 Mobile</button>
                <button class="selector-button ${currentMVPWireframesIndex === 8 ? 'active' : ''}" onclick="goToMVPWireframesImage(8)">v3.0.1 Mobile</button>
                <button class="selector-button ${currentMVPWireframesIndex === 9 ? 'active' : ''}" onclick="goToMVPWireframesImage(9)">v3.0.2 Mobile</button>
                <button class="selector-button ${currentMVPWireframesIndex === 10 ? 'active' : ''}" onclick="goToMVPWireframesImage(10)">v3.0.7 Mobile</button>
                <button class="selector-button ${currentMVPWireframesIndex === 11 ? 'active' : ''}" onclick="goToMVPWireframesImage(11)">v3.0.9 Mobile</button>
            `;
        }

        // Go to specific MVP wireframes image
        function goToMVPWireframesImage(index) {
            currentMVPWireframesIndex = index;
            modalImage.src = mvpWireframesImages[currentMVPWireframesIndex];
            modalImage.alt = 'MVP Membership Portal Wireframes';
            updateMVPWireframesSelector();
            updateMVPWireframesCounter();
        }

        // Navigate MVP wireframes images with arrows
        function navigateMVPWireframesImage(direction) {
            if (direction === 'next') {
                currentMVPWireframesIndex = (currentMVPWireframesIndex + 1) % mvpWireframesImages.length;
            } else {
                currentMVPWireframesIndex = (currentMVPWireframesIndex - 1 + mvpWireframesImages.length) % mvpWireframesImages.length;
            }
            
            modalImage.src = mvpWireframesImages[currentMVPWireframesIndex];
            modalImage.alt = 'MVP Membership Portal Wireframes';
            updateMVPWireframesSelector();
            updateMVPWireframesCounter();
        }

        // Update MVP wireframes counter
        function updateMVPWireframesCounter() {
            modalImageCounter.textContent = `${currentMVPWireframesIndex + 1} / ${mvpWireframesImages.length}`;
        }

        // Open Insurance Matchmaker modal
        function openInsuranceMatchmakerModal() {
            currentInsuranceMatchmakerIndex = 0;
            modal.classList.add('active');
            modalImage.src = insuranceMatchmakerImages[currentInsuranceMatchmakerIndex];
            modalImage.alt = 'Insurance Matchmaker Wireframes';
            modalSelector.classList.add('active');
            modalSelector.classList.remove('grouped');
            modalPrevArrow.classList.add('active');
            modalNextArrow.classList.add('active');
            modalImageCounter.classList.add('active');
            document.body.style.overflow = 'hidden';
            updateInsuranceMatchmakerSelector();
            updateInsuranceMatchmakerCounter();
        }

        // Update Insurance Matchmaker selector buttons
        function updateInsuranceMatchmakerSelector() {
            modalSelector.innerHTML = `
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 0 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(0)">Landing v1</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 1 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(1)">Categories</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 2 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(2)">Teaser v1</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 3 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(3)">Landing v2</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 4 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(4)">Teaser v2</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 5 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(5)">Matchmaker</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 6 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(6)">Results</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 7 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(7)">Comparison</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 8 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(8)">Details</button>
                <button class="selector-button ${currentInsuranceMatchmakerIndex === 9 ? 'active' : ''}" onclick="goToInsuranceMatchmakerImage(9)">Framework</button>
            `;
        }

        // Go to specific Insurance Matchmaker image
        function goToInsuranceMatchmakerImage(index) {
            currentInsuranceMatchmakerIndex = index;
            modalImage.src = insuranceMatchmakerImages[currentInsuranceMatchmakerIndex];
            modalImage.alt = 'Insurance Matchmaker Wireframes';
            updateInsuranceMatchmakerSelector();
            updateInsuranceMatchmakerCounter();
        }

        // Navigate Insurance Matchmaker images with arrows
        function navigateInsuranceMatchmakerImage(direction) {
            if (direction === 'next') {
                currentInsuranceMatchmakerIndex = (currentInsuranceMatchmakerIndex + 1) % insuranceMatchmakerImages.length;
            } else {
                currentInsuranceMatchmakerIndex = (currentInsuranceMatchmakerIndex - 1 + insuranceMatchmakerImages.length) % insuranceMatchmakerImages.length;
            }
            
            modalImage.src = insuranceMatchmakerImages[currentInsuranceMatchmakerIndex];
            modalImage.alt = 'Insurance Matchmaker Wireframes';
            updateInsuranceMatchmakerSelector();
            updateInsuranceMatchmakerCounter();
        }

        // Update Insurance Matchmaker counter
        function updateInsuranceMatchmakerCounter() {
            modalImageCounter.textContent = `${currentInsuranceMatchmakerIndex + 1} / ${insuranceMatchmakerImages.length}`;
        }

        // Regular modal function (for other images)
        function openModal(imageSrc, imageAlt = '') {
            modal.classList.add('active');
            modalImage.src = imageSrc;
            modalImage.alt = imageAlt;
            modalSelector.classList.remove('active');
            document.body.style.overflow = 'hidden';
        }

        // Close modal
        function closeModal() {
            modal.classList.remove('active');
            modalSelector.classList.remove('active', 'grouped');
            modalPrevArrow.classList.remove('active');
            modalNextArrow.classList.remove('active');
            modalImageCounter.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Event listeners
        modalClose.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        modalPrevArrow.addEventListener('click', () => {
            if (modalSelector.innerHTML.includes('Modal System')) {
                navigateInteractiveSystemImage('prev');
            } else if (modalSelector.innerHTML.includes('v1.0.1')) {
                navigateMVPWireframesImage('prev');
            } else if (modalSelector.innerHTML.includes('Landing v1')) {
                navigateInsuranceMatchmakerImage('prev');
            } else {
                navigatePlatformImage('prev');
            }
        });

        modalNextArrow.addEventListener('click', () => {
            if (modalSelector.innerHTML.includes('Modal System')) {
                navigateInteractiveSystemImage('next');
            } else if (modalSelector.innerHTML.includes('v1.0.1')) {
                navigateMVPWireframesImage('next');
            } else if (modalSelector.innerHTML.includes('Landing v1')) {
                navigateInsuranceMatchmakerImage('next');
            } else {
                navigatePlatformImage('next');
            }
        });

        // Close modal with Escape key and arrow navigation
        document.addEventListener('keydown', (e) => {
            if (modal.classList.contains('active')) {
                if (e.key === 'Escape') {
                    closeModal();
                } else if (modalPrevArrow.classList.contains('active')) {
                    // Allow arrow navigation for all modal types
                    if (e.key === 'ArrowLeft') {
                        if (modalSelector.innerHTML.includes('Modal System')) {
                            navigateInteractiveSystemImage('prev');
                        } else if (modalSelector.innerHTML.includes('v1.0.1')) {
                            navigateMVPWireframesImage('prev');
                        } else if (modalSelector.innerHTML.includes('Landing v1')) {
                            navigateInsuranceMatchmakerImage('prev');
                        } else {
                            navigatePlatformImage('prev');
                        }
                    } else if (e.key === 'ArrowRight') {
                        if (modalSelector.innerHTML.includes('Modal System')) {
                            navigateInteractiveSystemImage('next');
                        } else if (modalSelector.innerHTML.includes('v1.0.1')) {
                            navigateMVPWireframesImage('next');
                        } else if (modalSelector.innerHTML.includes('Landing v1')) {
                            navigateInsuranceMatchmakerImage('next');
                        } else {
                            navigatePlatformImage('next');
                        }
                    }
                }
            }
        });

        // Add click listeners to all other images
        function addImageClickListeners() {
            const images = document.querySelectorAll('.highlight-image img, .image-container img');
            images.forEach(img => {
                if (!img.onclick && !img.src.includes('healthcare-com-deck.png')) {
                    img.addEventListener('click', (e) => {
                        e.preventDefault();
                        openModal(img.src, img.alt);
                    });
                    img.style.cursor = 'pointer';
                }
            });
        }

        // Initialize modal listeners when page loads
        addImageClickListeners();

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>