-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 04:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deliveryrest`
--

-- --------------------------------------------------------

--
-- Table structure for table `informatic`
--

CREATE TABLE `informatic` (
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` int(12) NOT NULL,
  `massege` text COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `informatic`
--

INSERT INTO `informatic` (`name`, `email`, `phone`, `massege`, `id`, `state`) VALUES
('اسليش', 'abdalaaty.aa@gmail.com', 35645, 'لارسين', 38, 'تمت القراءة'),
('اسليش', 'abdalaaty.aa@gmail.com', 35645, 'لاستن ىؤء', 39, 'جديد'),
('jfj', 'abdalaaty.aa@gmail.com', 0, 'dvbjvnc,v,x', 40, 'جديد'),
('اسليش', 'abdalaaty.aa@gmail.com', 35645, '[;l9i98ju', 41, 'جديد'),
('hgf', 'fjfk@kjd', 787878, 'dkjjkjfk jfjkf', 42, 'جديد');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nameCook` varchar(255) NOT NULL,
  `typeMeal` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nameCook`, `typeMeal`, `image`, `price`, `state`) VALUES
(1, 'هت شوكليت', 'مشروب', 'images/image-0-04-05-3d3479e27efb570083483eb81ff6abcd508b443f9f8b55ee3fc34a182784396c-V.jpg', 5, 1),
(2, 'قهوة', 'مشروب', 'images/drink5.jpg', 2.5, 1),
(3, 'نسكافيه ', 'مشروب', 'images/drink4.jpg', 2.5, 1),
(4, 'عصير جوز الهند', 'مشروب', 'images/drink1.jpg', 2.5, 1),
(5, 'عصير توت', 'مشروب', 'images/drink7.jpg', 3, 1),
(6, 'كاكاو', 'مشروب', 'images/kakw.JPG', 3, 1),
(7, 'كاكاو', 'مشروب', 'images/kaokaw.jpg', 3, 1),
(8, 'عصائر طبيعية', 'مشروب', 'images/drink8.jpg', 3, 1),
(9, 'بان كيك', 'افطار', 'images/breakfast5.jpg', 5, 1),
(10, 'وافل', 'افطار', 'images/sweet11.jpg', 5, 1),
(11, 'كريب', 'افطار', 'images/image-0-04-05-ed6b485c203a616d83dff2cfc888f4da3d11d3ab399da175d5728bf7b8950a79-V.jpg', 3, 1),
(12, 'توست حلو', 'افطار', 'images/image-0-04-05-2e49885ea595980f628f57786b174b5e861240d6ff325093739f3771396d6e9a-V.jpg', 3, 1),
(13, 'وجبة افطار بيض', 'افطار', 'images/bre.jpg', 5, 1),
(14, 'توست و بريوش', 'افطار', 'images/braekfast1.jpg', 5, 1),
(15, 'توست و بطاطا', 'افطار', 'images/bread-breakfast-burlap-1600711.jpg', 5, 1),
(16, 'توست و بيض', 'افطار', 'images/breakfast-scrambled-eggs-toasts-juice-260nw-97920932.jpg', 5, 1),
(17, 'بيتزا', 'وجبات', 'images/blog-15.jpg', 3, 1),
(18, 'لازانيا', 'وجبات', 'images/meal-2069021__340.jpg', 3, 1),
(19, 'يخنة ضلوع', 'وجبات', 'images/beef-bowl-cherry-tomatoes-209459.jpg', 3, 1),
(20, 'كبة دجاج', 'وجبات', 'images/appetizer-chicken-chicken-dippers-1059943.jpg', 3, 1),
(21, 'دجاج فيليه', 'وجبات', 'images/photo-gallery-04.jpg', 3, 1),
(22, 'باستا بالجبن والأعشاب', 'وجبات', 'images/basil-dinner-dish-64208.jpg', 3, 1),
(23, 'طاجين', 'وجبات', 'images\\bake-baked-basil-236798.jpg', 25, 1),
(24, 'مكرونةة', 'وجبات', 'images/basil-blur-close-up-1437267.jpg', 3, 1),
(25, 'سندوتش', 'سندوتشات', 'images/pexels-photo-461382.jpeg', 3, 1),
(26, 'شاورما', 'سندوتشات', 'images/Capture.JPG', 3, 1),
(27, 'برجر', 'سندوتشات', 'images/burger-chips-dinner-70497.jpg', 3, 1),
(28, 'سندوتش', 'سندوتشات', 'images/pexels-photo-357746.jpeg', 3, 1),
(29, 'برجر بالشعير', 'سندوتشات', 'images/sandwich-1051605_1920.jpg', 5, 1),
(30, 'بريوش حار', 'سندوتشات', 'images/bakery-croissant-delicious-7390.jpg', 5, 1),
(31, 'خبز البريتو', 'سندوتشات', 'images/pexels-photo-203089.jpeg', 10, 1),
(33, 'كب كيك', 'حلو', 'images/cupcakes-690040_1920.jpg', 3, 1),
(34, 'دونت', 'حلو', 'images/Captu5re.JPG', 3, 1),
(35, 'كنافة', 'حلو', 'images/sweet2.jpg', 3, 1),
(36, 'سارة', 'حلو', 'images/sweet6.jpg', 3, 1),
(37, 'سارة', 'حلو', 'images/sweet7.jpg', 3, 1),
(38, 'كيك', 'حلو', 'images/sweet9.JPG', 3, 1),
(39, 'تشيز كيك', 'حلو', 'images/sweet1.jpg', 3, 1),
(40, 'مكارون', 'حلو', 'images/sweet8.JPG', 3, 1),
(69, 'سندويتش', 'سندويشات', 'images/bacon-biscuit-breakfast.jpg', 15, 1),
(70, 'سكالوب', 'سندوتشات', 'images/beef-burrito-cuisine-327168.jpg', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `nameCock` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `quntity` int(11) NOT NULL,
  `price` double NOT NULL,
  `userName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reseverse`
--

CREATE TABLE `reseverse` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `dateOf` date NOT NULL,
  `time_res` time NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `sizeOfTable` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reseverse`
--

INSERT INTO `reseverse` (`userId`, `userName`, `dateOf`, `time_res`, `phoneNumber`, `sizeOfTable`, `email`, `state`) VALUES
(6, 'amera', '2019-02-13', '02:00:00', 924518671, 2, 'alma@dh.com', 'طلب'),
(7, 'اميرة', '0000-00-00', '05:00:00', 92541867, 5, 'amera@dkjh', ''),
(8, 'hgf', '0000-00-00', '02:30:00', 787878, 4, 'bsaka@jfdmvnp', ''),
(9, 'hgf', '0000-00-00', '02:30:00', 92541867, 4, 'fdhdf@sjdlk', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `passWord` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `typeWork` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passWord`, `Email`, `typeWork`, `state`) VALUES
(1, '&nbsp;', '&nbsp;', '&nbsp;', 1, 0),
(17, 'slma', '415', 'slma@dh.com', 1, 1),
(20, 'hacan', '5466', 'm@dh.com', 1, 1),
(21, 'hala', '45', 'm@dh.com', 2, 1),
(23, 'hyam', '81dc9bdb52d04dc20036dbd8313ed055', 'hyam@gamil.com', 2, 0),
(24, 'samah', '546', 'jhg@fgh', 1, 1),
(25, 'gh', '5465', 'jhg@fgh', 1, 1),
(26, 'hggjkh', '546', 'nera@fgh', 1, 1),
(27, 'gh', 'skks5465', 'jhg@fgh', 1, 1),
(28, 'Ahmed', '124562', '20', 0, 0),
(29, 'Ahmed', '124562', '20', 0, 0),
(30, 'أميرة محمد', '200051', '23', 0, 0),
(31, 'اميرة', 'c20ad4d76fe97759aa27a0c99bff6710', 'sfdsf@dsf', 1, 0),
(43, 'اميرة', '28c8edde3d61a0411511d3b1866f0636', 'gfh@dkjh', 1, 0),
(44, 'سارة', '40f5888b67c748df7efba008e7c2f9d2', 'sara@jdjd', 2, 0),
(45, 'samer', 'c4ca4238a0b923820dcc509a6f75849b', 'gfg@sfds', 1, 0),
(46, 'samera', '4c56ff4ce4aaf9573aa5dff913df997a', 'hhg@dsdf', 1, 0),
(47, 'ahmed', 'c4ca4238a0b923820dcc509a6f75849b', 'sjsj@jdksj', 2, 0),
(48, 'mmm', '202cb962ac59075b964b07152d234b70', 'wflklkjef@fjk', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informatic`
--
ALTER TABLE `informatic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`,`nameCook`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nameCock` (`nameCock`),
  ADD KEY `userName` (`userName`);

--
-- Indexes for table `reseverse`
--
ALTER TABLE `reseverse`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informatic`
--
ALTER TABLE `informatic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reseverse`
--
ALTER TABLE `reseverse`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
