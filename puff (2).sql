-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 27 jan. 2023 à 11:22
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `puff`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_login` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_login`, `admin_password`) VALUES
('FerStef', 'Dianie');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Fruits'),
(2, 'Tabac'),
(3, 'CBD'),
(4, '1% Nicotine'),
(5, '0% Nicotine'),
(6, '2% Nicotine');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `prix_promo` int(11) NOT NULL,
  `photo` tinyint(1) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `promo`, `prix_promo`, `photo`, `picture`) VALUES
(1, 'puff ElfBar Passion', 8, 1, 6, 0, 'images/1.jpg'),
(2, 'Puff ELfbar Banane', 8, 1, 6, 1, 'images/2.jpg'),
(3, 'Puff Elfbar Tobacco', 8, 1, 6, 1, 'images/3.jpg'),
(6, 'puff passion 2%', 8, 1, 7, 1, 'images/passion.jpg'),
(7, 'Puff Fraise Kiwi', 8, 1, 6, 1, 'images/4.jpg'),
(8, 'Puff Fraise Banane', 8, 1, 6, 1, 'images/5.jpg'),
(9, 'Puff Pasteque', 8, 1, 6, 1, 'images/6.jpg'),
(10, 'Puff Fraise Kiwi', 8, 1, 6, 1, 'images/4.jpg'),
(11, 'Puff Fraise Banane', 8, 1, 6, 1, 'images/5.jpg'),
(12, 'Puff Pasteque', 8, 1, 6, 1, 'images/6.jpg'),
(13, 'Puff Fraise Kiwi', 8, 1, 6, 1, 'images/4.jpg'),
(14, 'Puff Fraise Banane', 8, 1, 6, 1, 'images/5.jpg'),
(15, 'Puff Pasteque', 8, 1, 6, 1, 'images/6.jpg'),
(16, 'Puff Fraise Kiwi', 8, 1, 6, 1, 'images/4.jpg'),
(17, 'Puff Fraise Banane', 8, 1, 6, 1, 'images/5.jpg'),
(23, 'vsd', 8, 1, 1, 1, 'images/4.jpg'),
(25, 'fb fbd', 8, 1, 1, 1, 'images/4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produits_categorie`
--

CREATE TABLE `produits_categorie` (
  `id_produit` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits_categorie`
--

INSERT INTO `produits_categorie` (`id_produit`, `id_categorie`) VALUES
(1, 1),
(1, 4),
(2, 1),
(2, 6),
(3, 3),
(3, 4),
(3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mdp`, `email`, `role`) VALUES
(58, 'Jean', 'Pascal', 'f7a9e24777ec23212c54d7a350bc5bea5477fdbb', 'aaa@aaa.fr', 0),
(59, 'Pascal', 'Jean', '0e03c6205ea671d7d41a0e3aabfc9d15d97e5ed3', 'bbbbb@bbbbb.fr', 0),
(60, 'DEAN', 'John', 'e93b4e3c464ffd51732fbd6ded717e9efda28aad', 'ccccc@cccc.fr', 0),
(61, 'LAFRIPOUILL', 'Jacques', '70e1bfc519ec1fe1f44603a90b60d626fe590172', 'ddddddd@ddddddd.fr', 0),
(62, 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.fr', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
