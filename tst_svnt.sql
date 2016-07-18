-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 18 2016 г., 12:58
-- Версия сервера: 5.5.44-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `tst_svnt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `widjets`
--

CREATE TABLE IF NOT EXISTS `widjets` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `psn` smallint(6) NOT NULL,
  `state` enum('on','off') NOT NULL DEFAULT 'off',
  `label` varchar(64) NOT NULL,
  `content` varchar(256) NOT NULL,
  `menu_label` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `widjets`
--

INSERT INTO `widjets` (`id`, `psn`, `state`, `label`, `content`, `menu_label`) VALUES
(14, 7, 'on', 'spb', '', 'Санкт-Петербург'),
(15, 5, 'on', 'msk', '', 'Москва'),
(16, 3, 'on', 'kazan', '', 'Казань'),
(17, 6, 'on', 'rostov', '', 'Ростов-на-дону'),
(18, 4, 'on', 'kaliningrad', '', 'Калининград'),
(19, 1, 'on', 'novgorod', '', 'Великий новгород'),
(20, 8, 'on', 'strussa', '', 'Старая русса'),
(21, 2, 'on', 'volgograd', '', 'Волгоград');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
