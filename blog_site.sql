-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 09:32 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `username`, `password_hash`, `name`, `email`, `bio`, `registration_date`) VALUES
(1, 'hasn', '$2y$10$7B0PJRibLzgFnMZlT.12xeovOWVNQvw1EIKhbYix0LnF.bVfh4jpu', 'hassan', 'hassantalha807@gmail.com', 'hi its me hassan talha ', '2023-09-05 05:47:48'),
(3, 'ali', '$2y$10$s1VIFjwQblMyFywjmMYNA.YxLa/LugxuPFSKUA1u26HH1I6WwadI2', 'ali', 'hassantalha809@gmail.com', 'hi its me ali', '2023-09-05 06:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `comment_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_name`, `comment_text`, `created_at`) VALUES
(1, 13, 'talha', 'this is not fare', '2023-09-11 18:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `SubmissionDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactID`, `Name`, `Email`, `Subject`, `Message`, `SubmissionDate`) VALUES
(1, 'HassanTalha', 'hassantalha807@gmail.com', 'hasdsddddddddd', 'as', '2023-09-13 05:08:24'),
(2, 'Hassan Talha', 'hassantalha807@gmail.com', 'hasdsddddddddd', 'ghgh', '2023-09-13 06:01:05'),
(3, 'Hassan Talha', 'hassantalha809@gmail.com', 'hasdsddddddddd', 'ghgh', '2023-09-13 06:09:05'),
(4, 'Hassan Talha', 'hassantalha809@gmail.com', 'hasdsddddddddd', 'ghgh', '2023-09-13 06:11:50'),
(5, 'Hassan Talha', 'hassantalha809@gmail.com', 'hasdsddddddddd', 'ghgh', '2023-09-13 06:35:05'),
(6, 'HassanTalha', 'hassantalha809@gmail.com', 'help', 'asd', '2023-09-13 06:38:42'),
(7, 'admin', 'hassantalha807@gmail.com', 'nn', 'nn', '2023-09-13 06:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `content`, `author_id`, `category`, `created_at`, `updated_at`, `image_url`) VALUES
(12, 'The Funniest Jokes Ever', 'Here are some of the funniest jokes that will make you laugh!', 1, 'Humor', '2023-09-05 07:28:33', '2023-09-05 07:28:33', 'https://images.unsplash.com/photo-1475776408506-9a5371e7a068?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTN8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60'),
(13, 'Hilarious Comedy Show Review', 'Last night\'s comedy show had everyone in stitches. Read the review here!', 1, 'Entertainment', '2023-09-05 07:28:33', '2023-09-05 07:28:33', 'https://images.unsplash.com/photo-1507388412350-cb43abdebced?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTJ8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60'),
(14, 'The Laugh Factory', 'Discover the secrets behind creating the funniest comedy sketches.', 3, 'Entertainment', '2023-09-05 07:28:33', '2023-09-05 07:28:33', 'https://images.unsplash.com/photo-1533208705114-4f6b97d68ab1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZelbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60'),
(15, 'Funny Animal Videos', 'Watch these hilarious animal videos that will brighten your day.', 3, 'Humor', '2023-09-05 07:28:33', '2023-09-05 07:28:33', 'https://images.unsplash.com/photo-1493166228553-4fa0fdb916e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTh8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60'),
(16, 'Stand-Up Comedy Special', 'Get ready to laugh until your stomach hurts with this stand-up comedy special!', 3, 'Entertainment', '2023-09-05 07:28:33', '2023-09-05 07:28:33', 'https://images.unsplash.com/photo-1520009061071-659eaf168151?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MjB8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `author_id` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
