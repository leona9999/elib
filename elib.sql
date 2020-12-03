-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 03 2020 г., 16:23
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `elib`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `a_name` varchar(100) NOT NULL COMMENT 'Name',
  `a_year` date DEFAULT NULL COMMENT 'Birthday',
  `a_rating` float DEFAULT NULL COMMENT 'Rating'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`a_name`, `a_year`, `a_rating`) VALUES
('Михаил Ахманов', '1980-12-31', 8),
('Павел Корнев', '1980-06-02', 9),
('Юлия Федотова', '1983-11-18', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `b_name` varchar(100) NOT NULL COMMENT 'Name',
  `b_author_name` varchar(100) NOT NULL COMMENT 'Author Name',
  `b_year` date DEFAULT NULL COMMENT 'Year',
  `b_rating` float DEFAULT NULL COMMENT 'Rating'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`b_name`, `b_author_name`, `b_year`, `b_rating`) VALUES
('Герои былых времен', 'Юлия Федотова', '2008-01-01', 9),
('Колумбы иных миров', 'Юлия Федотова', '2009-01-01', 8),
('Лед', 'Павел Корнев', '2005-01-01', 7),
('Наемники судьбы', 'Юлия Федотова', '2006-01-01', 10),
('По следу скорпиона', 'Юлия Федотова', '2007-01-01', 10),
('Посланец небес', 'Михаил Ахманов', '2005-01-01', 8),
('Скользкий', 'Павел Корнев', '2004-01-01', 9),
('Страж фараона', 'Михаил Ахманов', '2008-01-01', 9),
('Чисто семейное дело', 'Юлия Федотова', '2010-01-01', 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`a_name`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_name`,`b_author_name`),
  ADD KEY `author_books` (`b_author_name`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `author_books` FOREIGN KEY (`b_author_name`) REFERENCES `authors` (`a_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
