-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 04:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_usecase`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentfeedback`
--

CREATE TABLE `studentfeedback` (
  `Academic Year` varchar(50) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Total Students appeared` varchar(100) NOT NULL,
  `Subject:` varchar(100) NOT NULL,
  `knowledge of the subject` varchar(20) NOT NULL,
  `Marks1` int(11) NOT NULL,
  `Coming well prepared for the class` varchar(20) NOT NULL,
  `Marks2` int(11) NOT NULL,
  `Giving Clear Explanation` varchar(20) NOT NULL,
  `Marks3` int(11) NOT NULL,
  `Command of Language` varchar(20) NOT NULL,
  `Marks4` int(11) NOT NULL,
  `Clear and Audible Voice` varchar(20) NOT NULL,
  `Marks5` int(11) NOT NULL,
  `Holding the attention of students through the class` varchar(20) NOT NULL,
  `Marks6` int(11) NOT NULL,
  `providing more matter than in the Text Book` varchar(20) NOT NULL,
  `Marks7` int(11) NOT NULL,
  `Capability to clear the doubts of students` varchar(20) NOT NULL,
  `Marks8` int(11) NOT NULL,
  `Encouraging students to ask questions and participate in discuss` varchar(20) NOT NULL,
  `Marks9` int(11) NOT NULL,
  `Appreciating students as and when deserving` varchar(20) NOT NULL,
  `Marks10` int(11) NOT NULL,
  `Willingness to help students as and when deserving` varchar(20) NOT NULL,
  `Marks11` int(11) NOT NULL,
  `Return of valued and Test Papers/Records in Time` varchar(20) NOT NULL,
  `Marks12` int(11) NOT NULL,
  `Punctuality and following Time Table Schedule` varchar(20) NOT NULL,
  `Marks13` int(11) NOT NULL,
  `Coverage of syllabus` varchar(20) NOT NULL,
  `Marks14` int(11) NOT NULL,
  `Impartial(Treating all students alike)` varchar(20) NOT NULL,
  `Marks15` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentfeedback`
--

INSERT INTO `studentfeedback` (`Academic Year`, `Year`, `Semester`, `Branch`, `Faculty`, `Total Students appeared`, `Subject:`, `knowledge of the subject`, `Marks1`, `Coming well prepared for the class`, `Marks2`, `Giving Clear Explanation`, `Marks3`, `Command of Language`, `Marks4`, `Clear and Audible Voice`, `Marks5`, `Holding the attention of students through the class`, `Marks6`, `providing more matter than in the Text Book`, `Marks7`, `Capability to clear the doubts of students`, `Marks8`, `Encouraging students to ask questions and participate in discuss`, `Marks9`, `Appreciating students as and when deserving`, `Marks10`, `Willingness to help students as and when deserving`, `Marks11`, `Return of valued and Test Papers/Records in Time`, `Marks12`, `Punctuality and following Time Table Schedule`, `Marks13`, `Coverage of syllabus`, `Marks14`, `Impartial(Treating all students alike)`, `Marks15`) VALUES
('2020', '1', '1', '0', '0', '66', '0', '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0),
('2020', '1', '1', '0', '0', '66', '0', '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0),
('9', '4', '1', '22', '8', '2', '1', '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0, '4', 0),
('2020-2024', '1', '1', 'information technology', 'anil sir', '66', 'c', 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0, 'good', 0),
('2020-2024', '1', '1', 'it', 'anilsir', '66', 'c', 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10, 'good', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
