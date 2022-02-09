-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 01:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soril`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnements`
--

CREATE TABLE `abonnements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `abonne_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `abonnes`
--

CREATE TABLE `abonnes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `societe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abonnes`
--

INSERT INTO `abonnes` (`id`, `firstName`, `lastName`, `email`, `pays`, `etat`, `societe`, `fonction`, `departement`, `secteur`, `contact`, `password`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Youness', 'Dominique', 'domiyns@gmail.com', 'Afghanistan', 'Alabama (AL)', 'qqsdf', 'qsdf', 'qsdf', 'Administrations Publiques', 'qsdfqsdf', '12345678', 0, '2021-12-24 10:00:55', '2021-12-24 10:00:55'),
(7, 'Dominique', 'Youness', 'infos@domiyns.com', 'AF', 'Alabama (AL)', 'qqsdf', 'qsdf', 'qsdf', 'Communication', '(686) 852-3462', '12345678', 1, '2022-02-07 12:19:34', '2022-02-07 12:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `animateurs`
--

CREATE TABLE `animateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animateurs`
--

INSERT INTO `animateurs` (`id`, `image`, `prenom`, `nom`, `organisation`, `position`, `email`, `phone`, `pays`, `description`, `created_at`, `updated_at`) VALUES
(1, 'images/dashboard/animateurs/1639651795.png', 'Dominique', 'Younessqsd', 'DomiYns', 'CEO', 'membres@aarmco.org', '(686) 852-3462', 'AF', 'qsdf\r\n                                                                            qsdfq', '2021-12-16 08:49:55', '2022-01-21 07:49:58'),
(3, 'images/dashboard/animateurs/1642758626.jpg', 'Dominique', 'Belhanda', 'DomiYns', 'CEO', 'test4@gmail.com', '(686) 852-3462', 'CD', 'qsdf', '2022-01-21 07:50:26', '2022-01-23 15:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manuscrit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `author_id`, `type`, `title`, `status`, `note`, `manuscrit`, `created_at`, `updated_at`) VALUES
(6, '1', 'La Paille', 'Belhanda', 0, 'L\'homme le plus dangereux du monde', 'docs/articles1644177702.pdf', '2022-02-06 18:01:42', '2022-02-06 18:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '12345678',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `firstName`, `lastName`, `middleName`, `email`, `country`, `city`, `date`, `state`, `companyName`, `department`, `position`, `image`, `status`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Younes', 'Belhanda', 'L\'Enfant', 'infos@domiyns.com', 'AO', 'Lubumbashi', '2022-02-28', 'Haut-Katanga', 'Wajenzi Digital', 'Lubumbashi', 'CEO', 'images/author/1644171347.png', 0, '12345678', '2022-02-05 06:55:06', '2022-02-06 16:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bo_id` int(11) NOT NULL,
  `bo_cat_id` int(11) DEFAULT NULL,
  `bo_title` varchar(100) DEFAULT NULL,
  `bo_description` text DEFAULT NULL,
  `bo_author` varchar(255) DEFAULT NULL,
  `bo_pub_house` varchar(255) DEFAULT NULL,
  `bo_pub_date` date DEFAULT NULL,
  `bo_picture` varchar(50) DEFAULT NULL,
  `bo_price` decimal(12,2) DEFAULT NULL,
  `bo_status` int(11) DEFAULT 1,
  `bo_created_at` date NOT NULL,
  `bo_file` varchar(200) NOT NULL,
  `bo_access` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bo_id`, `bo_cat_id`, `bo_title`, `bo_description`, `bo_author`, `bo_pub_house`, `bo_pub_date`, `bo_picture`, `bo_price`, `bo_status`, `bo_created_at`, `bo_file`, `bo_access`) VALUES
(1, 2, 'Reading Life', ' Ceici est un test pur et simple', 'Philippe Le Noir', 'SAFINA (SALAMA)', '2021-08-16', 'nopicture.png', '3.00', 1, '2021-08-16', '', ''),
(2, 2, 'Why risk So Much for So Little', 'An exceptional read, from the author Mimile Mukuna Maisha, released March 2012. A very informative, and very useful approach for business owners to prevent business failure by managing risk.', 'Mimile MUKUNA', 'SAFINA', '2021-08-10', 'assets/img/book/risk.png', '4.70', 1, '2021-08-16', '300921013010.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidats`
--

CREATE TABLE `candidats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MiddleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidats`
--

