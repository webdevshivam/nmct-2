-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2025 at 05:02 PM
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
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@nayantar.org', '$2y$10$W8jrpaMc5vBifnf9sWaUyeqLeitJqiPH7K56VcZlhByYS8qur9VR6', '2025-07-30 15:13:45', '2025-07-30 15:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `education_level` varchar(100) NOT NULL,
  `course` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_link` varchar(500) DEFAULT NULL,
  `family_background` text DEFAULT NULL,
  `academic_achievements` text DEFAULT NULL,
  `career_goals` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `is_passout` enum('currently_studying','passout') NOT NULL DEFAULT 'currently_studying',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `name`, `age`, `education_level`, `course`, `institution`, `city`, `state`, `phone`, `email`, `linkedin_url`, `company_name`, `company_link`, `family_background`, `academic_achievements`, `career_goals`, `image`, `status`, `is_passout`, `created_at`, `updated_at`) VALUES
(1, 'PRAHLAD SINGH', 25, 'Undergraduate', 'B.Tech(CS) (2013-2017)', 'Technical Institute', NULL, NULL, '9785852630', NULL, 'https://shorturl.at/F7R6R', 'INVENTIA TECHNOLOGY CONSULTANTS PVT LTD', 'https://www.inventia.in', NULL, NULL, NULL, NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(2, 'JEETENDRA SINGH', 25, 'Undergraduate', 'B.Tech(CS) (2013-2017)', 'Technical Institute', NULL, NULL, '9660148331', NULL, 'https://shorturl.at/g4Vw2', 'TECHMAHINDRA LTD', 'https://www.techmahindra.com/', NULL, NULL, NULL, NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(3, 'HITESH KUMAR', 25, 'Undergraduate', 'B.Tech(CS) (2013-2017)', 'Technical Institute', NULL, NULL, '8239731128', NULL, 'https://shorturl.at/pZqbC', 'TEKSKILLS INDIA PVT LTD', 'https://www.tekskillsinc.com/', NULL, NULL, NULL, NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(4, 'RAVINDRA SINGH', 23, 'Postgraduate', 'MCA(CS) (2021-2023)', 'Technical Institute', NULL, NULL, '7568565831', NULL, 'https://shorturl.at/r5BBA', 'AMBIENT SCIENTIFIC INDIA PVT LTD', 'https://www.ambientscientific.ai/', NULL, NULL, NULL, NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(5, 'SACHIN SAIN', 22, 'Undergraduate', 'B.Tech(CS) (2019-2023)', 'Technical Institute', NULL, NULL, '7240653210', NULL, 'https://shorturl.at/ez1da', 'AMBIENT SCIENTIFIC INDIA PVT LTD', 'https://www.ambientscientific.ai/', NULL, NULL, NULL, NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(6, 'NEERAJ KUMAR', 22, 'Undergraduate', 'B.Tech(CS) (2019-2023)', 'Technical Institute', NULL, NULL, '9636492758', NULL, 'https://shorturl.at/FsN1q', 'INVENTIA TECHNOLOGY CONSULTANTS PVT LTD', 'https://www.inventia.in/', NULL, NULL, NULL, NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(7, 'KHEMRAJ DEVATWAL', 22, 'Undergraduate', 'B.Tech(CS) (2019-2023)', 'Technical Institute', NULL, NULL, '7615992247', NULL, 'https://shorturl.at/2o8eW', 'DREAMSEARCH TECHNOLOGY', 'https://shorturl.at/zyZ5j', NULL, NULL, NULL, NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(8, 'MUKESH SINGH', 21, 'Undergraduate', 'B.Tech(CS) (2020-2024)', 'Technical Institute', NULL, NULL, '6378248523', NULL, 'https://shorturl.at/xY8f7', 'CELEBAL TECHNOLOGIES', 'https://celebaltech.com/', NULL, NULL, NULL, NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(9, 'RAKESH KUMAR', 21, 'Undergraduate', 'B.Tech(CS)', 'NATIONAL INSTITUTE OF TECHNOLOGY', NULL, NULL, '6378450059', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(10, 'PRIYANSHI', 21, 'Undergraduate', 'B.Tech(CS)', 'RAJASTHAN TECHNOLOGY UNIVERSITY', NULL, NULL, '7455948427', '', 'https://shorturl.at/ih1Nz', NULL, '', '', '', '', NULL, 'active', 'currently_studying', '2025-08-10 08:11:20', '2025-08-10 02:47:48'),
(11, 'SUNDRAM', 19, 'Undergraduate', 'B.Tech(CS)', 'RAJASTHAN TECHNOLOGY UNIVERSITY', NULL, NULL, '7878036114', NULL, 'https://shorturl.at/qw3A1', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(12, 'SHIVAM KUSHWAH', 19, 'Undergraduate', 'B.Tech(CS)', 'RAJASTHAN TECHNOLOGY UNIVERSITY', NULL, NULL, '9520683039', NULL, 'https://shorturl.at/Wy5rd', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(13, 'VANSH SHARMA', 18, 'Undergraduate', 'B.Tech(CS)', 'BANARAS HINDU UNIVERSITY', NULL, NULL, '7454974823', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(14, 'PALKI SOLANKI', 18, 'Undergraduate', 'B.Tech(CS)', 'RAJASTHAN TECHNOLOGY UNIVERSITY', NULL, NULL, '7302389547', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(15, 'SHIVANI FOUZDAR', 18, 'Undergraduate', 'B.Tech(CS)', 'RAJASTHAN TECHNOLOGY UNIVERSITY', NULL, NULL, '7877377948', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(16, 'ANANT KHANDELWAL', 24, 'Professional', 'CHARTERED ACCOUNTANT(FINAL)', 'Professional Institute', NULL, NULL, '7976598177', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(17, 'UTSAV GOEL', 24, 'Professional', 'CHARTERED ACCOUNTANT(FINAL)', 'Professional Institute', NULL, NULL, '9389724384', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(18, 'NEHA GOYAL', 25, 'Postgraduate', 'MBA', 'Business School', NULL, NULL, '6396055396', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(19, 'SAKSHI BANSAL', 22, 'Undergraduate', 'B.A./B.ED', 'MAHARAJA SURAJMAL BRIJ UNIVERSITY', NULL, NULL, '8700353824', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(20, 'ABHISHEK FAUJDAR', 19, 'Diploma', 'NEET(ASPIRANT)', 'Coaching Institute', NULL, NULL, '9887026570', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(21, 'SATYAM KUMAR', 19, 'Diploma', 'NEET(ASPIRANT)', 'Coaching Institute', NULL, NULL, '6376220217', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(22, 'PALLAVI', 17, 'Certificate', '12TH (BIO)', 'RAJASTHAN BOARD', NULL, NULL, '9887378275', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(23, 'ANKUR SINGH', 17, 'Certificate', '12TH', 'RAJASTHAN BOARD', NULL, NULL, '6376606495', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(24, 'SAMIKSHA', 17, 'Certificate', '12TH (BIO)', 'RAJASTHAN BOARD', NULL, NULL, '8094809713', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(25, 'SAKSHI VYAS', 17, 'Certificate', '12TH', 'RAJASTHAN BOARD', NULL, NULL, '7906835639', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(26, 'ANUJ FAUJDAR', 16, 'Certificate', '11TH', 'RAJASTHAN BOARD', NULL, NULL, '9521855374', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(27, 'SANVI GUPTA', 20, 'Undergraduate', 'BBA', 'Business School', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(28, 'ANVI GOEL', 15, 'Certificate', '10TH', 'School', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20'),
(29, 'SHIVAM KUMAR', 18, 'Certificate', 'PREPARATION FOR NAVY & AIRFORCE', 'Training Institute', NULL, NULL, '8302585193', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '', '2025-08-10 08:11:20', '2025-08-10 08:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `email_logs`
--

CREATE TABLE `email_logs` (
  `id` int(11) UNSIGNED NOT NULL,
  `beneficiary_id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` enum('sent','failed') NOT NULL,
  `error_message` text DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_logs`
