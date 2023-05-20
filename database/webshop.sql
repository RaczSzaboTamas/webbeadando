-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 13. 12:32
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- A tábla adatainak kiíratása `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `discount`, `product_image`) VALUES
(31, 'Toyota Prius - 1,400 kg, 1.8L 4-cylinder hybrid engine, 2022, Limuzin', 5000, 200, 'uploads/toyotaprius.png'),
(32, '2.	BMW X5 - 2,360 kg, 3.0L 6-cylinder turbocharged engine, 2021, SUV', 40000, 4000, 'uploads/BMWx5.png'),
(33, 'Honda Civic - 1,247 kg, 1.5L 4-cylinder turbocharged engine, 2022, Limuzin', 30000, 1000, 'uploads/HondaCivic.png'),
(34, 'Audi A4 - 1,500 kg, 2.0L 4-cylinder turbocharged engine, 2021, Limuzin', 15000, 1500, 'uploads/Audia4.png'),
(35, 'Ford F-150 - 1,850 kg, 5.0L V8 engine, 2022, Pickup', 20000, 250, 'uploads/FordF150.png'),
(36, 'Mercedes-Benz C-Class - 1,600 kg, 2.0L 4-cylinder turbocharged engine, 2022, Limuzin', 35000, 1000, 'uploads/MercedesBenzCclass.png'),
(37, 'Jeep Wrangler - 1,800 kg, 3.6L V6 engine, 2021, SUV', 35000, 0, 'uploads/jeepWrangler.png'),
(38, 'Volkswagen Golf - 1,300 kg, 1.4L 4-cylinder turbocharged engine, 2022, hatchback', 18000, 3000, 'uploads/VolksWagenGolf.png'),
(39, 'Tesla Model S - 2,241 kg, Electric motor, 2022, limuzin', 80000, 8000, 'uploads/teslaModelS.png'),
(40, 'Chevrolet Corvette - 1,530 kg, 6.2L V8 engine, 2022, Roadster', 120000, 12000, 'uploads/ChevroletCorvette.png'),
(41, 'Porsche 911 - 1,505 kg, 3.0L 6-cylinder turbocharged engine, 2022, coupe', 70000, 6000, 'uploads/Porsche911.png'),
(42, 'Subaru Outback - 1,655 kg, 2.5L 4-cylinder engine, 2022, SUV', 12000, 2000, 'uploads/SubaruOutback.png'),
(43, 'Dodge Charger - 1,870 kg, 3.6L V6 engine, 2022, limuzin', 55000, 6000, 'uploads/DodgeCharger.png'),
(44, 'Kia Sportage - 1,535 kg, 2.4L 4-cylinder engine, 2022, SUV', 18000, 0, 'uploads/KiaSportage.png'),
(45, 'Hyundai Tucson - 1,555 kg, 2.5L 4-cylinder engine, 2022, SUV', 22000, 1800, 'uploads/HyundaiTuson.png'),
(46, 'BMW 3 Series - 1,580 kg, 2.0L 4-cylinder turbocharged engine, 2022, limuzin', 100000, 12000, 'uploads/Bmw3series.png'),
(47, 'Mazda MX-5 Miata - 1,040 kg, 2.0L 4-cylinder engine, 2022, coupe', 55000, 4000, 'uploads/MazdaMx5.png'),
(48, 'Ford Mustang - 1,659 kg, 2.3L 4-cylinder turbocharged engine, 2022, coupe', 60000, 8000, 'uploads/FordMustang.png');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `nickname`, `password`, `phonenumber`) VALUES
(1, 'Attila', 'Főző', 'attilafozo@hotmail.com', 'Bika', '12345', '+36501263727');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- A tábla indexei `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
