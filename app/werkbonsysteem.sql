-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 nov 2021 om 14:36
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `werkbonsysteem`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werkboninfo`
--

CREATE TABLE `werkboninfo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `startDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `finishDate` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `material1` varchar(100) DEFAULT NULL,
  `material2` varchar(100) DEFAULT NULL,
  `material3` varchar(100) DEFAULT NULL,
  `material4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `werkboninfo`
--

INSERT INTO `werkboninfo` (`id`, `name`, `description`, `startDate`, `finishDate`, `image`, `material1`, `material2`, `material3`, `material4`) VALUES
(22, 'Johan', 'maak taak 1 met behulp van middel 1', '2021-11-06 13:34:46', NULL, NULL, 'materiaal 1', 'materiaal 2', 'materiaal 3', 'materiaal 4'),
(23, 'Dirk', 'maak taak 2 met behulp van middel 2', '2021-11-06 13:35:38', NULL, NULL, 'materiaal 1', 'materiaal 2', 'materiaal 3', 'materiaal 4'),
(24, 'Michael', 'maak taak 3 met behulp van middel 3', '2021-11-06 13:36:17', NULL, NULL, 'materiaal 1', 'materiaal 2', 'materiaal 3', 'materiaal 4');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `werkboninfo`
--
ALTER TABLE `werkboninfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `werkboninfo`
--
ALTER TABLE `werkboninfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
