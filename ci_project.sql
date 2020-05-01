-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 11:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(100) UNSIGNED NOT NULL,
  `created` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `created`, `image_path`) VALUES
(1, 'First Article', 'Hello everyone i am doing my first project in code ignitor. Thank you.\r\nhghgjkjhljjhghj', 1, '2018-03-17 00:35:51', ''),
(2, 'update title test', 'Body test updated', 1, '2018-03-17 00:35:51', ''),
(8, 'final title for today', 'sorrrryyyy... enough for today', 1, '2018-03-17 00:35:51', ''),
(9, 'bing', 'The middle paragraphs of the essay are collectively known as the body paragraphs and, as alluded to above, the main purpose of a body paragraph is to spell out in detail the examples that support your thesis.\r\n\r\nFor the first body paragraph you should use your strongest argument or most significant example unless some other more obvious beginning point (as in the case of chronological explanations) is required. The first sentence of this paragraph should be the topic sentence of the paragraph that directly relates to the examples listed in the mini-outline of introductory paragraph.\r\n\r\nA one sentence body paragraph that simply cites the example of &amp;quot;George Washington&amp;quot; or &amp;quot;LeBron James&amp;quot; is not enough, however. No, following this an effective essay will follow up on this topic sentence by explaining to the reader, in detail, who or what an example is and, more importantly, why that example is relevant.\r\n\r\nEven the most famous examples need context. For example, George Washington’s life was extremely complex – by using him as an example, do you intend to refer to his honesty, bravery, or maybe even his wooden teeth? The reader needs to know this and it is your job as the writer to paint the appropriate picture for them. To do this, it is a good idea to provide the reader with five or six relevant facts about the life (in general) or event (in particular) you believe most clearly illustrates your point.', 1, '2018-03-17 00:35:51', 'http://[::1]/ci/upload/about.jpg'),
(14, 'abc', 'hellooooo...', 1, '2018-03-17 00:35:51', ''),
(15, 'article 1', 'agfsdgdfahdfaghad', 1, '2018-03-17 00:35:51', ''),
(16, 'Article 2', 'aukijghasukidjghkjh', 1, '2018-03-17 00:35:51', ''),
(17, 'Article 3', 'fdgsAGD', 1, '2018-03-17 00:35:51', ''),
(18, 'Article 4', 'DAFHGADFHA', 1, '2018-03-17 00:35:51', ''),
(19, 'Article 5', 'agerdygeraqhye', 1, '2018-03-17 00:35:51', ''),
(20, 'Article 6', 'sedtgwqE', 1, '2018-03-17 00:35:51', ''),
(21, 'Article 7', 'sdgasdfgadfhdsga', 1, '2018-03-17 00:37:07', ''),
(22, 'Article 8', 'dfshsdfgfdgdsfgdsfg', 1, '18-03-16 08-03-07', ''),
(23, 'Article 8', 'fgdafgdfgdfg', 1, '2018-03-16 20-03-14', ''),
(24, 'Article 9', 'dfsadgfasdfdfsa', 1, '2018-03-16 20-03-26', ''),
(25, 'Article 9', 'hssdhfgsh dsafasdfasdf its updated', 1, '2018-03-17 11-52-34', ''),
(26, 'Article 10', 'afdlkgjal;sjglaksjl;sgasdfgasg', 1, '2018-03-17 11-54-24', ''),
(27, 'Article 11', 'asgsidufhsaduikhfksjadhgksahj', 1, '2018-03-17 16-00-08', ''),
(28, 'adfafd', 'hjgjygjugfuy gvguyvt', 1, '2018-03-17 19-40-09', ''),
(29, 'fraswe', 'sdfsadf', 1, '2018-03-17 19-52-48', ''),
(30, 'srgfasgsdg', 'fdsgsdfgdsfg', 1, '2018-03-17 19-58-09', ''),
(31, 'afwer', 'The middle paragraphs of the essay are collectively known as the body paragraphs and, as alluded to above, the main purpose of a body paragraph is to spell out in detail the examples that support your thesis. For the first body paragraph you should use your strongest argument or most significant example unless some other more obvious beginning point (as in the case of chronological explanations) is required. The first sentence of this paragraph should be the topic sentence of the paragraph that directly relates to the examples listed in the mini-outline of introductory paragraph. A one sentence body paragraph that simply cites the example of &quot;George Washington&quot; or &quot;LeBron James&quot; is not enough, however. No, following this an effective essay will follow up on this topic sentence by explaining to the reader, in detail, who or what an example is and, more importantly, why that example is relevant. Even the most famous examples need context. For example, George Washington’s life was extremely complex – by using him as an example, do you intend to refer to his honesty, bravery, or maybe even his wooden teeth? The reader needs to know this and it is your job as the writer to paint the appropriate picture for them. To do this, it is a good idea to provide the reader with five or six relevant facts about the life (in general) or event (in particular) you believe most clearly illustrates your point.', 1, '2018-03-17 20-02-48', 'http://[::1]/ci/upload/about.jpg'),
(32, 'Final Article', 'The middle paragraphs of the essay are collectively known as the body paragraphs and, as alluded to above, the main purpose of a body paragraph is to spell out in detail the examples that support your thesis. For the first body paragraph you should use your strongest argument or most significant example unless some other more obvious beginning point (as in the case of chronological explanations) is required. The first sentence of this paragraph should be the topic sentence of the paragraph that directly relates to the examples listed in the mini-outline of introductory paragraph. A one sentence body paragraph that simply cites the example of &quot;George Washington&quot; or &quot;LeBron James&quot; is not enough, however. No, following this an effective essay will follow up on this topic sentence by explaining to the reader, in detail, who or what an example is and, more importantly, why that example is relevant. Even the most famous examples need context. For example, George Washington’s life was extremely complex – by using him as an example, do you intend to refer to his honesty, bravery, or maybe even his wooden teeth? The reader needs to know this and it is your job as the writer to paint the appropriate picture for them. To do this, it is a good idea to provide the reader with five or six relevant facts about the life (in general) or event (in particular) you believe most clearly illustrates your point.', 1, '2018-03-17 21-33-11', 'http://[::1]/ci/upload/asf.jpg'),
(33, 'article number 23', 'jahsdkjfhjfkash\r\nLaser Barcode Scanner User Manual  Version 2.0 \r\nWarning Do Not Scan Barcode Casually Must be Use by Technical Person', 1, '2018-03-28 15-44-05', 'http://[::1]/ci/upload/1-1600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pword` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `fname`, `lname`) VALUES
(1, 'admin', '12345', 'Admin', 'Last Name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
