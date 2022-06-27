-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 23 2022 г., 14:44
-- Версия сервера: 8.0.24
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `insurance`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int NOT NULL,
  `movieName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bookingTheatre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bookingType` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bookingDate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bookingTime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bookingFName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bookingLName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bookingPNumber` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieName`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`) VALUES
(31, 'Страхование здоровья', 'Исторический факультет', '3 месяца', 'Перезвон в рабочее время', '27.06.2022', 'Max', 'Dikkens', '4124142141'),
(32, 'Страхование денежных средств', 'Компания', '3 месяца', 'Перезвонить во 2 половине дня', '04.07.2022', 'Charles', 'Kayne', '7475474');

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `id` int NOT NULL,
  `senderfName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senderlName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sendereMail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senderfeedback` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `feedbacktable`
--

INSERT INTO `feedbacktable` (`id`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(6, 'Alex', 'Kayne', '', 'Отличный сервис , благодарю !');

-- --------------------------------------------------------

--
-- Структура таблицы `franchase`
--

CREATE TABLE `franchase` (
  `id` int NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `sname` varchar(40) DEFAULT NULL,
  `company` varchar(40) DEFAULT NULL,
  `position` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `franchase`
--

INSERT INTO `franchase` (`id`, `name`, `sname`, `company`, `position`, `country`, `phone`, `email`) VALUES
(2, 'Alex', 'Teddy', 'Barsuk', 'posit', 'Украина', '12551521552', 'clow@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int NOT NULL,
  `movieImg` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `movieTitle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `movieGenre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `movieDuration` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `movieRelDate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `movieDirector` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `movieActors` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`) VALUES
(1, 'img/1.jpg', 'Страхование транспорта', 'В течении суток', '300грн/мес', '60%', 'Документы на автомобиль , паспорт', '044 204 9494'),
(2, 'img/2.jpg', 'Страхование здоровья', 'В течении суток', '200грн/мес', '100%', 'Паспорт , ИНН', '044 204 9494'),
(3, 'img/3.jpg', 'Страхование туризма', 'В течении суток', '150грн/мес', '100%', 'Паспорт, ИНН, Даты путешествия', '044 204 9494'),
(4, 'img/4.jpg', 'Страхование недвижимости', 'В течении суток', '400грн/мес', '60%', 'Документы на недвижимость , паспорт', '044 204 9494'),
(5, 'img/5.jpg', 'Страхование денежных средств', 'В течении суток', '500грн/мес', '50%', 'Выписка с банковского счета, паспорт', '044 204 9494'),
(6, 'img/6.jpg', 'Страхование техники', 'В течении суток', '150грн/мес', '100%', 'Документы на технику, паспорт', '044 204 9494');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);

--
-- Индексы таблицы `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `msgID` (`id`);

--
-- Индексы таблицы `franchase`
--
ALTER TABLE `franchase`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `franchase`
--
ALTER TABLE `franchase`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
