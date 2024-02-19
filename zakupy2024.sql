-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 07:12 PM
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
-- Database: `zakupy2024`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabelanr34`
--

CREATE TABLE `tabelanr34` (
  `ID` int(2) DEFAULT NULL,
  `CENA` int(3) DEFAULT NULL,
  `NAZWA` varchar(21) DEFAULT NULL,
  `KATEGORIA` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tabelanr34`
--

INSERT INTO `tabelanr34` (`ID`, `CENA`, `NAZWA`, `KATEGORIA`) VALUES
(1, 10, 'Sok', 1),
(2, 8, 'Pepsi', 1),
(3, 2, 'Fanta', 1),
(4, 15, 'Turbo miś', 2),
(5, 25, 'Kreple', 2),
(6, 150, 'Kreple na cały tydzeń', 2),
(7, 69, 'Żymła', 3),
(8, 100, 'Nowy Mantel', 4),
(9, 15, 'Stary Mantel', 4),
(10, 80, 'Wuszt', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
