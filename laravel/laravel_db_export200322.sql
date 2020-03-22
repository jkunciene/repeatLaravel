-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2020 m. Kov 22 d. 10:44
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `lessons`
--

INSERT INTO `lessons` (`id`, `theme`, `description`, `file`, `level`, `created_at`, `updated_at`) VALUES
(1, 'VR', 'Susipažinsime su virtualia realybe;\r\nSuvoksime jos praktinį pritaikymą, galimybes;\r\nAtsakysime į klausimą, kuo skiriasi virtuali ir papildyta realybė? \r\nIšbandysime CoSpaces VR kūrimo aplinką;\r\nSavo projektus žiūrėsime per VR akinius.\r\n', 'https://docs.google.com/presentation/d/1dDWseQqxezZR17KPATf0FSYJi_HOJ_SAutxMxGwLKO8/edit#slide=id.g7ecfa8346e_0_2', 1, '2020-03-20 00:00:00', '2020-03-20 00:00:00'),
(2, 'Laravel', 'PHP kalbos framework\'as. Pagal Google Trends analizę, Laravel yra populiariausias framework’as ir tokiu išliks visus šiuos metus. Laravel framwork’ą naudoti yra paprasta, jis yra itin funkcionalus, o naudotojų ir pagalbos bendruomenė nuolat didėja, todėl populiariausiųjų sąrašuose jis yra jau nuo 2015 metų. Prieš pasirodant Laravel 5.5 versijai itin išaugo Google paieškų, susijusių su šiuo framework’u, skaičius.\r\n\r\nVienas iš didžiausių Laravel privalumų yra tas, kad šis framework’as turi sąsajų su daugybe kitų specifinių programų: turi komandinės eilutės pagalbininką Artisan, darbui su duomenų bazėmis turi gerą ORM Eloquent, taip pat palaiko Blade Templating Engine, Middleware, PHPUnit, RESTful ir yra vienas pirmųjų leidžiantis abstraktų persiuntimą. Būtent dėl šių plataus pobūdžio funkcionalumų, daugybė įmonių savo verslo plėtrai ėmė naudoti būtent Laravel paslaugas.\r\n\r\nKitas svarbus Laravel privalumas yra tai, kaip šis framework’as palaiko NoSQL struktūras, pavyzdžiui, MongoDB ir kt. Bet kokiam programuotojui pradėti naudoti Laravel yra labai paprasta ir lengva, nes šio framework’o pagrindai yra aiškiai aprašyti. Jeigu esate programuotojas, norintis gilinti į PHP kalbą, tuomet jums būtų naudinga tapti PHP Laravel specialistu.', 'https://docs.google.com/presentation/d/1R17NPzXFWDbKIpKSniZKhECnDKyc2pbXdb0rAvgAtvw/edit#slide=id.g7f459d0085_0_0', 4, '2020-03-20 17:30:46', '2020-03-20 00:00:00'),
(3, 'Testas kovo 22d sekamadienis', 'Pamoka skirta pasikartoti laravel pagrindus, myliu duombazes, tai grožis, harmonija, mokslas, atradimai, įkvėpimai', 'https://qrgo.page.link/MeHE7', 2, '2020-03-22 10:42:59', '2020-03-22 10:42:59');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `levels`
--

INSERT INTO `levels` (`id`, `name`, `about`, `created_at`, `updated_at`) VALUES
(1, 'pirmas', 'Vaikai nuo 6metų. Pirmi metai susipažinimo su programavimu. Moka skaityti.', NULL, NULL),
(2, 'Antras', 'Vaikai nuo 10 metų, arba antri metai programavimo. Turi pagrindus. Reikia priminti, akcentuoti girdėtas sąvokas.', '2020-03-22 00:00:00', '2020-03-22 00:00:00');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_18_102247_create_lessons_table', 1),
(5, '2020_03_20_061924_create_levels_table', 1);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jolita Kuncienė', 'j.kunciene@gmail.com', NULL, '$2y$10$tKSLZtOSeNjMsbXPQTLb/.pwLnvu6cQmuTX9YIEIktjdVyjxjFlTe', 'OFN3IYOMo5RsEZ6yR6MmG0LuvRubx8AGPO8R3JHhy48TWpFbfYgq6o7Nzlt8', '2020-03-20 08:38:21', '2020-03-20 08:38:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
