<?php

namespace App\Models;

use CodeIgniter\Model;

class BeneficiaryModel extends Model
{
    protected $table = 'beneficiaries';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'student_id', 'name', 'course', 'university', 'contact_phone', 'email', 'status',
        'year', 'enrolled_date', 'expected_graduation', 'previous_education',
        'total_fees', 'scholarship_amount', 'family_income', 'father_name',
        'father_occupation', 'address', 'photo'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'student_id' => 'required|is_unique[beneficiaries.student_id,id,{id}]',
        'name' => 'required|min_length[3]|max_length[255]',
        'course' => 'required|max_length[255]',
        'university' => 'required|max_length[255]',
        'contact_phone' => 'required|max_length[20]',
        'email' => 'required|valid_email|max_length[255]',
        'year' => 'required|max_length[50]',
        'enrolled_date' => 'required|valid_date',
        'expected_graduation' => 'required|valid_date',
        'total_fees' => 'required|decimal',
        'scholarship_amount' => 'required|decimal',
        'family_income' => 'required|decimal',
        'father_name' => 'required|max_length[255]',
        'father_occupation' => 'required|max_length[255]',
        'address' => 'required'
    ];
}