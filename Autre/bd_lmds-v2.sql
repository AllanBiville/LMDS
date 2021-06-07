-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 07 juin 2021 à 13:17
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_lmds`
--

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `id_devis` int(9) NOT NULL AUTO_INCREMENT,
  `status` varchar(15) NOT NULL,
  `date` varchar(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(14) NOT NULL,
  `marque` varchar(25) NOT NULL,
  `modele` varchar(25) NOT NULL,
  `probleme1` varchar(30) NOT NULL,
  `probleme2` varchar(30) NOT NULL,
  `probleme3` varchar(30) NOT NULL,
  `commentaire` varchar(150) NOT NULL,
  PRIMARY KEY (`id_devis`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id_devis`, `status`, `date`, `nom`, `prenom`, `email`, `telephone`, `marque`, `modele`, `probleme1`, `probleme2`, `probleme3`, `commentaire`) VALUES
(35, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', 'Ecran cassé', ' ', '1er essai sans newsletter'),
(36, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone X', 'Batterie HS', ' ', ' ', 'avec newsletters'),
(37, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 12', 'Batterie HS', ' ', ' ', 'salut '),
(38, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Huawei', 'y5 2016', 'Batterie HS', ' ', ' ', 'Salut les gens'),
(39, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(40, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(41, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(42, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(43, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(44, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(45, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(46, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(47, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(48, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(49, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(50, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(51, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(52, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(53, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(54, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(55, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(56, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(57, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(58, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(59, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(60, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(61, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(62, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(63, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(64, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(65, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(66, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(67, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(68, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(69, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(70, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'okkokokok'),
(71, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'azaaaa'),
(72, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(73, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(74, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(75, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(76, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(77, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(78, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(79, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(80, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(81, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(82, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(83, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(84, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(85, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(86, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(87, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(88, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'y5 2016', 'Ecran cassé', 'Batterie HS', ' ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(89, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', 'Ecran cassé', ' ', ''),
(90, 'Nouveau devis', '07.06.21', 'allan', 'allan', 'allan@gmail.com', '06 92 18 25 35', 'Apple', 'Iphone 11', 'Batterie HS', ' ', ' ', 'aaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id_marque` int(5) NOT NULL AUTO_INCREMENT,
  `nom_marque` varchar(20) NOT NULL,
  PRIMARY KEY (`id_marque`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `nom_marque`) VALUES
(1, 'Apple'),
(2, 'Huawei'),
(3, 'Samsung');

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

DROP TABLE IF EXISTS `modele`;
CREATE TABLE IF NOT EXISTS `modele` (
  `id_modele` int(5) NOT NULL AUTO_INCREMENT,
  `nom_modele` varchar(20) NOT NULL,
  `id_marque` int(11) NOT NULL,
  PRIMARY KEY (`id_modele`),
  KEY `id_marque` (`id_marque`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`id_modele`, `nom_modele`, `id_marque`) VALUES
(1, 'Iphone X', 1),
(2, 'Iphone 11', 1),
(3, 'Iphone 12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id_email` int(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `probleme`
--

DROP TABLE IF EXISTS `probleme`;
CREATE TABLE IF NOT EXISTS `probleme` (
  `id_probleme` int(5) NOT NULL AUTO_INCREMENT,
  `nom_probleme` varchar(30) NOT NULL,
  PRIMARY KEY (`id_probleme`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `probleme`
--

INSERT INTO `probleme` (`id_probleme`, `nom_probleme`) VALUES
(1, 'Ecran cassé'),
(2, 'Batterie HS');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `modele_ibfk_1` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
