-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 17, 2020 at 05:07 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `DB_LIBRARY`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_authors`
--

CREATE TABLE `t_authors` (
  `author_id` int(8) NOT NULL,
  `author_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_authors`
--

INSERT INTO `t_authors` (`author_id`, `author_name`) VALUES
(1, 'J. K. Rowling'),
(2, 'Eoin Colfer'),
(3, 'John Banville'),
(4, 'Bram Stoker'),
(5, 'Jo Marsh'),
(7, 'Sally Rooney');

-- --------------------------------------------------------

--
-- Table structure for table `t_books`
--

CREATE TABLE `t_books` (
  `book_id` int(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `date_published` date NOT NULL,
  `author_fk` int(8) NOT NULL,
  `publisher_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_books`
--

INSERT INTO `t_books` (`book_id`, `title`, `isbn`, `date_published`, `author_fk`, `publisher_fk`) VALUES
(3, 'Harry Potter: Chamber of Secrets', '13165461654987', '2020-01-13', 1, 0),
(6, 'Harry Potter & The Philosphers Stone', '654321654312', '2020-02-06', 1, 0),
(7, 'Harry Potter & The Prisoner of Azkeban', '87651321354', '2020-02-01', 1, 0),
(8, 'Harry Potter & The Goblet of Fire', '2165132165', '2020-02-07', 1, 0),
(9, 'Harry Potter & The Order of The Phoenix', '987431265874', '2020-02-05', 1, 0),
(10, 'The Sea', '6543216841', '2020-02-06', 3, 0),
(11, 'Little Women', '87432134312', '2020-02-01', 5, 0),
(12, 'Dracula\'s Holiday By The Sea', '98432131', '2020-02-06', 4, 0),
(13, 'Artemis Fowl', '98321321', '2020-02-12', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_members`
--

CREATE TABLE `t_members` (
  `member_id` int(8) NOT NULL,
  `forename` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `address` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_members`
--

INSERT INTO `t_members` (`member_id`, `forename`, `surname`, `address`, `dob`, `email`) VALUES
(1, 'St. John', 'O\'Flanagan', '1 Talbot Green', '2020-02-11', 'stjohn@itcarlow.ie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_authors`
--
ALTER TABLE `t_authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `t_books`
--
ALTER TABLE `t_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `t_members`
--
ALTER TABLE `t_members`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_authors`
--
ALTER TABLE `t_authors`
  MODIFY `author_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_books`
--
ALTER TABLE `t_books`
  MODIFY `book_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_members`
--
ALTER TABLE `t_members`
  MODIFY `member_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
