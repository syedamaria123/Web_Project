-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 06:29 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `t_ID` int(11) NOT NULL,
  `t_Name` varchar(50) NOT NULL,
  `t_Description` varchar(300) NOT NULL,
  `t_Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`t_ID`, `t_Name`, `t_Description`, `t_Image`) VALUES
(13, 'Lahore Fort', 'The Lahore Fort Punjabi, Persian, Urdu: Ø´Ø§ÛÛŒ Ù‚Ù„Ø¹Û, romanized: ShÄhÄ« QilÄ, lit.â€‰Royal Fort is a citadel in the city of Lahore in Punjab, Pakistan. The fortress is located at the northern end of Walled city of Lahore and spreads over an area greater than 20 hectares (49 acres). It contain', 'Im3.jpg'),
(14, 'Badshahi Mosque', 'The Badshahi Mosque Urdu, Punjabi: Ø¨Ø§Ø¯Ø´Ø§ÛÛŒ Ù…Ø³Ø¬Ø¯ is an iconic Mughal-era congregational mosque in Lahore, capital of the Pakistani province of Punjab. The mosque is located opposite of Lahore Fort the outskirts of the Walled City of Lahore, and is widely considered to be one of Lahore most', 'Im1.jpg'),
(15, 'Mohenjo daro', 'Mohenjo-daro  Sindhi: Ù…ÙˆÙ‡Ù† Ø¬Ùˆ Ø¯Ú™Ùˆâ€Ž, meaning Mound of the Dead Men and sometimes lit.â€‰Mound of Mohan in Sindhi; Urdu: Ù…ÙˆØ¦Ù† Ø¬Ùˆ Ø¯Ú‘Ùˆ  is an archaeological site in the province of Sindh, Pakistan. Built around 2500 BCE, it was the largest settlement of the ancient Indus Valley Civil', 'Im2.jpg'),
(16, 'Ranikot Fort', 'Ranikot Fort Sindhi: Ø±Ù†ÙŠ ÚªÙˆÙ½ Ù‚Ù„Ø¹Ùˆâ€Ž; also known as Rannikot is a historical Talpur fort near Sann, Jamshoro District, Sindh. in Pakistan. Ranikot Fort is also known as The Great Wall of Sindh (Sindhi: Ø³Ù†ÚŒ Ø¬ÙŠ Ø¹Ø¸ÙŠÙ… Ø¯ÙŠÙˆØ§Ø±â€Ž) and is believed to be the worlds largest fort, with ', 'Im4.jpg'),
(17, 'Noor Mahal', 'The Noor Mahal Urdu: Ù†ÙˆØ± Ù…Ø­Ù„ is a Pakistan Army-owned palace in Bahawalpur, Punjab, Pakistan. It was built in 1872 like an Italian chateau on neoclassical lines, at a time when modernism had set in. It belonged to the Nawabs of Bahawalpur princely state, during British Raj. There are various s', 'Im8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`t_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
