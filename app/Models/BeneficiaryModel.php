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
        'student_id',
        'name',
        'course',
        'university',
        'contact_phone',
        'email',
        'status',
        'year',
        'enrolled_date',
        'expected_graduation',
        'previous_education',
        'total_fees',
        'scholarship_amount',
        'family_income',
        'father_name',
        'father_occupation',
        'address',
        'photo'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'age' => 'permit_empty|integer|greater_than[0]',
        'education_level' => 'required|max_length[100]',
        'course' => 'required|max_length[255]',
        'institution' => 'required|max_length[255]',
        'city' => 'permit_empty|max_length[100]',
        'state' => 'permit_empty|max_length[100]',
        'phone' => 'permit_empty|max_length[20]',
        'email' => 'permit_empty|valid_email|max_length[255]',
        'linkedin_url' => 'permit_empty|valid_url|max_length[500]',
        'company_link' => 'permit_empty|valid_url|max_length[500]',
        'status' => 'required|in_list[active,inactive]'
    ];

    public function getActiveBeneficiaries($limit = null, $offset = null, $search = null)
    {
        $builder = $this->where('status', 'active');

        if ($search) {
            $builder->groupStart()
                ->like('name', $search)
                ->orLike('course', $search)
                ->orLike('institution', $search)
                ->orLike('city', $search)
                ->groupEnd();
        }

        if ($limit) {
            $builder->limit($limit, $offset);
        }

        return $builder->findAll();
    }

    public function countActiveBeneficiaries($search = null)
    {
        $builder = $this->where('status', 'active');

        if ($search) {
            $builder->groupStart()
                ->like('name', $search)
                ->orLike('course', $search)
                ->orLike('institution', $search)
                ->orLike('city', $search)
                ->orLike('state', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }

    public function getActiveBeneficiariesByStatus($isPassout = false, $limit = null, $offset = null, $search = null)
    {
        $builder = $this->where('status', 'active')
                        ->where('is_passout', $isPassout);

        if ($search) {
            $builder->groupStart()
                ->like('name', $search)
                ->orLike('course', $search)
                ->orLike('institution', $search)
                ->orLike('city', $search)
                ->groupEnd();
        }

        if ($limit) {
            $builder->limit($limit, $offset);
        }

        return $builder->findAll();
    }

    public function countActiveBeneficiariesByStatus($isPassout = false, $search = null)
    {
        $builder = $this->where('status', 'active')
                        ->where('is_passout', $isPassout);

        if ($search) {
            $builder->groupStart()
                ->like('name', $search)
                ->orLike('course', $search)
                ->orLike('institution', $search)
                ->orLike('city', $search)
                ->groupEnd();
        }

        return $builder->countAllResults();
    }

    public function getBeneficiariesByStatus($isPassout = null, $limit = null, $offset = null, $search = null)
    {
        $builder = $this->where('status', 'Active');

        // For now, we'll differentiate by year - students in final year or graduated are considered passout
        if ($isPassout !== null) {
            if ($isPassout) {
                // Consider 4th year and above as passout/alumni
                $builder->where('year >=', '4th Year');
            } else {
                // Consider 1st, 2nd, 3rd year as currently pursuing
                $builder->whereIn('year', ['1st Year', '2nd Year', '3rd Year']);
            }
        }

        // Add search functionality
        if ($search) {
            $builder->groupStart()
                ->like('name', $search)
                ->orLike('course', $search)
                ->orLike('university', $search)
                ->groupEnd();
        }

        // Add pagination if specified
        if ($limit) {
            $builder->limit($limit, $offset);
        }

        return $builder->orderBy('created_at', 'DESC')->findAll();
    }
}