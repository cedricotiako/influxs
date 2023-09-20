-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 01 sep. 2023 à 18:04
-- Version du serveur : 5.7.43
-- Version de PHP : 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inflfiel_social_traking`
--

-- --------------------------------------------------------

--
-- Structure de la table `total_abonner`
--

CREATE TABLE `total_abonner` (
  `id` int(11) NOT NULL,
  `influenceur_id` int(11) DEFAULT NULL,
  `influenceur_name` varchar(512) DEFAULT NULL,
  `Facebook` int(11) DEFAULT NULL,
  `Instagram` int(11) DEFAULT NULL,
  `Tiktok` int(11) DEFAULT NULL,
  `Twitter` int(11) DEFAULT NULL,
  `YouTube` int(11) DEFAULT NULL,
  `Ayoba` int(11) NOT NULL,
   Engagement int(11) NOT NULL,
   Figuration360 
   Activation_Terrain
   Apparitions_Evenement
   Stories
   Live
   tag
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `total_abonner`
--

INSERT INTO `total_abonner` (`id`, `influenceur_id`, `influenceur_name`, `Facebook`, `Instagram`, `Tiktok`, `Twitter`, `YouTube`, `Ayoba`) VALUES
(1, 1, 'Fingon Tralala', 1500000, 13900, 109600, 2739, 232000, 310475),
(2, 2, 'Muriel Blanche', 1600000, 2000000, 1500000, 5427, 32800, 384466),
(3, 95, 'Peupah Zouzoua', 783000, 3347, 3367, 35654, 66400, 17757),
(4, 67, 'Monsieur Chantal', 1000000, 22400, 613300, 42, 94300, 11854),
(5, 10, 'Frida Choco Bronzé', 571000, 191000, 420500, 0, 45600, 27230),
(6, 92, 'Aminatou Nihad', 515000, 54500, 302500, 107, 0, 13754),
(7, 91, 'Senior Pastor', 64000, 6659, 1400, 0, 2970, 9936),
(8, 94, 'Caro', 168000, 16500, 85200, 0, 41400, 1662),
(9, 16, 'Filatrio', 174000, 30000, 173400, 592, 1080, 8203),
(10, 72, 'Auntie Felicia', 101000, 10000, 38400, 0, 8230, 37179),
(11, 88, 'Stephane le Jongleur', 5200, 0, 69000, 0, 80, 0),
(12, 17, 'Annie Payep', 9300, 660, 0, 89991, 3950, 0),
(13, 79, 'Ulrich Nguegang', 392000, 2800, 3493, 33, 5400, 0),
(14, 90, 'Moustik le Karismatik', 1300000, 633000, 44600, 0, 483000, 27000),
(15, 68, 'Diane Nama', 588000, 67900, 692700, 0, 33600, 0),
(16, 71, 'DJ Moyo', 5600, 2555, 8026, 0, 0, 4700),
(17, 54, 'Salatiel', 644000, 421000, 55100, 0, 0, 541500),
(18, 20, 'Ma\'a jacky', 1100000, 0, 933000, 0, 863, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `total_abonner`
--
ALTER TABLE `total_abonner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `total_abonner`
--
ALTER TABLE `total_abonner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
