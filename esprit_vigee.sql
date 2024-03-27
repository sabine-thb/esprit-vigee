-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 mars 2024 à 13:23
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `esprit_vigee`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `login`, `mdp`) VALUES
(1, 'admin', '$2y$10$yXj0ig9lRqZYohIP2j6u7OvwTdAM0tWMzPo..5vwZTGSPoQJupYVm');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateResa` date NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tickets` int NOT NULL,
  `date` date NOT NULL,
  `horaire` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `prenom`, `dateResa`, `mail`, `tickets`, `date`, `horaire`) VALUES
(3, 'Thibout', 'Sabine', '2024-03-26', 'sabine@thibout.fr', 3, '2024-03-14', '00:00:13'),
(4, 'Bouazzaoui', 'Rihab', '0000-00-00', 'rihab.bouazzaoui@gmail.com', 2, '2024-03-16', '16:25:18'),
(5, 'Thibout', 'Sabine', '0000-00-00', 'admin@blabla.fr', 1, '2024-03-23', '12:00:00'),
(6, 'Clement', 'Mbarga', '0000-00-00', 'admin@blabla.fr', 2, '2024-03-16', '12:00:00'),
(7, 'Clement', 'Mbarga', '0000-00-00', 'admin@blabla.fr', 2, '2024-03-16', '12:00:00'),
(8, 'swift', 'swift', '0000-00-00', 'swift9100@gmail.com', 3, '2024-03-16', '12:00:00'),
(16, 'Thibout', 'Sabine', '2024-03-26', 'sabine@thibout.fr', 2, '2024-03-28', '06:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