--

INSERT INTO `email_logs` (`id`, `beneficiary_id`, `email`, `subject`, `status`, `error_message`, `sent_at`) VALUES
(1, 24, 'vobon93696@efpaper.com', 'Monthly Volunteering Work Reminder', 'sent', NULL, '2025-08-06 15:23:30'),
(2, 24, 'vobon93696@efpaper.com', 'Monthly Volunteering Work Reminder', 'sent', NULL, '2025-08-06 15:41:45'),
(3, 24, 'vobon93696@efpaper.com', 'Monthly Volunteering Work Reminder', 'sent', NULL, '2025-08-06 15:41:59'),
(4, 24, 'vobon93696@efpaper.com', 'Monthly Volunteering Work Reminder', 'sent', NULL, '2025-08-06 15:53:03'),
(5, 24, 'vobon93696@efpaper.com', 'Monthly Volunteering Work Reminder', 'sent', NULL, '2025-08-06 15:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_works`
--

CREATE TABLE `ngo_works` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'e.g., Education, Healthcare, Environment, Community Service',
  `location` varchar(255) DEFAULT NULL,
  `date_completed` date DEFAULT NULL,
  `beneficiaries_count` int(11) DEFAULT NULL COMMENT 'Number of people impacted',
  `budget_amount` decimal(10,2) DEFAULT NULL,
  `partners` text DEFAULT NULL COMMENT 'Partner organizations involved',
  `achievements` text DEFAULT NULL COMMENT 'Key achievements and outcomes',
  `images` text DEFAULT NULL COMMENT 'JSON array of image filenames',
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo_works`
--

INSERT INTO `ngo_works` (`id`, `title`, `description`, `category`, `location`, `date_completed`, `beneficiaries_count`, `budget_amount`, `partners`, `achievements`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Digital Literacy Program', 'Comprehensive computer training program for underprivileged youth', 'Education', 'Mumbai, Maharashtra', '2024-12-15', 150, 250000.00, 'Microsoft India, Local Schools', 'Trained 150 students in basic computer skills, 80% found employment or continued education', NULL, 'active', NULL, NULL),
(2, 'Healthcare Camp', 'Free medical checkup and treatment camp in rural areas', 'Healthcare', 'Raigad District, Maharashtra', '2024-11-20', 500, 180000.00, 'Apollo Hospitals, Local PHC', 'Provided free medical consultation to 500+ people, distributed medicines worth Rs. 50,000', NULL, 'active', NULL, NULL),
(3, 'Tree Plantation Drive', 'Environmental conservation initiative to plant trees in urban areas', 'Environment', 'Thane, Maharashtra', '2024-10-05', 1000, 75000.00, 'BMC, Local Residents', 'Planted 1000+ trees, involved 200 volunteers, improved air quality index', NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `public_forms`
--

CREATE TABLE `public_forms` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `public_forms`
--

INSERT INTO `public_forms` (`id`, `form_name`, `form_type`, `public_url_token`, `valid_until`, `max_submissions`, `current_submissions`, `status`, `description`, `created_by_admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Beneficiary Registration 2025', 'beneficiary', '0', '2025-08-29 15:57:47', 100, 0, 'active', 'Public form for new beneficiary applications for the year 2025', 1, '2025-07-30 15:57:47', '2025-07-30 15:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `public_submissions`
--

CREATE TABLE `public_submissions` (
  `id` int(11) NOT NULL,
  `public_form_id` int(11) NOT NULL,
  `form_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`form_data`)),
  `image` varchar(255) DEFAULT NULL,
  `submitted_at` timestamp NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `name`, `age`, `education`, `current_position`, `company`, `city`, `state`, `linkedin_url`, `company_link`, `story`, `achievements`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sachin Sain', 25, 'B.Tech in Computer Science', 'Data Science Engineer', 'Ambient Scientific India Pvt Ltd', 'Bangalore', 'Karnataka', '', '', 'Hi, I am Sachin Sain. Now I am working as a professional Data Science Engineer at Ambient Scientific India Pvt Ltd. My graduation and coaching fees and accommodation expenses were paid by the NGO. The NGO helped me a lot. Whatever position I am in today is because of their support and help. The journey from a struggling student to a data science professional has been incredible, and I owe it all to the unwavering support of this organization.', 'Secured position at top tech company, Expert in machine learning and data analytics', '1754821058_9f93cea4f825e0a3ab3b.png', 'active', '2025-08-10 08:31:21', '2025-08-10 04:47:38'),
(2, 'Ravindra Singh', 26, 'Master of Computer Application', 'Data Scientist', 'Ambient Scientific India Pvt Ltd', 'Bangalore', 'Karnataka', '', '', 'I came into contact with the NGO in 2018. I started my education in 2021 with a Master of Computer Application from Coimbatore, Tamil Nadu. The NGO helped me pay my college tuition fees, accommodation, books, and travel expenses. I completed my education in 2023 with the help of the NGO. Now I\'m working in Bangalore as a Data Scientist. The NGO even helped me find this job. From struggling with basic expenses to becoming a data scientist, this journey wouldn\'t have been possible without their continuous support.', 'Successfully transitioned from MCA to industry, Specializes in data analysis and visualization', '1754821072_d1866b1d5d5b0c465ed5.jpg', 'active', '2025-08-10 08:31:21', '2025-08-10 04:47:52'),
(3, 'Khemraj Devatwal', 24, 'B.Tech in Information Technology', 'Software Developer', 'DreamSearch Technology', 'Pune', 'Maharashtra', '', '', 'My name is Khemraj Devatwal, and I am grateful to share my success story. With the unwavering support of the NGO, I developed a strong foundation in software development. The organization not only supported my education financially but also provided mentorship that shaped my technical skills. Today, I work as a Software Developer at DreamSearch Technology, where I contribute to innovative digital solutions. This journey from uncertainty to success proves that hard work combined with the right opportunities can transform lives completely.', 'Expert in full-stack development, Contributing to innovative digital solutions', '1754821085_37be5a30d000d04937ec.png', 'active', '2025-08-10 08:31:21', '2025-08-10 04:48:05'),
(4, 'Mukesh Singh', 23, 'B.Tech in Computer Science', 'Data Engineer (Intern)', 'Celebal Technologies', 'Jaipur', 'Rajasthan', '', '', 'I am Mukesh Singh, and my journey reflects dedication to learning and growth. With the comprehensive support of the NGO, I was able to focus on honing my data engineering skills without worrying about financial constraints. The guidance and resources provided by the organization were instrumental in my development. I secured an internship as a Data Engineer at Celebal Technologies, where I work with big data solutions and cloud computing. This experience has been incredible, and I know it\'s just the beginning of a bright future ahead.', 'Skilled in big data technologies, Cloud computing expertise', '1754821094_786796b6fbccd74bd096.png', 'active', '2025-08-10 08:31:21', '2025-08-10 04:48:14'),
(5, 'Neeraj Kumar', 25, 'B.Tech in Software Engineering', 'Software Developer', 'Inventia Technology Consultants Pvt. Ltd.', 'Gurgaon', 'Haryana', '', '', 'My name is Neeraj Kumar, and I want to express my heartfelt gratitude to the NGO that changed my life. With their right training and guidance, I was able to establish myself as a Software Developer at Inventia Technology Consultants Pvt. Ltd. The organization provided not just financial support but also mentorship that helped me develop expertise in enterprise-level applications. Today, my work showcases technical excellence, and every achievement reminds me of the foundation that the NGO helped me build.', 'Enterprise application development, Technical excellence in software solutions', '1754821110_a6de4a415147f2256d7e.png', 'active', '2025-08-10 08:31:21', '2025-08-10 04:48:30'),
(6, 'Hitesh Kumar', 24, 'B.Tech in Computer Science', 'Software Engineer', 'TekSkills India Pvt. Ltd.', 'Noida', 'Uttar Pradesh', '', '', 'I am Hitesh Kumar, and I am proud to share how the NGO transformed my life. Guided by their support, I was able to sharpen my software development skills without the burden of financial stress. The organization provided comprehensive support that paved the way for my current role as a Software Engineer at TekSkills India Pvt. Ltd. My expertise in building scalable applications is a direct result of the solid foundation they helped me create. This journey proves how the right support and personal dedication can lead to remarkable success.', 'Scalable application development, Expert in modern software frameworks', '1754821131_16ceb6f6470e02e26bbe.png', 'active', '2025-08-10 08:31:21', '2025-08-10 04:48:51'),
(7, 'Jeetendra Singh', 27, 'B.Tech in Computer Science', 'Senior Software Engineer', 'TechMahindra Ltd.', 'Pune', 'Maharashtra', '', '', 'My name is Jeetendra Singh, and I am grateful for the incredible journey I\'ve had with the NGO\'s support. With their backing, I was able to refine my expertise in Java development, Spring Boot, Microservices, and AWS without worrying about educational expenses. Today, I work as a Senior Software Engineer at TechMahindra Ltd., where I contribute to smart electricity metering solutions and develop advanced web APIs. My success showcases the power of perseverance combined with the right mentorship and support system.', 'Java expert, Microservices architecture, AWS cloud solutions, Smart metering systems', '1754821140_90beb53fe5278d790980.jpg', 'active', '2025-08-10 08:31:21', '2025-08-10 04:49:00'),
(8, 'Prahlad Singh', 26, 'B.Tech in Computer Science', 'Team Lead - Senior Android Developer', 'Inventia Technology Consultants Pvt. Ltd.', 'Gurgaon', 'Haryana', '', '', 'I am Prahlad Singh, and I want to share how the NGO\'s support transformed my dreams into reality. With their comprehensive backing, I was able to hone my skills and pursue my passion for technology without financial barriers. The organization believed in my potential and provided the resources I needed to excel. Today, I work as a Team Lead - Senior Android Developer at Inventia Technology Consultants Pvt. Ltd., where I excel in smart metering and billing solutions. My journey proves that determination combined with the right support can create truly inspiring success stories.', 'Android development leadership, Smart metering solutions, Team management expertise', '1754816880_5499f9feae91e24dd42d.jpg', 'active', '2025-08-10 08:31:21', '2025-08-10 03:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `volunteering_settings`
--

CREATE TABLE `volunteering_settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `reminder_interval_days` int(11) NOT NULL DEFAULT 10,
  `email_template` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteering_settings`
--

INSERT INTO `volunteering_settings` (`id`, `reminder_interval_days`, `email_template`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 10, 'Dear {name},\r\n\r\nThis is a friendly reminder to submit your monthly volunteering work report.\r\n\r\nPlease visit our portal to submit your details.\r\n\r\nThank you for your contribution!\r\n\r\nBest regards,\r\nNGO Team', 1, '2025-08-06 20:42:35', '2025-08-06 20:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `volunteering_submissions`
--

CREATE TABLE `volunteering_submissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `beneficiary_id` int(11) UNSIGNED NOT NULL,
  `submission_month` varchar(7) NOT NULL COMMENT 'YYYY-MM format',
  `work_description` text NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `hours_spent` decimal(5,2) DEFAULT NULL,
  `proof_image` varchar(255) DEFAULT NULL,
  `is_emergency_skip` tinyint(1) NOT NULL DEFAULT 0,
  `skip_reason` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_logs`
--
ALTER TABLE `email_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_beneficiary_id` (`beneficiary_id`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_sent_at` (`sent_at`);

--
-- Indexes for table `ngo_works`
--
ALTER TABLE `ngo_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `public_forms`
--
ALTER TABLE `public_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `public_url_token` (`public_url_token`),
  ADD KEY `created_by_admin_id` (`created_by_admin_id`);

--
-- Indexes for table `public_submissions`
--
ALTER TABLE `public_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `public_form_id` (`public_form_id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteering_settings`
--
ALTER TABLE `volunteering_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteering_submissions`
--
ALTER TABLE `volunteering_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_beneficiary_id` (`beneficiary_id`),
  ADD KEY `idx_submission_month` (`submission_month`),
  ADD KEY `idx_status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `email_logs`
--
ALTER TABLE `email_logs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ngo_works`
--
ALTER TABLE `ngo_works`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `public_forms`
--
ALTER TABLE `public_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `public_submissions`
--
ALTER TABLE `public_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `volunteering_settings`
--
ALTER TABLE `volunteering_settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteering_submissions`
--
ALTER TABLE `volunteering_submissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `public_forms`
--
ALTER TABLE `public_forms`
  ADD CONSTRAINT `public_forms_ibfk_1` FOREIGN KEY (`created_by_admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `public_submissions`
--
ALTER TABLE `public_submissions`
  ADD CONSTRAINT `public_submissions_ibfk_1` FOREIGN KEY (`public_form_id`) REFERENCES `public_forms` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
