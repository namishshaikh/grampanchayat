-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 12:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gram_panchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `family_head`
--

CREATE TABLE `family_head` (
  `form_no` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `sub_caste` varchar(10) NOT NULL,
  `edu_quali` varchar(15) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `sssm_id` varchar(9) NOT NULL,
  `aadhar_no` varchar(12) NOT NULL,
  `caste_certi_no` varchar(12) NOT NULL,
  `income_cert_no` varchar(15) NOT NULL,
  `residence_cert_no` varchar(15) NOT NULL,
  `pan_no` varchar(10) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `ifsc_code` varchar(11) NOT NULL,
  `account_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `family_member`
--

CREATE TABLE `family_member` (
  `h_aadharno` varchar(12) NOT NULL,
  `h_name` varchar(40) NOT NULL,
  `m_name` varchar(40) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `subcaste` varchar(10) NOT NULL,
  `edu_quali` varchar(15) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `sssm_id` varchar(9) NOT NULL,
  `aadhar_no` varchar(12) NOT NULL,
  `caste_certi` varchar(12) NOT NULL,
  `income_certi` varchar(15) NOT NULL,
  `residence_certi` varchar(15) NOT NULL,
  `pan_no` varchar(10) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `ifsc_code` varchar(11) NOT NULL,
  `account_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

CREATE TABLE `general_info` (
  `sammilit_gram` varchar(200) NOT NULL,
  `population` varchar(30) NOT NULL,
  `male_popu` varchar(30) NOT NULL,
  `female_popu` varchar(30) NOT NULL,
  `child_popu` varchar(30) NOT NULL,
  `category_popu` varchar(30) NOT NULL,
  `religion_popu` varchar(200) NOT NULL,
  `religious_place` varchar(200) NOT NULL,
  `total_voters` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `govt_office`
--

CREATE TABLE `govt_office` (
  `dept_name` varchar(20) NOT NULL,
  `sansad_name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gov_officer`
--

CREATE TABLE `gov_officer` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `sansad_name` varchar(20) NOT NULL,
  `desig` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gram_info`
--

CREATE TABLE `gram_info` (
  `panchayat_name` varchar(30) NOT NULL,
  `janpad_panchayat` varchar(30) NOT NULL,
  `jila_panchayat` varchar(30) NOT NULL,
  `block_distance` varchar(30) NOT NULL,
  `jila_head_distance` varchar(30) NOT NULL,
  `gram_count` varchar(30) NOT NULL,
  `water_source` varchar(30) NOT NULL,
  `river` varchar(30) NOT NULL,
  `well` varchar(30) NOT NULL,
  `nistar_talab` varchar(30) NOT NULL,
  `main_talab` varchar(30) NOT NULL,
  `hand_pump` varchar(30) NOT NULL,
  `tehsil` varchar(30) NOT NULL,
  `head_contact` varchar(10) NOT NULL,
  `rakba` varchar(30) NOT NULL,
  `primary_school` varchar(30) NOT NULL,
  `secondary_school` varchar(30) NOT NULL,
  `higher_secondary` varchar(30) NOT NULL,
  `male_student` varchar(30) NOT NULL,
  `female_student` varchar(30) NOT NULL,
  `aanganwadi` varchar(30) NOT NULL,
  `police_thana` varchar(30) NOT NULL,
  `police_chowki` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `office_gp`
--

CREATE TABLE `office_gp` (
  `present_date` varchar(30) NOT NULL,
  `panchayat_name` varchar(30) NOT NULL,
  `gram_name` varchar(30) NOT NULL,
  `chairman` varchar(30) NOT NULL,
  `gram_count` varchar(30) NOT NULL,
  `water_source` varchar(30) NOT NULL,
  `river` varchar(30) NOT NULL,
  `well` varchar(30) NOT NULL,
  `nistar_talab` varchar(30) NOT NULL,
  `mukhya_talab` varchar(30) NOT NULL,
  `hand_pump` varchar(30) NOT NULL,
  `tehsil` varchar(30) NOT NULL,
  `head_contact` varchar(30) NOT NULL,
  `rakba` varchar(30) NOT NULL,
  `primary_school` varchar(30) NOT NULL,
  `secondary` varchar(30) NOT NULL,
  `higher_secondary` varchar(30) NOT NULL,
  `male_student` varchar(30) NOT NULL,
  `female_student` varchar(30) NOT NULL,
  `anganwadi` varchar(30) NOT NULL,
  `police_thana` varchar(30) NOT NULL,
  `police_chowki` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `family_head`
--
ALTER TABLE `family_head`
  ADD PRIMARY KEY (`aadhar_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
