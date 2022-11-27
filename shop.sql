-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lis 2022, 19:08
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Komputery i laptopy'),
(2, 'Smartfony i smartwatche'),
(3, 'Podzespoły komputerowe '),
(4, 'Urządzenia peryferyjne '),
(5, 'TV i Audio'),
(6, 'Akcesoria');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clientadres`
--

CREATE TABLE `clientadres` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `miasto` varchar(32) NOT NULL,
  `kod_pocztowy` varchar(8) NOT NULL,
  `ulica` varchar(64) NOT NULL,
  `nr_domu` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clientdetails`
--

CREATE TABLE `clientdetails` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `clientdetails`
--

INSERT INTO `clientdetails` (`id`, `user_id`, `imie`, `nazwisko`) VALUES
(1, 2, 'Antony', 'Montana');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `typ_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `deliverytype`
--

CREATE TABLE `deliverytype` (
  `id` int(11) NOT NULL,
  `nane` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `deliverytype`
--

INSERT INTO `deliverytype` (`id`, `nane`) VALUES
(1, 'Dostawa kurierem'),
(2, 'Dostawa do paczk');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `paczkomat`
--

CREATE TABLE `paczkomat` (
  `id` int(11) NOT NULL,
  `miasto` varchar(32) NOT NULL,
  `ulica` varchar(64) NOT NULL,
  `numer` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `fileURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pictures`
--

INSERT INTO `pictures` (`id`, `product_id`, `fileURL`) VALUES
(1, 5, 'test.jpg'),
(2, 5, 'test2.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT 'nazwa produktu ',
  `price` float NOT NULL COMMENT 'cena brutto',
  `EAN` varchar(14) NOT NULL COMMENT 'kod kreskowy '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `EAN`) VALUES
(1, 'PowerColor Radeon RX 6700 XT Fighter 12GB GDDR6', 2299, ''),
(2, 'Gigabyte GeForce RTX 3060 EAGLE OC LHR 12GB GDDR6', 1949, ''),
(3, 'Gigabyte GeForce RTX 3090 Ti GAMING OC 24GB GDDR6X', 6499, ''),
(4, 'Gigabyte Radeon RX 6600 EAGLE 8GB GDDR6', 1559.99, ''),
(5, 'Acer Aspire 3 i5-1135G7/12GB/512/Win11 IPS Srebrny', 2699, ''),
(6, 'ASUS TUF Gaming F15 i5-11400H/16GB/512 RTX3050Ti 144Hz', 4099, ''),
(7, 'G4M3R HERO i7-12700F/32GB/2TB/RTX3060/W11x', 8500, ''),
(8, 'Apple iPhone 13 512GB Midnight', 6599, ''),
(9, 'Samsung Galaxy S22+ 8/128GB Green\r\n', 4549, ''),
(10, 'Xiaomi Mi Watch Lite Black', 219, ''),
(11, 'Xiaomi Mi Band 7 Czarny', 209, ''),
(12, 'Samsung Galaxy Watch 5 44mm Grey', 1349, ''),
(13, 'SPC Gear VIRO Plus USB', 218, ''),
(14, 'Razer Barracuda X 2022 Black', 449, ''),
(15, 'SteelSeries Rival 3', 159, ''),
(16, 'SPC Gear GK630K Tournament Kailh Blue RGB', 219, ''),
(17, 'Logitech 2.1 Z333', 249, ''),
(18, 'TCL 43P615', 1299, ''),
(19, 'Xiaomi Mi TV Q1E 55\"', 2499, ''),
(20, 'Samsung QE55Q77B', 3499, ''),
(21, 'Sony HT-S40R', 1299, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `productdescripton`
--

CREATE TABLE `productdescripton` (
  `id` int(11) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `descripton` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `productdescripton`
--

INSERT INTO `productdescripton` (`id`, `product_id`, `descripton`) VALUES
(1, 5, 'Twoja nowa supermoc.\r\nSuperjasny wyświetlacz w wytrzymałej konstrukcji. Łatwy sposób kręcenia wideo z prawdziwie filmową narracją. Turboszybki czip. I wielki skok wydajności baterii, nieoceniony na co dzień.'),
(2, 9, 'Poznaj smartfon Samsung Galaxy S22+ w 100 sekund\r\nObejrzyj materiał wideo i dowiedz się, jakie zalety ma Samsung Galaxy S22+. W jedyne 100 sekund zapoznaj się z produktem i odkryj jego najważniejsze cechy.\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `productincategory`
--

CREATE TABLE `productincategory` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `productsinorders`
--

CREATE TABLE `productsinorders` (
  `id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `e-mail`, `password`) VALUES
(1, 'admin@sklep.pl', 'zaq12wsx'),
(2, 'klient1@gmail.com', 'xsw21qaz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id` int(11) NOT NULL,
  `client_id` int(11) UNSIGNED NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `clientadres`
--
ALTER TABLE `clientadres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indeksy dla tabeli `clientdetails`
--
ALTER TABLE `clientdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typ` (`typ_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indeksy dla tabeli `deliverytype`
--
ALTER TABLE `deliverytype`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `paczkomat`
--
ALTER TABLE `paczkomat`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`) USING BTREE;

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `productdescripton`
--
ALTER TABLE `productdescripton`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id_2` (`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `productincategory`
--
ALTER TABLE `productincategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeksy dla tabeli `productsinorders`
--
ALTER TABLE `productsinorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

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
  ADD KEY `delivery_id` (`delivery_id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `clientadres`
--
ALTER TABLE `clientadres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `clientdetails`
--
ALTER TABLE `clientdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `deliverytype`
--
ALTER TABLE `deliverytype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `productdescripton`
--
ALTER TABLE `productdescripton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `productincategory`
--
ALTER TABLE `productincategory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `productsinorders`
--
ALTER TABLE `productsinorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Ograniczenia dla tabeli `clientadres`
--
ALTER TABLE `clientadres`
  ADD CONSTRAINT `clientadres_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clientdetails` (`id`);

--
-- Ograniczenia dla tabeli `clientdetails`
--
ALTER TABLE `clientdetails`
  ADD CONSTRAINT `clientdetails_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `clientadres` (`id`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`destination_id`) REFERENCES `paczkomat` (`id`),
  ADD CONSTRAINT `delivery_type` FOREIGN KEY (`typ_id`) REFERENCES `deliverytype` (`id`);

--
-- Ograniczenia dla tabeli `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `productdescripton`
--
ALTER TABLE `productdescripton`
  ADD CONSTRAINT `productdescripton_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Ograniczenia dla tabeli `productincategory`
--
ALTER TABLE `productincategory`
  ADD CONSTRAINT `productincategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productincategory_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `productsinorders`
--
ALTER TABLE `productsinorders`
  ADD CONSTRAINT `orderToProduct` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `productToOrder` FOREIGN KEY (`order_id`) REFERENCES `zamowienie` (`id`);

--
-- Ograniczenia dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `zamowienie_ibfk_1` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
