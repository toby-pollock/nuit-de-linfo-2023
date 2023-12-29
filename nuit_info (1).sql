-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 29 déc. 2023 à 22:38
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nuit_info`
--

-- --------------------------------------------------------

--
-- Structure de la table `_user`
--

CREATE TABLE `_user` (
  `username` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `score_total` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `_user`
--

INSERT INTO `_user` (`username`, `password_user`, `email_user`, `score_total`) VALUES
('nana2', 'bam', 'cac@gmail.com', 0),
('dlake', 'bim', 'bam@gmail.com', 3),
('stev', '123', 'stev@gmail.com', NULL),
('lebon', 'boum', 'lebon@gmail.com', 1),
('stevy', 'stevy123', 'steven@gmail.com', NULL),
('heisenberg', 'methhead', 'heisenberg@hotmail.com', 6),
('sfsdfsf', 'sdfsdfs', 'dsfsdf@gmail.com', 6),
('nomoreuserid', 'pleasework', 'thisisnowprimarykeylol@gmail.com', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `_user`
--
ALTER TABLE `_user`
  ADD PRIMARY KEY (`email_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
