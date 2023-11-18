-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 fév. 2021 à 07:52
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `adsyst_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `all_online_users`
--

CREATE TABLE `all_online_users` (
  `ip` int(11) NOT NULL,
  `hour_arrived` int(11) DEFAULT NULL,
  `hour_go` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `journal`
--

INSERT INTO `journal` (`id`, `users_id`, `name`, `ip`, `created_at`, `updated_at`) VALUES
(1, 0, 'Enregistrement Abonnement', '::1', 1590518152, NULL),
(2, 0, 'Enregistrement Abonnement', '::1', 1590553434, NULL),
(3, 0, 'Enregistrement Abonnement', '::1', 1590697100, NULL),
(4, 0, 'Restauration de l\'Abonnement', '::1', 1590729779, NULL),
(5, 0, 'Supression de l\'Abonnement', '::1', 1590730343, NULL),
(6, 0, 'Restauration de l\'Abonnement', '::1', 1590730406, NULL),
(7, 0, 'Supression de l\'Abonnement', '::1', 1590730423, NULL),
(8, 0, 'Supression de l\'Abonnement', '::1', 1590730424, NULL),
(9, 0, 'Supression de l\'Abonnement', '::1', 1590730426, NULL),
(10, 0, 'Supression de l\'Abonnement', '::1', 1590730538, NULL),
(11, 0, 'Supression de l\'Abonnement', '::1', 1590730549, NULL),
(12, 0, 'Restauration de l\'Abonnement', '::1', 1590730742, NULL),
(13, 0, 'Restauration de l\'Abonnement', '::1', 1590730765, NULL),
(14, 0, 'Restauration de l\'Abonnement', '::1', 1590730770, NULL),
(15, 0, 'Enregistrement Abonnement', '::1', 1590776225, NULL),
(16, 0, 'Enregistrement Abonnement', '::1', 1590776275, NULL),
(17, 0, 'Enregistrement Abonnement', '::1', 1590776904, NULL),
(18, 1, 'Enregistrement Utilisateur', '::1', 1590777773, NULL),
(19, 2, 'Enregistrement Utilisateur', '::1', 1590885796, NULL),
(20, 2, 'Modification de l\'utilisateur', '::1', 1590886453, NULL),
(21, 2, 'Modification de l\'utilisateur', '::1', 1590886508, NULL),
(22, 2, 'Supression de l\'Utilisateur', '::1', 1590887407, NULL),
(23, 3, 'Enregistrement Utilisateur', '::1', 1590887913, NULL),
(24, 3, 'Restauration de l\'Utilisateur', '::1', 1590889565, NULL),
(25, 3, 'Supression de l\'Utilisateur', '::1', 1590889983, NULL),
(26, 3, 'Supression de l\'Utilisateur', '::1', 1590889990, NULL),
(27, 3, 'Supression de l\'Utilisateur', '::1', 1590889997, NULL),
(28, 3, 'Restauration de l\'Utilisateur', '::1', 1590890010, NULL),
(29, 3, 'Restauration de l\'Utilisateur', '::1', 1590890016, NULL),
(30, NULL, 'Recharge Client', '::1', 1590911146, NULL),
(31, NULL, 'Recharge Client', '::1', 1590911154, NULL),
(32, NULL, 'Recharge Client', '::1', 1590911187, NULL),
(33, 3, 'Recharge Client', '127.0.0.1', 1590932502, NULL),
(34, 3, 'Recharge Client', '127.0.0.1', 1590932534, NULL),
(35, 3, 'Recharge Client', '127.0.0.1', 1590932553, NULL),
(36, 3, 'Recharge Client', '127.0.0.1', 1590932692, NULL),
(37, 4, 'Recharge Client', '127.0.0.1', 1590933198, NULL),
(38, 3, 'Validation de la transaction', '127.0.0.1', 1590955695, NULL),
(39, 3, 'Invalidation de la transaction', '::1', 1591073658, NULL),
(40, 3, 'Validation de la transaction', '::1', 1591074610, NULL),
(41, 4, 'Recharge Client', '::1', 1591080016, NULL),
(42, 3, 'Validation de la transaction', '::1', 1591080175, NULL),
(43, 3, 'Validation de la transaction', '::1', 1591080177, NULL),
(44, 3, 'Invalidation de la transaction', '::1', 1591080193, NULL),
(45, 3, 'Invalidation de la transaction', '::1', 1591080204, NULL),
(46, 3, 'Validation de la transaction', '::1', 1591081088, NULL),
(47, 33, 'Validation de la transaction', '::1', 1595134872, NULL),
(48, 33, 'Invalidation de la transaction', '::1', 1595134891, NULL),
(49, 33, 'Invalidation de la transaction', '::1', 1595134892, NULL),
(50, 33, 'Invalidation de la transaction', '::1', 1595134900, NULL),
(51, 4, 'Recharge Client', '::1', 1595134990, NULL),
(52, 4, 'Recharge Client', '::1', 1595142742, NULL),
(53, 4, 'Recharge Client', '::1', 1595143328, NULL),
(54, 0, 'Validation de la transaction', '::1', 1607090992, NULL),
(55, 0, 'Invalidation de la transaction', '::1', 1607091223, NULL),
(56, 0, 'Validation de la transaction', '::1', 1607091241, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recharge`
--

