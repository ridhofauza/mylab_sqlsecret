-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2024 at 02:21 AM
-- Server version: 10.6.4-MariaDB-log
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mylabsql_4b`
--

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `id` int(11) NOT NULL,
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`id`, `flag`) VALUES
(1, 'SHL{FLAG:202403022245_labsql4}');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_by`) VALUES
(1, 'First Note', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil magni repellendus sit totam sint modi fugiat sed praesentium eos quam quisquam quidem unde accusantium veniam, vitae illum! Esse, quasi asperiores. Aperiam nihil illum suscipit perspiciatis quod. Corporis reprehenderit sed labore, sequi soluta, repellendus harum, voluptates consectetur repellat dolore nulla. Reprehenderit, dolor incidunt veritatis numquam eum hic modi reiciendis ea magni.', 1),
(2, 'Second Note', 'Libero dolorem accusamus natus nisi quaerat illum velit hic, quis, optio suscipit tenetur, totam asperiores? Voluptas quisquam temporibus error, esse, nobis explicabo delectus earum, nulla doloribus magni eos rerum! Libero! Omnis accusamus dolore excepturi minus perferendis mollitia magnam? Soluta, alias ratione? Possimus eveniet eos cupiditate adipisci quia neque! Officia magni voluptatum assumenda nesciunt aliquid delectus fugiat in consequuntur exercitationem quidem.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flag`
--
ALTER TABLE `flag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
