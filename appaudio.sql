-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 06 juin 2024 à 09:49
-- Version du serveur : 8.0.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `appaudio`
--

-- --------------------------------------------------------

--
-- Structure de la table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `idAudio` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `chemin` varchar(255) NOT NULL,
  `text_ID` int NOT NULL,
  KEY `fk_text_ID` (`text_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `audio`
--

INSERT INTO `audio` (`idAudio`, `nom`, `chemin`, `text_ID`) VALUES
(3, 'خبز', 'C:wamp64wwwApp_audio', 3),
(1, 'livre', 'C:wamp64wwwApp_audio', 1),
(4, 'aghrum', 'C:wamp64wwwApp_audio', 4),
(6, 'اغروم', 'C:wamp64wwwApp_audio', 6);

-- --------------------------------------------------------

--
-- Structure de la table `text`
--

DROP TABLE IF EXISTS `text`;
CREATE TABLE IF NOT EXISTS `text` (
  `id` int NOT NULL,
  `francais` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `anglais` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `arabe` varchar(255) NOT NULL,
  `tifinagh` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `text`
--

INSERT INTO `text` (`id`, `francais`, `anglais`, `arabe`, `tifinagh`) VALUES
(1, 'livre', 'book', '', ''),
(2, 'bibliotheque', 'library', '', ''),
(3, 'aghrum', 'bread', 'خبز', 'ⴰⴴⵔⵓⵎ'),
(4, 'aghrum', 'bread', 'خبز', 'ⴿⴱⵣ'),
(6, 'ⴰⴴⵔⵓⵎ', 'bread', 'خبز', 'اغروم');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(255) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `passwordUser` varchar(255) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `nomUser`, `emailUser`, `passwordUser`) VALUES
(1, 'zineb', 'zineb.1435dou@gmail.com', '$2y$10$BxrA2OaEVYTHDIOL82RQz.16gnE5fXZAZvH.Dqs8pnVpvZ/aZ0yX6'),
(2, 'sara', 'sara@gmail.com', '$2y$10$/JHtPp1hOwEw.sbpRwwZNOEtvtS1mN.2iIUaCa6/cWBztJwR/j9R6'),
(3, 'rajae', 'rajae@gmail.com', '$2y$10$09oSuAd8KyYL.vBXf2O6pOxiaDOOOEbsW.WQTRvpKt.QeY1Al/.FK'),
(4, 'Taha', 'Taha@gmail.com', '$2y$10$6dMdwqafe1DhkJ2z8ubSfuE/zaYmbef3uZth0/J.3Mss52UmRnV/S'),
(5, 'zineb', 'a.douichat2002@gmail.com', '$2y$10$vlCnd87dTrCbZLixn1a7F.YI1fjjp0W4bilbw7aReUBz.QGxWfRE6'),
(6, 'test', 'test@gmail.com', '$2y$10$Fphc6/dDFnjZNy4qoe7r1elrAROiz7YUKNefVF1.Z4.wPss0OcUmq'),
(7, 'ahmed', 'ahmed@gmail.com', '$2y$10$7Gd.gV6qAmhV8.r2wtk1VOf748w/D1223TRynj4KS6EXbfGyQiory'),
(8, 'digital', 'digital@gmail.com', '$2y$10$c9028/UrCf0a6fLBRIFaA.5nIYrTjHl7a1BQZDTr19rQkQFdHErJm'),
(9, 'Zineb', 'Zineb@gmail.com', '$2y$10$EY8fGWaE8nZk9VFyhhCbzOp8aeCLk3W6zC14iM5G4x39uU7BBUXla');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `fk_text_ID` FOREIGN KEY (`text_ID`) REFERENCES `text` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
