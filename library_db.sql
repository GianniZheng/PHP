-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 24, 2025 alle 12:17
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
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Articolo`
--

CREATE TABLE `Articolo` (
  `ID_Articolo` int(11) NOT NULL,
  `Data_pubblicazione` date DEFAULT NULL,
  `Prezzo` double DEFAULT NULL,
  `Descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Articolo`
--

INSERT INTO `Articolo` (`ID_Articolo`, `Data_pubblicazione`, `Prezzo`, `Descrizione`) VALUES
(101, '2025-01-15', 49.99, 'Tavolo in legno massello di alta qualità'),
(102, '2025-01-20', 129.5, 'Lampada da tavolo moderna con luce LED regolabile'),
(103, '2025-01-23', 19.9, 'Set di posate in acciaio inox, 24 pezzi');

-- --------------------------------------------------------

--
-- Struttura della tabella `CD`
--

CREATE TABLE `CD` (
  `ID_CD` varchar(11) NOT NULL,
  `Titolo` varchar(20) DEFAULT NULL,
  `Genere` varchar(20) DEFAULT NULL,
  `Compositore` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `CD`
--

INSERT INTO `CD` (`ID_CD`, `Titolo`, `Genere`, `Compositore`) VALUES
('CD001', 'Moonlight', 'Classica', 'Beethoven'),
('CD002', 'Jazz Vibes', 'Jazz', 'Davis'),
('CD003', 'Epic Sound', 'Colonne sonore', 'Zimmer');

-- --------------------------------------------------------

--
-- Struttura della tabella `Cliente`
--

CREATE TABLE `Cliente` (
  `Cod_fiscale` varchar(16) NOT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `Cognome` varchar(20) DEFAULT NULL,
  `Num_Telefono` int(9) DEFAULT NULL,
  `Credito` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Cliente`
--

INSERT INTO `Cliente` (`Cod_fiscale`, `Nome`, `Cognome`, `Num_Telefono`, `Credito`) VALUES
('RSSMRA85M01H501Z', 'Maria', 'Rossi', 329456789, 50.75),
('VRDLGI90L10F205Q', 'Luigi', 'Verdi', 347123456, 120.3);

-- --------------------------------------------------------

--
-- Struttura della tabella `DVD`
--

CREATE TABLE `DVD` (
  `ID_DVD` varchar(11) NOT NULL,
  `Titolo` varchar(20) DEFAULT NULL,
  `Genere` varchar(20) DEFAULT NULL,
  `Regista` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `DVD`
--

INSERT INTO `DVD` (`ID_DVD`, `Titolo`, `Genere`, `Regista`) VALUES
('DVD001', 'Inception', 'Sci-Fi', 'Nolan'),
('DVD002', 'Titanic', 'Romantico', 'Cameron'),
('DVD003', 'The Matrix', 'Azione', 'Wachowski');

-- --------------------------------------------------------

--
-- Struttura della tabella `Libro`
--

CREATE TABLE `Libro` (
  `ID_Libro` varchar(11) NOT NULL,
  `Titolo` varchar(20) DEFAULT NULL,
  `Autore` varchar(20) DEFAULT NULL,
  `Editore` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Libro`
--

INSERT INTO `Libro` (`ID_Libro`, `Titolo`, `Autore`, `Editore`) VALUES
('LIB001', '1984', 'Orwell', 'Mondadori'),
('LIB002', 'Il Signore', 'Tolkien', 'Bompiani'),
('LIB003', 'Amici Veri', 'Kinsella', 'Feltrinelli');

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordine`
--

CREATE TABLE `Ordine` (
  `N° Ordine` varchar(11) NOT NULL,
  `ID_Articolo` int(11) DEFAULT NULL,
  `Cod_fiscale` varchar(16) DEFAULT NULL,
  `Costo` float DEFAULT NULL,
  `Stato` varchar(20) DEFAULT NULL,
  `Data/Ora di ricezione` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Ordine`
--

INSERT INTO `Ordine` (`N° Ordine`, `ID_Articolo`, `Cod_fiscale`, `Costo`, `Stato`, `Data/Ora di ricezione`) VALUES
('ORD001', 101, 'RSSMRA85M01H501Z', 55, 'impachettato', '2025-01-24 10:30:15.123456'),
('ORD002', 102, 'VRDLGI90L10F205Q', 130.5, 'ricevuto', '2025-01-25 14:45:00.654321'),
('ORD003', 103, 'RSSMRA85M01H501Z', 20, 'consegnato', '2025-01-23 09:15:45.987654'),
('ORD004', 103, 'VRDLGI90L10F205Q', 20, 'inoltrato', '2025-01-23 16:20:30.321000');

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordine-Articolo`
--

CREATE TABLE `Ordine-Articolo` (
  `N° Ordine` varchar(11) NOT NULL,
  `ID_Articolo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Ordine-Articolo`
--

INSERT INTO `Ordine-Articolo` (`N° Ordine`, `ID_Articolo`) VALUES
('ORD001', 101),
('ORD002', 102),
('ORD003', 103),
('ORD004', 103);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Articolo`
--
ALTER TABLE `Articolo`
  ADD PRIMARY KEY (`ID_Articolo`);

--
-- Indici per le tabelle `CD`
--
ALTER TABLE `CD`
  ADD PRIMARY KEY (`ID_CD`);

--
-- Indici per le tabelle `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`Cod_fiscale`);

--
-- Indici per le tabelle `DVD`
--
ALTER TABLE `DVD`
  ADD PRIMARY KEY (`ID_DVD`);

--
-- Indici per le tabelle `Libro`
--
ALTER TABLE `Libro`
  ADD PRIMARY KEY (`ID_Libro`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `Ordine`
  ADD PRIMARY KEY (`N° Ordine`),
  ADD KEY `FK` (`Cod_fiscale`),
  ADD KEY `ID_Articolo` (`ID_Articolo`);

--
-- Indici per le tabelle `Ordine-Articolo`
--
ALTER TABLE `Ordine-Articolo`
  ADD PRIMARY KEY (`N° Ordine`,`ID_Articolo`),
  ADD KEY `ID_Articolo` (`ID_Articolo`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Ordine`
--
ALTER TABLE `Ordine`
  ADD CONSTRAINT `Ordine_ibfk_1` FOREIGN KEY (`ID_Articolo`) REFERENCES `Articolo` (`ID_Articolo`);

--
-- Limiti per la tabella `Ordine-Articolo`
--
ALTER TABLE `Ordine-Articolo`
  ADD CONSTRAINT `Ordine-Articolo_ibfk_1` FOREIGN KEY (`N° Ordine`) REFERENCES `Ordine` (`N° Ordine`),
  ADD CONSTRAINT `Ordine-Articolo_ibfk_2` FOREIGN KEY (`ID_Articolo`) REFERENCES `Articolo` (`ID_Articolo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
