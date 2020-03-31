-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 31, 2020 at 01:15 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `DB_LIBRARY`
--

-- --------------------------------------------------------

--
-- Table structure for table `jnct_authors_books`
--

CREATE TABLE `jnct_authors_books` (
  `author_book_id` int(8) NOT NULL,
  `author_fk` int(8) NOT NULL,
  `book_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jnct_authors_books`
--

INSERT INTO `jnct_authors_books` (`author_book_id`, `author_fk`, `book_fk`) VALUES
(1, 1, 3),
(2, 1, 6),
(3, 1, 7),
(4, 1, 8),
(5, 1, 9),
(6, 2, 13),
(7, 1, 16),
(8, 2, 16);

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
(8, 'Jonathon Swift'),
(9, 'James Caan'),
(10, 'Sally Rooney');

-- --------------------------------------------------------

--
-- Table structure for table `t_books`
--

CREATE TABLE `t_books` (
  `book_id` int(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `date_published` date NOT NULL,
  `publisher_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_books`
--

INSERT INTO `t_books` (`book_id`, `title`, `isbn`, `date_published`, `publisher_fk`) VALUES
(3, 'Harry Potter: Chamber of Secrets', '13165461654987', '2020-01-13', 1),
(6, 'Harry Potter & The Philosphers Stone', '654321654312', '2020-02-06', 1),
(7, 'Prisoner of Azkeban', '23423423', '2020-03-10', 1),
(8, 'Harry Potter & The Goblet of Fire', '2165132165', '2020-02-07', 1),
(9, 'Harry Potter & The Order of The Phoenix', '987431265874', '2020-02-05', 1),
(10, 'The Sea', '6543216841', '2020-02-06', 2),
(11, 'Little Women', '87432134312', '2020-02-01', 2),
(12, 'Dracula\'s Holiday By The Sea', '98432131', '2020-02-06', 1),
(13, 'Artemis Fowl', '98321321', '2020-02-12', 1),
(14, 'Normal People', '98432131', '2020-03-11', 1),
(15, 'Conversations With Friends', '98432131', '2020-03-26', 5),
(16, 'Artemis Potter', '24533453456', '2020-03-03', 1);

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
(3, 7),
(4, 7),
(5, 7),
(6, 7),
(7, 7),
(8, 8),
(9, 8),
(10, 8),
(11, 9),
(12, 9),
(13, 9),
(14, 9),
(15, 13),
(16, 13),
(17, 6),
(18, 6),
(19, 3),
(20, 12),
(21, 12),
(22, 12),
(23, 11),
(24, 11),
(25, 11),
(26, 10),
(27, 12),
(28, 2),
(29, 2),
(30, 13),
(31, 14),
(32, 14),
(33, 14),
(34, 14),
(35, 6),
(36, 6),
(37, 6),
(38, 6),
(39, 10),
(40, 10),
(41, 15),
(42, 15);

-- --------------------------------------------------------

--
-- Table structure for table `t_loans`
--

CREATE TABLE `t_loans` (
  `loan_id` int(8) NOT NULL,
  `copy_fk` int(8) NOT NULL,
  `member_fk` int(8) NOT NULL,
  `date_out` date NOT NULL,
  `date_returned` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_loans`
--

INSERT INTO `t_loans` (`loan_id`, `copy_fk`, `member_fk`, `date_out`, `date_returned`) VALUES
(2, 2, 2, '2020-03-02', '2020-03-09'),
(3, 2, 1, '2020-03-10', '2020-03-09'),
(4, 6, 4, '2020-03-17', '2020-03-09'),
(5, 7, 3, '2020-03-26', '2020-03-10'),
(6, 8, 1, '2020-03-10', '2020-03-10');

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
  `email` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_members`
--

INSERT INTO `t_members` (`member_id`, `forename`, `surname`, `address`, `dob`, `email`, `image`) VALUES
(1, 'St. John', 'O\'Flanagan', '1 Talbot Green', '2020-02-11', 'stjohn@itcarlow.ie', 'images-26.jpg'),
(2, 'Ruth ', 'Durban', '9 College green', '2020-02-06', 'ruth@durban.ie', 'images-20.jpg'),
(3, 'Ronan', 'O\'Rahilly', '19 Selskar Park', '2020-03-02', 'r@orahilly.ie', 'images-23.jpg'),
(4, 'Iolanthe', 'O\'Meara', '45 Drinagh Court', '2020-02-26', 'i@omeara.com', 'images-24.jpg'),
(5, 'John', 'Boohan', '3 Templars Court', '2020-03-02', 'j@boohan.ie', 'download.png'),
(6, 'Ann', 'Reynolds', '5 College green', '2020-03-19', 'r@reynolds.com', 'unknown-avatar.png');

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
(2, 'Gill & McMillan'),
(3, 'Wiley'),
(4, 'Prentice Hall'),
(5, 'Simon & Schuster'),
(6, 'Harper Collins'),
(7, 'Folens');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jnct_authors_books`
--
ALTER TABLE `jnct_authors_books`
  ADD PRIMARY KEY (`author_book_id`);

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
-- AUTO_INCREMENT for table `jnct_authors_books`
--
ALTER TABLE `jnct_authors_books`
  MODIFY `author_book_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_authors`
--
ALTER TABLE `t_authors`
  MODIFY `author_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_books`
--
ALTER TABLE `t_books`
  MODIFY `book_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_copies`
--
ALTER TABLE `t_copies`
  MODIFY `copy_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `t_loans`
--
ALTER TABLE `t_loans`
  MODIFY `loan_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_members`
--
ALTER TABLE `t_members`
  MODIFY `member_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_publishers`
--
ALTER TABLE `t_publishers`
  MODIFY `publisher_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
