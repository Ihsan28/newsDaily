-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 12:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `doj` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `gender`, `dob`, `image`, `doj`, `status`) VALUES
(1, 'Jack Richer', 'jack@email.com', '123456iI@', 'male', '2021-04-03', '../../resources/profile/default.png', NULL, 'approved'),
(2, 'Jhon Abraham', 'jhon@email.com', '123456iI@', 'male', '2021-04-03', '../../resources/profile/default.png', NULL, 'approved'),
(3, 'Sakibul Alam Utchash', 'utchas@gmail.com', '123456iI@', 'male', '1999-10-23', '../../resources/profile/default.png', NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `doj` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id`, `name`, `email`, `password`, `gender`, `dob`, `phone`, `address`, `image`, `doj`, `status`) VALUES
(2, 'Abraham Lincon', 'ab@gmail.com', '123456iI@', 'male', '2021-04-05', '+8801963518609', 'kaliakair road|37634|Bangladesh', '../../resources/profile/1901854432robot_cyborg_eyes_dark_103462_2560x1440.jpg', NULL, 'approved'),
(3, 'Disha', 'disha@gmail.com', '123456iI@', 'male', '2021-04-01', '+8801963518609', 'kaliakair road|37634-baridhara|Bangladesh', '../../resources/profile/51536101236.jpg', NULL, 'approved'),
(4, 'utchas-UI', 'jhon@gmail.com', '123456iI@', 'male', '2021-04-07', '+8801963518609', 'kaliakair road|37634|Bangladesh', '../../resources/profile/84715713397.jpg', NULL, 'approved'),
(5, 'aqibq', 'aqib@gmail.com', '123456iI@', 'male', '2021-04-01', '+8801963518609', 'kaliakair road|37634|Bangladesh', '', NULL, 'approved'),
(6, 'utchas-UI', 'utchass@gmail.com', '123456iI@', 'male', '2021-04-12', '+8801963518609', 'kaliakair road|23232jmmd|England', '', NULL, 'pending'),
(7, 'utchas', 'utchas@email.com', '123456iI@', 'male', '2021-04-25', '+8801963518609', 'kaliakair road|37634-baridhara, R/A|Bangladesh', '../../resources/profile/default.png', NULL, 'pending'),
(8, 'ihsan', 'ihsan@gmaill.com', '123456iI@', 'male', '2021-04-26', '+8801963518609', 'kaliakair road|37634-baridhara, R/A|Bangladesh', '../../resources/profile/default.png', NULL, 'approved'),
(9, 'aqibd', 'qw@gmail.com', '123456iI@', 'male', '2021-04-27', '+8801963518609', 'kaliakair road|37634-baridhara, R/A|Bangladesh', '../../resources/profile/default.png', '2021/05/01', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `body` varchar(5000) NOT NULL,
  `images` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `images`, `catagory`, `date`, `rid`, `eid`, `status`, `remark`) VALUES
(5, 'Bangladesh ', 'Malls and stores will be allowed to reopen on Sunday amid the nationwide lockdown with shopping hours from 10 am to 5 pm every day.\r\nThe Cabinet Division issued a notice on Friday, allowing the reopening of the malls and stores and instructed the shop owners to maintain “strict” health rules.\r\n\r\nThe notice takes into account the lives and livelihoods of the people employed in the sector.\r\n\r\n“The market management committees must take necessary measures to implement the directives,\" the notice said.\r\n\r\nThe second phase of a stricter lockdown, enforced since Apr 14 to curb the spread of coronavirus infections, will continue until Apr 28. All stores and malls had been ordered shut.\r\n\r\nBangladesh on Thursday registered 98 new fatalities from the coronavirus, taking the death toll to 10,781. The caseload surged by 4,014 in 24 hours to 736,074, according to government data.', '../../resources/news/default.jpg', 'national', '23-0432021', 3, 2, 'approved', 'updated'),
(6, 'qwertyAvoid Travel To India, Pak, Bangladesh, China: US To Citizens Amid Covid', 'Avoid Travel To India, Pak, Bangladesh, China: US To Citizens Amid Covid\r\nIndia, Pakistan, Afghanistan, Bangladesh and the Maldives have been put in Level 4. (Representational)\r\n\r\n\r\nWashington: The US has advised its citizens to avoid travelling to India, Pakistan, Bangladesh, Afghanistan and the Maldives due to the sudden surge in COVID-19 cases in the region.\r\nIn a series of travel advisories on Thursday, the authorities also urged Americans to reconsider travel to China and Nepal; exercise increased caution while travelling to Sri Lanka and exercise normal travel precaution to Bhutan, which has been given Level 1, the safest level for travelling overseas.\r\n\r\nIndia, Pakistan, Afghanistan, Bangladesh and the Maldives have been put in Level 4, which means asking Americans not to travel to these countries.\r\n\r\n\"Do not travel to India due to COVID-19, crime, and terrorism,\" the State Department said in its latest travel advisory on India, days after the Centers for Disease Control and Prevention (CDC) issued a similar warning for India.\r\n\r\nThe CDC issued a Level-4 Travel Health Notice for India due to COVID-19, indicating a very high level of COVID-19 in the country.\r\n\r\n\"Do not travel to the Maldives due to COVID-19. Exercise increased caution in the Maldives due to terrorism,\" the State Department said in its travel advisory for the country.', '../../resources/news/default.jpg', 'health', '23-04-2021', 3, 2, 'approved', 'updated'),
(7, 'Bangladesh reports 4,014 ', 'Bangladesh has registered 98 new fatalities from the coronavirus in a day, taking the death toll to 10,781.\r\nThe caseload surged to 736,074 after 4,014 people tested positive for COVID-19 in the 24 hours to 8 am Thursday, according to data released by the government.\r\n\r\nAnother 7,266 people recovered from the illness through treatment at home and in hospital care, bringing the tally of recoveries to 642,449.\r\n\r\nAs many as 27,429 samples were tested across the country in the last 24 hours, yielding a positivity rate of 14.63 percent.\r\n\r\nThe latest official figures put the recovery rate at 87.28 percent, while the mortality rate stands at 1.46 percent.\r\n\r\nGlobally, over 143.87 million people have been infected by the novel coronavirus and 3.05 million have died, according to a tally by Johns Hopkins University.\r\n\r\nInfections have been reported in more than 210 countries and territories since the first cases were identified in China in December 2019.', '', 'health', '22-04-2021', 7, 2, 'approved', 'updated'),
(8, 'Soccer\'s controversial new Super League collapses after 6 English clubs withdraw', 'The Super League collapsed before a ball was kicked in the European breakaway competition after being abandoned by the six English clubs, leaving the Spanish and Italian participants stranded.\r\n\r\nArsenal, Chelsea, Liverpool, Manchester United, Manchester City and Tottenham throughout Tuesday evening deserted the proposal to launch a largely-closed midweek competition amid an escalating backlash from their supporters and warnings from the British government that legislation could be introduced to thwart it.\r\n\r\nThe Super League project was overseen by Real Madrid President Florentino Perez, who also signed up Barcelona and Atlético Madrid in Spain, and Juventus, AC Milan and Inter Milan from Italy. The rival for the UEFA-run Champions League became unviable without the six clubs from the world\'s richest league.The remaining fledgling Super League organization was defiant, blaming \"pressure\" being applied for forcing out the English clubs and insisting the proposal complied with the law and could yet be revived in some form.\r\n\r\n\"Given the current circumstances,\" the Super League said in a statement, \"we shall reconsider the most appropriate steps to reshape the project, always having in mind our goals of offering fans the best experience possible while enhancing solidarity payments for the entire football community.\"', '', 'sports', '23-04-2021', 1, 2, 'approved', 'updated'),
(9, 'US joins race to find stricken Indonesia submarine', 'The US military is sending airborne assistance to aid Indonesia\'s search for a missing submarine with 53 crew.\r\n\r\nIndonesian authorities estimate they have just hours left to find the navy submarine before the oxygen runs out.\r\n\r\nThe KRI Nanggala 402 disappeared on Wednesday during exercises off the coast of Bali, sparking a frantic search to locate the stricken vessel.\r\n\r\nAn oil slick where it was thought to have submerged suggested damage to a fuel tank may have been a factor.\r\n\r\nPentagon spokesman John Kirby said the US was \"deeply saddened\" by the turn of events.\r\n\r\n\"Our thoughts are with the Indonesian sailors and their families,\" Mr Kirby said in a statement. \"At the invitation of the Indonesian government, we are sending airborne assets to assist in the search for the missing submarine.\"\r\nThe Indonesian military said late on Thursday night that it had detected signs of an object at a depth of between 50 and 100 metres (165 to 330 feet), and had deployed ships with sonar-tracking equipment in the hope it was the KRI Nanggala 402.\r\n\r\n\"We\'ve only got until 0300 tomorrow [Saturday] so we\'re maximising all of our efforts today,\" said Indonesian military spokesman Achmad Riad. \"Hopefully there will be a bright spot.\"\r\n\r\nAt least six warships, a helicopter and 400 people have since been involved in the search. Singapore and Malaysia have dispatched ships to the area, and Australia, France and Germany have also offered assistance.\r\n\r\n\"We keep waiting, we keep praying,\" Ratih Wardhani, whose brother Major Wisnu Subiyantoro among the crew, told the BBC.\r\n\r\n\"We hope that God will ease the effort of the joint rescue team from the Indonesian Navy and other countries, and they will successfully bring the Nanggala submarine with its 53 personnel to reunite with their families happily,\" she said.\r\n\r\n\"That is our hope. We can only support them with our prayers and our optimism that they will return.', '', 'international', '23-04-2021', 2, 2, 'approved', 'updated'),
(10, 'Tesla\'s Autopilot \'tricked\' to operate without driver', 'The Autopilot feature in Tesla vehicles can be tricked into operating without a driver, an influential consumer magazine in the US has found.\r\n\r\nConsumer Reports engineers looked into claims that Autopilot can operate without a driver present.\r\n\r\nThey tested the Model Y on a closed track and concluded the system could be \"easily tricked\".\r\n\r\nIt comes days after a fatal Tesla crash in Texas. Police believe no one was in the driver\'s seat.\r\n\r\nTesla\'s Autopilot is an advanced driver assistance system that Tesla says \"enhances safety and convenience behind the wheel\".\r\n\r\n\'Clearly insufficient\'\r\nThe Consumer Reports team said they successfully - and repeatedly - tricked the car into driving their test track with no one in the driver\'s seat.\r\n\r\n\"In our evaluation, the system not only failed to make sure the driver was paying attention, but it also couldn\'t tell if there was a driver there at all,\" said Consumer Reports auto testing director Jake Fisher.\r\n\r\n\"It was a bit frightening when we realized how easy it was to defeat the safeguards, which we proved were clearly insufficient.\"\r\n\r\nTesla\'s website says the Autopilot system requires a \"fully attentive driver\" and using the system does not make the car autonomous.\r\n\r\nSome of the safety requirements for Autopilot mode include: keeping the driver\'s hands on the steering wheel, buckling the seatbelt and not opening any doors.', '', 'tech', '23-04-2021', 7, 2, 'approved', 'updated'),
(11, 'All-new iMac features stunning design in a spectrum of vibrant colors, the breakthrough M1 chip, and a brilliant 4.5K Retina display', 'iMac offers the best camera, mics, and speakers ever in a Mac, and Touch ID for the first time\r\nCUPERTINO, CALIFORNIA Apple today introduced an all-new iMac featuring a much more compact and remarkably thin design, enabled by the M1 chip. The new iMac offers powerful performance in a design that’s just 11.5 millimeters thin, with a striking side profile that practically disappears. Available in an array of vibrant colors to match a user’s personal style and brighten any space, iMac features a 24-inch 4.5K Retina display with 11.3 million pixels, 500 nits of brightness, and over a billion colors, delivering a brilliant and vivid viewing experience.\r\nThe new iMac also includes a 1080p FaceTime HD camera, studio-quality mics, and a six-speaker sound system — the best camera and audio ever in a Mac. Also, Touch ID comes to iMac for the first time, making it easier than ever to securely log in, make purchases with Apple Pay, or switch user profiles with the touch of a finger. Combining the power and performance of M1 and macOS Big Sur, apps launch with blazing speed, everyday tasks feel incredibly fast and fluid, and demanding workloads like editing 4K video and working with huge images are faster than ever. The new iMac joins the incredible family of Mac models powered by M1, including MacBook Air, 13-inch MacBook Pro, and Mac mini, marking another step forward in Apple’s transition to Apple silicon. iMac is the most personal, powerful, capable, and fun it has ever been, and customers can order it beginning Friday, April 30. iMac will be available in the second half of May.\r\n“M1 is a gigantic leap forward for the Mac, and today we’re excited to introduce the all-new iMac, the first Mac designed around the breakthrough M1 chip,” said Greg Joswiak, Apple’s senior vice president of Worldwide Marketing. “With its striking design in seven stunning colors, its immersive 4.5K Retina display, the best camera, mics, and speakers ever in a Mac, and Touch ID, combined with the amazing performance of M1 and the power of macOS Big Sur, the new iMac takes everything people love about iMac to an entirely new level.', '', 'tech', '20-04-2021', 7, 2, 'approved', 'updated'),
(12, 'Cristiano Ronaldo ‘decides to leave Juventus’ with two clubs interested in transfer', 'Ronaldo has continued to shine for Juventus this season, despite entering the twilight years of his career.\r\n\r\nThe 36-year-old has scored 23 goals and registered three assists from 24 Serie A matches, while also scoring four times in the Champions League.\r\n\r\nHowever, with the coronavirus crisis severely impacting the reigning Italian champions, talk of a move away has started to gather momentum.\r\n\r\nAnd Spanish website OkDiario claim Ronaldo is ready to leave Juventus this summer - with two bad results behind his thinking.\r\n\r\nHe’s reportedly still hurting in the wake of the club’s Champions League exit, with the Old Lady exiting the competition to Porto earlier in the month.\r\nAnd Ronaldo is unhappy at their recent defeat to Benefento, in a loss that all but ends their hopes of winning the Scudetto for a tenth season in a row.\r\n\r\nIt’s claimed that, with Manchester United and Real Madrid ruling out a move for the Portugal international, he now has two possible destinations.\r\n\r\nPSG could land Ronaldo this summer, especially if Kylian Mbappe leaves and Lionel Messi decides to stay at Barcelona.\r\n\r\nAnd Inter Miami are also hoping to sign the veteran, with David Beckham already admitting he’s keen to attract superstars to the MLS.\r\n\r\nAsked what his sales pitch would be to Ronaldo or Messi, Beckham recently said: “To be honest, it’s not a difficult pitch. You just say ‘Miami’ and they’re like, ‘okay!’”', '', 'sports', '21-04-2021', 1, 2, 'approved', 'updated'),
(13, 'Stopping plastic in rivers from reaching the ocean with new tech from The Ocean Cleanup', 'The Ocean Cleanup CEO Boyan Slat discusses river-focused plastic Interceptors and the nonprofit\'s plans for the near future\r\nNonprofit The Ocean Cleanup is continuing its mission to rid the world of plastic pollution by catching it before it even makes its way to the sea. The organization has introduced a new third-generation Interceptor that it says can remove larger debris more efficiently.\r\nFirst announced by Ocean Cleanup founder and CEO Boyan Slat in 2019, the Interceptors are moored to river beds and use the currents to snag debris floating on the surface. Then they direct the trash onto a conveyor belt that shuttles it into six large onboard dumpsters. The Interceptors run completely autonomously day and night, getting power from solar panels. \r\n\r\nThe amount of garbage and floating debris is constantly being monitored by the Interceptors\' onboard computers, and the trash is emptied daily by a small crew.\r\n\r\nAccording to the International Union for Conservation of Nature, 8 million tons of plastic winds up in our oceans every year, threatening marine life and polluting ecosystems all over the world. The Center for Biological Diversity estimates that plastic waste will outweigh all the fish in the sea by the year 2050.', '', 'tech', '20-04-2021', 7, 2, 'approved', 'updated');

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

CREATE TABLE `reporter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `doj` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reporter`
--

INSERT INTO `reporter` (`id`, `name`, `email`, `password`, `gender`, `dob`, `phone`, `address`, `image`, `doj`, `category`, `status`) VALUES
(1, 'iramul', 'iramul@gmail.com', '123456iI@', 'male', '1998-04-04', '+880193264367', 'lkdfjl|akaksd|Bangladesh', '../../resources/profile/763289731computers_microchip_041210_.jpg', '2021-04-04', 'Sports', 'approved'),
(2, 'Ihsan Md. Al-Aqib', 'aqib@gmail.com', '123456iI@', 'male', '1998-02-23', '+8801963518609', 'kjdrfha|kjshahd|Bangladesh', '../../resources/profile/default.png', NULL, 'sports', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `doj` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`, `dob`, `phone`, `address`, `image`, `doj`, `status`) VALUES
(2, 'ubbbbb', 'ub@gmail.com', '1$Aaaaaa', 'male', '1-1-1999', '', '', '', '1-2-2019', 'disabled'),
(3, 'uccccc', 'uc@gmail.com', '1$Aaaaaa', 'female', '1-1-2000', '', '', '', '20-2-2019', 'disabled'),
(4, 'uddddd', 'ud@gmail.com', '1$Aaaaaa', 'female', '20-20-2000', '+8801873468723', '', '', '20-3-2020', 'approved'),
(6, 'Rakib', 'rakib@gmail.com', '123456iI@', 'male', '2021-04-03', '+8801873468723', 'gulshan road 1|1200|Bangladesh', '../../resources/profile/1202609598signup.png', NULL, 'approved'),
(7, 'utchas-UI', 'utchash@gmail.com', '123456iI@', 'male', '2021-02-02', '+8801963518609', 'kaliakair road|37634-baridhara|England', '../../resources/profile/172445323697.jpg', NULL, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reporter`
--
ALTER TABLE `reporter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reporter`
--
ALTER TABLE `reporter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
