-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 28 2023 г., 00:09
-- Версия сервера: 8.0.19
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `osnova`
--

CREATE TABLE `osnova` (
  `id` int UNSIGNED NOT NULL,
  `filenames` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pricez` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `osnova`
--

INSERT INTO `osnova` (`id`, `filenames`, `price`, `pricez`, `namer`) VALUES
(1, 'roza.png', '1200₽', '1500₽', 'Розы'),
(2, 'flower1.png', '1500₽', '2100₽', 'Счастливые Розы'),
(3, 'flower1.png', '1900₽', '2100₽', 'Комбо Розы'),
(4, 'flower3.png', '8200₽', '9000₽', 'Корзинка Роз'),
(5, 'flower4.png', '2400₽', '2800₽', 'Букет \"Подарок\"'),
(6, 'flower5.png', '2000₽ ', '2200₽', 'Красная Осень'),
(7, 'flower7.png', '2999₽', '3999₽', 'Букет \"Праздник\"'),
(8, 'flower6.png', '1999₽', '2999₽', 'Мини–Розы'),
(9, 'flower8.png', '1999₽', '2999₽', 'Розово–Белый'),
(10, 'flower9.png', '1999₽', '2999₽', 'Осенняя пора'),
(11, 'flower10.png', '2599₽', '2999₽', 'Букет \"Счастье\"'),
(12, 'flower11.png', '2499₽', '2999₽', 'Букет красок'),
(13, 'pioni.png', '2023₽', '2999₽', 'Пионы'),
(14, 'flower12.png', '2099₽', '2499₽', 'Жёлтая яркость'),
(15, 'flower13.png', '2999₽', '3200₽', 'Две стороны'),
(16, 'flower14.png', '999₽', '1499₽', 'Мини Подарок');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `osnova`
--
ALTER TABLE `osnova`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `osnova`
--
ALTER TABLE `osnova`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
