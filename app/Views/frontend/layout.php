<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Nayantara Memorial Charitable Trust' ?></title>
    <meta name="description" content="Empowering education and transforming lives through scholarships and support for underprivileged students in Bihar, India.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .dark .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #312e81 100%);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>">
                <div class="me-3" style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-graduation-cap text-white"></i>
                </div>
                <span class="fw-bold fs-5" style="font-family: 'Poppins', sans-serif; color: #1f2937;">Nayantara Trust</span>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-500" href="<?= base_url() ?>" style="font-family: 'Inter', sans-serif;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-500" href="<?= base_url('students') ?>" style="font-family: 'Inter', sans-serif;">Our Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-500" href="<?= base_url('beneficiaries') ?>" style="font-family: 'Inter', sans-serif;">Beneficiaries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-500" href="<?= base_url('success-stories') ?>" style="font-family: 'Inter', sans-serif;">Success Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-500" href="<?= base_url('activities') ?>" style="font-family: 'Inter', sans-serif;">Activities</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 dark:bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-primary-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white text-xl"></i>
                        </div>
                        <span class="font-bold text-xl">Nayantara Memorial Charitable Trust</span>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Empowering education and transforming lives through scholarships and support for underprivileged students in Bihar, India.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-primary-400 transition-colors duration-200">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-primary-400 transition-colors duration-200">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-primary-400 transition-colors duration-200">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-primary-400 transition-colors duration-200">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="<?= base_url() ?>" class="text-gray-300 hover:text-primary-400 transition-colors duration-200">Home</a></li>
                        <li><a href="<?= base_url('students') ?>" class="text-gray-300 hover:text-primary-400 transition-colors duration-200">Our Students</a></li>
                        <li><a href="<?= base_url('success-stories') ?>" class="text-gray-300 hover:text-primary-400 transition-colors duration-200">Success Stories</a></li>
                        <li><a href="<?= base_url('activities') ?>" class="text-gray-300 hover:text-primary-400 transition-colors duration-200">Activities</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <div class="space-y-2">
                        <p class="text-gray-300">
                            <i class="fas fa-envelope mr-2"></i>
                            contact@nayantara.org
                        </p>
                        <p class="text-gray-300">
                            <i class="fas fa-phone mr-2"></i>
                            +91 98765 43210
                        </p>
                        <p class="text-gray-300">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Patna, Bihar, India
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">
                    &copy; 2025 Nayantara Memorial Charitable Trust. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Scripts -->
    <script>
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

        // Add active class to current nav item
        const currentLocation = location.pathname;
        const menuItems = document.querySelectorAll('.nav-link');
        menuItems.forEach(item => {
            if(item.getAttribute('href') === currentLocation){
                item.classList.add('active');
            }
        });
    </script>
</body>
</html>