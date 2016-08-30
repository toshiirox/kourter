-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Août 2016 à 16:15
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
  `agence_id` int(11) NOT NULL AUTO_INCREMENT,
  `agence_adress` varchar(60) DEFAULT NULL,
  `agence_city` varchar(25) DEFAULT NULL,
  `agence_cp` int(11) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`agence_id`),
  KEY `FK_agence_bank_id` (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `caracteristiques`
--

CREATE TABLE IF NOT EXISTS `caracteristiques` (
  `id_caracteristique` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(60) DEFAULT NULL,
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
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_logo` varchar(60) DEFAULT NULL,
  `bank_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`bank_id`)
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
  `agence_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `FK_offre_agence_id` (`agence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet_client`
--

CREATE TABLE IF NOT EXISTS `projet_client` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(25) DEFAULT NULL,
  `prenom_client` varchar(25) DEFAULT NULL,
  `mail_client` varchar(60) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`project_id`),
  KEY `FK_projet_client_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `recquiert`
--

CREATE TABLE IF NOT EXISTS `recquiert` (
  `valeur` varchar(25) DEFAULT NULL,
  `obligatoire` tinyint(1) DEFAULT NULL,
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
  ADD CONSTRAINT `FK_agence_bank_id` FOREIGN KEY (`bank_id`) REFERENCES `enseigne` (`bank_id`);

--
-- Contraintes pour la table `defini`
--
ALTER TABLE `defini`
  ADD CONSTRAINT `FK_defini_project_id` FOREIGN KEY (`project_id`) REFERENCES `projet_client` (`project_id`),
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
  ADD CONSTRAINT `FK_offre_agence_id` FOREIGN KEY (`agence_id`) REFERENCES `agence` (`agence_id`);

--
-- Contraintes pour la table `projet_client`
--
ALTER TABLE `projet_client`
  ADD CONSTRAINT `FK_projet_client_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `recquiert`
--
ALTER TABLE `recquiert`
  ADD CONSTRAINT `FK_recquiert_id_caracteristique` FOREIGN KEY (`id_caracteristique`) REFERENCES `caracteristiques` (`id_caracteristique`),
  ADD CONSTRAINT `FK_recquiert_id_offre` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
