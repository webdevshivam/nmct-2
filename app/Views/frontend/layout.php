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
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --success-color: #27ae60;
            --warning-color: #f39c12;
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
            --bg-soft: #f8f9fa;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-accent: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --gradient-soft: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        }

        /* Enhanced UX Styles */
        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%) !important;
        }

        .bg-gradient-success {
            background: linear-gradient(135deg, #198754 0%, #20c997 100%) !important;
        }

        .bg-gradient-info {
            background: linear-gradient(135deg, #0dcaf0 0%, #6f42c1 100%) !important;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
        }

        .btn {
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .badge {
            border-radius: 8px;
            font-weight: 500;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.1);
        }

        .input-group-text {
            border-radius: 10px 0 0 10px;
            border: 2px solid #e9ecef;
            border-right: none;
        }

        .input-group .form-control {
            border-radius: 0 10px 10px 0;
            border-left: none;
        }

        .modal-content {
            border-radius: 15px;
            border: none;
        }

        .modal-header {
            border-radius: 15px 15px 0 0;
        }

        /* Smooth animations */
        .fade-in {
            animation: fadeInUp 0.6s ease-out;
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

        /* Loading states */
        .loading {
            position: relative;
            overflow: hidden;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Enhanced mobile experience */
        @media (max-width: 768px) {
            .card-body {
                padding: 1rem !important;
            }

            .btn {
                padding: 0.5rem 1rem;
            }

            .modal-dialog {
                margin: 1rem;
            }

            .hero-section {
                padding: 2rem 0 !important;
            }

            .display-5 {
                font-size: 2rem !important;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand font-display" href="<?= base_url() ?>">
                <i class="fas fa-heart text-danger"></i> Nayantar Memorial Charitable Trust
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
                        <a class="nav-link" href="<?= base_url('ngo-works') ?>">Our Works</a>
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