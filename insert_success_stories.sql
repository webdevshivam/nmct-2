
-- Remove all existing success stories
DELETE FROM success_stories;

-- Reset auto increment
ALTER TABLE success_stories AUTO_INCREMENT = 1;

-- Insert new success stories with first-person narratives
INSERT INTO `success_stories` (`title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES

-- Sachin Sain
('Sachin Sain - Data Science Engineer at Ambient Scientific', 'Hi, I am Sachin Sain. Now I am working as a professional Data Science Engineer at Ambient Scientific India Pvt Ltd. My graduation and coaching fees and accommodation expenses were paid by the NGO. The NGO helped me a lot. Whatever position I am in today is because of their support and help. The journey from a struggling student to a data science professional has been incredible, and I owe it all to the unwavering support of this organization.', 'sachin_sain.jpg', 'active', NOW(), NOW()),

-- Ravindra Singh (Faujdar)
('Ravindra Singh - Data Scientist at Ambient Scientific', 'I came into contact with the NGO in 2018. I started my education in 2021 with a Master of Computer Application from Coimbatore, Tamil Nadu. The NGO helped me pay my college tuition fees, accommodation, books, and travel expenses. I completed my education in 2023 with the help of the NGO. Now I''m working in Bangalore as a Data Scientist. The NGO even helped me find this job. From struggling with basic expenses to becoming a data scientist, this journey wouldn''t have been possible without their continuous support.', 'ravindra_singh.jpg', 'active', NOW(), NOW()),

-- Khemraj Devatwal
('Khemraj Devatwal - Software Developer at DreamSearch Technology', 'My name is Khemraj Devatwal, and I am grateful to share my success story. With the unwavering support of the NGO, I developed a strong foundation in software development. The organization not only supported my education financially but also provided mentorship that shaped my technical skills. Today, I work as a Software Developer at DreamSearch Technology, where I contribute to innovative digital solutions. This journey from uncertainty to success proves that hard work combined with the right opportunities can transform lives completely.', 'khemraj_devatwal.jpg', 'active', NOW(), NOW()),

-- Mukesh Singh
('Mukesh Singh - Data Engineer at Celebal Technologies', 'I am Mukesh Singh, and my journey reflects dedication to learning and growth. With the comprehensive support of the NGO, I was able to focus on honing my data engineering skills without worrying about financial constraints. The guidance and resources provided by the organization were instrumental in my development. I secured an internship as a Data Engineer at Celebal Technologies, where I work with big data solutions and cloud computing. This experience has been incredible, and I know it''s just the beginning of a bright future ahead.', 'mukesh_singh.jpg', 'active', NOW(), NOW()),

-- Neeraj Kumar
('Neeraj Kumar - Software Developer at Inventia Technology Consultants', 'My name is Neeraj Kumar, and I want to express my heartfelt gratitude to the NGO that changed my life. With their right training and guidance, I was able to establish myself as a Software Developer at Inventia Technology Consultants Pvt. Ltd. The organization provided not just financial support but also mentorship that helped me develop expertise in enterprise-level applications. Today, my work showcases technical excellence, and every achievement reminds me of the foundation that the NGO helped me build.', 'neeraj_kumar.jpg', 'active', NOW(), NOW()),

-- Hitesh Kumar
('Hitesh Kumar - Software Engineer at TekSkills India', 'I am Hitesh Kumar, and I am proud to share how the NGO transformed my life. Guided by their support, I was able to sharpen my software development skills without the burden of financial stress. The organization provided comprehensive support that paved the way for my current role as a Software Engineer at TekSkills India Pvt. Ltd. My expertise in building scalable applications is a direct result of the solid foundation they helped me create. This journey proves how the right support and personal dedication can lead to remarkable success.', 'hitesh_kumar.jpg', 'active', NOW(), NOW()),

-- Jeetendra Singh
('Jeetendra Singh - Senior Software Engineer at TechMahindra', 'My name is Jeetendra Singh, and I am grateful for the incredible journey I''ve had with the NGO''s support. With their backing, I was able to refine my expertise in Java development, Spring Boot, Microservices, and AWS without worrying about educational expenses. Today, I work as a Senior Software Engineer at TechMahindra Ltd., where I contribute to smart electricity metering solutions and develop advanced web APIs. My success showcases the power of perseverance combined with the right mentorship and support system.', 'jeetendra_singh.jpg', 'active', NOW(), NOW()),

-- Prahlad Singh
('Prahlad Singh - Team Lead at Inventia Technology Consultants', 'I am Prahlad Singh, and I want to share how the NGO''s support transformed my dreams into reality. With their comprehensive backing, I was able to hone my skills and pursue my passion for technology without financial barriers. The organization believed in my potential and provided the resources I needed to excel. Today, I work as a Team Lead - Senior Android Developer at Inventia Technology Consultants Pvt. Ltd., where I excel in smart metering and billing solutions. My journey proves that determination combined with the right support can create truly inspiring success stories.', 'prahlad_singh.jpg', 'active', NOW(), NOW());
