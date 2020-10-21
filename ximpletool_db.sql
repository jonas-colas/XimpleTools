-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2020 at 02:45 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ximpletool`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint UNSIGNED NOT NULL,
  `test_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `answer` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `test_id`, `question_id`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(2, 1, 2, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(3, 1, 3, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(4, 1, 4, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(5, 1, 5, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(6, 1, 6, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(7, 1, 7, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(8, 1, 8, 4, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(9, 1, 9, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(10, 1, 10, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(11, 1, 11, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(12, 1, 12, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(13, 1, 13, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(14, 1, 14, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(15, 1, 15, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(16, 1, 16, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(17, 1, 17, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(18, 1, 18, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(19, 1, 19, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(20, 1, 20, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(21, 1, 21, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(22, 1, 22, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(23, 1, 23, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(24, 1, 24, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(25, 1, 25, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(26, 1, 26, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(27, 1, 27, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(28, 1, 28, 4, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(29, 1, 29, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(30, 1, 30, 3, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(31, 1, 31, 2, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(32, 2, 1, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(33, 2, 2, 1, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(34, 2, 3, 1, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(35, 2, 4, 1, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(36, 2, 5, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(37, 2, 6, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(38, 2, 7, 4, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(39, 2, 8, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(40, 2, 9, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(41, 2, 10, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(42, 2, 11, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(43, 2, 12, 4, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(44, 2, 13, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(45, 2, 14, 4, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(46, 2, 15, 4, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(47, 2, 16, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(48, 2, 17, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(49, 2, 18, 4, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(50, 2, 19, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(51, 2, 20, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(52, 2, 21, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(53, 2, 22, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(54, 2, 23, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(55, 2, 24, 4, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(56, 2, 25, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(57, 2, 26, 3, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(58, 2, 27, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(59, 2, 28, 4, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(60, 2, 29, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(61, 2, 30, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(62, 2, 31, 2, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(63, 3, 1, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(64, 3, 2, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(65, 3, 3, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(66, 3, 4, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(67, 3, 5, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(68, 3, 6, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(69, 3, 7, 4, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(70, 3, 8, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(71, 3, 9, 4, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(72, 3, 10, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(73, 3, 11, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(74, 3, 12, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(75, 3, 13, 1, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(76, 3, 14, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(77, 3, 15, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(78, 3, 16, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(79, 3, 17, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(80, 3, 18, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(81, 3, 19, 1, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(82, 3, 20, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(83, 3, 21, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(84, 3, 22, 4, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(85, 3, 23, 4, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(86, 3, 24, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(87, 3, 25, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(88, 3, 26, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(89, 3, 27, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(90, 3, 28, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(91, 3, 29, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(92, 3, 30, 2, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL),
(93, 3, 31, 3, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aspects`
--

CREATE TABLE `aspects` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `dimension_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aspects`
--

INSERT INTO `aspects` (`id`, `title`, `description`, `dimension_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Orientación al feedback', NULL, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(2, 'Reflexión', NULL, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(3, 'Autoconocimiento', NULL, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(4, 'Aprendiz personal', NULL, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(5, 'Inteligencia Emocional', NULL, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(6, 'Predisposición al cambio', NULL, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(7, 'Experimentador/a', NULL, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(8, 'Constante mejorador/a', NULL, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(9, 'Gestión de Innovación', NULL, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(10, 'Comodidad liderando el cambio', NULL, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(11, 'Escáner amplio', NULL, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(12, 'Conector/a', NULL, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(13, 'Complejidad', NULL, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(14, 'Manejo de incertidumbre', NULL, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(15, 'Inquisitivo/a', NULL, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(16, 'Flexibilidad Situacional', NULL, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(17, 'Comunicador ágil', NULL, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(18, 'Gestión de conflictos', NULL, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(19, 'Mente abierta', NULL, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(20, 'Ayuda a otros a tener éxito', NULL, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(21, 'Logro de resultados a pesar de adversidad', NULL, 7, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(22, 'Conductor / impulsor', NULL, 7, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(23, 'Empuje', NULL, 7, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(24, 'Inventiva', NULL, 7, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(25, 'Motiva a otros/as', NULL, 7, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dimensions`
--

CREATE TABLE `dimensions` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `topic_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dimensions`
--

INSERT INTO `dimensions` (`id`, `title`, `description`, `topic_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Aspiración', NULL, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(2, 'Trayectoria', NULL, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(3, 'Conciencia de si mismo', 'La medida en que una persona tiene percepción de sí mismo/a, comprende con claridad sus fortalezas y debilidades y utiliza estos conocimientos para desempeñarse de manera eficaz.', 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(4, 'Agilidad de Cambio', 'La medida en que una persona gusta del cambio, explora continuamente nuevas opciones y soluciones y se interesa en liderar los esfuerzos de cambio organizacionales.', 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(5, 'Agilidad Mental', 'La medida en que una persona abraza la complejidad, examina problemas de maneras únicas e inusuales, es inquisitiva y puede establecer conexiones nuevas entre diferentes conceptos.', 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(6, 'Agilidad Interpersonal', 'La medida en que una persona es abierta respecto de los demás, disfruta de interactuar con diferentes tipos de personas, comprende sus fortalezas, intereses y limitaciones únicas y las utiliza de manera eficaz para lograr las metas organizacionales.', 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(7, 'Agilidad de Resultados', 'La medida en que una persona se siente motivada por los retos y puede producir resultados en situaciones que enfrenta por primera vez y/o dificultosas a través de sus recursos e inspirando a los demás.', 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `publish_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `type` tinyint NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evaluations`
--

INSERT INTO `evaluations` (`id`, `title`, `description`, `publish_date`, `expire_date`, `status`, `type`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Autoevaluación 2020', NULL, '2020-09-01', '2020-10-31', 1, 0, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(2, 'Evaluación Equipo 2020', NULL, '2020-10-13', '2020-10-22', 1, 1, 1, '2020-10-12 20:41:11', '2020-10-13 08:59:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_thread`
--

CREATE TABLE `evaluation_thread` (
  `id` bigint UNSIGNED NOT NULL,
  `evaluation_id` int UNSIGNED NOT NULL,
  `thread_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evaluation_thread`
--

INSERT INTO `evaluation_thread` (`id`, `evaluation_id`, `thread_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(2, 1, 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(3, 1, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(4, 1, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(5, 1, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(6, 1, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(7, 2, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(8, 2, 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(9, 2, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(10, 2, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(11, 2, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(12, 2, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_04_09_062329_create_revisions_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2015_08_04_131614_create_settings_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_03_31_114745_remove_backpackuser_model', 1),
(6, '2020_09_14_203515_add_custom_data_to_users', 1),
(7, '2020_09_15_213332_create_permission_tables', 1),
(8, '2020_09_16_120701_create_topics_table', 1),
(9, '2020_09_16_121507_create_dimensions_table', 1),
(10, '2020_09_16_123624_create_aspects_table', 1),
(11, '2020_09_16_124101_create_questions_table', 1),
(12, '2020_09_18_195720_create_threads_table', 1),
(13, '2020_09_18_195728_create_thread_question_table', 1),
(14, '2020_09_18_195952_create_evaluation_thread_table', 1),
(15, '2020_09_18_200000_create_evaluations_table', 1),
(16, '2020_09_22_142954_create_tests_table', 1),
(17, '2020_09_23_192455_create_answers_table', 1),
(18, '2020_09_29_130641_create_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `dimension_id` bigint UNSIGNED NOT NULL,
  `aspect_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `dimension_id`, `aspect_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '¿Manifiesta interes en aumentar sustancialmente la complejidad de sus desafíos y realiza acciones que lo acercan a ello?', NULL, 1, NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(2, '¿Demuestra que su propósito profesional está asociado a moverse/ liderar situaciones y/o contextos complejos, ambigüos e inciertos?', NULL, 1, NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(3, '¿Disfruta de impulsar y motorizar los cambios que el negocio le va proponiendo?', NULL, 1, NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(4, 'En los ultimos 5 años, ¿rotó al menos por 3 roles o puestos diferentes?', NULL, 2, NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(5, 'En su trayectoria profesional ¿demuestra haber tomado decisiones de cambio sustanciales y/o arriesgadas, en pos de un crecimiento o cambio profesional?', NULL, 2, NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(6, 'En TODA su trayectoria profesional, ¿se observa un recorrido amplio y diverso, con variabilidad de realidades de contexto y temas de espacilidad abordados?', NULL, 2, NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(7, '¿Pide feedback de manera constante a distintos interlocutores (líder, pares, equipo, cliente, etc).', NULL, 3, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(8, '¿Se muestra receptivo/a a los feedbacks y dispuesto/a a cambiar su comportamiento para hacerlo distinto una próxima vez?', NULL, 3, 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(9, '¿Conoce sus fortalezas y oportunidades de mejora, trabajando en potenciarlas y/o desarrollarlas?', NULL, 3, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(10, '¿Se desafía a aprender nuevas habilidades y desarrollar nuevos comportamientos?', NULL, 3, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(11, '¿Registra sus emociones y puede regular su conducta a partir de esto?', NULL, 3, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(12, '¿Se muestra interesado/a en abordar desafíos que impliquen nuevos aprendizajes?', NULL, 4, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(13, '¿Disfruta de experimentar el cambio e impulsa a que el equipo también lo haga?', NULL, 4, 7, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(14, '¿Cuestiona el status quo y las formas/procesos tradicionales?', NULL, 4, 8, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(15, '¿Propone cambios disruptivos y/o que logran anticiparse a las demandas que tendrá su negocio?', NULL, 4, 9, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(16, '¿Se siente cómodo/a liderando y atrevesando procesos de cambios?', NULL, 4, 10, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(17, '¿Explora y conoce variedad de temas, poniéndolo a disposición ante la generación de soluciones? ', NULL, 5, 11, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(18, 'Ante situaciones nuevas, combina dos o mas ideas dispares logrando crear algo nuevo y creativo?', NULL, 5, 12, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(19, 'Ante una situación compleja organiza la información haciéndola simple y comprensibles para poder abordarla?', NULL, 5, 13, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(20, 'En contextos inciertos ¿ajusta sus enfoques rápidamente y toma decisiones?', NULL, 5, 14, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(21, '¿Reflexiona sobre las cosas que no salieron bien y genera aprendizajes para futuras implementaciones?', NULL, 5, 15, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(22, '¿Lee la situación y ajusta su comportamiento a lo que es mas oportuno? (ej: cuándo es mejor ceder, cuándo momento de actuar)', NULL, 6, 16, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(23, '¿Puede comunicarse de manera asertiva, adaptandose a los perfiles y personas con las cuales interactúa?', NULL, 6, 17, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(24, 'Ante situaciones conflictivas, ¿enfrenta los hechos los gestiona y logra resolver de manera positiva?', NULL, 6, 18, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(25, '¿Se mueve con comodidad en grupos diversos, donde se combinan distintas experiencias, conocimientos y niveles jerárquicos?', NULL, 6, 19, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(26, '¿Inspira a los demás, impulsando el desarrollo de los equipos y las personas?', NULL, 6, 20, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(27, '¿Entrega resultados frecuentemente, incluso en situaciones nuevas, exigentes, adversas o de escaces de recursos?', NULL, 7, 21, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(28, '¿Se desafía a sí mismo fijándose metas ambiciosas y se esfuerza para lograrlas?', NULL, 7, 22, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(29, '¿Se siente impulsado por los resultados y las tareas dificultosas lo energizan?', NULL, 7, 23, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(30, '¿Encuentra múltiples formas de resolver los problemas, ideando nuevos enfoques, sorteando los obstáculos?', NULL, 7, 24, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(31, '¿En el trabajo con otros, enrola al equipo y los moviliza hacia logro de resultados?', NULL, 7, 25, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint UNSIGNED NOT NULL,
  `test_id` bigint UNSIGNED NOT NULL,
  `conciencia_de_si_mismo` tinyint NOT NULL,
  `agilidad_de_cambio` tinyint NOT NULL,
  `agilidad_mental` tinyint NOT NULL,
  `agilidad_interpersonal` tinyint NOT NULL,
  `agilidad_de_resultados` tinyint NOT NULL,
  `subtotal_agilidad` tinyint NOT NULL,
  `subtotal_perfil` tinyint NOT NULL,
  `posicion_potencial_automatica` tinyint DEFAULT NULL,
  `posicion_potencial_sugerida` tinyint DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `test_id`, `conciencia_de_si_mismo`, `agilidad_de_cambio`, `agilidad_mental`, `agilidad_interpersonal`, `agilidad_de_resultados`, `subtotal_agilidad`, `subtotal_perfil`, `posicion_potencial_automatica`, `posicion_potencial_sugerida`, `comment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 2, 2, 2, 2, 2, 1, NULL, NULL, NULL, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(2, 2, 2, 3, 2, 2, 2, 2, 1, NULL, NULL, NULL, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(3, 3, 3, 1, 1, 3, 2, 1, 1, NULL, NULL, NULL, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `revisions`
--

CREATE TABLE `revisions` (
  `id` int UNSIGNED NOT NULL,
  `revisionable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci,
  `new_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `revisions`
--

INSERT INTO `revisions` (`id`, `revisionable_type`, `revisionable_id`, `user_id`, `key`, `old_value`, `new_value`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Evaluation', 2, 8773, 'publish_date', '2020-11-01', '2020-10-15', '2020-10-13 08:59:38', '2020-10-13 08:59:38'),
(2, 'App\\Models\\Evaluation', 2, 8773, 'expire_date', '2020-11-30', '2020-10-22', '2020-10-13 08:59:38', '2020-10-13 08:59:38'),
(3, 'App\\Models\\Evaluation', 2, 8773, 'status', '0', '1', '2020-10-13 08:59:38', '2020-10-13 08:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `field` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `name`, `description`, `value`, `field`, `active`, `created_at`, `updated_at`) VALUES
(1, 'dashboard_video', 'Dashboard Video', 'Video que se muestra en el panel inicial.', NULL, '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, '2020-10-14 19:08:11'),
(2, 'dashboard_welcome', 'Dashboard Welcome', 'Texto en el widget de Bienvenida', 'Esta herramienta pretende recabar las habilidades, intereses y predisposición de los colaboradores de Naranja para aprender de la experiencia y contribuir de manera diferencial en los desafíos del negocio.\r\nTe invitamos a que puntúes tus comportamientos en base al cuestionario que podrás encontrar a continuación...', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"textarea\"}', 1, NULL, '2020-09-25 00:24:01'),
(3, 'result_1', 'Resultado Enfocado', '', '<p><span style=\"text-decoration: underline;\">Qu&eacute; Quiere</span>: Continuar desarroll&aacute;ndose en &aacute;reas de&nbsp;complejidad similar a la actual.&nbsp;Ser referente o experto/a en el tema, mejorar&nbsp;sus pr&aacute;cticas.&nbsp;Moverse en contextos con reglas prefijadas y&nbsp;pautas claras donde pueda aplicar un&nbsp;m&eacute;todo comprobado.</p>\r\n<p><span style=\"text-decoration: underline;\">C&oacute;mo es su experiencia</span>: Asociado a un &aacute;rea de conocimiento.</p>\r\n<p><span style=\"text-decoration: underline;\">Da su mejor versi&oacute;n cuando:</span> Cuenta con divisi&oacute;n de tareas y tiene claridad de lo que espera de &eacute;l/ella. Se mueve actividades y tareas que le brinden estabilidad y en las que puede profundizar su conocimiento. Implementa procesos y detecta oportunidades.</p>', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"tinymce\"}', 1, '2020-09-30 00:06:35', '2020-10-01 14:56:56'),
(4, 'result_2', 'Resultado Versátil', '', '<p><span style=\"text-decoration: underline;\">Qu&eacute; Quiere</span>: Incorporar nuevas variables a su &aacute;rea de&nbsp;conocimiento actual.&nbsp;Proponer una mirada diferente a las formas o&nbsp;procesos tradicionales.&nbsp;Desempe&ntilde;arse en &aacute;mbitos con cierta&nbsp;complejidad, que impliquen cambios&nbsp;<span style=\"text-decoration: underline;\">incrementales respecto de los desaf&iacute;os actuales.</span></p>\r\n<p><span style=\"text-decoration: underline;\">C&oacute;mo es su experiencia</span>: Variado: evidencia cambios incrementales&nbsp;asociados a distintas &aacute;reas de conocimiento.</p>\r\n<p><span style=\"text-decoration: underline;\">Da su mejor versi&oacute;n cuando</span>: Adquiere de manera gradual nuevos desaf&iacute;os que le representen ir asumiendo mayor complejidad en sus tareas.</p>', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"tinymce\"}', 1, '2020-09-30 00:06:35', '2020-10-01 14:56:32'),
(5, 'result_3', 'Resultado Amplio', '', '<p><span style=\"text-decoration: underline;\">Qu&eacute; Quiere</span>: Liderar nuevos desaf&iacute;os, cada vez m&aacute;s&nbsp;complejos, asumiendo riesgos.&nbsp;Desempe&ntilde;arse en &aacute;mbitos que&nbsp;impliquen cambios exponenciales o&nbsp;sustanciales respecto de los actuales.</p>\r\n<p><span style=\"text-decoration: underline;\">C&oacute;mo es su experiencia</span>: Diversa: ha tomado decisiones de&nbsp;cambio sustanciales y/o arriesgadas,&nbsp;en pos de un crecimiento profesional.&nbsp;Evidencia rotaciones, cambios de roles&nbsp;en diferentes &aacute;reas de conocimiento,&nbsp;trabajo con equipos diversos.</p>\r\n<p><span style=\"text-decoration: underline;\">Da su mejor versi&oacute;n cuando:</span> Cuestiona el status quo, propone cambios disruptivos e impulsa el cambio. Potencia sus fortalezas y oportunidades continuamente. Inspira a los dem&aacute;s, impulsando el desarrollo y logro de resultados.&nbsp;</p>', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"tinymce\"}', 1, '2020-09-30 00:06:35', '2020-10-01 14:56:12'),
(6, 'result_intro', 'Intro de Resultados', '', '<p><span id=\"docs-internal-guid-fda8f4b6-7fff-8356-5b2f-40950201b84e\">Los siguientes resultados se basan en las respuestas que brindaste sobre vos mismo/a en tu autoevaluaci&oacute;n. Ten&eacute; en cuenta que luego tu l&iacute;der realiza una evaluaci&oacute;n y calibra su mirada con otros/as l&iacute;deres, para llegar a una posici&oacute;n de potencial.</span></p>', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"tinymce\"}', 1, '2020-09-30 00:06:35', '2020-10-06 14:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint UNSIGNED NOT NULL,
  `evaluation_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `evaluator_id` bigint UNSIGNED NOT NULL,
  `complete` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `evaluation_id`, `user_id`, `evaluator_id`, `complete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2931, 2931, 1, '2020-10-14 12:40:33', '2020-10-14 12:40:33', NULL),
(2, 2, 31243, 8773, 1, '2020-10-14 15:10:36', '2020-10-14 15:10:36', NULL),
(3, 2, 37219, 1021, 1, '2020-10-15 09:24:20', '2020-10-15 09:24:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `scale` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `title`, `description`, `scale`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Perfil Profesional', NULL, 0, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(2, 'Conciencia de si mismo', NULL, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(3, 'Agilidad de Cambio', NULL, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(4, 'Agilidad Mental', NULL, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(5, 'Agilidad Interpersonal', NULL, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(6, 'Agilidad de Resultados', NULL, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thread_question`
--

CREATE TABLE `thread_question` (
  `id` bigint UNSIGNED NOT NULL,
  `thread_id` int UNSIGNED NOT NULL,
  `question_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thread_question`
--

INSERT INTO `thread_question` (`id`, `thread_id`, `question_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(2, 1, 2, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(3, 1, 3, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(4, 1, 4, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(5, 1, 5, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(6, 1, 6, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(7, 2, 7, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(8, 2, 8, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(9, 2, 9, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(10, 2, 10, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(11, 2, 11, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(12, 3, 12, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(13, 3, 13, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(14, 3, 14, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(15, 3, 15, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(16, 3, 16, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(17, 4, 17, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(18, 4, 18, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(19, 4, 19, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(20, 4, 20, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(21, 4, 21, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(22, 5, 22, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(23, 5, 23, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(24, 5, 24, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(25, 5, 25, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(26, 5, 26, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(27, 6, 27, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(28, 6, 28, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(29, 6, 29, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(30, 6, 30, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(31, 6, 31, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Perfil Profesional', NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL),
(2, 'Agilidad de Aprendizaje	', NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organizational_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_center` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chief_id` int DEFAULT NULL,
  `managment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `position`, `position_group`, `position_class`, `organizational_unit`, `cost_center`, `chief_id`, `managment`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Guillermo', 'Barón', 'SYSADMIN', 'SENIOR', 'SR AREA INTERNA', 'SELECCIÓN', 'SELECCIÓN', 0, 'GERENCIA DE DESARROLLO ORGANIZACIONAL', 'guillermobaron@gmail.com', NULL, '$2y$10$jgwMBKVtWeLKBDyQvJwIr.F0GmPQfB0lCsH.oaD6JbhlEstPELGNm', NULL, '2020-10-12 20:41:03', '2020-10-12 20:41:03'),
(229, 'MARIA VICTORIA', 'LACAVA', 'ASISTENTE SENIOR DE LOGISTICA', 'SENIOR', 'SR AREA INTERNA', 'GESTIÓN OPERATIVA', 'PLANEAMIENTO DE INSUMOS Y CAUDALES', 5736, 'DIRECCIÓN DE OPERACIONES', 'Victoria.LACAVA@naranja.com', NULL, '$2y$10$doMDglhQV6lEuZ7GTlF9zuyQk8u4LcoQtQaVhIS.3cfvZMUeCp1X.', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(759, 'PABLO', 'PALACIOS', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Pablo.PALACIOS@naranja.com', NULL, '$2y$10$xuHhyYcuYnTfaOBG7OP1tOkwtIF6tozdupWPpFmkqmzFjVblJCzlu', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(955, 'KARINA GRISELDA', 'MARTINEZ JUNCO', 'ANALISTA DE ABM DE COMERCIOS AMIGOS', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE CA', 'PROCESAMIENTO MASIVO DE CA', 3709, 'DIRECCIÓN DE OPERACIONES', 'Karina.MARTINEZJUNCO@naranja.com', NULL, '$2y$10$Gx24ZyC0TfS2HcochZZGSOyl5L1/tghoFyEVdYqjLobNETQwjvJn.', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(1021, 'LAURA VANESA', 'GIONGHI', 'JEFE DE PROCESAMIENTO', 'JEFE', 'JEFE', 'PLASTICOS - ADMINISTRACIÓN Y PRODUCCIÓN', 'PLASTICOS ADMINISTRACION', 8721, 'DIRECCIÓN DE OPERACIONES', 'Laura.GIONGHI@naranja.com', NULL, '$2y$10$oLCeqCF6pg1P.yXXBmWMyOKa8M13LKkWvLT29mpdjGp6JMnUxmmpS', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(1146, 'MERCEDES MARIA', 'RIVAS', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'PERSONALIZACION DE TARJETAS', 'PERSONALIZACION DE TARJETAS', 1021, 'DIRECCIÓN DE OPERACIONES', 'Mercedes.RIVAS@naranja.com', NULL, '$2y$10$h.vqs8ZmUdEiNzi3FKbsZe/yCctSIdBHA3wubJnEZtTfhcEqljk7G', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(1476, 'DANIELA LEONTINA', 'CORDOBA', 'ANALISTA DE ABM DE COMERCIOS AMIGOS', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE CA', 'PROCESAMIENTO MASIVO DE CA', 3709, 'DIRECCIÓN DE OPERACIONES', 'Daniela.CORDOBA@naranja.com', NULL, '$2y$10$sHS3dN2QsRSPj03vbuguL.Ei.u1dVfTqhG5SX77tecSAS9O5dEiV.', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(1578, 'PABLO JAVIER', 'ANTONIAZZI', 'ASISTENTE SENIOR DE COORDINACION OPERATIVA', 'SENIOR', 'SR AREA INTERNA', 'GESTIÓN OPERATIVA', 'GESTION OPERATIVA', 5736, 'DIRECCIÓN DE OPERACIONES', 'Pablo.ANTONIAZZI@naranja.com', NULL, '$2y$10$ccryQPEB2GdUGuxBY9igXOMJmIN4fpFkSHnUlmJp/N0yJ3LMJNmLy', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(1724, 'LAURA ANTONIETA', 'DECCA', 'ANALISTA DE ABM DE COMERCIOS AMIGOS', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE CA', 'PROCESAMIENTO MASIVO DE CA', 3709, 'DIRECCIÓN DE OPERACIONES', 'Laura.DECCA@naranja.com', NULL, '$2y$10$1FCtdvS13ntI0KE6H2sxNuhLUEEu7sbGlLBNHEreTzB.TFXHmbftG', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(1750, 'LAURA CRISTINA', 'SANCHEZ', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'PERSONALIZACION DE TARJETAS', 'PERSONALIZACION DE TARJETAS', 1021, 'DIRECCIÓN DE OPERACIONES', 'Laura.SANCHEZ@naranja.com', NULL, '$2y$10$rhPi5/Nvk9uAGCh0H2tiOOVknQ91vdCZyplRvN85XNPO68dCcj182', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(1900, 'ALEJANDRO HORACIO', 'MOLINA', 'ASISTENTE SENIOR DE COORDINACION OPERATIVA', 'SENIOR', 'SR AREA INTERNA', 'GESTIÓN OPERATIVA', 'GESTION OPERATIVA', 5736, 'DIRECCIÓN DE OPERACIONES', 'Alejandro.MOLINA@naranja.com', NULL, '$2y$10$AuIWCtCxB5gVcNbRu.Zu7OtxFzqP5a/ebM3320BU.zGWyWvxbiFOq', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(2253, 'MARIA ELBA', 'MARTINEZ CATALAN', 'ANALISTA DE ABM DE COMERCIOS AMIGOS', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE CA', 'PROCESAMIENTO MASIVO DE CA', 3709, 'DIRECCIÓN DE OPERACIONES', 'MariaElba.CATALAN@naranja.com', NULL, '$2y$10$ptrK2qQV9ReUkq5IxvWN2e7QSzS44.bcjnTJbu87mfR9NuDmwfdZ2', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(2292, 'FABIANA', 'CABRAL', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Fabiana.CABRAL@naranja.com', NULL, '$2y$10$nz566hXhRzu.JwLazOzaBOVYIzvA5Qc2Ef21EExNzt0l1ltkcag6C', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(2303, 'LETICIA SUSANA', 'FRIAS', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'PERSONALIZACION DE TARJETAS', 'PERSONALIZACION DE TARJETAS', 1021, 'DIRECCIÓN DE OPERACIONES', 'Leticia.FRIAS@naranja.com', NULL, '$2y$10$ULBvzBUVNfDtrJTOfX5/pemtTe9.y6mBf/Alif94XeoBMra2CPnke', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(2306, 'EVANGELINA BEATRIZ', 'APPENDINO', 'ASISTENTE DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Evangelina.APPENDINO@naranja.com', NULL, '$2y$10$28WNAfhbvVVJJIzE4KI6LO3lUc3QGMX1kXktS0h/JmWVUtMNOEO5C', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(2324, 'LYDIA MARCELA RAQUEL', 'LUNA', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'SERVICIOS DE ABASTECIMIENTO', 'SERVICIOS DE ABASTECIMIENTO', 17541, 'DIRECCIÓN DE OPERACIONES', 'Marcela.LUNA@naranja.com', NULL, '$2y$10$zQW5Nh7CpQjMIHFcQuPq8uQu.gwpGqlab0GanmBuGouv74J5Oc7Yq', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(2336, 'SANDRA INES', 'LARDONE', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Sandra.LARDONE@naranja.com', NULL, '$2y$10$Inz3zlm9sfXqP.uec0zH4u2jDEfWIvGdb3sshD/Maxm0kEnnq7rhu', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(2348, 'FLAVIO DAVID', 'GARELLO', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Flavio.GARELLO@naranja.com', NULL, '$2y$10$fGnAoKTPc/TFYE8JE0treeRF.0hqe4jlQM5Bg42K.GeJv2HQ1VUQa', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(2426, 'DANIELA RAQUEL', 'ARIAS', 'ANALISTA DE ABM DE COMERCIOS AMIGOS', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE CA', 'PROCESAMIENTO MASIVO DE CA', 3709, 'DIRECCIÓN DE OPERACIONES', 'Daniela.ARIAS@naranja.com', NULL, '$2y$10$HnbMG.cUWBhugUwvSOOv9OSQw/kIt6MUDA8O3UUlFoBHubCUtbJa6', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(2541, 'NATALIA', 'CORTI', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Natalia.CORTI@naranja.com', NULL, '$2y$10$N8j8MuBXC1sDg9jhFL53E.pc9z.x5z7M2F3gvi3vJY8TPiTK226ua', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(2694, 'GABRIELA INES', 'GERVALDO', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Gabriela.GERVALDO@naranja.com', NULL, '$2y$10$zyL2cQj2QL3coy4VjFety.c9KhpxVkQnWeYlQ94oAq1pHI3WM84jK', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(2931, 'FABRICIO', 'NASUTE', 'COORDINADOR DE PROC. MASIVO DE OPERACIONES', 'COORDINADOR', 'COORDINADOR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 3709, 'DIRECCIÓN DE OPERACIONES', 'Fabricio.NASUTE@naranja.com', NULL, '$2y$10$TRcPyL1P6Xnh.Ty99EWEvua6twpmYKFVah4tzmF3ZMyaemA6fSbRi', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(3709, 'CAROLINA ELIZABETH', 'LOPEZ', 'JEFE DE ANALISIS CREDITICIO', 'JEFE', 'JEFE', 'ORIGINACION', 'ORIGINACIÓN', 8721, 'DIRECCIÓN DE OPERACIONES', 'Carolina.LOPEZ@naranja.com', NULL, '$2y$10$6W7Qj1toJ1twSxYq9QzoO./ENSMcgR1ps.FOkPvOVBzg1TEowCl.a', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(3711, 'MARIA BELEN', 'FERREYRA', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'mariabelen.ferreyra@naranja.com', NULL, '$2y$10$lgCG39JUS1BAItkuVTGK.OJU/IyIF9UhpAKPol9cC5fweVBXksqaa', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(3915, 'LAURA ALEJANDRA', 'ACOSTA', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'CANALES DIGITALES ASISTIDOS', 'CANALES DIGITALES ASISTIDOS', 2319, 'DIRECCIÓN COMERCIAL', 'Laura.Acosta@naranja.com', NULL, '$2y$10$GUecFAOvtN3Bxg9FR5loeOkHykemtE2PJsrUAgPjLkGXZzU0zJu2S', NULL, '2020-10-12 20:41:03', '2020-10-12 20:41:03'),
(4024, 'ROMINA JULIETA', 'RIVERO', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'PERSONALIZACION DE TARJETAS', 'PERSONALIZACION DE TARJETAS', 1021, 'DIRECCIÓN DE OPERACIONES', 'Romina.RIVERO@naranja.com', NULL, '$2y$10$fLn3qTGoLWjCMhNdRz.rp.5YX4znnBYObdiIMLPTSznZepbMovSE6', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(4479, 'CLARISA SILVIA', 'BEREDJIKLIAN', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'CANALES DIGITALES ASISTIDOS', 'CANALES DIGITALES ASISTIDOS', 2319, 'DIRECCIÓN COMERCIAL', 'Silvia.BEREDJIKLIAN@naranja.com', NULL, '$2y$10$sTvgQyFe7h34BJt.pAbiUeVnVCk9RLwiV2UAgX6SClZ/i9n5U1B36', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(4519, 'MARCELO ALEJANDRO', 'LEDESMA', 'ASISTENTE DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Marcelo.LEDESMA@naranja.com', NULL, '$2y$10$lJ9sUQouJHB/D0oNpgzPk.RnRK0DgHxbk2/AB0.QdXNK7RvwmgoDO', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(4546, 'ANALIA NATALIA', 'PEDRAZA', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Analia.PEDRAZA@naranja.com', NULL, '$2y$10$cMzpHQ/.lNXUDU5aO0BFiemnRJcHjdmEAFLX.9KIWoglggJ6jFpGy', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(4722, 'DIEGO GASTON', 'CEPEDA', 'ASISTENTE SENIOR DE COORDINACION OPERATIVA', 'SENIOR', 'SR AREA INTERNA', 'GESTIÓN OPERATIVA', 'GESTION OPERATIVA', 5736, 'DIRECCIÓN DE OPERACIONES', 'Diego.CEPEDA@naranja.com', NULL, '$2y$10$5x3EdlPNzHrZnThW2DJkpeca5UqE7ZSEqct3O3PQV8xbTF8ufOiw6', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(4952, 'MARIA SOLEDAD', 'CALBO', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Soledad.CALBO@naranja.com', NULL, '$2y$10$/j1/FG8vfM6zssJfyW0ebu7bUY/wnyFvbjWJfYueODu5iWRWnz41O', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(5046, 'MARIANELA GRETEL', 'CONTE', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'PLASTICOS - ADMINISTRACIÓN Y PRODUCCIÓN', 'PLASTICOS ADMINISTRACION', 1021, 'DIRECCIÓN DE OPERACIONES', 'Marianella.CONTE@naranja.com', NULL, '$2y$10$nwCua8Ft5my1jyvdq9JVmOEuRtIAaoxlioLu2t2Oi1F8pfqmG9RDC', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(5076, 'CECILIA', 'COOREMAN', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Cecilia.COOREMAN@naranja.com', NULL, '$2y$10$AqC2kwD2i0ATn0xHqj6yTOA/rTLNQz1Wg2yjHa35xqS9yE210Ouwy', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(5158, 'NATALIA VANESA', 'TROSCH', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Natalia.TROSCH@naranja.com', NULL, '$2y$10$yZzBL8.lzcSYgoqedUaFA.8gYBG.iP5l9yw6aCnaKVS2XE3/WKome', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(5583, 'MARIA ALEJANDRA', 'ORDOÑEZ', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'CANALES DIGITALES ASISTIDOS', 'CANALES DIGITALES ASISTIDOS', 2319, 'DIRECCIÓN COMERCIAL', 'Alejandra.ORDONEZ@naranja.com', NULL, '$2y$10$SSjzXeH8psByuwoIUFOABOWVnPJntEGxW9lXf6hAdQh2rfJguzxgy', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(5736, 'MIGUEL ANGEL', 'RODRIGUEZ PASTOR', 'JEFE DE PROCESAMIENTO', 'JEFE', 'JEFE', 'GESTIÓN OPERATIVA', 'GESTION OPERATIVA', 8721, 'DIRECCIÓN DE OPERACIONES', 'Miguel.PASTOR@naranja.com', NULL, '$2y$10$nUBQJZMwTQm04StRZTlfF.24cTNvV8extSb/g0jLvgiXp2m6ddIkK', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(5916, 'JUAN PABLO', 'FERRERAS', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'SERVICIOS DE ABASTECIMIENTO', 'SERVICIOS DE ABASTECIMIENTO', 17541, 'DIRECCIÓN DE OPERACIONES', 'JuanPablo.FERRERAS@naranja.com', NULL, '$2y$10$G.SvWCXc9lAIHmHAg2KfxugrpJTNncyl8V8GFTHBdaizjCcH.yPL6', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(6780, 'MAXIMILIANO', 'LOPEZ', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'GESTIÓN OPERATIVA', 'GESTION OPERATIVA', 5736, 'DIRECCIÓN DE OPERACIONES', 'Maximiliano.LOPEZ@naranja.com', NULL, '$2y$10$a/DI8wNoUGe7ngKTX5uBSeyIQJVrjf7kbI8Yu1QuJ0Z2IkEabBjq2', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(7089, 'CRISTIAN NICOLAS', 'CAÑAS', 'ANALISTA SENIOR DE SEGURIDAD CREDITICIA', 'SENIOR', 'SR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Cristian.CANAS@naranja.com', NULL, '$2y$10$j/oJ0woXuXoMlvFBfu4M3.SNGHuxkwxSMYG3Ge7ob0qXsZwpAuQk6', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(7843, 'CARINA', 'RODRIGUEZ', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Carina.RODRIGUEZ2@naranja.com', NULL, '$2y$10$FLV90KtLx6O90ni53IcjHer.422hr3hUv/rjqfvXVYQaz8uc5Cbgm', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(8500, 'LUCIANO RAUL', 'COTO', 'ASISTENTE SENIOR DE COORDINACION OPERATIVA', 'SENIOR', 'SR AREA INTERNA', 'GESTIÓN OPERATIVA', 'GESTION OPERATIVA', 5736, 'DIRECCIÓN DE OPERACIONES', 'Luciano.COTO@naranja.com', NULL, '$2y$10$jHwxGq27OSZhgkg65KYO4e/bekQH49WZ2PXbPFen3KcV.euJOqn8K', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(8591, 'MARINA ELIZABET', 'STEEMAN', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Marina.STEEMAN@naranja.com', NULL, '$2y$10$qknc3.QmzPWsrLUIoqpUUO1OnYWOITbd9aowZw0tu7dcPinAekeOe', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(8603, 'IVANA MARINA', 'ARMITANO', 'ASISTENTE DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Ivana.ARMITANO@naranja.com', NULL, '$2y$10$N8.oGcUBeVS7L83K.MAfAuxpot2CT6/TjPFF7r26JhjkF14NbzrZ.', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(8670, 'CECILIA', 'BERROTARAN', 'ANALISTA DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Cecilia.BERROTARAN@naranja.com', NULL, '$2y$10$f1L9bv9ForvJqMQnFrF7sOWfjU2SUoE6qpZ12ROeSMomxEuM3Kfli', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(8773, 'ANGEL EDUARDO', 'LESCANO', 'COORDINADOR DE ANALISIS CREDITICIO', 'COORDINADOR', 'COORDINADOR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 3709, 'DIRECCIÓN DE OPERACIONES', 'angel.lescano@naranja.com', NULL, '$2y$10$kBjaYhslau85n0FRe5Ewk.F/xgPQFVAhkGNaHc2GFIf/o1.pofaTe', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(8797, 'JOSE CARLOS', 'SANTARELLI', 'ASISTENTE SENIOR DE COORDINACION OPERATIVA', 'SENIOR', 'SR AREA INTERNA', 'GESTIÓN OPERATIVA', 'GESTION OPERATIVA', 5736, 'DIRECCIÓN DE OPERACIONES', 'Jose.SANTARELLI@naranja.com', NULL, '$2y$10$Qixa5xxsJzjI5zK/0s2hjOr8MlKTmfx46QWL0CjdnxC0yO87ll46q', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(9902, 'MARIA VERONICA', 'CEBALLOS', 'ANALISTA SENIOR DE PEDIDOS Y RECLAMOS DE OPERACIONES', 'SENIOR', 'SR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'MariaVeronica.CEBALLOS@naranja.com', NULL, '$2y$10$c.bC5Krc57UHzSc.WWWKe.79hLeG6Vhti0XF1Bl1FYmf8SA1rC7ia', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(9994, 'EUGENIO GERMAN', 'MOGGIA', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Eugenio.MOGGIA@naranja.com', NULL, '$2y$10$7xZ56T9OR9uvHJAaLIb2ueXmKvJoxcdsYFdXjr29q/3Z874qEnVzG', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(10281, 'ROMINA CECILIA', 'ANDINO', 'ANALISTA DE PEDIDOS Y RECLAMOS DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'CANALES DIGITALES ASISTIDOS', 'CANALES DIGITALES ASISTIDOS', 2319, 'DIRECCIÓN COMERCIAL', 'Romina.ANDINO@naranja.com', NULL, '$2y$10$RQdjsAMsMpCLBui0hs.BkOS46rj3U35eMpRT6iWSggNAkE3diURY.', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(10597, 'CECILIA MARIA', 'CHIAPPINI', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Cecilia.CHIAPPINI@naranja.com', NULL, '$2y$10$QgB.yCE378AHorq8CBKY5OZxqTWR252PH3/4cQ5UP8wRicPCgXgK2', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(11836, 'ESTEBAN FRANCO DAVID', 'BALLISTRERI', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'GESTIÓN OPERATIVA', 'CENTRO DE IMPRESIÓN', 5736, 'DIRECCIÓN DE OPERACIONES', 'Franco.BALLISTRERI@naranja.com', NULL, '$2y$10$Nw7kwkT2rOZQ.Y87GYb.8eG3Oc4G6h6Cpn4vFdPg4kUWOdZ8lQi7i', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(14211, 'NATALIA SUSANA', 'PICCO', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'NataliaSusana.PICCO@naranja.com', NULL, '$2y$10$W9Y9mhi4B3tiNC1JEYWGCeHLSYM57.dtkVVu4upzMTaghVoBx7MdS', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(14820, 'EMILIANO', 'SEYRAL', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Emiliano.SEYRAL@naranja.com', NULL, '$2y$10$bzz5y27.KMz8OEjio2yOwOcEBZ6wFbufWiyAELplb5Natr62u880a', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(15259, 'CRISTINA DEL VALLE', 'VARAS', 'ANALISTA DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Cristina.VARAS@naranja.com', NULL, '$2y$10$Ea2JSfUV/CBNsAEkco7kaO4OeAo2vyBtF2vNhpVdNOCLexAHRk/kS', NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11'),
(15868, 'EXEQUIEL ANDRES', 'LOPEZ', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'SERVICIOS DE ABASTECIMIENTO', 'SERVICIOS DE ABASTECIMIENTO', 17541, 'DIRECCIÓN DE OPERACIONES', 'exequiel.lopez@naranja.com', NULL, '$2y$10$Xp1zqwtG3FegS3kZS3ZajuHU4jc.1j/K5WiZxE7yP/0r5OGMiZcJ.', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(15955, 'SILVINA ELIZABETH', 'NANTON', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Silvina.NANTON@naranja.com', NULL, '$2y$10$9xmwNJuZhL9uJwnUjIzhR./xs6.6SEdA46yrBrBPlkPh7XAwm5OEK', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(16923, 'ANA ISABEL', 'YANZON', 'ASISTENTE DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Ana.YANZON@naranja.com', NULL, '$2y$10$J69nIO4gvhauaX4YQdndeeRZ.CuXGQRf6KSm.IkJupZCrQMQF99Ky', NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11'),
(17109, 'FERNANDA AMELIA', 'VELIZ', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'PLASTICOS - ADMINISTRACIÓN Y PRODUCCIÓN', 'PLASTICOS ADMINISTRACION', 1021, 'DIRECCIÓN DE OPERACIONES', 'Fernanda.VELIZ@naranja.com', NULL, '$2y$10$8kICtzUabjuepQs2sIczHuPkKXBylTWmGG/4RsfyHocEmQ47BIrJy', NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11'),
(17541, 'MARIA AYELEN', 'PRANDI', 'COORDINADOR DE COMPRAS', 'COORDINADOR', 'COORDINADOR AREA INTERNA', 'SERVICIOS DE ABASTECIMIENTO', 'SERVICIOS DE ABASTECIMIENTO', 5736, 'DIRECCIÓN DE OPERACIONES', 'Ayelen.PRANDI@naranja.com', NULL, '$2y$10$5L2ZXdNZMx.O.KyLenSlru7A0UeJlafq327NX/Pjrm5v/apWwOLea', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(17588, 'HERNAN EMILIANO', 'JACOBO', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACION', 'ORIGINACIÓN', 3709, 'DIRECCIÓN DE OPERACIONES', 'Hernan.JACOBO@naranja.com', NULL, '$2y$10$/AH0ikknjZIpvp1Z9Jn/Tu0tFNa75vVaKVVQjui6giefi6fyhyF2W', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(17604, 'ALEJANDRO', 'BUSTOS CHESTA', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Alejandro.BUSTOS@naranja.com', NULL, '$2y$10$8tGbnh2Qhr8EJW9Iqyc0Z.zRBm1cZTnRKN.okBfW/0OOaB0b6PMn2', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(17605, 'GABRIEL', 'PILATTI', 'ASISTENTE DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'CANALES DIGITALES ASISTIDOS', 'CANALES DIGITALES ASISTIDOS', 2319, 'DIRECCIÓN COMERCIAL', 'Gabriel.PILATTI@naranja.com', NULL, '$2y$10$TveAIubt35qVpO6vCH8Y5uRNhhJKYO2WT7AdgkeRsQfK/brHmUtTW', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(18285, 'SEBASTIAN', 'D\'ANDREA', 'ASISTENTE SENIOR DE ANALISIS CREDITICIO', 'SENIOR', 'SR AREA INTERNA', 'SERVICIOS DE ABASTECIMIENTO', 'SERVICIOS DE ABASTECIMIENTO', 17541, 'DIRECCIÓN DE OPERACIONES', 'Sebastian.DANDREA@naranja.com', NULL, '$2y$10$asgP9VhYtVxx4DpZfppL/uD1UCAkVpu6ykQhum.shswzXvv3FpbPS', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(20729, 'XIMENA', 'VELASQUE', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Ximena.VELASQUE@naranja.com', NULL, '$2y$10$MjJhO5wpMQcHVTfrZQFSW.fFxzH58PRF0McAyJJq./wyeYTSs33yq', NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11'),
(20846, 'PAOLA ALEJANDRA', 'HERRERA', 'ASISTENTE DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACION', 'ORIGINACIÓN I', 3709, 'DIRECCIÓN DE OPERACIONES', 'Paola.HERRERA@naranja.com', NULL, '$2y$10$o.PrQZrYHawDEwlOWEbYmuATPAfK5KJ9qos8Sy9yo4d/VSIwhokmy', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(20851, 'MARIA ALEJANDRA', 'SMANIA', 'ANALISTA DE ABM DE COMERCIOS AMIGOS', 'JUNIOR', 'JR AREA INTERNA', 'TIENDA CUSTOMER', 'PROCESAMIENTO MASIVO DE CA', 25305, 'DIRECCIÓN COMERCIAL', 'Alejandra.SMANIA@naranja.com', NULL, '$2y$10$As2PoTiGeymz0bGi/RqfbOde5NVeesvjRDM7A3BgE3/y0p.GOSs5q', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(23014, 'EMMANUEL', 'ZANOTTI', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'GESTIÓN OPERATIVA', 'CENTRO DE IMPRESIÓN', 5736, 'DIRECCIÓN DE OPERACIONES', 'emmanuel.zanotti@naranja.com', NULL, '$2y$10$NhDRtFobjKLuzwloueoQE.GRpW7MhrIUnnCKlSoJC0Pjj2Ws9aOCS', NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11'),
(24821, 'ROMINA VERONICA', 'SUAREZ', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE CA', 'PROCESAMIENTO MASIVO DE CA', 3709, 'DIRECCIÓN DE OPERACIONES', 'Romina.SUAREZ@naranja.com', NULL, '$2y$10$cMC.65YnwACTnsTAyrb6BOPz.mJ8DkaK7E3J.yj.eLgt7.zwqrVK6', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(25100, 'MARIO ALBERTO', 'CANOVAS', 'ASISTENTE DE ANALISIS CREDITICIO', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACION', 'ORIGINACIÓN', 3709, 'DIRECCIÓN DE OPERACIONES', 'Mario.CANOVAS@naranja.com', NULL, '$2y$10$3yRD50dI5eG/nDBvZoN8xO.wXeRWoJhJamaSO0EZPEICizX49RR/S', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(26275, 'ORNELLA', 'HECHALAR', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'Ornella.HECHALAR@naranja.com', NULL, '$2y$10$1UPYu/EeVDxHaA60da2smOOl8xxA36zdCTDzaKWPcNgwDJiw8XSHO', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(26278, 'VANESA SOLEDAD', 'SANTONI', 'ASISTENTE SENIOR DE ANALISIS CREDITICIO', 'SENIOR', 'SR AREA INTERNA', 'SERVICIOS DE ABASTECIMIENTO', 'SERVICIOS DE ABASTECIMIENTO', 17541, 'DIRECCIÓN DE OPERACIONES', 'Vanesa.SANTONI@naranja.com', NULL, '$2y$10$xr5UVMe4m5Z9b1IRGjNCquNmAmLWzqm1dlhyN6BEUvtCsErMVZJdq', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(26896, 'MAXIMILIANO', 'ANTONELLI', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'GESTIÓN OPERATIVA', 'PLANEAMIENTO DE INSUMOS Y CAUDALES', 5736, 'DIRECCIÓN DE OPERACIONES', 'maximiliano.antonelli@naranja.com', NULL, '$2y$10$mu2WfX6Sr5.kXG9W5XSxFu7zLrt7F5A.w59BmdIzYgNavJAFcjCL6', NULL, '2020-10-12 20:41:04', '2020-10-12 20:41:04'),
(27138, 'MARIA VICTORIA', 'MARQUEZ', 'ANALISTA DE ABM DE COMERCIOS AMIGOS', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE CA', 'PROCESAMIENTO MASIVO DE CA', 3709, 'DIRECCIÓN DE OPERACIONES', 'Victoria.MARQUEZ@naranja.com', NULL, '$2y$10$fwb4CJQ/I06c8Yph5RIY2eQlbIZx52d/uH9QVknKvyzEJ2dyn1N5G', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(27193, 'YANINA SOLEDAD', 'NAVARRO', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'PERSONALIZACION DE TARJETAS', 'PERSONALIZACION DE TARJETAS', 1021, 'DIRECCIÓN DE OPERACIONES', 'Yanina.NAVARRO@naranja.com', NULL, '$2y$10$lFzRU9bW5jHqLnLf59KHF.oN68OiiSr1W01Gg.wXJ/S4aoKI1OKOG', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(27196, 'DIEGO ALEJANDRO', 'PEREZ', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'PLASTICOS - ADMINISTRACIÓN Y PRODUCCIÓN', 'PLASTICOS ADMINISTRACION', 1021, 'DIRECCIÓN DE OPERACIONES', 'Diego.PEREZ@naranja.com', NULL, '$2y$10$X3I0N8Byg916ISStJWyaN./BCr3EJdBtQGSwUMkZhWeg7irMgtYQ2', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(27222, 'VALERIA GISELA', 'VARELA', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'Valeria.VARELA@naranja.com', NULL, '$2y$10$smvVjTaQreu7iJextvtLK.v09cwfcJLmBX8nD2aFvmvUAGpjSIpAy', NULL, '2020-10-12 20:41:11', '2020-10-12 20:41:11'),
(28198, 'ROMINA PAOLA', 'RUBIOLO', 'COORDINADOR DE SEGURIDAD CREDITICIA', 'COORDINADOR', 'COORDINADOR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 8721, 'DIRECCIÓN DE OPERACIONES', 'Romina.RUBIOLO@naranja.com', NULL, '$2y$10$sVm44XULkofGXln2BXTlj.Pk2uL2WuNGiIuvrt37LecbW77ja7xou', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(29557, 'LUCAS MARTIN', 'JODAR ACOSTA', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Lucas.Jodar@naranja.com', NULL, '$2y$10$XN2sVblPlRcjXEbm6R6A.OqS7nHrACX7OkajoXaTP1CAYaNyLY9o6', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(30924, 'NATALIA ANDREA', 'MOSCONI', 'ASISTENTE SENIOR DE ADMINISTRACION TECNICO', 'SENIOR', 'SR AREA INTERNA', 'PROCESAMIENTO MASIVO DE CA', 'PROCESAMIENTO MASIVO DE CA', 3709, 'DIRECCIÓN DE OPERACIONES', 'Natalia.MOSCONI@naranja.com', NULL, '$2y$10$FK6BRpHl91NpwzUnjizQZeal6eWAR.xNwIQITPPGOA2h/V3cksReq', NULL, '2020-10-12 20:41:08', '2020-10-12 20:41:08'),
(31243, 'CYNTHIA DAIANA', 'AGUIRRE LIBRAMENTO', 'ANALISTA DE PEDIDOS Y RECLAMOS DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACIÓN I', 'ORIGINACIÓN I', 8773, 'DIRECCIÓN DE OPERACIONES', 'cynthia.aguirre@naranja.com', NULL, '$2y$10$mnnGJc1NLt0okxHDWv3PMOKXu4K/EpqOwlTeFJobuEjV44H8Puxt.', NULL, '2020-10-12 20:41:03', '2020-10-12 20:41:03'),
(31364, 'CARLOS ISMAEL', 'DAGUM', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'ismael.dagum@naranja.com', NULL, '$2y$10$s96K64xu3grXroi3jq8cduz23ZoUfU.xZEynYANbCvn4MnyX/vx2K', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(33255, 'RODRIGO EZEQUIEL', 'ROMERO', 'ASISTENTE DE ANALISIS TITULARES', 'JUNIOR', 'JR AREA INTERNA', 'ORIGINACION', 'ORIGINACIÓN', 3709, 'DIRECCIÓN DE OPERACIONES', 'Rodrigo.ROMERO@naranja.com', NULL, '$2y$10$Sp9.nqAWxTuSeSoEAIOVeO4iW3vx8qmws2C.mGblMztFnJPB6wlJK', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(33527, 'MARIANA VANESA', 'RIVILLI', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'PLASTICOS - ADMINISTRACIÓN Y PRODUCCIÓN', 'PLASTICOS ADMINISTRACION', 1021, 'DIRECCIÓN DE OPERACIONES', 'Mariana.RIVILLI@naranja.com', NULL, '$2y$10$fvJ/9tKg9.UwaCR7pJlLweQtr1nVMuI5HZK5BPQbkvjUXd8ic.1oS', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(34378, 'ROMINA LILIANA', 'ROLDAN RUARTE', 'ANALISTA DE SEGURIDAD CREDITICIA', 'JUNIOR', 'JR AREA INTERNA', 'PREVENCIÓN DE FRAUDES', 'PREVENCION DE FRAUDES', 28198, 'DIRECCIÓN DE OPERACIONES', 'Romina.ROLDAN@naranja.com', NULL, '$2y$10$bvkPkdyLrwMFAMkY8sxCP.g.0NAuEvrJWSXXb4d4o8SlauoDZbRiS', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(35478, 'GUADALUPE', 'DE VERTIZ', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'SERVICIOS DE ABASTECIMIENTO', 'SERVICIOS DE ABASTECIMIENTO', 17541, 'DIRECCIÓN DE OPERACIONES', 'guadalupe.devertiz@naranja.com', NULL, '$2y$10$PQwWL1h.bJKMe..j3wLPpuI.Oze7iNfP7Yg0Vt04FwWKs4ElViQGW', NULL, '2020-10-12 20:41:06', '2020-10-12 20:41:06'),
(37218, 'GISELA SILVINA', 'JULIAN', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'SERVICIOS DE ABASTECIMIENTO', 'SERVICIOS DE ABASTECIMIENTO', 17541, 'DIRECCIÓN DE OPERACIONES', 'Gisela.JULIAN@naranja.com', NULL, '$2y$10$cBWoeFYQforkEGtzejM0oOyVnUN5HIJBSJetOCijMzYIY9V5e92x2', NULL, '2020-10-12 20:41:07', '2020-10-12 20:41:07'),
(37219, 'ANALY', 'OLVEIRA', 'ASISTENTE DE PLASTICOS', 'JUNIOR', 'JR AREA INTERNA', 'PLASTICOS - ADMINISTRACIÓN Y PRODUCCIÓN', 'PLASTICOS ADMINISTRACION', 1021, 'DIRECCIÓN DE OPERACIONES', 'Analy.OLVEIRA@naranja.com', NULL, '$2y$10$t5n5EufSQjul6fhO.0V6Oez/JGBL3dG9GkCOVPc/M4yLE6mv4LLDW', NULL, '2020-10-12 20:41:09', '2020-10-12 20:41:09'),
(40758, 'MANUEL', 'CHASO BRASCA', 'ASISTENTE DE PROCESAMIENTO', 'JUNIOR', 'JR AREA INTERNA', 'GESTIÓN OPERATIVA', 'CENTRO DE IMPRESIÓN', 5736, 'DIRECCIÓN DE OPERACIONES', 'manuel.chasobrasca@naranja.com', NULL, '$2y$10$6qTDm88lqS2C7YqGJYo4PuqknOPH5wdU7BAT/PG6UzQbx6rqM28lG', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(47561, 'NAZARENA PAULA', 'CALISTRO', 'ANALISTA DE PROCESAMIENTO MASIVO DE OPERACIONES', 'JUNIOR', 'JR AREA INTERNA', 'PROCESAMIENTO MASIVO DE TITULARES', 'PROCESAMIENTO MASIVO DE TITULARES', 2931, 'DIRECCIÓN DE OPERACIONES', 'nazarena.calistro@naranja.com', NULL, '$2y$10$yA/OK3dU6AY6b3ArgDUPQ.PqjqKvE.2Srar4I8QB8dZxn9aJ9Nr1e', NULL, '2020-10-12 20:41:05', '2020-10-12 20:41:05'),
(59210, 'CARLOS FRANCISCO', 'SALA', 'ASISTENTE SENIOR DE COORDINACION OPERATIVA', 'SENIOR', 'SR AREA INTERNA', 'GESTIÓN OPERATIVA', 'GESTION OPERATIVA', 5736, 'DIRECCIÓN DE OPERACIONES', 'francisco.sala@naranja.com', NULL, '$2y$10$gsbjxW9vseuUQj8yw7R40.hb3Dvr/bJ8kDss/oDBTWkevLrxe4Uem', NULL, '2020-10-12 20:41:10', '2020-10-12 20:41:10'),
(59211, 'Josefina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'josecanavesi@gmail.com', NULL, '$2y$10$Zo1CW4JyDtGnNE.QTTTacezo.YFDZ3e.QWQHpR0OrTT43leyfRHl2', NULL, '2020-10-13 08:31:50', '2020-10-13 09:42:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_test_id_foreign` (`test_id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `aspects`
--
ALTER TABLE `aspects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aspects_title_unique` (`title`),
  ADD KEY `aspects_dimension_id_foreign` (`dimension_id`);

--
-- Indexes for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dimensions_title_unique` (`title`),
  ADD KEY `dimensions_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `evaluations_title_unique` (`title`),
  ADD KEY `evaluations_user_id_foreign` (`user_id`);

--
-- Indexes for table `evaluation_thread`
--
ALTER TABLE `evaluation_thread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `questions_title_unique` (`title`),
  ADD KEY `questions_dimension_id_foreign` (`dimension_id`),
  ADD KEY `questions_aspect_id_foreign` (`aspect_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_test_id_foreign` (`test_id`);

--
-- Indexes for table `revisions`
--
ALTER TABLE `revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_evaluation_id_foreign` (`evaluation_id`),
  ADD KEY `tests_user_id_foreign` (`user_id`),
  ADD KEY `tests_evaluator_id_foreign` (`evaluator_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `threads_title_unique` (`title`);

--
-- Indexes for table `thread_question`
--
ALTER TABLE `thread_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `topics_title_unique` (`title`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `aspects`
--
ALTER TABLE `aspects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dimensions`
--
ALTER TABLE `dimensions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `evaluation_thread`
--
ALTER TABLE `evaluation_thread`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `revisions`
--
ALTER TABLE `revisions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `thread_question`
--
ALTER TABLE `thread_question`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59212;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `answers_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`);

--
-- Constraints for table `aspects`
--
ALTER TABLE `aspects`
  ADD CONSTRAINT `aspects_dimension_id_foreign` FOREIGN KEY (`dimension_id`) REFERENCES `dimensions` (`id`);

--
-- Constraints for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD CONSTRAINT `dimensions_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`);

--
-- Constraints for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `evaluations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_aspect_id_foreign` FOREIGN KEY (`aspect_id`) REFERENCES `aspects` (`id`),
  ADD CONSTRAINT `questions_dimension_id_foreign` FOREIGN KEY (`dimension_id`) REFERENCES `dimensions` (`id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_evaluation_id_foreign` FOREIGN KEY (`evaluation_id`) REFERENCES `evaluations` (`id`),
  ADD CONSTRAINT `tests_evaluator_id_foreign` FOREIGN KEY (`evaluator_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
