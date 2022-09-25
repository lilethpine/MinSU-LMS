-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2022 at 01:08 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_description` mediumtext NOT NULL,
  `units` int(11) NOT NULL,
  `room` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `payment_account` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_activity`
--

DROP TABLE IF EXISTS `course_activity`;
CREATE TABLE IF NOT EXISTS `course_activity` (
  `cou_act_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `cou_grade_criteria_id` int(11) NOT NULL,
  `cou_batch_grad_id` int(11) NOT NULL,
  `act_title` varchar(100) NOT NULL,
  `act_desc` mediumtext NOT NULL,
  `act_attachments` varchar(100) NOT NULL,
  `act_status` varchar(100) NOT NULL,
  `date_posted` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `cou_topic_id` int(11) NOT NULL,
  PRIMARY KEY (`cou_act_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
  `stud_cou_group_id` int(11) NOT NULL,
  `cou_act_id` int(11) NOT NULL,
  `response_type` varchar(255) NOT NULL,
  `group_title` varchar(100) NOT NULL,
  `attachments` varchar(100) NOT NULL,
  `submission_status` varchar(100) NOT NULL,
  `date_submitted` datetime NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  PRIMARY KEY (`cou_act_stud_res_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_announcement`
--

DROP TABLE IF EXISTS `course_announcement`;
CREATE TABLE IF NOT EXISTS `course_announcement` (
  `cou_ann_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `ann_status` varchar(100) NOT NULL,
  `date_posted` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`cou_ann_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
  `mat_title` varchar(255) NOT NULL,
  `mat_desc` mediumtext NOT NULL,
  `mat_attachments` varchar(255) NOT NULL,
  `mat_status` varchar(100) NOT NULL,
  `date_posted` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `cou_topic_id` int(11) NOT NULL,
  PRIMARY KEY (`cou_mat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
  `coll_code` varchar(255) NOT NULL,
  `coll_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`prog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
  `date_join` datetime NOT NULL,
  PRIMARY KEY (`stud_cou_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
  `prog_id` int(11) NOT NULL,
  `camp_id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `name_ex` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `profile_status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
