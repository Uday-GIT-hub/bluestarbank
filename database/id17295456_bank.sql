-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2021 at 11:50 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17295456_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) NOT NULL,
  `sender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `receiver` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `sender`, `receiver`, `money`, `time`) VALUES
(3, 'virat ', 'vijay', 10000, '2021-07-25 06:26:16'),
(4, 'pollard', 'rajnikanth', 100, '2021-07-25 06:30:17'),
(6, 'darpun', 'rohit', 5000, '2021-07-25 08:25:24'),
(7, 'suryakumar yadav', 'hardik ', 16000, '2021-07-25 08:25:43'),
(8, 'sehwag', 'yuvi', 9900, '2021-07-25 08:25:56'),
(9, 'virat ', 'Dhoni', 25000, '2021-07-25 08:26:13'),
(10, 'pollard', 'uday', 23000, '2021-07-25 08:26:44'),
(11, 'Dhoni', 'yuvi', 211, '2021-07-25 08:47:42'),
(12, 'rohit', 'uday', 5000, '2021-07-25 08:57:36'),
(13, 'rajnikanth', 'darpun', 2000, '2021-07-25 17:45:08'),
(14, 'suryakumar yadav', 'pollard', 5000, '2021-07-25 18:25:23'),
(15, 'virat ', 'yuvi', 900, '2021-07-25 18:31:15'),
(16, 'virat ', 'suryakumar yadav', 250, '2021-07-28 15:18:46'),
(17, 'uday', 'pollard', 28000, '2021-08-07 15:42:23'),
(18, 'Dhoni', 'vijay', 1000, '2021-08-07 17:34:31'),
(19, 'uday', 'hardik ', 500, '2021-08-07 17:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'uday', 'udaychandu9999777@gmail.com', 110),
(2, 'Dhoni', 'dhoni7@gmail.com', 123789),
(3, 'rohit', 'hitman@gmail.com', 4900),
(4, 'virat ', 'kholino1@gmail.com', 503850),
(5, 'rajnikanth', 'superstar@gmail.com', 94100),
(6, 'suryakumar yadav', 'sky@gmail.com', 479250),
(7, 'pollard', '99@gmail.com', 74900),
(8, 'darpun', 'darpun9788@gmail.com', 43500),
(9, 'vijay', 'josephvijay@gmail.com', 356000),
(10, 'hardik ', 'pandya12@gmail.com', 473200),
(11, 'yuvi', 'paji97866@gmail.com', 134461),
(12, 'sehwag', 'viru967@gmail.com', 446800),
(13, 'Sethupathi', 'sethu@gmail.com', 50000),
(14, 'surya', 'surya@gmail.com', 12300),
(15, 'uday', 'udaychandu967@gmail.com', 110),
(16, 'rahul', 'rahul@gmail.com', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
