-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 10 2018 г., 22:00
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `santehnikpro`
--
CREATE DATABASE IF NOT EXISTS `santehnikpro` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `santehnikpro`;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `parent_id` int(10) NOT NULL DEFAULT '0',
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `description`, `parent_id`, `img`) VALUES
(1, 'Монтаж труб', 'montaj-trub', 'Проводим полный монтаж труб', 0, ''),
(2, 'Разводка труб', 'razvodka-trub', 'Полная разводка', 0, ''),
(3, 'Отопление', 'otoplenie', 'Описание про отопление', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `constants`
--

CREATE TABLE `constants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `constants`
--

INSERT INTO `constants` (`id`, `name`, `value`) VALUES
(1, 'social', '                <ul>\r\n                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>\r\n                </ul>'),
(2, 'contact_info', '                <ul>\r\n                    <li><a href=\"tel:+1234567890\" class=\"hvr-bounce-to-bottom\"><i class=\"fa fa-phone\"></i>  + (123) 456 7890 </a></li>\r\n                    <li><a href=\"mailto:info@plumberx.com\" class=\"hvr-bounce-to-bottom\"><i class=\"fa fa-envelope-o\"></i> info@plumberx.com</a></li>\r\n                </ul>'),
(3, 'text_slider', '<p>We\'re on call 24/7 to react promptly to your <b>plumbing emergencies.</b></p>');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `alias`, `parent_id`, `text`) VALUES
(1, 'О компании', 'o-kompanii', 0, 'Какой-то текст о компании'),
(2, 'Контакты', 'contacty', 0, 'Какой-то текст о контактах'),
(3, 'Услуги', 'uslugi', 0, 'Какой-то текст об услугах'),
(4, 'Водопровод', 'vodoprovod', 0, 'Какой-то текст о водопроводе'),
(5, 'Сантехника', 'santehnika', 3, 'Какой-то текст о сантехнике'),
(6, 'Трубы', 'trybi', 4, 'Какой-то текст о трубах'),
(7, 'Уголки', 'ugolki', 4, 'Какой-то текст о уголках'),
(8, 'Не сантехника', 'nesantehnika', 3, 'Какой-то текст о не сантехнике'),
(9, 'Краны', 'krany', 5, 'Какой-то текст о кранах'),
(10, 'Ванны', 'vanny', 5, 'Какой-то текст о ваннах'),
(11, 'Унитазы', 'unitazy', 5, 'Какой-то текст о унитахзах');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `img`, `sort`, `description`) VALUES
(1, 'Первый слайдер', 'image1.jpg', 10, 'для слайдера <br>текст'),
(2, 'Второй слайдер', 'image2.jpg', 30, 'from slider <br>текст 2'),
(3, 'Третий слайдер', 'image3.jpg', 20, 'для слайдера <br>текст 3');

-- --------------------------------------------------------

--
-- Структура таблицы `specialists`
--

CREATE TABLE `specialists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `img`, `specialty`) VALUES
(1, 'Вася Пупкин', '1.png', 'Монтажник'),
(2, 'Коля Никифоров', '2.png', 'Сантехник'),
(3, 'Петя Василевский', '3.png', 'Прораб'),
(4, 'Жора Нюточкин', '4.png', 'Водопроводчик'),
(5, 'Игорь Семёнов', '5.png', 'Монтажник труб');

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `img`, `description`) VALUES
(1, 'Филипп', '1.jpg', 'Хочу выразить благодарность магазину Краник! Очень понравилось покупать здесь - не выходя из дома! Всем очень советую!'),
(2, 'Анастасия', '2.jpg', 'Менеджер нам сам перезвонил, все уточнил, договорились о времени доставки, и вот мы уже радуемся нашей новой мебели!'),
(3, 'Тимати', '3.jpg', 'Спасибо за помощь с покупкой! Выбирали унитаз, консультанты помогли подобрать модель, которая очень нам понравилась.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `constants`
--
ALTER TABLE `constants`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `constants`
--
ALTER TABLE `constants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
