-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 02:21 PM
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
-- Database: `mel`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verify_password` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `medical_id` varchar(20) NOT NULL,
  `medical_school` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `first_name`, `last_name`, `email`, `password`, `verify_password`, `country`, `city`, `medical_id`, `medical_school`, `qualification`, `image`) VALUES
(6, 'wer', 'dec', 'devisodhis10@gmail.com', '$2y$10$jSfDfJh1F2FFHUc/XS9gNejPoLUIuzwzKd4Dhj2itfACZrT47jeya', '$2y$10$4luC07cGIk5RRKohhcB3guFIxDG7H5Erz9qRfEc7iYD/tIKJ9XJ4q', 'nai', 'nair', '12221', 'uon', 'yes', 'my cat.jpeg'),
(9, 'davis', 'were', 'doctor1@gmail.com', '$2y$10$w21nt4egB.sFQCCHJRA6rO82qWIAWfsXm6gfccj9LtEfQMh0vccne', '$2y$10$CrsqX7XcB5Z4X726oQrEEeRQcwLi63NbJ/gr5EdAKofxZdDmPIvAu', 'kenya', 'nairobi', '123456678', 'uon', 'yes', 'IMG_20211002_163024_215_3.jpg'),
(10, 'fia', 'wes', 'devd@gmail.com', '$2y$10$HXQSWZ6vhLnytiL/uXXIY.OAPZ6RwmiB2z6Cq4gBsOKt8w7fJ3AF2', '$2y$10$sKwLPDW7J79/7s1DukHeKeawy61WScnrVNMd0tcJBxA8tVpSioS/K', 'kenya', 'nai', '123456789', 'uon', '', 'doctor1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `verify_password` varchar(255) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `national_id` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `current_location` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `first_name`, `last_name`, `email`, `password`, `verify_password`, `country`, `city`, `national_id`, `phone_number`, `current_location`, `street`, `gender`) VALUES
(1, 'davis', 'were', 'devi@gmail.com', '$2y$10$7HPz3zxQ2mw/l7Ajv0NNIOueq6wxZ38dXXaUYvNm7GBupKxftUoYG', '$2y$10$liGQ7oKD6aM0Bh70vrbIKe1UMh4Wi/Cs5IgLicBpcMNGjpfMiNWq.', 'ke', 'var', '1234567890', '1234567899', 'raa', 'ht', 'male'),
(2, 'davis', 'were', 'devi@gmail.com', '$2y$10$rcmiWY9G2V3VgL6g3WZT8.apxDY9jHtFEm.z2.aE869PjmktrrEg.', '$2y$10$iL700216/9GQy9zy36g0auZo17T1V.MVfWvP2i.FCG0FMTRt79LR6', 'ke', 'var', '1234567890', '1234567899', 'raa', 'ht', 'male'),
(3, 'were', 'med', 'were@gmail.com', '$2y$10$vqYQtnRl8jQu/aqXLaUefuuWRGB3Y8D27KkmuHoBDb9SeimblEO9e', '$2y$10$8zF823cfgrzfMO50FzZcHeOT.4QRxI1IwvO2iEdXy4JqKS9dmAeom', 'davi', 'ksm', '123456677889', '0987665544', 'wertre', 'kisumr', 'female'),
(4, 'we', 'dda', 'des@gmail.com', '$2y$10$vbHoroGfF1mob5g0bSDEc..VUTFsBC.NCsM836kw1GXJH7HZQvdzm', '$2y$10$15ytPTDd7Yp/mnUX0UjweugdcnDXoAIF4vIfdoahkf0RDz67GzxzG', 'ke', 're', '34567890', '0987654321', 'ke', 'nai', 'female'),
(5, 'luc', 'we', 'wed@gmail.com', '$2y$10$Tu42nLJhXXLNrNXnnQisOuUrIxrKixkP5TDvHXcNYGNJf0ZNozIzW', '$2y$10$6bxOTrCcKxwhb8JU9WBTweo70/mL6DW9eCgR7Oqmej0QymJYp1OSa', 'fre', 'wd', '1234567', '0987654321', 'rrfg', 'ed', 'female'),
(6, 'ben', 'kim', 'bn@gmail.com', '$2y$10$da3IDxvtY.iKnoX6TNgyu.KWHfG6XgPx4azaStKzc0teQytnzhFi.', '$2y$10$ZGpnZRnEwRzTwWwPEY/uDeCEN38wrlAGoEDVzav1P4RKdnVksT3d6', 'nairobi', 'nairo', '123231231', '0987777777', 'asdas', 'khhss', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `support_staff`
--

CREATE TABLE `support_staff` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_staff`
--

INSERT INTO `support_staff` (`email`, `password`) VALUES
('staff1@medeaselinkup.co.ke', '1234567890'),
('staff@medeaselinkup.co.ke', 'medeaselinkup.co.ke@staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `medical_id` (`medical_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `support_staff`
--
ALTER TABLE `support_staff`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
