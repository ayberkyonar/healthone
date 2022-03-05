-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 mrt 2022 om 22:26
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`, `picture`) VALUES
(1, 'Crosstrainer', 'categories/crosstrainer.jpg'),
(2, 'Hometrainer', 'categories/hometrainer.jpg'),
(3, 'Loopband', 'categories/loopband.jpg'),
(4, 'Roeitrainer', 'categories/roeitrainer.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opening_hours`
--

CREATE TABLE `opening_hours` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `opening_hours`
--

INSERT INTO `opening_hours` (`id`, `day`, `time`) VALUES
(5, 'Maandag', '07:00 - 20:00'),
(6, 'Dinsdag', '08:00 - 20:00'),
(7, 'Woensdag', '07:00 - 20:00'),
(8, 'Donderdag', '08:00 - 20:00'),
(9, 'Vrijdag', '07:00 - 20:30'),
(10, 'Zaterdag', '08:00 - 17:00'),
(11, 'Zondag', '08:00 - 13:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `category_id`) VALUES
(1, 'Crosstrainer 1', 'categories/crosstrainer/cr1.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(2, 'Crosstrainer 2', 'categories/crosstrainer/cr2.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(3, 'Crosstrainer 3', 'categories/crosstrainer/cr3.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(4, 'Crosstrainer 4', 'categories/crosstrainer/cr4.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(5, 'Crosstrainer 5', 'categories/crosstrainer/cr5.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(6, 'Crosstrainer 6', 'categories/crosstrainer/cr6.jpg', 'Train op een van de meest effectieve manieren met deze crosstrainer. Met deze crosstrainer train je je gehele lichaam, van je benen en armen tot je core. En dat op een fijne en soepele manier. Met 32 weerstandsniveaus en 18 verschillende trainingsprogramma\'s zet je iedere keer net dat stapje extra.', 1),
(13, 'Hometrainer 1', 'categories/hometrainer/ht1.jpg', 'De nieuwe hometrainer is een uitstekende spinningfiets voor de beginnende thuissporter. Deze spinningfiets ziet er strak en stijlvol uit dankzij de zwarte poedercoating van het frame. Dankzij het eigen gewicht van 28 kg is deze spinningfiets te belasten tot een maximaal gebruikersgewicht van 100 kg.', 2),
(14, 'Hometrainer 2', 'categories/hometrainer/ht2.jpg', 'De nieuwe hometrainer is een uitstekende spinningfiets voor de beginnende thuissporter. Deze spinningfiets ziet er strak en stijlvol uit dankzij de zwarte poedercoating van het frame. Dankzij het eigen gewicht van 28 kg is deze spinningfiets te belasten tot een maximaal gebruikersgewicht van 100 kg.', 2),
(15, 'Hometrainer 3', 'categories/hometrainer/ht3.jpg', 'De nieuwe hometrainer is een uitstekende spinningfiets voor de beginnende thuissporter. Deze spinningfiets ziet er strak en stijlvol uit dankzij de zwarte poedercoating van het frame. Dankzij het eigen gewicht van 28 kg is deze spinningfiets te belasten tot een maximaal gebruikersgewicht van 100 kg.', 2),
(16, 'Hometrainer 4', 'categories/hometrainer/ht4.jpg', 'De nieuwe hometrainer is een uitstekende spinningfiets voor de beginnende thuissporter. Deze spinningfiets ziet er strak en stijlvol uit dankzij de zwarte poedercoating van het frame. Dankzij het eigen gewicht van 28 kg is deze spinningfiets te belasten tot een maximaal gebruikersgewicht van 100 kg.', 2),
(17, 'Hometrainer 5', 'categories/hometrainer/ht5.jpg', 'De nieuwe hometrainer is een uitstekende spinningfiets voor de beginnende thuissporter. Deze spinningfiets ziet er strak en stijlvol uit dankzij de zwarte poedercoating van het frame. Dankzij het eigen gewicht van 28 kg is deze spinningfiets te belasten tot een maximaal gebruikersgewicht van 100 kg.', 2),
(18, 'Hometrainer 6', 'categories/hometrainer/ht6.jpg', 'De nieuwe hometrainer is een uitstekende spinningfiets voor de beginnende thuissporter. Deze spinningfiets ziet er strak en stijlvol uit dankzij de zwarte poedercoating van het frame. Dankzij het eigen gewicht van 28 kg is deze spinningfiets te belasten tot een maximaal gebruikersgewicht van 100 kg.', 2),
(19, 'Loopband 1', 'categories/loopband/lb1.jpg', 'Deze loopband is dankzij het brede loopoppervlak, de sterke motor en de vele programma\'s een uitstekende loopband die geschikt is voor een zeer gevarieerde en intensieve thuistraining. Daarnaast heeft deze loopband een loopoppervlak van 141 centimeter lang en 48 centimeter breed. ', 3),
(20, 'Loopband 2', 'categories/loopband/lb2.png', 'Deze loopband is dankzij het brede loopoppervlak, de sterke motor en de vele programma\'s een uitstekende loopband die geschikt is voor een zeer gevarieerde en intensieve thuistraining. Daarnaast heeft deze loopband een loopoppervlak van 141 centimeter lang en 48 centimeter breed. ', 3),
(21, 'Loopband 3', 'categories/loopband/lb3.jpg', 'Deze loopband is dankzij het brede loopoppervlak, de sterke motor en de vele programma\'s een uitstekende loopband die geschikt is voor een zeer gevarieerde en intensieve thuistraining. Daarnaast heeft deze loopband een loopoppervlak van 141 centimeter lang en 48 centimeter breed. ', 3),
(22, 'Loopband 4', 'categories/loopband/lb4.jpg', 'Deze loopband is dankzij het brede loopoppervlak, de sterke motor en de vele programma\'s een uitstekende loopband die geschikt is voor een zeer gevarieerde en intensieve thuistraining. Daarnaast heeft deze loopband een loopoppervlak van 141 centimeter lang en 48 centimeter breed. ', 3),
(23, 'Loopband 5', 'categories/loopband/lb5.jpg', 'Deze loopband is dankzij het brede loopoppervlak, de sterke motor en de vele programma\'s een uitstekende loopband die geschikt is voor een zeer gevarieerde en intensieve thuistraining. Daarnaast heeft deze loopband een loopoppervlak van 141 centimeter lang en 48 centimeter breed. ', 3),
(24, 'Loopband 6', 'categories/loopband/lb6.png', 'Deze loopband is dankzij het brede loopoppervlak, de sterke motor en de vele programma\'s een uitstekende loopband die geschikt is voor een zeer gevarieerde en intensieve thuistraining. Daarnaast heeft deze loopband een loopoppervlak van 141 centimeter lang en 48 centimeter breed. ', 3),
(25, 'Roeitrainer 1', 'categories/roeitrainer/rt1.jpg', 'Deze roeitrainer van  is voorzien van een stijlvol design en sterk frame dat voldoende uitdaging biedt voor het gehele gezin. Door de V-belt aandrijving is de Row 2 tijdens gebruik fluisterstil en na training kan hij eenvoudig worden opgeklapt en worden weggerold. De fitnessapparaten van Focus Fitnes staan bekend om de goede prijs/kwaliteit verhoudingen en deze Row 2 is hier een perfect voorbeeld van. Kortom, deze roeitrainer is een perfect apparaat voor de thuissporter!\r\n\r\n', 4),
(26, 'Roeitrainer 2', 'categories/roeitrainer/rt2.jpg', 'Deze roeitrainer van  is voorzien van een stijlvol design en sterk frame dat voldoende uitdaging biedt voor het gehele gezin. Door de V-belt aandrijving is de Row 2 tijdens gebruik fluisterstil en na training kan hij eenvoudig worden opgeklapt en worden weggerold. De fitnessapparaten van Focus Fitnes staan bekend om de goede prijs/kwaliteit verhoudingen en deze Row 2 is hier een perfect voorbeeld van. Kortom, deze roeitrainer is een perfect apparaat voor de thuissporter!\r\n\r\n', 4),
(27, 'Roeitrainer 3', 'categories/roeitrainer/rt3.jpg', 'Deze roeitrainer van  is voorzien van een stijlvol design en sterk frame dat voldoende uitdaging biedt voor het gehele gezin. Door de V-belt aandrijving is de Row 2 tijdens gebruik fluisterstil en na training kan hij eenvoudig worden opgeklapt en worden weggerold. De fitnessapparaten van Focus Fitnes staan bekend om de goede prijs/kwaliteit verhoudingen en deze Row 2 is hier een perfect voorbeeld van. Kortom, deze roeitrainer is een perfect apparaat voor de thuissporter!\r\n\r\n', 4),
(28, 'Roeitrainer 4', 'categories/roeitrainer/rt4.jpg', 'Deze roeitrainer van  is voorzien van een stijlvol design en sterk frame dat voldoende uitdaging biedt voor het gehele gezin. Door de V-belt aandrijving is de Row 2 tijdens gebruik fluisterstil en na training kan hij eenvoudig worden opgeklapt en worden weggerold. De fitnessapparaten van Focus Fitnes staan bekend om de goede prijs/kwaliteit verhoudingen en deze Row 2 is hier een perfect voorbeeld van. Kortom, deze roeitrainer is een perfect apparaat voor de thuissporter!\r\n\r\n', 4),
(29, 'Roeitrainer 5', 'categories/roeitrainer/rt5.jpg', 'Deze roeitrainer van  is voorzien van een stijlvol design en sterk frame dat voldoende uitdaging biedt voor het gehele gezin. Door de V-belt aandrijving is de Row 2 tijdens gebruik fluisterstil en na training kan hij eenvoudig worden opgeklapt en worden weggerold. De fitnessapparaten van Focus Fitnes staan bekend om de goede prijs/kwaliteit verhoudingen en deze Row 2 is hier een perfect voorbeeld van. Kortom, deze roeitrainer is een perfect apparaat voor de thuissporter!\r\n\r\n', 4),
(30, 'Roeitrainer 6', 'categories/roeitrainer/rt6.jpg', 'Deze roeitrainer van  is voorzien van een stijlvol design en sterk frame dat voldoende uitdaging biedt voor het gehele gezin. Door de V-belt aandrijving is de Row 2 tijdens gebruik fluisterstil en na training kan hij eenvoudig worden opgeklapt en worden weggerold. De fitnessapparaten van Focus Fitnes staan bekend om de goede prijs/kwaliteit verhoudingen en deze Row 2 is hier een perfect voorbeeld van. Kortom, deze roeitrainer is een perfect apparaat voor de thuissporter!\r\n\r\n', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `stars` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `user_id`, `name`, `date`, `description`, `stars`, `product_id`) VALUES
(22, 1, 'member member', '2022-03-05', 'ew', 1, 1),
(23, 1, 'member member', '2022-03-05', 'yo', 1, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` enum('member','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(1, 'test@hotmail.com', 'test', 'test', 'test', 'admin'),
(2, 'member@hotmail.com', '1', 'member', 'member', 'member');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexen voor tabel `opening_hours`
--
ALTER TABLE `opening_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `stars` (`stars`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `opening_hours`
--
ALTER TABLE `opening_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
