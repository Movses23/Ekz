-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 18 2022 г., 20:57
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sait`
--

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(22) NOT NULL,
  `price` varchar(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `name`, `price`) VALUES
(1, 'Каир', '500'),
(2, 'Александрия', '650'),
(3, 'Гиза', '700'),
(4, 'Стамбул', '300'),
(5, 'Анкара', '400'),
(6, 'Измир', '450'),
(7, 'Бангкок', '500'),
(8, 'Нонтхабури', '350'),
(9, 'Удонтхани', '250'),
(10, 'Санто-Доминго', '600'),
(11, 'Лос-Алькаррисос', '550'),
(12, 'Игуэй', '500');

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` int NOT NULL,
  `turs` varchar(30) NOT NULL,
  `price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `turs`, `price`) VALUES
(1, 'Египет', 15000),
(2, 'Турция', 25000),
(3, 'Тайланд', 31000),
(4, 'Доминикана', 40000);

-- --------------------------------------------------------

--
-- Структура таблицы `ex`
--

CREATE TABLE `ex` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` varchar(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `ex`
--

INSERT INTO `ex` (`id`, `name`, `price`) VALUES
(1, 'Личный гид на один день', '14600'),
(2, 'Оазис Бахария из Каира', '20800'),
(3, 'В Луксор на самолёте', '25800'),
(4, 'Нет', '0'),
(5, 'Романтика на Босфоре: прогулка на яхте класса люкс', '13000'),
(6, '«Великолепный век». Любовь Роксоланы', '16000'),
(7, 'Фотопрогулка «Стамбул — город контрастов»', '13500'),
(8, 'Первое свидание с Пхукетом', '9125'),
(9, 'В гостях у Пхраканонгского привидения', '7300'),
(10, 'Всё великолепие Пхукета за 1 день!', '11000'),
(11, 'Остров Саона Делюкс', '10000'),
(12, 'Секрет Саманы - Ринкон', '13000'),
(13, 'Ужин в небесах: самый необычный ресторан в Доминикане!', '15000');

-- --------------------------------------------------------

--
-- Структура таблицы `hotel`
--

CREATE TABLE `hotel` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(22) NOT NULL,
  `price` varchar(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `price`) VALUES
(1, 'Обычного класса', '2500'),
(2, 'Среднего класса', '3500'),
(3, 'Высокого класса', '4000');

-- --------------------------------------------------------

--
-- Структура таблицы `ready_turs`
--

CREATE TABLE `ready_turs` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(22) NOT NULL,
  `price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `ready_turs`
--

INSERT INTO `ready_turs` (`id`, `name`, `price`) VALUES
(1, 'Египет', 33000),
(2, 'Турция', 42800),
(3, 'Тайланд', 49000),
(4, 'Доминикана', 58100);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pass` varchar(191) DEFAULT NULL,
  `fio` varchar(191) DEFAULT NULL,
  `balance` int DEFAULT '0',
  `turs` varchar(22) NOT NULL DEFAULT 'Нет',
  `city` varchar(22) NOT NULL DEFAULT 'Нет',
  `hotel` varchar(22) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Нет',
  `ex` varchar(22) NOT NULL DEFAULT 'Нет',
  `day` varchar(22) NOT NULL DEFAULT 'Нет',
  `country` varchar(191) DEFAULT NULL,
  `ountry` int UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `fio`, `balance`, `turs`, `city`, `hotel`, `ex`, `day`, `country`, `ountry`) VALUES
(4, 'kharyb', '123', 'Харыбин Руслан Янышевич', 8140109, 'Египет', 'Каир', 'Высокого класса', 'В Луксор на самолёте', '14', 'Египет', 15000),
(7, NULL, NULL, NULL, 1000, 'Нет', 'Нет', 'Нет', 'Нет', 'Нет', NULL, NULL),
(8, 'Movses23', '123', 'Коровин', 0, 'Нет', 'Нет', 'Нет', 'Нет', 'Нет', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `ex`
--
ALTER TABLE `ex`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `hotel`
--
ALTER TABLE `hotel`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `ready_turs`
--
ALTER TABLE `ready_turs`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `ex`
--
ALTER TABLE `ex`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `ready_turs`
--
ALTER TABLE `ready_turs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
