-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 11:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ethics`
--

-- --------------------------------------------------------

--
-- Table structure for table `ethics_committee`
--

CREATE TABLE `ethics_committee` (
  `id` int(11) NOT NULL,
  `study_description` varchar(1000) DEFAULT NULL,
  `data_collection` varchar(1000) DEFAULT NULL,
  `expected_result` varchar(1000) DEFAULT NULL,
  `procedures` varchar(1000) DEFAULT NULL,
  `aim_of_the_study` varchar(1000) DEFAULT NULL,
  `potential_contributions` varchar(1000) DEFAULT NULL,
  `previous_research_projects` varchar(1000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `request_id` int(11) DEFAULT NULL,
  `researcher` varchar(255) DEFAULT NULL,
  `supervisor` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ethics_committee`
--

INSERT INTO `ethics_committee` (`id`, `study_description`, `data_collection`, `expected_result`, `procedures`, `aim_of_the_study`, `potential_contributions`, `previous_research_projects`, `user_id`, `request_id`, `researcher`, `supervisor`, `updated_at`, `created_at`) VALUES
(20, '                                                                                                                                                                                                            ioioioioioioio                                                                                                                                       ', '                                                                                                                                        fffffjiifkkffjfi                                                                                                                                        ', '                                                                        ttttttttttttttttttttttt                                                        ', '                                                                                                                                sdnsnmdmsnd            ', '                                                                                                dnsjnjajsnjansjndaj                        ', '                                                                                                                                                                                                            fffffjiifkkffjfi                                                                                                                                                                                                            ', '                                                                                    dhsjhdjsjjsdhjshjdhsjhdj                                    ', 8, 51, 'kjrnfkirmflkrmfklr3', 'rfr4ff5r43f', '2023-08-25 10:32:38', '2023-08-14 10:14:34'),
(21, 'fffffffffffffffffffffff        op                                                                                                ', ' fffffffffffffffffffffff                                                                                                        ', 'kkkkkkkkkkkkkkkkkkkk        ', '                                                                                                                                                                                                                fffffffffffffffffffffff                                                                                                                                                            ', 'rrrrrrrrrrrrrrrrrr                                                                                                                        ', ' fffffffffffffffffffffff                                                                                                                                                            ', 'okfo4p3jfpo53fp54r                                                                                                                                    ', 8, 52, 'fffffffffffffffffffffff', 'fffffffffffffffffffffff', '2023-08-21 09:48:22', '2023-08-14 20:25:00'),
(34, '            whjehjwhjehrjwhejhrjwhe        ', '        whjehjwhjehrjwhejhrjwhe        ', '                djhjhshahsjahjshdj', '                            ', '                        ', '            whjehjwhjehrjwhejhrjwhe            ', '                        ', 8, 71, 'whjehjwhjehrjwhejhrjwhe', 'whjehjwhjehrjwhejhrjwhe', '2023-08-29 08:11:48', '2023-08-28 10:36:39'),
(35, '            whjehjwhjehrjwhejhrjwhe        ', '        whjehjwhjehrjwhejhrjwhe        ', '                eyuywuyeuywuer', '                            ', '            whjehjwhjehrjwhejhrjwhe            ', '            whjehjwhjehrjwhejhrjwhe            ', '            whjehjwhjehrjwhejhrjwhe            ', 8, 72, 'whjehjwhjehrjwhejhrjwhe', 'whjehjwhjehrjwhejhrjwhe', '2023-08-29 08:12:09', '2023-08-28 10:37:00'),
(36, '            whjehjwhjehrjwhejhrjwhe        ', '        whjehjwhjehrjwhejhrjwhe        ', '                uiuweiuieuriute', '                            ', '                        ', '            whjehjwhjehrjwhejhrjwhe            ', '                        ', 8, 73, 'whjehjwhjehrjwhejhrjwhe', 'whjehjwhjehrjwhejhrjwhe', '2023-08-29 08:12:22', '2023-08-28 10:37:22'),
(37, '            whjehjwhjehrjwhejhrjwhe        ', '        whjehjwhjehrjwhejhrjwhe        ', '                irieoiroioeiorioert', '                whjehjwhjehrjwhejhrjwhe            ', '            whjehjwhjehrjwhejhrjwhe            ', '            whjehjwhjehrjwhejhrjwhe            ', '            whjehjwhjehrjwhejhrjwhe            ', 8, 74, 'whjehjwhjehrjwhejhrjwhe', 'whjehjwhjehrjwhejhrjwhe', '2023-08-29 08:12:30', '2023-08-28 10:37:53'),
(43, '            hsjhajhsjhajhs        ', '        hsjhajhsjhajhs        ', '                iewiqoioiwoeiowr', '                            ', '                        ', '            hsjhajhsjhajhs            ', '                        ', 8, 83, 'hsjhajhsjhajhs', 'hsjhajhsjhajhs', '2023-08-29 08:12:38', '2023-08-28 10:49:57'),
(44, '            sasadasas        ', '        sasaawqeq        ', '                lsjskjfksjkdjfksjkfdj', '                cvchgfytuyhjhvj            ', '            jhjgjhgiuyiujljkgjhgfj            ', '            rtrtyrytrutghgfghvfh            ', '            gfgfgfhjfygfhfghgfhfg            ', 8, 84, 'dsdsd', 'sdsdsd', '2023-08-29 08:12:46', '2023-08-28 10:50:30'),
(45, '                                                            artificial intelli                              ', '                                        by survey, through all the campus                                        ', '                                                nothing                                ', '                                                                                                                                            ', '                                                                                                                        ', '                                                            more private                                                            ', '                                                                                                                        ', 9, 85, 'gnk', 'gnk', '2023-08-29 10:19:42', '2023-08-29 08:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `request_type_id` int(11) DEFAULT NULL,
  `request_status_id` int(11) DEFAULT NULL,
  `request_date` date DEFAULT curdate(),
  `user_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `request_comment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `request_type_id`, `request_status_id`, `request_date`, `user_id`, `updated_at`, `created_at`, `request_comment`) VALUES
