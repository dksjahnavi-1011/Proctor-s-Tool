-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 09:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `usn` varchar(15) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `course_id` int(5) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `pid` int(5) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `ia_1` int(5) NOT NULL,
  `ia_2` int(5) NOT NULL,
  `ia_3` int(5) NOT NULL,
  `final_IA` int(11) NOT NULL,
  `external_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`usn`, `sname`, `course_id`, `course_name`, `dept_id`, `dept_name`, `pid`, `pname`, `ia_1`, `ia_2`, `ia_3`, `final_IA`, `external_marks`) VALUES
('1JT01', 'Abhishek M C', 1851, 'ME for IT Industry', 101, 'Infromation Science and Eng', 201, 'Arjun', 30, 24, 25, 26, 67),
('1JT01', 'Abhishek M C', 1852, 'Computer Networks', 101, 'Infromation Science and Eng', 201, 'Arjun', 22, 24, 27, 24, 56),
('1JT01', 'Abhishek M C', 1853, 'DBMS', 101, 'Infromation Science and Eng', 201, 'Arjun', 28, 22, 19, 23, 45),
('1JT01', 'Abhishek M C', 1854, 'Automata Theory', 101, 'Infromation Science and Eng', 201, 'Arjun', 28, 27, 25, 27, 56),
('1JT01', 'Abhishek M C', 1855, 'Python', 101, 'Infromation Science and Eng', 201, 'Arjun', 22, 21, 15, 19, 45),
('1JT01', 'Abhishek M C', 1856, 'Unix Programming', 101, 'Infromation Science and Eng', 201, 'Arjun', 22, 27, 19, 23, 57),
('1JT01', 'Abhishek M C', 1857, 'CN Laboratory', 101, 'Infromation Science and Eng', 201, 'Arjun', 28, 29, 30, 29, 70),
('1JT01', 'Abhishek M C', 1858, 'DBMS Laboratory', 101, 'Infromation Science and Eng', 201, 'Arjun', 29, 29, 25, 28, 65),
('1JT02', 'Ananya M N', 1851, 'ME for IT Industry', 101, 'Infromation Science and Eng', 201, 'Arjun', 27, 25, 30, 27, 65),
('1JT02', 'Ananya M N', 1852, 'Computer Networks', 101, 'Infromation Science and Eng', 201, 'Arjun', 28, 27, 29, 28, 70),
('1JT02', 'Ananya M N', 1853, 'DBMS', 101, 'Infromation Science and Eng', 201, 'Arjun', 23, 29, 25, 26, 56),
('1JT02', 'Ananya M N', 1854, 'Automata Theory', 101, 'Infromation Science and Eng', 201, 'Arjun', 22, 24, 30, 25, 65),
('1JT02', 'Ananya M N', 1855, 'Python', 101, 'Infromation Science and Eng', 201, 'Arjun', 28, 29, 30, 29, 67),
('1JT02', 'Ananya M N', 1856, 'Unix Programming', 101, 'Infromation Science and Eng', 201, 'Arjun', 23, 29, 25, 26, 45),
('1JT02', 'Ananya M N', 1857, 'CN Laboratory', 101, 'Infromation Science and Eng', 201, 'Arjun', 28, 30, 19, 26, 67),
('1JT02', 'Ananya M N', 1858, 'DBMS Laboratory', 101, 'Infromation Science and Eng', 201, 'Arjun', 22, 29, 30, 27, 56),
('1JT02', 'Ananya M N', 1859, 'EVS', 101, 'Infromation Science and Eng', 201, 'Arjun', 23, 24, 30, 26, 56),
('1JT04', 'Sharanya P Hande', 1851, 'ME for IT Industry', 101, 'Infromation Science and Eng', 202, 'Radha', 23, 24, 25, 24, 65),
('1JT04', 'Sharanya P Hande', 1852, 'Computer Networks', 101, 'Infromation Science and Eng', 202, 'Radha', 22, 29, 30, 27, 65),
('1JT04', 'Sharanya P Hande', 1853, 'DBMS', 101, 'Infromation Science and Eng', 202, 'Radha', 23, 30, 25, 26, 70),
('1JT04', 'Sharanya P Hande', 1854, 'Automata Theory', 101, 'Infromation Science and Eng', 202, 'Radha', 22, 30, 25, 26, 65),
('1JT04', 'Sharanya P Hande', 1855, 'Python', 101, 'Infromation Science and Eng', 202, 'Radha', 28, 24, 25, 26, 56),
('1JT04', 'Sharanya P Hande', 1856, 'Unix Programming', 101, 'Infromation Science and Eng', 202, 'Radha', 30, 24, 25, 26, 65),
('1JT04', 'Sharanya P Hande', 1857, 'CN Laboratory', 101, 'Infromation Science and Eng', 202, 'Radha', 23, 19, 30, 24, 70),
('1JT04', 'Sharanya P Hande', 1858, 'DBMS Laboratory', 101, 'Infromation Science and Eng', 202, 'Radha', 23, 19, 25, 22, 65),
('1JT04', 'Sharanya P Hande', 1859, 'EVS', 101, 'Infromation Science and Eng', 202, 'Radha', 28, 29, 29, 29, 67),
('1JT05', 'Soumya M Hebbar', 1851, 'ME for IT Industry', 101, 'Infromation Science and Eng', 202, 'Radha', 30, 24, 29, 28, 67),
('1JT05', 'Soumya M Hebbar', 1852, 'Computer Networks', 101, 'Infromation Science and Eng', 202, 'Radha', 23, 30, 29, 27, 65),
('1JT05', 'Soumya M Hebbar', 1853, 'DBMS', 101, 'Infromation Science and Eng', 202, 'Radha', 28, 29, 25, 27, 65),
('1JT05', 'Soumya M Hebbar', 1854, 'Automata Theory', 101, 'Infromation Science and Eng', 202, 'Radha', 22, 27, 10, 20, 56),
('1JT05', 'Soumya M Hebbar', 1855, 'Python', 101, 'Infromation Science and Eng', 202, 'Radha', 22, 24, 29, 25, 45),
('1JT05', 'Soumya M Hebbar', 1856, 'Unix Programming', 101, 'Infromation Science and Eng', 202, 'Radha', 30, 30, 19, 26, 67),
('1JT05', 'Soumya M Hebbar', 1857, 'CN Laboratory', 101, 'Infromation Science and Eng', 202, 'Radha', 22, 24, 30, 25, 65),
('1JT05', 'Soumya M Hebbar', 1858, 'DBMS Laboratory', 101, 'Infromation Science and Eng', 202, 'Radha', 23, 29, 19, 24, 67),
('1JT05', 'Soumya M Hebbar', 1859, 'EVS', 101, 'Infromation Science and Eng', 202, 'Radha', 30, 19, 19, 23, 45),
('1JT07', 'Varsha P Shava', 1851, 'ME for IT Industry', 104, 'Computer Science and Eng', 203, 'Sindhu', 22, 19, 25, 22, 67),
('1JT07', 'Varsha P Shava', 1852, 'Computer Networks', 104, 'Computer Science and Eng', 203, 'Sindhu', 28, 30, 29, 29, 45),
('1JT07', 'Varsha P Shava', 1853, 'DBMS', 104, 'Computer Science and Eng', 203, 'Sindhu', 23, 29, 29, 27, 67),
('1JT07', 'Varsha P Shava', 1854, 'Automata Theory', 104, 'Computer Science and Eng', 203, 'Sindhu', 22, 30, 10, 21, 65),
('1JT07', 'Varsha P Shava', 1855, 'Python', 104, 'Computer Science and Eng', 203, 'Sindhu', 28, 19, 29, 25, 56),
('1JT07', 'Varsha P Shava', 1856, 'Unix Programming', 104, 'Computer Science and Eng', 203, 'Sindhu', 30, 24, 19, 24, 65),
('1JT07', 'Varsha P Shava', 1857, 'CN Laboratory', 104, 'Computer Science and Eng', 203, 'Sindhu', 30, 29, 19, 26, 56),
('1JT07', 'Varsha P Shava', 1858, 'DBMS Laboratory', 104, 'Computer Science and Eng', 203, 'Sindhu', 23, 19, 29, 24, 56),
('1JT07', 'Varsha P Shava', 1859, 'EVS', 104, 'Computer Science and Eng', 203, 'Sindhu', 29, 19, 30, 26, 67),
('1JT10', 'Charan B A', 1851, 'ME for IT Industry', 104, 'Computer Science and Eng', 204, 'Varun', 30, 24, 29, 28, 65),
('1JT10', 'Charan B A', 1852, 'Computer Networks', 104, 'Computer Science and Eng', 204, 'Varun', 28, 30, 19, 26, 67),
('1JT10', 'Charan B A', 1853, 'DBMS', 104, 'Computer Science and Eng', 204, 'Varun', 29, 29, 19, 26, 65),
('1JT10', 'Charan B A', 1854, 'Automata Theory', 104, 'Computer Science and Eng', 204, 'Varun', 29, 19, 19, 22, 67),
('1JT10', 'Charan B A', 1855, 'Python', 104, 'Computer Science and Eng', 204, 'Varun', 29, 30, 30, 30, 65),
('1JT10', 'Charan B A', 1856, 'Unix Programming', 104, 'Computer Science and Eng', 204, 'Varun', 22, 29, 25, 25, 67),
('1JT10', 'Charan B A', 1857, 'CN Laboratory', 104, 'Computer Science and Eng', 204, 'Varun', 30, 30, 25, 28, 56),
('1JT10', 'Charan B A', 1858, 'DBMS Laboratory', 104, 'Computer Science and Eng', 204, 'Varun', 23, 19, 29, 24, 56),
('1JT10', 'Charan B A', 1859, 'EVS', 104, 'Computer Science and Eng', 204, 'Varun', 28, 29, 19, 25, 56);

--
-- Triggers `academics`
--
DELIMITER $$
CREATE TRIGGER `insertfinalia` BEFORE INSERT ON `academics` FOR EACH ROW SET new.final_IA=((new.ia_1+new.ia_2+new.ia_3)/3)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updatefinalia` BEFORE UPDATE ON `academics` FOR EACH ROW SET new.final_IA=((new.ia_1+new.ia_2+new.ia_3)/3)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(3) NOT NULL,
  `title` varchar(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `title`, `name`, `username`, `password`) VALUES
