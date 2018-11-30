-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 nov. 2018 à 17:25
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app`
--
CREATE DATABASE IF NOT EXISTS `app` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `app`;

-- --------------------------------------------------------

--
-- Structure de la table `add`
--

DROP TABLE IF EXISTS `add`;
CREATE TABLE IF NOT EXISTS `add` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `id.aux` int(30) NOT NULL,
  `score` int(60) NOT NULL,
  `comment` varchar(120) NOT NULL,
  `id_user` int(30) NOT NULL,
  `date` date NOT NULL,
  `statut` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

DROP TABLE IF EXISTS `dossier`;
CREATE TABLE IF NOT EXISTS `dossier` (
  `iddossier` int(11) NOT NULL AUTO_INCREMENT,
  `numdossier` varchar(255) COLLATE utf8_bin NOT NULL,
  `nomagent` varchar(255) COLLATE utf8_bin NOT NULL,
  `expediteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `destinataire` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ1com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ2com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ3com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ4com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ5` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ5com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ6` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ6com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ7` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ7com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ8` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ8com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ9` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ9com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ10` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ10com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ11` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ11com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ12` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ12com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ13` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ13com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ14` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ14com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ15` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ15com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ16` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ16com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `champ17` varchar(255) COLLATE utf8_bin NOT NULL,
  `champ17com` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mode` varchar(255) COLLATE utf8_bin NOT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`iddossier`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`iddossier`, `numdossier`, `nomagent`, `expediteur`, `destinataire`, `champ1`, `champ1com`, `champ2`, `champ2com`, `champ3`, `champ3com`, `champ4`, `champ4com`, `champ5`, `champ5com`, `champ6`, `champ6com`, `champ7`, `champ7com`, `champ8`, `champ8com`, `champ9`, `champ9com`, `champ10`, `champ10com`, `champ11`, `champ11com`, `champ12`, `champ12com`, `champ13`, `champ13com`, `champ14`, `champ14com`, `champ15`, `champ15com`, `champ16`, `champ16com`, `champ17`, `champ17com`, `mode`, `iduser`) VALUES
(3, '123', 'azerty', 'cfvgh', 'cfvghhbj', 'Non', 'champ1', 'Non', 'champ2', 'Non', 'champ1', 'Non', 'champ4', 'Non', 'gyh', 'Non', 'gybh', 'Non', 'gyh', 'Non', 'gyh', 'Non', 'ygh', 'Non', 'ybhj', 'Non', 'bhjn', 'Non', 'nybh', 'Non', 'gyhiu', 'Non', 'ybhjnk', 'Non', 'vybhjk', 'Non', 'ygbhj', 'Non', 'ygbhjnk', 'Cloturer', 10),
(4, '125869', 'fvgbh', 'vgbhj', 'vgbh', 'Oui', 'champ1', 'Non', 'champ2', 'Oui', 'champ3', 'Non', 'champ4', 'Oui', 'gyh', 'Oui', 'gybh', 'Non', 'gyh', 'Non', 'gyh', 'Oui', 'ygh', 'Oui', 'ybhj', 'Oui', 'bhjn', 'Oui', 'nybh', 'Non', 'gyhiu', 'Non', 'ybhjnk', 'Non', 'vybhjk', 'Non', 'ygbhj', 'Oui', 'ygbhjnk', 'Cloturer', 10);

-- --------------------------------------------------------

--
-- Structure de la table `id.aux`
--

DROP TABLE IF EXISTS `id.aux`;
CREATE TABLE IF NOT EXISTS `id.aux` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `description` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(120) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `negociateur` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `negociateur`) VALUES
(10, 'utilisateur1', '123', 'oui'),
(13, 'utilisateur2', '345', 'non');
--
-- Base de données :  `covoiturage`
--
CREATE DATABASE IF NOT EXISTS `covoiturage` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `covoiturage`;

-- --------------------------------------------------------

--
-- Structure de la table `conducteur`
--

DROP TABLE IF EXISTS `conducteur`;
CREATE TABLE IF NOT EXISTS `conducteur` (
  `idconducteur` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `nb_etoils` int(11) NOT NULL,
  PRIMARY KEY (`idconducteur`),
  UNIQUE KEY `idconducteur_UNIQUE` (`idconducteur`),
  KEY `fk_cond_ut_idx` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `conducteur`
--

INSERT INTO `conducteur` (`idconducteur`, `id_utilisateur`, `nb_etoils`) VALUES
(1, 1, 0),
(2, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_conducteur` int(11) NOT NULL,
  `id_passager` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  PRIMARY KEY (`id_conducteur`,`id_passager`),
  KEY `fk_note_pass_idx` (`id_passager`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

DROP TABLE IF EXISTS `passager`;
CREATE TABLE IF NOT EXISTS `passager` (
  `idpassager` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `nb_reservation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpassager`),
  UNIQUE KEY `idpassager_UNIQUE` (`idpassager`),
  KEY `fk_pass_utl_idx` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `permis`
--

DROP TABLE IF EXISTS `permis`;
CREATE TABLE IF NOT EXISTS `permis` (
  `idpermis` int(11) NOT NULL AUTO_INCREMENT,
  `type_permis` varchar(1) NOT NULL,
  `date_permis` date NOT NULL,
  `id_conducteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpermis`),
  UNIQUE KEY `idpermis_UNIQUE` (`idpermis`),
  UNIQUE KEY `type_permis_UNIQUE` (`type_permis`),
  UNIQUE KEY `date_permis_UNIQUE` (`date_permis`),
  KEY `fk_perm_condu_idx` (`id_conducteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `idreservation` int(11) NOT NULL,
  `date_reservation` datetime NOT NULL,
  `id_trajet` int(11) DEFAULT NULL,
  `id_passager` int(11) DEFAULT NULL,
  PRIMARY KEY (`idreservation`),
  KEY `fk_reserv_trajet_idx` (`id_trajet`),
  KEY `fk_reserv_pass_idx` (`id_passager`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `idtrajet` int(11) NOT NULL AUTO_INCREMENT,
  `date_depart` datetime NOT NULL,
  `date_arrive` datetime NOT NULL,
  `lieu_depart` varchar(75) NOT NULL,
  `lieu_arrive` varchar(75) NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `id_conducteur` int(11) DEFAULT NULL,
  `nbplace` int(11) NOT NULL,
  PRIMARY KEY (`idtrajet`),
  KEY `fk_trajet_cond_idx` (`id_conducteur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`idtrajet`, `date_depart`, `date_arrive`, `lieu_depart`, `lieu_arrive`, `prix`, `id_conducteur`, `nbplace`) VALUES
(1, '2018-12-02 00:00:00', '2018-12-02 00:00:00', 'Rabat al irfan', 'Marrakech Rue Mohammed V', '200.00', 1, 0),
(2, '2018-11-20 00:00:00', '2018-11-21 00:00:00', 'Casablanca', 'Rabat', '150.00', 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(75) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `img_prf` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `sex`, `date_naissance`, `adresse`, `email`, `password`, `telephone`, `description`, `img_prf`) VALUES
(1, 'kamali', 'mounir', 'M', '1993-02-23', 'Rue nassim hay soumaya N 55 casablanca', 'm.kamali@gmail.com', 'bb14579504160ce4fcaf35cf78c60bc1', '0656538805', 'je suis le conducteur numero 1 yay!', ''),
(2, 'bjh', 'bhj', 'M', '2018-11-13', 'hjkn', 'ab@gmail.com', '939c04836f9dda50950db42092831eec', '0656538805', 'hbjkn', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `idVehicule` int(11) NOT NULL AUTO_INCREMENT,
  `coleur` varchar(25) NOT NULL,
  `nb_places` int(11) NOT NULL,
  `puissance` decimal(6,2) NOT NULL,
  `idconducteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVehicule`),
  UNIQUE KEY `idVehicule_UNIQUE` (`idVehicule`),
  KEY `fk_vh_cond_idx` (`idconducteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conducteur`
--
ALTER TABLE `conducteur`
  ADD CONSTRAINT `fk_cond_ut` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_note_cond` FOREIGN KEY (`id_conducteur`) REFERENCES `conducteur` (`idconducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_note_pass` FOREIGN KEY (`id_passager`) REFERENCES `passager` (`idpassager`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `passager`
--
ALTER TABLE `passager`
  ADD CONSTRAINT `fk_pass_utl` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `permis`
--
ALTER TABLE `permis`
  ADD CONSTRAINT `fk_perm_condu` FOREIGN KEY (`id_conducteur`) REFERENCES `conducteur` (`idconducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reserv_pass` FOREIGN KEY (`id_passager`) REFERENCES `passager` (`idpassager`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reserv_trajet` FOREIGN KEY (`id_trajet`) REFERENCES `trajet` (`idtrajet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `fk_trajet_cond` FOREIGN KEY (`id_conducteur`) REFERENCES `conducteur` (`idconducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `fk_vh_cond` FOREIGN KEY (`idconducteur`) REFERENCES `conducteur` (`idconducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Base de données :  `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `loginadmin` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `mdpadmin` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `emailadmin` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `teladmin` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `catalogue`
--

DROP TABLE IF EXISTS `catalogue`;
CREATE TABLE IF NOT EXISTS `catalogue` (
  `idcatalogue` int(11) NOT NULL AUTO_INCREMENT,
  `nomcatalogue` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `datecatalogue` date DEFAULT NULL,
  PRIMARY KEY (`idcatalogue`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `catalogue`
--

INSERT INTO `catalogue` (`idcatalogue`, `nomcatalogue`, `datecatalogue`) VALUES
(1, 'catalogue1', '2018-03-06'),
(2, 'catalogue2', '2018-03-21');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `nomclient` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `prenomclient` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `adressecli` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `loginclient` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `mdpclient` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `nomclient`, `prenomclient`, `adressecli`, `loginclient`, `mdpclient`, `email`) VALUES
(1, 'oubelid', 'yassine', 'rabat', 'yassine', '1234', 'yassine@gmail.com'),
(2, 'abdou', 'ahmed', 'pp', 'bhhf', 'ghj', 'ab@gmail.com'),
(3, 'hello', 'hello1', 'ppp', '3allah', 'ppp', 'ppppp'),
(4, 'hello', 'hello1', 'ppp', '3allah', 'ppp', '3mmm'),
(5, 'psr', 'psr', 'psr', 'psr', 'psr', 'psr'),
(6, 'psr', 'psr', 'psr', 'psr', 'psr', 'psr'),
(7, 'ppp', 'opp', 'op', 'op', 'mo@gmail.com', 'op'),
(8, 'abb', 'pst', 'pst', 'pst', 'pst@gmail.com', 'test'),
(9, 'ngc', 'prenom', 'login', 'Mge', 'email', 'adresse'),
(10, 'n', 'p', 'login', 'Mot', 'email@gmail.com', 'adresse'),
(11, 'nom', 'prenom', 'login', 'Mo', 'ema@gmail.com', 'adres'),
(12, 'nom', 'prenom', 'login', 'Mot', 'email', 'adresse'),
(13, 'test1', 'test1', 'test1', 'test1', 'test1@gmail.com', 'test1'),
(14, 'nom', 'prenom', 'login', 'Motdp', 'em', 'adres'),
(15, 'abddioou', 'prebfrjn', 'adressebjdfk', 'login', 'Mot de passe', 'abdeljnfrd'),
(16, 'hh', 'hu', 'jhh', 'hii', 'erp', 'yyy'),
(17, 'nom', 'prenom', 'adresse', 'login', 'Mot de passe', 'email'),
(18, 'nom', 'prenom', 'adresse', 'login', 'Mot de passe', 'email'),
(19, 'ioonom', 'ioooprenom', 'ioadresse', 'ioologin', 'ioMot de passe', 'email');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idcommande` int(11) NOT NULL AUTO_INCREMENT,
  `adresselivraison` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `nomlivraison` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `prenomlivraison` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tellivraison` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `datecommande` datetime DEFAULT CURRENT_TIMESTAMP,
  `idlivreur` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`idcommande`),
  KEY `FK_Commande_idlivreur` (`idlivreur`),
  KEY `FK_Commande_idclient` (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idcommande`, `adresselivraison`, `nomlivraison`, `prenomlivraison`, `tellivraison`, `datecommande`, `idlivreur`, `idclient`) VALUES
(4, 'Oulfa', 'Hatimy', 'Abdellah', '0644899767', '2018-03-19 00:52:32', 1, 1),
(6, 'Agdal', 'Nom', 'Prenomt', '00', '2018-03-19 02:05:11', 1, 1),
(14, 'Adressetg', 'Nomy', 'Prenomyy', '0786', '2018-03-19 02:38:20', 1, 1),
(15, 'Adressetg', 'Nomy', 'Prenomyyy', '0786', '2018-03-19 02:39:44', 1, 1),
(16, 'Adresse', 'Nomyy', 'Prenomyr', 'Telephone', '2018-03-19 02:43:23', 1, 1),
(17, 'Adresse', 'Nomtr', 'Prenomuk', 'Telephone', '2018-03-19 02:49:10', 1, 1),
(18, 'Adresse', 'Nomrt', 'Prenomuu', 'Telephone', '2018-03-19 02:50:51', 1, 1),
(21, 'ouf', 'oNom', 'oufff', '0987', '2018-04-15 18:58:20', 1, 1),
(29, 'Adresse', 'Nom', 'Prenom', 'Telephone', '2018-04-30 22:51:53', 1, 1),
(43, 'Adrestpp', 'iNom', 'oiPrenom', '0663660530', '2018-05-02 16:25:33', 1, 1),
(44, 'Adressetrr', 'Nomtr', 'uiiPrenom', 'iTelephone', '2018-05-02 17:13:31', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `idevaluation` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `texte` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `vote` int(11) DEFAULT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`idevaluation`),
  KEY `FK_Evaluation_idclient` (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `getdatatable`
--

DROP TABLE IF EXISTS `getdatatable`;
CREATE TABLE IF NOT EXISTS `getdatatable` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `lignedecommande`
--

DROP TABLE IF EXISTS `lignedecommande`;
CREATE TABLE IF NOT EXISTS `lignedecommande` (
  `idcommande` int(11) NOT NULL AUTO_INCREMENT,
  `idproduit` int(11) NOT NULL,
  `Qtecomm` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idcommande`,`idproduit`),
  KEY `FK_Ligne_de_commande_idproduit` (`idproduit`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lignedecommande`
--

INSERT INTO `lignedecommande` (`idcommande`, `idproduit`, `Qtecomm`) VALUES
(6, 3, '3'),
(29, 1, '3'),
(29, 3, '5'),
(43, 1, '7'),
(44, 1, '7');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `idlivreur` int(11) NOT NULL AUTO_INCREMENT,
  `nomlivreur` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `prenomlivreur` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tellivreur` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `loginlivreur` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `mdplivreur` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idlivreur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`idlivreur`, `nomlivreur`, `prenomlivreur`, `tellivreur`, `loginlivreur`, `mdplivreur`) VALUES
(1, 'test', 'test', '0663660530', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idproduit` int(11) NOT NULL AUTO_INCREMENT,
  `nomproduit` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typeproduit` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `prix` bigint(20) DEFAULT NULL,
  `idcatalogue` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idproduit`),
  KEY `FK_Produit_idcatalogue` (`idcatalogue`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `nomproduit`, `typeproduit`, `prix`, `idcatalogue`, `photo`) VALUES
(1, 'iPhone 6s', 'Multimedia', 5000, 1, 'https://cdn.shopify.com/s/files/1/1043/3082/products/iPhone_6s_SpaceGrey_1024x1024.png?v=1519092031'),
(2, 'Tablette Asus', 'Multimedia', 1000, 1, 'https://image.darty.com/informatique/portables/tablette/asus_z300m-6a037a_s1608184243846A_160324521.jpg'),
(3, 'Television', 'Multimedia', 2500, 1, 'https://4.imimg.com/data4/CF/VV/MY-23364860/panache-40-led-television-500x500.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_Commande_idclient` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`),
  ADD CONSTRAINT `FK_Commande_idlivreur` FOREIGN KEY (`idlivreur`) REFERENCES `livreur` (`idlivreur`);

--
-- Contraintes pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `FK_Evaluation_idclient` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`);

--
-- Contraintes pour la table `lignedecommande`
--
ALTER TABLE `lignedecommande`
  ADD CONSTRAINT `FK_Ligne_de_commande_idcommande` FOREIGN KEY (`idcommande`) REFERENCES `commande` (`idcommande`),
  ADD CONSTRAINT `FK_Ligne_de_commande_idproduit` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`idproduit`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_Produit_idcatalogue` FOREIGN KEY (`idcatalogue`) REFERENCES `catalogue` (`idcatalogue`);
--
-- Base de données :  `firstapp`
--
CREATE DATABASE IF NOT EXISTS `firstapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `firstapp`;

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180815151142'),
('20180815151945');
--
-- Base de données :  `grh`
--
CREATE DATABASE IF NOT EXISTS `grh` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `grh`;

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `dateNaissance` varchar(20) NOT NULL,
  `numServ` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`code`),
  KEY `FK_numServ` (`numServ`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`code`, `nom`, `prenom`, `sexe`, `dateNaissance`, `numServ`, `adresse`) VALUES
(1, 'mouniri', 'ahmed', 'M', '2018-02-15', 1, 'adr adre'),
(2, 'jamali', 'saad', 'M', '2018-02-20', 1, 'hello'),
(3, 'kamali', 'ahmed', 'M', '0000-00-00', 1, 'RUE HHHHH'),
(5, 'moussa', 'karim', 'M', '1993-12-31', 1, 'adr rue HASSAN'),
(6, 'smo', 'smm', 'M', '1996-12-18', 2, 'adr adr'),
(7, 'mouhsin', 'ayoub', 'M', '1997-11-30', 3, 'adr adr'),
(8, 'pa', 'pa', 'F', '2018-03-20', 1, 'PA'),
(9, 'azerty', 'azerty', 'M', '2018-03-23', 1, 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `numServ` int(11) NOT NULL AUTO_INCREMENT,
  `designationServ` varchar(100) NOT NULL,
  `descriptionServ` varchar(100) NOT NULL,
  PRIMARY KEY (`numServ`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`numServ`, `designationServ`, `descriptionServ`) VALUES
(1, 'vente', 'les ventes'),
(2, 'approvisionnement', 'les approvisionnement '),
(3, 'reclamation', 'les les reclamation');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `numUser` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` enum('AD','US','','','') NOT NULL,
  PRIMARY KEY (`numUser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`numUser`, `login`, `password`, `type`) VALUES
(2, 'log1', 'pass1', 'AD'),
(3, 'log2', 'pass2', 'US'),
(4, 'log3', 'pass3', 'US');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `FK_numServ` FOREIGN KEY (`numServ`) REFERENCES `services` (`numServ`);
--
-- Base de données :  `locationvoiture`
--
CREATE DATABASE IF NOT EXISTS `locationvoiture` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `locationvoiture`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `NomAdmin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `PrenomAdmin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `LoginAdmin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MdpAdmin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`idadmin`, `NomAdmin`, `PrenomAdmin`, `LoginAdmin`, `MdpAdmin`) VALUES
(1, 'Hatimy', 'Abdellah', 'abdellah.hatimy@gmail.com', 'abdou');

-- --------------------------------------------------------

--
-- Structure de la table `caracteristiques`
--

DROP TABLE IF EXISTS `caracteristiques`;
CREATE TABLE IF NOT EXISTS `caracteristiques` (
  `idCaracteristique` int(11) NOT NULL AUTO_INCREMENT,
  `NbPorte` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `NbPlace` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `NbreLitreReservoir` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idCaracteristique`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `caracteristiques`
--

INSERT INTO `caracteristiques` (`idCaracteristique`, `NbPorte`, `NbPlace`, `NbreLitreReservoir`) VALUES
(18, '5', '4', '65L'),
(19, '5', '4', '65L'),
(20, '5', '4', '65L'),
(21, '5', '4', '65L'),
(22, '5', '4', '65L'),
(23, '5', '4', '65L'),
(24, '3', '3', 'kgtjbhkn'),
(25, '', '', 'hbjkn'),
(26, '', '', 'hbjkn'),
(27, '', '', 'bhjjn'),
(28, '', '', 'bhjjn'),
(29, '', '', 'jhb'),
(30, '', '', 'jhb'),
(31, '', '', 'jhb'),
(32, '5', '5', '70'),
(33, '5', '5', '70'),
(34, '5', '5', '70'),
(35, '5', '5', '70');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `PrenomClient` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `AgeClient` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `LoginClient` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MdpClient` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `AdresseClient` text COLLATE utf8_bin,
  `NumTelClient` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`iduser`, `NomClient`, `PrenomClient`, `AgeClient`, `LoginClient`, `MdpClient`, `AdresseClient`, `NumTelClient`) VALUES
(1, 'rftg', 'ftgyh', '2020-12-23', 'ab@gmail.com', 'abdou', 'drftg', 'ftgyh'),
(2, 'bhj', 'gbhjj', '2018-12-23', 'abd@gmail.com', 'hb', 'hbj', 'nbhjjnk');

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `idDevis` int(11) NOT NULL AUTO_INCREMENT,
  `DateDevis` date DEFAULT NULL,
  `PrixTTCRese` float DEFAULT NULL,
  `PrixHTRese` float DEFAULT NULL,
  PRIMARY KEY (`idDevis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`idDevis`, `DateDevis`, `PrixTTCRese`, `PrixHTRese`) VALUES
(2, '2018-11-21', 500, 500);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `idFacture` int(11) NOT NULL AUTO_INCREMENT,
  `DateFacture` date DEFAULT NULL,
  `PrixTTC` float DEFAULT NULL,
  `PrixHT` float DEFAULT NULL,
  PRIMARY KEY (`idFacture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `images1` varchar(100) COLLATE utf8_bin NOT NULL,
  `images2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `images3` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `images1`, `images2`, `images3`) VALUES
(4, 'Capture.PNG', 'IMG_5011.jpg', 'received_1183830264985145.jpeg'),
(5, 'Capture.PNG', '20170820_121610.jpg', 'Capture.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

DROP TABLE IF EXISTS `louer`;
CREATE TABLE IF NOT EXISTS `louer` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idVehicule` int(11) NOT NULL,
  `idFacture` int(11) NOT NULL,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `DureLocation` date DEFAULT NULL,
  `PrixParJour` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`iduser`,`idVehicule`,`idFacture`),
  KEY `FK_Louer_idVehicule` (`idVehicule`),
  KEY `FK_Louer_idFacture` (`idFacture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `nomMarque` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`idMarque`, `nomMarque`) VALUES
(1, 'Renault'),
(2, 'Ford');

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

DROP TABLE IF EXISTS `modele`;
CREATE TABLE IF NOT EXISTS `modele` (
  `idModele` int(11) NOT NULL AUTO_INCREMENT,
  `nomModele` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `idMarque` int(11) NOT NULL,
  PRIMARY KEY (`idModele`),
  KEY `FK_Modele_idMarque` (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`idModele`, `nomModele`, `idMarque`) VALUES
(1, 'CLIO4', 1),
(2, 'FIESTA', 2);

-- --------------------------------------------------------

--
-- Structure de la table `réserver`
--

DROP TABLE IF EXISTS `réserver`;
CREATE TABLE IF NOT EXISTS `réserver` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idVehicule` int(11) NOT NULL,
  `idDevis` int(11) NOT NULL,
  `DateDebutRese` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `DateFinRese` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `DureeLocationRese` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `PrixParJourRese` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`iduser`,`idVehicule`,`idDevis`),
  KEY `FK_Réserver_idVehicule` (`idVehicule`),
  KEY `FK_Réserver_idDevis` (`idDevis`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `réserver`
--

INSERT INTO `réserver` (`iduser`, `idVehicule`, `idDevis`, `DateDebutRese`, `DateFinRese`, `DureeLocationRese`, `PrixParJourRese`) VALUES
(1, 49, 2, '2018-11-08', '2018-11-10', '2', '800');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `idVehicule` int(11) NOT NULL AUTO_INCREMENT,
  `TitleVoiture` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `DescriptionVoiture` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MarqueVehicule` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `ModeleVehicule` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CouleurVehicule` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CarburantVehicule` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `EtatVehicule` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CategorieVehicule` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `idCaracteristique` int(11) NOT NULL,
  `images1` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `images2` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `images3` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `prix` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `AnneeVehicule` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Boite` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Options` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idVehicule`),
  KEY `FK_Voiture_idCaracteristique` (`idCaracteristique`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`idVehicule`, `TitleVoiture`, `DescriptionVoiture`, `MarqueVehicule`, `ModeleVehicule`, `CouleurVehicule`, `CarburantVehicule`, `EtatVehicule`, `CategorieVehicule`, `idCaracteristique`, `images1`, `images2`, `images3`, `prix`, `AnneeVehicule`, `Boite`, `Options`) VALUES
(49, 'Range Rover EVOQUE', 'robuste , 4*4 , avec plusieurs options , toit panoramique , jantes aluminuim , etat neuve', 'RangeRover', 'Evoque', 'Rouge', 'Diesel', 'WW', 'Berline', 35, 'image15.jpg', 'image16.jpg', 'image17.jpg', '800', '2018', 'Manuelle', 'Toit Panoramique/Camera de Recul/Fermeture centralise/GPS/Retroviseur Electrique/Jantes Aluminuim/Bluetooth/Auxiliaire/');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `louer`
--
ALTER TABLE `louer`
  ADD CONSTRAINT `FK_Louer_idFacture` FOREIGN KEY (`idFacture`) REFERENCES `facture` (`idFacture`),
  ADD CONSTRAINT `FK_Louer_idVehicule` FOREIGN KEY (`idVehicule`) REFERENCES `voiture` (`idVehicule`),
  ADD CONSTRAINT `FK_Louer_iduser` FOREIGN KEY (`iduser`) REFERENCES `client` (`iduser`);

--
-- Contraintes pour la table `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `FK_Modele_idMarque` FOREIGN KEY (`idMarque`) REFERENCES `marque` (`idMarque`);

--
-- Contraintes pour la table `réserver`
--
ALTER TABLE `réserver`
  ADD CONSTRAINT `FK_Réserver_idDevis` FOREIGN KEY (`idDevis`) REFERENCES `devis` (`idDevis`),
  ADD CONSTRAINT `FK_Réserver_idVehicule` FOREIGN KEY (`idVehicule`) REFERENCES `voiture` (`idVehicule`),
  ADD CONSTRAINT `FK_Réserver_iduser` FOREIGN KEY (`iduser`) REFERENCES `client` (`iduser`);

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `FK_Voiture_idCaracteristique` FOREIGN KEY (`idCaracteristique`) REFERENCES `caracteristiques` (`idCaracteristique`);
--
-- Base de données :  `saad`
--
CREATE DATABASE IF NOT EXISTS `saad` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `saad`;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idutili` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomutili` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idutili`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `véhicule`
--

DROP TABLE IF EXISTS `véhicule`;
CREATE TABLE IF NOT EXISTS `véhicule` (
  `idVéhicule` bigint(20) NOT NULL AUTO_INCREMENT,
  `idutili` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idVéhicule`),
  KEY `FK_Véhicule_idutili` (`idutili`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `véhicule`
--
ALTER TABLE `véhicule`
  ADD CONSTRAINT `FK_Véhicule_idutili` FOREIGN KEY (`idutili`) REFERENCES `utilisateur` (`idutili`);
--
-- Base de données :  `symfony`
--
CREATE DATABASE IF NOT EXISTS `symfony` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `symfony`;

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
