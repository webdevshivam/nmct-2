<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicSubmissionModel extends Model
{
    protected $table = 'public_submissions';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'public_form_id',
        'form_data',
        'image',
        'ip_address',
        'user_agent',
        'status'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $createdField = 'submitted_at';

    // Validation
    protected $validationRules = [
        'public_form_id' => 'required|integer',
        'form_data' => 'required'
    ];

    public function getSubmissionsByForm($formId)
    {
        return $this->where('public_form_id', $formId)
            ->orderBy('submitted_at', 'DESC')
            ->findAll();
    }

    public function approveSubmission($id, $targetTable)
    {
        $submission = $this->find($id);
        if (!$submission) return false;

        $formData = json_decode($submission['form_data'], true);

        // Add image if exists
        if ($submission['image']) {
            $formData['image'] = $submission['image'];
        }

        // Insert into target table
        $db = \Config\Database::connect();
        $result = $db->table($targetTable)->insert($formData);

        if ($result) {
            $this->update($id, ['status' => 'approved']);
            return true;
        }

        return false;
    }
}
