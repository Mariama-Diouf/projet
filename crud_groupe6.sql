-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 19 mars 2019 à 16:46
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crud_groupe6`
--

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE `centre` (
  `id` int(11) NOT NULL,
  `loisir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centre`
--

INSERT INTO `centre` (`id`, `loisir`) VALUES
(1, 'sport'),
(2, 'music');

-- --------------------------------------------------------

--
-- Structure de la table `etud_mat`
--

CREATE TABLE `etud_mat` (
  `id` int(11) NOT NULL,
  `ide` int(11) NOT NULL,
  `idm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etud_mat`
--

INSERT INTO `etud_mat` (`id`, `ide`, `idm`) VALUES
(1, 32, 2),
(2, 32, 3),
(3, 33, 2),
(4, 33, 3),
(5, 34, 2),
(6, 34, 3),
(7, 35, 3),
(8, 36, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etu_centre`
--

CREATE TABLE `etu_centre` (
  `id` int(11) NOT NULL,
  `ide` int(11) NOT NULL,
  `idc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etu_centre`
--

INSERT INTO `etu_centre` (`id`, `ide`, `idc`) VALUES
(1, 4, 2),
(2, 4, 1),
(3, 35, 2),
(4, 36, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe6`
--

CREATE TABLE `groupe6` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `naissance` text NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `Sexe` varchar(10) NOT NULL,
  `passworde` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe6`
--

INSERT INTO `groupe6` (`id`, `nom`, `prenom`, `naissance`, `lieu`, `mail`, `telephone`, `Sexe`, `passworde`) VALUES
(18, 'ouhdh 475', 'uiurier jjjjjjjjj', '1458632', 'khghgdeik', 'dhghghd22@gmail.com', '14563 2', 'ghjikolm', ''),
(30, 'Ordinateur hp', 'omar', '12/12/2012', 'Bourkina', 'mouss21@gmail.com', '145687587', 'Homme', 'fc7a734dba518f032608dfeb04f4eeb79f025aa7'),
(34, 'kandji', '      oufdthi', '1254', 'kedougou', 'dou1311@gmail.com', '458122', 'Homme', 'e26973e6ee8ab9cd8cb3f207d1b90f00d2669eff'),
(35, '      diallo', 'ousmane', '12/45/12365', '477@gmail.com', 'dou13@gmail.com', '1111', 'Homme', '9f9af029585ba014e07cd3910ca976cf56160616'),
(36, '      diallo', 'ousmane', '12/45/12365', 'dakar', 'mamadouj@gmail.com', '145687100', 'Homme', '9f6bf828c80134b8d3e07b058045fba6acd4e9ac');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` int(11) NOT NULL,
  `matieres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id`, `matieres`) VALUES
(1, 'Math'),
(2, 'anglais'),
(3, 'francais');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etud_mat`
--
ALTER TABLE `etud_mat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etu_centre`
--
ALTER TABLE `etu_centre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe6`
--
ALTER TABLE `groupe6`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `centre`
--
ALTER TABLE `centre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `etud_mat`
--
ALTER TABLE `etud_mat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `etu_centre`
--
ALTER TABLE `etu_centre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `groupe6`
--
ALTER TABLE `groupe6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
