-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 09 2020 г., 18:21
-- Версия сервера: 10.0.31-MariaDB-cll-lve
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `scriptwm_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `MY_ADDRESSES`
--

CREATE TABLE IF NOT EXISTS `MY_ADDRESSES` (
  `id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `YOUR_CITY` int(1) NOT NULL,
  `YOUR_AREA` int(1) NOT NULL,
  `STREET` varchar(255) NOT NULL,
  `HOUSE` varchar(255) NOT NULL,
  `ADDITIONAL` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `MY_ADDRESSES`
--

INSERT INTO `MY_ADDRESSES` (`id`, `NAME`, `YOUR_CITY`, `YOUR_AREA`, `STREET`, `HOUSE`, `ADDITIONAL`) VALUES
(1, 'Домик', 1, 2, '20', '49-50', 'Дополнительная информация');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `MY_ADDRESSES`
--
ALTER TABLE `MY_ADDRESSES`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `MY_ADDRESSES`
--
ALTER TABLE `MY_ADDRESSES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
