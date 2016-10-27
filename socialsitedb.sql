-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2016. Okt 27. 14:16
-- Kiszolgáló verziója: 10.1.16-MariaDB
-- PHP verzió: 5.6.24

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
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `users` (`UserID`, `UserName`, `UserPassword`, `UserEmail`, `UserDate`, `UserBIO`, `UserFirstName`, `UserLastName`, `UserImgLocation`) VALUES
(1, 'fulopdavid232', '5f461ccf73b963773aaa7685ac585190', 'fulopdavid232@gmail.com', '1996-02-02', 'Üdv Dávid vagyok, az adatbázis szerkesztője és utálom a munkámat ha láttok az utcán és tehetitek öljetek meg mert az élet egy szenvedés.', 'Dávid', 'Fülöp', 'images.jpg'),
(2, 'MetalHunterR', 'a6da2093b7e8556fc27515152b422a50', 'kriszonodi@gmail.com', '1996-08-12', 'The one who wants to see the world burn down...', 'Kovács', 'Krisztián', 'MetalHunterR.jpg'),
(3, 'probaJanos', 'c0a8e1e5e307cc5b33819b387b5f01fd', 'proba@gmail.com', '1990-01-01', 'probaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaprobaproba', 'proba', 'proba', 'proba.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
