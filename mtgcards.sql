-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 03:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtgcards`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `ID` varchar(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `CMC` int(11) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `color_id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `set_id` varchar(4) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`ID`, `Name`, `CMC`, `Description`, `color_id`, `picture`, `set_id`, `type_id`) VALUES
('001VOW', 'Adamant Will', 2, 'Target creature gets +2/+2 and gains indestructible until end of turn.', 1, 'pictures/001VOW.png', 'VOW', 3),
('002VOW', 'Angelic Quartermaster', 5, 'Flying\r\nWhen Angelic Quartermaster enters the battlefield, put a +1/+1 counter on each of up to two other target creatures.', 1, 'pictures/002VOW.png', 'VOW', 2),
('003VOW', 'Arm the Cathars', 3, 'Until end of turn, target creature gets +3/+3, up to one other target creature gets +2/+2, and up to one other target creature gets +1/+1. Those creatures gain vigilance until end of turn.', 1, 'pictures/003VOW.png', 'VOW', 4),
('004LTR', 'Boromir, Warden of the Tower', 3, '\r\nVigilance\r\nWhenever an opponent casts a spell, if no mana was spent to cast it, counter that spell.\r\nSacrifice Boromir, Warden of the Tower: Creatures you control gain indestructible until end of turn. The Ring tempts you.', 1, 'pictures/004LTR.png', 'LTR', 2),
('004VOW', 'Bride\'s Gown', 2, 'Equipped creature gets +2/+0. It gets an additional +0/+2 and has first strike as long as an Equipment named Groom\'s Finery is attached to a creature you control.\r\n                                                                                                            Equip (2)', 1, 'pictures/004VOW.png', 'VOW', 5),
('005VOW', 'By Invitation Only', 5, 'Chose a number between 0 and 13. Each player savrifices that many creatures.', 1, 'pictures/005VOW.png', 'VOW', 4),
('006VOW', 'Cemetery Protector', 4, 'Flash\r\n                                                                                                            When Cemetery Protector enters the battlefield, exile a card from a grafeyard. Whenever you play a land or cast a spell, if it shares a card type with the exiled card create a 1/1 white', 1, 'pictures/006VOW.png', 'VOW', 2),
('007VOW', 'Circle of Confinement', 2, 'When Circle of Confinement enters the battlefield, exile target creature an opponent controls with mana value 3 or less until Circle of Confinement leaves the battlefield.\r\nWhenever an opponent casts a Vampire spell with the same name as a card exiled with Circle of Confinement, you gain 2 life.', 1, 'pictures/007VOW.png', 'VOW', 6),
('017LTR', 'Forge Anew', 3, 'When Forge Anew enters the battlefield, return target Equipment card from your graveyard to the battlefield.\r\nAs long as it\'s your turn, you may activate equip abilities any time you could cast an instant.\r\nYou may pay 0 rather than pay the equip cost of the first equip ability you activate during e', 1, 'pictures/017LTR.png', 'LTR', 6),
('039LTR', 'Arwen\'s Gift', 4, 'This spell costs 1 less to cast if you control two or more legendary creatures.\r\nScry 2, then draw two cards.', 2, 'pictures/039LTR.png', 'LTR', 4),
('047VOW', 'Alchemist\'s Retrieval', 1, 'Cleave (1U) Return target nonland permanent [you control] to it\'s owner\'s hand', 2, 'pictures/047VOW.png', 'VOW', 3),
('050VOW', 'Cemetery Illuminator', 3, 'Flying\r\nWhenever Cemetery Illuminator enters the battlefield or attacks, exile a card from a graveyard.\r\nYou may look at the top card of your library any time.\r\nOnce each turn, you may cast a spell from the top of your library if it shares a card type with a card exiled with Cemetery Illuminator.', 2, 'pictures/050VOW.png', 'VOW', 2),
('053VOW', 'Consuming Tide', 4, 'Each player chooses a nonland permanent they control. Return all nonland permanents not chosen this way to their owners\' hands. Then you draw a card for each opponent who has more cards in their hand than you.', 2, 'pictures/053VOW.png', 'VOW', 4),
('054VOW', 'Cradle of Safety', 2, '\r\nFlash\r\nEnchant creature you control\r\nWhen Cradle of Safety enters the battlefield, enchanted creature gains hexproof until end of turn. \r\nEnchanted creature gets +1/+1.', 2, 'pictures/054VOW.png', 'VOW', 6),
('092VOW', 'Aim for the Head', 3, 'Choose one —\r\n• Exile target Zombie.\r\n• Target opponent exiles two cards from their hand.', 3, 'pictures/092VOW.png', 'VOW', 4),
('093VOW', 'Archghoul of Traben', 3, 'Whenever Archghoul of Thraben or another Zombie you control dies, look at the top card of your library. If it\'s a Zombie card, you may reveal it and put it into your hand. If you don\'t put the card into your hand, you may put it into your graveyard.', 3, 'pictures/093VOW.png', 'VOW', 2),
('094VOW', 'Bleed Dry', 4, 'Target creature gets -13/-13 until end of turn. If that creature would die this turn, exile it instead.', 3, 'pictures/094VOW.png', 'VOW', 3),
('095VOW', 'Blood Fountain', 4, 'When Blood Fountain enters the battlefield, create a Blood token.\r\n3Black, Tap, Sacrifice Blood Fountain: Return up to two target creature cards from your graveyard to your hand.', 3, 'pictures/095VOW.png', 'VOW', 5),
('103LTR', 'Orcish Bowmasters', 2, 'Flash\r\nWhen Orcish Bowmasters enters the battlefield and whenever an opponent draws a card except the first one they draw in each of their draw steps, Orcish Bowmasters deals 1 damage to any target. Then amass Orcs 1.', 3, 'pictures/103LTR.png', 'LTR', 2),
('118LTR', 'Cast into the Fire', 2, 'Choose one —\r\n• Cast into the Fire deals 1 damage to each of up to two target creatures.\r\n• Exile target artifact.', 4, 'pictures/118LTR.png', 'LTR', 3),
('131VOW', 'Sorin the Mirthless', 4, '+1: Look at the top card of your library. You may reveal that card and put it into your hand. If you do, you lose life equal to its mana value.\r\n−2: Create a 2/3 black Vampire creature token with flying and lifelink.\r\n−7: Sorin the Mirthless deals 13 damage to any target. You gain 13 life.', 3, 'pictures/131VOW.png', 'VOW', 7),
('139VOW', 'Abrade', 2, 'Choose one —\r\n• Abrade deals 3 damage to target creature.\r\n• Destroy target artifact.', 4, 'pictures/139VOW.png', 'VOW', 3),
('142VOW', 'Ancestral Anger', 1, '\r\nTarget creature gains trample and gets +X/+0 until end of turn, where X is 1 plus the number of cards named Ancestral Anger in your graveyard.\r\nDraw a card.', 4, 'pictures/142VOW.png', 'VOW', 4),
('149VOW', 'Chandra, Dressed to Kill', 3, '+1: Add Red. Chandra, Dressed to Kill deals 1 damage to up to one target player or planeswalker.\r\n+1: Exile the top card of your library. If it\'s red, you may cast it this turn.\r\n−7: Exile the top five cards of your library. You may cast red spells from among them this turn. You get an emblem with \"', 4, 'pictures/149VOW.png', 'VOW', 7),
('165VOW', 'Kessig Wolfrider', 1, 'Menace\r\n2Red, Tap, Exile three cards from your graveyard: Create a 3/2 red Wolf creature token.', 4, 'pictures/165VOW.png', 'VOW', 2),
('174LTR', 'Long List of the Ents', 1, 'I, II, III, IV, V, VI — Note a creature type that hasn\'t been noted for Long List of the Ents. When you cast your next creature spell of that type this turn, that creature enters the battlefield with an additional +1/+1 counter on it.', 5, 'pictures/174LTR.png', 'LTR', 6),
('185VOW', 'Apprentice Sharpshooter', 3, 'Reach\r\nTraining', 5, 'pictures/185VOW.png', 'VOW', 2),
('190VOW', 'Cartographer\'s Survey', 4, 'Look at the top seven cards of your library. Put up to two land cards from among them onto the battlefield tapped. Put the rest on the bottom of your library in a random order.', 5, 'pictures/190VOW.png', 'VOW', 4),
('194VOW', 'Crushing Canopy', 3, 'Choose one —\r\n• Destroy target creature with flying.\r\n• Destroy target enchantment.', 5, 'pictures/194VOW.png', 'VOW', 3),
('199LTR', 'Doors of Durin', 5, '\r\nWhenever you attack, scry 2, then you may reveal the top card of your library. If it\'s a creature card, put it onto the battlefield tapped and attacking. Until your next turn, it gains trample if you control a Dwarf and hexproof if you control an Elf.', 7, 'pictures/199LTR.png', 'LTR', 5),
('207VOW', 'Laid to Rest', 4, 'Whenever a Human you control dies, draw a card.\r\nWhenever a creature you control with a +1/+1 counter on it dies, you gain 2 life.', 5, 'pictures/207VOW.png', 'VOW', 6),
('232VOW', 'Bloodtithe Harvester', 2, 'When Bloodtithe Harvester enters the battlefield, create a Blood token. \r\nTap, Sacrifice Bloodtithe Harvester: Target creature gets -X/-X until end of turn, where X is twice the number of Blood tokens you control. Activate only as a sorcery.', 7, 'pictures/232VOW.png', 'VOW', 2),
('240VOW', 'Kaya, Geist Hunter', 3, '+1: Creatures you control gain deathtouch until end of turn. Put a +1/+1 counter on up to one target creature token you control.\r\n−2: Until end of turn, if one or more tokens would be created under your control, twice that many of those tokens are created instead.\r\n−6: Exile all cards from all grave', 7, 'pictures/240VOW.png', 'VOW', 7),
('243LTR', 'Lembas', 2, 'When Lembas enters the battlefield, scry 1, then draw a card.\r\n2, Tap, Sacrifice Lembas: You gain 3 life.\r\nWhen Lembas is put into a graveyard from the battlefield, its owner shuffles it into their library.', 6, 'pictures/243LTR.png', 'LTR', 5),
('252VOW', 'Blood Servitor', 3, 'When Blood Servitor enters the battlefield, create a Blood token.', 6, 'pictures/252VOW.png', 'VOW', 5),
('257VOW', 'Honored Heirloom', 3, '\r\nTap: Add one mana of any color.\r\n2, Tap: Exile target card from a graveyard.', 6, 'pictures/257VOW.png', 'VOW', 5),
('258LTR', 'Mount Doom', 0, '\r\nTap, Pay 1 life: Add Black or Red.\r\n1BlackRed, Tap: Mount Doom deals 1 damage to each opponent.\r\n5BlackRed, Tap, Sacrifice Mount Doom and a legendary artifact: Choose up to two creatures, then destroy the rest. Activate only as a sorcery.', 6, 'pictures/258LTR.png', 'LTR', 1),
('262VOW', 'DreamrootCascade', 0, 'Dreamroot Cascade enters the battlefield tapped unless you control two or more other lands.\r\nTap: Add Green or Blue.', 6, 'pictures/262VOW.png', 'VOW', 1),
('263VOW', 'Evolving Wilds', 0, '\r\nTap, Sacrifice Evolving Wilds: Search your library for a basic land card, put it onto the battlefield tapped, then shuffle.', 6, 'pictures/263VOW.png', 'VOW', 1),
('test', 'test', 54, 'desc', 2, '', 'NULL', 2);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `Color` varchar(10) NOT NULL,
  `color_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`Color`, `color_id`) VALUES
('White', 1),
('Blue', 2),
('Black', 3),
('Red', 4),
('Green', 5),
('Colorless', 6),
('MultiColor', 7);

-- --------------------------------------------------------

--
-- Table structure for table `mtg-sets`
--

CREATE TABLE `mtg-sets` (
  `set_id` varchar(4) NOT NULL,
  `mtg_set` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mtg-sets`
--

INSERT INTO `mtg-sets` (`set_id`, `mtg_set`) VALUES
('LTR', 'The Lord of the Rings: Tales o'),
('VOW', 'Innistrad: Crimson Vow');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type`) VALUES
(1, 'Land'),
(2, 'Creature'),
(3, 'Instant'),
(4, 'Sorcery'),
(5, 'Artifact'),
(6, 'Enchantment'),
(7, 'Plainswalker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `colors` (`color_id`) USING BTREE,
  ADD KEY `MTG-Set` (`set_id`) USING BTREE,
  ADD KEY `type` (`type_id`) USING BTREE;

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `mtg-sets`
--
ALTER TABLE `mtg-sets`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
