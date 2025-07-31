<div class="card-body p-3">
                    <!-- Course & University - Compact -->
                    <div class="mb-2">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-graduation-cap text-primary me-2 mt-1"></i>
                            <div class="flex-grow-1">
                                <p class="mb-0 text-dark fw-semibold small"><?= esc($beneficiary['course']) ?></p>
                                <p class="text-muted small mb-0" style="font-size: 0.8rem;"><?= esc($beneficiary['institution']) ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Education Level - Compact -->
                    <div class="mb-2">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-certificate text-primary me-2"></i>
                            <span class="text-dark small"><?= esc($beneficiary['education_level']) ?></span>
                        </div>
                    </div>

                    <!-- Contact Info - Compact -->
                    <?php if (!empty($beneficiary['phone']) || !empty($beneficiary['email'])): ?>
                    <div class="mb-3">
                        <?php if (!empty($beneficiary['phone'])): ?>
                            <div class="d-flex align-items-center mb-1">
                                <i class="fas fa-phone text-muted me-2" style="font-size: 0.8rem;"></i>
                                <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-dark text-decoration-none small">
                                    <?= esc($beneficiary['phone']) ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($beneficiary['email'])): ?>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-muted me-2" style="font-size: 0.8rem;"></i>
                                <a href="mailto:<?= esc(strlen($beneficiary['email']) > 20 ? substr($beneficiary['email'], 0, 20) . '...' : $beneficiary['email']) ?> " class="text-dark text-decoration-none small">
                                    <?= esc(strlen($beneficiary['email']) > 20 ? substr($beneficiary['email'], 0, 20) . '...' : $beneficiary['email']) ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Action Buttons - Compact -->
                    <div class="d-flex gap-1 mb-2">
                        <?php if (!empty($beneficiary['email'])): ?>
                            <a href="mailto:<?= esc($beneficiary['email']) ?>" class="btn btn-outline-primary btn-sm flex-fill" style="font-size: 0.75rem;">
                                <i class="fas fa-envelope"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($beneficiary['linkedin_url'])): ?>
                            <a href="<?= esc($beneficiary['linkedin_url']) ?>" target="_blank" class="btn btn-outline-info btn-sm flex-fill" style="font-size: 0.75rem;">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        <?php endif; ?>
                        <button class="btn btn-primary btn-sm flex-fill read-more-btn" style="font-size: 0.75rem;"
                                data-beneficiary-id="<?= $beneficiary['id'] ?>"
                                data-beneficiary-name="<?= esc($beneficiary['name']) ?>"
                                data-beneficiary-age="<?= esc($beneficiary['age'] ?? '') ?>"
                                data-beneficiary-education="<?= esc($beneficiary['education_level']) ?>"
                                data-beneficiary-course="<?= esc($beneficiary['course']) ?>"
                                data-beneficiary-institution="<?= esc($beneficiary['institution']) ?>"
                                data-beneficiary-city="<?= esc($beneficiary['city'] ?? '') ?>"
                                data-beneficiary-state="<?= esc($beneficiary['state'] ?? '') ?>"
                                data-beneficiary-phone="<?= esc($beneficiary['phone'] ?? '') ?>"
                                data-beneficiary-email="<?= esc($beneficiary['email'] ?? '') ?>"
                                data-beneficiary-linkedin="<?= esc($beneficiary['linkedin_url'] ?? '') ?>"
                                data-beneficiary-family="<?= esc($beneficiary['family_background'] ?? '') ?>"
                                data-beneficiary-achievements="<?= esc($beneficiary['academic_achievements'] ?? '') ?>"
                                data-beneficiary-goals="<?= esc($beneficiary['career_goals'] ?? '') ?>"
                                data-beneficiary-company="<?= esc($beneficiary['company_link'] ?? '') ?>"
                                data-beneficiary-status="<?= esc($beneficiary['status']) ?>">
                            <i class="fas fa-info-circle"></i>
                        </button>
                    </div>
                </div>