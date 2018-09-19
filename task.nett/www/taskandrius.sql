-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 20 2018 г., 02:49
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `taskandrius`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `Name` char(30) NOT NULL,
  `Cat_id` char(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`ID`, `Name`, `Cat_id`) VALUES
(1, 'Pizza', 'main'),
(4, 'Margarita', 'Pizza'),
(5, 'Tomato', 'Margarita'),
(7, 'Protein', 'Tomato'),
(8, 'Carbon', 'Protein');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `Name` char(30) NOT NULL,
  `Photo` char(30) NOT NULL,
  `Model` char(30) NOT NULL,
  `Cat` char(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `Name`, `Photo`, `Model`, `Cat`) VALUES
(1, 'Neutron', '', 'Acumulated energy', 'Carbon');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Nickname` char(30) NOT NULL,
  `Password` char(255) NOT NULL,
  `Privileges` int(8) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Nickname` (`Nickname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Nickname`, `Password`, `Privileges`) VALUES
(4, 'Vasan', '81dc9bdb52d04dc20036dbd8313ed055', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
