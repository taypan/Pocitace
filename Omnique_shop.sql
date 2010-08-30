-- phpMyAdmin SQL Dump
-- version 3.3.4deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Sobota 17. července 2010, 16:39
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
-- Struktura tabulky `kombinace`
--

CREATE TABLE IF NOT EXISTS `kombinace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sestava` int(11) NOT NULL,
  `id_komponenta` int(11) NOT NULL,
  `vychozi` enum('ano','ne') COLLATE utf8_czech_ci NOT NULL,
  `zmenitelna` enum('ano','ne') COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=52 ;

--
-- Vypisuji data pro tabulku `kombinace`
--

INSERT INTO `kombinace` (`id`, `id_sestava`, `id_komponenta`, `vychozi`, `zmenitelna`) VALUES
(0, 1, 0, 'ano', 'ano'),
(2, 1, 9, 'ne', 'ne'),
(3, 1, 10, 'ano', 'ano'),
(4, 1, 8, 'ano', 'ano'),
(5, 1, 11, 'ano', 'ano'),
(6, 2, 3, 'ano', 'ano'),
(7, 2, 3, 'ano', 'ano'),
(8, 2, 5, 'ano', 'ano'),
(9, 2, 8, 'ano', 'ano'),
(10, 2, 6, 'ano', 'ne'),
(12, 4, 3, 'ano', 'ano'),
(13, 4, 5, 'ano', 'ano'),
(14, 4, 8, 'ano', 'ano'),
(15, 4, 6, 'ano', 'ano'),
(36, 10, 21, 'ano', 'ano'),
(18, 15, 3, 'ano', 'ano'),
(19, 15, 6, 'ano', 'ano'),
(38, 10, 3, 'ne', 'ano'),
(39, 10, 18, 'ne', 'ano'),
(29, 1, 6, 'ne', 'ano'),
(30, 1, 5, 'ano', 'ano'),
(31, 1, 4, 'ano', 'ano'),
(32, 1, 3, 'ne', 'ano'),
(33, 1, 7, 'ano', 'ano'),
(40, 10, 26, 'ne', 'ano'),
(42, 15, 8, 'ne', 'ano'),
(43, 15, 25, 'ne', 'ano'),
(44, 15, 4, 'ne', 'ne'),
(46, 7, 0, 'ano', 'ano'),
(47, 7, 33, 'ne', 'ano'),
(50, 7, 24, 'ne', 'ne'),
(49, 7, 32, 'ne', 'ano'),
(51, 3, 28, 'ano', 'ano');

-- --------------------------------------------------------

--
-- Struktura tabulky `komponenty`
--

