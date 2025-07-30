
-- Nayantar Memorial Charitable Trust - Complete Database Structure
-- This includes all tables with image upload functionality and public URL system

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: nayantar_cms

-- --------------------------------------------------------

-- Table structure for table `admins`
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `beneficiaries`
CREATE TABLE `beneficiaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `education_level` varchar(100) NOT NULL,
  `course` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `company_link` varchar(500) DEFAULT NULL,
  `family_background` text DEFAULT NULL,
  `academic_achievements` text DEFAULT NULL,
  `career_goals` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `success_stories`
CREATE TABLE `success_stories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `current_position` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `company_link` varchar(500) DEFAULT NULL,
  `story` text NOT NULL,
  `achievements` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `public_forms`
CREATE TABLE `public_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_name` varchar(255) NOT NULL,
  `form_type` enum('beneficiary','success_story') NOT NULL,
  `public_url_token` varchar(100) NOT NULL,
  `valid_until` datetime NOT NULL,
  `max_submissions` int(11) DEFAULT 100,
  `current_submissions` int(11) DEFAULT 0,
  `status` enum('active','expired','disabled') DEFAULT 'active',
  `created_by_admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `public_url_token` (`public_url_token`),
  KEY `created_by_admin_id` (`created_by_admin_id`),
  CONSTRAINT `public_forms_ibfk_1` FOREIGN KEY (`created_by_admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `public_submissions`
CREATE TABLE `public_submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `public_form_id` int(11) NOT NULL,
  `form_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`form_data`)),
  `submitted_at` timestamp NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  PRIMARY KEY (`id`),
  KEY `public_form_id` (`public_form_id`),
  CONSTRAINT `public_submissions_ibfk_1` FOREIGN KEY (`public_form_id`) REFERENCES `public_forms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Insert sample data

-- Insert admin user
INSERT INTO `admins` (`username`, `password`, `email`) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@nayantar.org');
-- Password is 'admin123'

-- Insert sample beneficiary
INSERT INTO `beneficiaries` (`name`, `age`, `education_level`, `course`, `institution`, `city`, `state`, `phone`, `email`, `linkedin_url`, `family_background`, `academic_achievements`, `career_goals`, `status`) VALUES
('Rahul Kumar Sharma', 22, 'Undergraduate', 'Computer Science Engineering', 'Mumbai University', 'Mumbai', 'Maharashtra', '+91-9876543210', 'rahul.sharma@email.com', 'https://linkedin.com/in/rahulkumar', 'From a middle-class family in Mumbai. Father works as a clerk and mother is a homemaker. Family struggled financially to support his education.', 'Scored 85% in 12th standard, Currently maintaining 8.5 CGPA in engineering, Won coding competition at university level.', 'Aspires to become a software engineer at a top tech company. Wants to work in artificial intelligence and machine learning field.', 'active');

-- Insert sample success story
INSERT INTO `success_stories` (`name`, `age`, `education`, `current_position`, `company`, `city`, `state`, `linkedin_url`, `company_link`, `story`, `achievements`, `status`) VALUES
('Priya Kumari', 25, 'B.Tech in Computer Science from Delhi University', 'Senior Software Developer', 'TechCorp Solutions', 'Bangalore', 'Karnataka', 'https://linkedin.com/in/priyakumari', 'https://techcorp.com', 'Priya came from a humble background in rural Bihar. With the support of Nayantar Memorial Trust, she completed her engineering degree and is now working as a Senior Software Developer at a leading tech company in Bangalore. Her journey from a small village to becoming a successful engineer is truly inspiring.', 'Developed 3 major software applications, Led a team of 5 developers, Received Employee of the Year award in 2023.', 'active');

COMMIT;

-- --------------------------------------------------------

-- Create uploads directory structure (for reference)
-- You need to ensure these directories exist in your writable/uploads/ folder:
-- writable/uploads/beneficiaries/
-- writable/uploads/success_stories/
-- writable/uploads/public_submissions/

-- Notes:
-- 1. The image columns store the filename of uploaded images
-- 2. Public forms allow admin to create shareable URLs for data collection
-- 3. All tables include proper indexing and foreign key constraints
-- 4. JSON validation is included for form data storage
-- 5. Status fields allow for proper content management
