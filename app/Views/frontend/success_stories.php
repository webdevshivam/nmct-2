<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-900 via-green-800 to-teal-900 py-20">
    <div class="absolute inset-0 bg-black/20"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="space-y-6">
            <h1 class="text-5xl lg:text-6xl font-bold text-white">
                Success 
                <span class="bg-gradient-to-r from-orange-400 to-yellow-400 bg-clip-text text-transparent">
                    Stories
                </span>
            </h1>
            <p class="text-xl text-emerald-100 max-w-3xl mx-auto leading-relaxed">
                Inspiring journeys of transformation, achievement, and hope. These stories showcase the incredible 
                potential that emerges when talent meets opportunity.
            </p>
        </div>

        <!-- Statistics -->
        <div class="grid md:grid-cols-3 gap-8 mt-16">
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                <div class="text-4xl font-bold text-orange-400 mb-2"><?= count($success_stories) ?></div>
                <div class="text-emerald-100">Success Stories</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                <div class="text-4xl font-bold text-orange-400 mb-2">100%</div>
                <div class="text-emerald-100">Career Placement</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                <div class="text-4xl font-bold text-orange-400 mb-2">25+</div>
                <div class="text-emerald-100">Companies</div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Grid -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($success_stories)): ?>
            <div class="grid lg:grid-cols-2 gap-8">
                <?php foreach ($success_stories as $story): ?>
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <div class="relative bg-gradient-to-br from-emerald-600 to-teal-600 p-6 text-white">
                            <div class="flex items-start justify-between">
                                <div class="flex items-center space-x-4">
                                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                        <i class="fas fa-star text-2xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold group-hover:text-orange-300 transition-colors">
                                            <?= esc($story['title']) ?>
                                        </h3>
                                        <p class="text-emerald-100 text-sm">
                                            <?= esc($story['current_position'] ?? 'Success Story') ?>
                                        </p>
                                    </div>
                                </div>

                                <?php if (!empty($story['company_organization'])): ?>
                                    <div class="text-right">
                                        <div class="text-sm text-emerald-200">Currently at</div>
                                        <div class="font-semibold"><?= esc($story['company_organization']) ?></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="p-6">
                            <?php if (!empty($story['student_name'])): ?>
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-gradient-to-br from-emerald-600 to-teal-600 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-white font-bold">
                                            <?= strtoupper(substr($story['student_name'], 0, 1)) ?>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900"><?= esc($story['student_name']) ?></h4>
                                        <?php if (!empty($story['course'])): ?>
                                            <p class="text-sm text-gray-600"><?= esc($story['course']) ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <?= esc(substr(strip_tags($story['story']), 0, 200)) ?>...
                            </p>

                            <?php if (!empty($story['achievement'])): ?>
                                <div class="bg-orange-50 rounded-xl p-4 mb-6">
                                    <h5 class="font-semibold text-orange-800 mb-2">
                                        <i class="fas fa-trophy mr-2"></i>Key Achievement
                                    </h5>
                                    <p class="text-orange-700 text-sm"><?= esc($story['achievement']) ?></p>
                                </div>
                            <?php endif; ?>

                            <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-500">
                                    <i class="fas fa-calendar mr-1"></i>
                                    <?= date('M d, Y', strtotime($story['created_at'])) ?>
                                </div>

                                <?php if ($story['is_featured']): ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <i class="fas fa-star mr-1"></i>Featured
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-star text-3xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">No Success Stories Yet</h3>
                <p class="text-gray-600 max-w-md mx-auto">
                    We're working on showcasing the inspiring journeys of our students. 
                    Check back soon for amazing success stories!
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-emerald-600 to-teal-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6">
            Be Part of Their Success Story
        </h2>
        <p class="text-xl text-emerald-100 mb-8 leading-relaxed">
            Every success story starts with an opportunity. Help us create more success stories 
            by supporting deserving students in their educational journey.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= base_url('beneficiaries') ?>" 
               class="inline-flex items-center px-8 py-4 bg-white text-emerald-600 hover:bg-emerald-50 font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-users mr-2"></i>
                Meet Our Students
            </a>
            <a href="#" 
               class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white text-white hover:bg-white hover:text-emerald-600 font-semibold rounded-xl transition-all duration-300">
                <i class="fas fa-heart mr-2"></i>
                Support Education
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>