-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 04:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageId` int(11) NOT NULL,
  `incomingMessageId` int(255) NOT NULL,
  `outgoingMessageId` int(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageId`, `incomingMessageId`, `outgoingMessageId`, `message`) VALUES
(1, 236016673, 564933978, 'Where are you from'),
(2, 236016673, 564933978, 'I am from Nepal. And you ?'),
(3, 236016673, 564933978, 'I am from Nepal. And you ?'),
(4, 236016673, 564933978, 'I am from Nepal. And you ?'),
(5, 236016673, 564933978, 'hello'),
(6, 236016673, 564933978, 'Are my messages coming to you?'),
(7, 236016673, 564933978, 'Hi'),
(8, 236016673, 564933978, 'hi'),
(9, 236016673, 564933978, 'g'),
(10, 236016673, 564933978, 'f'),
(11, 236016673, 564933978, 'j'),
(12, 564933978, 1033700895, 'Hello'),
(13, 564933978, 1033700895, 'Where are you from?'),
(14, 1033700895, 564933978, 'I am from Nepal'),
(15, 1033700895, 564933978, 'What are you doing ?'),
(16, 564933978, 1033700895, 'Nothing'),
(17, 1033700895, 564933978, 'Are you going college today ?'),
(18, 564933978, 1033700895, 'Period hudaichha ?'),
(19, 1033700895, 564933978, 'what time is ?'),
(20, 564933978, 1033700895, 'It\'s 9 O\'Clock'),
(21, 1033700895, 564933978, 'It is different time here'),
(22, 1033700895, 564933978, 'Hello, Good Morning'),
(23, 1033700895, 564933978, 'where are you from'),
(24, 1033700895, 564933978, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(25, 1033700895, 564933978, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(26, 1033700895, 564933978, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(27, 564933978, 236016673, 'hello'),
(28, 236016673, 564933978, 'hi'),
(29, 564933978, 236016673, 'how are you'),
(30, 236016673, 564933978, 'I am fine'),
(31, 236016673, 564933978, 'where are you from 😂?'),
(32, 564933978, 236016673, 'Why do you want ?'),
(33, 236016673, 564933978, 'hello'),
(34, 236016673, 564933978, 'hi'),
(35, 236016673, 564933978, 'hello'),
(36, 236016673, 564933978, 'how are you'),
(37, 236016673, 564933978, 'hi'),
(38, 236016673, 564933978, 'hello'),
(39, 564933978, 236016673, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(40, 236016673, 564933978, 'hi'),
(41, 236016673, 564933978, 'how are you?'),
(42, 564933978, 236016673, 'hi'),
(43, 564933978, 236016673, 'how are you'),
(44, 236016673, 564933978, 'ho'),
(45, 564933978, 236016673, 'k chha'),
(46, 236016673, 564933978, 'hi'),
(47, 236016673, 564933978, 'how are you'),
(48, 236016673, 564933978, 'I am fine'),
(49, 236016673, 564933978, 'hi'),
(50, 236016673, 564933978, 'how are you'),
(51, 564933978, 236016673, 'I am fine and you.'),
(52, 564933978, 236016673, 'hi'),
(53, 564933978, 236016673, 'hello'),
(54, 236016673, 564933978, 'hi'),
(55, 236016673, 564933978, 'hello'),
(56, 236016673, 564933978, 'hi'),
(57, 236016673, 564933978, 'hello'),
(58, 236016673, 564933978, 'hello'),
(59, 236016673, 564933978, 'hey'),
(60, 236016673, 564933978, 'hi'),
(61, 236016673, 564933978, 'how are you'),
(62, 236016673, 564933978, 'ho'),
(63, 236016673, 564933978, 'hello'),
(64, 236016673, 564933978, 'how are you'),
(65, 236016673, 564933978, 'hi'),
(66, 236016673, 564933978, 'i am dine'),
(67, 236016673, 564933978, 'hi'),
(68, 236016673, 564933978, 'where are you from'),
(69, 564933978, 236016673, 'hi'),
(70, 564933978, 236016673, 'how are you?'),
(71, 236016673, 564933978, 'hi'),
(72, 236016673, 564933978, 'hi'),
(73, 236016673, 564933978, 'hello how are you'),
(74, 236016673, 564933978, 'yo'),
(75, 236016673, 564933978, 'hi'),
(76, 236016673, 564933978, 'how are you'),
(77, 236016673, 564933978, 'hi'),
(78, 236016673, 564933978, 'hi'),
(79, 236016673, 564933978, 'hello'),
(80, 236016673, 564933978, 'hi'),
(81, 236016673, 564933978, 'how are you'),
(82, 236016673, 564933978, 'hi'),
(83, 236016673, 564933978, 'hi'),
(84, 236016673, 564933978, 'hi'),
(85, 236016673, 564933978, 'hello'),
(86, 236016673, 564933978, 'hu'),
(87, 236016673, 564933978, 'hi'),
(88, 236016673, 564933978, 'h'),
(89, 236016673, 564933978, '   h'),
(90, 236016673, 564933978, 'y'),
(91, 236016673, 564933978, 'hi'),
(92, 236016673, 564933978, 'gh'),
(93, 236016673, 564933978, 'hi'),
(94, 236016673, 564933978, 'hi'),
(95, 236016673, 564933978, 'hi'),
(96, 236016673, 564933978, 'hello'),
(97, 236016673, 564933978, 'hi'),
(98, 236016673, 564933978, 'where are you from'),
(99, 236016673, 564933978, 'hi'),
(100, 236016673, 564933978, 'hi'),
(101, 236016673, 564933978, 'hi'),
(102, 236016673, 564933978, 'hello'),
(103, 236016673, 564933978, 'hi'),
(104, 564933978, 236016673, 'hello'),
(105, 564933978, 236016673, 'how are you'),
(106, 564933978, 236016673, 'hi'),
(107, 236016673, 564933978, 'hi'),
(108, 236016673, 564933978, 'hello'),
(109, 236016673, 564933978, 'hello'),
(110, 236016673, 564933978, 'hi'),
(111, 236016673, 564933978, 'hi'),
(112, 236016673, 564933978, 'hi'),
(113, 236016673, 564933978, 'hi'),
(114, 236016673, 564933978, 'hi'),
(115, 236016673, 564933978, 'hello'),
(116, 564933978, 236016673, 'hi'),
(117, 564933978, 236016673, 'hello'),
(118, 236016673, 564933978, 'hi'),
(119, 564933978, 236016673, 'hi'),
(120, 236016673, 564933978, 'hello'),
(121, 564933978, 236016673, 'hey'),
(122, 236016673, 564933978, 'hello'),
(123, 236016673, 564933978, 'hi'),
(124, 236016673, 564933978, 'hi'),
(125, 236016673, 564933978, 'yo'),
(126, 236016673, 564933978, 'yo'),
(127, 236016673, 564933978, 'g'),
(128, 236016673, 564933978, 'yo'),
(129, 236016673, 564933978, 'hi'),
(130, 236016673, 564933978, 'ke cha'),
(131, 236016673, 564933978, 'I am fine'),
(132, 564933978, 236016673, 'hello'),
(133, 564933978, 236016673, 'how are you'),
(134, 564933978, 236016673, 'where are you from'),
(135, 564933978, 236016673, 'hi'),
(136, 564933978, 236016673, 'time kati vayo ahile'),
(137, 564933978, 236016673, 'how are you ?'),
(138, 236016673, 564933978, 'ke chha'),
(139, 564933978, 236016673, 'thik chha'),
(140, 564933978, 236016673, 'kata ho'),
(141, 236016673, 564933978, 'ke chha'),
(142, 236016673, 564933978, 'hi'),
(143, 236016673, 564933978, 'hi'),
(144, 236016673, 564933978, 'hi'),
(145, 236016673, 564933978, 'hello'),
(146, 236016673, 564933978, 'hi'),
(147, 236016673, 564933978, 'hello'),
(148, 236016673, 564933978, 'ke chha'),
(149, 236016673, 564933978, 'how are you'),
(150, 236016673, 564933978, 'hi'),
(151, 236016673, 564933978, 'hello'),
(152, 564933978, 236016673, 'how are you?'),
(153, 564933978, 236016673, 'hi'),
(154, 236016673, 564933978, 'how are you'),
(155, 564933978, 236016673, 'what are you doing'),
(156, 564933978, 236016673, 'hello what are you doing'),
(157, 236016673, 564933978, 'I am playing games'),
(158, 236016673, 564933978, 'how about you'),
(159, 564933978, 236016673, 'me too'),
(160, 564933978, 236016673, 'hello'),
(161, 236016673, 564933978, 'hi'),
(162, 236016673, 564933978, 'ke chha'),
(163, 564933978, 236016673, 'how are you'),
(164, 1214086345, 400300857, 'Hey!'),
(165, 400300857, 1214086345, 'Hey!'),
(166, 1214086345, 400300857, 'How are you ?'),
(167, 400300857, 1214086345, 'I am fine. How about you?'),
(168, 1214086345, 400300857, 'Where are you from?'),
(169, 400300857, 1214086345, 'I am from Japan. And you?'),
(170, 1214086345, 400300857, 'Cool! I am also from Japan.'),
(171, 400300857, 1214086345, 'Great! We can be great friends.'),
(172, 1214086345, 400300857, 'Yes. Would you like to be my friend?'),
(173, 400300857, 1214086345, 'Sure, I am happy to meet you.'),
(174, 1214086345, 400300857, 'Me too:)'),
(175, 400300857, 1214086345, 'hi'),
(176, 400300857, 1214086345, 'you there?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `uniqueId` int(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `uniqueId`, `username`, `email`, `password`, `avatar`, `status`) VALUES
(10, 400300857, 'Luffy', 'luffy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1681918506b38cb443bff8ba204fd6c2c075135d3e.jpg', 'Offline'),
(11, 1214086345, 'Goku', 'goku@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '168191857186d3197cc589ee2a2d645dd241246a70--son-goku-dragon-ball-z.jpg', 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