CREATE TABLE IF NOT EXISTS `komponenty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `druh` enum('cpu','gpu','mb','ram','hdd','cool','fan','power') COLLATE utf8_czech_ci NOT NULL,
  `jmeno` varchar(500) COLLATE utf8_czech_ci NOT NULL,
  `cena` int(9) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=48 ;

--
-- Vypisuji data pro tabulku `komponenty`
--

INSERT INTO `komponenty` (`id`, `druh`, `jmeno`, `cena`) VALUES
(47, 'cpu', 'XXXX', 12345),
(46, 'cpu', 'XXXX', 12345),
(3, 'gpu', 'Asus M4A79XTD EVO 790X', 54),
(4, 'ram', 'Kingston DIMM 4096MB DDR III', 45),
(5, 'hdd', 'Samsung SpinPoint F3 - 1TB', 456),
(6, 'cool', 'CoolerMaster Elite', 786),
(7, 'fan', 'Zalman CU Cooler', 486),
(8, 'gpu', 'PSU Seasonic 800', 4868),
(0, 'cpu', 'AMD Phenom II X5f4 @ 3 GHz', 666),
(18, 'gpu', 'ATI HD5770 1GB', 456),
(19, 'mb', 'Asus M4A79XTD EVO 790X', 54),
(20, 'ram', 'Kingston DIMM 4096MB DDR III', 45),
(21, 'hdd', 'Samsung SpinPoint F3 - 1TB', 456),
(22, 'cool', 'CoolerMaster Elite', 786),
(45, 'mb', 'sdfsdf', 5465),
(24, 'power', 'PSU Seasonic 80 (levnej)', 486),
(25, 'power', 'AMD Phenom II X4 @ 3 GHz', 666),
(26, 'gpu', 'ATI HD5770 1GB', 456),
(27, 'mb', 'Asus M4A79XTD EVO 790X', 54),
(28, 'ram', 'Kingston DIMM 4096MB DDR III', 45),
(29, 'hdd', 'Samsung SpinPoint F3 - 1TB', 456),
(30, 'cool', 'CoolerMaster Elite', 786),
(31, 'fan', 'Zalman CU Cooler', 486),
(32, 'power', 'PSU Seasonic 80(drahej)', 4866),
(33, 'cpu', 'AMD Phenom II X4 @ 3 GHz', 666),
(34, 'gpu', 'ATI HD5770 1GB', 456),
(35, 'mb', 'Asus M4A79XTD EVO 790X', 54),
(36, 'ram', 'Kingston DIMM 4096MB DDR III', 45),
(37, 'hdd', 'Samsung SpinPoint F3 - 1TB', 456),
(38, 'cpu', 'CoolerMaster Elitee', 786),
(39, 'fan', 'Zalman CU Coolersdfs', 486),
(40, 'gpu', 'XXXXXX', 486),
(41, 'cpu', 'sdf', 421),
(42, 'cpu', 'sdf', 421),
(43, 'cpu', 'sfdsdf', 56),
(44, 'gpu', 'sdf', 354);

-- --------------------------------------------------------

--
-- Struktura tabulky `objednavky`
--

CREATE TABLE IF NOT EXISTS `objednavky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(200) COLLATE utf8_czech_ci NOT NULL,
  `status` enum('nepotvrzena','vyrizuje_se','vyrizena','zrusena') COLLATE utf8_czech_ci NOT NULL,
  `cena` int(11) NOT NULL COMMENT 'bez dph',
  `vznik` datetime NOT NULL,
  `jmeno` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `ulice` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `mesto` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `cp` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `psc` varchar(12) COLLATE utf8_czech_ci NOT NULL,
  `ulice_d` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `mesto_d` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `cp_d` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `psc_d` varchar(12) COLLATE utf8_czech_ci NOT NULL,
  `registrovan` enum('ano','ne') COLLATE utf8_czech_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=26 ;

--
-- Vypisuji data pro tabulku `objednavky`
--

