-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Août 2016 à 09:55
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `taux_credit`
--

-- --------------------------------------------------------

--
-- Structure de la table `banque`
--

CREATE TABLE IF NOT EXISTS `banque` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(25) DEFAULT NULL,
  `bank_logo` varchar(60) DEFAULT NULL,
  `bank_adress` varchar(60) DEFAULT NULL,
  `bank_city` varchar(25) DEFAULT NULL,
  `bank_cp` int(11) DEFAULT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE IF NOT EXISTS `offre` (
  `offre_id` int(11) NOT NULL AUTO_INCREMENT,
  `taux` float DEFAULT NULL,
  `duree_mini` int(11) DEFAULT NULL,
  `montant_mini` int(11) DEFAULT NULL,
  `type_project` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`offre_id`),
  KEY `FK_offre_user_id` (`user_id`),
  KEY `FK_offre_bank_id` (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `budget` int(11) DEFAULT NULL,
  `apport_perso` int(11) DEFAULT NULL,
  `nom_client` varchar(25) DEFAULT NULL,
  `prenom_client` varchar(25) DEFAULT NULL,
  `mail_client` varchar(60) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `revenu_client` int(11) DEFAULT NULL,
  `taux_endettement` float DEFAULT NULL,
  `situation` varchar(25) DEFAULT NULL,
  `type_project` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`project_id`),
  KEY `FK_project_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(60) DEFAULT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_pass`) VALUES
(1, 'francois.m@gmail.com', 'francoism', '$2y$10$WHCKF7Oyo1WQD26js46cJumjKJpSHRGcM3w1w1m463BLZj6746ZBq');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `FK_offre_bank_id` FOREIGN KEY (`bank_id`) REFERENCES `banque` (`bank_id`),
  ADD CONSTRAINT `FK_offre_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_project_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
