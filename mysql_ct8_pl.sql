-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: mysql.ct8.pl
-- Czas generowania: 04 Gru 2022, 12:52
-- Wersja serwera: 8.0.30
-- Wersja PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `m31366_UNIX`
--
CREATE DATABASE IF NOT EXISTS `m31366_UNIX` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `m31366_UNIX`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Komputery i laptopy'),
(2, 'Smartfony i smartwatche'),
(3, 'Podzespoły komputerowe '),
(4, 'Urządzenia peryferyjne '),
(5, 'TV i Audio'),
(6, 'Akcesoria');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delivery`
--

CREATE TABLE `delivery` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `price`) VALUES
(1, 'kurier DPD', 12),
(2, 'Paczkomat Inpost', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_details`
--

CREATE TABLE `order_details` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `produkt_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment`
--

CREATE TABLE `payment` (
  `id` int NOT NULL,
  `method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `subcategory_id` int NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL DEFAULT '0',
  `picture_url` varchar(255) NOT NULL,
  `sales` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`id`, `name`, `subcategory_id`, `description`, `price`, `discount`, `picture_url`, `sales`) VALUES
(1, 'PowerColor Radeon RX 6700 XT Fighter 12GB GDDR6', 1, 'opis', 2299, 0, 'assets/images/KartyGraficzne/1/1.webp', 5),
(2, 'Gigabyte GeForce RTX 3060 EAGLE OC LHR 12GB GDDR6', 1, 'opis', 1949, 0, 'assets/images/KartyGraficzne/2/1.webp', 13),
(3, 'Gigabyte GeForce RTX 3090 Ti GAMING OC 24GB GDDR6X', 1, 'opis', 6499, 6300, 'assets/images/KartyGraficzne/3/1.webp', 28),
(4, 'Gigabyte Radeon RX 6600 EAGLE 8GB GDDR6', 1, 'opis', 1559.99, 1450, 'assets/images/KartyGraficzne/4/1.webp', 5),
(5, 'Acer Aspire 3 i5-1135G7/12GB/512/Win11 IPS Srebrny', 2, 'opis', 2699, 0, 'assets/images/Laptopy/1/1.webp', 25),
(6, 'ASUS TUF Gaming F15 i5-11400H/16GB/512 RTX3050Ti 144Hz', 2, 'opis', 4099, 4000, 'assets/images/Laptopy/2/1.webp', 31),
(7, 'G4M3R HERO i7-12700F/32GB/2TB/RTX3060/W11x', 3, 'opis', 8500, 0, 'assets/images/Laptopy/3/1.webp', 8),
(8, 'Apple iPhone 13 512GB Midnight', 4, 'opis', 6599, 6299, 'assets/images/Smartfony/1/1.webp', 11),
(9, 'Samsung Galaxy S22+ 8/128GB Green\r\n', 4, 'opis', 4549, 4200, 'assets/images/Smartfony/2/1.webp', 13),
(10, 'Xiaomi Mi Watch Lite Black', 5, 'opis', 219, 0, 'img10.jpg', 17),
(11, 'Xiaomi Mi Band 7 Czarny', 5, 'opis', 209, 0, 'img11.jpg', 21),
(12, 'Samsung Galaxy Watch 5 44mm Grey', 5, 'opis', 1349, 0, 'assets/images/Smartwatche/3/1.webp', 54),
(13, 'SPC Gear VIRO Plus USB', 6, 'opis', 218, 0, 'img13.jpg', 21),
(14, 'Razer Barracuda X 2022 Black', 6, 'opis', 449, 0, 'img14.jpg', 12),
(15, 'SteelSeries Rival 3', 7, 'opis', 159, 0, 'assets/images/Słuchawki/5/1.webp', 28),
(16, 'SPC Gear GK630K Tournament Kailh Blue RGB', 8, 'opis', 219, 0, 'img16.jpg', 23),
(17, 'Logitech 2.1 Z333', 9, 'opis', 249, 0, 'img17.jpg', 2),
(18, 'TCL 43P615', 10, 'opis', 1299, 0, 'assets/images/Telewizory/1/1.webp', 43),
(19, 'Xiaomi Mi TV Q1E 55\"', 10, 'opis', 2499, 0, 'assets/images/Telewizory/3/1.webp', 41),
(20, 'Samsung QE55Q77B', 10, 'opis', 3499, 0, 'img20.jpg', 4),
(21, 'Sony HT-S40R', 9, 'opis', 1299, 0, 'img21.jpg', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `subcategory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory_name`) VALUES
(1, 3, 'karty_graficzne'),
(2, 1, 'laptopy'),
(3, 1, 'komputery'),
(4, 2, 'smartfony'),
(5, 2, 'smartwatche'),
(6, 6, 'sluchawki'),
(7, 6, 'myszki'),
(8, 6, 'klawiatury'),
(9, 5, 'glosniki'),
(10, 5, 'telewizory'),
(11, 2, 'tablety'),
(12, 2, 'komorkowe'),
(13, 3, 'procesory'),
(14, 3, 'pamierac_ram'),
(15, 3, 'plyty_glowne'),
(16, 3, 'dyski'),
(17, 3, 'obudowy'),
(18, 3, 'chlodzenie'),
(19, 3, 'zasilacze');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `e-mail` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` int NOT NULL DEFAULT '0',
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL,
  `miasto` varchar(32) DEFAULT NULL,
  `kod_pocztowy` varchar(8) DEFAULT NULL,
  `ulica` varchar(64) DEFAULT NULL,
  `nr_domu` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `e-mail`, `login`, `password`, `admin`, `imie`, `nazwisko`, `miasto`, `kod_pocztowy`, `ulica`, `nr_domu`) VALUES
(1, 'admin@sklep.pl', 'admin', 'zaq12wsx', 1, 'Antony', 'Montana', NULL, NULL, NULL, NULL),
(2, 'klient1@gmail.com', 'klient1', 'xsw21qaz', 0, 'Jakub', 'Marczak', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `delivery_id` int NOT NULL,
  `data` date NOT NULL,
  `kwota_zamowienia` float NOT NULL,
  `payment_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produkt_id` (`produkt_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indeksy dla tabeli `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indeksy dla tabeli `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `delivery_id` (`delivery_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);

--
-- Ograniczenia dla tabeli `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`produkt_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `zamowienie` (`id`);

--
-- Ograniczenia dla tabeli `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`);

--
-- Ograniczenia dla tabeli `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Ograniczenia dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `zamowienie_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `zamowienie_ibfk_2` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`id`),
  ADD CONSTRAINT `zamowienie_ibfk_3` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
