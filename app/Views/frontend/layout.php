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
            --primary-color: #2563eb;
            --primary-light: #3b82f6;
            --primary-dark: #1d4ed8;
            --secondary-color: #059669;
            --secondary-light: #10b981;
            --accent-color: #dc2626;
            --accent-light: #ef4444;
            --success-color: #10b981;
            --success-light: #34d399;
            --warning-color: #f59e0b;
            --warning-light: #fbbf24;
            --text-primary: #111827;
            --text-secondary: #4b5563;
            --text-light: #6b7280;
            --bg-primary: #ffffff;
            --bg-secondary: #f9fafb;
            --bg-tertiary: #f3f4f6;
            --bg-soft: #fefefe;
            --border-light: #d1d5db;
            --border-lighter: #e5e7eb;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --gradient-primary: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
            --gradient-secondary: linear-gradient(135deg, #059669 0%, #10b981 100%);
            --gradient-accent: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
            --gradient-soft: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
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
            background: rgba(255, 255, 255, 0.98);
            border-bottom: 2px solid var(--border-light);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary-color) !important;
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: var(--primary-dark) !important;
        }

        .navbar-nav .nav-link {
            color: var(--text-primary) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.8rem 1.2rem !important;
            border-radius: 6px;
            font-size: 0.95rem;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
            background: var(--bg-secondary);
        }

        /* Hero Section */
        .hero-section {
            background: var(--bg-secondary);
            color: var(--text-primary);
            padding: 120px 0 100px;
            text-align: center;
            border-bottom: 1px solid var(--border-light);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.8rem;
            color: var(--primary-color);
        }

        .hero-section .lead {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            color: var(--text-secondary);
            font-weight: 400;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Button Styles */
        .btn {
            font-weight: 600;
            border-radius: 6px;
            padding: 12px 24px;
            border: none;
            font-family: 'Poppins', sans-serif;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
            box-shadow: var(--shadow-sm);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
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
        }

        .btn-lg {
            padding: 14px 28px;
            font-size: 1.1rem;
        }

        /* Card Styles */
        .card {
            border: 1px solid var(--border-light);
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
            background: var(--bg-primary);
        }

        .card-header {
            background: var(--bg-secondary);
            color: var(--text-primary);
            border-bottom: 1px solid var(--border-light);
            padding: 2rem;
        }

        /* Stats Cards */
        .stats-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-light);
            color: var(--text-primary);
            text-align: center;
            padding: 2.5rem 2rem;
            border-radius: 8px;
            position: relative;
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-color);
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 800;
            display: block;
            line-height: 1;
            margin-bottom: 0.8rem;
            color: var(--primary-color);
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
            width: 80px;
            height: 80px;
            background: var(--primary-color);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
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

        /* Remove animations - content always visible */
        .fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        /* Additional Sections Styling */
        .testimonial-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-light);
            border-radius: 8px;
            padding: 2.5rem;
            text-align: center;
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
        // Smooth scrolling for anchor links (keeping minimal functionality)
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