-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 08:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `qrcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `price`, `category`, `detail`, `image`, `user`, `qrcode`) VALUES
(47, '50', '3000', 'shoes', '1234', 'img_60451312aa1b5.jfif', 'นายกรภัทร์', '0625841942'),
(49, 'รองเท้าสุดเท่มากๆ', '300', 'shoes', '.....', 'img_6045d4870f48c.jpg', 'สมพง', '1234'),
(51, 'รองเท้าสวย', '450', 'หมวดหมู่', 'ใส่นุมใส่ดี มีชีวิตที่หรูหรา', 'img_6045d8ba7e197.jpg', 'เกม', '0123456789'),
(53, 'เสื้อผ้าขาดๆ', '300', 'clothing', 'สวยๆ', 'img_6045dd1356915.jpg', 'หนุ่ม', '7894562145'),
(54, 'รองเท่าเซ็กจัด', '100000', 'shoes', 'ใส่แล้วเท่ ', 'img_604717713003a.jpg', 'อาหิก', '1472583690'),
(55, 'เสื้อผ้า123', '400', 'clothing', 'สวยย', 'img_6047179cc8fba.jpg', 'อาหิก', '1472583690'),
(56, 'ของเล่นในฝัน', '1452', 'หมวดหมู่', 'สำหรับเด็ก', 'img_604717c791ba6.png', 'อาหิก', '1472583690'),
(57, 'iphoe 11 pro', '50000', 'phone', 'กล้องชัด', 'img_604717f8bafd3.jpg', 'อาหิก', '1472583690'),
(58, 'คอมประกอบ', '40000', 'computer', 'cpu แรงที่สุดในโลก', 'img_604718288082e.jpeg', 'อาหิก', '1472583690'),
(59, 'เตารีด', '500', 'electrical_appliances', 'เรียบ', 'img_604718407b7ca.jpg', 'อาหิก', '1472583690'),
(60, 'รองเท้า สุดฟิน', '4000', 'shoes', 'เท่', 'img_60471871a31b3.jpg', 'อร่อย', '7894561230'),
(61, 'เสื้อผ้า สุดสวย', '4500', 'clothing', 'ใส่แล้วสวยขึ้น', 'img_60471897a836b.jpg', 'อร่อย', '7894561230'),
(62, 'ของเล่น ที่เด็กจำ', '5032', 'children_toys', 'สำหรับเด็ก', 'img_604718c113066.jpg', 'อร่อย', '7894561230'),
(63, 'โทรศัพจีน', '8000', 'phone', 'แรงทะรุนารก', 'img_604718f09ab94.jpg', 'อร่อย', '7894561230'),
(64, 'คอมเทพๆ', '100000', 'computer', 'การ์ดจอแรงๆ', 'img_60471914ef3e9.jpg', 'อร่อย', '7894561230'),
(65, 'เครื่องซักผ้า', '8000', 'electrical_appliances', 'ปั่นแรงเหมือนโกหก', 'img_6047193c37047.jpg', 'อร่อย', '7894561230'),
(66, 'รองเท้า ใส่แล้วสบาย', '3201', 'หมวดหมู่', 'ใส่แล้วสบาย', 'img_60471989232fb.jpg', 'อาเหมิง', '0123456789'),
(67, 'เสื้อผ้า สุดซวย', '5420', 'clothing', 'ใส่แล้ว ชีวิตแย่ลง', 'img_604719bd74532.jpg', 'อาเหมิง', '0123456789'),
(68, 'ของเล่นที่เด็กต้องการ', '422', 'children_toys', 'ของเล่นสำหรับเด็ก', 'img_60471a1db3eee.jpg', 'อาเหมิง', '0123456789'),
(69, 'ซัมซุง มือถือสุด.', '20000', 'phone', 'แรง', 'img_60471a54e643c.png', 'อาเหมิง', '0123456789'),
(70, 'คอมประกอบครบชุด', '50000', 'computer', 'เล่นเกมลื่น', 'img_60471a7803736.jpg', 'อาเหมิง', '0123456789'),
(71, 'พัดลม', '4000', 'electrical_appliances', 'เป่าแล้วปลิ้ว', 'img_60471a96a2e7b.jfif', 'อาเหมิง', '0123456789'),
(75, 'TEST', '2050', 'shoes', ' อะไรก็ได้', 'img_60483084b9946.jfif', 'นาย กขคง', '0625841942');

-- --------------------------------------------------------

--
-- Table structure for table `insert_basket`
--

CREATE TABLE `insert_basket` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `qrcode` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `delivery_style` varchar(50) NOT NULL,
  `user_sell` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insert_basket`
--

INSERT INTO `insert_basket` (`id`, `name`, `price`, `image`, `user`, `qrcode`, `address`, `delivery_style`, `user_sell`) VALUES
(52, 'เสื้อผ้าขาดๆ', '480', 'img_6045da0c60763.jpg', 'หนุ่ม', '789456123', '', '', 'เกม'),
(60, 'รองเท้า สุดฟิน', '4000', 'img_60471871a31b3.jpg', 'อร่อย', '7894561230', '', '', 'ชัชเกม');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `delivery_style` varchar(50) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`id`, `name`, `price`, `user`, `image`, `address`, `delivery_style`, `admin`) VALUES
('52', 'เสื้อผ้าขาดๆ', '480', 'เกม', 'img_6045da0c60763.jpg', '', 'quick', 'หนุ่ม'),
('49', 'รองเท้าสุดเท่มากๆ', '300', 'ชัชเกม', 'img_6045d4870f48c.jpg', '', '', 'สมพง'),
('54', 'รองเท่าเซ็กจัด', '100000', 'เกม', 'img_604717713003a.jpg', '100/259', 'การจัดส่ง', 'อาหิก');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `day` varchar(33) NOT NULL,
  `month` varchar(14) NOT NULL,
  `year` int(50) NOT NULL,
  `sex` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `password`, `day`, `month`, `year`, `sex`) VALUES
(90, 'นายอานน', 'แซ่ซุ่ม', 'gameperpe12@gmail.com', '1111', '23', '11', 1923, 'male'),
(91, 'สมพง', 'สมปอง', 'gameperTa@gmail.com', '1234', '26', '12', 1923, 'femal'),
(92, 'นายสำเนา', 'สุพรัตร์', 'gameper11@gmail.com', '1234', '18', '12', 1923, 'male'),
(93, 'เกม', 'หล่อ', '615021000620@mail.rmutk.ac.th', '1234', '16', '9', 1919, 'male'),
(94, 'หนุ่ม', 'หล่อ', '615021000621@mail.rmutk.ac.th', '1234', '16', '7', 1917, 'male'),
(95, 'กรภัทร์', 'สิทธิคุณ', '615021000364@mail.rmutk.ac.th', '1234', '19', '11', 1925, 'male'),
(96, 'อาหิก', 'อาหิก', '615021000111@mail.rmutk.ac.th', '1234', '13', 'เดือน', 1918, 'femal'),
(97, 'อร่อย', 'หอง', '615021000112@mail.rmutk.ac.th', '1234', '14', '8', 1918, 'male'),
(98, 'อาเหมิง', 'งิก', '615021000113@mail.rmutk.ac.th', '1234', '15', '9', 1918, 'male'),
(99, 'ชัชเกม', 'หมุ่มนม', '615021000114@mail.rmutk.ac.th', '1234', '7', '5', 1918, 'third'),
(100, 'นาย กขคง', 'ข', '123456789@gmail.com', '1111', '26', '12', 1923, 'third');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
