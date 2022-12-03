SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `user` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `e-mail` varchar(255),
    `login` varchar(255),
    `password` varchar(255),
    `admin` int NOT NULL DEFAULT 0,
    `imie` varchar(255) ,
    `nazwisko` varchar(255) ,
    `miasto` varchar(32) ,
    `kod_pocztowy` varchar(8),
    `ulica` varchar(64),
    `nr_domu` varchar(16)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `user` (`e-mail`, `login`, `password`, `admin`, `imie`, `nazwisko`) VALUES
('admin@sklep.pl', 'admin', 'zaq12wsx', 1, 'Antony', 'Montana'),
('klient1@gmail.com', 'klient1', 'xsw21qaz', 0, 'Jakub', 'Marczak');


CREATE TABLE `zamowienie` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `client_id` int(11) NOT NULL,
    `delivery_id` int(11) NOT NULL,
    `data` date NOT NULL,
    `kwota_zamowienia` float(11) NOT NULL,
    `payment_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE zamowienie
ADD CONSTRAINT FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);


CREATE TABLE `delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `price` float(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `delivery` (`name`, `price`) VALUES
('kurier DPD', 12),
('Paczkomat Inpost', 9);

ALTER TABLE zamowienie
ADD CONSTRAINT FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`id`);

CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE cart
ADD CONSTRAINT FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE zamowienie
ADD CONSTRAINT FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`);

CREATE TABLE `product` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `subcategory_id` int(11) NOT NULL,
    `description` varchar(255),
    `price` float(11) NOT NULL,
    `discount` float NOT NULL DEFAULT 0,
    `picture_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `product` (`id`, `name`,`subcategory_id`, `description`, `price`, `picture_url`) VALUES
(1, 'PowerColor Radeon RX 6700 XT Fighter 12GB GDDR6', 1, 'opis', 2299, 'img1.jpg'),
(2, 'Gigabyte GeForce RTX 3060 EAGLE OC LHR 12GB GDDR6', 1, 'opis', 1949, 'img2.jpg'),
(3, 'Gigabyte GeForce RTX 3090 Ti GAMING OC 24GB GDDR6X', 1, 'opis',6499, 'img3.jpg'),
(4, 'Gigabyte Radeon RX 6600 EAGLE 8GB GDDR6', 1, 'opis', 1559.99, 'img4.jpg'),
(5, 'Acer Aspire 3 i5-1135G7/12GB/512/Win11 IPS Srebrny', 2, 'opis',2699, 'img5.jpg'),
(6, 'ASUS TUF Gaming F15 i5-11400H/16GB/512 RTX3050Ti 144Hz', 2, 'opis',4099, 'img6.jpg'),
(7, 'G4M3R HERO i7-12700F/32GB/2TB/RTX3060/W11x', 3, 'opis', 8500, 'img7.jpg'),
(8, 'Apple iPhone 13 512GB Midnight', 4, 'opis', 6599, 'img8.jpg'),
(9, 'Samsung Galaxy S22+ 8/128GB Green\r\n', 4, 'opis',4549, 'img9.jpg'),
(10, 'Xiaomi Mi Watch Lite Black', 5, 'opis', 219, 'img10.jpg'),
(11, 'Xiaomi Mi Band 7 Czarny', 5, 'opis', 209, 'img11.jpg'),
(12, 'Samsung Galaxy Watch 5 44mm Grey', 5, 'opis', 1349, 'img12.jpg'),
(13, 'SPC Gear VIRO Plus USB', 6, 'opis', 218, 'img13.jpg'),
(14, 'Razer Barracuda X 2022 Black', 6, 'opis', 449, 'img14.jpg'),
(15, 'SteelSeries Rival 3', 7, 'opis', 159, 'img15.jpg'),
(16, 'SPC Gear GK630K Tournament Kailh Blue RGB', 8, 'opis', 219, 'img16.jpg'),
(17, 'Logitech 2.1 Z333', 9, 'opis',249, 'img17.jpg'),
(18, 'TCL 43P615',10, 'opis', 1299, 'img18.jpg'),
(19, 'Xiaomi Mi TV Q1E 55\"',10, 'opis', 2499, 'img19.jpg'),
(20, 'Samsung QE55Q77B',10, 'opis', 3499, 'img20.jpg'),
(21, 'Sony HT-S40R',9, 'opis', 1299, 'img21.jpg');

UPDATE product set discount=6299 where id=8;


CREATE TABLE `order_details` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id` int(11) NOT NULL,
    `produkt_id` int(11) NOT NULL,
    `quantity` int(11) NOT NULL,
    `price` float(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE order_details
ADD CONSTRAINT FOREIGN KEY (`produkt_id`) REFERENCES `product` (`id`);

ALTER TABLE order_details
ADD CONSTRAINT FOREIGN KEY (`order_id`) REFERENCES `zamowienie` (`id`);


CREATE TABLE `category` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `category` (`category_name`) VALUES
('Komputery i laptopy'),
('Smartfony i smartwatche'),
('Podzespoły komputerowe '),
('Urządzenia peryferyjne '),
('TV i Audio'),
('Akcesoria');




CREATE TABLE `subcategory` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_id` int(11) NOT NULL,
    `subcategory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `subcategory` (`category_id`, `subcategory_name`) VALUES
(3,'Karty graficzne'),
(1,'Laptopy'),
(1,'Komputery'),
(2, 'Telefony'),
(2, 'Smartwatche'),
(4, 'Słuchawki'),
(4, 'Myszki'),
(4, 'Klawiatury'),
(5, 'Głośniki'),
(5, 'Telewizory')
;


ALTER TABLE subcategory
ADD CONSTRAINT FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

ALTER TABLE product
ADD CONSTRAINT FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`);








