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
-- Struttura della tabella `gpo_domanda`
--

CREATE TABLE `gpo_domanda` (
  `id_domanda` int NOT NULL,
  `id_categoria` int NOT NULL,
  `domanda_string` varchar(512) NOT NULL,
  `risposta_string` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `gpo_domanda`
--

INSERT INTO `gpo_domanda` (`id_domanda`, `id_categoria`, `domanda_string`, `risposta_string`) VALUES
(1, 1, 'Chi ha segnato più gol nella stagione 2022/2023?', 'Victor Osihmen'),
(2, 1, 'Chi ha vinto lo scudetto 2022/2023?', 'Napoli'),
(3, 1, 'Chi ha fatto più parate nella stagione 2022/2023?', 'Lorenzo Montipò'),
(4, 1, 'Chi ha fatto più partite vinte nella regular season 22/23 del NBA?', 'Milwaukee Bucks'),
(5, 1, 'Quale tra questi giocatori di calcio ha giocato nella stagione 22/23 al Bologna FC?', 'Marko Arnautovic'),
(6, 2, 'Quale tra questi artisti detiene il primo posto per ascolti su Spotify?', 'TheWeeknd'),
(7, 2, 'Da chi è stata cantata Stayin Alive nel 1977?', 'Bee Gees'),
(8, 2, 'Chi ha vinto l\'edizione 2023 di Sanremo', 'Marco Mengoni'),
(9, 2, 'Per quale motivo è stata scritta We Are The World', 'Per scopo di beneficenza per supportare le popolazione in Etiopia'),
(10, 3, 'Quale giocatore è diventato famoso come il migliore di League Of Legends?', 'Faker'),
(11, 3, 'Quale torneo di Esports fu pagato di più?', 'The International'),
(12, 3, 'Quale gioco ha vinto GOTY 2022?', 'Elden Ring'),
(13, 3, 'Quale gioco ha la community più tossica del panorama videoludico?', 'Valorant'),
(14, 4, 'Quale film ha ricevuto più award rispetto ad altri nel 2022?', 'Titanic'),
(15, 4, 'Quale attore ha vinto più oscar all-time?', 'Katherine Hepburn'),
(16, 4, 'Quale di questi film è animato dallo studio Ghibli?', 'Il Castello errante di Howl'),
(17, 4, 'Quale serie Netflix ha come main actress Jenna Ortega?', 'Mercoledì');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `gpo_domanda`
--
ALTER TABLE `gpo_domanda`
  ADD PRIMARY KEY (`id_domanda`),
  ADD KEY `FK_1` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
