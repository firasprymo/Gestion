-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 04 juin 2018 à 00:05
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `emplois`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `mdp_admin` varchar(100) NOT NULL,
  `hash_admin` varchar(100) NOT NULL,
  `CIN_admin` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `email_admin`, `mdp_admin`, `hash_admin`, `CIN_admin`) VALUES
(1, '', '', '', '', 0),
(2, 'a', 'a@yahoo.fr', '', '', 0),
(3, 'jihed wanen', 'jihed@yahoo.fr', '$2y$10$FPV7ZMEk7kJtPdivbwbdY.j0lEotpWhGEDW2Q0NEUKkVd4/.HsIhK', '758874998f5bd0c393da094e1967a72b', 132564);

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `nom_class` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `nom_enseignant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`id_class`, `nom_class`, `departement`, `nom_enseignant`) VALUES
(1, 'tronccommun', 'info', 'sami');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `reference_cours` varchar(50) NOT NULL,
  `nom_cours` varchar(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `nom_enseignant` varchar(100) NOT NULL,
  `fichier` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `reference_cours`, `nom_cours`, `nom_matiere`, `nom_enseignant`, `fichier`) VALUES
(17, 'a', 'z', 'z', '', 'Firas_Abdennaji_CV.pdf'),
(19, 'java', 'java', 'java', '', '13%2F14%2F15.pdf'),
(20, 'azerty', 'azerty', 'azerty', '', '13%2F14%2F15.jpg'),
(21, 'azerty', 'azerty', 'azerty', '', 'Firas_Abdennaji_CV (1).pdf');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id_dep` int(11) NOT NULL,
  `nom_dep` varchar(100) NOT NULL,
  `chef_departement` varchar(100) NOT NULL,
  `nom_class` varchar(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `nom_enseignant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id_dep`, `nom_dep`, `chef_departement`, `nom_class`, `nom_matiere`, `nom_enseignant`) VALUES
(19, 'Genie logiciel', 'montasser', 'Genie', '', 'sami gharbi');

-- --------------------------------------------------------

--
-- Structure de la table `ens`
--

CREATE TABLE `ens` (
  `id_enseignant` int(11) NOT NULL,
  `nom_enseignant` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `nom_dep` varchar(100) NOT NULL,
  `nom_class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ens`
--

INSERT INTO `ens` (`id_enseignant`, `nom_enseignant`, `prenom`, `sexe`, `login`, `role`, `nom_matiere`, `nom_dep`, `nom_class`) VALUES
(0, 'sami', 'ghabri', 'homme', '', '0', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etudiant` int(11) NOT NULL,
  `CIN_etudiant` int(100) NOT NULL,
  `carte_etudiant` int(100) NOT NULL,
  `nom_etudiant` varchar(100) NOT NULL,
  `nom_class` varchar(100) NOT NULL,
  `email_etudiant` varchar(100) NOT NULL,
  `mdp_etudiant` varchar(100) NOT NULL,
  `hash_etudiant` varchar(100) NOT NULL,
  `tel_etudiant` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id_matiere` int(10) NOT NULL,
  `nom_matiere` varchar(50) NOT NULL,
  `nom_class` varchar(50) NOT NULL,
  `groupe` varchar(100) NOT NULL,
  `nombredheure` int(100) NOT NULL,
  `nombredeseance` int(100) NOT NULL,
  `coef` int(110) NOT NULL,
  `nom_enseignant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom_matiere`, `nom_class`, `groupe`, `nombredheure`, `nombredeseance`, `coef`, `nom_enseignant`) VALUES
(31, 'java', 'tronccommun', '', 21, 60, 2, ''),
(32, 'linux', 'tronccommun', '', 4, 23, 1, 'sami');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `nom_salle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom_salle`) VALUES
(2, 'salle B'),
(3, 'salle B'),
(4, 'Salle 2'),
(5, 'Salle C');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id_seance` int(11) NOT NULL,
  `dat_debut` varchar(100) NOT NULL,
  `dat_fin` varchar(100) NOT NULL,
  `jour` varchar(100) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL,
  `nom_enseignant` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id_seance`, `dat_debut`, `dat_fin`, `jour`, `nom_matiere`, `nom_enseignant`) VALUES
(3, '08.10 - 09.40', '', 'Mardi', 'java', 'sami gharbi'),
(4, '14.20 - 15.50', '', 'Lundi', 'vendredi', 'sami');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `CIN` int(8) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `tel` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `CIN`, `first_name`, `last_name`, `tel`, `email`, `post`, `password`, `hash`, `active`) VALUES
(35, 132569, 'sami', 'gharbi', 2365, 'sami@yahoo.fr', 'enseignant', '$2y$10$FgwwexuCLQpI6gwX3rVycuoj8SIxg.zFNZqV1ztnL1wBLVq7PN3Xq', 'd240e3d38a8882ecad8633c8f9c78c9b', NULL),
(37, 0, '', '', 0, '', '', '', '', NULL),
(38, 0, 'a', '', 0, 'a@yahoo.fr', '', '', '', NULL),
(39, 132564, 'jihed wanen', '', 2659856, 'jihed@yahoo.fr', 'admin', '$2y$10$FPV7ZMEk7kJtPdivbwbdY.j0lEotpWhGEDW2Q0NEUKkVd4/.HsIhK', '758874998f5bd0c393da094e1967a72b', NULL),
(34, 13256, 'kaw', 'kaw', 23655, 'kaw@yahoo.fr', 'enseignant', '$2y$10$QIONxXvArr8JsPMiFHakheDd8tCJFYYZVPRD2c.rC4AVst.G3dn4O', 'c7e1249ffc03eb9ded908c236bd1996d', NULL),
(33, 132003, 'kawthar', 'kawthar', 2365, 'kawthar@yahoo.fr', 'admin', '$2y$10$65AzTxJrEvMOJJu2GZ6ve.j2Go5QV1ISUCxyCRe2G21.AADll3iEm', 'ab817c9349cf9c4f6877e1894a1faa00', NULL),
(31, 19326548, 'kawt', 'kawt', 23056323, 'kawt@yahoo.fr', 'etudiant', '$2y$10$en87Rk5Ly6d9J3Et2p2dV.9nnmVAI9pW3JabFls9MbLxpe6IQL64y', '0d0871f0806eae32d30983b62252da50', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`),
  ADD KEY `nom_enseignant` (`nom_enseignant`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`),
  ADD KEY `enseignant` (`nom_enseignant`),
  ADD KEY `nom_matiere` (`nom_matiere`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_dep`),
  ADD KEY `nom_class` (`nom_class`),
  ADD KEY `nom_matiere` (`nom_matiere`),
  ADD KEY `enseignant` (`nom_enseignant`),
  ADD KEY `nom_dep` (`nom_dep`);

--
-- Index pour la table `ens`
--
ALTER TABLE `ens`
  ADD PRIMARY KEY (`id_enseignant`),
  ADD KEY `nom_matiere` (`nom_matiere`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_matiere`),
  ADD KEY `enseignant` (`nom_enseignant`),
  ADD KEY `enseignant_2` (`nom_enseignant`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_seance`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_matiere` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id_seance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
