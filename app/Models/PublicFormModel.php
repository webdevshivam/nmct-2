
<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicFormModel extends Model
{
    protected $table = 'public_forms';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'form_name', 'form_type', 'public_url_token', 'valid_until', 'max_submissions',
        'current_submissions', 'status', 'description', 'created_by_admin_id'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'form_name' => 'required|min_length[3]|max_length[255]',
        'form_type' => 'required|in_list[beneficiary,success_story]',
        'valid_until' => 'required|valid_date',
        'max_submissions' => 'permit_empty|integer|greater_than[0]',
        'created_by_admin_id' => 'required|integer'
    ];

    public function generateUniqueToken($type)
    {
        do {
            $token = strtoupper($type == 'beneficiary' ? 'BEN' : 'SUC') . '_' . 
                    date('Y') . '_' . 
                    bin2hex(random_bytes(4));
        } while ($this->where('public_url_token', $token)->first());

        return $token;
    }

    public function getActiveForm($token)
    {
        return $this->where('public_url_token', $token)
                   ->where('status', 'active')
                   ->where('valid_until >', date('Y-m-d H:i:s'))
                   ->first();
    }

    public function incrementSubmissions($id)
    {
        $form = $this->find($id);
        if ($form) {
            $this->update($id, ['current_submissions' => $form['current_submissions'] + 1]);
        }
    }
}
