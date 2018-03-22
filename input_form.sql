-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Gegenereerd op: 22 mrt 2018 om 16:22
-- Serverversie: 10.1.19-MariaDB
-- PHP-versie: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techforgood`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `input_form`
--

CREATE TABLE `input_form` (
  `id` int(11) NOT NULL,
  `achternaam` text NOT NULL,
  `leeftijd` int(11) NOT NULL,
  `geslacht` text NOT NULL,
  `school` int(11) NOT NULL,
  `afkomst` int(11) NOT NULL,
  `religie` int(11) NOT NULL,
  `resultaat` tinyint(1) NOT NULL,
  `corrupted` tinyint(1) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `input_form`
--

INSERT INTO `input_form` (`id`, `achternaam`, `leeftijd`, `geslacht`, `school`, `afkomst`, `religie`, `resultaat`, `corrupted`, `datum`) VALUES
(28, 'true', 33, 'man', 3, 2, 4, 1, 0, '2018-03-22 14:56:02'),
(29, 'hgf', 234, 'man', 0, 2, 0, 0, 0, '2018-03-22 15:00:29'),
(30, 'corrupted', 12, 'man', 1, 1, 1, 0, 0, '2018-03-22 15:19:53');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `input_form`
--
ALTER TABLE `input_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `input_form`
--
ALTER TABLE `input_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
