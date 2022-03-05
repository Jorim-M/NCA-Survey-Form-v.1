-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 03:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nca_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `ncasurvey`
--

CREATE TABLE `ncasurvey` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `id_no` tinytext NOT NULL,
  `passport_no` tinytext NOT NULL,
  `tax_no` tinytext NOT NULL,
  `kra_pin` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `contact` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `phd` tinytext NOT NULL,
  `masters` tinytext NOT NULL,
  `bachelors` tinytext NOT NULL,
  `post_grad_diploma` tinytext NOT NULL,
  `diploma` tinytext NOT NULL,
  `post_phd` tinytext NOT NULL,
  `post_masters` tinytext NOT NULL,
  `post_degree` tinytext NOT NULL,
  `post_diploma` tinytext NOT NULL,
  `other_train_cert_1` tinytext NOT NULL,
  `other_train_cert_2` tinytext NOT NULL,
  `other_train_cert_3` tinytext NOT NULL,
  `work_company_1` tinytext NOT NULL,
  `work_period_1` tinytext NOT NULL,
  `work_role_1` tinytext NOT NULL,
  `work_website_1` tinytext NOT NULL,
  `work_company_2` tinytext NOT NULL,
  `work_period_2` tinytext NOT NULL,
  `work_role_2` tinytext NOT NULL,
  `work_website_2` tinytext NOT NULL,
  `work_company_3` tinytext NOT NULL,
  `work_period_3` tinytext NOT NULL,
  `work_role_3` tinytext NOT NULL,
  `work_website_3` tinytext NOT NULL,
  `referr_name_1` tinytext NOT NULL,
  `referr_phone_1` tinytext NOT NULL,
  `referr_email_1` tinytext NOT NULL,
  `referr_name_2` tinytext NOT NULL,
  `referr_phone_2` tinytext NOT NULL,
  `referr_email_2` tinytext NOT NULL,
  `expertise` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ncasurvey`
--

INSERT INTO `ncasurvey` (`id`, `image`, `firstname`, `lastname`, `id_no`, `passport_no`, `tax_no`, `kra_pin`, `title`, `contact`, `email`, `phd`, `masters`, `bachelors`, `post_grad_diploma`, `diploma`, `post_phd`, `post_masters`, `post_degree`, `post_diploma`, `other_train_cert_1`, `other_train_cert_2`, `other_train_cert_3`, `work_company_1`, `work_period_1`, `work_role_1`, `work_website_1`, `work_company_2`, `work_period_2`, `work_role_2`, `work_website_2`, `work_company_3`, `work_period_3`, `work_role_3`, `work_website_3`, `referr_name_1`, `referr_phone_1`, `referr_email_1`, `referr_name_2`, `referr_phone_2`, `referr_email_2`, `expertise`) VALUES
(45, 0x313632303333383833325f333332302e6a7067, 'Mark', '(Barber)', '34248666', '50517482', '10145892', '54179521', 'Eng.', 712123456, 'watson@example.com', 'Sughnvnbv gfdser po', 'Lkmnbtrer ewgbhb ionhbhv', 'Aggcrre bvgf khutyr', 'Qrtdgv nbvbntddt popo', 'Vhfdee zewa ourweq', '3 years', '2 years', '3 years', '2 years', 'Hubnbvrews', 'Tvbdfeaewer', 'Biugbhvgt', 'Westos LLC', '2 years', 'Manager', 'admin@admin.com', 'Westos LLC', 'None', 'None', 'admin@admin.com', 'Westos LLC', 'None', 'None', 'admin@admin.com', 'Mark (Barber)', '+254721139466', 'watson@example.com', 'Mark (Barber)', '+254721139466', 'watson@example.com', 'Array');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ncasurvey`
--
ALTER TABLE `ncasurvey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ncasurvey`
--
ALTER TABLE `ncasurvey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
