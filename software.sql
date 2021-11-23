-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 10:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `assview`
-- (See below for the actual view)
--
CREATE TABLE `assview` (
`id1` varchar(100)
,`first_name` varchar(100)
,`second_name` varchar(100)
,`password` varchar(100)
,`ta_id` varchar(11)
,`course_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `assview1`
-- (See below for the actual view)
--
CREATE TABLE `assview1` (
`id1` varchar(100)
,`first_name` varchar(100)
,`second_name` varchar(100)
,`password` varchar(100)
,`ta_id` varchar(11)
,`course_id` int(11)
,`id` int(11)
,`name` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'software'),
(2, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `student_id` varchar(11) NOT NULL,
  `couse_id` int(11) NOT NULL,
  `mark_name` varchar(15) NOT NULL,
  `mark` int(11) NOT NULL,
  `mark_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`student_id`, `couse_id`, `mark_name`, `mark`, `mark_id`) VALUES
('117', 1, 'first', 966, 1),
('118', 1, 'second', 5555, 12),
('118', 2, 'final', 5, 16),
('118', 2, 'final', 3, 17),
('118', 2, 'final', 60, 18),
('118', 2, 'secondd', 100, 19);

-- --------------------------------------------------------

--
-- Stand-in structure for view `marksview`
-- (See below for the actual view)
--
CREATE TABLE `marksview` (
`id` varchar(11)
,`first_name` varchar(11)
,`last_name` varchar(11)
,`password` varchar(11)
,`student_id` varchar(11)
,`couse_id` int(11)
,`mark_name` varchar(15)
,`mark` int(11)
,`mark_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`id`, `first_name`, `second_name`, `password`) VALUES
('p117', 'ashrat', 'hi', '0599'),
('p118', 'shatha', 'ajaj', '0599');

-- --------------------------------------------------------

--
-- Table structure for table `prof_course`
--

CREATE TABLE `prof_course` (
  `course_id` int(11) NOT NULL,
  `prof_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prof_course`
--

INSERT INTO `prof_course` (`course_id`, `prof_id`) VALUES
(1, 'p117'),
(2, 'p118');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(11) NOT NULL,
  `first_name` varchar(11) NOT NULL,
  `last_name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `password`) VALUES
('117', 'osama', 'd', '0599'),
('118', 'mohammad', 'taha', '0599');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `student_id` varchar(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`student_id`, `course_id`) VALUES
('117', 1),
('118', 1),
('118', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_reg`
-- (See below for the actual view)
--
CREATE TABLE `student_reg` (
`id` varchar(11)
,`first_name` varchar(11)
,`last_name` varchar(11)
,`password` varchar(11)
,`student_id` varchar(11)
,`course_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `ta_course`
--

CREATE TABLE `ta_course` (
  `ta_id` varchar(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ta_course`
--

INSERT INTO `ta_course` (`ta_id`, `course_id`) VALUES
('t118', 1),
('t118', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_a`
--

CREATE TABLE `t_a` (
  `id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_a`
--

INSERT INTO `t_a` (`id`, `first_name`, `second_name`, `password`) VALUES
('t118', 'hala', 'amoor', '0599');

-- --------------------------------------------------------

--
-- Structure for view `assview`
--
DROP TABLE IF EXISTS `assview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `assview`  AS SELECT `t_a`.`id` AS `id1`, `t_a`.`first_name` AS `first_name`, `t_a`.`second_name` AS `second_name`, `t_a`.`password` AS `password`, `ta_course`.`ta_id` AS `ta_id`, `ta_course`.`course_id` AS `course_id` FROM (`t_a` join `ta_course`) WHERE `t_a`.`id` = `ta_course`.`ta_id` ;

-- --------------------------------------------------------

--
-- Structure for view `assview1`
--
DROP TABLE IF EXISTS `assview1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `assview1`  AS SELECT `assview`.`id1` AS `id1`, `assview`.`first_name` AS `first_name`, `assview`.`second_name` AS `second_name`, `assview`.`password` AS `password`, `assview`.`ta_id` AS `ta_id`, `assview`.`course_id` AS `course_id`, `course`.`id` AS `id`, `course`.`name` AS `name` FROM (`assview` join `course` on(`assview`.`course_id` = `course`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `marksview`
--
DROP TABLE IF EXISTS `marksview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `marksview`  AS SELECT `student`.`id` AS `id`, `student`.`first_name` AS `first_name`, `student`.`last_name` AS `last_name`, `student`.`password` AS `password`, `marks`.`student_id` AS `student_id`, `marks`.`couse_id` AS `couse_id`, `marks`.`mark_name` AS `mark_name`, `marks`.`mark` AS `mark`, `marks`.`mark_id` AS `mark_id` FROM (`student` join `marks`) WHERE `student`.`id` = `marks`.`student_id` ;

-- --------------------------------------------------------

--
-- Structure for view `student_reg`
--
DROP TABLE IF EXISTS `student_reg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_reg`  AS SELECT `student`.`id` AS `id`, `student`.`first_name` AS `first_name`, `student`.`last_name` AS `last_name`, `student`.`password` AS `password`, `student_course`.`student_id` AS `student_id`, `student_course`.`course_id` AS `course_id` FROM (`student` join `student_course` on(`student`.`id` = `student_course`.`student_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mark_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `couse_id` (`couse_id`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prof_course`
--
ALTER TABLE `prof_course`
  ADD KEY `course_id` (`course_id`),
  ADD KEY `prof_id` (`prof_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `ta_course`
--
ALTER TABLE `ta_course`
  ADD KEY `ta_id` (`ta_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `t_a`
--
ALTER TABLE `t_a`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`couse_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `prof_course`
--
ALTER TABLE `prof_course`
  ADD CONSTRAINT `prof_course_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `prof` (`id`),
  ADD CONSTRAINT `prof_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `ta_course`
--
ALTER TABLE `ta_course`
  ADD CONSTRAINT `ta_course_ibfk_1` FOREIGN KEY (`ta_id`) REFERENCES `t_a` (`id`),
  ADD CONSTRAINT `ta_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
