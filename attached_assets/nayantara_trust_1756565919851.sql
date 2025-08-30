-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2025 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nayantara_trust`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `active_students`
-- (See below for the actual view)
--
CREATE TABLE `active_students` (
`id` int(11)
,`name` varchar(100)
,`email` varchar(100)
,`phone` varchar(20)
,`address` text
,`course` varchar(100)
,`institution` varchar(150)
,`year` varchar(20)
,`total_fees` varchar(50)
,`scholarship_amount` varchar(50)
,`scholarship_amount_numeric` decimal(10,2)
,`status` enum('Active','Inactive','Graduated','Discontinued')
,`father_name` varchar(100)
,`father_occupation` varchar(100)
,`family_income` varchar(50)
,`previous_education` varchar(200)
,`enrolled_date` date
,`expected_graduation` date
,`photo_url` varchar(255)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `activity_date` date DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `participants_count` int(11) DEFAULT 0,
  `photo_url` varchar(255) DEFAULT NULL,
  `status` enum('upcoming','ongoing','completed') DEFAULT 'upcoming',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `activity_date`, `location`, `participants_count`, `photo_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Annual Education Fair', 'Organized education fair to guide students about higher education opportunities and scholarship programs.', '2024-12-15', 'Patna Community Center', 150, NULL, 'completed', '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(2, 'Health Camp - Rural Areas', 'Free health checkup camp conducted in rural villages to provide basic healthcare services.', '2024-11-20', 'Gaya Rural Villages', 200, NULL, 'completed', '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(3, 'Skill Development Workshop', 'Workshop on digital literacy and basic computer skills for underprivileged youth.', '2025-02-10', 'Muzaffarpur Training Center', 0, NULL, 'upcoming', '2025-07-28 11:02:15', '2025-07-28 11:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text NOT NULL,
  `status` enum('new','read','replied') DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `donor_name` varchar(100) NOT NULL,
  `donor_email` varchar(100) DEFAULT NULL,
  `donor_phone` varchar(20) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `donation_type` enum('one-time','monthly','yearly') DEFAULT 'one-time',
  `purpose` varchar(200) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `status` enum('pending','completed','failed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `donation_summary`
-- (See below for the actual view)
--
CREATE TABLE `donation_summary` (
`donation_date` date
,`total_donations` bigint(21)
,`total_amount` decimal(32,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `featured_success_stories`
-- (See below for the actual view)
--
CREATE TABLE `featured_success_stories` (
`id` int(11)
,`student_id` int(11)
,`title` varchar(200)
,`story` text
,`achievement` varchar(300)
,`current_position` varchar(200)
,`company_organization` varchar(200)
,`photo_url` varchar(255)
,`is_featured` tinyint(1)
,`status` enum('draft','published')
,`created_at` timestamp
,`updated_at` timestamp
,`student_name` varchar(100)
,`course` varchar(100)
,`institution` varchar(150)
);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `setting_type` enum('text','number','boolean','json') DEFAULT 'text',
  `description` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `setting_key`, `setting_value`, `setting_type`, `description`, `updated_at`) VALUES
(1, 'site_title', 'Nayantara Memorial Charitable Trust', 'text', 'Main site title', '2025-07-28 11:02:15'),
(2, 'contact_email', 'contact@nayantara.org', 'text', 'Main contact email', '2025-07-28 11:02:15'),
(3, 'contact_phone', '+91 98765 43210', 'text', 'Main contact phone', '2025-07-28 11:02:15'),
(4, 'address', 'Patna, Bihar, India', 'text', 'Organization address', '2025-07-28 11:02:15'),
(5, 'total_students_helped', '500', 'number', 'Total number of students helped', '2025-07-28 11:02:15'),
(6, 'total_scholarships_given', '2500000', 'number', 'Total scholarship amount in rupees', '2025-07-28 11:02:15'),
(7, 'years_of_service', '15', 'number', 'Years of service', '2025-07-28 11:02:15'),
(8, 'active_programs', '8', 'number', 'Number of active programs', '2025-07-28 11:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `institution` varchar(150) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `total_fees` varchar(50) DEFAULT NULL,
  `scholarship_amount` varchar(50) DEFAULT NULL,
  `scholarship_amount_numeric` decimal(10,2) DEFAULT 0.00,
  `status` enum('Active','Inactive','Graduated','Discontinued') DEFAULT 'Active',
  `father_name` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `family_income` varchar(50) DEFAULT NULL,
  `previous_education` varchar(200) DEFAULT NULL,
  `enrolled_date` date DEFAULT NULL,
  `expected_graduation` date DEFAULT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `address`, `course`, `institution`, `year`, `total_fees`, `scholarship_amount`, `scholarship_amount_numeric`, `status`, `father_name`, `father_occupation`, `family_income`, `previous_education`, `enrolled_date`, `expected_graduation`, `photo_url`, `created_at`, `updated_at`) VALUES
(1, 'Anita Kumar', 'anita.kumar@email.com', '+91 98765 43210', 'Patna, Bihar', 'Bachelor of Computer Science', 'Patna University', '3rd Year', '₹2,00,000', '₹1,80,000', 180000.00, 'Active', 'Rajesh Kumar', 'Farmer', '₹50,000/year', 'Class 12 - Science', '2022-07-15', '2025-06-30', NULL, '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(2, 'Rahul Singh', 'rahul.singh@email.com', '+91 98765 43211', 'Gaya, Bihar', 'Bachelor of Engineering', 'NIT Patna', '2nd Year', '₹3,50,000', '₹3,20,000', 320000.00, 'Active', 'Suresh Singh', 'Daily Wage Worker', '₹60,000/year', 'Class 12 - Science', '2023-08-01', '2027-05-30', NULL, '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(3, 'Priya Sharma', 'priya.sharma@email.com', '+91 98765 43212', 'Muzaffarpur, Bihar', 'Bachelor of Medicine', 'AIIMS Patna', '1st Year', '₹5,00,000', '₹4,50,000', 450000.00, 'Active', 'Amit Sharma', 'Small Shop Owner', '₹80,000/year', 'Class 12 - Biology', '2024-08-15', '2029-07-30', NULL, '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(4, 'Deepak Yadav', 'deepak.yadav@email.com', '+91 98765 43213', 'Darbhanga, Bihar', 'Bachelor of Arts', 'Lalit Narayan Mithila University', '2nd Year', '₹80,000', '₹70,000', 70000.00, 'Active', 'Ram Yadav', 'Agricultural Worker', '₹40,000/year', 'Class 12 - Arts', '2023-07-20', '2026-06-15', NULL, '2025-07-28 11:02:15', '2025-07-28 11:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `student_documents`
--

CREATE TABLE `student_documents` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `document_type` varchar(50) DEFAULT NULL,
  `document_name` varchar(200) DEFAULT NULL,
  `file_path` varchar(500) DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `story` text NOT NULL,
  `achievement` varchar(300) DEFAULT NULL,
  `current_position` varchar(200) DEFAULT NULL,
  `company_organization` varchar(200) DEFAULT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `status` enum('draft','published') DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `student_id`, `title`, `story`, `achievement`, `current_position`, `company_organization`, `photo_url`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'From Rural Bihar to Tech Success', 'Anita overcame financial hardships to pursue computer science. With our scholarship support, she excelled in her studies and secured internships at leading tech companies.', 'Top 5% in university, Multiple internship offers', 'Software Developer Intern', 'TCS', NULL, 1, 'published', '2025-07-28 11:02:15', '2025-07-28 11:02:15'),
(2, 2, 'Engineering Dreams Come True', 'Rahul\'s journey from a small village to NIT Patna is inspiring. Despite his family\'s financial struggles, he maintained excellent grades and is now on track for a bright engineering career.', 'Merit scholarship recipient, University topper', 'Engineering Student', 'NIT Patna', NULL, 0, 'published', '2025-07-28 11:02:15', '2025-07-28 11:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','staff') DEFAULT 'admin',
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@nayantara.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', 'active', '2025-07-28 11:02:15', '2025-07-28 11:02:15');

-- --------------------------------------------------------

--
-- Structure for view `active_students`
--
DROP TABLE IF EXISTS `active_students`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `active_students`  AS SELECT `students`.`id` AS `id`, `students`.`name` AS `name`, `students`.`email` AS `email`, `students`.`phone` AS `phone`, `students`.`address` AS `address`, `students`.`course` AS `course`, `students`.`institution` AS `institution`, `students`.`year` AS `year`, `students`.`total_fees` AS `total_fees`, `students`.`scholarship_amount` AS `scholarship_amount`, `students`.`scholarship_amount_numeric` AS `scholarship_amount_numeric`, `students`.`status` AS `status`, `students`.`father_name` AS `father_name`, `students`.`father_occupation` AS `father_occupation`, `students`.`family_income` AS `family_income`, `students`.`previous_education` AS `previous_education`, `students`.`enrolled_date` AS `enrolled_date`, `students`.`expected_graduation` AS `expected_graduation`, `students`.`photo_url` AS `photo_url`, `students`.`created_at` AS `created_at`, `students`.`updated_at` AS `updated_at` FROM `students` WHERE `students`.`status` = 'Active' ;

-- --------------------------------------------------------

--
-- Structure for view `donation_summary`
--
DROP TABLE IF EXISTS `donation_summary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `donation_summary`  AS SELECT cast(`donations`.`created_at` as date) AS `donation_date`, count(0) AS `total_donations`, sum(`donations`.`amount`) AS `total_amount` FROM `donations` WHERE `donations`.`status` = 'completed' GROUP BY cast(`donations`.`created_at` as date) ;

-- --------------------------------------------------------

--
-- Structure for view `featured_success_stories`
--
DROP TABLE IF EXISTS `featured_success_stories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `featured_success_stories`  AS SELECT `ss`.`id` AS `id`, `ss`.`student_id` AS `student_id`, `ss`.`title` AS `title`, `ss`.`story` AS `story`, `ss`.`achievement` AS `achievement`, `ss`.`current_position` AS `current_position`, `ss`.`company_organization` AS `company_organization`, `ss`.`photo_url` AS `photo_url`, `ss`.`is_featured` AS `is_featured`, `ss`.`status` AS `status`, `ss`.`created_at` AS `created_at`, `ss`.`updated_at` AS `updated_at`, `s`.`name` AS `student_name`, `s`.`course` AS `course`, `s`.`institution` AS `institution` FROM (`success_stories` `ss` left join `students` `s` on(`ss`.`student_id` = `s`.`id`)) WHERE `ss`.`is_featured` = 1 AND `ss`.`status` = 'published' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_activities_date` (`activity_date`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_contact_status` (`status`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_donations_status` (`status`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_key` (`setting_key`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_students_status` (`status`),
  ADD KEY `idx_students_course` (`course`);

--
-- Indexes for table `student_documents`
--
ALTER TABLE `student_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `idx_success_stories_featured` (`is_featured`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_documents`
--
ALTER TABLE `student_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_documents`
--
ALTER TABLE `student_documents`
  ADD CONSTRAINT `student_documents_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD CONSTRAINT `success_stories_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
