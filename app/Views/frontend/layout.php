
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - ' : '' ?>Nayantar Memorial Charitable Trust</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1e40af;
            --secondary-color: #dc2626;
            --accent-color: #f59e0b;
            --success-color: #059669;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --light-bg: #f8fafc;
            --gradient-primary: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            --gradient-secondary: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
            --gradient-accent: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background-color: #ffffff;
            scroll-behavior: smooth;
        }
        
        .font-display {
            font-family: 'Playfair Display', serif;
        }
        
        /* Navigation Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-md);
            padding: 0.5rem 0;
        }
        
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color) !important;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .navbar-brand:hover {
            color: var(--secondary-color) !important;
            transform: translateY(-1px);
        }
        
        .navbar-nav .nav-link {
            color: var(--text-primary) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
            background: rgba(30, 64, 175, 0.1);
            transform: translateY(-1px);
        }
        
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .navbar-nav .nav-link:hover::after {
            width: 80%;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(30, 64, 175, 0.95) 0%, rgba(59, 130, 246, 0.9) 100%), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23f3f4f6" fill-opacity="0.3" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,117.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            color: white;
            padding: 120px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"><animate attributeName="opacity" values="0.1;0.3;0.1" dur="3s" repeatCount="indefinite"/></circle></svg>') repeat;
            animation: float 20s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.5s forwards;
        }
        
        .hero-section .lead {
            font-size: 1.4rem;
            margin-bottom: 2.5rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.7s forwards;
        }
        
        .hero-buttons {
            opacity: 0;
            animation: fadeInUp 1s ease 0.9s forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Button Styles */
        .btn {
            font-weight: 600;
            border-radius: 12px;
            padding: 12px 24px;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            box-shadow: var(--shadow-md);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: white;
        }
        
        .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.8);
            color: white;
            background: transparent;
        }
        
        .btn-outline-light:hover {
            background: white;
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .btn-lg {
            padding: 15px 30px;
            font-size: 1.1rem;
        }
        
        /* Card Styles */
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            transition: all 0.4s ease;
            overflow: hidden;
            background: white;
        }
        
        .card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: var(--shadow-xl);
        }
        
        .card-header {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 2rem;
            position: relative;
        }
        
        .card-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
        }
        
        /* Stats Cards */
        .stats-card {
            background: var(--gradient-accent);
            color: white;
            text-align: center;
            padding: 2.5rem;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }
        
        .stats-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: shimmer 3s ease-in-out infinite;
        }
        
        @keyframes shimmer {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(180deg); }
        }
        
        .stats-number {
            font-size: 3.5rem;
            font-weight: 800;
            display: block;
            line-height: 1;
            margin-bottom: 0.5rem;
        }
        
        .stats-card h5 {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        /* Section Styling */
        .section-padding {
            padding: 6rem 0;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient-secondary);
            border-radius: 2px;
        }
        
        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Feature Icons */
        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
            transition: all 0.3s ease;
        }
        
        .feature-icon:hover {
            transform: rotate(5deg) scale(1.1);
            background: var(--gradient-secondary);
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--text-primary) 0%, #374151 100%);
            color: white;
            padding: 4rem 0 2rem;
            margin-top: 6rem;
            position: relative;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }
        
        .footer h5 {
            color: white;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer a:hover {
            color: var(--accent-color);
            transform: translateX(5px);
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section .lead {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .stats-number {
                font-size: 2.5rem;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--gradient-secondary);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand font-display" href="<?= base_url() ?>">
                <i class="fas fa-heart text-danger"></i> Nayantar Memorial Trust
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">
                            <i class="fas fa-home me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('beneficiaries') ?>">
                            <i class="fas fa-users me-1"></i> Beneficiaries
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('success-stories') ?>">
                            <i class="fas fa-trophy me-1"></i> Success Stories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/login') ?>">
                            <i class="fas fa-user-shield me-1"></i> Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="margin-top: 88px;">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h5 class="font-display">
                        <i class="fas fa-heart text-danger me-2"></i>
                        Nayantar Memorial Charitable Trust
                    </h5>
                    <p class="lead">Empowering students through education and creating brighter futures for our community. Every contribution makes a difference in someone's life.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-white fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase fw-bold">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url() ?>" class="text-light">Home</a></li>
                        <li><a href="<?= base_url('beneficiaries') ?>" class="text-light">Our Beneficiaries</a></li>
                        <li><a href="<?= base_url('success-stories') ?>" class="text-light">Success Stories</a></li>
                        <li><a href="<?= base_url('admin/login') ?>" class="text-light">Admin Portal</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase fw-bold">Contact Info</h6>
                    <div class="contact-info">
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:info@nayantar.org" class="text-light">info@nayantar.org</a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <a href="tel:+919876543210" class="text-light">+91 98765 43210</a>
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Mumbai, Maharashtra, India
                        </p>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-light">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?= date('Y') ?> Nayantar Memorial Charitable Trust. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Made with <i class="fas fa-heart text-danger"></i> for education</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