INSERT INTO `candidats` (`id`, `FirstName`, `MiddleName`, `LastName`, `email`, `state`, `city`, `date`, `phone`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Dominique', 'qsdf', 'Youness', 'test4@gmail.com', 'Alabama (AL)', 'Milan', '2022-01-05', '(686) 852-3462', 'documents/cv/1642671535.docx', '2022-01-20 07:38:55', '2022-01-20 07:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `bo_cat_id` int(11) NOT NULL,
  `bo_cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`bo_cat_id`, `bo_cat_name`) VALUES
(1, 'Risk Management'),
(2, 'Insurance'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `collectives`
--

CREATE TABLE `collectives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg-no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job-title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representatives` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fFirstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fLastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fPhone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fJob-title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `positions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collectives`
--

INSERT INTO `collectives` (`id`, `name`, `reg-no`, `industry`, `country`, `position`, `city`, `province`, `website`, `firstName`, `lastName`, `email`, `phone`, `job-title`, `representatives`, `logo`, `fFirstName`, `fLastName`, `fEmail`, `fPhone`, `fJob-title`, `fullname`, `positions`, `statut`, `created_at`, `updated_at`) VALUES
(1, 'Dominique Youness', 'qsdf', 'Artisanat', 'KH', 'CEO', 'qsdf', 'qsdf', 'qsdf', 'qsdf', 'qsdf', 'anicet@travels.phoebescongo.com', 'qsdf', 'qsdf', '15', 'images/membres/logo/1642755071.jpg', 'Dominique', 'Youness', 'qsdf@qsdf.com', '(686) 852-3462', 'qsdf', 'Dominique Youness', 'qsdf', 1, '2022-01-21 06:51:11', '2022-01-23 16:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conseil_admins`
--

CREATE TABLE `conseil_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conseil_admins`
--

INSERT INTO `conseil_admins` (`id`, `prenom`, `nom`, `about`, `organisation`, `position`, `email`, `phone`, `image`, `type`, `pays`, `created_at`, `updated_at`) VALUES
(1, 'Hk', 'Youness', 'hlkjh', 'DomiYns', 'CEO', 'infos@domiyns.com', '(686) 852-3462', 'images/dashboard/membres/1637107180.png', 'President', 'CD', '2021-11-16 21:59:40', '2022-01-10 07:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `consultatifs`
--

CREATE TABLE `consultatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultatifs`
--

INSERT INTO `consultatifs` (`id`, `prenom`, `nom`, `organisation`, `position`, `email`, `phone`, `type`, `about`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Dominique', 'Youness', 'Belhanda', 'CEO', 'infos@domiyns.com', '(686) 852-3462', 'President', 'pas de bio mes amis.', 'images/dashboard/membres/1637182791.jpg', '2021-11-17 18:59:51', '2021-11-17 18:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` char(2) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'L\'Afghanistan'),
(2, 'AX', 'Iles Aland'),
(3, 'AL', 'Albanie'),
(4, 'DZ', 'Algérie'),
(5, 'AS', 'Samoa américaines'),
(6, 'AD', 'Andorre'),
(7, 'AO', 'L\'Angola'),
(8, 'AI', 'Anguilla'),
(9, 'AQ', 'Antarctique'),
(10, 'AG', 'Antigua-et-Barbuda'),
(11, 'AR', 'Argentine'),
(12, 'AM', 'Arménie'),
(13, 'AW', 'Aruba'),
(14, 'AU', 'Australie'),
(15, 'AT', 'L\'Autriche'),
(16, 'AZ', 'Azerbaïdjan'),
(17, 'BS', 'Bahamas'),
(18, 'BH', 'Bahreïn'),
(19, 'BD', 'Bangladesh'),
(20, 'BB', 'Barbade'),
(21, 'BY', 'Biélorussie'),
(22, 'BE', 'Belgique'),
(23, 'BZ', 'Belize'),
(24, 'BJ', 'Bénin'),
(25, 'BM', 'Bermudes'),
(26, 'BT', 'Bhoutan'),
(27, 'BO', 'Bolivie'),
(28, 'BQ', 'Bonaire, Saint-Eustache et Saba'),
(29, 'BA', 'Bosnie Herzégovine'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Île Bouvet'),
(32, 'BR', 'Brésil'),
(33, 'IO', 'Territoire britannique de l\'océan Indien'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgarie'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodge'),
(39, 'CM', 'Cameroun'),
(40, 'CA', 'Canada'),
(41, 'CV', 'Cap-Vert'),
(42, 'KY', 'Îles Caïmans'),
(43, 'CF', 'République centrafricaine'),
(44, 'TD', 'Tchad'),
(45, 'CL', 'Chili'),
(46, 'CN', 'Chine'),
(47, 'CX', 'L\'île de noël'),
(48, 'CC', 'Îles Cocos (Keeling)'),
(49, 'CO', 'Colombie'),
(50, 'KM', 'Comores'),
(51, 'CG', 'Congo'),
(52, 'CD', 'Congo, République démocratique du Congo'),
(53, 'CK', 'les Îles Cook'),
(54, 'CR', 'Costa Rica'),
(55, 'CI', 'Côte d\'Ivoire'),
(56, 'HR', 'Croatie'),
(57, 'CU', 'Cuba'),
(58, 'CW', 'Curacao'),
(59, 'CY', 'Chypre'),
(60, 'CZ', 'République Tchèque'),
(61, 'DK', 'Danemark'),
(62, 'DJ', 'Djibouti'),
(63, 'DM', 'Dominique'),
(64, 'DO', 'République dominicaine'),
(65, 'EC', 'Equateur'),
(66, 'EG', 'Egypte'),
(67, 'SV', 'Le Salvador'),
(68, 'GQ', 'Guinée Équatoriale'),
(69, 'ER', 'Érythrée'),
(70, 'EE', 'Estonie'),
(71, 'ET', 'Ethiopie'),
(72, 'FK', 'Îles Falkland (Malvinas)'),
(73, 'FO', 'Îles Féroé'),
(74, 'FJ', 'Fidji'),
(75, 'FI', 'Finlande'),
(76, 'FR', 'France'),
(77, 'GF', 'Guyane Française'),
(78, 'PF', 'Polynésie française'),
(79, 'TF', 'Terres australes françaises'),
(80, 'GA', 'Gabon'),
(81, 'GM', 'Gambie'),
(82, 'GE', 'Géorgie'),
(83, 'DE', 'Allemagne'),
(84, 'GH', 'Ghana'),
(85, 'GI', 'Gibraltar'),
(86, 'GR', 'Grèce'),
(87, 'GL', 'Groenland'),
(88, 'GD', 'Grenade'),
(89, 'GP', 'Guadeloupe'),
(90, 'GU', 'Guam'),
(91, 'GT', 'Guatemala'),
(92, 'GG', 'Guernesey'),
(93, 'GN', 'Guinée'),
(94, 'GW', 'Guinée-Bissau'),
(95, 'GY', 'Guyane'),
(96, 'HT', 'Haïti'),
(97, 'HM', 'Îles Heard et McDonald'),
(98, 'VA', 'Saint-Siège (État de la Cité du Vatican)'),
(99, 'HN', 'Honduras'),
(100, 'HK', 'Hong Kong'),
(101, 'HU', 'Hongrie'),
(102, 'IS', 'Islande'),
(103, 'IN', 'Inde'),
(104, 'ID', 'Indonésie'),
(105, 'IR', 'Iran (République islamique d'),
(106, 'IQ', 'Irak'),
(107, 'IE', 'Irlande'),
(108, 'IM', 'île de Man'),
(109, 'IL', 'Israël'),
(110, 'IT', 'Italie'),
(111, 'JM', 'Jamaïque'),
(112, 'JP', 'Japon'),
(113, 'JE', 'Jersey'),
(114, 'JO', 'Jordan'),
(115, 'KZ', 'Kazakhstan'),
(116, 'KE', 'Kenya'),
(117, 'KI', 'Kiribati'),
(118, 'KP', 'République populaire démocratique de Corée'),
(119, 'KR', 'Corée, République de'),
(120, 'XK', 'Kosovo'),
(121, 'KW', 'Koweit'),
(122, 'KG', 'Kirghizistan'),
(123, 'LA', 'République démocratique populaire lao'),
(124, 'LV', 'Lettonie'),
(125, 'LB', 'Liban'),
(126, 'LS', 'Lesotho'),
(127, 'LR', 'Libéria'),
(128, 'LY', 'Jamahiriya arabe libyenne'),
(129, 'LI', 'Liechtenstein'),
(130, 'LT', 'Lituanie'),
(131, 'LU', 'Luxembourg'),
(132, 'MO', 'Macao'),
(133, 'MK', 'Macédoine, ancienne République yougoslave de'),
(134, 'MG', 'Madagascar'),
(135, 'MW', 'Malawi'),
(136, 'MY', 'Malaisie'),
(137, 'MV', 'Maldives'),
(138, 'ML', 'Mali'),
(139, 'MT', 'Malte'),
(140, 'MH', 'Iles Marshall'),
(141, 'MQ', 'Martinique'),
(142, 'MR', 'Mauritanie'),
(143, 'MU', 'Ile Maurice'),
(144, 'YT', 'Mayotte'),
(145, 'MX', 'Mexique'),
(146, 'FM', 'Micronésie, États fédérés de'),
(147, 'MD', 'Moldova, République de'),
(148, 'MC', 'Monaco'),
(149, 'MN', 'Mongolie'),
(150, 'ME', 'Monténégro'),
(151, 'MS', 'Montserrat'),
(152, 'MA', 'Maroc'),
(153, 'MZ', 'Mozambique'),
(154, 'MM', 'Myanmar'),
(155, 'NA', 'Namibie'),
(156, 'NR', 'Nauru'),
(157, 'NP', 'Népal'),
(158, 'NL', 'Pays-Bas'),
(159, 'AN', 'Antilles néerlandaises'),
(160, 'NC', 'Nouvelle Calédonie'),
(161, 'NZ', 'Nouvelle-Zélande'),
(162, 'NI', 'Nicaragua'),
(163, 'NE', 'Niger'),
(164, 'NG', 'Nigeria'),
(165, 'NU', 'Niue'),
(166, 'NF', 'l\'ile de Norfolk'),
(167, 'MP', 'Îles Mariannes du Nord'),
(168, 'NO', 'Norvège'),
(169, 'OM', 'Oman'),
(170, 'PK', 'Pakistan'),
(171, 'PW', 'Palau'),
(172, 'PS', 'Territoire palestinien, occupé'),
(173, 'PA', 'Panama'),
(174, 'PG', 'Papouasie Nouvelle Guinée'),
(175, 'PY', 'Paraguay'),
(176, 'PE', 'Pérou'),
(177, 'PH', 'Philippines'),
(178, 'PN', 'Pitcairn'),
(179, 'PL', 'Pologne'),
(180, 'PT', 'Le Portugal'),
(181, 'PR', 'Porto Rico'),
(182, 'QA', 'Qatar'),
(183, 'RE', 'Réunion'),
(184, 'RO', 'Roumanie'),
(185, 'RU', 'Fédération Russe'),
(186, 'RW', 'Rwanda'),
(187, 'BL', 'Saint Barthélemy'),
(188, 'SH', 'Sainte-Hélène'),
(189, 'KN', 'Saint-Christophe-et-Niévès'),
(190, 'LC', 'Sainte-Lucie'),
(191, 'MF', 'Saint Martin'),
(192, 'PM', 'Saint-Pierre-et-Miquelon'),
(193, 'VC', 'Saint-Vincent-et-les-Grenadines'),
(194, 'WS', 'Samoa'),
(195, 'SM', 'Saint Marin'),
(196, 'ST', 'Sao Tomé et Principe'),
(197, 'SA', 'Arabie Saoudite'),
(198, 'SN', 'Sénégal'),
(199, 'RS', 'Serbie'),
(200, 'CS', 'Serbie et Monténégro'),
(201, 'SC', 'les Seychelles'),
(202, 'SL', 'Sierra Leone'),
(203, 'SG', 'Singapour'),
(204, 'SX', 'St Martin'),
(205, 'SK', 'Slovaquie'),
(206, 'SI', 'Slovénie'),
(207, 'SB', 'Les îles Salomon'),
(208, 'SO', 'Somalie'),
(209, 'ZA', 'Afrique du Sud'),
(210, 'GS', 'Géorgie du Sud et îles Sandwich du Sud'),
(211, 'SS', 'Soudan du sud'),
(212, 'ES', 'Espagne'),
(213, 'LK', 'Sri Lanka'),
(214, 'SD', 'Soudan'),
(215, 'SR', 'Suriname'),
(216, 'SJ', 'Svalbard et Jan Mayen'),
(217, 'SZ', 'Swaziland'),
(218, 'SE', 'Suède'),
(219, 'CH', 'la Suisse'),
(220, 'SY', 'République arabe syrienne'),
(221, 'TW', 'Taiwan, Province de Chine'),
(222, 'TJ', 'Tadjikistan'),
(223, 'TZ', 'Tanzanie, République-Unie de'),
(224, 'TH', 'Thaïlande'),
(225, 'TL', 'Timor-Leste'),
(226, 'TG', 'Aller'),
(227, 'TK', 'Tokelau'),
(228, 'TO', 'Tonga'),
(229, 'TT', 'Trinité-et-Tobago'),
(230, 'TN', 'Tunisie'),
(231, 'TR', 'dinde'),
(232, 'TM', 'Turkménistan'),
(233, 'TC', 'îles Turques-et-Caïques'),
(234, 'TV', 'Tuvalu'),
(235, 'UG', 'Ouganda'),
(236, 'UA', 'Ukraine'),
(237, 'AE', 'Emirats Arabes Unis'),
(238, 'GB', 'Royaume-Uni'),
(239, 'US', 'États-Unis'),
(240, 'UM', 'Îles mineures éloignées des États-Unis'),
(241, 'UY', 'Uruguay'),
(242, 'UZ', 'Ouzbékistan'),
(243, 'VU', 'Vanuatu'),
(244, 'VE', 'Venezuela'),
(245, 'VN', 'Viet Nam'),
(246, 'VG', 'Îles Vierges britanniques'),
(247, 'VI', 'Îles Vierges américaines, États-Unis'),
(248, 'WF', 'Wallis et Futuna'),
(249, 'EH', 'Sahara occidental'),
(250, 'YE', 'Yémen'),
(251, 'ZM', 'Zambie'),
(252, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `emplois`
--

CREATE TABLE `emplois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salaire` double NOT NULL,
  `expiration` date NOT NULL,
  `secteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prerequis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apercu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emplois`
--

INSERT INTO `emplois` (`id`, `titre`, `salaire`, `expiration`, `secteur`, `pays`, `ville`, `contrat`, `competence`, `qualite`, `prerequis`, `apercu`, `created_at`, `updated_at`) VALUES
(2, 'belhanda', 444, '2021-11-20', 'Transport et Logistique', 'CD', 'Lubumbashi', 'Projet', 'QSDF', 'QDF', 'QDSF', 'QSDF', '2021-11-17 19:46:58', '2022-01-10 10:47:54'),
(4, 'Dominique', 444, '2021-11-20', 'Transport et Logistique', 'CD', 'Lubumbashi', 'Projet', 'QSDF', 'QDF', 'QDSF', 'QSDF', '2021-11-17 19:46:58', '2022-01-10 10:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `evenements`
--

CREATE TABLE `evenements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `typeEvent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sousTitre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `date` date NOT NULL,
  `animateur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaker` tinyint(1) NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apercu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `participer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prerequis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evenements`
--

INSERT INTO `evenements` (`id`, `typeEvent`, `titre`, `sousTitre`, `lieu`, `duree`, `date`, `animateur`, `speaker`, `ville`, `apercu`, `participer`, `prerequis`, `certification`, `type`, `prix`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'annual', 'Renforcement des capacités', 'Formation sur le Risk Management', 'Lubumbashi', 9, '2021-11-18', '1', 0, 'Bunia', 'L\'évenement est destiné à la formation sur le Risk Management et Assurance.', 'Toute personne interessé par les assurances.', 'Pas de prerequis', 'Licence', 'Séminaire public', '500', 'Information et prise de connaissance sur des formations intégrantes.', 'images/dashboard/membres/1637313197.jpg', '2021-11-19 07:13:17', '2022-01-12 09:54:49'),
(3, 'seminar', 'qsdf', 'qsdf', 'qsdf', 1, '2021-11-24', '3', 0, 'Kamina', 'Q', 'Q', 'QSDF', 'QSDF', '1', '1223', 'Q', 'images/dashboard/membres/1637315490.jpg', '2021-11-19 07:51:30', '2022-01-21 07:56:07'),
(6, 'conference', 'sdfg', 'Formation sur le Risk Management', 'qqsdf', 11, '2022-01-12', '1', 0, 'Bukavu', 'qsdf', 'qsdf', 'Pas de prerequis', 'Pas de certif', 'Responsabilité Sociale des Entreprises (RSE)', '1223', 'qsdf', 'images/dashboard/membres/1641987942.PNG', '2022-01-12 09:45:42', '2022-01-12 09:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `event_programmes`
--

CREATE TABLE `event_programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `facilitator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `evenement_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_programmes`
--

INSERT INTO `event_programmes` (`id`, `date`, `time`, `facilitator`, `header`, `title`, `created_at`, `updated_at`, `evenement_id`) VALUES
(2, '2021-11-19', '11:23:06', '1', 'Program Header', 'QSDF', NULL, NULL, 2),
(3, '2021-11-20', '13:50:00', '1', 'qsdf', 'qsdf', '2021-11-19 07:50:39', '2022-01-12 10:15:48', 2),
(5, '2021-11-19', '12:04:49', '1', 'QSDF', 'QSDF', NULL, NULL, 3),
(6, '5444-12-05', '10:15:00', '1', 'Titre de l\'evenement', 'Deuxieme title de l\'evenement', '2021-12-16 06:12:39', '2021-12-16 06:12:39', 2),
(8, '2022-01-13', '14:19:00', '1', 'Titre de l\'evenement', 'qsdf', '2022-01-12 10:16:09', '2022-01-12 10:16:09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `event_registers`
--

CREATE TABLE `event_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evenement_id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industrie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneBureau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_registers`
--

INSERT INTO `event_registers` (`id`, `evenement_id`, `title`, `name`, `email`, `pays`, `phone`, `province`, `company`, `departement`, `position`, `industrie`, `phoneBureau`, `status`, `ref`, `created_at`, `updated_at`) VALUES
(4, 3, 'mr', 'Dominique Youness Belhanda', 'youness.dominique@gmail.com', 'Azerbaïdjan', '(686) 852-3462', 'Alabama (AL)', 'Belhanda', 'qsdf', 'qsdf', 'Civil Engineering', '(686) 852-3462', 0, '', '2021-12-21 09:32:28', '2021-12-21 09:32:28'),
(5, 3, 'mr', 'Dominique Youness Belhanda', 'youness.dominique@gmail.com', 'Azerbaïdjan', '(686) 852-3462', 'Alabama (AL)', 'Belhanda', 'qsdf', 'qsdf', 'Civil Engineering', '(686) 852-3462', 0, '', '2021-12-21 09:33:07', '2021-12-21 09:33:07'),
(7, 2, 'mrs', 'Dominique Youness Belhanda', 'test4@gmail.com', 'Afghanistan', '(686) 852-3462', 'Alabama (AL)', 'Belhanda', 'qsdf', 'CEO', 'Civic/Social Organization', '(686) 852-3462', 0, '', '2022-01-17 08:53:26', '2022-01-17 08:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registrantType` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT 0,
  `com1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `com1statut` tinyint(1) NOT NULL DEFAULT 0,
  `com2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `com2statut` tinyint(1) NOT NULL DEFAULT 0,
  `com3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `com3statut` tinyint(1) NOT NULL DEFAULT 0,
  `period` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpcpoint` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`id`, `firstName`, `lastName`, `email`, `date`, `country`, `city`, `state`, `companyName`, `position`, `industry`, `phone`, `amount`, `registrantType`, `file`, `statut`, `com1`, `com1statut`, `com2`, `com2statut`, `com3`, `com3statut`, `period`, `dpcpoint`, `created_at`, `updated_at`) VALUES
(1, 'Dominique', 'Youness', 'youness.dominique@gmail.com', '2021-12-29', 'CF', 'Milan', 'Alabama (AL)', 'qsdf', 'BElhanda', 'Défense, Sécurité, Armée', '(686) 852-3462', '100', 'Ordinaire', '1642752386.jpg', 0, 'Test Com', 1, 'Réseaux', 0, NULL, 0, '2020', NULL, '2022-01-21 06:06:28', '2022-01-23 16:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `management_secretariates`
--

CREATE TABLE `management_secretariates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management_secretariates`
--

INSERT INTO `management_secretariates` (`id`, `prenom`, `nom`, `type`, `email`, `phone`, `image`, `pays`, `about`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Belhanda', 'LaPaille', 'Chargé des Evénements', 'info@ngomadigi.tech', '+243818045132', 'images/dashboard/membres/1641568007.png', 'CD', 'azer', '12345678', '2022-01-07 13:06:48', '2022-01-07 13:06:48'),
(5, 'Dominique', 'Youness', 'Chargé des Finances', 'domiyns@gmail.com', '(686) 852-3462', 'images/dashboard/membres/1643639739.png', 'AT', 'Pas de description', '12345678', '2022-01-31 12:35:39', '2022-01-31 12:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `message_presidents`
--

CREATE TABLE `message_presidents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `introduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titreAuteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titreMessage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_presidents`
--

INSERT INTO `message_presidents` (`id`, `prenom`, `nom`, `date`, `introduction`, `about`, `message`, `titreAuteur`, `titreMessage`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Dominique', 'Youness', '2021-11-17 12:17:00', 'Pas d\'intro', 'Youness', 'Belhanda', 'Président', 'Bienvenue', 'assets/images/mimile.png', '2021-11-17 08:17:17', '2021-11-17 08:17:17'),
(3, 'John', 'Belhanda', '2021-11-20 13:43:00', 'Pas d\'intro', 'Pas de bio', 'Pas de corps', 'Pas de titre', 'Pas de message', 'images/dashboard/membres/1637322220.jpg', '2021-11-19 09:43:40', '2021-11-19 09:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_14_153436_create_types_table', 1),
(6, '2021_11_14_153912_add_type_to_user', 2),
(7, '2021_11_14_213847_update_migration_to_default_value', 3),
(8, '2021_11_14_214853_create_table_user', 4),
(9, '2021_11_14_223758_create_user_data_table', 5),
(10, '2021_11_15_145619_create_management_secretariates_table', 6),
(11, '2021_11_16_233247_create_conseil_admins_table', 7),
(12, '2021_11_17_074412_create_message_presidents_table', 8),
(13, '2021_11_17_104250_create_consultatifs_table', 9),
(14, '2021_11_17_112656_create_partenaires_table', 10),
(15, '2021_11_17_211438_create_emplois_table', 11),
(16, '2021_11_19_070252_create_evenements_table', 12),
(17, '2021_11_19_090225_create_event_programmes_table', 13),
(18, '2021_11_19_091618_connect_table_pg_to_event', 14),
(19, '2021_11_19_091841_connect_table_pg_to_event_check', 15),
(20, '2021_12_16_100940_create_animateurs_table', 16),
(21, '2021_12_21_103416_create_event_registers_table', 17),
(22, '2021_12_23_082750_create_articles_table', 18),
(23, '2021_12_24_112355_create_abonnes_table', 19),
(24, '2021_12_24_113357_create_abonnements_table', 20),
(25, '2014_10_12_000000_create_users_table', 21),
(26, '2022_01_07_142740_create_countries_table', 22),
(27, '2022_01_20_092034_create_candidats_table', 23),
(28, '2022_01_21_073759_create_individuals_table', 24),
(29, '2022_01_21_082149_create_collectives_table', 25),
(30, '2022_01_22_234839_create_sponsors_table', 26),
(31, '2022_01_23_002323_create_sponsor_events_table', 27),
(32, '2022_01_24_071341_create_commissions_table', 28),
(33, '2022_02_03_031717_create_books_table', 28),
(34, '2022_02_05_075419_create_authors_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`id`, `organisation`, `pays`, `image`, `nom`, `position`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'DomiYns', 'DZ', 'images/dashboard/membres/1637183425.jpg', 'Dominique Youness', 'CEO', '18mt316@esisalama.org', '(686) 852-3462', '2021-11-17 19:10:25', '2022-01-10 10:15:46'),
(3, 'LaSouveraine', 'China', 'images/dashboard/membres/1637523314.png', 'Mimile Mukuna', 'CEO', 'mm@gmail.com', '+243996852377', '2021-11-21 17:35:14', '2021-11-21 17:35:14'),
(5, 'NgomaDigiTech', 'ZA', 'images/dashboard/membres/1641817360.png', 'Dominique Youness', 'CEO', 'info@ngomadigi.tech', '+243996852377', '2022-01-10 10:22:40', '2022-01-10 10:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test3@gmail.com', '$2y$10$NNXHsz1S3QCu29FwZtOZc.3Bu2S2teh7a3qtTxk.LbONUyj6w4SMC', '2021-11-15 12:13:05'),
('test3@gmail.com', '$2y$10$NNXHsz1S3QCu29FwZtOZc.3Bu2S2teh7a3qtTxk.LbONUyj6w4SMC', '2021-11-15 12:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `organisation`, `pays`, `nom`, `position`, `email`, `phone`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Belhanda', 'AF', 'Dominique Youness', 'ssssssssssssss', 'test2@gmail.com', '(686) 852-3462', 'qsdff', 'images/dashboard/sponsors/1642897028.jpg', '2022-01-22 22:17:08', '2022-01-22 22:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_events`
--

CREATE TABLE `sponsor_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evenement_id` bigint(20) UNSIGNED NOT NULL,
  `sponsor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsor_events`
--

INSERT INTO `sponsor_events` (`id`, `evenement_id`, `sponsor_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-01-22 22:31:49', '2022-01-22 22:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Deuxieme', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Youness Dominique', 'domiyns@gmail.com', NULL, '$2y$10$iXi9QsC0adXHXaq5zm6Oi.sifJitMjvCFlrBzp1kX6n2lC1JJ7E2K', 1, 'UQtKuJ7FCul7plsejlCCnl7OFXuP8OLJS29rCOGkEPYpcF4kjThYGtrEf7GS', '2021-12-27 11:43:57', '2022-01-07 12:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `image`, `about`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png', 'Developer and Graphic Designer', '+243996852377', NULL, '2022-01-07 12:44:20'),
(2, 5, 'images/dashboard/users/1636978729.png', 'Voici ma description', '+243996852377', '2021-11-14 21:15:00', '2021-11-15 12:11:07'),
(3, 6, 'images/dashboard/users/1639641376.PNG', 'No Description', 'infos@domiyns.com', '2021-11-15 12:17:04', '2021-12-16 05:56:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnements`
--
ALTER TABLE `abonnements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abonnements_article_id_foreign` (`article_id`),
  ADD KEY `abonnements_abonne_id_foreign` (`abonne_id`);

--
-- Indexes for table `abonnes`
--
ALTER TABLE `abonnes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animateurs`
--
ALTER TABLE `animateurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bo_id`);

--
-- Indexes for table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`bo_cat_id`);

--
-- Indexes for table `collectives`
--
ALTER TABLE `collectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conseil_admins`
--
ALTER TABLE `conseil_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultatifs`
--
ALTER TABLE `consultatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emplois`
--
ALTER TABLE `emplois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_programmes`
--
ALTER TABLE `event_programmes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_programmes_evenement_id_foreign` (`evenement_id`);

--
-- Indexes for table `event_registers`
--
ALTER TABLE `event_registers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_registers_evenement_id_foreign` (`evenement_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_secretariates`
--
ALTER TABLE `management_secretariates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_presidents`
--
ALTER TABLE `message_presidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_events`
--
ALTER TABLE `sponsor_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sponsor_events_evenement_id_foreign` (`evenement_id`),
  ADD KEY `sponsor_events_sponsor_id_foreign` (`sponsor_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_type_id_foreign` (`type_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_data_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonnements`
--
ALTER TABLE `abonnements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `abonnes`
--
ALTER TABLE `abonnes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `animateurs`
--
ALTER TABLE `animateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `bo_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `collectives`
--
ALTER TABLE `collectives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conseil_admins`
--
ALTER TABLE `conseil_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consultatifs`
--
ALTER TABLE `consultatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `emplois`
--
ALTER TABLE `emplois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_programmes`
--
ALTER TABLE `event_programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_registers`
--
ALTER TABLE `event_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `management_secretariates`
--
ALTER TABLE `management_secretariates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message_presidents`
--
ALTER TABLE `message_presidents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sponsor_events`
--
ALTER TABLE `sponsor_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abonnements`
--
ALTER TABLE `abonnements`
  ADD CONSTRAINT `abonnements_abonne_id_foreign` FOREIGN KEY (`abonne_id`) REFERENCES `abonnes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `abonnements_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `event_programmes`
--
ALTER TABLE `event_programmes`
  ADD CONSTRAINT `event_programmes_evenement_id_foreign` FOREIGN KEY (`evenement_id`) REFERENCES `evenements` (`id`);

--
-- Constraints for table `event_registers`
--
ALTER TABLE `event_registers`
  ADD CONSTRAINT `event_registers_evenement_id_foreign` FOREIGN KEY (`evenement_id`) REFERENCES `evenements` (`id`);

--
-- Constraints for table `sponsor_events`
--
ALTER TABLE `sponsor_events`
  ADD CONSTRAINT `sponsor_events_evenement_id_foreign` FOREIGN KEY (`evenement_id`) REFERENCES `evenements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sponsor_events_sponsor_id_foreign` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
