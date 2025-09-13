-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2023 at 06:03 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architecture`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgeted_home`
--

DROP TABLE IF EXISTS `budgeted_home`;
CREATE TABLE IF NOT EXISTS `budgeted_home` (
  `bu_id` int(30) NOT NULL AUTO_INCREMENT,
  `cl_id` int(30) NOT NULL,
  `bu_description` varchar(100) NOT NULL,
  `bu_budget` varchar(100) NOT NULL,
  `bu_sqft` varchar(100) NOT NULL,
  `bu_image` varchar(100) NOT NULL,
  PRIMARY KEY (`bu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgeted_home`
--

INSERT INTO `budgeted_home` (`bu_id`, `cl_id`, `bu_description`, `bu_budget`, `bu_sqft`, `bu_image`) VALUES
(1, 11, 'dgdgjjjl', '1000000', '1200 sqft', 'plan.jpg'),
(2, 19, '2 Bedroom,Kitchen,Living room', '300000', '750 sqft', 'img1.jpg'),
(3, 21, '1 bedroom,hall,kitchen,sitout', '300000', '700 sqft', 'img2.jpg'),
(4, 11, 'ryt', '5476', '76 sqft', 'home 1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `budget_booking`
--

DROP TABLE IF EXISTS `budget_booking`;
CREATE TABLE IF NOT EXISTS `budget_booking` (
  `bb_id` int(11) NOT NULL AUTO_INCREMENT,
  `bbl_id` int(11) NOT NULL,
  `bbhl_id` int(11) NOT NULL,
  `bbcl_id` int(11) NOT NULL,
  `bb_status` varchar(100) NOT NULL DEFAULT 'Booked',
  `bb_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`bb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget_booking`
--

INSERT INTO `budget_booking` (`bb_id`, `bbl_id`, `bbhl_id`, `bbcl_id`, `bb_status`, `bb_date`) VALUES
(1, 8, 4, 11, 'Accepted', '2023-01-23 11:55:14'),
(2, 6, 3, 21, 'Booked', '2023-01-27 09:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `company_booking`
--

DROP TABLE IF EXISTS `company_booking`;
CREATE TABLE IF NOT EXISTS `company_booking` (
  `b_id` int(30) NOT NULL AUTO_INCREMENT,
  `bl_id` int(30) NOT NULL,
  `bcl_id` int(30) NOT NULL,
  `b_fname` varchar(100) NOT NULL,
  `b_lname` varchar(100) NOT NULL,
  `b_email` varchar(100) NOT NULL,
  `b_address` varchar(100) NOT NULL,
  `b_contactnumber` varchar(100) NOT NULL,
  `b_status` varchar(100) NOT NULL,
  `b_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_booking`
--

INSERT INTO `company_booking` (`b_id`, `bl_id`, `bcl_id`, `b_fname`, `b_lname`, `b_email`, `b_address`, `b_contactnumber`, `b_status`, `b_date`) VALUES
(1, 4, 1, 'Navya', 'Venu', 'navya@gmail.com', 'Mullakkal(h),Pidavanoor(p.o),Edappal,Malappuram,657890', '9912675400', 'Accepted', '2022-12-29 06:12:00'),
(3, 5, 5, 'Swaroop', 'Krishnan', 'swaroop@gmail.com', 'Kallathil(h),Thekkumuri(p.o),Nedumpuzha,Thrissur', '9845103498', 'Accepted', '2022-12-30 10:06:56'),
(4, 8, 3, 'Jaya', 'Murali', 'jaya@gmail.com', '65A,GADC street,Ankeleshwar,Gujarat', '9846451833', 'Accepted', '2023-01-02 11:21:11'),
(5, 5, 1, 'Swaroop', 'Krishnan', 'swaroop@gmail.com', 'Kallathil(h),Thekkumuri(p.o),Nedumpuzha,Thrissur', '9845103498', 'Booked', '2023-01-04 11:25:06'),
(6, 6, 4, 'gogul', 'Haridas', 'gogul@gmail.com', '50 A, Prabhadevi Indl Estate Near Siddhivinayak Temple Prabhadevi, Mumbai,Indore,400025,India', '8747238655', 'Booked', '2023-01-08 03:30:16'),
(7, 7, 1, 'Navya', 'Venu', 'navya@gmail.com', 'Mullakkal(h),Pidavanoor(p.o),Edappal,Malappuram,657890', '9912675401', 'Booked', '2023-02-09 10:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `company_registration`
--

DROP TABLE IF EXISTS `company_registration`;
CREATE TABLE IF NOT EXISTS `company_registration` (
  `c_id` int(30) NOT NULL AUTO_INCREMENT,
  `cl_id` int(30) NOT NULL,
  `c_companyname` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `c_phonenumber` varchar(100) NOT NULL,
  `map` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `c_file` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_registration`
--

INSERT INTO `company_registration` (`c_id`, `cl_id`, `c_companyname`, `c_address`, `c_email`, `c_password`, `c_phonenumber`, `map`, `pincode`, `c_file`) VALUES
(1, 2, 'R & R Builders 1', 'Capital Tower, Kuttanellur,\r\nThrissur, Kerala 6800141', 'insrandrbuilders@gmail.com', '12345', '9495128511', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d125537.89063660658!2d76.18591783377927!3d10.496008831888123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ba7ee4b7a02d257%3A0xefd1cb1aa7f0a0fc!2sR%26R%20Builders%20Capital%20tower%2C%20Kuttanellur%2C%20Thrissur%2C%20Kerala%20680014!3m2!1d10.4960165!2d76.2559584!5e0!3m2!1sen!2sin!4v1672292834784!5m2!1sen!2sin', 680014, 'arch1.jpg'),
(2, 9, 'R & R Builders ', 'Capital Tower, Kuttanellur,\r\nThrissur, Kerala 680014', 'insrandrbuilders@gmail.com', '12345', '9495128519', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d125530.75650779434!2d76.14193313393899!3d10.513569119639746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ba7ef87b592af45%3A0x8ab8acb650bed9a6!2s2nd%20Floor%2C%20St%20Thomas%20Complex%2C%20Kokkala%2C%20Thrissur%2C%20Kerala%20680001!3m2!1d10.5135768!2d76.2119737!5e0!3m2!1sen!2sin!4v1672296020838!5m2!1sen!2sin', 680001, 'arch2.jpg'),
(3, 11, 'Tricon Builders', 'Tricon Builders, Eriyad â€“ 680666, Kodungallur, Thrissur, Kerala', 'tricon@gmail.com', '34678', '+91-480-2815320', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d125646.60905959902!2d76.09317713134561!3d10.224714921480093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3b081949bb2b805f%3A0x6145d9a212b4eb4a!2s%26%20Auditorium%2C%20Community%20Center%20Building%2C%20Community%20Hall%2C%20Eriyad%2C%20beside%20Manappat%2C%20Kodungallur%2C%20Kerala%20680666!3m2!1d10.2247224!2d76.16321769999999!5e0!3m2!1sen!2sin!4v1672297186389!5m2!1sen!2sin', 680666, 'arch5.jpg'),
(4, 19, 'Kariyattu Builders & Developers', 'Vakayil Ln, Chiyyaram, Thrissur, Kerala 680026', 'kariyattu@gmail.com', '55555', '9234586569', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d125539.38488577369!2d76.15872993374583!3d10.492327134456493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ba7ee24d372db21%3A0x38c2a68b411cf8c1!2sVakayil%20Rd%2C%20Chiyyaram%2C%20Thrissur%2C%20Kerala%20680026!3m2!1d10.4923348!2d76.2287705!5e0!3m2!1sen!2sin!4v1672299546992!5m2!1sen!2sin', 680026, 'arch3.png'),
(5, 21, 'Rahul Constructions ', 'Meenu Mart Building, Thrissur - Shoranur Rd, Ottupara, Wadakkanchery, Kerala 680582', 'rahulconstructions1@gmail.com', '787871', '8891592878', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d125469.21386894555!2d76.17833153531657!3d10.66386601492555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ba7e81871ea228d%3A0xea89c5d1092ebbb7!2sMeenu%20Mart%20Building%2C%20Thrissur%20-%20Shoranur%20Rd%2C%20Ottupara%2C%20Wadakkanchery%2C%20Kerala%20680582!3m2!1d10.6638738!2d76.2483721!5e0!3m2!1sen!2sin!4v1672310611046!5m2!1sen!2sin', 680582, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `land_details`
--

DROP TABLE IF EXISTS `land_details`;
CREATE TABLE IF NOT EXISTS `land_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rl_id` int(11) NOT NULL,
  `l_title` varchar(100) NOT NULL,
  `l_description` varchar(100) NOT NULL,
  `l_landprice` varchar(100) NOT NULL,
  `l_image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land_details`
--

INSERT INTO `land_details` (`id`, `rl_id`, `l_title`, `l_description`, `l_landprice`, `l_image`) VALUES
(1, 3, 'dfhgj', 'dfhfgj', 'dfhg', '5.png'),
(2, 22, 'land1', 'land details', '5000000', 'land1.jpg'),
(3, 23, 'land2', 'rfhgujg', '100000', 'land2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `l_id` int(30) NOT NULL AUTO_INCREMENT,
  `l_email` varchar(100) NOT NULL,
  `l_password` varchar(100) NOT NULL,
  `l_usertype` varchar(100) NOT NULL,
  `l_approve` varchar(100) NOT NULL DEFAULT 'Not Approved',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `l_email`, `l_password`, `l_usertype`, `l_approve`) VALUES
(1, 'admin@gmail.com', '123', 'admin', 'Approved'),
(2, 'insrandrbuilders@gmail.com', '12345', 'Architecture', 'Approved'),
(3, 'sadheeshan1@gmail.com', '098761', 'realestate broker', 'Approved'),
(4, 'navya@gmail.com', 'navya', 'user', 'Approved'),
(5, 'swaroopakd@gmail.com', 'swaroop', 'user', 'Approved'),
(6, 'gogul@gmail.com', 'gogul', 'user', 'Approved'),
(7, 'meena@gmail.com', 'meena', 'user', 'Approved'),
(8, 'swaroop@gmail.com', '123', 'user', 'Approved'),
(9, 'jaya@gmail.com', 'jaya', 'Architecture', 'Approved'),
(10, 'sales@lordkrishna.com', '', 'Architecture', 'Approved'),
(11, 'tricon@gmail.com', '34678', 'Architecture', 'Approved'),
(12, 'menorabuilders@gmail.com', '', 'Architecture', 'Approved'),
(13, 'menorabuilders@gmail.com', '', 'Architecture', 'Approved'),
(14, 'lordkrishna@gmail.com', '57890', 'Architecture', 'Approved'),
(15, 'lordkrishna@gmail.com', '', 'Architecture', 'Approved'),
(16, 'lordkrishna@gmail.com', '667890', 'Architecture', 'Approved'),
(17, 'lordkrishna@gmail.com', '', 'Architecture', 'Approved'),
(18, 'lordkrishna@gmail.com', '', 'Architecture', 'Approved'),
(19, 'kariyattu@gmail.com', '55555', 'Architecture', 'Approved'),
(20, 'lordkrishna@gmail.com', '56789', 'Architecture', 'Not Approved'),
(21, 'rahulconstructions1@gmail.com', '787871', 'Architecture', 'Approved'),
(22, 'hari@gmail.com', 'hari', 'realestate broker', 'Approved'),
(23, 'rahul@gmail.com', 'rahul', 'realestate broker', 'Approved'),
(24, 'manoj@gmail.com', 'manoj', 'realestate broker', 'Approved'),
(25, 'mukesh1@gmail.com', 'mukesh1', 'realestate broker', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `real_booking`
--

DROP TABLE IF EXISTS `real_booking`;
CREATE TABLE IF NOT EXISTS `real_booking` (
  `re_id` int(11) NOT NULL AUTO_INCREMENT,
  `rel_id` int(11) NOT NULL,
  `rerl_id` int(11) NOT NULL,
  `re_fname` varchar(100) NOT NULL,
  `re_lname` varchar(100) NOT NULL,
  `re_email` varchar(100) NOT NULL,
  `re_address` varchar(100) NOT NULL,
  `re_contactnumber` varchar(100) NOT NULL,
  `re_status` varchar(100) NOT NULL,
  `re_date` timestamp(6) NOT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_registration`
--

DROP TABLE IF EXISTS `real_estate_registration`;
CREATE TABLE IF NOT EXISTS `real_estate_registration` (
  `r_id` int(30) NOT NULL AUTO_INCREMENT,
  `rl_id` int(30) NOT NULL,
  `r_fname` varchar(100) NOT NULL,
  `r_lname` varchar(100) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_password` varchar(100) NOT NULL,
  `r_mobilenumber` varchar(100) NOT NULL,
  `r_file` varchar(100) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_estate_registration`
--

INSERT INTO `real_estate_registration` (`r_id`, `rl_id`, `r_fname`, `r_lname`, `r_address`, `r_email`, `r_password`, `r_mobilenumber`, `r_file`) VALUES
(1, 3, 'Sadheeshan1', 'Menon1', 'No 62/64 3rd Floor Zaveri House Huges Road Grant Road, Mumbai,Cochin,400007,India1', 'sadheeshan1@gmail.com', '098761', '98765432121', 'r1.jpg'),
(2, 22, 'Hari', 'Das', '19, 2 Nd Floor, Vatsa House, Janmabhoomi Road, Fort,Mumbai', 'hari@gmail.com', 'hari', '8467589766', 'r2.jpg'),
(3, 23, 'Rahul', 'Sharma', '18/b, Ellisbridge, Ahmedabad,Gujarat', 'rahul@gmail.com', 'rahul', '9035862478', 'r3.jpg'),
(4, 24, 'Manoj', 'Kumar', 'Mullath(h),kodungaloor(p.o),Kottayam', 'manoj@gmail.com', 'manoj', '9345789865', 'r4.jpg'),
(5, 25, 'Mukesh', 'Varma', 'Kailas(h),LMS Vellayambalam Rd, Palayam,Thiruvananthapuram', 'mukesh1@gmail.com', 'mukesh1', '8356787754', 'r5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

DROP TABLE IF EXISTS `requirement`;
CREATE TABLE IF NOT EXISTS `requirement` (
  `rb_id` int(30) NOT NULL AUTO_INCREMENT,
  `r_requirement` varchar(100) NOT NULL,
  `b_id` int(30) NOT NULL,
  `r_plan` varchar(100) NOT NULL,
  `r_budget` varchar(100) NOT NULL,
  PRIMARY KEY (`rb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`rb_id`, `r_requirement`, `b_id`, `r_plan`, `r_budget`) VALUES
(1, 'sdgfjhgf', 3, 'on', 'on'),
(2, 'aaaaaa', 3, 'on', '1000000'),
(3, 'bbbbb', 3, 'Yes', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

DROP TABLE IF EXISTS `userregistration`;
CREATE TABLE IF NOT EXISTS `userregistration` (
  `u_id` int(30) NOT NULL AUTO_INCREMENT,
  `ul_id` int(30) NOT NULL,
  `u_fname` varchar(100) NOT NULL,
  `u_lname` varchar(100) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_phonenumber` varchar(100) NOT NULL,
  `u_file` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`u_id`, `ul_id`, `u_fname`, `u_lname`, `u_address`, `u_email`, `u_password`, `u_phonenumber`, `u_file`) VALUES
(1, 4, 'Navya1', 'Venu1', 'Mullakkal(h),Pidavanoor(p.o),Edappal,Malappuram,6578901', 'navya1@gmail.com', 'navyas1', '9912675402', 'u3.jpg'),
(2, 5, 'Swaroop', 'Krishnan', 'Kallathil(h),Thekkumuri(p.o),Nedumpuzha,Thrissur', 'swaroop@gmail.com', 'swaroop', '9845103499', 'u5.jpg'),
(3, 6, 'gogul', 'Haridas', '50 A, Prabhadevi Indl Estate Near Siddhivinayak Temple Prabhadevi, Mumbai,Indore,400025,India', 'gogul@gmail.com', 'gogul', '8747238655', 'u4.jpg'),
(4, 7, 'Navya', 'Venu', 'Mullakkal(h),Pidavanoor(p.o),Edappal,Malappuram,657890', 'navya@gmail.com', 'navyas', '9912675401', 'u1.jpg'),
(5, 8, 'Swaroop', 'Krishnan', 'Kallathil(h),Thekkumuri(p.o),Nedumpuzha,Thrissur', 'swaroop@gmail.com', 'swaroop', '9845103476', 'u2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
