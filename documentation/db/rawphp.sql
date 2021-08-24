-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 10:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET latin1 NOT NULL,
  `email` varchar(24) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `document` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `dob`, `document`) VALUES
(1, 'Ashik Meher', '', '2021-08-21', ''),
(2, 'Ashik Meher', '', '2021-08-21', ''),
(3, 'Himu', '', '2021-08-21', ''),
(4, 'Himu Talukdar', '', '2021-08-21', ''),
(6, 'Array', '', '2021-08-21', ''),
(7, 'Array', '', '2021-08-21', ''),
(9, 'delhi01index', '', '2021-08-21', ''),
(10, 'delhi01index', '', '2021-08-21', ''),
(11, 'delhi sagol 02', '', '2021-08-21', ''),
(13, 'delhi01index12', '', '2021-08-21', ''),
(14, 'delhi sagol 0213', '', '2021-08-21', ''),
(16, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(17, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(18, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(19, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(20, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(21, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(22, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(23, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(24, 'Ashik Meher Mobin', '', '2021-08-21', ''),
(25, 'tyu kkk', '', '2021-08-21', ''),
(29, 'delhi1', '', '2021-08-21', ''),
(34, 'delhi', '', '2021-08-21', ''),
(35, 'delhi', 'billi@g.c', '2021-08-21', ''),
(37, 'ashik1', 'ashik1@gmail.com', '2021-08-21', ''),
(38, 'ashik2', 'ashik2@gmail.com', '2021-08-21', ''),
(39, 'aaa', 'abiy@ethiopiamail.com', '2021-08-21', ''),
(40, 'Ashik Meher Mobin', 'ashik1@gmail.com', '2021-08-21', ''),
(42, 'Ashik Meher Mobin', 'ashik1@gmail.com', '2021-08-21', ''),
(43, 'Ashik Meher Mobin334', 'ashikmeherpial@gmail.com', '2021-08-21', ''),
(44, 'Ashik Meher Mobin', 'ashikmeherpial@gmail.com', '2021-08-21', ''),
(45, 'khali', 'khaligwgwgw@gmail.com', '2021-08-21', ''),
(46, 'himu1', 'himu@gmail.com2', '2021-08-21', ''),
(47, 'misir ali', 'misirali@gmail.com2', '2021-08-21', ''),
(48, 'kutu mia', 'kuty@kmail.com', '2021-08-21', ''),
(49, 'himu145', 'himu@gmail.com2344', '2021-08-21', ''),
(50, 'Ashik Meher Mobin', 'ashikmeherpial@gmail.com', '2021-08-21', ''),
(51, 'Ashik Meher Mobin', 'ashik1@gmail.comwwww', '2021-08-21', ''),
(52, 'pokzzz6677', 'ok@amail.csspg', '2021-08-21', ''),
(53, 'kandy', 'ashikmeherpial@gmail.com', '2021-08-21', ''),
(55, 'Ashik Meher Mobin', 'ashik1@gmail.com', '2021-08-21', ''),
(56, 'Ashik Meher Mobin', 'ashik1@gmail.com', '2021-08-06', ''),
(57, 'Ashik Meher Mobin', 'ashik1@gmail.com', '2021-08-17', ''),
(58, 'ashikmeherpial@gmail.com', 'ashikmeherpial@gmail.com', '2021-08-25', ''),
(59, 'Ashik Meher Mobin', 'ashikmeherpial@gmail.com', '2021-08-26', ''),
(60, 'ashikmeherpialmtd@gmail.c', 'ashikmeherpialmtd@gmail.', '2021-08-02', 'D:/FTP/admin-login.png'),
(61, 'Ashik Meher Mobinssmtd2', 'ashikmeherpiamtd2l@gmail', '2021-08-27', 'D:/FTP/barcode-print.png'),
(62, 'ashikmeherpial@gmail.com', 'ashikmeherpial@gmail.com', '2021-08-10', 'uploads/generate-bar-code'),
(63, 'Ashik Meher Mobin', 'ashikmeherpial@gmail.com', '2021-08-16', 'uploads/user-account-mana'),
(64, 'ashikmeherpial@gmail.com', 'ashikmeherpial@gmail.com', '2021-08-10', '../uploads/generate-bar-c'),
(65, 'Ashik Meher Mobin', 'ashikmeherpial@gmail.com', '2021-08-11', '../uploads/user-account-m'),
(66, 'Ashik Meher Mobin', 'ashikmeherpial@gmail.com', '2021-08-16', 'file-view.png'),
(67, 'Ashik Meher Mobin', 'ashikmeherpial@gmail.com', '2021-08-20', 'barcode-print.png'),
(69, 'haji mohsin', 'ashikmeherpial@gmail.com', '2021-08-29', 'login.png1629791899'),
(70, 'ashikmeherpial@gmail.com', 'ashik1@gmail.com', '2021-08-03', 'login.png1629792078'),
(71, 'Ashik Meher Mobin', 'ashikmeherpial@gmail.com', '2021-08-22', 'user-account-management.png1629792078'),
(72, 'hk1', 'ashikmeherpial@gmail.com', '2021-08-20', '1629792380file-view.png'),
(73, 'hk28', 'ashikmeherpial@gmail.com', '2021-08-15', '1629792380Untitled.png'),
(74, 'delhi01index', 'f@v.com', '2021-08-04', '1629793228_barcode-print.png'),
(75, 'hyyuuu', 'ashikmeherpial@gmail.com', '2021-08-09', '1629793228_file-view.png'),
(76, 'alu', 'ashik1@gmail.com', '2021-08-20', '01629793430_login.png'),
(77, 'begun', 'ashikmeherpial@gmail.com', '2021-08-19', '11629793430_user-account-management.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
