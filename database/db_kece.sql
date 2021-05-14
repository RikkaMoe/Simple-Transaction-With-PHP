-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 02:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kece`
--

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `id_nasabah` varchar(50) NOT NULL,
  `nama_nasabah` varchar(200) NOT NULL,
  `alamat_nasabah` varchar(100) NOT NULL,
  `tlp_nasabah` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `nama_nasabah`, `alamat_nasabah`, `tlp_nasabah`) VALUES
('B746F', 'Rikka', 'Denpasar', 81),
('jPXjr', 'Bayu', 'Dalung', 85),
('RAIFb', 'Miyaka', 'Renon', 87);

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` varchar(50) NOT NULL,
  `id_nasabah` varchar(200) NOT NULL,
  `saldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `id_nasabah`, `saldo`) VALUES
('3ieJBCMBC2', 'jPXjr', 12400),
('8PnG86k9Lm', 'B746F', 1000),
('lI9v9kp3gp', 'RAIFb', 9999999);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_rekening` varchar(100) NOT NULL,
  `setor` int(150) NOT NULL,
  `tarik` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `id_rekening`, `setor`, `tarik`) VALUES
(14, '2020-01-30 04:26:45', '3ieJBCMBC2', 10000, 0),
(17, '2020-05-30 04:28:32', '3ieJBCMBC2', 2000, 0),
(18, '2020-05-30 04:28:56', '3ieJBCMBC2', 0, 100),
(19, '2020-05-30 09:33:22', '3ieJBCMBC2', 500, 0),
(20, '2020-01-30 04:38:08', '8PnG86k9Lm', 500, 0),
(22, '2020-04-30 09:39:26', '8PnG86k9Lm', 500, 0),
(24, '2020-05-30 01:12:22', 'lI9v9kp3gp', 10000000, 0),
(25, '2020-05-31 01:56:25', 'lI9v9kp3gp', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
