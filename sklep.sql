-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Gru 2022, 12:59
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `produkt_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL DEFAULT 0,
  `picture_url` varchar(255) NOT NULL,
  `sales` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`id`, `name`, `subcategory_id`, `description`, `price`, `discount`, `picture_url`, `sales`) VALUES
(1, 'PowerColor Radeon RX 6700 XT Fighter 12GB GDDR6', 8, 'opis', 2299, 0, 'assets/images/KartyGraficzne/1/1.webp', 5),
(2, 'Gigabyte GeForce RTX 3060 EAGLE OC LHR 12GB GDDR6', 8, 'opis', 1949, 0, 'assets/images/KartyGraficzne/2/1.webp', 13),
(3, 'Gigabyte GeForce RTX 3090 Ti GAMING OC 24GB GDDR6X', 8, 'opis', 6499, 6300, 'assets/images/KartyGraficzne/3/1.webp', 28),
(4, 'Gigabyte Radeon RX 6600 EAGLE 8GB GDDR6', 8, 'opis', 1559.99, 1450, 'assets/images/KartyGraficzne/4/1.webp', 5),
(5, 'Acer Aspire 3 i5-1135G7/12GB/512/Win11 IPS Srebrny', 1, 'opis', 2699, 0, 'assets/images/Laptopy/1/1.webp', 25),
(6, 'ASUS TUF Gaming F15 i5-11400H/16GB/512 RTX3050Ti 144Hz', 1, 'opis', 4099, 4000, 'assets/images/Laptopy/2/1.webp', 31),
(7, 'G4M3R HERO i7-12700F/32GB/2TB/RTX3060/W11x', 1, 'opis', 8500, 0, 'assets/images/Laptopy/3/1.webp', 8),
(8, 'Apple iPhone 13 512GB Midnight', 3, 'opis', 6599, 6299, 'assets/images/Smartfony/1/1.webp', 11),
(9, 'Samsung Galaxy S22+ 8/128GB Green\r\n', 3, 'opis', 4549, 4200, 'assets/images/Smartfony/2/1.webp', 13),
(10, 'Xiaomi Mi Watch Lite Black', 4, 'opis', 219, 0, 'img10.jpg', 17),
(11, 'Xiaomi Mi Band 7 Czarny', 4, 'opis', 209, 0, 'img11.jpg', 21),
(12, 'Samsung Galaxy Watch 5 44mm Grey', 4, 'opis', 1349, 0, 'assets/images/Smartwatche/3/1.webp', 54),
(13, 'SPC Gear VIRO Plus USB', 22, 'opis', 218, 0, 'img13.jpg', 21),
(14, 'Razer Barracuda X 2022 Black', 22, 'opis', 449, 0, 'img14.jpg', 12),
(15, 'SteelSeries Rival 3', 21, 'opis', 159, 0, 'assets/images/Słuchawki/5/1.webp', 28),
(16, 'SPC Gear GK630K Tournament Kailh Blue RGB', 20, 'opis', 219, 0, 'img16.jpg', 23),
(17, 'Logitech 2.1 Z333', 19, 'opis', 249, 0, 'img17.jpg', 2),
(18, 'TCL 43P615', 18, 'opis', 1299, 0, 'assets/images/Telewizory/1/1.webp', 43),
(19, 'Xiaomi Mi TV Q1E 55\"', 18, 'opis', 2499, 0, 'assets/images/Telewizory/3/1.webp', 41),
(20, 'Samsung QE55Q77B', 18, 'opis', 3499, 0, 'img20.jpg', 4),
(21, 'Sony HT-S40R', 19, 'opis', 1299, 0, 'img21.jpg', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory_name`) VALUES
(1, 1, 'Laptopy'),
(2, 1, 'Komputery'),
(3, 2, 'Smartfony'),
(4, 2, 'Smartwatche'),
(5, 2, 'Tablety'),
(6, 2, 'Komórkowe'),
(7, 3, 'Procesory'),
(8, 3, 'Karty Graficzne'),
(9, 3, 'Pamięć RAM'),
(10, 3, 'Płyty Główne'),
(11, 3, 'Dyski'),
(12, 3, 'Obudowy'),
(13, 3, 'Chłodzenie'),
(14, 3, 'Zasilacze'),
(15, 4, 'Drukarki'),
(16, 4, 'Monitory'),
(17, 4, 'Mikrofony'),
(18, 5, 'Telewizory'),
(19, 5, 'Audio'),
(20, 6, 'Klawiatury'),
(21, 6, 'Myszki'),
(22, 6, 'Słuchawki')
;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `e-mail` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL,
  `miasto` varchar(32) DEFAULT NULL,
  `kod_pocztowy` varchar(8) DEFAULT NULL,
  `ulica` varchar(64) DEFAULT NULL,
  `nr_domu` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `kwota_zamowienia` float NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
