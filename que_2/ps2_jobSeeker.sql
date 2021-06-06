-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 01:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icc_assignment_question_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs_database`
--

CREATE TABLE `jobs_database` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_requirements` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs_database`
--

INSERT INTO `jobs_database` (`id`, `company_name`, `job_title`, `job_description`, `job_requirements`, `created_at`) VALUES
(4, 'SpaceX', 'Design Engineer', 'Remote, 3months, stipend range = 10000 ', 'Resume, Interview, some prior experience in any modern web dev frameworks, Enthusiasm.', '2021-06-06 11:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter_database`
--

CREATE TABLE `recruiter_database` (
  `id` int(11) NOT NULL,
  `r_fullname` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `r_password` varchar(255) NOT NULL,
  `r_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiter_database`
--

INSERT INTO `recruiter_database` (`id`, `r_fullname`, `r_email`, `r_password`, `r_created_at`) VALUES
(3, 'Elon Musk', 'elonmusk@spacex.com', '12345', '2021-06-06 11:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `student_database`
--

CREATE TABLE `student_database` (
  `id` int(11) NOT NULL,
  `s_fullname` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `appliedFor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_database`
--

INSERT INTO `student_database` (`id`, `s_fullname`, `s_email`, `s_password`, `s_created_at`, `appliedFor`) VALUES
(11, 'Gaurav Rathod', 'rathod.gauravvinod@gmail.com', '54321', '2021-06-06 11:36:56', 1),
(12, 'Jeff Bezos', 'jeffbezos@amazon.com', '12345', '2021-06-06 11:39:06', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs_database`
--
ALTER TABLE `jobs_database`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruiter_database`
--
ALTER TABLE `recruiter_database`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_database`
--
ALTER TABLE `student_database`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs_database`
--
ALTER TABLE `jobs_database`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recruiter_database`
--
ALTER TABLE `recruiter_database`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_database`
--
ALTER TABLE `student_database`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
