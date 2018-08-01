-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 07:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duplibase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(5, 'Green Day', 'greenday@gmail.com', '$2y$10$xbOs.t2C1w2qB0WfwIjgnOwY/wtCSK77Jo.3edQGOFp2t1fEnA7Gy', '2018-07-29 17:42:27', '2018-07-29 17:42:27'),
(2920, 'Mrs. Dennis Schulist', 'xzczcZcZ@jasper.info', '$2y$10$qrHWXADyJyUTGnA.Y9ZMYe1aooeQVIshPmds7o1UzC3M2uDDmPbQC', '2018-07-31 20:37:28', '2018-07-31 20:37:28'),
(3580, 'Kurtis Weissnat', 'Telly.Hoeger@billy.biz', '$2y$10$5jY2WE9Kqq/tcbFUIUV/ie3huG8qZyEk.Zzex11B4Gxwlxmtxzv4.', '2018-07-31 19:48:44', '2018-07-31 19:48:44'),
(5140, 'Mrs. Dennis Schulist', 'Karley_Dach@jasper.info', '$2y$10$M5hgF4.NOjM8QJ8E7xsO/uTiFrZOKdSnQEztJK0f1kQcb.w0kixwq', '2018-07-31 19:48:44', '2018-07-31 19:48:44'),
(7660, 'Chelsey Dietrich', 'Lucio_Hettinger@annie.ca', '$2y$10$Ib/V8MJNWSaobl6E/z81q.wFkFWMMMH9bXu0O.w1pgcCLU2GXwy4K', '2018-07-31 19:48:44', '2018-07-31 19:48:44'),
(9260, 'Chelsey Dietrich', 'xzczczxZ@annie.ca', '$2y$10$KPi1jzSI4PBtGLjyWh1dQOec/Ri/PTC2EGIhGChrPFH7gVDnxXanq', '2018-07-31 20:37:28', '2018-07-31 20:37:28'),
(9500, 'Clementine Bauch', 'Nathan@yesenia.net', '$2y$10$C7vbIWwlBteQZWMFpRBac.9hdEbBfrUJiZEmrmN4pW6OjYLyJKi9q', '2018-07-31 19:48:44', '2018-07-31 19:48:44'),
(10320, 'Ervin Howell', 'Ssshanna@melissa.tv', '$2y$10$vFVqrwg/Fmjut1xJl86jkuuKTvNdAMOjZWmGcbIMcRUu5rHp1yJda', '2018-07-31 20:37:29', '2018-07-31 20:37:29'),
(10800, 'Nicholas Runolfsdottir V', 'Sherwood@rosamond.me', '$2y$10$jPJ1j13WC/jl2JTcSYkARevNapmcSmSE0HgLTYHCUCygsf96BMgcq', '2018-07-31 19:48:44', '2018-07-31 19:48:44'),
(12600, 'Kurtis Weissnat', 'Telly.xczxzxcxz@billy.biz', '$2y$10$ukONEWkNqRUTDNIbJwHHweoyvoEoFFzkIKgSio.OY41ljsKUYW6O6', '2018-07-31 20:37:28', '2018-07-31 20:37:28'),
(14580, 'Nicholas Runolfsdottir V', 'sccsxzc@rosamond.me', '$2y$10$YlpBTsh22DfxrlS0NI4xcu1RzrXGs2C6.mzskYNzSyZtRyKJglidK', '2018-07-31 20:37:28', '2018-07-31 20:37:28'),
(14920, 'Patricia Lebsack', 'Julianne.OConner@kory.org', '$2y$10$SNsFw.e7T1MXPBbUkYydhu0Ipiy69ZJ7b4ILjZnFmIw/TFASDFBD2', '2018-07-31 19:48:44', '2018-07-31 19:48:44'),
(17160, 'Clementine Bauch', 'xczxczc@yesenia.net', '$2y$10$tqGs7TkrsxUOJMSxN0tB1.g.CuIrB1Kwq/yfKtnsJiWvbn.8XY89K', '2018-07-31 20:37:28', '2018-07-31 20:37:28'),
(17320, 'Glenna Reichert', 'ssss@dana.io', '$2y$10$gBtKwCElBIeS1uQ4B2hBWe0X3w3oEQbCTLxxrUz3kg1QnvXxoqlC.', '2018-07-31 20:37:28', '2018-07-31 20:37:28'),
(18320, 'Patricia Lebsack', 'Juliazx@kory.org', '$2y$10$syV5DVZ59kEZyQ3U6n6TNeDo5dP6AWxm/KMyYaMUyaSMxJSB170zq', '2018-07-31 20:37:28', '2018-07-31 20:37:28'),
(18680, 'Glenna Reichert', 'Chaim_McDermott@dana.io', '$2y$10$U.enw388u3PuMKEA.0lyf.GtU4LVphFcHY7GetjuieD/jBxNW7i8C', '2018-07-31 19:48:44', '2018-07-31 19:48:44'),
(19900, 'Ervin Howell', 'Shanna@melissa.tv', '$2y$10$Z8StOBY7rEfVlk/v/GzLlO50MIICW7RcOfW.ztCoGfT/ln3f78eci', '2018-07-31 19:48:44', '2018-07-31 19:48:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3333343;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