(51, 1, 2, '2023-08-14', 8, '2023-08-28 10:03:42', '2023-08-14 10:14:34', 'fix it please'),
(52, 1, 4, '2023-08-14', 8, '2023-08-28 10:06:10', '2023-08-14 20:25:00', 'wrong'),
(57, 2, 3, '2023-08-21', 8, '2023-08-21 12:51:19', '2023-08-21 11:26:10', 'right                               '),
(67, 2, 2, '2023-08-21', 8, '2023-08-28 13:26:50', '2023-08-21 13:10:53', '                 revise it                                                                                                                                                                                                                                                                                                                               '),
(71, 1, 2, '2023-08-28', 8, '2023-08-29 08:09:17', '2023-08-28 10:36:39', 'revise it please'),
(72, 1, 4, '2023-08-28', 8, '2023-08-29 08:14:24', '2023-08-28 10:37:00', 'wrong'),
(73, 1, 2, '2023-08-28', 8, '2023-08-29 08:10:33', '2023-08-28 10:37:22', 'revise it please'),
(74, 1, 4, '2023-08-28', 8, '2023-08-29 08:14:05', '2023-08-28 10:37:53', 'wrong'),
(83, 1, 2, '2023-08-28', 8, '2023-08-29 08:32:16', '2023-08-28 10:49:57', 'revise it please'),
(84, 1, 4, '2023-08-28', 8, '2023-08-29 08:31:09', '2023-08-28 10:50:30', 'wrong'),
(85, 1, 3, '2023-08-29', 9, '2023-08-29 08:39:26', '2023-08-29 08:35:13', 'thank you for your form');

-- --------------------------------------------------------

--
-- Table structure for table `request_ethic`
--

