-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(25) NOT NULL,
  `patient_id` int(25) NOT NULL,
  `receptionist_id` int(25) NOT NULL,
  `doctor_id` int(25) NOT NULL,
  `room_id` int(25) NOT NULL,
  `date` int(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `receptionist_id`, `doctor_id`, `room_id`, `date`, `image`) VALUES
(320702, 24524, 54242, 45274, 752782, 727, 'Character5.png\r\n'),
(320709, 222, 25633, 45893, 5, 2023, 'Character6.png');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(25) NOT NULL,
  `name_surname` varchar(25) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `specialisation` varchar(25) NOT NULL,
  `room_id` int(25) NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name_surname`, `age`, `gender`, `email`, `password`, `phone_number`, `specialisation`, `room_id`, `profile_img`) VALUES
(20125, 'Sam Smiths', 41, 'Male', 'sam@gmaiil.com', '2023-06-24', 825417121, 'Doctor', 5, 'Character13.png'),
(20205, 'Tom B. Erichsen', 29, 'Male', 'tom@infodoctors.co.za', 'Cc0898763', 79, 'ciro', 2, 'Character15.png'),
(55036, 'Beck Stayce', 33, '', '', '5298766', 79, '', 0, 'Character10.png'),
(55039, 'CS Strijdom', 21, 'Male', 'strijdomcs@gmail.com', 'Cc058885', 825417121, 'Doctor', 2151, 'Character9.png');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(25) NOT NULL,
  `name_surname` varchar(25) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `medical_aid_number` int(20) NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name_surname`, `age`, `gender`, `email`, `password`, `phone_number`, `medical_aid_number`, `profile_img`) VALUES
(268963, 'CS Wilders', 21, 'Male', 'strijdomcs@gmail.com', '**********', 82, 2147483647, 'Character7.png'),
(320688, 'Summer Smith', 25, 'Female', 'summersmith@gmail.com', '**********', 79, 2031598756, 'Character8.png'),
(320689, 'Kayla Strijdom', 25, 'Female', 'strijdomcs@gmail.com', '', 825417121, 1258963, 'Character9.png'),
(320695, '', 0, '', '', '', 0, 0, 'Character12.png'),
(320707, '', 0, '', '', '', 0, 0, '64943e643bf73.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int(25) NOT NULL,
  `name_surname` varchar(25) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `rank` text NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `name_surname`, `age`, `gender`, `email`, `password`, `phone_number`, `rank`, `profile_img`) VALUES
(1, 'Christian Krahtz', 25, 'male', 'christiaan.co.za', '5525886', 825417121, '', ''),
(3, 'DavidBrown', 24, 'male', 'david.co.za', '', 825417121, '', 'Character2.png'),
(4, 'JaneSmith', 29, 'female', 'jane.co.za', 'secret', 825556969, 'Head', 'Character3.png\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(25) NOT NULL,
  `doctor_id` int(25) NOT NULL,
  `floor_number` int(10) NOT NULL,
  `room_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `receptionist_id` (`receptionist_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nmae_surname` (`name_surname`),
  ADD KEY `age` (`age`),
  ADD KEY `gender` (`gender`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`),
  ADD KEY `phone_number` (`phone_number`),
  ADD KEY `specialisation` (`specialisation`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_surname` (`name_surname`),
  ADD KEY `age` (`age`),
  ADD KEY `gender` (`gender`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`),
  ADD KEY `phone_number` (`phone_number`),
  ADD KEY `medical_aid_number` (`medical_aid_number`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_surname` (`name_surname`),
  ADD KEY `age` (`age`),
  ADD KEY `gender` (`gender`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`),
  ADD KEY `phone_number` (`phone_number`),
  ADD KEY `rank` (`rank`(768));

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `floor_number` (`floor_number`),
  ADD KEY `room_number` (`room_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320733;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55047;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320708;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
