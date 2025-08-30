
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 py-24">
    <div class="absolute inset-0 bg-black/20"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            Our Amazing
            <span class="bg-gradient-to-r from-orange-400 to-yellow-400 bg-clip-text text-transparent">
                Students
            </span>
        </h1>
        <p class="text-xl lg:text-2xl text-purple-100 max-w-4xl mx-auto leading-relaxed">
            Meet the brilliant minds who are shaping the future. These students represent hope, determination, and the power of education to transform lives.
        </p>
    </div>
</div>

<!-- Students Grid -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($students)): ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($students as $student): ?>
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                        <div class="relative bg-gradient-to-br from-blue-600 to-indigo-600 p-6 text-white">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center ring-4 ring-white/30">
                                    <span class="text-2xl font-bold">
                                        <?= strtoupper(substr($student['name'], 0, 1)) ?>
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold group-hover:text-orange-300 transition-colors">
                                        <?= esc($student['name']) ?>
                                    </h3>
                                    <p class="text-blue-100 text-sm">
                                        <?= esc($student['status']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-graduation-cap text-blue-600 w-5"></i>
                                    <div>
                                        <p class="font-semibold text-gray-900"><?= esc($student['course']) ?></p>
                                        <p class="text-gray-600 text-sm"><?= esc($student['institution']) ?></p>
                                    </div>
                                </div>

                                <?php if (!empty($student['year'])): ?>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="fas fa-calendar text-purple-600 w-5"></i>
                                        <span>Year <?= esc($student['year']) ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($student['email'])): ?>
                                    <div class="flex items-center space-x-3 text-sm text-gray-600">
                                        <i class="fas fa-envelope text-green-600 w-5"></i>
                                        <span class="truncate"><?= esc($student['email']) ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($student['scholarship_amount'])): ?>
                                    <div class="bg-orange-50 rounded-lg p-3 mt-4">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-award text-orange-600"></i>
                                            <span class="text-orange-800 font-semibold text-sm">Scholarship: ₹<?= number_format($student['scholarship_amount']) ?></span>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-20">
                <div class="w-32 h-32 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full flex items-center justify-center mx-auto mb-8">
                    <i class="fas fa-graduation-cap text-blue-600 text-4xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">No Students Found</h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    We're working to support more students. Check back soon!
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>
