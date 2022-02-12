-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 fév. 2022 à 19:47
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(20) NOT NULL,
  `nomComplet` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `MotPass` varchar(100) NOT NULL,
  `CNE` varchar(100) NOT NULL,
  `imguser` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nomComplet`, `email`, `MotPass`, `CNE`, `imguser`) VALUES
(36, 'Ahmed Boudan', 'ahmedboudan@gmail.com', 'ahmedahmed', 'P147008400', 'Ahmed.jpg'),
(38, 'eleve ingenieur1', 'eleve1@gmail.com', 'eleve11', '12345678', 'Ahmed.jpg'),
(39, 'eleve ingenieur2', 'eleve2@gmail.com', 'eleve2', '1243244434', 'Ahmed.jpg'),
(40, 'eleve ingenieur3', 'eleve3@gmail.com', 'eleve3', '243324435', 'Ahmed.jpg'),
(41, 'eleve ingenieur4', 'eleve4@gmail.com', 'eleve4', '664535663', 'Ahmed.jpg'),
(42, 'eleve ingenieur7', 'eleve@gmail.com', '12345', '4435553535', 'eleve1.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
