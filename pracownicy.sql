-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Paź 2017, 22:41
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
(3, 'Juliusz', 'Słowacki', 'jslowacki@wynajem.pl', 777888999, 'samochodowy');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`idPracownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `idPracownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
