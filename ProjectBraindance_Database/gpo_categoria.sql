-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 30, 2023 alle 22:36
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
-- Struttura della tabella `gpo_categoria`
--

CREATE TABLE `gpo_categoria` (
  `id_categoria` int NOT NULL,
  `des` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `gpo_categoria`
--

INSERT INTO `gpo_categoria` (`id_categoria`, `des`) VALUES
(1, 'Sport'),
(2, 'Musica'),
(3, 'Videogiochi'),
(4, 'Cinema');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `gpo_categoria`
--
ALTER TABLE `gpo_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `gpo_categoria`
--
ALTER TABLE `gpo_categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
