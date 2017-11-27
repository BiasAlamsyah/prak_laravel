-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Nov 2017 pada 11.29
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_a`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zaky', 'zakyarifudin@gmail.com', 'Staff', '$2y$10$QRk5I9JomWtDAeyLQqkjfucS3s/nQ5KYydkM.G.Oul0w0.JA/f6/a', NULL, '2017-11-10 18:06:33', '2017-11-10 18:06:33'),
(4, 'Bias', 'bernadbear17@gmail.com', 'SU', '$2y$10$ICxi4rQw6xRjR662tQ6lT.CmsWuvhRGplNFCL/eLwdFTK18aDEDuG', '0vpBZfHoubYs6zTuPmXXncFEydsdQJyfykx7B1u6071qa8szeo3v8RZcpOmh', '2017-11-19 18:34:17', '2017-11-19 18:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_03_070400_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bernadbear17@yahoo.com', '$2y$10$Kcw951v7vycEULexd9SEY.lQWSUtanS7VKfhTknWES1TV9GTYo8yW', '2017-11-19 18:24:07'),
('bernadbear17@gmail.com', '$2y$10$UA/unBcJl8Zefr8QsphNQOerfEi36RTi64Mutv.i2i5pH/EDE7ZNm', '2017-11-19 18:27:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `name` varchar(255) NOT NULL,
  `reviews` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sinopsis` longtext NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `image`, `sinopsis`, `date`, `created_at`, `updated_at`) VALUES
(35, 'Thor Ragnarok', 'image_1511176877.jpg', 'Imprisoned on the other side of the universe, the mighty Thor finds himself in a deadly gladiatorial contest that pits him against the Hulk, his former ally and fellow Avenger. Thor''s quest for survival leads him in a race against time to prevent the all-powerful Hela from destroying his home world and the Asgardian civilization.', '2017-10-26', '2017-11-22 06:39:15', '2017-11-20 04:21:17'),
(36, 'Jumanji Welcome to the Jungle', 'image_1511177056.jpg', 'Four high school kids discover an old video game console and are drawn into the game''s jungle setting, literally becoming the adult avatars they chose. What they discover is that you don''t just play Jumanji - you must survive it. To beat the game and return to the real world, they''ll have to go on the most dangerous adventure of their lives, discover what Alan Parrish left 20 years ago, and change the way they think about themselves - or they''ll be stuck in the game forever.', '2017-12-20', '2017-11-22 06:39:48', '2017-11-20 04:24:16');

--
-- Trigger `uploads`
--
DELIMITER $$
CREATE TRIGGER `reviews` AFTER DELETE ON `uploads` FOR EACH ROW begin
delete from reviews where name=uploads.name;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zaky', 'zaky@gmail.com', '$2y$10$i6u2H7fvbHzoAPUhQMDHauIbYPUsaE3.cE3KmxYyTq/JUKz9BWyeS', 'gzNERCHsqLheiSnWi1ztp61aEojxwR6FZaG544FsqGO5vuCRP4FDjYiuLImy', '2017-11-03 00:40:39', '2017-11-03 00:40:39'),
(3, 'bias', 'bernadbear17@gmail.com', '$2y$10$if2zV6oMylmv4iKr1pqEuOAhbvXwfuozKXHQNXyWu6YwxVgv.VqJm', 'MM4NQvzNxaoLmb5wRkO11eU9S4aXuxTIL2OUUJdSHfEgvi0KWyLUUyuo1lrO', '2017-11-20 06:12:03', '2017-11-20 06:12:03'),
(4, 'hamdan', 'hamdanakbar173@gmail.com', '$2y$10$VNAU6vibKLmC5nnLtGpfl.2.3jMRH2qFXOy6hXrZxInxbDD.IvC2i', 'WirylcMbhFU3250oshmDfF3ktbB3iWvhLIyIRFtvUxCr07w2yA8dgZ6yx1Ia', '2017-11-20 18:50:09', '2017-11-20 18:50:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
