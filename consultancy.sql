-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 10:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nm` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nm`, `pwd`) VALUES
('admin', 'admin'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `canreg`
--

CREATE TABLE `canreg` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `extra_qualify` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `canreg`
--

INSERT INTO `canreg` (`id`, `name`, `Address`, `qualification`, `exp`, `mob`, `email`, `extra_qualify`, `salary`) VALUES
(1, 'Sakshi Chechar', 'kolhapur', 'BE', '1 year', '7894561239', 'sakshi132@gmail.com', 'Graphic Design', '4.5-5.0'),
(2, 'Renu Bhole', 'kolhapur', 'B.tech', '1 year', '9632145785', 'renu307@gmail.com', 'English Language', '3.5-4.0'),
(3, 'Amit Patil', 'Pune', 'MBA', '2 year', '9876543219', 'amit342@gmail.com', 'Foreign Language', '5.5-6.0');

-- --------------------------------------------------------

--
-- Table structure for table `companyreg`
--

CREATE TABLE `companyreg` (
  `cmp_id` int(50) NOT NULL,
  `cmp_name` varchar(50) NOT NULL,
  `cmp_mob` varchar(50) NOT NULL,
  `cmp_email` varchar(50) NOT NULL,
  `cmp_type` varchar(50) NOT NULL,
  `cmp_person` varchar(50) NOT NULL,
  `cmp_telno` varchar(50) NOT NULL,
  `cmp_add` varchar(50) NOT NULL,
  `cmp_skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companyreg`
--

INSERT INTO `companyreg` (`cmp_id`, `cmp_name`, `cmp_mob`, `cmp_email`, `cmp_type`, `cmp_person`, `cmp_telno`, `cmp_add`, `cmp_skill`) VALUES
(1, 'TCS', '9368521478', 'tcs@gmail.com', 'IT', 'John D.', '0231236549', 'Pune,Mumbai', 'C,C++,Java,Python,etc'),
(2, 'HCL', '7412365896', 'hcl12@gmail.com', 'Devloper', 'Vijay V.', '023145896', 'Pune, Mumbai, Hyderabad', 'Java, Python, C#.net etc'),
(3, 'Mphasis', '8978945612', 'mphasis@gmail.com', 'Devloper', 'Jerry Rao', '023178945', 'Mumbai', 'Manual ,Automation'),
(4, 'Infosys', '8523967421', 'infosys12@gmail.com', 'Finance', 'Swati shinde', '0231632145', 'Pune, Mumbai, Kolkata', 'Accounting,computer skill');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `stud_mob` varchar(50) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_feedback` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `stud_name`, `stud_mob`, `stud_email`, `stud_feedback`, `dates`) VALUES
(1, 'Sakshi  Chechar', '7894561239', 'sakshi132@gmail.com', 'Excellent !!!!!', '2023-10-16'),
(2, 'Renu Bhole', '9632145785', 'renu307@gmail.com', 'Very Nice!!', '2023-10-17'),
(3, 'Amit Patil', '9876543219', 'amit342@gmail.com', 'Too Good!!', '2023-10-19'),
(4, 'Om Shinde', '9685742131', 'om123@gmail.com', 'Fabulous !!!', '2023-10-20'),
(5, 'Rahul Sawant', '9652417863', 'rahul456@gmail.com', 'Fantastic!!!', '2023-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(50) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `job_req` varchar(50) NOT NULL,
  `job_vac` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `job_req`, `job_vac`, `salary`, `dates`) VALUES
(1, 'TCS', 'Java', '10', '3.0-3.5', '2023-10-16'),
(2, 'HCL', 'Software Developer ', '5', '3.5-4.0', '2023-10-20'),
(3, 'Mphasis', 'QA Tester', '20', '4.5-5.0', '2023-10-22'),
(4, 'Infosys', 'Accounting', '5', '3.5', '2023-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `total_pay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `dates`, `total_pay`) VALUES
('Sakshi  Chechar', '2023-10-18', '2000'),
('Renu Bhole', '2023-10-18', '3000'),
('Amit Patil', '2023-10-23', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(10) NOT NULL,
  `cnm` varchar(50) NOT NULL,
  `cn` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `cnm`, `cn`, `email`, `user`, `pass`) VALUES
(1, 'Sakshi  Chechar', '7894561239', 'sakshi132@gmail.com', 'sakshi', 'sakshi132'),
(2, 'Renu Bhole', '9632145785', 'renu307@gmail.com', 'renu', 'renu307'),
(3, 'Amit Patil', '9876543219', 'amit342@gmail.com', 'amit', 'amit342'),
(4, 'Om Shinde', '9685742131', 'om123@gmail.com', 'om', 'om123'),
(5, 'Rahul Sawant', '9652417863', 'rahul456@gmail.com', 'rahul', 'rahul456');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `upload` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `name`, `upload`) VALUES
(1, 'Sakshi Chechar', '1000-images.jfif'),
(2, 'Renu Bhole', '1000-RB-RSUME.pdf'),
(3, 'Amit Patil', '1000-download.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canreg`
--
ALTER TABLE `canreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyreg`
--
ALTER TABLE `companyreg`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canreg`
--
ALTER TABLE `canreg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companyreg`
--
ALTER TABLE `companyreg`
  MODIFY `cmp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
