-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 06:20 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `v_key` varchar(255) NOT NULL,
  `v_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`id`, `full_name`, `mobile`, `email`, `password`, `v_key`, `v_status`) VALUES
(21, 'mamun', '01887044972', 'bishobabubrand@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2de8d23c10d47375340937bdf70c1517', '1'),
(22, 'fayezmohammad', '01887044972', 'fayezmohammad096@gmail.com', '202cb962ac59075b964b07152d234b70', '4eadcb4dcc21435d8f1b2a130679ed9c', '1'),
(23, 'student1', '01887044972', 'fayez@gmail.com', '202cb962ac59075b964b07152d234b70', '26c82e8952c88cfac272bfd60c931baa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `mobile`, `email`, `class`, `roll`, `birth`, `address`, `photo`) VALUES
(9, 'fayez mohammad ', 1887044972, 'bishobabubrand@gmail.com', '1st', 101010, '2019-08-14', ' Dhaka,Bangladesh', ' 101010.png'),
(11, '', 0, '', '', 0, '0000-00-00', '', ' 124516.jpg'),
(12, 'mamunmolla', 2147483647, 'mamunmolla@gmail.com', '5th', 252525, '2019-08-16', ' Dhaka,Bangladesh', ' 252525.JPG'),
(13, 'ratul khan', 2147483647, 'ratul_khan@gmail.com', '5th', 232323, '2019-08-24', ' Dhaka,Bangladesh', ' 232323.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `serial` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `specialise` varchar(255) NOT NULL,
  `Qulipiqation` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `serial`, `fullname`, `username`, `mobile`, `email`, `specialise`, `Qulipiqation`, `dob`, `address`, `photo`) VALUES
(15, 2147483647, '', 'sujon', 0, '', '', '', '0000-00-00', '', 'sujon.jpg'),
(16, 2147483647, 'mamun khan', 'mamunkhan', 1548798546, 'mamunkhan@gmail.com', 'programming', 'c', '2019-08-07', 'Dhaka', 'mamunkhan.jpg'),
(17, 2147483647, 'fayez mohammad ', 'fayezmohammad', 1578945632, 'fayezmohammad@gmail.com', 'html', 'b', '2019-08-23', 'muradpur', 'fayezmohammad.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
