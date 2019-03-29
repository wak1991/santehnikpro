-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2019 г., 11:38
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

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
  `keywords` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `parent_id` int(10) NOT NULL DEFAULT '0',
  `img` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `keywords`, `alias`, `description`, `parent_id`, `img`, `sort`) VALUES
(1, 'Монтаж труб', 'ggfgfd', 'montazh-trub', 'Проводим полный монтаж труб', 0, '0f8b24d6205d20265f38acdb74b39dd6.png', 0),
(2, 'Разводка труб', '', 'razvodka-trub', 'Полная разводка', 0, '0f8b24d6205d20265f38acdb74b39dd6.png', 0),
(3, 'Отопление', '', 'otoplenie', 'Описание про отопление', 0, '0f8b24d6205d20265f38acdb74b39dd6.png', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `constants`
--

CREATE TABLE `constants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `constants`
--

INSERT INTO `constants` (`id`, `name`, `description`, `value`, `sort`) VALUES
(1, 'social', 'Соц. сети', '                <ul>\r\n                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>\r\n                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>\r\n                </ul>', 0),
(2, 'contact_info', 'Контактная информация', '                <ul>\r\n                    <li><a href=\"tel:+375444540444\" class=\"hvr-bounce-to-bottom\"><i class=\"fa fa-phone\"></i>  +375 (44) 454-04-44 </a></li>\r\n                    <li><a href=\"mailto:santehkostya@mail.ru\" class=\"hvr-bounce-to-bottom\"><i class=\"fa fa-envelope-o\"></i>santehkostya@mail.ru</a></li>\r\n                </ul>', 0),
(3, 'text_slider', 'Текст под слайдером', '<p>We\'re on call 24/7 to react promptly to your <b>plumbing emergencies.</b></p>', 0),
(4, 'our_proects', 'Наши проекты', '        <div class=\"section-title\">\r\n            <h1>Выполненые работы</h1>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-lg-12 col-md-12 masonary-gallery\">\r\n                <div class=\"masonary-item width-1\">\r\n                    <a class=\"fancybox\" href=\"img/our-projects/1.jpg\"><div class=\"img-wrap\">\r\n                            <img src=\"img/our-projects/1.jpg\" alt=\"\">\r\n                            <div class=\"content-wrap\">\r\n                                <div class=\"border\">\r\n                                    <div class=\"content\">\r\n                                        <h4>Kitchken Maintance</h4>\r\n                                        <span>Pipe Leakages Fixed</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div></a>\r\n                </div>\r\n                <div class=\"masonary-item width-1\">\r\n                    <a class=\"fancybox\" href=\"img/our-projects/2.jpg\"><div class=\"img-wrap\">\r\n                            <img src=\"img/our-projects/2.jpg\" alt=\"\">\r\n                            <div class=\"content-wrap\">\r\n                                <div class=\"border\">\r\n                                    <div class=\"content\">\r\n                                        <h4>Kitchken Maintance</h4>\r\n                                        <span>Pipe Leakages Fixed</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div></a>\r\n                </div>\r\n                <div class=\"masonary-item width-1 height-1\">\r\n                    <a class=\"fancybox\" href=\"img/our-projects/3.jpg\"><div class=\"img-wrap\">\r\n                            <img src=\"img/our-projects/3.jpg\" alt=\"\">\r\n                            <div class=\"content-wrap\">\r\n                                <div class=\"border\">\r\n                                    <div class=\"content\">\r\n                                        <h4>Kitchken Maintance</h4>\r\n                                        <span>Pipe Leakages Fixed</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div></a>\r\n                </div>\r\n                <div class=\"masonary-item width-1\">\r\n                    <a class=\"fancybox\" href=\"img/our-projects/4.jpg\"><div class=\"img-wrap\">\r\n                            <img src=\"img/our-projects/4.jpg\" alt=\"\">\r\n                            <div class=\"content-wrap\">\r\n                                <div class=\"border\">\r\n                                    <div class=\"content\">\r\n                                        <h4>Kitchken Maintance</h4>\r\n                                        <span>Pipe Leakages Fixed</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div></a>\r\n                </div>\r\n                <div class=\"masonary-item width-2\">\r\n                    <a class=\"fancybox\" href=\"img/our-projects/5.jpg\"><div class=\"img-wrap\">\r\n                            <img src=\"img/our-projects/5.jpg\" alt=\"\">\r\n                            <div class=\"content-wrap\">\r\n                                <div class=\"border\">\r\n                                    <div class=\"content\">\r\n                                        <h4>Kitchken Maintance</h4>\r\n                                        <span>Pipe Leakages Fixed</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div></a>\r\n                </div>\r\n                <div class=\"masonary-item width-1\">\r\n                    <a class=\"fancybox\" href=\"img/our-projects/6.jpg\"><div class=\"img-wrap\">\r\n                            <img src=\"img/our-projects/6.jpg\" alt=\"\">\r\n                            <div class=\"content-wrap\">\r\n                                <div class=\"border\">\r\n                                    <div class=\"content\">\r\n                                        <h4>Kitchken Maintance</h4>\r\n                                        <span>Pipe Leakages Fixed</span>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div></a>\r\n                </div>\r\n\r\n            </div>\r\n\r\n        </div>\r\n        <div class=\"view-all-btn\"><a href=\"project-v1.html\" class=\"view-all hvr-bounce-to-right\">посмотреть все</a></div>', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `form` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `keywords`, `description`, `alias`, `parent_id`, `text`, `url`, `sort`, `form`) VALUES
(1, 'О компании', '', '', 'o-kompanii', 0, '<p>Какой-то текст о компании</p>', '', 10, '0'),
(2, 'Контакты', '', '', 'kontakty', 0, 'Какой-то текст о контактах', '', 10, '1'),
(3, 'Услуги', '', '', 'uslugi', 0, 'Какой-то текст об услугах', '', 10, '0'),
(4, 'Водопровод', '', '', 'vodoprovod', 0, 'Какой-то текст о водопроводе', '', 10, '0'),
(5, 'Сантехника', '', '', 'santehnika', 3, 'Какой-то текст о сантехнике', '', 10, '0'),
(6, 'Трубы', '', '', 'trybi', 4, 'Какой-то текст о трубах', '', 10, '0'),
(7, 'Уголки', 'уголки', 'Описание тестового поста', 'ugolki', 4, 'Какой-то текст о уголках', '', 10, '0'),
(8, 'Не сантехника', '', '', 'nesantehnika', 3, 'Какой-то текст о не сантехнике', '', 10, '0'),
(9, 'Краны', '', '', 'krany', 5, 'Какой-то текст о кранах', '', 10, '0'),
(10, 'Ванны', '', '', 'vanny', 5, 'Какой-то текст о ваннах', '', 10, '0'),
(11, 'Унитазы', '', '', 'unitazy', 5, 'Какой-то текст о унитахзах', '', 10, '0'),
(12, 'Каталог', '', '', 'catalog', 0, '', 'category', 1, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `scripts`
--

CREATE TABLE `scripts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `scripts`
--

INSERT INTO `scripts` (`id`, `name`, `value`, `sort`) VALUES
(2, 'Метрика', '<script type=\"text/javascript\">Метрика</script>', 10),
(3, 'Google', '<script type=\"text/javascript\">Google</script>', 20);

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
(1, 'Первый слайдер', 'image1.jpg', 100, 'Это первый слайдер'),
(2, 'Второй слайдер', 'image2.jpg', 200, 'Это второй слайдер'),
(3, 'Третий слайдер', 'image3.jpg', 300, 'Это третий слайдер');

-- --------------------------------------------------------

--
-- Структура таблицы `specialists`
--

CREATE TABLE `specialists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `img`, `specialty`, `sort`) VALUES
(1, 'Вася Пупкин', '1.png', 'Монтажник', 0),
(2, 'Коля Никифоров', '2.png', 'Сантехник', 0),
(3, 'Петя Василевский', '3.png', 'Прораб', 0),
(4, 'Жора Нюточкин', '4.png', 'Водопроводчик', 0),
(5, 'Игорь Семёнов', '5.png', 'Монтажник труб', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `img`, `description`, `sort`) VALUES
(1, 'Филипп', '1.jpg', 'Хочу выразить благодарность магазину Краник! Очень понравилось покупать здесь - не выходя из дома! Всем очень советую!', 0),
(2, 'Анастасия', '2.jpg', 'Менеджер нам сам перезвонил, все уточнил, договорились о времени доставки, и вот мы уже радуемся нашей новой мебели!', 0),
(3, 'Тимати', '3.jpg', 'Спасибо за помощь с покупкой! Выбирали унитаз, консультанты помогли подобрать модель, которая очень нам понравилась.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$0kqC0gBV.1s.JpbTICh98.zLXI6k/xmEZWVlwYYsR2D2KnUTAgMp.', 'admin');

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
-- Индексы таблицы `scripts`
--
ALTER TABLE `scripts`
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
-- Индексы таблицы `user`
--
ALTER TABLE `user`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `scripts`
--
ALTER TABLE `scripts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
