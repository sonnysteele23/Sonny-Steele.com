// Modern Portfolio JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile Navigation Toggle
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });
    }
    
    // Close mobile menu when clicking on links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navMenu.classList.remove('active');
            navToggle.classList.remove('active');
        });
    });
    
    // Smooth scrolling for navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Header scroll effect
    const header = document.querySelector('.header');
    let lastScrollY = window.scrollY;
    
    window.addEventListener('scroll', function() {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 100) {
            header.style.backgroundColor = 'rgba(10, 10, 10, 0.98)';
        } else {
            header.style.backgroundColor = 'rgba(10, 10, 10, 0.95)';
        }
        
        lastScrollY = currentScrollY;
    });
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.testimonial-card, .case-study-card');
    animateElements.forEach(el => {
        observer.observe(el);
    });
    
    // Blok functionality removed - only Hero Blok remains visible
    
    // Floating cards animation enhancement
    const floatingCards = document.querySelectorAll('.floating-card');
    floatingCards.forEach((card, index) => {
        // Add random movement
        setInterval(() => {
            const randomX = (Math.random() - 0.5) * 10;
            const randomY = (Math.random() - 0.5) * 10;
            card.style.transform = `translate(${randomX}px, ${randomY}px)`;
        }, 2000 + (index * 500));
    });
    
    // Contact form functionality (if needed)
    const ctaButtons = document.querySelectorAll('.cta-button');
    ctaButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
                openContactModal();
            }, 150);
        });
    });
    
    // Testimonials rotation
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('.testimonial-card');
    
    if (testimonials.length > 0) {
        setInterval(() => {
            testimonials.forEach(card => card.style.opacity = '0.7');
            testimonials[currentTestimonial].style.opacity = '1';
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        }, 4000);
    }
    
    // Case study card hover effects
    const caseStudyCards = document.querySelectorAll('.case-study-card');
    caseStudyCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Parallax effect for hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.floating-card');
        const speed = 0.5;
        
        parallaxElements.forEach(element => {
            const yPos = -(scrolled * speed);
            element.style.transform += ` translateY(${yPos}px)`;
        });
    });
    
    // Dynamic greeting based on time
    const greeting = document.querySelector('.hero-badge');
    if (greeting) {
        const hour = new Date().getHours();
        let greetingText = 'Available for Work';
        
        if (hour < 12) {
            greetingText = 'Good Morning - Available for Work';
        } else if (hour < 17) {
            greetingText = 'Good Afternoon - Available for Work';
        } else {
            greetingText = 'Good Evening - Available for Work';
        }
        
        // Don't update if it might break the layout
        // greeting.innerHTML = '<span class="badge-dot"></span>' + greetingText;
    }
    
    // Loading animation
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
});

// Resume Modal Functions
function openResumeModal() {
    const modal = document.getElementById('resumeModal');
    if (modal) {
        modal.classList.add('active');
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
}

function closeResumeModal() {
    const modal = document.getElementById('resumeModal');
    if (modal) {
        modal.classList.remove('active');
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

function downloadResume(format) {
    if (format === 'pdf') {
        window.open('assets/resume/Sonny_Steele_Resume.pdf', '_blank');
    } else if (format === 'docx') {
        window.open('assets/resume/Sonny_Steele_Resume.docx', '_blank');
    }
    closeResumeModal();
}

// Contact Modal Functions
function openContactModal() {
    const modal = document.getElementById('contactModal');
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeContactModal() {
    const modal = document.getElementById('contactModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
}

// Handle modal events
document.addEventListener('DOMContentLoaded', function() {
    // Resume modal events
    const resumeModal = document.getElementById('resumeModal');
    if (resumeModal) {
        resumeModal.addEventListener('click', function(e) {
            if (e.target === resumeModal) {
                closeResumeModal();
            }
        });
    }
    
    // Contact modal events
    const contactModal = document.getElementById('contactModal');
    if (contactModal) {
        contactModal.addEventListener('click', function(e) {
            if (e.target === contactModal) {
                closeContactModal();
            }
        });
    }
    
    // Close modals with escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeContactModal();
            closeResumeModal();
        }
    });
    
    // Handle contact form submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const message = formData.get('message');
            
            // Create mailto link with form data
            const subject = encodeURIComponent(`Project Inquiry from ${name}`);
            const body = encodeURIComponent(`Name: ${name}\nEmail: ${email}\n\nMessage:\n${message}`);
            const mailtoLink = `mailto:ssteele23@icloud.com?subject=${subject}&body=${body}`;
            
            window.open(mailtoLink, '_blank');
            closeContactModal();
        });
    }
});

// CSS animations via JavaScript
const style = document.createElement('style');
style.textContent = `
    .animate-in {
        animation: slideInUp 0.6s ease forwards;
    }
    
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .loaded .hero-content {
        animation: fadeInUp 1s ease forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(style);