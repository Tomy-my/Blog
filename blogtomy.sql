-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 fév. 2021 à 15:28
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blogtomy`
--

-- --------------------------------------------------------

--
-- Structure de la table `papillons`
--

DROP TABLE IF EXISTS `papillons`;
CREATE TABLE IF NOT EXISTS `papillons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `espece` varchar(255) NOT NULL,
  `famille` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `papillons`
--

INSERT INTO `papillons` (`id`, `nom`, `espece`, `famille`, `genre`, `info`, `file_name`, `uploaded_on`) VALUES
(16, 'Malachite', ' ?', ' ?', ' ?', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque adipisci asperiores \r\n        minus dolore provident voluptates voluptatum dolorum! Nobis tempora et quam minus similique. \r\n        Alias a sunt quam laudantium aperiam reiciendis! minus dolore provident voluptates voluptatum dolorum! Nobis tempora et quam minus similique. \r\n        Alias a sunt quam laudantium aperiam reiciendis!\r\n        minus dolore provident voluptates voluptatum dolorum! Nobis tempora et quam minus similique. \r\n        Alias a sunt quam laudantium aperiam reiciendis!', 'img.jpg', '2021-02-08 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `paysages`
--

DROP TABLE IF EXISTS `paysages`;
CREATE TABLE IF NOT EXISTS `paysages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paysages`
--

INSERT INTO `paysages` (`id`, `titre`, `contenu`, `file_name`, `uploaded_on`) VALUES
(1, 'rereg', 'gegre', 'img.jpg', '2021-02-08 16:07:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
