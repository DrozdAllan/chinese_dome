-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage des données de la table chinese_dome.zodiacs : ~12 rows (environ)
/*!40000 ALTER TABLE `zodiacs` DISABLE KEYS */;
INSERT INTO `zodiacs` (`id`, `name`, `personality`, `lucky_numbers`, `lucky_colors`, `lucky_flowers`, `pic`) VALUES
	(1, 'Rooster', 'observant, hardworking, courageous', '5, 7, 8', 'gold, brown, yellow', 'gladiola, cocksomb', 'rooster'),
	(2, 'Dog', 'lovely, honest, prudent', '3, 4, 9', 'red, green, purple', 'rose, cymbidium', 'dog'),
	(3, 'Tiger', 'quick-witted, resourceful, versatile, kind', '1, 3, 4', 'blue, grey, orange', 'yellow lily, cineraria', 'tiger'),
	(4, 'Rat', 'quick-witted, resourceful, versatile, kind', '2, 3', 'blue, gold, green', 'lily, african violet, lily of the valley', 'rat'),
	(5, 'Ox', 'diligent, dependable, strong, determined', '1, 4', 'white, yellow, green', 'tulip, peach blossom', 'ox'),
	(6, 'Rabbit', 'quiet, elegant, kind, responsible', '3, 4, 6', 'red, pink, purple, blue', 'plantain lily, jasmine', 'rabbit'),
	(7, 'Dragon', 'confident, intelligent, enthusiastic', '1, 6, 7', 'gold, silver, grayish white', 'bleeding-heart vine, dragon flowers', 'dragon'),
	(8, 'Snake', 'enigmatic, intelligent, wise', '2, 8, 9', 'black, red, yellow', 'orchid, cactus', 'snake'),
	(9, 'Horse', 'animated, active, energetic', '2, 3, 7', 'yellow, green', 'calla lily, jasmine', 'horse'),
	(10, 'Goat', 'calm, gentle, sympathetic', '2, 7', 'brown, red, purple', 'carnation, primrose', 'goat'),
	(11, 'Monkey', 'sharp, smart, curious', '4, 9', 'white, blue, gold', 'chrysanthemum, crepe myrtle', 'monkey'),
	(12, 'Pig', 'compassionate, generous, diligent', '2, 5, 8', 'yellow, gray, brown, gold', 'hydrangea, daisy', 'pig');
/*!40000 ALTER TABLE `zodiacs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