(101, 'Mr', 'Arjun', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `usn` varchar(15) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `dept_id` int(5) NOT NULL,
  `course_id` int(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `dept_name` varchar(200) NOT NULL,
  `pid` int(5) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `total_classes` int(5) NOT NULL,
  `classes_attended` int(5) NOT NULL,
  `percentage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`usn`, `sname`, `dept_id`, `course_id`, `course_name`, `dept_name`, `pid`, `pname`, `total_classes`, `classes_attended`, `percentage`) VALUES
('1JT01', 'Abhishek M C', 101, 1851, 'ME for IT Industry', 'Infromation Science and Eng', 201, 'Arjun', 20, 13, '65'),
('1JT01', 'Abhishek M C', 101, 1852, 'Computer Networks', 'Infromation Science and Eng', 201, 'Arjun', 20, 12, '60'),
('1JT01', 'Abhishek M C', 101, 1853, 'DBMS', 'Infromation Science and Eng', 201, 'Arjun', 20, 19, '95'),
('1JT01', 'Abhishek M C', 101, 1854, 'Automata Theory', 'Infromation Science and Eng', 201, 'Arjun', 20, 19, '95'),
('1JT01', 'Abhishek M C', 101, 1855, 'Python', 'Infromation Science and Eng', 201, 'Arjun', 20, 15, '75'),
('1JT01', 'Abhishek M C', 101, 1856, 'Unix Programming', 'Infromation Science and Eng', 201, 'Arjun', 20, 14, '70'),
('1JT01', 'Abhishek M C', 101, 1857, 'CN Laboratory', 'Infromation Science and Eng', 201, 'Arjun', 10, 8, '80'),
('1JT01', 'Abhishek M C', 101, 1858, 'DBMS Laboratory', 'Infromation Science and Eng', 201, 'Arjun', 10, 7, '70'),
('1JT01', 'Abhishek M C', 101, 1859, 'EVS', 'Infromation Science and Eng', 201, 'Arjun', 10, 10, '100'),
('1JT04', 'Sharanya P Hande', 101, 1851, 'ME for IT Industry', 'Infromation Science and Eng', 202, 'Radha', 20, 15, '75'),
('1JT04', 'Sharanya P Hande', 101, 1852, 'Computer Networks', 'Infromation Science and Eng', 202, 'Radha', 20, 11, '55'),
('1JT04', 'Sharanya P Hande', 101, 1853, 'DBMS', 'Infromation Science and Eng', 202, 'Radha', 20, 19, '95'),
('1JT04', 'Sharanya P Hande', 101, 1854, 'Automata Theory', 'Infromation Science and Eng', 202, 'Radha', 20, 15, '75'),
('1JT04', 'Sharanya P Hande', 101, 1855, 'Python', 'Infromation Science and Eng', 202, 'Radha', 20, 15, '75'),
('1JT04', 'Sharanya P Hande', 101, 1856, 'Unix Programming', 'Infromation Science and Eng', 202, 'Radha', 20, 8, '40'),
('1JT04', 'Sharanya P Hande', 101, 1857, 'CN Laboratory', 'Infromation Science and Eng', 202, 'Radha', 10, 2, '20'),
('1JT04', 'Sharanya P Hande', 101, 1858, 'DBMS Laboratory', 'Civil Engineering', 202, 'Radha', 10, 8, '80'),
('1JT04', 'Sharanya P Hande', 101, 1859, 'EVS', 'Infromation Science and Eng', 202, 'Radha', 10, 10, '100'),
('1JT07', 'Varsha P Shava', 104, 1851, 'ME for IT Industry', 'Computer Science and Eng', 203, 'Sindhu', 20, 15, '75'),
('1JT07', 'Varsha P Shava', 104, 1852, 'Computer Networks', 'Computer Science and Eng', 203, 'Sindhu', 20, 19, '95'),
('1JT07', 'Varsha P Shava', 104, 1853, 'DBMS', 'Computer Science and Eng', 203, 'Sindhu', 20, 10, '50'),
('1JT07', 'Varsha P Shava', 104, 1854, 'Automata Theory', 'Computer Science and Eng', 203, 'Sindhu', 20, 8, '40'),
('1JT07', 'Varsha P Shava', 104, 1855, 'Python', 'Computer Science and Eng', 203, 'Sindhu', 20, 19, '95'),
('1JT07', 'Varsha P Shava', 104, 1856, 'Unix Programming', 'Computer Science and Eng', 203, 'Sindhu', 20, 19, '95'),
('1JT07', 'Varsha P Shava', 104, 1857, 'CN Laboratory', 'Computer Science and Eng', 203, 'Sindhu', 10, 8, '80'),
('1JT07', 'Varsha P Shava', 104, 1858, 'DBMS Laboratory', 'Computer Science and Eng', 203, 'Sindhu', 10, 9, '90'),
('1JT07', 'Varsha P Shava', 104, 1859, 'EVS', 'Computer Science and Eng', 203, 'Sindhu', 10, 10, '100'),
('1JT10', 'Charan B A', 104, 1851, 'ME for IT Industry', 'Computer Science and Eng', 204, 'Varun', 20, 15, '75'),
('1JT13', 'Rakshitha K R', 102, 1851, 'ME for IT Industry', 'Civil Engineering', 205, 'Sudhakar', 20, 8, '40'),
('1JT14', 'Harshitha B A', 102, 1851, 'ME for IT Industry', 'Civil Engineering', 205, 'Sudhakar', 20, 19, '95'),
('1JT15', 'Chaitanya B K', 102, 1851, 'ME for IT Industry', 'Civil Engineering', 205, 'Sudhakar', 20, 15, '75');

--
-- Triggers `attendance`
--
DELIMITER $$
CREATE TRIGGER `insertpercentage` BEFORE INSERT ON `attendance` FOR EACH ROW SET new.percentage=((new.classes_attended/new.total_classes)*100)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updatepercentage` BEFORE UPDATE ON `attendance` FOR EACH ROW SET new.percentage=((new.classes_attended/new.total_classes)*100)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(5) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `faculty_name` varchar(20) NOT NULL,
  `credits` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `faculty_name`, `credits`) VALUES
(1851, 'ME for IT Industry', 'Avinash', 3),
(1852, 'Computer Network', 'Nandini', 4),
(1853, 'DBMS', 'Anupama', 4),
(1854, 'Automata Theory', 'Rakshatha', 3),
(1855, 'Python', 'Rashmi', 3),
(1856, 'Unix Programming', 'Majesh', 3),
(1857, 'CN Laboratory', 'Nandini', 2),
(1858, 'DBMS Laboratory', 'Anupama', 2),
(1859, 'EVS', 'B R Reddy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(101, 'Information Science and Eng'),
(102, 'Civil Engineering'),
(103, 'Mechanical Engineering'),
(104, 'Computer Science and Eng'),
(105, 'Artificial Intelligence'),
(106, 'Electrical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `dept_id` int(3) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `pid` int(5) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `Mobileno` int(15) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `sem` int(3) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `mname`, `lname`, `usn`, `gender`, `address`, `dept_id`, `dept_name`, `pid`, `pname`, `Mobileno`, `dob`, `email`, `sem`, `username`, `password`) VALUES
('Abhishek', 'M', 'C', '1JT01', 'Male', 'Bangalore', 101, 'Infromation Science and Eng', 201, 'Arjun', 123456779, '2002-01-31', 'abhi@gmail.com', 5, 'abhi', '123456'),
('Ananya', 'M', 'N', '1JT02', 'Female', 'Bangalore', 101, 'Infromation Science and Eng', 201, 'Arjun', 123456789, '2002-02-23', 'anu@gmail.com', 5, 'ananya', '123'),
('Jahnavi', 'D', 'K S', '1JT03', 'Female', 'Bangalore', 101, 'Infromation Science and Eng', 201, 'Arjun', 123456987, '2002-03-04', 'jah@gmail.com', 5, 'jahnavi', '456'),
('Sharanya', 'P', 'Hande', '1JT04', 'Female', 'Bangalore', 101, 'Infromation Science and Eng', 202, 'Radha', 123456789, '2002-03-09', 'sharu@gmail.com', 5, 'sharanya', '789'),
('Soumya', 'M', 'Hebbar', '1JT05', 'Female', 'Bangalore', 101, 'Infromation Science and Eng', 202, 'Radha', 987654321, '2002-03-11', 'soumya@gmail.co', 5, 'soumya', '132'),
('Sathvik', 'P', 'Narayan', '1JT06', 'Male', 'Bangalore', 101, 'Infromation Science and Eng', 202, 'Radha', 986754321, '2002-03-02', 'sathvik@gmail.c', 5, 'sathvik', '465'),
('Varsha', 'P', 'Shava', '1JT07', 'Female', 'Bangalore', 104, 'Computer Science and Eng', 203, 'Sindhu', 123457689, '2002-05-14', 'varsha@gmail.co', 5, 'varsha', '798'),
('Sneha', 'N', 'Raikar', '1JT08', 'Female', 'Bangalore', 104, 'Computer Science and Eng', 203, 'Sindhu', 123465879, '2002-02-09', 'sneha@gmail.com', 5, 'sneha', '321'),
('Deepak', 'R', 'P', '1JT09', 'Male', 'Bangalore', 104, 'Computer Science and Eng', 203, 'Sindhu', 986745321, '2002-02-17', 'deepak@gmail.co', 5, 'deepak', '654'),
('Charan', 'B', 'A', '1JT10', 'Male', 'Bangalore', 104, 'Computer Science and Eng', 204, 'Varun', 978563412, '2002-02-23', 'charan@gmail.co', 5, 'charan', '987'),
('Saatvik', 'S', 'Shastry', '1JT11', 'Male', 'Bangalore', 104, 'Computer Science and Eng', 204, 'Varun', 896745231, '2002-02-02', 'saatvik@gmail.c', 5, 'saatvik', '120'),
('Tejas', 'B', 'R', '1JT12', 'Male', 'Bangalore', 104, 'Computer Science and Eng', 204, 'Varun', 124365879, '2002-02-17', 'tejas@gmail.com', 5, 'tejas', '340'),
('Rakshitha', 'K', 'R', '1JT13', 'Female', 'Bangalore', 102, 'Civil Engineering', 205, 'Sudhakar', 132546987, '2002-02-16', 'raksha@gmail.co', 5, 'raksha', '560'),
('Harshitha', 'B', 'A', '1JT14', 'Female', 'Bangalore', 102, 'Civil Engineering', 205, 'Sudhakar', 980765743, '2002-02-09', 'harshi@gmail.co', 5, 'harshitha', '780'),
('Chaitanya', 'B', 'K', '1JT15', 'Male', 'Bangalore', 102, 'Civil Engineering', 205, 'Sudhakar', 908767543, '2002-02-09', 'chai@gmail.com', 5, 'chaitanya', '890');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `title` varchar(3) NOT NULL,
  `proctorname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `proctorid` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`title`, `proctorname`, `gender`, `proctorid`, `email`, `dob`, `mobileno`, `username`, `password`, `dept_id`, `dept_name`) VALUES
('Mr', 'Arjun', 'Female', 201, 'arjun@gmail.com', '1990-06-06', 123456789, 'arjun', '123456', 101, 'Infromation Science and Eng'),
('Ms', 'Radha', 'Female', 202, 'radha@gmail.com', '1996-07-08', 123456879, 'radha', '123', 101, 'Infromation Science and Eng'),
('Ms', 'Sindhu', 'Female', 203, 'sindhu@gmail.com', '1998-09-09', 456678998, 'sindhu', '456', 104, 'Computer Science and Eng'),
('Mr', 'Varun', 'Male', 204, 'varun@gmail.com', '1997-08-05', 987654321, 'varun', '789', 104, 'Computer Science and Eng'),
('Mr', 'Sudhakar', 'Male', 205, 'sudha@gmail.com', '1989-03-05', 987645321, 'sudha', '159', 102, 'Civil Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`usn`,`course_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `usn` (`usn`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`usn`,`course_id`),
  ADD KEY `dept_id_fk` (`dept_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `usn` (`usn`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `username` (`username`) USING HASH,
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`proctorid`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `username` (`username`) USING HASH,
  ADD KEY `dept_id` (`dept_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
