-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Paź 2023, 09:04
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `advertising_system`
--
CREATE DATABASE IF NOT EXISTS `advertising_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE `advertising_system`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_additional_experience`
--

CREATE TABLE IF NOT EXISTS `advertising_additional_experience` (
  `additional_experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `additional_experience_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `additional_experience_organizer` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `additional_experience_date` date NOT NULL,
  PRIMARY KEY (`additional_experience_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_business`
--

CREATE TABLE IF NOT EXISTS `advertising_business` (
  `business_id` int(11) NOT NULL AUTO_INCREMENT,
  `business_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `business_description` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `business_benefits` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `business_address` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`business_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_categories`
--

CREATE TABLE IF NOT EXISTS `advertising_categories` (
  `categories_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `advertising_categories`
--

INSERT INTO `advertising_categories` (`categories_id`, `categories_name`) VALUES
(1, 'energetyka'),
(2, 'edukacja'),
(3, 'ekonomia'),
(4, 'produkcja'),
(5, 'hotelarstwo');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_contract`
--

CREATE TABLE IF NOT EXISTS `advertising_contract` (
  `contract_id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`contract_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `advertising_contract`
--

INSERT INTO `advertising_contract` (`contract_id`, `contract_name`) VALUES
(1, 'o prace'),
(2, 'o dzielo'),
(3, 'zlecenie'),
(4, 'B2B'),
(5, 'zastepstwo'),
(6, 'staż/praktyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_education`
--

CREATE TABLE IF NOT EXISTS `advertising_education` (
  `education_id` int(11) NOT NULL AUTO_INCREMENT,
  `education_school_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `education_residence` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `education_education_level_id` int(11) NOT NULL,
  `education_start` date NOT NULL,
  `education_end` date NOT NULL,
  PRIMARY KEY (`education_id`),
  KEY `advertising_education_ibfk_1` (`education_education_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_education_level`
--

CREATE TABLE IF NOT EXISTS `advertising_education_level` (
  `education_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `education_level_name` varchar(123) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`education_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `advertising_education_level`
--

INSERT INTO `advertising_education_level` (`education_level_id`, `education_level_name`) VALUES
(1, 'podstawowe'),
(2, 'zawodowe'),
(3, 'średnie'),
(4, 'licencjat');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_job_level`
--

CREATE TABLE IF NOT EXISTS `advertising_job_level` (
  `job_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_level_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`job_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `advertising_job_level`
--

INSERT INTO `advertising_job_level` (`job_level_id`, `job_level_name`) VALUES
(1, 'praktykant/stażysta'),
(2, 'asystent'),
(3, 'junior'),
(4, 'mid'),
(5, 'senior'),
(6, 'ekspert'),
(7, 'kierownik'),
(8, 'menedżer'),
(9, 'dyrektor'),
(10, 'prezes');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_job_mode`
--

CREATE TABLE IF NOT EXISTS `advertising_job_mode` (
  `job_mode` int(11) NOT NULL AUTO_INCREMENT,
  `job_mode_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`job_mode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `advertising_job_mode`
--

INSERT INTO `advertising_job_mode` (`job_mode`, `job_mode_name`) VALUES
(1, 'stacjonarna'),
(2, 'hybrydowa'),
(3, 'zdalna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_job_time`
--

CREATE TABLE IF NOT EXISTS `advertising_job_time` (
  `job_time_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_time_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`job_time_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `advertising_job_time`
--

INSERT INTO `advertising_job_time` (`job_time_id`, `job_time_name`) VALUES
(1, 'czesc etatu'),
(2, 'caly etat'),
(3, 'dodatkowa/tymczasowa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_languages`
--

CREATE TABLE IF NOT EXISTS `advertising_languages` (
  `languages_id` int(11) NOT NULL AUTO_INCREMENT,
  `languages_experience_id` int(11) NOT NULL,
  `languages_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`languages_id`),
  KEY `users_languages_experience_id` (`languages_experience_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_languages_experience`
--

CREATE TABLE IF NOT EXISTS `advertising_languages_experience` (
  `languages_experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `languages_experience_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`languages_experience_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `advertising_languages_experience`
--

INSERT INTO `advertising_languages_experience` (`languages_experience_id`, `languages_experience_name`) VALUES
(1, 'podstawowy'),
(2, 'podstawowy'),
(3, 'średniozaawansowany'),
(4, 'zaawansowany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_offers`
--

CREATE TABLE IF NOT EXISTS `advertising_offers` (
  `offers_id` int(11) NOT NULL AUTO_INCREMENT,
  `offers_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `offers_reward` decimal(10,0) NOT NULL,
  `offers_requirements` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `offers_work_days` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `offers_end` date DEFAULT NULL,
  `offers_categories_id` int(11) NOT NULL,
  `offers_contract_id` int(11) NOT NULL,
  `offers_job_level_id` int(11) NOT NULL,
  `offers_job_mode_id` int(11) NOT NULL,
  `offers_job_time_id` int(11) NOT NULL,
  `offers_business_id` int(11) NOT NULL,
  PRIMARY KEY (`offers_id`),
  KEY `offers_categories_id` (`offers_categories_id`),
  KEY `offers_contract_id` (`offers_contract_id`),
  KEY `offers_job_level_id` (`offers_job_level_id`),
  KEY `offers_job_mode_id` (`offers_job_mode_id`),
  KEY `offers_job_time_id` (`offers_job_time_id`),
  KEY `offers_business_id` (`offers_business_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_users`
--

CREATE TABLE IF NOT EXISTS `advertising_users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_mail` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `users_password` varchar(999) COLLATE utf8mb4_polish_ci NOT NULL,
  `users_name` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `users_surname` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `users_residence` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `users_phone_number` int(11) NOT NULL,
  `users_birthday` date NOT NULL,
  `users_profil_picture` blob NOT NULL,
  `users_job_level` int(11) NOT NULL,
  `users_job_level_description` text COLLATE utf8mb4_polish_ci NOT NULL,
  `users_description` text COLLATE utf8mb4_polish_ci NOT NULL,
  `users_links` text COLLATE utf8mb4_polish_ci NOT NULL,
  `users_education_id` int(11) NOT NULL,
  `users_languages_id` int(11) NOT NULL,
  `users_skills` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `users_additional_experience_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`),
  KEY `users_job_level` (`users_job_level`),
  KEY `users_additional_experience_id` (`users_additional_experience_id`),
  KEY `users_education_id` (`users_education_id`),
  KEY `users_languages_id` (`users_languages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_users_experience`
--

CREATE TABLE IF NOT EXISTS `advertising_users_experience` (
  `users_experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_experience_users_id` int(11) NOT NULL,
  `users_experience_job_level_id` int(11) NOT NULL,
  `users_experience_firm_name` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `users_experience_location` varchar(120) COLLATE utf8mb4_polish_ci NOT NULL,
  `users_experience_start` date NOT NULL,
  `users_experience_end` date NOT NULL,
  `users_experience_ duties` text COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`users_experience_id`),
  KEY `users_experience_users_id` (`users_experience_users_id`),
  KEY `users_experience_job_level_id` (`users_experience_job_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `advertising_education`
--
ALTER TABLE `advertising_education`
  ADD CONSTRAINT `advertising_education_ibfk_1` FOREIGN KEY (`education_education_level_id`) REFERENCES `advertising_education_level` (`education_level_id`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `advertising_languages`
--
ALTER TABLE `advertising_languages`
  ADD CONSTRAINT `advertising_languages_ibfk_1` FOREIGN KEY (`languages_experience_id`) REFERENCES `advertising_languages_experience` (`languages_experience_id`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `advertising_offers`
--
ALTER TABLE `advertising_offers`
  ADD CONSTRAINT `advertising_offers_ibfk_1` FOREIGN KEY (`offers_categories_id`) REFERENCES `advertising_categories` (`categories_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_2` FOREIGN KEY (`offers_contract_id`) REFERENCES `advertising_contract` (`contract_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_3` FOREIGN KEY (`offers_job_level_id`) REFERENCES `advertising_job_level` (`job_level_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_4` FOREIGN KEY (`offers_job_mode_id`) REFERENCES `advertising_job_mode` (`job_mode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_5` FOREIGN KEY (`offers_job_time_id`) REFERENCES `advertising_job_time` (`job_time_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_6` FOREIGN KEY (`offers_business_id`) REFERENCES `advertising_business` (`business_id`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `advertising_users`
--
ALTER TABLE `advertising_users`
  ADD CONSTRAINT `advertising_users_ibfk_1` FOREIGN KEY (`users_additional_experience_id`) REFERENCES `advertising_additional_experience` (`additional_experience_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_users_ibfk_2` FOREIGN KEY (`users_education_id`) REFERENCES `advertising_education` (`education_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_users_ibfk_3` FOREIGN KEY (`users_languages_id`) REFERENCES `advertising_languages` (`languages_id`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `advertising_users_experience`
--
ALTER TABLE `advertising_users_experience`
  ADD CONSTRAINT `advertising_users_experience_ibfk_1` FOREIGN KEY (`users_experience_job_level_id`) REFERENCES `advertising_job_level` (`job_level_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_users_experience_ibfk_2` FOREIGN KEY (`users_experience_users_id`) REFERENCES `advertising_users` (`users_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
