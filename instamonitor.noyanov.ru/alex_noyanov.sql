-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 02 2020 г., 09:25
-- Версия сервера: 8.0.18
-- Версия PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `InstaAnalytics`
--

-- --------------------------------------------------------

--
-- Структура для представления `alex_noyanov`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alex_noyanov`  AS  select `userssubscribers`.`id` AS `id`,`userssubscribers`.`FullName` AS `FullName`,`userssubscribers`.`Subscribers` AS `Subscribers`,`userssubscribers`.`Date` AS `Date` from `userssubscribers` where (`userssubscribers`.`FullName` = 'alex_noyanov') ;

--
-- VIEW `alex_noyanov`
-- Данные: Ниодного
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
