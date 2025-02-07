-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 07, 2025 alle 09:18
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `department_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `componenti`
--

CREATE TABLE `componenti` (
  `id_comp` varchar(4) NOT NULL,
  `nome_componente` varchar(25) NOT NULL,
  `fornitore` varchar(25) NOT NULL,
  `costo_unitario` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `composizioni`
--

CREATE TABLE `composizioni` (
  `id_prod` varchar(4) NOT NULL,
  `id_comp` varchar(4) NOT NULL,
  `unita_comp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `dipartimenti`
--

CREATE TABLE `dipartimenti` (
  `id_dip` varchar(3) NOT NULL,
  `nome_dipartimento` varchar(30) NOT NULL,
  `localita` varchar(20) NOT NULL,
  `provincia` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `personale`
--

CREATE TABLE `personale` (
  `matricola` varchar(5) NOT NULL,
  `id_dip` varchar(3) NOT NULL,
  `nominativo` varchar(50) NOT NULL,
  `data_nascita` date NOT NULL,
  `qualifica` varchar(2) NOT NULL,
  `stipendio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id_prod` varchar(4) NOT NULL,
  `id_dip` varchar(3) NOT NULL,
  `nome_prodotto` varchar(50) NOT NULL,
  `prezzo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `componenti`
--
ALTER TABLE `componenti`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indici per le tabelle `composizioni`
--
ALTER TABLE `composizioni`
  ADD PRIMARY KEY (`id_prod`,`id_comp`),
  ADD KEY `ComponentiComposizioni` (`id_comp`);

--
-- Indici per le tabelle `dipartimenti`
--
ALTER TABLE `dipartimenti`
  ADD PRIMARY KEY (`id_dip`);

--
-- Indici per le tabelle `personale`
--
ALTER TABLE `personale`
  ADD PRIMARY KEY (`matricola`),
  ADD KEY `DipartimentiPersonale` (`id_dip`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `DipartimentiProdotti` (`id_dip`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `composizioni`
--
ALTER TABLE `composizioni`
  ADD CONSTRAINT `ComponentiComposizioni` FOREIGN KEY (`id_comp`) REFERENCES `componenti` (`id_comp`),
  ADD CONSTRAINT `ProdottiComposizioni` FOREIGN KEY (`id_prod`) REFERENCES `prodotti` (`id_prod`);

--
-- Limiti per la tabella `personale`
--
ALTER TABLE `personale`
  ADD CONSTRAINT `DipartimentiPersonale` FOREIGN KEY (`id_dip`) REFERENCES `dipartimenti` (`id_dip`);

--
-- Limiti per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  ADD CONSTRAINT `DipartimentiProdotti` FOREIGN KEY (`id_dip`) REFERENCES `dipartimenti` (`id_dip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
