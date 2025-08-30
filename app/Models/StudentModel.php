<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'address',
        'course',
        'institution',
        'year',
        'total_fees',
        'scholarship_amount',
        'scholarship_amount_numeric',
        'status',
        'father_name',
        'father_occupation',
        'family_income',
        'previous_education',
        'enrolled_date',
        'expected_graduation',
        'photo_url'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getActiveStudents()
    {
        return $this->where('status', 'Active')->findAll();
    }

    public function getStudentStats()
    {
        $total = $this->countAll();
        $active = $this->where('status', 'Active')->countAllResults();
        $graduated = $this->where('status', 'Graduated')->countAllResults();

        return [
            'total' => $total,
            'active' => $active,
            'graduated' => $graduated
        ];
    }
}
