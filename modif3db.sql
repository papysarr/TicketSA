-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 09 Octobre 2019 à 19:28
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gesticketsa`
--

-- --------------------------------------------------------

--
-- Structure de la table `existe`
--

CREATE TABLE `existe` (
  `id_ref` int(11) NOT NULL,
  `id_se` int(11) NOT NULL,
  `Effectif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `referentiel`
--

CREATE TABLE `referentiel` (
  `id` int(11) NOT NULL,
  `nomreferentiel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `referentiel`
--

INSERT INTO `referentiel` (`id`, `nomreferentiel`) VALUES
(16, 'Data artisan'),
(17, 'Dev web'),
(15, 'Référent digital');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `annee` varchar(50) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `effectif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `session`
--

INSERT INTO `session` (`id`, `nom`, `annee`, `datedebut`, `datefin`, `effectif`) VALUES
(4, 'Promo Alioune Ndiaye', '2018', '2017-11-04', '2018-05-04', 45),
(5, 'Promo Yankhoba Ben Abdallah Mané', '2019', '2018-03-02', '2019-11-15', 100);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `profil` varchar(50) NOT NULL,
  `login` varchar(100) NOT NULL,
  `motpasse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `profil`, `login`, `motpasse`) VALUES
(1, 'Ndiaye', 'Astou', 'Admin', 'astoundiaye@gmail.sn', 'astoundiayesa'),
(2, 'thior', 'ousmane', 'simpleUser', 'ousmanethior@gmail.sa', 'malamine10'),
(3, 'thior', 'ouze', 'simpleUser', 'thior15@hotmail.com', '1234'),
(4, 'thior', 'ouze', 'simpleUser', 'pub@prestashop.com', '12345'),
(5, 'fsbc', 'dsfvwc', 'simpleUser', 'etgndg ', '1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `existe`
--
ALTER TABLE `existe`
  ADD PRIMARY KEY (`id_ref`,`id_se`),
  ADD KEY `existe_session0_FK` (`id_se`);

--
-- Index pour la table `referentiel`
--
ALTER TABLE `referentiel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomreferentiel` (`nomreferentiel`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `referentiel`
--
ALTER TABLE `referentiel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `existe`
--
ALTER TABLE `existe`
  ADD CONSTRAINT `existe_referentiel_FK` FOREIGN KEY (`id_ref`) REFERENCES `referentiel` (`id`),
  ADD CONSTRAINT `existe_session0_FK` FOREIGN KEY (`id_se`) REFERENCES `session` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
