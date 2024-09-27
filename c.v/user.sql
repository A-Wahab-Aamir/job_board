-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 08:44 PM
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
-- Database: `c.v`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `address`, `phone`, `education`, `experience`, `skills`) VALUES
(1, '', '', '', 2147483647, 'master', '1', 'developer'),
(3, 'Bushra farrukh', 'bushrafarrukh5639@gmail.com', 'shah faisal', 2147483647, 'master', '1', 'adwefwef'),
(6, 'shafak', 'shafak@gmail.com', 'xrdtfyguhinjmko', 2147483647, 'asmchavsjh', 'kscbakjb', 'xbasihasbh'),
(7, 'mala', 'mala@gmail.com', 'guhikl;kl', 2147483647, 'master', '2 years', 'dev'),
(10, 'Hamza', 'xuctfghjkkl.com', 'yygscjc', 2147483647, 'xxhcfas\r\n', 'djcgshcgash', 'cdsc'),
(11, 'sanwal', 'dgasudg.com', 'ssnnbashg', 0, 'dhdjjhdghjj', 'asda', 'asnbdasjk'),
(13, 'khalda', 'hggklk;lk.com', 'ajscgsajh', 0, 'acascasc', 'scsc', 'scsc'),
(18, 'hunanin', 'khan.gamail.com', 'shah kareem', 2147483647, 'mmxcnbabsnbcv', 'ssvnb', 'snbsbv'),
(20, 'w`', 'scz.com', 'sd', 2147483647, 'dfkgg', 'fdghjj,m', 'dfgh'),
(35, 'Bushra farrukh', 'bushrafarrukh563@gmail.com', 'shah faisal', 2147483647, '5th fail', '1 years', 'no skills'),
(40, 'Bushra farrukh', 'bushrafarrukh3@gmail.com', 'shah faisal', 2147483647, '5th fail', '1 year', 'no'),
(42, 'Bushra farrukh', 'bhusra@gmail.com', 'shah faisal', 2147483647, '5th fail', '5 year', 'no'),
(44, 'Bushra farrukh', 'bush@gmail.com', 'shah faisal', 2147483647, '2', 'dcwds', 'gvrw'),
(46, 'Bushra farrukh', 'bushra@gmail.com', 'shah faisal', 2147483647, '5th failed', '5 years', 'no skills'),
(48, 'Bushra farrukh', 'bushra1@gmail.com', 'shah faisal', 2147483647, '5th failed', '5 years', 'no skills'),
(50, 'Bushra farrukh', 'bushra1233@gmail.com', 'shah faisal', 2147483647, '5th failed', '5 years', 'no skills'),
(52, 'Bushra farrukh', 'b@gmail.com', 'shah faisal', 2147483647, '5th failed', '5years', 'no sklls'),
(54, 'umme hani', 'bus@mail.com', '2akjak', 2147483647, 'mxshhgxhsa', 'saxas', 'ssaxs'),
(56, 'hani', 'aksdhkjd@gmail.com', 'sdchskdj', 300, 'ssdade', 'ewffeff', 'ddedwe'),
(57, 'roman', 'sxkjs@gmail.com', 'asc', 2147483647, 'ssdadeasaskjc', 'ewffeffsddkjj', 'ddedwe'),
(59, 'laiba', 'cnbc@gmail.com', 'cnsdkjch', 35467878, 'ssdadeasaskjc', 'ewffeffsddkjj', 'ddedwe'),
(61, 'asbhjsq', 'jkqwhjhqgw@gamail.com', 'wkwjswhajsg', 2147483647, 'abjagshhjwasg', 'hskjh', 'sdjgsd\r\nsccnnshj\r\n[alxhkjs\r\ndcvhj\r\n'),
(62, 'Abdul-wahab-Amir', 'a-w-amir@gmail.com', 'korangi karachi sindh', 2147483647, 'masters in computer science\r\nbachlr in computer science\r\nHdse\r\n', '1 year in Aptech \r\n! year abc collage\r\n1 year fghj ', 'Front -End\r\nBack- End\r\nexpert into ABC\r\nexpert in fggh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
