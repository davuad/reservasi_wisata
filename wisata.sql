-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2024 at 01:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id_destinasi` int NOT NULL,
  `nama_destinasi` varchar(150) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `deskripsi` text,
  `harga_tiket` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id_destinasi`, `nama_destinasi`, `lokasi`, `deskripsi`, `harga_tiket`) VALUES
(1, 'Pantai Indah', 'Bali', 'Pantai dengan pemandangan indah dan pasir putih', 50000.00),
(2, 'Gunung Sejuk', 'Bandung', 'Gunung dengan udara segar dan jalur pendakian menantang', 75000.00),
(3, 'Danau Biru', 'Sumatera Utara', 'Danau dengan air biru jernih yang menenangkan', 40000.00),
(4, 'Kebun Raya Asri', 'Bogor', 'Kebun raya dengan koleksi flora yang lengkap', 30000.00),
(5, 'Taman Mini', 'Jakarta', 'Taman wisata edukasi dengan budaya Indonesia', 45000.00);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int NOT NULL,
  `user_id` int NOT NULL,
  `destination_id` int NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `status_pembayaran` enum('Pending','Lunas','Dibatalkan') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `user_id`, `destination_id`, `tgl_reservasi`, `status_pembayaran`) VALUES
(1, 1, 1, '2024-11-25', 'Lunas'),
(2, 2, 3, '2024-11-26', 'Pending'),
(3, 3, 2, '2024-11-27', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama`, `email`, `nomor_telepon`) VALUES
(1, 'Andi', 'andi@example.com', '081234567890'),
(2, 'Budi', 'budi@example.com', '081234567891'),
(3, 'Citra', 'citra@example.com', '081234567892'),
(5, 'Eka', 'eka@example.com', '081234567894'),
(100, 'Davu Andrias', 'davu@gmail.com', '123456'),
(1001, 'Fatimah Azzahra', 'fatma@gmail.com', '089292929'),
(1002, 'Arfa Zauhari', 'arfa@gmail.com', '08929292');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id_destinasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id_destinasi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
