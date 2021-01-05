-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 12:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `archive` enum('N','Y') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `picture`, `date`, `archive`) VALUES
(1, 'Utorak donosi nove promjene cijene goriva', 'Prema neslužbenim podacima web-stranice Cijene goriva, spremnik benzina bit će od utorka skuplji za 4,5 kuna, a onaj dizela trebao bi biti jeftiniji za dvije kune. Najavljen je i porast cijene LPG-a, i to za tri kune po spremniku.\r\n\r\nPrema cijenama objavljenim na stranici Ministarstva gospodarstva u ponedjeljak je najjeftiniji Eurosuper 95 koštao 9,53 kn po litri, cijena Eurosupera 98 je 10,91, Eurosuper 100 košta 10,29 kuna po litri. Najniža cijena Eurodizela je 9,49 kuna, a autoplina 4,9 kuna.\r\n\r\n', 'news/news-3.jpg', '2021-01-04 23:00:00', 'N'),
(2, 'Od ponoći nove cijene goriva', 'Prema informacijama portala cijenegoriva.info, spremnik od 50 litara benzina trebao bi biti skuplji za dvije kune, isti takav spremnik dizela trebao bi poskupjeti za jednu kunu, a prosječni spremnik LPG-a trebao bi poskupjeti za 5,5 kuna..\r\n\r\n', 'news/news-2.jpeg', '2021-01-04 23:00:00', 'N');
(3, 'OD PONOĆI SU U HRVATSKOJ NARASLE CIJENE GORIVA Prosječni spremnik benzina skuplji je za dvije kune','Utorkom se u Hrvatskoj mijenja cijena goriva, a od ponoći je ono poskupjelo u odnosu na prošli tjedan. Kako piše portal cijenegoriva.info, spremnik od 50 litara benzina (Eurosupera) u prosjeku je skuplji za dvije kune..\r\n\r\n', 'news/news-1.jpg', '2021-01-04 23:00:00', 'N');
COMMIT;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
