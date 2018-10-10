-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 21 jan. 2018 à 16:54
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `easyloc`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nom_client` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `login`, `password`, `nom_client`, `prenom`, `adresse`, `ville`, `cin`) VALUES
(364, 's.ziti', '123456', 'Ziti', 'Saad', 's.ziti@mundiapolis.ma', 'Casablanca ( Dar al-Beïda)', 'bh456325'),
(394, 'y.bakhtar', '123456', 'Bakhtar', 'Yasser', 'y.bakhtar@mundiapolis.ma', 'Al-Hoceima', 'bh226741'),
(398, 'h.zahir', '123456', 'Zahir', 'Hamid', 'h.zahir@mundiapolis.ma', 'Casablanca', 'BH001298'),
(399, 'm.elmadani', '123456', 'Elmadani', 'Mouad', 'm.elmadani@mundiapolis.ma', 'Tetouan', 'BH985632'),
(402, 'a.lachhab', '123456', 'Lachhab', 'Ayoub', 'a.lachhab@mundiapolis.ma', 'Casablanca', 'bh456975'),
(405, 'm.bahri', '123456', 'Bahri', 'Mouad', 'm.bahri@mundiapolis.ma', 'Mohamedia', 'BH874523'),
(406, 's.lachhab', '123456', 'Lachhab', 'Said', 's.lachhab', 'Bouznika', 'BH987456');

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

CREATE TABLE `louer` (
  `id_vehicule` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id_facture` int(11) NOT NULL,
  `prix_total` float DEFAULT NULL,
  `id_clt` int(11) DEFAULT NULL,
  `date_tarif` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`id_facture`, `prix_total`, `id_clt`, `date_tarif`) VALUES
(52, 369200, 398, '21-01-2018 01:39'),
(53, 369200, 398, '21-01-2018 01:39'),
(54, 329600, 402, '21-01-2018 02:03');

-- --------------------------------------------------------

--
-- Structure de la table `type_vehicule`
--

CREATE TABLE `type_vehicule` (
  `nom` varchar(25) NOT NULL,
  `id_type` int(11) DEFAULT NULL,
  `energie` varchar(25) DEFAULT NULL,
  `prix_horaire` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_vehicule`
--

INSERT INTO `type_vehicule` (`nom`, `id_type`, `energie`, `prix_horaire`) VALUES
('caterpillar', 1, 'diesel', 1800),
('jcb', 4, 'diesel', 2200),
('John Deere', 2, 'diesel', 4000),
('komatsu', 3, 'diesel', 2800),
('volovo', 5, 'diesel', 1000);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_Vehicule` int(11) NOT NULL,
  `marque` varchar(25) DEFAULT NULL,
  `imatriculation` varchar(25) DEFAULT NULL,
  `date_revision` date DEFAULT NULL,
  `nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_Vehicule`, `marque`, `imatriculation`, `date_revision`, `nom`) VALUES
