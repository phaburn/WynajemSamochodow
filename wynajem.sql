-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Paź 2017, 23:20
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wynajem`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `idKlienta` int(11) NOT NULL,
  `Imie` varchar(20) NOT NULL,
  `Nazwisko` varchar(25) NOT NULL,
  `Login` varchar(25) NOT NULL,
  `Haslo` varchar(25) NOT NULL,
  `Telefon` int(9) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`idKlienta`, `Imie`, `Nazwisko`, `Login`, `Haslo`, `Telefon`, `Email`) VALUES
(1, 'Jan', 'Kowalski', 'jkowalski', '827ccb0eea8a706c4c34a1689', 123456789, 'jkowalski@gmail.com'),
(2, 'Marek', 'Jankowski', 'mjankowski', '827ccb0eea8a706c4c34a1689', 321654987, 'mjankowski@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `idPracownika` int(11) NOT NULL,
  `Imie` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Nazwisko` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `Email` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `Telefon` int(9) NOT NULL,
  `Funkcja` varchar(15) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`idPracownika`, `Imie`, `Nazwisko`, `Email`, `Telefon`, `Funkcja`) VALUES
(1, 'Admin', 'Admin', 'admin@wynajem.pl', 111222333, 'Administrator'),
(2, 'Adam', 'Mickiewicz', 'amickiewicz@wynajem.pl', 444555666, 'biurowy'),
(3, 'Juliusz', 'Słowacki', 'jslowacki@wynajem.pl', 777888999, 'samochodowy'),
(31, 'Jan', 'Brzechwa', 'jbrzechwa@wynajmnij.pl', 123456789, 'biurowy'),
(32, 'Jan', 'Brzechwa', 'jbrzechwa@wynajmnij.pl', 123456789, 'biurowy'),
(33, 'Henryk', 'Sienkiewicz', 'hsienkiewicz@wynajmnij.pl', 123456789, 'biurowy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `idSamochodu` int(11) NOT NULL,
  `Marka` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Model` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Rocznik` int(11) NOT NULL,
  `Kolor` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Stan` varchar(15) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`idSamochodu`, `Marka`, `Model`, `Rocznik`, `Kolor`, `Stan`) VALUES
(1, 'Fiat', 'Punto', 2005, 'Granatowy', 'Wolny'),
(2, 'Ford', 'Mondeo', 2015, 'Czarny', 'Zarezerwowany');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `idZamowienia` int(11) NOT NULL,
  `idSamochodu` int(11) NOT NULL,
  `idKlienta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`idZamowienia`, `idSamochodu`, `idKlienta`) VALUES
(1, 2, 2),
(2, 2, 1),
(3, 1, 2),
(4, 2, 1),
(5, 1, 2),
(6, 2, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`idKlienta`);

--
-- Indexes for table `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`idPracownika`);

--
-- Indexes for table `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`idSamochodu`);

--
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`idZamowienia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `idKlienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `idPracownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `idSamochodu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `idZamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
