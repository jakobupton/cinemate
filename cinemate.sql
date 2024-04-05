-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2024 at 10:57 PM
-- Server version: 10.5.23-MariaDB-0+deb11u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemate`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `fullname`, `email`, `password`, `role`) VALUES
(1, 'Example Administrator', 'admin@jakobupton.dev', 'password', 'admin'),
(2, 'Jakob Upton', 'me@jakobupton.dev', 'password', 'admin'),
(12, 'Default User', 'default@jakobupton.dev', 'password', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `imdb_id` varchar(25) NOT NULL,
  `title` text NOT NULL,
  `year` varchar(4) NOT NULL,
  `cover_path` text NOT NULL,
  `genres` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description` text NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`imdb_id`, `title`, `year`, `cover_path`, `genres`, `description`, `rating`) VALUES
('tt0091042', 'Ferris Bueller&#39;s Day Off', '1986', 'https://m.media-amazon.com/images/M/MV5BMDA0NjZhZWUtNmI2NC00MmFjLTgwZDYtYzVjZmNhMDVmOTBkXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'Comedy', 'A popular high school student, admired by his peers, decides to take a day off from school and goes to extreme lengths to pull it off, to the chagrin of his Dean, who&#39;ll do anything to stop him.', 7.8),
('tt0120737', 'The Lord of the Rings: The Fellowship of the Ring', '2001', 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SX300.jpg', 'Action, Adventure, Drama', 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.', 8.9),
('tt0816692', 'Interstellar', '2014', 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg', 'Adventure, Drama, Sci-Fi', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 8.7),
('tt0910970', 'WALL·E', '2008', 'https://m.media-amazon.com/images/M/MV5BMjExMTg5OTU0NF5BMl5BanBnXkFtZTcwMjMxMzMzMw@@._V1_SX300.jpg', 'Animation, Adventure, Family', 'In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.', 8.4),
('tt9362722', 'Spider-Man: Across the Spider-Verse', '2023', 'https://m.media-amazon.com/images/M/MV5BMzI0NmVkMjEtYmY4MS00ZDMxLTlkZmEtMzU4MDQxYTMzMjU2XkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_SX300.jpg', 'Animation, Action, Adventure', 'Miles Morales catapults across the multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a ...', 8.6);

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

CREATE TABLE `showtimes` (
  `show_id` int(11) NOT NULL,
  `imdb_id` varchar(25) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showtimes`
--

INSERT INTO `showtimes` (`show_id`, `imdb_id`, `time`, `date`) VALUES
(10, 'tt9362722', '18:30:00', '2024-04-06'),
(11, 'tt9362722', '20:30:00', '2024-04-06'),
(12, 'tt0816692', '17:00:00', '2024-04-06'),
(13, 'tt0816692', '19:00:00', '2024-04-06'),
(18, 'tt0091042', '12:30:00', '2024-04-06'),
(19, 'tt0091042', '16:30:00', '2024-04-06'),
(22, 'tt0910970', '18:30:00', '2024-04-12'),
(23, 'tt0120737', '20:00:00', '2024-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `seat` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`imdb_id`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`show_id`),
  ADD UNIQUE KEY `show_id` (`show_id`),
  ADD KEY `show_id_2` (`show_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
