-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 06 mars 2019 à 19:56
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

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `nomRole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idRole`, `nomRole`) VALUES
(1, 'Admin'),
(2, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailVerifiedAt` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rememberToken` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `idRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `emailVerifiedAt`, `password`, `rememberToken`, `createdAt`, `updatedAt`, `idRole`) VALUES
(5, 'Lycan', 'dcl.fabienb@18pixel.fr', NULL, '$2y$10$Uz6iAFmR5LaYcMJSg0Qfzujuq04mZxWEjWZsxO5KZaSuVy/R8fBYS', NULL, NULL, NULL, 1),
(6, 'test', 'lacroixchris5733@gmail.com', NULL, '$2y$10$znIdBAsdCpSX1KQvvhmrqODPf3/PvyrZllrAKatsGR.HDKSI5cIuO', NULL, NULL, NULL, 2),
(8, 'test2', 'lacroixchris571@gmail.com', NULL, '$2y$10$ekHMvKgwUo3jxo2Sb4thPuU0A0SaRVQazGJMjUJQl41A/wTSFDJ.W', NULL, NULL, NULL, 2),
(10, 'test3', 'lkojfdik@jhd.fr', NULL, '$2y$10$2fQzeXsUhkEuKDlpzu6CX.ygU/RenJkPn8Hy37YjGGw/eCjoNP/ae', NULL, NULL, NULL, 2),
(11, 'test8', 'kfdfsdfsd@lik.fr', NULL, '$2y$10$pYk6hS45OtxqlX7kkTGUjeTrxmpnGqoemmouPNerG3uPxAnwsU9p.', NULL, NULL, NULL, 2),
(12, 'ukuku', 'lfkjdkfd@kfds.fr', NULL, '$2y$10$VRyAcZn38jgLE7uXEGLJVeG5k5valKgXiEVdWdbt05.5wbLiNltMW', NULL, NULL, NULL, 2),
(13, 'hdskd', 'lkfdsfsd@gtr.fr', NULL, '$2y$10$MrLbF/MAGnTwgmWx8PBlXOJqxMpCuBH1l1ECdML.dhPu4hllFcnwe', NULL, NULL, NULL, 2),
(14, 'jdsjd', 'lkfdslfsd@lo.fr', NULL, '$2y$10$hozDKCFZwr3ib0O3C.H5LOfrbtihD.boVIcetkyMBZntyld6A1DM.', NULL, NULL, NULL, 2),
(15, 'refez', 'fez@dfskj.fr', NULL, '$2y$10$1ildDHPGa2AP/csocDgyBu009q/4PWjNVdw1pz51J4sfMeavw3G4e', NULL, NULL, NULL, 2),
(16, 'jfdjf', 'lfdlskfsd@fdh.fr', NULL, '$2y$10$V5ALPEQhFXoW70NJUeQOju3AaSukrsXiAgZwn7cPGdWmvaqIWHXBu', NULL, NULL, NULL, 2),
(23, 'ferzfez', 'jfdss@ii.fr', NULL, '$2y$10$5GaK/h24BTglKU8XsI6mMOtPDMDHldwJLBhsZH32W/JhdYFigJfMO', NULL, NULL, NULL, 2),
(25, 'fsssssss', 'kfdsfds@ofj.fr', NULL, '$2y$10$IZRMb4TfFrxkLgNxvDM2S.s95pJyq1OMu9T8bjL9TgMVjcQG9a4U6', NULL, NULL, NULL, 2),
(26, 'fedsfsdf', 'rjndjf@gmail.com', NULL, '$2y$10$4zLuiyGILTvvlUzPu6ijaOd9CCQCaq0P6/8YagzqeVgK3vONTG5Pi', NULL, NULL, NULL, 2),
(27, 'dedez', 'kdsds@jds.fr', NULL, '$2y$10$b5gg9Q9xpDJBvnE9lbVHM.gnAtYzzsKCWjMuz1yqTY3b5xMVCEKyy', NULL, NULL, NULL, 2),
(32, 'testsss', 'lfdsd@dfj.fr', NULL, '$2y$10$WDyDzN.qOPqsWIikqLzYgedlMQy0KyxbTr1BLYtMVldTFjUffpeZm', NULL, NULL, NULL, 2),
(34, 'rrrrrt', 'dskdjs@hy.fr', NULL, '$2y$10$t3XcsrXqELosFPblQBbMTuM.KD5yELeAtAaN1qMwcY9DhLEGFCQwO', NULL, NULL, NULL, 2),
(36, 'titi', 'titi@ti.fr', NULL, '$2y$10$5bs3/9abzVP1ASZAphT1mezvzwI75l2E4tGwhEROx9mgwD9gTscUa', NULL, NULL, NULL, 2),
(38, 'frakkass', 'lacroixchris57@gmail.com', NULL, '$2y$10$Lv6H6Sk8XrFTfpLsHXCMHe9lk6ovxOx9jLZnCbaxw15u.F.QHHKW2', NULL, NULL, NULL, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `FK_users_idRole` (`idRole`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
