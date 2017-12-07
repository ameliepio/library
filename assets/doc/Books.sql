-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 07 Décembre 2017 à 10:41
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `Books`
--

CREATE TABLE `Books` (
  `id` int(11) NOT NULL,
  `NameBooks` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abstract` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `releaseDate` date NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Books`
--

INSERT INTO `Books` (`id`, `NameBooks`, `author`, `category`, `abstract`, `releaseDate`, `idUser`) VALUES
(1, 'poil de carottes', 'jules Renard', 'autobiography', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-11-09', 2345),
(2, 'RTYUI', 'RTYUI', 'History', 'rtyuio', '2017-12-05', 5),
(4, 'zzzzzz', 'rrrrrrrrrr', 'action', 'ertuoljhf\r\n', '2017-12-06', 45),
(5, 'ERTYUIOP', 'OIUYT', 'blabla', 'ertuioljhgf', '2017-12-03', 5),
(6, 'TYUIO', 'tyui', 'POLICY', 'RTUOPLKJHFD\r\n', '2017-12-09', 567),
(7, 'le guide des métaphores', 'Thomas Gossart', 'comique', 'extrait: si tu sais pas écrire une lettre d\'amour mais que tu offres une boîte de chocolats...', '2017-12-08', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Books`
--
ALTER TABLE `Books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
