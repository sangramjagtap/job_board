-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2016 at 03:07 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `responsibilities` text NOT NULL,
  `skills` text NOT NULL,
  `perks` text NOT NULL,
  `salary_min` int(11) NOT NULL,
  `salary_max` int(11) NOT NULL,
  `duration` enum('Full time','Part time') NOT NULL,
  `expires` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted` enum('no','yes') NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `title`, `company`, `location`, `description`, `responsibilities`, `skills`, `perks`, `salary_min`, `salary_max`, `duration`, `expires`, `created_by`, `deleted`, `date_created`, `date_modified`) VALUES
(1, 'Associate Software Engineer', 'Infosys Pvt Ltd', 'Ahmedabad', 'Ability to code right solutions starting with broadly defined problems, Understand basic Algorithm fundamentals Development of code in object oriented languages like Java or Ruby (ROR) and build, test, deploy large scale robust distributed systems.', '<ul class=''bullets''><li>Development of code in object oriented languages like Java or Ruby (ROR) and build, test, deploy large scale robust distributed systems.</li><li>Web designing with mockups.</li></ul>', '<ul class=''bullets''><li>A solid grounding in Computer Science fundamentals (based on a BS or MS in CS or related field)</li><li>Understanding of the tools of the trade, including an understanding of any of modern programming languages (Java / JavaScript / C/C++).</li><li>Proven educational track record with sound data structure and algorithm knowledge.</li></ul>', '<ul class=''bullets''><li>Apple gear upon joining ( MacBook )</li><li>Flexible work hours.</li></ul>', 400000, 1200000, 'Full time', '2016-11-08', 1, 'no', '2016-07-12 00:26:26', '0000-00-00 00:00:00'),
(2, 'Software Engineer', 'Surya Software Systems', 'Chandigarh', 'JavaScript and front-end development (Ember.js, AngularJS and Bootstrap)\r\n.Net developer, who can work on our next generation product. ', '<ul class=''bullets''><li>We’re looking for enthusiastic engineers, for whom building great software goes beyond a job, and is a passion.We’re looking for people who thrive in an aggressive, competitive environment, and like swimming in the deep end.</li></ul>', '<ul class=''bullets''><li>We’re looking for people who thrive in an aggressive, competitive environment, and like swimming in the deep end.We’re looking for people who don’t just see this as work, but as their life’s work.</li></ul>', '<ul class=''bullets''><li>Saturday - Sunday Off.</li><li>Apple gear upon joining ( MacBook )Flexible work hours.</li></ul>', 350000, 700000, 'Full time', '2016-11-15', 1, 'no', '2016-07-12 00:29:10', '2016-07-12 00:38:15'),
(3, 'De-identification Statistician, Data Sciences', 'Madgigs Corp', 'Bangalore', 'Janssen Pharmaceuticals is currently recruiting for a De-identification Statistician, Data Sciences. This position can be located in Raritan, NJ; Titusville, NJ; or Spring House, PA. Occasional travel to the NJ/PA sites will be required. Additional travel up to 15% may be required.', '<ul class=''bullets''><li>Ensure solutions are consistent with business objectives or business strategy.</li><li>Make decisions regarding resource alignment/dedication and prioritization (people resources, dollars/funding, project criticality) and communicate rationale back to the business and project management.</li><li>Contribute to the strategic planning process and long-term direction for the Privacy and De-identification team and aligns plans between stakeholders.</li></ul>', '<ul class=''bullets''><li>Strong understanding of technology trends and the potential impact on the security of clinical data.</li><li>Strong understanding of the business and its operating environment (e.g., trends, competitors, compliance landscape, and regulatory environment).</li><li>Strong expertise in health informatics, including familiarity with health outcomes databases, clinical trial registries Understanding of IT resource and cost drivers for a franchise or business unit.</li></ul>', '<ul class=''bullets''><li>We provide a compensation of INR700,000 - 900,000 with bonuses.</li><li>Apple gear upon joining ( MacBook )</li></ul>', 700000, 900000, 'Full time', '2016-12-17', 1, 'no', '2016-07-12 00:33:41', '0000-00-00 00:00:00'),
(4, 'Junior PHP Developer', 'Krazy Mantra IT Pvt Ltd', 'Ahmedabad', 'Looking for freshers who are extremely passionate about joining an early stage product start-up.. ', '<ul class=''bullets''><li>Degree in Computer Science and/or related field is a must.</li><li>Excellent communication skills ( both written and verbal ) is a must.</li><li>Basic knowledge of HTML/CSS/Javascript is a must.</li><li>Experience in building web applications using PHP would be a plus.</li><li>Experience in testing web applications would be a plus.</li></ul>', '<ul class=''bullets''><li>Experience in building web applications using PHP would be a plus.</li><li>Experience in testing web applications would be a plus.</li><li>Must be willing to work with a  small team and must have the ability to adapt to a fast-paced development environment quickly.</li></ul>', '<ul class=''bullets''><li>Flexible work hours.</li><li>Anti-Dry Fridays sponsored by company, twice a month. ( we like to party every time a new product/feature is released, typically happens once in two weeks )</li></ul>', 200000, 450000, 'Full time', '2016-12-08', 2, 'no', '2016-07-12 00:37:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `date_created`, `date_modified`) VALUES
(1, 'sangramjagtap7@gmail.com', '32939b3409476caa3ca02816c290145d', 'Sangram Jagtap', '2016-07-12 00:34:51', '0000-00-00 00:00:00'),
(2, 'john@gmail.com', '225c8942e4d803ddd033d6722dd57985', 'John Smith', '2016-07-12 00:42:20', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
