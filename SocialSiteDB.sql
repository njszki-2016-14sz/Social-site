-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2016. Dec 09. 21:09
-- Kiszolgáló verziója: 5.7.11
-- PHP verzió: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `socialsitedb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `newsfeed`
--

CREATE TABLE `newsfeed` (
  `id` int(11) NOT NULL,
  `userTag` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postDate` date NOT NULL,
  `userMessage` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `newsfeed`
--

INSERT INTO `newsfeed` (`id`, `userTag`, `postDate`, `userMessage`) VALUES
(8, 'MetalHunterR', '2016-12-02', 'Árvíz tűrő tükör mosógép (vagy fúró ahogy tetszik). UTF-8 kódolás teszt ékezetekkel! :D'),
(10, 'MetalHunterR', '2016-12-06', 'Dinamikus szöveg méret teszt.\r\n\r\nAvenged Sevenfold Brompton Cocktail\r\n\r\n(Out of time...)\n\r\nDoc, I\'m dyin\', I\'m feeling compromised (feeling compromised)\r\nand so dehumanized (so dehumanized!)\r\nI lost my final fight to disease, I feel that this is where it ends\r\nI need that shot to enter my vein\r\nMy Brompton Cocktail blend\r\n\r\nCause I can\'t feel my face\r\nI won\'t struggle long\r\nIn a world so cold\r\nIn a world so wrong\r\n\r\nI\'m not running away, been fighting this so long (so long)\r\nSuch a price that we pay, we gotta be so strong\r\n\r\nAnd I...\r\nI\'m tired, induced euphoria (induced euphoria)\r\nto help me move along (help me move along!)\r\nI wanna meet my maker in peace, I want to feel alive again\r\nSo put that smile back on my face and mix it strong my friend.\r\n\r\nCause I can\'t feel my face\r\nI won\'t struggle long\r\nIn a world so cold\r\nIn a world so wrong\r\n\r\nI\'m not running away, been fighting this so long (so long)\r\nSuch a price that we pay, we gotta be so strong\r\nAnd I take my life tonight cause I have the right to die how I wanna\r\nand leave how I arrived, so alive\r\n\r\nI believe my sins have been forgiven\r\nand I believe my choice will save me from this life\r\nplease don\'t question why\r\nmy sins have been forgotten\r\nI believe I\'ll find peace in afterlife\r\nplease don\'t question why\r\nI left this way\r\n\r\nCause I can\'t feel my face\r\nI won\'t struggle long\r\nIn a world so cold\r\nIn a world so wrong\r\n\r\nI\'m not running away, been fighting this so long (so long)\r\nSuch a price that we pay, we gotta be so strong\r\nAnd I take my life tonight cause I have the right to die how I wanna\r\nand leave how I arrived, so alive\r\n(Alive)'),
(13, 'MetalHunterR', '2016-12-06', 'To Do: \\n karakterek sortörés végett...'),
(14, 'TestBéla', '2016-12-09', 'De... Legalább látom mindenki üzeneteit... Ami jó :D'),
(16, 'MetalHunterR', '2016-12-09', 'Multi-line message:\r\nCheck :D');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserTag` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `UserPassword` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `UserEmail` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `UserDate` date NOT NULL,
  `UserBIO` text COLLATE utf8_unicode_ci NOT NULL,
  `UserFirstName` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `UserLastName` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `UserImgLocation` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`UserID`, `UserTag`, `UserPassword`, `UserEmail`, `UserDate`, `UserBIO`, `UserFirstName`, `UserLastName`, `UserImgLocation`) VALUES
(1, 'MetalHunterR', 'a6da2093b7e8556fc27515152b422a50', 'kriszonodi@gmail.com', '1996-08-12', 'Imagine, Design, Create. Game Development 4 Life', 'Krisztián', 'Kovács', 'MetalHunterR.jpg'),
(7, 'TestBéla', '97c3ace935fdcb456d30eafcc2a273fc', 'test@gmail.com', '1990-01-01', 'Well, I\'m just a test... What ever', 'Béla', 'Test', 'proba.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
