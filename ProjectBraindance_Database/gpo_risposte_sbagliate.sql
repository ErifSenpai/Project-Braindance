-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 30, 2023 alle 22:37
-- Versione del server: 8.0.26
-- Versione PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_michaelmontanari`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `gpo_risposte_sbagliate`
--

CREATE TABLE `gpo_risposte_sbagliate` (
  `id_rispostaSbagliata` int NOT NULL,
  `id_domanda` int NOT NULL,
  `risposta_string` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `gpo_risposte_sbagliate`
--

INSERT INTO `gpo_risposte_sbagliate` (`id_rispostaSbagliata`, `id_domanda`, `risposta_string`) VALUES
(1, 1, 'Rafael Leao'),
(2, 1, 'Lautaro Martinez'),
(3, 1, 'Paulo Dybala'),
(4, 2, 'Juventus'),
(5, 2, 'Inter'),
(6, 2, 'Milan'),
(7, 3, 'Alex Meret'),
(8, 3, 'Mattia Perin'),
(9, 3, 'Mike Maignan'),
(10, 4, 'Los Angeles Lakers'),
(11, 4, 'Golden State Warriors'),
(12, 4, 'Boston Celtics'),
(13, 5, 'David Okereke'),
(14, 5, 'Domenico Berardi'),
(15, 5, 'Kingsley Ehizibue'),
(16, 6, 'David Guetta'),
(17, 6, 'Dua Lipa'),
(18, 6, 'Drake'),
(19, 7, 'Michael Jackson'),
(20, 7, 'Gloria Gaynor'),
(21, 7, 'Rick Astley'),
(22, 8, 'Mr Rain'),
(23, 8, 'Lazza'),
(24, 8, 'Ultimo'),
(25, 9, 'Per sostenere il movimento LGBTQ+'),
(26, 9, 'Per sostenere il movimento Black Lives Matter'),
(27, 9, 'Per sostenere la ricostruzione della diga del Vajont'),
(28, 10, 'Kebho'),
(29, 10, 'Rekkles'),
(30, 10, 'TenZ'),
(31, 11, 'League Of Legends World Championship'),
(32, 11, 'Major CSGO'),
(33, 11, 'Fortnite Skirmish'),
(34, 12, 'God of War Ragnarok'),
(35, 12, 'Stray'),
(36, 12, 'Horizon Forbidden West'),
(37, 13, 'Fortnite'),
(38, 13, 'League Of Legends'),
(39, 13, 'PUBG'),
(40, 14, 'Le ali della libertà'),
(41, 14, 'Il Padrino'),
(42, 14, 'Parasite'),
(43, 15, 'Daniel Day-Lewis'),
(44, 15, 'Ryan Gosling'),
(45, 15, 'Al Pacino'),
(46, 16, 'Maquia'),
(47, 16, 'Weathering with you'),
(48, 16, 'In questo angolo del mondo'),
(49, 17, 'Stranger Things'),
(50, 17, 'Riverdale'),
(51, 17, 'The Good Doctor');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `gpo_risposte_sbagliate`
--
ALTER TABLE `gpo_risposte_sbagliate`
  ADD PRIMARY KEY (`id_rispostaSbagliata`),
  ADD KEY `FK_1` (`id_domanda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
