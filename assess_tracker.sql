-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 12:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assess_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessID` int(11) NOT NULL,
  `assessName` varchar(64) NOT NULL,
  `assessDescription` text NOT NULL,
  `assessDueDate` datetime DEFAULT NULL,
  `unitID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessID`, `assessName`, `assessDescription`, `assessDueDate`, `unitID`) VALUES
(3, 'Portfolio', 'Create a Portfolio', '2021-08-31 18:53:00', 2),
(4, 'Quiz', 'Perform the quiz', '2021-09-28 18:53:00', 2),
(9, 'Portfolio', 'Create a Portfolio', '2021-10-27 18:53:00', 7),
(10, 'Quiz', 'Perform the Quiz', '2021-11-17 18:53:00', 7),
(11, 'Portfolio', 'Create the Portfolio', '2021-10-28 18:53:00', 8),
(12, 'Quiz', 'Perform the Quiz', '2021-11-17 18:53:00', 8),
(13, 'Portfolio', 'Create a Portfolio', '2021-11-17 18:53:00', 9),
(15, 'Portfolio', 'Create a Portfolio', '2021-11-17 18:53:00', 10),
(16, 'Quiz', 'Perform the quiz', '2021-12-15 18:53:00', 10),
(17, 'Portfolio', 'Create a portfolio', '2021-11-17 18:53:00', 11),
(18, 'Quiz', 'Perform the quiz', '2021-12-29 18:53:00', 11),
(19, 'Portfolio', 'Create a Portfolio', '2022-01-12 18:53:00', 12),
(20, 'Quiz', 'Perform the quiz', '2022-01-19 18:53:00', 12),
(21, 'Portfolio', 'Create a portfolio', '2022-01-19 18:53:00', 13),
(22, 'Quiz', 'perform the quiz', '2022-01-19 18:53:00', 13),
(23, 'Portfolio', 'Create a portfolio', '2022-02-16 18:53:00', 14),
(24, 'Quiz', 'Perform the quiz', '2022-02-16 18:53:00', 14),
(25, 'Portfolio', 'Create the portfolio', '2022-02-16 18:53:00', 15),
(26, 'Quiz', 'Perform the quiz', '2022-02-16 18:53:00', 15),
(27, 'Portfolio', 'Create the portfolio', '2022-02-16 18:53:00', 16),
(28, 'Quiz', 'Perform the quiz', '2022-02-16 18:53:00', 16),
(29, 'Portfolio', 'Create the portfolio', '2022-03-16 18:53:00', 17),
(30, 'Quiz', 'Perform the quiz', '2022-03-16 18:53:00', 17),
(31, 'Portfolio', 'Create a portfolio', '2022-03-16 18:53:00', 18),
(32, 'Quiz', 'Perform the quiz', '2022-03-16 18:53:00', 18),
(33, 'Portfolio', 'Create a portfolio', '2022-04-13 18:53:00', 19),
(34, 'Quiz', 'Perform the quiz', '2022-04-20 18:53:00', 19),
(35, 'Portfolio', 'Create a portfolio', '2022-04-20 18:53:00', 20),
(36, 'Quiz', 'perform the quiz', '2022-04-13 18:53:00', 20),
(38, 'Quiz', 'Perform the quiz', '2022-05-18 18:53:00', 21),
(39, 'Portfolio', 'Create the portfolio', '2022-06-15 18:53:00', 22),
(40, 'Quiz', 'Perform the quiz', '2022-06-15 18:53:00', 22);

-- --------------------------------------------------------

--
-- Table structure for table `enrol`
--

CREATE TABLE `enrol` (
  `enID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `assessID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `unitID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrol`
--

INSERT INTO `enrol` (`enID`, `date`, `assessID`, `studentID`, `unitID`) VALUES
(1, '2021-08-15 04:38:56', 9, 2, 9),
(2, '2021-08-15 04:38:58', 10, 2, 10),
(4, '2021-08-15 04:43:05', 3, 2, 2),
(5, '2021-08-15 04:43:16', 3, 2, 2),
(6, '2021-08-15 04:43:38', 4, 2, 2),
(7, '2021-08-15 04:44:13', 3, 2, 2),
(8, '2021-08-15 04:44:15', 3, 2, 2),
(9, '2021-08-16 11:31:30', 3, 3, 2),
(10, '2021-08-16 11:31:32', 4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `stFirstName` varchar(64) NOT NULL,
  `stLastName` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` char(64) NOT NULL,
  `salt` char(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `stFirstName`, `stLastName`, `username`, `email`, `password`, `salt`) VALUES
