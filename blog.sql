-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2013 at 06:04 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `serverside`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date`, `title`, `content`) VALUES
(13, '2013-10-01 22:42:05', 'This is the brand new post', 'I promised a brand new post and here it is.'),
(14, '2013-10-02 00:32:25', 'This better be longer than 200 characters', 'To get ready for the new Rambo movie, actor Sylvester Stallone, 61, has stated publicly that he took human growth hormone and testosterone, substances that supposedly promote a lean, muscular body.\r\nBut doctors and scientists who study these potent hormones say Stallone may be playing with more firepower than even Rambo can handle.\r\n\r\nSteroids such as testosterone have long been used by athletes to bulk up, but the use of synthetic growth hormones for that purpose by such a high-profile figure has raised alarms in the medical community.\r\n\r\n"These are not yet ready for prime time," says Marc Blackman, associate chief of staff for research at the Washington, D.C., VA Medical Center, who has conducted many of the definitive studies on growth hormone and aging. "This is still research; it is not to be recommended for clinical practice. And neither the long-term effectiveness nor the long-term safety have been shown."'),
(15, '2013-10-02 00:33:27', 'Tales of Vesperia Features', 'As in previous entries, Tales of Vesperia features an arena where the player can battle a number of enemies for prizes. In the arena, one chosen character will have to challenge two hundred monsters. After enough monsters are defeated, the battle with the next contender is unlocked. The 4 contenders are: Dhaos, the final boss of Tales of Phantasia; Shizel, from Tales of Eternia; Barbatos, from Tales of Destiny 2; and Kratos Aurion, a playable character in Tales of Symphonia.\r\nTales of Vesperia also includes character costumes, which are dependent on the various titles that characters have obtained throughout the game. Equipping various accessories also affects the wearer''s outfit. Tales of Vesperia also includes skits, short optional conversations that further character or plot development. Unlike the English releases of Tales of Symphonia and Tales of the Abyss, skits in the English release of Tales of Vesperia are fully voiced by the English voice actors, which is also the case in Tales of Legendia and Tales of Symphonia: Dawn of the New World.'),
(16, '2013-10-02 00:34:00', 'Battery licking', 'Don''t do it. It is dangerous.'),
(17, '2013-10-02 00:34:38', 'I wish I paid more attention in class', 'This is another post.'),
(18, '2013-10-02 00:34:53', 'I think this is the 6th post', 'Only time will tell.\r\nEDIT - This is an edit.'),
(21, '2013-10-02 02:30:36', 'Ok lets add this and then try and edit', 'Edit by putting no nothings in!'),
(22, '2013-10-02 03:55:56', 'This is testing the new date times garbage', 'I asked a girl out to lunch during term 2. She had a boyfriend. My friends ask me if I was sad. I don''t get sad. I get even.'),
(23, '2013-10-02 04:26:20', 'Medaka Box has a great OST!', 'I love Katou Tatsuya''s work! Horizon In The Middle of Nowhere''s OST was amazing too but Dakaka Katte!! from the Medaka OST is worth a listen.\r\nEDIT - I am editing this.'),
(26, '2013-10-03 21:33:20', 'Changed the theme of the blog', 'BSOD flavurrrr'),
(28, '2013-10-04 16:01:02', 'New post before I submit this', 'I am filling this with content. Lots of it. The independent gaming scene has been growing by leaps of bounds, so it makes sense that the events designed to celebrate it are keeping step. This weekend''s IndieCade Festival in Culver City, California (on the West side of Los Angeles) is the largest in the event''s seven-year history. Speaking with GamesIndustry International, IndieCade founder and CEO Stephanie Barish said the event is expecting to draw more than 5,000 people to Culver City, which has a population around 39,000.\r\n\r\n"We''re definitely starting to burst at the seams," Barish said. "As you can see this year, we''re really taking up a lot of the city as developers converge from all over the world."\r\n\r\nMuch like the indie scene it promotes, the show has also been getting increased attention from the mainstream gaming industry of late. Sony has been a primary sponsor of the event for years, but the 2013 show sees Nintendo chip in for the first time, with Microsoft returning to the list after taking 2012 off. Activision is also on the list of sponsors, as well as Epic Games (for the Unreal Engine), Unity, and 20 more companies. Barish said some of the event''s more recent sponsors saw how Sony benefitted from its overtures to independent developers and have been following suit.\r\n\r\n"[Sony has] put four or five years of effort now into the indie development sector and it''s really paid off for them," Barish said. "Developers are really interested in meeting with them. They see there are possibilities, that Sony has proven [indies] can do well and are treated well. More and more the fact that independent games are interesting to a broader public is becoming apparent to the larger publishers. As well, there''s a huge creative energy and force and momentum coming out of the independent sector, and they don''t want to not be part of the future."');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
