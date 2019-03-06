-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 06 mars 2019 à 19:54
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `teamplay`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `ID` int(6) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datePost` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`ID`, `pseudo`, `message`, `datePost`) VALUES
(1, 'frakkass', '', '2019-03-06 16:47:44'),
(2, 'frakkass', 'test', '2019-03-06 16:47:44'),
(3, 'test', 'yes :)', '2019-03-06 16:47:44'),
(8, 'lacroixchris', 'la longueur n\'a pas d\'importance, je ne limite pas à 255 char... à voir ce que cela peut donner sur la div....Surtout avec des pavés comme çà!', '2019-03-06 16:47:44'),
(9, 'frakkass', 'alors cette div avec 5 messages ca donne quoi?', '2019-03-06 16:47:44'),
(10, 'frakkass', 'test de l\'heure', '2019-03-06 16:50:32'),
(11, '', 'test', '2019-03-06 16:56:45'),
(12, 'frakkass', 'test', '2019-03-06 16:58:29'),
(13, 'frakkass', 'yes :)', '2019-03-06 17:01:41'),
(14, 'frakkass', 'test', '2019-03-06 17:28:22'),
(15, 'frakkass', 'test avec objet php', '2019-03-06 17:32:11'),
(16, 'frakkass', 'YES !!!', '2019-03-06 17:32:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
