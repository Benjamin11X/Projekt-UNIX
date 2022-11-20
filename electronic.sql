-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lis 2022, 13:38
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
-- Baza danych: `electronic`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) DEFAULT 'Gujarat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `branch`
--

INSERT INTO `branch` (`branch_id`, `address`, `city`, `state`) VALUES
(1, 'Shop-2, Raj Victoria, Galaxy Circle, Pal', 'Surat', 'Gujarat'),
(2, 'Western Arena, Canal Road, Vesu', 'Surat', 'Gujarat'),
(3, '1st Floor, A-one Enclave, Judges Buglow,Vastrapur', 'Ahmedabad', 'Gujarat'),
(4, 'B-2, Prime Arcade, Gaikwad Road,Gotri', 'Vadodara', 'Gujarat'),
(5, 'Beside AMC Garden, Station Road,Maninagar', 'Ahmedabad', 'Gujarat');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `customers`
--

INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`, `address`, `city`, `state`, `contact`) VALUES
(1, 'Bhavsh', 'Gajera', '4,Shivkrupa Society, HonetyPark Road,Adajan', 'Surat', 'Gujarat', '9870625345'),
(2, 'Magan', 'Patel', 'C-502,Mehini Residency, GauravPath,Palanpor', 'Surat', 'Gujarat', '9847625345'),
(3, 'Gautam', 'Parekh', 'A-15,krushnaKunj Society, Maharana Pratap Rd,Ghatlodia', 'Ahmedabad', 'Gujarat', '9870625985'),
(4, 'Jagruti', 'Ajmera', 'A-204,Aditya Highest, VIP Rd,Piplod', 'Surat', 'Gujarat', '6390625345'),
(5, 'Animesh', 'Kachdiya', '4, Kalrav Bunglows, S.G.Highway,Charodi', 'Ahmedabad', 'Gujarat', '9703648045'),
(6, 'Tirth', 'Desai', '9, Nityanand Society, Sardar Road,Dhamdod', 'Bardoli', 'Gujarat', '9879797906'),
(7, 'Shagun', 'Chaudhary', '14, Vinayak Society, Kha Rd,Sargasan', 'Ghandhinagar', 'Gujarat', '9123945345'),
(8, 'Shiv', 'Parmar', 'B-403, Sukham Apartments, Sama Rd,Karelibag', 'Vadodara', 'Gujarat', '9870612121'),
(9, 'Chandresh', 'Panchal', 'A-601,Sidharth Complex, City Light Road,Athwa', 'Surat', 'Gujarat’', '6355425345'),
(10, 'Nikhil', 'Khatri', '4,Green Park, Shahibaug Road,Shahibaug', 'Ahmedabad', 'Gujarat', '98706295488'),
(11, 'Bhavna', 'Brambhatt', 'D-701,Kalyan Flats, BPC Road,Akota', 'Vadodara', 'Gujarat', '9871993949'),
(12, 'Mitesh', 'Cyclewala', '21,Amrapali Society, New Rander Rd,Rander', 'Surat', 'Gujarat', '9723645437'),
(13, 'Sunil', 'Choksi', '4,Shivalik Square, Sayaji Path,Alkapuri', 'Vadodara', 'Gujarat', '9978625145'),
(14, 'Sima', 'Bhatt', '4,Samruidhi Residency, C.G. Road,Navarangpura', 'Ahmedabad', 'Gujarat', '6396725345');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `designetion` varchar(15) NOT NULL,
  `salary` int(11) NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `reports_to` int(11) DEFAULT NULL,
  `branch_id` int(11) NOT NULL,
  `emp_joining_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `employee`
--

