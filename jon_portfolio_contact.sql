-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2023 at 04:03 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: jon_portfolio_db
--

-- --------------------------------------------------------

--
-- Table structure for table contacts
--

CREATE TABLE contacts (
  id int(6) UNSIGNED NOT NULL,
  first_name varchar(100) NOT NULL,
  last_name varchar(125) NOT NULL,
  email varchar(260) NOT NULL,
  comments varchar(2500) NOT NULL,
  date_received timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table contacts
--

INSERT INTO contacts (id, first_name, last_name, email, comments, date_received) VALUES
(1, 'jon', 'yun', 'netyun@me.com', 'this is a test comment', '2023-12-10 09:51:05'),
(2, 'Jong Woog', 'Yun', 'netyun@me.com', 'Hello, nice to meet you. Unfortunately, this is a just test contact.', '2023-12-10 15:20:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table contacts
--
ALTER TABLE contacts
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table contacts
--
ALTER TABLE contacts
  MODIFY id int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
