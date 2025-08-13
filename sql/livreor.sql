-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2025 at 05:11 PM
-- Server version: 9.3.0
-- PHP Version: 8.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livreor`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int NOT NULL,
  `commentaire` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_utilisateur` int NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'salut tout le monde moi c\'est Ahmad et je suis le dev de ce site', 1, '2025-08-09 13:13:29'),
(2, 'salut tout le monde je suis le fameux john Doe😊', 2, '2025-08-09 19:15:16'),
(3, 'moi aussi c\'est john je suis ravis de faire votre connaissance\r\n', 5, '2025-08-13 19:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'https://images.pexels.com/photos/11035390/pexels-photo-11035390.jpeg',
  `pseudo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `profil`, `pseudo`) VALUES
(1, 'khaly@gmail.co.uk', '$2y$12$9s0/9zQirAS5U7C.X8JMceJ3Hfr1AMbG6X4T7zCwHwyoEqJaCBM6W', 'https://images.pexels.com/photos/11035390/pexels-photo-11035390.jpeg', 'khaly'),
(2, 'john@gmail.co.uk', '$2y$12$HaJoCSZaRki/zxGT.x613uYRyZ1PMKN6sxZM/VyXDlddGINmnFEsa', 'https://images.pexels.com/photos/11035390/pexels-photo-11035390.jpeg', 'johndoe'),
(4, 'mariam@gmail.com', '$2y$12$a.6j1q08hUcJlXTSEWjvNe.utcTKitITesVi2jma9r3fzSgTGZkiC', 'https://images.pexels.com/photos/11035390/pexels-photo-11035390.jpeg', 'mariam'),
(5, 'john@gmail.com', '$2y$12$UbIjt7x9JHRYkagv1sET2utzUWAJWBuD0MssPCCpixIA1fCvAJvVW', 'https://images.pexels.com/photos/11035390/pexels-photo-11035390.jpeg', 'john');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`pseudo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
