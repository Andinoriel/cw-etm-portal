-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-host:3306
-- Generation Time: Nov 09, 2020 at 03:44 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cathedras`
--

CREATE TABLE `cathedras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cathedras`
--

INSERT INTO `cathedras` (`id`, `name`, `thumbnail`, `faculty_id`) VALUES
(1, 'Кафедра економіки підприємств', '', 1),
(2, 'Кафедра економічної теорії та підприємництва', '', 1),
(3, 'Кафедра інноватики та управління', '', 1),
(4, 'Кафедра маркетингу та бізнес-адміністрування', '', 1),
(5, 'Кафедра обліку і аудиту', '', 1),
(6, 'Кафедра транспортного менеджменту і логістики', '', 1),
(7, 'Кафедра фінансів і банківської справи', '', 1),
(8, 'Електроенергетичні комплекси та системи', '', 2),
(9, 'Кафедра охорони праці й навколишнього середовища', '', 2),
(10, 'Кафедра промислових теплоенергетичних установок і теплопостачання', '', 2),
(11, 'Системи автоматизації та електроприводу', '', 2),
(12, 'Кафедра матеріалознавства та перспективних технологій', '', 3),
(13, 'Кафедра металургія чорних металів', '', 3),
(14, 'Кафедра обробки металів тиском', '', 3),
(15, 'Кафедра теорії металургійних процесів і ливарного виробництва', '', 3),
(16, 'Кафедра хімічної технології і інженерії', '', 3),
(17, 'Кафедра перекладу', '', 4),
(18, 'Кафедра соціології та соціальної роботи', '', 4),
(19, 'Кафедра туризму', '', 4),
(20, 'Кафедра української мови та слов’янської філології', '', 4),
(21, 'Кафедра фізичного виховання і спорту', '', 4),
(22, 'Кафедра філософських наук та історії України', '', 4),
(23, 'Кафедра гуманітарних дисциплін і мовної підготовки іноземних громадян', '', 5),
(24, 'Кафедра загальноосвітніх дисциплін', '', 5),
(25, 'Кафедра іноземних мов', '', 5),
(26, 'Кафедра автоматизації і комп’ютерних технологій', '', 6),
(27, 'Кафедра біомедичної інженерії', '', 6),
(28, 'Кафедра вищої та прикладної математики', '', 6),
(29, 'Кафедра інформатики', '', 6),
(30, 'Кафедра комп’ютерних наук', '', 6),
(31, 'Кафедра фізики', '', 6),
(32, 'Кафедра «Архітектура»', '', 7),
(33, 'Кафедра автоматизації та механізації зварювального виробництва', '', 7),
(34, 'Кафедра металургії і технології зварювального виробництва', '', 7),
(35, 'Кафедра механічного обладнання заводів чорної металургії', '', 7),
(36, 'Кафедра наноінженерії у галузевому машинобудуванні', '', 7),
(37, 'Кафедра підйомно-транспортних машин і деталей машин', '', 7),
(38, 'Кафедра технології машинобудування', '', 7),
(39, 'Кафедра автомобільного транспорту', '', 8),
(40, 'Кафедра технології міжнародних перевезень і логістики', '', 8),
(41, 'Кафедра транспортних технологій підприємств', '', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cathedras`
--
ALTER TABLE `cathedras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cathedras_faculty_id_foreign` (`faculty_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cathedras`
--
ALTER TABLE `cathedras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cathedras`
--
ALTER TABLE `cathedras`
  ADD CONSTRAINT `cathedras_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
