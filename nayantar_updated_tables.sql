
-- Nayantar Memorial Charitable Trust - Updated Database Structure
-- This includes all enhanced tables with image upload functionality and public URL system

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

-- Updated Beneficiaries table with new fields
DROP TABLE IF EXISTS `beneficiaries`;
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

-- Updated Success Stories table with new fields
DROP TABLE IF EXISTS `success_stories`;
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

-- Public Forms table for admin-generated public URLs
CREATE TABLE `public_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_name` varchar(255) NOT NULL,
  `form_type` enum('beneficiary','success_story') NOT NULL,
  `public_url_token` varchar(100) NOT NULL,
  `valid_until` datetime NOT NULL,
  `max_submissions` int(11) DEFAULT 100,
  `current_submissions` int(11) DEFAULT 0,
  `status` enum('active','expired','disabled') DEFAULT 'active',
  `description` text DEFAULT NULL,
  `created_by_admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `public_url_token` (`public_url_token`),
  KEY `created_by_admin_id` (`created_by_admin_id`),
  CONSTRAINT `public_forms_ibfk_1` FOREIGN KEY (`created_by_admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Public Submissions table for storing form submissions
CREATE TABLE `public_submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `public_form_id` int(11) NOT NULL,
  `form_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`form_data`)),
  `image` varchar(255) DEFAULT NULL,
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

-- Insert sample beneficiary with new fields
INSERT INTO `beneficiaries` (`name`, `age`, `education_level`, `course`, `institution`, `city`, `state`, `phone`, `email`, `linkedin_url`, `company_link`, `family_background`, `academic_achievements`, `career_goals`) VALUES
('Rahul Kumar Sharma', 22, 'Undergraduate', 'Computer Science Engineering', 'Rajasthan Technical University', 'Jaipur', 'Rajasthan', '+91 9876543210', 'rahul.sharma@email.com', 'https://linkedin.com/in/rahulkumar', 'https://rtu.ac.in', 'From a farming family in rural Rajasthan. Father is a small-scale farmer and mother is a homemaker. Family income is very limited, making higher education challenging.', 'Scored 85% in 12th standard, Won district-level science fair in 2020, Received merit scholarship in first year', 'Aspiring to become a software engineer at a leading tech company. Wants to develop applications that can help rural communities. Plans to pursue higher studies in AI/ML.');

-- Insert sample success story with new fields
INSERT INTO `success_stories` (`name`, `age`, `education`, `current_position`, `company`, `city`, `state`, `linkedin_url`, `company_link`, `story`, `achievements`) VALUES
('Priya Kumari', 25, 'B.Tech in Computer Science from Delhi University', 'Senior Software Developer', 'TechCorp Solutions', 'Bangalore', 'Karnataka', 'https://linkedin.com/in/priyakumari', 'https://techcorp.com', 'Priya came from a humble background in rural Bihar. With the support of Nayantar Memorial Trust, she completed her engineering degree and is now working as a Senior Software Developer at a leading tech company in Bangalore. Her journey from a small village to becoming a successful engineer is truly inspiring.', 'Developed 3 major software applications, Led a team of 5 developers, Received Employee of the Year award in 2023, Published 2 research papers in international conferences');

-- Insert sample public form
INSERT INTO `public_forms` (`form_name`, `form_type`, `public_url_token`, `valid_until`, `description`, `created_by_admin_id`) VALUES
('Beneficiary Registration 2025', 'beneficiary', 'BEN2025_' || SUBSTRING(MD5(RAND()) FROM 1 FOR 8), DATE_ADD(NOW(), INTERVAL 30 DAY), 'Public form for new beneficiary applications for the year 2025', 1);

COMMIT;

-- --------------------------------------------------------

-- Create upload directories (instructions for manual creation)
-- You need to ensure these directories exist in your writable/uploads/ folder:
-- writable/uploads/beneficiaries/
-- writable/uploads/success_stories/
-- writable/uploads/public_submissions/

-- Notes:
-- 1. Removed Financial Information fields from beneficiaries table
-- 2. Added LinkedIn URL and Company Link fields to both tables
-- 3. Added image upload capability to all forms
-- 4. Created public forms system for admin-generated data collection URLs
-- 5. All tables maintain referential integrity with proper foreign keys
-- 6. JSON validation is included for flexible form data storage
-- 7. Status fields allow for proper content management workflow
-- 8. Timestamps track all data changes for audit purposes