INSERT INTO `objednavky` (`id`, `nazev`, `status`, `cena`, `vznik`, `jmeno`, `prijmeni`, `email`, `ulice`, `mesto`, `cp`, `psc`, `ulice_d`, `mesto_d`, `cp_d`, `psc_d`, `registrovan`) VALUES
(1, '', 'nepotvrzena', 0, '0000-00-00 00:00:00', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(2, '', 'nepotvrzena', 0, '0000-00-00 00:00:00', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(3, '', 'nepotvrzena', 0, '0000-00-00 00:00:00', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(4, '', 'nepotvrzena', 0, '0000-00-00 00:00:00', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(5, '', 'nepotvrzena', 0, '0000-00-00 00:00:00', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(6, '', 'nepotvrzena', 0, '0000-00-00 00:00:00', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(7, '', 'nepotvrzena', 0, '2010-07-12 15:02:43', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(8, '', 'nepotvrzena', 0, '2010-07-12 15:06:19', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(9, '', 'nepotvrzena', 0, '2010-07-12 15:06:27', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(10, '', 'nepotvrzena', 0, '2010-07-12 15:34:13', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(11, '', 'nepotvrzena', 0, '2010-07-12 17:13:27', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(12, 'EXPERIENCED GAMER', 'nepotvrzena', 27979, '2010-07-12 17:14:53', 'sdfsd', 'sdfsdf', '', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(13, 'EXPERIENCED GAMER', 'nepotvrzena', 28381, '2010-07-12 17:20:27', 'sdf', 'sdf', 'sdf@sdfj.cz', 'sdf', 'sdf', 'sdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(14, 'EXPERIENCED GAMER', 'nepotvrzena', 28381, '2010-07-12 17:43:03', 'sdf', 'sdf', 'sdf@sdfj.cz', 'sdf', 'sdf', 'sdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(15, 'EXPERIENCED GAMER', 'nepotvrzena', 28381, '2010-07-12 17:43:18', 'sdf', 'sdf', 'sdf@sdfj.cz', 'sdf', 'sdf', 'sdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(16, 'EXPERIENCED GAMER', 'nepotvrzena', 28381, '2010-07-12 17:45:49', 'sdf', 'sdf', 'sdf@sdfj.cz', 'sdf', 'sdf', 'sdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(17, 'EXPERIENCED GAMER', 'nepotvrzena', 28381, '2010-07-12 17:46:32', 'sdf', 'sdf', 'sdf@sdfj.cz', 'sdf', 'sdf', 'sdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(18, 'EXPERIENCED GAMER', 'nepotvrzena', 28381, '2010-07-12 17:46:57', 'sdf', 'sdf', 'sdf@sdfj.cz', 'sdf', 'sdf', 'sdf', '', 'sdf', 'sdf', 'sdf', '', 'ne'),
(19, 'EXPERIENCED GAMER', 'nepotvrzena', 28381, '2010-07-13 16:33:37', 'jmeno', 'prijmeni', 'email', 'ulice', 'mesto', '123', '14300', 'ulice_d', 'mesto_d', 'cp_d', '0', 'ano'),
(20, 'EXPERIENCED GAMER', 'nepotvrzena', 36782, '2010-07-13 18:39:51', 'fg', 'dfg', 'sdfjgh@osdufh.cz', 'fg', 'dfg', 'dfg', '', '', '', '', '', 'ne'),
(21, 'EXPERIENCED GAMER', 'nepotvrzena', 36782, '2010-07-13 18:43:23', 'dfg', 'dfg', 'dfg@dkj.cz', 'dfg', 'df', 'df', 'dfg', '', '', '', '', 'ne'),
(22, 'EXPERIENCED GAMER', 'nepotvrzena', 7979, '2010-07-15 19:52:56', 'asd', 'asd', 'asd@jsdf.cz', 'asd', 'asd', 'asd', 'asd', 'asdas', 'dasd', 'asd', 'asda', 'ne'),
(23, 'EXPERIENCED GAMER - 1', 'nepotvrzena', 52493, '2010-07-16 18:38:36', 'jmeno', 'prijmeni', 'email', 'ulice', 'mesto', '123', '14300', 'ulice_d', 'mesto_d', 'cp_d', '0', 'ano'),
(24, 'EXPERIENCED GAMER', 'nepotvrzena', 45045, '2010-07-16 19:08:56', 'jmeno', 'prijmeni', 'email', 'ulice', 'mesto', '123', '14300', 'ulice_d', 'mesto_d', 'cp_d', '0', 'ano'),
(25, 'EXPERIENCED GAMER', 'nepotvrzena', 45245, '2010-07-16 19:09:59', 'jmeno', 'prijmeni', 'email', 'ulice', 'mesto', '123', '14300', 'ulice_d', 'mesto_d', 'cp_d', '0', 'ano');

-- --------------------------------------------------------

--
-- Struktura tabulky `objednavky_items`
--

CREATE TABLE IF NOT EXISTS `objednavky_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objednavka` int(11) NOT NULL,
  `id_komponenty` int(11) NOT NULL,
  `nazev` varchar(200) COLLATE utf8_czech_ci NOT NULL,
  `typ` enum('cpu','gpu','mb','ram','hdd','cool','fan','power') COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=48 ;

--
-- Vypisuji data pro tabulku `objednavky_items`
--

INSERT INTO `objednavky_items` (`id`, `objednavka`, `id_komponenty`, `nazev`, `typ`) VALUES
(1, 0, 255, 'komponenty.6', 'cpu'),
(2, 0, 255, 'Samsung SpinPoint F3 - 1TB', 'cpu'),
(3, 15, 0, 'AMD Phenom II X4 @ 3 GHz', 'cpu'),
(4, 17, 0, 'AMD Phenom II X4 @ 3 GHz', 'cpu'),
(5, 17, 2, 'ATI HD5770 1GB', 'gpu'),
(6, 17, 4, 'Kingston DIMM 4096MB DDR III', 'ram'),
(7, 17, 5, 'Samsung SpinPoint F3 - 1TB', 'hdd'),
(8, 17, 6, 'CoolerMaster Elite', 'cool'),
(9, 17, 7, 'Zalman CU Cooler', 'fan'),
(10, 17, 8, 'PSU Seasonic 80+', 'power'),
(11, 18, 0, 'AMD Phenom II X4 @ 3 GHz', 'cpu'),
(12, 18, 2, 'ATI HD5770 1GB', 'gpu'),
(13, 18, 4, 'Kingston DIMM 4096MB DDR III', 'ram'),
(14, 18, 5, 'Samsung SpinPoint F3 - 1TB', 'hdd'),
(15, 18, 6, 'CoolerMaster Elite', 'cool'),
(16, 18, 7, 'Zalman CU Cooler', 'fan'),
(17, 18, 8, 'PSU Seasonic 80+', 'power'),
(18, 19, 0, 'AMD Phenom II X4 @ 3 GHz', 'cpu'),
(19, 19, 2, 'ATI HD5770 1GB', 'gpu'),
(20, 19, 4, 'Kingston DIMM 4096MB DDR III', 'ram'),
(21, 19, 5, 'Samsung SpinPoint F3 - 1TB', 'hdd'),
(22, 19, 6, 'CoolerMaster Elite', 'cool'),
(23, 19, 7, 'Zalman CU Cooler', 'fan'),
(24, 19, 8, 'PSU Seasonic 80+', 'power'),
(25, 20, 3, 'Asus M4A79XTD EVO 790X', 'gpu'),
(26, 20, 5, 'Samsung SpinPoint F3 - 1TB', 'hdd'),
(27, 20, 6, 'CoolerMaster Elite', 'cool'),
(28, 20, 8, 'PSU Seasonic 80+', 'power'),
(29, 21, 3, 'Asus M4A79XTD EVO 790X', 'gpu'),
(30, 21, 5, 'Samsung SpinPoint F3 - 1TB', 'hdd'),
(31, 21, 6, 'CoolerMaster Elite', 'cool'),
(32, 21, 8, 'PSU Seasonic 80+', 'power'),
(33, 22, 0, 'AMD Phenom II X5f4 @ 3 GHz', 'cpu'),
(34, 22, 3, 'Asus M4A79XTD EVO 790X', 'gpu'),
(35, 22, 4, 'Kingston DIMM 4096MB DDR III', 'ram'),
(36, 22, 5, 'Samsung SpinPoint F3 - 1TB', 'hdd'),
(37, 22, 6, 'CoolerMaster Elite', 'cool'),
(38, 22, 7, 'Zalman CU Cooler', 'fan'),
(39, 22, 8, 'PSU Seasonic 80   ', 'power'),
(40, 23, 0, 'AMD Phenom II X5f4 @ 3 GHz', 'cpu'),
(41, 23, 3, 'Asus M4A79XTD EVO 790X', 'gpu'),
(42, 23, 4, 'Kingston DIMM 4096MB DDR III', 'ram'),
(43, 23, 5, 'Samsung SpinPoint F3 - 1TB', 'hdd'),
(44, 23, 6, 'CoolerMaster Elite', 'cool'),
(45, 23, 7, 'Zalman CU Cooler', 'fan'),
(46, 24, 28, 'Kingston DIMM 4096MB DDR III', 'ram'),
(47, 25, 28, 'Kingston DIMM 4096MB DDR III', 'ram');

-- --------------------------------------------------------

--
-- Struktura tabulky `sestavy`
--

CREATE TABLE IF NOT EXISTS `sestavy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typ` enum('game','pro','office','home') COLLATE utf8_czech_ci NOT NULL,
  `level` int(11) NOT NULL,
  `nazev` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `popis_o` varchar(5000) COLLATE utf8_czech_ci NOT NULL,
  `popis_pro` varchar(5000) COLLATE utf8_czech_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `case` varchar(50) COLLATE utf8_czech_ci NOT NULL COMMENT 'celý název souboru',
  `rozliseni` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `bar_game` int(11) NOT NULL,
  `bar_pro` int(11) NOT NULL,
  `bar_office` int(11) NOT NULL,
  `bar_home` int(11) NOT NULL,
  `subheader` varchar(200) COLLATE utf8_czech_ci NOT NULL,
  `sidebar` varchar(1000) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=17 ;

--
-- Vypisuji data pro tabulku `sestavy`
--

INSERT INTO `sestavy` (`id`, `typ`, `level`, `nazev`, `popis_o`, `popis_pro`, `cena`, `case`, `rozliseni`, `bar_game`, `bar_pro`, `bar_office`, `bar_home`, `subheader`, `sidebar`) VALUES
(1, 'game', 1, 'EXPERIENCED GAMER - 1', '<strong>Trochu kratší</strong>\r\n', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 50000, 'c310_sub.jpg', '1680 x 105', 5, 2, 4, 5, 'Dokonalý herní zážitek', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(2, 'game', 2, 'EXPERIENCED GAMEER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 35000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(3, 'game', 3, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 45000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(4, 'game', 4, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 75000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(5, 'pro', 1, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 25000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(6, 'pro', 2, 'EXPERIENCED GAMERR', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 35000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(7, 'pro', 3, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 45000, 'c310_sub.jpg', '1680 x 1050', 5, 5, 5, 5, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(8, 'pro', 4, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 75000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(9, 'office', 1, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 25000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(10, 'office', 2, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 35000, 'c310_sub.jpg', '1680 x 1050', 0, 0, 0, 1, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(11, 'office', 3, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 45000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(12, 'office', 4, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 75000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.');
INSERT INTO `sestavy` (`id`, `typ`, `level`, `nazev`, `popis_o`, `popis_pro`, `cena`, `case`, `rozliseni`, `bar_game`, `bar_pro`, `bar_office`, `bar_home`, `subheader`, `sidebar`) VALUES
(13, 'home', 1, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 25000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(14, 'home', 2, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 35000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(15, 'home', 3, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 45000, 'c310_sub.jpg', '1680 x 1050', 5, 5, 5, 5, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.'),
(16, 'home', 4, 'EXPERIENCED GAMER', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.</p>\r\n\r\n<p>Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.</p>\r\n\r\n<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.', 75000, 'c310_sub.jpg', '1680 x 1050', 1, 2, 3, 4, 'Dokonalý herní zážitek(subheader)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla non lectus sed nisl molestie malesuada. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Curabitur vitae diam non enim vestibulum interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce nibh. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Sed convallis magna eu sem. Duis condimentum augue id magna semper rutrum. Fusce aliquam vestibulum ipsum.');

-- --------------------------------------------------------

--
-- Struktura tabulky `texty`
--

CREATE TABLE IF NOT EXISTS `texty` (
  `identifikator` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `nadpis` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `text` varchar(10000) COLLATE utf8_czech_ci NOT NULL,
  UNIQUE KEY `identifikator` (`identifikator`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `texty`
--

INSERT INTO `texty` (`identifikator`, `nadpis`, `text`) VALUES
('testovaci-text', 'Nadpis Textu', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse sagittis ultrices augue. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus rhoncus. Fusce aliquam vestibulum ipsum. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In dapibus augue non sapien. Etiam bibendum elit eget erat. Fusce tellus. Nunc dapibus tortor vel mi dapibus sollicitudin. Integer in sapien. Fusce tellus. Maecenas aliquet accumsan leo. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Duis pulvinar.  Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Duis pulvinar. Pellentesque pretium lectus id turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum. Quisque porta. Duis risus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. In convallis. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aenean placerat. Integer lacinia. Curabitur bibendum justo non orci. Mauris metus. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus.  Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Etiam egestas wisi a erat. Sed convallis magna eu sem. Aliquam id dolor. Fusce suscipit libero eget elit. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Etiam egestas wisi a erat. Integer in sapien. Duis viverra diam non justo. Integer lacinia. Praesent id justo in neque elementum ultrices. Ut tempus purus at lorem. Aenean id metus id velit ullamcorper pulvinar. Mauris elementum mauris vitae tortor. In rutrum. Aliquam erat volutpat. Nunc tincidunt ante vitae massa.'),
('empty', 'Text neexistuje!', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` enum('administrator','member') CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `jmeno` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `ulice` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `mesto` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci DEFAULT NULL,
  `psc` int(5) NOT NULL,
  `cp` varchar(10) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `ulice_d` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `mesto_d` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `cp_d` varchar(12) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `psc_d` int(12) NOT NULL,
  `tel_num` varchar(20) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `platby` int(11) NOT NULL,
  `doprava` int(11) NOT NULL,
  `valid` enum('ano','ne') CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL DEFAULT 'ne',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=ucs2 COLLATE=ucs2_czech_ci AUTO_INCREMENT=32 ;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `group`, `username`, `password`, `jmeno`, `prijmeni`, `email`, `ulice`, `mesto`, `psc`, `cp`, `ulice_d`, `mesto_d`, `cp_d`, `psc_d`, `tel_num`, `platby`, `doprava`, `valid`) VALUES
(1, 'administrator', 'jirka', 'e34d42e23afff484efd36d9d149a63546980407b9d91ac0e50da09bd240fad1c', 'jmeno', 'prijmeni', 'email', 'ulice', 'mesto', 14300, '123', 'ulice_d', 'mesto_d', 'cp_d', 0, '', 1, 1, 'ano'),
(19, '', 'dsf', '', 'dsf', 'sdf', 'sd@dd.cz', 'd', 'sdf', 0, 'sdfasdf', 'sdf', 'sdf', 'sdf', 0, '', 1, 1, 'ano'),
(20, '', 'jjj', '', 'sdf', 'sdf', 'sdf@sd.cz', 'sdf', 'd', 0, 'd', '', '', '', 0, '', 0, 0, 'ano'),
(21, '', 'jjjj', '', 'sdf', 'sdf', 'sdf@ssd.cz', 'sdf', 'd', 0, 'd', '', '', '', 0, '', 0, 0, 'ano'),
(22, '', 'sdfsdf', '255bb6b610634fe06a9baebedc867928f7136261f10c1062ef1fbf1a0e7e3058', 'dfgdfg', 'sdfsd', 'sdf@sdf.cz', 'sdfsdf', 'ssdf', 0, 'sdfsdf', '', '', '', 0, '', 0, 0, 'ano'),
(23, '', 'sdfsdfsd', '1022975958dc94d0b7d889db7f70529bdb6e369fd5545d9956eec8d7b99b127e', 'sdf', 'sdf', 's@dfsdf.czsdf', 'sdf', 'sdf', 0, 'sdf', '', '', '', 0, '', 2, 1, 'ano'),
(24, 'member', 'sdfsdfsddd', '947fab90f0581b0fede478b315680a2ad04954e1c760dd0025502f4c059c83ed', 'sdf', 'sdf', 's@dfsdddf.czsdf', 'sdf', 'sdf', 0, 'sdf', '', '', '', 0, '', 2, 1, 'ano'),
(25, 'member', 'sdfsdfsdddd', '8f02cfc41b686d0068a3afd32843d21cd7bc63fe9f7a283bc352acb9b0e3761e', 'sdf', 'sdf', 's@dfsddddf.czsdf', 'sdf', 'sdf', 0, 'sdf', '', '', '', 0, '', 2, 1, 'ano'),
(26, '', '', '', '', '', '', '', NULL, 0, '', '', '', '', 0, '', 0, 0, 'ne'),
(31, 'member', 'sdfsdfsadddfsd', '901d00d53c73e924a6b0f9b1357d8e578cd5dae6a9d4c11c6d973010b2b69520', 'dfgdfd', 'dfgdf', 'jirimuller@email.cz', 'ssdf', 'sdf', 0, 'sdfsdf', '', '', '', 0, '', 1, 1, 'ano'),
(30, 'member', 'sdfsdfsadfsd', '86dc7711da634a44d3bc67e371888d70938762bcc59683a5df024d654b94bd29', 'dfgdfd', 'dfgdf', 'taypan@email.cz', 'ssdf', 'sdf', 0, 'sdfsdf', '', '', '', 0, '', 1, 1, 'ne');

-- --------------------------------------------------------

--
-- Zástupná struktura pro pohled `vwKompSestavy`
--
CREATE TABLE IF NOT EXISTS `vwKompSestavy` (
`id` int(11)
,`id_komponenta` int(11)
,`id_sestava` int(11)
,`jmeno` varchar(500)
,`druh` enum('cpu','gpu','mb','ram','hdd','cool','fan','power')
,`cena` int(9)
,`vychozi` enum('ano','ne')
,`zmenitelna` enum('ano','ne')
);
-- --------------------------------------------------------

--
-- Zástupná struktura pro pohled `vwSestavy`
--
CREATE TABLE IF NOT EXISTS `vwSestavy` (
`typ` enum('game','pro','office','home')
,`level` enum('1','2','3','4')
,`cpu` varchar(500)
,`gpu` varchar(500)
,`mb` varchar(500)
,`ram` varchar(500)
,`hdd` varchar(500)
,`cool` varchar(500)
,`fan` varchar(500)
,`power` varchar(500)
);
-- --------------------------------------------------------

--
-- Zástupná struktura pro pohled `vwSum`
--
CREATE TABLE IF NOT EXISTS `vwSum` (
`id_komponenta` int(11)
,`id_sestava` int(11)
,`jmeno` varchar(500)
,`druh` enum('cpu','gpu','mb','ram','hdd','cool','fan','power')
,`cena` int(9)
,`vychozi` enum('ano','ne')
,`zmenitelna` enum('ano','ne')
,`typ` enum('game','pro','office','home')
,`level` int(11)
,`nazev` varchar(100)
,`popis_o` varchar(5000)
,`popis_pro` varchar(5000)
,`rozliseni` varchar(50)
,`bar_game` int(11)
,`bar_pro` int(11)
,`bar_office` int(11)
,`bar_home` int(11)
,`subheader` varchar(200)
,`sidebar` varchar(1000)
);
-- --------------------------------------------------------

--
-- Struktura tabulky `vychozi_sestavy`
--

CREATE TABLE IF NOT EXISTS `vychozi_sestavy` (
  `typ` enum('game','pro','office','home') COLLATE utf8_czech_ci NOT NULL,
  `level` enum('1','2','3','4') COLLATE utf8_czech_ci NOT NULL,
  `cpu` int(11) NOT NULL,
  `gpu` int(11) NOT NULL,
  `mb` int(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `hdd` int(11) NOT NULL,
  `cool` int(11) NOT NULL,
  `fan` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `popis` varchar(5000) COLLATE utf8_czech_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `vychozi_sestavy`
--

INSERT INTO `vychozi_sestavy` (`typ`, `level`, `cpu`, `gpu`, `mb`, `ram`, `hdd`, `cool`, `fan`, `power`, `popis`) VALUES
('pro', '3', 1, 2, 3, 4, 5, 6, 7, 8, ''),
('office', '1', 1, 2, 3, 4, 5, 6, 7, 8, ''),
('home', '1', 1, 2, 3, 4, 5, 6, 7, 8, ''),
('game', '1', 1, 2, 3, 4, 5, 6, 7, 8, ''),
('pro', '2', 1, 2, 3, 4, 5, 6, 7, 8, ''),
('pro', '3', 1, 2, 3, 4, 5, 6, 7, 8, '');

-- --------------------------------------------------------

--
-- Struktura pro pohled `vwKompSestavy`
--
DROP TABLE IF EXISTS `vwKompSestavy`;

CREATE ALGORITHM=UNDEFINED DEFINER=`jirka`@`localhost` SQL SECURITY DEFINER VIEW `vwKompSestavy` AS select `kombinace`.`id` AS `id`,`kombinace`.`id_komponenta` AS `id_komponenta`,`kombinace`.`id_sestava` AS `id_sestava`,`komponenty`.`jmeno` AS `jmeno`,`komponenty`.`druh` AS `druh`,`komponenty`.`cena` AS `cena`,`kombinace`.`vychozi` AS `vychozi`,`kombinace`.`zmenitelna` AS `zmenitelna` from (`komponenty` join `kombinace`) where (`kombinace`.`id_komponenta` = `komponenty`.`id`);

-- --------------------------------------------------------

--
-- Struktura pro pohled `vwSestavy`
--
DROP TABLE IF EXISTS `vwSestavy`;

CREATE ALGORITHM=UNDEFINED DEFINER=`jirka`@`localhost` SQL SECURITY DEFINER VIEW `vwSestavy` AS select `ts`.`typ` AS `typ`,`ts`.`level` AS `level`,`tk1`.`jmeno` AS `cpu`,`tk2`.`jmeno` AS `gpu`,`tk3`.`jmeno` AS `mb`,`tk4`.`jmeno` AS `ram`,`tk5`.`jmeno` AS `hdd`,`tk6`.`jmeno` AS `cool`,`tk7`.`jmeno` AS `fan`,`tk8`.`jmeno` AS `power` from ((((((((`vychozi_sestavy` `ts` join `komponenty` `tk1` on((`ts`.`cpu` = `tk1`.`id`))) join `komponenty` `tk2` on((`ts`.`gpu` = `tk2`.`id`))) join `komponenty` `tk3` on((`ts`.`mb` = `tk3`.`id`))) join `komponenty` `tk4` on((`ts`.`ram` = `tk4`.`id`))) join `komponenty` `tk5` on((`ts`.`hdd` = `tk5`.`id`))) join `komponenty` `tk6` on((`ts`.`cool` = `tk6`.`id`))) join `komponenty` `tk7` on((`ts`.`fan` = `tk7`.`id`))) join `komponenty` `tk8` on((`ts`.`power` = `tk8`.`id`)));

-- --------------------------------------------------------

--
-- Struktura pro pohled `vwSum`
--
DROP TABLE IF EXISTS `vwSum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`jirka`@`localhost` SQL SECURITY DEFINER VIEW `vwSum` AS select `vwKompSestavy`.`id_komponenta` AS `id_komponenta`,`vwKompSestavy`.`id_sestava` AS `id_sestava`,`vwKompSestavy`.`jmeno` AS `jmeno`,`vwKompSestavy`.`druh` AS `druh`,`vwKompSestavy`.`cena` AS `cena`,`vwKompSestavy`.`vychozi` AS `vychozi`,`vwKompSestavy`.`zmenitelna` AS `zmenitelna`,`sestavy`.`typ` AS `typ`,`sestavy`.`level` AS `level`,`sestavy`.`nazev` AS `nazev`,`sestavy`.`popis_o` AS `popis_o`,`sestavy`.`popis_pro` AS `popis_pro`,`sestavy`.`rozliseni` AS `rozliseni`,`sestavy`.`bar_game` AS `bar_game`,`sestavy`.`bar_pro` AS `bar_pro`,`sestavy`.`bar_office` AS `bar_office`,`sestavy`.`bar_home` AS `bar_home`,`sestavy`.`subheader` AS `subheader`,`sestavy`.`sidebar` AS `sidebar` from (`vwKompSestavy` join `sestavy`) where (`vwKompSestavy`.`id_sestava` = `sestavy`.`id`);
