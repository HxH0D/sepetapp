-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Kas 2022, 10:33:09
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sepetapp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basket_products`
--

CREATE TABLE `basket_products` (
  `id` int(11) NOT NULL,
  `item_no` int(11) NOT NULL,
  `product_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `product_img` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `seller_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `product_piece` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `seller_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `item_no` int(11) NOT NULL,
  `product_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `product_img` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `seller_name`, `item_no`, `product_name`, `product_img`, `product_price`) VALUES
(12, 'Hp', 54848262, 'Hp 13 inç 8 gb 256 ssd i5-2343m', 'laptop1.png', 9600),
(13, 'Admin', 2147483647, 'redmi 11 pro 128', 'telefon.webp', 7000);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `basket_products`
--
ALTER TABLE `basket_products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `basket_products`
--
ALTER TABLE `basket_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
