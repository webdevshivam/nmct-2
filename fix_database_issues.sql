
-- Create success_stories table if it doesn't exist
CREATE TABLE IF NOT EXISTS `success_stories` (
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
  PRIMARY KEY (`id`),
  KEY `idx_student_id` (`student_id`),
  KEY `idx_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample success stories for existing beneficiaries
INSERT INTO `success_stories` (`student_id`, `title`, `story`, `achievement`, `current_position`, `company_organization`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 'From Village Dreams to Tech Reality', 'Prahlad Singh journey from a small village in Rajasthan to becoming a successful software engineer is truly inspiring. Despite financial hardships, his determination and our scholarship support helped him excel in his B.Tech studies. Today, he leads innovative projects at Inventia Technology Consultants, proving that talent knows no boundaries when given the right opportunity.', 'Successfully transitioned from rural background to leading tech professional, mentoring junior developers', 'Senior Software Engineer', 'INVENTIA TECHNOLOGY CONSULTANTS PVT LTD', 1, 'published', NOW(), NOW()),

(2, 'Breaking Barriers Through Technology', 'Jeetendra Singh story exemplifies perseverance and excellence. Coming from a modest background, he not only completed his engineering degree with distinction but also secured a position at one of India leading IT companies. His journey shows how education can transform lives and create opportunities for entire families.', 'Top performer in final year, received multiple job offers from leading tech companies', 'Software Developer', 'TECHMAHINDRA LTD', 1, 'published', NOW(), NOW()),

(3, 'Innovation Meets Determination', 'Hitesh Kumar transformation from a small-town student to a professional at a leading tech consultancy is remarkable. His innovative thinking and technical skills, nurtured through our educational support, have made him a valuable asset to his organization. He continues to inspire other students in his community.', 'Developed innovative solutions that improved client satisfaction by 40%', 'Technical Consultant', 'TEKSKILLS INDIA PVT LTD', 0, 'published', NOW(), NOW()),

(4, 'Scientific Excellence Through Support', 'Ravindra Singh journey in computer applications has been extraordinary. His dedication to learning and research, combined with our mentorship program, led him to secure a prestigious position at Ambient Scientific. His work in AI and data science is contributing to cutting-edge research projects.', 'Published research papers in AI, leading data science initiatives', 'Data Science Engineer', 'AMBIENT SCIENTIFIC INDIA PVT LTD', 1, 'published', NOW(), NOW()),

(5, 'Young Achiever Making Impact', 'Sachin Sain represents the new generation of tech professionals who are making significant contributions early in their careers. At just 23, his work at Ambient Scientific in AI and machine learning showcases the potential that emerges when talent meets opportunity and guidance.', 'Youngest team lead in company history, developed ML models with 95% accuracy', 'AI/ML Engineer', 'AMBIENT SCIENTIFIC INDIA PVT LTD', 0, 'published', NOW(), NOW());
