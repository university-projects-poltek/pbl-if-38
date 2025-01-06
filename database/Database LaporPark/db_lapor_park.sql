-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2025 pada 07.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapor_park`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_17_050410_create_reports_table', 1),
(6, '2024_12_21_074937_create_officers_table', 1),
(7, '2024_12_18_140520_create_petugas_table', 2),
(13, '2024_12_29_110757_create_reports_table', 3),
(14, '2024_12_30_050219_create_prioritized_results_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `officers`
--

CREATE TABLE `officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `officers`
--

INSERT INTO `officers` (`id`, `name`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'udin', 'udinganteng123@gmail.com', '081212451245', 'aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `office` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prioritized_results`
--

CREATE TABLE `prioritized_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_id` bigint(20) UNSIGNED NOT NULL,
  `topsis_score` float(8,2) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prioritized_results`
--

INSERT INTO `prioritized_results` (`id`, `report_id`, `topsis_score`, `priority`, `created_at`, `updated_at`) VALUES
(385, 313, 0.67, 'Urgent', NULL, NULL),
(386, 314, 0.76, 'Urgent', NULL, NULL),
(387, 315, 0.34, 'Tidak Urgent', NULL, NULL),
(388, 316, 0.60, 'Urgent', NULL, NULL),
(389, 317, 0.40, 'Tidak Urgent', NULL, NULL),
(390, 318, 0.60, 'Urgent', NULL, NULL),
(391, 319, 0.55, 'Urgent', NULL, NULL),
(392, 320, 0.47, 'Tidak Urgent', NULL, NULL),
(393, 321, 0.54, 'Urgent', NULL, NULL),
(394, 322, 0.39, 'Tidak Urgent', NULL, NULL),
(395, 323, 0.68, 'Urgent', NULL, NULL),
(396, 324, 0.60, 'Urgent', NULL, NULL),
(397, 325, 0.21, 'Tidak Urgent', NULL, NULL),
(398, 326, 0.48, 'Tidak Urgent', NULL, NULL),
(399, 327, 0.36, 'Tidak Urgent', NULL, NULL),
(400, 328, 0.48, 'Tidak Urgent', NULL, NULL),
(401, 329, 0.96, 'Sangat Urgent', NULL, NULL),
(402, 330, 0.34, 'Tidak Urgent', NULL, NULL),
(403, 331, 0.67, 'Urgent', NULL, NULL),
(404, 332, 1.00, 'Sangat Urgent', NULL, NULL),
(405, 333, 0.61, 'Urgent', NULL, NULL),
(406, 334, 0.81, 'Sangat Urgent', NULL, NULL),
(407, 335, 0.66, 'Urgent', NULL, NULL),
(408, 336, 0.61, 'Urgent', NULL, NULL),
(409, 337, 0.47, 'Tidak Urgent', NULL, NULL),
(410, 338, 0.80, 'Sangat Urgent', NULL, NULL),
(411, 339, 0.31, 'Tidak Urgent', NULL, NULL),
(412, 340, 0.79, 'Urgent', NULL, NULL),
(413, 341, 0.18, 'Tidak Urgent', NULL, NULL),
(414, 342, 0.64, 'Urgent', NULL, NULL),
(415, 343, 0.40, 'Tidak Urgent', NULL, NULL),
(416, 344, 0.21, 'Tidak Urgent', NULL, NULL),
(417, 345, 0.28, 'Tidak Urgent', NULL, NULL),
(418, 346, 0.33, 'Tidak Urgent', NULL, NULL),
(419, 347, 0.64, 'Urgent', NULL, NULL),
(420, 348, 0.71, 'Urgent', NULL, NULL),
(421, 349, 0.79, 'Urgent', NULL, NULL),
(422, 350, 0.63, 'Urgent', NULL, NULL),
(423, 351, 0.19, 'Tidak Urgent', NULL, NULL),
(424, 352, 0.62, 'Urgent', NULL, NULL),
(425, 353, 0.39, 'Tidak Urgent', NULL, NULL),
(426, 354, 0.39, 'Tidak Urgent', NULL, NULL),
(427, 355, 0.34, 'Tidak Urgent', NULL, NULL),
(428, 356, 0.34, 'Tidak Urgent', NULL, NULL),
(429, 357, 0.86, 'Sangat Urgent', NULL, NULL),
(430, 358, 0.47, 'Tidak Urgent', NULL, NULL),
(431, 359, 0.35, 'Tidak Urgent', NULL, NULL),
(432, 360, 0.83, 'Sangat Urgent', NULL, NULL),
(433, 361, 0.24, 'Tidak Urgent', NULL, NULL),
(434, 362, 0.64, 'Urgent', NULL, NULL),
(435, 363, 0.60, 'Urgent', NULL, NULL),
(436, 364, 0.53, 'Urgent', NULL, NULL),
(437, 365, 0.40, 'Tidak Urgent', NULL, NULL),
(438, 366, 0.64, 'Urgent', NULL, NULL),
(439, 367, 0.33, 'Tidak Urgent', NULL, NULL),
(440, 368, 0.65, 'Urgent', NULL, NULL),
(441, 369, 0.53, 'Urgent', NULL, NULL),
(442, 370, 0.29, 'Tidak Urgent', NULL, NULL),
(443, 371, 0.64, 'Urgent', NULL, NULL),
(444, 372, 0.24, 'Tidak Urgent', NULL, NULL),
(445, 373, 0.17, 'Tidak Urgent', NULL, NULL),
(446, 374, 0.47, 'Tidak Urgent', NULL, NULL),
(447, 375, 0.37, 'Tidak Urgent', NULL, NULL),
(448, 376, 0.36, 'Tidak Urgent', NULL, NULL),
(449, 377, 0.64, 'Urgent', NULL, NULL),
(450, 378, 0.32, 'Tidak Urgent', NULL, NULL),
(451, 379, 0.36, 'Tidak Urgent', NULL, NULL),
(452, 380, 0.24, 'Tidak Urgent', NULL, NULL),
(453, 381, 0.78, 'Urgent', NULL, NULL),
(454, 382, 0.53, 'Urgent', NULL, NULL),
(455, 383, 0.40, 'Tidak Urgent', NULL, NULL),
(456, 384, 0.76, 'Urgent', NULL, NULL),
(457, 385, 0.90, 'Sangat Urgent', NULL, NULL),
(458, 386, 0.45, 'Tidak Urgent', NULL, NULL),
(459, 387, 0.61, 'Urgent', NULL, NULL),
(460, 388, 0.83, 'Sangat Urgent', NULL, NULL),
(461, 389, 0.04, 'Tidak Urgent', NULL, NULL),
(462, 390, 0.38, 'Tidak Urgent', NULL, NULL),
(463, 391, 0.38, 'Tidak Urgent', NULL, NULL),
(464, 392, 0.54, 'Urgent', NULL, NULL),
(465, 393, 0.80, 'Sangat Urgent', NULL, NULL),
(466, 394, 0.62, 'Urgent', NULL, NULL),
(467, 395, 0.04, 'Tidak Urgent', NULL, NULL),
(468, 396, 0.24, 'Tidak Urgent', NULL, NULL),
(469, 397, 0.12, 'Tidak Urgent', NULL, NULL),
(470, 398, 0.80, 'Sangat Urgent', NULL, NULL),
(471, 399, 0.46, 'Tidak Urgent', NULL, NULL),
(472, 400, 0.68, 'Urgent', NULL, NULL),
(474, 402, 0.54, 'Urgent', NULL, NULL),
(475, 403, 0.80, 'Sangat Urgent', NULL, NULL),
(477, 405, 0.72, 'Urgent', NULL, NULL),
(478, 406, 0.68, 'Urgent', NULL, NULL),
(479, 407, 0.21, 'Tidak Urgent', NULL, NULL),
(480, 408, 0.04, 'Tidak Urgent', NULL, NULL),
(481, 409, 0.33, 'Tidak Urgent', NULL, NULL),
(482, 410, 0.32, 'Tidak Urgent', NULL, NULL),
(483, 411, 0.38, 'Tidak Urgent', NULL, NULL),
(484, 412, 0.67, 'Urgent', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `impact` text NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `weather` varchar(255) NOT NULL,
  `report_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reports`
--

INSERT INTO `reports` (`id`, `photo`, `location`, `description`, `impact`, `vehicle_type`, `area`, `weather`, `report_date`, `status`, `created_at`, `updated_at`) VALUES
(313, 'foto1.jpg', 'Batam', 'Laporan kejadian di Bandung', 'Tinggi', 'Motor', 'Komersial', 'Hujan', '2023-10-01', 'Diterima', NULL, NULL),
(314, 'foto3.jpg', 'Surabaya', 'Laporan kejadian di Batam', 'Kritis', 'Motor', 'Industri', 'Cerah', '2023-10-02', 'Diterima', NULL, NULL),
(315, 'foto3.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Rendah', 'Truk', 'Komersial', 'Cerah', '2023-10-03', 'Diterima', NULL, NULL),
(316, 'foto3.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Tinggi', 'Motor', 'Publik', 'Hujan', '2023-10-04', 'Diterima', NULL, NULL),
(317, 'foto2.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Sedang', 'Truk', 'Industri', 'Cerah', '2023-10-05', 'Diterima', NULL, NULL),
(318, 'foto2.jpg', 'Surabaya', 'Laporan kejadian di Jakarta', 'Tinggi', 'Motor', 'Industri', 'Cerah', '2023-10-06', 'Diterima', NULL, NULL),
(319, 'foto3.jpg', 'Bandung', 'Laporan kejadian di Batam', 'Tinggi', 'Truk', 'Perumahan', 'Badai', '2023-10-07', 'Diterima', NULL, NULL),
(320, 'foto4.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Sedang', 'Bus', 'Komersial', 'Badai', '2023-10-08', 'Diterima', NULL, NULL),
(321, 'foto4.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Tinggi', 'Bus', 'Perumahan', 'Badai', '2023-10-09', 'Diterima', NULL, NULL),
(322, 'foto3.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Sedang', 'Truk', 'Industri', 'Berawan', '2023-10-10', 'Diterima', NULL, NULL),
(323, 'foto4.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Kritis', 'Truk', 'Perumahan', 'Cerah', '2023-10-11', 'Diterima', NULL, NULL),
(324, 'foto2.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Tinggi', 'Motor', 'Industri', 'Berawan', '2023-10-12', 'Diterima', NULL, NULL),
(325, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Surabaya', 'Rendah', 'Bus', 'Publik', 'Hujan', '2023-10-13', 'Diterima', NULL, NULL),
(326, 'foto3.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Sedang', 'Truk', 'Komersial', 'Cerah', '2023-10-14', 'Diterima', NULL, NULL),
(327, 'foto1.jpg', 'Surabaya', 'Laporan kejadian di Surabaya', 'Sedang', 'Motor', 'Industri', 'Cerah', '2023-10-15', 'Diterima', NULL, NULL),
(328, 'foto3.jpg', 'Surabaya', 'Laporan kejadian di Bandung', 'Sedang', 'Truk', 'Komersial', 'Cerah', '2023-10-16', 'Diterima', NULL, NULL),
(329, 'foto3.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Kritis', 'Truk', 'Komersial', 'Hujan', '2023-10-17', 'Diterima', NULL, NULL),
(330, 'foto2.jpg', 'Bandung', 'Laporan kejadian di Surabaya', 'Rendah', 'Truk', 'Komersial', 'Berawan', '2023-10-18', 'Diterima', NULL, NULL),
(331, 'foto3.jpg', 'Surabaya', 'Laporan kejadian di Surabaya', 'Kritis', 'Mobil', 'Perumahan', 'Cerah', '2023-10-19', 'Diterima', NULL, NULL),
(332, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Surabaya', 'Kritis', 'Truk', 'Komersial', 'Badai', '2023-10-20', 'Diterima', NULL, NULL),
(333, 'foto3.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Tinggi', 'Mobil', 'Industri', 'Berawan', '2023-10-21', 'Diterima', NULL, NULL),
(334, 'foto2.jpg', 'Batam', 'Laporan kejadian di Surabaya', 'Kritis', 'Truk', 'Industri', 'Cerah', '2023-10-22', 'Diterima', NULL, NULL),
(335, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Batam', 'Kritis', 'Motor', 'Perumahan', 'Hujan', '2023-10-23', 'Diterima', NULL, NULL),
(336, 'foto4.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Tinggi', 'Mobil', 'Publik', 'Berawan', '2023-10-24', 'Diterima', NULL, NULL),
(337, 'foto3.jpg', 'Batam', 'Laporan kejadian di Batam', 'Sedang', 'Bus', 'Komersial', 'Hujan', '2023-10-25', 'Diterima', NULL, NULL),
(338, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Kritis', 'Bus', 'Industri', 'Cerah', '2023-10-26', 'Diterima', NULL, NULL),
(339, 'foto4.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Rendah', 'Motor', 'Komersial', 'Berawan', '2023-10-27', 'Diterima', NULL, NULL),
(340, 'foto3.jpg', 'Batam', 'Laporan kejadian di Surabaya', 'Kritis', 'Mobil', 'Industri', 'Cerah', '2023-10-28', 'Diterima', NULL, NULL),
(341, 'foto4.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Rendah', 'Motor', 'Publik', 'Berawan', '2023-10-29', 'Diterima', NULL, NULL),
(342, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Tinggi', 'Bus', 'Industri', 'Badai', '2023-10-30', 'Diterima', NULL, NULL),
(343, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Sedang', 'Truk', 'Industri', 'Cerah', '2023-10-31', 'Diterima', NULL, NULL),
(344, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Surabaya', 'Rendah', 'Bus', 'Industri', 'Hujan', '2023-11-01', 'Diterima', NULL, NULL),
(345, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Sedang', 'Motor', 'Perumahan', 'Berawan', '2023-11-02', 'Diterima', NULL, NULL),
(346, 'foto2.jpg', 'Surabaya', 'Laporan kejadian di Jakarta', 'Rendah', 'Bus', 'Komersial', 'Hujan', '2023-11-03', 'Diterima', NULL, NULL),
(347, 'foto3.jpg', 'Batam', 'Laporan kejadian di Bandung', 'Tinggi', 'Truk', 'Industri', 'Berawan', '2023-11-04', 'Diterima', NULL, NULL),
(348, 'foto4.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Tinggi', 'Bus', 'Komersial', 'Hujan', '2023-11-05', 'Diterima', NULL, NULL),
(349, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Kritis', 'Mobil', 'Industri', 'Badai', '2023-11-06', 'Diterima', NULL, NULL),
(350, 'foto2.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Tinggi', 'Bus', 'Publik', 'Berawan', '2023-11-07', 'Diterima', NULL, NULL),
(351, 'foto2.jpg', 'Bandung', 'Laporan kejadian di Surabaya', 'Rendah', 'Mobil', 'Publik', 'Berawan', '2023-11-08', 'Diterima', NULL, NULL),
(352, 'foto4.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Tinggi', 'Mobil', 'Industri', 'Badai', '2023-11-09', 'Diterima', NULL, NULL),
(353, 'foto3.jpg', 'Surabaya', 'Laporan kejadian di Batam', 'Sedang', 'Bus', 'Industri', 'Badai', '2023-11-10', 'Diterima', NULL, NULL),
(354, 'foto2.jpg', 'Batam', 'Laporan kejadian di Surabaya', 'Sedang', 'Truk', 'Publik', 'Berawan', '2023-11-11', 'Diterima', NULL, NULL),
(355, 'foto1.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Rendah', 'Truk', 'Komersial', 'Berawan', '2023-11-12', 'Diterima', NULL, NULL),
(356, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Rendah', 'Truk', 'Komersial', 'Hujan', '2023-11-13', 'Diterima', NULL, NULL),
(357, 'foto4.jpg', 'Batam', 'Laporan kejadian di Bandung', 'Kritis', 'Mobil', 'Komersial', 'Berawan', '2023-11-14', 'Diterima', NULL, NULL),
(358, 'foto3.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Sedang', 'Bus', 'Komersial', 'Hujan', '2023-11-15', 'Diterima', NULL, NULL),
(359, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Sedang', 'Motor', 'Publik', 'Berawan', '2023-11-16', 'Diterima', NULL, NULL),
(360, 'foto2.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Kritis', 'Motor', 'Komersial', 'Hujan', '2023-11-17', 'Diterima', NULL, NULL),
(361, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Rendah', 'Truk', 'Publik', 'Berawan', '2023-11-18', 'Diterima', NULL, NULL),
(362, 'foto1.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Tinggi', 'Truk', 'Industri', 'Berawan', '2023-11-19', 'Diterima', NULL, NULL),
(363, 'foto2.jpg', 'Surabaya', 'Laporan kejadian di Batam', 'Tinggi', 'Motor', 'Publik', 'Cerah', '2023-11-20', 'Diterima', NULL, NULL),
(364, 'foto4.jpg', 'Jakarta', 'Laporan kejadian di Surabaya', 'Tinggi', 'Mobil', 'Perumahan', 'Hujan', '2023-11-21', 'Diterima', NULL, NULL),
(365, 'foto3.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Sedang', 'Truk', 'Publik', 'Badai', '2023-11-22', 'Diterima', NULL, NULL),
(366, 'foto4.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Tinggi', 'Bus', 'Industri', 'Badai', '2023-11-23', 'Diterima', NULL, NULL),
(367, 'foto2.jpg', 'Batam', 'Laporan kejadian di Batam', 'Rendah', 'Mobil', 'Komersial', 'Badai', '2023-11-24', 'Diterima', NULL, NULL),
(368, 'foto2.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Tinggi', 'Truk', 'Industri', 'Badai', '2023-11-25', 'Diterima', NULL, NULL),
(369, 'foto2.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Tinggi', 'Mobil', 'Perumahan', 'Cerah', '2023-11-26', 'Diterima', NULL, NULL),
(370, 'foto4.jpg', 'Surabaya', 'Laporan kejadian di Bandung', 'Sedang', 'Motor', 'Perumahan', 'Badai', '2023-11-27', 'Diterima', NULL, NULL),
(371, 'foto2.jpg', 'Batam', 'Laporan kejadian di Batam', 'Tinggi', 'Truk', 'Industri', 'Cerah', '2023-11-28', 'Diterima', NULL, NULL),
(372, 'foto4.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Rendah', 'Truk', 'Publik', 'Hujan', '2023-11-29', 'Diterima', NULL, NULL),
(373, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Rendah', 'Truk', 'Perumahan', 'Hujan', '2023-11-30', 'Diterima', NULL, NULL),
(374, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Batam', 'Sedang', 'Bus', 'Komersial', 'Hujan', '2023-12-01', 'Diterima', NULL, NULL),
(375, 'foto3.jpg', 'Surabaya', 'Laporan kejadian di Surabaya', 'Sedang', 'Mobil', 'Publik', 'Hujan', '2023-12-02', 'Diterima', NULL, NULL),
(376, 'foto4.jpg', 'Batam', 'Laporan kejadian di Bandung', 'Sedang', 'Mobil', 'Publik', 'Berawan', '2023-12-03', 'Diterima', NULL, NULL),
(377, 'foto1.jpg', 'Batam', 'Laporan kejadian di Surabaya', 'Tinggi', 'Truk', 'Publik', 'Hujan', '2023-12-04', 'Diterima', NULL, NULL),
(378, 'foto2.jpg', 'Batam', 'Laporan kejadian di Surabaya', 'Rendah', 'Motor', 'Komersial', 'Hujan', '2023-12-05', 'Diterima', NULL, NULL),
(379, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Sedang', 'Mobil', 'Publik', 'Berawan', '2023-12-06', 'Diterima', NULL, NULL),
(380, 'foto3.jpg', 'Surabaya', 'Laporan kejadian di Jakarta', 'Rendah', 'Truk', 'Industri', 'Berawan', '2023-12-07', 'Diterima', NULL, NULL),
(381, 'foto4.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Kritis', 'Mobil', 'Publik', 'Berawan', '2023-12-08', 'Diterima', NULL, NULL),
(382, 'foto2.jpg', 'Surabaya', 'Laporan kejadian di Bandung', 'Tinggi', 'Mobil', 'Perumahan', 'Hujan', '2023-12-09', 'Diterima', NULL, NULL),
(383, 'foto2.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Sedang', 'Truk', 'Industri', 'Cerah', '2023-12-10', 'Diterima', NULL, NULL),
(384, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Surabaya', 'Kritis', 'Motor', 'Industri', 'Cerah', '2023-12-11', 'Diterima', NULL, NULL),
(385, 'foto4.jpg', 'Surabaya', 'Laporan kejadian di Jakarta', 'Kritis', 'Bus', 'Komersial', 'Berawan', '2023-12-12', 'Diterima', NULL, NULL),
(386, 'foto1.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Sedang', 'Motor', 'Komersial', 'Cerah', '2023-12-13', 'Diterima', NULL, NULL),
(387, 'foto4.jpg', 'Surabaya', 'Laporan kejadian di Bandung', 'Tinggi', 'Motor', 'Industri', 'Badai', '2023-12-14', 'Diterima', NULL, NULL),
(388, 'foto1.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Kritis', 'Motor', 'Komersial', 'Cerah', '2023-12-15', 'Diterima', NULL, NULL),
(389, 'foto1.jpg', 'Surabaya', 'Laporan kejadian di Batam', 'Rendah', 'Motor', 'Perumahan', 'Hujan', '2023-12-16', 'Diterima', NULL, NULL),
(390, 'foto3.jpg', 'Surabaya', 'Laporan kejadian di Jakarta', 'Sedang', 'Bus', 'Industri', 'Berawan', '2023-12-17', 'Diterima', NULL, NULL),
(391, 'foto3.jpg', 'Bandung', 'Laporan kejadian di Surabaya', 'Sedang', 'Bus', 'Publik', 'Cerah', '2023-12-18', 'Diterima', NULL, NULL),
(392, 'foto2.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Tinggi', 'Bus', 'Perumahan', 'Cerah', '2023-12-19', 'Diterima', NULL, NULL),
(393, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Bandung', 'Kritis', 'Bus', 'Industri', 'Hujan', '2023-12-20', 'Diterima', NULL, NULL),
(394, 'foto1.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Tinggi', 'Mobil', 'Industri', 'Badai', '2023-12-21', 'Diterima', NULL, NULL),
(395, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Rendah', 'Motor', 'Perumahan', 'Hujan', '2023-12-22', 'Diterima', NULL, NULL),
(396, 'foto1.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Rendah', 'Truk', 'Industri', 'Hujan', '2023-12-23', 'Diterima', NULL, NULL),
(397, 'foto4.jpg', 'Batam', 'Laporan kejadian di Surabaya', 'Rendah', 'Bus', 'Perumahan', 'Berawan', '2023-12-24', 'Diterima', NULL, NULL),
(398, 'foto2.jpg', 'Surabaya', 'Laporan kejadian di Bandung', 'Kritis', 'Bus', 'Industri', 'Cerah', '2023-12-25', 'Diterima', NULL, NULL),
(399, 'foto2.jpg', 'Jakarta', 'Laporan kejadian di Jakarta', 'Sedang', 'Mobil', 'Komersial', 'Badai', '2023-12-26', 'Diterima', NULL, NULL),
(400, 'foto3.jpg', 'Jakarta', 'Laporan kejadian di Surabaya', 'Kritis', 'Truk', 'Perumahan', 'Berawan', '2023-12-27', 'Diterima', NULL, NULL),
(401, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Sedang', 'Bus', 'Industri', 'Hujan', '2023-12-28', 'Diproses', NULL, '2025-01-03 00:40:13'),
(402, 'foto3.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Tinggi', 'Bus', 'Perumahan', 'Cerah', '2023-12-29', 'Diterima', NULL, NULL),
(403, 'foto3.jpg', 'Batam', 'Laporan kejadian di Bandung', 'Kritis', 'Bus', 'Publik', 'Hujan', '2023-12-30', 'Diterima', NULL, NULL),
(404, 'foto4.jpg', 'Surabaya', 'Laporan kejadian di Surabaya', 'Tinggi', 'Motor', 'Perumahan', 'Berawan', '2023-12-31', 'Diproses', NULL, '2025-01-03 06:30:14'),
(405, 'foto1.jpg', 'Bandung', 'Laporan kejadian di Batam', 'Tinggi', 'Truk', 'Komersial', 'Cerah', '2024-01-01', 'Diterima', NULL, NULL),
(406, 'foto2.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Kritis', 'Truk', 'Perumahan', 'Hujan', '2024-01-02', 'Diterima', NULL, NULL),
(407, 'foto3.jpg', 'Bandung', 'Laporan kejadian di Jakarta', 'Rendah', 'Bus', 'Industri', 'Berawan', '2024-01-03', 'Diterima', NULL, NULL),
(408, 'foto1.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Rendah', 'Motor', 'Perumahan', 'Cerah', '2024-01-04', 'Diterima', NULL, NULL),
(409, 'foto2.jpg', 'Batam', 'Laporan kejadian di Jakarta', 'Sedang', 'Truk', 'Perumahan', 'Hujan', '2024-01-05', 'Diterima', NULL, NULL),
(410, 'foto2.jpg', 'Jakarta', 'Laporan kejadian di Batam', 'Sedang', 'Bus', 'Perumahan', 'Badai', '2024-01-06', 'Diterima', NULL, NULL),
(411, 'foto2.jpg', 'Batam', 'Laporan kejadian di Bandung', 'Sedang', 'Bus', 'Industri', 'Berawan', '2024-01-07', 'Diterima', NULL, NULL),
(412, 'foto4.jpg', 'Bandung', 'Laporan kejadian di Bandung', 'Kritis', 'Mobil', 'Perumahan', 'Cerah', '2024-01-08', 'Diterima', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','officer') NOT NULL DEFAULT 'officer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin', 'admin@example.com', NULL, '$2y$12$6ntjeLT0hHrIv16xFPNXAuZVN8K6wQ67n7Q28LE.iy78RU1pwhQJC', 'admin', NULL, '2024-12-29 04:14:11', '2024-12-29 04:14:11'),
(2, 'Officer User', 'officer', 'officer@example.com', NULL, '$2y$12$sPaF22EQVAikHnvgpr.6cOc4.1NzNXJ6BWrvtWYVO71P/v0s7vZty', 'officer', NULL, '2024-12-29 04:14:11', '2024-12-29 04:14:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `officers_email_unique` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `petugas_email_unique` (`email`);

--
-- Indeks untuk tabel `prioritized_results`
--
ALTER TABLE `prioritized_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prioritized_results_report_id_foreign` (`report_id`);

--
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `officers`
--
ALTER TABLE `officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prioritized_results`
--
ALTER TABLE `prioritized_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT untuk tabel `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `prioritized_results`
--
ALTER TABLE `prioritized_results`
  ADD CONSTRAINT `prioritized_results_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
