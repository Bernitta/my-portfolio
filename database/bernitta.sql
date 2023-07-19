-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 08:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bernitta`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `aboutme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`aboutme`) VALUES
('            <h2 style=\"margin-left: 0px;\">Bernitta</h2>\r\n            <p style=\"font-family: Arial, Helvetica, sans-serif;\">\r\n             I am Bernitta, the last born in the family of five I pursued\r\n             my secondary school at Bakhita Educational Complex. From there \r\n             I did my advanced diploma at the University of Malawi(chancellor\r\n             college). Currently im furthering my studies at Mzuzu \r\n             University(MZUNI). I am a self-motivated, self-starter,\r\n             result-oriented, hard working with strong organizational  \r\n             interpersonal skills; Skilled at leading, creativity and \r\n             demonstrated capacity to work with minimum supervision\r\n             My passion in life is to bring change to our nation by\r\n             introducing e-commerce into many businesses since in the                  time to come online businesses will be all over the world.\r\n             Through my study at College I have developed practical \r\n             experience and understanding of creating databases.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `welcome_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`welcome_note`) VALUES
(' <p>There are many kinds of food but here I will talk about deserts.\r\n            A dessert is usually a sweet course or dish served at the end of a meal.</p>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
