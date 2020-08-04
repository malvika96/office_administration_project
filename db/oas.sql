-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 08:09 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonafied`
--

CREATE TABLE `bonafied` (
  `bono_id` int(11) NOT NULL,
  `re_no` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `student_id` int(100) DEFAULT NULL,
  `gender1` varchar(20) DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `stream_id` int(10) DEFAULT NULL,
  `roll_no` varchar(30) DEFAULT NULL,
  `academic_year` varchar(30) DEFAULT NULL,
  `bonafied_purpose_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonafied`
--

INSERT INTO `bonafied` (`bono_id`, `re_no`, `date`, `student_id`, `gender1`, `class_id`, `stream_id`, `roll_no`, `academic_year`, `bonafied_purpose_id`) VALUES
(9, 'TC/01/2018/81', '08/04/2018', 5, 'her', 11, 3, '15BCAA20', '2017-2018', 2),
(10, 'TC/01/2018/02', '2018-04-02', 1, 'her', 11, 3, '15BCAA20', '2017-2018', 3),
(11, 'TC/01/2018/06', '18/04/2018', 4, 'her', 10, 3, '15BCAA20', '2016-2017', 1),
(12, 'TC/01/2018/03', '2018-04-06', 3, 'her', 11, 3, '15BCAA12', '2016-2017', 2),
(15, 'TC/01/2018/04', '17/04/2018', 3, 'his', 10, 3, '15BCAA12', '2017-2018', 1),
(16, 'TC/01/2018/05', '13/04/2018', 3, 'his', 12, 4, '15BCAA21', '2017-2018', 1),
(17, 'TC/01/2018/100', '19/04/2018', 3, 'his', 9, 3, '15BCAA20', '2017-2018', 1),
(18, 'TC/01/2018/101', '19/04/2018', 0, 'his', 9, 3, '15BCAA21', '2017-2018', 1),
(19, 'TC/01/2018/103', '19/04/2018', 0, 'his', 10, 3, '15BCAA20', '2017-2018', 1),
(20, 'TC/01/2018/104', '20/04/2018', 3, 'his', 9, 3, '15BCAA21', '2017-2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bonafied_purpose`
--