(1, 'grue', '59779-137', '2021-11-10', 'caterpillar'),
(2, 'nevleuse', '42254-122', '2018-09-08', 'John Deere'),
(3, 'pelle hydraulique', '42002-215', '2020-07-04', 'komatsu'),
(4, 'nevleuse', '61919-079', '2022-01-19', 'John Deere'),
(5, 'pelle hydraulique', '54868-3335', '2021-04-23', 'komatsu'),
(6, 'nevleuse', '30400-214', '2019-11-01', 'John Deere'),
(7, 'tractopelle', '0781-5347', '2018-07-08', 'jcb'),
(8, 'pelle hydraulique', '53808-0600', '2021-08-23', 'komatsu'),
(9, 'pelle hydraulique', '54575-226', '2018-10-23', 'komatsu'),
(10, 'camion', '0186-4020', '2020-02-27', 'volovo'),
(11, 'tractopelle', '68745-2015', '2020-10-03', 'jcb'),
(12, 'grue', '49999-629', '2020-01-26', 'caterpillar'),
(13, 'nevleuse', '55154-4794', '2022-05-09', 'John Deere'),
(14, 'grue', '67296-0381', '2017-07-23', 'caterpillar'),
(15, 'pelle hydraulique', '49288-0724', '2020-05-14', 'komatsu'),
(16, 'nevleuse', '42254-093', '2020-02-09', 'John Deere'),
(17, 'pelle hydraulique', '52584-299', '2021-08-10', 'komatsu'),
(18, 'camion', '0268-1026', '2019-08-16', 'volovo'),
(19, 'tractopelle', '0573-2841', '2017-02-22', 'jcb'),
(20, 'pelle hydraulique', '0440-8056', '2019-07-10', 'komatsu'),
(21, 'nevleuse', '63629-1672', '2018-02-25', 'John Deere'),
(22, 'nevleuse', '59779-561', '2019-04-16', 'John Deere'),
(23, 'tractopelle', '53603-4003', '2022-08-13', 'jcb'),
(24, 'pelle hydraulique', '55312-407', '2018-05-21', 'komatsu'),
(25, 'tractopelle', '0615-5579', '2017-09-15', 'jcb'),
(26, 'camion', '53329-976', '2018-09-26', 'volovo'),
(27, 'nevleuse', '61077-001', '2018-03-25', 'John Deere'),
(28, 'tractopelle', '27281-004', '2018-09-02', 'jcb'),
(29, 'grue', '64778-0213', '2018-04-01', 'caterpillar'),
(30, 'nevleuse', '41190-166', '2022-11-19', 'John Deere'),
(31, 'pelle hydraulique', '11673-882', '2021-03-22', 'komatsu'),
(32, 'nevleuse', '68001-263', '2021-06-13', 'John Deere'),
(33, 'grue', '54868-5656', '2017-07-17', 'caterpillar'),
(34, 'tractopelle', '64205-226', '2017-07-28', 'jcb'),
(35, 'tractopelle', '0039-0018', '2017-03-20', 'jcb'),
(36, 'nevleuse', '37000-455', '2019-10-19', 'John Deere'),
(37, 'pelle hydraulique', '63323-117', '2018-06-23', 'komatsu'),
(38, 'camion', '61703-349', '2017-12-18', 'volovo'),
(39, 'camion', '49981-016', '2019-10-19', 'volovo'),
(40, 'grue', '43063-170', '2021-04-27', 'caterpillar'),
(41, 'nevleuse', '35356-610', '2020-02-10', 'John Deere'),
(42, 'tractopelle', '60505-0180', '2019-05-16', 'jcb'),
(43, 'camion', '16129-001', '2017-05-26', 'volovo'),
(44, 'grue', '52125-700', '2018-02-14', 'caterpillar'),
(45, 'camion', '41520-614', '2021-01-09', 'volovo'),
(46, 'grue', '64009-056', '2017-08-27', 'caterpillar'),
(47, 'nevleuse', '53645-1270', '2020-04-18', 'John Deere'),
(48, 'nevleuse', '53738-0712', '2021-07-04', 'John Deere'),
(49, 'camion', '49781-038', '2021-07-14', 'volovo'),
(50, 'pelle hydraulique', '49288-0780', '2020-10-15', 'komatsu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `CIN` (`cin`);

--
-- Index pour la table `louer`
--
ALTER TABLE `louer`
  ADD PRIMARY KEY (`id_vehicule`),
  ADD UNIQUE KEY `id_client` (`id_client`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_facture`);

--
-- Index pour la table `type_vehicule`
--
ALTER TABLE `type_vehicule`
  ADD PRIMARY KEY (`nom`),
  ADD UNIQUE KEY `id_type` (`id_type`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_Vehicule`),
  ADD UNIQUE KEY `imatriculation` (`imatriculation`),
  ADD KEY `FK_Vehicule_nom` (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;

--
-- AUTO_INCREMENT pour la table `louer`
--
ALTER TABLE `louer`
  MODIFY `id_vehicule` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_Vehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
