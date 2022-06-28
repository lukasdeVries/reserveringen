-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 jun 2022 om 13:21
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snelkookpan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `huizen`
--

CREATE TABLE `huizen` (
  `id` int(11) NOT NULL,
  `plaats` varchar(50) NOT NULL,
  `prijs` double NOT NULL,
  `straat` varchar(50) NOT NULL,
  `huisnummer` int(11) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `afbeelding` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `huizen`
--

INSERT INTO `huizen` (`id`, `plaats`, `prijs`, `straat`, `huisnummer`, `postcode`, `afbeelding`) VALUES
(2, 'Enschede', 68, 'Rozenstraat', 18, '3354 bo', 'https://verbouw-gigant-nl.imgix.net/wp-content/uploads/2018/01/bungalow-laten-bouwen.jpg?auto=format%2Ccompress');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `huizen`
--
ALTER TABLE `huizen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `huizen`
--
ALTER TABLE `huizen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