CREATE TABLE `recharge` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile_operator` varchar(100) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recharge`
--

INSERT INTO `recharge` (`id`, `name`, `mobile_operator`, `created_at`, `updated_at`) VALUES
(3, 'Orange money', 'orange', 1590932553, NULL),
(4, 'MTN mobile money', 'mtn', 1590932692, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `create_at` int(11) DEFAULT NULL,
  `update_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`, `description`, `create_at`, `update_at`) VALUES
(1, 'utilisateur', NULL, NULL, NULL),
(2, 'administrateur', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `subcriptions`
--

CREATE TABLE `subcriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `distributor` varchar(100) NOT NULL,
  `subcription_state` enum('0','1') NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL,
  `restaured_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subcriptions`
--

INSERT INTO `subcriptions` (`id`, `name`, `description`, `amount`, `distributor`, `subcription_state`, `created_at`, `updated_at`, `deleted_at`, `restaured_at`) VALUES
(1, 'ndemba', 'PIPO', 1000, '32131', '1', 1590518151, 1590559906, 1590730549, 1590730770),
(2, 'dadi', 'tout', 10, 'pipo', '1', 1590553434, NULL, 1590730538, 1590730742),
(3, 'jknhknjknjknjk', 'ml,lm,l,lm,', 12, 'llm,m,l', '1', 1590697100, NULL, 1590730426, 1590730765),
(4, 'sdfdsfsdf', 'fdsfsdfsdf', 100, 'fdsfsdf', '1', 1590776224, NULL, 0, 0),
(5, 'fdsfsddsfds', 'fdsfsdfsdfsdf', 100, 'ssdfsdf', '1', 1590776275, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `ref_num_transaction` varchar(255) NOT NULL,
  `recharge_id` int(10) UNSIGNED DEFAULT NULL,
  `users_id` varchar(255) DEFAULT NULL,
  `transaction_state` enum('0','1') NOT NULL COMMENT '''0''=attente, ''1''=valide',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL,
  `restaured_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`id`, `ref_num_transaction`, `recharge_id`, `users_id`, `transaction_state`, `created_at`, `updated_at`, `deleted_at`, `restaured_at`) VALUES
