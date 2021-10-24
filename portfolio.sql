-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 okt 2021 om 17:18
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `github_link` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`id`, `name`, `picture`, `description`, `github_link`, `project_link`) VALUES
(1, 'Project DICA ', 'img/gokspel.png', 'Programmeertaal: C#', 'https://github.com/ROCMondriaanTIN/sd20-project-higher-lower-ayberkyonar', 'hogerlager.html'),
(2, 'Project Rekenmachine', 'img/rekenmachine.jpg', 'Programmeertalen: HTML, CSS en JavaScript', 'https://github.com/ayberkyonar/rekenmachine-js', 'rekenmachine.html'),
(3, 'Project Tic Tac Toe', 'img/bke.jpg', 'Programmeertalen: HTML, CSS en JavaScript', 'https://github.com/ROCMondriaanTIN/sd20-js-p4-classes-ayberkyonar', 'bke.html'),
(4, 'Project Leerspel', 'img/z.png', 'Programmeertalen: HTML, CSS en JavaScript', 'https://github.com/ROCMondriaanTIN/sd20-kd5029-interactiondesign-zeus-designs', 'login.html'),
(5, 'Project Pizza Mes', 'img/logo.jpg', 'Programmeertalen: HTML en CSS', 'https://github.com/ROCMondriaanTIN/sd20-bootstrap-toets-pizzames-ayberkyonar', 'pizzames.html'),
(6, 'Project Dice Game', 'img/diceproject.jpg', 'Programmeertaal: C#', 'https://github.com/ROCMondriaanTIN/sd20-csharp-dice-assignment-ayberkyonar', 'dicegame.html');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `projecten`
--
ALTER TABLE `projecten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
