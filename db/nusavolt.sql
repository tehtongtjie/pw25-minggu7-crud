-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 04:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nusavolt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(55) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `email`, `last_login`, `created_at`) VALUES
(2, 'admin', 'admin123', '', '', '2025-04-29 13:39:08', '2025-04-29 13:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `crud_071`
--

CREATE TABLE `crud_071` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `kendaraan` varchar(100) NOT NULL,
  `domisili` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud_071`
--

INSERT INTO `crud_071` (`id`, `name`, `email`, `password`, `phone_number`, `kendaraan`, `domisili`) VALUES
(1, 'Lalu Rifqi Ramadhan', 'lalurfqi22@gmail.com', '$2y$10$1RkJRBHGWq5GaFA8EnuexOJRU4kL/uIX5e867.Vm8fl1uQWsI9Mr2', '085738051036', 'IONIQ5', 'Nusa Tenggara Barat'),
(2, 'Lalu Rifqi Ramadhan', 'lalurfqi22@gmail.com', '$2y$10$thcZlQMv3RgekEp2IvHTB.x6eTAuSHJjUcHjepV2vKutPguz0uMOy', '085738051036', 'IONIQ5', 'Nusa Tenggara Barat'),
(3, 'Lalu Rifqi Ramadhan', 'lalurfqi22@gmail.com', '$2y$10$H1RbRh2H.jAUtBKZIbYQ3OmDcJN1L7ETzOwRzybMFnP7tJf3QWhAy', '085738051036', 'IONIQ5', 'Nusa Tenggara Barat'),
(4, 'Lalu Rifqi Ramadhan', 'lalurfqi22@gmail.com', '$2y$10$8Z.m49H1LB8UX2yfy1L.u.gGbJ.2dN644RCChmhnW0YaboaKYuz.u', '085738051036', 'IONIQ5', 'Nusa Tenggara Barat'),
(5, 'Lalu Rifqi Ramadhan', 'lalurfqi22@gmail.com', '$2y$10$LkWjDyJaR//eK82gWvlQwejTcxZY8lJ5SfkunCOpawx8C./rBY/KG', '085738051036', 'IONIQ5', 'Nusa Tenggara Barat'),
(6, 'Lalu Rifqi Ramadhan', 'lalurfqi22@gmail.com', '$2y$10$y0/upIXlcTB5CvZPXqG/nufY1UcF45cb5DbQSKFxhb/HKVOB61Aeu', '085738051036', 'IONIQ5', 'Nusa Tenggara Barat'),
(7, 'Lalu Rifqi Ramadhan', 'lalurfqi22@gmail.com', '$2y$10$wjbbzteQHxO3le.Naqawq.HitZ164SYTdhnY.8PUIgNdEiZuvmcRy', '085738051036', 'IONIQ5', 'Nusa Tenggara Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_071`
--
ALTER TABLE `crud_071`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crud_071`
--
ALTER TABLE `crud_071`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
