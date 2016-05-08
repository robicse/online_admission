-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2016 at 09:55 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `form_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts_diu`
--

CREATE TABLE IF NOT EXISTS `abouts_diu` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `about_timestamp` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts_diu`
--

INSERT INTO `abouts_diu` (`about_id`, `about_title`, `about_content`, `about_timestamp`) VALUES
(5, 'Information and Facilities of DIU ', 'Dhaka International University (DIU) is one of the established and leading non-govermant universities in Bangladesh.The intial plan began in 1994 but the university was established in 1995.It is now operated as government apporoved university under the Non-Goverment University Act of 1992 (as amended in 1998). </br></br>\r\nOur official web sit: <a href="http://diu.net.bd/">http://diu.net.bd/</a>', '2015-04-06 10:10:01'),
(7, 'Accreditation', 'All DIU curricula have been approved by the University Grants Comission,The Goverment of the People''s Republic of Bangladesh, private Sector Organizations and International Agencies across the country and International Agencies across the country and abroad accept the academic standerds of DIU.', '2015-04-06 10:10:01'),
(10, 'Campus', 'DIU is one of the few private universities in Bangladesh having its own campus. The main campus is located at House # 4, Road # 1, Block # F, Banani, Dhaka-1213.<br />\r\n<br />\r\nThe other campuses of DIU are located in the following addresses:<br />\r\n<br />\r\nCampus-1: House # 6, Road # 1, Block # F, Banani, Dhaka-1213.<br />\r\n<br />\r\nCampus-2: House # 4, Road # 1, Block # F, Banani, Dhaka-1213.<br />\r\n<br />\r\nCampus-3: 147, Green Road, Dhaka-1215.<br />\r\n<br />\r\nCampus-4: 66, Green Road, Dhaka-1205.<br />\r\n<br />\r\nThe campuses are located within the heart of Dhaka city, so they are well connected with various means of transport services', '2015-04-06 10:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(10) unsigned NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_password`) VALUES
(4, 'password', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'versity', '8cf95af191277636699f905ad38d859c');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `articles_id` int(11) NOT NULL,
  `articles_title` varchar(255) NOT NULL,
  `articles_content` text NOT NULL,
  `articles_timestamp` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articles_id`, `articles_title`, `articles_content`, `articles_timestamp`) VALUES
(6, 'Dhaka International University ', 'Dhaka International University, rated among the top private universities of Bangladesh, is an institution that promotes eastern culture and values, and meaningfully blends eastern and western thought and innovation. As an institution of higher learning that promotes and inculcates ethical standards, values and norms, Dhaka International University (DIU) is committed to the ideals of equal opportunity, transparency, and non-discrimination. The primary mission of DIU is to provide, at a reasonable cost, tertiary education characterized by academic excellence in a range of subjects that are particularly relevant to current and anticipated societal needs. Central to the universityâ€™s mission is its intention to provide students with opportunities, resources and expertise to achieve academic, personal and career goals within a stimulating and supportive environment. DIU is striving not only to maintain high quality in both instruction and research, it is also rendering community service through dissemination of information, organization of training programs and other activities. Sensitive to the needs of its students and staff, DIU is committed to providing a humane, responsive and invigorating atmosphere for productive learning and innovative thinking.<br />\r\n<br />\r\nPresently, the University enrolls more than 6,000 students on merit basis in the first year Honours Programme in different Departments. Besides a 4-year Bachelor and 1-year Masters Programme, the University also undertakes a large number of training Programmes and short term courses including diplomas in different disciplines. Dhaka International University is dedicated to the advancement of learning, and is committed to promoting research in all fields of knowledge. The course curricula are updated and new research projects are undertaken every year. As the pioneer and the largest seat of learning in the country, DIU has taken the task to foster the transformation of individual students and the country as a whole through the educational and research facilities keeping up with demand of the day. Dhaka International University is known far and wide as one of the leading Institutions of higher education in Bangladesh.<br />\r\n', '2015-04-06 10:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `program` varchar(30) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `mobile_number` int(16) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `type` int(1) NOT NULL DEFAULT '0',
  `allow_email` int(11) NOT NULL DEFAULT '1',
  `profile` varchar(56) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `marital` varchar(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `ssc_degree` varchar(31) NOT NULL,
  `ssc_group` varchar(31) NOT NULL,
  `ssc_roll` int(31) NOT NULL,
  `ssc_pass` int(31) NOT NULL,
  `ssc_marks` int(31) NOT NULL,
  `ssc_gpa` double NOT NULL,
  `ssc_board` varchar(31) NOT NULL,
  `hsc_degree` varchar(31) NOT NULL,
  `hsc_group` varchar(31) NOT NULL,
  `hsc_roll` varchar(31) NOT NULL,
  `hsc_pass` int(31) NOT NULL,
  `hsc_mark` int(31) NOT NULL,
  `hsc_gpa` double NOT NULL,
  `hsc_board` varchar(31) NOT NULL,
  `father_name` varchar(31) NOT NULL,
  `mother_name` varchar(31) NOT NULL,
  `guardian_name` varchar(31) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `mailing_address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `program`, `username`, `password`, `first_name`, `last_name`, `email`, `email_code`, `mobile_number`, `active`, `type`, `allow_email`, `profile`, `gender`, `marital`, `semester`, `ssc_degree`, `ssc_group`, `ssc_roll`, `ssc_pass`, `ssc_marks`, `ssc_gpa`, `ssc_board`, `hsc_degree`, `hsc_group`, `hsc_roll`, `hsc_pass`, `hsc_mark`, `hsc_gpa`, `hsc_board`, `father_name`, `mother_name`, `guardian_name`, `permanent_address`, `present_address`, `mailing_address`) VALUES
(7, 'B.Sc in CSE', 'robicse8@gmail.com', 'b8b8287c8464766e3c366b7a56f706bc', 'Nehal ', 'Hossain', 'nehal@gmail.com', '63f983ca43e48a3ecbb2457ea208bcec', 1727424216, 1, 0, 1, 'img/profile/0473464d23.jpg', 'Male', 'Single', 'Full Semester', 'S.S.C', 'Science', 432154, 2007, 555, 4, 'Dhaka', 'H.S.C', 'Science', '343543', 2010, 650, 4, 'Dhaka', 'Sohrab Ali', 'Lalifa Naznin', 'Sohrab Ali', 'Dhanbari, Tangail', 'Mirpur, Dhaka', 'Mirpur 14'),
(8, 'B. Sc in CSE', 'robi', 'e10adc3949ba59abbe56e057f20f883e', 'robi1', 'hasan', 'robicse8@gmail.com', '88faf39abfdec61307ff71cd57369391', 1922088046, 1, 0, 1, 'img/profile/390a79cf95.jpg', 'Male', 'Single', 'Summer Semester', 's.s.c', 'Science', 202510, 2007, 700, 4.38, 'Rajshahi', 'h.s.c', 'Science', '202510', 2009, 700, 3.5, 'Rajshahi', 'Md. Alkas Ali', 'Mst. Feroza Khatun', 'Md. Salam Shakh', 'Natore,Rajshahi', '#26/A Station Road. Dhaka', '#26/A Station Road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts_diu`
--
ALTER TABLE `abouts_diu`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articles_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts_diu`
--
ALTER TABLE `abouts_diu`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articles_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
