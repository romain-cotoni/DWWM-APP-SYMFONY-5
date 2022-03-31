-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 jan. 2022 à 13:15
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `symfonygnosys`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id`, `identification`) VALUES
(7, 'billy'),
(18, 'bob'),
(90, 'babar-candidat');

-- --------------------------------------------------------

--
-- Structure de la table `candidat_competence`
--

DROP TABLE IF EXISTS `candidat_competence`;
CREATE TABLE IF NOT EXISTS `candidat_competence` (
  `candidat_id` int(11) NOT NULL,
  `competence_id` int(11) NOT NULL,
  PRIMARY KEY (`candidat_id`,`competence_id`),
  KEY `IDX_CF607D68D0EB82` (`candidat_id`),
  KEY `IDX_CF607D615761DAB` (`competence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `candidat_competence`
--

INSERT INTO `candidat_competence` (`candidat_id`, `competence_id`) VALUES
(7, 1),
(7, 2),
(7, 3),
(7, 49),
(7, 50),
(7, 51),
(18, 1),
(18, 3),
(18, 51),
(90, 1);

-- --------------------------------------------------------

--
-- Structure de la table `candidat_session`
--

DROP TABLE IF EXISTS `candidat_session`;
CREATE TABLE IF NOT EXISTS `candidat_session` (
  `candidat_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`candidat_id`,`session_id`),
  KEY `IDX_8949233E8D0EB82` (`candidat_id`),
  KEY `IDX_8949233E613FECDF` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `candidat_session`
--

INSERT INTO `candidat_session` (`candidat_id`, `session_id`) VALUES
(7, 103),
(18, 22),
(90, 4);

-- --------------------------------------------------------

--
-- Structure de la table `ccp`
--

DROP TABLE IF EXISTS `ccp`;
CREATE TABLE IF NOT EXISTS `ccp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre_id` int(11) DEFAULT NULL,
  `code_ccp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelle_ccp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AB05E533D54FAE5E` (`titre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ccp`
--

INSERT INTO `ccp` (`id`, `titre_id`, `code_ccp`, `libelle_ccp`) VALUES
(11, 3, 'ccp1', 'ccp-libelle-1'),
(12, NULL, 'ccp2', 'ccp-libelle-2'),
(13, 3, 'ccp3', 'ccp-libelle-3'),
(14, 3, 'ccp4', 'ccp-libelle-4'),
(15, 3, 'ccp5', 'ccp-libelle-5'),
(16, 3, 'ccp6', 'ccp-libelle-6'),
(17, NULL, 'ccp7', 'ccp-libelle-7');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci,
  `commentaire` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `description`, `commentaire`) VALUES
(1, 'description d\'une 1ere compétence', 'commentaire d\'une 1ere compétence'),
(2, 'description d\'une 2eme compétence', 'commentaire d\'une 2eme compétence'),
(3, 'description d\'une 3eme competence', 'commentaire d\'une 3eme compétence'),
(49, 'description d\'une 4eme compétence', 'commentaire d\'une 4eme compétence'),
(50, 'description d\'une 5eme compétence', 'commentaire d\'une 5eme compétence'),
(51, 'description d\'une 6eme compétence', 'commentaire d\'une 6eme compétence');

-- --------------------------------------------------------

--
-- Structure de la table `content_entity`
--

DROP TABLE IF EXISTS `content_entity`;
CREATE TABLE IF NOT EXISTS `content_entity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `content_entity`
--

INSERT INTO `content_entity` (`id`, `name`, `value`, `text`) VALUES
(60, 'header-menu-item-1', 'ACCUEIL', NULL),
(61, 'header-menu-item-2', 'L\'ENTREPRISE', NULL),
(62, 'header-menu-item-3', 'NOUS CONTACTER', NULL),
(63, 'footer-text', 'voici mon jolie footer', NULL),
(64, 'footer-icon-1', 'assets/icon/facebook.png', NULL),
(65, 'footer-icon-2', 'assets/icon/linkedin.png', NULL),
(66, 'footer-icon-3', 'assets/icon/twitter.png', NULL),
(67, 'footer-icon-4', 'assets/icon/instagram.png', NULL),
(68, 'footer-icon-5', 'assets/icon/whatsapp.png', NULL),
(69, 'footer-icon-6', 'assets/icon/google.png', NULL),
(70, 'footer-icon-7', 'assets/icon/github.png', NULL),
(71, 'accueil-slogan', 'CE SLOGAN EST SI BEAU', NULL),
(72, 'accueil-text-intro', NULL, 'There are still too many things I don\'t own! You know, I was God once.'),
(73, 'accueil-card-1-img', 'assets/img/formation.jpg', NULL),
(74, 'accueil-card-1-header', 'Formation', NULL),
(75, 'accueil-card-1-body', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(76, 'accueil-card-2-img', 'assets/img/audit.jpg', NULL),
(77, 'accueil-card-2-header', 'Audit-formation', NULL),
(78, 'accueil-card-2-body', NULL, 'Son, as your lawyer, I declare y\'all are in a'),
(79, 'accueil-card-3-img', 'assets/img/jury.jpg', NULL),
(80, 'accueil-card-3-header', 'Jury', NULL),
(81, 'accueil-card-3-body', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(82, 'accueil-card-4-img', 'assets/img/conception.jpg', NULL),
(83, 'accueil-card-4-header', 'Conception', NULL),
(84, 'accueil-card-4-body', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(85, 'accueil-card-5-img', 'assets/img/stage.jpg', NULL),
(86, 'accueil-card-5-header', 'Stage', NULL),
(87, 'accueil-card-5-body', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(88, 'entreprise-text-intro', NULL, 'For example, if you killed your grandfather, you\'d cease to exist! No! I want to live! There are still too many things I don\'t own! You know, I was God once.'),
(89, 'entreprise-cat-1-img', 'assets/img/ciceron.png', NULL),
(90, 'entreprise-cat-1-icon', 'icon link', NULL),
(91, 'entreprise-cat-1-title', 'Qui suis je ?', NULL),
(92, 'entreprise-cat-1-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(93, 'entreprise-cat-2-icon', 'icon link', NULL),
(94, 'entreprise-cat-2-title', 'Pourquoi ?', NULL),
(95, 'entreprise-cat-2-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(96, 'entreprise-cat-3-icon', 'icon link', NULL),
(97, 'entreprise-cat-3-title', 'Depuis quand ?', NULL),
(98, 'entreprise-cat-3-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(99, 'entreprise-cat-4-icon', 'icon link', NULL),
(100, 'entreprise-cat-4-title', 'Entreprises pour lesquelles j\'ai travaillé', NULL),
(101, 'entreprise-cat-4.1-title', 'Entreprise 1, date - date', NULL),
(102, 'entreprise-cat-4.1-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(103, 'entreprise-cat-4.2-title', 'Entreprise 2, date - date', NULL),
(104, 'entreprise-cat-4.2-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(105, 'entreprise-cat-4.3-title', 'Entreprise 3, date - date', NULL),
(106, 'entreprise-cat-4.3-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(107, 'entreprise-cat-4.4-title', 'Entreprise 4, date - date', NULL),
(108, 'entreprise-cat-4.4-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(109, 'contact-cat-1-icon', 'assets/icon/telephone.png', NULL),
(110, 'contact-cat-1-title', 'Téléphonez-nous', NULL),
(111, 'contact-cat-1-line-1', 'Pascal Carlier', NULL),
(112, 'contact-cat-1-line-2', '+33 (0)6 00 00 00', NULL),
(113, 'contact-cat-1-line-3', 'Lundi-Vendredi, 9h00-18h00', NULL),
(114, 'contact-cat-2-icon', 'assets/icon/letter.png', NULL),
(115, 'contact-cat-2-title', 'Ecrivez-nous', NULL),
(116, 'contact-cat-2-line-1', 'Gnosys Experimental', NULL),
(117, 'contact-cat-2-line-2', '27 place de la Cathédrale', NULL),
(118, 'contact-cat-2-line-3', '80080 Amiens', NULL),
(119, 'contact-cat-3-icon', 'assets/icon/rgpd.png', NULL),
(120, 'contact-cat-3-title', 'Informations légale', NULL),
(121, 'contact-cat-3-line-1', 'lorem ipsum', NULL),
(122, 'contact-cat-3-line-2', 'lorem ipsum', NULL),
(123, 'contact-cat-3-line-3', 'lorem ipsum', NULL),
(124, 'formation-text-intro', NULL, 'For example, if you killed your grandfather, you\'d cease to exist! No! I want to live! There are still too many things I don\'t own! You know, I was God once.'),
(125, 'formation-cat-1-icon', 'assets/icon/education.png', NULL),
(126, 'formation-cat-1-title', 'Formation n°1', NULL),
(127, 'formation-cat-1-line-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(128, 'formation-cat-1-line-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(129, 'formation-cat-1-line-3', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(130, 'formation-cat-2-icon', 'assets/icon/open-book.png', NULL),
(131, 'formation-cat-2-title', 'Formation n°2', NULL),
(132, 'formation-cat-2-line-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(133, 'formation-cat-2-line-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(134, 'formation-cat-2-line-3', NULL, 'lorem ipsum'),
(135, 'formation-cat-3-icon', 'assets/icon/student.png', NULL),
(136, 'formation-cat-3-title', 'Formation n°3', NULL),
(137, 'formation-cat-3-line-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(138, 'formation-cat-3-line-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(139, 'formation-cat-3-line-3', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(140, 'formation-cat-4-icon', 'assets/icon/education-2.png', NULL),
(141, 'formation-cat-4-title', 'Formation n°4', NULL),
(142, 'formation-cat-4-line-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(143, 'formation-cat-4-line-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(144, 'formation-cat-4-line-3', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(145, 'formation-cat-5-icon', 'assets/icon/presentation.png', NULL),
(146, 'formation-cat-5-title', 'Formation n°5', NULL),
(147, 'formation-cat-5-line-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(148, 'formation-cat-5-line-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(149, 'formation-cat-5-line-3', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(150, 'audit-text-intro', NULL, 'For example, if you killed your grandfather, you\'d cease to exist! No! I want to live! There are still too many things I don\'t own! You know, I was God once.'),
(151, 'audit-cat-1-icon', 'assets/icon/audit.png', NULL),
(152, 'audit-cat-1-title', 'Audit de formation de titre professionnel', NULL),
(153, 'audit-cat-1-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(154, 'audit-cat-1-para-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(155, 'jury-text-intro', NULL, 'For example, if you killed your grandfather, you\'d cease to exist! No! I want to live! There are still too many things I don\'t own! You know, I was God once.'),
(156, 'jury-cat-1-img', 'assets/img/map.png', NULL),
(157, 'jury-cat-1-icon', 'assets/icon/camper-van.png', NULL),
(158, 'jury-cat-1-title', 'Lieux de couverture', NULL),
(159, 'jury-cat-1-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(160, 'jury-cat-1-para-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(161, 'jury-cat-1-para-3', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(162, 'jury-cat-2-icon', 'assets/icon/certification.png', NULL),
(163, 'jury-cat-2-title', 'Habilitations', NULL),
(164, 'jury-cat-2-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(165, 'jury-cat-2-para-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(166, 'jury-cat-2-para-3', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(167, 'jury-cat-3-icon', 'assets/icon/judge.png', NULL),
(168, 'jury-cat-3-title', 'Types de jury', NULL),
(169, 'jury-cat-3-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(170, 'jury-cat-3-para-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(171, 'jury-cat-3-para-3', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(172, 'jury-cat-4-icon', 'assets/icon/pdf.png', NULL),
(173, 'jury-cat-4-title', 'Référentiel emploi activités compétences de titres professionnels(REAC)', NULL),
(174, 'jury-cat-4-pdf-1', 'pdf link', NULL),
(175, 'jury-cat-4-pdf-2', 'pdf link', NULL),
(176, 'jury-cat-4-pdf-3', 'pdf link', NULL),
(177, 'jury-cat-4-pdf-4', 'pdf link', NULL),
(178, 'conception-text-intro', NULL, 'For example, if you killed your grandfather, you\'d cease to exist! No! I want to live! There are still too many things I don\'t own! You know, I was God once.'),
(179, 'conception-cat-1-icon', 'assets/icon/conception.png', NULL),
(180, 'conception-cat-1-title', 'Consultation en conception et développement', NULL),
(181, 'conception-cat-1-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(182, 'conception-cat-1-para-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(183, 'stage-text-intro', NULL, 'For example, if you killed your grandfather, you\'d cease to exist! No! I want to live! There are still too many things I don\'t own! You know, I was God once.'),
(184, 'stage-cat-1-icon', 'assets/icon/internship.png', NULL),
(185, 'stage-cat-1-title', 'Encadrement activité de stage', NULL),
(186, 'stage-cat-1-para-1', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !'),
(187, 'stage-cat-1-para-2', NULL, 'Son, as your lawyer, I declare y\'all are in a 12-piece bucket o\' trouble. But I done struck you a deal !');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211205205312', '2021-12-05 20:54:45', 2333),
('DoctrineMigrations\\Version20211207082129', '2021-12-07 08:22:54', 693),
('DoctrineMigrations\\Version20211207180108', '2021-12-07 18:01:21', 1884),
('DoctrineMigrations\\Version20211207181223', '2021-12-07 18:12:28', 2046),
('DoctrineMigrations\\Version20211207182341', '2021-12-07 18:23:46', 3173),
('DoctrineMigrations\\Version20211207183140', '2021-12-07 18:31:49', 1959),
('DoctrineMigrations\\Version20211207191020', '2021-12-07 19:10:49', 2020),
('DoctrineMigrations\\Version20211207192247', '2021-12-07 19:22:59', 1188),
('DoctrineMigrations\\Version20211207193631', '2021-12-07 19:36:37', 2176),
('DoctrineMigrations\\Version20211207193903', '2021-12-07 19:39:16', 1621),
('DoctrineMigrations\\Version20211207194523', '2021-12-07 19:45:29', 1501),
('DoctrineMigrations\\Version20211207195937', '2021-12-07 19:59:43', 2666),
('DoctrineMigrations\\Version20211207200257', '2021-12-07 20:03:02', 1255),
('DoctrineMigrations\\Version20211210083105', '2021-12-10 08:31:46', 2114),
('DoctrineMigrations\\Version20211211125701', '2021-12-11 12:57:15', 668),
('DoctrineMigrations\\Version20211215104841', '2021-12-15 10:49:02', 443),
('DoctrineMigrations\\Version20211215114801', '2021-12-15 11:48:13', 313),
('DoctrineMigrations\\Version20211227223230', '2021-12-27 22:33:00', 453),
('DoctrineMigrations\\Version20211229111549', '2021-12-29 11:15:59', 374),
('DoctrineMigrations\\Version20211229112145', '2021-12-29 11:21:51', 232);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raison_sociale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code_postal_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `raison_sociale`, `adresse_entreprise`, `code_postal_entreprise`, `ville_entreprise`, `telephone_entreprise`) VALUES
(5, 'joahanaentreprise', '27 rue barberis', '06300', '', ''),
(7, 'eloiseentreprise', '27 rue barberis', '06300', '', ''),
(8, 'elientreprise', '27 rue barberis', '06300', '', ''),
(9, 'brigitteentreprise', '', '', '', ''),
(10, 'yoyo-entreprise', '27 rue barberis', '06300', '', ''),
(11, 'mila-entreprise', '27 rue barberis', '06300', '', ''),
(12, 'helene-entreprise', '27 rue barberis', '06300', '', ''),
(13, 'violaine-entreprise', '27 rue barberis', '06300', '', ''),
(14, 'aaaa', 'aaaa', 'bbbb', 'aaaa', 'aaaa'),
(15, 'dingo-entreprise', '27 rue barberis', '06300', 'nice', '0652844507'),
(16, 'charleene-entreprise', '27 rue barberis', '06300', '', ''),
(17, 'bobo-entreprise', 'bobo adresse', '06300', 'nice', '0652844507'),
(18, 'bob-entreprise', 'bob adresse', '06300', 'nice', '0652844507'),
(19, 'billy-entreprise-raison-sociale', NULL, NULL, NULL, NULL),
(20, 'raison-sociale-bill', 'aaa', 'aaa', 'aaa', 'aaa'),
(26, 'johnentreprise', '27 rue barberis', '06300', 'nice', '0652844507'),
(60, 'johnentreprise', '27 rue barberis', '06300', 'nice', '0652844507'),
(61, 'martineentreprise', '', '', '', ''),
(69, 'martineentreprise', '', '', '', ''),
(70, 'tintin-incss', '', '', '', ''),
(71, 'boris-entreprise', NULL, NULL, NULL, NULL),
(72, 'albert-entreprise', NULL, NULL, NULL, NULL),
(73, 'picsette-entreprise', NULL, NULL, NULL, NULL),
(74, 'babar-entreprise', NULL, NULL, NULL, NULL),
(75, 'boris-entreprise', NULL, NULL, NULL, NULL),
(76, 'bob-entreprise-raison-sociale', NULL, NULL, NULL, NULL),
(77, '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `habilitation`
--

DROP TABLE IF EXISTS `habilitation`;
CREATE TABLE IF NOT EXISTS `habilitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre_habilitation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_debut_habilitation` date DEFAULT NULL,
  `date_fin_habilitation` date DEFAULT NULL,
  `titre_id_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A7BC2768D6840B39` (`titre_id_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `habilitation`
--

INSERT INTO `habilitation` (`id`, `titre_habilitation`, `date_debut_habilitation`, `date_fin_habilitation`, `titre_id_id`) VALUES
(20, 'habilitation1', '2021-12-01', '2021-12-02', 3),
(21, 'habilitation2', '2021-12-03', '2021-12-04', NULL),
(22, 'habilitation3', '2021-12-05', '2021-12-06', 3),
(23, 'habilitation4', '2021-12-07', '2021-12-08', 3),
(24, 'habilitation5', '2021-12-08', '2021-12-09', 3),
(25, 'habilitation6', '2021-12-29', '2021-12-30', 3),
(26, 'habilitation7', '2021-12-10', '2021-12-24', 3),
(27, 'habilitation8', '2021-12-10', '2021-12-24', 3),
(28, 'habilitation9', '1941-01-02', '2022-01-28', NULL),
(29, 'habilitation10', '2018-01-04', '2022-01-28', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `jour`
--

DROP TABLE IF EXISTS `jour`;
CREATE TABLE IF NOT EXISTS `jour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_jour` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `jour`
--

INSERT INTO `jour` (`id`, `date_jour`) VALUES
(1, '2016-02-01'),
(2, '2021-12-11'),
(3, '2021-12-11'),
(4, '2021-12-09'),
(5, '2021-12-09'),
(6, '2021-12-06'),
(7, '2021-08-05'),
(8, '2021-12-09'),
(9, '2021-12-02'),
(10, '2021-12-02'),
(11, '2021-12-02'),
(12, '2021-12-25'),
(13, '2021-12-06'),
(14, '2016-02-01'),
(15, '2016-02-01'),
(16, '2016-02-01'),
(17, '2021-12-02'),
(18, '2016-02-01'),
(19, '2015-01-01'),
(20, '2016-03-01'),
(21, '2014-03-01');

-- --------------------------------------------------------

--
-- Structure de la table `jours`
--

DROP TABLE IF EXISTS `jours`;
CREATE TABLE IF NOT EXISTS `jours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_jour` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jury`
--

DROP TABLE IF EXISTS `jury`;
CREATE TABLE IF NOT EXISTS `jury` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_jury_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_jury_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_jury_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_jury_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_jury_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_jury_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `jury`
--

INSERT INTO `jury` (`id`, `nom_jury_1`, `prenom_jury_1`, `nom_jury_2`, `prenom_jury_2`, `nom_jury_3`, `prenom_jury_3`) VALUES
(1, 'minie1', 'minie1', 'minie2', 'minie2', 'minie3', 'minie3'),
(2, 'jury', 'jury', 'jury', 'jury', 'jury', 'jury'),
(3, 'bbbb', 'bbbbb', 'bbbb', 'bbbb', 'bbbb', 'bbbbb'),
(4, 'jjjj', 'jjjj', 'jjjj', 'jjjj', 'jjjj', 'jjjj'),
(5, 'billy', '', '', '', '', ''),
(6, 'john1', 'john1', 'john2', 'john2', 'john3', 'john3'),
(7, 'john11', '', 'john22', '', 'john33', ''),
(8, 'martine-jury-11', 'martine-jury-1', 'martine-jury-2', 'martine-jury-2', 'martine-jury-3', 'martine-jury-3'),
(9, 'martine-jury-11', 'martine-jury-11', 'martine-jury-2', 'martine-jury-2', 'martine-jury-3', 'martine-jury-3'),
(10, 'nom_jury_111', '', 'nom_jury_222', '', '', ''),
(11, 'fgtrgg', '', '', 'ffdfdf', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre_id` int(11) DEFAULT NULL,
  `code_niveau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelle_niveau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4BDFF36BD54FAE5E` (`titre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `titre_id`, `code_niveau`, `libelle_niveau`) VALUES
(5, 9, 'boulanger-niveau-code', 'boulanger-niveau-lib'),
(6, 2, 'dwwm-niveau-code', 'dwwm-niveau-lib'),
(9, 1, '', ''),
(10, 3, 'cda-niveau-code', 'cda-niveau-lib'),
(11, 4, 'architecte-niveau-code', 'architecte-niveau-lib');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `domaine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom_produit`, `domaine`) VALUES
(6, 'babar-produit', NULL),
(8, 'bob-produit', NULL),
(9, 'billy', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commentaires` longtext COLLATE utf8_unicode_ci,
  `candidat_id_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_50159CA9BFA9F225` (`candidat_id_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom_projet`, `commentaires`, `candidat_id_id`) VALUES
(9, 'babar-projet', NULL, 90),
(10, 'billy-projet-nom', NULL, 7),
(11, 'bob-projet', NULL, 18);

-- --------------------------------------------------------

--
-- Structure de la table `projet_produit`
--

DROP TABLE IF EXISTS `projet_produit`;
CREATE TABLE IF NOT EXISTS `projet_produit` (
  `projet_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  PRIMARY KEY (`projet_id`,`produit_id`),
  KEY `IDX_AB8FB156C18272` (`projet_id`),
  KEY `IDX_AB8FB156F347EFB` (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projet_produit`
--

INSERT INTO `projet_produit` (`projet_id`, `produit_id`) VALUES
(9, 6),
(10, 9),
(11, 8);

-- --------------------------------------------------------

--
-- Structure de la table `responsable_entreprise`
--

DROP TABLE IF EXISTS `responsable_entreprise`;
CREATE TABLE IF NOT EXISTS `responsable_entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise_id_id` int(11) DEFAULT NULL,
  `nom_responsable_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_responsable_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fonction_responsable_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_fixe_responsable_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_mob_responsable_entreprise` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F9300960DAC5BE2B` (`entreprise_id_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `responsable_entreprise`
--

INSERT INTO `responsable_entreprise` (`id`, `entreprise_id_id`, `nom_responsable_entreprise`, `prenom_responsable_entreprise`, `fonction_responsable_entreprise`, `tel_fixe_responsable_entreprise`, `tel_mob_responsable_entreprise`) VALUES
(1, 5, 'joahanaesponsable', 'joahana', 'responsable', '0652844507', '0652844507'),
(3, 7, 'eloiseesponsable', 'eloise', 'responsable', '0652844507', '0652844507'),
(4, 11, 'milaresponsable', 'mila', 'responsable', '0652844507', '0652844507'),
(5, 12, 'helene-responsable', 'mila', 'responsable', '0652844507', '0652844507'),
(8, 14, 'eeee', 'eeee', 'eeee', 'eeee', 'eeee'),
(9, 14, 'aaaa', '', '', '', ''),
(10, 19, 'billy-responsable-entreprise-nom', NULL, 'billy-responsable-entreprise-fonction', NULL, NULL),
(11, 60, 'bob', 'bob', 'bob', 'bob', ''),
(12, 26, 'marc', '', '', '', ''),
(15, 72, NULL, NULL, 'albert-entreprise-fonction', NULL, NULL),
(16, 73, NULL, NULL, 'picsette-entreprise-fonction', NULL, NULL),
(17, 74, NULL, NULL, 'babar-entreprise-fonction', NULL, NULL),
(18, 75, NULL, NULL, 'boris-entreprise-fonction', NULL, NULL),
(19, 76, NULL, NULL, 'bob-entreprise-fonction', NULL, NULL),
(20, 77, NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `nb_jours` int(11) DEFAULT NULL,
  `responsable` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_session` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code_postal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entreprise_id_id` int(11) DEFAULT NULL,
  `titre_id_id` int(11) DEFAULT NULL,
  `titres_id_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D044D5D4DAC5BE2B` (`entreprise_id_id`),
  UNIQUE KEY `UNIQ_D044D5D4D6840B39` (`titre_id_id`),
  KEY `IDX_D044D5D457C2ADE9` (`titres_id_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`id`, `identifiant`, `date_debut`, `date_fin`, `nb_jours`, `responsable`, `telephone`, `site_session`, `adresse`, `code_postal`, `ville`, `entreprise_id_id`, `titre_id_id`, `titres_id_id`) VALUES
(4, 'billy', '2018-04-14', '2019-05-18', 4, 'laetitia', '0652844507', 'nice', '27 rue barberis', '06300', 'nice', 19, 1, 3),
(22, 'bob', '2016-01-01', '2017-02-03', 2, 'bob', '0652844507', 'nice', '27 rue barberis', '06300', 'nice', 76, 2, 2),
(103, 'babar', '2019-01-01', '2021-12-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 5, 3),
(105, 'lisa', '2016-01-01', '2017-02-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 77, 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `session_jour`
--

DROP TABLE IF EXISTS `session_jour`;
CREATE TABLE IF NOT EXISTS `session_jour` (
  `session_id` int(11) NOT NULL,
  `jour_id` int(11) NOT NULL,
  PRIMARY KEY (`session_id`,`jour_id`),
  KEY `IDX_1C66D9EF613FECDF` (`session_id`),
  KEY `IDX_1C66D9EF220C6AD0` (`jour_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `session_jour`
--

INSERT INTO `session_jour` (`session_id`, `jour_id`) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 19),
(4, 20),
(4, 21);

-- --------------------------------------------------------

--
-- Structure de la table `session_jury`
--

DROP TABLE IF EXISTS `session_jury`;
CREATE TABLE IF NOT EXISTS `session_jury` (
  `session_id` int(11) NOT NULL,
  `jury_id` int(11) NOT NULL,
  PRIMARY KEY (`session_id`,`jury_id`),
  KEY `IDX_D544B006613FECDF` (`session_id`),
  KEY `IDX_D544B006E560103C` (`jury_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `session_jury`
--

INSERT INTO `session_jury` (`session_id`, `jury_id`) VALUES
(4, 5),
(22, 2);

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

DROP TABLE IF EXISTS `titre`;
CREATE TABLE IF NOT EXISTS `titre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_court` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelle_long` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referentiel_libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referentiel_document` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referentiel_date_debut` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referentiel_date_fin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `titre`
--

INSERT INTO `titre` (`id`, `libelle_court`, `libelle_long`, `referentiel_libelle`, `referentiel_document`, `referentiel_date_debut`, `referentiel_date_fin`) VALUES
(1, 'electricien', 'electricien d\'equipement', NULL, '', NULL, NULL),
(2, 'dwwm', 'dwwm', NULL, 'dwwm-titre-ref-doc', NULL, NULL),
(3, 'cda', NULL, NULL, 'cda-ref-doc', NULL, NULL),
(4, 'architecte', NULL, 'architecte-ref-doc.pdf', 'architecte-ref-document', NULL, NULL),
(5, 'technicien-reseaux', NULL, NULL, 'technicien-reseaux-ref-doc.pdf', NULL, NULL),
(7, 'docteur', NULL, NULL, NULL, NULL, NULL),
(9, 'boulanger-titre-libelle', NULL, NULL, 'boulanger-titre-ref-doc.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `titre_ccp`
--

DROP TABLE IF EXISTS `titre_ccp`;
CREATE TABLE IF NOT EXISTS `titre_ccp` (
  `titre_id` int(11) NOT NULL,
  `ccp_id` int(11) NOT NULL,
  PRIMARY KEY (`titre_id`,`ccp_id`),
  KEY `IDX_4CD7BEFDD54FAE5E` (`titre_id`),
  KEY `IDX_4CD7BEFD130F6D74` (`ccp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `titre_ccp`
--

INSERT INTO `titre_ccp` (`titre_id`, `ccp_id`) VALUES
(1, 11),
(1, 12),
(2, 11),
(2, 12),
(2, 17),
(3, 11),
(3, 12);

-- --------------------------------------------------------

--
-- Structure de la table `titre_habilitation`
--

DROP TABLE IF EXISTS `titre_habilitation`;
CREATE TABLE IF NOT EXISTS `titre_habilitation` (
  `titre_id` int(11) NOT NULL,
  `habilitation_id` int(11) NOT NULL,
  PRIMARY KEY (`titre_id`,`habilitation_id`),
  KEY `IDX_E8E82974D54FAE5E` (`titre_id`),
  KEY `IDX_E8E82974389712CD` (`habilitation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `titre_habilitation`
--

INSERT INTO `titre_habilitation` (`titre_id`, `habilitation_id`) VALUES
(1, 21),
(2, 20),
(2, 21),
(2, 28),
(2, 29),
(3, 20),
(3, 21);

-- --------------------------------------------------------

--
-- Structure de la table `user_entity`
--

DROP TABLE IF EXISTS `user_entity`;
CREATE TABLE IF NOT EXISTS `user_entity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6B7A5F55E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user_entity`
--

INSERT INTO `user_entity` (`id`, `email`, `roles`, `password`) VALUES
(1, 'romain.cotoni@gmail.com', '[]', '$2y$13$VkRf0fknvxH2RE/S/8zBSuXkLZWOJNv/HzhgIDmCyeyWrhqKqYXbi'),
(2, 'pascal.carlier@gnosys.fr', '[]', '$2y$13$AtLrRga8zmq7UNSOfkqGuuUe80/Nyg/ShzdjzdyhwO7rZ0LBEp406'),
(3, 'pascal', '[]', '$2y$13$VkRf0fknvxH2RE/S/8zBSuXkLZWOJNv/HzhgIDmCyeyWrhqKqYXbi');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insee` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_utilisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_utilisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse_utilisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code_postal_utilisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville_utilisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_mob_utilisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jury_id_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1D1C63B34C40AA28` (`jury_id_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `insee`, `nom_utilisateur`, `prenom_utilisateur`, `adresse_utilisateur`, `code_postal_utilisateur`, `ville_utilisateur`, `tel_mob_utilisateur`, `jury_id_id`) VALUES
(8, 'billy-insee1', '', '', '', '', '', '', 5),
(9, 'billy-jury-2-insee', '', '', '', '', '', '', 5),
(10, 'billy-jury-3-insee', '', '', '', '', '', '', 5),
(15, 'martine-utilisateur-1', 'martine-utilisateur-11', 'martine-utilisateur-111', 'martine-utilisateur-1111', 'martine-utilisateur-11111', '', '', NULL),
(16, 'martine-utilisateur-2', 'martine-utilisateur-22', 'martine-utilisateur-222', 'martine-utilisateur-2222', '', '', '', NULL),
(17, 'martine-utilisateur-3', '', '', '', '', '', '', NULL),
(18, 'martine-utilisateur-1', 'martine-utilisateur-1', '', '', '', '', '', NULL),
(19, 'martine-utilisateur-3', 'martine-utilisateur-3', '', '', '', '', '', NULL),
(20, 'aaaaa', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_habilitation`
--

DROP TABLE IF EXISTS `utilisateur_habilitation`;
CREATE TABLE IF NOT EXISTS `utilisateur_habilitation` (
  `utilisateur_id` int(11) NOT NULL,
  `habilitation_id` int(11) NOT NULL,
  PRIMARY KEY (`utilisateur_id`,`habilitation_id`),
  KEY `IDX_CE4E039BFB88E14F` (`utilisateur_id`),
  KEY `IDX_CE4E039B389712CD` (`habilitation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidat_competence`
--
ALTER TABLE `candidat_competence`
  ADD CONSTRAINT `FK_CF607D615761DAB` FOREIGN KEY (`competence_id`) REFERENCES `competence` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CF607D68D0EB82` FOREIGN KEY (`candidat_id`) REFERENCES `candidat` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `candidat_session`
--
ALTER TABLE `candidat_session`
  ADD CONSTRAINT `FK_8949233E613FECDF` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8949233E8D0EB82` FOREIGN KEY (`candidat_id`) REFERENCES `candidat` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ccp`
--
ALTER TABLE `ccp`
  ADD CONSTRAINT `FK_AB05E533D54FAE5E` FOREIGN KEY (`titre_id`) REFERENCES `titre` (`id`);

--
-- Contraintes pour la table `habilitation`
--
ALTER TABLE `habilitation`
  ADD CONSTRAINT `FK_A7BC2768D6840B39` FOREIGN KEY (`titre_id_id`) REFERENCES `titre` (`id`);

--
-- Contraintes pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD CONSTRAINT `FK_4BDFF36BD54FAE5E` FOREIGN KEY (`titre_id`) REFERENCES `titre` (`id`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_50159CA9BFA9F225` FOREIGN KEY (`candidat_id_id`) REFERENCES `candidat` (`id`);

--
-- Contraintes pour la table `projet_produit`
--
ALTER TABLE `projet_produit`
  ADD CONSTRAINT `FK_AB8FB156C18272` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_AB8FB156F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `responsable_entreprise`
--
ALTER TABLE `responsable_entreprise`
  ADD CONSTRAINT `FK_F9300960DAC5BE2B` FOREIGN KEY (`entreprise_id_id`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `FK_D044D5D457C2ADE9` FOREIGN KEY (`titres_id_id`) REFERENCES `titre` (`id`),
  ADD CONSTRAINT `FK_D044D5D4D6840B39` FOREIGN KEY (`titre_id_id`) REFERENCES `titre` (`id`),
  ADD CONSTRAINT `FK_D044D5D4DAC5BE2B` FOREIGN KEY (`entreprise_id_id`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `session_jour`
--
ALTER TABLE `session_jour`
  ADD CONSTRAINT `FK_1C66D9EF220C6AD0` FOREIGN KEY (`jour_id`) REFERENCES `jour` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1C66D9EF613FECDF` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `session_jury`
--
ALTER TABLE `session_jury`
  ADD CONSTRAINT `FK_D544B006613FECDF` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D544B006E560103C` FOREIGN KEY (`jury_id`) REFERENCES `jury` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `titre_ccp`
--
ALTER TABLE `titre_ccp`
  ADD CONSTRAINT `FK_4CD7BEFD130F6D74` FOREIGN KEY (`ccp_id`) REFERENCES `ccp` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4CD7BEFDD54FAE5E` FOREIGN KEY (`titre_id`) REFERENCES `titre` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `titre_habilitation`
--
ALTER TABLE `titre_habilitation`
  ADD CONSTRAINT `FK_E8E82974389712CD` FOREIGN KEY (`habilitation_id`) REFERENCES `habilitation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E8E82974D54FAE5E` FOREIGN KEY (`titre_id`) REFERENCES `titre` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_1D1C63B34C40AA28` FOREIGN KEY (`jury_id_id`) REFERENCES `jury` (`id`);

--
-- Contraintes pour la table `utilisateur_habilitation`
--
ALTER TABLE `utilisateur_habilitation`
  ADD CONSTRAINT `FK_CE4E039B389712CD` FOREIGN KEY (`habilitation_id`) REFERENCES `habilitation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CE4E039BFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
