-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Paź 2017, 21:28
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
(1, 'Fiat', 'Punto', 2005, 'Granatowy', 'Wynajęty'),
(2, 'Ford', 'Mondeo', 2015, 'Czarny', 'Wolny');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`idSamochodu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `idSamochodu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
