-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 10:15 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

/*CREATE TABLE `category` (
  `Cat_id` int(100) NOT NULL,
  `Cat_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/
--
-- Dumping data for table `category`
--

/*INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(1, 'Family Tours'),
(2, 'Religious Tours'),
(3, 'Adventure Tours'),
(4, 'Special Event Tours'),
(5, 'National Parks'),
(6, 'Themed Vacations'),
(7, 'Small Group Tours');
*/
-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Enquiryid` int(50) NOT NULL,
  `Packageid` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(50) NOT NULL,
  `Child` int(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Message` varchar(900) NOT NULL,
  `Statusfield` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Packid` int(200) NOT NULL,
  `Packname` varchar(1000) NOT NULL,
--  `Category` int(200) NOT NULL,
  `Subcategory` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(8000) NOT NULL,
  `Pic2` varchar(8000) NOT NULL,
  `Pic3` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Packid`, `Packname`,/* `Category`,*/ `Subcategory`, `Packprice`, `Pic1`, `Pic2`, `Pic3`, `Detail`) VALUES
(1, 'Christmas Adventure in Lapaland     ', /*1,*/ 1, 20000, '1.jpg', '26.jpg', '25.jpg', 'What better way to celebrate Christmas than to spend it where Santa Claus lives? Come experience a traditional Lapland Christmas in Finland: meet Santa in person at the world-famous Santa Claus Village, enjoy the thrill of a dog sled ride and learn about the unique Sami culture at a reindeer farm. This magical holiday will surely create lasting memories for the entire family.'),
(2, 'Agra Family Tour ',/* 1,*/ 2, 10000, '2.jpg', '31.jpg', '4.jpg', 'A fun-filled holiday with your family is the best time to strengthen bonds and rejuvenate the love between dear ones. And, what could be a better place to have a good time with your family members than Agra? The pleasant weather, beautiful sceneries and delightful food is sure to put you in your best mood to revel the best time with your family. For a stress-free vacation, you can explore your options for Agra family holidays packages with us on Yatra.com. From hotel bookings to travel tickets, we offer various services to help you enjoy your Agra family tour packages. Visit the numerous attractions of this beautiful place in the company of your loved ones with our Agra family vacation and tour packages away from the routine tasks of life. '),
(3, 'Holidays in Italy  ',/* 1,*/ 3, 20000, '3.jpg', '39.jpg', '37.jpg', 'Enjoy golden beaches, sparkling seas, beautiful countryside, exciting cities and great cuisine on family holidays in Italy. Whether you are looking for an activity based holiday or one full of cultural pursuits, let our experience and insider knowledge help you tailor the ideal Italy family holiday.'),
(4, 'Main attraction in Thailand',/* 1,*/ 4, 400000, '5.jpg', '41.jpg', '40.jpg', 'Fascinating cultures, a nation that adores children, beautiful beaches in world famous resorts and a well-trodden tourist trail all combine to make Thailand family holidays popular with those looking for a combination of relaxation and adventure. Children can enjoy an invaluable experience discovering new cultures, customs and religions whilst visiting temples alongside having a huge amount of fun when exploring cities, towns and villages and of course in-resort.'),
(5, 'Holidays in Vancouver ',/* 1,*/ 5, 400000, '79.jpg', '36.jpg', '33.jpg', ' The lakes and mountains of Jasper, Banff and Yoho National Parks, provide the perfect backdrop for hiking and biking, while walking along the massive Athabasca Glacier feels like you are on top of the world. Horse riding, white water rafting, canoeing and whale watching are readily available for the adventurous traveller on our holidays to Canada. ');


-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Subcatid` int(200) NOT NULL,
  `Subcatname` varchar(1000) NOT NULL,
  /*`Catid` int(200) NOT NULL,*/
  `Pic` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Subcatid`, `Subcatname`, /*`Catid`,*/`Pic`, `Detail`) VALUES
(1, 'Family holiday in Lapland            ', /*1,*/ 'lapland.jpg', 'A brilliant balance of cosy winter cottage accommodation and adventure, this holiday gives you a taste of the best wilderness activities and plenty of free time to explore too.'),
(2, 'Family holiday to India   ',/* 1,*/ '2.jpg', 'This relaxing holiday manages all of the organisational leg-work for you, so you can focus on combining family fun with exploring the phenomenal sights and sounds of India.'),
(3, 'Family holiday in Italy', /*1,*/ '3.jpg', 'World-famous volcanoes, shimmering coastal towns and one of the most exciting humanities lessons ever imaginable. Are your family ready for the Italy tour?'),
(4, 'Family holiday in Thailand ', /*1,*/ 't8.jpg', 'This is a real family adventure taking in every face of Thailand - local life, national parks, rainforest and beaches - all held together by great organisation and excellent guides.'),
(5, 'Canada family  holiday',/* 1,*/ 't2.jpg', 'Our only big Canadian adventure holiday for families, with 10 days of wilderness wonders, camping and ranching. From Banff to bears, Whistler to white water rafting.');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Pwd`, `Typeofuser`) VALUES
('Anshu', '1234', 'Admin'),
('aksh','1234','Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
/*ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_id`);
*/
--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Enquiryid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Packid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Subcatid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
/*ALTER TABLE `category`
  MODIFY `Cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
  */
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Enquiryid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Packid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6; /* ANU Change this no to 6*/
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Subcatid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;/* ANU Change this no to 6*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
