-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 02, 2020 at 03:23 PM
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
(7, 'Sally Rooney'),
(8, 'Jonathon Swift');

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
(3, 'Harry Potter: Chamber of Secrets', '13165461654987', '2020-01-13', 8, 1),
(6, 'Harry Potter & The Philosphers Stone', '654321654312', '2020-02-06', 1, 1),
(7, 'Harry Potter & The Prisoner of Azkeban', '87651321354', '2020-02-01', 1, 1),
(8, 'Harry Potter & The Goblet of Fire', '2165132165', '2020-02-07', 1, 1),
(9, 'Harry Potter & The Order of The Phoenix', '987431265874', '2020-02-05', 1, 1),
(10, 'The Sea', '6543216841', '2020-02-06', 3, 2),
(11, 'Little Women', '87432134312', '2020-02-01', 5, 2),
(12, 'Dracula\'s Holiday By The Sea', '98432131', '2020-02-06', 4, 1),
(13, 'Artemis Fowl', '98321321', '2020-02-12', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_copies`
--

CREATE TABLE `t_copies` (
  `copy_id` int(8) NOT NULL,
  `book_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_copies`
--

INSERT INTO `t_copies` (`copy_id`, `book_fk`) VALUES
(1, 7),
(2, 7),
(3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `t_loans`
--

CREATE TABLE `t_loans` (
  `loan_id` int(8) NOT NULL,
  `copy_fk` int(8) NOT NULL,
  `member_fk` int(8) NOT NULL,
  `date_out` date NOT NULL,
  `date_returned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'St. John', 'O\'Flanagan', '1 Talbot Green', '2020-02-11', 'stjohn@itcarlow.ie'),
(2, 'Ruth ', 'Durban', '9 College green', '2020-02-06', 'ruth@durban.ie');

-- --------------------------------------------------------

--
-- Table structure for table `t_publishers`
--

CREATE TABLE `t_publishers` (
  `publisher_id` int(8) NOT NULL,
  `publisher_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_publishers`
--

INSERT INTO `t_publishers` (`publisher_id`, `publisher_name`) VALUES
(1, 'Bloomsbury'),
(2, 'Gill & McMillan');

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
-- Indexes for table `t_copies`
--
ALTER TABLE `t_copies`
  ADD PRIMARY KEY (`copy_id`);

--
-- Indexes for table `t_loans`
--
ALTER TABLE `t_loans`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `t_members`
--
ALTER TABLE `t_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `t_publishers`
--
ALTER TABLE `t_publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_authors`
--
ALTER TABLE `t_authors`
  MODIFY `author_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_books`
--
ALTER TABLE `t_books`
  MODIFY `book_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_copies`
--
ALTER TABLE `t_copies`
  MODIFY `copy_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_loans`
--
ALTER TABLE `t_loans`
  MODIFY `loan_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_members`
--
ALTER TABLE `t_members`
  MODIFY `member_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_publishers`
--
ALTER TABLE `t_publishers`
  MODIFY `publisher_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
