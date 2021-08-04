-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 12:27 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_notice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `post_id_c` int(10) NOT NULL,
  `user_id_c` int(10) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `stat` tinyint(1) DEFAULT '0',
  `photo` varchar(500) DEFAULT '0',
  `video` varchar(500) DEFAULT '0',
  `audio` varchar(500) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`, `stat`, `photo`, `video`, `audio`) VALUES
(39, 'uifaruk@gmail.com', 'Text only', 'Text onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText onlyText only', '2018-11-01 09:32:40', 0, '0', '0', '0'),
(40, 'uifaruk@gmail.com', 'Complain with evicence', 'Complain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicenceComplain with evicence', '2018-11-01 10:38:24', 0, '41229874_1148973525250385_6297263414259482624_n.png', '28569229_1714288895284334_7875844821036826624_n.mp4', 'mera dil badal da by Junaid Jamshed Naat Sharif.mp3'),
(41, 'uifaruk@gmail.com', 'This is a demo subject', 'sdftyhj,89mnh', '2018-11-01 22:13:30', 0, '0', '10 Data Structure List Bangla Tutorial.mp4', '0'),
(42, 'uifaruk@gmail.com', 'This is a demo subject', 'gdgadjs', '2018-11-01 22:16:34', 0, '0', '0', '0'),
(45, 'uifaruk@hotmail.com', 'This is a demo subject', 'This is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subjectThis is a demo subject', '2018-11-05 21:10:16', 1, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `regid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `gender`, `hobbies`, `image`, `dob`, `regid`) VALUES
(13, 'newuser', 'newuser@gmail.com', '2dbf21633f03afcf882eaf10e4b5caca', 2451, 'm', 'Business,Others', 'Wo Mera Nabi Hai - Hafiz Amanullah Qazi - HD.3gp', '1950-09-16 00:00:00', 2147483647),
(14, 'newuser', 'newuser1@gmail.com', '2dbf21633f03afcf882eaf10e4b5caca', 6, 'm', 'Business', 'Picture ph actual.jpg', '1964-10-18 00:00:00', 2147483647),
(15, 'newuser', 'uif1@gmail.com', '2dbf21633f03afcf882eaf10e4b5caca', 2451, 'm', 'Business', '20949979_364282527324777_2343524728691490816_n.mp4', '1963-09-18 00:00:00', 2147483647),
(16, 'Usamah Ibna Faroque', 'uifaruk@hotmail.com', '2dbf21633f03afcf882eaf10e4b5caca', 1558715520, 'm', 'Business', 'Picture ph actual.jpg', '1993-01-27 00:00:00', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
