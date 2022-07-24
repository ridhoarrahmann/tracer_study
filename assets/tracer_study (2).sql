-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 01:33 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nis` varchar(128) NOT NULL,
  `graduate_year` year(4) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `nis`, `graduate_year`, `jurusan`, `phone_number`, `password`, `user_role`) VALUES
(1, 'user1', 's@gmail.com', '123', 2020, '0', '', 'samsung123123', 2),
(2, 'ridho', 'ridhoarrahman@gmail.com', '4669', 2020, 'rpl', '0865281626', '12345678', 2),
(3, 'ridho', 'ridhoarrahman@gmail.com', '4669', 2020, 'rpl', '0865281626', '12345678', 2),
(4, 'ridho', 'mail@gmail.com', '12', 2020, 'tkj', '12312313', '$2y$10$0EUfx3.1r4RVs7sYDdr55ePN1GJuY.hTYljq9QqZw0xl..XmsvR.W', 2),
(6, 'ridho', 'ridhoarrahman@gmail.com', '4669', 2022, 'rpl', '0854355335', '$2y$10$SBxM.tgI9MkIYnmWbJHEdOxl39ZjbewAhwvPFdVGit2gasnvZ1Jk2', 2),
(7, 'rendy', 'rendy@gmail.com', '4500', 2020, 'rpl', '76876876786', '$2y$10$xHjRWzV81yOmNIZMfgOuFeFLArPQevOhpM2qlzfMMQbgeTTKfAZpS', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
