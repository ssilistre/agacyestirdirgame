-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 22 Mar 2019, 15:42:00
-- Sunucu sürümü: 10.2.19-MariaDB
-- PHP Sürümü: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `silistre_agac`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forests`
--

CREATE TABLE `forests` (
  `id` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `visits` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Kullaniciadi',
  `Password` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Şifre',
  `Yetki` int(11) NOT NULL DEFAULT 0 COMMENT 'Yetki Türü',
  `zaman` date NOT NULL DEFAULT current_timestamp(),
  `agacsayisi` int(255) NOT NULL DEFAULT 1,
  `ustbilgi` varchar(999) CHARACTER SET utf32 COLLATE utf32_turkish_ci DEFAULT 'Bu alanı üye girişi yapıp düzeltebilirsiniz.',
  `altbilgi` varchar(999) CHARACTER SET utf32 COLLATE utf32_turkish_ci DEFAULT 'Bu alanı üye girişi yapıp düzeltebilirsiniz.'
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `forests`
--

INSERT INTO `forests` (`id`, `name`, `email`, `visits`, `username`, `Password`, `Yetki`, `zaman`, `agacsayisi`, `ustbilgi`, `altbilgi`) VALUES
(1, 'Örnek Orman Bölgesi', 'ornek@mail.com', 10000, 'ornek', 'ornek', 1, '0000-00-00', 5, '<p><strong><img src=\"https://image.flaticon.com/icons/svg/346/346246.svg\" style=\"height:100px; width:100px\" />&nbsp; </strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bu alan &ouml;rnek alanıdır kullanıcı adı ornek şifre ornek girip deneyebilirsiniz.</strong></p>\r\n', '<p><strong><img src=\"https://image.flaticon.com/icons/svg/346/346246.svg\" style=\"height:100px; width:100px\" />&nbsp; </strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bu alan &ouml;rnek alanıdır kullanıcı adı ornek şifre ornek girip deneyebilirsiniz.</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `forest_id` int(11) NOT NULL,
  `ipadress` varchar(25) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `forests`
--
ALTER TABLE `forests`
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `visits`
--
ALTER TABLE `visits`
  ADD UNIQUE KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `forests`
--
ALTER TABLE `forests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
