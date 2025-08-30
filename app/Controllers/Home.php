<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\SuccessStoryModel;
use App\Models\NgoWorkModel;
use App\Models\SiteSettingsModel;
use App\Models\BeneficiaryModel; // Import BeneficiaryModel

class Home extends BaseController
{
    public function index()
    {
        $beneficiaryModel = new BeneficiaryModel();
        $successStoryModel = new SuccessStoryModel();
        $ngoWorkModel = new NgoWorkModel();
        $siteSettingsModel = new SiteSettingsModel();


        // Get featured beneficiaries data
        $featured_beneficiaries = $beneficiaryModel->where('status', 'active')->findAll(6);

        // Get beneficiary statistics
        $beneficiary_stats = [
            'total' => $beneficiaryModel->countAll(),
            'active' => $beneficiaryModel->where('status', 'active')->countAllResults(),
            'passouts' => $beneficiaryModel->where('is_passout', 'passout')->countAllResults(),
            'currently_studying' => $beneficiaryModel->where('is_passout', 'currently_studying')->countAllResults()
        ];

        // Get success stories
        $success_stories = $successStoryModel->where('status', 'published')->findAll(3);

        // Get recent ngo works for the home page
        try {
            $recent_activities = $ngoWorkModel->getPublishedWorks(3);
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
            'featured_beneficiaries' => $featured_beneficiaries,
            'beneficiary_stats' => $beneficiary_stats,
            'success_stories' => $success_stories,
            'recent_activities' => $recent_activities,
            'site_settings' => $site_settings
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
            'success_stories' => $successStoryModel->select('success_stories.*, beneficiaries.name as student_name, beneficiaries.course_name as course, beneficiaries.institution_name as institution')
                                                  ->join('beneficiaries', 'beneficiaries.id = success_stories.student_id', 'left')
                                                  ->where('success_stories.status', 'published')
                                                  ->orderBy('success_stories.created_at', 'DESC')
                                                  ->findAll()
        ];

        return view('frontend/success_stories', $data);
    }

    public function activities()
    {
        $ngoWorkModel = new NgoWorkModel();

        $data = [
            'title' => 'Our Activities - Nayantara Memorial Charitable Trust',
            'activities' => $ngoWorkModel->getPublishedWorks()
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