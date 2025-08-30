
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<div class="bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-4">Our Beneficiaries</h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                Meet the incredible individuals whose lives have been transformed through our programs. Their stories inspire us to continue our mission.
            </p>
        </div>
    </div>
</div>

<div class="py-12 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($beneficiaries)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($beneficiaries as $beneficiary): ?>
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 dark:border-gray-700 group">
                        <div class="p-6">
                            <!-- Profile Section -->
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-blue-600 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-white font-bold text-xl">
                                        <?= strtoupper(substr($beneficiary['name'], 0, 1)) ?>
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
                                        <?= esc($beneficiary['name']) ?>
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                                        Age: <?= esc($beneficiary['age']) ?> • <?= esc($beneficiary['category']) ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Course Info -->
                            <div class="mb-4">
                                <div class="flex items-center mb-2">
                                    <svg class="w-5 h-5 text-primary-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"></path>
                                    </svg>
                                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Course</span>
                                </div>
                                <p class="text-gray-900 dark:text-white font-semibold"><?= esc($beneficiary['course_name']) ?></p>
                            </div>

                            <!-- Status Badge -->
                            <div class="mb-4">
                                <?php 
                                $statusClass = match($beneficiary['status']) {
                                    'completed' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
                                    'ongoing' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200',
                                    'pending' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200',
                                    default => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200'
                                };
                                ?>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium <?= $statusClass ?>">
                                    <?= ucfirst(esc($beneficiary['status'])) ?>
                                </span>
                            </div>

                            <!-- Contact Info -->
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <?= esc($beneficiary['email']) ?>
                                </div>
                                <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                    </svg>
                                    <?= esc($beneficiary['mobile_number']) ?>
                                </div>
                            </div>

                            <!-- Company Info (if available) -->
                            <?php if (!empty($beneficiary['company_name'])): ?>
                                <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-xl">
                                    <div class="flex items-center mb-2">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Currently Working</span>
                                    </div>
                                    <p class="font-semibold text-gray-900 dark:text-white"><?= esc($beneficiary['company_name']) ?></p>
                                    <?php if (!empty($beneficiary['current_position'])): ?>
                                        <p class="text-sm text-gray-600 dark:text-gray-400"><?= esc($beneficiary['current_position']) ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">No Beneficiaries Found</h3>
                <p class="text-gray-600 dark:text-gray-400 max-w-md mx-auto">
                    We haven't added any beneficiaries yet. Check back soon to see the amazing people we're helping!
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>
