-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 30 Novembre 2013 à 10:25
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `purpulemusic`
--
CREATE DATABASE IF NOT EXISTS `purpulemusic` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `purpulemusic`;

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `ID` int(11) NOT NULL COMMENT 'les ids des genres',
  `NomGenre` varchar(255) NOT NULL COMMENT 'la désignation',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `genres`
--

INSERT INTO `genres` (`ID`, `NomGenre`) VALUES
(1, 'Electronique '),
(2, 'Heavy metal'),
(3, 'Pop'),
(4, 'Punk'),
(5, 'Metalcore'),
(6, 'Post-Hardcore'),
(7, 'Pop-Punk'),
(8, 'Grunge'),
(9, 'HardRock'),
(10, 'Rock');

-- --------------------------------------------------------

--
-- Structure de la table `gg`
--

CREATE TABLE IF NOT EXISTS `gg` (
  `idgp` int(11) NOT NULL COMMENT 'id du groupe',
  `idge` int(11) NOT NULL COMMENT 'id du genre',
  PRIMARY KEY (`idgp`,`idge`),
  KEY `genre_contrainte` (`idge`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gg`
--

INSERT INTO `gg` (`idgp`, `idge`) VALUES
(9, 1),
(11, 1),
(0, 2),
(4, 2),
(10, 3),
(1, 4),
(2, 4),
(6, 4),
(7, 4),
(8, 4),
(11, 4),
(0, 5),
(4, 5),
(7, 5),
(1, 6),
(7, 6),
(9, 6),
(11, 6),
(13, 6),
(2, 7),
(6, 7),
(8, 7),
(5, 9),
(12, 9),
(0, 10),
(1, 10),
(2, 10),
(3, 10),
(4, 10),
(5, 10),
(6, 10),
(7, 10),
(8, 10),
(9, 10),
(10, 10),
(11, 10),
(12, 10),
(13, 10);

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE IF NOT EXISTS `groupes` (
  `Nom` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `NbMembres` int(11) NOT NULL,
  `Instruments` varchar(255) NOT NULL,
  `Nationnalite` varchar(255) NOT NULL,
  `AnneeCreation` int(11) NOT NULL,
  `NbAlbum` int(11) NOT NULL,
  `Note` double NOT NULL,
  `Signature Article` varchar(255) NOT NULL,
  `NomPagePhp` varchar(255) NOT NULL,
  `termine` int(11) NOT NULL COMMENT 'si la page est finie : 1 sinon 0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupes`
--

INSERT INTO `groupes` (`Nom`, `ID`, `NbMembres`, `Instruments`, `Nationnalite`, `AnneeCreation`, `NbAlbum`, `Note`, `Signature Article`, `NomPagePhp`, `termine`) VALUES
('Avenged Sevenfold', 0, 5, '', 'Americaine', 1999, 6, 8, 'Romain S.', 'A7X.php', 1),
('Alesana', 1, 6, '', 'Americaine', 2004, 5, 8, 'Romain S.', 'Alesana.php', 1),
('Sum 41', 2, 4, '', 'Canadienne', 1996, 6, 10, 'Thibault B.', 'Sum 41.php', 1),
('Biffy Clyro', 3, 3, '', 'Britannique', 1995, 6, 8, 'Thibault B.', 'Biffy Clyro.php', 1),
('Bullet for my Valentine', 4, 4, '', 'Britannique', 1998, 4, 9, 'Romain S.', 'BFMV.php', 1),
('Nickelback', 5, 4, '', 'Canadienne', 1995, 7, 8, 'Thibault B.', 'Nickelback.php', 1),
('Mayday Parade', 6, 5, '', 'Americaine', 2005, 6, 9, 'Romain S.', 'Mayday Parade.php', 1),
('Memphis may fire', 7, 5, '', 'Americaine', 2004, 3, 9, 'Romain S.', 'MMF.php', 1),
('Green Day', 8, 3, '', 'Americaine', 1987, 11, 9, 'Thibault B.', 'Green Day.php', 0),
('Ghost Town', 9, 4, '', 'Americaine', 2012, 2, 9, 'Romain S.', 'Ghost Town.php', 0),
('Hoobastank', 10, 4, '', 'Americaine', 1994, 9, 8, 'Thibault B.', 'Hoobastank.php', 0),
('Pierce the veil', 11, 4, '', 'Americaine', 2007, 3, 10, 'Romain S.', 'PTV.php', 0),
('Endeverafter', 12, 4, '', 'Americaine', 0, 0, 8, 'Romain S.', 'Endeverafter.php', 0),
('Sleeping with Sirens', 13, 5, '', 'Americaine', 0, 0, 8, 'Romain S.', 'SWS.php', 0);

-- --------------------------------------------------------

--
-- Structure de la table `phrasesalacon`
--

CREATE TABLE IF NOT EXISTS `phrasesalacon` (
  `ID` int(11) NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `phrasesalacon`
--

INSERT INTO `phrasesalacon` (`ID`, `texte`) VALUES
(0, 'Quand on trait les vaches qui écoutent Purple Music, elle produisent du Milk-Shake'),
(1, 'Purple Music, ça envoie du pâté !'),
(2, 'Site approuvé par Chuck Norris.'),
(3, 'Si dieu n''avait pas crée la musique, il l''écouterait sur Purple Music !'),
(4, 'Faites écouter Purple Music à votre patron, et vous l''aurez votre augmentation !'),
(5, 'Lutte contre l''impuissance.'),
(6, 'Ecoutez Purple Music au quotidien, avec les filles ça ira bien.'),
(7, 'Combat les terroristes'),
(8, 'Fait réduire la criminalité'),
(9, 'Un petit album le matin, et vous aurez 10 ans de moins'),
(10, 'Avec Purple Music, vous ne raterez ni votre Bac, ni votre permis.'),
(11, 'Jésus a ressuscité pour écouter Purple Music.'),
(12, 'Même ta grand-mère connait Purple Music'),
(13, 'Purple Music détient l''anneau unique.'),
(14, 'Davy Jones écoute Purple Music dans les profondeurs abyssales'),
(15, 'Empêche le feu de se propager.'),
(16, 'Sait faire griller des chipos au barbecue'),
(17, 'Guérit de la connerie'),
(18, 'Si l''on devait une note sur 10 à Purple Music, ce serait 20'),
(19, 'Un orgasme pour les oreilles'),
(20, 'Si tu ne vas pas sur Purple Music, ta souris y ira pour toi'),
(21, 'Le Père Noël ne travaille qu''un jour dans l''année, le reste du temps, il est sur Purple Music'),
(22, 'Purple Music c''est SWAG.'),
(23, 'Mettre Purple Music en favoris, c''est en quelque sorte réussir sa vie');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `gg`
--
ALTER TABLE `gg`
  ADD CONSTRAINT `genre_contrainte` FOREIGN KEY (`idge`) REFERENCES `genres` (`ID`),
  ADD CONSTRAINT `groupe_contrainte` FOREIGN KEY (`idgp`) REFERENCES `groupes` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
