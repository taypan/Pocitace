-- phpMyAdmin SQL Dump
-- version 3.3.4deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Neděle 18. července 2010, 19:20
-- Verze MySQL: 5.1.48
-- Verze PHP: 5.3.2-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `Omnique_shop`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `komponenty`
--

CREATE TABLE IF NOT EXISTS `komponenty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `druh` enum('cpu','gpu','mb','ram','hdd','cool','fan','power') COLLATE utf8_czech_ci NOT NULL,
  `jmeno` varchar(500) COLLATE utf8_czech_ci NOT NULL,
  `cena` int(9) NOT NULL,
  `nakupni_cena` int(11) NOT NULL,
  `marze` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=50 ;

--
-- Vypisuji data pro tabulku `komponenty`
--

INSERT INTO `komponenty` (`id`, `druh`, `jmeno`, `cena`, `nakupni_cena`, `marze`) VALUES
(47, 'cpu', 'XXXX', 12345, 0, 0),
(46, 'cpu', 'XXXX', 12345, 0, 0),
(3, 'gpu', 'Asus M4A79XTD EVO 790X', 54, 0, 0),
(4, 'ram', 'Kingston DIMM 4096MB DDR III', 45, 0, 0),
(5, 'hdd', 'Samsung SpinPoint F3 - 1TB', 456, 0, 0),
(6, 'cool', 'CoolerMaster Elite', 786, 0, 0),
(7, 'fan', 'Zalman CU Cooler', 486, 0, 0),
(8, 'gpu', 'PSU Seasonic 800', 4868, 0, 0),
(18, 'gpu', 'ATI HD5770 1GB', 456, 0, 0),
(19, 'mb', 'Asus M4A79XTD EVO 790X', 54, 0, 0),
(20, 'ram', 'Kingston DIMM 4096MB DDR III', 45, 0, 0),
(21, 'hdd', 'Samsung SpinPoint F3 - 1TB', 456, 0, 0),
(22, 'cool', 'CoolerMaster Elite', 786, 0, 0),
(45, 'mb', 'sdfsdf', 520, 500, 20),
(24, 'power', 'PSU Seasonic 80 (levnej)', 486, 0, 0),
(25, 'power', 'AMD Phenom II X4 @ 3 GHz', 666, 0, 0),
(26, 'gpu', 'ATI HD5770 1GB', 456, 0, 0),
(27, 'mb', 'Asus M4A79XTD EVO 790X', 54, 0, 0),
(28, 'ram', 'Kingston DIMM 4096MB DDR III', 45, 0, 0),
(29, 'hdd', 'Samsung SpinPoint F3 - 1TB', 456, 0, 0),
(30, 'cool', 'CoolerMaster Elite', 786, 0, 0),
(31, 'fan', 'Zalman CU Cooler', 486, 0, 0),
(32, 'power', 'PSU Seasonic 80(drahej)', 4866, 0, 0),
(33, 'cpu', 'AMD Phenom II X4 @ 3 GHz', 666, 0, 0),
(34, 'gpu', 'ATI HD5770 1GB', 456, 0, 0),
(35, 'mb', 'Asus M4A79XTD EVO 790X', 54, 0, 0),
(36, 'ram', 'Kingston DIMM 4096MB DDR III', 45, 0, 0),
(37, 'hdd', 'Samsung SpinPoint F3 - 1TB', 456, 0, 0),
(38, 'cpu', 'CoolerMaster Elitee', 786, 0, 0),
(39, 'fan', 'Zalman CU Coolersdfs', 486, 0, 0),
(40, 'gpu', 'XXXXXX', 486, 0, 0),
(41, 'cpu', 'sdf', 421, 0, 0),
(42, 'cpu', 'sdf', 421, 0, 0),
(43, 'cpu', 'sfdsdf', 56, 0, 0),
(44, 'gpu', 'sdf', 354, 0, 0),
(48, 'gpu', 'Nakup', 600, 500, 100),
(49, 'cpu', 'CENA', 700, 600, 100);
