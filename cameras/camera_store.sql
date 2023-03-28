-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 15 2022 г., 21:56
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `camera_store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'Зеркальные фотоаппараты'),
(1, 'Компактные фотоаппараты'),
(4, 'Экшен камеры');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `matrix_res` varchar(200) NOT NULL,
  `marix_size` varchar(200) NOT NULL,
  `video_quality` varchar(200) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` int NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `full_name`, `matrix_res`, `marix_size`, `video_quality`, `price`, `qty`, `image`) VALUES
(3, 1, 'Canon Compact', '24.8 МПикс', '1/2.3\"', '50', '5999', 10, 'img/canon_compact.jpg'),
(4, 1, 'Rekam iLook755', '24.8 МПикс', '1/2.3\"', '5', '3999', 10, 'img/rekam.jpg'),
(5, 1, 'Sony Compact', '24.8 МПикс', '1/2.3\"', '5', '5500', 10, 'uploads/1637076818sony_compact.jpg'),
(6, 3, 'Canon EOS 2000D', '24.8 МПикс', '23.5x15.6 мм', '20', '45999', 10, 'uploads/1637313192canon.jpg'),
(7, 4, 'GoPRO HERO 9', '24.8 МПикс', '1/2.3\"', '40', '15000', 10, 'uploads/1637313744hero9.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `site_data`
--

CREATE TABLE `site_data` (
  `id` int NOT NULL,
  `page_name` text NOT NULL,
  `page_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `site_data`
--

INSERT INTO `site_data` (`id`, `page_name`, `page_text`) VALUES
(1, 'author', '    <p class=\"container text-centr description\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, sapiente perspiciatis. Consequatur dolore eaque magnam repudiandae assumenda totam, dicta dolorem deleniti maiores porro voluptas tempore omnis quod non maxime fuga.</p>'),
(2, 'aboutus', '<p class=\"container text-centr description\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, sapiente perspiciatis. Consequatur dolore eaque magnam repudiandae assumenda totam, dicta dolorem deleniti maiores porro voluptas tempore omnis quod non maxime fuga.</p>\r\n\r\n      <div class=\"map container\">\r\n        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1906.1745806034298!2d39.706831739816366!3d47.28648187710356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b7fc668e1823%3A0xcd82e3247da12966!2z0LEt0YAg0JrQvtC80LDRgNC-0LLQsCwgOSDQutC-0YDQv9GD0YEgMSwg0KDQvtGB0YLQvtCyLdC90LAt0JTQvtC90YMsINCg0L7RgdGC0L7QstGB0LrQsNGPINC-0LHQuy4sIDM0NDA5Mg!5e1!3m2!1sru!2sru!4v1632421053617!5m2!1sru!2sru\" width=\"700\" height=\"550\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n      </div>'),
(3, 'footer', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `email`, `password`, `avatar`) VALUES
(2, 'ilya', 'sulin', 'ilya', '123@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1636916177IMG013.jpg'),
(3, 'vasya', 'pushkin', 'vasya', '123@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1637000000IMG002.jpg');

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
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site_data`
--
ALTER TABLE `site_data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `site_data`
--
ALTER TABLE `site_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
