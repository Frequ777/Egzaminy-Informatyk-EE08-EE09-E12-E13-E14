-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lis 2020, 12:56
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id_autora` int(11) DEFAULT NULL,
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `autor`
--

INSERT INTO `autor` (`id_autora`, `imie`, `nazwisko`) VALUES
(1, 'Adam', 'Mickiewicz'),
(2, 'Katarzyna', 'Michalak'),
(3, 'Jojo', 'Moyes'),
(4, 'Remigiusz', 'Mroz'),
(5, 'Fiodor', 'Dostojewski'),
(6, 'Agnieszka', 'Krawczyk'),
(7, 'Danielle', 'Steel');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czytelnik`
--

CREATE TABLE `czytelnik` (
  `id_czytelnika` int(11) DEFAULT NULL,
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL,
  `miejscowosc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `czytelnik`
--

INSERT INTO `czytelnik` (`id_czytelnika`, `imie`, `nazwisko`, `miejscowosc`) VALUES
(1, 'Anna', 'Kowalik', 'Ciechanow'),
(2, 'Karol', 'Brakon', 'Ciechanow'),
(3, 'Tomasz', 'Halicki', 'Przasnysz'),
(4, 'Daniela', 'Strzegon', 'Golotczyzna'),
(5, 'Piotr', 'Olk', 'Ciechanow');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id_ksiazki` int(11) DEFAULT NULL,
  `tytuł` text DEFAULT NULL,
  `id_autora` int(11) DEFAULT NULL,
  `id_wydawnictwa` int(11) DEFAULT NULL,
  `rok_wydania` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id_ksiazki`, `tytuł`, `id_autora`, `id_wydawnictwa`, `rok_wydania`) VALUES
(1, 'Pan Tadeusz', 1, 1, 2010),
(2, 'Dziady', 1, 1, 2011),
(3, 'Pisarka', 2, 2, 2018),
(4, 'Kasacja', 4, 5, 2017),
(5, 'Ekstradycja', 4, 5, 2016),
(6, 'Zbrodnia i kara', 5, 1, 2007),
(7, 'Siostry', 6, 2, 2018),
(8, 'Apartament', 7, 4, 2018),
(9, 'Srebrna Zatoka', 3, 4, 2020),
(10, 'Przyjaciele i rywale', 6, 2, 2017);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydawnictwo`
--

CREATE TABLE `wydawnictwo` (
  `id_wydawnictwa` int(11) DEFAULT NULL,
  `nazwa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wydawnictwo`
--

INSERT INTO `wydawnictwo` (`id_wydawnictwa`, `nazwa`) VALUES
(1, 'Greg'),
(2, 'Fillia'),
(3, 'Albatros'),
(4, 'Miedzy Slowami'),
(5, 'Czwarta Strona');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `id_wypozyczenia` int(11) DEFAULT NULL,
  `data_wypozyczenia` date DEFAULT NULL,
  `id_ksiazki` int(11) DEFAULT NULL,
  `id_czytelnika` int(11) DEFAULT NULL,
  `data_zwrotu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`id_wypozyczenia`, `data_wypozyczenia`, `id_ksiazki`, `id_czytelnika`, `data_zwrotu`) VALUES
(1, '2020-01-13', 3, 2, '2020-01-23'),
(2, '2020-01-13', 4, 2, '2020-01-23'),
(3, '2020-01-14', 5, 5, '2020-02-01'),
(4, '2020-01-14', 1, 5, '2020-02-01'),
(5, '2020-02-15', 2, 4, '2020-03-10'),
(6, '2020-03-18', 1, 1, '2020-03-30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
