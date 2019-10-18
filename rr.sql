-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 14 2019 г., 08:54
-- Версия сервера: 5.7.25-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statti`
--

CREATE TABLE `statti` (
  `id` int(11) NOT NULL,
  `fio` varchar(191) NOT NULL,
  `send_time` datetime NOT NULL,
  `date_of_birth` date NOT NULL,
  `passport_series_number` varchar(11) NOT NULL,
  `passport_extradition` date NOT NULL,
  `passport_issued_by` varchar(191) NOT NULL,
  `passport_unit_code` varchar(20) NOT NULL,
  `address_registration` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ulm_code` varchar(100) NOT NULL,
  `international_passport_number` varchar(191) NOT NULL,
  `address_actual` varchar(191) NOT NULL,
  `age` varchar(191) NOT NULL,
  `position` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `cause` varchar(191) NOT NULL,
  `experience` varchar(191) NOT NULL,
  `passport_facial` varchar(191) NOT NULL,
  `passport_registration` varchar(191) NOT NULL,
  `international_passport_data` varchar(191) NOT NULL,
  `marigold_book1` varchar(191) NOT NULL,
  `marigold_book2` varchar(191) NOT NULL,
  `marigold_book3` varchar(191) NOT NULL,
  `marigold_book4` varchar(191) NOT NULL,
  `marigold_book5` varchar(191) NOT NULL,
  `certificate_of_good_conduct` varchar(191) NOT NULL,
  `pzm` varchar(191) NOT NULL,
  `acb_2` varchar(191) NOT NULL,
  `otpz` varchar(191) NOT NULL,
  `transport_safety` varchar(191) NOT NULL,
  `bzhs` varchar(191) NOT NULL,
  `osps` varchar(191) NOT NULL,
  `special_boats_specialist` varchar(191) NOT NULL,
  `bspprp` varchar(191) NOT NULL,
  `first_aid_service` varchar(191) NOT NULL,
  `first_aid_service_care` varchar(191) NOT NULL,
  `initial_training_chemical_tankers` varchar(191) NOT NULL,
  `initial_training_gas_tankers` varchar(191) NOT NULL,
  `advanced_training_on_oil_tankers` varchar(191) NOT NULL,
  `advanced_training_chemical_carriers` varchar(191) NOT NULL,
  `advanced_training_gas_carriers` varchar(191) NOT NULL,
  `transportation_of_hazardous_substances` varchar(191) NOT NULL,
  `dangerous_goods_transportation` varchar(191) NOT NULL,
  `small_boat_master_mchs` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `statti`
--

INSERT INTO `statti` (`id`, `fio`, `send_time`, `date_of_birth`, `passport_series_number`, `passport_extradition`, `passport_issued_by`, `passport_unit_code`, `address_registration`, `phone`, `email`, `ulm_code`, `international_passport_number`, `address_actual`, `age`, `position`, `status`, `cause`, `experience`, `passport_facial`, `passport_registration`, `international_passport_data`, `marigold_book1`, `marigold_book2`, `marigold_book3`, `marigold_book4`, `marigold_book5`, `certificate_of_good_conduct`, `pzm`, `acb_2`, `otpz`, `transport_safety`, `bzhs`, `osps`, `special_boats_specialist`, `bspprp`, `first_aid_service`, `first_aid_service_care`, `initial_training_chemical_tankers`, `initial_training_gas_tankers`, `advanced_training_on_oil_tankers`, `advanced_training_chemical_carriers`, `advanced_training_gas_carriers`, `transportation_of_hazardous_substances`, `dangerous_goods_transportation`, `small_boat_master_mchs`) VALUES
(18, 'Казазаев Алексей Сергеевич', '2019-10-14 04:28:09', '4444-04-04', '3432432423', '2019-10-03', '4234324', '32423432', '23432432423', '23432432', '11@sdfsd.r', '23432423', '234234', '23432423', '423432432', 'Водитель электро и автотележка', 'Устроен', '23432', '432432', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Иван иванович Иванов', '2019-10-14 08:50:08', '2017-09-11', '1111 11111', '2019-10-09', 'АуцкцуафСыва', '42343242', '32432432', '23432432', 'ytu@gdgdf.uy', '23432432', '23432432', '23432432', '32432432', 'Электрик судовой', 'Устроен', '23432432', '3242343232', 'img/19//915688_301408713374508_65741355_n.jpg', 'img/19//923739_1116019295081419_1599403288_n.jpg', 'img/19//924178_225261677640715_1440195718_n.jpg', 'img/19//1168690_255532191262958_1244118312_n.jpg', 'img/19//1169116_531442283612074_1328871169_n.jpg', 'img/19//1170571_518328421592166_1500064088_n.jpg', 'img/19//1171980_539995086097017_8690465_n.jpg', 'img/19//1172198_506448029469451_423639315_n.jpg', 'img/19//1389129_239859432876632_404083911_n.jpg', 'img/19//1527530_211087619075250_1211070928_n.jpg', 'img/19//1538452_205030836354285_415068577_n.jpg', 'img/19//1538553_273738489444470_1661779650_n.jpg', 'img/19//1660729_370641133093416_249777865_n.jpg', 'img/19//10249264_743290515692839_466087768_n.jpg', 'img/19//10251456_1423788127876674_2128437348_n.jpg', 'img/19//10375873_1608548109369743_1110088502_n.jpg', 'img/19//10375718_673356932739129_252481751_n.jpg', 'img/19//10387859_650311245063107_808304895_n.jpg', 'img/19//10483531_888542654494379_1439931679_n.jpg', 'img/19//10488741_659312327477949_1506907762_n.jpg', 'img/19//10584696_622734974510339_1698601610_n.jpg', 'img/19//10616433_357410591092902_927130669_n.jpg', 'img/19//10666032_855985021078897_486684210_n.jpg', 'img/19//10617031_377111619104205_757088275_n.jpg', 'img/19//11264878_889722277739983_195323686_n.jpg', 'img/19//11326363_474965769326573_957654370_n.jpg', 'img/19//11334497_1395618634101965_337585954_n.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `confirm` enum('0','1') NOT NULL DEFAULT '0',
  `sess` varchar(32) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`, `name`, `hash`, `confirm`, `sess`, `email`) VALUES
(13, 'Admin', '9e9e9f3364c76fbcb8b3923d13955c86', 'Admin', '32e7cf058bde162ec89d7e7468eaee8f', '1', '9a9e0a6f218c32fa92ef2ad6c8ea96c0', 'pro100blich@gmai.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statti`
--
ALTER TABLE `statti`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statti`
--
ALTER TABLE `statti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
