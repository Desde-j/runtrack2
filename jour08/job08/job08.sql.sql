-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 10, 2021 at 05:00 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jour08`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(225) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `mail` varchar(225) NOT NULL,
  `naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `sexe`, `mail`, `naissance`) VALUES
(1, 'Zimmerman', 'Cyril', 'Homme', 'cyril@laplateforme.io', '1989-01-02'),
(2, 'Soriano', 'Jessica', 'Femme', 'jessica@laplateforme.io', '1995-09-08'),
(3, 'Roumégas', 'Roxan', 'Homme', 'roxan@laplateforme.io', '2016-09-08'),
(4, 'Assens', 'Pascal', 'Homme', 'pascal@laplateforme.io', '1999-12-31'),
(5, 'Cristinelli', 'Terry', 'Homme', 'terry@laplateforme.io', '2005-02-01'),
(6, 'Habib', 'Ruben', 'Homme', 'ruben.habib@laplateforme.io', '1993-05-26'),
(7, 'Dupont', 'Toto', 'Homme', 'toto@laplateforme.io', '2019-11-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
