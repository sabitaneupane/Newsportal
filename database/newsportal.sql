-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 03:00 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Topic` varchar(1000) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `Datetimes`, `Topic`, `Description`, `Photo`) VALUES
(1, '2016-12-15', ' British Airways cabin crew to strike over Christmas', ' British Airways cabin crew based at Heathrow airport are to strike on Christmas Day and Boxing Day in a row over pay and conditions.\r\nThe action, backed by the Unite union, could involve up to 4,500 staff on &quot;mixed fleet&quot; contracts who joined the airline since 2010.\r\nUnite said they were on lower pay than other staff.\r\nBritish Airways called the strike &quot;calculated&quot; and &quot;completely unnecessary&quot;.\r\nContingency plan\r\nAccording to the airline, all long haul flights will proceed as normal, as will all flights out of Gatwick airport and City.\r\nIt said it was working on a contingency plan for Heathrow which would be published in the next three days.', '_93006530__92970234_gettyimages-172620770.jpg'),
(2, '2016-12-12', ' Australian court increases fine over &#039;misleading&#039; Nurofen', ' The UK manufacturer of Nurofen has been hit with an increased fine of A$6m (Â£3.6m; $4.4m) for misleading customers in Australia.\r\nAustralia&#039;s Federal Court ruled last year that products marketed as targeting specific pains, such as migraines, were actually identical.\r\nReckitt Benckiser was fined A$1.7m in April, but Australia&#039;s consumer watchdog argued the sum was too low.\r\nThe court on Friday agreed to increase the penalty.\r\n&quot;The objective of any penalty in this case must be to ensure that Reckitt Benckiser and other &#039;would-be wrongdoers&#039; think twice and decide not to act against the strong public interest,&quot; the court&#039;s justices said in a joint statement.\r\nThe pharmaceutical giant was also ordered to pay the Australian Competition and Consumer Commission&#039;s (ACCC) legal costs.', '_87192024_nurofen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dailynews`
--

CREATE TABLE `dailynews` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Topic` varchar(1000) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailynews`
--

