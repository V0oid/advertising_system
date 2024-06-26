-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 10, 2024 at 06:13 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advertising_system`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_additional_experience`
--

CREATE TABLE `advertising_additional_experience` (
  `additional_experience_id` int(11) NOT NULL,
  `additional_experience_name` varchar(120) NOT NULL,
  `additional_experience_organizer` varchar(120) NOT NULL,
  `additional_experience_date` date NOT NULL,
  `offer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_additional_experience`
--

INSERT INTO `advertising_additional_experience` (`additional_experience_id`, `additional_experience_name`, `additional_experience_organizer`, `additional_experience_date`, `offer_id`) VALUES
(1, 'Dodatkowe doswiadczenie1', 'Host', '2024-06-19', 3),
(2, 'Dodatkowe doswiadczenie2', 'Host', '2024-06-19', 3),
(3, 'Dodatkowe doswiadczenie3', 'Host', '2024-06-19', 3),
(4, 'Dodatkowe doswiadczenie4', 'Host', '2024-06-19', 3),
(5, 'Dodatkowe doswiadczenie5', 'Host', '2024-06-19', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_business`
--

CREATE TABLE `advertising_business` (
  `business_id` int(11) NOT NULL,
  `business_name` varchar(120) NOT NULL,
  `business_description` varchar(120) NOT NULL,
  `business_benefits` varchar(120) NOT NULL,
  `business_address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_business`
--

INSERT INTO `advertising_business` (`business_id`, `business_name`, `business_description`, `business_benefits`, `business_address`) VALUES
(1, 'Firma 1', 'Opis Opis Opis Opis Opis Opis Opis ', 'Benefit x;Benefit x;Benefit x;Benefit x;Benefit x;Benefit x;Benefit x;Benefit x;Benefit x;Benefit x;Benefit x', 'Limanowa'),
(2, 'Firma 2', 'Opis Opis Opis Opis Opis Opis Opis ', 'Benefity Benefity Benefity Benefity Benefity Benefity ', 'adres adres adres adres adres adres adres adres adres adres ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_categories`
--

CREATE TABLE `advertising_categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_categories`
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

CREATE TABLE `advertising_contract` (
  `contract_id` int(11) NOT NULL,
  `contract_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_contract`
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

CREATE TABLE `advertising_education` (
  `education_id` int(11) NOT NULL,
  `education_school_name` varchar(120) NOT NULL,
  `education_residence` varchar(120) NOT NULL,
  `education_education_level_id` int(11) NOT NULL,
  `education_start` date NOT NULL,
  `education_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_education`
--

INSERT INTO `advertising_education` (`education_id`, `education_school_name`, `education_residence`, `education_education_level_id`, `education_start`, `education_end`) VALUES
(2, 'awdaw', 'dawd', 1, '2024-06-06', '2024-06-10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_education_level`
--

CREATE TABLE `advertising_education_level` (
  `education_level_id` int(11) NOT NULL,
  `education_level_name` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_education_level`
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

CREATE TABLE `advertising_job_level` (
  `job_level_id` int(11) NOT NULL,
  `job_level_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_job_level`
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

CREATE TABLE `advertising_job_mode` (
  `job_mode` int(11) NOT NULL,
  `job_mode_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_job_mode`
--

INSERT INTO `advertising_job_mode` (`job_mode`, `job_mode_name`) VALUES
(1, 'stacjonarna'),
(2, 'hybrydowa'),
(3, 'zdalna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_job_time`
--

CREATE TABLE `advertising_job_time` (
  `job_time_id` int(11) NOT NULL,
  `job_time_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_job_time`
--

INSERT INTO `advertising_job_time` (`job_time_id`, `job_time_name`) VALUES
(1, 'czesc etatu'),
(2, 'caly etat'),
(3, 'dodatkowa/tymczasowa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_languages`
--

CREATE TABLE `advertising_languages` (
  `languages_id` int(11) NOT NULL,
  `languages_experience_id` int(11) NOT NULL,
  `languages_name` varchar(120) NOT NULL,
  `offer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_languages`
--

INSERT INTO `advertising_languages` (`languages_id`, `languages_experience_id`, `languages_name`, `offer_id`) VALUES
(1, 1, 'Angielski', 3),
(2, 2, 'Niemiecki', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_languages_experience`
--

CREATE TABLE `advertising_languages_experience` (
  `languages_experience_id` int(11) NOT NULL,
  `languages_experience_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_languages_experience`
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

CREATE TABLE `advertising_offers` (
  `offers_id` int(11) NOT NULL,
  `offers_name` varchar(120) NOT NULL,
  `offers_reward` decimal(10,0) NOT NULL,
  `offers_requirements` varchar(120) NOT NULL,
  `offers_work_days` varchar(120) NOT NULL,
  `offers_end` date DEFAULT NULL,
  `offers_categories_id` int(11) NOT NULL,
  `offers_contract_id` int(11) NOT NULL,
  `offers_job_level_id` int(11) NOT NULL,
  `offers_job_mode_id` int(11) NOT NULL,
  `offers_job_time_id` int(11) NOT NULL,
  `offers_business_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_offers`
--

INSERT INTO `advertising_offers` (`offers_id`, `offers_name`, `offers_reward`, `offers_requirements`, `offers_work_days`, `offers_end`, `offers_categories_id`, `offers_contract_id`, `offers_job_level_id`, `offers_job_mode_id`, `offers_job_time_id`, `offers_business_id`) VALUES
(3, 'Oferta 1', 100000, 'Wymaganie1;Wymaganie2;Wymaganie3;Wymaganie4;Wymaganie5\n', 'Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy ', '2024-06-30', 5, 2, 6, 1, 2, 1),
(4, 'Oferta 2', 100001, 'Wymagania Wymagania Wymagania Wymagania Wymagania Wymagania Wymagania Wymagania Wymagania ', 'Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy Dni pracy ', '2024-06-30', 5, 2, 6, 1, 2, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_users`
--

CREATE TABLE `advertising_users` (
  `users_id` int(11) NOT NULL,
  `users_mail` varchar(120) NOT NULL,
  `users_password` varchar(999) NOT NULL,
  `users_name` varchar(50) NOT NULL,
  `users_surname` varchar(50) NOT NULL,
  `users_residence` varchar(120) NOT NULL,
  `users_phone_number` int(11) NOT NULL,
  `users_birthday` date NOT NULL,
  `users_profil_picture` blob NOT NULL,
  `users_job_level` int(11) NOT NULL,
  `users_job_level_description` text NOT NULL,
  `users_description` text NOT NULL,
  `users_links` text NOT NULL,
  `users_education_id` int(11) NOT NULL,
  `users_languages_id` int(11) NOT NULL,
  `users_skills` varchar(120) NOT NULL,
  `users_additional_experience_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `advertising_users`
--

INSERT INTO `advertising_users` (`users_id`, `users_mail`, `users_password`, `users_name`, `users_surname`, `users_residence`, `users_phone_number`, `users_birthday`, `users_profil_picture`, `users_job_level`, `users_job_level_description`, `users_description`, `users_links`, `users_education_id`, `users_languages_id`, `users_skills`, `users_additional_experience_id`) VALUES
(3, 'user@user.com', '$2y$10$2REyOETXoH88TXEelmO25.DGtgy0xc/nmgVxwv8r55KJL6YrJrmTC', 'name', 'surname', 'residence', 999999999, '2024-06-06', '', 0, '', ' user description  user description  user description  user description  user description  user description  user description  user description  user description  user description  user description  user description  user description  user description ', '', 2, 1, '', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `advertising_users_experience`
--

CREATE TABLE `advertising_users_experience` (
  `users_experience_id` int(11) NOT NULL,
  `users_experience_users_id` int(11) NOT NULL,
  `users_experience_job_level_id` int(11) NOT NULL,
  `users_experience_firm_name` varchar(120) NOT NULL,
  `users_experience_location` varchar(120) NOT NULL,
  `users_experience_start` date NOT NULL,
  `users_experience_end` date NOT NULL,
  `users_experience_ duties` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `advertising_additional_experience`
--
ALTER TABLE `advertising_additional_experience`
  ADD PRIMARY KEY (`additional_experience_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indeksy dla tabeli `advertising_business`
--
ALTER TABLE `advertising_business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indeksy dla tabeli `advertising_categories`
--
ALTER TABLE `advertising_categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indeksy dla tabeli `advertising_contract`
--
ALTER TABLE `advertising_contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indeksy dla tabeli `advertising_education`
--
ALTER TABLE `advertising_education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `advertising_education_ibfk_1` (`education_education_level_id`);

--
-- Indeksy dla tabeli `advertising_education_level`
--
ALTER TABLE `advertising_education_level`
  ADD PRIMARY KEY (`education_level_id`);

--
-- Indeksy dla tabeli `advertising_job_level`
--
ALTER TABLE `advertising_job_level`
  ADD PRIMARY KEY (`job_level_id`);

--
-- Indeksy dla tabeli `advertising_job_mode`
--
ALTER TABLE `advertising_job_mode`
  ADD PRIMARY KEY (`job_mode`);

--
-- Indeksy dla tabeli `advertising_job_time`
--
ALTER TABLE `advertising_job_time`
  ADD PRIMARY KEY (`job_time_id`);

--
-- Indeksy dla tabeli `advertising_languages`
--
ALTER TABLE `advertising_languages`
  ADD PRIMARY KEY (`languages_id`),
  ADD KEY `users_languages_experience_id` (`languages_experience_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indeksy dla tabeli `advertising_languages_experience`
--
ALTER TABLE `advertising_languages_experience`
  ADD PRIMARY KEY (`languages_experience_id`);

--
-- Indeksy dla tabeli `advertising_offers`
--
ALTER TABLE `advertising_offers`
  ADD PRIMARY KEY (`offers_id`),
  ADD KEY `offers_categories_id` (`offers_categories_id`),
  ADD KEY `offers_contract_id` (`offers_contract_id`),
  ADD KEY `offers_job_level_id` (`offers_job_level_id`),
  ADD KEY `offers_job_mode_id` (`offers_job_mode_id`),
  ADD KEY `offers_job_time_id` (`offers_job_time_id`),
  ADD KEY `offers_business_id` (`offers_business_id`);

--
-- Indeksy dla tabeli `advertising_users`
--
ALTER TABLE `advertising_users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `users_job_level` (`users_job_level`),
  ADD KEY `users_additional_experience_id` (`users_additional_experience_id`),
  ADD KEY `users_education_id` (`users_education_id`),
  ADD KEY `users_languages_id` (`users_languages_id`);

--
-- Indeksy dla tabeli `advertising_users_experience`
--
ALTER TABLE `advertising_users_experience`
  ADD PRIMARY KEY (`users_experience_id`),
  ADD KEY `users_experience_users_id` (`users_experience_users_id`),
  ADD KEY `users_experience_job_level_id` (`users_experience_job_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertising_additional_experience`
--
ALTER TABLE `advertising_additional_experience`
  MODIFY `additional_experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advertising_business`
--
ALTER TABLE `advertising_business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertising_categories`
--
ALTER TABLE `advertising_categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advertising_contract`
--
ALTER TABLE `advertising_contract`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `advertising_education`
--
ALTER TABLE `advertising_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertising_education_level`
--
ALTER TABLE `advertising_education_level`
  MODIFY `education_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advertising_job_level`
--
ALTER TABLE `advertising_job_level`
  MODIFY `job_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `advertising_job_mode`
--
ALTER TABLE `advertising_job_mode`
  MODIFY `job_mode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advertising_job_time`
--
ALTER TABLE `advertising_job_time`
  MODIFY `job_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advertising_languages`
--
ALTER TABLE `advertising_languages`
  MODIFY `languages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertising_languages_experience`
--
ALTER TABLE `advertising_languages_experience`
  MODIFY `languages_experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advertising_offers`
--
ALTER TABLE `advertising_offers`
  MODIFY `offers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advertising_users`
--
ALTER TABLE `advertising_users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advertising_users_experience`
--
ALTER TABLE `advertising_users_experience`
  MODIFY `users_experience_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertising_additional_experience`
--
ALTER TABLE `advertising_additional_experience`
  ADD CONSTRAINT `advertising_additional_experience_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `advertising_offers` (`offers_id`);

--
-- Constraints for table `advertising_education`
--
ALTER TABLE `advertising_education`
  ADD CONSTRAINT `advertising_education_ibfk_1` FOREIGN KEY (`education_education_level_id`) REFERENCES `advertising_education_level` (`education_level_id`) ON UPDATE CASCADE;

--
-- Constraints for table `advertising_languages`
--
ALTER TABLE `advertising_languages`
  ADD CONSTRAINT `advertising_languages_ibfk_1` FOREIGN KEY (`languages_experience_id`) REFERENCES `advertising_languages_experience` (`languages_experience_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_languages_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `advertising_offers` (`offers_id`);

--
-- Constraints for table `advertising_offers`
--
ALTER TABLE `advertising_offers`
  ADD CONSTRAINT `advertising_offers_ibfk_1` FOREIGN KEY (`offers_categories_id`) REFERENCES `advertising_categories` (`categories_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_2` FOREIGN KEY (`offers_contract_id`) REFERENCES `advertising_contract` (`contract_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_3` FOREIGN KEY (`offers_job_level_id`) REFERENCES `advertising_job_level` (`job_level_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_4` FOREIGN KEY (`offers_job_mode_id`) REFERENCES `advertising_job_mode` (`job_mode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_5` FOREIGN KEY (`offers_job_time_id`) REFERENCES `advertising_job_time` (`job_time_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_offers_ibfk_6` FOREIGN KEY (`offers_business_id`) REFERENCES `advertising_business` (`business_id`) ON UPDATE CASCADE;

--
-- Constraints for table `advertising_users`
--
ALTER TABLE `advertising_users`
  ADD CONSTRAINT `advertising_users_ibfk_1` FOREIGN KEY (`users_additional_experience_id`) REFERENCES `advertising_additional_experience` (`additional_experience_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_users_ibfk_2` FOREIGN KEY (`users_education_id`) REFERENCES `advertising_education` (`education_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_users_ibfk_3` FOREIGN KEY (`users_languages_id`) REFERENCES `advertising_languages` (`languages_id`) ON UPDATE CASCADE;

--
-- Constraints for table `advertising_users_experience`
--
ALTER TABLE `advertising_users_experience`
  ADD CONSTRAINT `advertising_users_experience_ibfk_1` FOREIGN KEY (`users_experience_job_level_id`) REFERENCES `advertising_job_level` (`job_level_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_users_experience_ibfk_2` FOREIGN KEY (`users_experience_users_id`) REFERENCES `advertising_users` (`users_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
