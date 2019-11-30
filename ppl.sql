-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 03:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bayu Pratama', 'bpratama148@gmail.com', NULL, '12345', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosas`
--

CREATE TABLE `diagnosas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `value` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosas`
--

INSERT INTO `diagnosas` (`id`, `nama`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Ikan Anda Terkena Penyakit \"White Spot\"', '87', '2019-11-27 11:11:31', '2019-11-27 04:11:31'),
(2, 'Ikan Anda Terkena Penyakit \"Cloudy Eyes\"', '100', '2019-11-27 11:14:41', '2019-11-27 04:14:41'),
(3, 'Ikan Anda Terkena Penyakit \"Dropsy\"', '108', '2019-11-27 11:16:58', '2019-11-27 04:16:58'),
(5, 'Ikan Anda Terkena Penyakit \"Pembusukan Sirip dan Ekor\"', '80', '2019-11-27 11:22:38', '2019-11-27 04:22:38'),
(6, 'Ikan Anda Terkena Penyakit \"KHV\"', '96', '2019-11-27 11:24:51', '2019-11-27 04:24:51'),
(7, 'Ikan Anda Terkena Penyakit \"Chilodinellasis\"', '88', '2019-11-27 11:26:49', '2019-11-27 04:26:49'),
(8, 'Ikan Anda Terkena Penyakit \"Chilodinellasis\"', '92', '2019-11-27 11:28:27', '2019-11-27 04:28:27'),
(9, 'Ikan Anda Terkena Penyakit \"Kutu Jangkar\"', '109', '2019-11-27 11:31:36', '2019-11-27 04:31:36'),
(10, 'Ikan Anda Terkena Penyakit \"Dropsy\"', '81', '2019-11-27 11:34:04', '2019-11-27 04:34:04'),
(11, 'Ikan Anda Terkena Penyakit \"KHV\"', '103', '2019-11-27 11:36:25', '2019-11-27 04:36:25'),
(12, 'Ikan Anda Terkena Penyakit \"Cloudy Eyes\"', '97', '2019-11-27 11:38:13', '2019-11-27 04:38:13'),
(13, 'Ikan Anda Terkena Penyakit \"Pembusukan Sirip dan Ekor\"', '112', '2019-11-27 11:41:11', '2019-11-27 04:41:11'),
(14, 'Ikan Anda Terkena Penyakit \"Kutu jangkar\"', '114', '2019-11-27 11:46:09', '2019-11-27 04:46:09'),
(15, 'Ikan Anda Baik - Baik Saja', '91', '2019-11-27 11:44:38', '2019-11-27 04:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `fkomens`
--

CREATE TABLE `fkomens` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_pakar` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(255) NOT NULL,
  `komen` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fkomens`
--

INSERT INTO `fkomens` (`id`, `id_pengguna`, `id_pakar`, `nama`, `commentable_id`, `commentable_type`, `komen`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Krisna Bayu Pratama', 3, 'App\\forum', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However,', '2019-10-17 04:05:43', '2019-10-17 04:05:43'),
(2, 1, 1, 'Bambang Sutoyo', 3, 'App\\forum', 'Test 123', '2019-10-17 14:32:27', '2019-10-17 14:32:27'),
(3, 1, 1, 'Bambang Sutoyo', 3, 'App\\forum', 'Test Lagi', '2019-10-17 14:34:48', '2019-10-17 14:34:48'),
(4, 2, 2, 'Krisna Bayu Pratama', 3, 'App\\forum', 'tesss', '2019-11-11 01:25:05', '2019-11-11 01:25:05'),
(5, 2, 2, 'Krisna Bayu Pratama', 3, 'App\\forum', 'test', '2019-11-27 21:59:08', '2019-11-27 21:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `thread` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `id_pengguna`, `nama`, `thread`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 2, 'Krisna Bayu Pratama', 'Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser', 'buuuum', 'feature-img1.jpg', '2019-10-19 10:36:24', '2019-10-19 03:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `id_pengguna`, `nama`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 2, 'Krisna Bayu Pratama', 'Test Lagi', 'feature-img2.jpg', '2019-10-17 16:15:59', '2019-10-17 16:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `value` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `nama`, `jenis`, `foto`, `value`, `updated_at`, `created_at`) VALUES
(10, 'Sisik Normal', 'Sisik', 'imgonline-com-ua-resize-CTUWbjzMzrubte.jpg', '5', '2019-11-27 03:57:34', '2019-11-03 06:47:37'),
(11, 'Sisik Mulai Tanggal/Rontok', 'Sisik', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '2', '2019-11-27 03:57:41', '2019-11-03 06:48:11'),
(12, 'Radang dan Iritasi pada Kulit/Sisik', 'Sisik', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '6', '2019-11-27 03:57:47', '2019-11-03 06:48:57'),
(13, 'Warna Kulit/Sisik Pucat', 'Sisik', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '9', '2019-11-27 03:57:55', '2019-11-03 06:49:34'),
(14, 'Mata Normal', 'Mata', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '1', '2019-11-27 03:58:02', '2019-11-03 06:53:29'),
(15, 'Mata Menonjol', 'Mata', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '4', '2019-11-27 03:58:09', '2019-11-03 06:53:51'),
(16, 'Terdapat Bintik Putih', 'Mata', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '7', '2019-11-27 03:58:24', '2019-11-03 06:54:15'),
(17, 'Mata Berkabut', 'Mata', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '10', '2019-11-27 03:58:31', '2019-11-03 06:55:15'),
(18, 'Kondisi Normal', 'Kondisi dan Bentuk Tubuh', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '20', '2019-11-27 03:58:38', '2019-11-03 06:56:13'),
(19, 'Badan Kurus', 'Kondisi dan Bentuk Tubuh', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '11', '2019-11-27 03:58:49', '2019-11-03 06:56:37'),
(20, 'Perut Membengkak', 'Kondisi dan Bentuk Tubuh', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '14', '2019-11-27 03:58:56', '2019-11-03 06:57:05'),
(21, 'Ikan Terlihat Lemas', 'Kondisi dan Bentuk Tubuh', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '13', '2019-11-27 04:01:34', '2019-11-03 06:57:24'),
(22, 'Sirip dan Ekor Normal', 'Sirip dan Ekor', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '19', '2019-11-27 04:00:30', '2019-11-03 07:05:00'),
(23, 'Sirip dan Ekor membusuk', 'Sirip dan Ekor', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '17', '2019-11-27 04:00:47', '2019-11-03 07:05:28'),
(24, 'Tulang Sirip dan Ekor Menjadi Buram', 'Sirip dan Ekor', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '31', '2019-11-27 04:01:13', '2019-11-03 07:06:15'),
(25, 'Terdapat Bintik-Bintik Putih', 'Sirip dan Ekor', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '16', '2019-11-27 04:01:24', '2019-11-03 07:06:47'),
(26, 'Sikap Normal', 'Sikap', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '28', '2019-11-27 04:03:24', '2019-11-03 07:07:46'),
(27, 'Kesuilitan Berenang', 'Sikap', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '37', '2019-11-27 04:13:50', '2019-11-03 07:08:15'),
(28, 'Sering Menggesekkan Tubuh ke Dinding Kolam', 'Sikap', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '26', '2019-11-27 04:03:15', '2019-11-03 07:08:58'),
(29, 'Kesulitan berenang, Sering Menggesekkan tubuh ke dinding Kolam dan Megap-megap di Permukaan Air', 'Sikap', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '40', '2019-11-27 04:03:06', '2019-11-03 07:11:34'),
(30, 'Tidak Ada Gejala Lain', 'Gejala Lain', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '18', '2019-11-27 04:02:51', '2019-11-03 07:12:19'),
(31, 'Produksi Lendir Berlebihan', 'Gejala Lain', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '15', '2019-11-27 04:02:39', '2019-11-03 07:12:52'),
(32, 'Cacing Menempel Pada Tubuh Ikan', 'Gejala Lain', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '45', '2019-11-27 04:30:18', '2019-11-03 07:13:49'),
(33, 'Cacing menempel pada tubuh ikan dan Nafsu makan ikan menurun', 'Gejala Lain', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '50', '2019-11-27 04:45:01', '2019-11-03 07:14:16'),
(34, 'Produksi lendir berlebihan dan Insang membusuk', 'Gejala Lain', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '30', '2019-11-27 04:02:09', '2019-11-03 07:14:36'),
(35, 'Insang Membusuk', 'Gejala Lain', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '22', '2019-11-27 04:01:59', '2019-11-03 22:13:18'),
(36, 'Nafsu Makan Menurun', 'Kondisi dan Bentuk Tubuh', 'imgonline-com-ua-resize-KQ4BIwa6j5vcf9i.jpg', '43', '2019-11-27 04:40:52', '2019-11-03 22:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `gkomens`
--

CREATE TABLE `gkomens` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_pakar` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(255) NOT NULL,
  `komen` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gkomens`
--

INSERT INTO `gkomens` (`id`, `id_pengguna`, `id_pakar`, `nama`, `commentable_id`, `commentable_type`, `komen`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Krisna Bayu Pratama', 1, 'App\\galeri', 'Tes 123', '2019-10-17 16:50:57', '2019-10-17 16:50:57'),
(2, 1, 1, 'Bambang Sutoyo', 1, 'App\\galeri', 'Tes 456', '2019-10-17 18:59:32', '2019-10-17 18:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `hasils`
--

CREATE TABLE `hasils` (
  `hasil_id` int(11) NOT NULL,
  `gejala1` varchar(50) NOT NULL,
  `gejala2` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total` varchar(50) NOT NULL,
  `gejala3` varchar(50) NOT NULL,
  `gejala4` varchar(50) NOT NULL,
  `gejala5` varchar(50) NOT NULL,
  `gejala6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kois`
--

CREATE TABLE `kois` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kois`
--

INSERT INTO `kois` (`id`, `nama`, `jenis`, `deskripsi`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'Matsuba', 'Butterfly Gin Matsuba', 'Matsuba memiliki warna dasar yang berbeda-beda. Gin Matsuba memiliki warna dasar putih, Ki matsuba memiliki warna dasar kuning, dan aka Matsuba memiliki warna dasar merah. Namun, semua ikan koi Matsuba memiliki pola jaring di punggungnya yang berwarna biru.', '2019-10-20 07:42:19', '2019-10-20 07:42:19', 'ct2.jpg'),
(2, 'Kujaku', 'Butterfly Kujaku', 'Ogon Yamabuki memiliki pola warna yang sama dengan keluarga ogon. Ikan ini memiliki warna kuning dan bagian kepala berwarna kuning bersih yang menandakan kualitas ikan tersebut.\r\nVariasi dari Ogon Uamabuki antara lain: Ogon Yamabuki Gin Rin dan Ogon Yamabuki Doitsu.', '2019-10-20 08:15:07', '2019-10-20 08:15:07', 'imgonline-com-ua-resize-aCSmrRpZINc.jpg'),
(3, 'Kohaku', 'Kohaku Doitsu', 'Kohaku merupakan jenis ikan koi yang paling tua dan paling terkenal diantara jenis ikan koi lainnya. Kohaku ini memiliki warna dasar putih solid yang dilapisi dengan warna merah. Kohaku yang berkualitas adalah kohaku yang memiliki warna yang cerah, warna dasar ikan tidak terdapat bercak noda, warna merahnya cerah, dan pola kombinasi warna putih dan merah disepanjang tubuhnya.', '2019-11-27 16:53:29', '2019-11-27 16:53:29', 'imgonline-com-ua-resize-3L8DngWLAE.jpg'),
(4, 'Goromo', 'Goromo Maruten', 'Ikan koi goromo atau juga bisa disebut dengan koromo merupakan ikan koi hasil persilangan antara jenis koi kohaku dan juga jenis koi asagi. Di bagian atas tubuh ikan koi tersebut terdapat corak bulatan hitam keunguan seperti buah anggur. Ciri utama ikan koi goromo ini adalah memiliki 4 warna corak yang dipadupadankan dengan bagus yaitu warna biru, hitam, indigo dan juga Ungu. Harga dari ikan koi ini sangatlah terjangkau.', '2019-11-27 16:56:11', '2019-11-27 16:56:11', 'imgonline-com-ua-resize-0UrGfET52ow2.jpg'),
(5, 'Showa', 'Kin Showa', 'Ikan koi Kin Showa merupakan salah satu ikan koi yang memiliki bentuk dan ciri tubuh dengan corak hitam dan juga warna putih. Jika Anda melihatnya secara sekilas ketika ikan koi ini berenang di dalam air maka akan terlihat seperti ada selaput putih yang menutupi sekujur badannya.', '2019-11-27 16:59:16', '2019-11-27 16:59:16', 'imgonline-com-ua-resize-YkwXKhLB6VfAj18B.jpg'),
(6, 'Kujaku', 'Kujaku', 'Ikan koi kujaku merupakan salah satu jenis ikan koi yang juga disebut sebagai ikan koi Champion. Ikan koi ini banyak sekali dipelihara untuk diikutkan ke dalam kontes keindahan pada sisi tubuhnya. Warna tubuh dari ikan koi ini sangat menggelora dan nampak sangat cerah dengan berbagai macam kombinasi warna seperti warna merah, putih, dan banyak sekali variasi polkadot Sisi hitam di bagian punggungnya. Sirip dari ikan koi ini berwarna putih susu dan diselaraskan dengan bentuk tubuhnya.', '2019-11-27 17:03:28', '2019-11-27 17:03:28', 'imgonline-com-ua-resize-d8heHbLeb6lW3.jpg'),
(7, 'Kikusui', 'Kikusui', 'Ikan koi kikusui merupakan salah satu spesies ikan koi tercantik menurut para pecinta koi. Warna dari tubuh ikan koi ini putih susu dan tampak selembut Sutra. Memiliki corak Jingga yang sangat terang tampilannya. Tubuh dari ikan koi ini akan berkilau jika di dalam air seolah ikan koi ini dilapisi oleh plastik. Maka dari itu banyak sekali orang yang memilih untuk memelihara ikan koi ini karena tampilannya yang sangat indah dan menawan.', '2019-11-27 17:07:16', '2019-11-27 17:07:16', 'imgonline-com-ua-resize-FPyBbtHksAK1B.jpg'),
(8, 'Asagi', 'Asagi Rin', 'Salah satu jenis koi yang banyak sekali diminati adalah ikan koi asagi. Ikan koi ini banyak sekali disukai karena memiliki bentuk yang tidak kalah unik dengan jenis lainnya. Keunikan tersebut terletak pada punggung ikan koi yang berwarna biru agak kelabu. Untuk bagian kepala ikan koi ini terbentuk warna putih dan merah seperti jenis ikan koi pada umumnya. Ciri utama ikan koi ini yaitu jika semakin banyak warna biru atau dominan warna biru maka harga yang dipatok pun lebih mahal.', '2019-11-27 17:12:57', '2019-11-27 17:12:57', 'ikan-koi-asagi3.jpg'),
(9, 'Shusui', 'Shusui Hi', 'Ikan koi shusui merupakan ikan koi yang mirip sekali dengan hikarimoyomono. Meskipun dibilang mirip namun porsi warna ikan koi ini sangat berbeda karena terdapat warna merah yang lebih dominan. Ikan koi ini juga memiliki corak seperti tulang rusuk yang menjadi kelabu pada punggungnya.', '2019-11-27 17:16:14', '2019-11-27 17:16:14', 'imgonline-com-ua-resize-08JdcY6wRB5.jpg'),
(10, 'Ogon', 'Kin Ogon', 'Ikan koi ogon merupakan ikan koi yang memiliki warna cukup indah yaitu kuning keemasan. Jenis dari ikan koi ini sangat mudah ditemukan dan sudah ditemukan sejak tahun 1946 orang bernama Sawati. Ikan koi ini merupakan ikan koi hasil persilangan antara koi berpunggung kuning dengan koi jenis Shiro-fuji. Pada awal percobaan ikan koi tersebut menghasilkan warna emas di seluruh bagian tubuhnya Namun karena telah banyak sekali melakukan percobaan hingga percobaan yang ke-6 itulah generasi keturunan ikan koi yang memiliki warna super eksotis.', '2019-11-27 17:20:37', '2019-11-27 17:20:37', 'imgonline-com-ua-resize-zCzjnYyo1baN.jpg'),
(11, 'Goromo', 'Goshiki Goromo', 'Ikan koi goshiki goromo merupakan ikan koi yang dapat dibilang perpaduan antara bodo dan Sumi goromo. Ikan koi ini memiliki warna kilau putih susu dan memiliki corak hitam serta kemerahan. Perbedaan ikan koi dengan ikan koi goromo lainnya adalah terdapat titik-titik sisik hitam yang menyebar tipis di seluruh tubuh ikan tersebut. Warna dari ekor ikan koi goromo juga sangat bersih yaitu warna putih susu', '2019-11-27 17:25:35', '2019-11-27 17:25:35', 'imgonline-com-ua-resize-edOsviJ8O5.jpg'),
(12, 'Shun', 'Shun Utsurai', 'Hi Utsuri merupakan jenis ikan koi yang memiliki warna dasar hitam yang dikombinasikan dengan warna merah atau orange. Hi Utsuri biasanya memiliki warna orange pada saat usianya masih muda dan warna tersebut akan berubah menjadi merah cerah jika ikan sudah dewasa.', '2019-11-27 17:35:19', '2019-11-27 17:35:19', 'imgonline-com-ua-resize-FzmSS3JT8x8ki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_29_162607_create_admin_table', 1),
(5, '2019_09_29_162646_create_pengguna_table', 1),
(6, '2019_09_29_162702_create_pakar_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakars`
--

CREATE TABLE `pakars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakars`
--

INSERT INTO `pakars` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`, `no_telp`, `profesi`, `foto`, `deskripsi`) VALUES
(1, 'Bambang Sutoyo', 'bambang123@gmail.com', '12345', NULL, '2019-10-17 05:11:07', '2019-10-17 05:17:07', 'Jember Utara', '0895399649215', 'Pembudidaya Ikan Koi', 'c6.jpg', 'Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory'),
(2, 'Bayu Pratama', 'alimpes12@gmail.com', '12345', NULL, '2019-10-28 01:31:00', '2019-10-28 01:31:00', 'Jember Utara', '0895399649215', 'Pembudidaya Ikan Koi', '176868.jpg', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunas`
--

INSERT INTO `penggunas` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Suryadi', 'Suryadi120@gmail.com', NULL, '12345', NULL, '2019-09-29 12:35:12', '2019-09-29 12:35:12'),
(2, 'Krisna Bayu Pratama', 'uyab123@gmail.com', NULL, '12345', NULL, '2019-09-30 02:27:03', '2019-09-30 02:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `diagnosas`
--
ALTER TABLE `diagnosas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fkomens`
--
ALTER TABLE `fkomens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkomens`
--
ALTER TABLE `gkomens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`hasil_id`);

--
-- Indexes for table `kois`
--
ALTER TABLE `kois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakars`
--
ALTER TABLE `pakars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pakars_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penggunas_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diagnosas`
--
ALTER TABLE `diagnosas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fkomens`
--
ALTER TABLE `fkomens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `gkomens`
--
ALTER TABLE `gkomens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasils`
--
ALTER TABLE `hasils`
  MODIFY `hasil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kois`
--
ALTER TABLE `kois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pakars`
--
ALTER TABLE `pakars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
