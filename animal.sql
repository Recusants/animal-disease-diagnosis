-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 05:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

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
(20, 'Jael Randall', 'Omnis iusto odit des Poultry', 'Ea et cupidatat ex o', 'Aliquam et irure dol', 'Incididunt sunt aut', 'Quod amet non sint', 'Enim id eos qui sit', 'Sunt reprehenderit ', 'Ipsa non aspernatur'),
(21, 'Sonya Greene', 'Cillum labore iusto ', 'Elit a dolore volup', 'Quia tempor aut aute', 'Eum ut non quia labo', 'Deserunt aperiam des', 'Aute quo qui blandit', 'Ut laborum Elit qu', 'Tenetur id vitae id'),
(23, 'Beau Witt', 'Recusandae Dignissi', 'Vel reiciendis repre', 'Eos ex veritatis ass', 'Voluptas voluptate c', 'Totam similique duci', 'Nostrum maiores dolo', 'Fugit aut mollitia ', 'Non tempore est lo'),
(24, 'Blake Reilly', 'Dolore commodo liber', 'Reprehenderit offici', 'Odit sed aut numquam', 'Labore elit laborio', 'A suscipit labore it', 'Est numquam architec', 'Delectus et harum c', 'Et sit quo natus as'),
(25, 'Neville Sykes', 'Dolorem sed nisi nem', 'Autem vero sint quos', 'Eiusmod consequat S', 'Corporis Nam pariatu', 'Lorem quod consequat', 'Consequat Sed nostr', 'Sed non qui aliquip ', 'Recusandae In in au'),
(26, 'Leilani Hunt', 'In omnis ut Nam qui ', 'Incididunt voluptati', 'Inventore eaque sint', 'Qui dolorum sunt occ', 'Mollit aut quia veni', 'Vel rerum qui quia n', 'Harum quidem commodi', 'Vitae voluptatibus u'),
(27, 'Keiko Brewer', 'Nostrum mollit iure ', 'Possimus mollitia m', 'Non vitae tempor non', 'Earum quo consequat', 'Culpa voluptatem I', 'Amet repellendus A', 'Occaecat pariatur C', 'cvhj'),
(28, 'Audra Osborne', 'Dicta mollit illum ', 'In natus ut ullamco ', 'Nostrum inventore la', 'Voluptate cillum dol', 'Elit aut autem duci', 'Delectus a dicta qu', 'Adipisicing dolores ', 'Stoos=Not Sure Urine=Bloody Foodc=Normal Waterc=High Activeness=Not Sure'),
(29, 'Regina Navarro', 'Iusto hic debitis cattle', 'Voluptatem adipisci ', 'Quia sit ipsum sint', 'Occaecat et perferen', 'Ut quis mollit dolor', 'Dolores eos nihil a', 'Dolor expedita in la', 'Stoos=Normal Urine=Normal Foodc=High Waterc=High Activeness=Normal'),
(30, 'Chantale Elliott', 'Voluptates labore co', 'Quia vitae non rem q', 'Tempore facere magn', 'Pariatur Dolorum ni', 'Reprehenderit et in', 'Ut voluptate tempore', 'Sit nihil consectetu', 'Stoos=Watery Urine=Amonic Foodc=Low Waterc=Normal Activeness=Normal'),
(31, 'Cooper Burch cattle', 'Quibusdam et expedit cattle', 'Rem sit non ullamco', 'Et ad consequuntur q', 'Expedita reprehender', 'Eum magna eveniet o', 'Illum maxime conseq', 'Odio et quo qui esse', 'Stoos=Watery Urine=Normal Foodc=Low Waterc=High Activeness=Low'),
(32, 'Hiroko Mckee', 'Quasi sit est ea aut', 'Cumque et quis ad fu', 'Enim distinctio Mol', 'Molestias non aut hi', 'Ea aliqua Sint ad f', 'Earum dignissimos om', 'Qui commodi dolor ma', 'Stoos=Watery Urine=Bloody Foodc=High Waterc=High Activeness=Low'),
(33, 'Calista Parker', 'Incidunt neque null', 'Voluptate laboris vo', 'Dolore irure et beat', 'Minim nulla pariatur', 'Cum explicabo Molli', 'Qui corrupti ullamc', 'Qui harum autem aliq', 'Stoos=Bloody Urine=Bloody Foodc=Normal Waterc=High Activeness=Low'),
(34, 'Bruce Woods', 'Soluta iusto non odi', 'Dolore molestiae duc', 'Commodo voluptatem q', 'Quas aut nesciunt n', 'Tempore vel est exc', 'Voluptas ab sint ve', 'Suscipit modi impedi', 'Stoos=Bloody Urine=Normal Foodc=Normal Waterc=High Activeness=High'),
(35, 'Aphrodite Mccarty', 'Exercitationem hic q', 'Sit eum dignissimos ', 'Omnis est ut autem ', 'Et hic maiores expli', 'Corrupti et aut dol', 'Debitis voluptas a u', 'Ullamco nulla deseru', 'Stoos=Watery Urine=Bloody Foodc=Low Waterc=High Activeness=High'),
(36, 'Leilani Hunter', 'Occaecat non modi el', 'Ullam atque occaecat', 'Amet deleniti facil', 'Veritatis occaecat l', 'Eiusmod enim ipsum u', 'Proident sed sed vo', 'Sunt iure sapiente r', 'Stoos=Bloody Urine=Bloody Foodc=Normal Waterc=Normal Activeness=Normal'),
(37, 'Jonas Barker', 'Esse laudantium do', 'Amet magnam dolor a', 'Similique eu est et', 'Eos ea ullam ut adip', 'Alias qui laborum Q', 'Nesciunt dolorum qu', 'Qui odio facilis pla', 'Stoos=Bloody Urine=Normal Foodc=High Waterc=Normal Activeness=Normal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(3, 'xidonu', '$2y$10$NKUw848spNtdnWKb9hHOY.CNZAQ6WzdGIJadApDxa22d48ZdDJigi', '2021-10-27 21:52:33'),
(4, 'root1', '$2y$10$g/Z7qoHYHgUStLTcWHsUje0sS2Y2sWa0zOS/f8eLZwxAVJDJyYPmi', '2021-10-27 21:54:04'),
(5, 'ratapu', '$2y$10$aQ4Kn6iStiHy30IRTBUe4eycn46aflKKEvkOE5OdwuikadofUhZcC', '2021-10-27 21:59:30');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `diseasesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
