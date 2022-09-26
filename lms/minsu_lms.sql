-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2022 at 11:25 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minsu_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `camp_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(500) NOT NULL,
  `profile` varchar(500) NOT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `camp_id` (`camp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `camp_id`, `email`, `password`, `token`, `profile`) VALUES
(1, 2, 'ccsadmin@gmail.com', '$2y$04$XupUyzwFgKv21o9tMRPUdu9JSNbbpp.yWAx58oXydEj/qvFxHsx/y', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

DROP TABLE IF EXISTS `campus`;
CREATE TABLE IF NOT EXISTS `campus` (
  `camp_id` int(11) NOT NULL AUTO_INCREMENT,
  `campus_code` varchar(255) NOT NULL,
  `campus_desc` varchar(500) NOT NULL,
  `campus_address` varchar(500) NOT NULL,
  PRIMARY KEY (`camp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`camp_id`, `campus_code`, `campus_desc`, `campus_address`) VALUES
(1, 'MMC', 'MINDORO STATE UNIVERSITY-MAIN CAMPUS', 'ALCATE VICTORIA, ORIENTAL MINDORO'),
(2, 'MCC', 'MINDORO STATE UNIVERSITY-CALAPAN CITY CAMPUS', 'MASIPIT CALAPAN CITY, ORIENTAL MINDORO'),
(3, 'MBC', 'MINDORO STATE UNIVERSITY-BONGABONG CAMPUS', 'BONGABONG, ORIENTAL MINDORO');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
CREATE TABLE IF NOT EXISTS `college` (
  `coll_id` int(11) NOT NULL AUTO_INCREMENT,
  `coll_code` varchar(255) NOT NULL,
  `coll_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`coll_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`coll_id`, `coll_code`, `coll_desc`) VALUES
(1, 'CCS', 'COLLEGE OF COMPUTER STUDIES'),
(2, 'CTE', 'COLLEGE OF TEACHER EDUCATION'),
(3, 'CBM', 'COLLEGE OF BUSINESS MANAGEMENT'),
(4, 'CAS', 'COLLEGE OF ARTS AND SCIENCE'),
(5, 'CCJE', 'COLLEGE OF CRIMINAL JUSTICE EDUCATION');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_description` mediumtext NOT NULL,
  `units` int(11) NOT NULL,
  `room` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `semester` varchar(100) NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `code`, `user_id`, `prog_id`, `course_code`, `course_description`, `units`, `room`, `section`, `schedule`, `status`, `semester`, `academic_year`) VALUES
(1, 'u1BDbx', 1, 1, 'fdsf', 'fdsfdsfd', 3, 'dsfsd', 'F', 'sdfdsfdf', '1', '1', '2022-2023'),
(2, '3ETGx6', 1, 1, 'ITE122', 'sdfdsf', 3, 'dsfds', 'F', 'fdsf', '1', '1', '2022-2023'),
(3, 'uFzpvX', 1, 1, 'dsfsd', 'sdfds', 2, 'sdsd', 'dsda', 'sdds', '1', '1', '2022-2023'),
(4, 'e2MEBs', 1, 1, 'fdsfsd', 'dsad', 3, 'ds', 'dsa', 'dsad', '1', '1', '2022-2023'),
(5, 'RKfsCP', 1, 1, 'ITP111', 'asdfasfdsa', 3, 'dsfsd', 'F', 'sdfdsfdf', '1', '1', '2022-2023'),
(11, '5sB3YQ', 1, 1, 'ITP211', 'Embedded', 5, 'adada', 'F1', 'monday111', '1', '1', '2022-2023'),
(9, 'HK8sDc', 1, 1, 'iytr', 'zzz', 3, 'vcvc', 'f1', 'saaa', '1', '1', '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `course_activity`
--

DROP TABLE IF EXISTS `course_activity`;
CREATE TABLE IF NOT EXISTS `course_activity` (
  `cou_act_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cou_grade_criteria_id` int(11) DEFAULT NULL,
  `cou_batch_grad_id` int(11) DEFAULT NULL,
  `act_title` varchar(100) NOT NULL,
  `act_desc` mediumtext NOT NULL,
  `act_attachments` varchar(100) NOT NULL,
  `act_status` varchar(100) NOT NULL DEFAULT '1',
  `due_date` varchar(100) NOT NULL,
  `date_posted` varchar(100) NOT NULL,
  `date_updated` varchar(100) DEFAULT NULL,
  `cou_topic_id` int(11) NOT NULL,
  PRIMARY KEY (`cou_act_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_activity`
--

INSERT INTO `course_activity` (`cou_act_id`, `course_id`, `user_id`, `cou_grade_criteria_id`, `cou_batch_grad_id`, `act_title`, `act_desc`, `act_attachments`, `act_status`, `due_date`, `date_posted`, `date_updated`, `cou_topic_id`) VALUES
(1, 1, 1, NULL, NULL, 'adsads', 'wertyup', '7bd9fd1af6a77ff62158af9d3b4b747aa628e6f0.pdf', '1', '2022-09-11T13:35', '2022-09-10 03:28:24 pm', NULL, 1),
(2, 1, 1, NULL, NULL, 'htttr', 'dsfsfsf', 'philhealth-form.pdf', '1', '', '2022-09-10 04:08:51 pm', NULL, 2),
(3, 1, 1, NULL, NULL, 'kluii', 'khukhu', '256b1d7cc673b5f1e685e27891b707659828b0fa.pdf', '1', '', '2022-09-10 04:13:38 pm', NULL, 3),
(4, 1, 1, NULL, NULL, 'fdfddd', 'dfrgdr', '12df7da65a6ec59c59ec137bec1ef9d844c59073.pdf', '1', '2022-09-11T13:35', '2022-09-11 05:31:09 am', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_activity_comment`
--

DROP TABLE IF EXISTS `course_activity_comment`;
CREATE TABLE IF NOT EXISTS `course_activity_comment` (
  `act_com_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cou_act_id` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `date_commented` datetime NOT NULL,
  PRIMARY KEY (`act_com_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_activity_stud_response`
--

DROP TABLE IF EXISTS `course_activity_stud_response`;
CREATE TABLE IF NOT EXISTS `course_activity_stud_response` (
  `cou_act_stud_res_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `stud_cou_group_id` int(11) DEFAULT NULL,
  `cou_act_id` int(11) NOT NULL,
  `response_type` varchar(255) DEFAULT NULL,
  `group_title` varchar(100) DEFAULT NULL,
  `attachments` varchar(100) NOT NULL,
  `submission_status` varchar(100) NOT NULL DEFAULT '',
  `date_submitted` varchar(100) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`cou_act_stud_res_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_activity_stud_response`
--

INSERT INTO `course_activity_stud_response` (`cou_act_stud_res_id`, `user_id`, `stud_cou_group_id`, `cou_act_id`, `response_type`, `group_title`, `attachments`, `submission_status`, `date_submitted`, `remarks`, `grade`) VALUES
(1, 2, NULL, 4, NULL, NULL, '8c5c15d7f757432dba20f34800a3b351b59f536d.pdf', '1', '2022-09-25 08:51:06 am', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_announcement`
--

DROP TABLE IF EXISTS `course_announcement`;
CREATE TABLE IF NOT EXISTS `course_announcement` (
  `cou_ann_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `ann_status` varchar(100) NOT NULL DEFAULT '1',
  `date_posted` varchar(100) NOT NULL,
  `date_updated` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cou_ann_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_announcement`
--

INSERT INTO `course_announcement` (`cou_ann_id`, `course_id`, `user_id`, `title`, `content`, `ann_status`, `date_posted`, `date_updated`) VALUES
(5, 1, 1, 'ssssss', 'mmmmmmmmmmmmm', '1', '2022-08-26 12:51:55 pm', NULL),
(7, 1, 1, 'bbvv', 'bbbbvvvvv', '1', '2022-08-26 12:53:53 pm', NULL),
(9, 1, 1, 'jjj', 'jjyuiyiku', '1', '2022-08-27 01:58:42 pm', NULL),
(10, 1, 1, 'fdgdgd', 'gdggdg', '1', '2022-08-27 02:36:11 pm', NULL),
(11, 1, 1, 'dfd', 'dfgdgre', '1', '2022-08-27 02:44:44 pm', NULL),
(12, 9, 1, 'sdvsdvds', 'csacascascas', '1', '2022-09-02 01:41:04 pm', NULL),
(14, 1, 1, 'title', 'content', '1', '2022-09-07 02:35:34 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_announcement_comment`
--

DROP TABLE IF EXISTS `course_announcement_comment`;
CREATE TABLE IF NOT EXISTS `course_announcement_comment` (
  `ann_com_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cou_ann_id` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `date_commented` datetime NOT NULL,
  PRIMARY KEY (`ann_com_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_batch_grading`
--

DROP TABLE IF EXISTS `course_batch_grading`;
CREATE TABLE IF NOT EXISTS `course_batch_grading` (
  `cou_batch_grad_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `batch_name` varchar(500) NOT NULL,
  PRIMARY KEY (`cou_batch_grad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_grade_criteria`
--

DROP TABLE IF EXISTS `course_grade_criteria`;
CREATE TABLE IF NOT EXISTS `course_grade_criteria` (
  `cou_grade_criteria_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `criteria_name` varchar(255) NOT NULL,
  `criteria_percentage` varchar(255) NOT NULL,
  PRIMARY KEY (`cou_grade_criteria_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_material`
--

DROP TABLE IF EXISTS `course_material`;
CREATE TABLE IF NOT EXISTS `course_material` (
  `cou_mat_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mat_title` varchar(255) NOT NULL,
  `mat_desc` mediumtext NOT NULL,
  `mat_attachments` varchar(255) NOT NULL,
  `mat_status` varchar(100) NOT NULL DEFAULT '1',
  `date_posted` varchar(100) NOT NULL,
  `date_updated` varchar(100) DEFAULT NULL,
  `cou_topic_id` int(11) NOT NULL,
  PRIMARY KEY (`cou_mat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_material`
--

INSERT INTO `course_material` (`cou_mat_id`, `course_id`, `user_id`, `mat_title`, `mat_desc`, `mat_attachments`, `mat_status`, `date_posted`, `date_updated`, `cou_topic_id`) VALUES
(1, 1, 1, 'tryr', 'sdfsvsdf', 'b715714243a737bda3473e9b74015d88ec3963f5.pdf', '1', '2022-09-11 07:45:19 am', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_material_comment`
--

DROP TABLE IF EXISTS `course_material_comment`;
CREATE TABLE IF NOT EXISTS `course_material_comment` (
  `mat_com_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cou_mat_id` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `date_commented` datetime NOT NULL,
  PRIMARY KEY (`mat_com_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_meet`
--

DROP TABLE IF EXISTS `course_meet`;
CREATE TABLE IF NOT EXISTS `course_meet` (
  `cou_meet_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `meet_title` int(11) NOT NULL,
  `meet_description` mediumtext NOT NULL,
  `meet_scheduled_date` datetime NOT NULL,
  `meet_link` varchar(255) NOT NULL,
  `meet_code` varchar(100) NOT NULL,
  `user_mute_setting` varchar(255) NOT NULL,
  `user_acceptance_setting` varchar(255) NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`cou_meet_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_meet_chat`
--

DROP TABLE IF EXISTS `course_meet_chat`;
CREATE TABLE IF NOT EXISTS `course_meet_chat` (
  `conf_chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cou_meet_id` int(11) NOT NULL,
  `chat_contents` mediumtext NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`conf_chat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_meet_participants`
--

DROP TABLE IF EXISTS `course_meet_participants`;
CREATE TABLE IF NOT EXISTS `course_meet_participants` (
  `conf_part_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cou_meet_id` int(11) NOT NULL,
  `date_time_join` datetime NOT NULL,
  `joining_history` varchar(255) NOT NULL,
  PRIMARY KEY (`conf_part_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_presentation`
--

DROP TABLE IF EXISTS `course_presentation`;
CREATE TABLE IF NOT EXISTS `course_presentation` (
  `cou_pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `cou_grade_criteria_id` int(11) NOT NULL,
  `cou_batch_grad_id` int(11) NOT NULL,
  `presentation_title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `scheduled_date` datetime NOT NULL,
  `link` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `attachments` varchar(100) NOT NULL,
  `user_mute_setting` varchar(100) NOT NULL,
  `user_acceptance_setting` varchar(100) NOT NULL,
  `date_posted` timestamp NOT NULL,
  PRIMARY KEY (`cou_pres_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_presentation_chats`
--

DROP TABLE IF EXISTS `course_presentation_chats`;
CREATE TABLE IF NOT EXISTS `course_presentation_chats` (
  `pres_chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cou_pres_id` int(11) NOT NULL,
  `chat_contents` mediumtext NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`pres_chat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_presentation_evaluation`
--

DROP TABLE IF EXISTS `course_presentation_evaluation`;
CREATE TABLE IF NOT EXISTS `course_presentation_evaluation` (
  `pres_eval_id` int(11) NOT NULL AUTO_INCREMENT,
  `cou_pres_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ratings` int(11) NOT NULL,
  PRIMARY KEY (`pres_eval_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_presentation_evaluation_responses`
--

DROP TABLE IF EXISTS `course_presentation_evaluation_responses`;
CREATE TABLE IF NOT EXISTS `course_presentation_evaluation_responses` (
  `eval_res_id` int(11) NOT NULL AUTO_INCREMENT,
  `pres_eval_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ratings` int(11) NOT NULL,
  `date_responded` datetime NOT NULL,
  PRIMARY KEY (`eval_res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_presentation_participants`
--

DROP TABLE IF EXISTS `course_presentation_participants`;
CREATE TABLE IF NOT EXISTS `course_presentation_participants` (
  `pres_part_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cou_pres_id` int(11) NOT NULL,
  `date_time_join` datetime NOT NULL,
  `joining_history` varchar(255) NOT NULL,
  PRIMARY KEY (`pres_part_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_presentation_recommendations`
--

DROP TABLE IF EXISTS `course_presentation_recommendations`;
CREATE TABLE IF NOT EXISTS `course_presentation_recommendations` (
  `reco_id` int(11) NOT NULL AUTO_INCREMENT,
  `cou_pres_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recommendations` mediumtext NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_posted` datetime NOT NULL,
  `date_completed` datetime NOT NULL,
  PRIMARY KEY (`reco_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_presentation_user_invitation`
--

DROP TABLE IF EXISTS `course_presentation_user_invitation`;
CREATE TABLE IF NOT EXISTS `course_presentation_user_invitation` (
  `pres_user_inv_id` int(11) NOT NULL AUTO_INCREMENT,
  `cou_pres_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`pres_user_inv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_setting`
--

DROP TABLE IF EXISTS `course_setting`;
CREATE TABLE IF NOT EXISTS `course_setting` (
  `cou_set_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `commenting` varchar(255) NOT NULL,
  `join_code` varchar(100) NOT NULL,
  `join_status` varchar(100) NOT NULL,
  PRIMARY KEY (`cou_set_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_topic`
--

DROP TABLE IF EXISTS `course_topic`;
CREATE TABLE IF NOT EXISTS `course_topic` (
  `cou_topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `topic_desc` mediumtext NOT NULL,
  PRIMARY KEY (`cou_topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_topic`
--

INSERT INTO `course_topic` (`cou_topic_id`, `course_id`, `topic_desc`) VALUES
(1, 1, 'CHAPTER I - INTRODUCTION'),
(2, 1, 'CHAPTER II - FUNDAMENTAL OF PROGRAMMING'),
(3, 1, 'CHAPTER III - INTERMIDIATE');

-- --------------------------------------------------------

--
-- Table structure for table `manuscript`
--

DROP TABLE IF EXISTS `manuscript`;
CREATE TABLE IF NOT EXISTS `manuscript` (
  `manuscript_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stud_cou_group_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `abstract` varchar(500) NOT NULL,
  `references` varchar(500) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `date_posted` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`manuscript_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `prog_id` int(11) NOT NULL AUTO_INCREMENT,
  `coll_id` int(11) NOT NULL,
  `camp_id` int(11) NOT NULL,
  `prog_code` varchar(255) NOT NULL,
  `prog_desc` varchar(500) NOT NULL,
  `major` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`prog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prog_id`, `coll_id`, `camp_id`, `prog_code`, `prog_desc`, `major`) VALUES
(1, 1, 2, 'BSIT', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY', NULL),
(2, 2, 2, 'BSED', 'BACHELOR IN SECONDARY EDUCATION-ENGLISH', 'ENGLISH'),
(3, 2, 2, 'BSED', 'BACHELOR IN SECONDARY EDUCATION-PHYSICAL SCIENCE', 'PHYSICAL SCIENCE'),
(4, 2, 2, 'BSED', 'BACHELOR IN SECONDARY EDUCATION-FILIPINO', 'FILIPINO'),
(5, 2, 2, 'BSED', 'BACHELOR IN SECONDARY EDUCATION-MATHEMATICS', 'MATHEMATICS'),
(6, 2, 2, 'BSED', 'BACHELOR IN SECONDARY EDUCATION-TECHNOLOGY AND LIVELIHOOD EDUCATION', 'TECHNOLOGY AND LIVELIHOOD EDUCATION'),
(7, 2, 2, 'BTVTED', 'BACHELOR OF TECHNICAL VOCATIONAL TEACHER EDUCATION-AUTHOMOTIVE TECHNOLOGY', 'AUTHOMOTIVE TECHNOLOGY'),
(8, 2, 2, 'BTVTED', 'BACHELOR OF TECHNICAL VOCATIONAL TEACHER EDUCATION-DRAFTING TECHNOLOGY', 'DRAFTING TECHNOLOGY'),
(9, 2, 2, 'BTVTED ', 'BACHELOR OF TECHNICAL VOCATIONAL TEACHER EDUCATION-GARMENTS AND FASHION DESIGN', 'GARMENTS AND FASHION DESIGN'),
(10, 2, 2, 'BTVTED', 'BACHELOR OF TECHNICAL VOCATIONAL TEACHER EDUCATION-FOOD SERVICE MANAGEMENT', 'FOOD SERVICE MANAGEMENT'),
(11, 2, 2, 'BTVTED', 'BACHELOR OF TECHNICAL VOCATIONAL TEACHER EDUCATION-ELECTRICAL TECHNOLOGY', 'ELECTRICAL TECHNOLOGY'),
(12, 2, 2, 'BTVTED', 'BACHELOR OF TECHNICAL VOCATIONAL TEACHER EDUCATION-ELECTRONICS TECHNOLOGY', 'ELECTRONICS TECHNOLOGY'),
(13, 3, 2, 'BSHTM', 'BACHELOR OF SCIENCE IN HOTEL AND TOURISM MANAGEMENT', NULL),
(14, 3, 2, 'BSHRM', 'BACHELOR OF SCIENCE IN HOTEL AND RESTAURANT MANAGEMENT', NULL),
(15, 4, 2, 'AB', 'BACHELOR OF ARTS IN PSYCHOLOGY-PSYCHOLOGY', 'PSYCHOLOGY'),
(16, 4, 2, 'AB', 'BACHELOR OF ARTS IN PSYCHOLOGY-ENGLISH LANGUAGE', 'ENGLISH LANGUAGE'),
(17, 5, 2, 'BSCRIM', 'BACHELOR OF SCIENCE IN CRIMINOLOGY', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `set_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_status` varchar(255) NOT NULL,
  PRIMARY KEY (`set_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`set_id`, `semester`, `academic_year`, `site_name`, `site_status`) VALUES
(1, '1', '2022-2023', 'LMS', 'production');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

DROP TABLE IF EXISTS `student_course`;
CREATE TABLE IF NOT EXISTS `student_course` (
  `stud_cou_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `join_status` varchar(100) NOT NULL,
  `date_join` varchar(100) NOT NULL,
  PRIMARY KEY (`stud_cou_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`stud_cou_id`, `user_id`, `course_id`, `join_status`, `date_join`) VALUES
(1, 2, 1, '1', '2022-09-16 16:30:34'),
(2, 3, 1, '1', '2022-09-17 15:24:47'),
(3, 2, 11, '1', '2022-09-23 02:32:25 pm'),
(4, 2, 5, '1', '2022-09-23 02:33:31 pm'),
(5, 2, 2, '1', '2022-09-23 02:37:22 pm');

-- --------------------------------------------------------

--
-- Table structure for table `student_course_group`
--

DROP TABLE IF EXISTS `student_course_group`;
CREATE TABLE IF NOT EXISTS `student_course_group` (
  `stud_cou_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `date_creted` datetime NOT NULL,
  PRIMARY KEY (`stud_cou_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_course_group_members`
--

DROP TABLE IF EXISTS `student_course_group_members`;
CREATE TABLE IF NOT EXISTS `student_course_group_members` (
  `stud_cou_group_mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_cou_group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `join_status` varchar(100) NOT NULL,
  `date_join` datetime NOT NULL,
  PRIMARY KEY (`stud_cou_group_mem_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_id` int(11) DEFAULT NULL,
  `camp_id` int(11) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `name_ex` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `profile_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `prog_id`, `camp_id`, `user_type`, `id_number`, `email`, `password`, `token`, `status`, `fname`, `mname`, `lname`, `name_ex`, `sex`, `phone`, `designation`, `profile_status`) VALUES
(1, 1, 1, 'instructor', NULL, 'dimailignoel18@gmail.com', '$2y$04$XupUyzwFgKv21o9tMRPUdu9JSNbbpp.yWAx58oXydEj/qvFxHsx/y', NULL, NULL, 'Leth', 'Villar', 'Pine', NULL, NULL, NULL, NULL, NULL),
(2, 1, 1, 'student', NULL, 'lileth@gmail.com', '$2y$04$XupUyzwFgKv21o9tMRPUdu9JSNbbpp.yWAx58oXydEj/qvFxHsx/y', NULL, NULL, 'Lileth', 'Villar', 'Pine', NULL, NULL, NULL, NULL, NULL),
(3, 1, 1, 'student', NULL, 'noel@gmail.com', '$2y$04$XupUyzwFgKv21o9tMRPUdu9JSNbbpp.yWAx58oXydEj/qvFxHsx/y', NULL, NULL, 'Noel', 'Manalo', 'Dimailig', NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
