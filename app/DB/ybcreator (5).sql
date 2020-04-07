-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 09:41 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ybcreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_admin`
--

CREATE TABLE `yearbook_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_yearbook` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yearbook_admin`
--

INSERT INTO `yearbook_admin` (`id`, `name`, `password`, `id_yearbook`, `created_at`) VALUES
(3, 'admin', '$2y$10$O2Unho4Xw20VMUptPRnCl.VxDiCIf91Llsk9TgdG/1OFMoMnzjCae', 2, '2020-03-25 12:12:30'),
(4, 'root', '$2y$10$EkkuJnQGk4NxX7HHuJE/buNwe98qsUOn.4BZkBIUoYn1noZnxzqqu', 0, '2020-03-25 12:12:30'),
(5, 'sbotte', '$2y$10$EN.rHyUTeUzOS9plTyGrfuy1wewrqUHLY6Yg/2bjITokmIxB3ulnG', 2, '2020-03-25 12:12:30'),
(6, 'ochaduc', '$2y$10$kTDBcUkQvULSz8wHSioD1uT7FNPL6ySizFigXMUdcOzAT5.EgAbCG', 2, '2020-03-25 12:12:30'),
(7, 'cduchesne', '$2y$10$/OgD7XpAI4Sxkf4py6ViveTwBjXlvllqsRMgdHZjZTYBAtzUx9pWy', 2, '2020-03-25 12:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_apparait`
--

CREATE TABLE `yearbook_apparait` (
  `id` int(11) NOT NULL,
  `id_photo` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `type` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yearbook_apparait`
--

INSERT INTO `yearbook_apparait` (`id`, `id_photo`, `id_personne`, `type`) VALUES
(5, 15, 10, 'etud'),
(6, 16, 10, 'etud'),
(7, 17, 10, 'etud'),
(8, 18, 15, 'etud'),
(9, 19, 12, 'etud');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_cellule`
--

CREATE TABLE `yearbook_cellule` (
  `id` int(11) NOT NULL,
  `data-image` text DEFAULT NULL,
  `data-style` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearbook_cellule`
--

INSERT INTO `yearbook_cellule` (`id`, `data-image`, `data-style`) VALUES
(1, NULL, 'title'),
(2, NULL, 'bottom-text'),
(3, NULL, 'right-text'),
(4, NULL, 'left-text'),
(5, 'image1', NULL),
(6, 'image2', NULL),
(7, 'image3', NULL),
(8, 'image4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_equipedepartement`
--

CREATE TABLE `yearbook_equipedepartement` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `pnom` text NOT NULL,
  `droitImage` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yearbook_equipedepartement`
--

INSERT INTO `yearbook_equipedepartement` (`id`, `nom`, `pnom`, `droitImage`, `created_at`) VALUES
(1, 'Louet', 'François', 1, '2020-01-31 15:32:11'),
(2, 'Chaulet', 'Bernadette', 1, '2020-01-31 15:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_etudiant`
--

CREATE TABLE `yearbook_etudiant` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `pnom` text NOT NULL,
  `droitImage` tinyint(1) NOT NULL,
  `id_yearbook` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yearbook_etudiant`
--

INSERT INTO `yearbook_etudiant` (`id`, `nom`, `pnom`, `droitImage`, `id_yearbook`, `created_at`) VALUES
(9, 'Botté', 'Simon', 1, 2, '2020-01-31 16:31:56'),
(10, 'Chaduc-Nguyen', 'Océane', 1, 2, '2020-01-31 16:32:10'),
(12, 'Marchand', 'Yohann', 1, 2, '2020-02-03 08:48:55'),
(13, 'Charrier', 'Baptiste', 1, 2, '2020-02-03 08:51:31'),
(14, 'Duchesne', 'Clémence', 1, 2, '2020-02-03 08:52:02'),
(15, 'Fourgeot ', 'Maude', 1, 2, '2020-03-24 13:08:31'),
(16, 'Marlier', 'Aurore', 1, 2, '2020-03-26 14:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_fond`
--

CREATE TABLE `yearbook_fond` (
  `id` int(11) NOT NULL,
  `illustration_mini` text NOT NULL,
  `illustration_larg` text NOT NULL,
  `id_yearbook` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yearbook_fond`
--

INSERT INTO `yearbook_fond` (`id`, `illustration_mini`, `illustration_larg`, `id_yearbook`, `created_at`) VALUES
(9, 'Fond_evenements_mmi_MINI_1580644784.7651.png', 'Fond_evenements_mmi_LARGE_1580644784.7651.png', 2, '2020-02-02 11:59:44'),
(10, 'Fond_iut_MINI_1580644787.7419.png', 'Fond_iut_LARGE_1580644787.7419.png', 2, '2020-02-02 11:59:47'),
(11, 'Fond_soirees_MINI_1580644790.8805.png', 'Fond_soirees_LARGE_1580644790.8805.png', 2, '2020-02-02 11:59:51'),
(12, 'template_vintage_pres_MINI_1580644793.548.png', 'template_vintage_pres_LARGE_1580644793.548.png', 2, '2020-02-02 11:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_image`
--

CREATE TABLE `yearbook_image` (
  `id` int(11) NOT NULL,
  `image_larg` text NOT NULL,
  `image_mini` text NOT NULL,
  `id_yearbook` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yearbook_image`
--

INSERT INTO `yearbook_image` (`id`, `image_larg`, `image_mini`, `id_yearbook`, `created_at`) VALUES
(15, 'img19_LARGE_1582391410.3129.jpg', 'img19_MINI_1582391410.3129.jpg', 2, '2020-02-22 17:10:10'),
(16, '1yQH8F0jysOo2sFT2ciJcYp8kkHaWdAfL=w348-h260-p-k-nu-iv1_LARGE_1584702825.1075.jpg', '1yQH8F0jysOo2sFT2ciJcYp8kkHaWdAfL=w348-h260-p-k-nu-iv1_MINI_1584702825.1075.jpg', 2, '2020-03-20 11:13:45'),
(17, 'The-Mustang-2019-movie-poster_LARGE_1584714728.487.jpg', 'The-Mustang-2019-movie-poster_MINI_1584714728.487.jpg', 2, '2020-03-20 14:32:08'),
(18, 'maud-hang_LARGE_1585056293.5696.jpg', 'maud-hang_MINI_1585056293.5696.jpg', 2, '2020-03-24 13:24:53'),
(19, 'IMG_1914_LARGE_1585240242.5544.png', 'IMG_1914_MINI_1585240242.5544.png', 2, '2020-03-26 16:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_layout`
--

CREATE TABLE `yearbook_layout` (
  `id` int(11) NOT NULL,
  `css_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearbook_layout`
--

INSERT INTO `yearbook_layout` (`id`, `css_id`) VALUES
(4, 'layout1'),
(5, 'layout2'),
(6, 'layout3'),
(7, 'layout4');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_page`
--

CREATE TABLE `yearbook_page` (
  `id` int(11) NOT NULL,
  `pages_number` varchar(11) NOT NULL,
  `fond_id` int(11) DEFAULT NULL,
  `id_yearbook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearbook_page`
--

INSERT INTO `yearbook_page` (`id`, `pages_number`, `fond_id`, `id_yearbook`) VALUES
(3, 'page1', 11, 2),
(4, 'page2', 10, 2),
(5, 'page3', 10, 2),
(6, 'page4', 10, 2),
(7, 'page5', 10, 2),
(8, 'page6', NULL, 2),
(9, 'page7', NULL, 2),
(10, 'page8', NULL, 2),
(11, 'page9', NULL, 2),
(12, 'page10', NULL, 2),
(13, 'page11', NULL, 2),
(14, 'page12', NULL, 2),
(15, 'page13', NULL, 2),
(16, 'page14', NULL, 2),
(17, 'page15', NULL, 2),
(18, 'page16', NULL, 2),
(19, 'page17', NULL, 2),
(20, 'page18', NULL, 2),
(21, 'page19', NULL, 2),
(22, 'page20', NULL, 2),
(23, 'page21', NULL, 2),
(24, 'page22', NULL, 2),
(25, 'page23', NULL, 2),
(26, 'page24', NULL, 2),
(27, 'page25', NULL, 2),
(28, 'page26', NULL, 2),
(29, 'page27', NULL, 2),
(30, 'page28', NULL, 2),
(31, 'page29', NULL, 2),
(32, 'page30', NULL, 2),
(33, 'page31', NULL, 2),
(34, 'page32', NULL, 2),
(35, 'page33', NULL, 2),
(36, 'page34', NULL, 2),
(37, 'page35', NULL, 2),
(38, 'page36', NULL, 2),
(39, 'page37', NULL, 2),
(40, 'page38', NULL, 2),
(41, 'page39', NULL, 2),
(42, 'page40', NULL, 2),
(43, 'page41', NULL, 2),
(44, 'page42', NULL, 2),
(45, 'page43', NULL, 2),
(46, 'page44', NULL, 2),
(47, 'page45', NULL, 2),
(48, 'page46', NULL, 2),
(49, 'page47', NULL, 2),
(50, 'page48', NULL, 2),
(51, 'page49', NULL, 2),
(52, 'page50', NULL, 2),
(53, 'page51', NULL, 2),
(54, 'page52', NULL, 2),
(55, 'page53', NULL, 2),
(56, 'page54', NULL, 2),
(57, 'page55', NULL, 2),
(58, 'page56', NULL, 2),
(59, 'page57', NULL, 2),
(60, 'page58', NULL, 2),
(61, 'page59', NULL, 2),
(62, 'page60', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_pages_layout_cellule_content`
--

CREATE TABLE `yearbook_pages_layout_cellule_content` (
  `id` int(11) NOT NULL,
  `yearbook_id` int(11) NOT NULL,
  `pages_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `cellule_id` int(11) NOT NULL,
  `text_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearbook_pages_layout_cellule_content`
--

INSERT INTO `yearbook_pages_layout_cellule_content` (`id`, `yearbook_id`, `pages_id`, `layout_id`, `cellule_id`, `text_id`, `image_id`, `created_at`) VALUES
(113, 2, 3, 6, 1, 102, NULL, '2020-03-26 17:43:26'),
(115, 2, 3, 6, 5, NULL, 16, '2020-03-26 17:43:55'),
(119, 2, 4, 4, 6, NULL, 16, '2020-03-26 17:47:52'),
(120, 2, 4, 4, 7, NULL, 18, '2020-03-26 17:47:53'),
(121, 2, 4, 4, 8, NULL, 19, '2020-03-26 17:47:54'),
(123, 2, 3, 6, 2, 103, NULL, '2020-03-27 17:29:59'),
(124, 2, 4, 4, 5, NULL, 15, '2020-03-27 17:30:13'),
(125, 2, 3, 6, 3, 104, NULL, '2020-04-06 13:09:59'),
(126, 2, 4, 6, 5, NULL, 17, '2020-04-06 13:13:36'),
(130, 2, 5, 4, 8, NULL, 18, '2020-04-06 14:02:36'),
(131, 2, 3, 6, 4, 105, NULL, '2020-04-06 14:07:39'),
(132, 2, 5, 4, 5, NULL, 16, '2020-04-06 14:09:25'),
(135, 2, 5, 4, 6, NULL, 15, '2020-04-06 14:09:30'),
(136, 2, 5, 4, 7, NULL, 15, '2020-04-06 14:09:32'),
(137, 2, 5, 7, 5, NULL, 15, '2020-04-06 14:09:39'),
(138, 2, 5, 7, 6, NULL, 16, '2020-04-06 14:09:40'),
(139, 2, 4, 6, 4, 106, NULL, '2020-04-06 14:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_police`
--

CREATE TABLE `yearbook_police` (
  `id` int(11) NOT NULL,
  `fontname` varchar(200) NOT NULL,
  `fontname_min` varchar(250) NOT NULL,
  `css` text NOT NULL,
  `html` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yearbook_police`
--

INSERT INTO `yearbook_police` (`id`, `fontname`, `fontname_min`, `css`, `html`, `file`, `created_at`) VALUES
(2, 'Liu Jian Mao Cao', 'liujianmaocao', 'font-family: \'Liu Jian Mao Cao\', cursive;', 'https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap', '', '2020-03-25 12:30:48'),
(3, 'https://fonts.googleapis.com/css2?family=Playfair Display', 'https://fonts.googleapis.com/css2?family=playfairdisplay', 'font-family: \'Playfair Display\', serif;', 'https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap', 'PlayfairDisplay.ttf', '2020-04-06 15:07:53'),
(4, 'https://fonts.googleapis.com/css2?family=Roboto Slab:wght@100', 'https://fonts.googleapis.com/css2?family=robotoslab:wght@100', 'font-family: \'Roboto Slab\', serif;', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap', 'RobotoSlab-VariableFont_wght.ttf', '2020-04-06 15:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_texte`
--

CREATE TABLE `yearbook_texte` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `font` text NOT NULL,
  `author` text CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearbook_texte`
--

INSERT INTO `yearbook_texte` (`id`, `content`, `font`, `author`) VALUES
(102, 'Oceane la fuckeuse', 'open', NULL),
(103, 'caca boudin sefhqighelifhidfhqhfoiehfoiqdhfidhqfoqhfdqfiohdoihfioqhfiodhqiofhdiofhqoifhiohiofshdoifhqiosf', 'open', NULL),
(104, 'd', 'open', NULL),
(105, 'ertetetetetqsdqsdtest', 'open', NULL),
(106, 'erterterterter', 'open', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yearbook_yearbook`
--

CREATE TABLE `yearbook_yearbook` (
  `id` int(11) NOT NULL,
  `anneePromotion` text NOT NULL,
  `fini` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yearbook_yearbook`
--

INSERT INTO `yearbook_yearbook` (`id`, `anneePromotion`, `fini`, `created_at`) VALUES
(2, '2019/2021', 0, '2020-03-18 11:23:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yearbook_admin`
--
ALTER TABLE `yearbook_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_apparait`
--
ALTER TABLE `yearbook_apparait`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_photo` (`id_photo`);

--
-- Indexes for table `yearbook_cellule`
--
ALTER TABLE `yearbook_cellule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_equipedepartement`
--
ALTER TABLE `yearbook_equipedepartement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_etudiant`
--
ALTER TABLE `yearbook_etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_fond`
--
ALTER TABLE `yearbook_fond`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_image`
--
ALTER TABLE `yearbook_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_layout`
--
ALTER TABLE `yearbook_layout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_page`
--
ALTER TABLE `yearbook_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fond_id` (`fond_id`),
  ADD KEY `yearbook_id` (`id_yearbook`);

--
-- Indexes for table `yearbook_pages_layout_cellule_content`
--
ALTER TABLE `yearbook_pages_layout_cellule_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_id` (`pages_id`),
  ADD KEY `layout_id` (`layout_id`),
  ADD KEY `cellule_id` (`cellule_id`),
  ADD KEY `text_id` (`text_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `yearbook_id` (`yearbook_id`);

--
-- Indexes for table `yearbook_police`
--
ALTER TABLE `yearbook_police`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_texte`
--
ALTER TABLE `yearbook_texte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearbook_yearbook`
--
ALTER TABLE `yearbook_yearbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yearbook_admin`
--
ALTER TABLE `yearbook_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `yearbook_apparait`
--
ALTER TABLE `yearbook_apparait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `yearbook_cellule`
--
ALTER TABLE `yearbook_cellule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `yearbook_equipedepartement`
--
ALTER TABLE `yearbook_equipedepartement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yearbook_etudiant`
--
ALTER TABLE `yearbook_etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `yearbook_fond`
--
ALTER TABLE `yearbook_fond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `yearbook_image`
--
ALTER TABLE `yearbook_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `yearbook_layout`
--
ALTER TABLE `yearbook_layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `yearbook_page`
--
ALTER TABLE `yearbook_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `yearbook_pages_layout_cellule_content`
--
ALTER TABLE `yearbook_pages_layout_cellule_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `yearbook_police`
--
ALTER TABLE `yearbook_police`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `yearbook_texte`
--
ALTER TABLE `yearbook_texte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `yearbook_yearbook`
--
ALTER TABLE `yearbook_yearbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `yearbook_apparait`
--
ALTER TABLE `yearbook_apparait`
  ADD CONSTRAINT `yearbook_apparait_ibfk_1` FOREIGN KEY (`id_photo`) REFERENCES `yearbook_image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `yearbook_page`
--
ALTER TABLE `yearbook_page`
  ADD CONSTRAINT `yearbook_page_ibfk_1` FOREIGN KEY (`fond_id`) REFERENCES `yearbook_fond` (`id`),
  ADD CONSTRAINT `yearbook_page_ibfk_2` FOREIGN KEY (`id_yearbook`) REFERENCES `yearbook_yearbook` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `yearbook_pages_layout_cellule_content`
--
ALTER TABLE `yearbook_pages_layout_cellule_content`
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_1` FOREIGN KEY (`layout_id`) REFERENCES `yearbook_layout` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_2` FOREIGN KEY (`pages_id`) REFERENCES `yearbook_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_3` FOREIGN KEY (`cellule_id`) REFERENCES `yearbook_cellule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_4` FOREIGN KEY (`text_id`) REFERENCES `yearbook_texte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_5` FOREIGN KEY (`image_id`) REFERENCES `yearbook_image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yearbook_pages_layout_cellule_content_ibfk_6` FOREIGN KEY (`yearbook_id`) REFERENCES `yearbook_yearbook` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
