-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Ott 01, 2017 alle 21:23
-- Versione del server: 5.6.34-log
-- Versione PHP: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prova`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articoli_cp`
--

CREATE TABLE `articoli_cp` (
  `id` int(11) NOT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `note_realizzazione` varchar(10000) DEFAULT NULL,
  `prezzo` varchar(45) DEFAULT NULL,
  `nome_file` varchar(45) NOT NULL,
  `vendita` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `articoli_cp`
--

INSERT INTO `articoli_cp` (`id`, `categoria`, `nome`, `note_realizzazione`, `prezzo`, `nome_file`, `vendita`) VALUES
(1, 'arredo', 'Cornice con occhio', 'Una cornice davvero bella con un occhio dentro', '11 ', 'corniceocchio.jpg', ''),
(2, 'arredo', 'Cuore', 'Un cuore realistico e bellissimo', '30', 'cuore.jpg', ''),
(3, 'arredo', 'Formaggi', 'Formaggi buonissimi e bellissimi', '12', 'formaggi.jpg', ''),
(4, 'anatomia', 'Seni', 'Seni realistici e molto molto belli', '30', 'seni.jpg', 'acquistabile'),
(5, 'anatomia', 'Pelle sintetica', 'Una bellissima pelle sintetica per tatuaggi', '20', 'pellesintetica.jpg', 'acquistabile'),
(6, 'anatomia', 'Coniglio', 'Un bellissimo coniglio', '20 ', 'coniglio.jpg', 'acquistabile'),
(7, 'scenografie', 'Carro', 'Un bellissimo carro', '300 ', 'carro.jpg', ''),
(8, 'carachters', 'Profondo rosso', 'Bellissimo davvero', '50 ', 'profondorosso.jpg', ''),
(9, 'artwork', 'Sanguisuga', 'NON SCRIVIAMO NIENTE', '10', 'sanguisuga.jpeg', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglio_ordini`
--

CREATE TABLE `dettaglio_ordini` (
  `id_ordine` int(11) NOT NULL,
  `id_prodotto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `dettaglio_ordini`
--

INSERT INTO `dettaglio_ordini` (`id_ordine`, `id_prodotto`) VALUES
(14, 2),
(15, 2),
(15, 3),
(15, 4),
(17, 2),
(17, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `images`
--

INSERT INTO `images` (`id`, `file_name`, `title`, `uploaded_on`, `status`) VALUES
(1, 'coniglio.jpg', 'coniglio', '2017-09-08 00:00:00', '1'),
(2, 'formaggi.jpg', 'formaggi', '2017-09-14 00:00:00', '1'),
(3, 'cuore.jpg', 'cuore', '2017-09-01 00:00:00', '1'),
(4, 'carro.jpg', 'carro', '2017-09-15 00:00:00', ''),
(5, 'carro.jpg', 'carro', '2017-09-14 00:00:00', '1'),
(6, 'corniceocchio.jpg', 'cornice occhio', '2017-09-28 00:00:00', '1'),
(7, 'pellesintetica.jpg', 'pelle', '2017-09-16 00:00:00', '0'),
(8, 'seni.jpg', 'seni', '2017-09-30 00:00:00', '1'),
(9, 'sanguisuga.jpeg', 'sanguisuga', '2017-09-13 00:00:00', '1');

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `totale` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`id`, `name`, `totale`) VALUES
(14, '', 30),
(15, '', 72),
(16, '', 41),
(17, '', 60);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `pwd` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `pwd`, `email`) VALUES
(1, 'aaa', 'aaa', 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09', 'ciao@dd.it'),
(2, 'vvv', 'vvv', '4ce9792f2871988864761ef032ce09646333c81667d5d3360a82d7c47411c0b46846437ac5e304880fb5d7510d0af3d7af5a666a1f0459df1e04d1a8683bbe13', 'ciao@dd.it'),
(3, 'aa', 'aaa', '4ce9792f2871988864761ef032ce09646333c81667d5d3360a82d7c47411c0b46846437ac5e304880fb5d7510d0af3d7af5a666a1f0459df1e04d1a8683bbe13', 'cc@aa.ku'),
(4, 'aaa', 'ddd', '4ce9792f2871988864761ef032ce09646333c81667d5d3360a82d7c47411c0b46846437ac5e304880fb5d7510d0af3d7af5a666a1f0459df1e04d1a8683bbe13', 'ciao@dd.it'),
(6, 'zoe', 'monella', 'a26c3eeb7241580c5ba6e912da5f3b9d2dbc289bf004e6c1db45661ef13d54d264715c86200f2372ad76b52b144c457f244874f3371169422c3e17eb4beea562', 'zoe@zoe.it'),
(7, 'zoe', 'zoe', 'a26c3eeb7241580c5ba6e912da5f3b9d2dbc289bf004e6c1db45661ef13d54d264715c86200f2372ad76b52b144c457f244874f3371169422c3e17eb4beea562', 'zoe@zoe.it'),
(8, 'valeria', 'aaav', 'fd134920643b9b603403f4cd2a7d1b3fa13b61fc373fe0cfea5447adf7827bbfd14e10cc6610b0d5cd7e5d8cb21dbd4afc3cdc42a462601bf05e6aad0e199d2a', 'valerialongom@gmail.com'),
(9, 'aaaaaa', 'cccccc', '4ce9792f2871988864761ef032ce09646333c81667d5d3360a82d7c47411c0b46846437ac5e304880fb5d7510d0af3d7af5a666a1f0459df1e04d1a8683bbe13', 'ciao@dd.it'),
(10, 'aaadd', 'vfgtrhrci', '7feb97ff3e1ecccfbe39f009f766eab85e28fd6f7e0713e3d36429a5b8eba802c26501cd1f674608d457bb3756c924751acdd02d4ecdaeee2eacdf8c738ad60a', 'ciao@dd.it'),
(11, 'aa', 'kdnkd', '4b0ab7b94e92a4f175774a4ad8a9a8c4d273671086ef091a689d63d3752a53ba043a1daf6204c9d4043b24bb42e18903029b43acd5efeabf7f368c26d532ab6e', 'ciao@dd.it'),
(12, 'aaaaaee', 'eeee', 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09', 'ciao@dd.it'),
(13, 'valeria', 'longo', 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09', 'valerialongom@gmail.com'),
(14, 'gipi', 'gipi', 'f81ff77ff58db12ceeafa835b729537eebc119380dbba02d5c06019fc9a6e810f0ded248a2498b59d3bdd6f606c0140278dedd229a5a461ab82a4dece2b5ee2e', 'gipimonello@gmail.com'),
(15, 'addww', 'www', '4e83a3339059f0cc30910ae3ca1d01d854a0fefd2f277776e044daad540bbdd5c79033a1c2eb851dffd258194bd58f5657e93fa21b70b5180e7d0efc60040cd4', 'gipimonello@gmail.com'),
(16, 'jjjj', 'ssss', 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09', 'gipimonello@gmail.com'),
(17, 'kdjd', 'dkndk', 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09', 'gipimonello@gmail.com'),
(18, 'kdjd', 'dkndk', 'f81ff77ff58db12ceeafa835b729537eebc119380dbba02d5c06019fc9a6e810f0ded248a2498b59d3bdd6f606c0140278dedd229a5a461ab82a4dece2b5ee2e', 'gipimonello@gmail.com'),
(19, 'aaa', 'aaa', 'f81ff77ff58db12ceeafa835b729537eebc119380dbba02d5c06019fc9a6e810f0ded248a2498b59d3bdd6f606c0140278dedd229a5a461ab82a4dece2b5ee2e', 'gipimonello@gmail.com'),
(20, 'aa', 'aaa', 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09', 'gipimonello@gmail.com'),
(21, 'a', 'aa', '1f40fc92da241694750979ee6cf582f2d5d7d28e18335de05abc54d0560e0f5302860c652bf08d560252aa5e74210546f369fbbbce8c12cfc7957b2652fe9a75', 'zoe@zoe.it'),
(22, 'mm', 'mm', 'f6c5600ed1dbdcfdf829081f5417dccbbd2b9288e0b427e65c8cf67e274b69009cd142475e15304f599f429f260a661b5df4de26746459a3cef7f32006e5d1c1', 'mm@aa.it'),
(23, 'qq', 'qq', 'f6c5600ed1dbdcfdf829081f5417dccbbd2b9288e0b427e65c8cf67e274b69009cd142475e15304f599f429f260a661b5df4de26746459a3cef7f32006e5d1c1', 'qq@a.ir'),
(24, 'qq', 'qq', '4ce9792f2871988864761ef032ce09646333c81667d5d3360a82d7c47411c0b46846437ac5e304880fb5d7510d0af3d7af5a666a1f0459df1e04d1a8683bbe13', 'qq@ie.rr');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articoli_cp`
--
ALTER TABLE `articoli_cp`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `dettaglio_ordini`
--
ALTER TABLE `dettaglio_ordini`
  ADD PRIMARY KEY (`id_ordine`,`id_prodotto`),
  ADD KEY `fk_dettaglio_ordine` (`id_ordine`),
  ADD KEY `fk_dettaglio_prodotto` (`id_prodotto`);

--
-- Indici per le tabelle `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ordini_utente` (`name`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articoli_cp`
--
ALTER TABLE `articoli_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT per la tabella `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
