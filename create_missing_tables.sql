
-- Create activities table for mydatabase
CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `activity_date` date DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `participants_count` int(11) DEFAULT 0,
  `photo_url` varchar(255) DEFAULT NULL,
  `status` enum('upcoming','ongoing','completed') DEFAULT 'upcoming',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample activities data
INSERT INTO `activities` (`id`, `title`, `description`, `activity_date`, `location`, `participants_count`, `photo_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Annual Education Fair', 'Organized education fair to guide students about higher education opportunities and scholarship programs.', '2024-12-15', 'Patna Community Center', 150, NULL, 'completed', '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(2, 'Health Camp - Rural Areas', 'Free health checkup camp conducted in rural villages to provide basic healthcare services.', '2024-11-20', 'Gaya Rural Villages', 200, NULL, 'completed', '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(3, 'Skill Development Workshop', 'Workshop on digital literacy and basic computer skills for underprivileged youth.', '2025-02-10', 'Muzaffarpur Training Center', 0, NULL, 'upcoming', '2025-07-28 11:02:15', '2025-07-28 11:02:15');

-- Create success_stories table for mydatabase
CREATE TABLE `success_stories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `achievement` text DEFAULT NULL,
  `current_position` varchar(255) DEFAULT NULL,
  `company_organization` varchar(255) DEFAULT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `status` enum('draft','published','archived') DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample success stories data
INSERT INTO `success_stories` (`id`, `student_id`, `title`, `story`, `achievement`, `current_position`, `company_organization`, `photo_url`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'From Rural Bihar to Tech Success', 'Anita overcame financial hardships to pursue computer science. With our scholarship support, she excelled in her studies and secured internships at leading tech companies.', 'Top 5% in university, Multiple internship offers', 'Software Developer Intern', 'TCS', NULL, 1, 'published', '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(2, 2, 'Engineering Dreams Come True', 'Rahul\'s journey from a small village to NIT Patna is inspiring. Despite his family\'s financial struggles, he maintained excellent grades and is now on track for a bright engineering career.', 'Merit scholarship recipient, University topper', 'Engineering Student', 'NIT Patna', NULL, 0, 'published', '2025-07-28 11:02:15', '2025-07-28 11:02:15');

-- Create site_settings table for mydatabase  
CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `setting_type` enum('text','number','boolean','json') DEFAULT 'text',
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_key` (`setting_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert default site settings
INSERT INTO `site_settings` (`setting_key`, `setting_value`, `setting_type`, `description`) VALUES
('site_name', 'Nayantara Memorial Charitable Trust', 'text', 'Website name'),
('site_description', 'Empowering Rural Education', 'text', 'Website description'),
('contact_email', 'info@nayantar.org', 'text', 'Contact email'),
('contact_phone', '+91-9876543210', 'text', 'Contact phone number');
