-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 04:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_hostel`
--

CREATE TABLE `book_hostel` (
  `id` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `addmission` int(11) NOT NULL,
  `house` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(6) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `grelation` varchar(50) NOT NULL,
  `gmobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_hostel`
--

INSERT INTO `book_hostel` (`id`, `register_id`, `room_type`, `condition`, `duration`, `addmission`, `house`, `village`, `city`, `state`, `zip`, `guardian`, `grelation`, `gmobile`, `email`) VALUES
(1, 83880, 'Single', 'Ac', 6, 1000, 'house no. 225', 'attalgarh', 'Mukerian', 'Punjab', 144211, 'vishal singh', 'brother', 1235645645, 'jasvishal123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `bone` varchar(50) NOT NULL,
  `btwo` varchar(50) NOT NULL,
  `bthree` varchar(50) NOT NULL,
  `oone` varchar(50) NOT NULL,
  `otwo` varchar(50) NOT NULL,
  `othree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`id`, `day`, `bone`, `btwo`, `bthree`, `oone`, `otwo`, `othree`) VALUES
(1, 'Monday', 'Tea/Milk', ' Aloo prantha', 'butter one piece', 'Tea/milk', 'Bread five piece', 'jam'),
(2, 'Tuesday', 'Tea/Coffee', 'Alu sabji', 'Poori', 'Milk', 'Bread ', 'jam'),
(3, 'Wednesday', 'Tea/Milk', 'Dosai, Sambar', 'Tomato Chutney', 'Tea/milk', 'Bread', 'Butter jam'),
(4, 'Thursday', 'Tea/Coffee', 'Onion oothappam', 'Pudina chutney', 'Milk', 'Big Size Samosa ', 'Tomato Sauce,'),
(5, 'Friday', 'Coffee', 'Mint Chutney', 'idly,sambar', 'Tea/milk', 'Onion Bajji (2 Nos.),', 'Coconut Chutney'),
(6, 'Saturday', 'Tea/Milk', 'Aloo Paratha', 'Raita', 'Milk', 'Bread five piece', 'Butter jam'),
(7, 'Sunday', 'Tea/Coffee', 'Dosai, Sambar', 'Pudina chutney', 'Tea/milk', 'Big Size Samosa ', 'Tomato Sauce,');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `course_sn` varchar(255) DEFAULT NULL,
  `course_fn` varchar(255) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'B10992', 'B.Tech', 'Bachelor  of Technology', '2020-07-04 19:31:42'),
(2, 'BCOM1453', 'B.Com', 'Bachelor Of commerce ', '2020-07-04 19:31:42'),
(3, 'BSC12', 'BSC', 'Bachelor  of Science', '2020-07-04 19:31:42'),
(4, 'BC36356', 'BCA', 'Bachelor Of Computer Application', '2020-07-04 19:31:42'),
(5, 'MCA565', 'MCA', 'Master of Computer Application', '2020-07-04 19:31:42'),
(6, 'MBA75', 'MBA', 'Master of Business Administration', '2020-07-04 19:31:42'),
(7, 'BE765', 'BE', 'Bachelor of Engineering', '2020-07-04 19:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `done` varchar(50) NOT NULL,
  `dtwo` varchar(50) NOT NULL,
  `dthree` varchar(50) NOT NULL,
  `dfour` varchar(50) NOT NULL,
  `dfive` varchar(50) NOT NULL,
  `dsix` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`id`, `day`, `done`, `dtwo`, `dthree`, `dfour`, `dfive`, `dsix`) VALUES
(1, 'Monday', 'Chappathi', 'Dhal makhni', 'Plain rice', 'Mix veg', 'Curd', ''),
(2, 'Tuesday', 'Chappathi', 'Malai kofta', 'Plain rice', 'Dry alu gobi', 'salad', ''),
(3, 'Wednesday', 'Chappathi', 'Matar paneer', 'Plain rice', ' cholle', 'Curd', ''),
(4, 'Thursday', 'Fulka', 'Sprouted dhal', 'Rice', 'Lime juice', 'Curd', ''),
(5, 'Friday', 'Chappathi', 'Mix dhal', 'Plain rice', 'Mix veg', 'Curd', ''),
(6, 'Saturday', 'Fulka', 'Dhal makhni', 'Plain rice', 'Gobi manchurian', 'Curd', ''),
(7, 'Sunday', 'Chappathi', 'Raj mah', 'Dhal ghee rice', 'Red pumpkin', 'Curd', '');

