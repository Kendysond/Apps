-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2015 at 01:35 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icancook`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
`country_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=215 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `name`) VALUES
(1, 'AFGHANISTAN'),
(2, 'ALBANIA'),
(3, 'ALGERIA'),
(4, 'ANDORRA'),
(5, 'ANGUILLA'),
(7, 'ARGENTINA'),
(8, 'ARMENIA'),
(9, 'ARUBA'),
(10, 'AUSTRALIA'),
(11, 'AUSTRIA'),
(12, 'AZERBAIJAN'),
(13, 'AZORES'),
(14, 'BAHAMAS'),
(15, 'BAHRAIN'),
(16, 'BANGLADESH'),
(17, 'BARBADOS'),
(18, 'BELGIUM'),
(19, 'BELIZE'),
(20, 'BENIN'),
(21, 'BERMUDA'),
(22, 'BHUTAN'),
(23, 'BOLIVIA'),
(24, 'BOSNIA'),
(25, 'BOTSWANA'),
(26, 'BRAZIL'),
(28, 'BRUNEI'),
(29, 'BULGARIA'),
(30, 'BURKINA FASO'),
(31, 'BURUNDI'),
(32, 'BYELARUS'),
(33, 'CAMBODIA'),
(34, 'CAMEROON'),
(35, 'CANADA'),
(36, 'CANARY ISLANDS'),
(37, 'CAPE VERDE'),
(38, 'CAYMAN ISLANDS'),
(40, 'CHAD'),
(41, 'CHILE'),
(42, 'CHINA'),
(43, 'COLOMBIA'),
(44, 'COMOROS'),
(45, 'CONGO BRAZZAVILLE'),
(46, 'CORAL SEA ISLANDS'),
(47, 'COSTA RICA'),
(48, 'COTE DIVOIRE'),
(49, 'CROATIA'),
(50, 'CUBA'),
(51, 'CYPRUS'),
(52, 'CZECH REPUBLIC'),
(53, 'DENMARK'),
(54, 'DJIBOUTI'),
(55, 'DOMINICA'),
(56, 'DOMINICAN REPUBLIC'),
(57, 'ECUADOR'),
(58, 'EGYPT'),
(59, 'EL SALVADOR'),
(60, 'EQUATORIAL GUINEA'),
(61, 'ERITREA'),
(62, 'ESTONIA'),
(63, 'ETHIOPIA'),
(64, 'FIJI'),
(65, 'FINLAND'),
(66, 'FRANCE'),
(67, 'FRENCH GUIANA'),
(68, 'FRENCH POLYNESIA'),
(69, 'GABON'),
(70, 'GAMBIA'),
(71, 'GAZA STRIP'),
(72, 'GEORGIA'),
(73, 'GERMANY'),
(74, 'GHANA'),
(75, 'GREECE'),
(76, 'GREENLAND'),
(77, 'GRENADA'),
(78, 'GUADELOUPE'),
(79, 'GUAM'),
(80, 'GUATEMALA'),
(81, 'GUINEA'),
(82, 'GUINEA-BISSAU'),
(83, 'GUYANA'),
(84, 'HAITI'),
(85, 'HONDURAS'),
(86, 'HONG KONG'),
(87, 'HUNGARY'),
(88, 'ICELAND'),
(89, 'INDIA'),
(90, 'INDONESIA'),
(91, 'IRAN'),
(92, 'IRAQ'),
(93, 'IRELAND'),
(94, 'ISRAEL'),
(95, 'ITALY'),
(96, 'JAMAICA'),
(97, 'JAPAN'),
(98, 'JORDAN'),
(100, 'KENYA'),
(101, 'KIRIBATI'),
(102, 'KOREA'),
(103, 'KOREA, REPUBLIC OF'),
(104, 'KUWAIT'),
(105, 'KYRGYZSTAN'),
(106, 'LAOS'),
(107, 'LATVIA'),
(108, 'LEBANON'),
(110, 'LESOTHO'),
(111, 'LIBYA'),
(112, 'LIECHTENSTEIN'),
(113, 'LITHUANIA'),
(114, 'LUXEMBOURG'),
(115, 'MACAU'),
(116, 'MACEDONIA'),
(117, 'MADAGASCAR'),
(118, 'MALAWI'),
(119, 'MALAYSIA'),
(120, 'MALDIVES'),
(121, 'MALI'),
(122, 'MALTA & GOZO'),
(123, 'MARSHAL ISLANDS'),
(124, 'MARTINIQUE'),
(125, 'MAURITANIA'),
(126, 'MAURITIUS'),
(127, 'MEXICO'),
(128, 'MICRONESIA'),
(129, 'MIDWAY ISLANDS'),
(130, 'MOLDOVA'),
(131, 'MONACO'),
(132, 'MONGOLIA'),
(133, 'MONTENEGRO'),
(134, 'MOROCCO'),
(135, 'MOZAMBIQUE'),
(136, 'MYANMAR'),
(137, 'NAMIBIA'),
(138, 'NAURU'),
(139, 'NEPAL'),
(140, 'NETHERLANDS'),
(142, 'NEW ZEALAND'),
(143, 'NICARAGUA'),
(144, 'NIGER'),
(145, 'NIGERIA'),
(146, 'NIUE'),
(147, 'OMAN'),
(148, 'PAKISTAN'),
(149, 'PALAU'),
(150, 'PANAMA'),
(151, 'PAPUA NEW GUINEA'),
(152, 'PARAGUAY'),
(153, 'PERU'),
(154, 'PHILIPPINES'),
(155, 'PITCAIRN ISLANDS'),
(156, 'POLAND'),
(157, 'PORTUGAL'),
(158, 'PUERTO RICO'),
(159, 'QATAR'),
(160, 'ROMANIA'),
(161, 'RUSSIA'),
(162, 'RWANDA'),
(163, 'SAO TAMOE'),
(164, 'SAUDI ARABIA'),
(165, 'SENEGAL'),
(166, 'SERBIA'),
(167, 'SEYCHELLES'),
(168, 'SIERRA LEONE'),
(169, 'SINGAPORE'),
(170, 'SLOVAKIA'),
(171, 'SLOVENIA'),
(172, 'SOLOMON ISLANDS'),
(173, 'SOMALIA'),
(174, 'SOUTH AFRICA'),
(175, 'SPAIN'),
(176, 'SRI LANKA'),
(177, 'ST. LUCIA'),
(179, 'SUDAN'),
(180, 'SURINAME'),
(181, 'SWAZILAND'),
(182, 'SWEDEN'),
(183, 'SWITZERLAND'),
(184, 'SYRIA'),
(185, 'TAIWAN'),
(186, 'TAJIKISTAN'),
(187, 'TANZANIA'),
(188, 'THAILAND'),
(189, 'TOGO'),
(190, 'TONGA'),
(192, 'TUNISIA'),
(193, 'TURKEY'),
(194, 'TURKMENISTAN'),
(195, 'UGANDA'),
(196, 'UKRAINE'),
(197, 'U.A.E'),
(198, 'UNITED KINGDOM'),
(199, 'UNITED STATES'),
(200, 'URUGUAY'),
(201, 'UZBEKISTAN'),
(203, 'VENEZUELA'),
(204, 'VIETNAM'),
(205, 'VIETNAM, NORTH'),
(208, 'WEST BANK'),
(209, 'WESTERN SAHARA'),
(210, 'WESTERN SAMOA'),
(211, 'YEMEN'),
(212, 'ZAIRE'),
(213, 'ZAMBIA'),
(214, 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
`id` int(11) NOT NULL,
  `ids` varchar(255) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`id`, `ids`, `added`) VALUES