INSERT INTO `dailynews` (`id`, `Datetimes`, `Topic`, `Description`, `Photo`) VALUES
(1, '2016-12-15', 'Bhola Thapa - Campus recall', 'KATHMANDU: Prof Dr Bhola Thapa is the Registrar of Kathmandu University. The Dean at School of Engineering, KU since 2008, he has worked in various other projects as a Mechanical Engineer. He was awarded with a certificate and gold medal by the Ministry of Education on the occasion of Education Day 2054 BS for his contribution in educational field. Prof Dr Thapa also has a vision to spread awareness about why engineers are necessary for our country. ', 'bhola thapa img.jpg'),
(2, '2016-12-14', '1 katha+3 tola = billions     ', '       Let us all congratulate our incompetent government for finally making public the property details of our ruling clowns. If our clowns followed the law then they should have submitted their property details within two months of sitting on those â€˜money-makingâ€™ kurchis. But who cares about the laws of the land anyway? Our lawmakers are happy to be lawbreakers and it is with great pride that they break the laws routinely and defy the Supreme Court and even get to continue to loot with impunity.\r\n\r\nOur bunch of thieves must have been busy calculating their net worth or they were trying to figure out what to add and what to omit from the list before submitting it. And it took them four months to let us know how many tola of gold, silver and other stuff they have while it would take us common folks a few hours to come up with the list of our personal assets.\r\n\r\nWe thought that our Emperor was worth billions with his investment in property, cooking gas, media, telecom and what not. But we were wrong. If we are to believe him, then the man has nothing while his spouse has only 1 Katha of land and 3 tola of gold. Only late Sushil Da was worth less because he had only three mobile phones to his name. \r\n\r\nOur Emperor is right when he tells us that he has nothing. His investments are in the name of his cousins, relatives and friends. And itâ€™s surprising that our Prime Monster doesnâ€™t seem to have any cash at all. Maybe he just spends all his salaries and chiya kharcha provided by the state and has zero balance in the bank. Somebody needs to teach this man how to save for the future!\r\n\r\nOur politicians live like Kings but to finance such lifestyle they must make at least a few lakhs Rupees every month. If they only depend on salaries from the State then how can they continue to live the high life? Do they have byapari friends who pay their house rent and provide them with expensive bidhesi whiskeys every other day?\r\n\r\nOur Deputy Prime Monster and Home Minister Bimalendra Nidhi is a rich man. Nidhi is the man who wants to transfer police wallahs not because they donâ€™t do their job right but because they do the right thing and not listen to the Home Ministerâ€™s orders to release his criminal cadres or look the other way when it comes to criminal activities around the country.\r\n\r\nHe claims to have bought two ropani of land in Bhaktapur with his salaries and allowances. Maybe he can teach us all how to be a saver and not a spender. Yes, we should all learn from our politicians when it comes to saving as much as possible and making sure we have enough funds for retirement.\r\n\r\nBut the only difference is that our politicians make millions of Rupees in chiya kharcha from our civil servants, contractors and con artists while we the people have to do with whatever we earn in a month and on top of that have to worry about how to pay our kidsâ€™ school fees, how to manage our budget during medical emergencies and where to look for loans to enjoy the festivals.\r\n   ', 'Prachanda-property.jpg'),
(3, '2016-12-14', 'Joint struggle committee continues general strike in various districts', 'The joint struggle committee continued its protest against the constitution amendment bill on Saturday as well by enforcing general strike in various districts of province 5. The protesters are against splitting of Tarai and hill districts in province 5 as provisioned by the amendment bill.\r\n\r\nRupandehi district has come to a grinding halt due to the banda. Major cities and market places in the district have remained shut. Vehicular movement along the east-west highway and Siddhartha highway is nil. Cadres of various political parties affiliated to the joint struggle committee carried out protest rallies in Butwal--the epicenter of the agitation.\r\n\r\nLikewise, the general strike has affected normal life in Pyuthan district. Market places, industries, factories could not come into operation due to the banda.\r\n', 'stike.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Topic` varchar(1000) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`id`, `Datetimes`, `Topic`, `Description`, `Photo`) VALUES
(1, '2016-12-20', ' Shah Rukh Khan: Can&#039;t thank Ashutosh enough for &#039;Swades&#039;', '  As the film clocked 12 years today, the 51-year-old actor posted a sweet message on Twitter, praising the entire cast and crew of the movie.\r\n&quot;Yeh jo Des hai mera Swades hai mera... Can&#039;t thanks Ashutosh enough for such a lovely film. Whole cast/crew had such faith in goodness and Indianness,&quot; he wrote.\r\nYeh jo Des hai mera Swades hai mera..Can&#039;t thx Ashutosh enuff for such a lovely film.Whole cast/crew had such faith in goodness &amp; Indianness\r\n', 'download.jpg'),
(2, '2016-12-08', ' Kareena Kapoor&#039;s interesting statements', ' Kareena Kapoor Khan has set new goals for mommies-to-be â€“ the actress has been out and about in the city, flaunting her baby bump and indulging in brunch dates. Unlike many other actresses who shied away from media during their pregnancy, Kareena was more than happy to pose for the shutterbugs on numerous ', 'download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Peoplename` varchar(1000) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id`, `Datetimes`, `Peoplename`, `Description`, `Photo`) VALUES
(1, '2016-12-16', ' Barsha Raut', ' ', 'model1.jpg'),
(2, '2016-12-17', ' Aakash   Shrestha', '     ', 'model2.jpg'),
(3, '2016-12-02', ' Priyanka Karki', ' ', 'model3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `horoscope`
--

CREATE TABLE `horoscope` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Aries` varchar(1000) DEFAULT NULL,
  `Taurus` varchar(1000) DEFAULT NULL,
  `Gemini` varchar(1000) DEFAULT NULL,
  `Cancer` varchar(1000) DEFAULT NULL,
  `Leo` varchar(1000) DEFAULT NULL,
  `Virgo` varchar(1000) DEFAULT NULL,
  `Libra` varchar(1000) DEFAULT NULL,
  `Scorpio` varchar(1000) DEFAULT NULL,
  `Sagittarius` varchar(1000) DEFAULT NULL,
  `Capricorn` varchar(1000) DEFAULT NULL,
  `Aquarius` varchar(1000) DEFAULT NULL,
  `Pisces` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horoscope`
--

INSERT INTO `horoscope` (`id`, `Datetimes`, `Aries`, `Taurus`, `Gemini`, `Cancer`, `Leo`, `Virgo`, `Libra`, `Scorpio`, `Sagittarius`, `Capricorn`, `Aquarius`, `Pisces`) VALUES
(1, '2016-12-23', '    Bring your emotions down to Earth today, Aries. Your imagination may run away with you. If you don&#039;t take a hard look at reality, you may find yourself in big trouble later. The higher you soar, the harder you fall. Make sure you have a working parachute. Be realistic about your current situation and act with confidence. Make sure you have the facts before you set goals and plans. ', '   Try not to be extravagant today, Taurus. You&#039;re much better off lying low. Focus on you and what you need to do. Don&#039;t waste your time trying to attract others&#039; attention. Let them deal with themselves while you concentrate on your goals and chores. Tackle all projects with gusto. You will find that you can be very productive as long as you stay focused and calm.', '   Today is a terrific day in which you should find that things work very smoothly. You have a hardheaded approach that will help you get down to business and get things done. Make sure you&#039;re on solid ground before you take the next step upward. You have the ability to reach the summit of many mountains, so don&#039;t waste any time. Put on your boots and start climbing.  ', '   There&#039;s a serious tone to the day, Cancer, so take this into account when you get the urge to play a practical joke on a friend. Keep things real. Stick close to home and take care of any menial tasks. Start a garden or buy some plants for your house. You have a disciplined nature that will help you get things done.  ', '   Bring stability to your emotions today, Leo. You have the tendency to take things to extremes, swinging from incredible highs to rock-bottom lows. Give your nervous system a break and calm down. Go for a walk in the woods. Make sure that all your actions are rational and well planned. See to it that you&#039;re in control of your emotions before you interact with others.  ', '   Take care of your home today, both physically and emotionally. See that bills are paid and the bedroom is tidy. Don&#039;t forget to clean the dust from under your bed and the demons from inside your mind. Realize that you might be running on someone else&#039;s operating system that got stuck in your hard drive. Make sure you replace it with your own software before you continue.  ', '   Go ahead and act confidently, Libra. You will probably find that you&#039;re more stable and grounded in general, leaving you free to explore and take more risks than you normally would. Your intuition may be strong, so don&#039;t hesitate to rely on it. Make sure your actions are clear and decisive. You have a great deal of power, so use it wisely.  ', '   It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined.  ', '   Finish whatever you didn&#039;t wrap up yesterday, Sagittarius. Use the morning to plan, the afternoon to execute, and the evening to relax. Be conscious of time and your physical and mental limitations. Bring your dreaminess down to Earth and be realistic about goals. Take time to put the extra coat of wax on the car or extra stitch in the fabric. That effort will serve you well in the long run.  ', '   Give it a rest today, Capricorn. Recharge your batteries. Stick close to home and take a load off your feet. Convince someone to give you a massage, or better yet, go to a professional. You deserve a break. Once you&#039;re restored, consider all the ramifications of whatever actions you take before you start. Plan your moves carefully. Be strong and decisive not rash and frantic.  ', '   Feel free to move forward with your plans, Aquarius. This is a great day to take action. You&#039;ve done a great deal of data collecting and analyzing lately. Now is the time to put that information to good use. You&#039;re helped by an extra boost of inner confidence and emotional strength. Your grounded, conservative approach will be richly rewarded. You couldn&#039;t ask for a more productive day!  ', '   You may have a hard time getting started today, Pisces. This might be a better time to plan. Be realistic and thoughtful in your actions. Be conscious of the steps you need to take to reach a certain goal. When in doubt, take the more conservative route. You will find that there is a great deal of support for that path. Don&#039;t get distracted along the way. Stay on target.  '),
(2, '2016-12-08', ' It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined.', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ', 'It may be hard for you to get a project off the ground, Scorpio. Perhaps this is a sign that it needs to stay there. Take it back to the drawing board. Do some more planning and testing. Make sure that your actions are well thought out. Test the brakes before you drive down the mountain. You will find that you can accomplish a lot today if you stay focused and disciplined. ');

-- --------------------------------------------------------

--
-- Table structure for table `international`
--

CREATE TABLE `international` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Topic` varchar(1000) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international`
--

INSERT INTO `international` (`id`, `Datetimes`, `Topic`, `Description`, `Photo`) VALUES
(1, '2016-12-08', ' Rogue One: Sydney policeman a hit in &#039;Aussie Vader&#039; costume', ' A Sydney police officer and huge Star Wars fan has become a local hit after creating a Darth Vader costume painted with the Australian flag.\r\nThe 39-year-old, who goes by the name Mick Fett, was born the year the first film in the series came out.\r\nSince the 1990s, Fett has amassed a vast collection of action figures, costumes and other merchandise.\r\nHis collection fills the five-bedroom home he shares with his girlfriend and is estimated to be worth A$500,000 (Â£300,000; $370,000).\r\n&quot;I mentioned that I had some Star Wars stuff when we first got together,&quot; he told the BBC. &quot;She was a bit overwhelmed at first and then she sort of adapted.&quot;', '_92997312_gettyimages-500742394.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Topic` varchar(1000) DEFAULT NULL,
  `Names` varchar(500) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `Datetimes`, `Topic`, `Names`, `Description`, `Photo`) VALUES
(1, '2016-12-12', 'CITE Vision on Quality Education, Er. Sudhir Guragain  ', 'Er. Sudhir Guragain', '    College of Information Technology and Engineering (CITE) is the First IT enabled college of Nepal. It is one of the Purbanchal University affiliated college and is also famous with the name of CIT. From the beginning of itâ€™s in 2000, it has conducted lots of program for Information Technology, Engineering and Management; with the motto of engage, learn, innovate, succeed and connect. Currently,  It is situated in Kathmandu valley at Tinkune, Subidhanagar. From the very beginning of this college is always dedicated to provide its student with intellectual insights and technical knowledge as per the demands of Globalized market in related field. So, CIT College has become the center of attraction for every new comerâ€™s students to achieve the highest professional standards of quality education. ', 'cite.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(15) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Password`) VALUES
(5, 'sabita', 'ee4a744ad3056989e8da0938459c3a56'),
(6, 'neupane', '37df3af6a37baafc9000405951b9f0bd');

-- --------------------------------------------------------

--
-- Table structure for table `national`
--

CREATE TABLE `national` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Topic` varchar(1000) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `national`
--

INSERT INTO `national` (`id`, `Datetimes`, `Topic`, `Description`, `Photo`) VALUES
(1, '2016-12-04', 'Pushpa Basnet is CNN Superhero ', ' Nepali social worker Pushpa Basnet has been declared CNN Superhero on Monday.\r\n\r\nShe was announced the winner by the global television giant on the occasion of the 10th anniversary of the CNN Heroes campaign. She also received a cash prize of USD 50,000 from CNN.\r\n\r\n Basnet, who has been involved in exemplary work by providing shelter to the children forced to live with their convicted parents in prison, was nominated for CNN Superhero title along with Robin Lim, Liz McCartney, Efren PeÃ±aflorida and Chad Pregracke.\r\n\r\nBasnet established Early Childhood Development Centre (ECDC) at Budhanilkantha to provide residential facilities including education to the children of convicted parents. She had been awarded the CNN Hero title in 2012. ', 'hqdefault.jpg'),
(4, '2016-12-22', 'People participate in a rally to support Nepal Electricity Authority Managing Director Kulman Ghising at Bhrikutimandap on Saturday.', ' People participate in a rally to support Nepal Electricity Authority Managing Director Kulman Ghising at Bhrikutimandap on Saturday.', '01a16-3--2-.jpg'),
(5, '2016-12-19', ' Seven killed as jeep plunges into Sunkoshi River', ' Seven persons including a driver were killed when a jeep heading for Haleshi from Kathmandu plunged into Sunkoshi River on Sunday afternoon.\r\n\r\nInspector Nirmal Paneru at District Police Office, Sindhuli told Republica Online that four men and three women died when a jeep, Ba 12 Pa 8897, skidded off the road and fell into the river at Ratnawati-3, Solukhola along the Mid-Hill Highway.\r\n', 'Sindhuli_district_location.png'),
(6, '2016-12-14', ' Nepal beats Malaysia by one wicket', ' Nepal defeated Malaysia by one wicket in its third match of the ongoing ACC U-19 Asia Cup in Colombo, Sri Lanka on Sunday.\r\n\r\nNepal reached the 154 runs target set by Malaysia losing nine wickets in 44.4 overs. It is the first win for Nepal in the tournament. Nepal had suffered two consecutive defeats at the hands of Sri Lanka and India.\r\n\r\nAnil Sah top-scored for Nepal at 32 runs as Dipendra Singh Airee made 22 runs. Avinash Karn and Pawan Sarraf contributed equal 29 runs.\r\n\r\nVirandeep Singh of Malaysia sent three Nepali batsmen back to the pavilion. Syed Aziz, Muhammad Hafiz and Muhammad Amir took equal two wickets.\r\n', 'dec 18 nepal.jpg'),
(2, '2016-12-07', 'Grand success of Ncell Mela 2073 at Butwal ', ' Ncell Mela 2073 were at Butwal on 19th September 2016 after their grand success at Narayanghat and Pokhara. Ncell Mela packed with entertainment activities, games, food and fun at Siddheshwari school ground Butwal. Performance by famous celebrity artists and bands, game stalls, kids zone and food stalls were some of the features of the Mela. That is not all; people visiting the Mela were provided exciting offers in Ncell products and services and there was a special Ncell High Tech Zone, where visitors can test data, 3G speed and devices.\r\n\r\nMore than 20,000 visitors were present in the event being the extreme crowded mela. Overall it was a massive successful event at Butwal. ', 'IMG_7128-640x480.jpg'),
(3, '2016-12-14', 'Ncell Mela in 5 cities, 19th September in Butwal ', ' Ncell, the leading mobile service provider of the country, is organizing Ncell Mela in 5 major cities of the country, starting September 15, 2016. The event is being organized in Narayanghat, Pokhara, Butwal, Dharan and Birtamode to exchange seasonal greetings amid nearing festival season and to introduce new brand logo of the company among customers in local level.\r\n\r\nNcell Mela packed with entertainment activities, games, food and fun will begin from Narayanghat (Narayani Kinar) on September 15. It will reach Pokhara (Exhibition Centre, Nayabazaar) on September 17, Butwal (Siddheswari Ground, Deep Nagar)  on September 19 and Dharan (Public High School Ground, Dharan) on September 22. It will conclude on September 24 reaching Birtamode (Sugam Petrol Pump Ground). The Mela will begin at 11AM onwards till the evening followed by the concert in all the 5 cities. ', 'Ncell-brand-logo-696x524.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Topic` varchar(1000) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `Datetimes`, `Topic`, `Description`, `Photo`) VALUES
(1, '2016-12-01', ' Lane Kiffin releases open letter to FAU fans, urging ticket sales ', '  Lane Kiffin is already busy trying to sell some Florida Atlantic tickets.\r\n\r\nFAU new football coach released an open letter to the Florida Atlantic community Friday night, announcing that he will personally make a donation to a university scholarship fund for every season ticket sold.\r\n\r\nAnyone who buys one will also get an autographed photo, Kiffin wrote. ', '1481963177161.jpg'),
(2, '2016-12-15', ' Marlins sign reliever Junichi Tazawa to 2-year, $12 million deal', '  Before signing reliever Junichi Tazawa, the Miami Marlins consulted with an expert on Japanese pitching: Ichiro Suzuki.\r\n\r\nTazawa finalized his $12 million, two-year contract with the Marlins on Friday after passing a physical. The deal came with an endorsement from Suzuki, the Marlins&#039; outfielder and 3,000-hit club member.', '1481949011437.jpg'),
(3, '2016-12-22', ' Preview: Packers brace for deep freeze in Chicago', ' Green Bay Packers quarterback Aaron Rodgers offered a clear message to his coach as questions swirled about a calf injury that forced him to miss practice this week.\r\n\r\n&quot;Game-plan-wise, his comments were, &#039;Don&#039;t hold anything back,&#039;&quot; Packers coach Mike McCarthy said.\r\n\r\nNot exactly what the Chicago Bears wanted to hear.', '1481938013900.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Topic` varchar(1000) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Photo` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `Datetimes`, `Topic`, `Description`, `Photo`) VALUES
(1, '2016-11-04', ' Instagram fixes Singapore viral &#039;bug&#039;', ' Instagram said it had fixed a &quot;bug&quot; that saw users geo-tag themselves as being in Singapore in a bid to go viral - even though they were not there.\r\nSome users claimed the apparent hack increased the chances of a post reaching the coveted Explore page on the photo-sharing app.\r\nPosts in that section are likely to get many more likes and attract followers.\r\nInstagram confirmed to the BBC that it was a &quot;bug that impacted engagement&quot; when posts were tagged with Singapore.\r\nLike on Facebook, what appears on your Instagram is based on the firm&#039;s algorithm. The spokesperson added that they have now fixed the issue.', '_92992639_hi016776451.jpg'),
(2, '2016-12-29', ' Uber defies demand to cease self-driving\r\n  ', '    Uber has been told its self-driving cars are illegal - but it is refusing to take them off San Francisco&#039;s roads.\r\nThe company started testing the vehicles this week, but the Department of Motor Vehicles (DMV) has said the firm must have a test permit.\r\nUber said it did not need one as they have a safety driver at the wheel, and is going to ignore the demand.\r\nCalifornia&#039;s attorney general - the state&#039;s most senior government lawyer - said Uber must cease the driving immediately or face further action.\r\nA spokeswoman for the attorney general&#039;s office would not be drawn on what the specific action could be, but the next step would likely be a court order compelling Uber to carry out the demand. ', '_90836623_febc7c11-3a0a-48a6-80cb-a9183743ad15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `thoughtoftheday`
--

CREATE TABLE `thoughtoftheday` (
  `id` int(15) NOT NULL,
  `Datetimes` date DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Thought` varchar(2000) DEFAULT NULL,
  `Photo` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thoughtoftheday`
--

INSERT INTO `thoughtoftheday` (`id`, `Datetimes`, `Name`, `Thought`, `Photo`) VALUES
(1, '2016-12-31', 'Anita Acharya', ' &quot; when you don&#039;t build your dream then someone else will appoint you to fulfill their dream &quot;', 'thought1.jpg'),
(2, '2016-12-27', 'Sabita Neupane', '      Feel fre to enjoy each and every moment of your life.      ', '1623693_1437187879849668_2119385975_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailynews`
--
ALTER TABLE `dailynews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horoscope`
--
ALTER TABLE `horoscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `international`
--
ALTER TABLE `international`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `national`
--
ALTER TABLE `national`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thoughtoftheday`
--
ALTER TABLE `thoughtoftheday`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dailynews`
--
ALTER TABLE `dailynews`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `horoscope`
--
ALTER TABLE `horoscope`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `international`
--
ALTER TABLE `international`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `national`
--
ALTER TABLE `national`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `thoughtoftheday`
--
ALTER TABLE `thoughtoftheday`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
