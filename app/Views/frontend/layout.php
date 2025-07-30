
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - ' : '' ?>Nayantar Memorial Charitable Trust</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-light: #a5b4fc;
            --primary-dark: #4338ca;
            --secondary-color: #ec4899;
            --secondary-light: #f9a8d4;
            --accent-color: #06b6d4;
            --accent-light: #67e8f9;
            --success-color: #10b981;
            --success-light: #6ee7b7;
            --warning-color: #f59e0b;
            --warning-light: #fcd34d;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --text-light: #9ca3af;
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-tertiary: #f1f5f9;
            --bg-soft: #fefefe;
            --border-light: #e5e7eb;
            --border-lighter: #f3f4f6;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --gradient-primary: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            --gradient-secondary: linear-gradient(135deg, #ec4899 0%, #f472b6 100%);
            --gradient-accent: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
            --gradient-soft: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.7;
            color: var(--text-primary);
            background-color: var(--bg-primary);
            scroll-behavior: smooth;
            font-weight: 400;
        }
        
        .font-display {
            font-family: 'Poppins', serif;
            font-weight: 600;
        }
        
        /* Navigation Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-lighter);
            box-shadow: var(--shadow-sm);
            padding: 1.2rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-md);
            padding: 0.8rem 0;
        }
        
        .navbar-brand {
            font-size: 1.6rem;
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
            margin: 0 0.8rem;
            padding: 0.7rem 1.2rem !important;
            border-radius: 12px;
            position: relative;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        
        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
            background: rgba(99, 102, 241, 0.08);
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
            border-radius: 2px;
        }
        
        .navbar-nav .nav-link:hover::after {
            width: 70%;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.05) 0%, rgba(139, 92, 246, 0.05) 100%);
            color: var(--text-primary);
            padding: 140px 0 120px;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="%236366f1" opacity="0.1"><animate attributeName="opacity" values="0.1;0.3;0.1" dur="4s" repeatCount="indefinite"/></circle></svg>') repeat;
            animation: float 25s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(180deg); }
        }
        
        .hero-section h1 {
            font-size: 3.8rem;
            font-weight: 700;
            margin-bottom: 1.8rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.5s forwards;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-section .lead {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.7s forwards;
            color: var(--text-secondary);
            font-weight: 400;
        }
        
        .hero-buttons {
            opacity: 0;
            animation: fadeInUp 1s ease 0.9s forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Button Styles */
        .btn {
            font-weight: 600;
            border-radius: 14px;
            padding: 14px 28px;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            box-shadow: var(--shadow-md);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #5b5bd6 0%, #7c3aed 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: white;
        }
        
        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .btn-lg {
            padding: 16px 32px;
            font-size: 1.1rem;
        }
        
        /* Card Styles */
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: var(--shadow-md);
            transition: all 0.4s ease;
            overflow: hidden;
            background: var(--bg-primary);
            border: 1px solid var(--border-lighter);
        }
        
        .card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: var(--shadow-xl);
        }
        
        .card-header {
            background: var(--gradient-soft);
            color: var(--text-primary);
            border: none;
            padding: 2.5rem;
            position: relative;
        }
        
        .card-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gradient-primary);
        }
        
        /* Stats Cards */
        .stats-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-light);
            color: var(--text-primary);
            text-align: center;
            padding: 3rem 2rem;
            border-radius: 24px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }
        
        .stats-number {
            font-size: 3.5rem;
            font-weight: 800;
            display: block;
            line-height: 1;
            margin-bottom: 0.8rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stats-card h5 {
            font-weight: 600;
            margin-bottom: 0.8rem;
            color: var(--text-primary);
        }
        
        /* Section Styling */
        .section-padding {
            padding: 7rem 0;
        }
        
        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            color: var(--text-primary);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 80px;
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
            width: 90px;
            height: 90px;
            background: var(--gradient-primary);
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.8rem;
            color: white;
            font-size: 2.2rem;
            transition: all 0.3s ease;
        }
        
        .feature-icon:hover {
            transform: rotate(5deg) scale(1.1);
            background: var(--gradient-secondary);
        }
        
        .bg-soft {
            background: var(--bg-secondary) !important;
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--text-primary) 0%, #374151 100%);
            color: white;
            padding: 5rem 0 2rem;
            margin-top: 8rem;
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
            margin-bottom: 2rem;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer a:hover {
            color: var(--primary-light);
            transform: translateX(5px);
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Additional Sections Styling */
        .testimonial-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-light);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .process-step {
            text-align: center;
            position: relative;
        }
        
        .process-number {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.3rem;
            margin: 0 auto 1.5rem;
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.8rem;
            }
            
            .hero-section .lead {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .stats-number {
                font-size: 2.8rem;
            }
            
            .feature-icon {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--bg-tertiary);
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
    <main style="margin-top: 100px;">
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