(1, '100000', '2015-04-14 21:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
`procedure_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `ingredients` longtext NOT NULL,
  `description` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(2555) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
`state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `country_id`, `name`) VALUES
(1, 145, 'Abuja'),
(2, 145, 'Abia'),
(3, 145, 'Adamawa'),
(4, 145, 'AkwaIbom'),
(5, 145, 'Anambra'),
(6, 145, 'Bauchi'),
(7, 145, 'Bayelsa'),
(8, 145, 'Benue'),
(9, 145, 'Borno'),
(10, 145, 'CrossRiver'),
(11, 145, 'Delta'),
(12, 145, 'Ebonyi'),
(13, 145, 'Edo'),
(14, 145, 'Ekiti'),
(15, 145, 'Enugu'),
(16, 145, 'Gombe'),
(17, 145, 'Imo'),
(18, 145, 'Jigawa'),
(19, 145, 'Kaduna'),
(20, 145, 'Kano'),
(21, 145, 'Katsina'),
(22, 145, 'Kebbi'),
(23, 145, 'Kogi'),
(24, 145, 'Kwara'),
(25, 145, 'Lagos'),
(26, 145, 'Nassarawa'),
(27, 145, 'Niger'),
(28, 145, 'Ogun'),
(30, 145, 'Osun'),
(29, 145, 'Ondo'),
(31, 145, 'Oyo'),
(32, 145, 'Plateau'),
(33, 145, 'Rivers'),
(34, 145, 'Sokoto'),
(35, 145, 'Taraba'),
(36, 145, 'Yobe'),
(37, 145, 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
`view_id` int(11) NOT NULL,
  `procedure_id` int(11) NOT NULL,
  `ip` varchar(2555) NOT NULL,
  `at` int(100) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`view_id`, `procedure_id`, `ip`, `at`, `added`, `deleted`) VALUES
(2, 1111, '::1', 1429035796, '2015-04-15 00:23:16', 0),
(3, 1111, '::1', 1429057808, '2015-04-15 00:30:08', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `ids`
--
ALTER TABLE `ids`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
 ADD PRIMARY KEY (`procedure_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
 ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `ids`
--
ALTER TABLE `ids`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
MODIFY `procedure_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
