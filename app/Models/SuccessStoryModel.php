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
        'student_id',
        'title',
        'story',
        'achievement',
        'current_position',
        'company_organization',
        'photo_url',
        'is_featured',
        'status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[200]',
        'story' => 'required',
        'current_position' => 'permit_empty|max_length[200]',
        'company_organization' => 'permit_empty|max_length[200]',
        'achievement' => 'permit_empty|max_length[300]',
        'status' => 'required|in_list[draft,published]',
        'is_featured' => 'permit_empty|in_list[0,1]'
    ];

    public function getPublishedStories($limit = null, $offset = null)
    {
        $builder = $this->select('success_stories.*, beneficiaries.name as student_name, beneficiaries.course, beneficiaries.institution')
                        ->join('beneficiaries', 'beneficiaries.id = success_stories.student_id', 'left')
                        ->where('success_stories.status', 'published');

        if ($limit) {
            $builder->limit($limit, $offset);
        }

        return $builder->orderBy('success_stories.created_at', 'DESC')->findAll();
    }

    public function countPublishedStories()
    {
        return $this->where('status', 'published')->countAllResults();
    }

    public function getFeaturedStories($limit = null)
    {
        $builder = $this->select('success_stories.*, beneficiaries.name as student_name, beneficiaries.course, beneficiaries.institution')
                        ->join('beneficiaries', 'beneficiaries.id = success_stories.student_id', 'left')
                        ->where('success_stories.status', 'published')
                        ->where('success_stories.is_featured', 1);

        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->orderBy('success_stories.created_at', 'DESC')->findAll();
    }
}
