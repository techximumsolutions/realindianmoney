-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 11:46 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rim_wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `rim_units`
--

CREATE TABLE `rim_units` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(100) NOT NULL,
  `unit_value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rim_units`
--

INSERT INTO `rim_units` (`id`, `unit_name`, `unit_value`) VALUES
(1, 'Acre', 0.00002295684113865932),
(2, 'Ayer', 0.0009290312990644654),
(3, 'Bigha', 0.00006944444444444444),
(4, 'Chotak', 0.022222222222222223),
(5, 'Decimal', 0.002295684113865932),
(6, 'Dhul', 0.583333333331875),
(7, 'Dondho', 0.08333333333333333),
(8, 'Gonda', 0.0011574074074074073),
(9, 'Hectare', 0.000009290312990644655),
(10, 'Kak', 0.018518518518518517),
(11, 'Kani', 0.00005787037037037037),
(12, 'Katha', 0.001388888888888889),
(13, 'Kontho', 0.013888888888888888),
(14, 'Kora', 0.004629629629629629),
(15, 'Kranti', 0.013774104683195593),
(16, 'Ojutangsho', 0.2295684113865932),
(17, 'Renu', 17.500000000874998),
(18, 'Shotangsho', 0.002295684113865932),
(19, 'Square Chain', 0.0002295684113865932),
(20, 'Square Feet', 1),
(21, 'Square Hat', 0.4444444444444444),
(22, 'Square Inchi', 144.00009216005898),
(23, 'Square Link', 2.2956841138659323),
(24, 'Square Meter', 0.09290312990644656),
(25, 'Square Yard', 0.1111111111111111),
(26, 'Til', 0.27548209366391185);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rim_units`
--
ALTER TABLE `rim_units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rim_units`
--
ALTER TABLE `rim_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
