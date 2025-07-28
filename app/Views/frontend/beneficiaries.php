<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <h1 class="mb-4">Our Beneficiaries</h1>
        <p class="lead">Meet the talented students we're proud to support on their educational journey</p>
    </div>
</section>

<!-- Beneficiaries Grid -->
<section class="section-padding">
    <div class="container">
        <?php if (!empty($beneficiaries)): ?>
        <div class="row">
            <?php foreach($beneficiaries as $beneficiary): ?>
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-user-graduate"></i> 
                            <?= esc($beneficiary['name']) ?>
                        </h5>
                        <small class="text-light">Student ID: <?= esc($beneficiary['student_id']) ?></small>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6 class="text-primary">Course & University</h6>
                                <p class="mb-1"><strong><?= esc($beneficiary['course']) ?></strong></p>
                                <p class="text-muted small"><?= esc($beneficiary['university']) ?></p>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6 class="text-primary">Academic Year</h6>
                                <p class="mb-0"><?= esc($beneficiary['year']) ?></p>
                            </div>
                            <div class="col-6">
                                <h6 class="text-primary">Status</h6>
                                <span class="badge bg-success"><?= esc($beneficiary['status']) ?></span>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6 class="text-primary">Contact Information</h6>
                                <p class="mb-1">
                                    <i class="fas fa-phone text-muted"></i> 
                                    <?= esc($beneficiary['contact_phone']) ?>
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-envelope text-muted"></i> 
                                    <?= esc($beneficiary['email']) ?>
                                </p>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6 class="text-primary">Academic Timeline</h6>
                                <p class="mb-1">
                                    <small><strong>Enrolled:</strong> <?= date('M Y', strtotime($beneficiary['enrolled_date'])) ?></small>
                                </p>
                                <p class="mb-0">
                                    <small><strong>Expected Graduation:</strong> <?= date('M Y', strtotime($beneficiary['expected_graduation'])) ?></small>
                                </p>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6 class="text-primary">Financial Support</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="text-muted">Total Fees</small>
                                        <p class="mb-0"><strong>₹<?= number_format($beneficiary['total_fees']) ?></strong></p>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted">Scholarship</small>
                                        <p class="mb-0 text-success"><strong>₹<?= number_format($beneficiary['scholarship_amount']) ?></strong></p>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height: 8px;">
                                    <?php $percentage = ($beneficiary['scholarship_amount'] / $beneficiary['total_fees']) * 100; ?>
                                    <div class="progress-bar bg-success" style="width: <?= $percentage ?>%"></div>
                                </div>
                                <small class="text-muted"><?= round($percentage) ?>% scholarship coverage</small>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-primary">Family Background</h6>
                                <p class="mb-1"><strong>Father:</strong> <?= esc($beneficiary['father_name']) ?></p>
                                <p class="mb-1"><strong>Occupation:</strong> <?= esc($beneficiary['father_occupation']) ?></p>
                                <p class="mb-1"><strong>Family Income:</strong> ₹<?= number_format($beneficiary['family_income']) ?>/year</p>
                                <p class="mb-0 small text-muted">
                                    <i class="fas fa-map-marker-alt"></i> 
                                    <?= esc($beneficiary['address']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted">
                            <i class="fas fa-graduation-cap"></i> 
                            Previous Education: <?= esc($beneficiary['previous_education']) ?>
                        </small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="text-center py-5">
            <i class="fas fa-user-graduate fa-5x text-muted mb-4"></i>
            <h3 class="text-muted">No Beneficiaries Found</h3>
            <p class="text-muted">We're currently working on adding new beneficiaries to our program.</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>