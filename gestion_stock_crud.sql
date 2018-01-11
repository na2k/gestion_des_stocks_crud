-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 11 jan. 2018 à 10:25
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_stock_crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `img_nom` varchar(50) NOT NULL,
  `img_taille` varchar(25) NOT NULL,
  `img_type` varchar(100) NOT NULL,
  `img_desc` varchar(100) NOT NULL,
  `img_blob` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` smallint(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `description`, `image`) VALUES
(3, 'eau', '5', 'brioche', ''),
(4, 'a', '18', 'a', 'dechiré.jpg'),
(5, 'test', '9000', 'produit test', 'textureice.jpg'),
(6, 'a', '12345', 'aa', 'BTF-lettering-HDfull-square-600px.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` smallint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
