-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Apr 27, 2023 at 10:33 PM
-- Server version: 10.5.18-MariaDB-1:10.5.18+maria~ubu2004
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auguste-viager`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `h4_title_cards` varchar(500) DEFAULT NULL,
  `en_savoir_cards` varchar(255) NOT NULL,
  `description_cards` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_description` varchar(1000) DEFAULT NULL,
  `meta_keywords` varchar(1000) NOT NULL,
  `meta_title` varchar(500) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `h1_title` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `categorie` varchar(1000) NOT NULL,
  `h2_title` text DEFAULT NULL,
  `h3_title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `img_content` varchar(255) DEFAULT NULL,
  `alt_content` varchar(255) DEFAULT NULL,
  `h3_title_2` varchar(500) DEFAULT NULL,
  `content_2` text DEFAULT NULL,
  `h3_title_15` varchar(500) DEFAULT NULL,
  `content_15` text DEFAULT NULL,
  `h3_title_14` varchar(500) DEFAULT NULL,
  `content_14` text DEFAULT NULL,
  `h3_title_13` varchar(500) DEFAULT NULL,
  `content_13` text DEFAULT NULL,
  `h3_title_12` varchar(500) DEFAULT NULL,
  `content_12` text DEFAULT NULL,
  `h3_title_11` varchar(500) DEFAULT NULL,
  `content_11` text DEFAULT NULL,
  `h3_title_10` varchar(500) DEFAULT NULL,
  `content_10` text DEFAULT NULL,
  `h3_title_9` varchar(500) DEFAULT NULL,
  `content_9` text DEFAULT NULL,
  `h3_title_8` varchar(500) DEFAULT NULL,
  `content_8` text DEFAULT NULL,
  `h3_title_7` varchar(500) DEFAULT NULL,
  `content_7` text DEFAULT NULL,
  `h3_title_6` varchar(500) DEFAULT NULL,
  `content_6` text DEFAULT NULL,
  `h3_title_5` varchar(500) DEFAULT NULL,
  `content_5` text DEFAULT NULL,
  `h3_title_4` varchar(500) DEFAULT NULL,
  `content_4` text DEFAULT NULL,
  `h3_title_3` varchar(500) DEFAULT NULL,
  `content_3` text DEFAULT NULL,
  `is_selected` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `h4_title_cards`, `en_savoir_cards`, `description_cards`, `slug`, `title`, `meta_description`, `meta_keywords`, `meta_title`, `canonical`, `image`, `alt`, `h1_title`, `date`, `author`, `categorie`, `h2_title`, `h3_title`, `content`, `img_content`, `alt_content`, `h3_title_2`, `content_2`, `h3_title_15`, `content_15`, `h3_title_14`, `content_14`, `h3_title_13`, `content_13`, `h3_title_12`, `content_12`, `h3_title_11`, `content_11`, `h3_title_10`, `content_10`, `h3_title_9`, `content_9`, `h3_title_8`, `content_8`, `h3_title_7`, `content_7`, `h3_title_6`, `content_6`, `h3_title_5`, `content_5`, `h3_title_4`, `content_4`, `h3_title_3`, `content_3`, `is_selected`) VALUES
(28, 'Peut-on vendre en viager à un membre de sa famille ?', 'Découvrir', 'Le viager en famille s’apparente être au premier abord très avantageux, cependant vendre en viager à sa famille peut vite devenir délicat et risqué. Nous avons réuni toutes les informations et les modalités légales à prendre en compte lorsque vous souhaitez vendre en viager en famille.', 'peut-on-vendre-en-viager-en-famille', 'Peut-on vendre en viager à un membre de sa famille ?', 'Le viager en famille s’apparente être au premier abord très avantageux, cependant vendre en viager à sa famille peut vite devenir délicat et risqué. Nous avons réuni toutes les informations et les modalités légales à prendre en compte lorsque vous souhaitez vendre en viager en famille.', 'Vendre en Viager', 'Peut-on vendre en viager à un membre de sa famille ? | Actualités Vente en Viager  | Auguste Viager', 'https://www.auguste-viager.com/viager-libre/article.php?blog=peut-on-vendre-en-viager-en-famille', '/images/vendre-en-viager-en-famille.jpg', 'Vendre en viager à un membre de sa famille', 'Peut-on vendre en viager à un membre de sa famille ?', '2023-02-23', 'Auguste Viager', 'viager-libre,viager-occupé', 'Risque, législation et relations familiales, Auguste Viager a regroupé tous les éléments concernant la vente en viager entre famille afin de vous offrir toutes les informations nécessaires pour que vous fassiez le bon choix le tout sans mauvaise surprise.', 'Vendre en viager à un membre de sa famille : est-ce légalement possible ?', 'Oui, il est tout à fait possible de vendre un bien immobilier en viager à un membre de sa famille. Aucune loi n’interdit la vente en viager de résidences principales ou secondaires en famille, cependant beaucoup l’encadre.<br>\r\n\r\n<strong>Quelles modalités législatives s’appliquent au viager en famille ? </strong><br>\r\n\r\nLa première chose à considérer lorsque vous vendez en viager à un membre de votre famille est l’accord écrit de tous les autres héritiers, y compris de votre conjoint. Si cette clause primordiale n’est pas exécutée, ces derniers peuvent faire annuler la vente ou demander un dédommagement financier au débirentier (acheteur).<br>\r\n\r\nDeuxièmement, il est nécessaire de réaliser le viager strictement dans les règles, d’autant plus lorsque celui-ci est au sein d’une même famille : <br>\r\n\r\nUn bien estimé à juste prix en harmonie avec la valeur du marché et une estimation absolument réalisée par un professionnel.\r\nUne rente versée à la fréquence et au montant exact précisé dans l’acte de vente.\r\nEt aucun traitement de faveur ni d’abus de faiblesse. <br>\r\nDans le cas contraire, le Fisc peut requalifier la vente en viager en donation déguisée, et de ce fait, des sanctions pour le débirentier s\'appliquent : des frais de succession seront demandés en plus d’une astreinte pour fraude. <br>\r\n\r\n<strong>Le piège du viager occupé en famille </strong><br>\r\n\r\nDans le cas d’une vente en viager occupé à l’un des membres de sa famille, c\'est-à-dire lorsque le crédirentier (vendeur) conserve son droit d’usufruit après la vente du bien, l’administration fiscale considèrera l’occupant ou bailleur du logement comme propriétaire. Autrement dit, même s’il ne dispose plus de la nue-propriété du bien, le crédirentier sera tout de même considéré propriétaire des lieux de par son droit d’usufruit. Si le débirentier est l’un des enfants du crédirentier, il sera alors redevable des droits de succession. <br>\r\nIl est alors conseillé aux crédirentiers de simplement se réserver un droit d’usage et d’habitation. Il ne pourra alors pas louer ou tirer des revenus locatifs du bien mais sera autorisé à l’habiter à vie et ainsi éviter les droits de succession. \r\nAfin d’assurer sa succession, il est aussi possible de transmettre en donation du vivant une partie voire l’entièreté du bouquet à ses héritiers. Cependant, cela ne dépend pas de l’acheteur mais seulement de la volonté du crédirentier. <br>\r\n\r\n<strong>Vendre en viager à sa famille : une vigilance sans faille</strong><br>\r\n\r\nBien que ce genre de transactions soient totalement légales, elles sont minutieusement contrôlées par le Fisc afin de condamner toute donation déguisée. Réaliser un viager en famille dans le but de contourner les taxes et frais de succession est peine perdue. \r\nDans la situation contraire, sachez que d\'effectuer la vente de votre bien en viager ne vous permettra pas de déshériter vos proches car sans accord écrit de vos héritiers, ces derniers peuvent à tout moment faire annuler la vente et sont aussi en droit de demander un dédommagement financier au débirentier.<br>\r\n\r\nLa vente en viager au sein de sa famille peut être intéressante pour des membres éloignés (cousins, neveux, oncles,…) ou autre situation bien spécifique qui justifierait solidement le but du viager, notamment auprès des contrôleurs du Fisc mais aussi auprès des autres héritiers. Bien que ce genre de transaction soit assez risqué, si elle est effectuée avec bonne foi, elle peut s\'avérer très profitable. ', '/images/comment-vendre-en-viager-en-famille.jpg', 'Comment vendre en viager à un membre de sa famille ?', 'Viager en famille : avantages et désavantages', 'La vente en viager à un proche n’est pas chose facile : elle paraît souvent comme un bon moyen de contourner les taxes, cependant, ce n’est qu’apparence. Tout comme elle ne permet en aucun cas de déshériter ses légataires sans leur accord. \r\nNéanmoins, lorsque le viager est concrétisé dans les règles, il peut offrir autant d’avantages que de désavantages. <br>\r\n\r\n<strong>Les avantages de vendre en viager à un proche<strong><br>\r\n\r\nVendre en viager à un membre de sa famille peut être avantageux lorsque vous souhaitez léguer un bien immobilier à une personne en particulier. Grâce à la vente en viager, la rente vous garantira un revenu à vie mais aussi l’assurance que le bien appartiendra bien à la personne de votre choix. De plus, dans le cas d’un viager occupé, vous pouvez continuer à résider dans le logement.<br>\r\nLorsque le proche en question n\'est pas un de vos héritiers légaux tel qu’un cousin ou autre membre de votre famille éloignée, cette personne n’aura aucun frais de succession à sa charge mais seulement les droits de mutation, qui n’excèdent rarement les 8%.<br>\r\nLe viager en famille permet de transmettre la propriété familiale de son vivant tout continuant de profiter des lieux et en étant soutenu par une rente mensuelle à vie. Autrement dit, il ne permet pas de bloquer votre succession mais de la diriger en direction d’une personne précise, prête à acheter le bien. De plus, elle permet à vos héritiers de vous soutenir de votre vivant financièrement afin que vous puissiez profiter pleinement de la vie. <br>\r\n\r\n<strong>Les désavantages du viager en famille </strong><br>\r\nRisqué, suspect et compliqué : vendre en viager à un proche n’est pas tâche aisée. D’une part, il faut savoir que le viager ne permet pas de céder un bien à prix cassé à ses légataires et d’éviter les frais de succession obligatoire. <br>\r\nDe plus, ces opérations étant très contrôlées, il n’est pas possible non plus pour le vendeur de reverser la somme, totale ou partielle, des rentes au débirentier, même discrètement. Le Fisc se montre particulièrement méfiant concernant les viager en famille et assumera systématiquement que votre transaction est une donation déguisée. <br>\r\nIl faut donc se montrer irréprochable et les marges de négociation sont beaucoup plus restreintes que lors d’une vente en viager à un acheteur inconnu.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pour conclure, vendre en viager à un membre de sa famille est périlleux et risqué. L’acquéreur s’expose à d’importantes sanctions financières si le Fisc débusque quelconque fraude. Il est donc plutôt recommandé d’effectuer une vente en viager classique. D’autant plus que ce système a pour but de faciliter ainsi que d’améliorer la vie du crédirentier et non l’inverse. Le viager regorge d’avantages aussi bien pour le débirentier que le crédirentier, il est donc inutile de compliquer ce système simple gagnant-gagnant pour tenter quelconque fraude fiscale ratée d’avance. Cependant, le viager en famille peut s’avérer avantageux pour des situations bien précises et aux intentions honnêtes. ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug_name`) VALUES
(1, 'Viager libre', 'viager-libre'),
(2, 'Viager occupé', 'viager-occupé'),
(3, 'Vente à terme', 'vente-à-terme'),
(4, 'Nue-propriété', 'nue-propriété');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dpt_slug` varchar(255) NOT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `predpt` varchar(255) NOT NULL,
  `title_link` varchar(255) DEFAULT NULL,
  `num` int(10) UNSIGNED DEFAULT NULL,
  `ordre` int(11) NOT NULL,
  `code_key` varchar(255) DEFAULT NULL,
  `type` enum('département','ville','région') NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `dpt_slug`, `folder`, `url`, `predpt`, `title_link`, `num`, `ordre`, `code_key`, `type`, `parent_id`) VALUES
(2, 'Paris', 'paris', '', 'paris', 'à', '', 75000, 2, NULL, 'ville', 20),
(16, 'Bordeaux', 'bordeaux', 'acheter-en-viager', 'bordeaux', 'à', '', 33000, 8, 'liste,mots ,clés', 'ville', 18),
(14, 'Nice', 'nice', '', 'nice', 'à', '', 6000, 6, NULL, 'ville', 21),
(20, 'Paris', 'paris', '', 'paris-75', 'à', '', 75000, 2, NULL, 'département', 10),
(10, 'Ile de France', 'region-ile-de-france', '', 'ile-de-france-75', 'en', '', NULL, 1, NULL, 'région', NULL),
(21, 'Alpes-Maritimes', 'alpes-maritimes', 'acheter-en-viager', 'Alpes-Maritimes', 'dans les', '', 6000, 12, '', 'département', 22),
(19, 'Nouvelle-Aquitaine', 'nouvelle-aquitaine', '', 'Nouvelle-Aquitaine', 'en', '', NULL, 3, NULL, 'région', NULL),
(18, 'Gironde', 'gironde', 'acheter-en-viager', 'gironde-33', 'en', '', 33, 10, 'liste,mots ,clés', 'département', 19),
(22, 'Provence-Alpes-Côte d\'Azur', 'provence-alpes-cote-d-azur', '', 'Provence-Alpes-Côte d\'Azur', 'en', '', NULL, 13, NULL, 'région', NULL),
(23, 'Versailles', 'versailles', NULL, 'versailles', 'à', NULL, 78000, 30, NULL, 'ville', 24),
(24, 'Versailles', 'yvelines', NULL, 'yvelines', 'à', NULL, 78000, 30, NULL, 'département', 10);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `habitations`
--

CREATE TABLE `habitations` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `h1_title` varchar(255) NOT NULL,
  `h4_title` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `rente` int(11) DEFAULT NULL,
  `property_value` int(11) DEFAULT NULL,
  `parts` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `mini_description` text DEFAULT NULL,
  `h4_title_cards` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(500) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `type` enum('Appartement','Maison') NOT NULL,
  `devices` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `lon` varchar(191) DEFAULT NULL,
  `lat` varchar(191) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `city_info_title_1` varchar(191) DEFAULT NULL,
  `city_info_title_2` varchar(191) DEFAULT NULL,
  `city_info_title_3` varchar(191) NOT NULL,
  `city_info_title_4` varchar(191) DEFAULT NULL,
  `city_info_1` varchar(255) DEFAULT NULL,
  `city_info_2` varchar(255) DEFAULT NULL,
  `city_info_3` varchar(255) DEFAULT NULL,
  `city_info_4` varchar(255) DEFAULT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT 0,
  `breadcrumb` varchar(255) DEFAULT NULL,
  `is_selected` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `habitations`
--

INSERT INTO `habitations` (`id`, `slug`, `title`, `meta_title`, `canonical`, `h1_title`, `h4_title`, `price`, `rente`, `property_value`, `parts`, `description`, `mini_description`, `h4_title_cards`, `meta_keywords`, `meta_description`, `type`, `devices`, `address`, `department_id`, `lon`, `lat`, `city`, `city_info_title_1`, `city_info_title_2`, `city_info_title_3`, `city_info_title_4`, `city_info_1`, `city_info_2`, `city_info_3`, `city_info_4`, `is_new`, `breadcrumb`, `is_selected`) VALUES
(37, 'viager-occupe-maison-chailly-en-brie-77', 'Maison 7 pièces - Viager occupé', 'Maison Viager Occupé à Chailly en Brie 77 | Annonce Viager en France | Auguste Viager', 'https://www.auguste-viager.com/annonce-viager.php?programme=viager-occupe-maison-chailly-en-brie-77', 'Vente Maison en Viager Occupé à Chailly en Brie', 'Situation exceptionnelle', 80000, 539, 370000, 7, '<p>VENTE EN VIAGER OCCUPE - CHAILLY EN BRIE<br>\r\nPARC NATUREL REGIONAL DE LA BRIE ET DES DEUX MORINS</p>\r\n\r\n<p>Dans un petit village situé entre Coulommiers et Marolles- en-Brie, à 30min d\'Eurodisney et de la gare TGV de Marne la Vallée, nous vous proposons cette maison récente de 2008 d\'une superficie de 228 m2.</p>\r\n\r\n<p>Située au calme dans une impasse, elle offre de beaux espaces de vie dont un séjour de plus de 40m2, ainsi que 6 chambres de belle taille dans un cadre bucolique.</p>\r\n\r\n<p>Jardin 600m2 sans vis à vis.<br>\r\nDouble garage<br>\r\nGrenier</p>\r\n\r\n', 'Dans un petit village situé entre Coulommiers et Marolles- en-Brie, à 30min d\'Eurodisney et de la gare TGV de Marne la Vallée, nous vous proposons cette maison récente de 2008 d\'une superficie de 228 m2.', 'Vente Maison en Viager Occupé à Chailly en Brie', 'Annonce viager', 'Dans un petit village situé entre Coulommiers et Marolles- en-Brie, à 30min d\'Eurodisney et de la gare TGV de Marne la Vallée, nous vous proposons cette maison récente de 2008 d\'une superficie de 228 m2.', 'Maison', 'viager-occupé', 'Chailly-en-Bière, France', 10, '2.6067619', '48.466954', 'chailly-en-biere', 'Commune proche', 'Commune proche', 'Pôle économique', 'Paris', '4 Km de Coulommiers', '30 Km de Meaux', '30 min\' Disney et Marne la Vallée', '60 Km - 1h Gare de l\'Est', 1, 'Annonce Viager Occupé Chailly en Brie', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `src` varchar(255) NOT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `habitations_id` int(10) UNSIGNED NOT NULL,
  `is_first` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `src`, `alt`, `habitations_id`, `is_first`) VALUES
(2382004, '/images/1.jpg', 'sddsf', 33, 1),
(2382005, '/images/2.jpg', 'sddsf', 33, 2),
(2382006, '/images/3.jpg', 'sddsf', 33, 3),
(2382007, '/images/', '', 33, 4),
(2382008, '/images/', '', 33, 5),
(2382009, '/images/appart1.jpeg', 'image1', 34, 1),
(2382010, '/images/appart2.jpg', 'image2', 34, 2),
(2382014, '/images/slide-1.jpg', 'vente maisons à Paris', 35, 1),
(2382011, '/images/', '', 34, 3),
(2382012, '/images/', '', 34, 4),
(2382013, '/images/', '', 34, 5),
(2382015, '/images/maison-eco-nature-hauts-de-france-createur-de-maisons-en-ossature-bois-661.jpg', 'vente maisons à Paris', 35, 2),
(2382016, '/images/viager-paris.jpg', 'vente maisons à Paris', 35, 3),
(2382017, '/images/vendre-vente-a-terme.jpg', 'vente maisons à Paris', 35, 4),
(2382018, '/images/viager-paris.jpg', 'vente maisons à Paris', 35, 5),
(2382019, '/images/viager-nice.jpg', 'Titre sur MAP9', 36, 1),
(2382020, '/images/vente-viager-ou-terme.jpg', 'Titre sur MAP', 36, 2),
(2382021, '/images/accompagnement-vente-viager.jpg', 'Titre sur MAP', 36, 3),
(2382022, '/images/pourquoi-acheter-en-viager.jpg', 'Titre sur MAP', 36, 4),
(2382023, '/images/accompagnement-achat-viager.jpg', 'Titre sur MAP', 36, 5),
(2382024, '/images/viager-occupe-chailly-france-1.jpg', 'annonce viager occupé à Chailly en Brie', 37, 1),
(2382025, '/images/viager-occupe-chailly-france-2.jpg', 'annonce viager occupé à Chailly en Brie', 37, 2),
(2382026, '/images/viager-occupe-chailly-france-3.jpg', 'annonce viager occupé à Chailly en Brie', 37, 3),
(2382027, '/images/viager-occupe-chailly-france-4.jpg', 'annonce viager occupé à Chailly en Brie', 37, 4),
(2382028, '/images/viager-occupe-chailly-france-5.jpg', 'annonce viager occupé à Chailly en Brie', 37, 5);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2023_04_25_200922_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `habitations`
--
ALTER TABLE `habitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `habitations`
--
ALTER TABLE `habitations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2382029;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
