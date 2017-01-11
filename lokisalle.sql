-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Janvier 2017 à 16:58
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lokisalle`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(3) NOT NULL,
  `id_membre` int(3) NOT NULL,
  `id_salle` int(3) NOT NULL,
  `commentaire` text NOT NULL,
  `note` int(2) NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(3) NOT NULL,
  `id_membre` int(3) NOT NULL,
  `id_produit` int(3) NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `statut` int(1) NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `id_salle` int(3) NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `prix` int(3) NOT NULL,
  `etat` enum('libre','reservation','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `id_salle`, `date_arrivee`, `date_depart`, `prix`, `etat`) VALUES
(1, 1, '2016-06-18', '2016-05-23', 1200, 'libre'),
(2, 2, '2016-06-25', '2016-06-30', 990, 'libre'),
(3, 3, '2016-07-01', '2016-07-07', 870, 'libre');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(3) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `capacite` int(3) NOT NULL,
  `categorie` enum('reunion','bureaux','formation') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `titre`, `description`, `photo`, `pays`, `ville`, `adresse`, `cp`, `capacite`, `categorie`) VALUES
(1, 'Cézanne', 'Cette salle sera parfaite pour vos réunions d''entreprise', 'assets/img/cezanne.jpg', 'France', 'Paris', '30 rue Mademoiselle', 75015, 30, 'reunion'),
(2, 'Mozart', 'Cette salle vous permettra de recevoir vos collaborateurs en petit comité', 'assets/img/mozart.jpg', 'France', 'Paris', '17 rue de Turbigo', 75002, 5, 'reunion'),
(3, 'Picasso', 'Cette salle vous permettre de travailler au calme', 'assets/img/picasso.jpg', 'France', 'Lyon', '28 quai Claude Bernard', 69007, 2, 'bureaux');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
