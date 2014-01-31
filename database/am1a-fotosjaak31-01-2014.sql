-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 31 jan 2014 om 12:34
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1a-fotosjaak`
--
CREATE DATABASE IF NOT EXISTS `am1a-fotosjaak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1a-fotosjaak`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question_english` text NOT NULL,
  `question_dutch` text NOT NULL,
  `answer_english` text NOT NULL,
  `answer_dutch` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Gegevens worden uitgevoerd voor tabel `faq`
--

INSERT INTO `faq` (`id`, `question_english`, `question_dutch`, `answer_english`, `answer_dutch`) VALUES
(1, 'is this game hard to play?', 'is dit een moeilijk spel?', 'yes, this game is very hard to play.', 'ja dit is een moeilijk spel.'),
(2, 'how can i download the game?', 'hoe kan ik het spel downloaden?', 'you can download the game by clicking the download button on the downloadpage.', 'je kan het spel downloaden door op de downloadknop te drukken op de downloadpagina.'),
(3, 'is this game hard to play?', 'is dit een moeilijk spel?', 'this game is not very hard to play.', 'dit is een niet erg moeilijk spel.'),
(4, 'how do i change my password?', 'hoe kan ik mijn password veranderen?', 'you can change your password by clicking the ''change password'' button in the customer homepage.', 'dat kan je doen door op de knop ''password veranderen'' te klikken op de customer homepage.'),
(5, 'is there anything i need to pay for?', 'is er iets waarvoor ik moet betalen?', 'no, this game is completely free.', 'nee dit spel is helemaal gratis.'),
(6, 'are there anymore games that i can download?', 'zijn er nog meer games die ik kan downloaden?\r\n', 'no, this is the only game.', 'nee dit is de enige.'),
(7, 'which do i choose: application or setup?', 'welke moet ik kiezen application of setup?', 'you choose the application.', 'kies de applicatie.'),
(8, 'were do i change the language?', 'waar kan ik de taal veranderen?', 'you can change the language by clicking the flag next to FAQ.', 'je kan de taal veranderen door op de vlag te klikken naast FAQ.'),
(9, 'how save is my password?', 'hoe veilig is mijn password?', 'the only one who can see your password is the root of this site.', 'alleen de eigenaar van deze site kan uw password zien.'),
(10, 'why is there no downloade page?', 'waarom is er geen download page?', 'probably because you aren''t logged in, log in by clicking the login button.', 'waarschijnlijk omdat je niet ingelogd bent, log in door op de inlog knop te drukken.'),
(11, 'When is this game completed?\r\n', 'Wanneer heb ik dit spel uitgespeeld?', 'This game is an never ending experiance.', 'Dit spel kan je niet uitspelen.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(12) NOT NULL,
  `userrole` enum('customer','root','admin','photographer','developer','coworker') NOT NULL DEFAULT 'customer',
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  `activationdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Gegevens worden uitgevoerd voor tabel `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `userrole`, `activated`, `activationdate`) VALUES
(1, 'customer@cus.com', 'marlena', 'customer', 'yes', '2013-12-02 00:00:00'),
(2, 'admin@ad.com', 'marlena', 'admin', 'no', '2013-12-02 00:00:00'),
(3, 'customer@cus.com', 'marlena', 'customer', 'no', '2013-12-02 00:00:00'),
(4, 'admin@ad.com', 'marlena', 'admin', 'no', '2013-12-02 00:00:00'),
(5, 'root@root.com', 'marlena', 'root', 'no', '2013-12-02 00:00:00'),
(6, 'photo@grapher.com', 'marlena', 'photographer', 'no', '2013-12-02 00:00:00'),
(7, 'root@root.com', 'marlena', 'root', 'no', '2013-12-02 00:00:00'),
(8, 'photo@grapher.com', 'marlena', 'photographer', 'no', '2013-12-02 00:00:00'),
(9, 'devel@oper.com', 'marlena', 'developer', 'no', '2013-12-03 00:00:00'),
(10, 'co@worker.com', 'marlena', 'coworker', 'yes', '2014-01-28 09:00:45'),
(11, '', 'f1aa1712d5ee', 'customer', 'no', '2014-01-28 11:05:24'),
(12, 'sadsad@dfs', '2764579e087d', 'customer', 'no', '2014-01-28 11:08:24'),
(13, 'asda@fsa', '18f83ffceeff', 'customer', 'no', '2014-01-28 11:08:45'),
(14, 'asdasfdeew@lkdsanlkjnd', '71f18d87499d', 'customer', 'no', '2014-01-28 11:10:31'),
(15, 'aksfh@jslflksaj', '927d3353cd25', 'customer', 'no', '2014-01-28 11:13:00'),
(16, 'asfasf@asf', '0a28a606f2ce', 'customer', 'no', '2014-01-28 11:14:45'),
(17, 'asd@a', 'e5bcb0c4ffa1', 'customer', 'no', '2014-01-28 11:15:01'),
(18, 'kjdfs@kjehf', '52616735fa1d', 'customer', 'no', '2014-01-28 11:15:28'),
(19, 'asmd@b', '8a3f2e0d13d9', 'customer', 'no', '2014-01-28 11:16:40'),
(20, 'kajsdlj@lkjsadf', '390f8361c10e', 'customer', 'no', '2014-01-28 11:19:07');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `order_short` text NOT NULL,
  `order_long` text NOT NULL,
  `delivery_date` date NOT NULL,
  `event_date` date NOT NULL,
  `color` enum('Zwart/wit','Kleur') NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Gegevens worden uitgevoerd voor tabel `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `order_short`, `order_long`, `delivery_date`, `event_date`, `color`, `number`) VALUES
(1, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(2, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(3, 1, 'lkfckljl', 'klkjlk', '2014-01-09', '2014-01-07', 'Kleur', 23),
(4, 1, 'lkfckljl', 'klkjlk', '2014-01-09', '2014-01-07', 'Kleur', 23),
(5, 1, 'lkfckljl', 'klkjlk', '2014-01-09', '2014-01-07', 'Kleur', 23),
(6, 1, 'lkfckljl', 'klkjlk', '2014-01-09', '2014-01-07', 'Kleur', 23),
(7, 1, 'lkfckljl', 'klkjlk', '2014-01-09', '2014-01-07', 'Kleur', 23),
(8, 1, 'lkfckljl', 'klkjlk', '2014-01-09', '2014-01-07', 'Kleur', 23),
(9, 1, 'lkfckljl', 'klkjlk', '2014-01-09', '2014-01-07', 'Kleur', 23),
(10, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(11, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(12, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(13, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(14, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(15, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(16, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(17, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(18, 1, 'de witte haai', 'maak een foto van een witte haai die een mens bijt', '2014-01-02', '2014-01-16', 'Zwart/wit', 0),
(19, 1, '', '', '0000-00-00', '0000-00-00', '', 0),
(20, 1, '', '', '0000-00-00', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `addressnumber` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `country` varchar(200) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `mobile_phonenumber` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `user`
--

INSERT INTO `user` (`id`, `firstname`, `infix`, `surname`, `address`, `addressnumber`, `city`, `zipcode`, `country`, `phonenumber`, `mobile_phonenumber`) VALUES
(1, 'marlena', '', 'wassink', 'hoi', '9', 'hoi', '2938JE', 'hoiland', '063762528', '392372838'),
(10, 'marlena', '', 'wassink', 'dlajs', '989', 'alshdl', 'jhaslj', 'ljhlklsajd', '99292992', '9393932'),
(11, 'jh', '', '', '', '', '', '', '', '', ''),
(12, 'sdaf', 'asdass', '', '', '', '', 'ada', '', '', ''),
(13, 'sdaf', 'asdass', '', '', '', '', 'ada', '', '', ''),
(14, '', '', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', ''),
(20, 'marlena', '', 'wassink', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `date_of_birth` date NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `favorite_game` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userrole` enum('admin','root','customer') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `surname`, `street`, `city`, `postcode`, `date_of_birth`, `marital_status`, `favorite_game`, `email`, `password`, `userrole`) VALUES
(18, 'marlena', '', 'wassink', 'burg. schreudersplantsoen 8', 'benschop', '3405AL', '1996-07-23', 'thuiswonend', 'minecraft oitc', 'wassink7@hotmail.com', 'marlena', 'root'),
(19, 'marlena', '', 'wassink', 'burg. schreudersplantsoen 8', 'benschop', '3405AL', '1996-07-23', 'thuiswonend', 'no', 'lol@lol.com', 'marlena', 'customer'),
(21, 'marlena', '', 'wassink', 'burg. schreudersplantsoen 8', 'benschop', '3405AL', '1996-07-23', 'thuiswonend', 'yes.', 'marlena@marlena.nl', 'marlena', 'admin'),
(22, 'asdjh', 'hkl', 'h', 'ho', 'ffd', 'oh0', '0098-07-08', '8', '987', '878970987', '08908', 'customer'),
(23, 'hoisad', 'kjh', 'kjhkj', 'hkjh', 'jhljhlkj', 'hkjlh', '9878-07-08', '9879898', ' 8i78', '987987', '908', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
