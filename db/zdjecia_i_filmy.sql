-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 21, 2023 at 04:42 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm_ss`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia_i_filmy`
--

CREATE TABLE `zdjecia_i_filmy` (
  `id_m` int(50) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `komentarz` varchar(20) DEFAULT NULL,
  `autor` varchar(20) NOT NULL,
  `wydarzenie` varchar(20) DEFAULT NULL,
  `rozmiar_pliku` double DEFAULT NULL,
  `referencja` varchar(250) DEFAULT NULL,
  `wlasnosc_ss` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `zdjecia_i_filmy`
--
ALTER TABLE `zdjecia_i_filmy`
  ADD PRIMARY KEY (`id_m`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zdjecia_i_filmy`
--
ALTER TABLE `zdjecia_i_filmy`
  MODIFY `id_m` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