CREATE TABLE `bonafied_purpose` (
  `bonafied_purpose_id` int(11) NOT NULL,
  `purpose_of_bonafied` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonafied_purpose`
--

INSERT INTO `bonafied_purpose` (`bonafied_purpose_id`, `purpose_of_bonafied`) VALUES
(1, 'passport'),
(2, 'Bank Account'),
(3, 'Passport'),
(4, 'Driving License ');

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

CREATE TABLE `circular` (
  `circular_id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circular`
--

INSERT INTO `circular` (`circular_id`, `title`, `date`, `description`) VALUES
(3, 'Internal exam', '26/07/2020', ' Schedule for internal exam.'),
(4, 'Convocation', '10/04/2018', 'Farewell is on 20-03-2018.'),
(5, 'Sport', '30/01/2018', 'Sports day is on 1-2-2018.'),
(6, 'internal exam', '02/04/2018', 'exam starts from 10april.');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contacts_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contacts_id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'jay patel', 'jay@gmail.com', 8866721511, 'admission', 'Which is best BBa or BCA?'),
(2, 'nitu soni', 'nitu@gmail.com', 7778889994, 'sport', 'Is sport event conducted ever year?'),
(4, 'malvika nannavare', 'malvika@gmail.com', 1234567892, 'fees', 'What is the fees of bca sem-1?'),
(5, 'roni tadvi', 'roni@gmail.com', 7567565239, 'library', 'What is the duration of issued book?');

-- --------------------------------------------------------

--
-- Table structure for table `eng_proficiency`
--

CREATE TABLE `eng_proficiency` (
  `eng_proficiency_id` int(11) NOT NULL,
  `ref_no` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `stream_name` varchar(200) DEFAULT NULL,
  `student_id` varchar(200) DEFAULT NULL,
  `start_year` varchar(30) DEFAULT NULL,
  `end_year` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eng_proficiency`
--

INSERT INTO `eng_proficiency` (`eng_proficiency_id`, `ref_no`, `date`, `stream_name`, `student_id`, `start_year`, `end_year`) VALUES
(5, 'TC/01/2018/06', '03/04/2018', 'Bachlor Of Computer Application', '3', '2017', '2017'),
(6, 'TC/05/2018/03', '03/04/2018', 'Bachlor Of Computer Application', '5', '2016', '2016'),
(7, 'TC/05/2018/04', '12/04/2018', 'Bachlor Of Computer Application', '3', '2017', '2017'),
(8, 'TC/05/2018/05', '10/04/2018', 'Bachlor Of Computer Application', '3', '2017', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_circular`
--

CREATE TABLE `faculty_circular` (
  `fcircular_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_circular`
--

INSERT INTO `faculty_circular` (`fcircular_id`, `title`, `date`, `description`) VALUES
(1, 'Sport', '02/01/2018', 'sports day event is on 5th january 2018'),
(2, 'External exam', '10/04/2018', 'External exam starts from 20-04-2018.'),
(3, 'Sport', '02/01/2018', 'sports day event is on 5th January 2018.');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_notice`
--

CREATE TABLE `faculty_notice` (
  `fnotice_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_notice`
--

INSERT INTO `faculty_notice` (`fnotice_id`, `title`, `date`, `description`) VALUES
(1, 'exam notice ', '12/03/2018', 'BBA external exam starts on 02/04/2018'),
(2, 'Farewell', '05/04/2018', 'Venue of farewell is Takshasilaa college.'),
(3, 'Sport', '10/04/2018', 'Sports day is on 15-04-2018.');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_registeration`
--

CREATE TABLE `faculty_registeration` (
  `faculty_registeration_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `password` varchar(5000) DEFAULT NULL,
  `photo` varchar(50000) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `qualification` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_registeration`
--

INSERT INTO `faculty_registeration` (`faculty_registeration_id`, `first_name`, `last_name`, `email`, `role`, `password`, `photo`, `designation`, `address`, `qualification`) VALUES
(13, 'XYZ', 'XYZ', 'xyz@gmail.com', 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 'network admin', 'balajinagar', 'MCA'),
(14, 'abc', 'abc', 'abc@gmail.com', 'Faculty', '202cb962ac59075b964b07152d234b70', 'Aviary Stock Photo 1.png', 'Programmer', 'A-2 Pragati Nagar New VIP Road, vadodara ', 'M.C.A');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `feedback` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `first_name`, `last_name`, `email`, `feedback`) VALUES
(1, 'malvika', 'nannavare', 'nnnnnnnn@gmail.com', 'good services'),
(2, 'Hitesh', 'chauhan', 'hitesh@gmail.com', 'excellent\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(5000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`) VALUES
(10, 'IMG-20160227-WA0014.jpg'),
(4, 'DSC_0298.JPG'),
(5, 'DSC02421.JPG'),
(6, 'IMG_20160504_105155.jpg'),
(7, 'IMG_20160504_114216.jpg'),
(8, 'IMG-20160302-WA0050.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `meeting_id` int(11) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `members` int(11) DEFAULT NULL,
  `agenda` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `conclusion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeting_id`, `date`, `members`, `agenda`, `description`, `conclusion`) VALUES
(4, '03/04/2018', 8, 'Internal exam', 'project internal exam starts from 03/04/2018 to 10/04/2018', 'Each day has exam of 6 groups.'),
(5, '09/04/2018', 20, 'farewell', 'Invitation card distribution of farewell.', 'farewell party is on 15-04-2018.'),
(6, '23/04/2018', 55, 'abc', 'jjgjhfjy', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `discription` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `discription`) VALUES
(1, 'External Exam  starts on  12th march 2018,  please collect your admit card, and stick your photo on your admit card'),
(2, 'Internal Exam date 27-03-2018'),
(4, '24*7 admission open\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `date`, `description`) VALUES
(1, 'Holiday Notice', '2018-04-12', 'Pateti holiday on 19/04/2018'),
(2, 'Farewell', '2018-04-16', 'Venue is Takshashilaa College.'),
(3, 'Assignment Submition', '2018-04-10', 'Date for final submission of assignment is 20/04/2018');

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `recommendation_id` int(11) NOT NULL,
  `ref_no` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `gender1` varchar(20) DEFAULT NULL,
  `stream_id` int(11) NOT NULL,
  `stream_name` varchar(200) DEFAULT NULL,
  `subject1` varchar(200) DEFAULT NULL,
  `subject2` varchar(100) DEFAULT NULL,
  `faculty_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommendation`
--

INSERT INTO `recommendation` (`recommendation_id`, `ref_no`, `date`, `student_id`, `gender`, `gender1`, `stream_id`, `stream_name`, `subject1`, `subject2`, `faculty_name`) VALUES
(4, 'TC/01/2018/01', '15/03/2018', 3, 'she', 'her', 3, 'Bachlor Of Computer Application', 'Communication Skills', 'Php & My sql', 'Hetal Kothiya'),
(6, 'TC/01/2018/02', '08/04/2018', 3, 'she', 'her', 3, 'Bachlor Of Computer Application', 'Organization Structure & behavior', 'Mathematics', 'Dhara Parekh'),
(7, 'TC/02/2018/03', '11/04/2018', 3, 'she', 'her', 4, 'Bachlor Of Computer Application', 'Organization Structure & behavior', 'Mathematics', 'Dhara Parekh');

-- --------------------------------------------------------

--
-- Table structure for table `semester_details`
--

CREATE TABLE `semester_details` (
  `semester_id` int(11) NOT NULL,
  `stream_id` int(20) DEFAULT NULL,
  `class_id` int(20) DEFAULT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_details`
--

INSERT INTO `semester_details` (`semester_id`, `stream_id`, `class_id`, `semester`) VALUES
(11, 3, 9, 'SEM-II'),
(12, 3, 10, 'SEM-IV'),
(13, 4, 12, 'SEM-II'),
(14, 3, 11, 'SEM-V'),
(16, 3, 11, 'SEM-VI'),
(17, 4, 13, 'SEM-III'),
(18, 4, 13, 'SEM-IV'),
(19, 4, 14, 'SEM-V'),
(20, 4, 14, 'SEM-VI'),
(21, 4, 12, 'SEM-I'),
(22, 3, 9, 'SEM-I'),
(23, 3, 10, 'SEM-III'),
(24, 5, 15, 'SEM-1');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `stream_id` int(11) NOT NULL,
  `stream` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`stream_id`, `stream`) VALUES
(3, 'BCA'),
(4, 'BBA'),
(5, 'Bcom');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `student_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `dob` date NOT NULL,
  `stream_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`student_id`, `name`, `address`, `city`, `pin`, `mobile`, `email`, `dob`, `stream_id`, `class_id`) VALUES
(1, 'MALVIKA LALITCHANDRA NANNAVARE', 'A-2 Prkurti ternaments....', 'Vadodara', 390017, 8487045482, 'nannavaremalvika@gmail.com', '1996-06-23', 4, 12),
(3, 'NITU SONI KRISHANKUMAR', 'B-20 Pragtinagar NEW VIP road,', 'Vadodara', 390022, 9428017764, 'soninitu@gmail.com', '1996-06-01', 4, 12),
(4, 'KARAN LALITCHANDRA NANNAVARE', 'B-20 Pragtinagar NEW VIP road,', 'Mumbai', 390023, 7567565239, 'karannannavare@gmail.com', '2002-05-05', 3, 11),
(5, 'BINNI JAYANTIBHAI SHAH', 'kaladrashan wagodiya road', 'Vadodara', 390017, 9924352002, 'binnishah@gmail.com', '2018-04-02', 4, 13),
(6, 'HIREN PATEL ANILBHAI', 'A-2 Gandhi nagar,\r\nkarelibag,\r\n', 'Vadodara', 390022, 9998268980, 'hiren@gmail.com', '2018-04-03', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_request`
--

CREATE TABLE `student_request` (
  `student_request_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ph_no` varchar(10) DEFAULT NULL,
  `forms` varchar(200) DEFAULT NULL,
  `marksheet` varchar(10000) DEFAULT NULL,
  `lc` varchar(10000) DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_request`
--

INSERT INTO `student_request` (`student_request_id`, `name`, `email`, `ph_no`, `forms`, `marksheet`, `lc`, `remarks`, `status`) VALUES
(14, 'malvika l. nannavare', 'thakor771981@gmail.com', '8487045482', 'Transferrence_Form', 'Scan.jpg', 'Scan010008.jpg', 'give me before 30-04-2018.', 'Aprove'),
(18, 'malvika l. nannavare', 'thakor771981@gmail.com', '8866721511', 'Bonafied Form', '', '', 'jgjg', 'Aprove'),
(19, 'nisha', 'thakor771981@gmail.com', '8866721511', 'Bonafied Form', '', '', 'for passport purpose.', 'Aprove');

-- --------------------------------------------------------

--
-- Table structure for table `transferrence`
--

CREATE TABLE `transferrence` (
  `transferrence_id` int(11) NOT NULL,
  `tc_no` varchar(30) DEFAULT NULL,
  `student_id` varchar(60) DEFAULT NULL,
  `gndrms` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `gender1` varchar(20) DEFAULT NULL,
  `enrollment` varchar(100) DEFAULT NULL,
  `enroll_date` varchar(20) DEFAULT NULL,
  `stream_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `semfive` varchar(20) DEFAULT NULL,
  `semsix` varchar(20) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `passed_year` int(20) DEFAULT NULL,
  `seat_no` int(11) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `print_date` varchar(20) DEFAULT NULL,
  `department_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transferrence`
--

INSERT INTO `transferrence` (`transferrence_id`, `tc_no`, `student_id`, `gndrms`, `gender`, `gender1`, `enrollment`, `enroll_date`, `stream_id`, `class_id`, `semfive`, `semsix`, `semester_id`, `passed_year`, `seat_no`, `dob`, `print_date`, `department_id`) VALUES
(7, 'TC/TY/15BCAA30', '4', 'Mr', 'he', 'his', 'E9874444464', '01/04/2018', 3, 11, '2015', '2016', 16, 2016, 8888, '03/04/2018', '04/04/2018', 3),
(8, 'TC/TY/15BCAA31', '3', 'Miss', 'she', 'her', 'E1235648974', '06/03/2018', 3, 11, '2015', '2015', 16, 2015, 4123, '01/03/2018', '01/03/2018', 3),
(12, 'TC/TY/15BCAA34', '5', 'Miss', 'she', 'her', 'E992435200222', '01/04/2018', 4, 13, '2017', '2017', 17, 2018, 2303, '02/04/2018', '04/04/2018', 3),
(21, 'TC/TY/15BCAA21', '3', 'Miss', 'she', 'her', 'E123456789123', '03/04/2018', 3, 11, '2017', '2018', 16, 2018, 1212, '05/04/2018', '04/04/2018', 3),
(22, 'TC/TY/15BCAA22', '3', 'Miss', 'she', 'her', 'Eno12121245445', '11/04/2018', 4, 14, '2017', '2018', 20, 2018, 2222, '06/04/2018', '16/04/2018', 3),
(23, 'TC/TY/15BCAA20', '5', 'Miss', 'she', 'her', 'E145588888', '17/04/2018', 3, 10, '2017', '2018', 23, 2018, 1227, '02/04/2018', '17/04/2018', 4);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_class`
--

CREATE TABLE `type_of_class` (
  `class_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `class` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_class`
--

INSERT INTO `type_of_class` (`class_id`, `stream_id`, `class`) VALUES
(9, 3, 'FY'),
(10, 3, 'SY'),
(11, 3, 'TY'),
(12, 4, 'FY'),
(13, 4, 'SY'),
(14, 4, 'TY'),
(15, 5, 'FY');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`uid`, `first_name`, `last_name`, `email`, `password`) VALUES
(12, 'student', 'ad', 'student@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `vnsgu_department`
--

CREATE TABLE `vnsgu_department` (
  `department_id` int(11) NOT NULL,
  `dept` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vnsgu_department`
--

INSERT INTO `vnsgu_department` (`department_id`, `dept`) VALUES
(3, 'Dept. of Computer Science & I.T .'),
(4, 'Dept. of  Management,'),
(5, 'mgnt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonafied`
--
ALTER TABLE `bonafied`
  ADD PRIMARY KEY (`bono_id`);

--
-- Indexes for table `bonafied_purpose`
--
ALTER TABLE `bonafied_purpose`
  ADD PRIMARY KEY (`bonafied_purpose_id`);

--
-- Indexes for table `circular`
--
ALTER TABLE `circular`
  ADD PRIMARY KEY (`circular_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contacts_id`);

--
-- Indexes for table `eng_proficiency`
--
ALTER TABLE `eng_proficiency`
  ADD PRIMARY KEY (`eng_proficiency_id`);

--
-- Indexes for table `faculty_circular`
--
ALTER TABLE `faculty_circular`
  ADD PRIMARY KEY (`fcircular_id`);

--
-- Indexes for table `faculty_notice`
--
ALTER TABLE `faculty_notice`
  ADD PRIMARY KEY (`fnotice_id`);

--
-- Indexes for table `faculty_registeration`
--
ALTER TABLE `faculty_registeration`
  ADD PRIMARY KEY (`faculty_registeration_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`recommendation_id`);

--
-- Indexes for table `semester_details`
--
ALTER TABLE `semester_details`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_request`
--
ALTER TABLE `student_request`
  ADD PRIMARY KEY (`student_request_id`);

--
-- Indexes for table `transferrence`
--
ALTER TABLE `transferrence`
  ADD PRIMARY KEY (`transferrence_id`);

--
-- Indexes for table `type_of_class`
--
ALTER TABLE `type_of_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `vnsgu_department`
--
ALTER TABLE `vnsgu_department`
  ADD PRIMARY KEY (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonafied`
--
ALTER TABLE `bonafied`
  MODIFY `bono_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `bonafied_purpose`
--
ALTER TABLE `bonafied_purpose`
  MODIFY `bonafied_purpose_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `circular`
--
ALTER TABLE `circular`
  MODIFY `circular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contacts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `eng_proficiency`
--
ALTER TABLE `eng_proficiency`
  MODIFY `eng_proficiency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `faculty_circular`
--
ALTER TABLE `faculty_circular`
  MODIFY `fcircular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculty_notice`
--
ALTER TABLE `faculty_notice`
  MODIFY `fnotice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculty_registeration`
--
ALTER TABLE `faculty_registeration`
  MODIFY `faculty_registeration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recommendation`
--
ALTER TABLE `recommendation`
  MODIFY `recommendation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `semester_details`
--
ALTER TABLE `semester_details`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student_detail`
--
ALTER TABLE `student_detail`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student_request`
--
ALTER TABLE `student_request`
  MODIFY `student_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `transferrence`
--
ALTER TABLE `transferrence`
  MODIFY `transferrence_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `type_of_class`
--
ALTER TABLE `type_of_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vnsgu_department`
--
ALTER TABLE `vnsgu_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

