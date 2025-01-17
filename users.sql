-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 09:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(28, 'kerem', 'kerem3206@gmail.com', '$2y$10$ZtfFNl/SmdUkEc0ZzQdZveigR38PuYhy38Q3St1Lf2gR803GKmupK'),
(29, 'mehmet', 'mehmet324@gmail.com', '$2y$10$XhvQIFJmE2prNyG0l69YVuplQQTQJ6AYJmrV7274jrez7SgbyfxIi'),
(30, 'altar', 'altar32@gmail.com', '$2y$10$pa1WKZqBi2ukg4Giygscx.Ob/z9BzvVD8YD9mV1FuuXnt2wPchxTi'),
(31, 'azd', 'azd@gmail.com', '$2y$10$YZhWVprWZ1WLO5EsWDfyW.VSi9oTV42oS06fGUNqZ4o1BFgWwncJ.'),
(32, 'fatma', 'fatma1643@gmail.com', '$2y$10$dqi4tI28KN9SiEKvDWCwduonLHap.bcfg1t6NvVCsQHD.I3y9q1se'),
(33, 'asdf', 'asdf@gmail.com', '$2y$10$1RAnpHZY4nnQsQT4gr9Q..MIa0TSKQYCPmvuPB5bfNqSmipKzkzjG'),
(34, 'aziz', 'aziz2345@gmail.com', '$2y$10$jdRM1MvXYAVcgJaSv3d8n.IB8B5EGRjhHjM5cu8y9NHmBBIR/Y2k2'),
(36, 'ahmet', 'ahmet3232@gmail.com', '$2y$10$UofRUQTug4q3Yg4PJCdkyuy3BJfLqFUfRONu1d7gcbK7MiOiasnjW'),
(37, 'kerem', 'kerem@gmail.com', '$2y$10$tVXy3Byhwy2Me04r3AbclunpifwmAQ6ZTHdNwx/YXHKbtUcB9dhOW'),
(38, 'kerem', 'kerem1234@gmail.com', '$2y$10$drt6x3CZp0wqwNoj2zOb5uX65ucre0XW3fpaBK/CsSu7tazyZndPm'),
(39, 'kerem', 'kerem3222', '$2y$10$MlI7GVq.2WpMbvxa8V7jAOx46XzUrXkU3f6DOGADunHQ/Bez91NN6'),
(40, 'yunus', 'yunus32@gmail.com', '$2y$10$p94/2EOfBSgWRdiN0HmCce7woud8HB058xuMpsx9gFOrIULGNP9By'),
(41, 'banu', 'banu3232@gmail.com', '$2y$10$wuvJ5yFC7iQSpuAsC89X7.FB/ZU7rvPagcif2SfqQaFauxy2UhEWW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
