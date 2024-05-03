-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 mai 2024 à 19:23
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionutilisateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `opinions`
--

DROP TABLE IF EXISTS `opinions`;
CREATE TABLE IF NOT EXISTS `opinions` (
  `nom` varchar(50) NOT NULL,
  `avis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `opinions`
--

INSERT INTO `opinions` (`nom`, `avis`) VALUES
('qs', 'dddddd'),
('samira', 'hey'),
('taslim', 'salut'),
(' c c ', 'fvdfvdfvef'),
('hassan', 'ouioui'),
('', ''),
('qas', 'azerty'),
('kjjj', 'azert'),
('ty', 'jkhhjjj'),
('rayan', 'hassan'),
('hama', 'wow'),
('mmm', '\r\nmmm');

-- --------------------------------------------------------

--
-- Structure de la table `utlisateur`
--

DROP TABLE IF EXISTS `utlisateur`;
CREATE TABLE IF NOT EXISTS `utlisateur` (
  `numero` int(11) NOT NULL,
  `nom` text NOT NULL,
  `mail` text NOT NULL,
  `mdp` int(11) NOT NULL,
  `statut` int(11) DEFAULT '0',
  PRIMARY KEY (`numero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utlisateur`
--

INSERT INTO `utlisateur` (`numero`, `nom`, `mail`, `mdp`, `statut`) VALUES
(4, 'mm', 'nimah5828@gmail.com', 12345, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