CREATE TABLE `request_ethic` (
  `id` int(11) NOT NULL,
  `request_id` int(11) DEFAULT NULL,
  `ethic_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_ethic`
--

INSERT INTO `request_ethic` (`id`, `request_id`, `ethic_id`, `created_at`, `updated_at`) VALUES
(8, 51, 20, '2023-08-14 10:14:34', '2023-08-14 10:14:34'),
(9, 52, 21, '2023-08-14 20:25:00', '2023-08-14 20:25:00'),
(22, 71, 34, '2023-08-28 10:36:39', '2023-08-28 10:36:39'),
(23, 72, 35, '2023-08-28 10:37:00', '2023-08-28 10:37:00'),
(24, 73, 36, '2023-08-28 10:37:22', '2023-08-28 10:37:22'),
(25, 74, 37, '2023-08-28 10:37:53', '2023-08-28 10:37:53'),
(31, 83, 43, '2023-08-28 10:49:57', '2023-08-28 10:49:57'),
(32, 84, 44, '2023-08-28 10:50:30', '2023-08-28 10:50:30'),
(33, 85, 45, '2023-08-29 08:35:13', '2023-08-29 08:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `request_research`
--

CREATE TABLE `request_research` (
  `id` int(11) NOT NULL,
  `request_id` int(11) DEFAULT NULL,
  `research_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_research`
--

INSERT INTO `request_research` (`id`, `request_id`, `research_id`, `created_at`, `updated_at`) VALUES
(15, 57, 22, '2023-08-21 11:26:10', '2023-08-21 11:26:10'),
(17, 67, 24, '2023-08-21 13:10:53', '2023-08-21 13:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `request_status`
--

CREATE TABLE `request_status` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_status`
--

INSERT INTO `request_status` (`id`, `description`) VALUES
(1, 'new'),
(2, 'revised'),
(3, 'approved'),
(4, 'denied');

-- --------------------------------------------------------

--
-- Table structure for table `request_type`
--

CREATE TABLE `request_type` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_type`
--

INSERT INTO `request_type` (`id`, `description`) VALUES
(1, 'ethics'),
(2, 'project');

-- --------------------------------------------------------

--
-- Table structure for table `research_application`
--

CREATE TABLE `research_application` (
  `id` int(11) NOT NULL,
  `request_id` int(11) DEFAULT NULL,
  `study_title` varchar(255) DEFAULT NULL,
  `study_type` varchar(255) DEFAULT NULL,
  `researcher_full_name_1` varchar(255) DEFAULT NULL,
  `researcher_email_1` varchar(255) DEFAULT NULL,
  `researcher_department_1` varchar(255) DEFAULT NULL,
  `researcher_institute_1` varchar(255) DEFAULT NULL,
  `researcher_address_1` varchar(255) DEFAULT NULL,
  `researcher_phone_1` varchar(255) DEFAULT NULL,
  `researcher_full_name_2` varchar(255) DEFAULT NULL,
  `researcher_institute_2` varchar(255) DEFAULT NULL,
  `data_collection_institution_1` varchar(255) DEFAULT NULL,
  `data_collection_institution_2` varchar(255) DEFAULT NULL,
  `other_institution` varchar(255) DEFAULT NULL,
  `expected_start_date` date DEFAULT NULL,
  `expected_end_date` date DEFAULT NULL,
  `data_collection` varchar(255) DEFAULT NULL,
  `study_support` varchar(255) DEFAULT NULL,
  `funding_institution` varchar(255) DEFAULT NULL,
  `other_funding_institution` varchar(255) DEFAULT NULL,
  `ethical_approval` varchar(255) NOT NULL,
  `application_status` varchar(255) DEFAULT NULL,
  `protocol_number` int(11) DEFAULT NULL,
  `new_expected_completed_date` date DEFAULT NULL,
  `reporting_changes` varchar(255) NOT NULL,
  `reporting_changes_protocol_number` int(11) DEFAULT NULL,
  `changes_description` varchar(255) DEFAULT NULL,
  `unexpected_situations` varchar(255) DEFAULT NULL,
  `study_purpose` varchar(255) DEFAULT NULL,
  `collection_methods` varchar(255) DEFAULT NULL,
  `study_secrecy` varchar(255) DEFAULT NULL,
  `approval` varchar(255) NOT NULL,
  `negative_effects` varchar(255) DEFAULT NULL,
  `number_of_participants` int(11) DEFAULT NULL,
  `control_group` varchar(255) DEFAULT NULL,
  `study_participants` varchar(255) DEFAULT NULL,
  `children_verbal_consent` varchar(255) DEFAULT NULL,
  `pupils_verbal_consent` varchar(255) DEFAULT NULL,
  `consent` varchar(255) NOT NULL,
  `other_study_participants` varchar(255) DEFAULT NULL,
  `participation_condition` varchar(255) DEFAULT NULL,
  `participation_invitation` varchar(255) DEFAULT NULL,
  `used_methods` varchar(255) DEFAULT NULL,
  `other_used_methods` varchar(255) NOT NULL,
  `work_contributions` varchar(255) DEFAULT NULL,
  `supervisor` varchar(255) DEFAULT NULL,
  `researcher` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research_application`
--

INSERT INTO `research_application` (`id`, `request_id`, `study_title`, `study_type`, `researcher_full_name_1`, `researcher_email_1`, `researcher_department_1`, `researcher_institute_1`, `researcher_address_1`, `researcher_phone_1`, `researcher_full_name_2`, `researcher_institute_2`, `data_collection_institution_1`, `data_collection_institution_2`, `other_institution`, `expected_start_date`, `expected_end_date`, `data_collection`, `study_support`, `funding_institution`, `other_funding_institution`, `ethical_approval`, `application_status`, `protocol_number`, `new_expected_completed_date`, `reporting_changes`, `reporting_changes_protocol_number`, `changes_description`, `unexpected_situations`, `study_purpose`, `collection_methods`, `study_secrecy`, `approval`, `negative_effects`, `number_of_participants`, `control_group`, `study_participants`, `children_verbal_consent`, `pupils_verbal_consent`, `consent`, `other_study_participants`, `participation_condition`, `participation_invitation`, `used_methods`, `other_used_methods`, `work_contributions`, `supervisor`, `researcher`, `updated_at`, `created_at`) VALUES
(22, 57, 'Computer engineering', 'academic-staff', 'Dan Kent', 'jhbfryibyu@gmail.com', 'software engineering', 'ndsdjshjdhjfshjdhjfhdsf', '                                                            fkhiwehrwnkrntklhewkhdjh                                                ', '05338620315', 'dnsjdjf dbnsjdjfhjsd', 'fghfjjkfjdifjf', 'fdsdgfdgfdhfjhdjhfj', 'fdsdgfdgfdhfjhdjhfj', '', '2023-08-12', '2023-08-23', 'no', 'supported', NULL, '', 'yes', 'new', 99087878, '2029-12-08', 'no', 0, NULL, '', '                                                eiwueiwehjwhrjehrjw                                                ', '                                                eiwueiwehjwhrjehrjw                                                ', 'no', 'yes', 'werwerwer', 12, 'no', NULL, 'no', 'no', '', '', '                                                wewewewewe                                                ', '                                                wewewewewe                                    ', 'Survey', '', 'dsasasfewewerwegrwg', 'hfdjshjdh dshdjhsjdhjfh', 'duriwuieuiwr jeriwueiwir', '2023-08-21 12:08:06', '2023-08-21 11:26:10'),
(24, 67, 'djksjdkjskjdkjskjdkjfs', 'sjahjshajhsjhdjahjshjd', 'djhsjhdjshjdhjshd', 'davidmututa01@gmail.com', 'jdisuidurksiduihfks', 'jfksjkdksdjkfhsdhf', '                                        hshjdhsjhdjhsjhdjshjdhsj                                                                                                                                                                                               ', '05338620315', 'disudishdhjkfhsdf', 'kjfdksjdkjskjdkjfksjdkf', 'ufidusiudisuoduisoudujksdjkfhskdf', 'wuyquwyskdnfkshkdsdkksdjkfhsdiuhfjdsf', '', '2023-08-26', '2023-08-30', 'yes', 'supported', NULL, '', 'no', 'reporting_changes', 90909, '2029-12-03', 'yes', 2020, NULL, 'fgggddrthygg', '                                                                                                                                                                                                                                                               ', '                                                                                                                                                                                                                                                               ', 'yes', 'no', '', 15, 'no', NULL, 'no', 'no', '', '', 'mad', '                                                                                                                                                                                                                                                               ', 'Interview', '', 'mnmhfjdhjfhjdhfjgdg', 'jkgjfkjdkfjkgdg', 'shjdhishdjshf', '2023-08-28 13:37:24', '2023-08-21 13:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `user_type_id`, `updated_at`, `created_at`) VALUES
(2, 'David', 'Mututa', NULL, NULL, NULL, '2023-08-04 11:14:48', '2023-08-04 11:14:48'),
(7, 'david', 'mututa', 'davidmututa01@gmail.com', 'AG2TKgz0dwZYtOOiMikUaQ==', 1, '2023-07-30 21:57:53', '2023-07-30 21:57:53'),
(8, 'danny', 'kay', 'dannykay01@gmail.com', '1tJZtPE7ybH69FzhfM4xtw==', 2, '2023-08-08 17:07:34', '2023-08-08 17:07:34'),
(9, 'rodry', 'rodry', 'kalambagael@gmail.com', 'BGVTqvSWeC7p5N4tQvvYfw==', 2, '2023-08-29 08:33:22', '2023-08-29 08:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `description`) VALUES
(1, 'admin'),
(2, 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ethics_committee`
--
ALTER TABLE `ethics_committee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId_fk` (`user_id`),
  ADD KEY `reqId_fk` (`request_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reqtype_fk` (`request_type_id`),
  ADD KEY `reqstatus_fk` (`request_status_id`),
  ADD KEY `user_fk` (`user_id`);

--
-- Indexes for table `request_ethic`
--
ALTER TABLE `request_ethic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `ethic_id` (`ethic_id`);

--
-- Indexes for table `request_research`
--
ALTER TABLE `request_research`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_id` (`request_id`),
  ADD KEY `research_id` (`research_id`);

--
-- Indexes for table `request_status`
--
ALTER TABLE `request_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_type`
--
ALTER TABLE `request_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_application`
--
ALTER TABLE `research_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_id` (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type_fk` (`user_type_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ethics_committee`
--
ALTER TABLE `ethics_committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `request_ethic`
--
ALTER TABLE `request_ethic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `request_research`
--
ALTER TABLE `request_research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `request_status`
--
ALTER TABLE `request_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_type`
--
ALTER TABLE `request_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research_application`
--
ALTER TABLE `research_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ethics_committee`
--
ALTER TABLE `ethics_committee`
  ADD CONSTRAINT `reqId_fk` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`),
  ADD CONSTRAINT `userId_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `reqstatus_fk` FOREIGN KEY (`request_status_id`) REFERENCES `request_status` (`id`),
  ADD CONSTRAINT `reqtype_fk` FOREIGN KEY (`request_type_id`) REFERENCES `request_type` (`id`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `request_ethic`
--
ALTER TABLE `request_ethic`
  ADD CONSTRAINT `request_ethic_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`),
  ADD CONSTRAINT `request_ethic_ibfk_2` FOREIGN KEY (`ethic_id`) REFERENCES `ethics_committee` (`id`);

--
-- Constraints for table `request_research`
--
ALTER TABLE `request_research`
  ADD CONSTRAINT `request_research_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`),
  ADD CONSTRAINT `request_research_ibfk_2` FOREIGN KEY (`research_id`) REFERENCES `research_application` (`id`);

--
-- Constraints for table `research_application`
--
ALTER TABLE `research_application`
  ADD CONSTRAINT `research_application_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_type_fk` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
