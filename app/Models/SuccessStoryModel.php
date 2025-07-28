<?php

namespace App\Models;

use CodeIgniter\Model;

class SuccessStoryModel extends Model
{
    protected $table = 'success_stories';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'title', 'student_name', 'story', 'image', 'achievement',
        'current_position', 'graduation_year', 'status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'student_name' => 'required|min_length[3]|max_length[255]',
        'story' => 'required|min_length[10]',
        'achievement' => 'required|max_length[255]',
        'status' => 'required|in_list[Published,Draft]'
    ];

    public function getPublishedStories()
    {
        return $this->where('status', 'Published')->findAll();
    }
}