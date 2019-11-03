-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 03 nov. 2019 à 18:01
-- Version du serveur :  10.1.41-MariaDB-1~jessie
-- Version de PHP :  5.6.40-0+deb8u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cruiz1237388`
--
CREATE DATABASE IF NOT EXISTS `cruiz1237388` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cruiz1237388`;

-- --------------------------------------------------------

--
-- Structure de la table `LIKES`
--

CREATE TABLE `LIKES` (
  `ID` int(255) NOT NULL,
  `USERNAME` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `LIKES`
--

INSERT INTO `LIKES` (`ID`, `USERNAME`) VALUES
(103, 'Chris'),
(103, 'admin'),
(106, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `MESSAGE`
--

CREATE TABLE `MESSAGE` (
  `ID` int(11) NOT NULL,
  `CONTENU` varchar(128) NOT NULL,
  `USERNAME` varchar(128) NOT NULL,
  `NB_MOTS` tinyint(4) DEFAULT '0',
  `DATE_ENVOI` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID_PERE` int(11) DEFAULT NULL,
  `LIKES` int(11) DEFAULT '0',
  `MODIFIE` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `MESSAGE`
--

INSERT INTO `MESSAGE` (`ID`, `CONTENU`, `USERNAME`, `NB_MOTS`, `DATE_ENVOI`, `ID_PERE`, `LIKES`, `MODIFIE`) VALUES
(103, 'Premier topic', 'Chris', 2, '2019-11-03 12:05:19', NULL, 0, 0),
(104, 'Message supprimé par admin', 'Chris', 2, '2019-11-03 12:05:38', 103, 0, 0),
(105, 'Message supprimé par Chris', 'Chris', 2, '2019-11-03 12:05:49', 103, 0, 0),
(106, 'Mon topic', 'admin', 2, '2019-11-03 12:06:12', NULL, 0, 0),
(107, 'Message supprimé par admin', 'admin', 2, '2019-11-03 12:09:50', 106, 0, 0),
(108, '3me message', 'admin', 2, '2019-11-03 12:10:16', 106, 0, 0),
(109, '4me message', 'admin', 2, '2019-11-03 12:10:22', 106, 0, 0),
(110, '5me message', 'admin', 2, '2019-11-03 12:10:27', 106, 0, 0),
(111, '6me message', 'admin', 2, '2019-11-03 12:10:33', 106, 0, 0),
(112, '7me message', 'admin', 2, '2019-11-03 12:10:39', 106, 0, 0),
(113, '8me message', 'admin', 2, '2019-11-03 12:10:45', 106, 0, 0),
(114, '9me message', 'admin', 2, '2019-11-03 12:10:52', 106, 0, 0),
(115, '9me reponse', 'admin', 2, '2019-11-03 12:11:17', 106, 0, 0),
(116, 'Derniere reponse', 'admin', 2, '2019-11-03 12:11:24', 106, 0, 0),
(124, 'Message modifié', 'Chris', 2, '2019-11-03 16:36:29', 103, 0, 1),
(127, 'Seule reponse', 'guest', 2, '2019-11-03 16:53:25', 103, 0, 0),
(128, 'Hello', 'Guest', 1, '2019-11-03 16:56:32', NULL, 0, 0),
(130, 'Seule reponse', 'Guest', 2, '2019-11-03 16:57:05', 128, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE `UTILISATEUR` (
  `USERNAME` varchar(20) NOT NULL,
  `MAIL` varchar(30) NOT NULL,
  `PASS` varchar(128) NOT NULL,
  `DATE_INSCRIPTION` date DEFAULT NULL,
  `IS_ADMIN` tinyint(1) DEFAULT '0',
  `NB_TOPICS` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`USERNAME`, `MAIL`, `PASS`, `DATE_INSCRIPTION`, `IS_ADMIN`, `NB_TOPICS`) VALUES
('admin', 'admin.freenote@yopmail.com', '$2y$10$ZVUs2ftPojW7ueHQ9A6Iq.QzANAf7Ur5kr5/bSGoZAxeyRN4lqAbm', '2019-10-14', 1, 0),
('Chris', 'christophe.ruiz@etu.univ-amu.f', '$2y$10$mrnlUB4JvHa3xadja2a3/e26Gl.UlY1sVh3Vxb2/yLkFRBbkq270e', '2019-10-14', 1, 0),
('Guest', 'guest@example.com', '$2y$10$OCbXDdglVehhqWW9FNuA3uXhc8bM37tNoqE48qh7vW9PBz.inIxCi', '2019-10-16', 0, 0),
('josee', 'voiture123@gmail.com', '$2y$10$v98NDHbQISuksmVLGokIL.avVIhcUbW0cPY6WwFmFVqxOToLhLSPO', '2019-11-01', 0, 0),
('steffen', 'stefou@gmail.com', '$2y$10$I7U8yVljf4ZY6L65NZFj3uD8NPlyYzOVpOPkomBmD6cADMXRMYTvS', '2019-11-01', 0, 0),
('Thomas', 'jsp@gmail.com', '$2y$10$M1IbbUC3m6XQOuZc0jE6..aJJrvr4U/XN2cWoygUNYQTMDJO6qLzW', '2019-11-01', 1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `MESSAGE`
--
ALTER TABLE `MESSAGE`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERNAME` (`USERNAME`);

--
-- Index pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD PRIMARY KEY (`USERNAME`,`MAIL`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `MESSAGE`
--
ALTER TABLE `MESSAGE`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
