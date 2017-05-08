-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Mai 2017 à 15:17
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `acu`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idU` int(11) NOT NULL,
  `pseudonymeU` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailU` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordU` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idU`, `pseudonymeU`, `emailU`, `passwordU`) VALUES
(1, 'Maxence', 'maxence@live.fr', '7dea34e0f09836bc8f7a4ee07fd96dd9'),
(2, 'Camille', 'camille.cordier.cc@gmail.com', '3bdae171e077adbc3dca25941e524fc5'),
(3, 'Sébastien', 'sebastien.urbe@gmail.com', '6b9826fc0ac0ae65842b9e6db650440c'),
(4, 'Claire', 'claire.delorme@gmail.com', '182e500f562c7b95a2ae0b4dd9f47bb2');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idU`),
  ADD UNIQUE KEY `pseudonymeU` (`pseudonymeU`),
  ADD UNIQUE KEY `emailU` (`emailU`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
