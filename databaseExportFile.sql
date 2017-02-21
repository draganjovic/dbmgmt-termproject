-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 07:32 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatmessage`
--

CREATE TABLE `chatmessage` (
  `id` int(11) NOT NULL,
  `username` char(20) DEFAULT NULL,
  `message` char(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` char(20) NOT NULL,
  `accPassword` char(20) NOT NULL,
  `favoriteTitle` char(50) DEFAULT NULL,
  `favoritePlatform` char(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videogames`
--

CREATE TABLE `videogames` (
  `title` char(50) NOT NULL,
  `gameplatform` char(30) NOT NULL,
  `rating` char(30) DEFAULT NULL,
  `releasedate` char(10) DEFAULT NULL,
  `image` blob,
  `genre` char(20) DEFAULT NULL,
  `company` char(30) DEFAULT NULL,
  `summary` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videogames`
--

INSERT INTO `videogames` (`title`, `gameplatform`, `rating`, `releasedate`, `image`, `genre`, `company`, `summary`) VALUES
('Unravel', 'Playstation 4', 'Teen', '02/09/2016', 0x687474703a2f2f63646e2e63676d61676f6e6c696e652e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031362f30352f65612d657874656e64732d706172746e6572736869702d776974682d646576656c6f706572732d6f662d756e726176656c2d323030783230302e6a7067, 'Open World', 'EA', 'You\'ll take on the role of Yarny, a cutesy doll created with yarn, and you\'re tasked with playing through a hyper realistic world, solving puzzles along the way using unique mechanics only made possib'),
('Firewatch', 'Playstation 4', 'Teen', '02/09/2016', 0x687474703a2f2f692e696d6775722e636f6d2f444232735a59542e6a7067, 'Adventure', 'Panic Inc', 'The game places you in the role of Henry, a man who leaves his life behind to work as a fire lookout in the Wyoming wilderness. Your job is to look for signs of fire, and keep the wilderness safe.'),
('Dying Light: The Following Expansion', 'Playstation 4', 'Teen', '02/09/2016', 0x687474703a2f2f7777772e746563686e6f62756666616c6f2e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031352f30382f4479696e672d4c696768742d5468652d466f6c6c6f77696e672d312d323030783230302e6a7067, 'Open World', 'WB Entertainment', 'Players are able to drive a buggy, smashing through zombies in their path from mission to mission.'),
('Gravity Rush Remastered', 'Playstation 4', 'Everyone', '02/02/2016', 0x687474703a2f2f7777772e746563686e6f62756666616c6f2e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031352f30392f477261766974792d527573682d312d323030783230302e6a7067, 'Shooter', 'Sony', 'In the game, players take control of Kat, a strong female character who has gravity-altering abilities that will help her protect her future.'),
('Not a Hero', 'Playstation 4', 'Everyone', '02/02/2016', 0x68747470733a2f2f73657276696365732e74656772617a6f6e652e636f6d2f73697465732f64656661756c742f66696c65732f6170702d69636f6e2f6e6f74616865726f5f61707069636f6e2e706e67, '2D Shooter', 'Devolver Digitial', 'It follows an anthropomorphic purple rabbit BunnyLord as he travels back in time from the 2048 to become mayor in an effort to save the world.'),
('The Witness', 'Playstation 4', 'Everyone', '01/26/2016', 0x687474703a2f2f7777772e746563686e6f62756666616c6f2e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031342f30352f5468652d5769746e6573732d352d323030783230302e6a7067, 'Puzzle', 'Thekla', 'It\'s set in a gorgeous, stylized world, and it\'s a puzzle game that will definitely have you scratching your head.'),
('The Division', 'Xbox One', 'Mature', '03/08/2016', 0x68747470733a2f2f7a6f6e65312d7667752e6e6574646e612d73736c2e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031352f30372f5468652d4469766973696f6e2d323030783230302e6a7067, 'Shooter', 'Ubisoft', 'It truly has an MMO feel, thanks to the upgrade mechanics, and its skill and ability trees.'),
('Far Cry Primal', 'Xbox One', 'Mature', '02/23/2016', 0x687474703a2f2f626c6f67732d696d616765732e666f726265732e636f6d2f696e73657274636f696e2f66696c65732f323031362f30322f6661722d637279382d31323030783637352e6a70673f77696474683d323030266865696768743d323030, 'Open World', 'Ubisoft', 'Taking down mammoths with spears is as satisfying as anything offered in the previous games, and hunting and scavenging for crafting mats is an all-around great experience.'),
('Uncharted 4', 'Playstation 4', 'Mature', '05/10/2016', NULL, 'Shooter', 'Sony', 'Uncharted 4 hits all of the right notes, with its incredible visuals and massive set pieces leaving players in awe.'),
('Ratchet and Clank', 'Playstation 4', 'Everyone', '04/12/2016', NULL, 'Adventure', 'Sony', 'Ratchet and Clank does everything right as it has impressive graphics, incredibly cool guns, and a meta story that is genuinely funny.'),
('Madden NFL 17', 'Xbox One', 'Teen', '08/23/2016', NULL, 'Sports', 'EA', 'We\'d fully understand if you\'re burnt out on the Madden NFL franchise and sports games in general, as the yearly release schedule can certainly take its toll. But there\'s still an undeniable quality s'),
('Deus Ex: Mankind Divided', 'Xbox One', 'Teen', '08/23/2016', NULL, 'Open World', 'Square Enix', 'The game brings a major revamp to protagonist Adam Jensen\'s augmented abilities, placing him in a cybernetic playground that feels entirely new, although it\'s a longstanding franchise that we\'ve playe'),
('Dark Souls 3', 'Playstation 4', 'Mature', '03/24/2016', NULL, 'Shooter', 'Bandai Namco', 'The action role-playing game is second to none in its class, and its brutal gameplay will have you begging for mercy.'),
('DOOM', 'PC', 'Mature', '05/13/2016', NULL, 'Shooter', 'Bethesda', 'DOOM brings back the frenetic multiplayer that we all loved, with Bethesda giving the game a formidable reboot earlier this year.'),
('King of Fighters XIV', 'Playstation 4', 'Teen', '08/23/2016', NULL, 'Fighting', 'Atlus', 'The game is filled with deep mechanics that hardcore players will love.'),
('F1 2016', 'Playstation 4', 'Teen', '08/19/2016', NULL, 'Racing', 'Codemasters', 'The new career mode is absolutely brilliant, and the game breathes new life into the F1 genre.'),
('Guilty Gear Xrd -REVELATOR-', 'Playstation 4', 'Teen', '06/07/2016', NULL, 'Fighting', 'Aksys Games', 'It brings new characters to the game with new mechanics and story, and it has one of the best story modes we\'ve seen in a fighting game to date. It also helps that the game runs at a buttery smooth 60'),
('101 Ways To Die', 'Xbox One', 'Mature', '03/18/2016', NULL, 'Puzzle', 'Nicalis', 'Puzzle game that all gamers will enjoy.'),
('Among the Sleep', 'Xbox One', 'Mature', '06/03/2016', NULL, 'Adventure', 'Krillbite Studio', 'Among the Sleep is a first-person horror adventure game.'),
('Hard Reset Redux', 'Xbox One', 'Mature', '06/03/2016', NULL, 'Shooter', 'Flying Wild Hog', 'The various stages have secret areas with hidden pick ups such as health and ammunition. The environments are designed similarly, as there are explosive barrels and various vending machines outfitted '),
('Forza Horizon 3', 'Xbox One', 'Mature', '09/27/2016', NULL, 'Racing', 'Microsoft Studios', 'A total of 350 cars are available to players at launch – the most amount of cars to be featured in a Horizon game as of yet.'),
('Fifa 17', 'Xbox One', 'Teen', '09/27/2016', NULL, 'Sports', 'EA', 'The new features in FIFA 17 include new attacking techniques, physical player overhaul, active intelligence system and set piece rewrite.'),
('Earthlock: Festival of Magic', 'Xbox One', 'Teen', '09/01/2016', NULL, 'Open World', 'Snowcastle Games', 'The games story takes place in the world of Umbra, where a cataclysmic event occurs that stops the planet from spinning.'),
('Gears of War 4', 'Xbox One', 'Mature', '10/11/2016', NULL, 'Shooter', 'Microsoft Studios', 'Gears of War 4 takes place 25 years after the Imulsion Countermeasure weapon destroyed all Imulsion on the planet Sera, taking the Locust and the Lambent with them as well.'),
('Dead Island', 'Xbox One', 'Mature', '05/31/2016', NULL, 'Shooter', 'Techland', 'Dead Island features an apparent open world roaming, divided by relatively large areas, and played from a first-person perspective.'),
('Street Fighter V', 'Playstation 4', 'Teen', '02/16/2016', 0x687474703a2f2f77692d696d616765732e636f6e646563646e2e6e65742f696d6167652f6e51656e79655a567934452f63726f702f3230302f7371756172652f6d6964646c65, 'Fighting', 'Capcom', 'It brings new characters into the Street Fighter franchise, each of which has their own unique style of fighting.'),
('Lego Marvel\'s Avengers', 'Playstation 4', 'Everyone', '01/26/2016', 0x687474703a2f2f63646e2e63676d61676f6e6c696e652e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031362f30322f6c65676f2d6d617276656c2d6176656e676572732d6865616465722d323030783230302e6a7067, 'Lego', 'WB Interactive', 'The game contains a massive roster filled with Marvel superheroes, and some areas in the game require two specific characters to progress any further.'),
('Overwatch', 'Playstation 4', 'Everybody', '05/24/2016', 0x68747470733a2f2f7777772e667572696f75737061756c2e636f6d2f6f76657277617463682f696d616765732f6f772d73796d626f6c2e676966, 'Shooter', 'Blizzard', 'Overwatch is everything but bland, and it\'s the game\'s unique flavor that makes it so appealing.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatmessage`
--
ALTER TABLE `chatmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `favoriteTitle` (`favoriteTitle`,`favoritePlatform`);

--
-- Indexes for table `videogames`
--
ALTER TABLE `videogames`
  ADD PRIMARY KEY (`title`,`gameplatform`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatmessage`
--
ALTER TABLE `chatmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
