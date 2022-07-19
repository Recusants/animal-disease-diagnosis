-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 10:56 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batchid` int(6) NOT NULL,
  `batch_name` varchar(100) DEFAULT NULL,
  `animal` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `discription` varchar(255) NOT NULL,
  `start_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  `trace` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batchid`, `batch_name`, `animal`, `total`, `discription`, `start_date`, `status`, `trace`) VALUES
(1, 'AAA001', NULL, '100', 'discription', '2022-07-19 09:44:47', 1, ', <p>On 2022-07-19,  5 of them(got) Sick , and we Nothing. <b>Notes: Sleepy. <b></p>');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `diseasesId` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `animals` varchar(255) DEFAULT NULL,
  `mtime` varchar(50) DEFAULT NULL,
  `symptoms` varchar(255) DEFAULT NULL,
  `treatment` varchar(100) DEFAULT NULL,
  `transmission` varchar(100) DEFAULT NULL,
  `suggestions` varchar(255) DEFAULT NULL,
  `causes` varchar(255) DEFAULT NULL,
  `adv_symptoms` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`diseasesId`, `name`, `animals`, `mtime`, `symptoms`, `treatment`, `transmission`, `suggestions`, `causes`, `adv_symptoms`) VALUES
(38, 'Anthrax', NULL, '1-10', 'severe vomiting; bloody stools ', 'Clean and disinfect; dispose of carcasses', 'spores in soil, blood ', 'Wash hands; wear personal protective equipment (PPE) (gloves,', 'spores in soil, blood ', 'Stoos=Bloody Urine=Bloody Foodc=Low Waterc=Low Activeness=Low'),
(39, 'Bovine popular stomatitis ', NULL, '3-8 days', 'fever, diarrhea, salivation, anorexia', 'Call vet ASAP', 'wounds, skin abrasions; bites', 'Wash hands; wear gloves; cover wounds', 'spores in soil, blood ', 'Stoos=Normal Urine=Normal Foodc=Normal Waterc=Normal Activeness=Low'),
(40, 'Bovine spongiform encephalopat', NULL, '1-10 weeks', 'severe vomiting; bloody stools ', 'Clean and disinfect; dispose of carcasses', 'spores in soil, blood ', 'Wash hands; wear personal protective equipment (PPE) (gloves,', ' prioncontaining tissues from infected animals ', 'Stoos=Bloody Urine=Bloody Foodc=Normal Waterc=Normal Activeness=Low'),
(41, 'Bovine tuberculosis ', NULL, '1-10 days', 'severe vomiting; bloody stools ', 'Call vet ASAP', 'spores in soil, blood ', 'Wash hands; wear gloves; cover wounds', 'spores in soil, blood ', 'Stoos=Watery Urine=Normal Foodc=Low Waterc=Normal Activeness=Normal'),
(42, 'Bovine tuberculosis ', NULL, '1-10 days', 'severe vomiting; bloody stools ', 'Call vet ASAP', 'spores in soil, blood ', 'Wash hands; wear gloves; cover wounds', 'spores in soil, blood ', 'Stoos=Watery Urine=Normal Foodc=Low Waterc=Normal Activeness=Normal'),
(43, 'Bovine tuberculosis ', NULL, '1-10 days', 'severe vomiting; bloody stools ', 'Call vet ASAP', 'spores in soil, blood ', 'Wash hands; wear gloves; cover wounds', 'spores in soil, blood ', 'Stoos=Watery Urine=Normal Foodc=Low Waterc=Normal Activeness=Normal'),
(44, 'Bovine tuberculosis ', NULL, '1-10 days', 'severe vomiting; bloody stools ', 'Call vet ASAP', 'spores in soil, blood ', 'Wash hands; wear gloves; cover wounds', 'spores in soil, blood ', 'Stoos=Watery Urine=Normal Foodc=Low Waterc=Normal Activeness=Normal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `user_type`) VALUES
(3, 'xidonu', '$2y$10$NKUw848spNtdnWKb9hHOY.CNZAQ6WzdGIJadApDxa22d48ZdDJigi', '2021-10-27 21:52:33', NULL),
(4, 'root1', '$2y$10$g/Z7qoHYHgUStLTcWHsUje0sS2Y2sWa0zOS/f8eLZwxAVJDJyYPmi', '2021-10-27 21:54:04', NULL),
(5, 'ratapu', '$2y$10$aQ4Kn6iStiHy30IRTBUe4eycn46aflKKEvkOE5OdwuikadofUhZcC', '2021-10-27 21:59:30', NULL),
(7, 'wewe', '$2y$10$PkrwGacrj69fADjWragXiu5Zlmk6jjS7vDFFrIGFgVLd7lSRfhLcO', '2022-01-30 00:47:52', 'Farmer'),
(9, 'p', '$2y$10$CGS1cGZnAHr1x14cCX4jqejjuKJGKRCvvMnjwU4B3KdjJAGSJU00W', '2022-01-30 01:44:17', 'Professional Farmer'),
(10, 'f', '$2y$10$0KnsUku0/93jHPf5IS150OSi.aTXezDwbR74w59GunKgcjJ4yO7ba', '2022-07-11 11:03:13', 'Farmer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batchid`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`diseasesId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batchid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `diseasesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
