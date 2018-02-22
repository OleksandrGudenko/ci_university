-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2018 at 05:04 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4838047_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `idCourse` int(11) NOT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `etcPoints` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`idCourse`, `courseName`, `etcPoints`) VALUES
(112345678, 'Information Technology Databases 1', 15),
(123456789, 'Information Technology Databases 2', 15),
(198765432, 'Information Technology Databases 3', 15),
(1234567891, 'Information Technology Databases 4', 15);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `idGrades` int(11) NOT NULL,
  `id_student` int(11) DEFAULT NULL,
  `idCourse` int(11) DEFAULT NULL,
  `grade` smallint(6) DEFAULT NULL,
  `date_of_grade` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`idGrades`, `id_student`, `idCourse`, `grade`, `date_of_grade`) VALUES
(1, 1, 112345678, 3, '2018-02-22'),
(2, 2, 123456789, 3, '2025-02-20'),
(3, 3, 112345678, 3, '2025-02-20'),
(4, 4, 198765432, 3, '2025-02-20'),
(5, 5, 1234567891, 4, '2025-02-20'),
(6, 6, 123456789, 3, '2025-02-20'),
(7, 7, 112345678, 1, '2025-02-20'),
(8, 8, 198765432, 2, '2025-02-20'),
(9, 9, 1234567891, 3, '2025-02-20'),
(10, 10, 123456789, 4, '2025-02-20'),
(11, 11, 112345678, 3, '2025-02-20'),
(12, 12, 198765432, 5, '2025-02-20'),
(13, 13, 1234567891, 3, '2025-02-20'),
(14, 14, 123456789, 3, '2025-02-20'),
(15, 15, 198765432, 5, '2025-02-20'),
(16, 16, 112345678, 3, '2025-02-20'),
(17, 17, 1234567891, 4, '2025-02-20'),
(18, 18, 198765432, 4, '2025-02-20'),
(19, 19, 123456789, 4, '2025-02-20'),
(20, 20, 1234567891, 5, '2025-02-20'),
(21, 14, 112345678, 4, '2018-02-22'),
(22, 21, 112345678, 4, '2018-02-22'),
(23, 5, 112345678, 3, '2018-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `postalcode`
--

CREATE TABLE `postalcode` (
  `postalCode` char(5) NOT NULL,
  `postalPlace` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postalcode`
--

INSERT INTO `postalcode` (`postalCode`, `postalPlace`) VALUES
('90100', 'Kotkantie 2'),
('90101', 'Uusikatu 4'),
('90102', 'Isokatu 6'),
('90103', 'Torikatu 7'),
('90104', 'Tapulikuja 9');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `group_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `streetAddress` varchar(45) DEFAULT NULL,
  `postalCode` char(5) NOT NULL,
  `birthYear` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `firstname`, `lastname`, `group_name`, `email`, `streetAddress`, `postalCode`, `birthYear`) VALUES
(1, 'Kay', 'Naquin', 'DIN17SP', 'student@mail.test', 'Kotkantie 2', '90100', '13.12.1995'),
(2, 'Leonard', 'Rowden', 'DIN17SP', 'student0@mail.test', 'Uusikatu 4', '90101', '14.04.1993'),
(3, 'Terry', 'Kinney', 'DIN17SP', 'student1@mail.test', 'Isokatu 6', '90102', '12.11.1995'),
(4, 'Carla', 'Stclair', 'DIN17SP', 'student2@mail.test', 'Torikatu 7', '90103', '02.06.1994'),
(5, 'Delores', 'Isom', 'DIN17SP', 'student3@mail.test', 'Tapulikuja 9', '90104', '19.08.1995'),
(6, 'Ralph', 'Shane', 'DIN17SP', 'student4@mail.test', 'Tuulentie 33', '90100', '28.01.1996'),
(7, 'Norman', 'Yarborough', 'DIN17SP', 'student5@mail.test', 'Kotkantie 2', '90101', '10.05.1995'),
(8, 'Todd', 'Pastore', 'DIN17SP', 'student6@mail.test', 'Uusikatu 66', '90102', '20.02.1985'),
(9, 'Norma', 'Weatherspoon', 'DIN17SP', 'student7@mail.test', 'Isokatu 77', '90103', '07.04.1988'),
(10, 'Janice', 'Matthew', 'DIN17SP', 'student8@mail.test', 'Torikatu 33', '90104', '18.12.1989'),
(11, 'Thomas', 'Larry', 'DIN17SP', 'student9@mail.test', 'Tapulikuja 12', '90100', '18.09.1990'),
(12, 'Curtis', 'Fitzpatrick', 'DIN17SP', 'student10@mail.test', 'Tuulentie 11', '90101', '13.05.1996'),
(13, 'Lynda', 'Strauss', 'DIN17SP', 'student11@mail.test', 'Isokatu 2', '90102', '15.10.1993'),
(14, 'Matthew', 'Klug', 'DIN17SP', 'student12@mail.test', 'Uusikatu 33', '90103', '03.03.1994'),
(15, 'Larry', 'Thoma', 'DIN17SP', 'student13@mail.test', 'Kotkantie 6', '90104', '01.01.1992'),
(16, 'Arthur', 'Dowdy', 'DIN17SP', 'student14@mail.test', 'Uusikatu 4', '90100', '29.12.1991'),
(17, 'Viola', 'Willis', 'DIN17SP', 'student15@mail.test', 'Isokatu 66', '90101', '31.05.1995'),
(18, 'Annette', 'Wilks', 'DIN17SP', 'student16@mail.test', 'Torikatu 24', '90102', '04.07.1997'),
(19, 'Harold', 'Bibb', 'DIN17SP', 'student17@mail.test', 'Tapulikuja 7', '90103', '16.03.1996'),
(20, 'Marvin', 'Heflin', 'DIN17SP', 'student18@mail.test', 'Tuulentie 4', '90104', '23.11.1995'),
(21, 'Ludvig', 'Fredriksson', 'DIN17SP', 'student21@mail.test', 'Kajaanintie 1', '90100', '1992-11-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idCourse`),
  ADD UNIQUE KEY `idCourse_UNIQUE` (`idCourse`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`idGrades`),
  ADD UNIQUE KEY `idGrades_UNIQUE` (`idGrades`),
  ADD KEY `idCourse_idx` (`idCourse`),
  ADD KEY `id_student_idx` (`id_student`);

--
-- Indexes for table `postalcode`
--
ALTER TABLE `postalcode`
  ADD PRIMARY KEY (`postalCode`),
  ADD UNIQUE KEY `postalCode_UNIQUE` (`postalCode`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD UNIQUE KEY `id_student_UNIQUE` (`id_student`),
  ADD KEY `postalCode_idx` (`postalCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `idCourse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567892;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `idGrades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `course_idCourse` FOREIGN KEY (`idCourse`) REFERENCES `course` (`idCourse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_id_student` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_postalCode` FOREIGN KEY (`postalCode`) REFERENCES `postalcode` (`postalCode`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
