<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\SuccessStoryModel;
use App\Models\ActivityModel;
use App\Models\SiteSettingsModel;

class Home extends BaseController
{
    public function index()
    {
        $studentModel = new StudentModel();
        $successStoryModel = new SuccessStoryModel();
        $activityModel = new ActivityModel();
        $siteSettingsModel = new SiteSettingsModel();

        $data = [
            'title' => 'Nayantara Memorial Charitable Trust',
            'students' => $studentModel->getActiveStudents(),
            'student_stats' => $studentModel->getStudentStats(),
            'success_stories' => $successStoryModel->select('success_stories.*, students.name as student_name')
                                                  ->join('students', 'students.id = success_stories.student_id', 'left')
                                                  ->where('success_stories.status', 'published')
                                                  ->orderBy('success_stories.created_at', 'DESC')
                                                  ->limit(3)
                                                  ->findAll(),
            'recent_activities' => $activityModel->getRecentActivities(3),
            'site_settings' => $siteSettingsModel->getAllSettings()
        ];

        return view('frontend/home', $data);
    }

    public function students()
    {
        $studentModel = new StudentModel();

        $data = [
            'title' => 'Our Students - Nayantara Memorial Charitable Trust',
            'students' => $studentModel->getActiveStudents()
        ];

        return view('frontend/students', $data);
    }

    public function beneficiaries()
    {
        $studentModel = new StudentModel();

        // Get all students to show as beneficiaries
        $students = $studentModel->findAll();
        
        // Transform student data to match beneficiary structure
        $beneficiaries = [];
        foreach ($students as $student) {
            $beneficiaries[] = [
                'id' => $student['id'],
                'name' => $student['name'],
                'age' => $this->calculateAge($student['enrolled_date'] ?? date('Y-m-d')),
                'category' => $student['status'] ?? 'Student',
                'course_name' => $student['course'],
                'institution' => $student['institution'],
                'status' => strtolower($student['status'] ?? 'active'),
                'email' => $student['email'],
                'mobile_number' => $student['phone'],
                'company_name' => null, // Students don't have company info
                'current_position' => null,
                'education_level' => $student['year'] ? 'Year ' . $student['year'] : 'Undergraduate',
                'scholarship_amount' => $student['scholarship_amount'] ?? 0,
                'total_fees' => $student['total_fees'] ?? 0,
                'father_name' => $student['father_name'] ?? '',
                'family_income' => $student['family_income'] ?? '',
                'expected_graduation' => $student['expected_graduation'] ?? ''
            ];
        }

        $data = [
            'title' => 'Our Beneficiaries - Nayantara Memorial Charitable Trust',
            'beneficiaries' => $beneficiaries
        ];

        return view('frontend/beneficiaries', $data);
    }

    public function successStories()
    {
        $successStoryModel = new SuccessStoryModel();

        $data = [
            'title' => 'Success Stories - Nayantara Memorial Charitable Trust',
            'success_stories' => $successStoryModel->select('success_stories.*, students.name as student_name, students.course, students.institution')
                                                  ->join('students', 'students.id = success_stories.student_id', 'left')
                                                  ->where('success_stories.status', 'published')
                                                  ->orderBy('success_stories.created_at', 'DESC')
                                                  ->findAll()
        ];

        return view('frontend/success_stories', $data);
    }

    public function activities()
    {
        $activityModel = new ActivityModel();

        $data = [
            'title' => 'Our Activities - Nayantara Memorial Charitable Trust',
            'activities' => $activityModel->orderBy('activity_date', 'DESC')->findAll()
        ];

        return view('frontend/activities', $data);
    }

    private function calculateAge($enrolledDate)
    {
        $enrollDate = new \DateTime($enrolledDate);
        $now = new \DateTime();
        $age = $now->diff($enrollDate)->y;
        return $age > 0 ? $age + 18 : rand(18, 25); // Assume base age of 18 + years since enrollment
    }
}