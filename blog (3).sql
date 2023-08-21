-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 21 2023 г., 22:15
-- Версия сервера: 10.4.26-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Артисты'),
(2, 'Другое'),
(3, 'Музыка'),
(4, 'Новости');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `text`, `timestamp`) VALUES
(1, 1, 'dsfsdfsfs', '2023-08-19 15:21:30'),
(2, 1, 'qwee32443', '2023-08-19 15:21:33'),
(3, 1, 'ewtqwererwrweqw', '2023-08-19 15:21:35'),
(4, 1, '123321321312', '2023-08-19 15:21:36'),
(5, 1, '123123321312', '2023-08-19 15:21:37'),
(6, 2, 'rewwqr', '2023-08-19 15:21:49'),
(7, 2, '2131', '2023-08-19 15:21:51'),
(8, 3, '321eqw', '2023-08-19 15:21:53'),
(9, 1, 'фывфыывфвыф', '2023-08-20 16:57:49'),
(10, 1, 'вфывыфвфы', '2023-08-20 16:57:50'),
(11, 1, 'фыфвыфыв', '2023-08-20 16:57:52'),
(12, 1, 'фывыффыв', '2023-08-20 16:57:54'),
(13, 1, 'авыаыв', '2023-08-20 16:57:58'),
(14, 1, '213арпиивтоп', '2023-08-20 16:58:03'),
(15, 8, 'Красава', '2023-08-20 17:22:25'),
(16, 8, 'Красава', '2023-08-20 17:23:22'),
(17, 8, 'Красава', '2023-08-20 17:23:22'),
(18, 8, 'Красава', '2023-08-20 17:23:22'),
(19, 8, 'Красава', '2023-08-20 17:23:22'),
(20, 8, 'Красава', '2023-08-20 17:23:23'),
(21, 8, 'Красава', '2023-08-20 17:23:23'),
(22, 8, 'Красава', '2023-08-20 17:23:23'),
(23, 8, 'Красава', '2023-08-20 17:23:23'),
(24, 8, 'Красава', '2023-08-20 17:23:23'),
(25, 8, 'Красава', '2023-08-20 17:23:23'),
(26, 8, 'Красава', '2023-08-20 17:23:24'),
(27, 8, 'Красава', '2023-08-20 17:23:24'),
(28, 8, 'Красава', '2023-08-20 17:23:24'),
(29, 8, 'Красава', '2023-08-20 17:23:24'),
(30, 8, 'Красава', '2023-08-20 17:23:24'),
(31, 8, 'Красава', '2023-08-20 17:23:25'),
(32, 8, 'Красава', '2023-08-20 17:23:25'),
(33, 8, 'Красава', '2023-08-20 17:23:25'),
(34, 8, 'Красава', '2023-08-20 17:23:25'),
(35, 8, 'Красава', '2023-08-20 17:23:25'),
(36, 8, 'Красава', '2023-08-20 17:23:25'),
(37, 8, 'Красава', '2023-08-20 17:23:25'),
(38, 8, 'Красава', '2023-08-20 17:25:47'),
(39, 8, 'Красава', '2023-08-20 17:25:47'),
(40, 9, 'вика фуфел ', '2023-08-20 21:46:55'),
(41, 14, 'круто', '2023-08-21 15:32:54'),
(42, 14, 'крутооооооооооо', '2023-08-21 15:33:06'),
(43, 14, 'крутооооооооооо', '2023-08-21 15:33:07'),
(44, 14, 'крутооооооооооо', '2023-08-21 15:33:08'),
(45, 14, 'крутооооооооооо', '2023-08-21 15:33:08'),
(46, 14, 'крутооооооооооо', '2023-08-21 15:33:08'),
(47, 1, 'иваыпапавпваы', '2023-08-21 19:08:58'),
(48, 1, 'апыпаыпа', '2023-08-21 19:09:00');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `text` varchar(256) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `text`, `timestamp`, `category_id`) VALUES
(1, 'posts', 'posts', '0000-00-00', NULL),
(2, 'gfhfghghghfhh', 'ё2113131232312131231232132132132131231', '0000-00-00', NULL),
(3, 'басков', 'авававав', '0000-00-00', NULL),
(4, 'уцуцйуйц', 'уйцу', '0000-00-00', NULL),
(5, '3йуйцуйц', 'йцйцууквыыва', '2023-08-19', NULL),
(6, 'влад', 'йцуйвыфцуыфв', '2023-08-19', NULL),
(7, 'фцук', 'йкцуйкцу', '2023-08-19', NULL),
(8, 'Владимир', 'Пою с 5 лет', '2023-08-20', NULL),
(10, 'басков', 'dfg', '2023-08-21', NULL),
(11, 'eqw', 'qwe', '2023-08-21', NULL),
(12, '1', '1', '2023-08-21', NULL),
(13, '2', '2', '2023-08-21', NULL),
(15, 'басков', 'авпыапыапвавпваапввапвапапвавпвапапв', '2023-08-21', NULL),
(16, '1221212112122112', '1212211212', '2023-08-21', NULL),
(17, 'gfhfghghghfhh', 'ВЫФВВФЫВЫФ', '2023-08-21', 1),
(18, 'ФВФВФ', 'ЙЦУЙЦУ1', '2023-08-21', 4),
(19, 'басков', 'еккуеуеукеа', '2023-08-21', 1),
(20, 'Василий', 'Артист', '2023-08-21', 1),
(21, 'вачси', 'аываывацук', '2023-08-21', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(512) NOT NULL,
  `salt` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `salt`) VALUES
(1, 'qwerty', '0', '0'),
(2, 'привет', '0', '0'),
(3, 'пока1', '0', '0'),
(4, 'ghbdtn1', '4', '0'),
(5, 'ghbdtn12', '0', '5'),
(6, 'Василий', '$2y$10$H.pbkjrsbJQ0LGApLrbbuOY7UAxYWbk4XUmpri6mRpDLCzXaOUo46', '7w:qJ\"*T'),
(7, 'ghdbjfng', '$2y$10$H3rt5WQyu8W9t8DZWOWt4Ofa.wJfAHH5jlw2AjoDW1QT0FUQOMGpa', ',%20v&=F'),
(8, 'Василий2', '$2y$10$SSx8ogybzLTy8DOxCh90ve22mXL6engvr3.kGcFsjrfNVn0/JruKa', 'o1.TzD|1'),
(9, 'выфцйууйц', '$2y$10$lHWA/3xGmASWdCLeVxfe7OuV85HEDZR/Vkvx21aqP/KB4fXI32JDe', 'D$N2C^bc'),
(10, 'Влад123', '$2y$10$eYRi4nnoIzoEZ3vRe93PE.mfqpcOOmqA2rl5CpL34YcbVgdRQJeu2', 'u|bAL,B8');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
