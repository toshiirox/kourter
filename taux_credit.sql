-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Août 2016 à 14:06
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
-- Structure de la table `agence`
--

CREATE TABLE IF NOT EXISTS `agence` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_adress` varchar(60) DEFAULT NULL,
  `bank_city` varchar(25) DEFAULT NULL,
  `bank_cp` int(11) DEFAULT NULL,
  `id_bank` int(11) DEFAULT NULL,
  PRIMARY KEY (`bank_id`),
  KEY `FK_agence_id_bank` (`id_bank`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `caracteristiques`
--

CREATE TABLE IF NOT EXISTS `caracteristiques` (
  `id_caracteristique` int(11) NOT NULL AUTO_INCREMENT,
  `budget` int(11) DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `type_project` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_caracteristique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `defini`
--

CREATE TABLE IF NOT EXISTS `defini` (
  `id_caracteristique` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id_caracteristique`,`project_id`),
  KEY `FK_defini_project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `enseigne`
--

CREATE TABLE IF NOT EXISTS `enseigne` (
  `id_bank` int(11) NOT NULL AUTO_INCREMENT,
  `bank_logo` varchar(60) DEFAULT NULL,
  `bank_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_bank`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `gere`
--

CREATE TABLE IF NOT EXISTS `gere` (
  `id_offre` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_offre`,`user_id`),
  KEY `FK_gere_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE IF NOT EXISTS `offre` (
  `id_offre` int(11) NOT NULL AUTO_INCREMENT,
  `taux` float DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `FK_offre_bank_id` (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `apport_perso` int(11) DEFAULT NULL,
  `nom_client` varchar(25) DEFAULT NULL,
  `prenom_client` varchar(25) DEFAULT NULL,
  `mail_client` varchar(60) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `revenu_client` int(11) DEFAULT NULL,
  `taux_endettement` float DEFAULT NULL,
  `situation` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`project_id`),
  KEY `FK_project_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `recquiert`
--

CREATE TABLE IF NOT EXISTS `recquiert` (
  `id_offre` int(11) NOT NULL,
  `id_caracteristique` int(11) NOT NULL,
  PRIMARY KEY (`id_offre`,`id_caracteristique`),
  KEY `FK_recquiert_id_caracteristique` (`id_caracteristique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `agence`
--
ALTER TABLE `agence`
  ADD CONSTRAINT `FK_agence_id_bank` FOREIGN KEY (`id_bank`) REFERENCES `enseigne` (`id_bank`);

--
-- Contraintes pour la table `defini`
--
ALTER TABLE `defini`
  ADD CONSTRAINT `FK_defini_project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `FK_defini_id_caracteristique` FOREIGN KEY (`id_caracteristique`) REFERENCES `caracteristiques` (`id_caracteristique`);

--
-- Contraintes pour la table `gere`
--
ALTER TABLE `gere`
  ADD CONSTRAINT `FK_gere_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `FK_gere_id_offre` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `FK_offre_bank_id` FOREIGN KEY (`bank_id`) REFERENCES `agence` (`bank_id`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_project_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `recquiert`
--
ALTER TABLE `recquiert`
  ADD CONSTRAINT `FK_recquiert_id_caracteristique` FOREIGN KEY (`id_caracteristique`) REFERENCES `caracteristiques` (`id_caracteristique`),
  ADD CONSTRAINT `FK_recquiert_id_offre` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
