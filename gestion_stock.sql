-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 05 oct. 2022 à 17:36
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `CodeCat` varchar(15) NOT NULL,
  `LibelleCat` varchar(40) NOT NULL,
  PRIMARY KEY (`CodeCat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`CodeCat`, `LibelleCat`) VALUES
('cd11', ' gjghk'),
('Cd13', ' gkld'),
('cd3', ' 23');

-- --------------------------------------------------------

--
-- Structure de la table `detailentree`
--

DROP TABLE IF EXISTS `detailentree`;
CREATE TABLE IF NOT EXISTS `detailentree` (
  `ReferencePro` varchar(15) NOT NULL,
  `idEntree` int(11) NOT NULL,
  `QteEntree` int(11) DEFAULT NULL,
  `PrixAchat` int(11) DEFAULT NULL,
  KEY `ReferencePro` (`ReferencePro`),
  KEY `idEntree` (`idEntree`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `detailsortie`
--

DROP TABLE IF EXISTS `detailsortie`;
CREATE TABLE IF NOT EXISTS `detailsortie` (
  `ReferencePro` varchar(15) NOT NULL,
  `idSortie` int(11) NOT NULL,
  `QteSortie` int(11) DEFAULT NULL,
  KEY `ReferencePro` (`ReferencePro`),
  KEY `idSortie` (`idSortie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entree`
--

DROP TABLE IF EXISTS `entree`;
CREATE TABLE IF NOT EXISTS `entree` (
  `idEntree` int(11) NOT NULL,
  `dateEntree` date NOT NULL,
  `montantEntree` int(11) NOT NULL,
  PRIMARY KEY (`idEntree`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `ReferencePro` varchar(15) NOT NULL,
  `Prix` int(11) NOT NULL,
  `LibellePro` varchar(40) NOT NULL,
  `QteStock` int(11) NOT NULL,
  `QteAlert` int(11) NOT NULL,
  `CodeCat` varchar(15) NOT NULL,
  PRIMARY KEY (`ReferencePro`),
  KEY `CodeCat` (`CodeCat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ReferencePro`, `Prix`, `LibellePro`, `QteStock`, `QteAlert`, `CodeCat`) VALUES
('ffhq', 122, 'kjm', 54, 12, 'cd11 ');

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

DROP TABLE IF EXISTS `sortie`;
CREATE TABLE IF NOT EXISTS `sortie` (
  `idSortie` int(11) NOT NULL,
  `dateSortie` date NOT NULL,
  `montantSortie` int(11) NOT NULL,
  PRIMARY KEY (`idSortie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