-- --------------------------------------------------------

--
-- Table structure for table `fees_structure`
--

CREATE TABLE `fees_structure` (
  `id` int(11) NOT NULL,
  `room` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `per_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees_structure`
--

INSERT INTO `fees_structure` (`id`, `room`, `room_type`, `per_month`) VALUES
(1, 'single', 'Non Ac', 6000),
(2, 'double', 'Non Ac', 5000),
(3, 'four', 'Non Ac', 4000),
(4, 'single', 'Ac', 8000),
(5, 'double', 'Ac', 7000),
(6, 'four', 'Ac', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `lone` varchar(50) NOT NULL,
  `ltwo` varchar(50) NOT NULL,
  `lthree` varchar(50) NOT NULL,
  `lfour` varchar(50) NOT NULL,
  `lfive` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `day`, `lone`, `ltwo`, `lthree`, `lfour`, `lfive`) VALUES
(1, 'Monday', 'Fulka', 'Plain rice', 'Dhal fry', 'Dry lady finger', 'Curd'),
(2, 'Tuesday', 'Chappathi', 'Rajma', 'Plain rice', 'Alu gobi', 'salad'),
(3, 'Wednesday', 'Fulka', 'Soya bean dhal', 'Plain rice', 'Mix veg', 'Curd'),
(4, 'Thursday', 'Chappathi', 'Curry Pakoda', 'Plain rice', 'Rass gulla', 'Curd'),
(5, 'Friday', 'Fulka', 'Plain rice', 'Mattar paneer', 'Mix veg', 'Curd'),
(6, 'Saturday', 'Chappathi', 'Malai kofta', 'Plain rice', 'Cholle ', 'Curd'),
(7, 'Sunday', 'Fulka', 'Plain rice', 'Dhal makhni', 'Mix veg', 'Salad');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total_fees` int(11) NOT NULL,
  `paid_fees` int(11) NOT NULL,
  `pending` int(11) NOT NULL,
  `late_fine` int(11) DEFAULT NULL,
  `join-date` varchar(15) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `cardholder` text NOT NULL,
  `cardnumber` int(11) NOT NULL,
  `update` varchar(50) NOT NULL,
  `leftdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `email`, `total_fees`, `paid_fees`, `pending`, `late_fine`, `join-date`, `mode`, `cardholder`, `cardnumber`, `update`, `leftdate`) VALUES
(3, 'jasvishal123@gmail.com', 49000, 11000, 28000, NULL, '03-04-2024', 'UPI-Gpay/Paytm/Phone-pay', 'jasvir', 2147483647, '03-04-2024', '');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `sone` varchar(50) NOT NULL,
  `stwo` varchar(50) NOT NULL,
  `sthree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `day`, `sone`, `stwo`, `sthree`) VALUES
(1, 'Monday', 'Chole', 'bhatture', 'Tea/milk'),
(2, 'Tuesday', 'Samosa', 'sauce', 'Tea/coffee'),
(3, 'Wednesday', 'Noodles', 'Tomato sauce', 'Tea/Coffee'),
(4, 'Thursday', 'Sandhwich', 'Sauce', 'Tea/coffee'),
(5, 'Friday', 'Dosa', 'Coconut chutney', 'Tea/Milk'),
(6, 'Saturday', 'Chowmein', 'Coconut chutney', 'Tea/coffee'),
(7, 'Sunday', 'Bread Bajji', 'Butter jam', 'Tea/coffee');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`id`, `first_name`, `last_name`, `dob`, `gender`, `mobile`, `email`, `password`) VALUES
(1, 'jasvir', 'singh', '2002-08-24', 'Male', 2147483647, 'jasvishal123@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_hostel`
--
ALTER TABLE `book_hostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_structure`
--
ALTER TABLE `fees_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_hostel`
--
ALTER TABLE `book_hostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `breakfast`
--
ALTER TABLE `breakfast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dinner`
--
ALTER TABLE `dinner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fees_structure`
--
ALTER TABLE `fees_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
