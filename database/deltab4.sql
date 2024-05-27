-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2024 at 03:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deltab4`
--

-- --------------------------------------------------------

--
-- Table structure for table `attracties`
--

CREATE TABLE `attracties` (
  `id` int NOT NULL,
  `naam` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `wachttijd` int DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attracties`
--

INSERT INTO `attracties` (`id`, `naam`, `beschrijving`, `status`, `wachttijd`, `foto`) VALUES
(7, 'Baron', 'Deze achtbaan neemt bezoekers mee op een spannende mijnbouwervaring, met een vrije val van 37,5 meter in een mistige tunnel. De rit biedt zowel adrenaline als prachtige thematische details geïnspireerd door de 19e-eeuwse mijnbouw.', 'Actief', 15, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676849678811287/baron.png?ex=6655fb25&is=6654a9a5&hm=e19015e0e874d7a195b66496338b4ff12f573d16850e9676835291e5fa40828a&'),
(8, 'bronzy', 'lijkt een kleinere attractie te zijn, mogelijk gericht op jongere bezoekers. Het kan een draaimolen of een andere milde rit zijn, met een bronzen thema dat doet denken aan antieke of klassieke stijlen. Deze attractie biedt een charmante en nostalgische ervaring voor de hele familie.', 'Onderhoud', 25, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676868679143434/bronzy.png?ex=6655fb2a&is=6654a9aa&hm=d9ec08aec1e0c160992782794aecac462ff4f0633207ba41c1e2146afb2af1a9&'),
(9, 'draaier', 'Draaier is een klassieke draaimolen die draait en de passagiers in beweging brengt. Vaak voorzien van kleurrijke lichten en muziek, biedt deze attractie een leuke en onderhoudende ervaring. Perfect voor bezoekers van alle leeftijden die genieten van een traditionele kermisattractie', 'Actief', 5, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676873045147678/draaier.png?ex=6655fb2b&is=6654a9ab&hm=e3d47451688a3897af24e646c6836d51a4fdeab3fc580dc6d19f61caccb89fdc&'),
(10, 'Duocoaster', 'Duocoaster is een achtbaan waar twee treinen tegelijkertijd naast elkaar racen, waardoor een spannende competitie ontstaat. Bezoekers kunnen genieten van de sensatie van snelheid en bochten terwijl ze proberen de andere trein te verslaan. Deze unieke ervaring maakt de rit extra spannend en interactief.', 'Gesloten', 0, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676881987408014/duocoaster.png?ex=6655fb2d&is=6654a9ad&hm=d3c78365313ac609cd845d90391bb6a35cda738bd6124bdb9b715b7990f9927a&'),
(11, 'Joris', 'Joris waarbij twee treinen, Vuur en Water, tegen elkaar racen. Bezoekers kunnen kiezen aan welke kant ze willen rijden, wat zorgt voor een interactieve en spannende ritervaring. De attractie is gebaseerd op de legende van Sint Joris en de Draak, en biedt een combinatie van snelheid, competitie en thematische elementen.', 'Actief', 35, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676885401571450/Joris.png?ex=6655fb2e&is=6654a9ae&hm=acaa97ce3b073af006bacc212f2f48aca821a9a1d9c9fb609c23b37b72ff08d2&'),
(12, 'Master of Speed', 'Master of Speed is een high-speed achtbaan die de ultieme adrenalinekick biedt. Met scherpe bochten, snelle versnellingen en mogelijk inversies, geeft deze rit bezoekers het gevoel van pure snelheid. De naam suggereert een ervaring die draait om snelheid en precisie, ideaal voor thrill-seekers.', 'Actief', 15, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676892443938936/MasterOfSpeed.png?ex=6655fb30&is=6654a9b0&hm=78435f92c2da44fae315157c27238044251e2c54f3e5975b53e77cbff90aac91&'),
(13, 'No Gravity', 'No Gravity is een attractie die het gevoel van gewichtloosheid simuleert, vaak door middel van vrije val of centrifugale krachten. Bezoekers kunnen een unieke sensatie ervaren die vergelijkbaar is met zweven of vliegen. Deze rit is perfect voor diegenen die op zoek zijn naar een buitengewone en spannende ervaring.', 'Actief', 20, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676897716043816/NoGravity.png?ex=6655fb31&is=6654a9b1&hm=1a630d3cdbfda197cd1ca2851284fba382d0d0df7741b2f040559dd9bca4d24f&'),
(14, 'Phoenix', 'Phoenix is een spectaculaire achtbaan of thrill ride die vaak inversies en hoge snelheden biedt. De naam doet denken aan een majestueuze vogel die uit de as herrijst, wat kan wijzen op een rit met dramatische stijgingen en dalingen. De ervaring is ontworpen om intens en opwindend te zijn.\r\n\r\n', 'Actief', 15, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676903831605248/phoenix.png?ex=6655fb32&is=6654a9b2&hm=c45982a040f8e1bc6c3e44ff2ee86ff0860b026b67b96916c627ba965ea9ebb9&'),
(15, 'Piranja', 'Pirana bezoekers door turbulente stroomversnellingen en draaikolken voert. Geïnspireerd door de Zuid-Amerikaanse jungle, biedt deze rit een natte en avontuurlijke ervaring. Ideaal voor warme dagen, deze attractie combineert spanning met een verfrissende plons.', 'Onderhoud', 0, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676916816908368/piranja.png?ex=6655fb35&is=6654a9b5&hm=86caf7598997035d64666e6d0727dd23859ed2d5862e34cc3c7ed58755fd6e38&'),
(16, 'Python', 'Python, bekend om zijn dubbele looping en kurkentrekker. Deze iconische rit heeft sinds de opening in 1981 vele bezoekers vermaakt met zijn snelheid en inversies. De Python biedt een klassieke achtbaanervaring die zowel nostalgisch als opwindend is.', 'Actief', 25, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676922407911485/python.png?ex=6655fb37&is=6654a9b7&hm=6af045713c1f68704f3f0885d0302956ebe20df100628842916eda9eb486bd58&'),
(17, 'Reuzenrad', 'Reuzenrad is een groot observatiewiel dat bezoekers een prachtig uitzicht biedt over het attractiepark en de omgeving. Perfect voor een rustiger ritje, deze attractie biedt een panoramisch perspectief en is ideaal voor alle leeftijden. Het reuzenrad is een iconisch onderdeel van elk pretpark en biedt een ontspannende pauze van de spannende ritten.', 'Actief', 5, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676927663378462/reuzenrad.png?ex=6655fb38&is=6654a9b8&hm=2e3ad000542fe8a249f0d244b18f4cb375b70ca035a1d8d48303544aef9a0be8&'),
(18, 'Spinner', 'Spinner is een spannende attractie waarbij de voertuigen rondom een centraal punt draaien en vaak ook om hun eigen as roteren. Deze rit biedt een mix van snelheid en draaiende bewegingen, wat zorgt voor een duizelingwekkende en leuke ervaring. Ideaal voor bezoekers die houden van snelle, ronddraaiende avonturen.', 'Actief', 10, 'https://cdn.discordapp.com/attachments/1244585797114396722/1244676932474241104/spinner.png?ex=6655fb39&is=6654a9b9&hm=c6c3440506e7923c9b924bb78b4c6896a9ba92e217fc4bfe9186115121d60248&');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`) VALUES
(1, 'admin', 'admin', 1),
(2, 'Rens', '$2y$10$wmii4I0J60fXdgTvRKpucuQgysKiquG12mwOFaaXFuavdQcJguX9W', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attracties`
--
ALTER TABLE `attracties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attracties`
--
ALTER TABLE `attracties`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
