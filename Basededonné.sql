-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mer 20 Novembre 2013 à 14:04
-- Version du serveur: 5.1.37
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `purplemusic`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE IF NOT EXISTS `groupes` (
  `Nom` varchar(255) NOT NULL,
  `Genres` varchar(255) NOT NULL,
  `NbMembres` int(11) NOT NULL,
  `Instruments` varchar(255) NOT NULL,
  `Nationnalite` varchar(255) NOT NULL,
  `AnneeCreation` int(11) NOT NULL,
  `NbAlbum` int(11) NOT NULL,
  `Note` double NOT NULL,
  `Signature Article` varchar(255) NOT NULL,
  `NomPagePhp` varchar(255) NOT NULL,
  PRIMARY KEY (`Nom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupes`
--

INSERT INTO `groupes` (`Nom`, `Genres`, `NbMembres`, `Instruments`, `Nationnalite`, `AnneeCreation`, `NbAlbum`, `Note`, `Signature Article`, `NomPagePhp`) VALUES
('Avenged Sevenfold', '', 5, '', 'Americaine', 1999, 6, 8, 'Romain S.', 'A7X.php'),
('Alesana', '', 6, '', 'Americaine', 2004, 5, 8.25, 'Romain S.', 'Alesana.php'),
('Sum 41', '', 4, '', 'Canadienne', 1996, 6, 9.5, 'Thibault B.', 'Sum 41.php'),
('Biffy Clyro', '', 3, '', 'Britannique', 1995, 6, 7.75, 'Thibault B.', 'Biffy Clyro.php'),
('Bullet for my Valentine', '', 4, '', 'Britannique', 1998, 4, 8.75, 'Romain S.', 'BFMV.php'),
('Nickelback', '', 4, '', 'Canadienne', 1995, 7, 8.5, 'Thibault B.', 'Nickelback.php'),
('Mayday Parade', '', 5, '', 'Americaine', 2005, 6, 8.5, 'Romain S.', 'Mayday Parade.php'),
('Memphis may fire', '', 5, '', 'Americaine', 2004, 3, 9, 'Romain S.', 'MMF.php'),
('Green Day', '', 3, '', 'Americaine', 1987, 11, 9, 'Thibault B.', 'Green Day.php'),
('Ghost Town', '', 4, '', 'Americaine', 2012, 2, 9, 'Romain S.', 'Ghost Town.php'),
('Hoobastank', '', 4, '', 'Americaine', 1994, 9, 8, 'Thibault B.', 'Hoobastank.php');
