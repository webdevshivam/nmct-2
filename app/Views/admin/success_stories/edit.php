<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4><i class="fas fa-edit"></i> Edit Success Story</h4>
    <a href="<?= base_url('admin/success-stories') ?>" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="fas fa-star"></i> Update Success Story Information</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/success-stories/update/' . $story['id']) ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Story Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" 
                               value="<?= old('title', $story['title']) ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="student_name" class="form-label">Student Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="student_name" name="student_name" 
                               value="<?= old('student_name', $story['student_name']) ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="achievement" class="form-label">Achievement <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="achievement" name="achievement" 
                               value="<?= old('achievement', $story['achievement']) ?>" required>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="current_position" class="form-label">Current Position</label>
                        <input type="text" class="form-control" id="current_position" name="current_position" 
                               value="<?= old('current_position', $story['current_position']) ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="graduation_year" class="form-label">Graduation Year</label>
                        <input type="number" class="form-control" id="graduation_year" name="graduation_year" 
                               value="<?= old('graduation_year', $story['graduation_year']) ?>" min="2000" max="<?= date('Y') + 5 ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="Published" <?= old('status', $story['status']) == 'Published' ? 'selected' : '' ?>>Published</option>
                            <option value="Draft" <?= old('status', $story['status']) == 'Draft' ? 'selected' : '' ?>>Draft</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="story" class="form-label">Success Story <span class="text-danger">*</span></label>
                <textarea class="form-control" id="story" name="story" rows="8" required><?= old('story', $story['story']) ?></textarea>
                <div class="form-text">Tell the inspiring journey of this student and how they achieved success.</div>
            </div>
            
            <div class="d-flex justify-content-end">
                <a href="<?= base_url('admin/success-stories') ?>" class="btn btn-secondary me-2">
                    <i class="fas fa-times"></i> Cancel
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Success Story
                </button>
            </div>
        </form>
    </div>
</div>

<script>
var page_title = 'Edit Success Story';
</script>

<?= $this->endSection() ?>