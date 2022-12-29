-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandals`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpandal`
--

CREATE TABLE `addpandal` (
  `id` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `elink` varchar(100) NOT NULL,
  `mlink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpandal`
--

INSERT INTO `addpandal` (`id`, `title`, `photo`, `des`, `state`, `elink`, `mlink`) VALUES
(9, 'Shree Siddhivinayak Temple, Mumbai', 'Images/OIP.jfif', 'This majestic temple is counted among India’s most popular Ganapati temples, visited by a large number of tourists every day, especially during Ganesh Chaturthi. It was built by contractor Laxman Vithu Patil for a childless woman in a belief that it would', 'Maharastra', 'https://www.bing.com/maps/embed?h=400&w=500&cp=18.999315900702~72.83540725708008&lvl=13&typ=d&sty=r&', 'https://www.bing.com/maps?q=Siddhivinayak++Prabhadevi&qs=n&form=QBRE&sp=-1&pq=siddhivinayak+temple+p'),
(10, 'Shrimant Dagdusheth Halwai Ganpati Temple, Pune', 'Images/Amazing_God_Ganesh_Wallpaper.jpg', 'hrimant Dagdusheth Halwai Ganpati Temple is the second most popular temple in Maharashtra after Shree Sidhivinayak Temple, dedicated to Lord Ganapati. It is located in Pune and is visited by a large number of tourists from all over the country. The temple', 'Maharastra', 'https://www.bing.com/maps/embed?h=400&w=500&cp=18.82701644162674~73.11676025390625&lvl=10&typ=d&sty=', 'https://www.bing.com/maps/directions?rtp=adr.~pos.18.516399383544922_73.85604095458984_Ganpati+Bhava'),
(11, 'Kanipakam Vinayaka Temple, Chittoor', 'Images/the-vinayaka-idol-234x300.jpg', 'This beautiful temple is located approximately 75 kms away from Tirupati in Chittoor district of Andhra Pradesh. It is among the best ancient Ganapati temples in India, known for its historic structure and intrinsic designs. Worshippers from different par', 'Andhra Pradesh', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps/directions?rtp=adr.~pos.13.275851249694824_79.03501892089844_Vari+Devastha'),
(12, 'Manakula Vinayagar Temple, Pondicherry', 'Images/08.jpg', 'Manakula Vinayagar Temple was constructed during the French territory of Pondicherry that dates back to 1666 years ago. This majestic building is named after a pond (Kulam) that used to be located inside the temple with sands blown in from the seashores.', 'Tamil Nadu', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Manakula+Vinayagar+Temple%2C+Pondicherry&qs=n&form=QBRE&sp=-1&pq=manakul'),
(13, 'Moti Dungri Ganesh Temple, Jaipur', 'Images/R.jfif', 'Moti Dungri Ganesh Temple in Jaipur was constructed by Seth Jai Ram Paliwal in the 18th century to seek blessings of Lord Ganesha before every special occasion. Positioned on a small hill, this religious spot is one of the most famous tourist attractions ', 'Rajasthan', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Moti+Dungri+Ganesh+Temple%2C+Jaipur&qs=n&form=QBRE&sp=-1&pq=moti+dungri+'),
(14, 'Ganesh Tok Temple, Gangtok', 'Images/1582976094_ganesh-tok-gangtok-2.jpg', 'We know what you must be thinking? In a land of Buddhists, a shrine of Lord Ganesh is hard to find, but very less people know that the Gangtok city houses a beautiful temple, dedicated to the elephant god on top of a hill near the Gangtok TV Tower.', 'Sikkim', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Ganesh+Tok+Temple%2C+Gangtok&qs=n&form=QBRE&sp=-1&pq=ganesh+tok+temple%2'),
(15, 'Ranthambore Ganesh Temple, Rajasthan', 'Images/ganesh_temple_ranthambore.jpg', 'Surely, Ranthambore National Park is one of the best tourist places in India, visited by nature lovers, and wildlife enthusiasts. But, the Ranthambore National Park is widely visited by pilgrims and religious travelers to seek the blessings of three-eyed ', 'Rajasthan', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Ranthambore+Ganesh+Temple%2C+Rajasthan&qs=n&form=QBRE&sp=-1&pq=ranthambo'),
(16, 'Ganpatipule Temple, Ratnagiri, Maharashtra', 'Images/ganpatipule1-500x500.jpg', 'One thing which makes this temple unique is the fact that the Ganesh idol in Ganpatipule Temple, Ratnagiri faces west instead of east. Also, the locals believe that the idol of Lord Ganesha is not placed by anyone, but has been self-evolved', 'Maharashtra', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Ganpatipule+Temple%2C+Ratnagiri%2C+Maharashtra&qs=n&form=QBRE&sp=-1&pq=g'),
(17, 'Rockfort Ucchi Pillayar Koil Temple, Tamil Nadu', 'Images/R (1).jfif', 'This majestic temple, perched on top of a hill in the Tiruchirappalli town of Tamil Nadu, holds a significant importance  Hindus. There is a long story behind the origin of the Rockfort Ucchi Pillayar Koil Temple.It says that after killing Ravana, Lord Ra', 'Tamil Nadu', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Ucchi+Pillayar+Temple%2C+Rockfort&cvid=9ba525648eff44298d673320b7fd6345&'),
(18, 'Karpaga Vinayagar Temple, Pillaiyarpatti, Tamil Nadu', 'Images/pp_1598507572.jpg', 'This beautiful temple is believed to be around 1600 years old, which is one of the oldest in Tamil Nadu. It is carved out of a stone in a cave with images of several other gods and deities. The six-feet idol of Lord Ganesha is very beautiful and visitors ', 'Tamil Nadu', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Karpaga+Vinayagar+Temple%2c+Pillayarpatti%2c+Tamil+Nadu&FORM=AWRE'),
(19, 'Sasivekalu & Kadale Kalu Ganesha Temple, Hampi, Karnataka', 'Images/498-59.jpg', 'Sasivekalu & Kadale Kalu Ganesha Temple is one of the prime attractions in Hampi, which once used to be the glorious capital of the Vijaynagar Empire. This temple has two unique idols of Lord Ganesha that dates back to 1440 AD and several images of other ', 'Karnataka', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Sasivekalu+%26+Kadale+Kalu+Ganesha+Temple%2C+Hampi%2C+Karnataka&qs=n&for'),
(20, 'Madhur Mahaganapathi Temple, Kerala', 'Images/madhur-temple.jpg', 'This beautiful temple is located approximately 75 kms away from Tirupati in Chittoor district of Andhra Pradesh. It is among the best ancient Ganapati temples in India, known for its historic structure and intrinsic designs. Worshippers from different par', 'Tamil Nadu', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Madhur+Mahaganapathi+Temple%2C+Kerala&qs=n&form=QBRE&sp=-1&pq=madhur+mah'),
(21, 'Swayambhu Ganapati', 'Images/125f73f77c7abe282f3ba1c84f8f99da.jpg', 'It is one of the top places to visit in Ganpatipule .                 The Ganpati Temple is about 400 years old and is the prime attraction in Ganpatipule packages that draws thousands of pilgrims every year to seek blessings of the Lord. According to one', 'Maharastra', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Swayambhu+Ganapati&qs=n&form=QBRE&sp=-1&pq=swayambhu+ganapati&sc=10-18&s'),
(22, 'Moreshwar, Mayureshwar', 'Images/moreshwar-temple.jpg', 'This temple is situated in Moregaon which is about 80 kms. from Pune city. At Moreshwar temple Lord Ganesha portrays peacock as its vehicle. In local language more or mayura means peacock, hence both temple and village has derived its name after the bird ', 'Benga', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Moreshwar%2c+Mayureshwar+temple&FORM=AWRE'),
(23, 'Chintamani Theur', 'Images/f0a397b10e79c16d5cec5996410d8c7b.jpg', 'The Chintamani Temple of Theur is a Hindu temple dedicated to Ganesha Located 25 km (16 mi) from Pune,[1] the temple is \"one of the larger and more famous\" of the Ashtavinayaka, the eight revered shrines of Ganesha in the Indian state of Maharashtra.', 'Maharashtra', 'https://www.bing.com/maps/embed?h=400&w=500&cp=15.855673509992442~75.54199218749773&lvl=6&typ=d&sty=', 'https://www.bing.com/maps?q=Chintamani+Theur&qs=n&form=QBRE&sp=-1&pq=chintamani+theur&sc=4-16&sk=&cv');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `user`, `pass`, `cpass`, `type`) VALUES
(1, 'khelojikrish@gmail.com', 'Krish', 'Krish', 'Krish', 'User'),
(2, 'itvedant@gmail.com', 'Itvedant', 'Itvedant', 'Itvedant', 'User'),
(3, 'XYZ@gmail.com', 'XYZ', 'XYZ', 'XYZ', 'User'),
(4, 'admin@gmail.com', 'admin', 'admin', 'admin', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpandal`
--
ALTER TABLE `addpandal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpandal`
--
ALTER TABLE `addpandal`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
