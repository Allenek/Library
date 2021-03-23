-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Sty 2019, 22:46
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autor`
--

CREATE TABLE `autor` (
  `ID_Autor` int(11) NOT NULL,
  `Imie` varchar(30) NOT NULL,
  `Nazwisko` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `autor`
--

INSERT INTO `autor` (`ID_Autor`, `Imie`, `Nazwisko`) VALUES
(4, 'Jan', 'Nowak'),
(5, 'Dawid', 'Miklas'),
(6, 'Dawid', 'Miklas'),
(7, 'Komisarz bagieta', 'MikuÅ‚a'),
(9, 'Komisarz bagieta', 'MikuÅ‚a'),
(13, 'sadgasg', 'easgaesg'),
(14, 'sadgasg', 'blabla'),
(16, 'Dawid', 'Twardowski'),
(17, 'Mateusz', 'Wojciechowski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `egzemplarz`
--

CREATE TABLE `egzemplarz` (
  `ID_Egzemplarz` int(11) NOT NULL,
  `ID_Ksiazka` int(11) NOT NULL,
  `Sygnatura` varchar(20) NOT NULL,
  `Cena_Zakupu` decimal(5,2) NOT NULL,
  `Stan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `egzemplarz`
--

INSERT INTO `egzemplarz` (`ID_Egzemplarz`, `ID_Ksiazka`, `Sygnatura`, `Cena_Zakupu`, `Stan`) VALUES
(1, 2, 'ASDF', '13.20', 'Refurbished'),
(2, 3, 'dsadfdafs', '13.20', 'bardzo zÅ‚y'),
(3, 3, 'dasfas', '14.10', 'bardzo dobry'),
(5, 2, 'vsadsadasf', '13.50', 'dfsf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `ID_Kategoria` int(11) NOT NULL,
  `Nazwa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `kategoria`
--

INSERT INTO `kategoria` (`ID_Kategoria`, `Nazwa`) VALUES
(1, 'reakcja'),
(9, 'hsadfhsdfhsd'),
(12, 'Akcja2'),
(14, 'Helios');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazka`
--

CREATE TABLE `ksiazka` (
  `ID_Ksiazka` int(11) NOT NULL,
  `ID_Kategoria` int(11) NOT NULL,
  `Tytul` varchar(200) NOT NULL,
  `Opis` varchar(150) DEFAULT NULL,
  `ID_Wydawnictwo` int(11) NOT NULL,
  `Rok_Wydania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazka`
--

INSERT INTO `ksiazka` (`ID_Ksiazka`, `ID_Kategoria`, `Tytul`, `Opis`, `ID_Wydawnictwo`, `Rok_Wydania`) VALUES
(2, 1, 'asd', 'asf', 1, 1999),
(3, 1, 'asd', 'asf', 2, 2111),
(4, 1, 'PrzeminiÄ™Å‚o z wiatrem', 'brak', 2, 2001),
(7, 1, 'asdf', 'wow poggers git?', 1, 2001),
(8, 14, 'asd', 'asd asd asd asd', 2, 1230),
(9, 9, 'qwe', 'asd asd asdfgh dfh', 9, 1111),
(10, 9, 'qwe', 'asd asd asdfgh dfh', 9, 1111),
(11, 1, 'PrzeminiÄ™Å‚o z wiatrem', 'asdadafdsagasgd', 2, 2000),
(12, 1, 'asdf', 'sadadasfasfasfaf', 9, 2000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazka_autor`
--

CREATE TABLE `ksiazka_autor` (
  `ID_Ksiazka_Autor` int(11) NOT NULL,
  `ID_Ksiazka` int(11) NOT NULL,
  `ID_Autor` int(11) NOT NULL,
  `Kolejnosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazka_autor`
--

INSERT INTO `ksiazka_autor` (`ID_Ksiazka_Autor`, `ID_Ksiazka`, `ID_Autor`, `Kolejnosc`) VALUES
(1, 2, 5, 2),
(2, 3, 4, 1),
(3, 2, 7, 2),
(4, 7, 16, 1),
(8, 10, 16, 0),
(9, 10, 17, 0),
(10, 10, 14, 0),
(11, 11, 5, 0),
(12, 11, 6, 0),
(13, 12, 5, 0),
(14, 12, 6, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `login` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`ID`, `login`, `name`, `surname`, `password`) VALUES
(1, 'admin', 'Administrator', 'Aplikacji', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'user', 'Uzytkownik', 'Testowy', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydawnictwo`
--

CREATE TABLE `wydawnictwo` (
  `ID_Wydawnictwo` int(11) NOT NULL,
  `Nazwa` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `wydawnictwo`
--

INSERT INTO `wydawnictwo` (`ID_Wydawnictwo`, `Nazwa`) VALUES
(1, 'nowa era'),
(2, 'Helion'),
(9, 'asdfasf'),
(18, 'sasgasga'),
(19, 'asdgsdgasdgasga');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`ID_Autor`);

--
-- Indeksy dla tabeli `egzemplarz`
--
ALTER TABLE `egzemplarz`
  ADD PRIMARY KEY (`ID_Egzemplarz`),
  ADD KEY `FK_Egzemplarz_Ksiazka` (`ID_Ksiazka`);

--
-- Indeksy dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`ID_Kategoria`);

--
-- Indeksy dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD PRIMARY KEY (`ID_Ksiazka`),
  ADD KEY `FK_Ksiazka_Kategoria` (`ID_Kategoria`),
  ADD KEY `FK_Ksiazka_Wydawnictwo` (`ID_Wydawnictwo`);

--
-- Indeksy dla tabeli `ksiazka_autor`
--
ALTER TABLE `ksiazka_autor`
  ADD PRIMARY KEY (`ID_Ksiazka_Autor`),
  ADD KEY `FK_Ksiazka_Autor_Ksiazka` (`ID_Ksiazka`),
  ADD KEY `FK_Ksiazka_Autor_Autor` (`ID_Autor`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `wydawnictwo`
--
ALTER TABLE `wydawnictwo`
  ADD PRIMARY KEY (`ID_Wydawnictwo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `autor`
--
ALTER TABLE `autor`
  MODIFY `ID_Autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `egzemplarz`
--
ALTER TABLE `egzemplarz`
  MODIFY `ID_Egzemplarz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `ID_Kategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  MODIFY `ID_Ksiazka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `ksiazka_autor`
--
ALTER TABLE `ksiazka_autor`
  MODIFY `ID_Ksiazka_Autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `wydawnictwo`
--
ALTER TABLE `wydawnictwo`
  MODIFY `ID_Wydawnictwo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `egzemplarz`
--
ALTER TABLE `egzemplarz`
  ADD CONSTRAINT `FK_Egzemplarz_Ksiazka` FOREIGN KEY (`ID_Ksiazka`) REFERENCES `ksiazka` (`ID_Ksiazka`);

--
-- Ograniczenia dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD CONSTRAINT `FK_Ksiazka_Kategoria` FOREIGN KEY (`ID_Kategoria`) REFERENCES `kategoria` (`ID_Kategoria`),
  ADD CONSTRAINT `FK_Ksiazka_Wydawnictwo` FOREIGN KEY (`ID_Wydawnictwo`) REFERENCES `wydawnictwo` (`ID_Wydawnictwo`);

--
-- Ograniczenia dla tabeli `ksiazka_autor`
--
ALTER TABLE `ksiazka_autor`
  ADD CONSTRAINT `FK_Ksiazka_Autor_Autor` FOREIGN KEY (`ID_Autor`) REFERENCES `autor` (`ID_Autor`),
  ADD CONSTRAINT `FK_Ksiazka_Autor_Ksiazka` FOREIGN KEY (`ID_Ksiazka`) REFERENCES `ksiazka` (`ID_Ksiazka`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
