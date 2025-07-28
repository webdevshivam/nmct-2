<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="fas fa-plus"></i> Add New Beneficiary</h4>
    <a href="<?= base_url('admin/beneficiaries') ?>" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-user-plus"></i> Beneficiary Information</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/beneficiaries/store') ?>" method="post">
            <div class="row">
                <!-- Basic Information -->
                <div class="col-md-6">
                    <h6 class="text-primary mb-3"><i class="fas fa-user"></i> Personal Details</h6>
                    
                    <div class="mb-3">
                        <label for="student_id" class="form-label">Student ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="student_id" name="student_id" 
                               value="<?= old('student_id') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" 
                               value="<?= old('name') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="contact_phone" class="form-label">Contact Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="contact_phone" name="contact_phone" 
                               value="<?= old('contact_phone') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" 
                               value="<?= old('email') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="Active" <?= old('status') == 'Active' ? 'selected' : '' ?>>Active</option>
                            <option value="Inactive" <?= old('status') == 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                            <option value="Graduated" <?= old('status') == 'Graduated' ? 'selected' : '' ?>>Graduated</option>
                        </select>
                    </div>
                </div>
                
                <!-- Academic Information -->
                <div class="col-md-6">
                    <h6 class="text-primary mb-3"><i class="fas fa-graduation-cap"></i> Academic Details</h6>
                    
                    <div class="mb-3">
                        <label for="course" class="form-label">Course <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="course" name="course" 
                               value="<?= old('course') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="university" class="form-label">University <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="university" name="university" 
                               value="<?= old('university') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="year" class="form-label">Current Year <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="year" name="year" 
                               value="<?= old('year') ?>" placeholder="e.g., 3rd Year" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="enrolled_date" class="form-label">Enrolled Date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="enrolled_date" name="enrolled_date" 
                               value="<?= old('enrolled_date') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="expected_graduation" class="form-label">Expected Graduation <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="expected_graduation" name="expected_graduation" 
                               value="<?= old('expected_graduation') ?>" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Financial Information -->
                <div class="col-md-6">
                    <h6 class="text-primary mb-3"><i class="fas fa-rupee-sign"></i> Financial Details</h6>
                    
                    <div class="mb-3">
                        <label for="total_fees" class="form-label">Total Fees <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="total_fees" name="total_fees" 
                               value="<?= old('total_fees') ?>" step="0.01" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="scholarship_amount" class="form-label">Scholarship Amount <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="scholarship_amount" name="scholarship_amount" 
                               value="<?= old('scholarship_amount') ?>" step="0.01" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="family_income" class="form-label">Family Income (Annual) <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="family_income" name="family_income" 
                               value="<?= old('family_income') ?>" step="0.01" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="previous_education" class="form-label">Previous Education <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="previous_education" name="previous_education" 
                               value="<?= old('previous_education') ?>" placeholder="e.g., 12th - 85%" required>
                    </div>
                </div>
                
                <!-- Family Information -->
                <div class="col-md-6">
                    <h6 class="text-primary mb-3"><i class="fas fa-home"></i> Family Details</h6>
                    
                    <div class="mb-3">
                        <label for="father_name" class="form-label">Father's Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="father_name" name="father_name" 
                               value="<?= old('father_name') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="father_occupation" class="form-label">Father's Occupation <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="father_occupation" name="father_occupation" 
                               value="<?= old('father_occupation') ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="address" name="address" rows="4" required><?= old('address') ?></textarea>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <hr>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/beneficiaries') ?>" class="btn btn-secondary me-2">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Save Beneficiary
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
var page_title = 'Add New Beneficiary';
</script>

<?= $this->endSection() ?>