(1, 'abcghjklmoqstuwxyzBCDEFGHIKLMNOQRSUXZ0123456789@~{', 0, '4', '0', 1590911146, NULL, 0, 0),
(2, 'abdefhjlnoprsuvxzABCDEFGHJLMNOPSUVWYZ01256789]^@~{', 0, '5', '0', 1590911153, NULL, 0, 0),
(6, 'ahjpILNO35', 3, '9', '0', 1595134990, NULL, 0, 0),
(3, 'cdefgijklmnopqrtuvxyzABCDEGIJMNOPRTVWYZ012345689^{', 0, '6', '0', 1590911187, NULL, 0, 0),
(7, 'dfhyzDGK17', 4, '10', '1', 1595142742, 1607091241, 0, 0),
(5, 'fimuxzAKR2', 3, '8', '0', 1591080016, 1591081088, 0, 1595134900),
(4, 'gFHLY24789', 4, '7', '0', 1590933198, 1595134872, 0, 1595134892),
(8, 'hikqIJKQTU', 4, '11', '0', 1595143328, 1607090991, 0, 1607091223);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `quartier` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `subcriptions_id` int(11) DEFAULT NULL,
  `user_state` enum('0','1') DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL,
  `restaured_at` int(11) NOT NULL,
  `numero_abonnement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `town`, `quartier`, `phone`, `email`, `password`, `role_id`, `subcriptions_id`, `user_state`, `created_at`, `updated_at`, `deleted_at`, `restaured_at`, `numero_abonnement`) VALUES
(1, 'Massol', 'Mounok', 'Douala', 'fdsfdsfdsfsdf', '123456789', 'admin@admin.com', 'fc3707fa908df1e82e30ecbdae3d094804a8f87d', 2, 6, '1', 1590777773, 1590886508, 1590889997, 1590890016, NULL),
(2, 'ngando mounok', 'hugues bertin', 'yaounde', 'essos', '694048926', 'admin1@admin.com', '8cb2237d0679ca88db6464eac60da96345513964', 2, 1, '0', 1590885796, NULL, 1590889990, 1590889565, NULL),
(3, 'iiiiiiiiiiiiii', 'iiiiiiiiiiiiii', 'iiiiiiiiiiiiiiiiii', 'iiiiiiiiiiiiiiii', '694048922', 'fdsf@sdf.fr', '8cb2237d0679ca88db6464eac60da96345513964', 2, 2, '1', 1590887913, NULL, 1590889983, 1590890009, NULL),
(4, 'ngando', NULL, NULL, NULL, '699903867', NULL, NULL, 1, 4, NULL, 1590911146, NULL, 0, 0, '123456789'),
(5, 'ngando', NULL, NULL, NULL, '699903867', NULL, NULL, 1, 4, NULL, 1590911153, NULL, 0, 0, '123456789'),
(6, 'ngando', NULL, NULL, NULL, '699903867', NULL, NULL, 1, 4, NULL, 1590911187, NULL, 0, 0, '123456789'),
(7, 'bertin', NULL, NULL, NULL, '694048925', NULL, NULL, 1, 1, NULL, 1590933197, NULL, 0, 0, '123456789'),
(8, 'pipo', NULL, NULL, NULL, '123456789', NULL, NULL, 1, 4, NULL, 1591080016, NULL, 0, 0, '123456123'),
(9, 'massol franck', NULL, NULL, NULL, '656619147', NULL, NULL, 1, 3, NULL, 1595134990, NULL, 0, 0, '123456789'),
(10, 'batouan', NULL, NULL, NULL, '699903867', NULL, NULL, 1, 5, NULL, 1595142741, NULL, 0, 0, '78695339'),
(11, 'dsfsdfsdfdsf', NULL, NULL, NULL, '1231546548', NULL, NULL, 1, 5, NULL, 1595143328, NULL, 0, 0, '123456789');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `all_online_users`
--
ALTER TABLE `all_online_users`
  ADD PRIMARY KEY (`ip`);

--
-- Index pour la table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recharge`
--
ALTER TABLE `recharge`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subcriptions`
--
ALTER TABLE `subcriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ref_num_transaction`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `recharge`
--
ALTER TABLE `recharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `subcriptions`
--
ALTER TABLE `subcriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