INSERT INTO `employee` (`emp_id`, `first_name`, `last_name`, `designetion`, `salary`, `gender`, `reports_to`, `branch_id`, `emp_joining_date`) VALUES
(101, 'Jignesh', 'Pandya', 'Operations Head', 200000, 'M', NULL, 1, '2005'),
(102, 'Gaurav', 'Dave', 'CSR', 150000, 'M', 101, 1, '2005'),
(103, 'Pavan', 'Patel', 'Store Manager', 120000, 'M', 101, 1, '2005'),
(104, 'Ravi', 'Trivedi', 'Store Manager', 120000, 'M', 101, 2, '2005'),
(105, 'Devansh', 'Shah', 'Sale Person', 46500, 'M', 103, 1, '1988'),
(106, 'Nisha', 'Raval', 'Sales Person', 42500, 'F', 103, 1, '2005'),
(107, 'Harsh', 'Vyas', 'Sales Person', 47500, 'M', 104, 2, '2005'),
(108, 'Nikita', 'Yagnik', 'Sales Person', 42000, 'F', 104, 2, '1997'),
(109, 'Ishan', 'Panchal', 'Store Manager', 120000, 'M', 101, 3, '2005'),
(110, 'Manish', 'Patel', 'Sales Person', 44000, 'M', 109, 3, '1997'),
(111, 'Smita', 'Rathod', 'Sales Person', 41000, 'F', 109, 3, '1996'),
(112, 'Abhi', 'Pathak', 'Store Manager', 110000, 'M', 101, 4, '2012'),
(113, 'Ravi', 'Sheth', 'Sales Person', 45000, 'M', 112, 4, '2002'),
(114, 'Deepika', 'Pandya', 'Sales Person', 43500, 'F', 112, 4, '1986'),
(115, 'Lalit', 'Naik', 'Store Manager', 105000, 'M', 101, 5, '2012'),
(116, 'Vijay', 'Rajput', 'Sales Person', 43000, 'M', 115, 5, '2009'),
(117, 'Khushi', 'Shukla', 'Sales Person', 40000, 'F', 115, 5, '2009');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `status`, `branch_id`) VALUES
('9801', 1, '1989', 2, 1),
('9802', 2, '1989', 2, 2),
('9803', 3, '1989', 2, 5),
('9804', 4, '1988', 2, 2),
('9805', 5, '1988', 2, 3),
('9806', 6, '1988', 1, 1),
('9807', 7, '1987', 1, 5),
('9808', 8, '1987', 2, 4),
('9809', 9, '1987', 2, 2),
('9810', 10, '1987', 2, 3),
('9811', 11, '1986', 2, 4),
('9812', 12, '1986', 1, 1),
('9813', 13, '1986', 1, 4),
('9814', 14, '1986', 1, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(6,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `order_items`
--

INSERT INTO `order_items` (`order_id`, `product_id`, `quantity`, `unit_price`) VALUES
(9801, 12, 1, '43999.9'),
(9802, 3, 1, '14499.9'),
(9802, 10, 1, '30999.9'),
(9803, 2, 1, '22499.9'),
(9804, 9, 1, '24999.9'),
(9805, 1, 2, '31999.9'),
(9806, 6, 1, '23490.0'),
(9807, 13, 1, '33990.0'),
(9808, 8, 1, '29999.0'),
(9809, 4, 1, '24999.9'),
(9810, 14, 1, '40990.0'),
(9811, 5, 1, '30810.0'),
(9812, 11, 1, '27499.9'),
(9813, 15, 1, '30499.9'),
(9814, 7, 1, '24999.9');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_status`
--

CREATE TABLE `order_status` (
  `order_status_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `order_status`
--

INSERT INTO `order_status` (`order_status_id`, `name`) VALUES
(1, 'Processed'),
(2, 'Delivered');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `method` int(11) DEFAULT 1,
  `paid_total` decimal(6,1) NOT NULL DEFAULT 0.0,
  `payment_total` decimal(6,1) DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `customer_id`, `method`, `paid_total`, `payment_total`) VALUES
(501, '9801', 1, 2, '43999.9', '43999.9'),
(502, '9802', 2, 1, '23500.0', '45499.8'),
(503, '9803', 3, 1, '22499.9', '22499.9'),
(504, '9804', 4, 4, '24999.9', '24999.9'),
(505, '9805', 5, 3, '31999.9', '31999.9'),
(506, '9806', 6, 5, '10000.0', '23490.0'),
(507, '9807', 7, 1, '24000.0', '33990.0'),
(508, '9808', 8, 2, '29999.0', '29999.0'),
(509, '9809', 9, 1, '24999.9', '24999.9'),
(510, '9810', 10, 6, '40990.0', '40990.0'),
(511, '9811', 11, 4, '30810.0', '30810.0'),
(512, '9812', 12, 2, '27499.9', '27499.9'),
(513, '9813', 13, 4, '15000.0', '30499.9'),
(514, '9814', 14, 3, '10000.0', '24999.9');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payment_methods`
--

CREATE TABLE `payment_methods` (
  `payment_method_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `payment_methods`
--

INSERT INTO `payment_methods` (`payment_method_id`, `name`) VALUES
(1, 'Cash'),
(2, 'Debit Card'),
(3, 'Credit Card'),
(4, 'Mobile Wallets'),
(5, 'Cheque'),
(6, 'NetBanking');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `quantity_in_stock` int(11) NOT NULL,
  `unit_price` decimal(6,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`product_id`, `name`, `quantity_in_stock`, `unit_price`) VALUES
(1, 'MI TV 4X50” 4k Ultra Android', 20, '31999.9'),
(2, 'MI TV 4A PRO', 9, '22499.9'),
(3, 'Samsung 32” Curved LED', 18, '14499.9'),
(4, 'OnePlus 43” HD Smart TV', 11, '24999.9'),
(5, 'LG 43”4k Ultra Smart TV', 9, '40990.0'),
(6, 'Whirlpool 265 3star Double Door Refrigerator', 14, '23490.0'),
(7, 'LG 260 L 3star invertor Refrigerator', 8, '24999.9'),
(8, 'Harrier 278 L 3star Frost-Free Refrigerator', 6, '29999.0'),
(9, 'Samsung 275 L2 star Direct Cool Refrigerator', 7, '23499.9'),
(10, 'Panasonic 284 NBst01 Refrigerator', 6, '30999.9'),
(11, 'Whirlpool 1.5Ton 3star Invertor Split AC', 9, '27499.9'),
(12, 'Blue Star 1.5 Ton 5star split AC', 10, '43999.9'),
(13, 'LG 1Ton 5star split AC', 7, '33990.0'),
(14, 'Voltas 1,5Ton 3star split AC Copper', 6, '30810.0'),
(15, 'Llyod 1.5Ton 3star LS18MB split AC ', 12, '30499.9');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indeksy dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeksy dla tabeli `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `reports_to` (`reports_to`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `status` (`status`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indeksy dla tabeli `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`order_status_id`);

--
-- Indeksy dla tabeli `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `method` (`method`);

--
-- Indeksy dla tabeli `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9815;

--
-- AUTO_INCREMENT dla tabeli `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`reports_to`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status`) REFERENCES `order_status` (`order_status_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Ograniczenia dla tabeli `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Ograniczenia dla tabeli `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`method`) REFERENCES `payment_methods` (`payment_method_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
