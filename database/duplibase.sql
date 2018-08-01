-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 02:29 PM
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
(580, 'Chelsey Dietrich', 'Lucio_Hettinger@annie.ca', '$2y$10$K7Ajsu6CgjmIT/PyUTfYguKSaxlwZsds8UbqZJDvwFb0hnpFZS7ta', '2018-08-01 12:28:30', '2018-08-01 12:28:30'),
(1100, 'Mrs. Dennis Schulist', 'Karlch@jasper.info', '$2y$10$h4uyDjeck0CXqORQ8dx.OeC14waaX.U59VckasXrGIplPQTaWMDG2', '2018-08-01 12:28:11', '2018-08-01 12:28:11'),
(3940, 'Glenna Reichert', 'Chaim_McDermott@dana.io', '$2y$10$JaJZiMEZ26S5Tl5MMdbOCOK8EjwJYNfKo6kOiy.p5Cp/QEUAgOLV.', '2018-08-01 12:28:30', '2018-08-01 12:28:30'),
(9240, 'Patricia Lebsack', 'ffd.OConner@kory.org', '$2y$10$FK1j.TQGLLlPiDtK4/6Qouf7dceKX8ex6cMxYtuhMz35Ce18vCUv2', '2018-08-01 12:28:11', '2018-08-01 12:28:11'),
(11480, 'Chelsey Dietrich', 'ffsdfw@annie.ca', '$2y$10$8vtLDaV4P6lwwOs4nt9j4OL21FbDLCjkMFQg74mLWsJR6gAPocuHO', '2018-08-01 12:28:11', '2018-08-01 12:28:11'),
(11740, 'Clementine Bauch', 'Nathaeeqwn@yesenia.net', '$2y$10$kJpCAa8En/X9/CefOfbaAONd6G4IRliI5vtZOs/poXyGD.EAyMLdu', '2018-08-01 12:28:11', '2018-08-01 12:28:11'),
(11780, 'Mrs. Dennis Schulist', 'Karley_Dach@jasper.info', '$2y$10$yntrg3l6hgO6HyltpldT5.ZRlkeZiE/p/MdNMhbC2ieDOi6crGuPm', '2018-08-01 12:28:30', '2018-08-01 12:28:30'),
(12740, 'Kurtis Weissnat', 'Telly.Hoeger@billy.biz', '$2y$10$O0VNd5lNB2BpNSeDz4VMZ.bBYrl11uJsd/7wqEK4dTs429g4LLbWm', '2018-08-01 12:28:30', '2018-08-01 12:28:30'),
(13440, 'Ervin Howell', 'Shanna@melissa.tv', '$2y$10$AAbMl5/1mLi45L2.6FSi/OtIRQhVGJ6rOBpyFR2BIgxxJhFt.8aNq', '2018-08-01 12:28:30', '2018-08-01 12:28:30'),
(14880, 'Nicholas Runolfsdottir V', 'Sherwood@rosamond.me', '$2y$10$5LrC3KiWsme8gcqSD6Qc1eM4xzdh55XKDDengyDe5BSjNGSoM2rJm', '2018-08-01 12:28:30', '2018-08-01 12:28:30'),
(15180, 'Patricia Lebsack', 'Julianne.OConner@kory.org', '$2y$10$uAOQyvR5yeiG1qYV3kFrkua5UvoB9pphGXjlJZsif0EYmVsrkzVW6', '2018-08-01 12:28:30', '2018-08-01 12:28:30'),
(18160, 'Clementine Bauch', 'Nathan@yesenia.net', '$2y$10$4xNMVxEDHFrWmqgmgoquP.6VeQvdiJwhqJzGv2MzUWazyPQgIo2oi', '2018-08-01 12:28:30', '2018-08-01 12:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role`) VALUES
(1, 42),
(2, 42),
(3, 42),
(4, 42),
(5, 42),
(6, 42),
(7, 42),
(8, 42),
(11, 42),
(12, 42),
(13, 42),
(14, 42),
(15, 42),
(580, 13),
(1100, 13),
(3940, 13),
(9240, 13),
(11480, 13),
(11740, 13),
(11780, 13),
(12740, 13),
(13440, 13),
(14880, 13),
(15180, 13),
(18160, 13);

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
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id` (`user_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

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
