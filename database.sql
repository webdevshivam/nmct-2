-- Nayantar Memorial Charitable Trust CMS Database
-- Create database and tables

-- Admin table for authentication
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert default admin (username: admin, password: admin123)
INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('admin', 'admin@nayantar.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Beneficiaries table for student details
CREATE TABLE IF NOT EXISTS `beneficiaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','Graduated') DEFAULT 'Active',
  `year` varchar(50) NOT NULL,
  `enrolled_date` date NOT NULL,
  `expected_graduation` date NOT NULL,
  `previous_education` varchar(255) NOT NULL,
  `total_fees` decimal(10,2) NOT NULL,
  `scholarship_amount` decimal(10,2) NOT NULL,
  `family_income` decimal(10,2) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_occupation` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample beneficiary data
INSERT INTO `beneficiaries` (`student_id`, `name`, `course`, `university`, `contact_phone`, `email`, `status`, `year`, `enrolled_date`, `expected_graduation`, `previous_education`, `total_fees`, `scholarship_amount`, `family_income`, `father_name`, `father_occupation`, `address`) VALUES
('ST001', 'Rahul Kumar Sharma', 'Computer Science Engineering', 'Rajasthan Technical University', '+91 98765 43210', 'rahul.sharma@email.com', 'Active', '3rd Year', '2022-07-15', '2026-06-30', '12th - 85%', 250000.00, 200000.00, 80000.00, 'Suresh Kumar Sharma', 'Farmer', 'Village Ramnagar, District Jaipur');

-- Success stories table
CREATE TABLE IF NOT EXISTS `success_stories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `achievement` varchar(255) NOT NULL,
  `current_position` varchar(255) DEFAULT NULL,
  `graduation_year` year DEFAULT NULL,
  `status` enum('Published','Draft') DEFAULT 'Published',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample success story
INSERT INTO `success_stories` (`title`, `student_name`, `story`, `achievement`, `current_position`, `graduation_year`, `status`) VALUES
('From Village to Tech Giant', 'Priya Kumari', 'Priya came from a small village in Rajasthan with a dream to become a software engineer. With the support of Nayantar Memorial Charitable Trust, she completed her Computer Science degree and now works at a leading technology company in Bangalore.', 'Software Engineer at TCS', 'Senior Software Developer', 2024, 'Published');
