-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2019 г., 18:07
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autenthication`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'adilet', 'Adilet@DSa', '202cb962ac59075b964b07152d234b70'),
(0, 'Adilet', '180107194@stu.sdu.edu.kz', 'a8edbb00f37202333be89f96736e0416'),
(0, 's', '180107194@stu.sdu.edu.kz', 'c4ca4238a0b923820dcc509a6f75849b'),
(0, 'adilet', 'zx', 'a8edbb00f37202333be89f96736e0416'),
(0, 'Adilet', '180107194@stu.sdu.edu.kz', 'a8edbb00f37202333be89f96736e0416'),
(0, 'Adilet', '180107194@stu.sdu.edu.kz', 'a8edbb00f37202333be89f96736e0416'),
(0, 'Adilet', '180107194@stu.sdu.edu.kz', 'a8edbb00f37202333be89f96736e0416'),
(0, 'Adilet', '180107194@stu.sdu.edu.kz', 'a87ff679a2f3e71d9181a67b7542122c'),
(0, 'nurs', '180107194@stu.sdu.edu.kz', 'af92e3d46cc7fffe75fcb783081896cd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
