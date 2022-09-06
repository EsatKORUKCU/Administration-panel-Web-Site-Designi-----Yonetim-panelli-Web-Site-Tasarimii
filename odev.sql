-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 12 Ağu 2022, 18:49:18
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

DROP TABLE IF EXISTS `anasayfa`;
CREATE TABLE IF NOT EXISTS `anasayfa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yazi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`id`, `baslik`, `resim`, `yazi`) VALUES
(1, '<h1> WELCOME TO IMPERIAL STUDIO</h1>', 'assets/img/logo.png', '<h2>We create <span class=\"typed\" data-typed-items=\"beautiful graphics, fonksiyonel websites, working mobile apps\"></span></h2 oluşturuyoruz>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `id` int(11) NOT NULL,
  `baslik` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `resim`, `aciklama`) VALUES
(1, 'ABOUT US', 'assets/img/about-img.jpg', ' <p class=\"about-text\"> <h4>We provide great services and ideass</h4> </p> <p > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p> <p > Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p> <p> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli. </p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetlerimiz`
--

DROP TABLE IF EXISTS `hizmetlerimiz`;
CREATE TABLE IF NOT EXISTS `hizmetlerimiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ikon` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icerik1` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icerik2` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetlerimiz`
--

INSERT INTO `hizmetlerimiz` (`id`, `ikon`, `icerik1`, `icerik2`) VALUES
(1, 'bi bi-briefcase', 'LOREM IPSUM', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident'),
(2, 'bi bi-card-checklist', 'DOLOR SİTEMA', 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata'),
(3, 'bi bi-bar-chart', 'SED UT PERSPİCİATİS', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur'),
(4, 'bi bi-binoculars', 'MAGNİ DOLORES', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'),
(5, 'bi bi-brightness-high', 'NEMO ENİM', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque'),
(6, 'bi bi-calendar4-week', 'EİUSMOD TEMPOR', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi'),
(10, 'bi bi-briefcase', 'deneme2222222', 'deneme333333');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `eposta`, `konu`, `mesaj`) VALUES
(1, 'ali', 'ali@gmail.com', 'web', 'hata kodu'),
(2, 'esat', 'esat@gmail.com', 'weeb', 'mesaj'),
(3, 'veli', 'veli42@gmail.com', 'effdd', 'khfgfgf'),
(4, 'resul', 'resul@gmail.com', 'www', 'rastgele'),
(6, 'veli', 'veli@gmail.com', 'velii', 'velllll'),
(8, 'deneme ', 'deneme@gmail.com', 'güvenlik1', 'güvenlik1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

DROP TABLE IF EXISTS `yonetici`;
CREATE TABLE IF NOT EXISTS `yonetici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(35) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `kullanici`, `sifre`) VALUES
(1, 'esat', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
