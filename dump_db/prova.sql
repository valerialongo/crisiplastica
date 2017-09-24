-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2017 at 08:10 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

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
-- Table structure for table `articoli_cp`
--

CREATE TABLE `articoli_cp` (
  `id` int(11) NOT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `note_realizzazione` varchar(10000) DEFAULT NULL,
  `prezzo` varchar(45) DEFAULT NULL,
  `immagine` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articoli_cp`
--

INSERT INTO `articoli_cp` (`id`, `categoria`, `nome`, `note_realizzazione`, `prezzo`, `immagine`) VALUES
(1, 'arredo', 'Cornice con occhio', 'una bellissima cornice con un bellissimo occhio è stupenda davvero', '11 euro', 'corniceocchio.jpg'),
(2, 'props', 'Cuore', 'un bellissimo cuore di merda', '30 euro', 'cuore.jpg'),
(3, 'mockup', 'Formaggi', 'disgustosi formaggi', '12 euro', 'formaggi.jpg'),
(4, 'anatomia', 'Seni', 'seni stupendi ma per davvero', '30 euro', 'seni.jpg'),
(5, 'supplies', 'Pelle sintetica', 'una bellissima pelle sintetica ', '20 euro', 'pellesintetica.jpg'),
(6, 'sfx', 'Coniglio', 'una bella minchia fritta', '20 euro', 'coniglio.jpg'),
(7, 'scenografie', 'Carro', 'che cazzo è', '300 euro', 'carro.jpg'),
(8, 'carachters', 'Profondo rosso', 'sta gran coppola', '50 euro', 'profondorosso.jpg'),
(9, 'artwork', 'Sanguisuga', 'NON SCRIVIAMO NIENTE', '100000 euro', 'sanguisuga.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dettaglio_ordini`
--

CREATE TABLE `dettaglio_ordini` (
  `id_ordine` int(11) NOT NULL,
  `id_prodotto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dettaglio_ordini`
--

INSERT INTO `dettaglio_ordini` (`id_ordine`, `id_prodotto`) VALUES
(14, 2),
(15, 2),
(15, 3),
(15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ordini`
--

CREATE TABLE `ordini` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `totale` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordini`
--

INSERT INTO `ordini` (`id`, `name`, `totale`) VALUES
(14, '', 30),
(15, '', 72),
(16, '', 41);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `pwd` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
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
(21, 'a', 'aa', '1f40fc92da241694750979ee6cf582f2d5d7d28e18335de05abc54d0560e0f5302860c652bf08d560252aa5e74210546f369fbbbce8c12cfc7957b2652fe9a75', 'zoe@zoe.it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articoli_cp`
--
ALTER TABLE `articoli_cp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dettaglio_ordini`
--
ALTER TABLE `dettaglio_ordini`
  ADD PRIMARY KEY (`id_ordine`,`id_prodotto`),
  ADD KEY `fk_dettaglio_ordine` (`id_ordine`),
  ADD KEY `fk_dettaglio_prodotto` (`id_prodotto`);

--
-- Indexes for table `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ordini_utente` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordini`
--
ALTER TABLE `ordini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
