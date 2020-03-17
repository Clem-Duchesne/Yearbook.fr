-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 mars 2020 à 19:42
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ybcreator`
--

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_admin`
--

DROP TABLE IF EXISTS `yearbook_admin`;
CREATE TABLE IF NOT EXISTS `yearbook_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `yearbook_admin`
--

INSERT INTO `yearbook_admin` (`id`, `name`, `password`) VALUES
(2, 'test', '$2y$10$iHZqp16F8kzRu203Ze8tjOcHLWBNwY8ZqvjsfcwtuoFq1flRikKXa'),
(3, 'admin', '$2y$10$O2Unho4Xw20VMUptPRnCl.VxDiCIf91Llsk9TgdG/1OFMoMnzjCae');

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_apparait`
--

DROP TABLE IF EXISTS `yearbook_apparait`;
CREATE TABLE IF NOT EXISTS `yearbook_apparait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_photo` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `type` varchar(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_photo` (`id_photo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `yearbook_apparait`
--

INSERT INTO `yearbook_apparait` (`id`, `id_photo`, `id_personne`, `type`) VALUES
(5, 15, 10, 'etud');

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_cellule`
--

DROP TABLE IF EXISTS `yearbook_cellule`;
CREATE TABLE IF NOT EXISTS `yearbook_cellule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data-image` text,
  `data-style` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `yearbook_cellule`
--

INSERT INTO `yearbook_cellule` (`id`, `data-image`, `data-style`) VALUES
(1, NULL, 'title'),
(2, NULL, 'bottom-text'),
(3, NULL, 'right-text'),
(4, NULL, 'left-text'),
(5, 'image1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_equipedepartement`
--

DROP TABLE IF EXISTS `yearbook_equipedepartement`;
CREATE TABLE IF NOT EXISTS `yearbook_equipedepartement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `pnom` text NOT NULL,
  `droitImage` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `yearbook_equipedepartement`
--

INSERT INTO `yearbook_equipedepartement` (`id`, `nom`, `pnom`, `droitImage`, `created_at`) VALUES
(1, 'Louet', 'François', 1, '2020-01-31 15:32:11'),
(2, 'Chaulet', 'Bernadette', 1, '2020-01-31 15:34:10');

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_etudiant`
--

DROP TABLE IF EXISTS `yearbook_etudiant`;
CREATE TABLE IF NOT EXISTS `yearbook_etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `pnom` text NOT NULL,
  `droitImage` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `yearbook_etudiant`
--

INSERT INTO `yearbook_etudiant` (`id`, `nom`, `pnom`, `droitImage`, `created_at`) VALUES
(9, 'Botté', 'Simon', 1, '2020-01-31 16:31:56'),
(10, 'Chaduc-Nguyen', 'Océane', 1, '2020-01-31 16:32:10'),
(12, 'Marchand', 'Yohann', 1, '2020-02-03 08:48:55'),
(13, 'Charrier', 'Baptiste', 1, '2020-02-03 08:51:31'),
(14, 'Duchesne', 'Clémence', 1, '2020-02-03 08:52:02');

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_fond`
--

DROP TABLE IF EXISTS `yearbook_fond`;
CREATE TABLE IF NOT EXISTS `yearbook_fond` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `illustration_mini` text NOT NULL,
  `illustration_larg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `yearbook_fond`
--

INSERT INTO `yearbook_fond` (`id`, `illustration_mini`, `illustration_larg`, `created_at`) VALUES
(9, 'Fond_evenements_mmi_MINI_1580644784.7651.png', 'Fond_evenements_mmi_LARGE_1580644784.7651.png', '2020-02-02 11:59:44'),
(10, 'Fond_iut_MINI_1580644787.7419.png', 'Fond_iut_LARGE_1580644787.7419.png', '2020-02-02 11:59:47'),
(11, 'Fond_soirees_MINI_1580644790.8805.png', 'Fond_soirees_LARGE_1580644790.8805.png', '2020-02-02 11:59:51'),
(12, 'template_vintage_pres_MINI_1580644793.548.png', 'template_vintage_pres_LARGE_1580644793.548.png', '2020-02-02 11:59:53');

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_image`
--

DROP TABLE IF EXISTS `yearbook_image`;
CREATE TABLE IF NOT EXISTS `yearbook_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_larg` text NOT NULL,
  `image_mini` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `yearbook_image`
--

INSERT INTO `yearbook_image` (`id`, `image_larg`, `image_mini`, `created_at`) VALUES
(15, 'img19_LARGE_1582391410.3129.jpg', 'img19_MINI_1582391410.3129.jpg', '2020-02-22 17:10:10');

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_layout`
--

DROP TABLE IF EXISTS `yearbook_layout`;
CREATE TABLE IF NOT EXISTS `yearbook_layout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `css_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `yearbook_layout`
--

INSERT INTO `yearbook_layout` (`id`, `css_id`) VALUES
(1, 'layout1'),
(2, 'layout3');

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_page`
--

DROP TABLE IF EXISTS `yearbook_page`;
CREATE TABLE IF NOT EXISTS `yearbook_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pages_number` varchar(11) NOT NULL,
  `fond_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fond_id` (`fond_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `yearbook_page`
--

INSERT INTO `yearbook_page` (`id`, `pages_number`, `fond_id`) VALUES
(1, 'page1', 9),
(2, 'page2', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_pages_layout_cellule_content`
--

DROP TABLE IF EXISTS `yearbook_pages_layout_cellule_content`;
CREATE TABLE IF NOT EXISTS `yearbook_pages_layout_cellule_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pages_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `cellule_id` int(11) NOT NULL,
  `text_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pages_id` (`pages_id`),
  KEY `layout_id` (`layout_id`),
  KEY `cellule_id` (`cellule_id`),
  KEY `text_id` (`text_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `yearbook_pages_layout_cellule_content`
--

INSERT INTO `yearbook_pages_layout_cellule_content` (`id`, `pages_id`, `layout_id`, `cellule_id`, `text_id`, `image_id`) VALUES
(14, 1, 2, 1, 89, NULL),
(20, 1, 2, 2, 91, NULL),
(23, 1, 2, 5, NULL, 15);

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_police`
--

DROP TABLE IF EXISTS `yearbook_police`;
CREATE TABLE IF NOT EXISTS `yearbook_police` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `css` text NOT NULL,
  `html` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_promotion`
--

DROP TABLE IF EXISTS `yearbook_promotion`;
CREATE TABLE IF NOT EXISTS `yearbook_promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annees` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_texte`
--

DROP TABLE IF EXISTS `yearbook_texte`;
CREATE TABLE IF NOT EXISTS `yearbook_texte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `font` text NOT NULL,
  `author` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `yearbook_texte`
--

INSERT INTO `yearbook_texte` (`id`, `content`, `font`, `author`) VALUES
(89, 'qefqg', 'text', NULL),
(90, 'Il était une fois', 'text', NULL),
(91, 'Trois petits chats', 'text', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `yearbook_yearbook`
--

DROP TABLE IF EXISTS `yearbook_yearbook`;
CREATE TABLE IF NOT EXISTS `yearbook_yearbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annéePromotion` text NOT NULL,
  `actif` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `yearbook_apparait`
--
ALTER TABLE `yearbook_apparait`
  ADD CONSTRAINT `yearbook_apparait_ibfk_1` FOREIGN KEY (`id_photo`) REFERENCES `yearbook_image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `yearbook_page`
--
ALTER TABLE `yearbook_page`
  ADD CONSTRAINT `yearbook_page_ibfk_1` FOREIGN KEY (`fond_id`) REFERENCES `yearbook_fond` (`id`);

--
-- Contraintes pour la table `yearbook_pages_layout_cellule_content`
--
ALTER TABLE `yearbook_pages_layout_cellule_content`
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_1` FOREIGN KEY (`layout_id`) REFERENCES `yearbook_layout` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_2` FOREIGN KEY (`pages_id`) REFERENCES `yearbook_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_3` FOREIGN KEY (`cellule_id`) REFERENCES `yearbook_cellule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_4` FOREIGN KEY (`text_id`) REFERENCES `yearbook_texte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_5` FOREIGN KEY (`image_id`) REFERENCES `yearbook_image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
