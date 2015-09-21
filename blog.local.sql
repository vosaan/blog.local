-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 21 2015 г., 11:19
-- Версия сервера: 5.6.25
-- Версия PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`id`, `title`, `date`, `message`) VALUES
(1, 'Aeronautics and Astronautics', '2015-09-01', 'AeroAstro is America''s oldest and most respected university aerospace program. We have a tradition of strong scholarship and solving industrial-strength problems. Our community comprises people whose careers have included astronaut, Air Force secretary, NASA deputy administrator and chief technologist, Air Force chief scientist, aerospace executive, and corporate founder. Our alumni are entrepreneurs, policy-makers, educators, and researchers pushing technology’s boundaries.'),
(14, 'paranoid', '2015-09-18', 'paranoi'),
(15, 'parano', '2015-09-18', 'paranoi'),
(16, 'Badger', '2015-09-18', 'kjojkljkl jkghhjghjkh iyuiy h khjkhjh jkhjk uiyjkh jkh'),
(17, 'Badger the great', '2015-09-18', 'kjojkljkl jkghhjghjkh iyuiy h khjkhjh jkhjk uiyjkh jkh'),
(21, 'Badgerrrrrrr', '2015-09-20', 'Badgerrrrrrr'),
(22, 'Badger qqq', '2015-09-18', 'kjojkljkl jkghhjghjkh iyuiy h khjkhjh jkhjk uiyjkh jkh'),
(23, 'Badger the', '2015-09-18', 'kjojkljkl jkghhjghjkh iyuiy h khjkhjh jkhjk uiyjkh jkh'),
(24, 'Badger', '2015-09-18', 'kjojkljkl jkghhjghjkh iyuiy h khjkhjh jkhjk uiyjkh jkh'),
(25, 'Badger!!!!!!', '0000-00-00', '2015-09-20'),
(26, 'Number3', '2015-09-20', '2015-09-20'),
(27, 'Ð”ÐµÐ½ÑŒ Ð·Ð½Ð°Ð½Ð¸Ð¹', '2015-09-20', 'Ð‘Ð»Ð°Ð°Ð°Ð°Ð°Ð°Ð°'),
(28, 'Ð‘Ð°Ñ€ÑÑƒÐº', '2015-09-20', 'Ð‘Ð°Ñ€ÑÑƒÑ‡Ð°Ñ€Ð°');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