(2, 'Joshua', 'Joshua', 'joshuaSmith', 'joshua@gmail.com', 'a2c32999a51fab32dfadbf37cd4f2d232b6f212b7c9c7abf444d1ed2f9deeba4', 'b61fef29addec64b57076a1172e100c4'),
(3, 'Mark', 'Mark', 'MarkGreen', 'mark@gmail.com', 'c1ea3dc5597cb85561dfc23d852108c2edc6336ed04cdf879cdf5a7fbbf12ff8', 'ae6f8993cfceda707e4cb5006355f877');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unitID` int(11) NOT NULL,
  `unitName` varchar(64) NOT NULL,
  `unitNumber` int(11) NOT NULL,
  `unitDescription` text NOT NULL,
  `unitDueDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unitID`, `unitName`, `unitNumber`, `unitDescription`, `unitDueDate`) VALUES
(1, 'Develop complex cascading stylesheets', 506, 'Use CSS to style your Websites.', '2021-09-30 18:22:51'),
(2, 'Develop complex web page layouts', 505, 'Use HTML5 and the semantic elements to build websites.', '2021-09-30 18:22:51'),
(5, 'Contribute to copyright, ethics and privacy in an IT environment', 418, 'Create copyright ethics, and privacy policies.', '2021-10-30 18:36:49'),
(6, 'Develop website information architecture', 508, 'Plan and create the website architecture.\r\n', '2021-10-30 18:36:49'),
(7, 'Design a database', 502, 'Learn databases design techniques. ', '2021-11-30 18:36:49'),
(8, 'Build a database', 415, 'Build a relational database with SQL and MySQL.', '2021-11-30 18:36:49'),
(9, 'Ensure a safe workplace', 501, 'Health and safety procedures for the workplace.', '2021-12-31 18:36:49'),
(10, 'Use structured query language', 425, 'Use SQL to create, read, update, delete databases.', '2021-12-31 18:36:49'),
(11, 'Create dynamic web pages', 5002, 'Use front end technologies to create interactive websites.', '2022-01-31 18:36:49'),
(12, 'Integrate database with a website', 504, 'Use PHP and SQL to create a dynamic website.', '2022-01-31 18:36:49'),
(13, 'Build a dynamic website', 5001, 'Use PHP and JavaScript to create a dynamic and interactive website.', '2022-02-28 18:36:49'),
(14, 'Build a document using eXtensible markup language', 5004, 'Use XML to create documents.', '2022-03-31 18:36:49'),
(15, 'Implement quality assurance process for websites', 511, 'Ensure the website complies with quality assurance.', '2022-03-31 18:36:49'),
(16, 'Validate quality and completeness of system design specification', 503, 'Ensure that the quality of the system is up to standards.', '2022-03-31 18:36:49'),
(17, 'Verify client business requirements', 515, 'Gather and develop business requirements.', '2022-04-30 18:36:49'),
(18, 'Customise a complex IT content management system', 507, 'Create a website with the use of a CMS.', '2022-04-30 18:36:49'),
(19, 'Develop and conduct client acceptance test', 50004, 'Conduct client acceptance test.', '2022-05-31 18:36:49'),
(20, 'Manage IT Projects', 50001, 'Manage a project.', '2022-06-30 18:36:49'),
(21, 'Research and apply emerging technology trends', 516, 'Use latest technologies to create a dynamic website.', '2022-06-30 18:36:49'),
(22, 'Create web-based programs', 5003, 'Create a web application.', '2022-07-31 18:36:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessID`),
  ADD KEY `unitID` (`unitID`);

--
-- Indexes for table `enrol`
--
ALTER TABLE `enrol`
  ADD PRIMARY KEY (`enID`),
  ADD KEY `assessID` (`assessID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `unitID` (`unitID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unitID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `enrol`
--
ALTER TABLE `enrol`
  MODIFY `enID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unitID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `assessment_ibfk_1` FOREIGN KEY (`unitID`) REFERENCES `unit` (`unitID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrol`
--
ALTER TABLE `enrol`
  ADD CONSTRAINT `enrol_ibfk_1` FOREIGN KEY (`assessID`) REFERENCES `assessment` (`assessID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrol_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrol_ibfk_3` FOREIGN KEY (`unitID`) REFERENCES `unit` (`unitID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
