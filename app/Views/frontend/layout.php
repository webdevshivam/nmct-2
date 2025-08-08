
<!DOCTYPE html>
<html lang="<?= $current_lang ?? 'en' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - ' : '' ?>Bharatpur Foundation</title>
    
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800&family=Noto+Sans+Devanagari:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        <?php $lang = session()->get('language') ?? 'en'; ?>
        
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            --light-gradient: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            
            --primary-color: #667eea;
            --secondary-color: #f5576c;
            --accent-color: #4facfe;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --text-muted: #9ca3af;
            
            --bg-primary: #ffffff;
            --bg-secondary: #f9fafb;
            --bg-tertiary: #f3f4f6;
            
            --border-color: #e5e7eb;
            --border-light: #f3f4f6;
            
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            
            --border-radius: 12px;
            --border-radius-sm: 8px;
            --border-radius-lg: 16px;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: <?= $lang === 'hi' ? "'Noto Sans Devanagari', " : '' ?>'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--bg-primary);
            scroll-behavior: smooth;
            font-weight: 400;
        }
        
        .font-display {
            font-family: <?= $lang === 'hi' ? "'Noto Sans Devanagari', " : '' ?>'Playfair Display', serif;
        }
        
        .font-heading {
            font-family: <?= $lang === 'hi' ? "'Noto Sans Devanagari', " : '' ?>'Poppins', sans-serif;
            font-weight: 600;
        }
        
        /* Modern Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-light);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-md);
        }
        
        .navbar-brand {
            font-size: 1.75rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none !important;
        }
        
        .nav-link {
            color: var(--text-primary) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.75rem 1.25rem !important;
            border-radius: var(--border-radius-sm);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover {
            background: var(--bg-secondary);
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            background: var(--primary-gradient);
            color: white !important;
        }
        
        /* Language Switcher */
        .language-switcher .dropdown-toggle {
            background: var(--accent-gradient);
            color: white !important;
            border: none;
            border-radius: var(--border-radius-sm);
            padding: 0.5rem 1rem;
            font-weight: 600;
        }
        
        .language-switcher .dropdown-menu {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            padding: 0.5rem;
        }
        
        .language-switcher .dropdown-item {
            border-radius: var(--border-radius-sm);
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        
        .language-switcher .dropdown-item:hover {
            background: var(--bg-secondary);
            transform: translateX(4px);
        }
        
        /* Hero Section - Modern Design */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            color: white;
            padding: 160px 0 120px;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="white" opacity="0.1"/><circle cx="30" cy="30" r="1" fill="white" opacity="0.05"/><circle cx="50" cy="20" r="1" fill="white" opacity="0.1"/><circle cx="70" cy="40" r="1" fill="white" opacity="0.05"/><circle cx="90" cy="15" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        
        .hero-section .container {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Modern Buttons */
        .btn {
            font-weight: 600;
            border-radius: var(--border-radius);
            padding: 0.875rem 2rem;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background: var(--primary-gradient);
            color: white;
            box-shadow: var(--shadow-md);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: white;
        }
        
        .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        
        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Stats Cards - Glassmorphism */
        .stats-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--border-radius-lg);
            padding: 2.5rem 2rem;
            text-align: center;
            transition: all 0.3s ease;
            color: white;
        }
        
        .stats-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }
        
        .stats-number {
            font-size: 3rem;
            font-weight: 800;
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .stats-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* Modern Cards */
        .modern-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .modern-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-color);
        }
        
        /* Feature Icons */
        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: var(--border-radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }
        
        .feature-icon.primary {
            background: var(--primary-gradient);
        }
        
        .feature-icon.secondary {
            background: var(--secondary-gradient);
        }
        
        .feature-icon.accent {
            background: var(--accent-gradient);
        }
        
        .feature-icon:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        /* Section Styling */
        .section-padding {
            padding: 100px 0;
        }
        
        .section-title {
            font-size: 2.75rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: var(--dark-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 4rem 0 2rem;
            margin-top: 6rem;
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
            color: white;
            transform: translateX(4px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2.25rem;
            }
            
            .stats-number {
                font-size: 2.5rem;
            }
            
            .hero-section {
                padding: 120px 0 80px;
            }
        }
        
        /* Animations */
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
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--bg-tertiary);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-gradient);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand font-display" href="<?= base_url() ?>">
                Bharatpur Foundation
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">
                            <i class="fas fa-home me-2"></i>
                            <?= $lang === 'hi' ? 'होम' : 'Home' ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('beneficiaries') ?>">
                            <i class="fas fa-users me-2"></i>
                            <?= $lang === 'hi' ? 'लाभार्थी' : 'Beneficiaries' ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('success-stories') ?>">
                            <i class="fas fa-trophy me-2"></i>
                            <?= $lang === 'hi' ? 'सफलता की कहानियां' : 'Success Stories' ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('ngo-works') ?>">
                            <i class="fas fa-hands-helping me-2"></i>
                            <?= $lang === 'hi' ? 'हमारे कार्य' : 'Our Works' ?>
                        </a>
                    </li>
                </ul>
                
                <div class="language-switcher">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-globe me-2"></i>
                            <?= $lang === 'hi' ? 'हिंदी' : 'English' ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?= base_url('set-language/en') ?>">
                                    🇬🇧 English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('set-language/hi') ?>">
                                    🇮🇳 हिंदी
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h5 class="font-display">
                        Bharatpur Foundation
                    </h5>
                    <p class="lead">
                        <?= $lang === 'hi' 
                            ? 'शिक्षा के माध्यम से छात्रों को सशक्त बनाना और हमारे समुदाय के लिए उज्ज्वल भविष्य का निर्माण करना। हर योगदान किसी के जीवन में बदलाव लाता है।'
                            : 'Empowering students through education and creating brighter futures for our community. Every contribution makes a difference in someone\'s life.'
                        ?>
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-white fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6><?= $lang === 'hi' ? 'त्वरित लिंक' : 'Quick Links' ?></h6>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url() ?>"><?= $lang === 'hi' ? 'होम' : 'Home' ?></a></li>
                        <li><a href="<?= base_url('beneficiaries') ?>"><?= $lang === 'hi' ? 'लाभार्थी' : 'Beneficiaries' ?></a></li>
                        <li><a href="<?= base_url('success-stories') ?>"><?= $lang === 'hi' ? 'सफलता की कहानियां' : 'Success Stories' ?></a></li>
                        <li><a href="<?= base_url('ngo-works') ?>"><?= $lang === 'hi' ? 'हमारे कार्य' : 'Our Works' ?></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6><?= $lang === 'hi' ? 'संपर्क जानकारी' : 'Contact Info' ?></h6>
                    <div class="contact-info">
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:info@bharatpurfoundation.org">info@bharatpurfoundation.org</a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <a href="tel:+919876543210">+91 98765 43210</a>
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <?= $lang === 'hi' ? 'मुंबई, महाराष्ट्र, भारत' : 'Mumbai, Maharashtra, India' ?>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-light">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">
                        &copy; <?= date('Y') ?> Bharatpur Foundation. 
                        <?= $lang === 'hi' ? 'सभी अधिकार सुरक्षित।' : 'All rights reserved.' ?>
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">
                        <?= $lang === 'hi' ? 'शिक्षा के लिए' : 'Made with' ?> 
                        <i class="fas fa-heart text-danger"></i> 
                        <?= $lang === 'hi' ? 'प्रेम से बनाया गया' : 'for education' ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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
