-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2021 at 03:05 AM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talkmaze_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `activity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `education` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debate` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expect_outcome_of_your_experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_level` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why_to_join` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_availabality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_device` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_here_about_us` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `job_id`, `name`, `email`, `phone`, `education`, `gender`, `debate`, `expect_outcome_of_your_experience`, `experience`, `education_level`, `why_to_join`, `resume`, `reference`, `general_availabality`, `allow_device`, `how_here_about_us`, `comments`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'richard', '', 454545, 'Msc', 'Male', 'Php Topics', NULL, '2 years', 'yes', 'working in an honouable organization.', 'resum.pdf', NULL, NULL, 'dfdfgdf', 'From my friend/', NULL, '2020-02-10 19:00:00', '2020-02-18 06:40:08', NULL),
(2, 0, 'efsdf', '', 454, 'sdf', 'Other', 'sdf', NULL, 'sdfsf', 'sdfsdf', 'sdfsdf', '1582025444post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sdf', 'sdf', NULL, '2020-02-18 06:30:44', '2020-02-18 06:40:59', '2020-02-18 06:40:59'),
(3, 0, 'admin', '', 3434, 'ff', 'Female', 'sdfdf', NULL, 'sdf', 'sdffd', 'sdf', '1582107578post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sdf', 'sdf', NULL, '2020-02-19 05:19:38', '2020-02-19 05:19:38', NULL),
(4, 0, 'admin', '', 3434, 'sdf', 'Male', 'asds', NULL, 'sad', 'sad', 'asd', '1582108051post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sdsd', 'sd', NULL, '2020-02-19 05:27:31', '2020-02-19 05:27:31', NULL),
(5, 0, 'asd', '', 3434, 'sasd', 'Male', 'asd', NULL, 'asd', 'sd', 'asd', '1582108135post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'asd', 'asd', NULL, '2020-02-19 05:28:55', '2020-02-19 05:28:55', NULL),
(6, 0, 'asd', '', 3434, 'sasd', 'Male', 'asd', NULL, 'asd', 'sd', 'asd', '1582108232post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'asd', 'asd', NULL, '2020-02-19 05:30:32', '2020-02-19 05:30:32', NULL),
(7, 0, 'asd', '', 3434, 'sasd', 'Male', 'asd', NULL, 'asd', 'sd', 'asd', '1582108295post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'asd', 'asd', NULL, '2020-02-19 05:31:35', '2020-02-19 05:31:35', NULL),
(8, 0, 'asd', '', 3434, 'sasd', 'Male', 'asd', NULL, 'asd', 'sd', 'asd', '1582108365post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'asd', 'asd', NULL, '2020-02-19 05:32:45', '2020-02-19 05:32:45', NULL),
(9, 0, 'asd', '', 3434, 'sasd', 'Male', 'asd', NULL, 'asd', 'sd', 'asd', '1582108388post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'asd', 'asd', NULL, '2020-02-19 05:33:08', '2020-02-19 05:33:08', NULL),
(10, 0, 'asd', '', 3434, 'sasd', 'Male', 'asd', NULL, 'asd', 'sd', 'asd', '1582108430post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'asd', 'asd', NULL, '2020-02-19 05:33:50', '2020-02-19 05:33:50', NULL),
(11, 0, 'admin', '', 32, 'sasd', 'Male', 'sd', NULL, 'sd', 's', 'ds', '1582108640post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sd', 'sd', NULL, '2020-02-19 05:37:20', '2020-02-19 05:37:20', NULL),
(12, 0, 'admin', '', 32, 'sasd', 'Male', 'sd', NULL, 'sd', 's', 'ds', '1582108675post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sd', 'sd', NULL, '2020-02-19 05:37:55', '2020-02-19 05:37:55', NULL),
(13, 0, 'admin', '', 32, 'sasd', 'Male', 'sd', NULL, 'sd', 's', 'ds', '1582108692post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sd', 'sd', NULL, '2020-02-19 05:38:12', '2020-02-19 05:38:12', NULL),
(14, 0, 'admin', '', 32, 'sasd', 'Male', 'sd', NULL, 'sd', 's', 'ds', '1582108770post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sd', 'sd', NULL, '2020-02-19 05:39:30', '2020-02-19 05:39:30', NULL),
(15, 0, 'asd', '', 343, 'sdf', 'Male', 'sd', NULL, 'sd', 'sd', 'sd', '1582109116post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sd', 'sd', NULL, '2020-02-19 05:45:16', '2020-02-19 05:45:16', NULL),
(16, 0, 'asd', '', 343, 'sdf', 'Male', 'sd', NULL, 'sd', 'sd', 'sd', '1582109158post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'sd', 'sd', NULL, '2020-02-19 05:45:58', '2020-02-19 05:45:58', NULL),
(17, 0, 'asd', '', 3434, 'ff', 'Male', 'asd', NULL, 'sd', 'sd', 'zxc', '1582110972post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'zxc', 'zxc', NULL, '2020-02-19 06:16:12', '2020-02-19 06:16:12', NULL),
(18, 0, 'sdsd', '', 3, 'sasd', 'Male', 'asd', NULL, 'asd', 'sad', 'asd', '1582111053post-crud-with-slug-model.PNG', NULL, NULL, 'asd', 'dds', NULL, '2020-02-19 06:17:33', '2020-02-19 06:17:33', NULL),
(19, 0, 'sdsd', '', 3, 'sasd', 'Male', 'asd', NULL, 'asd', 'sad', 'asd', '1582111120post-crud-with-slug-model.PNG', NULL, NULL, 'asd', 'dds', NULL, '2020-02-19 06:18:40', '2020-02-19 06:18:40', NULL),
(20, 0, 'asd', '', 4343, 'asd', 'Male', 'asd', NULL, 'asd', 'asd', 'asd', '1582117220post-crud-with-slug-model.PNG', NULL, NULL, 'asd', 'asd', NULL, '2020-02-19 08:00:20', '2020-02-19 08:00:20', NULL),
(21, 0, 'asd', '', 4343, 'asd', 'Male', 'asd', NULL, 'asd', 'asd', 'asd', '1582117420post-crud-with-slug-model.PNG', NULL, NULL, 'asd', 'asd', NULL, '2020-02-19 08:03:40', '2020-02-19 08:03:40', NULL),
(22, 0, 'zxczxc', '', 3434, 'vzxc', 'Male', 'zxczxc', NULL, 'zxcz', 'xcxc', 'zxc', '1582118455post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'zxcz', 'zxcz', NULL, '2020-02-19 08:20:55', '2020-02-19 08:20:55', NULL),
(23, 0, 'zxczxc', '', 3434, 'vzxc', 'Male', 'zxczxc', NULL, 'zxcz', 'xcxc', 'zxc', '1582118486post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'zxcz', 'zxcz', NULL, '2020-02-19 08:21:26', '2020-02-19 08:21:26', NULL),
(24, 0, 'asdasd', '', 3434, 'asdasd', 'Male', 'cxc', NULL, 'zxcz', 'xczxc', 'zxc', '1582175930post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'zxcxz', 'czxc', NULL, '2020-02-20 00:18:50', '2020-02-20 01:01:03', '2020-02-20 01:01:03'),
(25, 0, 'asdasd', '', 3434, 'asdasd', 'Male', 'cxc', NULL, 'zxcz', 'xczxc', 'zxc', '1582175965post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'zxcxz', 'czxc', NULL, '2020-02-20 00:19:25', '2020-02-20 00:55:30', '2020-02-20 00:55:30'),
(26, 0, 'asdasd', '', 3434, 'xzcxc', 'Male', 'asdasd', NULL, 'sdsd', 'sd', 'sdsd', '1582176029post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'asd', 'sd', NULL, '2020-02-20 00:20:29', '2020-02-20 00:47:48', '2020-02-20 00:47:48'),
(27, 0, 'zxc', '', 34, 'cvxc', 'Male', 'zxc', NULL, 'xc', 'xc', 'adsf', '1582176186post-crud-with-slug-model-mutator-accessor.PNG', NULL, NULL, 'zxc', 'zxc', NULL, '2020-02-20 00:23:06', '2020-02-20 01:27:36', '2020-02-20 01:27:36'),
(28, 0, 'xyz', '', 222, 'xyz', 'Male', 'xyz', NULL, 'xyz', 'xyz', 'xyz', '1582525134Untitled design.pdf', NULL, NULL, 'xyz', 'xyz', NULL, '2020-02-24 13:18:28', '2020-02-24 13:18:54', NULL),
(29, 1, 'ssdasd asdasdasdasd', '', 34343434, 'ssadasd', 'on', 'asdads', 'asdasd', 'asdads', NULL, 'asdasd', 'SfsSPeqxLzs9UFCgl1Kogqv33tnIaPwSQeB603PN.pdf', NULL, 'asdasd', 'on', 'asdasdasd', NULL, '2020-03-12 06:53:47', '2020-03-12 06:53:47', NULL),
(30, 1, 'asdas dasdasd', '', 343434, 'asdasd', 'on', 'asdasd', 'asdads', 'asdasd', NULL, 'asads', 'YIaQzn5FDo4uQsGR6oKJ80BUn1YSxbzjWZpHWPZN.pdf', NULL, 'asasdasd', 'on', 'asdasd', NULL, '2020-03-12 06:57:22', '2020-03-12 06:57:22', NULL),
(31, 1, 'sdasd asdasd', '', 7777777777, 'sasd', 'on', 'aasdasd', 'asdads', 'asdasd', NULL, 'asdads', 'QA95BADcV8Ga66N4Ynq5sBmPprchIFVB79dTu3zp.pdf', NULL, 'asdasd', 'on', 'asdasd', NULL, '2020-03-12 07:12:21', '2020-03-12 07:12:21', NULL),
(32, 1, 'dfas dasd', 'oranjeclick1@gmail.com', 354654, 'asdasd', 'on', 'asdads', 'adsasd', 'asdads', NULL, 'asdad', 'iFKc98sxBR7saW29xQqDXntdr7vphKDs4x6pnCR5.pdf', NULL, 'asdasda', 'no', 'sdasd', NULL, '2020-03-16 07:50:12', '2020-03-16 07:50:12', NULL),
(33, 6, 'fhgj nadeem', 'sahamnadeem@gmail.com', 3331424188, 'sdasdakasjdkljkdlas', 'on', NULL, NULL, 'klsdjaksdjasdslklsdjaksdjasdslklsdjaksdjasdslklsdjaksdjasdsl', NULL, 'klsdjaksdjasdslklsdjaksdjasdslklsdjaksdjasdsl', 'ZITWSKvrnVjwxg6mhLO8xLFJMO6mljxgVtgVGrZb.pdf', 'H5RA4QLMFXphmXJnP9F8d5J8mnCUhcKKj8nLqJx4.pdf', NULL, 'no', 'sakdlajdalkjdas;ldksa;ldsalskajl', NULL, '2020-06-09 02:14:23', '2020-06-09 02:14:23', NULL),
(34, 1, 'Ghalia Aamer', 'aamer@ualberta.ca', 7809746481, 'test', 'on', NULL, NULL, 'test', NULL, 'test', 'h7F6PbVRhWLNP0chTQwvxJFrjFFDu2ast8Jjjnj9.pdf', NULL, NULL, 'no', 'test', NULL, '2020-06-09 02:18:20', '2020-06-09 02:18:20', NULL),
(35, 6, 'fhgj nadeem', 'sahamnadeem@gmail.com', 3331424188, 'sdasda', 'on', NULL, NULL, 'jalkslkdjlsakdlksjdlkaj', NULL, 'jalkslkdjlsakdlksjdlkaj', 'xIulmyFqQ5ZoNIFjA7ZmUqE3KhwtCrIqi4EOzS6v.pdf', 'SIYO5KXC6Pgs50gP3KTnCnMJeoxznOidZSd75hyv.pdf', NULL, 'no', 'jalkslkdjlsakdlksjdlkaj', NULL, '2020-06-09 02:20:53', '2020-06-09 02:20:53', NULL),
(36, 1, 'Jeremiah Sekyi', 'sekyijeremy@gmail.com', 233201393568, 'Bachelor\'s Degree', 'on', NULL, NULL, 'I have 4 years of debate and public speaking experience. My passion for showing, acquired strategies, dedication and sense of humour would also turn each class into a conducive environment for growth.', NULL, 'My reasons are in three-fold. \r\nFirstly, I admire the TalkMaze initiative, particularly the objective of making public speaking training accessible for persons all around the world. Glossophobia is a condition I have battled with personally and hence I understand the importance of assisting others to overcome it. What TalkMaze offers me is a well resourced and organized platform to achieve this objective on a global scale. \r\nSecondly, I believe working with TalkMaze would give me invaluable professional experience and exposure that will set me up to embark on similar projects in my country (outreaches to underprivileged schools to teach public speaking and leadership). \r\nFinally, as an aspiring politician/diplomat, I appreciate the international diversity and exposure that working with TalkMaze would give me access to.', 'f69rLn7GkVmTAD6aNjE5NOi9qF7lHluOF1WDu2nj.pdf', NULL, NULL, 'no', 'Facebook Post.', NULL, '2020-06-09 05:29:31', '2020-06-09 05:29:31', NULL),
(37, 1, 'Jasmine Moheb', 'jmoheb@ucsd.edu', 8182055979, 'Bachelor\'s (currently entering my Senior year)', 'on', NULL, NULL, 'Please see in the \"other comments\" section - I could not fit it in this character count.', NULL, 'I would like to contribute my passion and knowledge of debate to students who are younger and impressionable that have a passion to improve their public speaking to not only be good, but captivate their audiences. As I have a long history of working with students, I believe I would be a strong asset as a debate coach with the TalkMaze team. Thanks for your consideration!', 'e5t8wyXqgte4oYsff8FQj8z9fwlqjAJcmlVnp99w.pdf', NULL, NULL, 'no', 'I saw a job posting on a jobs website when looking for speech coach positions!', NULL, '2020-06-10 06:35:50', '2020-06-10 06:35:50', NULL),
(38, 1, 'Humza Nadeem Jami', 'humza.jami.7@gmail.com', 923218954626, 'BSc (Honors)', 'on', NULL, NULL, 'I have been engaged in activities relating to debating and Model UN since 2011. I have travelled the world, achieved at some of the most prestigious competitions in the world, and now I coach some of the most competitive teams in my country.', NULL, 'I feel this will serve as a natural progression for my career as a coach. I have always wanted to work with international students in this realm, as I have thoroughly enjoyed my time at international tournaments. Unfortunately, visa restrictions have always prevented me from doing so. Your team offers me the opportunity to do exactly that from the comfort of my own country.', 'Ah0TtdzCet42DmB7Cn3V8CsuFKmKRvPpMnXp5tqz.pdf', NULL, NULL, 'no', 'The Facebook Group - Jobs for Debaters.', NULL, '2020-06-13 05:12:25', '2020-06-13 05:12:25', NULL),
(39, 1, 'Shaughan Dolan', 'ShaughanDolan1@Gmail.com', 7799338289, 'Degree - (Genetic Bsc)', 'on', NULL, NULL, 'At Harrow School I teach a weekly debate class during term time and oversee the development of the entire curriculum - which is a mixture of debate theory arranged around learning tactics, strategy, modes of argumentation and mastering rhetorical devices.', NULL, 'Helping young people find their voice has long been a passion of mine - and I\'ve seen people grow professionally and personally as a result of their involvement with debate training.', 'hp9tSdQQDKBgKxJP8NNoB9TEYS90A5v5lfLEgw88.pdf', NULL, NULL, 'no', 'On a debate coach Forum on Facebook.', NULL, '2020-06-16 13:56:33', '2020-06-16 13:56:33', NULL),
(40, 6, 'fhgj nadeem', 'sahamnadeem@gmail.com', 3331424188, 'sdasda', 'on', NULL, NULL, 'asadsadasadsadasadsadasadsadasadsadasadsadasadsad', NULL, 'asadsadasadsadasadsadasadsadasadsadasadsadasadsadasadsadasadsadasadsad', '8prcqJIeM0rG6iK2YpqY6xCEVPTMHjfzAnpYYgOF.pdf', '4GsigFmMMH3kZqxn74NjDt5Vnz5IRHlONAH6MOqy.pdf', NULL, 'no', 'sdadsdsasdadsdsasdadsdsasdadsdsasdadsdsa', NULL, '2020-06-16 15:54:42', '2020-06-16 15:54:42', NULL),
(41, 6, 'fhgj nadeem', 'sahamnadeem@gmail.com', 3331424188, 'sdasda', 'on', NULL, NULL, 'dssadsdsa', NULL, 'dssadsdsa', 'LCdtLUswfZX5WWK5MunvGknbqS2Z0bYyqRD26oJj.pdf', 'mBvMi2uaAaLPTficTQnRrMLY9rIOkoTQXieqK0mV.pdf', NULL, 'no', 'asdsadsda', 'asdsadsda', '2020-06-16 16:02:36', '2020-06-16 16:02:36', NULL),
(42, 6, 'fhgj nadeem', 'sahamnadeem@gmail.com', 3331424188, 'sdasda', 'on', NULL, NULL, 'dssadsdsa', NULL, 'dssadsdsa', 'XN4sMxA1pPPOjr9SRFHOb5UeX5YS4Rc1LX7kxBf9.pdf', 'YHWU6hLWzIFbwBTBuWDjqUQPoAIv9P1ejLiXHdYH.pdf', NULL, 'no', 'asdsadsda', 'asdsadsda', '2020-06-16 16:03:23', '2020-06-16 16:03:23', NULL),
(43, 6, 'Jeremiah Sekyi', 'sekyijeremy@gmail.com', 233201393568, 'Bachelor\'s Degree', 'on', NULL, NULL, 'In my 4 years of active debating and public speaking, I have formed healthy relationships with debating groups and high schools in Ghana and Africa as well as gained their respect with my national and international achievements.', NULL, 'When I became World Public Speaking Champion in 2019, I was shocked to find out that I was the first African to do so in the thirty plus years since the first World Universities Debate Championship. What I also realized that my feat was in no small part due to the excellent coaching and mentoring I had received within my union. The following year, I coached two students from my union who went forth to win first and third place in the next championship. What this revealed to me was that with the right access to coaching, nationality means nothing in the pursuit of success in public speaking. With this experience and understanding, I want to make the excellent training resources offered by TalkMaze more accessible to groups and individuals in my region. And with my experience, I am certain that together, we will succeed in making confidence and oratory skills truly globally accessible.', '5IcIfsxElOzdILBhKjBCUm0wzhC65oPnvMUguErZ.pdf', NULL, NULL, 'no', 'Facebook.', 'Please reach out to me if you need more information on my experience or anything pertaining to this application.', '2020-06-17 17:19:31', '2020-06-17 17:19:31', NULL),
(44, 1, 'Meredith Alberson', 'meredwall@gmail.com', 2242763348, 'BA', 'on', NULL, NULL, 'Considering my experience (four years competing and placing across five events) and the love of forensics that it engendered in me, I most assuredly have what it takes to shape the next generation of competitors.', NULL, 'My speech and debate career ended after high school, since my college didn\'t have a team. I would love to get back into the forensics world and reengage with the best extracurricular program in which students can participate.', 'fc4zVwNyP6ds38moE3WSUvBK2PEX4pklGxEKghFv.pdf', NULL, NULL, 'no', 'LinkedIn Job Search', NULL, '2020-06-20 22:12:37', '2020-06-20 22:12:37', NULL),
(45, 6, 'Celeste Riley-Norman', 'celeste.rileynorman@gmail.com', 8189303948, 'currently working on undergad', 'on', NULL, NULL, 'Four years as a speech and debate competitor. Two years as a mock trial competitor.  Served as captain of my speech and debate team as well as my mock trial team. Two years of coaching experience.', NULL, 'I think that public speaking is one of the most important skills that anyone can cultivate. One of the things I loved the most about speech and debate is that it gives people the opportunity to reach out and connect with others that they might not have had the chance to in any other circumstance. Speech and debate gave me confidence, education, work ethic, and so much more, I want to be able to foster growth and communication in others.', 'ecW5DJYiZaugv6uGeAT9jySzct0crTI0qdNqgtln.pdf', NULL, NULL, 'no', 'My high school coach recommended I apply', NULL, '2020-07-14 01:01:27', '2020-07-14 01:01:27', NULL),
(46, 6, 'Celeste Riley-Norman', 'celeste.rileynorman@gmail.com', 8189303948, 'currently working on undergad', 'on', NULL, NULL, 'Four years as a speech and debate competitor. Two years as a mock trial competitor.  Served as captain of my speech and debate team as well as my mock trial team. Two years of coaching experience.', NULL, 'I think that public speaking is one of the most important skills that anyone can cultivate. One of the things I loved the most about speech and debate is that it gives people the opportunity to reach out and connect with others that they might not have had the chance to in any other circumstance. Speech and debate gave me confidence, education, work ethic, and so much more, I want to be able to foster growth and communication in others.', 'VnJ2NXEstdnWnbA58rCcjfV3RJmQYiFFhhV4CDsB.pdf', NULL, NULL, 'no', 'My high school coach recommended I apply', NULL, '2020-07-14 01:01:53', '2020-07-14 01:01:53', NULL),
(47, 6, 'Celeste Riley-Norman', 'celeste.rileynorman@gmail.com', 8189303948, 'currently working on undergad', 'on', NULL, NULL, 'Four years as a speech and debate competitor. Two years as a mock trial competitor.  Served as captain of my speech and debate team as well as my mock trial team. Two years of coaching experience.', NULL, 'I think that public speaking is one of the most important skills that anyone can cultivate. One of the things I loved the most about speech and debate is that it gives people the opportunity to reach out and connect with others that they might not have had the chance to in any other circumstance. Speech and debate gave me confidence, education, work ethic, and so much more, I want to be able to foster growth and communication in others.', 'Rvn56S5bdneWE3BejegYFfvKPCGEOHHKCwqnN2ry.pdf', NULL, NULL, 'no', 'My high school coach recommended I apply', NULL, '2020-07-14 01:02:51', '2020-07-14 01:02:51', NULL),
(48, 6, 'Quentin Cooper', 'qcooper1997@gmail.com', 4174345964, 'High School', 'on', NULL, NULL, 'I was a 2-time districts champion and state champion for Public Forum debate in high school. I now run a debate briefs company and do online coaching as my full time job.', NULL, 'I love what TalkMaze is wanting to do and I\'ll always go for any opportunity to make more use of my skills.', '1IXuJ7SODaHtSgSUuUrnvQYnyEpctJgNlCIlH3rY.pdf', NULL, NULL, 'no', 'Thaddeus Smith (he works with me making briefs and he posted about it on Facebook)', 'I feel confident that with my skills and experience, I\'d be a great fit doing just about anything. If you guys feel like I\'d be a better fit for something else, don\'t hesitate to let me know. I\'d just love to be part of this. \r\n\r\nAlso, on the time commitment, I\'m currently looking for more work and have a flexible schedule so I just selected all.', '2020-07-21 04:10:57', '2020-07-21 04:10:57', NULL),
(49, 6, 'Snehal Parmar', 'snehalparmar272@gmail.com', 5875683600, 'ME', 'on', NULL, NULL, 'Skills', NULL, 'Like to join', 'CijJPCt39ty9NFU64cdIQLwbQNDbzr46OE52ykkM.pdf', NULL, NULL, 'no', 'About us', 'Comments', '2020-08-13 08:19:15', '2020-08-13 08:20:45', '2020-08-13 08:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, NULL, 'Saham', 'cCWKAESDHpKbZuPJJDYle70cN877shMdhjs9JKBu.png', '2020-05-15 13:42:34', '2020-05-15 13:42:39', '2020-05-15 13:42:39'),
(23, NULL, 'Speech', '', '2020-05-14 16:43:12', '2020-05-14 16:44:45', NULL),
(22, NULL, 'Canadian National', '', '2020-05-14 16:42:48', '2020-05-14 16:43:56', NULL),
(21, NULL, 'Impromptu', '', '2020-05-14 16:42:38', '2020-05-14 16:42:38', NULL),
(20, NULL, 'Sales Pitches', '', '2020-05-14 16:42:31', '2020-05-14 16:42:31', NULL),
(17, NULL, 'British Parliamentary', '', '2020-05-14 16:41:51', '2020-05-14 16:41:51', NULL),
(18, NULL, 'Public Forum', '', '2020-05-14 16:42:14', '2020-05-14 16:42:14', NULL),
(19, NULL, 'Public Speaking', '', '2020-05-14 16:42:22', '2020-05-14 16:42:22', NULL),
(25, NULL, 'Training', '', '2020-07-19 03:58:16', '2020-07-19 03:58:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_categories`
--

CREATE TABLE `class_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_categories`
--

INSERT INTO `class_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'DEBATE', NULL, NULL),
(2, 'SPEECH', NULL, NULL),
(3, 'MODEL UNITED NATIONS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_plans`
--

CREATE TABLE `class_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_category_id` int(11) DEFAULT NULL,
  `host_id` int(11) DEFAULT NULL,
  `is_visible` tinyint(1) DEFAULT 0,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_series` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` timestamp NULL DEFAULT NULL,
  `num_hours` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_group` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_plans`
--

INSERT INTO `class_plans` (`id`, `class_category_id`, `host_id`, `is_visible`, `title`, `description`, `image`, `num_series`, `date_time`, `num_hours`, `price`, `time_zone`, `is_group`, `parent_id`, `created_at`, `updated_at`, `status`) VALUES
(35, NULL, 2, 1, 'test Videos', 'test Videos', NULL, NULL, '2020-05-23 19:30:00', NULL, NULL, NULL, 1, NULL, '2020-05-22 10:51:00', '2020-05-22 10:51:00', 0),
(295, NULL, 100, 1, 'ACCES Beginner Speech Course', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-06-10 19:00:00', NULL, 0, '-6', 1, NULL, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(296, NULL, 100, 0, 'ACCES Beginner Speech Course class 1', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-06-17 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(297, NULL, 100, 0, 'ACCES Beginner Speech Course class 2', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-06-24 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(298, NULL, 100, 0, 'ACCES Beginner Speech Course class 3', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-07-01 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(299, NULL, 100, 0, 'ACCES Beginner Speech Course class 4', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-07-08 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(300, NULL, 100, 0, 'ACCES Beginner Speech Course class 5', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-07-15 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(301, NULL, 100, 0, 'ACCES Beginner Speech Course class 6', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-07-22 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(302, NULL, 100, 0, 'ACCES Beginner Speech Course class 7', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-07-29 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(303, NULL, 100, 0, 'ACCES Beginner Speech Course class 8', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-08-05 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(304, NULL, 100, 0, 'ACCES Beginner Speech Course class 9', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-08-12 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(305, NULL, 100, 0, 'ACCES Beginner Speech Course class 10', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-08-19 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(306, NULL, 100, 0, 'ACCES Beginner Speech Course class 11', 'LIMITED TO STUDENTS REGISTERED WITH ACCES EDMONTON We’ll take you through the basics of speech to help you blossom into a confident speaker. You’ll learn how to tackle various situations that involve public speaking. You’ll also get an overview of the categories in speech, both competitively and non-competitively.', 'https://talkmaze.com/talkmaze_test/storage/storage/BBqMiMWM1sYq7JF4d5l32HPZW5jUqJFCdSPeuuDu.png', NULL, '2020-08-26 19:00:00', NULL, NULL, '-6', 1, 295, '2020-06-08 11:22:47', '2020-06-08 11:22:47', 0),
(520, NULL, NULL, 1, 'Conqueror™', 'The Conqueror debate course is recommended to debaters who have at least two years of experience or are confident with the material covered in the Climber debate course. Sessions will be tailored to the strengths and weaknesses of the debaters. We will take a deeper look at argumentation, style, and strategy. You’ll learn how to apply logical fallacies and rebut any argument successfully.', 'https://talkmaze.com/storage/storage/2BIFn8ilBLNP9smDTdAOkTB8kxk7dSnFpRbwWGZv.jpeg', NULL, '2020-07-07 18:00:00', NULL, 120, '-6', 1, NULL, '2020-06-17 09:08:59', '2020-06-17 09:08:59', 0),
(521, NULL, NULL, 0, 'Conqueror™ class 1', 'The Conqueror debate course is recommended to debaters who have at least two years of experience or are confident with the material covered in the Climber debate course. Sessions will be tailored to the strengths and weaknesses of the debaters. We will take a deeper look at argumentation, style, and strategy. You’ll learn how to apply logical fallacies and rebut any argument successfully.', 'https://talkmaze.com/storage/storage/2BIFn8ilBLNP9smDTdAOkTB8kxk7dSnFpRbwWGZv.jpeg', NULL, '2020-07-14 18:00:00', NULL, NULL, '-6', 1, 520, '2020-06-17 09:08:59', '2020-06-17 09:08:59', 0),
(522, NULL, NULL, 0, 'Conqueror™ class 2', 'The Conqueror debate course is recommended to debaters who have at least two years of experience or are confident with the material covered in the Climber debate course. Sessions will be tailored to the strengths and weaknesses of the debaters. We will take a deeper look at argumentation, style, and strategy. You’ll learn how to apply logical fallacies and rebut any argument successfully.', 'https://talkmaze.com/storage/storage/2BIFn8ilBLNP9smDTdAOkTB8kxk7dSnFpRbwWGZv.jpeg', NULL, '2020-07-21 18:00:00', NULL, NULL, '-6', 1, 520, '2020-06-17 09:08:59', '2020-06-17 09:08:59', 0),
(523, NULL, NULL, 0, 'Conqueror™ class 3', 'The Conqueror debate course is recommended to debaters who have at least two years of experience or are confident with the material covered in the Climber debate course. Sessions will be tailored to the strengths and weaknesses of the debaters. We will take a deeper look at argumentation, style, and strategy. You’ll learn how to apply logical fallacies and rebut any argument successfully.', 'https://talkmaze.com/storage/storage/2BIFn8ilBLNP9smDTdAOkTB8kxk7dSnFpRbwWGZv.jpeg', NULL, '2020-07-28 18:00:00', NULL, NULL, '-6', 1, 520, '2020-06-17 09:08:59', '2020-06-17 09:08:59', 0),
(524, NULL, NULL, 0, 'Conqueror™ class 4', 'The Conqueror debate course is recommended to debaters who have at least two years of experience or are confident with the material covered in the Climber debate course. Sessions will be tailored to the strengths and weaknesses of the debaters. We will take a deeper look at argumentation, style, and strategy. You’ll learn how to apply logical fallacies and rebut any argument successfully.', 'https://talkmaze.com/storage/storage/2BIFn8ilBLNP9smDTdAOkTB8kxk7dSnFpRbwWGZv.jpeg', NULL, '2020-08-04 18:00:00', NULL, NULL, '-6', 1, 520, '2020-06-17 09:08:59', '2020-06-17 09:08:59', 0),
(525, NULL, NULL, 0, 'Conqueror™ class 5', 'The Conqueror debate course is recommended to debaters who have at least two years of experience or are confident with the material covered in the Climber debate course. Sessions will be tailored to the strengths and weaknesses of the debaters. We will take a deeper look at argumentation, style, and strategy. You’ll learn how to apply logical fallacies and rebut any argument successfully.', 'https://talkmaze.com/storage/storage/2BIFn8ilBLNP9smDTdAOkTB8kxk7dSnFpRbwWGZv.jpeg', NULL, '2020-08-11 18:00:00', NULL, NULL, '-6', 1, 520, '2020-06-17 09:08:59', '2020-06-17 09:08:59', 0),
(526, NULL, NULL, 0, 'Conqueror™ class 6', 'The Conqueror debate course is recommended to debaters who have at least two years of experience or are confident with the material covered in the Climber debate course. Sessions will be tailored to the strengths and weaknesses of the debaters. We will take a deeper look at argumentation, style, and strategy. You’ll learn how to apply logical fallacies and rebut any argument successfully.', 'https://talkmaze.com/storage/storage/2BIFn8ilBLNP9smDTdAOkTB8kxk7dSnFpRbwWGZv.jpeg', NULL, '2020-08-18 18:00:00', NULL, NULL, '-6', 1, 520, '2020-06-17 09:08:59', '2020-06-17 09:08:59', 0),
(527, NULL, NULL, 0, 'Conqueror™ class 7', 'The Conqueror debate course is recommended to debaters who have at least two years of experience or are confident with the material covered in the Climber debate course. Sessions will be tailored to the strengths and weaknesses of the debaters. We will take a deeper look at argumentation, style, and strategy. You’ll learn how to apply logical fallacies and rebut any argument successfully.', 'https://talkmaze.com/storage/storage/2BIFn8ilBLNP9smDTdAOkTB8kxk7dSnFpRbwWGZv.jpeg', NULL, '2020-08-25 18:00:00', NULL, NULL, '-6', 1, 520, '2020-06-17 09:08:59', '2020-06-17 09:08:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coaching_bulks`
--

CREATE TABLE `coaching_bulks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coaching_bulks`
--

INSERT INTO `coaching_bulks` (`id`, `first_name`, `last_name`, `email`, `phone`, `organization`, `role`, `country`, `city`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jane', 'smith', 'janme@gmail.com', '34343', 'asdasd', 'teacher', '', NULL, 'vcvxc', '2020-02-11 19:00:00', '2020-02-04 19:00:00', NULL),
(2, 'dfdsf', 'dfdf', 'admin@gmail.com', '3333', 'dfs', 'sdf', '', NULL, 'sdf', '2020-02-19 01:35:58', '2020-02-19 01:38:30', '2020-02-19 01:38:30'),
(3, 'xyz', 'xyz', 'oranjeclick1xyz@gmail.com', '3333', 'xyz', 'xyz', '', NULL, 'xyz', '2020-02-24 13:22:52', '2020-02-24 13:22:52', NULL),
(4, 'asd', 'asd', 'asdasdstdddttd@gmail.com', '02341545646', 'asd', 'asda', '', NULL, 'sd', '2020-03-19 07:03:05', '2020-03-19 07:03:05', NULL),
(5, 'asd', 'asda', 'oranjeclick1@gmail.com', '45564564654654124574894546546', 'asd', 'asdas', '', NULL, 'd', '2020-03-19 07:03:48', '2020-03-19 07:03:48', NULL),
(6, 'asd', 'asd', 'asdasdstdddttd@gmail.com', '01154545454', 'asd', 'asd', '', NULL, 'asd', '2020-03-19 07:09:19', '2020-03-19 07:09:19', NULL),
(7, 'asdasd', 'asdasd', 'oranjeclick1@gmail.com', '03052166546', 'asda', 'sdasd', '', NULL, 'sdasd', '2020-03-19 07:15:05', '2020-03-19 07:15:05', NULL),
(8, 'Rehan', 'Rashid', 'malikrehan0022@gmail.com', '03325222402', 'asda', 'sdasd', 'Pakistan', 'Rawalpindi', 'asd', '2020-03-19 07:15:27', '2020-04-21 15:55:12', NULL),
(9, 'asd', 'asdasd', 'oranjeclick1@gmail.com', '030521665465465', 'asd', 'asdasd', '', NULL, 'asdasd', '2020-03-19 07:15:59', '2020-03-19 07:15:59', NULL),
(10, 'asdasd', 'asd', 'admin@gmail.com', '030521665465465', 'asd', 'asda', '', NULL, 'sd', '2020-03-19 07:16:53', '2020-03-19 07:16:53', NULL),
(11, 'asd', 'asd', 'oranjeclick1@gmail.com', '030521665465465', 'asda', 'sdasd', '', NULL, 'asd', '2020-03-19 07:19:01', '2020-03-19 07:19:01', NULL),
(12, 'asd', 'asd', 'admin@gmail.com', '030521665465465', 'asd', 'asdasd', '', NULL, 'asd', '2020-03-19 07:19:47', '2020-03-19 07:19:47', NULL),
(13, 'asd', 'asdasd', 'oranjeclick1@gmail.com', '030521665465465', 'asd', 'asda', '', NULL, 'sdasd', '2020-03-19 07:21:20', '2020-03-19 07:21:20', NULL),
(14, 'asd', 'asdasd', 'ali@gmail.com', '030521665465465', 'asd', 'asdasd', '', NULL, 'asdasd', '2020-03-19 07:22:16', '2020-03-19 07:22:16', NULL),
(15, 'Rehan', 'Rashid', 'malikrehan0022@gmail.com', '03325222402', 'oranjeclick', 'teacher', 'Pakistan', 'Rawalpindi', 'xyz', '2020-04-21 15:50:35', '2020-04-21 15:50:35', NULL),
(16, 'Rehan', 'Rashid', 'malikrehan0022@gmail.com', '03325222402', 'oranjeclick', 'teacher', 'Pakistan', 'Rawalpindi', 'xyz', '2020-04-21 15:54:58', '2020-04-21 15:54:58', NULL),
(17, 'Hassan', 'Ali', 'linebrandco@gmail.com', '5107607046', 'Homeschooled', 'Student', 'US', NULL, 'I’m looking for coaching in both public forum and interp. What kind of coaching services can you guys offer?', '2020-06-09 19:50:40', '2020-06-09 19:50:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coach_requests`
--

CREATE TABLE `coach_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interval` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1. One Time 2. Recurring',
  `no_of_weeks` int(11) DEFAULT NULL,
  `remaining_weeks` int(11) DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_in_min` int(11) NOT NULL DEFAULT 0,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tutor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hours` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('pending','cancelled','approved','active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `class_status` enum('pending','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `amount` double NOT NULL DEFAULT 0,
  `amount_paid` double NOT NULL DEFAULT 0,
  `amount_reserved` double NOT NULL DEFAULT 0,
  `is_subscribed_payment` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coach_requests`
--

INSERT INTO `coach_requests` (`id`, `message`, `interval`, `no_of_weeks`, `remaining_weeks`, `date`, `active_date`, `slot`, `time_in_min`, `student_id`, `tutor_id`, `hours`, `end_time`, `start_time`, `parent_student_id`, `status`, `class_status`, `payment_status`, `amount`, `amount_paid`, `amount_reserved`, `is_subscribed_payment`, `created_at`, `updated_at`) VALUES
(40, 'I want to hire you.', '1', NULL, NULL, '2021/05/28', '2021/05/28', '08:00am-08:30am,08:30am-09:00am,09:00am-09:30am', 90, 225, 105, '1', '2021-05-27 09:30:00', '2021-05-27 08:00:00', NULL, 'approved', 'pending', 0, 0, 0, 0, 0, '2021-05-26 23:21:45', '2021-05-27 16:56:10'),
(41, 'Test Request Sending', '2', 2, 2, '2021/05/29', '2021/05/29', '08:00am-08:30am,08:30am-09:00am,09:00am-09:30am,09:30am-10:00am', 120, 225, 105, '4', '2021-05-27 10:00:00', '2021-05-27 08:00:00', NULL, 'pending', 'pending', 0, 0, 0, 0, 0, '2021-05-26 23:26:58', '2021-05-27 16:56:10'),
(42, 'Hi i want to learn from you.', '1', NULL, NULL, '2021/05/27', '2021/05/27', '08:00am-08:30am,08:30am-09:00am', 60, 226, 105, '1', '2021-05-27 09:00:00', '2021-05-27 08:00:00', NULL, 'cancelled', 'pending', 0, 0, 0, 0, 0, '2021-05-27 16:26:32', '2021-05-27 16:56:10'),
(43, 'Hi i want to learn from you.', '1', NULL, NULL, '2021/05/27', '2021/05/27', '08:00am-08:30am,08:30am-09:00am', 60, 226, 105, '1', '2021-05-27 09:00:00', '2021-05-27 08:00:00', NULL, 'approved', 'pending', 0, 0, 0, 0, 0, '2021-05-27 16:28:04', '2021-05-27 16:56:10'),
(44, 'I am sending you request', '2', 2, -2, '2021/05/31', '2021/05/31', '08:00am-08:30am,08:30am-09:00am', 60, 226, 138, '2', '2021-05-27 09:00:00', '2021-05-27 08:00:00', NULL, 'approved', 'pending', 0, 0, 0, 0, 0, '2021-05-27 17:30:25', '2021-05-27 17:31:34'),
(45, 'test', '1', NULL, NULL, '2021/06/05', '2021/06/05', '08:30pm-09:00pm,09:00pm-09:30pm', 60, 228, 105, '1', '2021-06-05 21:30:00', '2021-06-05 20:30:00', NULL, 'approved', 'pending', 0, 0, 0, 0, 0, '2021-06-06 03:55:24', '2021-06-06 03:56:04'),
(46, 'tets', '1', NULL, NULL, '2021/07/05', '2021/07/05', '10:40am-11:10am,11:10am-11:40am', 60, 291, 290, '1', '2021-07-05 11:40:00', '2021-07-05 10:40:00', NULL, 'approved', 'pending', 0, 0, 0, 0, 0, '2021-07-05 08:11:51', '2021-07-05 08:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `debate_id` bigint(20) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_nick` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `user_id`, `debate_id`, `comment`, `type`, `is_nick`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 87, 1, 'Agreed, healthcare should be a human right.', 'like', 0, '2020-05-30 11:34:41', '2020-06-08 09:58:45', '2020-06-08 09:58:45'),
(2, NULL, 87, 2, 'I agree with your opinion. I think it can affect the Childs development and the  woman will get fat', 'like', 0, '2020-05-30 11:47:05', '2020-05-31 21:09:27', '2020-05-31 21:09:27'),
(3, NULL, 100, 3, 'testing', 'like', 0, '2020-06-07 00:04:51', '2020-06-08 09:58:45', '2020-06-08 09:58:45'),
(4, NULL, 109, 3, 'Why take away the option of private healthcare from', 'like', 0, '2020-06-07 00:07:26', '2020-06-08 09:58:46', '2020-06-08 09:58:46'),
(5, NULL, 109, 3, 'Why take away private care from', 'like', 0, '2020-06-07 00:07:41', '2020-06-08 09:58:46', '2020-06-08 09:58:46'),
(6, NULL, 109, 3, 'Testing testing 123. Yada yada. Just seeing if this will let me type out a comment and submit manually.', 'like', 0, '2020-06-07 00:09:15', '2020-06-08 09:58:42', '2020-06-08 09:58:42'),
(7, NULL, 109, 3, 'Test number 2. I think this works fine. Not sure why the first two submitted automatically.', 'like', 0, '2020-06-07 00:09:57', '2020-06-08 09:58:47', '2020-06-08 09:58:47'),
(8, NULL, 87, 4, 'I agree with u dabmaster61, school shooting happen in public schools more. With privatized schools, there can be extra security so less school shootings. Take that Kyle!', 'like', 0, '2020-06-07 05:42:23', '2020-06-08 09:58:41', '2020-06-08 09:58:41'),
(9, NULL, 112, 4, 'I do not agree with dabmaster61 as low income families would have a disadvantage against higher income families.', 'dislike', 0, '2020-06-07 05:43:13', '2020-06-08 09:58:41', '2020-06-08 09:58:41'),
(10, NULL, 87, 4, 'I would respectfully like to request that Zeyad Mohamed be removed from this website as I am getting violent tendencies and there could be terrorist attacks on this website from him', 'like', 0, '2020-06-07 05:45:37', '2020-06-08 09:58:40', '2020-06-08 09:58:40'),
(11, 7, 111, 3, 'Test test', 'like', 0, '2020-06-07 05:50:34', '2020-06-08 09:58:40', '2020-06-08 09:58:40'),
(12, NULL, 87, 3, 'JOHN DOE IS INDIAN TECH SCAMMER', 'dislike', 0, '2020-06-07 05:50:36', '2020-06-08 09:59:01', '2020-06-08 09:59:01'),
(13, NULL, 108, 3, 'testing', 'like', 0, '2020-06-07 05:57:12', '2020-06-08 09:58:48', '2020-06-08 09:58:48'),
(14, 13, 87, 3, 'Hello hi looking very beautiful call me?', 'like', 0, '2020-06-07 05:58:03', '2020-06-08 09:58:49', '2020-06-08 09:58:49'),
(15, 13, 87, 3, 'Hello hi looking very beautiful call me?', 'like', 0, '2020-06-07 05:58:04', '2020-06-08 09:59:02', '2020-06-08 09:59:02'),
(16, 13, 87, 3, 'Hello hi looking very beautiful call me?', 'like', 0, '2020-06-07 05:58:04', '2020-06-08 09:59:03', '2020-06-08 09:59:03'),
(17, 13, 87, 3, 'Hello hi looking very beautiful call me?', 'like', 0, '2020-06-07 05:58:22', '2020-06-08 09:59:03', '2020-06-08 09:59:03'),
(18, NULL, 72, 4, 'agree', 'like', 0, '2020-06-07 11:45:08', '2020-06-08 09:59:07', '2020-06-08 09:59:07'),
(19, NULL, 98, 10, 'post-comment-btn-nick', 'like', 0, '2020-06-08 21:42:46', '2020-06-09 01:02:53', '2020-06-09 01:02:53'),
(20, NULL, 98, 10, 'something something', 'like', 1, '2020-06-08 21:50:23', '2020-06-09 01:02:53', '2020-06-09 01:02:53'),
(21, NULL, 98, 10, 'test from name', 'like', 0, '2020-06-08 21:50:33', '2020-06-09 01:02:54', '2020-06-09 01:02:54'),
(22, NULL, 95, 10, 'testing', 'dislike', 1, '2020-06-09 00:58:43', '2020-06-09 01:02:54', '2020-06-09 01:02:54'),
(23, 22, 95, 10, 'testing', 'dislike', 0, '2020-06-09 00:58:58', '2020-06-09 01:02:55', '2020-06-09 01:02:55'),
(24, NULL, 95, 10, 'testing', 'dislike', 1, '2020-06-09 00:59:05', '2020-06-09 01:02:59', '2020-06-09 01:02:59'),
(25, 24, 95, 10, 'testing', 'dislike', 0, '2020-06-09 00:59:11', '2020-06-09 01:02:56', '2020-06-09 01:02:56'),
(26, NULL, 98, 10, 'testing', 'like', 1, '2020-06-09 18:43:41', '2020-06-10 02:07:02', '2020-06-10 02:07:02'),
(27, 26, 98, 10, 'asakldjasjdsal', 'like', 0, '2020-06-09 18:51:06', '2020-06-10 02:07:03', '2020-06-10 02:07:03'),
(28, 26, 98, 10, 'asdjkkasdkjsldas', 'like', 0, '2020-06-09 18:55:25', '2020-06-10 02:07:03', '2020-06-10 02:07:03'),
(29, 26, 98, 10, 'alkdjklasjdlas', 'like', 0, '2020-06-09 18:55:39', '2020-06-10 02:07:04', '2020-06-10 02:07:04'),
(30, 26, 98, 10, 'klaskdjasldjaslkdjsa', 'like', 0, '2020-06-09 19:01:09', '2020-06-10 02:07:12', '2020-06-10 02:07:12'),
(31, 26, 98, 10, 'sadjaslkdklas', 'like', 0, '2020-06-09 19:02:00', '2020-06-10 02:07:12', '2020-06-10 02:07:12'),
(32, 26, 98, 10, 'asakldjasjdsal', 'like', 0, '2020-06-09 19:08:06', '2020-06-10 02:07:20', '2020-06-10 02:07:20'),
(33, 26, 98, 10, 'sadmasdsdald;s', 'like', 0, '2020-06-09 19:09:42', '2020-06-10 02:07:13', '2020-06-10 02:07:13'),
(34, 26, 98, 10, 'saldksa;ldkas;ldas', 'like', 0, '2020-06-09 19:18:35', '2020-06-10 02:07:06', '2020-06-10 02:07:06'),
(35, 26, 98, 10, 'sadasdsdasds', 'like', 0, '2020-06-09 19:18:57', '2020-06-10 02:07:13', '2020-06-10 02:07:13'),
(36, 26, 98, 10, 'sdsmnadms', 'like', 1, '2020-06-09 19:21:24', '2020-06-10 02:07:23', '2020-06-10 02:07:23'),
(37, NULL, 98, 10, 'mdasddakldlksdl', 'dislike', 1, '2020-06-09 19:21:48', '2020-06-10 02:07:06', '2020-06-10 02:07:06'),
(38, 37, 98, 10, 'kjsdhaskdsak', 'dislike', 1, '2020-06-09 19:21:56', '2020-06-10 02:07:21', '2020-06-10 02:07:21'),
(39, NULL, 98, 10, 'kdajlskjlasdsd', 'dislike', 1, '2020-06-09 19:22:04', '2020-06-10 02:07:22', '2020-06-10 02:07:22'),
(40, NULL, 98, 10, 'asmdkldjsa', 'like', 1, '2020-06-09 19:22:27', '2020-06-10 02:07:22', '2020-06-10 02:07:22'),
(41, NULL, 72, 10, 'testing coming', 'like', 1, '2020-06-11 01:09:05', '2020-06-11 07:27:45', '2020-06-11 07:27:45'),
(42, 41, 72, 10, 'testing reply', 'like', 1, '2020-06-11 01:09:16', '2020-06-11 07:27:45', '2020-06-11 07:27:45'),
(43, 41, 72, 10, 'testing reply 2', 'like', 0, '2020-06-11 01:09:25', '2020-06-11 07:27:47', '2020-06-11 07:27:47'),
(44, NULL, 122, 10, 'Yes, the economy will benefit from the legalization of marijuana. Otherwise, black markets will flourish.', 'like', 1, '2020-06-12 02:34:49', '2020-06-14 14:05:51', '2020-06-14 14:05:51'),
(45, NULL, 126, 10, 'I don\'t think marijuana should be legalized because there are many negative health impacts. These can be both short term impacts and long term as well. Some short term effects are distorted perception, memory problems and learning issues, having a hard time thinking and concentrating, as well as having an increased heat rate. Some people will also feel anxiety, fear, or panic. There will be long term effects on your bones, heart, and lungs. People who smoke large amounts of marijuana on a regular basis will increase the risk of bone fractures because of higher bone density. It affects your heart, as within a few minutes after smoking marijuana, the heart will start beating faster and the blood pressure will drop. According to this article (http://jtd.amegroups.com/article/view/14437/11899), marijuana users\' risk for a heart attack ranges from four to five times higher within the first hour after smoking marijuana, compared to their general risk of heart attack when not smoking. Smoking weed can affect your lungs and you may experience daily coughing, more frequent minor chest illnesses, and an increased risk of lung infections. Users of marijuana may also have a higher risk of getting cancer. Researchers believe that because the link between tobacco and lung cancer is well known and because cannabis has many of the same harmful substances(often on an even larger scale), it will increase the risk of cancer. If marijuana is legalized, more teens will use it because of peer pressure or adults that want to sell these drugs to innocent kids. These situations are dangerous because, as previously mentioned, cannabis can affect your brain, but when used on youth, they will have permanent effects on brain development. Marijuana does not only impact the user, it also impacts the society as there will be increased visits to the emergency rooms and more victims of drugged driving and other crimes.', 'dislike', 1, '2020-06-16 05:56:49', '2020-06-16 05:56:49', NULL),
(46, NULL, 126, 7, 'I don\'t thi', 'dislike', 0, '2020-06-16 05:57:49', '2020-07-10 02:34:05', '2020-07-10 02:34:05'),
(47, NULL, 126, 7, 'I don’t think all adults should be able to carry a concealed handgun because it increases crime. Many people believe that having the right to carry a handgun makes you, as well as the people around you, feel safer, but, carrying concealed handguns increases crime, rather than decreasing it. John J. Donohue, a Stanford law professor and economist, concluded that the “right to carry” increases crime by up to 15% over a 10 year time period. If handguns are legalized, even with background checks, we can’t keep dangerous people from getting them. There is a higher chance of criminals carrying a gun knowing other people are also armed. This could result in crime scenes turning more lethal than they are now. Additionally, not all adults are responsible. When people get angry while carrying a gun, there is a higher chance that something bad will happen. For example, in Seattle, a guy was riding home in an Uber from a wedding. He had had too much to drink, and he and his wife got into a heated argument. When he got angry, he took out a gun and shot her in the head. This wouldn\'t have happened if the guy didn’t have a concealed carry permit because there wouldn’t have been a gun around. The safety of the public doesn’t increase just because all adults have a concealed handgun. Instead it increases crime and they become more deadly, not just being caused by criminals, but also by people with no previous record.', 'dislike', 1, '2020-06-16 06:41:05', '2020-06-16 06:41:05', NULL),
(48, NULL, 128, 10, 'Marijuana shouldn\'t be legalized. First of all, marijuana damages your health. Smoking any substance will have a negative and potentially life-threatening effect on your respiratory health. The use of marijuana can also affect a person\'s memory, IQ, judgment, and problem-solving skills. The second reason is that marijuana endangers public safety. If a person is driving whilst under the influence of marijuana, they may be more prone to having a collision and potentially harming a pedestrian or fellow road user. There is also a chance that marijuana use during work will reduce your ability to perform your job efficiently, which can be potentially dangerous for certain professions, such as pilots, doctors, care providers, etc. The last reason is that marijuana can jeopardize young people. It can harm the young people who are the hope and future of human kind. Marijuana may affect the development of the brain if smoked at a young age. This is not only harming the future of young people, but also the future of our country and the world. If marijuana was legalized, then it would become more easily accessed by younger generations. In conclusion, marijuana has many negative impacts on our society. Therefore, I strongly believe that marijuana shouldn\'t be legalized.', 'dislike', 1, '2020-06-17 00:03:31', '2020-06-17 00:03:31', NULL),
(49, NULL, 128, 7, 'I believe adults should have the right to carry a concealed handgun. The first reason is to protect yourself. We live in an increasingly dangerous world where crime attacks can happen anywhere. According to a study by criminologist Gary Kleck, PhD, robbery and assault victims who used a gun to resist were less likely to be attacked or injured than those who used any other method of self-protection. A study published in the Journal of Criminal Law and Criminology found that when someone draws a concealed weapon in self-defense, the criminal retreats 55.5% of the time. Another reason is that carrying a gun gives you extra confidence. A study by the National Opinion Research Center found that 59% of people who carried a gun reported doing so because it makes them feel safer. Carrying a concealed handgun can increase your sense of security when going out alone at night or in dangerous areas. The last reason is that it\'s better to have a gun and not need it than to need one and not have it. It’s like having insurance: You hope you won’t need it, but if disaster strikes, you’re prepared. The police may not be quick enough to rescue you. Having a concealed handgun could literally save your life. This is why I believe having a concealed handgun is essential.', 'like', 1, '2020-06-17 00:31:27', '2020-06-17 00:31:27', NULL),
(50, NULL, 127, 9, 'In the future, the world will probably be destroyed due to new technologies. Humankind will become lazier and lazier.', 'like', 0, '2020-06-17 01:49:21', '2020-06-17 01:49:21', NULL),
(51, NULL, 139, 12, 'I don’t think abortion should be illegal for many reasons from both the parents’ perspective and the child\'s perspective. First of all, it is a woman\'s choice to determine her future and what happens to her body. She should have the final say and abortion should be a choice if that’s what she wants. If we make abortion illegal, then her human rights are violated and that isn’t justifiable. Secondly, our world isn’t a safe place and rape can happen anywhere and to anyone. Victims of rape should not be burdened with the responsibility to conceive and raise the child. There are many teen victims of rape as well as many teen pregnancies, but these girls are merely teenagers and can’t even support themselves, let alone another human being. They are not mentally and physically prepared to take on this responsibility and we can not force it upon them. People might say that there are adoption services and many other support services to help people in need. The services we have right now aren’t good enough and many people don’t feel okay with not having the option of abortion. We don’t live in a society where these things are properly funded and they can fully support people when they need it. There are also cases where abortion is only option to preserve the life of woman.This article (https://www. usato day.com/story/news/nation/2012/10/19/abortion-mother-life-walsh/1644839/) states that “In cases like severe infections, heart failure and severe cases of preeclampsia(a condition in which a woman develops very high blood pressure and is at risk for stroke) abortion would be the only way.” Now from the child’s standpoint. It is unfair to bring a child into the world if it’s parents aren’t ready for it. The child wouldn’t be able to live a full and happy life with the limited resources available and the limited knowledge their parents have. Another issue is if the parents are criminals or abusive. The child should not have to live in that sort of environment and deal with their parents\' problems. There are also many cases where the child is unwanted by the parents and they shouldn’t have to be brought up in an environment where they aren’t loved and cared for. In conclusion, it is unfair to the woman because she should have full control over her body and her future, and it also isn’t fair to the child if they are born into a bad environment and aren’t able to live up to their potential.', 'dislike', 1, '2020-06-19 07:08:36', '2020-06-19 07:08:36', NULL),
(52, NULL, 139, 11, 'I think death penalties should be abolished for three reasons. First of all, it isn’t morally correct. We can’t be the judges of who lives and who dies.  In modern day, the established racism within our criminal justice systems has become more apparent. The death penalty has proved to be discriminatory in its nature. According to the Death Penalty Information Center, in some states, juries are three times more likely to give a death penalty to a black criminal than a white criminal. By killing the offender, you can’t bring justice to the situation. As Coretta Scott King said, \"An evil deed is not redeemed by an evil deed of retaliation. Justice is never advanced in the taking of a human life. Morality is never upheld by a legalized murder.\" Also, there is no humane way to kill. All methods of murder are brutal and painful. The nature of these cruel deaths will only continue to maintain the cycle of violence and won’t lessen the pain of the victim’s family and friends. Taking a life, even as punishment, is still murder. Additionally, the death penalty is irreversible. Our judgments may lead to people paying for crimes they did not commit. For example, a Texas man named Cameron Todd Willingham was executed for allegedly setting a fire that killed his three daughters. After his execution, further evidence revealed that Willingham did not set the fire that caused their deaths. But by then, it was too late. Finally, the death penalty doesn’t reduce the number of crimes committed, instead, it does the opposite. If it’s not more effective than serving terms in prison, then why should we take the more violent path? In Canada, the death penalty was abolished in 1976, and since then, the murder rate has steadily declined. The death penalty is no longer practical in means of punishing people. It costs us morally as a society, making us guilty of the murder and it must end.', 'like', 1, '2020-06-19 07:13:32', '2020-06-19 07:13:32', NULL),
(53, NULL, 72, 11, 'in favor comment', 'like', 1, '2020-06-20 02:28:07', '2020-06-20 02:28:10', '2020-06-20 02:28:10'),
(54, NULL, 142, 9, 'In principle, what the definition of a \"better world\", would be one wherein which people can have a more fulfilling and happy lives. Happiness should be the metric we use when discussing this topic as that is what ultimately allows for the betterment of not only our world, but those living on it. A happy populous requires a clean space to live in, food to eat, shelter, and water to survive. These requirements not only require humans to respect the environment and the world in general, but respect each other.These people, in the future, would not only live happy, but ones wherein which they felt they accomplished something. Our world right now, runs rampant with such societal issues as widespread poverty, and political strife. Investments in clean energy, futuristic ai, and a higher living standard through this technology is the only conclusion. Discard the dystopian society that proposition presents to you of a society where we are run by robot overlords. That is simply an untrue assumption, as we already know that Ai is in effect now, and we have shown that we can control it. We have shown, that because of these many dystopian theories, we are very cautious of technological development. The only thing required of us, is to continue the seamless development of technology and allow for these life-saving (literally) technologies to reach everyone.  The only thing that technology has brought us for hundreds of years, has been greater standards of living, and generally less suffering. On a last note, there is the argument for the proposition that involves there being no conflict for humanity to overcome in a future of lazy humans babysat by technology, but there will always be some conflict for humans to overcome, which of course, will be something much more imaginative, and complex than we could understand now.', 'dislike', 1, '2020-06-25 08:02:35', '2020-06-25 08:02:35', NULL),
(55, NULL, 142, 8, 'The implied notion in this argument, is that making federal election day a national holiday would increase voter turnout. What anyone arguing for the motion, assumes that people who fail to participate in their democracy, are failing to do so because of external situations such as lack of time (https://www.census.gov/content/dam/Census/library/publications/2018/demo/P20-582.pdf). The belief that somehow making federal election day a holiday would erase these time conflicts, is simply an incorrect assumption as we already see that in Canada, employers are legally obligated to give time off work to allow their workers to vote, which most probably creates the biggest time conflict among the voter populous. The only thing that a national holiday serves to do, is to shut down services such as childcare and banking. Such departments as retail and Hospitals are forced to stay in work, putting an unnecessary strain on them due to the influx of customers and patients, and essentially punishing those working in these services. Take for example, a retail worker. On national election day, they are forced to work at their job, and because of the status of \"national election day,\" most childcare centers are closed, leaving another facet of worry for this humble worker. This is the situation many small businesses and average workers face in the face of yet another holiday, who simply wouldn\'t be able to pass up the revenue of the date, and bring stress to the workforce.Adding another non-working day to the calendar, won\'t increase voter turnout, and serves to benefit a portion of the population, while forsaking the others.', 'dislike', 1, '2020-07-08 21:30:00', '2020-07-08 21:30:00', NULL),
(56, NULL, 154, 10, 'I think I should start this argument with the simple question: which one is more important; marijuana or an actual life-threatening drug. Opposition\'s side of the debate has tried to coerce you about all the \"negative health impacts\" marijuana brings. However, they are blindly forgetting the true after effect of when we remove marijuana from the \"dangerous\" list of drugs. First, what actually happens when a drug is legalized? Governments and police forces pay less attention to it, they reduce the need for security and attention to potential users of the drug. Instead, they would use that money and time on other, more impactful drugs and issues. This is what side opposition forgets: the world is not black and white, there are other drugs and problems out there that are way more important and need much more attention in the status quo. As an example; I had two oranges, for both me and my friend, but my friend needed the orange much more than me. I cannot suddenly just add another orange to give to my friend, I have to sacrifice my own orange for my friend who needed it more. The question is not whether I want this orange or not, but whether my friend needs it more than me. In this motion, the money and attention we put into security for these drugs are the oranges. It\'s just laughable at the fact team opposition would rather have citizens have literal organ failure and seizures from cocaine rather than minor chest illnesses and short term memory loss. The truth stands, though marijuana is a mildly irritating substance, countries should not sacrifice that time and effort when there are so many mortal issues they need to face. Caring about the \"dangers\" of marijuana is simply derailing against the kidney diseases from heroin, or the severely high alcohol consumption that has the third-leading cause of death in the USA. So proud to propose.', 'dislike', 1, '2020-07-09 07:38:57', '2020-07-09 07:39:12', '2020-07-09 07:39:12'),
(57, NULL, 154, 10, 'I think I should start this argument with the simple question: which one is more important; marijuana or an actual life-threatening drug. Opposition\'s side of the debate has tried to coerce you about all the \"negative health impacts\" marijuana brings. However, they are blindly forgetting the true after effect of when we remove marijuana from the \"dangerous\" list of drugs. First, what actually happens when a drug is legalized? Governments and police forces pay less attention to it, they reduce the need for security and attention to potential users of the drug. Instead, they would use that money and time on other, more impactful drugs and issues. This is what side opposition forgets: the world is not black and white, there are other drugs and problems out there that are way more important and need much more attention in the status quo. As an example; I had two oranges, for both me and my friend, but my friend needed the orange much more than me. I cannot suddenly just add another orange to give to my friend, I have to sacrifice my own orange for my friend who needed it more. The question is not whether I want this orange or not, but whether my friend needs it more than me. In this motion, the money and attention we put into security for these drugs are the oranges. It\'s just laughable at the fact team opposition would rather have citizens have literal organ failure and seizures from cocaine rather than minor chest illnesses and short term memory loss. The truth stands, though marijuana is a mildly irritating substance, countries should not sacrifice that time and effort when there are so many mortal issues they need to face. Caring about the \"dangers\" of marijuana is simply derailing against the kidney diseases from heroin, or the severely high alcohol consumption that has the third-leading cause of death in the USA. So proud to propose.', 'like', 1, '2020-07-09 07:39:20', '2020-07-09 07:39:20', NULL),
(58, NULL, 142, 7, 'If we are to analyze the wording in this proposal, it explicitly states that all adults should have the right to own a handgun, which is simply ludicrous. Even with such laws as the 2nd amendment in America doesn\'t truly respect the right to a handgun for all adults, restricting its access to criminal offenders, or people labelled otherwise dangerous to the general public. Despite this, lets assume that there will obviously be restrictions on exactly who can own a handgun to defend the citizenry. Even with these restrictions, I ask you, what would be the logical step to defend yourself and those around you in the case of an attack of an offender? That is to say, in a society where guns are readily available to those that can see the effects of mass shootings and/or the presence of guns in daily life are provided with loads of incentive to purchase a gun, thereby motivating others to do the same, in a sort of slippery slope argument.  Despite this seeming to be a logical fallacy, this has been proven true in many circumstances. Not only does the assumption of availability motivating crime hold up in multiple studies (https://www.ncbi.nlm.nih.gov/pmc/articles/PMC478945/), but the simple truth of seeing something in your daily life more often, will familiarize it to you and make its purchase seem much less extreme(https://www.bbc.com/news/world-us-canada-41488081). This is true especially when it is a high powered killing machine. All we are doing with the proposal given, is promoting and upping the chances of a potential offender harming our society.', 'dislike', 1, '2020-07-16 05:14:55', '2020-07-16 05:14:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment_likes`
--

CREATE TABLE `comment_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `comment_id` bigint(20) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_likes`
--

INSERT INTO `comment_likes` (`id`, `user_id`, `comment_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 98, 21, 'like', NULL, NULL),
(2, 98, 20, 'like', NULL, NULL),
(3, 98, 19, 'like', NULL, NULL),
(4, 98, 26, 'like', NULL, NULL),
(5, 98, 36, 'like', NULL, NULL),
(6, 72, 41, 'like', NULL, NULL),
(7, 72, 42, 'like', NULL, NULL),
(8, 122, 50, 'like', NULL, NULL),
(9, 98, 50, 'like', NULL, NULL),
(11, 154, 54, 'like', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_date` date NOT NULL,
  `close_date` date NOT NULL,
  `requirement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_fees` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prize` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`id`, `title`, `user_id`, `slug`, `description`, `open_date`, `close_date`, `requirement`, `entry_fees`, `prize`, `status`, `comp_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Young Explorers Speech Competition (Ages 6-12)', 52, 'young-explorers-speech-competition-ages-6-12-5', '<p><strong>Deliver</strong> a 3-5 minute speech on the role of technology within the next 100 years. Your speech will be judged on originality, content, and delivery.</p>', '2020-10-01', '2020-10-31', '<p>Eligibility Criteria: Between 6-12 years old Two categories 6-9 years old 10-12 years old Prizes for each category: First Place: $100 Second Place: $50 Third Place: $20 All participants will get a discount code for upcoming TalkMaze courses!</p>', NULL, NULL, 'current', 'https://talkmaze.com/storage/poster/S9Mv9tVGBEcPe8581fSByMpvTZBDG9uuA1YcF6Ll.jpeg', NULL, '2020-08-21 05:11:33', '2020-09-27 23:39:53'),
(2, 'Speech', 52, 'speech', '<p>Deliver a 3-5 minute speech on the role of technology within the next 100 years. Your speech will be judged on originality, content, and delivery.</p>', '2020-09-01', '2020-09-30', '<p><strong>Eligibility Criteria:</strong></p>\r\n\r\n<ol>\r\n	<li>Between 6-12 years old</li>\r\n	<li>Two categories</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>6-9 years old</li>\r\n	<li>10-12 years old</li>\r\n</ul>\r\n\r\n<p><strong>Prizes for each category:</strong></p>\r\n\r\n<ol>\r\n	<li>First Place: $100 and 100% off the fall Young Explorer Course (Valued at $130 USD)</li>\r\n	<li>Second Place: $50</li>\r\n	<li>Third Place: $25</li>\r\n</ol>\r\n\r\n<p><em>All participants will get a discount code for upcoming TalkMaze courses!</em></p>', NULL, NULL, 'current', 'https://talkmaze.com/storage/poster/amm70OO6bGDsAgNYxwBdRj7Y0vRBXf1BcKzRQyo7.png', NULL, '2020-08-21 05:31:29', '2020-08-26 08:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `competition_users`
--

CREATE TABLE `competition_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `competition_id` bigint(20) NOT NULL,
  `user_profiles_id` bigint(20) NOT NULL,
  `ptname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `submissionlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competition_users`
--

INSERT INTO `competition_users` (`id`, `competition_id`, `user_profiles_id`, `ptname`, `dob`, `submissionlink`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 187, 'Snehal Parmar', '1991-01-01', NULL, NULL, '2020-08-26 02:28:34', '2020-08-26 02:28:34'),
(2, 1, 50, 'test', '2020-09-11', 'tets', NULL, '2020-08-26 02:45:22', '2020-08-26 02:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_likes`
--

CREATE TABLE `content_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_content_id` bigint(20) NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_types`
--

CREATE TABLE `content_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_types`
--

INSERT INTO `content_types` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Text', NULL, NULL, NULL),
(2, 'Audio', NULL, NULL, NULL),
(3, 'Video', NULL, NULL, NULL),
(4, 'PDF', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content_views`
--

CREATE TABLE `content_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_content_id` bigint(20) NOT NULL,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `tutor_id`, `student_id`, `created_at`, `updated_at`) VALUES
(2, 105, 121, '2021-04-28 05:21:02', '2021-04-28 05:21:02'),
(3, 105, 211, '2021-05-05 15:39:59', '2021-05-05 15:39:59'),
(4, 105, 212, '2021-05-12 14:29:19', '2021-05-12 14:29:19'),
(5, 105, 213, '2021-05-12 14:37:50', '2021-05-12 14:37:50'),
(6, 105, 214, '2021-05-17 15:12:19', '2021-05-17 15:12:19'),
(7, 105, 223, '2021-05-20 06:19:29', '2021-05-20 06:19:29'),
(8, 105, 225, '2021-05-26 02:29:21', '2021-05-26 02:29:21'),
(9, 105, 226, '2021-05-27 16:28:04', '2021-05-27 16:28:04'),
(10, 138, 226, '2021-05-27 17:30:25', '2021-05-27 17:30:25'),
(11, 105, 228, '2021-06-06 03:55:24', '2021-06-06 03:55:24'),
(12, 290, 291, '2021-07-05 08:11:51', '2021-07-05 08:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `coursequestionreply`
--

CREATE TABLE `coursequestionreply` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `coursequestion_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `reply` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_watched` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `is_valid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coursequestions`
--

CREATE TABLE `coursequestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `is_watched` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `is_valid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coursequestions_likes`
--

CREATE TABLE `coursequestions_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `coursequestion_id` bigint(20) NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `is_private` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `category_id`, `slug`, `name`, `description`, `tags`, `image`, `price`, `is_private`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '52', 22, 'saham-nadeem', 'Saham Nadeem', 'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'fgrthfgyjhkulijk;l\'', 'fgh,ghj,bhnjmk,hjnm,bnm', 'https://talkmaze.com/talkmaze_test/storage/storage/vYMJxx3VQBuzQWClaegN1MvzkvJkcXeM630tDK4b.jpeg', 900.00, 0, '2020-05-30 09:42:25', '2020-06-01 01:31:22', '2020-06-01 01:31:22'),
(8, '122', 18, 'public-forum-debate', 'Public Forum Debate', 'Our wonderful, experienced coach, Thadeus Smith, will take you through the everything you need to know about Public Forum debate!', 'publicforum,debate', 'https://talkmaze.com/storage/storage/uOiDKNLeljzUnDrXRcZplARnNAlETsWHvZ0nwkL5.jpeg', 5.00, 0, '2020-07-03 03:11:28', '2020-07-03 03:16:27', '2020-07-03 03:16:27'),
(9, '122', 23, 'coach-training', 'Coach Training', 'For TalkMaze Coaches only.', 'coaches', 'https://talkmaze.com/storage/storage/tKGEjwRlgjVsbqJ5qdf5MFPaSW1JJ3XaPGentPgB.png', 0.00, 0, '2020-07-15 11:06:32', '2020-07-15 11:25:50', '2020-07-15 11:25:50'),
(10, '101', 23, 'coach', 'coach', 'coach', 'coach', 'https://talkmaze.com/storage/storage/qKtSS9tgWgnfzvdHukoPwBrt1osBUPdeGXiYiPnJ.jpeg', 0.00, 0, '2020-07-15 11:28:35', '2020-07-15 11:33:09', '2020-07-15 11:33:09'),
(11, '52', 22, 'saham', 'Saham', 'something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something', 'test,rsdas,sdadsa,asdasdas,adasdsa,sads', 'https://talkmaze.com/storage/storage/vTQhHyms8dbugdMqFEdQgtJLrMwGRHRIpmnKdoHH.jpeg', 20.00, 0, '2020-07-15 20:58:31', '2020-07-16 00:00:53', '2020-07-16 00:00:53'),
(12, '52', 17, 'saham', 'Saham', 'kdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdsl kdjasdsl kdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdsl kdjasdsl kdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdsl kdjasdsl kdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdslkdjasdsl kdjasdsl', 'asd,asdsad,dasd', 'https://talkmaze.com/storage/storage/ZDn2aXOxErEpoQTDoJKF9FdNAnMFTCKKAMZeVn4k.jpeg', 900.00, 1, '2020-07-16 00:13:16', '2020-07-16 00:18:36', '2020-07-16 00:18:36'),
(13, '52', 17, 'test-course', 'test course', 'zxdjsakjd sad asdsa das dsd dsa zxdjsakjd sad asdsa das dsd dsa zxdjsakjd sad asdsa das dsd dsa zxdjsakjd sad asdsa das dsd dsa zxdjsakjd sad asdsa das dsd dsa zxdjsakjd sad asdsa das dsd dsa', 'test,dsad,sdad,sda', 'https://talkmaze.com/storage/storage/Azosvs22vlpnLDhTj8Pa0b6lLL21bIRttNaBHUMl.jpeg', 200.00, 0, '2020-07-16 00:19:09', '2020-07-19 03:45:58', '2020-07-19 03:45:58'),
(14, '122', 23, 'welcome-to-the-team', 'Welcome to the team!', 'We are so excited to have you on board! This course will help you get accustomed to working at TalkMaze. Don\'t hesitate to reach out if you have any questions. We\'re also always looking for feedback so feel free to share any suggestions.', 'coaches', 'https://talkmaze.com/storage/storage/yrOUGsFGKf0yLSF2e57Z1CW35BTCxAatu1T9Y2Xk.jpeg', 0.00, 1, '2020-07-19 03:52:17', '2020-07-19 03:58:57', '2020-07-19 03:58:57'),
(15, '122', 25, 'welcome-to-the-team', 'Welcome to the team!', 'We are so excited to have you on board! This course will help you get accustomed to working at TalkMaze. Don\'t hesitate to reach out if you have any questions. We\'re also always looking for feedback so feel free to share any suggestions.', 'coaching', 'https://talkmaze.com/storage/storage/FOjuAGYrJYF2hJv5s6Dacjz473QIEVjHcjJ6Ruhl.jpeg', 0.00, 0, '2020-07-19 03:59:50', '2020-07-21 02:18:11', '2020-07-21 02:18:11'),
(16, '122', 25, 'test', 'test', 'test', 'test', 'https://talkmaze.com/storage/storage/ygw76t0Yb26G8nliIVwSwRyFm8JlrvWNOy752eZd.png', 0.00, 1, '2020-07-21 02:19:50', '2020-07-21 22:57:21', '2020-07-21 22:57:21'),
(17, '122', 18, 'public-forum-debate', 'Public Forum Debate', 'Our talented coach, Thadeus Smith, will take you through everything you need to know about Public Forum debate! Learn a new style or refine your strategies by taking this course.', 'debate', 'https://talkmaze.com/storage/storage/DEWzN5C0GDVAvJw1grcdJIovuAxe2PpLRYaue0qX.jpeg', 5.00, 0, '2020-07-22 10:34:14', '2020-07-22 10:36:18', '2020-07-22 10:36:18'),
(18, '261', 25, 'welcome-to-the-team', 'Welcome to the team!', 'Hello Coaches!\r\n\r\nWe are so excited to have you on board. The goal of this course is to get you accustomed to the work environment at TalkMaze. The journey ahead is as exciting as it is uncertain and we are looking forward to sharing it with you.', 'coaching', 'https://talkmaze.com/storage/storage/PN1INywiTXRPpAVvCedyBO8Srp5BpbiMFyATCh4x.jpeg', 0.00, 1, '2020-07-23 12:39:40', '2020-11-29 08:43:25', NULL),
(19, '72', 19, 'turning-natural', 'Turning Natural', 'ksjdalkdjlkadksdjkladklsadkladjklsjlaksksjdalkdjlkadksdjkladklsadkladjklsjlaksksjdalkdjlkadksdjkladklsadkladjklsjlaksksjdalkdjlkadksdjkladklsadkladjklsjlaks', 'sdddsad,dsdas,dsad,asdasd,sad,sadsa,da', 'https://talkmaze.com/storage/storage/R2mj4eVXLK3352HqTE6d23bKKBCmoVdkTd5zcYbX.jpeg', 200.00, 0, '2020-07-24 17:47:12', '2020-07-24 17:48:11', '2020-07-24 17:48:11'),
(20, '261', 18, 'introduction-to-public-forum', 'Introduction to Public Forum', 'One of our talented coaches, Thadeus Smith, will take you through everything you need to know about Public Forum debate!', 'debate', 'https://talkmaze.com/storage/storage/eEK89Z6FGDiUaVIO3WSiKSCrOEHZZ5uLul3QuIQQ.jpeg', 10.00, 0, '2020-07-25 10:01:12', '2020-11-29 08:43:35', NULL),
(21, '261', 22, 'canadian-national-debating-style', 'Canadian National Debating Style', 'Learn all about Canadian National Debating Style by a nationally ranked debater, Nimra Hooda! This course is excellent for debaters of any level.', 'debate', 'https://talkmaze.com/storage/storage/3dthq2iacQBYLpqGAR1YC46iOxznn17Ow0gXzj2f.jpeg', 10.00, 0, '2020-07-25 10:53:10', '2020-11-29 08:43:44', NULL),
(22, '261', 19, 'introduction-to-public-speaking', 'Introduction to Public Speaking', 'Dive right into the basics of public speaking with Jeremy Christopherson! We\'ve especially designed this course to be accessible for all levels.', 'speech', 'https://talkmaze.com/storage/storage/eviPYY6XRuyp8dlJTUw98IBluEDQCbUjAAWs1pdp.jpeg', 0.00, 0, '2020-07-25 11:26:46', '2020-11-29 08:43:53', NULL),
(23, '195', 18, 'test-coarse-to-chesk-slider', 'test coarse to chesk slider', 'dfghsd aad sad s das ds d ad as d ad sa da s dfghsd aad sad s das ds d ad as d ad sa da s dfghsd aad sad s das ds d ad as d ad sa da s dfghsd aad sad s das ds d ad as d ad sa da s', 'test,slider,course', 'https://talkmaze.com/storage/storage/UrXnPLzl3JE0z6DufK23Wqtg7e8yBq4P0ayiQunF.jpeg', 200.00, 0, '2020-07-28 22:44:27', '2020-07-29 02:01:32', '2020-07-29 02:01:32'),
(24, '72', 25, 'dev-test', 'Dev Test', 'this course is dev test this course is dev test this course is dev test this course is dev test this course is dev test this course is dev test this course is dev test this course is dev test this course is dev test this course is dev test this course is dev test', 'test,testing,dev,admin', 'https://talkmaze.com/storage/storage/e5dPKsbAdQM3IXxdDN38gpoPRI7hHi3eH4URWy1j.jpeg', 200.00, 0, '2020-08-14 01:03:46', '2020-08-15 04:30:09', '2020-08-15 04:30:09'),
(25, '261', 19, 'poetry-prose', 'Poetry & Prose', 'Learn how to interpret and perform pieces of Poetry & Prose from one of our talented coaches, Rong Wu!', 'speech,poetry', 'https://talkmaze.com/storage/storage/jv0MwsSdvXNf9YaRJwsSVUezsOHOWaeTxYwnPecY.jpeg', 10.00, 0, '2020-10-08 06:53:04', '2020-11-29 08:44:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_contents`
--

CREATE TABLE `course_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `lesson_id` bigint(20) NOT NULL,
  `content_type_id` bigint(20) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_contents`
--

INSERT INTO `course_contents` (`id`, `course_id`, `lesson_id`, `content_type_id`, `title`, `content`, `duration`, `size`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 7, 8, 1, 'Test Cat', 'cfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaacfghbjnlkmasdfsgdasaa', NULL, NULL, '2020-06-01 21:22:12', '2020-06-03 05:56:34', '2020-06-03 05:56:34'),
(14, 7, 9, 3, 'Overview and Background', 'shynMzbAmHEr86aSnIbGPDyg3PmfbBsf3ajnwNwY.mp4', NULL, NULL, '2020-06-03 05:57:11', '2020-07-03 03:12:27', '2020-07-03 03:12:27'),
(15, 7, 9, 3, 'Goals of a Public Speech', 'ZMVVzKdQ29mDp4rhPBj8jnTfscExeMuaHN3FzKBd.mp4', NULL, NULL, '2020-06-03 05:57:42', '2020-07-03 03:12:28', '2020-07-03 03:12:28'),
(16, 8, 10, 3, 'Introduction', 'K6xw15wGGJQVGuUTslJCSZsU362ilAKLrRWdOURG.mp4', NULL, NULL, '2020-07-03 03:14:14', '2020-07-03 03:16:21', '2020-07-03 03:16:21'),
(17, 8, 10, 3, 'Structure of Public Forum', 'r3Wgv3KrAPC7v0IUQxNfWPjU7jqNp57VffAiapGr.mp4', NULL, NULL, '2020-07-03 03:15:17', '2020-07-03 03:16:22', '2020-07-03 03:16:22'),
(18, 9, 11, 3, 'Welcome!', 'hEkqf3aKuzNllALD6sAUFARYoaYEuXLKqt91InBe', NULL, NULL, '2020-07-15 11:24:29', '2020-07-15 11:25:45', '2020-07-15 11:25:45'),
(19, 10, 14, 3, 'Welcome!', '6PvNplJpkOyH0JAHJmPKq0HTBUkjUCksVy2z5Qos.mp4', NULL, NULL, '2020-07-15 11:31:18', '2020-07-15 11:33:04', '2020-07-15 11:33:04'),
(20, 11, 15, 1, 'Videos', 'kasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakdakasjsdkdhsjsakda kasjsdkdhsjsakda', NULL, NULL, '2020-07-15 21:32:58', '2020-07-16 00:06:06', '2020-07-16 00:06:06'),
(21, 11, 15, 4, 'Skin Care', 'gyibJce2L6Jh6u7aGUeRcVMekBkqlZrnz9SDc9Hp.pdf', NULL, NULL, '2020-07-16 00:02:20', '2020-07-16 00:06:04', '2020-07-16 00:06:04'),
(22, 13, 17, 1, 'Videos', 'something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something', NULL, NULL, '2020-07-16 00:20:24', '2020-07-19 03:49:03', '2020-07-19 03:49:03'),
(23, 13, 17, 4, 'Test', '0sMbaRvW1SJPykdRZO08wAysukr6XAeJmnCaqc65.pdf', NULL, NULL, '2020-07-16 09:01:43', '2020-07-19 03:49:07', '2020-07-19 03:49:07'),
(24, 13, 18, 4, 'Values', 'AWomKqVnsKOxPSqVCeii3uMPC16e0zDUM18O6zEk.pdf', NULL, NULL, '2020-07-17 10:34:25', '2020-07-19 03:49:05', '2020-07-19 03:49:05'),
(25, 15, 19, 3, 'Welcome!', 'fRUR6cxQJ7H2b58iubulcW3XIMb0YkT9TIFYfP9W.mp4', NULL, NULL, '2020-07-19 04:05:09', '2020-07-23 12:40:05', '2020-07-23 12:40:05'),
(26, 18, 23, 3, 'Welcome!', 'I4WxKzpBaYlwWxoUJkCKKtL5mHnQHy2oN97xDRC6.mp4', NULL, NULL, '2020-07-23 12:42:24', '2020-07-23 12:42:24', NULL),
(27, 18, 23, 3, 'Our Values', 'hjS1DlfMZlMYoyc0LiK6ZWEaBGHiW1s3oU6ePneH.mp4', NULL, NULL, '2020-07-23 12:56:02', '2020-07-23 12:56:02', NULL),
(28, 18, 23, 4, 'Mission, Vision, and Values', 'YU4t1WeUsevMS8bEsrlZIR71mR59pvK7VTllfdBp.pdf', NULL, NULL, '2020-07-23 12:56:31', '2020-07-23 12:56:31', NULL),
(29, 18, 23, 3, 'Test Cat', 'mfjtPH3T35T9jos30YkDZJJmYWu9FYm2bx8ADJUE.mp4', NULL, NULL, '2020-07-23 13:34:58', '2020-07-23 13:36:08', '2020-07-23 13:36:08'),
(30, 18, 24, 3, 'test', 'cLvckoCTXEu8IkT4IqidKE6sruFYJgIwOxiZmJH6.mp4', NULL, NULL, '2020-07-23 13:50:14', '2020-07-23 13:50:14', NULL),
(31, 20, 25, 3, 'Welcome to the course!', 'DwnAmgQKeOFzJAH1XaNeZHPaTUMKypWHAXYyq9x2.mp4', NULL, NULL, '2020-07-25 10:02:20', '2020-07-25 10:02:20', NULL),
(32, 20, 25, 3, 'Structure of Public Forum Debate', 'qL7sk2BIh4L3adqtoyUHDHPscmnUpmfplbxZa6Lj.mp4', NULL, NULL, '2020-07-25 10:03:49', '2020-07-25 10:03:49', NULL),
(33, 20, 25, 3, 'Differences from other forms of debate', 'Mep0W66IVbG10fCAQBVMeReFp7VtYCFgaNtIv9aZ.mp4', NULL, NULL, '2020-07-25 10:05:22', '2020-07-25 10:07:48', '2020-07-25 10:07:48'),
(34, 20, 25, 3, 'Differences from Other Forms of Debate', 'CwNvLDm7cvwX9Y1b38uBohFpmdYS0bnUmsSET9sS.mp4', NULL, NULL, '2020-07-25 10:06:40', '2020-07-25 10:15:54', '2020-07-25 10:15:54'),
(35, 20, 25, 3, 'Types of Topics', 'hyN8KAaLy1wwTrNAYbyKdWyjF1BzyZvjON75s3Dk.mp4', NULL, NULL, '2020-07-25 10:08:44', '2020-07-25 10:10:11', '2020-07-25 10:10:11'),
(36, 20, 25, 3, 'Types of Topics', 'fOgAggu8f4kZiDN5S8ModvYun7m5IuydY6Sw4jw5.mp4', NULL, NULL, '2020-07-25 10:15:07', '2020-07-25 10:15:54', '2020-07-25 10:15:54'),
(37, 20, 25, 4, 'Structure of Public Forum Debate (PDF)', '9Whw3IeG0GU6T6j4E3Wjlc0jgEogIxZ5vkoHgOmk.pdf', NULL, NULL, '2020-07-25 10:16:14', '2020-07-25 10:25:54', '2020-07-25 10:25:54'),
(38, 20, 25, 3, 'Differences from Other Forms of Debate', '1DMCHFCNBSNNJVKHUFpNA1j8tTH5Omsg7wagI42n.mp4', NULL, NULL, '2020-07-25 10:17:19', '2020-07-25 10:25:53', '2020-07-25 10:25:53'),
(39, 20, 25, 4, 'Structure of Public Forum Debate (PDF)', 'qQT3yjKFyFMGrHGWhuLvfgCN4fx0BbtzjFJMREPf.pdf', NULL, NULL, '2020-07-25 10:26:06', '2020-07-25 10:26:06', NULL),
(40, 20, 25, 3, 'Differences from Other Forms of Debate', '2WGOJkhS7UD65aqYUz73ZvIQHsH5sxBuUdR0nTOV.mp4', NULL, NULL, '2020-07-25 10:26:56', '2020-07-25 10:26:56', NULL),
(41, 20, 25, 3, 'Types of Topics', 'joLUBkIx8OmjjtYxiy00ohCpO84yD1A77bA53zVU.mp4', NULL, NULL, '2020-07-25 10:27:38', '2020-07-25 10:27:38', NULL),
(42, 20, 25, 3, 'Elements of an Argument', 'XhJHz0btjUo7rnHm3He1X89Ha9MwnIWo9ISpZC1c.mp4', NULL, NULL, '2020-07-25 10:28:43', '2020-07-25 10:28:43', NULL),
(43, 20, 25, 3, 'Crossfire Period', 'fPGwyY2JpP6R067f25JoXSYyyxHytPgXQUCcvQle.mp4', NULL, NULL, '2020-07-25 10:29:37', '2020-10-02 04:02:02', '2020-10-02 04:02:02'),
(44, 20, 25, 3, 'Flowing the Round', 'hTmix6P9lpDsIIvGSFa9FTUugusFBG7TyzhxQF5T.mp4', NULL, NULL, '2020-07-25 10:31:51', '2020-10-02 04:02:05', '2020-10-02 04:02:05'),
(45, 20, 25, 4, 'Flowing the Round (PDF)', 'jVrqbqGl0GFKhLkVqxLFWIepWZWountlqA2cpgLu.pdf', NULL, NULL, '2020-07-25 10:32:06', '2020-10-02 04:02:06', '2020-10-02 04:02:06'),
(46, 20, 26, 3, 'Introduction to Chapter Two', 'URCYRt9v7gLe4TQo01mmptQNk4pOvc7oqQd7QM8d.mp4', NULL, NULL, '2020-07-25 10:34:47', '2020-10-02 04:09:00', '2020-10-02 04:09:00'),
(47, 20, 26, 3, 'The Hierarchy of Evidence', 'EIvaJGuWyJYFQsDBohxmqCeX3YplMEwQWNqhtWuC.mp4', NULL, NULL, '2020-07-25 10:36:41', '2020-10-02 04:09:01', '2020-10-02 04:09:01'),
(48, 20, 26, 3, 'Beginning Your Research', 'zPQVipfkW9K4JFjZpPyJLf9iDrVhrtUcwuGBxeio.mp4', NULL, NULL, '2020-07-25 10:44:46', '2020-10-02 04:09:07', '2020-10-02 04:09:07'),
(49, 20, 26, 3, 'Using Books', 'syn0hfDaJ70w7Gnlv1IXmxKgxB84FiSxYo1Ii4Kr.mp4', NULL, NULL, '2020-07-25 10:47:40', '2020-10-02 04:09:08', '2020-10-02 04:09:08'),
(50, 21, 27, 3, 'Welcome to the Course!', 'syt9b4M0gbLC4XyfjqHAEBaM5t7dyyiPgHJ92zGN.mp4', NULL, NULL, '2020-07-25 10:58:08', '2020-07-25 10:58:08', NULL),
(51, 21, 27, 4, 'Seating Format', 'noJZNOXLy9OyBENgEpzEI4xTILzz3IBHtk86Vhjx.pdf', NULL, NULL, '2020-07-25 11:02:43', '2020-07-25 11:02:43', NULL),
(52, 21, 27, 3, 'Roles and Order of Speaking', 'e5Xyk24anQDTC6gd0yNms9uccSKBbzynnjq5BiPl.mp4', NULL, NULL, '2020-07-25 11:07:07', '2020-07-25 11:07:07', NULL),
(53, 21, 27, 4, 'Review Worksheet', 'Ilq0taoHJnOfCJy4CggE6UkNDrGClyamRp1UhPsY.pdf', NULL, NULL, '2020-07-25 11:08:27', '2020-07-25 11:08:27', NULL),
(54, 21, 28, 4, 'Components of Each Speech', 'AyPYkThRPIJgoRSl25XbEjzjsmiYC9TlqPGQSmeu.pdf', NULL, NULL, '2020-07-25 11:10:27', '2020-07-25 11:10:27', NULL),
(55, 21, 28, 3, 'Introducing Your Speeches', 'RCnjMtIMW4XjDREIjiM5TZK8CLpoY0Hx0NL1u521.mp4', NULL, NULL, '2020-07-25 11:12:42', '2020-10-03 03:31:18', '2020-10-03 03:31:18'),
(56, 22, 29, 3, 'Overview and Background', 'ps3TVwlcCbqxb8B5RDxiCYVBtRpXB7xXS5S5pq4u.mp4', NULL, NULL, '2020-07-25 11:29:11', '2020-07-25 11:29:11', NULL),
(57, 22, 29, 3, 'Goals of a Public Speech', 'fS36kQATH83hXqltjIHF39dux1f6IypFA4fVaB2r.mp4', NULL, NULL, '2020-07-25 11:31:03', '2020-07-25 11:31:03', NULL),
(58, 22, 29, 4, 'Settings Involving Public Speaking', 'MBcwOFa47Yzgh54colixlz5jeR2AtK4exRtSL0gR.pdf', NULL, NULL, '2020-07-25 11:32:43', '2020-07-25 11:32:43', NULL),
(59, 22, 29, 4, 'The Importance of Practicing', '6Ij1TwNm2wVu6xwEQ5tz8Jo4FzxtDfofDzEMKhHo.pdf', NULL, NULL, '2020-07-25 11:33:16', '2020-07-25 11:33:16', NULL),
(60, 22, 30, 3, 'Basic Narrative Structure of Speech', 'aOLtWi6x1xG0inNa6y29DZcx2F7qkMG32kWRj3ib.mp4', NULL, NULL, '2020-07-25 11:35:48', '2020-07-25 11:35:48', NULL),
(61, 22, 30, 3, 'Framing the Story', 'AfU8TAXhBMOqEuXNqqHpt8waDXXG01LetYDXZsiw.mp4', NULL, NULL, '2020-07-25 11:37:59', '2020-07-25 11:37:59', NULL),
(62, 22, 30, 3, 'Other Narrative Structures', 'DaJ8X1ke1PZvOIvTIL70GVZvZPR4dPXUfWg2Pn0P.mp4', NULL, NULL, '2020-07-25 11:39:16', '2020-07-25 11:39:16', NULL),
(63, 22, 31, 3, 'Logical Methods of Persuasion', 'eKxJQU5cKMbblagek1p6fcAjIcz3Ithl7tZfaXdN.mp4', NULL, NULL, '2020-07-25 11:41:20', '2020-07-25 11:41:20', NULL),
(64, 22, 31, 3, 'Ethical Methods of Persuasion', 'yumbojMgKOoVZ9Th9uymPncZYMbLQSqCGua6zc2Q.mp4', NULL, NULL, '2020-07-25 11:42:55', '2020-07-25 11:42:55', NULL),
(65, 22, 31, 3, 'Emotional Method of Persuasion', 'WdXYt6j2vM9CwBVWSkZ3e40FlKSveUbRnrEvl46p.mp4', NULL, NULL, '2020-07-25 11:44:09', '2020-07-25 11:45:02', '2020-07-25 11:45:02'),
(66, 22, 31, 3, 'Emotional Methods of Persuasion', 'u1W6qPpuXUCu0szeezUaZkQN2VvQfpfNk1KmDwmM.mp4', NULL, NULL, '2020-07-25 11:44:54', '2020-07-25 11:44:54', NULL),
(67, 22, 31, 4, 'Chapter Wrap Up (PDF)', 'sXwGpBVn2wzICWGC2TCGLaeO4z29jrbBVCfNL5Ka.pdf', NULL, NULL, '2020-07-25 11:45:25', '2020-07-25 11:45:25', NULL),
(68, 22, 32, 3, 'Writing a Draft', 'YoOdLCnIFAommqahjOQqW6Wip9TeNbTmHnjtzW81.mp4', NULL, NULL, '2020-07-25 11:47:49', '2020-07-25 11:47:49', NULL),
(69, 22, 32, 4, 'A Timeline for Speech Preparation', 'mqLWU4Q56y1TFd9C4uwMVIv2dwHmcKu7AfGzTOux.pdf', NULL, NULL, '2020-07-25 11:48:32', '2020-07-25 11:48:32', NULL),
(70, 22, 32, 3, 'Knowing your Audience', 'PSsM8jkgkTYYWE43Yb8B6Mp5CzfFGVJnRZG65QZC.mp4', NULL, NULL, '2020-07-25 11:49:53', '2020-07-25 11:49:53', NULL),
(71, 22, 32, 3, 'Bridges of Relatability', 'Mz4VGVHCM7Z4tRCD4wfR3QavE92TlpoJW1oDvXgN.mp4', NULL, NULL, '2020-07-25 11:51:17', '2020-07-25 11:51:17', NULL),
(72, 22, 33, 3, 'Eye Contact', 'vWbjTMKL4UjXwObxd306nAB3NawKXUfWIcoQDIcz.mp4', NULL, NULL, '2020-07-25 11:54:47', '2020-07-25 11:54:47', NULL),
(73, 22, 33, 3, 'Posture and Positioning', 'RTaibprYf0Uea6Jxp4KmEcvhna9SfSf4B3czL3ON.mp4', NULL, NULL, '2020-07-25 11:57:34', '2020-07-25 11:57:34', NULL),
(74, 22, 33, 3, 'Audio Level', 'dxrXvSYiNlm4wYpzeZih7EjaTY7rftPwbiJ415wm.mp4', NULL, NULL, '2020-07-25 11:59:31', '2020-07-25 11:59:31', NULL),
(75, 22, 33, 3, 'Reiteration of the Importance of Practicing', 'Zlb6ksB4RfgQcx07j9MHytm94Ei0Ydkr5O7JePu8.mp4', NULL, NULL, '2020-07-25 12:01:52', '2020-07-25 12:01:52', NULL),
(76, 20, 25, 4, 'Elements of an Argument Worksheet', 'g6pQro7AyxnHkz7P8XtnoSiUICzS5xI7SGvlXwqz.pdf', NULL, NULL, '2020-10-02 04:02:40', '2020-10-02 04:02:40', NULL),
(77, 20, 25, 3, 'Crossfire Period', 'I9p0TLnpn5vWRYzcpg1KmwqOaIROqINgeF25bpru.mp4', NULL, NULL, '2020-10-02 04:03:57', '2020-10-02 04:03:57', NULL),
(78, 20, 25, 3, 'Flowing the Round', 'j8TcUq8ULq3pnx9ok1ufn6vwAW759eULbh2g82mW.mp4', NULL, NULL, '2020-10-02 04:05:37', '2020-10-02 04:05:37', NULL),
(79, 20, 25, 4, 'Example Flowsheet', '9D2ooCnXVNytnIl0TFtUYvFJDNX6HAibGWWUFRhK.pdf', NULL, NULL, '2020-10-02 04:06:10', '2020-10-02 04:06:10', NULL),
(80, 20, 26, 3, 'Introduction to Chapter Two', 'jp7we5vbAacEZzVeI5XKyKsWtuhoRptm1R262C8k.mp4', NULL, NULL, '2020-10-02 04:09:47', '2020-10-02 04:09:47', NULL),
(81, 20, 26, 3, 'The Hierarchy of Evidence', 'SQoON7wOF5ZMLo6hialt1fxpFbHUHTah9anPKdwo.mp4', NULL, NULL, '2020-10-02 04:14:49', '2020-10-02 04:14:49', NULL),
(82, 20, 26, 4, 'The Hierarchy of Evidence', 'LHEpEJmbx4guis0vDaeJfSXw8KCXqih3ZNlbK8X2.pdf', NULL, NULL, '2020-10-02 04:15:07', '2020-10-02 04:15:07', NULL),
(83, 20, 26, 3, 'Beginning your Research', '0DGtj6QsqjLZNsP7YspOQF2u47QP1uxsuTHhfvEE.mp4', NULL, NULL, '2020-10-02 04:16:09', '2020-10-02 04:16:09', NULL),
(84, 20, 26, 4, 'Defining your Terms', 'FanAg8hKvKv3RpBlvZOmrouh7sPKGboTKXSnw7mr.pdf', NULL, NULL, '2020-10-02 04:16:29', '2020-10-02 04:16:29', NULL),
(85, 20, 26, 3, 'Using Books', 'VtAMwt0RqU1luM5NakoNQFcSkkERnjJLBXeQjVBZ.mp4', NULL, NULL, '2020-10-02 04:17:24', '2020-10-02 04:17:24', NULL),
(86, 20, 26, 3, 'Creating a Narrative', 'EwOghinz9hZftwB42ssQmuXYOIEFnW11GO3RuwTH.mp4', NULL, NULL, '2020-10-02 04:18:06', '2020-10-02 04:18:06', NULL),
(87, 20, 26, 3, 'Framework', 'h7HmJqlLypJqIn0el88LuJjZVPsPeFG351sc8F1v.mp4', NULL, NULL, '2020-10-02 04:19:21', '2020-10-02 04:19:21', NULL),
(88, 20, 26, 4, 'Example Frameworks', 'yuqi3ZhYMYuqz4dR8kXKKcZsC0WMGpuTSDwYiPX4.pdf', NULL, NULL, '2020-10-02 04:20:26', '2020-10-02 04:20:26', NULL),
(89, 20, 26, 3, 'Effectively Using Your Voice and Body Language', '9exGLjc2ayCj751IqvllSh4EgY190Nh97CzvMYE1.mp4', NULL, NULL, '2020-10-02 04:21:20', '2020-10-02 04:21:20', NULL),
(90, 20, 34, 3, 'Introduction to Chapter Three', 'YGg7D4x9J9kDFgK2Tbb0hIUAiK69iItQF94Ex3tS.mp4', NULL, NULL, '2020-10-02 04:22:51', '2020-10-02 04:22:51', NULL),
(91, 20, 34, 3, 'Types of Attacks', 'OJdFdRlptEKgTcrSuKU4Bs0VvfdUrN8QVdlXQrDd.mp4', NULL, NULL, '2020-10-02 04:23:57', '2020-10-02 04:23:57', NULL),
(92, 20, 34, 3, 'Structure of the Rebuttal Speech', 'fRHeVXbwwQxcu6NOn61wv7AINfQQJXpH4Q7agNRQ.mp4', NULL, NULL, '2020-10-02 04:25:13', '2020-10-02 04:25:13', NULL),
(93, 20, 34, 4, 'Rebuttal Speech Worksheet', 'x5Qh9ptCgUgsBXJF7kjGn2If9bjGaPriApN7Hddf.pdf', NULL, NULL, '2020-10-02 04:25:33', '2020-10-02 04:25:33', NULL),
(94, 20, 34, 3, 'Preparing Your Rebuttal Outside the Round', 'VaL7wZQDSM5HWPTuzjNRunS0rgMdhZBG8W82bmiL.mp4', NULL, NULL, '2020-10-02 04:26:30', '2020-10-02 04:26:30', NULL),
(95, 20, 34, 3, 'Preparing Your Rebuttal During the Round', 'MWrAbIMsxBo6K0fuhYkhoz0nAj5D8QTb2QmclPOb.mp4', NULL, NULL, '2020-10-02 04:27:48', '2020-10-02 04:27:48', NULL),
(96, 20, 35, 3, 'Introduction to Chapter Four', 'Mw31VPqBAGGl6k7sLVJqywrqvOEu06yKriQYSRK2.mp4', NULL, NULL, '2020-10-02 04:28:32', '2020-10-02 04:35:42', '2020-10-02 04:35:42'),
(97, 20, 35, 3, 'Elements of the Summary Speech', 'DSaUBWvOCbhFZGuUmYIORL4W0EXBzikku251skfJ.mp4', NULL, NULL, '2020-10-02 04:29:32', '2020-10-02 04:35:43', '2020-10-02 04:35:43'),
(98, 20, 35, 3, 'Case Extensions', 'uhpyS3YTHcTwqDPjJLIej9QQxhe5KbcU1LEOS9j8.mp4', NULL, NULL, '2020-10-02 04:30:28', '2020-10-02 04:35:44', '2020-10-02 04:35:44'),
(99, 20, 35, 3, 'Impact Weighing', 'YYaUtxs6mk3rgEHNsvxIZspn9rErKPQVUe5ztpX7.mp4', NULL, NULL, '2020-10-02 04:31:29', '2020-10-02 04:35:57', '2020-10-02 04:35:57'),
(100, 20, 35, 3, 'Crystallization', 'UXKXu7TQhGT3x1CLq65i6KGhYwvtgsqjLyplsPw0.mp4', NULL, NULL, '2020-10-02 04:31:59', '2020-10-02 04:35:51', '2020-10-02 04:35:51'),
(101, 20, 35, 3, 'Partner Communication', 'qp7VaEE4N9PRXHkM6zaK6EDI6jesKKKfZnWLvXYj.mp4', NULL, NULL, '2020-10-02 04:32:34', '2020-10-02 04:35:52', '2020-10-02 04:35:52'),
(102, 20, 35, 3, 'The Difference Between Summary and Final Focus', 'klHRhlnAztl6j6IcgBmGkBqGk2Lc0jNIFtSiZxdb.mp4', NULL, NULL, '2020-10-02 04:33:56', '2020-10-02 04:35:50', '2020-10-02 04:35:50'),
(103, 21, 28, 3, 'Introducing Your Speeches', 'UGsss4xz29Ucwc2eawctnOcIqufyzDpYMxQuMxXK.mp4', NULL, NULL, '2020-10-02 04:56:52', '2020-10-02 04:56:52', NULL),
(104, 21, 28, 3, 'Creating Effective Definitions and Models', 'Gmox8fz99q9JC6whX3sfU7zk7aCOkjQxY7JVHSGe.mp4', NULL, NULL, '2020-10-02 05:00:22', '2020-10-02 05:00:22', NULL),
(105, 21, 28, 3, 'Signposting and Creating Contentions', '8e5OkWIeE6R1lISIyuMrhn29R7u9pWtONPKHRlNc.mp4', NULL, NULL, '2020-10-02 05:04:05', '2020-10-02 05:04:05', NULL),
(106, 21, 28, 3, 'Creating Constructive Material', 'Smzzsh3vyOPBSuC26Im2KcG6K8G0vQmpEdXFuiwW.mp4', NULL, NULL, '2020-10-02 05:06:47', '2020-10-02 05:06:47', NULL),
(107, 21, 28, 3, 'Creating Stronger Constructive Arguments', 'qsJNf0mAaBE4VnhVIUVq2ne4ngWkvgAxH9Q9usfJ.mp4', NULL, NULL, '2020-10-02 05:09:11', '2020-10-02 05:09:11', NULL),
(108, 21, 28, 3, 'Maximizing Constructive Material', 'ET4oOdxeVX3031WIq7cWn9Y3mxPBDjrbe05SCDzu.mp4', NULL, NULL, '2020-10-02 05:11:50', '2020-10-02 05:11:50', NULL),
(109, 21, 36, 3, 'POIs (giving and taking)', '3fm7muMttOCgYMSPrHgu0SfO95Ng3Pz1nX6xCuXE.mp4', NULL, NULL, '2020-10-03 03:35:46', '2020-10-03 03:35:46', NULL),
(110, 21, 36, 3, 'Introduction to Clash', 'wBEV97G3IvQW8QxmS7bFPI31qV437YSRu4Kmnbbb.mp4', NULL, NULL, '2020-10-03 03:38:20', '2020-10-03 03:38:20', NULL),
(111, 21, 36, 3, 'Effective Clash', 'exSjo7Bn9fGI9UAMJ98W2OftYs48ZWvuopRcvWrY.mp4', NULL, NULL, '2020-10-03 03:40:13', '2020-10-03 03:40:13', NULL),
(112, 21, 36, 3, 'Introduction to Rebuttal', 'FdLfycs5l0Kt71s5rdecN94zdWgeSsOypYBvk5Iy.mp4', NULL, NULL, '2020-10-03 03:42:57', '2020-10-03 03:42:57', NULL),
(113, 21, 36, 3, 'Thematic Rebuttal', 'Js8wwkIJ9UpVrkp2i2Vqlz2PZtocr42cxECblPEz.mp4', NULL, NULL, '2020-10-03 03:44:45', '2020-10-03 03:44:45', NULL),
(114, 21, 37, 3, 'Introduction to Impromptu Debate', '8EqlazoGArKJiHdV7C4i24stWNC05a1x8w3g0ybh.mp4', NULL, NULL, '2020-10-03 03:47:44', '2020-10-03 03:47:44', NULL),
(115, 21, 37, 3, 'Types of Impromptu Resolutions', '0vi0dmKHb4SVMUf7sfhEya7VnHwgAIVxG1Jffj8f.mp4', NULL, NULL, '2020-10-03 03:52:14', '2020-10-03 03:52:14', NULL),
(116, 21, 37, 3, 'Speaking Skills', 'jN2U2HyDRq6oFSUFXbQOQDCYY1rSRohC3urAseWM.mp4', NULL, NULL, '2020-10-03 03:55:18', '2020-10-03 03:55:18', NULL),
(117, 21, 38, 3, 'Framing a Debate', 'oeThwvYxVdeCDyZPM4Df2iDahFDMXhFLwuHHf6NE.mp4', NULL, NULL, '2020-10-03 04:01:04', '2020-10-03 04:01:04', NULL),
(118, 21, 38, 3, 'Assesing the Impact of Arguments', 'rLhEmmFHziSwYTCTgHmvs5mJK0InRrwB9NFtxVBy.mp4', NULL, NULL, '2020-10-03 04:04:15', '2020-10-03 04:04:15', NULL),
(119, 21, 38, 3, 'Actors Rebuttal', 'hLwVSHrDc4ZEoww1lqpvXTdxZXGI8O2Ns2Ua8v7Q.mp4', NULL, NULL, '2020-10-03 04:07:43', '2020-10-03 04:07:43', NULL),
(120, 21, 38, 3, 'Researching for a Debate', 'zd649VmQ4bKnFibKz3FY3UcDs0NkK7uQwlmMtJqt.mp4', NULL, NULL, '2020-10-03 04:10:19', '2020-10-03 04:10:19', NULL),
(121, 21, 38, 3, 'Current Events + Integrating Research', 'SgpkAR43ndT9kJHCcwfgDKWJBenOEdmyrh3Puxcg.mp4', NULL, NULL, '2020-10-03 04:13:57', '2020-10-03 04:13:57', NULL),
(122, 21, 38, 3, 'What is squirrelling?', 'Q5bxUg5yk7pwgAH4rFIZ562GVcYU3wNDnvHweofH.mp4', NULL, NULL, '2020-10-03 04:17:32', '2020-10-03 04:17:32', NULL),
(123, 20, 35, 3, 'Introduction to Chapter Four', 'ZCwoXzNyxMiTPZtugLhcC8rMaEmgeFa5RHyFnWTU.mp4', NULL, NULL, '2020-10-03 04:19:38', '2020-10-03 04:19:38', NULL),
(124, 20, 35, 3, 'Elements of the Summary Speech', 'povxiwFo5tQGfeeD0OIlvxhS5DUjaRjJqWfHzxdF.mp4', NULL, NULL, '2020-10-03 04:20:19', '2020-10-03 04:20:19', NULL),
(125, 20, 35, 3, 'Case Extensions', 'GsIz8mZ8AGzh9BQ6Y5L1SNZAJdK9UdWKkwuSC6jG.mp4', NULL, NULL, '2020-10-03 04:21:10', '2020-10-03 04:21:10', NULL),
(126, 20, 35, 3, 'Impact Weighing', 'Wwz1CGxS5t2P19qbs33uSyQPjCZISDZgAK81E7cm.mp4', NULL, NULL, '2020-10-03 04:22:14', '2020-10-03 04:22:14', NULL),
(127, 20, 35, 3, 'Crystallization', 'kA4uJpegrE86HcpfgKMVaIGC7J9QY8a7G8PKersF.mp4', NULL, NULL, '2020-10-03 04:23:06', '2020-10-03 04:23:06', NULL),
(128, 20, 35, 3, 'Partner Communication', 'IpjjyII4y6xjL2iasg8YLucxiHDbLC5SCKVLvris.mp4', NULL, NULL, '2020-10-03 04:24:08', '2020-10-03 04:24:08', NULL),
(129, 20, 35, 3, 'The Difference Between Summary and Final Focus', '2yaRgxWLu79GYbM7ZG3Y4JT0Vg1e1IdgoeHOMQJa.mp4', NULL, NULL, '2020-10-03 04:25:29', '2020-10-03 04:25:29', NULL),
(130, 25, 39, 3, 'Intro to Chapter One', 's4r91xWL6zF86vEAsyM1KEtSs6QBhT0tIO28flv5.mp4', NULL, NULL, '2020-10-08 06:56:48', '2020-10-08 06:56:48', NULL),
(131, 25, 39, 3, 'What is Poetry & Prose?', 'Do1i2JJxUYNklOKq3RNcACykROwulouVLd9f9ow2.mp4', NULL, NULL, '2020-10-08 06:57:30', '2020-10-08 06:57:30', NULL),
(132, 25, 39, 3, 'Unique Features of Poetry & Prose', 'zlb1O8zk3ELMuPpfYnKn6QX3Cxnw88J8mX3NNDOI.mp4', NULL, NULL, '2020-10-08 06:58:16', '2020-10-08 06:58:16', NULL),
(133, 25, 39, 3, 'Benefits of Poetry & Prose', 'E3HIwuoFA0j4h8jeO3LK8za3LszZeO4DLENmn4h6.mp4', NULL, NULL, '2020-10-08 06:58:53', '2020-10-08 06:58:53', NULL),
(134, 25, 39, 3, 'Competition Format', 'bX18sJnc5MVw3L0Epc3h5KbXgbzKps3Wd53VfAC2.mp4', NULL, NULL, '2020-10-08 06:59:38', '2020-10-08 06:59:38', NULL),
(135, 25, 40, 3, 'Introduction to Chapter Two', 'ssLBvJY9mZUKCH8VVbnuUSWxFWgDNSNPL3T4iZrY.mp4', NULL, NULL, '2020-10-08 07:00:03', '2020-10-08 07:00:03', NULL),
(136, 25, 40, 3, 'How to Choose Pieces for Performance', 'zTlqEyZlSoHIVmA6auzD0Mr5eSZMpyvennCtzsCa.mp4', NULL, NULL, '2020-10-08 07:00:50', '2020-10-08 07:00:50', NULL),
(137, 25, 40, 3, 'Writing the Intro', 'AORcB6lJeEBybgqQhsuwtkOo5AIunKnc9ZZGPmo2.mp4', NULL, NULL, '2020-10-08 07:01:28', '2020-10-08 07:01:28', NULL),
(138, 25, 40, 3, 'Introduction Case Study', 'h1QZLN2h1Fhxc1RF1xZAKRmjRzT6nnYsW5WBnMPy.mp4', NULL, NULL, '2020-10-08 07:03:04', '2020-10-08 07:03:04', NULL),
(139, 25, 41, 3, 'Intro to Chapter Three', '7q95oNYFLKWhePR915ilZxtZ8JGovPyOZva2oqSb.mp4', NULL, NULL, '2020-10-08 07:03:50', '2020-10-08 07:03:50', NULL),
(140, 25, 41, 3, 'Voice Projection', 'OYSe3mcMSKceGMuO2e6WfF81gagI24PZIJk3Qruc.mp4', NULL, NULL, '2020-10-08 07:04:40', '2020-10-08 07:04:40', NULL),
(141, 25, 41, 3, 'Accentuation', '02GDaFoYtUOfbePOJBMw09Sa7CceAuKzWNIa3ziS.mp4', NULL, NULL, '2020-10-08 07:05:57', '2020-10-08 07:05:57', NULL),
(142, 25, 41, 3, 'Gestures', 'McYmgTQdnXS6AkMUHbOTMsAC4fdCbKgORrt0yiI1.mp4', NULL, NULL, '2020-10-08 07:06:56', '2020-10-08 07:06:56', NULL),
(143, 25, 41, 3, 'Facial Expressions', 'F1E0rDxgkehmpVe7Z0TwqS52GGqgB1FCpD7CTBms.mp4', NULL, NULL, '2020-10-08 07:07:50', '2020-10-08 07:07:50', NULL),
(144, 25, 41, 3, 'Extra Tips', '1QJnoCFMp7N2lRpxzFCmUu8U2miXdqTo2LKA06C4.mp4', NULL, NULL, '2020-10-08 07:08:32', '2020-10-08 07:08:32', NULL),
(145, 25, 42, 3, 'Introduction to Chapter Four', 'yBcSDJ0h9khC3XuWjwuFXYMRb9NWhLEXdVby1sQK.mp4', NULL, NULL, '2020-10-08 07:09:06', '2020-10-08 07:09:06', NULL),
(146, 25, 42, 3, 'Annotations', 'EecZAbyFan0cLz00VhikWJbtEOt3nQAogYkVKGan.mp4', NULL, NULL, '2020-10-08 07:10:03', '2020-10-08 07:10:03', NULL),
(147, 25, 42, 3, 'Types of Symbols', 'RobEk4wP3DiTMNfoiC6lMX9mEMXREeUuMIvua6a0.mp4', NULL, NULL, '2020-10-08 07:11:23', '2020-10-08 07:11:23', NULL),
(148, 25, 42, 3, 'Annotations Case Study', 'CoxIbqM9BWex18PCEfc8D2iAQlI7YQ0958gDyNMr.mp4', NULL, NULL, '2020-10-08 07:11:57', '2020-10-08 07:11:57', NULL),
(149, 25, 43, 4, 'Speech Etiquette', 'pjJq4jvCXMHH8TYLbxMwYBt4Rlhod9D8irAWL577.pdf', NULL, NULL, '2020-10-08 07:12:28', '2020-10-08 07:12:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_ratings`
--

CREATE TABLE `course_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_ratings`
--

INSERT INTO `course_ratings` (`id`, `course_id`, `user_id`, `review`, `rate`, `created_at`, `updated_at`) VALUES
(17, 20, 72, 'Awesome Course', 5, '2020-09-04 01:00:06', '2020-09-04 01:00:06'),
(18, 18, 122, NULL, 5, '2020-09-04 01:16:51', '2020-09-04 01:16:51'),
(19, 22, 122, 'Thanks for a great course, Jeremy!', 5, '2020-09-04 01:17:08', '2020-09-04 01:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 7, 98, NULL, NULL),
(22, 8, 122, NULL, NULL),
(23, 9, 122, NULL, NULL),
(24, 10, 101, NULL, NULL),
(25, 11, 52, NULL, NULL),
(26, 11, 122, NULL, NULL),
(27, 13, 122, NULL, NULL),
(28, 13, 98, NULL, NULL),
(29, 15, 122, NULL, NULL),
(30, 15, 98, NULL, NULL),
(31, 18, 122, NULL, NULL),
(32, 20, 122, NULL, NULL),
(33, 20, 101, NULL, NULL),
(34, 20, 190, NULL, NULL),
(35, 21, 190, NULL, NULL),
(36, 22, 190, NULL, NULL),
(37, 20, 98, NULL, NULL),
(38, 22, 189, NULL, NULL),
(39, 22, 52, NULL, NULL),
(40, 20, 191, NULL, NULL),
(41, 22, 122, NULL, NULL),
(42, 22, 204, NULL, NULL),
(43, 21, 98, NULL, NULL),
(44, 21, 145, NULL, NULL),
(45, 22, 145, NULL, NULL),
(46, 22, 210, NULL, NULL),
(47, 20, 72, NULL, NULL),
(48, 22, 220, NULL, NULL),
(49, 22, 138, NULL, NULL),
(50, 20, 138, NULL, NULL),
(51, 21, 138, NULL, NULL),
(52, 25, 138, NULL, NULL),
(53, 22, 230, NULL, NULL),
(54, 22, 230, NULL, NULL),
(55, 21, 122, NULL, NULL),
(56, 22, 258, NULL, NULL),
(57, 25, 262, NULL, NULL),
(58, 20, 243, NULL, NULL),
(59, 21, 273, NULL, NULL),
(60, 25, 274, NULL, NULL),
(61, 21, 234, NULL, NULL),
(62, 25, 275, NULL, NULL),
(63, 25, 276, NULL, NULL),
(64, 21, 235, NULL, NULL),
(65, 22, 283, NULL, NULL),
(66, 22, 287, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'monday', '2020-02-11 19:00:00', '2020-02-11 19:00:00'),
(2, 'tuesday', '2020-02-11 19:00:00', '2020-02-11 19:00:00'),
(3, 'wednesday', '2020-02-11 19:00:00', '2020-02-11 19:00:00'),
(4, 'thursday', '2020-02-11 19:00:00', '2020-02-11 19:00:00'),
(5, 'friday', '2020-02-11 19:00:00', '2020-02-11 19:00:00'),
(6, 'saturday', '2020-02-11 19:00:00', '2020-02-11 19:00:00'),
(7, 'sunday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `debates`
--

CREATE TABLE `debates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anonymous` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `debates`
--

INSERT INTO `debates` (`id`, `user_id`, `slug`, `topic`, `description`, `image`, `anonymous`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 52, 'all-private-healthcare-systems-should-be-banned-in-favour-of-comprehensive-public-healthcare-systems', 'All private healthcare systems should be banned in favour of comprehensive public healthcare systems.', 'N/A', NULL, 1, '2020-06-05 05:31:55', '2020-06-08 09:58:19', '2020-06-08 09:58:19'),
(2, 87, 'pregnant-woman-should-be-banned-from-fast-food-restaurants', 'Pregnant woman should be banned from fast food restaurants', 'Any opinions', NULL, 1, '2020-05-30 11:46:01', '2020-05-31 21:09:38', '2020-05-31 21:09:38'),
(4, 87, 'all-schools-should-be-privatized', 'All schools should be privatized', 'Privatize schools so education is better', NULL, 1, '2020-06-07 05:39:38', '2020-06-08 09:58:20', '2020-06-08 09:58:20'),
(5, 100, 'a', 'a', 'a', NULL, 1, '2020-06-08 09:19:14', '2020-06-08 09:58:21', '2020-06-08 09:58:21'),
(6, 95, 'all-private-healthcare-systems-should-be-banned-in-favour-of-comprehensive-public-healthcare-systems', 'All private healthcare systems should be banned in favour of comprehensive public healthcare systems.', 'Public healthcare is the way of the future. Countries with any form of private healthcare would be better off switching to publicly funded services.', 'https://talkmaze.com/storage/storage/hnEaDQk6E3PV39nsNvRiB0hyWaABJnSVzWaQSIoO.jpeg', 1, '2020-06-08 10:09:32', '2020-06-09 03:05:31', NULL),
(7, 100, 'adults-should-have-the-right-to-carry-a-concealed-handgun', 'Adults should have the right to carry a concealed handgun.', 'It is important to give every adult the right to have a handgun.', 'https://talkmaze.com/storage/storage/0QA7X6wcT8SIcccKiRg6d79XoFW2piuoAXqlkwAR.jpeg', 1, '2020-06-08 10:16:21', '2020-06-09 03:05:04', NULL),
(8, 101, 'federal-election-day-should-be-made-a-national-holiday', 'Federal election day should be made a national holiday.', 'We must increase voter turnout.', 'https://talkmaze.com/storage/storage/imBqqFjv7X4aLFDQK3MY9kAu80uSItLUA1jykRac.jpeg', NULL, '2020-06-08 10:19:49', '2020-06-09 03:06:06', NULL),
(9, 95, 'the-world-is-a-better-place-now-than-it-will-be-in-100-years', 'The world is a better place now than it will be in 100 years.', 'It is impossible for Earth to be in a better stage 100 years from now.', 'https://talkmaze.com/storage/storage/GS5L9A7Pj4oBeWwRF8AfUVeseAwDUliIIITROSze.jpeg', NULL, '2020-06-08 10:24:00', '2020-06-09 03:05:45', NULL),
(10, 95, 'should-marijuana-be-legalized', 'Should marijuana be legalized?', 'More and more countries are legalizing marijuana each year. Is this the right way to go?', 'https://talkmaze.com/storage/storage/ZQovK1kwxy2vQWD3ObGgp2gZrMYFnmfcMP8ybGnA.jpeg', 1, '2020-06-08 10:31:04', '2020-06-09 03:03:39', NULL),
(11, 139, 'the-death-penalty-should-be-abolished', 'The death penalty should be abolished.', 'Do you think it\'s morally correct to give someone a death penalty?', 'https://talkmaze.com/storage/storage/zX8hFM2z1XRifSkdq1kqHC0dDswqG0zMqARJzqym.jpeg', 1, '2020-06-19 02:40:55', '2020-06-19 11:00:56', NULL),
(12, 126, 'abortion-should-be-made-illegal', 'Abortion should be made illegal.', 'Are you pro-choice or pro-life?', 'https://talkmaze.com/storage/storage/k3dmMU5H4zfDkNTKcuISnK36ho2tbgHCtiU7rlq6.jpeg', 1, '2020-06-19 02:44:13', '2020-06-19 11:05:00', NULL),
(13, 101, 'test-debate', 'Test debate', 'test', NULL, 1, '2020-06-19 08:58:58', '2020-06-19 08:59:36', '2020-06-19 08:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `demo_requests`
--

CREATE TABLE `demo_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orgname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalstudents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demo_requests`
--

INSERT INTO `demo_requests` (`id`, `fname`, `lname`, `email`, `phone`, `orgname`, `totalstudents`, `aboutus`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ghalia', 'Aamer', 'talkmaze@gmail.com', '7809746481', 'TalkMaze', NULL, NULL, NULL, '2020-09-14 23:50:41', '2020-09-14 23:50:41'),
(2, 'Khadija', 'Nasir', 'kdja2818@gmail.com', '3318938108', NULL, NULL, 'Instagram', NULL, '2020-09-26 12:20:41', '2020-09-26 12:20:41'),
(3, 'Amma', 'Noor', 'nooramna790@gmail.com', '03134911298', NULL, NULL, 'Instagram', NULL, '2020-09-27 01:42:34', '2020-09-27 01:42:34'),
(4, 'Muhammad salman', 'Siddiqui', 'drsalmansiddiqi@yahoo.com', '4388721244', NULL, '2', 'Friend', NULL, '2020-10-23 22:49:14', '2020-10-23 22:49:14'),
(5, 'Margaret', 'Gorman', 'Mugs2367@gmail.com', '8574453861', NULL, NULL, NULL, NULL, '2020-10-29 05:27:17', '2020-10-29 05:27:17'),
(6, 'Malika', 'Almutairi', 'Malikalmutairi@gmail.com', '0557774198', NULL, NULL, NULL, NULL, '2020-11-23 21:31:48', '2020-11-23 21:31:48'),
(7, 'Arsh', 'Deol', 'arshi7824@gmail.com', '7808023112', NULL, '1', NULL, NULL, '2020-11-28 08:56:38', '2020-11-28 08:56:38'),
(8, 'gorbysyd', 'gorbysyd', 'gorby.pred@bk.ru', '86993772434', 'gorbysyd', 'gorbytvx', 'Google', NULL, '2021-01-02 10:11:37', '2021-01-02 10:11:37'),
(9, 'Mopsulgov', 'Mopsulgov', 'opsul@bk.ru', '81934695941', 'Mopsulgov', 'Mopsulsbw', 'Google', NULL, '2021-01-09 04:04:50', '2021-01-09 04:04:50'),
(10, 'Cindy', 'Wu', 'crry1998@gmail.com', '7806669939', NULL, NULL, NULL, NULL, '2021-01-20 03:03:57', '2021-01-20 03:03:57'),
(11, 'JamesWeast', 'JamesWeast', 'garri.yermakov.877@mail.ru', '85721627849', 'JamesWeast', 'JamesWeast', 'Google', NULL, '2021-07-06 19:18:20', '2021-07-06 19:18:20'),
(12, 'Test', 'Test', 'test@demorequest.com', '23423423423', 'ksld', '5', 'website', NULL, '2021-07-09 09:06:05', '2021-07-09 09:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `discount_codes`
--

CREATE TABLE `discount_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `discount_type` int(11) NOT NULL,
  `code_type` int(11) NOT NULL,
  `valid_through` datetime NOT NULL,
  `data_id` bigint(20) UNSIGNED DEFAULT NULL,
  `number_of_use` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_codes`
--

INSERT INTO `discount_codes` (`id`, `code`, `discount`, `discount_type`, `code_type`, `valid_through`, `data_id`, `number_of_use`, `created_at`, `updated_at`) VALUES
(1, 'SUMMER2020', 10, 1, 1, '2020-07-18 23:20:42', 528, 3, NULL, NULL),
(2, 'FreeForever2020', 100, 1, 1, '2039-10-29 01:34:39', NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_user`
--

CREATE TABLE `enrolled_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_plan_id` smallint(5) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolled_user`
--

INSERT INTO `enrolled_user` (`id`, `class_plan_id`, `user_id`, `is_paid`, `amount`, `created_at`, `updated_at`) VALUES
(11, 42, 52, 1, 200.00, NULL, NULL),
(12, 43, 52, 1, 200.00, NULL, NULL),
(13, 44, 52, 1, 200.00, NULL, NULL),
(14, 45, 52, 1, 200.00, NULL, NULL),
(15, 46, 52, 1, 200.00, NULL, NULL),
(16, 47, 52, 1, 200.00, NULL, NULL),
(17, 48, 52, 1, 200.00, NULL, NULL),
(18, 49, 52, 1, 200.00, NULL, NULL),
(19, 50, 52, 1, 200.00, NULL, NULL),
(20, 51, 52, 1, 200.00, NULL, NULL),
(21, 52, 52, 1, 200.00, NULL, NULL),
(22, 53, 52, 1, 200.00, NULL, NULL),
(23, 54, 52, 1, 200.00, NULL, NULL),
(24, 18, 52, 1, 80.00, NULL, NULL),
(25, 36, 52, 1, 80.00, NULL, NULL),
(26, 37, 52, 1, 80.00, NULL, NULL),
(27, 38, 52, 1, 80.00, NULL, NULL),
(28, 39, 52, 1, 80.00, NULL, NULL),
(29, 18, 87, 1, 80.00, NULL, NULL),
(30, 36, 87, 1, 80.00, NULL, NULL),
(31, 37, 87, 1, 80.00, NULL, NULL),
(32, 38, 87, 1, 80.00, NULL, NULL),
(33, 39, 87, 1, 80.00, NULL, NULL),
(42, 82, 72, 1, NULL, NULL, NULL),
(43, 95, 95, 1, 1.00, NULL, NULL),
(44, 96, 95, 1, 1.00, NULL, NULL),
(45, 97, 95, 1, 1.00, NULL, NULL),
(46, 98, 95, 1, 1.00, NULL, NULL),
(47, 99, 95, 1, 1.00, NULL, NULL),
(48, 100, 95, 1, 1.00, NULL, NULL),
(49, 101, 95, 1, 1.00, NULL, NULL),
(50, 102, 95, 1, 1.00, NULL, NULL),
(51, 103, 95, 1, 1.00, NULL, NULL),
(52, 104, 95, 1, 1.00, NULL, NULL),
(53, 105, 95, 1, 1.00, NULL, NULL),
(54, 106, 95, 1, 1.00, NULL, NULL),
(55, 115, 95, 1, 1.00, NULL, NULL),
(56, 116, 95, 1, 1.00, NULL, NULL),
(57, 117, 95, 1, 1.00, NULL, NULL),
(58, 118, 95, 1, 1.00, NULL, NULL),
(59, 119, 95, 1, NULL, NULL, NULL),
(60, 95, 72, 1, 1.00, NULL, NULL),
(61, 96, 72, 1, 1.00, NULL, NULL),
(62, 97, 72, 1, 1.00, NULL, NULL),
(63, 98, 72, 1, 1.00, NULL, NULL),
(64, 99, 72, 1, 1.00, NULL, NULL),
(65, 100, 72, 1, 1.00, NULL, NULL),
(66, 101, 72, 1, 1.00, NULL, NULL),
(67, 102, 72, 1, 1.00, NULL, NULL),
(68, 103, 72, 1, 1.00, NULL, NULL),
(69, 104, 72, 1, 1.00, NULL, NULL),
(70, 105, 72, 1, 1.00, NULL, NULL),
(71, 106, 72, 1, 1.00, NULL, NULL),
(72, 95, 52, 1, 0.00, NULL, NULL),
(73, 96, 52, 1, 0.00, NULL, NULL),
(74, 97, 52, 1, 0.00, NULL, NULL),
(75, 98, 52, 1, 0.00, NULL, NULL),
(76, 99, 52, 1, 0.00, NULL, NULL),
(77, 100, 52, 1, 0.00, NULL, NULL),
(78, 101, 52, 1, 0.00, NULL, NULL),
(79, 102, 52, 1, 0.00, NULL, NULL),
(80, 103, 52, 1, 0.00, NULL, NULL),
(81, 104, 52, 1, 0.00, NULL, NULL),
(82, 105, 52, 1, 0.00, NULL, NULL),
(83, 106, 52, 1, 0.00, NULL, NULL),
(84, 209, 109, 1, 0.00, NULL, NULL),
(85, 210, 109, 1, 0.00, NULL, NULL),
(86, 211, 109, 1, 0.00, NULL, NULL),
(87, 212, 109, 1, 0.00, NULL, NULL),
(88, 213, 109, 1, 0.00, NULL, NULL),
(89, 214, 109, 1, 0.00, NULL, NULL),
(90, 215, 109, 1, 0.00, NULL, NULL),
(91, 216, 109, 1, 0.00, NULL, NULL),
(92, 217, 109, 1, 0.00, NULL, NULL),
(93, 218, 109, 1, 0.00, NULL, NULL),
(94, 219, 109, 1, 0.00, NULL, NULL),
(95, 220, 109, 1, 0.00, NULL, NULL),
(96, 254, 87, 1, 1.00, NULL, NULL),
(97, 255, 87, 1, 1.00, NULL, NULL),
(98, 256, 87, 1, 1.00, NULL, NULL),
(99, 257, 87, 1, 1.00, NULL, NULL),
(100, 254, 112, 1, 1.00, NULL, NULL),
(101, 255, 112, 1, 1.00, NULL, NULL),
(102, 256, 112, 1, 1.00, NULL, NULL),
(103, 257, 112, 1, 1.00, NULL, NULL),
(104, 254, 111, 1, 1.00, NULL, NULL),
(105, 255, 111, 1, 1.00, NULL, NULL),
(106, 256, 111, 1, 1.00, NULL, NULL),
(107, 257, 111, 1, 1.00, NULL, NULL),
(108, 254, 101, 1, 1.00, NULL, NULL),
(109, 255, 101, 1, 1.00, NULL, NULL),
(110, 256, 101, 1, 1.00, NULL, NULL),
(111, 257, 101, 1, 1.00, NULL, NULL),
(112, 254, 109, 1, 1.00, NULL, NULL),
(113, 255, 109, 1, 1.00, NULL, NULL),
(114, 256, 109, 1, 1.00, NULL, NULL),
(115, 257, 109, 1, 1.00, NULL, NULL),
(116, 209, 87, 1, 0.00, NULL, NULL),
(117, 210, 87, 1, 0.00, NULL, NULL),
(118, 211, 87, 1, 0.00, NULL, NULL),
(119, 212, 87, 1, 0.00, NULL, NULL),
(120, 213, 87, 1, 0.00, NULL, NULL),
(121, 214, 87, 1, 0.00, NULL, NULL),
(122, 215, 87, 1, 0.00, NULL, NULL),
(123, 216, 87, 1, 0.00, NULL, NULL),
(124, 217, 87, 1, 0.00, NULL, NULL),
(125, 218, 87, 1, 0.00, NULL, NULL),
(126, 219, 87, 1, 0.00, NULL, NULL),
(127, 220, 87, 1, 0.00, NULL, NULL),
(128, 209, 112, 1, 0.00, NULL, NULL),
(129, 210, 112, 1, 0.00, NULL, NULL),
(130, 211, 112, 1, 0.00, NULL, NULL),
(131, 212, 112, 1, 0.00, NULL, NULL),
(132, 213, 112, 1, 0.00, NULL, NULL),
(133, 214, 112, 1, 0.00, NULL, NULL),
(134, 215, 112, 1, 0.00, NULL, NULL),
(135, 216, 112, 1, 0.00, NULL, NULL),
(136, 217, 112, 1, 0.00, NULL, NULL),
(137, 218, 112, 1, 0.00, NULL, NULL),
(138, 219, 112, 1, 0.00, NULL, NULL),
(139, 220, 112, 1, 0.00, NULL, NULL),
(140, 254, 109, 1, 1.00, NULL, NULL),
(141, 255, 109, 1, 1.00, NULL, NULL),
(142, 256, 109, 1, 1.00, NULL, NULL),
(143, 257, 109, 1, 1.00, NULL, NULL),
(144, 254, 110, 1, 10.00, NULL, NULL),
(145, 255, 110, 1, 10.00, NULL, NULL),
(146, 256, 110, 1, 10.00, NULL, NULL),
(147, 257, 110, 1, 10.00, NULL, NULL),
(148, 254, 109, 1, 10.00, NULL, NULL),
(149, 255, 109, 1, 10.00, NULL, NULL),
(150, 256, 109, 1, 10.00, NULL, NULL),
(151, 257, 109, 1, 10.00, NULL, NULL),
(152, 258, 87, 1, 0.00, NULL, NULL),
(153, 258, 112, 1, 0.00, NULL, NULL),
(154, 259, 87, 1, 0.00, NULL, NULL),
(155, 259, 112, 1, 0.00, NULL, NULL),
(156, 260, 87, 1, 0.00, NULL, NULL),
(157, 261, 87, 1, 0.00, NULL, NULL),
(158, 260, 112, 1, 0.00, NULL, NULL),
(159, 258, 111, 1, 0.00, NULL, NULL),
(160, 261, 112, 1, 0.00, NULL, NULL),
(161, 259, 111, 1, 0.00, NULL, NULL),
(162, 260, 111, 1, 0.00, NULL, NULL),
(163, 261, 111, 1, 0.00, NULL, NULL),
(164, 258, 87, 1, 0.00, NULL, NULL),
(165, 259, 87, 1, 0.00, NULL, NULL),
(166, 260, 87, 1, 0.00, NULL, NULL),
(167, 261, 87, 1, 0.00, NULL, NULL),
(168, 258, 109, 1, 0.00, NULL, NULL),
(169, 259, 109, 1, 0.00, NULL, NULL),
(170, 260, 109, 1, 0.00, NULL, NULL),
(171, 261, 109, 1, 0.00, NULL, NULL),
(172, 254, 113, 1, 10.00, NULL, NULL),
(173, 255, 113, 1, 10.00, NULL, NULL),
(174, 256, 113, 1, 10.00, NULL, NULL),
(175, 257, 113, 1, 10.00, NULL, NULL),
(176, 254, 113, 1, 10.00, NULL, NULL),
(177, 255, 113, 1, 10.00, NULL, NULL),
(178, 256, 113, 1, 10.00, NULL, NULL),
(179, 257, 113, 1, 10.00, NULL, NULL),
(180, 209, 113, 1, 0.00, NULL, NULL),
(181, 210, 113, 1, 0.00, NULL, NULL),
(182, 211, 113, 1, 0.00, NULL, NULL),
(183, 212, 113, 1, 0.00, NULL, NULL),
(184, 213, 113, 1, 0.00, NULL, NULL),
(185, 214, 113, 1, 0.00, NULL, NULL),
(186, 215, 113, 1, 0.00, NULL, NULL),
(187, 216, 113, 1, 0.00, NULL, NULL),
(188, 217, 113, 1, 0.00, NULL, NULL),
(189, 218, 113, 1, 0.00, NULL, NULL),
(190, 219, 113, 1, 0.00, NULL, NULL),
(191, 220, 113, 1, 0.00, NULL, NULL),
(192, 209, 72, 1, 0.00, NULL, NULL),
(193, 210, 72, 1, 0.00, NULL, NULL),
(194, 211, 72, 1, 0.00, NULL, NULL),
(195, 212, 72, 1, 0.00, NULL, NULL),
(196, 213, 72, 1, 0.00, NULL, NULL),
(197, 214, 72, 1, 0.00, NULL, NULL),
(198, 215, 72, 1, 0.00, NULL, NULL),
(199, 216, 72, 1, 0.00, NULL, NULL),
(200, 217, 72, 1, 0.00, NULL, NULL),
(201, 218, 72, 1, 0.00, NULL, NULL),
(202, 219, 72, 1, 0.00, NULL, NULL),
(203, 220, 72, 1, 0.00, NULL, NULL),
(204, 262, 116, 1, 0.00, NULL, NULL),
(205, 263, 116, 1, 0.00, NULL, NULL),
(206, 264, 116, 1, 0.00, NULL, NULL),
(207, 265, 116, 1, 0.00, NULL, NULL),
(208, 266, 116, 1, 0.00, NULL, NULL),
(209, 262, 115, 1, 0.00, NULL, NULL),
(210, 263, 115, 1, 0.00, NULL, NULL),
(211, 264, 115, 1, 0.00, NULL, NULL),
(212, 265, 115, 1, 0.00, NULL, NULL),
(213, 266, 115, 1, 0.00, NULL, NULL),
(214, 262, 115, 1, 0.00, NULL, NULL),
(215, 263, 115, 1, 0.00, NULL, NULL),
(216, 264, 115, 1, 0.00, NULL, NULL),
(217, 265, 115, 1, 0.00, NULL, NULL),
(218, 266, 115, 1, 0.00, NULL, NULL),
(219, 262, 98, 1, 0.00, NULL, NULL),
(220, 263, 98, 1, 0.00, NULL, NULL),
(221, 264, 98, 1, 0.00, NULL, NULL),
(222, 265, 98, 1, 0.00, NULL, NULL),
(223, 266, 98, 1, 0.00, NULL, NULL),
(224, 267, 98, 1, 0.00, NULL, NULL),
(225, 268, 98, 1, 0.00, NULL, NULL),
(226, 269, 98, 1, 0.00, NULL, NULL),
(227, 270, 98, 1, 0.00, NULL, NULL),
(228, 271, 98, 1, 0.00, NULL, NULL),
(229, 272, 98, 1, 0.00, NULL, NULL),
(230, 273, 98, 1, 0.00, NULL, NULL),
(231, 274, 98, 1, 0.00, NULL, NULL),
(232, 371, 95, 1, 0.00, NULL, NULL),
(233, 372, 95, 1, 0.00, NULL, NULL),
(234, 373, 95, 1, 0.00, NULL, NULL),
(235, 374, 95, 1, 0.00, NULL, NULL),
(236, 375, 95, 1, 0.00, NULL, NULL),
(237, 376, 95, 1, 0.00, NULL, NULL),
(238, 377, 95, 1, 0.00, NULL, NULL),
(239, 378, 95, 1, 0.00, NULL, NULL),
(240, 379, 95, 1, 0.00, NULL, NULL),
(241, 380, 95, 1, 0.00, NULL, NULL),
(242, 381, 95, 1, 0.00, NULL, NULL),
(243, 382, 95, 1, 0.00, NULL, NULL),
(244, 371, 98, 1, 0.00, NULL, NULL),
(245, 372, 98, 1, 0.00, NULL, NULL),
(246, 373, 98, 1, 0.00, NULL, NULL),
(247, 374, 98, 1, 0.00, NULL, NULL),
(248, 375, 98, 1, 0.00, NULL, NULL),
(249, 376, 98, 1, 0.00, NULL, NULL),
(250, 377, 98, 1, 0.00, NULL, NULL),
(251, 378, 98, 1, 0.00, NULL, NULL),
(252, 379, 98, 1, 0.00, NULL, NULL),
(253, 380, 98, 1, 0.00, NULL, NULL),
(254, 381, 98, 1, 0.00, NULL, NULL),
(255, 382, 98, 1, 0.00, NULL, NULL),
(256, 371, 98, 1, 0.00, NULL, NULL),
(257, 372, 98, 1, 0.00, NULL, NULL),
(258, 373, 98, 1, 0.00, NULL, NULL),
(259, 374, 98, 1, 0.00, NULL, NULL),
(260, 375, 98, 1, 0.00, NULL, NULL),
(261, 376, 98, 1, 0.00, NULL, NULL),
(262, 377, 98, 1, 0.00, NULL, NULL),
(263, 378, 98, 1, 0.00, NULL, NULL),
(264, 379, 98, 1, 0.00, NULL, NULL),
(265, 380, 98, 1, 0.00, NULL, NULL),
(266, 381, 98, 1, 0.00, NULL, NULL),
(267, 382, 98, 1, 0.00, NULL, NULL),
(268, 395, 95, 1, 0.00, NULL, NULL),
(269, 396, 95, 1, 0.00, NULL, NULL),
(270, 397, 95, 1, 0.00, NULL, NULL),
(271, 398, 95, 1, 0.00, NULL, NULL),
(272, 399, 95, 1, 0.00, NULL, NULL),
(273, 400, 95, 1, 0.00, NULL, NULL),
(274, 401, 95, 1, 0.00, NULL, NULL),
(275, 402, 95, 1, 0.00, NULL, NULL),
(276, 403, 95, 1, 0.00, NULL, NULL),
(277, 404, 95, 1, 0.00, NULL, NULL),
(278, 405, 95, 1, 0.00, NULL, NULL),
(279, 406, 95, 1, 0.00, NULL, NULL),
(280, 451, 98, 1, 0.00, NULL, NULL),
(281, 452, 98, 1, 0.00, NULL, NULL),
(282, 453, 98, 1, 0.00, NULL, NULL),
(283, 454, 98, 1, 0.00, NULL, NULL),
(284, 455, 98, 1, 0.00, NULL, NULL),
(285, 456, 98, 1, 0.00, NULL, NULL),
(286, 457, 98, 1, 0.00, NULL, NULL),
(287, 458, 98, 1, 0.00, NULL, NULL),
(288, 459, 98, 1, 0.00, NULL, NULL),
(289, 460, 98, 1, 0.00, NULL, NULL),
(290, 461, 98, 1, 0.00, NULL, NULL),
(291, 462, 98, 1, 0.00, NULL, NULL),
(292, 491, 98, 1, 0.00, NULL, NULL),
(293, 492, 98, 1, 0.00, NULL, NULL),
(294, 493, 98, 1, 0.00, NULL, NULL),
(295, 494, 98, 1, 0.00, NULL, NULL),
(296, 495, 98, 1, 0.00, NULL, NULL),
(297, 496, 98, 1, 0.00, NULL, NULL),
(298, 497, 98, 1, 0.00, NULL, NULL),
(299, 498, 98, 1, 0.00, NULL, NULL),
(300, 499, 98, 1, 0.00, NULL, NULL),
(301, 500, 98, 1, 0.00, NULL, NULL),
(302, 501, 98, 1, 0.00, NULL, NULL),
(303, 502, 98, 1, 0.00, NULL, NULL),
(304, 487, 123, 1, 0.00, NULL, NULL),
(305, 488, 123, 1, 0.00, NULL, NULL),
(306, 489, 123, 1, 0.00, NULL, NULL),
(307, 490, 123, 1, 0.00, NULL, NULL),
(308, 487, 124, 1, 0.00, NULL, NULL),
(309, 488, 124, 1, 0.00, NULL, NULL),
(310, 489, 124, 1, 0.00, NULL, NULL),
(311, 490, 124, 1, 0.00, NULL, NULL),
(312, 475, 98, 1, 0.00, NULL, NULL),
(313, 476, 98, 1, 0.00, NULL, NULL),
(314, 477, 98, 1, 0.00, NULL, NULL),
(315, 478, 98, 1, 0.00, NULL, NULL),
(316, 480, 98, 1, 0.00, NULL, NULL),
(317, 481, 98, 1, 0.00, NULL, NULL),
(318, 482, 98, 1, 0.00, NULL, NULL),
(319, 483, 98, 1, 0.00, NULL, NULL),
(320, 484, 98, 1, 0.00, NULL, NULL),
(321, 485, 98, 1, 0.00, NULL, NULL),
(322, 486, 98, 1, 0.00, NULL, NULL),
(323, 491, 125, 1, 0.00, NULL, NULL),
(324, 492, 125, 1, 0.00, NULL, NULL),
(325, 493, 125, 1, 0.00, NULL, NULL),
(326, 494, 125, 1, 0.00, NULL, NULL),
(327, 495, 125, 1, 0.00, NULL, NULL),
(328, 496, 125, 1, 0.00, NULL, NULL),
(329, 497, 125, 1, 0.00, NULL, NULL),
(330, 498, 125, 1, 0.00, NULL, NULL),
(331, 499, 125, 1, 0.00, NULL, NULL),
(332, 500, 125, 1, 0.00, NULL, NULL),
(333, 501, 125, 1, 0.00, NULL, NULL),
(334, 502, 125, 1, 0.00, NULL, NULL),
(335, 491, 126, 1, 0.00, NULL, NULL),
(336, 492, 126, 1, 0.00, NULL, NULL),
(337, 493, 126, 1, 0.00, NULL, NULL),
(338, 494, 126, 1, 0.00, NULL, NULL),
(339, 495, 126, 1, 0.00, NULL, NULL),
(340, 496, 126, 1, 0.00, NULL, NULL),
(341, 497, 126, 1, 0.00, NULL, NULL),
(342, 498, 126, 1, 0.00, NULL, NULL),
(343, 499, 126, 1, 0.00, NULL, NULL),
(344, 500, 126, 1, 0.00, NULL, NULL),
(345, 501, 126, 1, 0.00, NULL, NULL),
(346, 502, 126, 1, 0.00, NULL, NULL),
(347, 491, 128, 1, 0.00, NULL, NULL),
(348, 492, 128, 1, 0.00, NULL, NULL),
(349, 493, 128, 1, 0.00, NULL, NULL),
(350, 494, 128, 1, 0.00, NULL, NULL),
(351, 495, 128, 1, 0.00, NULL, NULL),
(352, 496, 128, 1, 0.00, NULL, NULL),
(353, 497, 128, 1, 0.00, NULL, NULL),
(354, 498, 128, 1, 0.00, NULL, NULL),
(355, 499, 128, 1, 0.00, NULL, NULL),
(356, 500, 128, 1, 0.00, NULL, NULL),
(357, 501, 128, 1, 0.00, NULL, NULL),
(358, 502, 128, 1, 0.00, NULL, NULL),
(359, 475, 127, 1, 0.00, NULL, NULL),
(360, 476, 127, 1, 0.00, NULL, NULL),
(361, 477, 127, 1, 0.00, NULL, NULL),
(362, 478, 127, 1, 0.00, NULL, NULL),
(363, 480, 127, 1, 0.00, NULL, NULL),
(364, 481, 127, 1, 0.00, NULL, NULL),
(365, 482, 127, 1, 0.00, NULL, NULL),
(366, 483, 127, 1, 0.00, NULL, NULL),
(367, 484, 127, 1, 0.00, NULL, NULL),
(368, 485, 127, 1, 0.00, NULL, NULL),
(369, 486, 127, 1, 0.00, NULL, NULL),
(370, 475, 130, 1, 0.00, NULL, NULL),
(371, 476, 130, 1, 0.00, NULL, NULL),
(372, 477, 130, 1, 0.00, NULL, NULL),
(373, 478, 130, 1, 0.00, NULL, NULL),
(374, 480, 130, 1, 0.00, NULL, NULL),
(375, 481, 130, 1, 0.00, NULL, NULL),
(376, 482, 130, 1, 0.00, NULL, NULL),
(377, 483, 130, 1, 0.00, NULL, NULL),
(378, 484, 130, 1, 0.00, NULL, NULL),
(379, 485, 130, 1, 0.00, NULL, NULL),
(380, 486, 130, 1, 0.00, NULL, NULL),
(381, 475, 130, 1, 0.00, NULL, NULL),
(382, 476, 130, 1, 0.00, NULL, NULL),
(383, 477, 130, 1, 0.00, NULL, NULL),
(384, 478, 130, 1, 0.00, NULL, NULL),
(385, 480, 130, 1, 0.00, NULL, NULL),
(386, 481, 130, 1, 0.00, NULL, NULL),
(387, 482, 130, 1, 0.00, NULL, NULL),
(388, 483, 130, 1, 0.00, NULL, NULL),
(389, 484, 130, 1, 0.00, NULL, NULL),
(390, 485, 130, 1, 0.00, NULL, NULL),
(391, 486, 130, 1, 0.00, NULL, NULL),
(392, 475, 130, 1, 0.00, NULL, NULL),
(393, 476, 130, 1, 0.00, NULL, NULL),
(394, 477, 130, 1, 0.00, NULL, NULL),
(395, 478, 130, 1, 0.00, NULL, NULL),
(396, 480, 130, 1, 0.00, NULL, NULL),
(397, 481, 130, 1, 0.00, NULL, NULL),
(398, 482, 130, 1, 0.00, NULL, NULL),
(399, 483, 130, 1, 0.00, NULL, NULL),
(400, 484, 130, 1, 0.00, NULL, NULL),
(401, 485, 130, 1, 0.00, NULL, NULL),
(402, 486, 130, 1, 0.00, NULL, NULL),
(403, 475, 130, 1, 0.00, NULL, NULL),
(404, 476, 130, 1, 0.00, NULL, NULL),
(405, 477, 130, 1, 0.00, NULL, NULL),
(406, 478, 130, 1, 0.00, NULL, NULL),
(407, 480, 130, 1, 0.00, NULL, NULL),
(408, 481, 130, 1, 0.00, NULL, NULL),
(409, 482, 130, 1, 0.00, NULL, NULL),
(410, 483, 130, 1, 0.00, NULL, NULL),
(411, 484, 130, 1, 0.00, NULL, NULL),
(412, 485, 130, 1, 0.00, NULL, NULL),
(413, 486, 130, 1, 0.00, NULL, NULL),
(414, 503, 98, 1, 0.00, NULL, NULL),
(415, 503, 123, 1, 0.00, NULL, NULL),
(416, 503, 124, 1, 0.00, NULL, NULL),
(417, 503, 87, 1, 0.00, NULL, NULL),
(418, 528, 151, 1, 80.00, NULL, NULL),
(419, 529, 151, 1, 80.00, NULL, NULL),
(420, 530, 151, 1, 80.00, NULL, NULL),
(421, 531, 151, 1, 80.00, NULL, NULL),
(422, 532, 151, 1, 80.00, NULL, NULL),
(423, 533, 151, 1, 80.00, NULL, NULL),
(424, 534, 151, 1, 80.00, NULL, NULL),
(425, 535, 151, 1, 80.00, NULL, NULL),
(426, 528, 150, 1, 80.00, NULL, NULL),
(427, 529, 150, 1, 80.00, NULL, NULL),
(428, 530, 150, 1, 80.00, NULL, NULL),
(429, 531, 150, 1, 80.00, NULL, NULL),
(430, 532, 150, 1, 80.00, NULL, NULL),
(431, 533, 150, 1, 80.00, NULL, NULL),
(432, 534, 150, 1, 80.00, NULL, NULL),
(433, 535, 150, 1, 80.00, NULL, NULL),
(434, 528, 152, 1, 80.00, NULL, NULL),
(435, 529, 152, 1, 80.00, NULL, NULL),
(436, 530, 152, 1, 80.00, NULL, NULL),
(437, 531, 152, 1, 80.00, NULL, NULL),
(438, 532, 152, 1, 80.00, NULL, NULL),
(439, 533, 152, 1, 80.00, NULL, NULL),
(440, 534, 152, 1, 80.00, NULL, NULL),
(441, 535, 152, 1, 80.00, NULL, NULL),
(474, 528, 156, 1, 80.00, NULL, NULL),
(475, 529, 156, 1, 80.00, NULL, NULL),
(476, 530, 156, 1, 80.00, NULL, NULL),
(477, 531, 156, 1, 80.00, NULL, NULL),
(478, 532, 156, 1, 80.00, NULL, NULL),
(479, 533, 156, 1, 80.00, NULL, NULL),
(480, 534, 156, 1, 80.00, NULL, NULL),
(481, 535, 156, 1, 80.00, NULL, NULL),
(482, 528, 157, 1, 72.00, NULL, NULL),
(483, 529, 157, 1, 72.00, NULL, NULL),
(484, 530, 157, 1, 72.00, NULL, NULL),
(485, 531, 157, 1, 72.00, NULL, NULL),
(486, 532, 157, 1, 72.00, NULL, NULL),
(487, 533, 157, 1, 72.00, NULL, NULL),
(488, 534, 157, 1, 72.00, NULL, NULL),
(489, 535, 157, 1, 72.00, NULL, NULL),
(490, 544, 159, 1, 0.00, NULL, NULL),
(491, 544, 123, 1, 0.00, NULL, NULL),
(492, 544, 101, 1, 0.00, NULL, NULL),
(493, 545, 123, 1, 0.00, NULL, NULL),
(494, 545, 87, 1, 0.00, NULL, NULL),
(495, 545, 111, 1, 0.00, NULL, NULL),
(496, 545, 109, 1, 0.00, NULL, NULL),
(497, 546, 101, 1, 0.00, NULL, NULL),
(498, 546, 159, 1, 0.00, NULL, NULL),
(499, 546, 87, 1, 0.00, NULL, NULL),
(500, 546, 124, 1, 0.00, NULL, NULL),
(501, 546, 95, 1, 0.00, NULL, NULL),
(502, 547, 159, 1, 0.00, NULL, NULL),
(503, 547, 101, 1, 0.00, NULL, NULL),
(504, 547, 98, 1, 0.00, NULL, NULL),
(505, 547, 124, 1, 0.00, NULL, NULL),
(506, 548, 159, 1, 0.00, NULL, NULL),
(507, 548, 87, 1, 0.00, NULL, NULL),
(508, 548, 101, 1, 0.00, NULL, NULL),
(509, 549, 87, 1, 0.00, NULL, NULL),
(510, 549, 101, 1, 0.00, NULL, NULL),
(511, 549, 111, 1, 0.00, NULL, NULL),
(512, 549, 122, 1, 0.00, NULL, NULL),
(513, 549, 159, 1, 0.00, NULL, NULL),
(514, 549, 108, 1, 0.00, NULL, NULL),
(515, 549, 161, 1, 0.00, NULL, NULL),
(516, 504, 135, 1, 0.00, NULL, NULL),
(517, 505, 135, 1, 0.00, NULL, NULL),
(518, 506, 135, 1, 0.00, NULL, NULL),
(519, 507, 135, 1, 0.00, NULL, NULL),
(520, 508, 135, 1, 0.00, NULL, NULL),
(521, 509, 135, 1, 0.00, NULL, NULL),
(522, 510, 135, 1, 0.00, NULL, NULL),
(523, 511, 135, 1, 0.00, NULL, NULL),
(524, 529, 169, 1, 80.00, NULL, NULL),
(525, 530, 169, 1, 80.00, NULL, NULL),
(526, 531, 169, 1, 80.00, NULL, NULL),
(527, 532, 169, 1, 80.00, NULL, NULL),
(528, 533, 169, 1, 80.00, NULL, NULL),
(529, 534, 169, 1, 80.00, NULL, NULL),
(530, 535, 169, 1, 80.00, NULL, NULL),
(531, 530, 188, 1, 80.00, NULL, NULL),
(532, 531, 188, 1, 80.00, NULL, NULL),
(533, 532, 188, 1, 80.00, NULL, NULL),
(534, 533, 188, 1, 80.00, NULL, NULL),
(535, 534, 188, 1, 80.00, NULL, NULL),
(536, 535, 188, 1, 80.00, NULL, NULL),
(537, 602, 190, 1, 0.00, NULL, NULL),
(538, 603, 190, 1, 0.00, NULL, NULL),
(539, 604, 190, 1, 0.00, NULL, NULL),
(540, 605, 190, 1, 0.00, NULL, NULL),
(541, 606, 190, 1, 0.00, NULL, NULL),
(542, 607, 190, 1, 0.00, NULL, NULL),
(543, 608, 190, 1, 0.00, NULL, NULL),
(544, 609, 190, 1, 0.00, NULL, NULL),
(545, 610, 190, 1, 0.00, NULL, NULL),
(546, 611, 190, 1, 0.00, NULL, NULL),
(547, 612, 190, 1, 0.00, NULL, NULL),
(548, 613, 190, 1, 0.00, NULL, NULL),
(549, 614, 190, 1, 0.00, NULL, NULL),
(550, 602, 191, 1, 0.00, NULL, NULL),
(551, 603, 191, 1, 0.00, NULL, NULL),
(552, 604, 191, 1, 0.00, NULL, NULL),
(553, 605, 191, 1, 0.00, NULL, NULL),
(554, 606, 191, 1, 0.00, NULL, NULL),
(555, 607, 191, 1, 0.00, NULL, NULL),
(556, 608, 191, 1, 0.00, NULL, NULL),
(557, 609, 191, 1, 0.00, NULL, NULL),
(558, 610, 191, 1, 0.00, NULL, NULL),
(559, 611, 191, 1, 0.00, NULL, NULL),
(560, 612, 191, 1, 0.00, NULL, NULL),
(561, 613, 191, 1, 0.00, NULL, NULL),
(562, 614, 191, 1, 0.00, NULL, NULL),
(563, 530, 122, 1, 80.00, NULL, NULL),
(564, 531, 122, 1, 80.00, NULL, NULL),
(565, 532, 122, 1, 80.00, NULL, NULL),
(566, 533, 122, 1, 80.00, NULL, NULL),
(567, 534, 122, 1, 80.00, NULL, NULL),
(568, 535, 122, 1, 80.00, NULL, NULL),
(569, 616, 190, 1, 0.00, NULL, NULL),
(570, 617, 190, 1, 0.00, NULL, NULL),
(571, 618, 190, 1, 0.00, NULL, NULL),
(572, 619, 190, 1, 0.00, NULL, NULL),
(573, 620, 190, 1, 0.00, NULL, NULL),
(574, 621, 190, 1, 0.00, NULL, NULL),
(575, 622, 190, 1, 0.00, NULL, NULL),
(576, 623, 190, 1, 0.00, NULL, NULL),
(577, 624, 190, 1, 0.00, NULL, NULL),
(578, 625, 190, 1, 0.00, NULL, NULL),
(579, 626, 190, 1, 0.00, NULL, NULL),
(580, 627, 190, 1, 0.00, NULL, NULL),
(581, 628, 190, 1, 0.00, NULL, NULL),
(582, 616, 191, 1, 0.00, NULL, NULL),
(583, 617, 191, 1, 0.00, NULL, NULL),
(584, 618, 191, 1, 0.00, NULL, NULL),
(585, 619, 191, 1, 0.00, NULL, NULL),
(586, 620, 191, 1, 0.00, NULL, NULL),
(587, 621, 191, 1, 0.00, NULL, NULL),
(588, 622, 191, 1, 0.00, NULL, NULL),
(589, 623, 191, 1, 0.00, NULL, NULL),
(590, 624, 191, 1, 0.00, NULL, NULL),
(591, 625, 191, 1, 0.00, NULL, NULL),
(592, 626, 191, 1, 0.00, NULL, NULL),
(593, 627, 191, 1, 0.00, NULL, NULL),
(594, 628, 191, 1, 0.00, NULL, NULL),
(595, 629, 190, 1, 0.00, NULL, NULL),
(596, 630, 190, 1, 0.00, NULL, NULL),
(597, 631, 190, 1, 0.00, NULL, NULL),
(598, 632, 190, 1, 0.00, NULL, NULL),
(599, 633, 190, 1, 0.00, NULL, NULL),
(600, 634, 190, 1, 0.00, NULL, NULL),
(601, 635, 190, 1, 0.00, NULL, NULL),
(602, 636, 190, 1, 0.00, NULL, NULL),
(603, 637, 190, 1, 0.00, NULL, NULL),
(604, 638, 190, 1, 0.00, NULL, NULL),
(605, 639, 190, 1, 0.00, NULL, NULL),
(606, 640, 190, 1, 0.00, NULL, NULL),
(607, 641, 190, 1, 0.00, NULL, NULL),
(608, 642, 190, 1, 0.00, NULL, NULL),
(609, 643, 190, 1, 0.00, NULL, NULL),
(610, 644, 190, 1, 0.00, NULL, NULL),
(611, 645, 190, 1, 0.00, NULL, NULL),
(612, 646, 190, 1, 0.00, NULL, NULL),
(613, 647, 190, 1, 0.00, NULL, NULL),
(614, 648, 190, 1, 0.00, NULL, NULL),
(615, 649, 190, 1, 0.00, NULL, NULL),
(616, 650, 190, 1, 0.00, NULL, NULL),
(617, 651, 190, 1, 0.00, NULL, NULL),
(618, 652, 190, 1, 0.00, NULL, NULL),
(619, 653, 190, 1, 0.00, NULL, NULL),
(620, 654, 190, 1, 0.00, NULL, NULL),
(621, 655, 190, 1, 0.00, NULL, NULL),
(622, 656, 190, 1, 0.00, NULL, NULL),
(623, 657, 190, 1, 0.00, NULL, NULL),
(624, 658, 190, 1, 0.00, NULL, NULL),
(625, 659, 190, 1, 0.00, NULL, NULL),
(626, 629, 191, 1, 0.00, NULL, NULL),
(627, 630, 191, 1, 0.00, NULL, NULL),
(628, 631, 191, 1, 0.00, NULL, NULL),
(629, 632, 191, 1, 0.00, NULL, NULL),
(630, 633, 191, 1, 0.00, NULL, NULL),
(631, 634, 191, 1, 0.00, NULL, NULL),
(632, 635, 191, 1, 0.00, NULL, NULL),
(633, 636, 191, 1, 0.00, NULL, NULL),
(634, 637, 191, 1, 0.00, NULL, NULL),
(635, 638, 191, 1, 0.00, NULL, NULL),
(636, 639, 191, 1, 0.00, NULL, NULL),
(637, 640, 191, 1, 0.00, NULL, NULL),
(638, 641, 191, 1, 0.00, NULL, NULL),
(639, 642, 191, 1, 0.00, NULL, NULL),
(640, 643, 191, 1, 0.00, NULL, NULL),
(641, 644, 191, 1, 0.00, NULL, NULL),
(642, 645, 191, 1, 0.00, NULL, NULL),
(643, 646, 191, 1, 0.00, NULL, NULL),
(644, 647, 191, 1, 0.00, NULL, NULL),
(645, 648, 191, 1, 0.00, NULL, NULL),
(646, 649, 191, 1, 0.00, NULL, NULL),
(647, 650, 191, 1, 0.00, NULL, NULL),
(648, 651, 191, 1, 0.00, NULL, NULL),
(649, 652, 191, 1, 0.00, NULL, NULL),
(650, 653, 191, 1, 0.00, NULL, NULL),
(651, 654, 191, 1, 0.00, NULL, NULL),
(652, 655, 191, 1, 0.00, NULL, NULL),
(653, 656, 191, 1, 0.00, NULL, NULL),
(654, 657, 191, 1, 0.00, NULL, NULL),
(655, 658, 191, 1, 0.00, NULL, NULL),
(656, 659, 191, 1, 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, 'What styles of debate can I learn?', 'Any! We have coaches who are experts in different styles of debate and can tailor sessions to your specific needs.', '2020-05-14 16:18:18', '2020-05-14 16:18:18', NULL),
(24, 'Do you have any financial aid options?', 'Yes! We\'ve never turned away anyone from our services because of financial need. We have bursaries available for certain students - please reach out to us for more information.', '2020-06-04 03:20:18', '2020-06-04 03:20:18', NULL),
(25, 'Do I have to live in a specific country to access your services?', 'Nope! We welcome students from all around the world. Be sure to check the timezones listed for our coaching options to find a time that suits you.', '2020-06-04 03:21:53', '2020-06-04 03:21:53', NULL),
(26, 'What is your refund policy?', 'A refund is possible within 24 hours of all purchases. This does not apply if you have signed up for a live coaching session and already taken part in a lesson. Contact us to request a refund or for further information.', '2020-06-04 03:25:36', '2020-06-04 03:27:09', NULL),
(27, 'I\'ve never taken part in formalized public speaking, debate, or Model United Nations but I want to improve my confidence! Is this site for me?', 'Definitely! You don\'t have to take part in competitions or any other formalized type of public speaking. Building communication skills is essential for everyone in any industry and the earlier you get started, the better. Our coaches can work with you to build your skills for whatever your goals may be - interview preparation, college admissions, job applications, day to day confidence, etc.', '2020-06-04 03:29:55', '2020-06-04 03:29:55', NULL),
(28, 'What currency are all the prices listed in?', 'All prices are displayed in USD. When directed to pay via PayPal, you will have the option to pay in your own currency.', '2020-06-08 09:32:18', '2020-06-08 09:32:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requistion_number` bigint(20) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_by` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `small_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `slug`, `title`, `location`, `requistion_number`, `category`, `description`, `role`, `requirement`, `apply_by`, `small_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'back-end-developer', 'Coach', 'Remote', 1, 'Coaching', '<ul><li>Work with a wide range of students from different parts of the world\r\n</li><li>Help with the development of the course curriculum as needed\r\n</li><li>Deliver private lessons and group lessons </li><li>\r\nFollow TalkMaze standards and guidelines for all work\r\n</li><li>Be a representative of TalkMaze and embody the company values</li></ul>', 'Coach', '<ul><li>3+ years of involvement in debate, speech, or Model United Nations\r\n</li><li>Passionate about debate, speech, or Model United Nations\r\n</li><li>Coaching experience is preferred\r\n</li><li>A willingness to learn and help others </li><li>\r\nAccess to a reliable internet connection, webcam, and mic </li><li>\r\nSelf driven and motivated</li></ul>', '2020-06-26 00:03:15', 'Work directly with students from around the world as a coach for Debate, Speech, or Model United Nations.', '2020-02-18 19:00:00', '2020-06-26 04:03:15', '2020-06-26 04:03:15'),
(2, '', 'dfgdfg', 'dfg', 2, 'dfgdg', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'dfgdfg', 'dfgdfg', '2020-02-05 19:00:00', NULL, '2020-02-17 08:11:08', '2020-02-17 08:11:49', '2020-03-17 19:00:00'),
(3, '', 'xyz', 'xyz', 111, 'xyz', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'xyz', 'xyz', '2020-02-12 19:00:00', NULL, '2020-02-24 13:11:00', '2020-02-24 13:11:00', '2020-03-01 19:00:00'),
(4, 'front-end-developer', 'Front End Developer', 'Islamabad', 23, 'webdevelopment', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'senior frontend developer', 'xyz', '2020-05-14 10:55:59', NULL, '2020-02-18 19:00:00', '2020-05-14 16:55:59', '2020-05-14 16:55:59'),
(5, 'audi-test', 'Audi Test', 'Islamabad', 73210292, 'Testing', '<p style=\"color: var(--copyColor); padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.333; font-family: robotoregular, Helvetica, Arial, sans-serif; vertical-align: baseline; max-width: 75ch; min-width: 25ch; width: 603.906px;\">Job descriptions are shaped by company policies, industry standards, and other factors. For example, corporate recruiting efforts may call for a different style of job description than positions in nonprofit or governmental agencies. Differences aside, here are some common elements to be included in a job description:</p><ul><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Company Information</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:&nbsp;</span><span style=\"font-weight: inherit;\">Offering candidates a glimpse inside a company and its culture provides a view of what applicants could be a part of and how the position supports company goals.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Position Overview</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:&nbsp;</span><span style=\"font-weight: inherit;\">A job summary highlights important details and provides a broad overview of the role and its associated responsibilities.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Responsibilities</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:</span><span style=\"font-weight: inherit;\">&nbsp;Duties can be listed with bullet points for easier reading, but as mentioned earlier, try to keep this section concise by grouping responsibilities into main categories rather than listing every task with exact detail. For management roles, you may add a separate section that lists which positions will report to them.&nbsp;</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Primary Objectives</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:</span><span style=\"font-weight: inherit;\">&nbsp;The clearer these are, the more likely it is that goals will be reached. Plus, having clearly defined objectives provides a concrete way to measure employee performance.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Required Qualifications</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:</span><span style=\"font-weight: inherit;\">&nbsp;Listing the knowledge, skills, and experience or education required for a position makes it clear to candidates whether they have the necessary qualifications for a position.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Work Environment</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:</span><span style=\"font-weight: inherit;\">&nbsp;Depending on the role, you may include information about the environment where people work and the physical demands of a job so that expectations are clear upfront.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Call to Action</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:&nbsp;</span><span style=\"font-weight: inherit;\">When a job description is used to advertise an open position, a call to action makes it clear how to apply, including who to contact and where to send application materials.</span></li></ul><p style=\"margin-bottom: 0px; color: var(--copyColor); padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.333; font-family: robotoregular, Helvetica, Arial, sans-serif; vertical-align: baseline; max-width: 75ch; min-width: 25ch; width: 603.906px;\">Job descriptions may also include a salary structure and information about other benefits. No matter what details you choose to include, aim for clear, concise language to avoid misunderstandings. To learn more about recruiting and writing effective job descriptions, check out this&nbsp;<a href=\"https://www.smartsheet.com/recruitment-process-outsourcing\" target=\"_blank\" style=\"color: var(--linkColor); margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; position: relative;\">article</a>.&nbsp;</p>', 'Coach', '<p style=\"padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.333; font-family: robotoregular, Helvetica, Arial, sans-serif; vertical-align: baseline; max-width: 75ch; color: var(--copyColor); min-width: 25ch; width: 603.906px;\">Job descriptions are shaped by company policies, industry standards, and other factors. For example, corporate recruiting efforts may call for a different style of job description than positions in nonprofit or governmental agencies. Differences aside, here are some common elements to be included in a job description:</p><ul><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Company Information</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">: </span><span style=\"font-weight: inherit;\">Offering candidates a glimpse inside a company and its culture provides a view of what applicants could be a part of and how the position supports company goals.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Position Overview</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">: </span><span style=\"font-weight: inherit;\">A job summary highlights important details and provides a broad overview of the role and its associated responsibilities.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Responsibilities</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:</span><span style=\"font-weight: inherit;\"> Duties can be listed with bullet points for easier reading, but as mentioned earlier, try to keep this section concise by grouping responsibilities into main categories rather than listing every task with exact detail. For management roles, you may add a separate section that lists which positions will report to them. </span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Primary Objectives</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:</span><span style=\"font-weight: inherit;\"> The clearer these are, the more likely it is that goals will be reached. Plus, having clearly defined objectives provides a concrete way to measure employee performance.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Required Qualifications</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:</span><span style=\"font-weight: inherit;\"> Listing the knowledge, skills, and experience or education required for a position makes it clear to candidates whether they have the necessary qualifications for a position.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Work Environment</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">:</span><span style=\"font-weight: inherit;\"> Depending on the role, you may include information about the environment where people work and the physical demands of a job so that expectations are clear upfront.</span></li><li style=\"margin: 0 0 var(--sm) 1.75em; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.5em; vertical-align: baseline; letter-spacing: 0px; max-width: 75ch; color: var(--copyColor); list-style-type: disc; min-width: 25ch;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\"><span style=\"font-weight: bolder;\">Call to Action</span></span><span style=\"font-weight: inherit; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: robotobold, Helvetica, Arial, sans-serif; vertical-align: baseline;\">: </span><span style=\"font-weight: inherit;\">When a job description is used to advertise an open position, a call to action makes it clear how to apply, including who to contact and where to send application materials.</span></li></ul><p style=\"margin-bottom: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: normal; font-size: 1.1vw; line-height: 1.333; font-family: robotoregular, Helvetica, Arial, sans-serif; vertical-align: baseline; max-width: 75ch; color: var(--copyColor); min-width: 25ch; width: 603.906px;\">Job descriptions may also include a salary structure and information about other benefits. No matter what details you choose to include, aim for clear, concise language to avoid misunderstandings. To learn more about recruiting and writing effective job descriptions, check out this <a href=\"https://www.smartsheet.com/recruitment-process-outsourcing\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; color: var(--linkColor); position: relative;\">article</a>. </p>', '2020-06-03 23:08:27', NULL, '2020-05-15 16:21:10', '2020-06-04 03:08:27', '2020-06-04 03:08:27'),
(6, 'national-ambassador', 'National Ambassador', 'Remote', 2, 'Outreach', '<ul><li>Be a representative for TalkMaze in your region</li><li>Prepare and distribute promotional material </li><li>Work with an international team of staff including other ambassadors  </li><li>Utilize word of mouth to recruit users for the platform</li><li>Answer questions about our services from people in your region </li><li>Follow TalkMaze standards and guidelines for all work</li><li>Be a representative of TalkMaze and embody the company values</li></ul>', 'National Ambassador', '<ul><li>Skilled at interpersonal interactions</li><li>Passionate about public speaking, debate, and/or Model United Nations</li><li>Strong reach within the community </li><li>Willingness to communicate with different kinds of people</li><li>Access to a reliable internet connection, webcam, and mic</li><li>Self driven and motivated</li></ul>', '2020-06-04 19:07:51', 'Become a TalkMaze representative in your region, recruit users for the platform, and work with an international team.', '2020-06-04 03:13:42', '2020-06-04 23:07:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 7, 'Overview', '2020-06-03 05:56:23', '2020-06-03 05:56:23', NULL),
(8, 7, 'test', '2020-06-01 21:21:10', '2020-06-03 05:56:11', '2020-06-03 05:56:11'),
(10, 8, 'What is Public Forum debate?', '2020-07-03 03:13:17', '2020-07-03 03:13:17', NULL),
(11, 9, 'Introduction', '2020-07-15 11:06:49', '2020-07-15 11:06:49', NULL),
(12, 9, 'Your Role as a Coach', '2020-07-15 11:07:27', '2020-07-15 11:07:27', NULL),
(13, 9, 'Next Steps', '2020-07-15 11:07:39', '2020-07-15 11:07:39', NULL),
(14, 10, 'Introduction', '2020-07-15 11:28:48', '2020-07-15 11:28:48', NULL),
(15, 11, 'lesson 1', '2020-07-15 21:12:55', '2020-07-15 21:12:55', NULL),
(16, 11, 'test 2', '2020-07-15 21:32:33', '2020-07-15 21:32:33', NULL),
(17, 13, 'lesson 1', '2020-07-16 00:19:33', '2020-07-16 00:19:33', NULL),
(18, 13, 'Lesson 2', '2020-07-16 00:19:42', '2020-07-16 00:19:42', NULL),
(19, 15, 'Introduction', '2020-07-19 04:00:35', '2020-07-19 04:00:35', NULL),
(20, 15, 'Your Role as a Coach', '2020-07-19 04:00:54', '2020-07-19 04:00:54', NULL),
(21, 15, 'Next Steps', '2020-07-19 04:01:01', '2020-07-19 04:01:01', NULL),
(22, 15, 'test', '2020-07-20 09:36:33', '2020-07-20 09:36:38', '2020-07-20 09:36:38'),
(23, 18, 'Introduction', '2020-07-23 12:39:53', '2020-07-23 12:39:53', NULL),
(24, 18, 'Your Role as a Coach', '2020-07-23 13:02:10', '2020-07-23 13:02:10', NULL),
(25, 20, 'What is Public Forum debate?', '2020-07-25 10:01:29', '2020-07-25 10:32:47', NULL),
(26, 20, 'Casing and the First Speech', '2020-07-25 10:33:21', '2020-07-25 10:33:21', NULL),
(27, 21, 'Introduction', '2020-07-25 10:53:55', '2020-07-25 10:53:55', NULL),
(28, 21, 'Constructive Speeches', '2020-07-25 11:10:06', '2020-07-25 11:10:06', NULL),
(29, 22, 'What is Public Speaking?', '2020-07-25 11:28:22', '2020-07-25 11:34:08', NULL),
(30, 22, 'Structure of Speech', '2020-07-25 11:33:58', '2020-07-25 11:33:58', NULL),
(31, 22, 'Methods of Persuasion', '2020-07-25 11:40:21', '2020-07-25 11:40:21', NULL),
(32, 22, 'Preparation', '2020-07-25 11:45:46', '2020-07-25 11:45:46', NULL),
(33, 22, 'Non-Verbal Skills', '2020-07-25 11:51:46', '2020-07-25 11:51:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meeting_sessions`
--

CREATE TABLE `meeting_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zoom_id` bigint(20) NOT NULL,
  `start_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `time_taken` int(11) DEFAULT NULL,
  `ended_at` timestamp NULL DEFAULT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0. No state 1. Started 2. Ended',
  `refund_status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 For Not Requested, 1 For Requested, 2 For Accepted, 3 For Declined',
  `student_joined` tinyint(1) NOT NULL DEFAULT 0,
  `coach_request_id` bigint(20) UNSIGNED NOT NULL,
  `refund_request` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0. Default 1. Requested 2. Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meeting_sessions`
--

INSERT INTO `meeting_sessions` (`id`, `session_id`, `zoom_id`, `start_url`, `join_url`, `tutor_id`, `student_id`, `time_taken`, `ended_at`, `status`, `refund_status`, `student_joined`, `coach_request_id`, `refund_request`, `created_at`, `updated_at`) VALUES
(1, 'io8zrw36pehbjsltv5faycnd2q4k0umg', -1477273227, 'https://us04web.zoom.us/s/71537170805?zak=eyJ6bV9za20iOiJ6bV9vMm0iLCJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJjbGllbnQiLCJ1aWQiOiJPZUNycTA2Y1NSR2NyT3JHWVdRZzV3IiwiaXNzIjoid2ViIiwic3R5IjoxMDAsIndjZCI6InVzMDQiLCJjbHQiOjAsInN0ayI6IjVKY1cwdDdiUWNkNXlnRXd5MXNTSUhNOWtxUE10TlNCQXhadmdaLTh3TzAuQmdZZ2NraFBkblowY0d0UFZYQjBPVk5YTlhKTmJtRnVNRFozYnpOSlRETXpiMFpBWVRVeFpqUTFaVGswWXpJM1pqazBNMlEyTldRM1pXTXpNRE16WmpSbVpEVTBPRGhtTlRrMU9Ua3hNekUwWVdFMU5EUmxORGxtTkRReU0yTTJOV05pTmdBTU0wTkNRWFZ2YVZsVE0zTTlBQVIxY3pBMEFBQUJlYTNtS25zQUVuVUFBQUEiLCJleHAiOjE2MjIxMjc0MTMsImlhdCI6MTYyMjEyMDIxMywiYWlkIjoiaC1TRV9WZzBUYnVtMXY1a1N1c29XUSIsImNpZCI6IiJ9.Ls0IFQRSj9thjR_bzcBKoQq4KUr-ZWDWjKQjiSHv5dg', 'https://us04web.zoom.us/j/71537170805?pwd=Z0tUU2NrakFRNTlDdnRTUllocXRKdz09', 105, 226, NULL, NULL, '1', '1', 0, 43, '1', '2021-05-27 16:56:53', '2021-05-27 16:57:28'),
(2, '5e3bktc9148dgfi0ymxz6hwsnu2ov7jq', -323224725, 'https://us02web.zoom.us/s/81281153899?zak=eyJ6bV9za20iOiJ6bV9vMm0iLCJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJjbGllbnQiLCJ1aWQiOiItX2xVSjJSMVFLYVJyak1LalM2UnlnIiwiaXNzIjoid2ViIiwic3R5IjoxMDAsIndjZCI6InVzMDIiLCJjbHQiOjAsInN0ayI6Il8wdlFlaTRXZE5ma2MyMkh2cDY2Y0gxZUw3TmtlZlBuMXh1NDFCLV9hM0UuQmdZZ1NGWndlSEZHTUZJd1FXMHlZbVpDZDI0eWRURnRRVGx6WWtzME0xQkZSVm9BQUF3elEwSkJkVzlwV1ZNemN6MEFCSFZ6TURJQUFBRjVyZ1ZKY3dBU2RRQUFBQSIsImV4cCI6MTYyMjEyOTQ1MiwiaWF0IjoxNjIyMTIyMjUyLCJhaWQiOiJMQlR1M19UUVRobXR5MmcydzBoQk1BIiwiY2lkIjoiIn0.oVMQYUsQfJqjJZV5q5QSEIy2T-Dm-NjnZniQWr9iX5w', 'https://us02web.zoom.us/j/81281153899?pwd=TU5JZmJZM0dnZm9JSlFmazNNekJBdz09', 138, 226, NULL, NULL, '1', '0', 0, 44, '1', '2021-05-27 17:30:52', '2021-05-27 17:30:52'),
(3, 'hoi5fkcqe6gplyj2dx074umzt981rnbs', 88630721555, 'https://us02web.zoom.us/s/88630721555?zak=eyJ6bV9za20iOiJ6bV9vMm0iLCJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6Ii1fbFVKMlIxUUthUnJqTUtqUzZSeWciLCJpc3MiOiJ3ZWIiLCJzdHkiOjEwMCwid2NkIjoidXMwMiIsImNsdCI6MCwic3RrIjoiUFd2NXRwQlAxZkVFQ2wwMURXLWFYeG8zMWp0WWxaTWo1V0dwd2xoSFZGUS5CZ1lnU0Zad2VIRkdNRkl3UVcweVltWkNkMjR5ZFRGdFFUbHpZa3MwTTFCRlJWb0FBQXd6UTBKQmRXOXBXVk16Y3owQUJIVnpNRElBQUFGNTNwdjZLUUFTZFFBQUFBIiwiZXhwIjoxNjIyOTQ0NjM0LCJpYXQiOjE2MjI5Mzc0MzQsImFpZCI6IkxCVHUzX1RRVGhtdHkyZzJ3MGhCTUEiLCJjaWQiOiIifQ.SKLyjN4OxCLjkoUV3uE3sPgwzxfhuEKVD6s9P3cI3GE', 'https://us02web.zoom.us/j/88630721555?pwd=VGZncnlMSm1YRUNxQjBmU2xRZ0daUT09', 105, 228, NULL, NULL, '1', '0', 0, 45, '1', '2021-06-06 03:57:14', '2021-06-06 03:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conversation_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `user_id`, `message`, `ip`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 212, 'I want to hire', '127.0.0.1', NULL, '2021-04-28 04:22:54', '2021-04-28 04:22:54'),
(2, 1, 105, 'Hi', '127.0.0.1', NULL, '2021-04-28 04:51:54', '2021-04-28 04:51:54'),
(3, 1, 105, 'Waao Nice', '127.0.0.1', NULL, '2021-04-28 04:56:09', '2021-04-28 04:56:09'),
(4, 1, 212, 'Oh waao working', '127.0.0.1', NULL, '2021-04-28 04:57:06', '2021-04-28 04:57:06'),
(5, 1, 212, 'Oh waao real time chat ho rahi he.. hahahahahaha', '127.0.0.1', NULL, '2021-04-28 04:57:18', '2021-04-28 04:57:18'),
(6, 1, 121, 'Hi i want to learn from you.', '127.0.0.1', NULL, '2021-04-28 05:21:02', '2021-04-28 05:21:02'),
(7, 2, 121, 'Hi I want to hire.', '127.0.0.1', NULL, '2021-04-28 05:25:17', '2021-04-28 05:25:17'),
(8, 2, 121, 'Oh yes', '127.0.0.1', NULL, '2021-04-28 06:08:50', '2021-04-28 06:08:50'),
(9, 2, 121, 'I want to learn from you.', '182.185.189.219', NULL, '2021-05-05 12:58:54', '2021-05-05 12:58:54'),
(10, 2, 121, 'Hi, I want to learn from you. Thanks.', '182.185.189.219', NULL, '2021-05-05 13:15:32', '2021-05-05 13:15:32'),
(11, 2, 105, 'Welcome Dear', '180.178.188.70', NULL, '2021-05-05 13:37:01', '2021-05-05 13:37:01'),
(12, 2, 105, 'Aaaao G', '182.185.189.219', NULL, '2021-05-05 13:39:42', '2021-05-05 13:39:42'),
(13, 2, 105, 'Aoo G Welcome Welcome Ap K ly Hi To Bethey Henn', '182.185.189.219', NULL, '2021-05-05 13:41:02', '2021-05-05 13:41:02'),
(14, 2, 105, 'Aaaao G', '180.178.188.70', NULL, '2021-05-05 15:28:59', '2021-05-05 15:28:59'),
(15, 2, 121, 'Me aa gya hon', '180.178.188.70', NULL, '2021-05-05 15:29:42', '2021-05-05 15:29:42'),
(16, 2, 121, 'ab btaaen konsey topic pe baat karni he.', '180.178.188.70', NULL, '2021-05-05 15:29:54', '2021-05-05 15:29:54'),
(17, 2, 211, 'Me parhna chahta hon.', '182.185.189.219', NULL, '2021-05-05 15:39:59', '2021-05-05 15:39:59'),
(18, 3, 105, 'Aaao g', '182.185.189.219', NULL, '2021-05-05 15:43:04', '2021-05-05 15:43:04'),
(19, 3, 211, 'Achhi Baat He.', '182.185.189.219', NULL, '2021-05-05 15:43:35', '2021-05-05 15:43:35'),
(20, 2, 212, 'I want to learn from you.', '103.255.4.47', NULL, '2021-05-12 14:29:19', '2021-05-12 14:29:19'),
(21, 2, 213, 'I want to learn from you.', '103.255.4.47', NULL, '2021-05-12 14:37:50', '2021-05-12 14:37:50'),
(22, 5, 105, 'Yes Sure', '103.255.4.47', NULL, '2021-05-12 14:38:36', '2021-05-12 14:38:36'),
(23, 2, 214, 'I want To Learn From You.', '182.185.252.58', NULL, '2021-05-17 15:12:19', '2021-05-17 15:12:19'),
(24, 6, 214, 'Hi', '182.185.252.58', NULL, '2021-05-17 15:24:24', '2021-05-17 15:24:24'),
(25, 6, 214, 'Hi Tutor , I want to learn Physics.', '182.185.252.58', NULL, '2021-05-17 15:25:52', '2021-05-17 15:25:52'),
(26, 6, 105, 'Yes', '182.185.252.58', NULL, '2021-05-17 15:26:14', '2021-05-17 15:26:14'),
(27, 2, 223, 'Test Parent Request', '127.0.0.1', NULL, '2021-05-20 06:19:29', '2021-05-20 06:19:29'),
(28, 7, 223, 'Test Parent Request', '127.0.0.1', NULL, '2021-05-20 06:20:43', '2021-05-20 06:20:43'),
(29, 2, 225, 'I am sending you request', '127.0.0.1', NULL, '2021-05-26 02:29:21', '2021-05-26 02:29:21'),
(30, 8, 225, 'Hi', '127.0.0.1', NULL, '2021-05-26 03:03:22', '2021-05-26 03:03:22'),
(31, 8, 105, 'Waao Very Nice', '127.0.0.1', NULL, '2021-05-26 03:09:49', '2021-05-26 03:09:49'),
(32, 8, 225, 'Nice color scheme', '127.0.0.1', NULL, '2021-05-26 03:15:59', '2021-05-26 03:15:59'),
(33, 8, 105, 'of course', '127.0.0.1', NULL, '2021-05-26 03:16:09', '2021-05-26 03:16:09'),
(34, 8, 225, 'Test', '127.0.0.1', NULL, '2021-05-26 08:03:32', '2021-05-26 08:03:32'),
(35, 8, 225, 'Test Working...', '127.0.0.1', NULL, '2021-05-26 08:05:01', '2021-05-26 08:05:01'),
(36, 8, 225, 'I want to hire you.', '127.0.0.1', NULL, '2021-05-26 23:21:45', '2021-05-26 23:21:45'),
(37, 8, 225, 'Test Request Sending', '127.0.0.1', NULL, '2021-05-26 23:26:58', '2021-05-26 23:26:58'),
(38, 2, 226, 'Hi i want to learn from you.', '182.185.228.43', NULL, '2021-05-27 16:28:04', '2021-05-27 16:28:04'),
(39, 2, 226, 'I am sending you request', '182.185.228.43', NULL, '2021-05-27 17:30:25', '2021-05-27 17:30:25'),
(40, 2, 228, 'test', '108.173.252.253', NULL, '2021-06-06 03:55:24', '2021-06-06 03:55:24'),
(41, 2, 291, 'tets', '108.173.252.253', NULL, '2021-07-05 08:11:51', '2021-07-05 08:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2020_02_12_063622_create_testimonials_table', 1),
(32, '2020_02_12_063822_create_social_links_table', 1),
(33, '2020_02_12_063942_create_comments_table', 1),
(34, '2020_02_12_064208_create_votes_table', 1),
(35, '2020_02_12_064302_create_comment__likes_table', 1),
(36, '2020_02_12_064336_create_plans_table', 1),
(37, '2020_02_12_064405_create_coaching_bulks_table', 1),
(38, '2020_02_12_074154_create_categories_table', 1),
(39, '2020_02_12_074246_create_courses_table', 1),
(40, '2020_02_12_075258_create_enroll_users_table', 1),
(41, '2020_02_12_075408_create_debates_table', 1),
(42, '2020_02_12_083425_create_course_contents_table', 1),
(43, '2020_02_12_083459_create_content_types_table', 1),
(44, '2020_02_12_083944_create_course_ratings_table', 1),
(45, '2020_02_12_084922_create_jobs_table', 1),
(46, '2020_02_12_100357_create_applicants_table', 1),
(47, '2020_02_12_102400_create_time_table_table', 1),
(48, '2020_02_12_102431_create_days_table', 1),
(49, '2020_02_12_103033_create_partners_table', 1),
(50, '2020_02_12_103459_create_faqs_table', 1),
(51, '2020_02_12_104028_create_subscribes_table', 1),
(52, '2020_02_12_115602_create_activity_logs_table', 1),
(53, '2020_02_13_054925_create_requests_table', 1),
(54, '2020_02_13_060741_create_user_plans_table', 1),
(55, '2020_02_13_125410_add_deleted_at_column_users', 2),
(56, '2020_02_14_100152_add_deleted_at_column_testimonial', 3),
(57, '2020_02_14_121136_add_deleted_at_column_social_links', 4),
(58, '2020_02_14_131231_add_deleted_at_column_faqs', 5),
(59, '2020_02_17_045429_create_user_profiles_table', 6),
(60, '2020_02_17_053540_add_country_city_column_users', 7),
(61, '2020_02_17_070722_create_user_plans_table', 8),
(62, '2020_02_17_071119_create_categories_table', 9),
(63, '2020_02_17_072511_create_categories_table', 10),
(64, '2020_02_17_074546_add_deleted_at_column_categories', 11),
(65, '2020_02_17_105013_add_deleted_at_column_partners', 12),
(66, '2020_02_17_110544_create_partners_table', 12),
(67, '2020_02_17_110811_add_deleted_at_column_partners', 13),
(68, '2020_02_17_120533_add_city_country_column_users_profile', 14),
(69, '2020_02_17_122205_create_user_profiles_table', 15),
(70, '2020_02_17_123654_add_deleted_at_column_jobs', 16),
(71, '2020_02_17_124342_add_apply_by_column_jobs', 16),
(72, '2020_02_18_045056_add_deleted_at_column_courses', 17),
(73, '2020_02_18_070231_add_deleted_at_column_course_contents', 18),
(74, '2020_02_18_075215_add_deleted_at_column_content_types', 19),
(75, '2020_02_18_084448_add_deleted_at_column_comments', 20),
(76, '2020_02_18_104841_add-deleted_at_column_applicants', 21),
(77, '2020_02_18_115633_add-deleted_at_column_debates', 22),
(78, '2020_02_18_123502_add-deleted_at_column_plans', 23),
(79, '2020_02_18_130226_add-deleted_at_column_subscribes', 24),
(80, '2020_02_19_050349_create_user_plans_table', 25),
(84, '2020_02_19_052333_add_user_plan_id_column_plans', 26),
(85, '2020_02_19_055417_add_user_plan_id_column_users', 27),
(86, '2020_02_19_060522_add-deleted_at_column_coaching_bulks', 28),
(92, '2020_02_19_071551_add_deleted_at_column_requests', 29),
(93, '2020_02_19_072955_create_user_requests_table', 30),
(94, '2020_02_19_101211_add_time_zone_column_time_table', 31),
(95, '2020_02_26_063209_create_course_user_table', 32),
(96, '2020_03_03_123006_create_comment_replys_table', 33),
(102, '2020_03_05_101912_create_contact_us_table', 34),
(103, '2020_03_06_101723_add_parent_id_column', 34),
(104, '2020_03_11_123015_add_job_id_column_applicants', 35),
(106, '2020_03_12_064941_add_general_availabality_column_applicants', 36),
(107, '2020_03_13_053812_add_image_column_categories', 37),
(110, '2020_03_13_061107_add_user_id_column_courses', 38),
(111, '2020_03_13_065247_add_slug_column_courses', 39),
(112, '2020_03_13_081417_add_rate_column_course_ratings', 40),
(113, '2020_03_18_083655_create_lessons_table', 41),
(114, '2020_03_18_084025_add_lesson_id_column_course_contents', 42),
(115, '2020_03_18_101544_add_course_id_column_lessons', 43),
(116, '2020_03_19_074218_create_content_likes_table', 44),
(117, '2020_03_19_074242_create_content_views_table', 44),
(120, '2020_03_19_081744_add_duration_column_course_contents', 45),
(121, '2020_03_31_060615_laratrust_setup_tables', 46),
(122, '2020_03_31_065953_create_tutor_time_tables_table', 47),
(123, '2020_03_31_072330_create_tutor_ratings_table', 48),
(124, '2020_04_01_122104_create_student_ratings_table', 49),
(125, '2020_04_03_070153_create_student_tutor_table', 50),
(127, '2020_04_04_103337_create_sessions_table', 51),
(128, '2020_04_04_124456_create_messages_table', 52),
(129, '2020_06_07_195917_create_notification_streams_table', 53),
(130, '2020_06_07_200418_create_discount_codes_table', 54),
(132, '2021_04_20_074207_create_coach_requests_table', 55),
(133, '2021_04_22_060228_alter_time_table_for_tutor_id_field', 56),
(135, '2021_04_22_075259_create_packages_table', 57),
(138, '2021_04_22_101618_alter_user_plans_table_for_three_fields', 58),
(141, '2021_04_23_082116_create_transactions_table', 59),
(142, '2021_04_26_063657_create_schedules_table', 60),
(143, '2021_04_26_093758_create_meeting_sessions_table', 61),
(144, '2021_05_20_071931_create_parent_students_table', 62),
(147, '2021_05_26_103322_alter_coach_requests_table_for_new_fields', 63),
(148, '2021_05_27_072024_create_stripe_transfers_table', 64);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `views` int(11) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  `shares` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `small_title`, `small_description`, `description`, `tags`, `user_id`, `views`, `featured`, `shares`, `created_at`, `updated_at`) VALUES
(18, 'WSDC Champion!', 'https://talkmaze.com/storage/storage/mYCvASx6Gc6oFv6r7AVAP1mTTpya3hBmkcUT12g4.jpeg', 'Congrats Matthew!', 'Matthew Anzarouth, member of Team Canada and a TalkMaze coach, just won the World Schools Debating Championships!', 'Matthew is a debater and coach from Montreal, Canada. He is a member of Team Canada Debate and was one of five high school debaters from the national team who represented Canada at the World Schools Debating Championship this summer. After several intense rounds of debate, Canada was declared the World Champion!\r\n\r\nHuge congratulations to Matthew for all his accomplishments!', 'debate', 122, NULL, 2, 6, '2020-08-07 01:11:15', '2020-12-29 04:55:34'),
(25, 'Three Way Win at the Online Thinkathon', 'https://talkmaze.com/storage/storage/mNBskijq7qkDvHdvxgc1bBDL3FFUE5z4b8wqS4CP.png', 'TalkMaze takes on over 80 teams from Europe and Canada', 'Ghalia, Hamza, Hania, and Deeyan represented TalkMaze at an international policymaking competition.', '<p><span style=\"color: rgb(0, 0, 0);\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" \"noto=\"\" emoji\";=\"\" font-size:=\"\" 0.8125rem;\"=\"\">TalkMaze isn\'t just a startup. It\'s a movement to make public speaking education a priority. Our team members, Ghalia, Hania, Deeyan, and Hamza took on over 80 other teams from Europe and Canada in a policymaking competition sponsored by the European Union. After three intense rounds of pitching, the TalkMaze team secured second place from the judges along with the top audience pick. Ghalia was also the only Canadian participant selected to represent TalkMaze and the Online Thinkathon at the closing event in Belgium.</span></p><p><span style=\"color: rgb(0, 0, 0);\">Check out the full details <a href=\"https://thinkathon.agorize.com/en/challenges/24-hours-thinkathon/pages/the-thinkathon-outcomes?lang=en\" target=\"_blank\" style=\"\">here</a>.&nbsp;</span></p>', 'winners', 122, NULL, 1, 1, '2020-08-15 05:09:16', '2020-08-15 05:13:10'),
(26, 'Two of our students share their experiences with debate and hope to inspire younger students to take a chance with public speaking!', 'https://talkmaze.com/storage/storage/hnNrE7WI8jI0MvDa5E9lSnbOJL37XTS3GCHaj8p6.jpeg', 'Iris and Sabrina: The application of debate in real-world scenarios for young people', 'Learn more about their interest in debate and how debate skills helped pave a path towards a well-prepared, successful future in both public speaking and day-to-day life.', '<p><i>Learn more about their interest in debate and how debate skills helped pave a path towards a well-prepared, successful future in both public speaking and day-to-day life.</i></p><p><b><br></b></p><p><b>Meet Iris: </b></p><p><b><br></b></p><p><b>1. Why did you decide to join debating?</b></p><p>I’ve been interested in debate after my friends recommended me to it, and after watching multiple other debates. I enjoyed writing and public speaking for a long time, and debate enabled a chance for that.</p><p><b><br></b></p><p><b>2. What has been your favorite part of debate so far?</b></p><p>I love the overall experience of getting to debate and speak in front of other people, even though it’s nerve racking sometimes. It also allows interactions with others that share the same interests as you, who are also striving towards becoming better debaters, and allows you to learn so much from them. </p><p>I feel more confident speaking in front of other people, and I\'m not as shy as before. Prepared rounds also allow you to research and learn much about the community that I wouldn’t have known without debate, and the experience itself is worth it in the end, and is something I wouldn\'t have gotten to know if I haven\'t joined debate.</p><p><br></p><p><b>3. What are you looking forward to most this debate season?</b></p><p>I’m interested in becoming better at speaking in front of audiences, and going to more tournaments with Sabrina. I want to eventually qualify for nationals in the future.</p><p><br></p><p><b>4. How do you feel that your debate skills will help you in the future?</b></p><p>[Debate skills] could help with how I interact with others, and can improve my public speaking in the future. It could also help my confidence later when I have to find a job or speak in front of audiences. It can also help my confidence in trying out new things.</p><p><br></p><p><b>5. Do you have any advice for students who are hesitant to join debate or public speaking? Why should they consider debating?</b></p><p>It depends on whether “hesitant” to join is as in they want to join, but they aren’t doing it due to personal fears, or if it means they don’t want to join debate. </p><p>If you are afraid to join debate or speech because you aren’t confident about public speaking or are afraid of losing rounds, you should remember that you won’t achieve something if you don’t work towards it, despite the roadblocks. </p><p>After you learn debate or public speaking for a long enough time, the experience makes it worth it, no matter how scary it could seem at first. You won’t be the only people who are nervous– your opponents will be, too, because everyone is at first– and even if you lose an important round, it’s better to learn from it rather than avoid it by not even trying for it in the first place. </p><p>Debating helps you interact with so many other people, and learn from them as well. You can experience speaking in front of people ahead of time, the way you will in the future, and can improve your critical thinking. </p><p>Most importantly, it ends up worth it in the end, when you win rounds or achieve goals you’ve worked towards. </p><p><br></p><p><b>Meet Sabrina:</b></p><p><b><br></b></p><p><b>1. Why did you decide to begin debating?</b></p><p>I decided to begin because my parents really wanted me to and I had a lot of older friends who enjoyed debating. I also wanted to join because I enjoy arguing, not yelling– there’s a difference, and speaking, and since debate incorporated all of those elements, I was really looking forward to it as well.</p><p><b><br></b></p><p><b>2. What has been your favourite part of debate so far?</b></p><p>It’s hard to say. I genuinely enjoy debating, and all of it is thrilling and terrifying. I’d say I enjoy brainstorming the points the most and I also enjoy the awards ceremony, since it’s like the moment I finally can de-stress after the thrill and stress of the debate itself. </p><p><br></p><p><b>3. What are you most looking forward to during this debate season?</b></p><p>I’m looking forward to debating more with Iris and improving my debate skills as well as overcoming my nervous habits.</p><p>How do you feel that your debate skills will help you in the future?</p><p>If I decide to go into politics, which I highly doubt, [debate skills] would be useful. However this could definitely help my speaking in everyday situations or public speaking. It also has the potential to greatly improve my speech/writing structure.</p><p><br></p><p><b>5. Do you have any advice for students who are hesitant to join debate or public speaking? Why should they consider debating?</b></p><p>I would recommend them to try, but they could always back out if they’re not comfortable. I feel like they should give it a chance. It took me every Saturday for a few months to learn CNDF (debate style) and other tips, but it was so worth it. </p><p>In the end, it benefits you the most, and you make lifelong friends from it sometimes as well! Debating helps you become way more persuasive and recently I’ve been seeing debate in a lot of things. Weird example, but how I answer homework questions. I SEXI them, just like debate. (SEXI is an acronym used to structure speeches).</p><p>I genuinely enjoy debate, and I hope any aspiring would-be debaters will too!</p>', 'interview', 261, NULL, 1, NULL, '2020-12-11 03:06:15', '2020-12-29 04:56:21'),
(28, 'Meet the Team: Thadeus Smith', 'https://talkmaze.com/storage/storage/TUsFVq5ZdZ3NuCKzdcTxZ2WGR4N45vySG77ssYO7.jpeg', 'Meet the Team: Thadeus Smith', 'Meet Thadeus Smith, our Content Manager for TalkMaze. Thadeus is the first feature of many in our new Meet the Team series, and we are so excited to introduce the inner workings at TalkMaze by sharing the stories from so many amazing people behind our team! \r\n\r\nCheck out Thadeus\' responses on his favourite part of public speaking, how he incorporates body language to elevate speeches, and why he loves presenting topics that are personal to him.', '<p style=\"box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\">Meet Thadeus Smith, our Content Manager for TalkMaze. Thadeus is the first feature of many in our new Meet the Team series, and we are so excited to introduce the inner workings at TalkMaze by sharing the stories from so many amazing people behind our team! </p><p style=\"box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><br></p><p style=\"box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"></p><p style=\"box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\">Check out Thadeus\' responses on his favourite part of public speaking, how he incorporates body language to elevate speeches, and why he loves presenting topics that are personal to him.</p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b>Q: What is your favourite part of your role at TalkMaze?</b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures;\">The best thing about being Content Manager is that I get to work directly with the coaches to draft our curriculum and courses. Everybody at TalkMaze brings their own unique perspective on speech & debate education to the table, and getting to be the one to make those fit together into a final product is really exciting.</span></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b>Q: What drew you to TalkMaze?</b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\">I <span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures;\">was drawn to TalkMaze because, having done debate at an underfunded school, I know how difficult it is to improve if you don\'t have access to resources. I also knew that if there was a lack of accessible resources in the United States, then I wouldn\'t be able to imagine the lack of resources in other countries. Working for a company that is bridging the resource gap and making speech & debate education more accessible is a dream come true.</span></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures;\"><br></span></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b>Q: How did you get started in public speaking?</b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures;\">I actually got started with public speaking because my mom made me go to a debate camp through my high school! We had just moved and I was having to start everything all over, make completely new friends, go to a new school, all of that. I started that camp completely afraid and unable to talk in front of people, and I left with a newfound love for public speaking.</span></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures;\"><br></span><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b>Q: What is the weirdest experience you\'ve had public speaking?</b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures; background-color: rgb(248, 248, 248);\">The weirdest experience I\'ve had public speaking was my senior year of high school. I was competing in Original Oratory at a big national tournament, and it was the last round. I was the first speaker, but as I was giving my speech I could tell that a couple of the other competitors were really confused. Watching them go, I realized why - three out of my five competitors had the exact same topic as me!</span></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures; background-color: rgb(248, 248, 248);\"><br></span><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b>Q: What makes you stand out as a speaker?</b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><b><br></b></p><p style=\"text-align: left; box-sizing: inherit; margin-bottom: 0px; list-style-type: none; margin-left: 3px;\"><span style=\"color: rgb(29, 28, 29); font-family: Slack-Lato, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures;\"> I prefer to give speeches on topics that are personal to me, so I often have to manipulate the audience\'s emotions and try to get them to feel what I feel. To do that, I pay extra attention to the space when I\'m not speaking. Oftentimes, well-placed silence has a much greater emotional impact than continuing to speak or repeating what I\'ve said. I also choreograph my body language intensely - In actual conversation, you don\'t stare at the person\'s face for ten minutes straight. You break it up with time spent looking at the environment around them and the things they\'re doing with their hands. Using body language to convey my emotion helps elevate the status of a speech.</span><b><br></b></p>', 'feature,meet the team,interview', 261, NULL, 1, NULL, '2020-12-17 21:54:48', '2020-12-31 10:50:35'),
(29, 'Eric Sader: How Model UN developed my ability to negotiate, persuade, and navigate difficult conversations', 'https://talkmaze.com/storage/storage/r8vMcpy8n5LEMlXfQz5zSqxL6dIC4kUUc90DR6IA.jpeg', 'Eric Sader: How Model UN developed my ability to negotiate, persuade, and navigate difficult conversations', 'Meet Eric Sader, one of the coaches here at TalkMaze! Eric is currently an undergraduate student at McGill University in Montreal. He has been doing Model UN for five years, and he loves it now more than ever!\r\n\r\nIn this interview, Eric shares his experience with Model UN and valuable advice for those hesitant to join a public speaking group like Model UN.\r\n\r\nLearn more about his interest in Model UN, and how his experiences in MUN helped develop his negotiation skills, ability to navigate difficult real-life conversations, and ability to persuade others through the power of his words.', '<div class=\"freebirdFormviewerViewItemsItemItemHeader\" style=\"display: flex; -webkit-box-pack: justify; justify-content: space-between; margin-bottom: 16px;\"><div class=\"freebirdFormviewerViewItemsItemItemTitleDescContainer\" style=\"-webkit-box-align: start; align-items: flex-start; display: flex; flex-direction: column; max-width: 100%; min-width: 0%; position: relative;\"><div class=\"freebirdFormviewerViewItemsItemItemTitleContainer\" style=\"display: flex; width: 411.918px;\"><div class=\"freebirdFormviewerViewItemsItemItemTitle exportItemTitle freebirdCustomFont\" role=\"heading\" aria-level=\"3\" aria-describedby=\"i.desc.775444812 c31\" style=\"line-height: 24px; width: 411.918px; word-break: break-word;\"><h5 class=\"size-font1 font-weight-bold\" style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1em;=\"\" letter-spacing:=\"\" normal;=\"\" margin-bottom:=\"\" 0.5rem;=\"\" line-height:=\"\" 1.5;\"=\"\"><span style=\"letter-spacing: -0.015em; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; color: rgb(35, 31, 32); font-size: 16px;\">Meet Eric Sader, one of the coaches here at TalkMaze!&nbsp;</span><font color=\"#231f20\" style=\"font-size: 1.0625rem; letter-spacing: -0.015em; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"font-size: 16px;\">Eric is currently an undergraduate student at McGill University in Montreal. He has been doing Model UN for five years, and he loves it now more than ever!</span></font></h5><h5 class=\"size-font1 font-weight-bold\" style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1em;=\"\" letter-spacing:=\"\" normal;=\"\" margin-bottom:=\"\" 0.5rem;=\"\" line-height:=\"\" 1.5;\"=\"\"><span style=\"font-size: 1.0625rem; letter-spacing: -0.015em; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; color: rgb(35, 31, 32);\">In this interview, Eric shares his experience with Model UN and valuable advice for those hesitant to join a public speaking group like Model UN.</span><br></h5><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><font color=\"#231f20\" face=\"-apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"font-size: 16px;\"><i>Learn more about his interest in Model UN, and how his experiences in MUN helped develop his negotiation skills, ability to navigate difficult real-life conversations, and ability to persuade others through the power of his words.&nbsp;</i></span></font></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><font color=\"#231f20\" face=\"-apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"font-size: 16px;\"><i><br></i></span></font></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\">Q: Why did you decide to join public speaking?</span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\"><br></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\"><span style=\"font-family: Roboto, Arial, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: 0.2px; white-space: pre-wrap;\">A: I started doing public speaking because my brother was president of the Model UN club at the time and kept trying to get me to join, so as soon as I could, I joined, and I have never regretted it! It has been one of the most fun and engaging activities I have ever pursued and I haven\'t stopped since then.</span></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\"><span style=\"font-family: Roboto, Arial, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: 0.2px; white-space: pre-wrap;\"><br></span></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\"><span style=\"font-weight: bolder; font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px;\">Q: What has been your favourite part of public speaking so far?</span></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\"><span style=\"font-family: Roboto, Arial, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: 0.2px; white-space: pre-wrap;\"><br></span></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\"><span style=\"font-family: Roboto, Arial, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: 0.2px; white-space: pre-wrap;\">A: Without a doubt, my favourite part of public speaking is the friends I made along the way! Model UN is such an interpersonal way to debate, and it puts you in situations with complete strangers that push you to become fast friends. The experience to go with your teammates to a conference, and give it your all for 3 days straight is incredible, and the camaraderie I developed has formed some of my longest-lasting friendships. </span></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\"><span style=\"font-family: Roboto, Arial, sans-serif; font-size: 14px; font-weight: 400; letter-spacing: 0.2px; white-space: pre-wrap;\"><br></span></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span google=\"\" sans\",=\"\" roboto,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" letter-spacing:=\"\" 0.1px;\"=\"\" style=\"font-weight: bolder; color: rgb(32, 33, 36);\"><span style=\"font-weight: bolder; font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px;\">Q: How do you feel your public speaking skills will help you in the future?</span></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-size: 14px; letter-spacing: 0.2px; white-space: pre-wrap;\"><br></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-size: 14px; letter-spacing: 0.2px; white-space: pre-wrap;\">A: I think the biggest asset has been to help develop my ability to </span><span style=\"color: rgb(32, 33, 36); font-weight: bolder; font-family: Roboto, Arial, sans-serif; font-size: 14px; letter-spacing: 0.2px; white-space: pre-wrap;\">negotiate</span><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-size: 14px; letter-spacing: 0.2px; white-space: pre-wrap;\">. Model UN, especially in Crisis committees, associates success with your ability to convince others to work with you and help achieve your goals. This has taught me how to approach difficult conversations and convince others to see things the way I see them.</span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-size: 14px; letter-spacing: 0.2px; white-space: pre-wrap;\"><br></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span style=\"font-weight: bolder; color: rgb(32, 33, 36); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px;\">Q: Do you have any advice for students who are hesitant to join a public speaking group like Model UN? Why should they consider debating/public speaking?&nbsp;</span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span style=\"font-weight: bolder; color: rgb(32, 33, 36); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px;\"><br></span></p><p style=\"margin-bottom: 0.5rem; line-height: 1.5;\"><span style=\"color: rgb(32, 33, 36); font-family: Roboto, Arial, sans-serif; font-size: 14px; letter-spacing: 0.2px; white-space: pre-wrap;\">A: I would advise people to throw themselves in! Even the most shy students I have ever seen get the hang of it after a few training sessions, and they start to get out of their shell more. Confidence is an amazing skill to have, and Model UN really teaches you how and why to be confident. I always compare it to diving into cold water, the worst part is having to jump in!</span><span style=\"font-weight: bolder; color: rgb(32, 33, 36); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px;\"><br></span></p></div></div></div></div>', 'feature,interview', 261, NULL, 1, NULL, '2021-01-06 02:06:04', '2021-01-06 02:10:03'),
(30, 'Meet the Team: Anna Mouland', 'https://talkmaze.com/storage/storage/R9pYjikOvDPT1QYfW5yzRIzaMYsoHZCIEbK1VIi8.jpeg', 'Meet Anna Mouland, one of our Debate Coaches and an undergraduate student at McGill University. Read about how Anna\'s debate skills help her in everyday, high-stress situations.', 'Meet Anna Mouland, one of our Debate Coaches and an undergraduate student at McGill University. Read about how Anna\'s debate skills help her in everyday, high-stress situations.', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\"><i><font color=\"#000000\" face=\"Helvetica\"><span style=\"font-size: 12px;\"><b>Meet Anna Mouland, one of our Debate Coaches and an undergraduate student at McGill University. Read about how Anna\'s debate skills help her in everyday, high-stress situations.</b></span></font><br></i></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><b><br></b></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><b><br></b></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><b><br></b></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><b>Q: Why did you decide to join debating/public speaking?</b></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\">A: I like competing and I think good persuasive speech is a very underrated skill.</p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><b><br></b></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><b>Q: What has been your favorite part of debate/public speaking so far?</b></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\">A: Travelling for tournaments and meeting people from all around the world!</p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><b>Q: How do you feel that your debate/public speaking skills will help you in the future?<span class=\"Apple-converted-space\">&nbsp;</span></b></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\">A: I can think on my feet, I am fairly persuasive, and I get my point across better than most people especially in confrontations or high-stress situations.</p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\"><b>Q: Do you have any advice for students who are hesitant to join debate or public speaking? Why should they consider debating/public speaking?</b></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; min-height: 14px; color: rgb(0, 0, 0);\"><br></p><p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica; color: rgb(0, 0, 0);\">A: DO IT! You should do it because you have nothing to lose. Even if you aren\'t competitive you will learn so many skills that are very applicable in every day life that you would not pick up otherwise. It also looks great on a resume!!</p>', 'feature,interview,meet the team', 261, NULL, 1, NULL, '2021-01-12 22:45:27', '2021-01-13 01:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `notification_streams`
--

CREATE TABLE `notification_streams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `actor_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `verb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `action_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification_streams`
--

INSERT INTO `notification_streams` (`id`, `actor_id`, `receiver_id`, `verb`, `action`, `read`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 72, 98, 'SESSION', 'Just started a new session', 1, NULL, '2020-06-07 22:28:00', '2020-11-07 03:51:11'),
(2, 72, 98, 'CHAT', 'Sent you a message', 1, NULL, '2020-06-07 19:00:00', '2020-07-08 23:11:06'),
(3, 72, 98, 'COMMENT', 'Commented on  your debate topic', 1, 'all-private-healthcare-systems-should-be-banned-in-favour-of-comprehensive-public-healthcare-systems', '2020-06-07 19:00:00', '2020-06-19 16:46:37'),
(4, 72, 98, 'COMMENT', 'Commented on  your debate topic', 1, 'all-private-healthcare-systems-should-be-banned-in-favour-of-comprehensive-public-healthcare-systems', '2020-06-07 19:00:00', '2020-06-19 16:46:37'),
(5, 72, 98, 'COMMENT', 'Commented on  your debate topic', 1, 'all-private-healthcare-systems-should-be-banned-in-favour-of-comprehensive-public-healthcare-systems', '2020-06-07 21:51:00', '2020-06-19 16:46:37'),
(6, 72, 116, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:48:03', '2020-06-07 17:48:03'),
(7, 72, 115, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:48:03', '2020-06-07 17:48:03'),
(8, 72, 115, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:48:03', '2020-06-07 17:48:03'),
(9, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-07 17:48:03', '2020-11-07 03:51:11'),
(10, 72, 116, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:48:49', '2020-06-07 17:48:49'),
(11, 72, 115, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:48:49', '2020-06-07 17:48:49'),
(12, 72, 115, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:48:49', '2020-06-07 17:48:49'),
(13, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-07 17:48:49', '2020-11-07 03:51:11'),
(14, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-07 17:53:38', '2020-07-09 22:16:03'),
(15, 72, 98, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-07 17:54:38', '2020-07-08 23:11:06'),
(16, 72, 98, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-07 17:55:28', '2020-07-08 23:11:06'),
(17, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-07 17:55:45', '2020-07-09 22:16:03'),
(18, 72, 98, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-07 17:56:43', '2020-07-08 23:11:06'),
(19, 72, 116, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:57:03', '2020-06-07 17:57:03'),
(20, 72, 115, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:57:03', '2020-06-07 17:57:03'),
(21, 72, 115, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-07 17:57:04', '2020-06-07 17:57:04'),
(22, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-07 17:57:04', '2020-11-07 03:51:11'),
(23, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-07 18:01:25', '2020-07-09 22:16:03'),
(24, 95, 100, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-08 09:52:52', '2020-06-08 09:53:24'),
(25, 100, 95, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-08 09:53:22', '2020-06-08 09:54:30'),
(26, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-09 14:42:16', '2020-11-07 03:51:11'),
(27, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-09 15:01:19', '2020-11-07 03:51:11'),
(28, 72, 98, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-09 15:08:19', '2020-07-08 23:11:06'),
(29, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-09 15:28:34', '2020-07-09 22:16:03'),
(30, 72, 98, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-09 15:29:43', '2020-07-08 23:11:06'),
(31, 72, 98, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-09 15:30:25', '2020-07-08 23:11:06'),
(32, 72, 98, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-09 15:30:45', '2020-07-08 23:11:06'),
(33, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-09 15:31:08', '2020-07-09 22:16:03'),
(34, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-09 15:32:44', '2020-11-07 03:51:11'),
(35, 122, 123, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-09 23:32:56', '2020-07-08 05:46:06'),
(36, 122, 124, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-09 23:32:56', '2020-07-08 23:24:24'),
(37, 122, 124, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-06-09 23:33:46', '2020-06-09 23:33:46'),
(38, 123, 124, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-06-09 23:34:03', '2020-06-09 23:34:03'),
(39, 124, 124, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-06-09 23:40:21', '2020-06-09 23:40:21'),
(40, 124, 124, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-06-09 23:43:58', '2020-06-09 23:43:58'),
(41, 124, 124, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-06-09 23:44:08', '2020-06-09 23:44:08'),
(42, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 00:14:11', '2020-11-07 03:51:11'),
(43, 122, 127, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:32:57', '2020-06-10 02:05:58'),
(44, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:33:13', '2020-07-30 03:56:25'),
(45, 122, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 01:35:22', '2020-11-07 03:51:11'),
(46, 122, 125, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 01:35:22', '2020-06-16 23:34:00'),
(47, 122, 126, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 01:35:22', '2020-06-19 07:19:53'),
(48, 122, 128, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 01:35:22', '2020-06-17 01:45:08'),
(49, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:18', '2020-06-10 02:32:33'),
(50, 126, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:24', '2020-06-10 02:32:33'),
(51, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:27', '2020-06-10 02:32:33'),
(52, 128, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:28', '2020-06-10 02:32:33'),
(53, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:34', '2020-06-10 02:32:33'),
(54, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:37', '2020-06-10 02:32:33'),
(55, 126, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:38', '2020-06-10 02:32:33'),
(56, 128, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:48', '2020-06-10 02:32:33'),
(57, 130, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:36:55', '2020-07-30 03:56:25'),
(58, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:37:31', '2020-06-10 02:32:33'),
(59, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:37:34', '2020-06-10 02:32:33'),
(60, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:37:47', '2020-06-10 02:32:33'),
(61, 128, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:38:21', '2020-06-10 02:32:33'),
(62, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:38:21', '2020-06-10 02:32:33'),
(63, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:38:30', '2020-06-10 02:32:33'),
(64, 128, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:38:49', '2020-06-10 02:32:33'),
(65, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:11', '2020-06-10 02:32:33'),
(66, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:14', '2020-06-10 02:32:33'),
(67, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:16', '2020-06-10 02:32:33'),
(68, 128, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:20', '2020-06-10 02:32:33'),
(69, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:25', '2020-06-10 02:32:33'),
(70, 126, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:29', '2020-06-10 02:32:33'),
(71, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:31', '2020-06-10 02:32:33'),
(72, 126, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:39', '2020-06-10 02:32:33'),
(73, 128, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:43', '2020-06-10 02:32:33'),
(74, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:51', '2020-07-30 03:56:25'),
(75, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:39:56', '2020-06-10 02:32:33'),
(76, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:40:03', '2020-07-30 03:56:25'),
(77, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:40:04', '2020-07-30 03:56:25'),
(78, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:40:11', '2020-06-10 02:32:33'),
(79, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:41:31', '2020-06-10 02:32:33'),
(80, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:41:34', '2020-06-10 02:32:33'),
(81, 128, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:41:47', '2020-06-10 02:32:33'),
(82, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:41:50', '2020-06-10 02:32:33'),
(83, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:41:58', '2020-06-10 02:32:33'),
(84, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:42:52', '2020-06-10 02:32:33'),
(85, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:43:08', '2020-06-10 02:32:33'),
(86, 125, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:44:07', '2020-06-10 02:32:33'),
(87, 128, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:44:46', '2020-06-10 02:32:33'),
(88, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:45:13', '2020-06-10 02:32:33'),
(89, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:45:20', '2020-06-10 02:32:33'),
(90, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:45:21', '2020-06-10 02:32:33'),
(91, 122, 128, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:46:51', '2020-06-10 02:32:33'),
(92, 130, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:47:40', '2020-07-30 03:56:25'),
(93, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:47:57', '2020-07-30 03:56:25'),
(94, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:47:58', '2020-07-30 03:56:25'),
(95, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:48:04', '2020-07-30 03:56:25'),
(96, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 01:49:21', '2020-11-07 03:51:11'),
(97, 122, 130, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 01:49:37', '2020-06-10 04:08:26'),
(98, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:00:39', '2020-07-30 03:56:25'),
(99, 127, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:00:39', '2020-07-30 03:56:25'),
(100, 122, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 02:46:20', '2020-11-07 03:51:11'),
(101, 122, 123, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 02:46:20', '2020-07-08 05:46:06'),
(102, 122, 124, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 02:46:20', '2020-07-08 23:24:24'),
(103, 122, 87, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-10 02:46:20', '2020-07-08 23:51:13'),
(104, 123, 87, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:47:08', '2020-07-08 23:16:19'),
(105, 124, 87, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:47:13', '2020-07-08 23:16:19'),
(106, 98, 87, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:47:23', '2020-07-08 23:16:19'),
(107, 87, 87, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:48:11', '2020-07-08 23:16:19'),
(108, 87, 87, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:48:22', '2020-07-08 23:16:19'),
(109, 87, 87, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:49:33', '2020-07-08 23:16:19'),
(110, 87, 87, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 02:49:39', '2020-07-08 23:16:19'),
(111, 126, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-10 03:56:07', '2020-07-30 03:56:25'),
(112, 122, 126, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-11 01:31:08', '2020-06-12 02:38:32'),
(113, 126, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-12 00:54:07', '2020-07-30 03:56:25'),
(114, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-16 15:18:14', '2020-11-07 03:51:11'),
(115, 72, 98, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-16 15:18:35', '2020-07-08 23:11:06'),
(116, 122, 123, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-17 00:55:12', '2020-07-08 05:46:06'),
(117, 122, 124, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-17 00:55:12', '2020-07-08 23:24:24'),
(118, 122, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-17 00:55:21', '2020-11-07 03:51:11'),
(119, 122, 125, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-06-17 00:55:21', '2020-06-17 00:55:21'),
(120, 122, 126, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-17 00:55:21', '2020-06-19 07:19:53'),
(121, 122, 128, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-06-17 00:55:21', '2020-06-17 01:45:08'),
(122, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-19 16:46:14', '2020-07-09 22:16:03'),
(123, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-24 23:48:57', '2020-07-09 22:16:03'),
(124, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-24 23:49:47', '2020-07-09 22:16:03'),
(125, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-24 23:50:39', '2020-07-09 22:16:03'),
(126, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-24 23:51:26', '2020-07-09 22:16:03'),
(127, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-24 23:53:25', '2020-07-09 22:16:03'),
(128, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-24 23:54:12', '2020-07-09 22:16:03'),
(129, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-24 23:59:18', '2020-07-09 22:16:03'),
(130, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-06-24 23:59:41', '2020-07-09 22:16:03'),
(131, 122, 159, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 05:23:02', '2020-07-09 09:07:20'),
(132, 122, 123, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 05:23:02', '2020-07-08 05:46:06'),
(133, 122, 101, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 05:23:02', '2020-08-05 09:26:50'),
(134, 122, 123, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 05:46:00', '2020-07-08 05:46:06'),
(135, 122, 87, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 05:46:00', '2020-07-08 23:51:13'),
(136, 122, 111, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 05:46:00', '2020-07-08 23:50:38'),
(137, 122, 109, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 05:46:00', '2020-07-08 05:52:24'),
(138, 87, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:49:24', '2020-07-08 06:07:35'),
(139, 123, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:04', '2020-07-08 06:07:35'),
(140, 123, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:06', '2020-07-08 06:07:35'),
(141, 123, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:07', '2020-07-08 06:07:35'),
(142, 122, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:15', '2020-07-08 06:07:35'),
(143, 122, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:22', '2020-07-08 06:07:35'),
(144, 111, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:26', '2020-07-08 06:07:35'),
(145, 123, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:27', '2020-07-08 06:07:35'),
(146, 111, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:29', '2020-07-08 06:07:35'),
(147, 123, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:30', '2020-07-08 06:07:35'),
(148, 123, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:31', '2020-07-08 06:07:35'),
(149, 111, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:51:44', '2020-07-08 06:07:35'),
(150, 109, 109, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 05:54:47', '2020-07-08 06:07:35'),
(151, 98, 72, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-08 22:59:21', '2020-07-09 22:16:03'),
(152, 122, 101, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:09:37', '2020-08-05 09:26:50'),
(153, 122, 159, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:09:37', '2020-07-09 09:07:20'),
(154, 122, 87, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:09:37', '2020-07-08 23:51:13'),
(155, 122, 124, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:09:37', '2020-07-08 23:24:24'),
(156, 122, 95, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:09:37', '2020-07-08 23:09:47'),
(157, 122, 159, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:20:01', '2020-07-09 09:07:20'),
(158, 122, 101, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:20:01', '2020-08-05 09:26:50'),
(159, 122, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:20:01', '2020-11-07 03:51:11'),
(160, 122, 124, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:20:01', '2020-07-08 23:24:24'),
(161, 98, 124, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-08 23:31:53', '2020-07-08 23:31:53'),
(162, 122, 159, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:43:12', '2020-07-09 09:07:20'),
(163, 122, 87, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:43:12', '2020-07-08 23:51:13'),
(164, 122, 101, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:43:12', '2020-08-05 09:26:50'),
(165, 122, 87, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:50:19', '2020-07-08 23:51:13'),
(166, 122, 101, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:50:19', '2020-08-05 09:26:50'),
(167, 122, 111, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:50:19', '2020-07-08 23:50:38'),
(168, 122, 122, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:50:19', '2020-08-19 03:13:21'),
(169, 122, 159, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:50:19', '2020-07-09 09:07:20'),
(170, 122, 108, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:50:19', '2020-07-08 23:50:21'),
(171, 122, 161, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:50:19', '2020-07-08 23:50:42'),
(172, 122, 151, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-08 23:58:56', '2020-07-08 23:58:56'),
(173, 122, 150, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:58:56', '2020-07-22 23:59:57'),
(174, 122, 152, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:58:56', '2020-07-30 00:42:46'),
(175, 122, 156, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:58:56', '2020-07-23 20:51:33'),
(176, 122, 157, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-08 23:58:56', '2020-07-22 23:57:46'),
(177, 156, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:05:33', '2020-07-09 01:06:04'),
(178, 156, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:05:42', '2020-07-09 01:06:04'),
(179, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:06:00', '2020-07-09 01:06:04'),
(180, 157, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:06:15', '2020-07-09 01:06:04'),
(181, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:06:19', '2020-07-09 01:06:04'),
(182, 156, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:06:21', '2020-07-09 01:06:04'),
(183, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:06:26', '2020-07-09 01:06:04'),
(184, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:06:32', '2020-07-09 01:06:04'),
(185, 156, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:06:34', '2020-07-09 01:06:04'),
(186, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:06:47', '2020-07-09 01:06:04'),
(187, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:07:08', '2020-07-09 01:06:04'),
(188, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:07:21', '2020-07-09 01:06:04'),
(189, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:07:41', '2020-07-09 01:06:04'),
(190, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:07:49', '2020-07-09 01:06:04'),
(191, 150, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:09:50', '2020-07-09 01:06:04'),
(192, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:13:50', '2020-07-09 01:06:04'),
(193, 150, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:14:06', '2020-07-09 01:06:04'),
(194, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:14:50', '2020-07-09 01:06:04'),
(195, 150, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:16:19', '2020-07-09 01:06:04'),
(196, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:16:44', '2020-07-09 01:06:04'),
(197, 156, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:17:01', '2020-07-09 01:06:04'),
(198, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:17:50', '2020-07-09 01:06:04'),
(199, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:17:55', '2020-07-09 01:06:04'),
(200, 150, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:18:14', '2020-07-09 01:06:04'),
(201, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:18:21', '2020-07-09 01:06:04'),
(202, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:27:35', '2020-07-09 01:06:04'),
(203, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:30:58', '2020-07-09 01:06:04'),
(204, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:36:47', '2020-07-09 01:06:04'),
(205, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:40:39', '2020-07-09 01:06:04'),
(206, 122, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:47:58', '2020-07-09 01:06:04'),
(207, 150, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:51:52', '2020-07-09 01:06:04'),
(208, 150, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:52:52', '2020-07-09 01:06:04'),
(209, 150, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 00:56:09', '2020-07-09 01:06:04'),
(210, 152, 157, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 01:02:21', '2020-07-09 01:06:04'),
(211, 157, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 01:05:51', '2020-07-30 03:56:25'),
(212, 157, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-09 01:05:53', '2020-07-30 03:56:25'),
(213, 122, 157, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-09 01:06:15', '2020-07-09 01:06:15'),
(214, 122, 151, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-15 23:55:13', '2020-07-15 23:55:13'),
(215, 122, 150, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-15 23:55:13', '2020-07-22 23:59:57'),
(216, 122, 152, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-15 23:55:13', '2020-07-30 00:42:46'),
(217, 122, 156, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-15 23:55:13', '2020-07-23 20:51:33'),
(218, 122, 157, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-15 23:55:13', '2020-07-22 23:57:46'),
(219, 122, 169, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-15 23:55:13', '2020-07-23 00:04:20'),
(220, 150, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:07:24', '2020-07-16 00:17:22'),
(221, 122, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:07:55', '2020-07-16 00:17:22'),
(222, 122, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:08:24', '2020-07-16 00:17:22'),
(223, 150, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:08:41', '2020-07-16 00:17:22'),
(224, 122, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:08:52', '2020-07-16 00:17:22'),
(225, 150, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:09:03', '2020-07-16 00:17:22'),
(226, 122, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:09:12', '2020-07-16 00:17:22'),
(227, 150, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:10:23', '2020-07-16 00:17:22'),
(228, 122, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:13:03', '2020-07-16 00:17:22'),
(229, 122, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:13:07', '2020-07-16 00:17:22'),
(230, 122, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:13:47', '2020-07-16 00:17:22'),
(231, 122, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:14:09', '2020-07-16 00:17:22'),
(232, 157, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:15:04', '2020-07-16 00:17:22'),
(233, 156, 169, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-16 00:16:37', '2020-07-16 00:17:22'),
(234, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:18:54', '2020-07-16 00:18:54'),
(235, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:19:25', '2020-07-16 00:19:25'),
(236, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:19:31', '2020-07-16 00:19:31'),
(237, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:19:38', '2020-07-16 00:19:38'),
(238, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:19:46', '2020-07-16 00:19:46'),
(239, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:21:32', '2020-07-16 00:21:32'),
(240, 122, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:21:40', '2020-07-16 00:21:40'),
(241, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:22:14', '2020-07-16 00:22:14'),
(242, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:22:33', '2020-07-16 00:22:33'),
(243, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:24:27', '2020-07-16 00:24:27'),
(244, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:24:32', '2020-07-16 00:24:32'),
(245, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:24:42', '2020-07-16 00:24:42'),
(246, 156, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:24:58', '2020-07-16 00:24:58'),
(247, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:25:00', '2020-07-16 00:25:00'),
(248, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:25:39', '2020-07-16 00:25:39'),
(249, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:25:45', '2020-07-16 00:25:45'),
(250, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:25:50', '2020-07-16 00:25:50'),
(251, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:26:40', '2020-07-16 00:26:40'),
(252, 156, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:26:43', '2020-07-16 00:26:43'),
(253, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:26:50', '2020-07-16 00:26:50'),
(254, 156, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:28:07', '2020-07-16 00:28:07'),
(255, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:28:22', '2020-07-16 00:28:22'),
(256, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:28:31', '2020-07-16 00:28:31'),
(257, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:28:52', '2020-07-16 00:28:52'),
(258, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:28:55', '2020-07-16 00:28:55'),
(259, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:29:19', '2020-07-16 00:29:19'),
(260, 150, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:29:20', '2020-07-16 00:29:20'),
(261, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:29:21', '2020-07-16 00:29:21'),
(262, 156, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:29:47', '2020-07-16 00:29:47'),
(263, 156, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:31:39', '2020-07-16 00:31:39'),
(264, 122, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:32:00', '2020-07-16 00:32:00'),
(265, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:34:52', '2020-07-16 00:34:52'),
(266, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:36:06', '2020-07-16 00:36:06'),
(267, 122, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:36:16', '2020-07-16 00:36:16'),
(268, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:36:40', '2020-07-16 00:36:40'),
(269, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:36:52', '2020-07-16 00:36:52'),
(270, 122, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:36:55', '2020-07-16 00:36:55'),
(271, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:37:29', '2020-07-16 00:37:29'),
(272, 169, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:41:17', '2020-07-16 00:41:17'),
(273, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:44:56', '2020-07-16 00:44:56'),
(274, 157, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:45:08', '2020-07-16 00:45:08'),
(275, 156, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:46:28', '2020-07-16 00:46:28'),
(276, 122, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:49:26', '2020-07-16 00:49:26'),
(277, 122, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:50:39', '2020-07-16 00:50:39'),
(278, 122, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:52:35', '2020-07-16 00:52:35'),
(279, 150, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 00:55:23', '2020-07-16 00:55:23'),
(280, 150, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 01:00:03', '2020-07-16 01:00:03'),
(281, 150, 169, 'CHAT', 'Just Sent you a new message!', 0, NULL, '2020-07-16 01:00:23', '2020-07-16 01:00:23'),
(282, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 11:31:02', '2020-08-21 02:40:38'),
(283, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 11:31:02', '2020-08-16 22:05:04'),
(284, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 11:40:30', '2020-08-21 02:40:38'),
(285, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 11:40:30', '2020-08-16 22:05:04'),
(286, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 12:51:50', '2020-08-21 02:40:38'),
(287, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 12:51:50', '2020-08-16 22:05:04'),
(288, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 12:59:00', '2020-08-21 02:40:38'),
(289, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 12:59:00', '2020-08-16 22:05:04'),
(290, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 13:06:01', '2020-08-21 02:40:38'),
(291, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 13:06:01', '2020-08-16 22:05:04'),
(292, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 13:07:50', '2020-08-21 02:40:38'),
(293, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 13:07:50', '2020-08-16 22:05:04'),
(294, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 13:12:59', '2020-08-21 02:40:38'),
(295, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 13:12:59', '2020-08-16 22:05:04'),
(296, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 13:25:57', '2020-08-21 02:40:38'),
(297, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 13:25:57', '2020-08-16 22:05:04'),
(298, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 19:33:41', '2020-08-21 02:40:38'),
(299, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 19:33:41', '2020-08-16 22:05:04'),
(300, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 19:37:10', '2020-08-21 02:40:38'),
(301, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 19:37:10', '2020-08-16 22:05:04'),
(302, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 21:30:37', '2020-08-21 02:40:38'),
(303, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 21:30:37', '2020-08-16 22:05:04'),
(304, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:36:11', '2020-08-21 02:40:38'),
(305, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:36:11', '2020-08-16 22:05:04'),
(306, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:36:56', '2020-08-21 02:40:38'),
(307, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:36:56', '2020-08-16 22:05:04'),
(308, 122, 151, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(309, 122, 150, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-22 23:59:57'),
(310, 122, 152, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-30 00:42:46'),
(311, 122, 156, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-23 20:51:33'),
(312, 122, 157, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-22 23:57:46'),
(313, 122, 169, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-23 00:04:20'),
(314, 122, 188, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-29 23:55:58'),
(315, 122, 122, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-08-19 03:13:21'),
(316, 181, 151, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(317, 181, 150, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-22 23:59:57'),
(318, 181, 152, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-30 00:42:46'),
(319, 181, 156, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-23 20:51:33'),
(320, 181, 157, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-22 23:57:46'),
(321, 181, 169, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-23 00:04:20'),
(322, 181, 188, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-07-29 23:55:58'),
(323, 181, 122, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:50:44', '2020-08-19 03:13:21'),
(324, 181, 151, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-22 23:51:36', '2020-07-22 23:51:36'),
(325, 181, 150, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:51:36', '2020-07-22 23:59:57'),
(326, 181, 152, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:51:36', '2020-07-30 00:42:46'),
(327, 181, 156, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:51:36', '2020-07-23 20:51:33'),
(328, 181, 157, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:51:36', '2020-07-22 23:57:46'),
(329, 181, 169, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:51:36', '2020-07-23 00:04:20'),
(330, 181, 188, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:51:36', '2020-07-29 23:55:58'),
(331, 181, 122, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-22 23:51:36', '2020-08-19 03:13:21'),
(332, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:03:15', '2020-07-30 03:56:25'),
(333, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:03:16', '2020-07-30 03:56:25'),
(334, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:03:28', '2020-07-30 03:56:25'),
(335, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:03:51', '2020-07-30 03:56:25'),
(336, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:01', '2020-07-30 03:56:25'),
(337, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:12', '2020-07-30 03:56:25'),
(338, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:13', '2020-07-30 03:56:25'),
(339, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:14', '2020-07-30 03:56:25'),
(340, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:14', '2020-07-30 03:56:25'),
(341, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:15', '2020-07-30 03:56:25'),
(342, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:15', '2020-07-30 03:56:25'),
(343, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:15', '2020-07-30 03:56:25'),
(344, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:23', '2020-07-30 03:56:25'),
(345, 122, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:32', '2020-07-30 03:56:25'),
(346, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:04:34', '2020-07-30 03:56:25'),
(347, 156, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:05:03', '2020-07-30 03:56:25'),
(348, 122, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:06:15', '2020-07-30 03:56:25'),
(349, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:08:25', '2020-07-30 03:56:25'),
(350, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:08:43', '2020-07-30 03:56:25'),
(351, 122, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:08:44', '2020-07-30 03:56:25'),
(352, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:08:59', '2020-07-30 03:56:25'),
(353, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:10:15', '2020-07-30 03:56:25'),
(354, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:10:30', '2020-07-30 03:56:25'),
(355, 156, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:11:24', '2020-07-30 03:56:25'),
(356, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:11:46', '2020-07-30 03:56:25'),
(357, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:12:55', '2020-07-30 03:56:25'),
(358, 122, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:12:58', '2020-07-30 03:56:25'),
(359, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:13:31', '2020-07-30 03:56:25'),
(360, 122, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:13:47', '2020-07-30 03:56:25'),
(361, 122, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:15:17', '2020-07-30 03:56:25'),
(362, 122, 188, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-23 00:16:34', '2020-07-30 00:22:33'),
(363, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 00:35:23', '2020-11-07 03:51:11'),
(364, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 14:22:19', '2020-08-21 02:40:38'),
(365, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 14:22:19', '2020-08-16 22:05:04'),
(366, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 16:16:02', '2020-08-21 02:40:38'),
(367, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 16:16:02', '2020-08-16 22:05:04'),
(368, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 16:37:43', '2020-08-21 02:40:38'),
(369, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 16:37:43', '2020-08-16 22:05:04'),
(370, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 16:43:11', '2020-08-21 02:40:38'),
(371, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 16:43:11', '2020-08-16 22:05:04'),
(372, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 21:58:38', '2020-08-21 02:40:38'),
(373, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 21:58:38', '2020-08-16 22:05:04'),
(374, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 22:27:55', '2020-08-21 02:40:38'),
(375, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 22:27:55', '2020-08-16 22:05:04'),
(376, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 22:32:18', '2020-08-21 02:40:38'),
(377, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 22:32:18', '2020-08-16 22:05:04'),
(378, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 22:33:41', '2020-08-21 02:40:38'),
(379, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-23 22:33:41', '2020-08-16 22:05:04'),
(380, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 00:12:33', '2020-08-21 02:40:38'),
(381, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 00:12:33', '2020-08-16 22:05:04'),
(382, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 00:15:31', '2020-08-21 02:40:38'),
(383, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 00:15:31', '2020-08-16 22:05:04'),
(384, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 11:41:35', '2020-08-21 02:40:38'),
(385, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 11:41:35', '2020-08-16 22:05:04'),
(386, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 12:05:06', '2020-08-21 02:40:38'),
(387, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 12:05:06', '2020-08-16 22:05:04'),
(388, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 21:56:58', '2020-08-21 02:40:38'),
(389, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 21:56:58', '2020-08-16 22:05:04'),
(390, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 22:42:04', '2020-08-21 02:40:38'),
(391, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 22:42:04', '2020-08-16 22:05:04'),
(392, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 22:48:23', '2020-08-21 02:40:38'),
(393, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 22:48:23', '2020-08-16 22:05:04'),
(394, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 22:52:23', '2020-08-21 02:40:38'),
(395, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 22:52:23', '2020-08-16 22:05:04'),
(396, 190, 191, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-24 22:53:12', '2020-08-06 09:29:14'),
(397, 190, 191, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-24 22:53:16', '2020-08-06 09:29:14'),
(398, 190, 191, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-24 22:53:35', '2020-08-06 09:29:14'),
(399, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 22:56:44', '2020-08-21 02:40:38'),
(400, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 22:56:44', '2020-08-16 22:05:04'),
(401, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 23:05:45', '2020-08-21 02:40:38'),
(402, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-24 23:05:45', '2020-08-16 22:05:04'),
(403, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-25 15:03:00', '2020-08-21 02:40:38'),
(404, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-25 15:03:00', '2020-08-16 22:05:04'),
(405, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-28 13:12:53', '2020-08-21 02:40:38'),
(406, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-28 13:12:53', '2020-08-16 22:05:04'),
(407, 181, 151, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-29 23:50:03', '2020-07-29 23:50:03'),
(408, 181, 150, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-29 23:50:03', '2020-07-29 23:50:03'),
(409, 181, 152, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-29 23:50:03', '2020-07-30 00:42:46'),
(410, 181, 156, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-29 23:50:03', '2020-07-29 23:50:03'),
(411, 181, 157, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-29 23:50:03', '2020-07-29 23:50:03'),
(412, 181, 169, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-07-29 23:50:03', '2020-07-29 23:50:03'),
(413, 181, 188, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-29 23:50:03', '2020-07-29 23:55:58'),
(414, 181, 122, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-29 23:50:03', '2020-08-19 03:13:21'),
(415, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:00:25', '2020-07-30 03:56:25'),
(416, 188, 181, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:02:17', '2020-07-30 01:25:45'),
(417, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:02:42', '2020-07-30 03:56:25'),
(418, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:02:56', '2020-07-30 03:56:25'),
(419, 181, 188, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:03:21', '2020-07-30 00:22:33'),
(420, 188, 181, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:04:53', '2020-07-30 01:25:45'),
(421, 181, 188, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:05:22', '2020-07-30 00:22:33'),
(422, 181, 188, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:05:23', '2020-07-30 00:22:33'),
(423, 181, 188, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:05:35', '2020-07-30 00:22:33'),
(424, 188, 181, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:06:13', '2020-07-30 01:25:45'),
(425, 188, 181, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:06:14', '2020-07-30 01:25:45'),
(426, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:07:00', '2020-07-30 03:56:25'),
(427, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:07:00', '2020-07-30 03:56:25'),
(428, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:07:01', '2020-07-30 03:56:25'),
(429, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:07:01', '2020-07-30 03:56:25'),
(430, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:07:01', '2020-07-30 03:56:25'),
(431, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:07:11', '2020-07-30 03:56:25'),
(432, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:07:38', '2020-07-30 03:56:25'),
(433, 188, 181, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:07:46', '2020-07-30 01:25:45'),
(434, 181, 188, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:08:12', '2020-07-30 00:22:33'),
(435, 181, 188, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:08:13', '2020-07-30 00:22:33'),
(436, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:08:36', '2020-07-30 03:56:25'),
(437, 188, 181, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:09:35', '2020-07-30 01:25:45'),
(438, 188, 181, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:09:44', '2020-07-30 01:25:45'),
(439, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:10:55', '2020-07-30 03:56:25'),
(440, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:19:47', '2020-07-30 03:56:25'),
(441, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:19:54', '2020-07-30 03:56:25'),
(442, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:20:31', '2020-07-30 03:56:25'),
(443, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:20:53', '2020-07-30 03:56:25'),
(444, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:21:24', '2020-07-30 03:56:25'),
(445, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:21:53', '2020-07-30 03:56:25'),
(446, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:03', '2020-07-30 03:56:25'),
(447, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:04', '2020-07-30 03:56:25');
INSERT INTO `notification_streams` (`id`, `actor_id`, `receiver_id`, `verb`, `action`, `read`, `action_id`, `created_at`, `updated_at`) VALUES
(448, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:11', '2020-07-30 03:56:25'),
(449, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:12', '2020-07-30 03:56:25'),
(450, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:12', '2020-07-30 03:56:25'),
(451, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:13', '2020-07-30 03:56:25'),
(452, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:13', '2020-07-30 03:56:25'),
(453, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:13', '2020-07-30 03:56:25'),
(454, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:13', '2020-07-30 03:56:25'),
(455, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:14', '2020-07-30 03:56:25'),
(456, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:15', '2020-07-30 03:56:25'),
(457, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:22', '2020-07-30 03:56:25'),
(458, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:22:30', '2020-07-30 03:56:25'),
(459, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:23:28', '2020-07-30 03:56:25'),
(460, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:23:58', '2020-07-30 03:56:25'),
(461, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:23:59', '2020-07-30 03:56:25'),
(462, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:23:59', '2020-07-30 03:56:25'),
(463, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:24:01', '2020-07-30 03:56:25'),
(464, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:24:17', '2020-07-30 03:56:25'),
(465, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:24:21', '2020-07-30 03:56:25'),
(466, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:24:38', '2020-07-30 03:56:25'),
(467, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:28:30', '2020-07-30 03:56:25'),
(468, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:28:34', '2020-07-30 03:56:25'),
(469, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:28:41', '2020-07-30 03:56:25'),
(470, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:31:30', '2020-07-30 03:56:25'),
(471, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:31:49', '2020-07-30 03:56:25'),
(472, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:32:01', '2020-07-30 03:56:25'),
(473, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:32:08', '2020-07-30 03:56:25'),
(474, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:32:13', '2020-07-30 03:56:25'),
(475, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:33:29', '2020-07-30 03:56:25'),
(476, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:34:16', '2020-07-30 03:56:25'),
(477, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:34:37', '2020-07-30 03:56:25'),
(478, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:35:03', '2020-07-30 03:56:25'),
(479, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:35:04', '2020-07-30 03:56:25'),
(480, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:35:14', '2020-07-30 03:56:25'),
(481, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:35:25', '2020-07-30 03:56:25'),
(482, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:35:59', '2020-07-30 03:56:25'),
(483, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:10', '2020-07-30 03:56:25'),
(484, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:10', '2020-07-30 03:56:25'),
(485, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(486, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(487, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(488, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(489, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(490, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(491, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(492, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(493, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(494, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:11', '2020-07-30 03:56:25'),
(495, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:12', '2020-07-30 03:56:25'),
(496, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:27', '2020-07-30 03:56:25'),
(497, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:46', '2020-07-30 03:56:25'),
(498, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:46', '2020-07-30 03:56:25'),
(499, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:36:51', '2020-07-30 03:56:25'),
(500, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:38:30', '2020-07-30 03:56:25'),
(501, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:39:18', '2020-07-30 03:56:25'),
(502, 188, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:39:20', '2020-07-30 03:56:25'),
(503, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:39:33', '2020-07-30 03:56:25'),
(504, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:39:34', '2020-07-30 03:56:25'),
(505, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:39:58', '2020-07-30 03:56:25'),
(506, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:39:58', '2020-07-30 03:56:25'),
(507, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:03', '2020-07-30 03:56:25'),
(508, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:07', '2020-07-30 03:56:25'),
(509, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:11', '2020-07-30 03:56:25'),
(510, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:11', '2020-07-30 03:56:25'),
(511, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:11', '2020-07-30 03:56:25'),
(512, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:12', '2020-07-30 03:56:25'),
(513, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:12', '2020-07-30 03:56:25'),
(514, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:20', '2020-07-30 03:56:25'),
(515, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:29', '2020-07-30 03:56:25'),
(516, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:40', '2020-07-30 03:56:25'),
(517, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:40:44', '2020-07-30 03:56:25'),
(518, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:41:09', '2020-07-30 03:56:25'),
(519, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:41:43', '2020-07-30 03:56:25'),
(520, 122, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:41:57', '2020-07-30 03:56:25'),
(521, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:42:06', '2020-07-30 03:56:25'),
(522, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:44:03', '2020-07-30 03:56:25'),
(523, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:44:04', '2020-07-30 03:56:25'),
(524, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:44:31', '2020-07-30 03:56:25'),
(525, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:45:04', '2020-07-30 03:56:25'),
(526, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:49:50', '2020-07-30 03:56:25'),
(527, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:50:48', '2020-07-30 03:56:25'),
(528, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:50:48', '2020-07-30 03:56:25'),
(529, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:50:49', '2020-07-30 03:56:25'),
(530, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:50:51', '2020-07-30 03:56:25'),
(531, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:50:52', '2020-07-30 03:56:25'),
(532, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:50:55', '2020-07-30 03:56:25'),
(533, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:50:57', '2020-07-30 03:56:25'),
(534, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:52:20', '2020-07-30 03:56:25'),
(535, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:52:25', '2020-07-30 03:56:25'),
(536, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:52:26', '2020-07-30 03:56:25'),
(537, 152, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:52:43', '2020-07-30 03:56:25'),
(538, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:54:14', '2020-07-30 03:56:25'),
(539, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 00:54:19', '2020-07-30 03:56:25'),
(540, 150, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 01:00:05', '2020-07-30 03:56:25'),
(541, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 01:00:12', '2020-07-30 03:56:25'),
(542, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 01:00:12', '2020-07-30 03:56:25'),
(543, 169, 122, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-07-30 01:00:13', '2020-07-30 03:56:25'),
(544, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-31 12:32:26', '2020-08-21 02:40:38'),
(545, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-07-31 12:32:26', '2020-08-16 22:05:04'),
(546, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-03 15:25:01', '2020-08-21 02:40:38'),
(547, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-03 15:25:01', '2020-08-16 22:05:04'),
(548, 190, 191, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-08-03 15:28:56', '2020-08-06 09:29:14'),
(549, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 11:01:35', '2020-08-21 02:40:38'),
(550, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 11:01:35', '2020-08-16 22:05:04'),
(551, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 11:01:59', '2020-08-21 02:40:38'),
(552, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 11:01:59', '2020-08-16 22:05:04'),
(553, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 11:56:57', '2020-08-21 02:40:38'),
(554, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 11:56:57', '2020-08-16 22:05:04'),
(555, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 11:57:31', '2020-08-21 02:40:38'),
(556, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 11:57:31', '2020-08-16 22:05:04'),
(557, 190, 191, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-08-05 13:17:14', '2020-08-06 09:29:14'),
(558, 189, 191, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-08-05 13:17:21', '2020-08-06 09:29:14'),
(559, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 13:37:41', '2020-08-21 02:40:38'),
(560, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 13:37:42', '2020-08-16 22:05:04'),
(561, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 22:50:55', '2020-08-21 02:40:38'),
(562, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 22:50:55', '2020-08-16 22:05:04'),
(563, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 22:54:18', '2020-08-21 02:40:38'),
(564, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 22:54:18', '2020-08-16 22:05:04'),
(565, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 22:56:28', '2020-08-21 02:40:38'),
(566, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 22:56:28', '2020-08-16 22:05:04'),
(567, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 23:04:14', '2020-08-21 02:40:38'),
(568, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 23:04:14', '2020-08-16 22:05:04'),
(569, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 23:05:10', '2020-08-21 02:40:38'),
(570, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 23:05:10', '2020-08-16 22:05:04'),
(571, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 23:07:26', '2020-08-21 02:40:38'),
(572, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-05 23:07:26', '2020-08-16 22:05:04'),
(573, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-06 09:36:09', '2020-08-21 02:40:38'),
(574, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-06 09:36:09', '2020-08-16 22:05:04'),
(575, 190, 189, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-08-06 10:11:43', '2020-08-06 10:12:34'),
(576, 189, 190, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-08-06 10:12:13', '2020-08-06 10:13:07'),
(577, 190, 189, 'CHAT', 'Just Sent you a new message!', 1, NULL, '2020-08-06 10:12:24', '2020-08-06 10:12:34'),
(578, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-06 10:21:17', '2020-08-21 02:40:38'),
(579, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-06 10:21:17', '2020-08-16 22:05:04'),
(580, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-11 22:46:15', '2020-08-21 02:40:38'),
(581, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-11 22:46:15', '2020-08-16 22:05:04'),
(582, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-16 22:04:50', '2020-08-21 02:40:38'),
(583, 189, 191, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-16 22:04:50', '2020-08-16 22:05:04'),
(584, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-19 03:39:47', '2020-08-21 02:40:38'),
(585, 189, 191, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-08-19 03:39:47', '2020-08-19 03:39:47'),
(586, 189, 190, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-08-19 03:41:56', '2020-08-21 02:40:38'),
(587, 189, 191, 'SESSION', 'Just Started a Group Session', 0, NULL, '2020-08-19 03:41:56', '2020-08-19 03:41:56'),
(588, 72, 98, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-11-05 07:07:20', '2020-11-07 03:51:11'),
(589, 72, 72, 'SESSION', 'Just Started a Group Session', 1, NULL, '2020-11-05 07:08:29', '2021-04-16 00:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` int(11) NOT NULL,
  `per_hour_amount` double(8,2) NOT NULL,
  `total_amount` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `hours`, `per_hour_amount`, `total_amount`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Pro', 10, 35.00, 350.00, 'Pro package description.', '2021-04-22 04:41:25', '2021-04-22 04:41:25', NULL),
(3, 'Plus', 20, 34.00, 680.00, 'Plus package description testingg.', '2021-04-22 04:43:30', '2021-04-22 04:43:30', NULL),
(4, 'Premium', 25, 30.50, 762.50, 'Premium description tesing..', '2021-04-22 04:46:58', '2021-04-22 04:46:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parent_students`
--

CREATE TABLE `parent_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_students`
--

INSERT INTO `parent_students` (`id`, `student_name`, `student_dob`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Parent', '2021-05-14', 221, '2021-05-20 04:54:15', '2021-05-20 04:54:15'),
(2, 'Parent', '2021-05-14', 221, '2021-05-20 04:55:01', '2021-05-20 04:55:01'),
(3, 'Test Parent Student', '2021-05-20', 222, '2021-05-20 04:57:20', '2021-05-20 04:57:20'),
(4, 'Child A', '2021-05-07', 223, '2021-05-20 05:41:39', '2021-05-20 05:41:39'),
(6, 'Kashif Ali', '2009-06-15', 223, '2021-05-21 00:48:07', '2021-05-21 00:49:40'),
(7, 'New Studen', '2021-05-09', 223, '2021-05-21 00:50:05', '2021-05-21 00:50:05'),
(8, 'Danial Vitory', '2007/03/08', 227, '2021-05-27 15:37:08', '2021-05-27 15:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asdasd', '1581940265post-crud-with-slug-model-mutator-accessor.PNG', '2020-02-25 19:00:00', '2020-02-17 06:51:49', '2020-02-17 06:51:49'),
(2, 'umar wazir', '2HY0oCTM0pDAq89f4zHH1XJk6YZWAJlvejZjUAMl.jpeg', '2020-02-17 06:43:27', '2020-05-22 04:59:07', '2020-05-22 04:59:07'),
(3, 'xyz', 'MBlKRddH1BTQSdzmTYTh63fYrQPSTGwZlrNvrejW.png', '2020-02-24 13:25:44', '2020-05-22 04:59:04', '2020-05-22 04:59:04'),
(4, 'ACCES', 'xksw9XT4YiB3Jnqc8kf3dmGyVVa9P4h5BiTjPiOt.jpeg', '2020-05-20 09:31:03', '2020-05-22 04:58:14', '2020-05-22 04:58:14'),
(5, 'ACCES', 'vharRBQsXrkr4gVYPFHcrmkHDNBPEm696NpuSRBL.png', '2020-05-26 10:46:37', '2020-05-28 11:49:12', NULL),
(6, 'Toon Tutors', 'wsjwo3Qg3UlkVQOvcNpRyd9LmOlOrWiSdQiYUGXm.jpeg', '2020-05-28 11:45:35', '2020-05-28 11:45:35', NULL),
(7, 'Enactus U of A', '1aTEk9NQS11gx1DjELy3IOjpgCky0aIPSiJqNlLc.png', '2020-06-20 09:57:52', '2020-06-20 09:59:31', NULL),
(8, 'eHUB', 'WOeZBwy11bXhyrAgT1gXAA73aye0PUsJje7RAKMP.png', '2020-07-11 02:24:15', '2020-07-11 02:26:29', NULL),
(9, 'ACCES (2)', 'lddqahZwiIR8yV1m5q2VHGf05gbhSqthgxpOM9m1.png', '2020-07-28 13:46:49', '2020-07-28 13:47:16', NULL),
(10, 'League of Innovators', 'yaK0cA1R1houpFnNDgHN6lTQ42rkOzBkcHXqxzVr.png', '2020-07-30 09:06:21', '2020-07-30 09:06:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sahamnadeem@gmail.com', '$2y$10$35ctabMfUjni6gxkXoH0iuF0H6Zm7KVNqmKau30Rm5sU74/0p7mdO', '2020-06-03 19:23:39'),
('andersonwobbie@gmail.com', '$2y$10$MsiHy167iMKMLAGWn7q5..c9yZ/UTiitrsQsw4wVgeSSyZeAqufdm', '2020-07-08 00:59:39'),
('znasiem@outlook.com', '$2y$10$1HQDkVY03Am3SknZQh4KtuIV245EpubpLV6pYMiYRxcKG4H53HF.W', '2020-07-23 00:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(15,2) NOT NULL,
  `sprice` double DEFAULT NULL,
  `gprice` double DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `duration`, `price`, `sprice`, `gprice`, `description`, `discount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Basic', 'Monthly', 120.00, 160, 200, 'Get matched with a verified TalkMaze coach \r\n4 hours included per month\r\nAll resources included', NULL, '2020-02-18 19:00:00', '2020-06-27 00:09:23', NULL),
(2, 'Standard', '4 months', 114.00, 152, 190, 'Get matched with a verified TalkMaze coach \r\n16 hours included in total\r\nAll resources included', NULL, '2020-02-18 07:57:22', '2020-06-27 11:32:29', NULL),
(3, 'Premium', '8 Months', 108.00, 144, 180, 'Get matched with a verified TalkMaze coach \r\n32 hours included in total\r\nAll resources included', NULL, '2020-02-24 13:19:39', '2020-07-05 06:47:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meeting_session_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `meeting_session_id`, `user_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 2, 212, '2.5', 'Test review', '2021-04-28 01:30:27', '2021-04-28 01:30:27'),
(2, 3, 105, '3.5', 'Waao nice reveiew', '2021-04-28 01:47:04', '2021-04-28 01:47:04'),
(3, 3, 212, '3', 'Yes Good', '2021-04-28 02:02:20', '2021-04-28 02:02:20'),
(4, 1, 121, '4', 'Oh waao nice class ..', '2021-04-28 06:08:17', '2021-04-28 06:08:17'),
(5, 4, 105, '4', 'Waao Nice Yaar', '2021-05-05 15:25:06', '2021-05-05 15:25:06'),
(6, 1, 105, '4', 'Good MashaAllah', '2021-05-05 15:25:31', '2021-05-05 15:25:31'),
(7, 8, 105, '4', 'Very good experiance in this session.', '2021-05-17 15:48:17', '2021-05-17 15:48:17'),
(8, 8, 214, '4', 'You are a good tutor.', '2021-05-17 15:49:11', '2021-05-17 15:49:11'),
(9, 9, 225, '4', 'Test review', '2021-05-26 05:06:39', '2021-05-26 05:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Administration', NULL, NULL),
(2, 'user', 'User', 'User', NULL, NULL),
(3, 'coach', 'Coach', 'Coach', NULL, NULL),
(4, 'parent', 'Parent Dashboard', 'Parent Manage Child Education', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'App\\User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(3, 2, 'App\\User'),
(3, 10, 'App\\User'),
(2, 44, 'App\\User'),
(1, 52, 'App\\User'),
(2, 66, 'App\\User'),
(3, 72, 'App\\User'),
(2, 79, 'App\\User'),
(2, 80, 'App\\User'),
(2, 81, 'App\\User'),
(2, 84, 'App\\User'),
(2, 86, 'App\\User'),
(2, 94, 'App\\User'),
(2, 95, 'App\\User'),
(2, 98, 'App\\User'),
(2, 100, 'App\\User'),
(2, 101, 'App\\User'),
(1, 103, 'App\\User'),
(3, 105, 'App\\User'),
(2, 108, 'App\\User'),
(2, 109, 'App\\User'),
(2, 110, 'App\\User'),
(2, 111, 'App\\User'),
(2, 112, 'App\\User'),
(2, 113, 'App\\User'),
(2, 114, 'App\\User'),
(2, 115, 'App\\User'),
(2, 116, 'App\\User'),
(2, 117, 'App\\User'),
(2, 118, 'App\\User'),
(2, 119, 'App\\User'),
(2, 120, 'App\\User'),
(2, 121, 'App\\User'),
(1, 122, 'App\\User'),
(2, 123, 'App\\User'),
(2, 124, 'App\\User'),
(2, 125, 'App\\User'),
(2, 126, 'App\\User'),
(2, 127, 'App\\User'),
(2, 128, 'App\\User'),
(2, 129, 'App\\User'),
(2, 130, 'App\\User'),
(2, 132, 'App\\User'),
(2, 133, 'App\\User'),
(2, 134, 'App\\User'),
(2, 135, 'App\\User'),
(1, 136, 'App\\User'),
(2, 137, 'App\\User'),
(3, 138, 'App\\User'),
(2, 139, 'App\\User'),
(2, 140, 'App\\User'),
(2, 141, 'App\\User'),
(2, 142, 'App\\User'),
(2, 143, 'App\\User'),
(2, 144, 'App\\User'),
(2, 145, 'App\\User'),
(2, 146, 'App\\User'),
(1, 147, 'App\\User'),
(1, 148, 'App\\User'),
(1, 149, 'App\\User'),
(2, 150, 'App\\User'),
(2, 151, 'App\\User'),
(2, 152, 'App\\User'),
(2, 153, 'App\\User'),
(2, 154, 'App\\User'),
(2, 155, 'App\\User'),
(2, 156, 'App\\User'),
(2, 157, 'App\\User'),
(2, 158, 'App\\User'),
(2, 159, 'App\\User'),
(2, 160, 'App\\User'),
(2, 161, 'App\\User'),
(2, 162, 'App\\User'),
(2, 163, 'App\\User'),
(2, 164, 'App\\User'),
(2, 165, 'App\\User'),
(2, 168, 'App\\User'),
(2, 169, 'App\\User'),
(2, 170, 'App\\User'),
(3, 171, 'App\\User'),
(3, 172, 'App\\User'),
(3, 173, 'App\\User'),
(3, 174, 'App\\User'),
(3, 175, 'App\\User'),
(3, 176, 'App\\User'),
(3, 177, 'App\\User'),
(3, 178, 'App\\User'),
(2, 179, 'App\\User'),
(3, 180, 'App\\User'),
(3, 181, 'App\\User'),
(3, 182, 'App\\User'),
(3, 183, 'App\\User'),
(3, 184, 'App\\User'),
(2, 185, 'App\\User'),
(3, 186, 'App\\User'),
(3, 187, 'App\\User'),
(2, 188, 'App\\User'),
(3, 189, 'App\\User'),
(2, 190, 'App\\User'),
(2, 191, 'App\\User'),
(3, 192, 'App\\User'),
(2, 193, 'App\\User'),
(2, 194, 'App\\User'),
(3, 195, 'App\\User'),
(3, 196, 'App\\User'),
(2, 197, 'App\\User'),
(2, 198, 'App\\User'),
(1, 199, 'App\\User'),
(2, 200, 'App\\User'),
(2, 201, 'App\\User'),
(2, 202, 'App\\User'),
(2, 203, 'App\\User'),
(2, 204, 'App\\User'),
(2, 205, 'App\\User'),
(2, 206, 'App\\User'),
(2, 207, 'App\\User'),
(2, 208, 'App\\User'),
(2, 209, 'App\\User'),
(2, 210, 'App\\User'),
(2, 211, 'App\\User'),
(2, 212, 'App\\User'),
(2, 213, 'App\\User'),
(2, 214, 'App\\User'),
(2, 216, 'App\\User'),
(2, 220, 'App\\User'),
(2, 221, 'App\\User'),
(2, 222, 'App\\User'),
(4, 223, 'App\\User'),
(2, 224, 'App\\User'),
(2, 225, 'App\\User'),
(2, 226, 'App\\User'),
(4, 227, 'App\\User'),
(2, 228, 'App\\User'),
(2, 229, 'App\\User'),
(2, 289, 'App\\User'),
(3, 290, 'App\\User'),
(2, 291, 'App\\User'),
(2, 292, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tutor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coach_request_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_status` enum('pending','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `student_id`, `tutor_id`, `coach_request_id`, `date`, `active_date`, `slot`, `class_status`, `created_at`, `updated_at`) VALUES
(13, 121, 105, 7, '2021-04-19', '2021-04-19', '08:00am-08:30am', 'pending', '2021-04-26 03:55:33', '2021-04-26 03:55:33'),
(14, 121, 105, 7, '2021-04-19', '2021-04-19', '08:30am-09:00am', 'pending', '2021-04-26 03:55:33', '2021-04-26 03:55:33'),
(15, 121, 105, 7, '2021-04-19', '2021-04-19', '09:00am-09:30am', 'pending', '2021-04-26 03:55:33', '2021-04-26 03:55:33'),
(16, 121, 105, 7, '2021-04-19', '2021-04-19', '09:30am-10:00am', 'pending', '2021-04-26 03:55:33', '2021-04-26 03:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `recording` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_group` tinyint(1) NOT NULL DEFAULT 0,
  `room_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ended_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session_id`, `user_id`, `tutor_id`, `recording`, `status`, `is_group`, `room_id`, `created_at`, `updated_at`, `ended_at`) VALUES
(4, '57kcxtngl948zp2jhmudqf3a01servo6', 66, 2, NULL, 2, 0, NULL, '2020-04-04 07:43:44', '2020-04-04 07:43:44', '2020-04-06 19:00:00'),
(5, 'cw8af7gl3vekrtdnqxj1b9s5uh026zpm', 66, 2, NULL, 2, 0, NULL, '2020-04-04 07:46:41', '2020-04-04 07:46:41', '2020-04-06 19:00:00'),
(6, '0ds4xj723nmvf8ywbaocp19hkgz5it6q', 44, 2, NULL, 2, 0, NULL, '2020-04-07 05:53:49', '2020-04-07 05:53:49', '2020-04-06 19:00:00'),
(7, 'wy91b6ndo4hzaxvrlkpfte3ucqg50ms2', 44, 2, NULL, 2, 0, NULL, '2020-04-07 06:15:02', '2020-04-07 06:15:02', '2020-04-06 19:00:00'),
(8, 'o4ez8ac67kismfv9dhrwl320uxqp5gbj', 44, 2, NULL, 2, 0, NULL, '2020-04-07 07:00:56', '2020-04-07 07:00:56', '2020-04-06 19:00:00'),
(9, '0te4mf8693nv7wopqlbdr2csyh5z1aig', 44, 2, NULL, 2, 0, NULL, '2020-04-07 07:01:55', '2020-04-07 07:01:55', '2020-04-06 19:00:00'),
(10, 'a8jxw0er64vln1uq7td9bf5opmyhgs2z', 66, 2, NULL, 2, 0, NULL, '2020-04-07 09:13:19', '2020-04-07 09:13:19', '2020-04-06 19:00:00'),
(11, 'cps6warfe4xzhtou3qy9nikm7lj2d185', 66, 2, NULL, 2, 0, NULL, '2020-04-07 09:14:04', '2020-04-07 09:14:04', '2020-04-06 19:00:00'),
(12, 'wfl62u4s3dzyqg1nm508ijc7txhrbk9e', 66, 2, NULL, 2, 0, NULL, '2020-04-07 11:04:28', '2020-04-07 11:04:28', NULL),
(13, 'map98zguyo245b6s17fndkrwijxl3ecv', 66, 2, NULL, 2, 0, NULL, '2020-04-08 05:05:06', '2020-04-08 05:05:06', NULL),
(14, '9cdf7zto6g5jy4xr103bshwekmupv2ni', 66, 2, NULL, 2, 0, NULL, '2020-04-12 23:46:35', '2020-04-12 23:46:35', NULL),
(15, '74yi82lfoq9uvj51r3ps0ehxm6tndakg', 72, 2, NULL, 2, 0, NULL, '2020-04-27 02:32:18', '2020-04-27 02:32:18', NULL),
(24, '9651tayzqw0pcu3dvlfs2oinrbg7ehj4', 66, 2, NULL, 2, 1, 'o6bvy1ulm2', '2020-05-04 11:46:36', '2020-05-04 11:46:36', NULL),
(25, '9651tayzqw0pcu3dvlfs2oinrbg7ehj4', 44, 2, NULL, 2, 1, 'o6bvy1ulm2', '2020-05-04 11:46:36', '2020-05-04 11:46:36', NULL),
(26, '9651tayzqw0pcu3dvlfs2oinrbg7ehj4', 72, 2, NULL, 2, 1, 'o6bvy1ulm2', '2020-05-04 11:46:36', '2020-05-04 11:46:36', NULL),
(27, 'iczuvk85s2bgfy3onphwlerm90j1t6a7', 66, 2, NULL, 2, 1, 'dxraih2qwy', '2020-05-16 16:57:53', '2020-05-16 16:57:53', NULL),
(28, 'iczuvk85s2bgfy3onphwlerm90j1t6a7', 44, 2, NULL, 2, 1, 'dxraih2qwy', '2020-05-16 16:57:53', '2020-05-16 16:57:53', NULL),
(29, 'iczuvk85s2bgfy3onphwlerm90j1t6a7', 72, 2, NULL, 2, 1, 'dxraih2qwy', '2020-05-16 16:57:53', '2020-05-16 16:57:53', NULL),
(30, '4uk528z3mghjw1bopfvcy7xtis9dqe06', 66, 2, NULL, 2, 1, 'y75kqj1a83', '2020-05-20 13:18:44', '2020-05-20 13:18:44', NULL),
(31, '8zy94i1orptsf7xj6luq5vambgehdkn3', 66, 2, NULL, 2, 1, 'y0u5kzo23v', '2020-05-21 17:50:33', '2020-05-21 17:50:33', NULL),
(32, '8zy94i1orptsf7xj6luq5vambgehdkn3', 44, 2, NULL, 2, 1, 'y0u5kzo23v', '2020-05-21 17:50:33', '2020-05-21 17:50:33', NULL),
(33, '8zy94i1orptsf7xj6luq5vambgehdkn3', 68, 2, NULL, 2, 1, 'y0u5kzo23v', '2020-05-21 17:50:33', '2020-05-21 17:50:33', NULL),
(34, '8zy94i1orptsf7xj6luq5vambgehdkn3', 72, 2, NULL, 2, 1, 'y0u5kzo23v', '2020-05-21 17:50:33', '2020-05-21 17:50:33', NULL),
(35, 'lkvefqmob5swcyxzir247dt96upj8hag', 66, 2, NULL, 2, 1, '4br25qxc1s', '2020-05-22 10:34:23', '2020-05-22 10:34:23', NULL),
(36, '74mns1l36rbvegwckh0u25tiqjofzy8a', 85, 95, NULL, 2, 0, '93vaymzb8j', '2020-06-03 06:11:30', '2020-06-03 06:11:30', NULL),
(37, '7k2i1pfxyv0ztcb5ajs6nru3eg8oq9dl', 72, 98, NULL, 2, 0, 'acgmri5u8e', '2020-06-03 17:32:54', '2020-06-03 17:32:54', NULL),
(38, 'saf8vh2zik9pblnr1yj6ougcdw0e7qtx', 72, 98, NULL, 2, 0, 'acgmri5u8e', '2020-06-03 18:00:31', '2020-06-03 18:00:31', NULL),
(39, 'd4bqexjzchylfp0m832ow7tk1ri6vs5a', 72, 98, NULL, 2, 0, 'acgmri5u8e', '2020-06-03 18:02:25', '2020-06-03 18:02:25', NULL),
(40, 'wz8fxsu297ho45rmjk1ta6cygqd0nb3i', 72, 98, NULL, 2, 0, 'acgmri5u8e', '2020-06-03 18:03:10', '2020-06-03 18:03:10', NULL),
(41, '18xquosw5i6lgjfd0nprtyma724kzvbc', 72, 98, NULL, 2, 0, 'acgmri5u8e', '2020-06-03 18:05:09', '2020-06-03 18:05:09', NULL),
(42, 'in60fsgxvpkj24mhw5oqu1ytz9acelr7', 72, 98, NULL, 2, 0, 'acgmri5u8e', '2020-06-03 18:05:48', '2020-06-03 18:05:48', NULL),
(43, 'jxv69zhns8i7wa0cpe1ltyqd532kmbgr', 72, 98, NULL, 2, 0, 'acgmri5u8e', '2020-06-03 18:06:16', '2020-06-03 18:06:16', NULL),
(44, 'umf98b3xlgnaq2tek04ojs57pvh6zyiw', 72, 98, NULL, 2, 1, 'g72zsue6m5', '2020-06-03 18:31:41', '2020-06-03 18:31:41', NULL),
(45, 'mn10dj43kiqvyrtf5xos9wpguzhc6lab', 95, 100, NULL, 2, 1, 'lfj0vehby3', '2020-06-04 02:33:10', '2020-06-04 02:33:10', NULL),
(46, 'jlfcpx9z4w51vise6magh7t2q0ody3bu', 95, 100, NULL, 2, 0, 'yj278sxlq9', '2020-06-04 02:53:03', '2020-06-04 02:53:03', NULL),
(47, '742om5pg9wsa3vd8cirb1n6fxk0hutlq', 95, 100, NULL, 2, 0, '2r59mjy18o', '2020-06-04 23:24:11', '2020-06-04 23:24:11', NULL),
(48, 'vz45qcjrl2dyw81asetpi9xb6f7h0gn3', 95, 100, NULL, 2, 0, '2r59mjy18o', '2020-06-04 23:29:43', '2020-06-04 23:29:43', NULL),
(49, 'gnb1hc76qs3do9wprmlitujf2xyz4kae', 87, 100, NULL, 2, 1, '649rfjy8ab', '2020-06-07 06:09:33', '2020-06-07 06:09:33', NULL),
(50, 'gnb1hc76qs3do9wprmlitujf2xyz4kae', 112, 100, NULL, 2, 1, '649rfjy8ab', '2020-06-07 06:09:33', '2020-06-07 06:09:33', NULL),
(51, 'gnb1hc76qs3do9wprmlitujf2xyz4kae', 111, 100, NULL, 2, 1, '649rfjy8ab', '2020-06-07 06:09:33', '2020-06-07 06:09:33', NULL),
(52, 'gnb1hc76qs3do9wprmlitujf2xyz4kae', 87, 100, NULL, 2, 1, '649rfjy8ab', '2020-06-07 06:09:33', '2020-06-07 06:09:33', NULL),
(53, 'gnb1hc76qs3do9wprmlitujf2xyz4kae', 109, 100, NULL, 2, 1, '649rfjy8ab', '2020-06-07 06:09:33', '2020-06-07 06:09:33', NULL),
(54, 'kdnrl5x7p3bsia60q4guzwvjtf19mye2', 72, 98, NULL, 2, 0, 'acgmri5u8e', '2020-06-07 12:31:04', '2020-06-07 12:31:04', NULL),
(55, 'xmlcfgv786hiazy42ro5qs901npd3bjk', 116, 72, NULL, 2, 1, '4ldx7qtrg6', '2020-06-07 13:40:52', '2020-06-07 13:40:52', NULL),
(56, 'xmlcfgv786hiazy42ro5qs901npd3bjk', 115, 72, NULL, 2, 1, '4ldx7qtrg6', '2020-06-07 13:40:52', '2020-06-07 13:40:52', NULL),
(57, 'xmlcfgv786hiazy42ro5qs901npd3bjk', 115, 72, NULL, 2, 1, '4ldx7qtrg6', '2020-06-07 13:40:52', '2020-06-07 13:40:52', NULL),
(58, 'xmlcfgv786hiazy42ro5qs901npd3bjk', 98, 72, NULL, 2, 1, '4ldx7qtrg6', '2020-06-07 13:40:52', '2020-06-07 13:40:52', NULL),
(59, 'gaw4mzjrqp89xn1t3c6vi5heub07yds2', 116, 72, NULL, 2, 1, 'h8uc71qa9v', '2020-06-07 17:04:41', '2020-06-07 17:04:41', NULL),
(60, 'gaw4mzjrqp89xn1t3c6vi5heub07yds2', 115, 72, NULL, 2, 1, 'h8uc71qa9v', '2020-06-07 17:04:41', '2020-06-07 17:04:41', NULL),
(61, 'gaw4mzjrqp89xn1t3c6vi5heub07yds2', 115, 72, NULL, 2, 1, 'h8uc71qa9v', '2020-06-07 17:04:41', '2020-06-07 17:04:41', NULL),
(62, 'gaw4mzjrqp89xn1t3c6vi5heub07yds2', 98, 72, NULL, 2, 1, 'h8uc71qa9v', '2020-06-07 17:04:41', '2020-06-07 17:04:41', NULL),
(63, '27s9bic3ufpg5r4yvnd8zh1oam6jwtqk', 116, 72, NULL, 2, 1, 'gkeups9tfh', '2020-06-07 17:48:09', '2020-06-07 17:48:09', NULL),
(64, '27s9bic3ufpg5r4yvnd8zh1oam6jwtqk', 115, 72, NULL, 2, 1, 'gkeups9tfh', '2020-06-07 17:48:09', '2020-06-07 17:48:09', NULL),
(65, '27s9bic3ufpg5r4yvnd8zh1oam6jwtqk', 115, 72, NULL, 2, 1, 'gkeups9tfh', '2020-06-07 17:48:09', '2020-06-07 17:48:09', NULL),
(66, '27s9bic3ufpg5r4yvnd8zh1oam6jwtqk', 98, 72, NULL, 2, 1, 'gkeups9tfh', '2020-06-07 17:48:09', '2020-06-07 17:48:09', NULL),
(67, 'hnximol1w3g0d9rf6jqz4csak5epv2t8', 116, 72, NULL, 2, 1, 'wmiun84h7j', '2020-06-07 17:48:57', '2020-06-07 17:48:57', NULL),
(68, 'hnximol1w3g0d9rf6jqz4csak5epv2t8', 115, 72, NULL, 2, 1, 'wmiun84h7j', '2020-06-07 17:48:57', '2020-06-07 17:48:57', NULL),
(69, 'hnximol1w3g0d9rf6jqz4csak5epv2t8', 115, 72, NULL, 2, 1, 'wmiun84h7j', '2020-06-07 17:48:57', '2020-06-07 17:48:57', NULL),
(70, 'hnximol1w3g0d9rf6jqz4csak5epv2t8', 98, 72, NULL, 2, 1, 'wmiun84h7j', '2020-06-07 17:48:57', '2020-06-07 17:48:57', NULL),
(71, 'q653fh9gprk8ojy72vzcdilu1enb4xtw', 116, 72, NULL, 2, 1, '3z58cefgm6', '2020-06-07 17:57:07', '2020-06-07 17:57:07', NULL),
(72, 'q653fh9gprk8ojy72vzcdilu1enb4xtw', 115, 72, NULL, 2, 1, '3z58cefgm6', '2020-06-07 17:57:07', '2020-06-07 17:57:07', NULL),
(73, 'q653fh9gprk8ojy72vzcdilu1enb4xtw', 115, 72, NULL, 2, 1, '3z58cefgm6', '2020-06-07 17:57:07', '2020-06-07 17:57:07', NULL),
(74, 'q653fh9gprk8ojy72vzcdilu1enb4xtw', 98, 72, NULL, 2, 1, '3z58cefgm6', '2020-06-07 17:57:07', '2020-06-07 17:57:07', NULL),
(75, '7bkr1hzxwu56a8igs32qplmdyjtfvno4', 95, 100, NULL, 2, 0, '2r59mjy18o', '2020-06-08 09:56:38', '2020-06-08 09:56:38', NULL),
(76, 'bm4qw8xez3rh925g0tlj1cnu7a6yfopv', 98, 72, NULL, 2, 1, 'xa85q01wpg', '2020-06-09 14:42:16', '2020-06-09 14:42:16', NULL),
(77, '0o5hd9w18fjcq7p64gelauysv3xzrbnt', 98, 72, NULL, 2, 1, 'qb38jlszy7', '2020-06-09 15:01:19', '2020-06-09 15:01:19', NULL),
(78, 'axbtenclurf5vowhgzy0d26mqk437pjs', 98, 72, NULL, 2, 1, 'l7dka9v8nj', '2020-06-09 15:32:44', '2020-06-09 15:32:44', NULL),
(79, '5rdv3nc9mhasxw2ybug0fi6j1pze8ok7', 123, 122, NULL, 2, 1, 'm0i8bhz5wc', '2020-06-09 23:32:57', '2020-06-09 23:32:57', NULL),
(80, '5rdv3nc9mhasxw2ybug0fi6j1pze8ok7', 124, 122, NULL, 2, 1, 'm0i8bhz5wc', '2020-06-09 23:32:57', '2020-06-09 23:32:57', NULL),
(81, 'whjtvo01smgbqzy295dkpia3nfxceu87', 98, 72, NULL, 2, 1, 'hqcevwblx6', '2020-06-10 00:14:11', '2020-06-10 00:14:11', NULL),
(82, 'ju8drzvbeh3plqsimonw1g50k2t7y6af', 98, 122, NULL, 2, 1, 'plg0zunyec', '2020-06-10 01:35:23', '2020-06-10 01:35:23', NULL),
(83, 'ju8drzvbeh3plqsimonw1g50k2t7y6af', 125, 122, NULL, 2, 1, 'plg0zunyec', '2020-06-10 01:35:23', '2020-06-10 01:35:23', NULL),
(84, 'ju8drzvbeh3plqsimonw1g50k2t7y6af', 126, 122, NULL, 2, 1, 'plg0zunyec', '2020-06-10 01:35:23', '2020-06-10 01:35:23', NULL),
(85, 'ju8drzvbeh3plqsimonw1g50k2t7y6af', 128, 122, NULL, 2, 1, 'plg0zunyec', '2020-06-10 01:35:23', '2020-06-10 01:35:23', NULL),
(86, '5n8ajq42osmh9iulpxgz13cbkfedr60y', 98, 72, NULL, 2, 0, 'wqmx8bcye7', '2020-06-10 01:48:20', '2020-06-10 01:48:20', NULL),
(87, 'jbq1lgdy6s7phu9xo0it42erfn8cw3am', 98, 72, NULL, 2, 1, 'jvknz8rig3', '2020-06-10 01:49:21', '2020-06-10 01:49:21', NULL),
(88, '5lscxebp81gnj3h9qumfaiktvrz60yw7', 98, 122, NULL, 2, 1, 'lwdn62avim', '2020-06-10 02:46:20', '2020-06-10 02:46:20', NULL),
(89, '5lscxebp81gnj3h9qumfaiktvrz60yw7', 123, 122, NULL, 2, 1, 'lwdn62avim', '2020-06-10 02:46:20', '2020-06-10 02:46:20', NULL),
(90, '5lscxebp81gnj3h9qumfaiktvrz60yw7', 124, 122, NULL, 2, 1, 'lwdn62avim', '2020-06-10 02:46:20', '2020-06-10 02:46:20', NULL),
(91, '5lscxebp81gnj3h9qumfaiktvrz60yw7', 87, 122, NULL, 2, 1, 'lwdn62avim', '2020-06-10 02:46:20', '2020-06-10 02:46:20', NULL),
(92, 'dc7e0bo21wkzt6ya9jgfxl3qsumv4npr', 98, 72, NULL, 2, 1, '4dpao5fsnm', '2020-06-16 15:18:14', '2020-06-16 15:18:14', NULL),
(93, '0jpiv3geyozdw9lbcqfr756skha4txnu', 123, 122, NULL, 2, 1, '8a2m1th3cl', '2020-06-17 00:55:13', '2020-06-17 00:55:13', NULL),
(94, '0jpiv3geyozdw9lbcqfr756skha4txnu', 124, 122, NULL, 2, 1, '8a2m1th3cl', '2020-06-17 00:55:13', '2020-06-17 00:55:13', NULL),
(95, 'uv7lmcoq3bhnwa9eizgsk10fd4tp52x6', 98, 122, NULL, 2, 1, '0wxqz5uvtf', '2020-06-17 00:55:22', '2020-06-17 00:55:22', NULL),
(96, 'uv7lmcoq3bhnwa9eizgsk10fd4tp52x6', 125, 122, NULL, 2, 1, '0wxqz5uvtf', '2020-06-17 00:55:22', '2020-06-17 00:55:22', NULL),
(97, 'uv7lmcoq3bhnwa9eizgsk10fd4tp52x6', 126, 122, NULL, 2, 1, '0wxqz5uvtf', '2020-06-17 00:55:22', '2020-06-17 00:55:22', NULL),
(98, 'uv7lmcoq3bhnwa9eizgsk10fd4tp52x6', 128, 122, NULL, 2, 1, '0wxqz5uvtf', '2020-06-17 00:55:22', '2020-06-17 00:55:22', NULL),
(99, 'k597jl1eso6vnda2rtqmcuy3bfpxhgzw', 159, 122, NULL, 2, 1, 'bfvghw40ym', '2020-07-08 05:23:02', '2020-07-08 05:23:02', NULL),
(100, 'k597jl1eso6vnda2rtqmcuy3bfpxhgzw', 123, 122, NULL, 2, 1, 'bfvghw40ym', '2020-07-08 05:23:02', '2020-07-08 05:23:02', NULL),
(101, 'k597jl1eso6vnda2rtqmcuy3bfpxhgzw', 101, 122, NULL, 2, 1, 'bfvghw40ym', '2020-07-08 05:23:02', '2020-07-08 05:23:02', NULL),
(102, '2zh8ap9yw1mtsejdk7ci35rfogu0v4xq', 123, 122, NULL, 2, 1, 'f8zmbdjnh9', '2020-07-08 05:46:00', '2020-07-08 05:46:00', NULL),
(103, '2zh8ap9yw1mtsejdk7ci35rfogu0v4xq', 87, 122, NULL, 2, 1, 'f8zmbdjnh9', '2020-07-08 05:46:00', '2020-07-08 05:46:00', NULL),
(104, '2zh8ap9yw1mtsejdk7ci35rfogu0v4xq', 111, 122, NULL, 2, 1, 'f8zmbdjnh9', '2020-07-08 05:46:00', '2020-07-08 05:46:00', NULL),
(105, '2zh8ap9yw1mtsejdk7ci35rfogu0v4xq', 109, 122, NULL, 2, 1, 'f8zmbdjnh9', '2020-07-08 05:46:00', '2020-07-08 05:46:00', NULL),
(106, 'cupai38y25hjgex9rsodn1w6tb0klvf4', 101, 122, NULL, 2, 1, 'j1t0b4gxu9', '2020-07-08 23:09:38', '2020-07-08 23:09:38', NULL),
(107, 'cupai38y25hjgex9rsodn1w6tb0klvf4', 159, 122, NULL, 2, 1, 'j1t0b4gxu9', '2020-07-08 23:09:38', '2020-07-08 23:09:38', NULL),
(108, 'cupai38y25hjgex9rsodn1w6tb0klvf4', 87, 122, NULL, 2, 1, 'j1t0b4gxu9', '2020-07-08 23:09:38', '2020-07-08 23:09:38', NULL),
(109, 'cupai38y25hjgex9rsodn1w6tb0klvf4', 124, 122, NULL, 2, 1, 'j1t0b4gxu9', '2020-07-08 23:09:38', '2020-07-08 23:09:38', NULL),
(110, 'cupai38y25hjgex9rsodn1w6tb0klvf4', 95, 122, NULL, 2, 1, 'j1t0b4gxu9', '2020-07-08 23:09:38', '2020-07-08 23:09:38', NULL),
(111, 'g70ed2zlqhpo1c69b5kaj3nuywx8mtfs', 159, 122, NULL, 2, 1, '6zethn3akd', '2020-07-08 23:20:01', '2020-07-08 23:20:01', NULL),
(112, 'g70ed2zlqhpo1c69b5kaj3nuywx8mtfs', 101, 122, NULL, 2, 1, '6zethn3akd', '2020-07-08 23:20:01', '2020-07-08 23:20:01', NULL),
(113, 'g70ed2zlqhpo1c69b5kaj3nuywx8mtfs', 98, 122, NULL, 2, 1, '6zethn3akd', '2020-07-08 23:20:01', '2020-07-08 23:20:01', NULL),
(114, 'g70ed2zlqhpo1c69b5kaj3nuywx8mtfs', 124, 122, NULL, 2, 1, '6zethn3akd', '2020-07-08 23:20:01', '2020-07-08 23:20:01', NULL),
(115, 'p2rx7g0k5je93qtcw6yb1zlvm4isdhua', 159, 122, NULL, 2, 1, '1cwmhsebi9', '2020-07-08 23:43:13', '2020-07-08 23:43:13', NULL),
(116, 'p2rx7g0k5je93qtcw6yb1zlvm4isdhua', 87, 122, NULL, 2, 1, '1cwmhsebi9', '2020-07-08 23:43:13', '2020-07-08 23:43:13', NULL),
(117, 'p2rx7g0k5je93qtcw6yb1zlvm4isdhua', 101, 122, NULL, 2, 1, '1cwmhsebi9', '2020-07-08 23:43:13', '2020-07-08 23:43:13', NULL),
(118, 'fpiltgnau7b09qcxzs5h2w8d3ejryko4', 87, 122, NULL, 2, 1, '7ugcrzwd2x', '2020-07-08 23:50:19', '2020-07-08 23:50:19', NULL),
(119, 'fpiltgnau7b09qcxzs5h2w8d3ejryko4', 101, 122, NULL, 2, 1, '7ugcrzwd2x', '2020-07-08 23:50:19', '2020-07-08 23:50:19', NULL),
(120, 'fpiltgnau7b09qcxzs5h2w8d3ejryko4', 111, 122, NULL, 2, 1, '7ugcrzwd2x', '2020-07-08 23:50:19', '2020-07-08 23:50:19', NULL),
(121, 'fpiltgnau7b09qcxzs5h2w8d3ejryko4', 122, 122, NULL, 2, 1, '7ugcrzwd2x', '2020-07-08 23:50:19', '2020-07-08 23:50:19', NULL),
(122, 'fpiltgnau7b09qcxzs5h2w8d3ejryko4', 159, 122, NULL, 2, 1, '7ugcrzwd2x', '2020-07-08 23:50:19', '2020-07-08 23:50:19', NULL),
(123, 'fpiltgnau7b09qcxzs5h2w8d3ejryko4', 108, 122, NULL, 2, 1, '7ugcrzwd2x', '2020-07-08 23:50:19', '2020-07-08 23:50:19', NULL),
(124, 'fpiltgnau7b09qcxzs5h2w8d3ejryko4', 161, 122, NULL, 2, 1, '7ugcrzwd2x', '2020-07-08 23:50:19', '2020-07-08 23:50:19', NULL),
(125, '37h5qewp8suyn6kacj1xdimz20l9of4b', 151, 122, NULL, 2, 1, 'gj107cz6fy', '2020-07-08 23:58:56', '2020-07-08 23:58:56', NULL),
(126, '37h5qewp8suyn6kacj1xdimz20l9of4b', 150, 122, NULL, 2, 1, 'gj107cz6fy', '2020-07-08 23:58:56', '2020-07-08 23:58:56', NULL),
(127, '37h5qewp8suyn6kacj1xdimz20l9of4b', 152, 122, NULL, 2, 1, 'gj107cz6fy', '2020-07-08 23:58:56', '2020-07-08 23:58:56', NULL),
(128, '37h5qewp8suyn6kacj1xdimz20l9of4b', 156, 122, NULL, 2, 1, 'gj107cz6fy', '2020-07-08 23:58:56', '2020-07-08 23:58:56', NULL),
(129, '37h5qewp8suyn6kacj1xdimz20l9of4b', 157, 122, NULL, 2, 1, 'gj107cz6fy', '2020-07-08 23:58:56', '2020-07-08 23:58:56', NULL),
(130, 'n4rpf1b8hj3guqyz09lixt72a65veomc', 151, 122, NULL, 2, 1, '1x9203icub', '2020-07-15 23:55:13', '2020-07-15 23:55:13', NULL),
(131, 'n4rpf1b8hj3guqyz09lixt72a65veomc', 150, 122, NULL, 2, 1, '1x9203icub', '2020-07-15 23:55:13', '2020-07-15 23:55:13', NULL),
(132, 'n4rpf1b8hj3guqyz09lixt72a65veomc', 152, 122, NULL, 2, 1, '1x9203icub', '2020-07-15 23:55:13', '2020-07-15 23:55:13', NULL),
(133, 'n4rpf1b8hj3guqyz09lixt72a65veomc', 156, 122, NULL, 2, 1, '1x9203icub', '2020-07-15 23:55:13', '2020-07-15 23:55:13', NULL),
(134, 'n4rpf1b8hj3guqyz09lixt72a65veomc', 157, 122, NULL, 2, 1, '1x9203icub', '2020-07-15 23:55:13', '2020-07-15 23:55:13', NULL),
(135, 'n4rpf1b8hj3guqyz09lixt72a65veomc', 169, 122, NULL, 2, 1, '1x9203icub', '2020-07-15 23:55:13', '2020-07-15 23:55:13', NULL),
(136, '1zx803iufy49onhjwdsbk7le5am2rptg', 190, 189, NULL, 2, 1, 'tsj48d2ypo', '2020-07-22 11:31:02', '2020-07-22 11:31:02', NULL),
(137, '1zx803iufy49onhjwdsbk7le5am2rptg', 191, 189, NULL, 2, 1, 'tsj48d2ypo', '2020-07-22 11:31:02', '2020-07-22 11:31:02', NULL),
(138, 'jmvpon602e7z8wu3drsgi5f4t1y9haqk', 190, 189, NULL, 2, 1, 'lu70nmaijc', '2020-07-22 11:40:30', '2020-07-22 11:40:30', NULL),
(139, 'jmvpon602e7z8wu3drsgi5f4t1y9haqk', 191, 189, NULL, 2, 1, 'lu70nmaijc', '2020-07-22 11:40:30', '2020-07-22 11:40:30', NULL),
(140, 'irfmbk7gvlaqexwd340z968o5usyc12p', 190, 189, NULL, 2, 1, 'tz9h6wegcl', '2020-07-22 12:51:51', '2020-07-22 12:51:51', NULL),
(141, 'irfmbk7gvlaqexwd340z968o5usyc12p', 191, 189, NULL, 2, 1, 'tz9h6wegcl', '2020-07-22 12:51:51', '2020-07-22 12:51:51', NULL),
(142, '5qg3lah6sor084n9btjxzvucdp7ymei1', 190, 189, NULL, 2, 1, 'z05k8ytc64', '2020-07-22 12:59:00', '2020-07-22 12:59:00', NULL),
(143, '5qg3lah6sor084n9btjxzvucdp7ymei1', 191, 189, NULL, 2, 1, 'z05k8ytc64', '2020-07-22 12:59:00', '2020-07-22 12:59:00', NULL),
(144, 'apofrytc4x0giv8wz39qdej57skm6lnh', 190, 189, NULL, 2, 1, 'ze5v8frxus', '2020-07-22 13:06:01', '2020-07-22 13:06:01', NULL),
(145, 'apofrytc4x0giv8wz39qdej57skm6lnh', 191, 189, NULL, 2, 1, 'ze5v8frxus', '2020-07-22 13:06:01', '2020-07-22 13:06:01', NULL),
(146, 'wvqtfox670ruky8dczs12mhi95lb3ej4', 190, 189, NULL, 2, 1, '3mnlfpekot', '2020-07-23 13:07:50', '2020-07-22 13:07:50', NULL),
(147, 'wvqtfox670ruky8dczs12mhi95lb3ej4', 191, 189, NULL, 2, 1, '3mnlfpekot', '2020-07-23 13:07:50', '2020-07-22 13:07:50', NULL),
(148, 'dzfhb6g85t04qiscay7nxp1jukm3vlrw', 190, 189, NULL, 2, 1, 'ixplj9n06a', '2020-07-22 13:12:59', '2020-07-22 13:12:59', NULL),
(149, 'dzfhb6g85t04qiscay7nxp1jukm3vlrw', 191, 189, NULL, 2, 1, 'ixplj9n06a', '2020-07-22 13:12:59', '2020-07-22 13:12:59', NULL),
(150, '4b0tpevmz8s1aicxg9jy563nkdhf7quo', 190, 189, NULL, 2, 1, '368edktmu1', '2020-07-22 13:25:57', '2020-07-22 13:25:57', NULL),
(151, '4b0tpevmz8s1aicxg9jy563nkdhf7quo', 191, 189, NULL, 2, 1, '368edktmu1', '2020-07-22 13:25:57', '2020-07-22 13:25:57', NULL),
(152, 'xef2ksapg86z1bmq7jdy0i5lc9hwrtv3', 190, 189, NULL, 2, 1, 'adm042inr6', '2020-07-22 19:33:42', '2020-07-22 19:33:42', NULL),
(153, 'xef2ksapg86z1bmq7jdy0i5lc9hwrtv3', 191, 189, NULL, 2, 1, 'adm042inr6', '2020-07-22 19:33:42', '2020-07-22 19:33:42', NULL),
(154, '629pl1zydi5aftohq4g8rx0mbnsue7k3', 190, 189, NULL, 2, 1, 'wtp3hz85je', '2020-07-22 19:37:11', '2020-07-22 19:37:11', NULL),
(155, '629pl1zydi5aftohq4g8rx0mbnsue7k3', 191, 189, NULL, 2, 1, 'wtp3hz85je', '2020-07-22 19:37:11', '2020-07-22 19:37:11', NULL),
(156, '8twmx5gh49sufp1vokrjeinl63dbyc0z', 190, 189, NULL, 2, 1, '1chk56ulsm', '2020-07-22 21:30:38', '2020-07-22 21:30:38', NULL),
(157, '8twmx5gh49sufp1vokrjeinl63dbyc0z', 191, 189, NULL, 2, 1, '1chk56ulsm', '2020-07-22 21:30:38', '2020-07-22 21:30:38', NULL),
(158, 'hqny1e3dcu4gpio7wv2mxj0tk9a5b8zs', 190, 189, NULL, 2, 1, '2spn5g93md', '2020-07-22 23:36:12', '2020-07-22 23:36:12', NULL),
(159, 'hqny1e3dcu4gpio7wv2mxj0tk9a5b8zs', 191, 189, NULL, 2, 1, '2spn5g93md', '2020-07-22 23:36:12', '2020-07-22 23:36:12', NULL),
(160, 'ceibryt4af9w01xq5g2opnk6sdmhu3jz', 190, 189, NULL, 2, 1, '7itbwc8g2y', '2020-07-22 23:36:56', '2020-07-22 23:36:56', NULL),
(161, 'ceibryt4af9w01xq5g2opnk6sdmhu3jz', 191, 189, NULL, 2, 1, '7itbwc8g2y', '2020-07-22 23:36:56', '2020-07-22 23:36:56', NULL),
(162, 'p4zmo8710v3bsyf9ixc2jwrhdqe6ntu5', 151, 181, NULL, 2, 1, 'v6m1eoptzn', '2020-07-22 23:50:44', '2020-07-22 23:50:44', NULL),
(163, 'p4zmo8710v3bsyf9ixc2jwrhdqe6ntu5', 150, 181, NULL, 2, 1, 'v6m1eoptzn', '2020-07-22 23:50:44', '2020-07-22 23:50:44', NULL),
(164, 'p4zmo8710v3bsyf9ixc2jwrhdqe6ntu5', 152, 181, NULL, 2, 1, 'v6m1eoptzn', '2020-07-22 23:50:44', '2020-07-22 23:50:44', NULL),
(165, 'p4zmo8710v3bsyf9ixc2jwrhdqe6ntu5', 156, 181, NULL, 2, 1, 'v6m1eoptzn', '2020-07-22 23:50:44', '2020-07-22 23:50:44', NULL),
(166, 'p4zmo8710v3bsyf9ixc2jwrhdqe6ntu5', 157, 181, NULL, 2, 1, 'v6m1eoptzn', '2020-07-22 23:50:44', '2020-07-22 23:50:44', NULL),
(167, 'p4zmo8710v3bsyf9ixc2jwrhdqe6ntu5', 169, 181, NULL, 2, 1, 'v6m1eoptzn', '2020-07-22 23:50:44', '2020-07-22 23:50:44', NULL),
(168, 'p4zmo8710v3bsyf9ixc2jwrhdqe6ntu5', 188, 181, NULL, 2, 1, 'v6m1eoptzn', '2020-07-22 23:50:44', '2020-07-22 23:50:44', NULL),
(169, 'p4zmo8710v3bsyf9ixc2jwrhdqe6ntu5', 122, 181, NULL, 2, 1, 'v6m1eoptzn', '2020-07-22 23:50:44', '2020-07-22 23:50:44', NULL),
(170, 'beyzdpskjxtg8un420lqhifrv7mc6oa3', 98, 72, NULL, 2, 1, 'vx5z9onye3', '2020-07-23 00:35:24', '2020-07-23 00:35:24', NULL),
(171, 'f73gydv5c82suap49th6okiwmjelqnzr', 190, 189, NULL, 2, 1, '92a7n430o6', '2020-07-23 14:22:19', '2020-07-23 14:22:19', NULL),
(172, 'f73gydv5c82suap49th6okiwmjelqnzr', 191, 189, NULL, 2, 1, '92a7n430o6', '2020-07-23 14:22:19', '2020-07-23 14:22:19', NULL),
(173, 'zk4f8923hqamx0n5iuloywcrsv7pdg1b', 190, 189, NULL, 2, 1, 'wm4i1lofn6', '2020-07-23 16:16:02', '2020-07-23 16:16:02', NULL),
(174, 'zk4f8923hqamx0n5iuloywcrsv7pdg1b', 191, 189, NULL, 2, 1, 'wm4i1lofn6', '2020-07-23 16:16:02', '2020-07-23 16:16:02', NULL),
(175, 'kv2urqo1pxantsgjyc49360f87iwdbz5', 190, 189, NULL, 2, 1, 'bfl5o3zi4g', '2020-07-23 16:37:44', '2020-07-23 16:37:44', NULL),
(176, 'kv2urqo1pxantsgjyc49360f87iwdbz5', 191, 189, NULL, 2, 1, 'bfl5o3zi4g', '2020-07-23 16:37:44', '2020-07-23 16:37:44', NULL),
(177, 'vx6qt8hgcl1abim70uypnzjdfkr4o3sw', 190, 189, NULL, 2, 1, 'yabp86f4t2', '2020-07-23 16:43:11', '2020-07-23 16:43:11', NULL),
(178, 'vx6qt8hgcl1abim70uypnzjdfkr4o3sw', 191, 189, NULL, 2, 1, 'yabp86f4t2', '2020-07-23 16:43:11', '2020-07-23 16:43:11', NULL),
(179, 'f8pjw1vd5q9sn3xeco2mliytk4buah06', 190, 189, NULL, 2, 1, 'mbncg5izqd', '2020-07-23 21:58:38', '2020-07-23 21:58:38', NULL),
(180, 'f8pjw1vd5q9sn3xeco2mliytk4buah06', 191, 189, NULL, 2, 1, 'mbncg5izqd', '2020-07-23 21:58:38', '2020-07-23 21:58:38', NULL),
(181, 'bft6qve1o3chpla7n2xiy85krz9mdsg4', 190, 189, NULL, 2, 1, '0mwiltdr6g', '2020-07-23 22:27:56', '2020-07-23 22:27:56', NULL),
(182, 'bft6qve1o3chpla7n2xiy85krz9mdsg4', 191, 189, NULL, 2, 1, '0mwiltdr6g', '2020-07-23 22:27:56', '2020-07-23 22:27:56', NULL),
(183, '41a6s9owpg5m0fcujq7xhirz2tdnyek3', 190, 189, NULL, 2, 1, '1av0hgcuxk', '2020-07-23 22:32:18', '2020-07-23 22:32:18', NULL),
(184, '41a6s9owpg5m0fcujq7xhirz2tdnyek3', 191, 189, NULL, 2, 1, '1av0hgcuxk', '2020-07-23 22:32:18', '2020-07-23 22:32:18', NULL),
(185, 'vbfjqpuyd0chw2t3lrxin98sme5ka4o1', 190, 189, NULL, 2, 1, 'ijsn0g312c', '2020-07-23 22:33:41', '2020-07-23 22:33:41', NULL),
(186, 'vbfjqpuyd0chw2t3lrxin98sme5ka4o1', 191, 189, NULL, 2, 1, 'ijsn0g312c', '2020-07-23 22:33:41', '2020-07-23 22:33:41', NULL),
(187, '24bumncgeiqld6hjp35w1xk7rs09z8fy', 190, 189, NULL, 2, 1, '3j65b0vakl', '2020-07-24 00:12:34', '2020-07-24 00:12:34', NULL),
(188, '24bumncgeiqld6hjp35w1xk7rs09z8fy', 191, 189, NULL, 2, 1, '3j65b0vakl', '2020-07-24 00:12:34', '2020-07-24 00:12:34', NULL),
(189, 'tbv026r4ishfo3j91q7euka8zyx5lwcm', 190, 189, NULL, 2, 1, 'l4i1o57jd3', '2020-07-24 00:15:31', '2020-07-24 00:15:31', NULL),
(190, 'tbv026r4ishfo3j91q7euka8zyx5lwcm', 191, 189, NULL, 2, 1, 'l4i1o57jd3', '2020-07-24 00:15:31', '2020-07-24 00:15:31', NULL),
(191, 'v7gkpx6qoazidef2l5h3rjy9tb4smu1c', 190, 189, NULL, 2, 1, '6cf1bng4wi', '2020-07-24 11:41:36', '2020-07-24 11:41:36', NULL),
(192, 'v7gkpx6qoazidef2l5h3rjy9tb4smu1c', 191, 189, NULL, 2, 1, '6cf1bng4wi', '2020-07-24 11:41:36', '2020-07-24 11:41:36', NULL),
(193, '4q1rxot7uzfac5wlkdiyn2epm8hs3bj6', 190, 189, NULL, 2, 1, '2gszq6v4py', '2020-07-24 12:05:06', '2020-07-24 12:05:06', NULL),
(194, '4q1rxot7uzfac5wlkdiyn2epm8hs3bj6', 191, 189, NULL, 2, 1, '2gszq6v4py', '2020-07-24 12:05:06', '2020-07-24 12:05:06', NULL),
(195, 'gdplzwvhn4cki032ebqu9s7r6xoatjfy', 190, 189, NULL, 2, 1, '7584u1tcfg', '2020-07-24 21:56:58', '2020-07-24 21:56:58', NULL),
(196, 'gdplzwvhn4cki032ebqu9s7r6xoatjfy', 191, 189, NULL, 2, 1, '7584u1tcfg', '2020-07-24 21:56:58', '2020-07-24 21:56:58', NULL),
(197, 'yu3qlrpneds4k1jvc85im6h0wb2zg9fo', 190, 189, NULL, 2, 1, '5vtwo3if9k', '2020-07-24 22:42:05', '2020-07-24 22:42:05', NULL),
(198, 'yu3qlrpneds4k1jvc85im6h0wb2zg9fo', 191, 189, NULL, 2, 1, '5vtwo3if9k', '2020-07-24 22:42:05', '2020-07-24 22:42:05', NULL),
(199, 'v68k7913os0qu2gycw4aehdxpjftnil5', 190, 189, NULL, 2, 1, 'm4o21cu7eg', '2020-07-24 22:48:24', '2020-07-24 22:48:24', NULL),
(200, 'v68k7913os0qu2gycw4aehdxpjftnil5', 191, 189, NULL, 2, 1, 'm4o21cu7eg', '2020-07-24 22:48:24', '2020-07-24 22:48:24', NULL),
(201, 'pfej89y1wmcaitq3204vbo7dhgrluxnk', 190, 189, NULL, 2, 1, 'u43h912fn7', '2020-07-24 22:52:23', '2020-07-24 22:52:23', NULL),
(202, 'pfej89y1wmcaitq3204vbo7dhgrluxnk', 191, 189, NULL, 2, 1, 'u43h912fn7', '2020-07-24 22:52:23', '2020-07-24 22:52:23', NULL),
(203, 'gh4adum3816i70j5bnlfpsytz9orcqev', 190, 189, NULL, 2, 1, 'm0ojgsh6ri', '2020-07-24 22:56:44', '2020-07-24 22:56:44', NULL),
(204, 'gh4adum3816i70j5bnlfpsytz9orcqev', 191, 189, NULL, 2, 1, 'm0ojgsh6ri', '2020-07-24 22:56:44', '2020-07-24 22:56:44', NULL),
(205, 'cjl5nuek36r2pmfo8bsidw4gaxh19vq0', 190, 189, NULL, 2, 1, '7qgzw3th4l', '2020-07-24 23:05:45', '2020-07-24 23:05:45', NULL),
(206, 'cjl5nuek36r2pmfo8bsidw4gaxh19vq0', 191, 189, NULL, 2, 1, '7qgzw3th4l', '2020-07-24 23:05:45', '2020-07-24 23:05:45', NULL),
(207, 'r6uicedvws37gmzo1anh0plf2txjy5qk', 190, 189, NULL, 2, 1, 'krc1bviy8p', '2020-07-25 15:03:00', '2020-07-25 15:03:00', NULL),
(208, 'r6uicedvws37gmzo1anh0plf2txjy5qk', 191, 189, NULL, 2, 1, 'krc1bviy8p', '2020-07-25 15:03:00', '2020-07-25 15:03:00', NULL),
(209, '36bea849yrgcxhz2uowdfv1ks05mlqnp', 190, 189, NULL, 2, 1, 'n5rmc9d478', '2020-07-28 13:12:53', '2020-07-28 13:12:53', NULL),
(210, '36bea849yrgcxhz2uowdfv1ks05mlqnp', 191, 189, NULL, 2, 1, 'n5rmc9d478', '2020-07-28 13:12:53', '2020-07-28 13:12:53', NULL),
(211, 'b04vi6cr9l7osgyhefwq8jpntk31d5xa', 151, 181, NULL, 2, 1, 't3xry6mp49', '2020-07-29 23:50:04', '2020-07-29 23:50:04', NULL),
(212, 'b04vi6cr9l7osgyhefwq8jpntk31d5xa', 150, 181, NULL, 2, 1, 't3xry6mp49', '2020-07-29 23:50:04', '2020-07-29 23:50:04', NULL),
(213, 'b04vi6cr9l7osgyhefwq8jpntk31d5xa', 152, 181, NULL, 2, 1, 't3xry6mp49', '2020-07-29 23:50:04', '2020-07-29 23:50:04', NULL),
(214, 'b04vi6cr9l7osgyhefwq8jpntk31d5xa', 156, 181, NULL, 2, 1, 't3xry6mp49', '2020-07-29 23:50:04', '2020-07-29 23:50:04', NULL),
(215, 'b04vi6cr9l7osgyhefwq8jpntk31d5xa', 157, 181, NULL, 2, 1, 't3xry6mp49', '2020-07-29 23:50:04', '2020-07-29 23:50:04', NULL),
(216, 'b04vi6cr9l7osgyhefwq8jpntk31d5xa', 169, 181, NULL, 2, 1, 't3xry6mp49', '2020-07-29 23:50:04', '2020-07-29 23:50:04', NULL),
(217, 'b04vi6cr9l7osgyhefwq8jpntk31d5xa', 188, 181, NULL, 2, 1, 't3xry6mp49', '2020-07-29 23:50:04', '2020-07-29 23:50:04', NULL),
(218, 'b04vi6cr9l7osgyhefwq8jpntk31d5xa', 122, 181, NULL, 2, 1, 't3xry6mp49', '2020-07-29 23:50:04', '2020-07-29 23:50:04', NULL),
(219, 'e2xumrijsqhkdyco6v8tg4n3af79blz0', 190, 189, NULL, 2, 1, '6f1wyl85t7', '2020-07-31 12:32:27', '2020-07-31 12:32:27', NULL),
(220, 'e2xumrijsqhkdyco6v8tg4n3af79blz0', 191, 189, NULL, 2, 1, '6f1wyl85t7', '2020-07-31 12:32:27', '2020-07-31 12:32:27', NULL),
(221, 'jwimbqyd765p1fr0lkvc3nxhe8tz9s2o', 190, 189, NULL, 2, 1, '2vbhg4wnso', '2020-08-03 15:25:02', '2020-08-03 15:25:02', NULL),
(222, 'jwimbqyd765p1fr0lkvc3nxhe8tz9s2o', 191, 189, NULL, 2, 1, '2vbhg4wnso', '2020-08-03 15:25:02', '2020-08-03 15:25:02', NULL),
(223, 'omgnhx9wul8sqcibz14d6k5j7tp30vry', 190, 189, NULL, 2, 1, '30a6umhgey', '2020-08-05 11:01:35', '2020-08-05 11:01:35', NULL),
(224, 'omgnhx9wul8sqcibz14d6k5j7tp30vry', 191, 189, NULL, 2, 1, '30a6umhgey', '2020-08-05 11:01:35', '2020-08-05 11:01:35', NULL),
(225, 'renf0ozy957c4m2sdughqv3kl6wjxatb', 190, 189, NULL, 2, 1, '6kec813wyq', '2020-08-05 11:01:59', '2020-08-05 11:01:59', NULL),
(226, 'renf0ozy957c4m2sdughqv3kl6wjxatb', 191, 189, NULL, 2, 1, '6kec813wyq', '2020-08-05 11:01:59', '2020-08-05 11:01:59', NULL),
(227, 't1yimx9dqh75wjp0l8vs43fezacr2kub', 151, 122, NULL, 1, 1, '1u8d2w6nb7', '2020-08-05 11:53:39', '2020-08-05 11:53:39', NULL),
(228, 't1yimx9dqh75wjp0l8vs43fezacr2kub', 150, 122, NULL, 1, 1, '1u8d2w6nb7', '2020-08-05 11:53:39', '2020-08-05 11:53:39', NULL),
(229, 't1yimx9dqh75wjp0l8vs43fezacr2kub', 152, 122, NULL, 1, 1, '1u8d2w6nb7', '2020-08-05 11:53:39', '2020-08-05 11:53:39', NULL),
(230, 't1yimx9dqh75wjp0l8vs43fezacr2kub', 156, 122, NULL, 1, 1, '1u8d2w6nb7', '2020-08-05 11:53:39', '2020-08-05 11:53:39', NULL),
(231, 't1yimx9dqh75wjp0l8vs43fezacr2kub', 157, 122, NULL, 1, 1, '1u8d2w6nb7', '2020-08-05 11:53:39', '2020-08-05 11:53:39', NULL),
(232, 't1yimx9dqh75wjp0l8vs43fezacr2kub', 169, 122, NULL, 1, 1, '1u8d2w6nb7', '2020-08-05 11:53:39', '2020-08-05 11:53:39', NULL),
(233, 't1yimx9dqh75wjp0l8vs43fezacr2kub', 188, 122, NULL, 1, 1, '1u8d2w6nb7', '2020-08-05 11:53:39', '2020-08-05 11:53:39', NULL),
(234, 't1yimx9dqh75wjp0l8vs43fezacr2kub', 122, 122, NULL, 1, 1, '1u8d2w6nb7', '2020-08-05 11:53:39', '2020-08-05 11:53:39', NULL),
(235, 'we8vu9ds36ogbyc7mz4ltpa1kjx2q5ir', 190, 189, NULL, 2, 1, 'rfzu3xkc9e', '2020-08-05 11:56:57', '2020-08-05 11:56:57', NULL),
(236, 'we8vu9ds36ogbyc7mz4ltpa1kjx2q5ir', 191, 189, NULL, 2, 1, 'rfzu3xkc9e', '2020-08-05 11:56:57', '2020-08-05 11:56:57', NULL),
(237, '7qzx6c9ialvho2mtefy0845surpwkj3d', 190, 189, NULL, 2, 1, 'de213j7h54', '2020-08-05 11:57:31', '2020-08-05 11:57:31', NULL),
(238, '7qzx6c9ialvho2mtefy0845surpwkj3d', 191, 189, NULL, 2, 1, 'de213j7h54', '2020-08-05 11:57:31', '2020-08-05 11:57:31', NULL),
(239, 'l3ich94f1wg5naexpjytrm7zb06k8su2', 190, 189, NULL, 2, 1, 'if2u51praq', '2020-08-05 13:37:42', '2020-08-05 13:37:42', NULL),
(240, 'l3ich94f1wg5naexpjytrm7zb06k8su2', 191, 189, NULL, 2, 1, 'if2u51praq', '2020-08-05 13:37:42', '2020-08-05 13:37:42', NULL),
(241, 'tehyamlf2w9ps37dzc465niqu1j8brko', 190, 189, NULL, 2, 1, 'ds83au5xoh', '2020-08-05 22:50:56', '2020-08-05 22:50:56', NULL),
(242, 'tehyamlf2w9ps37dzc465niqu1j8brko', 191, 189, NULL, 2, 1, 'ds83au5xoh', '2020-08-05 22:50:56', '2020-08-05 22:50:56', NULL),
(243, '0uwa5vbr3ment7lqikx8gyf42hpdzs6c', 190, 189, NULL, 2, 1, 'mu4r5jnkqp', '2020-08-05 22:54:19', '2020-08-05 22:54:19', NULL),
(244, '0uwa5vbr3ment7lqikx8gyf42hpdzs6c', 191, 189, NULL, 2, 1, 'mu4r5jnkqp', '2020-08-05 22:54:19', '2020-08-05 22:54:19', NULL),
(245, '5sgai3nvbp6wlyqkrut290d8zx14johe', 190, 189, NULL, 2, 1, 'aq5oxz6cm4', '2020-08-05 22:56:28', '2020-08-05 22:56:28', NULL),
(246, '5sgai3nvbp6wlyqkrut290d8zx14johe', 191, 189, NULL, 2, 1, 'aq5oxz6cm4', '2020-08-05 22:56:28', '2020-08-05 22:56:28', NULL),
(247, '3sq2fimu5r86vtx09kjhbdwoy4ezg1cl', 190, 189, NULL, 2, 1, '6darfzp2uw', '2020-08-05 23:05:10', '2020-08-05 23:05:10', NULL),
(248, '3sq2fimu5r86vtx09kjhbdwoy4ezg1cl', 191, 189, NULL, 2, 1, '6darfzp2uw', '2020-08-05 23:05:10', '2020-08-05 23:05:10', NULL),
(249, '54vjf3802lghkmsqx76db91peuwioant', 190, 189, NULL, 2, 1, 'ly2tvhd43x', '2020-08-05 23:07:26', '2020-08-05 23:07:26', NULL),
(250, '54vjf3802lghkmsqx76db91peuwioant', 191, 189, NULL, 2, 1, 'ly2tvhd43x', '2020-08-05 23:07:26', '2020-08-05 23:07:26', NULL),
(251, '7a8qze3kwo5lx1t60gu29fihrdympn4c', 151, 122, NULL, 1, 1, 'st3pvm84qx', '2020-08-05 23:57:45', '2020-08-05 23:57:45', NULL),
(252, '7a8qze3kwo5lx1t60gu29fihrdympn4c', 150, 122, NULL, 1, 1, 'st3pvm84qx', '2020-08-05 23:57:45', '2020-08-05 23:57:45', NULL),
(253, '7a8qze3kwo5lx1t60gu29fihrdympn4c', 152, 122, NULL, 1, 1, 'st3pvm84qx', '2020-08-05 23:57:45', '2020-08-05 23:57:45', NULL),
(254, '7a8qze3kwo5lx1t60gu29fihrdympn4c', 156, 122, NULL, 1, 1, 'st3pvm84qx', '2020-08-05 23:57:45', '2020-08-05 23:57:45', NULL),
(255, '7a8qze3kwo5lx1t60gu29fihrdympn4c', 157, 122, NULL, 1, 1, 'st3pvm84qx', '2020-08-05 23:57:45', '2020-08-05 23:57:45', NULL),
(256, '7a8qze3kwo5lx1t60gu29fihrdympn4c', 169, 122, NULL, 1, 1, 'st3pvm84qx', '2020-08-05 23:57:45', '2020-08-05 23:57:45', NULL),
(257, '7a8qze3kwo5lx1t60gu29fihrdympn4c', 188, 122, NULL, 1, 1, 'st3pvm84qx', '2020-08-05 23:57:45', '2020-08-05 23:57:45', NULL),
(258, '7a8qze3kwo5lx1t60gu29fihrdympn4c', 122, 122, NULL, 1, 1, 'st3pvm84qx', '2020-08-05 23:57:45', '2020-08-05 23:57:45', NULL),
(259, 'xr9n5lpqwy6247m1e3ko8jisfzubgcvt', 190, 189, NULL, 2, 1, '14cpu0knjf', '2020-08-06 09:36:09', '2020-08-06 09:36:09', NULL),
(260, 'xr9n5lpqwy6247m1e3ko8jisfzubgcvt', 191, 189, NULL, 2, 1, '14cpu0knjf', '2020-08-06 09:36:09', '2020-08-06 09:36:09', NULL),
(261, 'dflecs5z1atpquk0x8i7my2r3g9hj4on', 190, 189, NULL, 2, 1, 'go0r859lsy', '2020-08-06 10:21:18', '2020-08-06 10:21:18', NULL),
(262, 'dflecs5z1atpquk0x8i7my2r3g9hj4on', 191, 189, NULL, 2, 1, 'go0r859lsy', '2020-08-06 10:21:18', '2020-08-06 10:21:18', NULL),
(263, 'q3vsxh5wml19fpin0k6ad2gr8juyocbz', 190, 189, NULL, 2, 1, 'mafjt68s7u', '2020-08-11 22:46:15', '2020-08-11 22:46:15', NULL),
(264, 'q3vsxh5wml19fpin0k6ad2gr8juyocbz', 191, 189, NULL, 2, 1, 'mafjt68s7u', '2020-08-11 22:46:15', '2020-08-11 22:46:15', NULL),
(265, 'o3nedaiy4hvl1pcfmbtz5w879q02k6xg', 190, 189, NULL, 2, 1, '2c9xbyfgh3', '2020-08-16 22:04:51', '2020-08-16 22:04:51', NULL),
(266, 'o3nedaiy4hvl1pcfmbtz5w879q02k6xg', 191, 189, NULL, 2, 1, '2c9xbyfgh3', '2020-08-16 22:04:51', '2020-08-16 22:04:51', NULL),
(267, 'dlmoe4bigwafq5h3ync62st01rpuj7z8', 151, 122, NULL, 1, 1, '6d1qk84mfb', '2020-08-19 03:12:51', '2020-08-19 03:12:51', NULL),
(268, 'dlmoe4bigwafq5h3ync62st01rpuj7z8', 150, 122, NULL, 1, 1, '6d1qk84mfb', '2020-08-19 03:12:51', '2020-08-19 03:12:51', NULL),
(269, 'dlmoe4bigwafq5h3ync62st01rpuj7z8', 152, 122, NULL, 1, 1, '6d1qk84mfb', '2020-08-19 03:12:51', '2020-08-19 03:12:51', NULL),
(270, 'dlmoe4bigwafq5h3ync62st01rpuj7z8', 156, 122, NULL, 1, 1, '6d1qk84mfb', '2020-08-19 03:12:51', '2020-08-19 03:12:51', NULL),
(271, 'dlmoe4bigwafq5h3ync62st01rpuj7z8', 157, 122, NULL, 1, 1, '6d1qk84mfb', '2020-08-19 03:12:51', '2020-08-19 03:12:51', NULL),
(272, 'dlmoe4bigwafq5h3ync62st01rpuj7z8', 169, 122, NULL, 1, 1, '6d1qk84mfb', '2020-08-19 03:12:51', '2020-08-19 03:12:51', NULL),
(273, 'dlmoe4bigwafq5h3ync62st01rpuj7z8', 188, 122, NULL, 1, 1, '6d1qk84mfb', '2020-08-19 03:12:51', '2020-08-19 03:12:51', NULL),
(274, 'dlmoe4bigwafq5h3ync62st01rpuj7z8', 122, 122, NULL, 1, 1, '6d1qk84mfb', '2020-08-19 03:12:51', '2020-08-19 03:12:51', NULL),
(275, 'tcp67flg1dvemrnh45o3jzqu2b08s9yk', 190, 189, NULL, 2, 1, 'ym504wpg3l', '2020-08-19 03:39:47', '2020-08-19 03:39:47', NULL),
(276, 'tcp67flg1dvemrnh45o3jzqu2b08s9yk', 191, 189, NULL, 2, 1, 'ym504wpg3l', '2020-08-19 03:39:47', '2020-08-19 03:39:47', NULL),
(277, 'i8jgc57pz13dmfxs6ovn4erbluyqha9w', 190, 189, NULL, 2, 1, 'j1kg5foq98', '2020-08-19 03:41:56', '2020-08-19 03:41:56', NULL),
(278, 'i8jgc57pz13dmfxs6ovn4erbluyqha9w', 191, 189, NULL, 2, 1, 'j1kg5foq98', '2020-08-19 03:41:56', '2020-08-19 03:41:56', NULL),
(279, 'orjks7gby2hpcf4ezd31uwvqa8l06mti', 98, 72, NULL, 1, 1, 's659wnk4rf', '2020-11-05 07:07:20', '2020-11-05 07:07:20', NULL),
(280, 'fbxypzwq3crau0ted1ns8loj259hmg4v', 72, 72, NULL, 1, 1, '6xt9dei1sj', '2020-11-05 07:08:29', '2020-11-05 07:08:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Veronica Schimmel', 'https://lorempixel.com/640/480/?79732', 'Et atque fugit praesentium non. Quo autem optio explicabo.', '2020-02-14 07:17:01', '2020-02-14 07:55:18', '2020-02-14 07:55:18'),
(2, 'oranje click facebook', '1581685251roses-2676639_1920.jpg', 'facebook/oranjeclick', '2020-02-14 07:17:01', '2020-02-17 01:54:44', '2020-02-17 01:54:44'),
(3, 'Haleigh Aufderhar', 'https://lorempixel.com/640/480/?37962', 'Quia quia voluptates itaque modi eaque ut. Tempora voluptas et possimus.', '2020-02-14 07:17:01', '2020-02-17 01:55:16', '2020-02-17 01:55:16'),
(4, 'Sim Vandervort', '1582202097rose.jpg', 'Ut id iste accusantium reprehenderit non similique omnis. Et amet dolor pariatur quam.', '2020-02-14 07:17:01', '2020-02-20 07:34:57', NULL),
(5, 'Antoinette Kulas', '1581685201roses-2676639_1920.jpg', 'Vel similique qui ducimus id. Laboriosam sit ut sit sint rem explicabo.', '2020-02-14 07:17:01', '2020-02-14 08:00:01', NULL),
(6, 'Prof. Lisa Denesik DDS', 'https://lorempixel.com/640/480/?12988', 'Et sed id nihil amet suscipit. Eos fuga ex dicta sint.', '2020-02-14 07:17:01', '2020-02-14 07:17:01', NULL),
(7, 'Dr. Orval Morissette', 'https://lorempixel.com/640/480/?94763', 'Quod eveniet quisquam tempora tenetur. Et totam iste tempore. Dolores rerum ab unde quidem quia.', '2020-02-14 07:17:01', '2020-02-14 07:17:01', NULL),
(8, 'Johnpaul DuBuque', 'https://lorempixel.com/640/480/?24357', 'Vel inventore sit ipsum et aut. Nemo voluptatem eum recusandae. Maiores pariatur repellat itaque.', '2020-02-14 07:17:01', '2020-02-14 07:17:01', NULL),
(9, 'Sheila Spencer', 'https://lorempixel.com/640/480/?97191', 'Atque cupiditate laborum voluptas eos. Et saepe temporibus animi corporis fugit.', '2020-02-14 07:17:01', '2020-02-14 07:17:01', NULL),
(10, 'Alvena Douglas', 'https://lorempixel.com/640/480/?56738', 'Ea a itaque et ut numquam voluptas nostrum. Rerum occaecati explicabo sint hic omnis.', '2020-02-14 07:17:01', '2020-02-14 07:17:01', NULL),
(11, 'facebook', '1581684693roses-2676639_1920.jpg', 'https://www.facebook.com/oranjeclick/', '2020-02-14 07:51:33', '2020-02-14 07:51:33', NULL),
(12, 'facebook', '1581684831roses-2676639_1920.jpg', 'https://www.facebook.com/oranjeclick/', '2020-02-14 07:53:51', '2020-02-14 07:53:51', NULL),
(13, 'xyz', '1582526093rose.jpg', 'xyz', '2020-02-24 13:34:36', '2020-02-24 13:34:53', NULL),
(14, 'xyz', 'MWN98dTjxjtQhBgYuxh9LhGBasqh5dfofzxnAJuK.png', 'https://www.facebook.com/oranjeclick/', '2020-02-24 14:26:13', '2020-02-24 14:30:07', NULL),
(15, 'Facebook', 'ZTRG0IUA2KugrSFjYhJP0FffW6ZlYYKmdKw5odaU.png', 'facebook.com/talkmaze', '2020-05-04 19:02:51', '2020-05-04 19:02:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stripe_transfers`
--

CREATE TABLE `stripe_transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stripe_transfer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `strip_test`
--

CREATE TABLE `strip_test` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strip_test`
--

INSERT INTO `strip_test` (`id`, `user_id`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 12345, 123, 'paid', '2020-09-10 22:06:45', '2020-09-10 22:06:45'),
(2, 5555, 123, 'paid', '2020-09-10 22:21:55', '2020-09-10 22:21:55'),
(3, 7890, 123, 'paid', '2020-09-12 00:05:04', '2020-09-12 00:05:04'),
(4, 7890, 123, 'paid', '2020-09-14 22:28:21', '2020-09-14 22:28:21'),
(5, 7890, 123, 'paid', '2020-09-14 22:33:45', '2020-09-14 22:33:45'),
(6, 190, 123, 'paid', '2020-09-15 02:31:17', '2020-09-15 02:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `student_ratings`
--

CREATE TABLE `student_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_tutor`
--

CREATE TABLE `student_tutor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_group` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tutor`
--

INSERT INTO `student_tutor` (`id`, `tutor_id`, `student_id`, `room_id`, `is_group`, `created_at`, `updated_at`) VALUES
(10, 2, 66, 'dxhfb1lyk3', 0, NULL, NULL),
(11, 2, 44, 'whora4v8yc', 0, NULL, NULL),
(12, 2, 68, '2534p0jyth', 0, NULL, NULL),
(13, 2, 72, '0xel21ftrm', 0, NULL, NULL),
(26, 2, 66, 'lh1ne64rtm', 1, '2020-04-28 06:48:28', '2020-04-28 06:48:28'),
(27, 2, 44, 'lh1ne64rtm', 1, '2020-04-28 06:48:28', '2020-04-28 06:48:28'),
(28, 2, 68, 'lh1ne64rtm', 1, '2020-04-28 06:48:28', '2020-04-28 06:48:28'),
(29, 2, 72, 'lh1ne64rtm', 1, '2020-04-28 06:48:28', '2020-04-28 06:48:28'),
(34, 2, 66, 'o6bvy1ulm2', 1, '2020-05-04 11:46:36', '2020-05-04 11:46:36'),
(35, 2, 44, 'o6bvy1ulm2', 1, '2020-05-04 11:46:36', '2020-05-04 11:46:36'),
(36, 2, 72, 'o6bvy1ulm2', 1, '2020-05-04 11:46:36', '2020-05-04 11:46:36'),
(37, 2, 66, 'dxraih2qwy', 1, '2020-05-16 16:57:53', '2020-05-16 16:57:53'),
(38, 2, 44, 'dxraih2qwy', 1, '2020-05-16 16:57:53', '2020-05-16 16:57:53'),
(39, 2, 72, 'dxraih2qwy', 1, '2020-05-16 16:57:53', '2020-05-16 16:57:53'),
(40, 2, 66, 'y75kqj1a83', 1, '2020-05-20 13:18:44', '2020-05-20 13:18:44'),
(41, 2, 81, '5efowz3g61', 0, '2020-05-21 11:51:19', '2020-05-21 11:51:19'),
(42, 2, 66, 'y0u5kzo23v', 1, '2020-05-21 17:50:33', '2020-05-21 17:50:33'),
(43, 2, 44, 'y0u5kzo23v', 1, '2020-05-21 17:50:33', '2020-05-21 17:50:33'),
(44, 2, 68, 'y0u5kzo23v', 1, '2020-05-21 17:50:33', '2020-05-21 17:50:33'),
(45, 2, 72, 'y0u5kzo23v', 1, '2020-05-21 17:50:33', '2020-05-21 17:50:33'),
(46, 2, 66, '4br25qxc1s', 1, '2020-05-22 10:34:23', '2020-05-22 10:34:23'),
(47, 95, 85, '93vaymzb8j', 0, '2020-06-02 21:42:02', '2020-06-02 21:42:02'),
(48, 98, 72, 'acgmri5u8e', 0, '2020-06-03 17:32:35', '2020-06-03 17:32:35'),
(49, 98, 72, 'g72zsue6m5', 1, '2020-06-03 18:31:41', '2020-06-03 18:31:41'),
(50, 100, 95, 'lfj0vehby3', 1, '2020-06-04 02:33:10', '2020-06-04 02:33:10'),
(51, 100, 95, '2r59mjy18o', 0, '2020-06-04 02:49:59', '2020-06-04 02:49:59'),
(52, 100, 95, 'yj278sxlq9', 0, '2020-06-04 02:53:03', '2020-06-04 02:53:03'),
(53, 100, 87, '649rfjy8ab', 1, '2020-06-07 06:09:33', '2020-06-07 06:09:33'),
(54, 100, 112, '649rfjy8ab', 1, '2020-06-07 06:09:33', '2020-06-07 06:09:33'),
(55, 100, 111, '649rfjy8ab', 1, '2020-06-07 06:09:33', '2020-06-07 06:09:33'),
(56, 100, 87, '649rfjy8ab', 1, '2020-06-07 06:09:33', '2020-06-07 06:09:33'),
(57, 100, 109, '649rfjy8ab', 1, '2020-06-07 06:09:33', '2020-06-07 06:09:33'),
(58, 72, 116, '4ldx7qtrg6', 1, '2020-06-07 13:40:52', '2020-06-07 13:40:52'),
(59, 72, 115, '4ldx7qtrg6', 1, '2020-06-07 13:40:52', '2020-06-07 13:40:52'),
(60, 72, 115, '4ldx7qtrg6', 1, '2020-06-07 13:40:52', '2020-06-07 13:40:52'),
(61, 72, 98, '4ldx7qtrg6', 1, '2020-06-07 13:40:52', '2020-06-07 13:40:52'),
(62, 72, 116, 'h8uc71qa9v', 1, '2020-06-07 17:04:41', '2020-06-07 17:04:41'),
(63, 72, 115, 'h8uc71qa9v', 1, '2020-06-07 17:04:41', '2020-06-07 17:04:41'),
(64, 72, 115, 'h8uc71qa9v', 1, '2020-06-07 17:04:41', '2020-06-07 17:04:41'),
(65, 72, 98, 'h8uc71qa9v', 1, '2020-06-07 17:04:41', '2020-06-07 17:04:41'),
(66, 72, 116, 'gkeups9tfh', 1, '2020-06-07 17:48:09', '2020-06-07 17:48:09'),
(67, 72, 115, 'gkeups9tfh', 1, '2020-06-07 17:48:09', '2020-06-07 17:48:09'),
(68, 72, 115, 'gkeups9tfh', 1, '2020-06-07 17:48:09', '2020-06-07 17:48:09'),
(69, 72, 98, 'gkeups9tfh', 1, '2020-06-07 17:48:09', '2020-06-07 17:48:09'),
(70, 72, 116, 'wmiun84h7j', 1, '2020-06-07 17:48:56', '2020-06-07 17:48:56'),
(71, 72, 115, 'wmiun84h7j', 1, '2020-06-07 17:48:56', '2020-06-07 17:48:56'),
(72, 72, 115, 'wmiun84h7j', 1, '2020-06-07 17:48:56', '2020-06-07 17:48:56'),
(73, 72, 98, 'wmiun84h7j', 1, '2020-06-07 17:48:56', '2020-06-07 17:48:56'),
(74, 72, 116, '3z58cefgm6', 1, '2020-06-07 17:57:06', '2020-06-07 17:57:06'),
(75, 72, 115, '3z58cefgm6', 1, '2020-06-07 17:57:06', '2020-06-07 17:57:06'),
(76, 72, 115, '3z58cefgm6', 1, '2020-06-07 17:57:06', '2020-06-07 17:57:06'),
(77, 72, 98, '3z58cefgm6', 1, '2020-06-07 17:57:06', '2020-06-07 17:57:06'),
(78, 72, 98, 'wqmx8bcye7', 0, '2020-06-09 14:40:43', '2020-06-09 14:40:43'),
(79, 72, 98, 'xa85q01wpg', 1, '2020-06-09 14:42:16', '2020-06-09 14:42:16'),
(80, 72, 98, 'qb38jlszy7', 1, '2020-06-09 15:01:19', '2020-06-09 15:01:19'),
(81, 72, 98, 'l7dka9v8nj', 1, '2020-06-09 15:32:44', '2020-06-09 15:32:44'),
(82, 122, 123, 'm0i8bhz5wc', 1, '2020-06-09 23:32:57', '2020-06-09 23:32:57'),
(83, 122, 124, 'm0i8bhz5wc', 1, '2020-06-09 23:32:57', '2020-06-09 23:32:57'),
(84, 72, 98, 'hqcevwblx6', 1, '2020-06-10 00:14:11', '2020-06-10 00:14:11'),
(85, 122, 98, 'plg0zunyec', 1, '2020-06-10 01:35:23', '2020-06-10 01:35:23'),
(86, 122, 125, 'plg0zunyec', 1, '2020-06-10 01:35:23', '2020-06-10 01:35:23'),
(87, 122, 126, 'plg0zunyec', 1, '2020-06-10 01:35:23', '2020-06-10 01:35:23'),
(88, 122, 128, 'plg0zunyec', 1, '2020-06-10 01:35:23', '2020-06-10 01:35:23'),
(89, 72, 98, 'jvknz8rig3', 1, '2020-06-10 01:49:21', '2020-06-10 01:49:21'),
(90, 122, 98, 'lwdn62avim', 1, '2020-06-10 02:46:20', '2020-06-10 02:46:20'),
(91, 122, 123, 'lwdn62avim', 1, '2020-06-10 02:46:20', '2020-06-10 02:46:20'),
(92, 122, 124, 'lwdn62avim', 1, '2020-06-10 02:46:20', '2020-06-10 02:46:20'),
(93, 122, 87, 'lwdn62avim', 1, '2020-06-10 02:46:20', '2020-06-10 02:46:20'),
(94, 72, 98, '4dpao5fsnm', 1, '2020-06-16 15:18:14', '2020-06-16 15:18:14'),
(95, 122, 123, '8a2m1th3cl', 1, '2020-06-17 00:55:13', '2020-06-17 00:55:13'),
(96, 122, 124, '8a2m1th3cl', 1, '2020-06-17 00:55:13', '2020-06-17 00:55:13'),
(97, 122, 98, '0wxqz5uvtf', 1, '2020-06-17 00:55:22', '2020-06-17 00:55:22'),
(98, 122, 125, '0wxqz5uvtf', 1, '2020-06-17 00:55:22', '2020-06-17 00:55:22'),
(99, 122, 126, '0wxqz5uvtf', 1, '2020-06-17 00:55:22', '2020-06-17 00:55:22'),
(100, 122, 128, '0wxqz5uvtf', 1, '2020-06-17 00:55:22', '2020-06-17 00:55:22'),
(101, 122, 159, 'bfvghw40ym', 1, '2020-07-08 05:23:02', '2020-07-08 05:23:02'),
(102, 122, 123, 'bfvghw40ym', 1, '2020-07-08 05:23:02', '2020-07-08 05:23:02'),
(103, 122, 101, 'bfvghw40ym', 1, '2020-07-08 05:23:02', '2020-07-08 05:23:02'),
(104, 122, 123, 'f8zmbdjnh9', 1, '2020-07-08 05:46:00', '2020-07-08 05:46:00'),
(105, 122, 87, 'f8zmbdjnh9', 1, '2020-07-08 05:46:00', '2020-07-08 05:46:00'),
(106, 122, 111, 'f8zmbdjnh9', 1, '2020-07-08 05:46:00', '2020-07-08 05:46:00'),
(107, 122, 109, 'f8zmbdjnh9', 1, '2020-07-08 05:46:00', '2020-07-08 05:46:00'),
(108, 122, 101, 'j1t0b4gxu9', 1, '2020-07-08 23:09:38', '2020-07-08 23:09:38'),
(109, 122, 159, 'j1t0b4gxu9', 1, '2020-07-08 23:09:38', '2020-07-08 23:09:38'),
(110, 122, 87, 'j1t0b4gxu9', 1, '2020-07-08 23:09:38', '2020-07-08 23:09:38'),
(111, 122, 124, 'j1t0b4gxu9', 1, '2020-07-08 23:09:38', '2020-07-08 23:09:38'),
(112, 122, 95, 'j1t0b4gxu9', 1, '2020-07-08 23:09:38', '2020-07-08 23:09:38'),
(113, 122, 159, '6zethn3akd', 1, '2020-07-08 23:20:01', '2020-07-08 23:20:01'),
(114, 122, 101, '6zethn3akd', 1, '2020-07-08 23:20:01', '2020-07-08 23:20:01'),
(115, 122, 98, '6zethn3akd', 1, '2020-07-08 23:20:01', '2020-07-08 23:20:01'),
(116, 122, 124, '6zethn3akd', 1, '2020-07-08 23:20:01', '2020-07-08 23:20:01'),
(117, 122, 159, '1cwmhsebi9', 1, '2020-07-08 23:43:13', '2020-07-08 23:43:13'),
(118, 122, 87, '1cwmhsebi9', 1, '2020-07-08 23:43:13', '2020-07-08 23:43:13'),
(119, 122, 101, '1cwmhsebi9', 1, '2020-07-08 23:43:13', '2020-07-08 23:43:13'),
(120, 122, 87, '7ugcrzwd2x', 1, '2020-07-08 23:50:19', '2020-07-08 23:50:19'),
(121, 122, 101, '7ugcrzwd2x', 1, '2020-07-08 23:50:19', '2020-07-08 23:50:19'),
(122, 122, 111, '7ugcrzwd2x', 1, '2020-07-08 23:50:19', '2020-07-08 23:50:19'),
(123, 122, 122, '7ugcrzwd2x', 1, '2020-07-08 23:50:19', '2020-07-08 23:50:19'),
(124, 122, 159, '7ugcrzwd2x', 1, '2020-07-08 23:50:19', '2020-07-08 23:50:19'),
(125, 122, 108, '7ugcrzwd2x', 1, '2020-07-08 23:50:19', '2020-07-08 23:50:19'),
(126, 122, 161, '7ugcrzwd2x', 1, '2020-07-08 23:50:19', '2020-07-08 23:50:19'),
(127, 122, 151, 'gj107cz6fy', 1, '2020-07-08 23:58:56', '2020-07-08 23:58:56'),
(128, 122, 150, 'gj107cz6fy', 1, '2020-07-08 23:58:56', '2020-07-08 23:58:56'),
(129, 122, 152, 'gj107cz6fy', 1, '2020-07-08 23:58:56', '2020-07-08 23:58:56'),
(130, 122, 156, 'gj107cz6fy', 1, '2020-07-08 23:58:56', '2020-07-08 23:58:56'),
(131, 122, 157, 'gj107cz6fy', 1, '2020-07-08 23:58:56', '2020-07-08 23:58:56'),
(132, 122, 151, '1x9203icub', 1, '2020-07-15 23:55:13', '2020-07-15 23:55:13'),
(133, 122, 150, '1x9203icub', 1, '2020-07-15 23:55:13', '2020-07-15 23:55:13'),
(134, 122, 152, '1x9203icub', 1, '2020-07-15 23:55:13', '2020-07-15 23:55:13'),
(135, 122, 156, '1x9203icub', 1, '2020-07-15 23:55:13', '2020-07-15 23:55:13'),
(136, 122, 157, '1x9203icub', 1, '2020-07-15 23:55:13', '2020-07-15 23:55:13'),
(137, 122, 169, '1x9203icub', 1, '2020-07-15 23:55:13', '2020-07-15 23:55:13'),
(138, 189, 190, 'tsj48d2ypo', 1, '2020-07-22 11:31:02', '2020-07-22 11:31:02'),
(139, 189, 191, 'tsj48d2ypo', 1, '2020-07-22 11:31:02', '2020-07-22 11:31:02'),
(140, 189, 190, 'lu70nmaijc', 1, '2020-07-22 11:40:30', '2020-07-22 11:40:30'),
(141, 189, 191, 'lu70nmaijc', 1, '2020-07-22 11:40:30', '2020-07-22 11:40:30'),
(142, 189, 190, 'tz9h6wegcl', 1, '2020-07-22 12:51:51', '2020-07-22 12:51:51'),
(143, 189, 191, 'tz9h6wegcl', 1, '2020-07-22 12:51:51', '2020-07-22 12:51:51'),
(144, 189, 190, 'z05k8ytc64', 1, '2020-07-22 12:59:00', '2020-07-22 12:59:00'),
(145, 189, 191, 'z05k8ytc64', 1, '2020-07-22 12:59:00', '2020-07-22 12:59:00'),
(146, 189, 190, 'ze5v8frxus', 1, '2020-07-22 13:06:01', '2020-07-22 13:06:01'),
(147, 189, 191, 'ze5v8frxus', 1, '2020-07-22 13:06:01', '2020-07-22 13:06:01'),
(148, 189, 190, '3mnlfpekot', 1, '2020-07-22 13:07:50', '2020-07-22 13:07:50'),
(149, 189, 191, '3mnlfpekot', 1, '2020-07-22 13:07:50', '2020-07-22 13:07:50'),
(150, 189, 190, 'ixplj9n06a', 1, '2020-07-22 13:12:59', '2020-07-22 13:12:59'),
(151, 189, 191, 'ixplj9n06a', 1, '2020-07-22 13:12:59', '2020-07-22 13:12:59'),
(152, 189, 190, '368edktmu1', 1, '2020-07-22 13:25:57', '2020-07-22 13:25:57'),
(153, 189, 191, '368edktmu1', 1, '2020-07-22 13:25:57', '2020-07-22 13:25:57'),
(154, 189, 190, 'adm042inr6', 1, '2020-07-22 19:33:42', '2020-07-22 19:33:42'),
(155, 189, 191, 'adm042inr6', 1, '2020-07-22 19:33:42', '2020-07-22 19:33:42'),
(156, 189, 190, 'wtp3hz85je', 1, '2020-07-22 19:37:11', '2020-07-22 19:37:11'),
(157, 189, 191, 'wtp3hz85je', 1, '2020-07-22 19:37:11', '2020-07-22 19:37:11'),
(158, 189, 190, '1chk56ulsm', 1, '2020-07-22 21:30:38', '2020-07-22 21:30:38'),
(159, 189, 191, '1chk56ulsm', 1, '2020-07-22 21:30:38', '2020-07-22 21:30:38'),
(160, 189, 190, '2spn5g93md', 1, '2020-07-22 23:36:12', '2020-07-22 23:36:12'),
(161, 189, 191, '2spn5g93md', 1, '2020-07-22 23:36:12', '2020-07-22 23:36:12'),
(162, 189, 190, '7itbwc8g2y', 1, '2020-07-22 23:36:56', '2020-07-22 23:36:56'),
(163, 189, 191, '7itbwc8g2y', 1, '2020-07-22 23:36:56', '2020-07-22 23:36:56'),
(164, 122, 151, 'v6m1eoptzn', 1, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(165, 122, 150, 'v6m1eoptzn', 1, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(166, 122, 152, 'v6m1eoptzn', 1, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(167, 122, 156, 'v6m1eoptzn', 1, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(168, 122, 157, 'v6m1eoptzn', 1, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(169, 122, 169, 'v6m1eoptzn', 1, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(170, 122, 188, 'v6m1eoptzn', 1, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(171, 122, 122, 'v6m1eoptzn', 1, '2020-07-22 23:50:44', '2020-07-22 23:50:44'),
(172, 72, 98, 'vx5z9onye3', 1, '2020-07-23 00:35:24', '2020-07-23 00:35:24'),
(173, 189, 190, '92a7n430o6', 1, '2020-07-23 14:22:19', '2020-07-23 14:22:19'),
(174, 189, 191, '92a7n430o6', 1, '2020-07-23 14:22:19', '2020-07-23 14:22:19'),
(175, 189, 190, 'wm4i1lofn6', 1, '2020-07-23 16:16:02', '2020-07-23 16:16:02'),
(176, 189, 191, 'wm4i1lofn6', 1, '2020-07-23 16:16:02', '2020-07-23 16:16:02'),
(177, 189, 190, 'bfl5o3zi4g', 1, '2020-07-23 16:37:44', '2020-07-23 16:37:44'),
(178, 189, 191, 'bfl5o3zi4g', 1, '2020-07-23 16:37:44', '2020-07-23 16:37:44'),
(179, 189, 190, 'yabp86f4t2', 1, '2020-07-23 16:43:11', '2020-07-23 16:43:11'),
(180, 189, 191, 'yabp86f4t2', 1, '2020-07-23 16:43:11', '2020-07-23 16:43:11'),
(181, 189, 190, 'mbncg5izqd', 1, '2020-07-23 21:58:38', '2020-07-23 21:58:38'),
(182, 189, 191, 'mbncg5izqd', 1, '2020-07-23 21:58:38', '2020-07-23 21:58:38'),
(183, 189, 190, '0mwiltdr6g', 1, '2020-07-23 22:27:56', '2020-07-23 22:27:56'),
(184, 189, 191, '0mwiltdr6g', 1, '2020-07-23 22:27:56', '2020-07-23 22:27:56'),
(185, 189, 190, '1av0hgcuxk', 1, '2020-07-23 22:32:18', '2020-07-23 22:32:18'),
(186, 189, 191, '1av0hgcuxk', 1, '2020-07-23 22:32:18', '2020-07-23 22:32:18'),
(187, 189, 190, 'ijsn0g312c', 1, '2020-07-23 22:33:41', '2020-07-23 22:33:41'),
(188, 189, 191, 'ijsn0g312c', 1, '2020-07-23 22:33:41', '2020-07-23 22:33:41'),
(189, 189, 190, '3j65b0vakl', 1, '2020-07-24 00:12:34', '2020-07-24 00:12:34'),
(190, 189, 191, '3j65b0vakl', 1, '2020-07-24 00:12:34', '2020-07-24 00:12:34'),
(191, 189, 190, 'l4i1o57jd3', 1, '2020-07-24 00:15:31', '2020-07-24 00:15:31'),
(192, 189, 191, 'l4i1o57jd3', 1, '2020-07-24 00:15:31', '2020-07-24 00:15:31'),
(193, 189, 190, '6cf1bng4wi', 1, '2020-07-24 11:41:36', '2020-07-24 11:41:36'),
(194, 189, 191, '6cf1bng4wi', 1, '2020-07-24 11:41:36', '2020-07-24 11:41:36'),
(195, 189, 190, '2gszq6v4py', 1, '2020-07-24 12:05:06', '2020-07-24 12:05:06'),
(196, 189, 191, '2gszq6v4py', 1, '2020-07-24 12:05:06', '2020-07-24 12:05:06'),
(197, 189, 190, '7584u1tcfg', 1, '2020-07-24 21:56:58', '2020-07-24 21:56:58'),
(198, 189, 191, '7584u1tcfg', 1, '2020-07-24 21:56:58', '2020-07-24 21:56:58'),
(199, 189, 190, '5vtwo3if9k', 1, '2020-07-24 22:42:05', '2020-07-24 22:42:05'),
(200, 189, 191, '5vtwo3if9k', 1, '2020-07-24 22:42:05', '2020-07-24 22:42:05'),
(201, 189, 190, 'm4o21cu7eg', 1, '2020-07-24 22:48:24', '2020-07-24 22:48:24'),
(202, 189, 191, 'm4o21cu7eg', 1, '2020-07-24 22:48:24', '2020-07-24 22:48:24'),
(203, 189, 190, 'u43h912fn7', 1, '2020-07-24 22:52:23', '2020-07-24 22:52:23'),
(204, 189, 191, 'u43h912fn7', 1, '2020-07-24 22:52:23', '2020-07-24 22:52:23'),
(205, 189, 190, 'm0ojgsh6ri', 1, '2020-07-24 22:56:44', '2020-07-24 22:56:44'),
(206, 189, 191, 'm0ojgsh6ri', 1, '2020-07-24 22:56:44', '2020-07-24 22:56:44'),
(207, 189, 190, '7qgzw3th4l', 1, '2020-07-24 23:05:45', '2020-07-24 23:05:45'),
(208, 189, 191, '7qgzw3th4l', 1, '2020-07-24 23:05:45', '2020-07-24 23:05:45'),
(209, 189, 190, 'krc1bviy8p', 1, '2020-07-25 15:03:00', '2020-07-25 15:03:00'),
(210, 189, 191, 'krc1bviy8p', 1, '2020-07-25 15:03:00', '2020-07-25 15:03:00'),
(211, 189, 190, 'n5rmc9d478', 1, '2020-07-28 13:12:53', '2020-07-28 13:12:53'),
(212, 189, 191, 'n5rmc9d478', 1, '2020-07-28 13:12:53', '2020-07-28 13:12:53'),
(213, 181, 151, 't3xry6mp49', 1, '2020-07-29 23:50:04', '2020-07-29 23:50:04'),
(214, 181, 150, 't3xry6mp49', 1, '2020-07-29 23:50:04', '2020-07-29 23:50:04'),
(215, 181, 152, 't3xry6mp49', 1, '2020-07-29 23:50:04', '2020-07-29 23:50:04'),
(216, 181, 156, 't3xry6mp49', 1, '2020-07-29 23:50:04', '2020-07-29 23:50:04'),
(217, 181, 157, 't3xry6mp49', 1, '2020-07-29 23:50:04', '2020-07-29 23:50:04'),
(218, 181, 169, 't3xry6mp49', 1, '2020-07-29 23:50:04', '2020-07-29 23:50:04'),
(219, 181, 188, 't3xry6mp49', 1, '2020-07-29 23:50:04', '2020-07-29 23:50:04'),
(220, 181, 122, 't3xry6mp49', 1, '2020-07-29 23:50:04', '2020-07-29 23:50:04'),
(221, 189, 190, '6f1wyl85t7', 1, '2020-07-31 12:32:27', '2020-07-31 12:32:27'),
(222, 189, 191, '6f1wyl85t7', 1, '2020-07-31 12:32:27', '2020-07-31 12:32:27'),
(223, 189, 190, '2vbhg4wnso', 1, '2020-08-03 15:25:02', '2020-08-03 15:25:02'),
(224, 189, 191, '2vbhg4wnso', 1, '2020-08-03 15:25:02', '2020-08-03 15:25:02'),
(225, 189, 190, '30a6umhgey', 1, '2020-08-05 11:01:35', '2020-08-05 11:01:35'),
(226, 189, 191, '30a6umhgey', 1, '2020-08-05 11:01:35', '2020-08-05 11:01:35'),
(227, 189, 190, '6kec813wyq', 1, '2020-08-05 11:01:59', '2020-08-05 11:01:59'),
(228, 189, 191, '6kec813wyq', 1, '2020-08-05 11:01:59', '2020-08-05 11:01:59'),
(229, 122, 151, '1u8d2w6nb7', 1, '2020-08-05 11:53:39', '2020-08-05 11:53:39'),
(230, 122, 150, '1u8d2w6nb7', 1, '2020-08-05 11:53:39', '2020-08-05 11:53:39'),
(231, 122, 152, '1u8d2w6nb7', 1, '2020-08-05 11:53:39', '2020-08-05 11:53:39'),
(232, 122, 156, '1u8d2w6nb7', 1, '2020-08-05 11:53:39', '2020-08-05 11:53:39'),
(233, 122, 157, '1u8d2w6nb7', 1, '2020-08-05 11:53:39', '2020-08-05 11:53:39'),
(234, 122, 169, '1u8d2w6nb7', 1, '2020-08-05 11:53:39', '2020-08-05 11:53:39'),
(235, 122, 188, '1u8d2w6nb7', 1, '2020-08-05 11:53:39', '2020-08-05 11:53:39'),
(236, 122, 122, '1u8d2w6nb7', 1, '2020-08-05 11:53:39', '2020-08-05 11:53:39'),
(237, 189, 190, 'rfzu3xkc9e', 1, '2020-08-05 11:56:57', '2020-08-05 11:56:57'),
(238, 189, 191, 'rfzu3xkc9e', 1, '2020-08-05 11:56:57', '2020-08-05 11:56:57'),
(239, 189, 190, 'de213j7h54', 1, '2020-08-05 11:57:31', '2020-08-05 11:57:31'),
(240, 189, 191, 'de213j7h54', 1, '2020-08-05 11:57:31', '2020-08-05 11:57:31'),
(241, 189, 190, 'if2u51praq', 1, '2020-08-05 13:37:42', '2020-08-05 13:37:42'),
(242, 189, 191, 'if2u51praq', 1, '2020-08-05 13:37:42', '2020-08-05 13:37:42'),
(243, 189, 190, 'ds83au5xoh', 1, '2020-08-05 22:50:56', '2020-08-05 22:50:56'),
(244, 189, 191, 'ds83au5xoh', 1, '2020-08-05 22:50:56', '2020-08-05 22:50:56'),
(245, 189, 190, 'mu4r5jnkqp', 1, '2020-08-05 22:54:19', '2020-08-05 22:54:19'),
(246, 189, 191, 'mu4r5jnkqp', 1, '2020-08-05 22:54:19', '2020-08-05 22:54:19'),
(247, 189, 190, 'aq5oxz6cm4', 1, '2020-08-05 22:56:28', '2020-08-05 22:56:28'),
(248, 189, 191, 'aq5oxz6cm4', 1, '2020-08-05 22:56:28', '2020-08-05 22:56:28'),
(249, 189, 190, '6darfzp2uw', 1, '2020-08-05 23:05:10', '2020-08-05 23:05:10'),
(250, 189, 191, '6darfzp2uw', 1, '2020-08-05 23:05:10', '2020-08-05 23:05:10'),
(251, 189, 190, 'ly2tvhd43x', 1, '2020-08-05 23:07:26', '2020-08-05 23:07:26'),
(252, 189, 191, 'ly2tvhd43x', 1, '2020-08-05 23:07:26', '2020-08-05 23:07:26'),
(253, 122, 151, 'st3pvm84qx', 1, '2020-08-05 23:57:45', '2020-08-05 23:57:45'),
(254, 122, 150, 'st3pvm84qx', 1, '2020-08-05 23:57:45', '2020-08-05 23:57:45'),
(255, 122, 152, 'st3pvm84qx', 1, '2020-08-05 23:57:45', '2020-08-05 23:57:45'),
(256, 122, 156, 'st3pvm84qx', 1, '2020-08-05 23:57:45', '2020-08-05 23:57:45'),
(257, 122, 157, 'st3pvm84qx', 1, '2020-08-05 23:57:45', '2020-08-05 23:57:45'),
(258, 122, 169, 'st3pvm84qx', 1, '2020-08-05 23:57:45', '2020-08-05 23:57:45'),
(259, 122, 188, 'st3pvm84qx', 1, '2020-08-05 23:57:45', '2020-08-05 23:57:45'),
(260, 122, 122, 'st3pvm84qx', 1, '2020-08-05 23:57:45', '2020-08-05 23:57:45'),
(261, 189, 190, '14cpu0knjf', 1, '2020-08-06 09:36:09', '2020-08-06 09:36:09'),
(262, 189, 191, '14cpu0knjf', 1, '2020-08-06 09:36:09', '2020-08-06 09:36:09'),
(263, 189, 190, 'go0r859lsy', 1, '2020-08-06 10:21:18', '2020-08-06 10:21:18'),
(264, 189, 191, 'go0r859lsy', 1, '2020-08-06 10:21:18', '2020-08-06 10:21:18'),
(265, 189, 190, 'mafjt68s7u', 1, '2020-08-11 22:46:15', '2020-08-11 22:46:15'),
(266, 189, 191, 'mafjt68s7u', 1, '2020-08-11 22:46:15', '2020-08-11 22:46:15'),
(267, 189, 190, '2c9xbyfgh3', 1, '2020-08-16 22:04:51', '2020-08-16 22:04:51'),
(268, 189, 191, '2c9xbyfgh3', 1, '2020-08-16 22:04:51', '2020-08-16 22:04:51'),
(269, 122, 151, '6d1qk84mfb', 1, '2020-08-19 03:12:51', '2020-08-19 03:12:51'),
(270, 122, 150, '6d1qk84mfb', 1, '2020-08-19 03:12:51', '2020-08-19 03:12:51'),
(271, 122, 152, '6d1qk84mfb', 1, '2020-08-19 03:12:51', '2020-08-19 03:12:51'),
(272, 122, 156, '6d1qk84mfb', 1, '2020-08-19 03:12:51', '2020-08-19 03:12:51'),
(273, 122, 157, '6d1qk84mfb', 1, '2020-08-19 03:12:51', '2020-08-19 03:12:51'),
(274, 122, 169, '6d1qk84mfb', 1, '2020-08-19 03:12:51', '2020-08-19 03:12:51'),
(275, 122, 188, '6d1qk84mfb', 1, '2020-08-19 03:12:51', '2020-08-19 03:12:51'),
(276, 122, 122, '6d1qk84mfb', 1, '2020-08-19 03:12:51', '2020-08-19 03:12:51'),
(277, 189, 190, 'ym504wpg3l', 1, '2020-08-19 03:39:47', '2020-08-19 03:39:47'),
(278, 189, 191, 'ym504wpg3l', 1, '2020-08-19 03:39:47', '2020-08-19 03:39:47'),
(279, 189, 190, 'j1kg5foq98', 1, '2020-08-19 03:41:56', '2020-08-19 03:41:56'),
(280, 189, 191, 'j1kg5foq98', 1, '2020-08-19 03:41:56', '2020-08-19 03:41:56'),
(281, 72, 98, 's659wnk4rf', 1, '2020-11-05 07:07:20', '2020-11-05 07:07:20'),
(282, 72, 72, '6xt9dei1sj', 1, '2020-11-05 07:08:29', '2020-11-05 07:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rehan@gmail.com', '2020-02-11 19:00:00', '2020-02-11 19:00:00', NULL),
(2, 'jhon@gmail.com', '2020-02-18 08:16:01', '2020-02-18 08:16:15', '2020-02-18 08:16:15'),
(3, 'admxyzxyzin@gmail.com', '2020-02-24 13:35:52', '2020-03-19 07:45:51', '2020-03-19 07:45:51'),
(4, 'malikrehan0022@gmail.com', '2020-02-29 16:52:19', '2020-02-29 16:52:19', NULL),
(5, 'sahamnadeem2001@outlook.com', '2020-05-14 12:20:38', '2020-05-14 12:20:38', NULL),
(6, 'deeyanrizwanuddin@gmail.com', '2020-06-07 02:19:18', '2020-06-07 02:19:18', NULL),
(7, 'makaylagrant97@gmail.com', '2020-06-08 08:07:57', '2020-12-01 07:18:26', '2020-12-01 07:18:26'),
(8, 'ghaliaaamer@gmail.con', '2020-06-09 00:36:01', '2020-06-09 00:36:01', NULL),
(9, 'ghaliaaamer@gmail.com', '2020-06-09 00:36:09', '2020-06-09 00:36:09', NULL),
(10, 'aamerghalia@gmail.com', '2020-06-09 01:44:48', '2020-06-09 01:44:48', NULL),
(11, 'aamer@ualberta.ca', '2020-06-09 01:47:01', '2020-06-09 01:47:01', NULL),
(12, 'sahamnadeem.orangeclick@gmail.com', '2020-06-09 01:50:48', '2020-06-09 01:50:48', NULL),
(13, 'bin.pan@hotmail.ca', '2020-06-09 09:08:11', '2020-06-09 09:08:11', NULL),
(14, 'sahamnadeem2016@gmail.com', '2020-06-24 23:57:09', '2020-06-24 23:57:09', NULL),
(15, 'chengjustin333@gmail.com', '2020-07-15 14:09:04', '2020-07-15 14:09:04', NULL),
(16, 'ellamikvv@gmail.com', '2020-07-20 16:32:09', '2020-07-20 16:32:09', NULL),
(17, 'operations@theflagplace.com', '2020-08-01 23:25:06', '2020-08-01 23:25:06', NULL),
(18, 'brett@artisanalfoods.com', '2020-08-02 07:40:32', '2020-08-02 07:40:32', NULL),
(19, 'abrunner@phishlabs.com', '2020-08-13 23:16:06', '2020-08-13 23:16:06', NULL),
(20, 'suezantonacci@aol.com', '2020-08-15 06:07:04', '2020-08-15 06:07:04', NULL),
(21, 'ch.jabran@gmail.com', '2020-08-20 15:54:03', '2020-08-20 15:54:03', NULL),
(22, 'mr.sgirard123@gmail.com', '2020-08-23 18:36:34', '2020-08-23 18:36:34', NULL),
(23, 'panganibanb@macewan.ca', '2020-08-30 17:36:30', '2020-08-30 17:36:30', NULL),
(24, 'leannhilton@hotmail.com', '2020-09-02 04:48:29', '2020-09-02 04:48:29', NULL),
(25, 'najmamadhani@gmail.com', '2020-09-08 00:22:28', '2020-09-08 00:22:28', NULL),
(26, 'xstacey1990x@gmail.com', '2020-09-08 00:52:29', '2020-09-08 00:52:29', NULL),
(27, 'chaunwillis@yahoo.com', '2020-09-15 06:53:53', '2020-09-15 06:53:53', NULL),
(28, 'gayliabennett@yahoo.com', '2020-09-22 04:06:28', '2020-09-22 04:06:28', NULL),
(29, 'info@hiltonmgmt.com', '2020-09-22 13:10:03', '2020-09-22 13:10:03', NULL),
(30, 'mbeaver@richwil.com', '2020-09-24 21:52:58', '2020-09-24 21:52:58', NULL),
(31, 'akshat03rock@gmail.com', '2020-09-26 13:14:09', '2020-09-26 13:14:09', NULL),
(32, 'fahad357572@gmail.com', '2020-09-26 23:00:22', '2020-09-26 23:00:22', NULL),
(33, 'nooramna790@gmail.com', '2020-09-27 01:43:18', '2020-09-27 01:43:18', NULL),
(34, 'calvinator2004@gmail.com', '2020-09-28 00:06:33', '2020-09-28 00:06:33', NULL),
(35, 'sheylam1136@gmail.com', '2020-09-30 12:25:19', '2020-09-30 12:25:19', NULL),
(36, 'hkyouthopps@gmail.com', '2020-10-08 05:38:18', '2020-10-08 05:38:18', NULL),
(37, 'web@banking-g.com', '2020-10-19 12:40:40', '2020-10-19 12:40:40', NULL),
(38, 'Shanna50@hotmail.com', '2020-10-20 10:15:22', '2020-10-20 10:15:22', NULL),
(39, 'bonhomme420@yahoo.com', '2020-10-21 21:32:58', '2020-10-21 21:32:58', NULL),
(40, 'bob.miskowiec@gmail.com', '2020-10-22 19:16:42', '2020-10-22 19:16:42', NULL),
(41, 'allibatts32@gmail.com', '2020-10-29 14:37:12', '2020-10-29 14:37:12', NULL),
(42, 'meghan.dove21@gmail.com', '2020-10-31 00:35:11', '2020-10-31 00:35:11', NULL),
(43, 'info@mjnexpress.org', '2020-10-31 13:42:49', '2020-10-31 13:42:49', NULL),
(44, 'interac226@protonmail.com', '2020-11-04 03:22:19', '2020-11-04 03:22:19', NULL),
(45, 'carol.robbins1@yahoo.com', '2020-11-05 20:12:45', '2020-11-05 20:12:45', NULL),
(46, 'sushmithavasan95@gmail.com', '2020-11-09 07:38:44', '2020-11-09 07:38:44', NULL),
(47, 'bulkbuddy1@gmail.com', '2020-11-10 09:17:02', '2020-11-10 09:17:02', NULL),
(48, 'benitajane84@yahoo.com', '2020-11-10 21:56:01', '2020-11-10 21:56:01', NULL),
(49, 'jagpa@jagpa.com', '2020-11-12 00:04:32', '2020-11-12 00:04:32', NULL),
(50, 'annetteram@aol.com', '2020-11-16 03:12:14', '2020-11-16 03:12:14', NULL),
(51, 'kaherma1@telus.net', '2020-11-19 09:28:47', '2020-11-19 09:28:47', NULL),
(52, 'ap@apalimibuilders.net', '2020-11-20 05:06:12', '2020-11-20 05:06:12', NULL),
(53, 'taishamartin@gmail.com', '2020-11-23 19:15:21', '2020-11-23 19:15:21', NULL),
(54, 'aoverleygreene@gmail.com', '2020-11-24 23:21:52', '2020-11-24 23:21:52', NULL),
(55, 'philip65@hotmail.co.uk', '2020-11-27 10:46:11', '2020-11-27 10:46:11', NULL),
(56, 'sabrinaleeann2012@gmail.com', '2020-12-03 04:20:33', '2020-12-03 04:20:33', NULL),
(57, 'assafsara23@gmail.com', '2020-12-04 04:38:51', '2020-12-04 04:38:51', NULL),
(58, 'customerservice.belgium@casashops.com', '2020-12-14 02:26:02', '2020-12-14 02:26:02', NULL),
(59, 'msmith@1800flowers.com', '2020-12-14 07:28:27', '2020-12-14 07:28:27', NULL),
(60, 'juanrubiovelardo69@gmail.com', '2020-12-16 15:49:35', '2020-12-16 15:49:35', NULL),
(61, 'comadrejacanal@gmail.com', '2020-12-17 02:32:03', '2020-12-17 02:32:03', NULL),
(62, 'john@coalcreekironworks.com', '2020-12-17 09:09:18', '2020-12-17 09:09:18', NULL),
(63, 'leonelgartner12@gmail.com', '2020-12-18 05:45:19', '2020-12-18 05:45:19', NULL),
(64, 'cmorillo@bbbsefl.org', '2020-12-24 01:14:53', '2020-12-24 01:14:53', NULL),
(65, 'chad.whitney@gmail.com', '2020-12-27 15:37:24', '2020-12-27 15:37:24', NULL),
(66, 'drrmarkpope@gmail.com', '2021-01-02 00:28:02', '2021-01-02 00:28:02', NULL),
(67, 'Pedro.Bins43@yahoo.com', '2021-01-02 19:45:17', '2021-01-02 19:45:17', NULL),
(68, 'nicolebooth16@gmail.com', '2021-01-08 00:01:53', '2021-01-08 00:01:53', NULL),
(69, 'hfloyd2019@gmail.com', '2021-01-14 02:18:43', '2021-01-14 02:18:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `email`, `feedback`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dr. Jaquan Mraz I', 'client1@gmail.com', 'Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent', 'Dr. Jaquan Mraz I', '2020-02-13 19:00:00', '2020-02-14 07:06:58', '2020-02-14 07:06:58'),
(2, 'John Alexander', 'wlueilwitz@example.org', 'Very accessible and user friendly platform. Recommended for people around the world.', 'https://talkmaze.com/talkmaze_test/storage/storage/fXQNNPt6TSv4zOOxo3ylSeMwJ0dIC0jVllM13evx.jpeg', '2020-02-14 05:16:58', '2020-06-08 10:35:56', '2020-06-08 10:35:56'),
(3, 'Fay Ankunding', 'kylee.homenick@example.com', 'Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent', 'https://oranje-tech.com/demo/talkmaze/storage/storage/9ih9rynjZDJue3Tf98nm3aBER3tqDK7oKw9WzJ4C.jpeg', '2020-02-14 05:16:58', '2020-05-31 21:09:46', '2020-05-31 21:09:46'),
(4, 'Alvina McKenzie', 'jeremy.yundt@example.com', 'Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent', 'http://127.0.0.1:8000/storage/storage/C6UNjBLBMVudJSqUhZRSzECB6IBzw9AuOAPgzk4c.png', '2020-02-14 05:16:58', '2020-05-31 21:09:51', '2020-05-31 21:09:51'),
(5, 'Jhon Wick', 'tillman.missouri@example.net', 'Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent', 'http://127.0.0.1:8000/storage/storage/U7J4aFd2qjz1CZ7qmC6U4meA8iBW2Bdu0hlwdKam.jpeg', '2020-02-14 05:16:58', '2020-05-31 21:09:54', '2020-05-31 21:09:54'),
(6, 'Miss Beryl Veum III', 'ylesch@example.org', 'Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent', '0', '2020-02-14 05:16:58', '2020-02-17 07:01:21', '2020-02-17 07:01:21'),
(7, 'Laney Hammes', 'dokeefe@example.org', 'Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Well incremented. Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent Comes with recommended workout. I\'m using it to help with bladder leakage issues that I\'ve been experiencing since a recent', '0', '2020-02-14 05:16:58', '2020-02-17 07:01:22', '2020-02-17 07:01:22'),
(24, 'Z.M.', 'zeyad@gmail.com', 'I was very fortunate to get early access to the TalkMaze platform. This site is by far the most comprehensive and user friendly hub for learning effective communication skills. The team is innovative, approachable, and talented. I am excited to see TalkMaze grow into a global hub.', 'https://talkmaze.com/storage/storage/IpFKsitnm5KXlKnhT7CSNxbbUiwDBwKeXRxJTAT3.png', '2020-06-08 10:35:51', '2020-08-26 03:36:49', '2020-08-26 03:36:49'),
(25, 'Z.F.', 'zafir@gmail.com', 'I took a public speaking course with TalkMaze over the summer and really enjoyed working with talented coaches. It was super cool that the students in my class came from all around the world. My siblings and I all got to take a class together and despite our age differences, we all had fun. TalkMaze was very user friendly as a website. Everything is easy too find and locate!', 'https://talkmaze.com/storage/storage/DAKwgiAgkg48QA9SOUqjtY7CmrN6eo7u9JH4xm6J.png', '2020-08-05 00:41:14', '2020-08-05 00:42:33', '2020-08-05 00:42:33'),
(26, 'Z.F.', 'zafir@gmail.com', 'I took a public speaking course with TalkMaze over the summer and really enjoyed working with talented coaches. It was super cool that the students in my class came from all around the world. My siblings and I all got to take a class together and despite our age differences, we all had fun. TalkMaze was very user friendly as a website. Everything is easy to locate!', 'https://talkmaze.com/storage/storage/iWazzm6f92ZPSuim6XewugOnfAGhanbz2NYEPzY0.png', '2020-08-05 00:42:42', '2020-08-26 03:36:51', '2020-08-26 03:36:51'),
(27, 'Sally, the President of Alberta Chinese Cultural Education Society', 'accesedmonton@gmail.com', 'Our organization, ACCES, partnered with TalkMaze for 12 weeks of group speech and debate classes. All the Coaches at TalkMaze are professional and experienced with Speech and Debate. They are passionate about sharing their experiences and promoting these skills among youth. These skills learnt through Speech and Debate are life-long skills which can be use in all walks of life for the future of the young participants. We are looking forward to a continued partnership with TalkMaze.', 'https://talkmaze.com/storage/storage/zF3W2U0EHVHFAZfepm93DgLJTtK5p9T4No8wEYOD.png', '2020-08-26 02:50:27', '2020-08-26 02:52:04', NULL),
(28, 'Z.M.', 'zeyad@gmail.com', 'I was very fortunate to get early access to the TalkMaze platform. This site is by far the most comprehensive and user friendly hub for learning effective communication skills. The team is innovative, approachable, and talented. I am excited to see TalkMaze grow into a global hub.', '8i9pUD3n7CBTkmZDERdbzJaFyJdrjIrVWEMwSfIi.jpeg', '2020-08-26 03:38:10', '2020-08-26 23:26:40', '2020-08-26 23:26:40'),
(29, 'Z.F.', 'zafir@gmail.com', 'I took a public speaking course with TalkMaze over the summer and really enjoyed working with talented coaches. It was super cool that the students in my class came from all around the world. My siblings and I all got to take a class together and despite our age differences, we all had fun. TalkMaze was very user friendly as a website. Everything is easy to locate!', 'https://talkmaze.com/storage/storage/qkG7xCf87CFt2w9cGoqfmGrA8LHjrtwDVPqVCAB9.png', '2020-08-26 03:38:25', '2020-08-26 03:38:25', NULL),
(30, 'Z.M.', 'zeyad@gmail.com', 'I was very fortunate to get early access to the TalkMaze platform. This site is by far the most comprehensive and user friendly hub for learning effective communication skills. The team is innovative, approachable, and talented. I am excited to see TalkMaze grow into a global hub', 'https://talkmaze.com/storage/storage/uumr0scazGsB4EKJkuhyLjrFXfy1HSSChVoRbllZ.png', '2020-08-26 23:26:59', '2020-08-26 23:26:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `time_tables`
--

CREATE TABLE `time_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) NOT NULL,
  `day_id` bigint(20) NOT NULL,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_tables`
--

INSERT INTO `time_tables` (`id`, `applicant_id`, `day_id`, `time_zone`, `from`, `to`, `created_at`, `updated_at`) VALUES
(5, 28, 1, 'GMT +5', '9 AM', '01 PM', '2020-02-24 13:18:28', '2020-02-24 13:18:28'),
(6, 28, 1, 'GMT +5', '9 AM', '01 PM', '2020-02-24 13:18:54', '2020-02-24 13:18:54'),
(7, 29, 1, 'GMT+5', '9 AM', '01 PM', '2020-03-12 06:53:47', '2020-03-12 06:53:47'),
(8, 31, 1, 'GMT+5', '9 AM', '01 PM', '2020-03-12 07:12:21', '2020-03-12 07:12:21'),
(9, 32, 1, 'GMT+5', '9 AM', '01 PM', '2020-03-16 07:50:12', '2020-03-16 07:50:12'),
(10, 33, 2, 'GMT+5', '9 AM', '01 PM', '2020-06-09 02:14:23', '2020-06-09 02:14:23'),
(11, 34, 4, 'GMT+5', '9 AM', '01 PM', '2020-06-09 02:18:20', '2020-06-09 02:18:20'),
(12, 35, 3, 'GMT+5', '9 AM', '01 PM', '2020-06-09 02:20:53', '2020-06-09 02:20:53'),
(13, 36, 6, 'GMT+8', '9 AM', '01 PM', '2020-06-09 05:29:31', '2020-06-09 05:29:31'),
(14, 37, 6, 'GMT+5', '9 AM', '01 PM', '2020-06-10 06:35:50', '2020-06-10 06:35:50'),
(15, 38, 6, 'GMT+5', '9 AM', '01 PM', '2020-06-13 05:12:25', '2020-06-13 05:12:25'),
(16, 39, 6, 'GMT+5', '9 AM', '01 PM', '2020-06-16 13:56:33', '2020-06-16 13:56:33'),
(17, 40, 2, 'GMT+5', '9 AM', '01 PM', '2020-06-16 15:54:42', '2020-06-16 15:54:42'),
(18, 42, 2, 'GMT+5', '9 AM', '01 PM', '2020-06-16 16:03:23', '2020-06-16 16:03:23'),
(19, 43, 6, 'GMT-4', '9 AM', '01 PM', '2020-06-17 17:19:31', '2020-06-17 17:19:31'),
(20, 44, 6, 'GMT+5', '9 AM', '01 PM', '2020-06-20 22:12:37', '2020-06-20 22:12:37'),
(21, 47, 6, 'GMT+5', '9 AM', '01 PM', '2020-07-14 01:02:51', '2020-07-14 01:02:51'),
(22, 48, 6, 'GMT+5', '9 AM', '01 PM', '2020-07-21 04:10:57', '2020-07-21 04:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `stripe_id`, `amount`, `student_id`, `created_at`, `updated_at`) VALUES
(6, 'ch_1IknKrFIQnHdLDIGHfnGfqVe', 762.50, 121, '2021-04-27 04:36:06', '2021-04-27 04:36:06'),
(8, 'ch_1IlADQFIQnHdLDIG862WLSrT', 2000.00, 212, '2021-04-28 05:01:58', '2021-04-28 05:01:58'),
(9, 'ch_1Inj27FIQnHdLDIGGQ4SQyRO', 762.50, 211, '2021-05-05 15:36:52', '2021-05-05 15:36:52'),
(10, 'ch_1IqFJ0FIQnHdLDIGqr04NaiY', 762.50, 212, '2021-05-12 14:28:43', '2021-05-12 14:28:43'),
(11, 'ch_1IqFROFIQnHdLDIGWfLaNHeA', 680.00, 213, '2021-05-12 14:37:23', '2021-05-12 14:37:23'),
(12, 'ch_1Is4MFFIQnHdLDIGbUQtABI8', 350.00, 214, '2021-05-17 15:11:36', '2021-05-17 15:11:36'),
(13, 'ch_1It9WTFIQnHdLDIG2B2qhL09', 762.50, 223, '2021-05-20 05:54:40', '2021-05-20 05:54:40'),
(14, 'ch_1IvH7QFIQnHdLDIGZKCHZ1U1', 680.00, 225, '2021-05-26 02:25:35', '2021-05-26 02:25:35'),
(15, 'ch_1IviHLFIQnHdLDIGWCEnXxUP', 680.00, 226, '2021-05-27 16:25:37', '2021-05-27 16:25:37'),
(16, 'ch_1Iz9IEFIQnHdLDIGvxYabowU', 350.00, 228, '2021-06-06 03:52:43', '2021-06-06 03:52:43'),
(17, 'ch_1J27NtFIQnHdLDIGYViy92yd', 350.00, 226, '2021-06-14 08:26:50', '2021-06-14 08:26:50'),
(18, 'ch_1J9j6CFIQnHdLDIGf5XHNYOo', 350.00, 291, '2021-07-05 08:08:01', '2021-07-05 08:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_earnings`
--

CREATE TABLE `tutor_earnings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stripe_transfer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_ratings`
--

CREATE TABLE `tutor_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutor_ratings`
--

INSERT INTO `tutor_ratings` (`id`, `user_id`, `tutor_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 40, 2, 5, NULL, NULL),
(2, 40, 2, 2, NULL, NULL),
(3, 40, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_time_tables`
--

CREATE TABLE `tutor_time_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `day_id` bigint(20) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutor_time_tables`
--

INSERT INTO `tutor_time_tables` (`id`, `user_id`, `day_id`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '09:00:00', '17:00:00', NULL, NULL),
(2, 2, 2, '09:00:00', '17:00:00', NULL, NULL),
(3, 290, 1, '10:10:00', '19:10:00', '2021-07-05 08:10:52', '2021-07-05 08:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `subscriber` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nick`, `email`, `email_verified_at`, `password`, `role`, `google_id`, `remember_token`, `timezone`, `bio`, `rating`, `type`, `subscriber`, `created_at`, `updated_at`, `deleted_at`, `dob`) VALUES
(266, 'Austin Redmond', NULL, 'austinredmond@live.ca', NULL, '$2y$10$OPGSI9ZVeuzhTN.mE7wbte.G8BNI15b/xtFzemQqoSug8OKdzBqQa', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 1, '2020-11-23 10:50:23', '2020-11-23 10:50:23', NULL, NULL),
(225, 'Test Student', NULL, 'ghaliaaamer@gmail.com', NULL, '$2y$10$w7LIIbQgxKq.1vsS23GUneE/ZIjr3rPUWrkrnGs2vQtH3S0Or8JK2', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 0, '2020-09-28 21:53:16', '2020-09-28 21:53:16', NULL, NULL),
(226, 'hamamd hjd', NULL, 'Hoorakhan419@gmail.com', NULL, '$2y$10$33lPs8qIJYmkZJ89UM.E/OXqgfzwFrckkYWxlSc31ojGIRxOogs1S', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 1, '2020-09-29 00:17:39', '2020-09-29 00:17:39', NULL, NULL),
(125, 'Everett Lin', 'riseofthe0w0', 'riseoftheowo@gmail.com', NULL, '$2y$10$ziDiIoHV1ObYJ7MpOHCdYOe1pdp8rrz2UXG.34zKw8MOMzUcx2PEG', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-06-10 01:21:51', '2020-06-10 01:27:12', NULL, NULL),
(224, 'Alexandra Zedania', NULL, 'Zedaniaalexandra@gmail.com', NULL, '$2y$10$lW/c4tgpLj.9Rppsrl4nee8WqQ05pguBrDuvLpg5s8fxGdv0FNFiu', NULL, NULL, '2feIkP8LcOkgZ2en8GEIYiTFnCEBYeNrUBnkL5isNTzuoIs10Xj5jNtkItdP', '-5', NULL, NULL, NULL, 1, '2020-09-23 05:17:36', '2020-10-16 22:17:23', NULL, NULL),
(117, 'Matthew Anzarouth', NULL, 'manzarouth@wearelcc.ca', NULL, '$2y$10$ZcsvwTj2f8DO9UkY4c7vn.D.XqsaYaOmcd69.828CFjznTFuuO6b6', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-09 03:07:17', '2020-06-09 03:07:17', NULL, NULL),
(100, 'test user', 'sparklyspeaks', 'ghalia@gmail.com', NULL, '$2y$10$x03oIrYnuTlGptnCufsaVeLNbJ057JjvOavZ/tB22wHMKsuc3nUue', 'user', NULL, NULL, '-6', 'Ghalia has been involved in the Canadian speech and debate circuit for over seven years. She represented Alberta at national tournaments four times. At the university level, Ghalia has placed as a finalist team multiple times and been recognized as the top speaker. Ghalia was awarded the provincial Ann Bradley award for contributions to speech and debate in 2018 as well as the Borris Mrause award in 2020 for contributions to speech.\r\n\r\nGhalia also launched the junior high competitive speech community in Edmonton. She has coached hundreds of junior high and high school students in both speech and debate. Many of her students have gone on to compete at provincial and national levels. The school she coached at, Grandview, was also recognized as the top junior high team in all of Alberta in 2018 and 2019.', 5, 1, NULL, '2020-06-04 01:07:49', '2020-08-20 15:04:49', NULL, NULL),
(95, 'couchpotato', 'eatsleepdebate', 'talkmaze@gmail.com', NULL, '$2y$10$aUYZAH0mQmejEuR3/LGdMedP55D6SgBbqvr2GS4xIbFDoGQ2JTnU6', 'user', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-02 21:37:09', '2020-06-09 03:06:46', NULL, NULL),
(101, 'ultimatedefender ', NULL, 'toontutorsinfo@gmail.com', NULL, '$2y$10$Rd0keRJ2eBreEpctRZwfPeGrw/LOVc3NeqYXbrHU4kD0QLzHXtoYS', 'user', NULL, NULL, '-6', NULL, 0, NULL, NULL, '2020-06-04 01:11:21', '2020-07-08 05:22:05', NULL, NULL),
(103, 'Cindy', NULL, 'cindyy@gmail.com', NULL, 'WYrvjEjC', 'admin', NULL, NULL, NULL, NULL, 5, 1, NULL, '2020-06-06 22:00:03', '2020-08-20 15:05:15', NULL, NULL),
(108, 'Rohail Tariq', NULL, 'rohailt6@gmail.com', NULL, '$2y$10$bcLaTli4GUOLM9br/PDIBecU51JuV5jjB/c7HU26X3B6mHZ5y3isu', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-06 23:45:42', '2020-06-06 23:45:42', NULL, NULL),
(109, 'Hamza Tariq', NULL, 'h.tariq64@gmail.com', NULL, '$2y$10$HScEpYYohlsfvRa.oZiw4.X8jDsyOMRV5hB.dPwcpO2vWlk39Aq6W', NULL, NULL, 'VMzEFvhj5Tamb53KYxE7ZxOHgG8ts4QIJEWtjT8iWrGXhOyy3OgPXUIUna5K', '-4', NULL, 0, NULL, NULL, '2020-06-07 00:04:50', '2020-07-08 05:44:56', NULL, NULL),
(110, 'Deeyan Rizwan', 'Deeno', 'deeyanrizwanuddin@gmail.com', NULL, '$2y$10$xctD8DEd0KCepzviKLaWJumrmEfsu1OXYNRAxAGLJPWR6NA1Y7aFm', NULL, NULL, NULL, '+5', NULL, 0, NULL, NULL, '2020-06-07 05:32:10', '2020-06-07 05:53:53', NULL, NULL),
(111, 'Hasnain Tariq', NULL, 'hasnaintariq81@gmail.com', NULL, '$2y$10$JHnObrV2Cfpb4o4FhSgQ0OUGvDYkGyTG2JuwrZ/JJrdQAi4QhuT42', NULL, NULL, NULL, '+5', NULL, 0, NULL, NULL, '2020-06-07 05:32:48', '2020-06-07 05:52:58', NULL, NULL),
(112, 'Zeyad Mohamed', NULL, 'zeyad.e@outlook.com', NULL, '$2y$10$w8rQst/RQ/KNwn1RA/7qceOhitC.cZDmUSbFRak0zUF8lFkRhl04W', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-07 05:33:05', '2020-06-07 05:33:05', NULL, NULL),
(113, 'Tester Testison', NULL, 'jake@fakeemail.com', NULL, '$2y$10$LMTZLro5r0RlY0ipmUptfuNdfTTFiI/zmwHFF4I.uRbtdJ6R8VTMe', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-07 05:50:13', '2020-06-07 05:50:13', NULL, NULL),
(114, 'fhgj nadeem', NULL, 'sahamnadeem999@gmail.com', NULL, '$2y$10$6zbf4GgY90z7uBYze/oF1eUMvysU1Nx2bbHNSnmQ2PJBg/hYR4uNO', NULL, NULL, NULL, '+5', NULL, 0, NULL, NULL, '2020-06-07 11:46:45', '2020-06-07 11:47:03', NULL, NULL),
(115, 'Bilal Imtyaz', NULL, 'bilal.imtyaz1@gmail.com', NULL, '$2y$10$ZQZlf3yVDMsqtVeF8Z7DOewLzV4BkT8M3K7FfYiA1n8zgMFQvlNse', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-07 13:26:46', '2020-06-07 13:26:46', NULL, NULL),
(116, 'Abrar Ansari', NULL, 'abraransarise@gmail.com', NULL, '$2y$10$ppLx3JAyfjsHxZEb6P2I2uxFZj2ihmIiIrvKHe7DFwCqwbRMQBeK.', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-07 13:27:00', '2020-06-07 13:27:00', NULL, NULL),
(118, 'Kiana Young', NULL, 'kiana@speaksustainably.com', NULL, '$2y$10$.v.6lveaKTjdzPk0IYTK.OMl53JQ6dY8OV74n60AA46RRaKn5xKX.', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-09 10:10:57', '2020-06-09 10:10:57', NULL, NULL),
(119, 'fhgj nadeem', NULL, 'sahamnadeem9090@gmail.com', NULL, '$2y$10$xGK0IHmz4J1Cab0wrOZL/.NF57Vp80vaDnIWQELYlivrMDCmiKUXa', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2020-06-09 19:43:46', '2020-06-09 19:43:46', NULL, NULL),
(120, 'Saiful M', NULL, 'lolyouarehorribleatchess@gmail.com', NULL, '$2y$10$MSegqNtIkJIcUjJRuklO/.3r.aCFmrVf62mXbmFt80gUmqqnybZSC', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2020-06-09 21:13:54', '2020-06-09 21:13:54', NULL, NULL),
(121, 'test', NULL, 'test@gmail.com', NULL, 'rMmKl6DN', 'user', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2020-06-09 23:02:16', '2020-06-09 23:15:21', NULL, NULL),
(122, 'Ghalia', 'debateisfun', 'aamerghalia@gmail.com', NULL, '$2y$10$C8q4VgxUDaQWX1oi57BI7e0VDuWUrmF8f4jlAstn9VCfQIEayuJqC', 'admin', NULL, '2Rx9KoSz156Ow85apobJjfXuGDas38EaYMvnenT8kKwosHelQMmmT5GHdZXP', '-6', 'Ghalia has been involved in the Canadian speech and debate circuit for over seven years. She represented Alberta at national tournaments four times. At the university level, Ghalia has placed as a finalist team multiple times and been recognized as the top speaker. Ghalia was awarded the provincial Ann Bradley award for contributions to speech and debate in 2018 as well as the Borris Mrause award in 2020 for contributions to speech. \r\n\r\nGhalia also launched the junior high competitive speech community in Edmonton. She has coached\r\nhundreds of junior high and high school students in both speech and debate. Many of her students have gone on to compete at provincial and national levels. The school she coached at, Grandview, was also recognized as the top junior high team in all of Alberta in 2018 and 2019.', 0, 1, 0, '2020-06-09 23:14:51', '2020-09-28 21:54:38', NULL, NULL),
(123, 'Hania Aamer', NULL, 'haamer@ualberta.ca', NULL, '$2y$10$ddXnbC1hZJYx6gOoesna5.cWMbGiZLLBHWIm7WUcaTwRHIvpIejWm', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-06-09 23:29:52', '2020-06-09 23:46:14', NULL, NULL),
(124, 'nazish Aamer', NULL, 'nazishaamer@yahoo.com', NULL, '$2y$10$bJcHN4WvbJcRTtOEeMRKfejq/KWEPm5DDJAwtgWwvNb4Npd/OtneC', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-06-09 23:30:15', '2020-08-19 22:20:09', NULL, NULL),
(126, 'Amber Chen', 'nameless', 'a.chen22@share.epsb.ca', NULL, '$2y$10$j8R6xv4fUp7A67674Y5DFO/Szdkv9emn/HFzdFk6YDE49JTzMn1R6', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-06-10 01:22:03', '2020-06-10 03:45:35', NULL, NULL),
(127, 'Ryan Chen', NULL, 'r.chen13@share.epsb.ca', NULL, '$2y$10$x25/b69lFyYOj8H3P4tsIOySozGEZL0O9f0B6JJg7FkydCLhQtOHC', NULL, NULL, '81CNslw4XRhoffEvrerH4bJiNVmcToJVPICcS6iWJFPVagTcB1WpwmoTuPYJ', '-6', NULL, 0, NULL, 0, '2020-06-10 01:22:37', '2020-06-17 00:59:25', NULL, NULL),
(128, 'Jason Pan', 'unknown galaxy', 'j.pan6@share.epsb.ca', NULL, '$2y$10$1YWTBpDOOvkXe1bHM.hYPOkhAdt8bck1n.Bii6G/6hzh2Ru4YDNPy', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-06-10 01:23:11', '2020-06-16 23:48:37', NULL, NULL),
(129, 'Yi Wang', NULL, 'rappyzappyrekts@gmail.com', NULL, '$2y$10$Yf.mbBnbjXUQ2KwCBUOusePOyxxkQGFKyR5/XEvx0IMANnTSosvkC', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2020-06-10 01:28:15', '2020-06-10 01:28:15', NULL, NULL),
(130, 'Yi Wang', NULL, 'y.wang25@share.epsb.ca', NULL, '$2y$10$WNAb6Br4tSeW0TMVireGkeAWCJbeGbTTT/c2NRMy4lZO7C8hTcvra', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-06-10 01:29:41', '2020-06-10 01:42:49', NULL, NULL),
(131, 'Timothy Lu', NULL, 'ningjialu@gmail.com', NULL, '$2y$10$zYHDqF6tUosHFLFXl.4Gm.NZ44SMYdtZ8GEZURAJWKt33vT8REsx6', NULL, '109497160570610679634', '6WTbKTJI2wlRVwlWC0DETAvcXQE1jEqS0GGTHvsnt4qaB63DfT3cNDkSF5uw', NULL, NULL, 0, NULL, NULL, '2020-06-11 23:25:53', '2020-06-11 23:27:09', NULL, NULL),
(135, 'umer mughal', 'kikoo', 'umermughalxxx@gmail.com', NULL, '130ea938864f051b9a40c85b6a713306', NULL, '114017450576710871410', NULL, '+5', NULL, 0, NULL, NULL, '2020-06-12 00:01:47', '2020-06-12 00:02:04', NULL, NULL),
(136, 'Tim', NULL, 'tim@gmail.com', NULL, 'hk0KLuD7', 'user', NULL, NULL, NULL, NULL, 0, 1, NULL, '2020-06-15 06:17:35', '2020-08-18 22:08:05', NULL, NULL),
(137, 'fairy g', NULL, 'fairyumar8@gmail.com', NULL, '$2y$10$/KHWKXpkpKAHGlxvJctoLeAbA3he1q5pQcsz7FUDK9uJFaYOinPi2', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2020-06-16 10:36:25', '2020-06-16 10:36:25', NULL, NULL),
(138, 'Thadeus', NULL, 'thadhsmith13@gmail.com', NULL, '$2y$10$fRoU6AuZn/p1x67jsY5jKuDTdA.zq5vUL9KZjzw.ILjbXpYLmAS.W', 'admin', NULL, 'LScAPQBeSIOywPcqoxJn98Mab02ypwGDOONkqMTJJzE7f3TBZZm8cCAdBbK0', '-7', 'Thadeus Smith has been involved with speech and debate since 2013. As a competitor he qualified to the Washington State Tournament four times in speech and twice in debate, competed at the National Individual Event Tournament of Champions, and placed tenth at the National Speech and Debate Tournament in 2019. As a coach, he’s worked at summer camps with Capitol Debate, after-school programs with Climb the Mountain Foundation, and been an assistant and head coach at schools in the Puget Sound area. He currently attends Pacific Lutheran University.', 0, 3, 0, '2020-06-16 23:43:57', '2020-09-26 00:12:38', NULL, NULL),
(139, 'Clara Chen', 'Nickname', 'c.chen17@share.epsb.ca', NULL, '$2y$10$Ot2pDhA2GvWU.qnqgtiZPOd.GXGEAlzDGLPgUpta2vXaOMJRABTUe', NULL, NULL, NULL, '-2', NULL, 0, NULL, 0, '2020-06-19 02:33:14', '2020-06-19 02:38:06', NULL, NULL),
(140, 'michael zhu', NULL, 'sirlolz123@gmail.com', NULL, '$2y$10$NFc6hMw5km2mVOe.xvIkEOPLQvp6zX6.KHN6buHNFOtBgn6lhBjla', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2020-06-19 02:33:47', '2020-06-19 02:33:47', NULL, NULL),
(141, 'Test Account', NULL, 'test123@gmail.com', NULL, '$2y$10$ZKIYl9RremWGF3FZuqcr3uuOGBztAhS0/Ys2YipxRlh0WXL5PhmvG', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2020-06-20 09:47:28', '2020-06-20 09:47:28', NULL, NULL),
(142, 'Garlicbread ', NULL, 'george.xie12@gmail.com', NULL, '$2y$10$7GisuqVqeOT3DKj6NXUmK.H.Ehs4ND2Q0i5zXu.PJfX1BiGB8gr9u', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-06-21 21:13:02', '2020-06-21 21:14:31', NULL, NULL),
(143, 'Ambrose Thati', NULL, 'ambrosethati@gmail.com', NULL, '$2y$10$vrNuS5/5e7gHSCDK4w2QYuU/CiYTrHbSrrPzuLqr56FVutNNOdU06', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2020-06-23 19:13:21', '2020-06-23 19:13:21', NULL, NULL),
(144, 'test test', NULL, 'testtest@gmail.com', NULL, '$2y$10$ARjkaUWGTaCn0vrrPIj2Uetj6GLDiLNMNohXpjSkJwN1iM8UQSl/y', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-06-23 23:23:20', '2020-07-02 09:24:39', NULL, NULL),
(145, 'fhgj Nadeem', NULL, 'sahamnadeemoppp@gmail.com', NULL, '$2y$10$7b2ICyCF8FmHdYduxMLXRuQy6.Zk15zByNU2BWj61zbxs5trTjzX2', NULL, NULL, NULL, '+5', NULL, 0, NULL, 0, '2020-06-25 00:10:14', '2020-06-25 00:10:14', NULL, NULL),
(146, 'Samira Salwan', NULL, 'salwas1@dc.edu.hk', NULL, '$2y$10$tVjH7kmxMYDozKFNwLweq.yULkXRuRq862IY9dpJ/73LxCGgOsXyC', NULL, NULL, NULL, '+8', NULL, 0, NULL, 0, '2020-06-25 05:36:00', '2020-06-25 05:36:00', NULL, NULL),
(153, 'test test', NULL, 'testesttest@gmail.com', NULL, '$2y$10$JHqXyMr5lNLcsmXVl/ZiEO2c9uTZlZFD7.0nEUBTb6QkenBUw64pC', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-07-02 09:24:12', '2020-07-02 09:24:12', NULL, NULL),
(154, 'Emily Chen', NULL, 'e.chen12@share.epsb.ca', NULL, '$2y$10$lZujCdvNYhQWATOrTWtH4OgqVwW/RNvhBGYrj09eS4KAbOAEzIXLO', NULL, NULL, NULL, '-7', NULL, 0, NULL, 0, '2020-07-02 10:09:10', '2020-07-02 10:09:10', NULL, NULL),
(155, 'fhgj Nadeem', NULL, 'sahamnadeem200100@outlook.com', NULL, '$2y$10$mZQeBNWVkghAp5ziriLQ/eR2gkrKgvCuWZ1yDtVGY4Jahfnv/WDuC', NULL, NULL, NULL, '+5', NULL, 0, NULL, 1, '2020-07-03 01:06:03', '2020-07-03 01:06:03', NULL, NULL),
(156, 'Rania Soudy', NULL, 'soudy@ualberta.ca', NULL, '$2y$10$75ov1YiTDpYBtSVhfEQsJOHZBORnatEMAcpNp9jlSNQkOdsHq/ImW', NULL, NULL, NULL, '0', NULL, 0, NULL, 1, '2020-07-04 11:33:28', '2020-07-04 11:33:28', NULL, NULL),
(147, 'Deeyan', NULL, 'deeyanriz@gmail.com', NULL, 'IyjmgR55', 'admin', NULL, NULL, NULL, NULL, 0, 1, NULL, '2020-06-28 07:59:52', '2020-06-28 07:59:52', NULL, NULL),
(148, 'Hamza', NULL, 'hamza@gmail.com', NULL, 'wYBU7ovA', 'admin', NULL, NULL, NULL, NULL, 0, 1, NULL, '2020-06-28 08:04:22', '2020-06-28 08:04:22', NULL, NULL),
(149, 'Hania', NULL, 'hania@gmail.com', NULL, 'PdwzAVNf', 'admin', NULL, NULL, NULL, NULL, 0, 1, NULL, '2020-06-28 08:05:24', '2020-06-28 08:05:24', NULL, NULL),
(150, 'Taban Sabih', NULL, 'Trizvi87@gmail.com', NULL, '$2y$10$o3GwePxmTeshAddGqGihZe2bW1076KXyh.EHjNnxn7yEHlkl4Sn9y', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-07-02 01:25:13', '2020-07-02 01:50:09', NULL, NULL),
(151, 'Mariyam Syed', NULL, 'mariyamfatima@hotmail.com', NULL, '$2y$10$GetIsfG.2JuQ0fAN7DvSSelfR1JKyQQ5eWB8iUNHREddwxkFQM1ki', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-07-02 01:36:42', '2020-07-02 01:50:30', NULL, NULL),
(152, 'Haadi Syed', NULL, 'haadis55555@gmail.com', NULL, '4f11b55f57612f06fe9638b99f6c66e6', NULL, '111227739099880344092', NULL, '-6', NULL, 0, NULL, NULL, '2020-07-02 01:53:42', '2020-07-02 01:54:17', NULL, NULL),
(157, 'Zafir Farhan', NULL, 'znasiem1@gmail.com', NULL, '$2y$10$g32.keYYKvHm.G.W2ATXOOVqB0dj9x.hnKc/CVhWZQwCHnlRLrPQ6', NULL, NULL, NULL, '+1', NULL, 0, NULL, 1, '2020-07-04 15:15:04', '2020-07-04 15:15:04', NULL, NULL),
(158, 'Manpreet Singh Sidhu', NULL, 'manpreet@incrementors.com', NULL, '$2y$10$jldgw8IX2zSV1DOyBRM5wOpsUTzon4FBaW07/qTczKrl79wr9bYkq', NULL, NULL, NULL, '+5', NULL, 0, NULL, 1, '2020-07-07 00:38:50', '2020-07-07 00:38:50', NULL, NULL),
(160, 'Wobbie Anderson', NULL, 'andersonwobbie@gmail.com', NULL, '$2y$10$gb9CxU5JHW5dL9nxHBIPFuVAW4qCQrSTLGXUgwXXxAao4jhmHAWye', NULL, NULL, NULL, '-11', NULL, 0, NULL, 1, '2020-07-08 00:57:22', '2020-07-08 00:57:22', NULL, NULL),
(161, 'Ramish Rizwan', NULL, 'ramishrizwanuddin@gmail.com', NULL, '06997f04a7db92466a2baa6ebc8b872d', NULL, '103536163541481876943', NULL, NULL, NULL, 0, NULL, NULL, '2020-07-08 23:49:10', '2020-07-08 23:49:10', NULL, NULL),
(162, 'Hayyan Farhan', NULL, 'firzeen@yahoo.co.uk', NULL, '$2y$10$fMrA9JvQh1f2C9dCKY704OtnMS/0F.2m8Qr1yBpIwCTLA6ywdRmya', NULL, NULL, NULL, '+1', NULL, 0, NULL, 1, '2020-07-09 00:11:33', '2020-07-09 00:11:33', NULL, NULL),
(163, 'Mohamed Ehab', NULL, 'elfishawi58@gmail.com', NULL, 'ffeed84c7cb1ae7bf4ec4bd78275bb98', NULL, '104410297247262249584', NULL, NULL, NULL, 0, NULL, NULL, '2020-07-09 00:13:04', '2020-07-09 00:13:04', NULL, NULL),
(164, 'Stella Howard', NULL, 'stellakellyhoward@gmail.com', NULL, '$2y$10$rCnukaWYsGEszotgQv8QBeizk.jKlh7D7dbCFvyWX.I09RPcL2sf.', NULL, NULL, NULL, '0', NULL, 0, NULL, 1, '2020-07-09 00:18:59', '2020-07-09 00:18:59', NULL, NULL),
(165, 'Garrett Williams', NULL, 'garrettwilliamshampton@gmail.com', NULL, '$2y$10$p5YJYAsbaH371.a2xCClJOx3DfBna6/aURQB3rL9xq78SSXeQubMq', NULL, NULL, NULL, '-6', NULL, 0, NULL, 0, '2020-07-09 22:35:51', '2020-07-09 22:35:51', NULL, NULL),
(176, 'Harry', NULL, 'chanchharry@gmail.com', NULL, '$2y$10$1.0HqRA5lMoTNGzVxBYqze0Z1UOXSGYZqNwVWVe1iA1n/eFU41neu', 'coach', NULL, NULL, '+8', 'Harry is an incoming law student who will be studying at the University of Oxford in the fall of\r\n2020. Harry started debating 6 years ago and has been coaching his school’s debating team\r\nfor almost 3 years. He also took up Model United Nations (MUN) 4 years ago and was\r\nimmediately named the most improved delegate in his first conference. He would then go on\r\na small winning streak and snatch other awards such as “Outstanding Speaker”,\r\n“Outstanding Delegate”, and ultimately - “Best Delegate”.\r\n\r\nHarry has also “broke” (entering the knockout rounds) at several debate tournaments - most\r\nrecently at Asia Debate Open (Guangzhou). He broke into the Quarter-Finals and his team\r\nwas ranked 6th amongst all secondary school teams (and 11th overall with university teams\r\nincluded). He has been working with the juniors at his school to prepare them for different\r\ndebate tournaments and MUN conferences down the years, where some of them were able\r\nto break (in debates) and win awards (in MUNs) at their first few competitions. Harry\r\nbelieves that the learning curve in debate/MUN is not as steep as some may believe - as\r\nlong as there is someone guiding you along the way.', 0, 1, 0, '2020-07-16 10:43:14', '2020-08-18 22:07:48', NULL, NULL),
(177, 'Hassan', NULL, 'hassan10khan@gmail.com', NULL, '$2y$10$f8xKpafuQmBaesjS6MaGaO9O6CZyfThfN3xPFjZl29/k3tfaG6beW', 'coach', NULL, NULL, '+5', 'Muhammad Hassan Qaiser Khan is a recent BA-LLB graduate from the Lahore University of Management Sciences (LUMS), located in Pakistan. He has been involved in public speaking (both debates and MUNs) since the age of 14. He has participated in numerous local and international debating tournaments, reaching the Finals of 20+. Hassan’s most notable achievements include being member of the team that reached the semi-finals of WSDC 2015, winning EurOpen in Stuttgart, reaching the final of WKPDC 2013, and being coach of the Pakistan team that will participate in the first Online WSDC 2020. However, Hassan feels that the utility of public speaking is far greater than just participating in and winning tournaments. Good communication is an essential cornerstone of any meaningful conversation or relationship, based on one’s ability to articulate clearly and concisely. Public speaking teaches the importance of choosing the right words, emotions, and body language as a means of expressing oneself. The ability to understand and effectively employ logical argumentation is extremely helpful in establishing dialogue and developing self-confidence. Being an introvert, Hassan believes that he can help students access and unlock their true potential through public speaking, as he was able to do for himself.', 0, 3, 1, '2020-07-16 14:26:14', '2020-07-18 08:28:31', NULL, NULL),
(178, 'Ameena', NULL, 'khan.sullivan@gmail.com', NULL, '$2y$10$lRuG3Wks/C/C4PflgwbcoeXxEYXlenGT5M.rn3rtj0boUmwLTPaay', 'coach', NULL, NULL, '0', 'Ameena is an Education Programmes Officer for an international education charity, leading debating programmes for disadvantaged students. She gained her BSc (Hons) in Biological Sciences from the University of Surrey and is currently studying an MA in Applied Linguistics and Communication at Birkbeck College, University of London. During her undergraduate degree, Ameena was the President/VP of Surrey Debating Society and was responsible for their training programmes and outreach work with other university departments. Ameena worked as a Senior Oracy Trainer for The English-Speaking Union for four years, teaching debating and public speaking programmes in the UK, Japan, Italy and Denmark. Ameena has an academic interest in transformative education and has published research papers on these topics. She is passionate about dialogic education as a means of radical social change.', 0, 2, 0, '2020-07-16 16:59:23', '2020-09-04 05:50:24', NULL, NULL),
(179, 'Leonardo Santos', NULL, 'contato.leonardocardoso@outlook.com', NULL, '$2y$10$RqNH2A.3znwVqjXApdGtkO5PljsbGN0vEXElRWmZ2DNNGf4d/iahq', NULL, NULL, NULL, '-3', NULL, 0, NULL, 0, '2020-07-16 19:17:22', '2020-07-16 19:17:22', NULL, NULL),
(180, 'Jad', NULL, 'jadsoucar@gmail.com', NULL, '$2y$10$1vsN7U0o1FO8qJ2R5NNe0ue2EmpawNcQpAulJhd5nOqdS9I4aRhBi', 'coach', NULL, NULL, '+5', 'Jad first entered the world of high school speech and debate as a sophomore in high school, and he\r\nquickly fell in love with the fast passed but rewarding activity. Throughout high school he regularly\r\ncompeted in Policy debate and Extemporaneous speaking, eventually ranking in the top 15 Policy\r\nDebaters, and the top 20 Extemporaneous speakers in the state California. On the local and national\r\nlevel, Jad became a two-time national congressional debate finalist, while also placing highly in a bevy of events including impromptu, Public Forum, and Parliamentary Debate. Throughout and after high school, Jad translated his passion for speech and debate by instructing novice classes for 100s of students in groups ranging anywhere from one debater to forty. After coaching for a year, he began\r\ncreating and teaching his own curriculum for speech summer camps as well as virtual lessons with\r\nstudents around the world. Jad was born and raised in Los Angeles where he currently attends UCLA.', 0, 1, 1, '2020-07-16 21:34:42', '2020-07-18 08:31:36', NULL, NULL),
(181, 'Aashia', NULL, 'aashia.bose16@gmail.com', NULL, '$2y$10$65nieCK1OLuptmpNe8/2Mue3pCEScHKFyclG82.RmXY/QOKut0r5u', 'coach', NULL, NULL, '-4', 'Aashia Bose is a third year Anthropology and Sociology student at McGill University in Montreal,\r\nCanada. She has a strong passion for debate and public speaking, having taken part in competitive debate, Model United Nations, and various other public speaking opportunities over the last six years. She was the President of Junior Debate and Vice President of Model United Nations in her high school, and currently serves as the Internal Tournaments Coordinator for the McGill Debating Union. She has attended various debate tournaments around Canada as a debater and judge, including Hart House IV and NAW*DC, as well as several debate and MUN Conferences in her hometown of Dubai, UAE. She has spent the last three years coaching debate in various styles, including British Parliamentary, Canadian Parliamentary, and Worlds Schools. She has coached debate to elementary school, middle school, high school and college students.', 0, 1, 0, '2020-07-17 13:06:45', '2020-07-21 23:47:45', NULL, NULL),
(182, 'Abdullah', NULL, 'abdullahejazkhan3@gmail.com', NULL, '$2y$10$sa52SatS.0rUML9uTMuBa./eHrCFkdF434maxjmONJzqBX5IWp0o6', 'coach', NULL, NULL, '+1', 'Abdullah Khan is a graduate student who finished his Master’s in Financial Economics in 2020. He split the last two years of his degree between the University of Sydney and the University of Freiburg.\r\nCurrently, he is working in a start up in Heidelberg. \r\n\r\nHis love for debates started as young as 11, when he was a small child in an oversized suit attending every Model United Nations conference he could access. The seventeen years that followed his first MUN resulted in him falling in love with public speaking at large. He spent five years speaking on the school parliamentary debate circuit, followed by another four years of speaking the University circuit in Pakistan. He then went on to speak in various European tournaments before moving on to speak the Australian parliamentary debate tournaments. In this time, he also spent seven years coaching Westminster College – his team went on to win the national championship three times and many of his students were selected to represent Pakistan team at the World Schools Debating Championship. He has also worked at Master’s Academy in Sydney as a debate instructor, teaching multiple schools simultaneously.\r\n\r\nApart from the debates and work, he is an NBA fan who spends more time that he will ever admit\r\nwatching highlights of the Lakers. He does branch out every now and then from basketball to play\r\ncricket (like every other child raised in the sub-continent) and spent much of his childhood apologizing for breaking his neighbours’ windows.', 0, 3, 1, '2020-07-17 20:49:48', '2020-07-18 08:34:51', NULL, NULL),
(168, 'Jonathan Stanhope', NULL, 'jstanhopej@gmail.com', NULL, '$2y$10$ExJctWrD5c.PR0Ak/UwROOOfpEvDPjNdILDqF1AuX3okigIjrfHxG', 'coach', NULL, NULL, 'US/Eastern', 'Jonathan considers coaching speakers and debaters to be his greatest pride in life. He strongly believes that the skills to construct arguments for effective representation of positions on specific issues, constructively analyze other positions on those issues with an open mind, critically evaluate sources of information to support one’s own beliefs and opinions, and speak publicly on one’s own beliefs and opinions in a persuasive manner are fundamental to young people’s aptitude for improving the world on all levels of organization from the local to the global. He is highly passionate about communicating such skills to his students for the betterment of their own lives as well as those of their communities. TalkMaze has enabled Jonathan to share his knowledge and experience with a much larger population of young people with similar interests and passions. It has also extended his reach into communities that are marginalized or otherwise outside of the scope of more traditional arenas for rhetorical and forensic instruction. Jonathan has always strived for the success of his students and peers alike. He has deliberated over several university organizations including but not limited to Phi Alpha Delta Pre-Law Fraternity International and Student Government at Seton Hall University. In 2012 Jonathan helped to create a chapter of Students for Liberty at Seton Hall University: A Libertarian political discourse organization with a focus on devoted public service and political activism but he remains open-minded about his political and economic beliefs. In 2017 Jonathan helped to coach one of his PF teams to Octo- finals at NCFL Grand Nationals. He has also coached introductory debaters for one of the most prestigious private debate clubs in the state of New Jersey: Bergen County Debate Club. Jonathan’s intellectual interests include but are not limited to economics, political science, philosophy of mind, philosophy of language, rhetoric, machine learning and computer programming, logic, psychology, sociology, and critical theory. Throughout his coaching career he has consistently participated in student competitions as an expert judge and he places a heavy emphasis on his students’ skills in judge/audience adaptation. His judge paradigm is a hybrid of game theory and policy-making with a heavy emphasis on logical reasoning and unique argumentation. When he is not coaching debaters or doing research Jonathan enjoys music, photography, reading, and traveling.', 0, 2, 1, '2020-07-12 21:20:55', '2020-11-15 01:54:52', NULL, NULL),
(169, 'firzeen farhan', NULL, 'znasiem@outlook.com', NULL, '$2y$10$SAz6LMHGvV6V4A.ZT.DV1.wwNLZfinq8nr0pYo66fDBFLpXrvEUIG', NULL, NULL, NULL, '+1', NULL, 0, NULL, 0, '2020-07-13 13:06:35', '2020-07-13 13:06:35', NULL, NULL),
(170, 'Celeste Riley-Norman', NULL, 'celeste.rileynorman@gmail.com', NULL, '$2y$10$ZUljw.oDuBOZcSjRW2UOA.rVlZfruSpbT22rBRissG2sRQ1lBL/m6', NULL, NULL, NULL, '0', NULL, 0, NULL, 1, '2020-07-14 00:26:57', '2020-07-14 00:26:57', NULL, NULL),
(171, 'Matthew', NULL, 'matthewanzarouth@gmail.com', NULL, '06409663226af2f3114485aa4e0a23b4', 'coach', '109010625682845446593', NULL, '-4', 'Matthew is a debater and coach from Montreal, Canada. He is a member of Team Canada Debate and will be one of five high school debaters from the national team to represent Canada at the World Schools Debating Championship this summer. His debating accomplishments include placing Top Speaker and Champion of the Saskatoon World Schools Debating Championship 2020, Top Speaker at the Quebec Provincial Debating Championship for three consecutive years, Champion of the Harvard World Schools Invitational 2020, one of three Champions at the Doxbridge Online Open 2020 (university tournament jointly run by students of Durham, Oxford and Cambridge), and 2nd Speaker and Semifinalist at the Argo Open 2018 in\r\nRomania. Matthew has also been the recipient of several Public Speaking Awards in both English and French. Matthew has experience in just about every debating format and speaker position. He has also coached at his high school debate club and judged at Canadian tournaments. Matthew loves the intellectual exercise of debating — he believes that the activity brings students to think analytically, strategically and creatively, and offers them a unique challenge they would not otherwise experience in school or elsewhere. He is thrilled to have the opportunity to share his\r\npassion with students on TalkMaze.', 0, 1, NULL, '2020-07-16 05:50:56', '2020-08-18 22:06:52', NULL, NULL),
(172, 'Giovanni', NULL, 'gbegossi@live.com', NULL, '$2y$10$0OJYecFtnRsS3iVOyID6JurqaWVP1tjw2ApQb/ApwwPklPJakSsFu', 'coach', NULL, NULL, '-3', 'A Brazilian debate aficionado and lawyer, Giovanni Begossi graduated summa cum laude in\r\nlaw at Federal University of Rio Grande do Norte (UFRN). For exceptional academic\r\nperformance, he received an international scholarship to study abroad at the University of\r\nCoimbra, where he fell for debating. Once back in Brazil, he founded and presided UFRN’s\r\ndebate team, which in its 3rd year of existence already had won +20 titles as well as\r\nhistory’s biggest tournament held in Portuguese in both open and novice categories.\r\nChief-Judge of +15 debating competitions, including several international ones both in\r\nPortuguese and Spanish, Giovanni was the chair for the 2019 World Universities Debating\r\nChampionship in Portuguese’s Grand Final. With +20 breaks as a debater, he was champion\r\nand/or best speaker of 8 debate competitions in the Brazilian circuit, and finalist in other 9,\r\nholding a record of 10 tournaments in a row among the top 3 speakers (including Brazil’s\r\nNational Championship). Two-time Brazilian Public Speaking Champion (2018, 2019),\r\nGiovanni is the only person to win the competition since its first edition. Always in search of\r\nnew challenges, more recently he became the first Brazilian to break in Spanish both as a\r\ndebater and as a judge.', 0, 2, 1, '2020-07-16 06:31:52', '2020-07-16 09:17:46', NULL, NULL),
(173, 'Jeremiah', NULL, 'sekyijeremy@gmail.com', NULL, '$2y$10$Gfy71hx6qd6l2FZpjGf52.LnBppQKiELnzpL8PnS0niOLW/g2D61W', 'coach', NULL, NULL, '0', 'Jeremiah Kobby Sekyi is an international award-winning public speaker and debater of\r\nGhanaian nationality. From high school through college, Jeremiah has amassed six years of experience in debating, public speaking and speech evaluation, with a specialty in British Parliamentary Debate and Impromptu Speaking. During this period, he has won the Public Speaking Championship at the World Universities Debate Championship, the Best Judge award at the Pan-African Universities Debate Championship and several speaker and judge awards in over 25 debating\r\ncompetitions around the world. As a Pharmacy major in the University of Ghana, Jeremiah also served as the 6th President of the University of Ghana Debate Society and received the Student Leader of the Year Award at the end of his tenure. With a deep appreciation of the contribution of communication and analytical skills in personal, professional and societal development, Jeremiah has also been actively involved in coaching high school and college students in different formats of debate and public speaking for the past three years. Applying acquired strategies, patience and good- humour, Jeremiah focuses on a holistic development of the confidence and abilities in coaching and mentorship. Beyond the stage, Jeremiah’s interests lie in ancient philosophy, African literature and global affairs.', 0, 1, 1, '2020-07-16 06:41:18', '2020-07-16 09:18:08', NULL, NULL),
(174, 'Alikhan Kazenov', 'Coach Alikhan', 'kazenov.alikhan97@gmail.com', NULL, '$2y$10$1gkNIWiFdGHJNCbol.RijepByfTSI4V.wJ6UHKTncpRNkXAPkAkOO', 'coach', NULL, NULL, '+6', 'Passionate about debate, Alikhan is a lifelong member of the Debate Club Parassat\r\n(Astana, Kazakhstan) and alumni of the Learning Leaders Fellowship program. He\r\nstarted his debating journey as a freshman at the university without any previous\r\nexperience in competitive debates. During 5 years of speaking in BP format, he\r\nbecame the top speaker and the winner of more than 20 competitions all around CIS states (Kazakhstan, Russia, Kyrgyzstan) in English, Russian and Kazakh languages. In the international arena, he reached open semifinal on Riga IV and EFL Final on Central European open as well as represented Kazakhstan team at the World Universities Debating Championship. Alikhan always wants to share his experience and knowledge with students. Therefore, he got to be the head coach of Debate Club Parassat in Astana. Then he ran the Training of trainers program organized by the International Debate Education Association to develop coaching skills among students in different regions of Central Asia. Finally, he worked as a coach at one of the most prestigious learning centers in the world named Learning Leaders (Shanghai, China). In that period, students of LL won the EurOpen and Shanghai Schools Open.', 0, 1, 1, '2020-07-16 07:39:51', '2020-07-21 09:55:22', NULL, NULL),
(175, 'Trisha', NULL, 'trishamapacpac@gmail.com', NULL, '$2y$10$7VpfGAx2s/vgTd8U6uJDHOWdVcf1jG7G4xYTaBh0vBPLSfg4viYlW', 'coach', NULL, NULL, '+8', 'Trisha Mapacpac has more than six years of debate and public speaking experience. She\r\nstarted participating and winning in debate tournaments and public speaking contests since she\r\nwas in high school. She has a background in Asian Parliamentary, British Parliamentary, and\r\nOxford-Oregon debate formats. In college, she represented her university, University of the\r\nPhilippines Los Banos, to numerous regional, national, and international debate and public\r\nspeaking tournaments. A few of her notable awards include Third Best Speaker of the\r\nPhilippines and Sixth Best Debate Team in Asia, during 2019. During college, she traveled all\r\nover the Philippines to teach debate and public speaking to different high schools, colleges, and\r\nuniversities. She also coached debaters and public speakers who have won numerous awards\r\nin regional, national, and international tournaments. Aside from coaching, debating, and public\r\nspeaking, she is also a debate and public speaking judge. She travels all over the Philippines\r\nand Asia to judge various debate and public speaking formats. She was elected to be the\r\nCo-Chief Adjudicator for the National Debate Championship of the Philippines in 2020.', 0, 1, 0, '2020-07-16 08:21:29', '2020-07-16 09:20:59', NULL, NULL),
(183, 'Naveen', NULL, 'harnaveenjeet@gmail.com', NULL, '$2y$10$A98Aqdn6SgI4gDPUfsoXUeq1NPP.uw9Qbt/HjeVEu.6Zwa4xHu9fW', 'coach', NULL, NULL, '+8', 'Naveen is a formidable individual within the Intervarsity debating circuit. With half a decade of experience, his achievements in debating range from his time representing Malaysia at the World Schools Debating Championship (WSDC) in 2017, whereby Naveen was an open\r\nocto-finalist, as well as one of the top 50 open speakers in the world. Fast forward to his varsity debating career, Naveen has broken twice in the open category of the World Universities Debating Championship (2019-2020). In 2018, he also became an Asian semi-finalist on his first\r\nattempt, where he also was ranked as Asia’s 11 th best speaker. As a judge, Naveen has been invited to be a judge in numerous international tournaments in countries such as China, and Korea, and\r\nhe has served on the adjudication core of some of Malaysia’s largest debating championships, as well as numerous international tournaments. He also currently serves as a trainer at the Malaysian\r\nInstitute For Debate And Public Speaking (MIDP), and has also been part of the selections committee for the Malaysian National Debating team.', 0, 3, 1, '2020-07-19 17:43:21', '2020-07-21 09:58:12', NULL, NULL),
(184, 'Eric', NULL, 'evsader@gmail.com', NULL, '$2y$10$ThrkVFAMRllssD1sSWh7fO/OhdSkBkrxxkM7w2GQf1y3H3.DmbkrO', 'coach', NULL, NULL, '-4', 'Born and raised in the suburbs of Montréal, Eric Sader is one of our coaches here at TalkMaze. Currently pursuing a Bachelor of Arts at McGill University in Montréal, he is majoring in Economics and minoring in both History and Mathematics. His interest lies mostly in international trade and development, with a particular focus on the Middle East and Lebanon. For the past four years, Eric has competed on the North American Model UN Circuit, travelling as far as Panama to debate with and compete against incredibly talented speakers, negotiators, and policy creators. Specializing in crisis committees, where delegates are often called on to inhabit people instead of countries, he has won multiple awards at some of the most difficult conferences on the circuit. At FCMUN this year he personified Lyndon B. Johnson while navigating the Cuban Missile Crisis, landing him a Best Delegate award. Eric has also been active in training the new generation of Model UN Competitors, both at the College and University level, and helping McGIll University rank 13th on the Best Delegate World Rankings, a 5 spot climb from the previous year. He combines this expertise with countless staffing experiences at some of the highest ranked high school and University level conferences. Some of his favourites include his 2019 Star Wars Committee at the Secondary Schools’ United Nations Symposium (SSUNS), and his 2020 McGill Model United Nations (McMUN) Committee on the topic of Space Exploration and Colonization. For Eric, a good delegate demonstrates integrity, passion, and an ability to always negotiate and secure one concession further than what would be reasonable. When he isn’t busy arguing about Directives, Eric often spends his time drumming to some Blink-182, guiding his friends through his latest Dungeons and Dragons Campaign, or trying to figure out if a hot dog is indeed a sandwich (he is quite convinced it’s best classified as a panini).', 0, 1, 1, '2020-07-21 01:31:17', '2020-07-21 09:55:39', NULL, NULL),
(185, 'Petra', NULL, 'petra85radic@gmail.com', NULL, '$2y$10$uS2HPsepOWcbDuCpKS1/j.qFhSmA5SX7ts82yOHiXCk0735pFV2La', 'coach', NULL, NULL, '+1', 'Petra is a postgraduate student at the London School of Economics and Political Science – Department of Media and Communications. She has a strong background in competitive debate all over Europe – with 5+ years as a coach in Karl Popper, World Schools and British Parliamentary, as well as the experience of working with the Croatian National Debate Team for the World Schools Debating Championship. Besides formal competitive debate, her experiences include 5+ years of Model United Nations (MUN), 5+ years of European Youth Parliament (EYP).\r\n\r\nAs a debate, MUN and EYP trainer, she has visited over 15 and coached students from more than 30 different countries. She has adjudicated some of the biggest debate tournaments in the world, as well as participated in the biggest annual MUN conference – NHSMUN. Her students have won dozens of medals and trophies from national and international tournaments, along with awards for outstanding delegates and outstanding resolutions – whereas, she has received several awards for outstanding mentorship.  \r\n\r\nAs a Communications professional, she has held several corporate workshops on public speaking, non-verbal communication, leadership, presentation skills and many more. As a BA Teaching Assistant, she has presented university classes on non-verbal communication, political communication, visual communication and rhetoric.', 0, 2, 1, '2020-07-21 13:54:38', '2020-10-02 03:53:10', NULL, NULL),
(186, 'Aleha', NULL, 'aleha1900@gmail.com', NULL, '$2y$10$wj5QlvWY5Nak6Qgo/sGt2.M/DfQCMjP00ZMEDBZt4dJtAiTyZ2UhK', 'coach', NULL, NULL, '+5', 'Aleha started her debate journey 5 years ago. Across this journey, she has managed to win\r\nover 20 best speakers at national tournaments (including being titled the best Under-19\r\nspeaker in Pakistan), and ranked as the 7 th best ESL speaker at the World Schools Debate\r\nChampionship. Her achievements are the culmination of a long and challenging personal and\r\nintellectual journey and reaffirms our belief in parliamentary debate empowering young\r\npeople to take charge of their intellectual growth.\r\n\r\nAt the same time, it has been inspiring to see that Aleha has consistently used their position\r\non the Pakistani debate circuit to create more inclusive spaces for female speakers, and\r\nredefine the norms of success in debating that have for so long been dominated by men. It is\r\nheartening to see them serve as an inspiration to young female debaters across Pakistan.\r\n\r\nAs a coach, Aleha focuses on ensuring every student has their individual strengths catered to.\r\nThrough covering a variety of debate ideologies and maximizing avenues of information, she\r\nstrives for an environment where debating is accessible to everyone.', 0, 1, 1, '2020-07-21 19:15:46', '2020-07-23 13:52:27', NULL, NULL),
(187, 'Humza', NULL, 'humza.jami.7@gmail.com', NULL, '$2y$10$34Hu1Y8GTBaj7lyTNifsou3kBDEFt2LITai2O2Red5yCcYDBcDK0O', 'coach', NULL, NULL, '+5', 'Humza Nadeem Jami is a Pakistani Debate and Model UN Coach. He is one of the few\r\nindividuals in the region that are specialists at both Model UN and at Parliamentary\r\nDebating. He is a graduate of the Lahore University of Management Sciences (LUMS).\r\n\r\nJami, as he likes to be known, has been involved in Model UN since 2011. Over the past\r\ndecade, he has claimed Diplomacy awards at multiple conferences of note including the\r\nHarvard WorldMUN Conference, the LUMS Model UN Conference (LUMUN) and the\r\nHarvard Model UN Conference Boston. He has been credited with creating Pakistan’s first\r\nauthentic Joint Crisis Cabinet simulations at the 2016 LUMUN Conference as a Committee\r\nDirector for Harry Truman’s US National Security Council and Joseph Stalin’s Politburo. This\r\ncabinet laid the foundation for crisis committees in Pakistan and their simulation. He also\r\nhas served as the Secretary General for Karachi, Pakistan’s largest and most prestigious\r\nconference for the past two years – the Rotaract Model UN Conferences. He is an alum of\r\nthe Lyceum School in Karachi, where he currently coaches the Model UN team – which is\r\none of the most prestigious in the entire continent. The Lyceum was ranked twice on\r\nBestDelegate.com’s list of the Best International Model UN High School Teams. Under Jami,\r\nthe Lyceum team has proudly kept up its best traditions of international excellence.\r\n\r\nHe is also one of Pakistan’s top parliamentary debaters and debate coaches.\r\nAs a debater, he was part of Pakistan’s first breaking team at the United Asians Debating\r\nChampionship 2016 from LUMS, which set the foundations for future success of the\r\ninstitution on international platforms. He has spoken more than 17 finals over the past 5\r\nyears as a debater, and has judged more than 50+ debate competitions, serving as a Chief\r\nAdjudicator at more than 20 of them domestically. He is also the most successful Pakistani\r\nJudge on international debating platforms, with Judge Breaks at the United Asians Debating\r\nChampionships and the Australasian Debating Championships. He is currently in process of\r\nAdjudicating at the prestigious World Schools Debating Championship 2020.\r\n\r\nAs a coach, Jami’s students are some of the best in the region, with 4 out of 6 of his students\r\nbeing shortlisted for the Pakistan National Team Selection Camp in 2020, in the process of\r\nwhich they also reached more than 10 finals in their season. He has also served as Selector\r\nfor the Pakistan WSDC Team in the past, which is one of the most competitive in the entire\r\nworld.', 0, 2, 1, '2020-07-21 20:07:22', '2020-07-23 13:54:44', NULL, NULL),
(188, 'Zain Qureshi', NULL, 'creationsca@hotmail.com', NULL, '$2y$10$A2f0Wf.1tiqCuVN7EeobHeLYJ6wVnJ54y/ozszSNW.HmFfM2xi8Ha', NULL, NULL, NULL, '0', NULL, 0, NULL, 1, '2020-07-21 22:58:10', '2020-07-21 22:58:10', NULL, NULL),
(270, 'Elroy Harris Elroy Harris', NULL, 'gbelle84@gmail.com', NULL, '$2y$10$UvRz461NCoT6/lgSw3/3xOn33mq4jcRtND1te3DgE3CCz25usChNq', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-12-01 08:42:22', '2020-12-01 08:42:22', NULL, NULL),
(190, 'Student One', NULL, 'studentone@gmail.com', NULL, '$2y$10$wyLsozTiT/mgY9jzGEZr8OpYhgtgYyGcXDjCgu0YYo4NcAgTNRIYW', NULL, NULL, NULL, '0', NULL, 0, NULL, 0, '2020-07-22 10:56:02', '2020-07-22 10:56:02', NULL, NULL),
(191, 'Student Two', NULL, 'studenttwo@gmail.com', NULL, '$2y$10$nmtkuZIVyzASOGiNjZRb..GOSeLdO0iR02LiL9n6CKgDF.aieTpAG', NULL, NULL, NULL, 'US/Mountain', NULL, 0, NULL, 0, '2020-07-22 10:59:21', '2020-11-10 03:27:47', NULL, NULL),
(192, 'Micaela ', NULL, 'micaelalewis@rogers.com', NULL, '$2y$10$PeSIjqdvNSlVjTl9NsAR9.D2Prjn4ta/eTWGuG9R46BjorovHyiku', 'coach', NULL, NULL, 'US/Eastern', 'Micaela is entering her final year of her BSc in Biology at McGill University in Montreal, Canada. Entering her 10th year of competitive debating, she has amassed 30+ breaks and numerous speaker awards in her university debating career alone. This year, she advanced to the elimination rounds of the World\r\nChampionships and was crowned top speaker at one of the world’s most elite tournaments, the Hart\r\nHouse IV. Micaela also enjoys judging and coaching, having been on adjudication cores for several large\r\ntournaments and coached for upwards of five years. Currently, she coaches at the competitively\r\nrenowned Selwyn House School, where her students have made the national team in back-to-back\r\nyears. Additionally, she has worked as a teacher at Speechtopia, an international speech and debate\r\nteaching hub, as well as Debate Camp Canada, a debate-oriented summer camp. At her university,\r\nMicaela has been deeply involved in the Debating Union, where she acted as President. Beyond\r\ndebating, Micaela volunteers in a herpetology lab and has co-authored a journal article on amphibian\r\ndecline. You can find Micaela spending most of her time at the Redpath Museum of Natural History,\r\nwhere she occasionally tour guides and does speaking events.', 0, 2, 0, '2020-07-23 00:45:24', '2020-12-23 02:20:20', NULL, NULL),
(193, 'Win Sim', NULL, 'winssimy@gmail.com', NULL, '$2y$10$R2mWRt7uOEsyNYU7bJ7qf.SxRdvbh4Xyxv9k9FnsWthiC112rQQXC', NULL, NULL, NULL, '+2', NULL, 0, NULL, 1, '2020-07-23 11:27:56', '2020-07-23 11:27:56', NULL, NULL),
(194, 'Stephen Murphy', NULL, 'jpa6644@gmail.com', NULL, '$2y$10$W44ZdAId4uh3rw8VQ8PnjeoZBRfLECJCTWt4HuPqaEX9d7Jj1V1IS', NULL, NULL, NULL, '0', NULL, 0, NULL, 0, '2020-07-23 19:40:04', '2020-07-23 19:40:04', NULL, NULL),
(195, 'John', NULL, 'JJclmn@gmail.com', NULL, '$2y$10$LI68L4PwVfXGm5nmemr0IeqEtXDVdo5mhJKAZSzvg4TgRqBa59Iq6', 'coach', NULL, NULL, '-7', 'For the past 15 years, John has competed, coached and privately tutored nearly every area of speech and debate. He has worked with aspiring speakers as young as five and as old as sixty-five. He enjoys tailoring his coaching to each individual aspiring speaker and he takes pride in the belief that no two speakers are alike. Throughout the years, John has had many opportunities to practice his passion. He has coached\r\ndebate teams ranging from twenty to sixty students, many of whom with international backgrounds. He has coached intensive summer programs that focused on preparing debaters for the upcoming school year. He has worked with private clients through a company he started in Manhattan. He has even worked with fellow teachers when preparing for professional presentations. John has a passion for helping any aspiring speaker find their voice.', 0, 3, 0, '2020-07-24 01:32:22', '2020-07-26 01:41:50', NULL, NULL),
(197, 'Gihi Kow', NULL, 'gihikow817@kleogb.com', NULL, '$2y$10$XD8ld/1R21GTbyY/ozYuQObdp.su5T0DpJAHL7HV8e16f4bb4WSqa', NULL, NULL, NULL, '-6', NULL, 0, NULL, 1, '2020-07-30 21:21:05', '2020-07-30 21:21:05', NULL, NULL),
(198, 'Sena Gebe', NULL, 'senagebe@gmail.com', NULL, '$2y$10$2AUnbHVeQ5l5FRHzg8bRD.Ap7aBku5a5N9XSgVW.HOiK5TLPOoJVO', NULL, NULL, NULL, '0', NULL, 0, NULL, 1, '2020-07-31 16:38:10', '2020-07-31 16:38:10', NULL, NULL),
(199, 'Snehal', NULL, 'snehalparmar272@gmail.com', NULL, '$2y$10$C8q4VgxUDaQWX1oi57BI7e0VDuWUrmF8f4jlAstn9VCfQIEayuJqC', 'admin', NULL, NULL, '-6', NULL, 0, 1, 0, '2020-08-04 07:35:04', '2020-08-18 22:07:09', NULL, NULL),
(200, 'neelu sharma', NULL, 'test11@gmail.com', NULL, '$2y$10$JR4DhXQ3h4VFa5mj6uFcfOzfhTfkfjEHT.bdp5JmD08Dn4qwmUKCC', NULL, NULL, NULL, '0', NULL, 0, NULL, 1, '2020-08-06 10:18:26', '2020-08-06 10:18:26', NULL, NULL),
(201, 'Jessika Peixoto', NULL, 'jessvpeixoto@gmail.com', NULL, '$2y$10$qn1vOFu3BLPrIjDQplq7N.2Ead8.UxC2Zm6PE2sifAFkUdzUwRHLG', NULL, NULL, NULL, '+3', NULL, 0, NULL, 1, '2020-08-06 18:13:00', '2020-08-06 18:13:00', NULL, NULL),
(202, 'Muhammad Shaimon Islam', NULL, 'ss.shaimon2003@gmail.com', NULL, '$2y$10$S2iMveKdkxWr3dCCA71U7O8GrhNfI.BB8P7PYIk3w6y1MVKGMWN3a', NULL, NULL, NULL, '+6', NULL, 0, NULL, 1, '2020-08-06 20:25:14', '2020-08-06 20:25:14', NULL, NULL);
INSERT INTO `users` (`id`, `name`, `nick`, `email`, `email_verified_at`, `password`, `role`, `google_id`, `remember_token`, `timezone`, `bio`, `rating`, `type`, `subscriber`, `created_at`, `updated_at`, `deleted_at`, `dob`) VALUES
(203, 'Muzammil Syed', NULL, 'muzammil.syed@mail.utoronto.ca', NULL, '$2y$10$OMd0YlF/u0j/KyAFxLwZY.Oop/Ov09TNMdoYh7aBUdFV2qDtmXWaW', NULL, NULL, NULL, '-4', NULL, 0, NULL, 1, '2020-08-07 02:51:22', '2020-08-07 02:51:22', NULL, NULL),
(269, 'abdullah abubaker', NULL, 'a.abubaker.oranjeclick@gmail.com', NULL, '8d7d8ee069cb0cbbf816bbb65d56947e', NULL, '103150076939354133758', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-30 15:46:44', '2020-11-30 15:46:44', NULL, NULL),
(205, 'Camilo Cortes', 'yellownotepad', 'camiloacp@outlook.com', NULL, '$2y$10$4Ux9wS43cQSXCoScirH9mencRI7RavUqF9mI0u8zwvFixBcijBtQ2', NULL, NULL, NULL, '-7', NULL, 0, NULL, 0, '2020-08-08 23:22:25', '2020-08-22 02:03:34', NULL, NULL),
(206, 'Areej Shaikh', NULL, 'areej.shaikh786@gmail.com', NULL, '$2y$10$pJ0jqqmt8wNd/h/j4SNomubXpeExFXDirjwJYeKPeMYNtT6Rd7xke', NULL, NULL, NULL, '+6', NULL, 0, NULL, 1, '2020-08-09 21:02:59', '2020-08-09 21:02:59', NULL, NULL),
(207, 'Oris Velasquez', NULL, 'orisvelasquez14@gmail.com', NULL, '$2y$10$I4cWwg5r66TgJwDXt9n8ZunsCeYiKRQnpEfPvxoP5k4wObmlRaAwu', NULL, NULL, NULL, '-5', NULL, 0, NULL, 0, '2020-08-11 06:09:58', '2020-08-11 06:09:58', NULL, NULL),
(208, 'Darren Jen Zen Lim', NULL, 'darrenjzlim@gmail.com', NULL, '$2y$10$mO4mmYXhjdBY3DkejfWxm.clDF5BUsWb5oCII7rPHl446IHT1GPRu', NULL, NULL, NULL, '+8', NULL, 0, NULL, 0, '2020-08-13 16:50:24', '2020-08-13 16:50:24', NULL, NULL),
(209, 'Haider Abrar', NULL, 'haiderabrar2@gmail.com', NULL, '$2y$10$K1W.6ubFObuzIThxm3PhkOao50jLgVwQn3agWbYic.som6af3XXWW', NULL, NULL, NULL, '-7', NULL, 0, NULL, 1, '2020-08-14 06:46:44', '2020-08-14 06:46:44', NULL, NULL),
(210, 'Fatimah ALHAJJAJ', NULL, 'Falhajjaj4@hotmail.com', NULL, '$2y$10$Pap6YmsISA6F34hSSySgduWWwyvfol0mLYqzd2CopMoT3j4o/pS12', NULL, NULL, NULL, '0', NULL, 0, NULL, 1, '2020-08-14 08:27:21', '2020-08-14 08:27:21', NULL, NULL),
(211, 'Ethan Hendel', NULL, 'ethan.hendel1@gmail.com', NULL, '$2y$10$1D.OQg73gGbCkaDVwzFGWu/cWly/dDTTYgmnuQ98l2DF04ud8.JKm', NULL, NULL, NULL, '0', NULL, 0, NULL, 0, '2020-08-18 08:19:55', '2020-08-18 08:19:55', NULL, NULL),
(212, 'Stuartedigo Stuartedigo', NULL, 'shiela8wanhal@rambler.ru', NULL, '$2y$10$d2z8HXAPs.gqQQ7059GZI.5j3BVbpYM91ZRVPLH.Mqp1cHXdbYXBC', NULL, NULL, NULL, '+10', NULL, 0, NULL, 0, '2020-08-19 07:42:40', '2020-08-19 07:42:40', NULL, NULL),
(213, 'Angus Gastle', NULL, 'angusgastle@gmail.com', NULL, '$2y$10$IRfuIskneZ3D9I7MqHCv7.Lkll0pmz6YNuhNmnI88ZDq6jUGsxhOO', NULL, NULL, NULL, '-7', NULL, NULL, NULL, 0, '2020-08-20 20:56:55', '2020-08-20 20:56:55', NULL, NULL),
(214, 'Edel Burton', NULL, '115345201@umail.ucc.ie', NULL, '$2y$10$.zZNrClZwAYC2mBcBZ0Q..siJZvjXsVAeZqfJncQrNxXQ/F0/eljq', NULL, NULL, NULL, '0', NULL, NULL, NULL, 0, '2020-08-22 14:10:16', '2020-08-22 14:10:16', NULL, NULL),
(268, 'saham nadeem', NULL, 'sahamnadeem2016@gmail.com', NULL, 'ff2cc3b8c7caeaa068f2abbc234583f5', NULL, '105690069032587599730', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-30 15:44:39', '2020-11-30 15:44:39', NULL, NULL),
(215, 'Bella Jiao', NULL, 'bella.xn.jiao@gmail.com', NULL, '$2y$10$WZMBEFrLIfzajNeIpxqwrOpJXpHVusjAqzqAnT1p6tskgPhpj2d6W', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-08-28 01:56:18', '2020-08-28 01:56:18', NULL, NULL),
(216, 'Hodan Yussuf', NULL, 'hyussuf1@gmail.com', NULL, '$2y$10$tQ7m6lIygoLReH2DLfXdkexu2AZkPLlVlm6bW0BdVqqUl0eH03/XO', NULL, NULL, NULL, '+6', NULL, NULL, NULL, 1, '2020-08-28 21:52:04', '2020-08-28 21:52:04', NULL, NULL),
(217, 'Tina Northwest', NULL, 'Tinanorthwest@gmail.com', NULL, '$2y$10$yg4MD2VSzDpfFgReT8n.oeR6ZaBrqC1n8inmFIFiBxt/BpW8Ojsp6', NULL, NULL, NULL, '+1', NULL, NULL, NULL, 1, '2020-09-02 18:21:00', '2020-09-02 18:21:00', NULL, NULL),
(218, 'SARAH BARTEAUX', NULL, 'SBARTEAUX@ICLOUD.COM', NULL, '$2y$10$jmRkafpfofhQzqTmeiiofepkxV84dA1jbiFqCZXMuLozV1rHqmTmK', NULL, NULL, NULL, '-7', NULL, NULL, NULL, 1, '2020-09-02 23:36:12', '2020-09-02 23:36:12', NULL, NULL),
(219, 'Shaun Hammond', NULL, 'gffawkes@shaw.ca', NULL, '$2y$10$Dzkm2mA3c2AfsftZTx1x/.SwJQjMNQkaLq0o2qGDv5X4AB0O8jwDy', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 1, '2020-09-04 01:12:05', '2020-09-04 01:12:05', NULL, NULL),
(220, 'Mohammad Sulaiman Dawood', NULL, 'sulaiman993507@gmail.com', NULL, '$2y$10$qOUcWmeR20etyskE56xSBe1QvT/z0kgliwWAq/8TbJ3zNarjUF71W', NULL, NULL, NULL, '+5', NULL, NULL, NULL, 1, '2020-09-08 18:25:36', '2020-09-08 18:25:36', NULL, NULL),
(221, 'LUKE BUTTERWORTH', NULL, 'lbutterw@ualberta.ca', NULL, '$2y$10$B.PPUrbwZuq9OSk.aQXWVeqq9wpi6nTb0JOLUKAk3NmpntFg4WBdC', NULL, NULL, NULL, '0', NULL, NULL, NULL, 0, '2020-09-09 01:17:05', '2020-09-09 01:17:05', NULL, NULL),
(222, 'Emma Greer', NULL, 'ejgreer6@gmail.com', NULL, '$2y$10$TIc90RvZKvdd1ZirxcsSzu9fOG.bGsuzfkpZ91yqJAIFXDg5/P0QS', NULL, NULL, NULL, '0', NULL, NULL, NULL, 0, '2020-09-11 04:05:45', '2020-09-11 04:05:45', NULL, NULL),
(223, 'faroos fizal', NULL, 'farisfizal@gmail.com', NULL, '$2y$10$W690Ze57ahBY9XkrFxHGLeErhTQ9bRSXXXG2C3wtmZeXEBMA9T4/.', NULL, NULL, NULL, '-4', NULL, NULL, NULL, 0, '2020-09-12 02:52:25', '2020-09-12 02:52:25', NULL, NULL),
(227, 'Mira Zheng', NULL, 'mira.zheng1@gmail.com', NULL, '$2y$10$qsP.QViTYlFYafteaI/KueDxvXuuhE74/YqNtA4sUHpSy6CAfzpOi', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 1, '2020-09-30 20:27:45', '2020-09-30 20:27:45', NULL, NULL),
(229, 'Nicole Wu', NULL, 'n.wu8324@gmail.com', NULL, '$2y$10$9nP7Cl6WBLWu5.vsIohNLuAAceaZvxt8ozxpDQfj3L.cdcAqRourK', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-10-05 01:40:22', '2020-10-05 01:40:22', NULL, NULL),
(230, 'Audrey Yuen', NULL, 'hkyouthopps@gmail.com', NULL, '$2y$10$2Vcw8KY50zhdFLnuD3Xtpu4Yb/lgn2EdRfNUJ4sTQZn4okQ/5KazS', NULL, NULL, NULL, '+8', NULL, NULL, NULL, 1, '2020-10-08 05:38:03', '2020-10-08 05:38:03', NULL, NULL),
(267, 'Arsh Deol', NULL, 'arshi7824@gmail.com', NULL, '$2y$10$TyjqnynhtwuRs09LFnTMR.SALVJGLZ0w1u5a54yy1LHdSXa7TmQLm', NULL, NULL, NULL, 'America/Los_Angeles', NULL, NULL, NULL, 0, '2020-11-28 08:53:49', '2020-11-28 08:53:49', NULL, NULL),
(231, 'Mirza Ali', NULL, 'mali70162@gmail.com', NULL, '$2y$10$V2kM4SLVqHMbzj8ZVQ6muujLjOMnmhyNyb6YudS4EqHLqhJ.e8l6y', NULL, NULL, NULL, '+5', NULL, NULL, NULL, 1, '2020-10-12 08:27:43', '2020-10-12 08:27:43', NULL, NULL),
(232, 'Kristin Macejkovic Kristin Macejkovic', NULL, 'john.w.hodges.iii@gmail.com', NULL, '$2y$10$B8JKoqrL7GvFDaEtqr18je8aUviXYZpih9nKB5Z3K02KZ/6dexTda', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-10-19 18:27:53', '2020-10-19 18:27:53', NULL, NULL),
(233, 'Urva Dalal', NULL, 'u.dalal@share.epsb.ca', NULL, '$2y$10$z5Rj5boPVMTs8.O221OzEev/9sW50Q0hGhpP3uZsV1DbDmGQItRWK', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 1, '2020-10-20 03:20:47', '2020-10-20 03:20:47', NULL, NULL),
(234, 'Avocado Zhang', NULL, 'jessicamzhuang@gmail.com', NULL, '$2y$10$HBnQcOgBrAu8Yu9XSPMPxeQOO2UYlvJ8zGG7kEZrBDJFt5qsPosqy', NULL, NULL, NULL, '-7', NULL, NULL, NULL, 0, '2020-10-20 03:20:51', '2020-10-20 03:20:51', NULL, NULL),
(235, 'Kevin Lu', NULL, 'kevie.lu8@gmail.com', NULL, '$2y$10$ylAIZXxEFbLEQhnHoO1qseiTn7hsueQgu2qvcVMTJxBSdc7XNx6du', NULL, NULL, NULL, '-7', NULL, NULL, NULL, 1, '2020-10-20 03:21:57', '2020-10-20 03:21:57', NULL, NULL),
(236, 'Sabrina Liu', 'Nugget', 's.liu16@share.epsb.ca', NULL, '$2y$10$5WcTUEqdqJmTbDd9bc2fjuylEXnuKHOuBM.Q2O92AaeZWWHXaCsji', NULL, NULL, NULL, '0', NULL, NULL, NULL, 0, '2020-10-20 03:24:54', '2020-10-20 03:40:14', NULL, NULL),
(237, 'Dianzi Laji', NULL, 'dianzilaji@hotmail.com', NULL, '$2y$10$UZp94KYB6BdXwpjIhoAMluOzMLxWRBV9lfGlkjcM7xjvem6buor6K', NULL, NULL, NULL, '+7', NULL, NULL, NULL, 1, '2020-10-20 03:36:28', '2020-10-20 03:36:28', NULL, NULL),
(238, 'Rajvir Aulakh', NULL, 'Rajaulakh03@yahoo.ca', NULL, '$2y$10$omxg6mKxszzi5Kg/0.9HCuMcl5lL/hMkUW/yauLTf2FyBINslZGcm', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 0, '2020-10-22 03:46:32', '2020-10-22 03:46:32', NULL, NULL),
(239, 'alex fu', NULL, 'alexfu004@gmail.com', NULL, '$2y$10$k92N3WQHvSULVDVLjUXBRu84IAojy7LhyIA3xyFcNZbwjCL47YGau', NULL, NULL, NULL, '0', NULL, NULL, NULL, 0, '2020-10-22 03:49:24', '2020-10-22 03:49:24', NULL, NULL),
(240, 'Jenisa Sah', NULL, 'j.sah1@share.epsb.ca', NULL, '$2y$10$7RywrmE53N7lu8J0bMNRRePJWHAZ5YiiuIEHShaeQMrfZ89Y5MwVe', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-10-22 04:55:08', '2020-10-22 04:55:08', NULL, NULL),
(241, 'Elizabeth Chen', NULL, 'e.chen11@share.epsb.ca', NULL, '$2y$10$1d4Q6HXygN5U2abJT0VL0u5/RU1RqE2cWYN3KWh2McEoDERFi/qF2', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 0, '2020-10-22 05:11:48', '2020-10-22 05:11:48', NULL, NULL),
(242, 'Akhalya Arulmozhi', NULL, 'a.arulmozhi1@share.epsb.ca', NULL, '$2y$10$moT0.XyiqKy/JQz45TKbHugqbnSkOMmvpEB343zgXk044fuCNlLB.', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 0, '2020-10-22 05:12:44', '2020-10-22 05:12:44', NULL, NULL),
(243, 'Test Test', NULL, 'makgrant1728@gmail.com', NULL, '$2y$10$BeYfrutnlN.YI64RhX/u6OfnyKKIEovo6jRdXO1jCEzRh2VnUa846', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-10-22 05:20:22', '2020-10-22 05:20:22', NULL, NULL),
(248, 'Sneh Parmar', NULL, 'snehalparmar@gmail.com', NULL, '$2y$10$RGHcgObIXRPN8/2LU6YWl.e3OR30RBXw4gx2Kwqt5oypOSnJyLAY2', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 0, '2020-10-22 06:29:15', '2020-10-22 06:29:15', NULL, NULL),
(247, 'test test', NULL, 'testing@gmail.com', NULL, '$2y$10$d8vExAJFDfffvVkphbVvSueJJK2eZSdOZbE9ntD4L60it4A.0wmaa', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 1, '2020-10-22 06:28:37', '2020-10-22 06:28:37', NULL, NULL),
(246, 'Carrie Liu', NULL, 'c.liu19@share.epsb.ca', NULL, '$2y$10$DV4bbv.jGkm/q9oZwk3p/.nRpbhTjKyG9.DZsmXnh.3f4dMBibq7u', NULL, NULL, NULL, '-6', NULL, NULL, NULL, 0, '2020-10-22 06:20:14', '2020-10-22 06:20:14', NULL, NULL),
(249, 'testttt tetsttt', NULL, 'testingg@gmail.com', NULL, '$2y$10$0GfNFVoSKZqFSr1Mb1EnquTlLl5pgU7bLkVMZvMVNELvhxA5dI2QG', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-10-22 06:49:12', '2020-10-22 06:49:12', NULL, NULL),
(251, 'Julie Chen', NULL, 'j.chen30@share.epsb.ca', NULL, '5a45828dead8c065099cb653a2185df1', NULL, '116777641477289341278', NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-23 08:08:02', '2020-10-23 08:08:02', NULL, NULL),
(252, 'Adella Mayert Adella Mayert', NULL, 'bupaymentgw@gmail.com', NULL, '$2y$10$ebIAZWpmqjKxD59rzFIyj.fcseLcm5tQCLJPOH6U5qNIaIInia4JO', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-10-25 09:32:29', '2020-10-25 09:32:29', NULL, NULL),
(253, 'StevenBlers StevenBlers', NULL, 'chetayevasa@mail.ru', NULL, '$2y$10$CwqkgTxx4BakwEm1ERSNbe0tQYNbHzr/DCzRp4uh8KxQvGPKSM7J2', NULL, NULL, NULL, '+7', NULL, NULL, NULL, 0, '2020-10-25 10:39:32', '2020-10-25 10:39:32', NULL, NULL),
(254, 'Ricardo McDermott Ricardo McDermott', NULL, 'interac226@protonmail.com', NULL, '$2y$10$NA5C054Yq.ZA/pEAq6eF6OVkHhBr0PsA3hnATzSvKh/xF0Voi2vAy', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-10-25 21:21:36', '2020-10-25 21:21:36', NULL, NULL),
(255, 'Mitchel Stroman III Mitchel Stroman III', NULL, 'roraback01@aol.com', NULL, '$2y$10$m3xrMB3p8aN9oIfmocoJqugbkgPAPEojj3A1D8FA9MEa4BVnhpIs.', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-10-26 14:56:57', '2020-10-26 14:56:57', NULL, NULL),
(256, 'CharlesCIG CharlesCIG', NULL, 'csokura@mail.ru', NULL, '$2y$10$IncQwecJIe/NxwVUw5d7m.8lVTbVWzWP8v8Sjfhn32yXfjizoYC3C', NULL, NULL, NULL, '-3', NULL, NULL, NULL, 0, '2020-11-01 16:44:22', '2020-11-01 16:44:22', NULL, NULL),
(257, 'Lydia Yang', NULL, 'lydiayang115@gmail.com', NULL, '$2y$10$Wuu9Gfe16PHzdgEGixz/Ge7Vm4QkOLLr.x78XY08KBl0ofl8ivXCe', NULL, NULL, NULL, '+5', NULL, NULL, NULL, 1, '2020-11-03 21:41:45', '2020-11-03 21:41:45', NULL, NULL),
(258, 'Fairly Wong', NULL, 'fairlywong14@gmail.com', NULL, '$2y$10$Dl9NxQCx3h6O8hvhpzutHec/xuxAYMVLtm2Py4TaF5WiWpoVke51a', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 1, '2020-11-11 23:14:09', '2020-11-11 23:14:09', NULL, NULL),
(265, 'Tony Kurian', NULL, 'tony.p.kurian@gmail.com', NULL, '$2y$10$77RgtrOZBKYcpJtkO9.dX.zL2T/o/X5.V/yt7GdgiJ81uUYxbeiwm', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 1, '2020-11-23 01:12:49', '2020-11-23 01:12:49', NULL, NULL),
(259, 'Iris Wang', NULL, 'i.wang3@share.epsb.ca', NULL, '$2y$10$m1/O0F91ua.0iFHUxPVZw.ir.fHYSEyXvXfQ7EXa94gjBwIEyzZ2W', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 1, '2020-11-13 04:57:00', '2020-11-13 04:57:00', NULL, NULL),
(260, 'Corinna Kelly', NULL, 'anagram01@gmail.com', NULL, '$2y$10$6GgjqYPGw/hJdsAqBdUeiOivK86kR.aATQBBCSrJAx2v6LBTZwMz6', 'coach', NULL, NULL, '0', NULL, NULL, NULL, 0, '2020-11-14 02:09:49', '2020-11-14 02:09:49', NULL, NULL),
(261, 'Ghalia Aamer', NULL, 'aamer@ualberta.ca', NULL, '$2y$10$C8q4VgxUDaQWX1oi57BI7e0VDuWUrmF8f4jlAstn9VCfQIEayuJqC', 'coach', NULL, NULL, 'US/Mountain', NULL, NULL, 1, 0, '2020-11-15 02:30:43', '2020-12-10 01:17:55', NULL, NULL),
(262, 'Destroyful', NULL, 'dangerousdeem@gmail.com', NULL, 'fe663a72b27bdc613873fbbb512f6f67', NULL, '105177295699562992285', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-17 00:57:52', '2020-11-17 00:57:52', NULL, NULL),
(263, 'Angelina Tremblay Angelina Tremblay', NULL, 'justindkang@yahoo.com', NULL, '$2y$10$fLz//byeUQMULcKwhn41CeJIIES6QogOhiACdUAvN6G/VHdrzkkrm', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-11-19 23:58:46', '2020-11-19 23:58:46', NULL, NULL),
(264, 'Jackson Mertz III Jackson Mertz III', NULL, 'shammer@twc.com', NULL, '$2y$10$sNDcRcfyBn.OaR0bdyMhNuzJaxAiSnmkv7gJVR.8lAdHWG2pzM6R.', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-11-20 04:58:22', '2020-11-20 04:58:22', NULL, NULL),
(271, 'Matthewbeili Matthewbeili', NULL, 'oa7tk@goposts.site', NULL, '$2y$10$T3tg8O7YUQrnVAaTA0m2eeh8hLkLcVOGx79OltUbB90kSyPRNSCPK', NULL, NULL, NULL, 'Africa/Johannesburg', NULL, NULL, NULL, 0, '2020-12-02 11:53:11', '2020-12-02 11:53:11', NULL, NULL),
(272, 'Test Test', NULL, 'test@talkmaze.com', NULL, '$2y$10$F6pzOjZBRQk/Tq5DiYkNnunDaaWjDglaGNiwPVNxltcjkPaUxZIK6', NULL, NULL, NULL, 'America/Tijuana', NULL, NULL, NULL, 0, '2020-12-03 19:47:55', '2020-12-03 19:47:55', NULL, NULL),
(273, 'Julie Chen', NULL, 'Julie.chen515@gmail.com', NULL, '$2y$10$r97x93mPdMOmA077gFxGxekzEaKLPrixwTIJe5gzUdywWi.ETbtz2', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 0, '2020-12-07 00:59:10', '2020-12-07 00:59:10', NULL, NULL),
(274, 'Annie Wang', NULL, 'a.wang30@share.epsb.ca', NULL, '$2y$10$93YC1xAQBo9V.j3EY0AcE.3Nwj69NGaaUf7CiEKKeVJDX5CzxaYii', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 0, '2020-12-07 01:02:26', '2020-12-07 01:02:26', NULL, NULL),
(275, 'Mandy Zhao', 'watermelone', 'm.zhao3@share.epsb.ca', NULL, '$2y$10$1iKPI45OgPp2WHZYBN3CT.Lc77UtNONz5kbHPmVnMPiB7yo4xRBVO', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 0, '2020-12-08 00:54:18', '2020-12-08 00:54:43', NULL, NULL),
(276, 'Anna Yin', NULL, 'a.yin1@share.epsb.ca', NULL, '$2y$10$AnpynJGlGYu9FrnmlPrUq.HwkY4/CkltLuAeqPAn9teHbxD69Q3i2', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 0, '2020-12-08 01:08:28', '2020-12-08 01:08:28', NULL, NULL),
(277, 'Jane Tsang', NULL, 'janetsang99@gmail.com', NULL, '$2y$10$UobOAHP2K1B4gPB39iMNkO0rxTSuEMGFfH0v5BznCA4rt3gozqX2G', 'admin', NULL, 'OTpY4bCRtomAFTm6FJbNYJCloV9vZbtRQG0gK90Ex2Z11CdnOb1olTqIYFmH', 'US/Eastern', NULL, NULL, 1, 0, '2020-12-10 01:14:40', '2020-12-10 01:15:51', NULL, NULL),
(278, 'Shania Gottlieb Shania Gottlieb', NULL, 'jbmorgan2192@gmail.com', NULL, '$2y$10$a4nEqnoPDdwCObGTd.XEsOfQDiVEb/M8mW1jD8XHAfNQor33GOGuK', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-12-13 21:11:34', '2020-12-13 21:11:34', NULL, NULL),
(279, 'Jackie Shi', NULL, 'jackieshi0903@gmail.com', NULL, '$2y$10$3P7T3jsRxf5.Fec/v7UQYOKrfT/tgrPUvQydkwzHZcIdcXSu8XOu.', NULL, NULL, NULL, 'America/Los_Angeles', NULL, NULL, NULL, 1, '2020-12-22 01:58:07', '2020-12-22 01:58:07', NULL, NULL),
(280, 'Devang Desai', NULL, 'vedang.vd@gmail.com', NULL, '$2y$10$miGvqXlwv97GAmKGAMGyfO1hGGTTIJ974FikZ2hNcYCkw03fCasIy', NULL, NULL, NULL, 'Asia/Calcutta', NULL, NULL, NULL, 1, '2020-12-22 07:45:32', '2020-12-22 07:45:32', NULL, NULL),
(281, 'Manuel Smith Manuel Smith', NULL, 'lrh270@hotmail.com', NULL, '$2y$10$rL/wzITM.0Q.iIYg9/d/NuycW2V7gz6v707lu3GUZP.BN050S0mO6', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-12-23 04:07:57', '2020-12-23 04:07:57', NULL, NULL),
(282, 'Gene Kozey Gene Kozey', NULL, 'belmarhealth@hotmail.com', NULL, '$2y$10$AM0Kx0jXp/xM8XclY09X9.Fx9QZr5932AA87vmkYkKaRFIOYAF5sW', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2020-12-26 19:57:18', '2020-12-26 19:57:18', NULL, NULL),
(283, 'Jagannath Jha', NULL, 'jagannathjha001@gmail.com', NULL, '$2y$10$KBU8uI.oXT99/VscvRiPMOxnxDs18j9IWrRmRk5ZCrKGJg.ZUbpTu', NULL, NULL, NULL, 'Asia/Calcutta', NULL, NULL, NULL, 1, '2021-01-02 10:46:02', '2021-01-02 10:46:02', NULL, NULL),
(284, 'Willow Nolan Willow Nolan', NULL, 'shanecallen1972@gmail.com', NULL, '$2y$10$ZEYG/jXb1IghY5K1iNTcou.ldWvQMSsyLCPmiW9D1T/TlwWmiUMNC', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2021-01-04 15:17:49', '2021-01-04 15:17:49', NULL, NULL),
(285, '「 • Sabre • 」', NULL, 'carriecanrun@gmail.com', NULL, 'f77ecc17109b1b806350eb7e7bbfd861', NULL, '106101243918688918691', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-10 02:24:08', '2021-01-10 02:24:08', NULL, NULL),
(286, 'Heath Ward Heath Ward', NULL, 'mcgripco@gmail.com', NULL, '$2y$10$MQ1AtwbShRKX.a1XH8fNEOt8YFVRVr/iSLSROo0l2wmVc2xys3OUW', NULL, NULL, NULL, '0', NULL, NULL, NULL, 1, '2021-01-11 03:40:53', '2021-01-11 03:40:53', NULL, NULL),
(287, 'Grace LI', NULL, 'gracett.li@gmail.com', NULL, '$2y$10$BBejT5bHgITWrYNd0rOdLuQtYY8CalCevtTQnTbOH94RvHcWFxNoe', NULL, NULL, NULL, 'US/Eastern', NULL, NULL, NULL, 1, '2021-01-14 07:32:14', '2021-01-14 07:32:14', NULL, NULL),
(288, 'Saif Metwally', NULL, 'seifeldin.metwally@gmail.com', NULL, '$2y$10$yqQO4mz5u/rs3MhlCEh4V.251T8JSSJ03CvuhtLkAOjdRsrt/TICy', NULL, NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 1, '2021-01-19 11:19:43', '2021-01-19 11:19:43', NULL, NULL),
(289, 'Kashif Deviotech', NULL, 'deviotech@kashif.com', NULL, '$2y$10$4kgMicLOR7kXRQ6fEsmj4eSsUlbcIGSKV7dIFKApQWliOfBWhkxgG', 'user', NULL, NULL, 'America/Chihuahua', NULL, NULL, NULL, 1, '2021-06-28 09:35:16', '2021-06-28 09:35:16', NULL, '1985/02/06'),
(290, 'test testt', NULL, 'testghalia21@gmail.com', NULL, '$2y$10$Abn0K2DFqgNwmAgk3BYjwOZRzMVlrsL3cnPtfPvvJBZwVE5R.vAQu', 'coach', NULL, NULL, 'US/Mountain', NULL, NULL, 1, 1, '2021-07-02 08:24:30', '2021-07-05 08:02:53', NULL, '1982/07/15'),
(291, 'sarah william', NULL, 'roghannah11@gmail.com', NULL, '$2y$10$9hWOTcZZ8KDfaSSymM693.dBF62LXG4Dd1of6DxDcZIKWjmk5zU2W', 'user', NULL, NULL, 'US/Mountain', NULL, NULL, NULL, 1, '2021-07-05 08:04:32', '2021-07-05 08:04:32', NULL, '1995/08/25'),
(292, 'Ahsan Javed', NULL, 'ahsan@javed.com', NULL, '$2y$10$Ps8G/pYgWVVwPH/NEvtgReIp0Ag38g59V.o6.tmpZeDPaPXZcJMxy', 'user', NULL, NULL, 'US/Arizona', NULL, NULL, NULL, 1, '2021-07-06 09:09:51', '2021-07-06 09:09:51', NULL, '1989/02/14');

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `plan_id` bigint(20) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remaining_hour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_hour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coaching_bulk_id` bigint(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `user_id`, `plan_id`, `amount`, `remaining_hour`, `total_hour`, `coaching_bulk_id`, `price`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '300', '5', '10', 1, NULL, NULL, 'active', '2020-02-19 19:00:00', '2020-02-19 19:00:00'),
(2, 44, 2, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-02-19 19:00:00', '2020-02-19 19:00:00'),
(4, 67, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-04-11 08:33:32', '2020-04-11 08:33:32'),
(5, 68, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-04-12 23:40:07', '2020-04-12 23:40:07'),
(6, 72, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-04-27 02:12:40', '2020-04-27 02:12:40'),
(7, 81, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-05-21 11:37:47', '2020-05-21 11:37:47'),
(8, 80, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-05-21 13:07:30', '2020-05-28 10:28:22'),
(9, 85, 2, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-05-28 10:08:09', '2020-06-03 06:33:47'),
(10, 99, 2, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-06-03 18:39:57', '2020-06-03 18:39:57'),
(11, 95, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-06-04 02:46:16', '2020-06-04 02:46:16'),
(12, 98, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-06-04 02:46:16', '2020-06-04 02:46:16'),
(13, 101, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-06-04 23:32:33', '2020-06-04 23:32:33'),
(14, 112, 1, '300', '5', '10', NULL, NULL, NULL, 'active', '2020-06-07 06:23:14', '2020-06-07 06:23:14'),
(16, 121, 3, '680', '2.5', '20', NULL, NULL, NULL, 'active', '2021-04-23 01:29:22', '2021-05-05 13:41:28'),
(17, 211, 4, '762.50', '24', '25', NULL, NULL, NULL, 'active', '2021-05-05 15:36:52', '2021-05-05 15:40:14'),
(18, 212, 4, '762.50', '23.5', '25', NULL, NULL, NULL, 'active', '2021-05-12 14:28:43', '2021-05-12 14:30:10'),
(19, 213, 3, '680.00', '18', '20', NULL, NULL, NULL, 'active', '2021-05-12 14:37:23', '2021-05-12 14:38:47'),
(20, 214, 2, '350.00', '9', '10', NULL, NULL, NULL, 'active', '2021-05-17 15:11:36', '2021-05-17 15:13:18'),
(21, 223, 4, '762.5', '25', '25', NULL, NULL, NULL, 'active', '2021-05-20 05:54:40', '2021-05-20 05:54:40'),
(22, 225, 3, '680', '16.5', '20', NULL, NULL, NULL, 'active', '2021-05-26 02:25:35', '2021-05-27 03:06:57'),
(23, 226, 3, '680.00', '14', '20', NULL, NULL, NULL, 'active', '2021-05-27 16:25:37', '2021-05-27 17:30:36'),
(24, 228, 2, '350', '8', '10', NULL, NULL, NULL, 'active', '2021-06-06 03:52:43', '2021-06-06 03:56:04'),
(25, 226, 2, '350', '10', '10', NULL, NULL, NULL, 'active', '2021-06-14 08:26:50', '2021-06-14 08:26:50'),
(26, 291, 2, '350', '8', '10', NULL, NULL, NULL, 'active', '2021-07-05 08:08:01', '2021-07-05 08:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taking_request` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_boarded` tinyint(1) NOT NULL DEFAULT 0,
  `stripe_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zoom_access_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hourly_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `phone`, `address`, `city`, `country`, `image`, `taking_request`, `created_at`, `updated_at`, `is_boarded`, `stripe_account`, `zoom_access_token`, `hourly_rate`) VALUES
(116, 116, NULL, NULL, 'gujranwala', 'pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-07 13:27:00', '2020-06-07 13:27:00', 0, NULL, NULL, NULL),
(115, 115, NULL, NULL, 'Gujranwala', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-07 13:26:46', '2020-06-07 13:26:46', 0, NULL, NULL, NULL),
(114, 114, NULL, NULL, 'islamabad', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-07 11:46:45', '2020-06-07 11:46:45', 0, NULL, NULL, NULL),
(113, 113, NULL, NULL, 'Mississauga', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-07 05:50:13', '2020-06-07 05:50:13', 0, NULL, NULL, NULL),
(112, 112, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/storage/brands/V99Qr5Tm5ZAJBUHDSWKU5F0evh4KARoKhPs5t5bV.jpeg', 1, '2020-06-07 05:33:05', '2020-06-07 06:00:15', 0, NULL, NULL, NULL),
(111, 111, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/storage/brands/EPhgiz3J1C14WqurDD14ouUlSBl45jOW81UfxnBC.jpeg', 1, '2020-06-07 05:32:48', '2020-06-07 05:59:46', 0, NULL, NULL, NULL),
(110, 110, NULL, NULL, 'Dublin', 'Ireland', 'https://talkmaze.com/storage/brands/rybWEtY1EJXm5apcjvih0IQY7w3enkho9q45BLn9.jpeg', 1, '2020-06-07 05:32:10', '2020-06-07 05:54:42', 0, NULL, NULL, NULL),
(109, 109, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/storage/brands/FGuohRRBmLPmCW65DzjBpuxdbooEvAjLaOAQ1xMm.jpeg', 1, '2020-06-07 00:04:50', '2020-06-07 05:59:29', 0, NULL, NULL, NULL),
(108, 108, NULL, NULL, 'Edmonton', 'Canada', 'http://talkmaze.com/images/profileavatar.png', 1, '2020-06-06 23:45:42', '2020-06-06 23:45:42', 0, NULL, NULL, NULL),
(107, 107, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/NgPOvc9YAR5nUXN7tsLgGGo4FzyvIq2Wq5UBx9sd.jpeg', 1, '2020-06-06 22:09:04', '2020-06-06 22:09:04', 0, NULL, NULL, NULL),
(106, 106, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/0niGw5gLXBOAdhd5fmLrOavlce8AYutVIFI9kVHP.jpeg', 1, '2020-06-06 22:05:58', '2020-06-06 22:05:58', 0, NULL, NULL, NULL),
(105, 105, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/T94zmxseMHzvPeAOt2KYShjaQILcUyZT0VUNfQfi.png', 1, '2020-06-06 22:02:38', '2020-07-25 11:29:35', 0, NULL, NULL, NULL),
(104, 104, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/PBDDvhTyIIczzk9BTcwXxsg5cH3MgO2RMS8qcVIp.png', 1, '2020-06-06 22:02:09', '2020-06-06 22:02:09', 0, NULL, NULL, NULL),
(103, 103, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/tWYO05LViCxWhR7YaKRud1iTFd7oWuU8IXGQm7JC.jpeg', 1, '2020-06-06 22:00:10', '2020-06-06 22:12:03', 0, NULL, NULL, NULL),
(101, 101, NULL, '11', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/0BmS2EMVSoPyHVRumRfrglcxJyCYM4bYjZYpqSdj.jpeg', 1, '2020-06-04 01:11:21', '2020-06-09 03:07:53', 0, NULL, NULL, NULL),
(102, 102, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/TkFbCSQ89US8YfSl9lSfhS42qaqNEgEDBjlcACC1.png', 1, '2020-06-04 01:55:50', '2020-06-06 22:12:51', 0, NULL, NULL, NULL),
(100, 100, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/brands/Kv2C9oAWVXJX0yjqUyuc4C2wnnEBDWweqy3iJb0I.png', 1, '2020-06-04 01:07:49', '2020-06-06 21:56:55', 0, NULL, NULL, NULL),
(99, 99, NULL, NULL, 'islamabad', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-03 18:36:31', '2020-06-03 18:36:31', 0, NULL, NULL, NULL),
(54, 95, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/YkgOAdJmjdQzWDCl2cbiWYOzLokK0NhsPKtmn5TH.jpeg', 1, NULL, '2020-06-09 03:06:46', 0, NULL, NULL, NULL),
(55, 96, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, NULL, NULL, 0, NULL, NULL, NULL),
(97, 96, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, NULL, NULL, 0, NULL, NULL, NULL),
(98, 98, '3331424188', 'fghjk', 'islamabad', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-03 17:21:32', '2020-06-03 17:29:24', 0, NULL, NULL, NULL),
(51, 72, '3331424188', 'fghjk', 'islamabad', 'Pakistan', 'https://talkmaze.com/storage/storage/uMlIiWErcQPv8cmKgBdb8ihgWQ63B7saZIKX0Izm.png', 1, NULL, '2020-06-15 06:20:22', 0, NULL, NULL, NULL),
(50, 52, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, NULL, NULL, 0, NULL, NULL, NULL),
(52, 85, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, NULL, NULL, 0, NULL, NULL, NULL),
(53, 87, NULL, NULL, NULL, NULL, 'https://talkmaze.com/storage/brands/Pmz3Ko17oZuGpOTGBzvm7hXdUcTHHnm4cC0lV6Gm.jpeg', 1, NULL, '2020-06-07 05:56:04', 0, NULL, NULL, NULL),
(117, 117, NULL, NULL, 'Westmount', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-09 03:07:17', '2020-06-09 03:07:17', 0, NULL, NULL, NULL),
(118, 118, NULL, NULL, 'oakland', 'usa', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-09 10:10:57', '2020-06-09 10:10:57', 0, NULL, NULL, NULL),
(119, 119, NULL, NULL, 'islamabad', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-09 19:43:46', '2020-06-09 19:43:46', 0, NULL, NULL, NULL),
(120, 120, NULL, NULL, 'KL', 'Malaysia', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-09 21:13:54', '2020-06-09 21:13:54', 0, NULL, NULL, NULL),
(121, 121, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/v0XcNwTrGKtdB7amDdjvFa0oKEAhZ7BMiCJr2NtV.png', 1, '2020-06-09 23:02:21', '2020-06-09 23:02:21', 0, NULL, NULL, NULL),
(122, 122, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/h02Ruysrez9AWA4BabLS1ZI7hda81LIEohPl0Rcl.png', 1, '2020-06-09 23:14:51', '2020-07-16 09:16:46', 0, NULL, NULL, NULL),
(123, 123, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-09 23:29:52', '2020-06-09 23:29:52', 0, NULL, NULL, NULL),
(124, 124, NULL, NULL, 'Edmonton', 'canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-09 23:30:15', '2020-06-09 23:30:15', 0, NULL, NULL, NULL),
(125, 125, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/storage/brands/OjuWbD5tbPLQcbgBWMmTEazFB8KzlGjhYID2ySr2.jpeg', 1, '2020-06-10 01:21:51', '2020-06-10 01:23:34', 0, NULL, NULL, NULL),
(126, 126, NULL, NULL, 'edmonton', 'canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-10 01:22:03', '2020-06-10 01:22:03', 0, NULL, NULL, NULL),
(127, 127, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-10 01:22:37', '2020-06-10 01:22:37', 0, NULL, NULL, NULL),
(128, 128, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-06-10 01:23:11', '2020-06-10 01:23:11', 0, NULL, NULL, NULL),
(129, 129, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-10 01:28:15', '2020-06-10 01:28:15', 0, NULL, NULL, NULL),
(130, 130, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-10 01:29:41', '2020-06-10 01:29:41', 0, NULL, NULL, NULL),
(131, 135, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-12 00:01:47', '2020-06-12 00:01:47', 0, NULL, NULL, NULL),
(132, 136, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/dRiYWtURV09ovc2nAPjD2qQL3KHoolZZ43d3JlBz.png', 1, '2020-06-15 06:17:40', '2020-06-15 06:19:31', 0, NULL, NULL, NULL),
(133, 137, NULL, NULL, 'islmabad', 'pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-16 10:36:25', '2020-06-16 10:36:25', 0, NULL, NULL, NULL),
(134, 138, '1', '1', 'Tacoma', 'United States', 'https://talkmaze.com/storage/storage/WReyrxLbzwHJgbFk0vrrMpX8GGkkBDw7LTGTGfbY.png', 1, '2020-06-16 23:43:57', '2020-07-16 09:28:08', 0, NULL, NULL, NULL),
(135, 139, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-19 02:33:14', '2020-06-19 02:33:14', 0, NULL, NULL, NULL),
(136, 140, NULL, NULL, 'edmonton', 'canada', 'https://talkmaze.com/storage/brands/btQjrkuCO0Yhl5hmLaF7ziVim6bwAAaIkhExZKb5.jpeg', 1, '2020-06-19 02:33:47', '2020-06-19 02:34:32', 0, NULL, NULL, NULL),
(137, 141, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-20 09:47:28', '2020-06-20 09:47:28', 0, NULL, NULL, NULL),
(138, 142, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-21 21:13:02', '2020-06-21 21:13:02', 0, NULL, NULL, NULL),
(139, 143, NULL, NULL, 'Kimberley', 'South Africa', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-23 19:13:21', '2020-06-23 19:13:21', 0, NULL, NULL, NULL),
(140, 144, NULL, NULL, 'edmontest', 'test', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-23 23:23:20', '2020-06-23 23:23:20', 0, NULL, NULL, NULL),
(141, 145, NULL, NULL, 'islamabad', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-06-25 00:10:14', '2020-06-25 00:10:14', 0, NULL, NULL, NULL),
(142, 146, NULL, NULL, 'Hong Kong', 'Hong Kong', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-06-25 05:36:00', '2020-06-25 05:36:00', 0, NULL, NULL, NULL),
(143, 147, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/s564BcSoWpPP8nIiSa2tf5i3PKF2klcwjCXPy1J5.png', 1, '2020-06-28 07:59:57', '2020-07-11 02:33:53', 0, NULL, NULL, NULL),
(144, 148, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/elGasPlrD7X7vRipekWj5izCqFg01lwKBTlmLBbQ.png', 1, '2020-06-28 08:04:27', '2020-06-28 08:04:27', 0, NULL, NULL, NULL),
(145, 149, '7809746481', '7550 Speaker Way NW', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/Q9eNdVFghqXb2T2ocatGtOTeL0ZYLag8dYMgyWmD.png', 1, '2020-06-28 08:05:28', '2020-06-28 08:05:28', 0, NULL, NULL, NULL),
(146, 150, NULL, NULL, 'Calgary', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-02 01:25:13', '2020-07-02 01:25:13', 0, NULL, NULL, NULL),
(147, 151, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-02 01:36:42', '2020-07-02 01:36:42', 0, NULL, NULL, NULL),
(148, 152, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-02 01:53:42', '2020-07-02 01:53:42', 0, NULL, NULL, NULL),
(149, 153, NULL, NULL, 'na', 'na', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-02 09:24:12', '2020-07-02 09:24:12', 0, NULL, NULL, NULL),
(150, 154, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-02 10:09:10', '2020-07-02 10:09:10', 0, NULL, NULL, NULL),
(151, 155, NULL, NULL, 'islamabad', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-03 01:06:03', '2020-07-03 01:06:03', 0, NULL, NULL, NULL),
(152, 156, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-04 11:33:28', '2020-07-04 11:33:28', 0, NULL, NULL, NULL),
(153, 157, NULL, NULL, 'Tullamore', 'Ireland', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-04 15:15:04', '2020-07-04 15:15:04', 0, NULL, NULL, NULL),
(154, 158, NULL, NULL, 'New Delhi', 'India', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-07 00:38:50', '2020-07-07 00:38:50', 0, NULL, NULL, NULL),
(155, 159, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-08 00:54:49', '2020-07-08 00:54:49', 0, NULL, NULL, NULL),
(156, 160, NULL, NULL, 'New Orleans', 'United States Of America', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-07-08 00:57:22', '2020-07-08 00:57:22', 0, NULL, NULL, NULL),
(157, 161, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-08 23:49:10', '2020-07-08 23:49:10', 0, NULL, NULL, NULL),
(158, 162, NULL, NULL, 'Tullamore', 'Ireland', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-09 00:11:33', '2020-07-09 00:11:33', 0, NULL, NULL, NULL),
(159, 163, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-09 00:13:05', '2020-07-09 00:13:05', 0, NULL, NULL, NULL),
(160, 164, NULL, NULL, 'Accra', 'Ghana', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-09 00:18:59', '2020-07-09 00:18:59', 0, NULL, NULL, NULL),
(161, 165, NULL, NULL, 'Kansas City', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-09 22:35:51', '2020-07-09 22:35:51', 0, NULL, NULL, NULL),
(162, 166, '-14', 'a', 'a', 'Brazil', 'https://talkmaze.com/storage/storage/g37NAaFZZ90EznjaJMdgkdBztjOw3VFnlNoElyIe.jpeg', 1, '2020-07-11 01:24:11', '2020-07-11 01:24:11', 0, NULL, NULL, NULL),
(163, 167, '1', 'a', 'na', 'England', 'https://talkmaze.com/storage/storage/uPOgTZ26aK6apqGDOvLAHHsSPzX2Tl7yUfO0tx4A.jpeg', 1, '2020-07-11 01:26:21', '2020-07-11 01:26:21', 0, NULL, NULL, NULL),
(164, 168, '1', '1', 'Chapel Hill', 'U.S.', 'https://talkmaze.com/storage/storage/aeVCZJcWsiE0JrB58BpBbUlAROHAvXhUTTgvoHmr.png', 1, '2020-07-12 21:20:55', '2020-08-18 22:05:10', 0, NULL, NULL, NULL),
(165, 169, NULL, NULL, 'Tullamore', 'Ireland', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-07-13 13:06:35', '2020-07-13 13:06:35', 0, NULL, NULL, NULL),
(166, 170, NULL, NULL, 'Woodland Hills', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-14 00:26:57', '2020-07-14 00:26:57', 0, NULL, NULL, NULL),
(167, 171, '1', 'Montreal', 'Montreal', 'Canada', 'https://talkmaze.com/storage/storage/KGOc9BzhSqI3iWFpibTGznsoJtG69s5WJjmsZSFm.png', 1, '2020-07-16 05:50:56', '2020-07-16 09:07:21', 0, NULL, NULL, NULL),
(168, 172, '1', 'Brazil', 'Natal', 'Brazil', 'https://talkmaze.com/storage/storage/YrnuTmslEmXPOBJfAqqvitbb2B5RKHFdUmWM6NHg.jpeg', 1, '2020-07-16 06:31:52', '2020-07-16 09:09:19', 0, NULL, NULL, NULL),
(169, 173, '1', 'Ghana', 'Accra', 'Ghana', 'https://talkmaze.com/storage/storage/eEOFOgA4MjgFkWjq6qGK9vn9KOgHPWBoxxo37Vfp.png', 1, '2020-07-16 06:41:18', '2020-07-16 09:18:08', 0, NULL, NULL, NULL),
(170, 174, '1', 'Kazakhstan', 'Nur-Sultan', 'Казахстан', 'https://talkmaze.com/storage/storage/VFotodNg8TRapHGj32DPpqOLKnQILYrYmaE9G8Ml.png', 1, '2020-07-16 07:39:51', '2020-07-16 09:24:58', 0, NULL, NULL, NULL),
(171, 175, '1', '1', 'Lucena City', 'Philippines', 'https://talkmaze.com/storage/storage/cw9N12OU62LYgq5Qx3aIogLWU5fDjlRgeX1nuCO2.png', 1, '2020-07-16 08:21:29', '2020-07-16 09:20:59', 0, NULL, NULL, NULL),
(172, 176, '1', 'Hong Kong', 'Hong Kong', 'Hong Kong', 'https://talkmaze.com/storage/storage/OkqU8GRpdNzfPSX9YLa6XbZHvdwkV85AeH0aK8sN.png', 1, '2020-07-16 10:43:14', '2020-07-18 08:23:50', 0, NULL, NULL, NULL),
(173, 177, '1', '1', 'Lahore', 'Pakistan', 'https://talkmaze.com/storage/storage/Yk0KmsLXsJGEcqzVWkmHU6LstQPIYs0w468Kxa7c.png', 1, '2020-07-16 14:26:14', '2020-07-18 08:27:13', 0, NULL, NULL, NULL),
(174, 178, '1', '1', 'London', 'United Kingdom', 'https://talkmaze.com/storage/storage/bmFOk6V4TnGPJ5LcARwnA1FopXgjDRC2C5NDpzKZ.jpeg', 1, '2020-07-16 16:59:23', '2020-07-18 08:29:57', 0, NULL, NULL, NULL),
(175, 179, NULL, NULL, 'Natal', 'Brazil', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-07-16 19:17:22', '2020-07-16 19:17:22', 0, NULL, NULL, NULL),
(176, 180, '1', '1', 'La Crescenta', 'United States', 'https://talkmaze.com/storage/storage/Hx51SvzVSNqkfup3ldyweHbfs6TS5M8Nqi2AlF4u.png', 1, '2020-07-16 21:34:42', '2020-07-18 08:31:37', 0, NULL, NULL, NULL),
(177, 181, '1', '1', 'Montreal', 'Canada', 'https://talkmaze.com/storage/storage/RwdWtM9buzBdNjvNsw7qpru9L0tS7ClWIkGjb60s.png', 1, '2020-07-17 13:06:45', '2020-07-18 08:33:21', 0, NULL, NULL, NULL),
(178, 182, '1', '1', 'Munich', 'Germany', 'https://talkmaze.com/storage/storage/T8lAABwRtA6IGYHP3ha1mNbNyZxD20bNCxkoxa9C.png', 1, '2020-07-17 20:49:48', '2020-07-18 08:35:14', 0, NULL, NULL, NULL),
(179, 183, '1', '1', 'Petaling Jaya', 'Malaysia', 'https://talkmaze.com/storage/storage/ZRTNzCFgPejfVoTEWhU6IebLSNETOIt8U9MNErn7.jpeg', 1, '2020-07-19 17:43:21', '2020-07-21 09:50:52', 0, NULL, NULL, NULL),
(180, 184, '1', '1', 'Saint-Lambert', 'Canada', 'https://talkmaze.com/storage/storage/ZxC4RdE34jo3rO1ZM4PKbRluujFoxucp2ephYhZm.png', 1, '2020-07-21 01:31:17', '2020-07-21 09:54:55', 0, NULL, NULL, NULL),
(181, 185, '1', '1', 'Zagreb', 'Croatia', 'https://talkmaze.com/storage/storage/n3l2ERdXiNwbgLo0Q1yHDKQ8F3SBfibDUP19C4Mw.png', 1, '2020-07-21 13:54:38', '2020-07-23 13:49:22', 0, NULL, NULL, NULL),
(182, 186, '1', '1', 'Lahore', 'Pakistan', 'https://talkmaze.com/storage/storage/GfHzXbKWQwd6frwXz2KiZcKa7Kh1tcdbF05ikF42.png', 1, '2020-07-21 19:15:46', '2020-07-23 13:52:17', 0, NULL, NULL, NULL),
(183, 187, '1', '1', 'Karachi', 'Pakistan', 'https://talkmaze.com/storage/storage/dYwnZAT06MdHkuq9cNNI7GR2rHkLF5C0Mo9VU9Vq.jpeg', 1, '2020-07-21 20:07:22', '2020-07-23 13:54:44', 0, NULL, NULL, NULL),
(184, 188, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-21 22:58:10', '2020-07-21 22:58:10', 0, NULL, NULL, NULL),
(185, 189, NULL, '1', 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-22 10:53:04', '2020-07-22 10:53:52', 0, NULL, NULL, NULL),
(186, 190, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-22 10:56:02', '2020-07-22 10:56:02', 0, NULL, NULL, NULL),
(187, 191, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-22 10:59:21', '2020-07-22 10:59:21', 0, NULL, NULL, NULL),
(188, 192, '1', '1', 'Markham', 'Canada', 'https://talkmaze.com/storage/storage/Z50GmYxzsqWps9hJTQ4C1XqbBfQkPSfJqL5TDfof.png', 1, '2020-07-23 00:45:24', '2020-07-23 13:42:54', 0, NULL, NULL, NULL),
(189, 193, NULL, NULL, 'Köln', 'Germany', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-23 11:27:56', '2020-07-23 11:27:56', 0, NULL, NULL, NULL),
(190, 194, NULL, NULL, 'Austin', 'United States', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-07-23 19:40:04', '2020-07-23 19:40:04', 0, NULL, NULL, NULL),
(191, 195, '1', '1', 'Chino Hills', 'United States', 'https://talkmaze.com/storage/storage/SXTP6iwuCV2Tcre8O7IiFr93zKBztGD1M3i2KIVJ.png', 1, '2020-07-24 01:32:22', '2020-07-26 01:41:50', 0, NULL, NULL, NULL),
(192, 196, '1', '1', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/hLHZvpre4X9BfDftMxbe3u1mcU1LmBMpUletVzxI.png', 1, '2020-07-25 10:49:41', '2020-07-25 11:01:42', 0, NULL, NULL, NULL),
(193, 197, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-07-30 21:21:05', '2020-07-30 21:21:05', 0, NULL, NULL, NULL),
(194, 198, NULL, NULL, 'Accra', 'Ghana', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-07-31 16:38:10', '2020-07-31 16:38:10', 0, NULL, NULL, NULL),
(195, 199, '1', '1', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/storage/0ZZUUheB7UuCuRsr75FDoRgqeNSKhUscrbZgEYbM.jpeg', 1, '2020-08-04 07:35:04', '2020-08-19 20:59:36', 0, NULL, NULL, NULL),
(196, 200, NULL, NULL, 'Boissevain', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-06 10:18:26', '2020-08-06 10:18:26', 0, NULL, NULL, NULL),
(197, 201, NULL, NULL, 'São Paulo', 'Brasil', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-06 18:13:00', '2020-08-06 18:13:00', 0, NULL, NULL, NULL),
(198, 202, NULL, NULL, 'Dhaka', 'Bangladesh', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-06 20:25:14', '2020-08-06 20:25:14', 0, NULL, NULL, NULL),
(199, 203, NULL, NULL, 'Toronto', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-07 02:51:22', '2020-08-07 02:51:22', 0, NULL, NULL, NULL),
(200, 204, '923428794650', 'Bahria Town Phase 4.', 'Islamabad', 'Pakistan', 'https://talkmaze.com/storage/storage/BYrLRFCgeK1Oyns4mksT9TdKAAAIDktVgBp2UDvI.png', 1, '2020-08-07 02:54:12', '2020-08-29 07:14:40', 0, NULL, NULL, NULL),
(201, 205, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-08-08 23:22:26', '2020-08-08 23:22:26', 0, NULL, NULL, NULL),
(202, 206, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-09 21:02:59', '2020-08-09 21:02:59', 0, NULL, NULL, NULL),
(203, 207, NULL, NULL, 'Madison', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-11 06:09:58', '2020-08-11 06:09:58', 0, NULL, NULL, NULL),
(204, 208, NULL, NULL, 'Penang', 'Malaysia', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-13 16:50:24', '2020-08-13 16:50:24', 0, NULL, NULL, NULL),
(205, 209, NULL, NULL, 'Calgary', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-08-14 06:46:44', '2020-08-14 06:46:44', 0, NULL, NULL, NULL),
(206, 210, NULL, NULL, 'Riyadh', 'Saudi Arabia', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-14 08:27:21', '2020-08-14 08:27:21', 0, NULL, NULL, NULL),
(207, 211, NULL, NULL, 'Scottsdale', 'United States', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-08-18 08:19:55', '2020-08-18 08:19:55', 0, NULL, NULL, NULL),
(208, 212, NULL, NULL, 'Ga District', 'Ghana', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-08-19 07:42:40', '2020-08-19 07:42:40', 0, NULL, NULL, NULL),
(209, 213, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-08-20 20:56:55', '2020-08-20 20:56:55', 0, NULL, NULL, NULL),
(210, 214, NULL, NULL, 'Cork', 'Ireland', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-22 14:10:16', '2020-08-22 14:10:16', 0, NULL, NULL, NULL),
(211, 215, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-08-28 01:56:18', '2020-08-28 01:56:18', 0, NULL, NULL, NULL),
(212, 216, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-08-28 21:52:04', '2020-08-28 21:52:04', 0, NULL, NULL, NULL),
(213, 217, NULL, NULL, 'Maskwacis', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-09-02 18:21:00', '2020-09-02 18:21:00', 0, NULL, NULL, NULL),
(214, 218, NULL, NULL, 'JASOER', 'CANADA', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-09-02 23:36:12', '2020-09-02 23:36:12', 0, NULL, NULL, NULL),
(215, 219, NULL, NULL, 'Edmonton, Alberta, Canada', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-09-04 01:12:05', '2020-09-04 01:12:05', 0, NULL, NULL, NULL),
(216, 220, NULL, NULL, 'Rawalakot', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-09-08 18:25:36', '2020-09-08 18:25:36', 0, NULL, NULL, NULL),
(217, 221, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-09-09 01:17:05', '2020-09-09 01:17:05', 0, NULL, NULL, NULL),
(218, 222, NULL, NULL, 'Covina', 'United States', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-09-11 04:05:45', '2020-09-11 04:05:45', 0, NULL, NULL, NULL),
(219, 223, NULL, NULL, 'deadmonton', 'canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-09-12 02:52:25', '2020-09-12 02:52:25', 0, NULL, NULL, NULL),
(220, 224, NULL, NULL, 'Minnetonka', 'United States of America', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-09-23 05:17:36', '2020-09-23 05:17:36', 0, NULL, NULL, NULL),
(221, 225, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-09-28 21:53:16', '2020-09-28 21:53:16', 0, NULL, NULL, NULL),
(222, 226, NULL, NULL, 'karachi', 'Pakistan', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-09-29 00:17:39', '2020-09-29 00:17:39', 0, NULL, NULL, NULL),
(223, 227, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-09-30 20:27:45', '2020-09-30 20:27:45', 0, NULL, NULL, NULL),
(224, 228, NULL, '123 filler', 'Boston', 'United States', 'https://www.talkmaze.com/storage/brands/8pNYUgwKDYPlncByFzDJNS4OBCBb9gvvHj0Evchf.jpeg', 1, '2020-10-03 05:36:53', '2020-10-18 23:43:24', 0, NULL, NULL, NULL),
(225, 229, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-10-05 01:40:22', '2020-10-05 01:40:22', 0, NULL, NULL, NULL),
(226, 230, NULL, NULL, 'Hong Kong', 'China', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-10-08 05:38:03', '2020-10-08 05:38:03', 0, NULL, NULL, NULL),
(227, 231, NULL, NULL, 'Multan', 'Pakistan', 'https://talkmaze.com/storage/brands/4nbIzBOQ3KGA6FbfvaKCJ8FGWbfUqnlR2NEAvTno.jpeg', 1, '2020-10-12 08:27:43', '2020-10-12 21:32:53', 0, NULL, NULL, NULL),
(228, 232, NULL, NULL, 'Schambergerburgh', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-19 18:27:53', '2020-10-19 18:27:53', 0, NULL, NULL, NULL),
(229, 233, NULL, NULL, 'edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-10-20 03:20:47', '2020-10-20 03:20:47', 0, NULL, NULL, NULL),
(230, 234, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-10-20 03:20:51', '2020-10-20 03:20:51', 0, NULL, NULL, NULL),
(231, 235, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-20 03:21:57', '2020-10-20 03:21:57', 0, NULL, NULL, NULL),
(232, 236, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-10-20 03:24:54', '2020-10-20 03:24:54', 0, NULL, NULL, NULL),
(233, 237, NULL, NULL, 'edmonton', 'canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-10-20 03:36:28', '2020-10-20 03:36:28', 0, NULL, NULL, NULL),
(234, 238, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 03:46:32', '2020-10-22 03:46:32', 0, NULL, NULL, NULL),
(235, 239, NULL, NULL, 'Irvine', 'US', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 03:49:24', '2020-10-22 03:49:24', 0, NULL, NULL, NULL),
(236, 240, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 04:55:08', '2020-10-22 04:55:08', 0, NULL, NULL, NULL),
(237, 241, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 05:11:48', '2020-10-22 05:11:48', 0, NULL, NULL, NULL),
(238, 242, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 05:12:44', '2020-10-22 05:12:44', 0, NULL, NULL, NULL),
(239, 243, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 05:20:22', '2020-10-22 05:20:22', 0, NULL, NULL, NULL),
(244, 248, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 06:29:15', '2020-10-22 06:29:15', 0, NULL, NULL, NULL),
(243, 247, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 06:28:37', '2020-10-22 06:28:37', 0, NULL, NULL, NULL),
(242, 246, NULL, NULL, 'edmonton', 'canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 06:20:14', '2020-10-22 06:20:14', 0, NULL, NULL, NULL),
(245, 249, NULL, NULL, 'edmonton', 'canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-22 06:49:12', '2020-10-22 06:49:12', 0, NULL, NULL, NULL),
(247, 251, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-23 08:08:02', '2020-10-23 08:08:02', 0, NULL, NULL, NULL),
(248, 252, NULL, NULL, 'New Jodie', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-25 09:32:29', '2020-10-25 09:32:29', 0, NULL, NULL, NULL),
(249, 253, NULL, NULL, 'Mogilev', 'Belarus', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-10-25 10:39:32', '2020-10-25 10:39:32', 0, NULL, NULL, NULL),
(250, 254, NULL, NULL, 'East Darianabury', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-25 21:21:36', '2020-10-25 21:21:36', 0, NULL, NULL, NULL),
(251, 255, NULL, NULL, 'Heathcoteville', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-10-26 14:56:57', '2020-10-26 14:56:57', 0, NULL, NULL, NULL),
(252, 256, NULL, NULL, 'Nizhny Novgorod', 'Russia', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-11-01 16:44:22', '2020-11-01 16:44:22', 0, NULL, NULL, NULL),
(253, 257, NULL, NULL, 'NORTH YORK', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-03 21:41:45', '2020-11-03 21:41:45', 0, NULL, NULL, NULL),
(254, 258, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-11 23:14:09', '2020-11-11 23:14:09', 0, NULL, NULL, NULL),
(255, 259, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-13 04:57:01', '2020-11-13 04:57:01', 0, NULL, NULL, NULL),
(256, 260, NULL, NULL, 'Camrose', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-11-14 02:09:50', '2020-11-14 02:09:50', 0, NULL, NULL, NULL),
(257, 261, NULL, '11', 'Edmonton', 'Canada', 'https://talkmaze.com/storage/brands/1ZWZZ8Uj6REwLHlBGSVc3zH4GMS9G8HAREnKEAoP.png', 1, '2020-11-15 02:30:43', '2020-12-07 00:40:42', 0, NULL, NULL, NULL),
(258, 262, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-17 00:57:52', '2020-11-17 00:57:52', 0, NULL, NULL, NULL),
(259, 263, NULL, NULL, 'O\'Harashire', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-19 23:58:46', '2020-11-19 23:58:46', 0, NULL, NULL, NULL),
(260, 264, NULL, NULL, 'Kenyattaland', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-20 04:58:22', '2020-11-20 04:58:22', 0, NULL, NULL, NULL),
(261, 265, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-23 01:12:49', '2020-11-23 01:12:49', 0, NULL, NULL, NULL),
(262, 266, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-23 10:50:23', '2020-11-23 10:50:23', 0, NULL, NULL, NULL),
(263, 267, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-28 08:53:49', '2020-11-28 08:53:49', 0, NULL, NULL, NULL),
(264, 268, NULL, NULL, NULL, NULL, 'https://talkmaze.com/storage/brands/L8OLPLwovzQmh2HaHeql7R2AYTc5beq6yWLrGl3S.png', 1, '2020-11-30 15:44:39', '2020-12-09 11:55:54', 0, NULL, NULL, NULL),
(265, 269, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, '2020-11-30 15:46:44', '2020-11-30 15:46:44', 0, NULL, NULL, NULL),
(266, 270, NULL, NULL, 'East Kielchester', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-01 08:42:22', '2020-12-01 08:42:22', 0, NULL, NULL, NULL),
(267, 271, NULL, NULL, 'Suva', 'Fiji', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2020-12-02 11:53:11', '2020-12-02 11:53:11', 0, NULL, NULL, NULL),
(268, 272, NULL, NULL, 'Abc', 'Xyz', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-03 19:47:55', '2020-12-03 19:47:55', 0, NULL, NULL, NULL),
(269, 273, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-07 00:59:10', '2020-12-07 00:59:10', 0, NULL, NULL, NULL),
(270, 274, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-07 01:02:26', '2020-12-07 01:02:26', 0, NULL, NULL, NULL),
(271, 275, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-08 00:54:18', '2020-12-08 00:54:18', 0, NULL, NULL, NULL),
(272, 276, NULL, NULL, 'Edmonton', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-08 01:08:28', '2020-12-08 01:08:28', 0, NULL, NULL, NULL),
(273, 277, NULL, 'n/a', 'Markham', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-10 01:14:40', '2020-12-10 01:15:51', 0, NULL, NULL, NULL),
(274, 278, NULL, NULL, 'Port Madalynbury', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-13 21:11:34', '2020-12-13 21:11:34', 0, NULL, NULL, NULL),
(275, 279, NULL, NULL, 'Vancouver', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-22 01:58:07', '2020-12-22 01:58:07', 0, NULL, NULL, NULL),
(276, 280, NULL, NULL, 'Vadodara', 'India', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-22 07:45:32', '2020-12-22 07:45:32', 0, NULL, NULL, NULL),
(277, 281, NULL, NULL, 'Port Luis', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-23 04:07:57', '2020-12-23 04:07:57', 0, NULL, NULL, NULL),
(278, 282, NULL, NULL, 'Lomaberg', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2020-12-26 19:57:18', '2020-12-26 19:57:18', 0, NULL, NULL, NULL),
(279, 283, NULL, NULL, 'New Delhi', 'India', 'https://talkmaze.com/images/profileavatar.png', 1, '2021-01-02 10:46:03', '2021-01-02 10:46:03', 0, NULL, NULL, NULL),
(280, 284, NULL, NULL, 'Armstrongmouth', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2021-01-04 15:17:49', '2021-01-04 15:17:49', 0, NULL, NULL, NULL),
(281, 285, NULL, NULL, NULL, NULL, 'https://talkmaze.com/images/profileavatar.png', 1, '2021-01-10 02:24:08', '2021-01-10 02:24:08', 0, NULL, NULL, NULL),
(282, 286, NULL, NULL, 'Wisozkshire', 'United States', 'https://talkmaze.com/images/profileavatar.png', 1, '2021-01-11 03:40:53', '2021-01-11 03:40:53', 0, NULL, NULL, NULL),
(283, 287, NULL, NULL, 'montreal', 'Canada', 'https://talkmaze.com/images/profileavatar.png', 1, '2021-01-14 07:32:14', '2021-01-14 07:32:14', 0, NULL, NULL, NULL),
(284, 288, NULL, NULL, 'Edmonton', 'Canada', 'https://www.talkmaze.com/images/profileavatar.png', 1, '2021-01-19 11:19:43', '2021-01-19 11:19:43', 0, NULL, NULL, NULL),
(285, 289, NULL, NULL, 'Multan', 'Pakistan', 'https://new-version.talkmaze.com/images/profileavatar.png', 1, '2021-06-28 09:35:16', '2021-06-28 09:35:16', 0, NULL, NULL, NULL),
(286, 290, NULL, 'test', 'Edmonton', 'Canada', 'https://new-version.talkmaze.com/images/profileavatar.png', 1, '2021-07-02 08:24:30', '2021-07-05 08:02:53', 0, NULL, NULL, NULL),
(287, 291, NULL, NULL, 'Edmonton', 'Canada', 'https://new-version.talkmaze.com/images/profileavatar.png', 1, '2021-07-05 08:04:32', '2021-07-05 08:04:32', 0, NULL, NULL, NULL),
(288, 292, NULL, NULL, 'Pakistan', 'Lahore', 'https://talkmaze.com/images/profileavatar.png', 1, '2021-07-06 09:09:51', '2021-07-06 09:09:51', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_requests`
--

CREATE TABLE `user_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `tutor_id` bigint(20) DEFAULT NULL,
  `why_would_you_like_to_be_matched_with_a_coach` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_of_public_speaking` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_you_have_access_to_a_webcam_and_mic` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_requests`
--

INSERT INTO `user_requests` (`id`, `user_id`, `tutor_id`, `why_would_you_like_to_be_matched_with_a_coach`, `experience_of_public_speaking`, `do_you_have_access_to_a_webcam_and_mic`, `created_at`, `updated_at`, `deleted_at`) VALUES
(64, 68, 2, 'asdhaksldhl', 'asdhaksldhl', '1', '2020-04-07 05:42:08', '2020-04-12 23:45:38', '2020-04-12 23:45:38'),
(75, 72, NULL, 'djskaljdsklaj', 'djskaljdsklaj', '1', '2020-04-27 02:11:06', '2020-04-27 02:11:06', NULL),
(76, 72, 2, 'akdskda;s', 'akdskda;s', '1', '2020-04-27 02:12:57', '2020-04-27 02:17:04', '2020-04-27 02:17:04'),
(77, 78, NULL, 'To help improve my public speaking', 'To help improve my public speaking', '1', '2020-05-21 09:18:52', '2020-05-21 09:18:52', NULL),
(78, 78, NULL, 'To help improve my public speaking', 'To help improve my public speaking', '1', '2020-05-21 09:19:10', '2020-05-21 09:19:10', NULL),
(79, 81, NULL, 'sadjsadjaslja', 'sadjsadjaslja', '1', '2020-05-21 10:44:35', '2020-05-21 10:44:35', NULL),
(80, 81, NULL, 'cfvyghjbnk', 'cfvyghjbnk', '1', '2020-05-21 11:23:49', '2020-05-21 11:23:49', NULL),
(81, 81, NULL, 'rytgvyuhbjn', 'rytgvyuhbjn', '1', '2020-05-21 11:24:32', '2020-05-21 11:24:32', NULL),
(82, 81, 2, 'dfcgvhbhjnk', 'dfcgvhbhjnk', '1', '2020-05-21 11:40:47', '2020-05-21 11:51:19', '2020-05-21 11:51:19'),
(83, 80, 2, 'fcgvhjblkm', 'fcgvhjblkm', '1', '2020-05-21 13:05:23', '2020-05-21 13:07:35', NULL),
(84, 80, 10, 'ghjhkl', 'ghjhkl', '1', '2020-05-28 10:30:36', '2020-05-28 10:30:42', NULL),
(85, 85, 10, 'test', 'test', '1', '2020-05-28 11:14:17', '2020-05-28 11:17:11', NULL),
(86, 85, NULL, 'test', 'test', '1', '2020-05-28 11:18:56', '2020-05-28 11:18:56', NULL),
(87, 80, NULL, 'dfghjkml', 'dfghjkml', '1', '2020-05-28 14:21:14', '2020-05-28 14:21:14', NULL),
(88, 85, NULL, 'na', 'na', '1', '2020-06-02 21:41:10', '2020-06-02 21:41:10', NULL),
(89, 85, 95, 'na', 'na', '1', '2020-06-02 21:41:11', '2020-06-02 21:42:02', '2020-06-02 21:42:02'),
(90, 72, 95, 'fhgjkl', 'fhgjkl', '1', '2020-06-03 17:31:50', '2020-06-03 17:31:56', NULL),
(91, 72, NULL, 'gvbhjlkm', 'gvbhjlkm', '1', '2020-06-03 17:32:24', '2020-06-03 17:32:24', NULL),
(92, 72, 98, 'gvbhjlkm', 'gvbhjlkm', '1', '2020-06-03 17:32:24', '2020-06-03 17:32:35', '2020-06-03 17:32:35'),
(93, 95, NULL, 'looking to learn', 'looking to learn', '1', '2020-06-04 02:44:34', '2020-06-04 02:44:34', NULL),
(94, 95, 100, 'to learn', 'to learn', '1', '2020-06-04 02:46:46', '2020-06-04 02:49:59', '2020-06-04 02:49:59'),
(95, 95, NULL, 'to learn', 'to learn', '1', '2020-06-04 02:47:25', '2020-06-04 02:47:25', NULL),
(96, 98, NULL, 'sajdaskdhkshdksa', 'sajdaskdhkshdksa', '1', '2020-06-04 21:14:09', '2020-06-04 21:14:09', NULL),
(97, 98, NULL, 'dkjklasjdkdlkas', 'dkjklasjdkdlkas', '1', '2020-06-04 21:21:40', '2020-06-04 21:21:40', NULL),
(98, 101, 100, 'to learn', 'to learn', '1', '2020-06-04 23:31:47', '2020-06-04 23:32:45', NULL),
(99, 98, 72, 'asdkjkdjal', 'asdkjkdjal', '1', '2020-06-05 22:15:24', '2020-06-09 14:40:43', '2020-06-09 14:40:43'),
(100, 101, NULL, 'interested in bp', 'interested in bp', '1', '2020-06-06 00:06:03', '2020-06-06 00:06:03', NULL),
(101, 109, NULL, 'Because', 'Because', '1', '2020-06-07 00:06:00', '2020-06-07 00:06:00', NULL),
(102, 109, NULL, 'no', 'no', '1', '2020-06-07 05:26:40', '2020-06-07 05:26:40', NULL),
(103, 110, NULL, 'Coz i want to brighten my horizons and with that change peoples lives for the better', 'Coz i want to brighten my horizons and with that change peoples lives for the better', '1', '2020-06-07 05:43:14', '2020-06-07 05:43:14', NULL),
(104, 114, NULL, 'sdasdsdsa', 'sdasdsdsa', '1', '2020-06-07 11:47:31', '2020-06-07 11:47:31', NULL),
(105, 116, NULL, 'jhk', 'jhk', '1', '2020-06-07 13:29:57', '2020-06-07 13:29:57', NULL),
(106, 98, NULL, 'jasljdlaskjldksa', 'jasljdlaskjldksa', '1', '2020-06-07 21:23:07', '2020-06-07 21:23:07', NULL),
(107, 98, NULL, 'jasljdlaskjldksa', 'jasljdlaskjldksa', '1', '2020-06-07 21:23:08', '2020-06-07 21:23:08', NULL),
(108, 98, NULL, 'kalsdjklasd', 'kalsdjklasd', '1', '2020-06-07 22:31:32', '2020-06-07 22:31:32', NULL),
(109, 98, NULL, ';aldkl;asd', ';aldkl;asd', '1', '2020-06-07 22:48:58', '2020-06-07 22:48:58', NULL),
(110, 101, NULL, 'need coaching', 'need coaching', '1', '2020-06-08 07:35:14', '2020-06-08 07:35:14', NULL),
(111, 101, NULL, 'na', 'na', '1', '2020-06-08 07:37:47', '2020-06-08 07:37:47', NULL),
(112, 101, NULL, 'na', 'na', '1', '2020-06-08 07:38:21', '2020-06-08 07:38:21', NULL),
(113, 101, NULL, 'na', 'na', '1', '2020-06-08 08:02:53', '2020-06-08 08:02:53', NULL),
(114, 101, NULL, 'na', 'na', '1', '2020-06-08 09:27:44', '2020-06-08 09:27:44', NULL),
(115, 98, 72, 'klajdkldjlsadsd', 'klajdkldjlsadsd', '1', '2020-06-09 02:52:09', '2020-06-09 14:40:43', '2020-06-09 14:40:43'),
(116, 101, NULL, 'now', 'now', '1', '2020-06-19 08:40:10', '2020-06-19 08:40:10', NULL),
(117, 145, 72, 'asdjakdjsla', 'asdjakdjsla', '1', '2020-06-25 15:23:27', '2020-06-25 17:24:59', NULL),
(118, 101, NULL, 'na', 'na', '1', '2020-06-27 11:27:04', '2020-06-27 11:27:04', NULL),
(119, 101, NULL, 'na', 'na', '1', '2020-06-27 11:28:50', '2020-06-27 11:28:50', NULL),
(120, 101, NULL, 'aa', 'aa', '1', '2020-06-29 22:41:18', '2020-06-29 22:41:18', NULL),
(121, 145, NULL, 'lkadjasldjlsa', 'lkadjasldjlsa', '1', '2020-07-01 18:13:54', '2020-07-01 18:13:54', NULL),
(122, 145, NULL, 'ksljdalkds', 'ksljdalkds', '1', '2020-07-01 18:19:54', '2020-07-01 18:19:54', NULL),
(123, 145, NULL, 'lkasjdlajds', 'lkasjdlajds', '1', '2020-07-02 00:05:57', '2020-07-02 00:05:57', NULL),
(124, 145, NULL, 'laksjdlsjdsl', 'laksjdlsjdsl', '1', '2020-07-02 00:06:42', '2020-07-02 00:06:42', NULL),
(125, 101, NULL, 'a', 'a', '1', '2020-07-02 00:19:25', '2020-07-02 00:19:25', NULL),
(126, 101, NULL, 'aa', 'aa', '1', '2020-07-02 00:32:34', '2020-07-02 00:32:34', NULL),
(127, 101, NULL, 'Hmm', 'Hmm', '1', '2020-07-02 05:29:52', '2020-07-02 05:29:52', NULL),
(128, 101, NULL, 'aa', 'aa', '1', '2020-07-02 09:08:18', '2020-07-02 09:08:18', NULL),
(129, 101, NULL, 'a', 'a', '1', '2020-07-02 09:15:30', '2020-07-02 09:15:30', NULL),
(130, 145, NULL, 'ajsajljdlas', 'ajsajljdlas', '1', '2020-07-07 16:33:09', '2020-07-07 16:33:09', NULL),
(131, 145, NULL, 'sdjajdalkaslk', 'sdjajdalkaslk', '1', '2020-07-07 18:50:23', '2020-07-07 18:50:23', NULL),
(132, 101, NULL, 'aa', 'aa', '1', '2020-07-08 00:51:57', '2020-07-08 00:51:57', NULL),
(133, 159, NULL, 'a', 'a', '1', '2020-07-08 00:58:22', '2020-07-08 00:58:22', NULL),
(134, 160, NULL, 'V', 'V', '1', '2020-07-08 00:59:25', '2020-07-08 00:59:25', NULL),
(135, 145, NULL, 'asnalsjnklas', 'asnalsjnklas', '1', '2020-07-08 22:58:13', '2020-07-08 22:58:13', NULL),
(136, 145, NULL, 'askldjaljskla', 'askldjaljskla', '1', '2020-07-11 00:20:00', '2020-07-11 00:20:00', NULL),
(137, 145, NULL, 'askldmklajdsa', 'askldmklajdsa', '1', '2020-07-11 00:22:46', '2020-07-11 00:22:46', NULL),
(138, 101, NULL, 'aa', 'aa', '1', '2020-07-15 11:26:44', '2020-07-15 11:26:44', NULL),
(139, 101, NULL, 'aa', 'aa', '1', '2020-07-15 11:26:45', '2020-07-15 11:26:45', NULL),
(140, 145, NULL, 'Hhh', 'Hhh', '1', '2020-07-16 09:37:49', '2020-07-16 09:37:49', NULL),
(141, 188, NULL, 'gal', 'gal', '1', '2020-07-23 00:20:46', '2020-07-23 00:20:46', NULL),
(142, 193, NULL, 'skill', 'skill', '1', '2020-07-23 11:29:02', '2020-07-23 11:29:02', NULL),
(143, 193, NULL, 'yes', 'yes', '1', '2020-07-23 11:30:56', '2020-07-23 11:30:56', NULL),
(144, 206, NULL, 'To further develop my speech and debate skills and develop confidence with impromptu speaking.', 'To further develop my speech and debate skills and develop confidence with impromptu speaking.', '1', '2020-08-09 21:05:15', '2020-08-09 21:05:15', NULL),
(145, 204, NULL, 'test', 'test', '1', '2020-08-11 01:32:59', '2020-08-11 01:32:59', NULL),
(146, 207, NULL, 'I’m new to TalkMaze but I created an account mainly to get better at public speaking.', 'I’m new to TalkMaze but I created an account mainly to get better at public speaking.', '1', '2020-08-11 06:11:39', '2020-08-11 06:11:39', NULL),
(147, 208, NULL, 'I want coach', 'I want coach', '1', '2020-11-05 06:29:14', '2020-11-05 06:29:14', NULL),
(148, 100, NULL, 'df', 'df', '1', '2020-11-07 03:52:43', '2020-11-07 03:52:43', NULL),
(149, 100, NULL, 'dfg', 'dfg', '1', '2020-11-07 03:55:38', '2020-11-07 03:55:38', NULL),
(150, 112, 72, 'gf', 'gf', '1', '2020-11-07 05:02:46', '2020-11-07 05:07:32', NULL),
(151, 208, NULL, 'Hello', 'Hello', '1', '2021-04-16 00:38:07', '2021-04-16 00:38:07', NULL),
(152, 121, NULL, 'Hello', 'Hello', '1', '2021-04-19 01:42:40', '2021-04-19 01:42:40', NULL),
(153, 121, NULL, 'hg', 'hg', '1', '2021-04-20 00:41:11', '2021-04-20 00:41:11', NULL),
(154, 121, 72, 'lsd', 'lsd', '1', '2021-04-20 01:12:34', '2021-04-20 01:17:57', NULL),
(155, 52, NULL, 'xcxvcbv', 'xcxvcbv', '1', '2021-04-22 05:10:33', '2021-04-22 05:10:33', NULL),
(156, 121, NULL, 'test', 'test', '1', '2021-04-23 01:30:52', '2021-04-23 01:30:52', NULL),
(157, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:45:47', '2021-05-20 05:45:47', NULL),
(158, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:45:47', '2021-05-20 05:45:47', NULL),
(159, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:46:05', '2021-05-20 05:46:05', NULL),
(160, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:46:06', '2021-05-20 05:46:06', NULL),
(161, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:47:08', '2021-05-20 05:47:08', NULL),
(162, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:47:08', '2021-05-20 05:47:08', NULL),
(163, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:52:55', '2021-05-20 05:52:55', NULL),
(164, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:53:34', '2021-05-20 05:53:34', NULL),
(165, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:53:39', '2021-05-20 05:53:39', NULL),
(166, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:55:45', '2021-05-20 05:55:45', NULL),
(167, 223, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-20 05:55:45', '2021-05-20 05:55:45', NULL),
(168, 224, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 01:18:52', '2021-05-26 01:18:52', NULL),
(169, 224, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 01:19:14', '2021-05-26 01:19:14', NULL),
(170, 224, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 01:19:14', '2021-05-26 01:19:14', NULL),
(171, 224, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 02:01:32', '2021-05-26 02:01:32', NULL),
(172, 224, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 02:01:32', '2021-05-26 02:01:32', NULL),
(173, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 02:24:57', '2021-05-26 02:24:57', NULL),
(174, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 02:24:57', '2021-05-26 02:24:57', NULL),
(175, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 02:26:27', '2021-05-26 02:26:27', NULL),
(176, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 02:26:28', '2021-05-26 02:26:28', NULL),
(177, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 02:29:03', '2021-05-26 02:29:03', NULL),
(178, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 02:29:04', '2021-05-26 02:29:04', NULL),
(179, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 05:21:28', '2021-05-26 05:21:28', NULL),
(180, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 05:21:29', '2021-05-26 05:21:29', NULL),
(181, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 06:45:31', '2021-05-26 06:45:31', NULL),
(182, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 06:45:32', '2021-05-26 06:45:32', NULL),
(183, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:05:19', '2021-05-26 07:05:19', NULL),
(184, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:05:19', '2021-05-26 07:05:19', NULL),
(185, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:13:41', '2021-05-26 07:13:41', NULL),
(186, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:13:42', '2021-05-26 07:13:42', NULL),
(187, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:19:21', '2021-05-26 07:19:21', NULL),
(188, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:19:21', '2021-05-26 07:19:21', NULL),
(189, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:20:07', '2021-05-26 07:20:07', NULL),
(190, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:20:07', '2021-05-26 07:20:07', NULL),
(191, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:44:46', '2021-05-26 07:44:46', NULL),
(192, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 07:44:47', '2021-05-26 07:44:47', NULL),
(193, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 08:03:49', '2021-05-26 08:03:49', NULL),
(194, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 08:03:49', '2021-05-26 08:03:49', NULL),
(195, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 23:20:10', '2021-05-26 23:20:10', NULL),
(196, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 23:20:10', '2021-05-26 23:20:10', NULL),
(197, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 23:26:34', '2021-05-26 23:26:34', NULL),
(198, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 23:26:34', '2021-05-26 23:26:34', NULL),
(199, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-05-26 23:26:35', '2021-05-26 23:26:35', NULL),
(200, 228, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-06 03:51:26', '2021-06-06 03:51:26', NULL),
(201, 228, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-06 03:53:10', '2021-06-06 03:53:10', NULL),
(202, 228, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-06 03:53:14', '2021-06-06 03:53:14', NULL),
(203, 228, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-06 03:55:14', '2021-06-06 03:55:14', NULL),
(204, 228, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-06 03:55:14', '2021-06-06 03:55:14', NULL),
(205, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-08 17:27:25', '2021-06-08 17:27:25', NULL),
(206, 225, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-08 17:27:25', '2021-06-08 17:27:25', NULL),
(207, 226, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-08 23:25:21', '2021-06-08 23:25:21', NULL),
(208, 226, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-08 23:25:21', '2021-06-08 23:25:21', NULL),
(209, 226, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-14 08:22:11', '2021-06-14 08:22:11', NULL),
(210, 226, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-14 08:22:11', '2021-06-14 08:22:11', NULL),
(211, 226, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-14 08:23:23', '2021-06-14 08:23:23', NULL),
(212, 226, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-14 08:23:23', '2021-06-14 08:23:23', NULL),
(213, 226, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-14 08:26:35', '2021-06-14 08:26:35', NULL),
(214, 226, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-14 08:26:35', '2021-06-14 08:26:35', NULL),
(215, 229, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-21 10:59:38', '2021-06-21 10:59:38', NULL),
(216, 229, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-06-23 09:37:21', '2021-06-23 09:37:21', NULL),
(217, 290, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:00:32', '2021-07-05 08:00:32', NULL),
(218, 290, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:00:32', '2021-07-05 08:00:32', NULL),
(219, 290, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:00:36', '2021-07-05 08:00:36', NULL),
(220, 290, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:00:49', '2021-07-05 08:00:49', NULL),
(221, 290, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:00:49', '2021-07-05 08:00:49', NULL),
(222, 291, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:05:30', '2021-07-05 08:05:30', NULL),
(223, 291, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:05:30', '2021-07-05 08:05:30', NULL),
(224, 291, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:09:55', '2021-07-05 08:09:55', NULL),
(225, 291, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:11:41', '2021-07-05 08:11:41', NULL),
(226, 291, NULL, 'To help improve my public speaking', 'to learn', '1', '2021-07-05 08:11:41', '2021-07-05 08:11:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `debate_id` bigint(20) NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `debate_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 'like', '2020-03-01 19:00:00', '2020-03-01 19:00:00'),
(2, 52, 6, 'like', '2020-03-01 19:00:00', '2020-03-01 19:00:00'),
(3, 52, 8, 'dislike', '2020-03-01 19:00:00', '2020-03-01 19:00:00'),
(4, 52, 7, 'dislike', '2020-03-01 19:00:00', '2020-03-03 02:48:02'),
(5, 52, 6, 'like', '2020-03-01 19:00:00', '2020-03-01 19:00:00'),
(8, 52, 5, 'like', '2020-03-03 06:49:30', '2020-03-03 06:50:19'),
(9, 52, 1, 'like', '2020-03-05 07:05:46', '2020-03-10 08:05:51'),
(10, 52, 17, 'dislike', '2020-03-06 07:40:01', '2020-03-06 07:40:10'),
(11, 52, 18, 'like', '2020-03-11 00:50:53', '2020-03-11 00:50:59'),
(12, 52, 24, 'like', '2020-03-11 02:36:20', '2020-03-11 02:36:20'),
(13, 66, 27, 'like', '2020-04-07 08:32:52', '2020-04-07 08:32:52'),
(14, 52, 27, 'dislike', '2020-04-21 13:13:49', '2020-04-21 13:23:08'),
(15, 70, 26, 'like', '2020-04-21 15:25:01', '2020-04-21 18:33:05'),
(16, 70, 27, 'dislike', '2020-04-21 18:25:51', '2020-04-21 18:25:51'),
(17, 52, 28, 'like', '2020-05-04 18:50:52', '2020-05-04 18:50:52'),
(18, 66, 28, 'like', '2020-05-12 14:42:14', '2020-05-12 14:42:14'),
(19, 52, 31, 'dislike', '2020-05-14 17:18:33', '2020-05-14 17:56:55'),
(20, 76, 30, 'like', '2020-05-15 15:56:02', '2020-05-15 15:57:04'),
(21, 76, 31, 'like', '2020-05-15 15:56:18', '2020-05-15 15:56:42'),
(22, 77, 33, 'dislike', '2020-05-17 07:59:35', '2020-05-17 08:03:24'),
(23, 66, 33, 'like', '2020-05-17 08:01:06', '2020-05-17 08:01:06'),
(24, 86, 1, 'like', '2020-05-29 22:21:36', '2020-05-29 22:21:36'),
(25, 87, 1, 'like', '2020-05-30 11:34:23', '2020-05-30 11:35:06'),
(26, 87, 2, 'like', '2020-05-30 11:46:06', '2020-05-30 11:46:06'),
(27, 108, 3, 'like', '2020-06-06 23:58:07', '2020-06-06 23:58:07'),
(28, 100, 3, 'like', '2020-06-07 00:03:38', '2020-06-07 00:03:38'),
(29, 109, 3, 'like', '2020-06-07 00:06:51', '2020-06-07 05:27:47'),
(30, 112, 4, 'dislike', '2020-06-07 05:41:18', '2020-06-07 05:41:18'),
(31, 87, 4, 'like', '2020-06-07 05:41:37', '2020-06-07 05:41:37'),
(32, 109, 4, 'dislike', '2020-06-07 05:48:33', '2020-06-07 05:48:33'),
(33, 87, 3, 'dislike', '2020-06-07 05:50:34', '2020-06-07 05:50:34'),
(34, 72, 4, 'like', '2020-06-07 11:45:06', '2020-06-07 11:45:06'),
(35, 98, 10, 'like', '2020-06-08 21:37:44', '2020-06-09 19:22:18'),
(36, 95, 10, 'dislike', '2020-06-09 00:58:42', '2020-06-09 00:58:42'),
(37, 125, 9, 'dislike', '2020-06-10 02:27:56', '2020-06-10 02:27:56'),
(38, 126, 10, 'dislike', '2020-06-10 02:54:27', '2020-06-12 02:47:46'),
(39, 122, 9, 'like', '2020-06-10 03:01:20', '2020-06-10 03:01:26'),
(40, 72, 10, 'like', '2020-06-11 01:09:04', '2020-06-11 01:09:04'),
(41, 122, 10, 'like', '2020-06-12 02:34:48', '2020-06-12 02:34:48'),
(42, 126, 7, 'dislike', '2020-06-15 18:56:03', '2020-06-16 05:57:40'),
(43, 128, 10, 'dislike', '2020-06-16 23:51:21', '2020-06-16 23:51:21'),
(44, 128, 9, 'dislike', '2020-06-17 00:09:31', '2020-06-17 00:10:00'),
(45, 128, 7, 'like', '2020-06-17 00:22:09', '2020-06-17 00:22:09'),
(46, 127, 9, 'like', '2020-06-17 01:48:05', '2020-06-17 01:48:05'),
(47, 126, 11, 'like', '2020-06-19 02:53:56', '2020-06-19 05:03:55'),
(48, 139, 12, 'dislike', '2020-06-19 07:08:34', '2020-06-19 07:08:34'),
(49, 139, 11, 'like', '2020-06-19 07:13:30', '2020-06-19 07:13:30'),
(50, 126, 12, 'dislike', '2020-06-19 07:14:02', '2020-06-19 07:14:02'),
(51, 98, 12, 'dislike', '2020-06-19 15:25:33', '2020-06-19 15:25:33'),
(52, 98, 9, 'like', '2020-06-19 16:47:07', '2020-06-19 16:47:07'),
(53, 139, 9, 'like', '2020-06-19 19:44:15', '2020-06-19 19:44:25'),
(54, 72, 11, 'like', '2020-06-20 02:27:57', '2020-06-20 02:27:57'),
(55, 142, 9, 'dislike', '2020-06-25 08:01:00', '2020-06-25 08:01:00'),
(56, 142, 8, 'dislike', '2020-07-08 21:29:58', '2020-07-08 21:29:58'),
(57, 154, 10, 'like', '2020-07-09 07:38:54', '2020-07-09 07:39:18'),
(58, 142, 7, 'dislike', '2020-07-16 05:14:54', '2020-07-16 05:14:54'),
(59, 197, 12, 'dislike', '2020-07-30 21:23:24', '2020-07-30 21:23:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_categories`
--
ALTER TABLE `class_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_plans`
--
ALTER TABLE `class_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coaching_bulks`
--
ALTER TABLE `coaching_bulks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach_requests`
--
ALTER TABLE `coach_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_likes`
--
ALTER TABLE `comment_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competition_users`
--
ALTER TABLE `competition_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_likes`
--
ALTER TABLE `content_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_types`
--
ALTER TABLE `content_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_views`
--
ALTER TABLE `content_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursequestionreply`
--
ALTER TABLE `coursequestionreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursequestions`
--
ALTER TABLE `coursequestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursequestions_likes`
--
ALTER TABLE `coursequestions_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_contents`
--
ALTER TABLE `course_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_ratings`
--
ALTER TABLE `course_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debates`
--
ALTER TABLE `debates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo_requests`
--
ALTER TABLE `demo_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_codes`
--
ALTER TABLE `discount_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled_user`
--
ALTER TABLE `enrolled_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_sessions`
--
ALTER TABLE `meeting_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_streams`
--
ALTER TABLE `notification_streams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_students`
--
ALTER TABLE `parent_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_transfers`
--
ALTER TABLE `stripe_transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strip_test`
--
ALTER TABLE `strip_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_ratings`
--
ALTER TABLE `student_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tutor`
--
ALTER TABLE `student_tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_tables`
--
ALTER TABLE `time_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_earnings`
--
ALTER TABLE `tutor_earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_ratings`
--
ALTER TABLE `tutor_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_time_tables`
--
ALTER TABLE `tutor_time_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_requests`
--
ALTER TABLE `user_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `class_categories`
--
ALTER TABLE `class_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_plans`
--
ALTER TABLE `class_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=652;

--
-- AUTO_INCREMENT for table `coaching_bulks`
--
ALTER TABLE `coaching_bulks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `coach_requests`
--
ALTER TABLE `coach_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `comment_likes`
--
ALTER TABLE `comment_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `competition_users`
--
ALTER TABLE `competition_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_likes`
--
ALTER TABLE `content_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_types`
--
ALTER TABLE `content_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content_views`
--
ALTER TABLE `content_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coursequestionreply`
--
ALTER TABLE `coursequestionreply`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coursequestions`
--
ALTER TABLE `coursequestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coursequestions_likes`
--
ALTER TABLE `coursequestions_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `course_contents`
--
ALTER TABLE `course_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `course_ratings`
--
ALTER TABLE `course_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `debates`
--
ALTER TABLE `debates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `demo_requests`
--
ALTER TABLE `demo_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `discount_codes`
--
ALTER TABLE `discount_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrolled_user`
--
ALTER TABLE `enrolled_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=657;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `meeting_sessions`
--
ALTER TABLE `meeting_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notification_streams`
--
ALTER TABLE `notification_streams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=590;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent_students`
--
ALTER TABLE `parent_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stripe_transfers`
--
ALTER TABLE `stripe_transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `strip_test`
--
ALTER TABLE `strip_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_ratings`
--
ALTER TABLE `student_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_tutor`
--
ALTER TABLE `student_tutor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `time_tables`
--
ALTER TABLE `time_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tutor_earnings`
--
ALTER TABLE `tutor_earnings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tutor_ratings`
--
ALTER TABLE `tutor_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutor_time_tables`
--
ALTER TABLE `tutor_time_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `user_requests`
--
ALTER TABLE `user_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
