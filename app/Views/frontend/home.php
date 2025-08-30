<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-display {
            font-family: 'Playfair Display', serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .hero-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-heart text-white text-lg"></i>
                    </div>
                    <span class="font-display text-xl font-bold text-gray-800">Nayantara Trust</span>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="<?= base_url() ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Home</a>
                    <a href="<?= base_url('beneficiaries') ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Beneficiaries</a>
                    <a href="<?= base_url('success-stories') ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Success Stories</a>
                    <a href="<?= base_url('activities') ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Activities</a>
                </div>

                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-3">
                <a href="<?= base_url() ?>" class="block text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="<?= base_url('beneficiaries') ?>" class="block text-gray-700 hover:text-blue-600 font-medium">Beneficiaries</a>
                <a href="<?= base_url('success-stories') ?>" class="block text-gray-700 hover:text-blue-600 font-medium">Success Stories</a>
                <a href="<?= base_url('activities') ?>" class="block text-gray-700 hover:text-blue-600 font-medium">Activities</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-16 bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 text-white hero-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center">
                <h1 class="font-display text-4xl sm:text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                    Empowering Dreams Through
                    <span class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                        Education
                    </span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 mb-10 max-w-4xl mx-auto leading-relaxed">
                    Nayantara Memorial Charitable Trust transforms lives through quality education, unwavering support, and endless opportunities for underprivileged students.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?= base_url('beneficiaries') ?>" class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:from-yellow-600 hover:to-orange-600 transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <i class="fas fa-graduation-cap mr-2"></i>Meet Our Beneficiaries
                    </a>
                    <a href="<?= base_url('success-stories') ?>" class="bg-white/10 backdrop-blur text-white border-2 border-white/30 px-8 py-4 rounded-full font-semibold text-lg hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-star mr-2"></i>Success Stories
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Our Impact in Numbers</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Every number represents a life transformed, a dream fulfilled, and a future brightened through education.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl text-center border border-blue-200 hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl lg:text-4xl font-bold text-blue-600 mb-2"><?= $beneficiary_stats['total'] ?></div>
                    <div class="text-gray-700 font-medium">Total Beneficiaries</div>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl text-center border border-green-200 hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-check text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl lg:text-4xl font-bold text-green-600 mb-2"><?= $beneficiary_stats['active'] ?></div>
                    <div class="text-gray-700 font-medium">Active Students</div>
                </div>

                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-2xl text-center border border-yellow-200 hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trophy text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl lg:text-4xl font-bold text-yellow-600 mb-2"><?= $beneficiary_stats['passouts'] ?></div>
                    <div class="text-gray-700 font-medium">Graduates</div>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl text-center border border-purple-200 hover:shadow-xl transition-shadow duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book-open text-white text-2xl"></i>
                    </div>
                    <div class="text-3xl lg:text-4xl font-bold text-purple-600 mb-2"><?= $beneficiary_stats['currently_studying'] ?></div>
                    <div class="text-gray-700 font-medium">Currently Studying</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Beneficiaries Preview -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Featured Success Stories</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">Meet some of our remarkable beneficiaries who are making their mark in the professional world.</p>
                <a href="<?= base_url('beneficiaries') ?>" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-lg group">
                    View All Beneficiaries 
                    <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <?php if (!empty($featured_beneficiaries)): ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach (array_slice($featured_beneficiaries, 0, 6) as $beneficiary): ?>
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 transform hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-6 text-white">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center font-bold text-lg">
                                        <?= strtoupper(substr(esc($beneficiary['name']), 0, 1)) ?>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-lg"><?= esc($beneficiary['name']) ?></h3>
                                        <p class="text-blue-100 text-sm"><?= esc($beneficiary['course']) ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="space-y-3 mb-4">
                                    <div class="flex items-center text-gray-600">
                                        <i class="fas fa-university w-5 text-blue-500 mr-3"></i>
                                        <span class="text-sm"><?= esc($beneficiary['institution']) ?></span>
                                    </div>
                                    <div class="flex items-center text-gray-600">
                                        <i class="fas fa-graduation-cap w-5 text-green-500 mr-3"></i>
                                        <span class="text-sm"><?= esc($beneficiary['education_level']) ?></span>
                                    </div>
                                    <?php if (!empty($beneficiary['city'])): ?>
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-map-marker-alt w-5 text-red-500 mr-3"></i>
                                            <span class="text-sm"><?= esc($beneficiary['city']) ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($beneficiary['company_name'])): ?>
                                    <div class="inline-flex items-center bg-gradient-to-r from-green-50 to-blue-50 text-green-700 px-3 py-2 rounded-full text-sm font-medium">
                                        <i class="fas fa-briefcase mr-2"></i>
                                        <?= esc($beneficiary['company_name']) ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-12">
                    <i class="fas fa-users text-gray-400 text-6xl mb-4"></i>
                    <p class="text-gray-500 text-lg">Featured beneficiaries will be displayed here soon.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Success Stories Preview -->
    <?php if (!empty($success_stories)): ?>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Inspiring Journeys</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">Real stories of transformation, perseverance, and achievement from our beneficiaries.</p>
                <a href="<?= base_url('success-stories') ?>" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-lg group">
                    Read All Success Stories 
                    <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach (array_slice($success_stories, 0, 3) as $story): ?>
                    <div class="bg-gradient-to-br from-gray-50 to-blue-50 p-8 rounded-2xl border border-gray-200 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                <?= strtoupper(substr(esc($story['name']), 0, 1)) ?>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-900"><?= esc($story['name']) ?></h3>
                                <p class="text-blue-600 font-medium"><?= esc($story['current_position']) ?></p>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            <?= esc(substr($story['story'], 0, 150)) ?>...
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Mission Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="text-center p-8">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-graduation-cap text-3xl"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-4">Our Mission</h3>
                    <p class="text-blue-100 leading-relaxed">To provide quality education and opportunities to underprivileged students, enabling them to achieve their full potential and contribute meaningfully to society.</p>
                </div>

                <div class="text-center p-8">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-eye text-3xl"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-4">Our Vision</h3>
                    <p class="text-blue-100 leading-relaxed">A world where every child has access to quality education regardless of their economic background, creating a more equitable and prosperous society.</p>
                </div>

                <div class="text-center p-8">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-3xl"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-4">Our Values</h3>
                    <p class="text-blue-100 leading-relaxed">We believe in transparency, accountability, and making a lasting impact through education, mentorship, and community support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center">
                            <i class="fas fa-heart text-white text-xl"></i>
                        </div>
                        <span class="font-display text-2xl font-bold">Nayantara Trust</span>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">Empowering underprivileged students through quality education, mentorship, and financial support to build a brighter future for all.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="font-semibold text-lg mb-4 text-yellow-400">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="<?= base_url() ?>" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="<?= base_url('beneficiaries') ?>" class="text-gray-300 hover:text-white transition-colors">Beneficiaries</a></li>
                        <li><a href="<?= base_url('success-stories') ?>" class="text-gray-300 hover:text-white transition-colors">Success Stories</a></li>
                        <li><a href="<?= base_url('activities') ?>" class="text-gray-300 hover:text-white transition-colors">Activities</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-lg mb-4 text-yellow-400">Contact Us</h3>
                    <div class="space-y-3">
                        <p class="text-gray-300 flex items-center">
                            <i class="fas fa-envelope mr-3 text-blue-400"></i>
                            admin@nayantar.org
                        </p>
                        <p class="text-gray-300 flex items-center">
                            <i class="fas fa-phone mr-3 text-green-400"></i>
                            +91 98765 43210
                        </p>
                        <p class="text-gray-300 flex items-center">
                            <i class="fas fa-map-marker-alt mr-3 text-red-400"></i>
                            Patna, Bihar, India
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2025 Nayantara Memorial Charitable Trust. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>