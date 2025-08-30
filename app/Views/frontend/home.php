
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section with Modern Design -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background with subtle pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900"></div>
    <div class="absolute inset-0 bg-black/20"></div>
    
    <!-- Animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-300"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-orange-500/5 rounded-full blur-3xl animate-pulse delay-700"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
        <div class="text-center space-y-8">
            <!-- Main Headline -->
            <div class="space-y-6">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                    <span class="text-white block">Empowering</span>
                    <span class="bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 bg-clip-text text-transparent block">
                        Rural Dreams
                    </span>
                    <span class="text-white block">Through Education</span>
                </h1>
                
                <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed font-light">
                    Nayantara Memorial Charitable Trust is dedicated to transforming lives through quality education. 
                    We believe every talented student deserves an opportunity to excel, regardless of their background.
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-8">
                <a href="<?= base_url('beneficiaries') ?>" 
                   class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white font-semibold rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-orange-500/25">
                    <span>Meet Our Students</span>
                    <i class="fas fa-arrow-right ml-3 transform group-hover:translate-x-1 transition-transform"></i>
                </a>
                
                <a href="<?= base_url('success-stories') ?>" 
                   class="group inline-flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 text-white hover:bg-white/20 font-semibold rounded-2xl transition-all duration-300">
                    <i class="fas fa-star mr-3 text-yellow-400"></i>
                    <span>Success Stories</span>
                </a>
            </div>

            <!-- Statistics -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 pt-16">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-orange-400 mb-2">
                        <?= $beneficiary_stats['total'] ?>+
                    </div>
                    <div class="text-blue-200 font-medium">Students Supported</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-green-400 mb-2">
                        <?= $beneficiary_stats['passouts'] ?>+
                    </div>
                    <div class="text-blue-200 font-medium">Success Stories</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-purple-400 mb-2">
                        <?= $beneficiary_stats['currently_studying'] ?>+
                    </div>
                    <div class="text-blue-200 font-medium">Currently Studying</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2">100%</div>
                    <div class="text-blue-200 font-medium">Commitment</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <i class="fas fa-chevron-down text-white/60 text-2xl"></i>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                        Our <span class="text-orange-500">Mission</span>
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full"></div>
                </div>
                
                <p class="text-xl text-gray-600 leading-relaxed">
                    We identify bright students from rural and economically disadvantaged backgrounds and provide them with 
                    comprehensive support to pursue higher education in engineering, technology, and professional courses.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-graduation-cap text-orange-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality Education</h3>
                            <p class="text-gray-600">Supporting students in prestigious institutions across India</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-hands-helping text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Holistic Support</h3>
                            <p class="text-gray-600">Financial aid, mentorship, and career guidance</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-rocket text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Career Success</h3>
                            <p class="text-gray-600">100% placement record in top companies</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="aspect-square bg-gradient-to-br from-orange-400 to-red-500 rounded-3xl p-8 shadow-2xl">
                    <div class="h-full bg-white rounded-2xl p-8 flex items-center justify-center">
                        <div class="text-center space-y-6">
                            <div class="w-24 h-24 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mx-auto">
                                <i class="fas fa-heart text-white text-3xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Making Impact</h3>
                                <p class="text-gray-600">Every student we support creates a ripple effect of positive change in their community</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Success Stories -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Success <span class="text-orange-500">Stories</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Witness the incredible journeys of our students who have transformed their lives through education
            </p>
        </div>
        
        <?php if (!empty($success_stories)): ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php foreach (array_slice($success_stories, 0, 3) as $story): ?>
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <div class="bg-gradient-to-br from-blue-600 to-purple-600 p-6 text-white">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                    <span class="text-lg font-bold">
                                        <?= strtoupper(substr($story['student_name'] ?? 'S', 0, 1)) ?>
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold"><?= esc($story['student_name'] ?? 'Student') ?></h3>
                                    <p class="text-blue-100 text-sm"><?= esc($story['current_position'] ?? 'Graduate') ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-900 mb-3"><?= esc($story['title']) ?></h4>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                <?= esc(substr(strip_tags($story['story']), 0, 120)) ?>...
                            </p>
                            <?php if (!empty($story['company_organization'])): ?>
                                <div class="flex items-center text-orange-600 font-medium">
                                    <i class="fas fa-building mr-2"></i>
                                    <?= esc($story['company_organization']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <div class="text-center">
            <a href="<?= base_url('success-stories') ?>" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                View All Success Stories
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Featured Students -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Our <span class="text-orange-500">Students</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Meet the brilliant minds we're proud to support on their educational journey
            </p>
        </div>
        
        <?php if (!empty($featured_beneficiaries)): ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php foreach (array_slice($featured_beneficiaries, 0, 6) as $student): ?>
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                        <div class="p-6">
                            <div class="flex items-center space-x-4 mb-4">
                                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center">
                                    <span class="text-white text-xl font-bold">
                                        <?= strtoupper(substr($student['name'], 0, 1)) ?>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-orange-600 transition-colors">
                                        <?= esc($student['name']) ?>
                                    </h3>
                                    <p class="text-gray-600"><?= esc($student['education_level']) ?></p>
                                </div>
                                <?php if ($student['is_passout'] === 'passout'): ?>
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium">
                                        Graduate
                                    </span>
                                <?php else: ?>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                                        Studying
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-graduation-cap w-5 text-orange-500 mr-3"></i>
                                    <span class="text-sm"><?= esc($student['course']) ?></span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-university w-5 text-blue-500 mr-3"></i>
                                    <span class="text-sm"><?= esc(strlen($student['institution']) > 30 ? substr($student['institution'], 0, 30) . '...' : $student['institution']) ?></span>
                                </div>
                                <?php if (!empty($student['company_name'])): ?>
                                    <div class="flex items-center text-gray-600">
                                        <i class="fas fa-building w-5 text-green-500 mr-3"></i>
                                        <span class="text-sm font-medium text-green-700"><?= esc($student['company_name']) ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <div class="text-center">
            <a href="<?= base_url('beneficiaries') ?>" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                View All Students
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-72 h-72 bg-orange-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="space-y-8">
            <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                Be Part of the <span class="text-orange-400">Change</span>
            </h2>
            <p class="text-xl text-blue-100 leading-relaxed">
                Every contribution makes a difference. Help us continue empowering talented students 
                to achieve their dreams and create a better future for their communities.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center pt-8">
                <a href="#" 
                   class="inline-flex items-center px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-heart mr-3"></i>
                    Support Education
                </a>
                <a href="<?= base_url('beneficiaries') ?>" 
                   class="inline-flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 text-white hover:bg-white/20 font-semibold rounded-xl transition-all duration-300">
                    <i class="fas fa-users mr-3"></i>
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
