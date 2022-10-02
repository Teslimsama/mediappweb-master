-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 03:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(300) NOT NULL,
  `conaddress` varchar(300) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `acctype` varchar(16) NOT NULL,
  `card_no` varchar(12) NOT NULL,
  `timestamp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `conaddress`, `gender`, `dob`, `acctype`, `card_no`, `timestamp`) VALUES
(14, 'Jessica Rutledge', 'Shay Sloan', '+1 (918) 503-1698', 'xohufopi@mailinator.com', '$2y$10$8kFXuFH4PoiO0tykE56uK.nHwybUR7SnWQK66ajyVdhDfQqdhnU72', 'Quis magna consectet', 'Female', '1981-09-05', 'patient', 'MA2022180769', 1659015061),
(15, 'Silas Graham', 'Sybill Espinoza', '+1 (687) 327-2248', 'goko@gmail.com', '$2y$10$f5cgp.za4H.0bdpD87Lv4uqjvCSCBvWUOIarm7D9KtngQ4gr1AiIO', 'Officiis et debitis ', 'Male', '2014-09-28', 'patient', 'MA2022390261', 1659015278),
(16, 'Anne', 'Walton', '+1 (105) 464-8246', 'anne@yahoo.com', '$2y$10$VN/vwSV/NBEknJnixEloRehx14Nz5KSYfKc.l3z/9BHrDZAQKPjzW', 'Iure et aut veniam ', 'on', '2017-05-10', 'doctor', '', 1659359473),
(17, 'Quinn', 'Phillip', '+1 (748) 308-4759', 'quinn@outlook.com', '$2y$10$qRvpd7SLJ0wVbVNLAUeO.ObJ6belIqZSjG7kVriWQXvFjUTodi1pa', 'Commodo ipsa ut sed', 'on', '2012-01-23', 'nurse', '', 1659359511),
(18, 'Nichole', 'Waters', '+1 (258) 994-4379', 'nichole@gmail.com', '$2y$10$Q0YMtxgiMWwAGcSkCdLY7OOcKoERlok5HTY/pvO8fuNmNrzoxSkTG', 'Animi dicta et laud', 'on', '2006-02-14', 'radiologist', '', 1659359559),
(19, 'Steel', 'Lewis', '+1 (659) 866-6852', 'zodizonon@mailinator.com', '$2y$10$sh6j97kO.CAopKK9ytrSRuWfsWtIpU7dph4vAjUEsILa2s3xYRE1K', 'Ut inventore eius mo', 'on', '1985-01-05', 'radiologist', '', 1659359602),
(20, 'Kibo', 'Fiona', '+1 (794) 707-1181', 'kibo@mediapp.com', '$2y$10$HISKpvQFlX46hzbdbarwQ.DfNGpHuOc3ImZutMiGIdqZqWCBgExAO', 'In consectetur aliqu', 'on', '1975-05-02', 'dentist', '', 1659359657),
(21, 'Adele', 'Ursula', '+1 (586) 732-1426', 'xikeceri@mailinator.com', '$2y$10$kUe6.AkVh747.a8/tjxax.6A/zWJ35i8DRQaCirBcYnszee87bKpO', 'Nostrum in duis veni', 'on', '1974-02-07', 'receptionist', '', 1659359674),
(22, 'Kingsley', 'Theophilus', '08097635354', 'kingtheos@yahoo.com', '$2y$10$7z0aKvYNjb1gXAmUd7g7muqb.vDp3awltViiEsKSPLx59q2pw/MOK', '42 Yaounde street, Wuse Zone 6, Abuja, FCT-Abuja', 'Male', '1987-12-11', 'patient', 'MA2022293020', 1659364987);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
