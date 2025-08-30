<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\SuccessStoryModel;
use App\Models\ActivityModel;
use App\Models\SiteSettingsModel;
use App\Models\BeneficiaryModel; // Import BeneficiaryModel

class Home extends BaseController
{
    public function index()
    {
        $beneficiaryModel = new BeneficiaryModel();
        $successStoryModel = new SuccessStoryModel();
        $activityModel = new ActivityModel(); // Keep activity model for potential future use or other methods
        $siteSettingsModel = new SiteSettingsModel(); // Keep site settings model for potential future use or other methods


        // Get students data - using beneficiaries table
        $students = $beneficiaryModel->where('status', 'active')->findAll(6); // Get first 6 students

        // Get student statistics
        $student_stats = [
            'total' => $beneficiaryModel->countAll(),
            'active' => $beneficiaryModel->where('status', 'active')->countAllResults(),
            'graduated' => $beneficiaryModel->where('is_passout', 'passout')->countAllResults()
        ];

        // Get success stories
        $success_stories = $successStoryModel->where('status', 'active')->findAll(3);

        // Get recent activities for the home page as well, if needed for a more comprehensive view
        try {
            $recent_activities = $activityModel->getRecentActivities(3);
        } catch (\Exception $e) {
            $recent_activities = [];
        }

        // Get site settings
        try {
            $site_settings = $siteSettingsModel->getAllSettings();
        } catch (\Exception $e) {
            $site_settings = [];
        }

        $data = [
            'title' => 'Nayantara Trust - Empowering Rural Education',
            'students' => $students,
            'student_stats' => $student_stats,
            'success_stories' => $success_stories,
            'recent_activities' => $recent_activities, // Include recent activities
            'site_settings' => $site_settings // Include site settings
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
        $beneficiaryModel = new BeneficiaryModel(); // Use BeneficiaryModel

        // Get all beneficiaries
        $beneficiaries = $beneficiaryModel->findAll();

        // Ensure the structure matches what the view expects, or adjust the view
        // The original code transformed student data to beneficiary structure.
        // Assuming BeneficiaryModel returns data in a suitable format,
        // no transformation is needed here unless the view requires a different format.
        // If the view expects specific keys that are not directly in BeneficiaryModel,
        // then a transformation loop would be needed.
        // For now, assuming the model output is directly usable.

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

    // The calculateAge function might not be directly relevant if BeneficiaryModel has age,
    // but keeping it in case it's used elsewhere or for reference.
    // If BeneficiaryModel has 'date_of_birth' or 'enrolled_date', this function could be adapted.
    private function calculateAge($enrolledDate)
    {
        // This function was originally designed for students and might need adjustment
        // if the 'enrolled_date' field in the beneficiaries table is different or non-existent.
        // Assuming it might still be used for a 'student' related context or a similar logic.
        $enrollDate = new \DateTime($enrolledDate);
        $now = new \DateTime();
        $age = $now->diff($enrollDate)->y;
        return $age > 0 ? $age + 18 : rand(18, 25); // Assume base age of 18 + years since enrollment
    }
}