-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 04:20 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamesthew`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `currentcompition` ()  SELECT recipe_competition_id,contest_tittle,tbl_recipe_competition.contest_id as cID,user_name,user_email,recipe_title,recipe_description,recipies_pic,submit_date FROM tbl_recipe_competition inner join tbl_contest on tbl_recipe_competition.contest_id=tbl_contest.contest_id where tbl_contest.contest_id not in(select contest_id from tbl_announce)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addCategory` (IN `cat_name` VARCHAR(20), IN `cat_des` TEXT, IN `image` VARCHAR(10))  INSERT INTO tbl_categories(cat_name,cat_description,cat_img) values (cat_name,cat_des,image)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addcontest` (IN `c_tittle` VARCHAR(50), IN `c_start` DATE, IN `c_end` DATE, IN `c_id` INT(11), IN `i_open` INT(11), IN `c_description` VARCHAR(400))  INSERT INTO tbl_contest(contest_tittle, contest_start, contest_end, Category_id, is_open, Contest_description) values (c_tittle, c_start, c_end, c_id, i_open, c_description)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addFAQs` (IN `f_questions` VARCHAR(50), IN `f_answeres` VARCHAR(100))  insert INTO tbl_faqs(faq_question, faq_ans) VALUES (f_questions, f_answeres)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addfeedback` (`name` VARCHAR(20), `email` VARCHAR(50), `review` VARCHAR(20), `phone_number` VARCHAR(15), `subject` VARCHAR(40), `details` VARCHAR(500))  insert into tbl_feedback (name,email,review,phone_number,subject,details) VALUES (name,email,review,phone_number,subject,details)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addrecipie` (IN `prepationtime` VARCHAR(30), IN `cookingtime` VARCHAR(30), IN `diffulty` VARCHAR(30), IN `serve` VARCHAR(30), IN `calories` VARCHAR(30), IN `protiens` VARCHAR(30), IN `carbs` VARCHAR(30), IN `fat` VARCHAR(30), IN `saturation` VARCHAR(30), IN `fiber` VARCHAR(30), IN `sugar` VARCHAR(30), IN `salt` VARCHAR(30), IN `category` INT(11), IN `recipiespic` VARCHAR(100), IN `recipetitle` VARCHAR(30), IN `recipedescription` VARCHAR(100), IN `cmbpaid` INT(11))  INSERT INTO tbl_recipies (prepation_time,cooking_time,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,catogaries_id,recipies_pic,recipe_title,recipe_description,is_paid) VALUES(prepationtime,cookingtime,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,category,recipiespic,recipetitle,recipedescription,cmbpaid)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AddTip` (`tips_titles` VARCHAR(50), `tips_desspcriptions` VARCHAR(200), `tips_imgs` VARCHAR(255))  insert into tbl_tips (tips_title,tips_desspcription,tips_img) values (tips_titles,tips_desspcriptions,tips_imgs)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addtips` (IN `t_img` VARCHAR(20), IN `t_title` VARCHAR(50), IN `t_des` VARCHAR(200))  insert INTO tbl_tips(tips_img,tips_title,tips_description) VALUES (t_img, t_title, t_des)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_all_recipe` ()  SELECT recipe_title,category_id,recipe_description,prepation_time,serve,is_paid,recipies_pic,reciepe_id,cat_name from tbl_recipies INNER JOIN tbl_categories ON tbl_recipies.catogaries_id=tbl_categories.category_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_category` ()  select category_id,cat_name,icon_img from tbl_categories order by cat_name$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_catid` (`id` INT)  SELECT cat_name,cat_description,cat_img FROM tbl_categories WHERE category_id=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_contact` (`name` VARCHAR(50), `email` VARCHAR(50), `number` VARCHAR(50), `message` VARCHAR(50))  insert into tbl_contact (User_name,User_email,User_number,User_Message) VALUES (name,email,number,message)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_dltcat` ()  DELETE FROM tbl_categories WHERE cat_id = catid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_LatestRecipe` ()  select * from tbl_recipe_competition LIMIT 4$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login` (IN `name` VARCHAR(30), IN `pass` VARCHAR(30))  SELECT * from tbl_users where user_name=name and password=pass$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_recipe` (IN `cid` INT)  SELECT recipe_title,recipe_description,is_paid,reciepe_id,category_id,prepation_time,serve,recipies_pic,reciepe_id,cat_name from tbl_recipies INNER JOIN tbl_categories ON tbl_recipies.catogaries_id=tbl_categories.category_id where catogaries_id=cid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_recipe_detail` (IN `rid` INT)  SELECT recipe_title,diffulty,recipe_description,cooking_time,serve,prepation_time,serve,recipies_pic,reciepe_id,cat_name from tbl_recipies INNER JOIN tbl_categories ON tbl_recipies.catogaries_id=tbl_categories.category_id where reciepe_id=rid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_register` (IN `user_name` VARCHAR(30), IN `Email` VARCHAR(30), IN `password` VARCHAR(30), IN `sub` VARCHAR(100), IN `subdate` VARCHAR(100))  INSERT into tbl_users(user_name,Email,password,subcribtion_type,subcribtion_date) VALUES (user_name,Email,password,sub,subdate)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_showcat` ()  select category_id,cat_name,cat_description,cat_img from tbl_categories$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_showcomp` ()  select
recipe_competition_id,Contest_id,recipe_title,user_name,recipe_description,recipies_pic,submit_date,winner FROM tbl_recipe_competition$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_showcontest` ()  SELECT contest_id,contest_tittle,cat_name,contest_start,contest_end from tbl_contest INNER JOIN tbl_categories on tbl_contest.category_id=tbl_categories.category_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_showFAQs` ()  select faq_question,faq_ans FROM tbl_faqs$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_showrecipiee` ()  SELECT
reciepe_id,recipe_title,prepation_time,cooking_time,diffulty,serve,cat_name,recipe_description,recipies_pic FROM tbl_recipies INNER JOIN tbl_categories on tbl_recipies.catogaries_id=tbl_categories.category_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_showtips` ()  SELECT tips_img,tips_title,tips_description from tbl_tips$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_showuser` (IN `id` INT)  SELECT * FROM tbl_users WHERE user_id=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_showUserProfile` (IN `id` INT)  SELECT * FROM tbl_users WHERE user_id=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ShowWinner` ()  select recipe_title,recipies_pic,submit_date,winner,contest_tittle from tbl_recipe_competition INNER JOIN tbl_contest ON tbl_recipe_competition.Contest_id=tbl_contest.contest_id where winner=1 LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_show_contest` ()  select contest_id,contest_tittle,contest_description from tbl_contest WHERE Is_open=0$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_SubmitUserRecipe` (`prepation_time` VARCHAR(30), `cooking_time` VARCHAR(30), `diffulty` VARCHAR(30), `serve` VARCHAR(30), `calories` VARCHAR(30), `protiens` VARCHAR(30), `carbs` VARCHAR(30), `fat` VARCHAR(30), `saturation` VARCHAR(30), `fiber` VARCHAR(30), `sugar` VARCHAR(30), `salt` VARCHAR(30), `recipies_pic` VARCHAR(100), `recipe_title` VARCHAR(30), `recipe_description` VARCHAR(100), `user_name` VARCHAR(50), `user_email` VARCHAR(50), `submit_date` VARCHAR(50), `user_id` INT)  insert into tbl_user_recipies(prepation_time,cooking_time,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,recipies_pic,recipe_title,recipe_description,user_name,user_email,submit_date,user_id) VALUES (prepation_time,cooking_time,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,recipies_pic,recipe_title,recipe_description,user_name,user_email,submit_date,user_id)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_submit_compitition` (IN `prepation_time` VARCHAR(30), IN `cooking_time` VARCHAR(30), IN `diffulty` VARCHAR(30), IN `serve` VARCHAR(30), IN `calories` VARCHAR(30), IN `protiens` VARCHAR(30), IN `carbs` VARCHAR(30), IN `fat` VARCHAR(30), IN `saturation` VARCHAR(30), IN `fiber` VARCHAR(30), IN `sugar` VARCHAR(30), IN `salt` VARCHAR(30), IN `recipies_pic` VARCHAR(500), IN `recipe_title` VARCHAR(30), IN `recipe_description` VARCHAR(500), IN `user_name` VARCHAR(50), IN `user_email` VARCHAR(50), IN `submit_date` DATE, IN `user_description` VARCHAR(500), IN `cntst_id` INT(11))  insert into tbl_recipe_competition(prepation_time,cooking_time,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,recipies_pic,recipe_title,recipe_description,user_name,user_email,submit_date,cntst_id,Contest_id) VALUES (prepation_time,cooking_time,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,recipies_pic,recipe_title,recipe_description,user_name,user_email,submit_date,cntst_id)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_submit_recipe` (`prepation_time` VARCHAR(30), `cooking_time` VARCHAR(30), `diffulty` VARCHAR(30), `serve` VARCHAR(30), `calories` VARCHAR(30), `protiens` VARCHAR(30), `carbs` VARCHAR(30), `fat` VARCHAR(30), `saturation` VARCHAR(30), `fiber` VARCHAR(30), `sugar` VARCHAR(30), `salt` VARCHAR(30), `recipies_pic` VARCHAR(500), `recipe_title` VARCHAR(30), `recipe_description` VARCHAR(500), `user_name` VARCHAR(30), `user_email` VARCHAR(30), `submit_date` DATE, `user_description` VARCHAR(500), `cntst_id` INT)  insert into tbl_recipe_competition(prepation_time,cooking_time,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,recipies_pic,recipe_title,recipe_description,user_name,user_email,submit_date,user_id) VALUES (prepation_time,cooking_time,diffulty,serve,calories,protiens,carbs,fat,saturation,fiber,sugar,salt,recipies_pic,recipe_title,recipe_description,user_name,user_email,submit_date,user_description,cntst_id)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tips` ()  select * FROM tbl_tips$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatecat` (IN `cat_nam` VARCHAR(20), IN `cat_des` TEXT, IN `cat_img` VARCHAR(10), IN `catid` INT)  UPDATE tbl_categories SET cat_name=cat_nam,cat_description=cat_des,cat_img=cat_img WHERE category_id=catid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updatecontest` (IN `id` INT)  update  tbl_contest set is_open=1 where contest_id=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_userrecipie` (IN `id` INT)  SELECT * FROM tbl_user_recipies WHERE user_id=id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announce`
--

CREATE TABLE `tbl_announce` (
  `anounce_id` int(11) NOT NULL,
  `anounce_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `recipe_competition_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_announce`
--

INSERT INTO `tbl_announce` (`anounce_id`, `anounce_date`, `email`, `contest_id`, `recipe_competition_id`) VALUES
(1, '2018-05-15', '', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_img` varchar(10) NOT NULL,
  `icon_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `cat_name`, `cat_description`, `cat_img`, `icon_img`) VALUES
(1, 'APETIZERS', '', '', 'appetizers.png'),
(3, 'DESERTS', '', '', 'desert.png'),
(4, 'EGGS', '', '', 'egg.png'),
(7, 'FISH', '', '', 'fish.png'),
(12, 'PIZZA', '', '', 'pizza.png'),
(15, 'SNACKS', '', '', 'snacks.png'),
(16, 'SALADS', '', '', 'salads.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `Contact_Id` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `User_number` varchar(50) NOT NULL,
  `User_Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`Contact_Id`, `User_name`, `User_email`, `User_number`, `User_Message`) VALUES
(6, 'Adeen Khan', 'adeen.khan.53@gmail.com', '03040123153', 'Han Bhai Kessa Diya.....'),
(7, 'adeen', 'a@gmail.com', '1234567891012', 'ftf'),
(8, '', '', '', ''),
(9, 'dfdf', 'tyffd@gmail.com', '7', 'jhkkhghk'),
(10, 'ADEEN', 'AS@DHD.COM', '0201515', 'LJDKJASJK'),
(11, 'a', 'L@gmail.com', '03030', '15645');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contest`
--

CREATE TABLE `tbl_contest` (
  `contest_id` int(11) NOT NULL,
  `contest_tittle` varchar(20) NOT NULL,
  `contest_start` date NOT NULL,
  `contest_end` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `Is_open` int(11) NOT NULL,
  `contest_description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contest`
--

INSERT INTO `tbl_contest` (`contest_id`, `contest_tittle`, `contest_start`, `contest_end`, `category_id`, `Is_open`, `contest_description`) VALUES
(1, 'Aptizer Check', '2018-05-01', '2018-05-31', 1, 1, 'Tesett'),
(2, 'mota', '2018-05-01', '2018-05-25', 1, 0, 'moty k liye');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `faq_id` int(11) NOT NULL,
  `faq_question` varchar(50) NOT NULL,
  `faq_ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`faq_id`, `faq_question`, `faq_ans`) VALUES
(1, 'mvmjvjghvgjn,bhjm', 'mcvgnchfchg'),
(2, 'jdoiqhfdoisanidniqwnwonqw', 'aqnflkawnclknasnclsanclnascn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fb_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `review` varchar(20) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fb_id`, `name`, `email`, `review`, `phone_number`, `subject`, `details`) VALUES
(5, 'Adeen', 'Adeen.Khan.53@gmail.com', 'Excelent', '03040123153', 'Mexican', 'Great Dish Ajj Tak Aesi Dish Nahi Khai Bs Dekh Dekh K Moo My Pani Agaya Hy....'),
(6, 'aisha', 'a@g.com', 'Very Good', '0303030303', 'Chicken', 'jk'),
(10, 'ss', 'asdfads@gmailc.om', '333', '3333', 'VeryGood', 'xssdsd'),
(11, 'dsfasfasf', 'asdfads@gmailc.om', '324324234342', 'dsfasdfsda', 'VeryGood', 'sdfasdfasdf'),
(12, 'raasdf', 'asdfads@gmailc.om', '32423432', 'sdafasdfas', 'VeryGood', 'asdfsdafasd'),
(13, 'husnain', 'husan@gmail.com', '03151200046', 'hahaha', 'VeryGood', 'hello world'),
(14, 'moizkhan', 'creativemoizkhan@gmai.com', 'Very Good', '03321033852', 'Mexican', 'very good'),
(15, 'asdas', 'q@gmail.comq', 'Very Good', '4565656', 'Chinese', 'siodhaui\r\n'),
(16, 'p', 'jkj@klkl.com', 'Excelent', '45454545', 'Baked', 'tytyt'),
(17, 'sdf', 'ezaz@gmail.com', 'Very Good', '0', 'Italian', 'asc'),
(18, 'La', 'a@a.com', 'Excelent', '0301', 'Mexican', 'ISHDI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ingredient`
--

CREATE TABLE `tbl_ingredient` (
  `Ingredient_id` int(11) NOT NULL,
  `Ingredient_name` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ingredient`
--

INSERT INTO `tbl_ingredient` (`Ingredient_id`, `Ingredient_name`, `quantity`, `recipe_id`) VALUES
(1, 'Oil ', '1 tbsp', 1),
(2, 'Chopped onion', '1 cup', 1),
(3, 'Minced garlic', '1 tsp', 1),
(4, 'Chili powder', '1 ½ tsp', 1),
(5, 'Ground cumin', '1 tsp', 1),
(6, 'Chicken drumstick', '8', 2),
(7, 'Garlic paste', '1 tsp', 2),
(8, 'Chili powder', '1 tsp or to taste', 2),
(9, 'Paprika ', '1 tsp', 2),
(10, 'Salt ', '1 tsp or to taste', 2),
(11, 'Vanilla sponge cake ', '1 (9x9 inches)', 3),
(12, 'Whipped cream as required', '-', 3),
(13, 'Mini gulab jamun ', '20-25', 3),
(14, 'Saffron ', '1 pinch (optional)', 3),
(15, 'Gulab jamun syrup ', '1 cup (warm', 3),
(16, 'Carrot shredded', '2 kg', 4),
(17, 'Milk ', '1 litre', 4),
(18, 'Solid milk (khoya) ', '250 grams', 4),
(19, 'Sugar ', '1 cup', 4),
(20, 'Clarified butter ', '4 tbsp', 4),
(21, 'Tahini ', '½ cup', 5),
(22, 'Honey ', '¼ cup', 5),
(23, 'Butter ', '2 tsp', 5),
(24, 'Pinch of salt', '1 tsp', 5),
(25, 'Semolina ', '250 grams', 6),
(26, 'Milk ', '2 cups', 6),
(27, 'Sugar', '½ cup', 6),
(28, 'Almond paste ', '1 cup', 6),
(29, 'Clarified butter ', '1 cup', 6),
(30, 'Chicken breast ', '1 (cut into tiny cubes)', 7),
(31, 'Salt ', '¼ tsp', 7),
(32, 'Black pepper ', '¼ tsp ', 7),
(33, 'Coriander leaves ', '1 tbsp', 7),
(34, 'Tomato chopped ', '1 (into tiny cubes)', 7),
(35, 'Oil ', '1 tbsp', 8),
(36, 'Scallions ', '1 (finely chopped)', 8),
(37, 'Cooked long grain rice ', '1/2 cup', 8),
(38, 'Salt ', '½ tsp ', 8),
(39, 'Chili powder ', '1/2 tsp (optional)', 8),
(40, 'Fish fillet ', '2 ', 9),
(41, 'Soya sauce ', '2 tbsp ', 9),
(42, 'White vinegar ', '2 tbsp', 9),
(43, 'Mustard powder', '1 tsp ', 9),
(44, 'Lemon ', '2', 9),
(55, 'Fish ', '½ kg (slices)', 10),
(56, 'Chili powder ', '1 tsp heaped', 10),
(57, 'Salt ', '1 tsp leveled', 10),
(58, 'Lemon juice ', '1 tbsp ', 10),
(59, 'Egg ', '1', 10),
(60, 'Pina Cola', '2', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ingredient_competition`
--

CREATE TABLE `tbl_ingredient_competition` (
  `Ingredient_id` int(11) NOT NULL,
  `Ingredient_name` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `recipe_competition_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recipe_competition`
--

CREATE TABLE `tbl_recipe_competition` (
  `recipe_competition_id` int(11) NOT NULL,
  `prepation_time` varchar(30) NOT NULL,
  `cooking_time` varchar(30) NOT NULL,
  `diffulty` varchar(30) NOT NULL,
  `serve` varchar(30) NOT NULL,
  `calories` varchar(30) NOT NULL,
  `protiens` varchar(30) NOT NULL,
  `carbs` varchar(30) NOT NULL,
  `fat` varchar(30) NOT NULL,
  `saturation` varchar(30) NOT NULL,
  `fiber` varchar(30) NOT NULL,
  `sugar` varchar(30) NOT NULL,
  `salt` varchar(30) NOT NULL,
  `Contest_id` int(11) NOT NULL,
  `recipies_pic` varchar(500) NOT NULL,
  `recipe_title` varchar(30) NOT NULL,
  `recipe_description` varchar(500) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `submit_date` date NOT NULL,
  `winner` varchar(50) NOT NULL,
  `user_pic` varchar(50) NOT NULL,
  `user_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recipe_competition`
--

INSERT INTO `tbl_recipe_competition` (`recipe_competition_id`, `prepation_time`, `cooking_time`, `diffulty`, `serve`, `calories`, `protiens`, `carbs`, `fat`, `saturation`, `fiber`, `sugar`, `salt`, `Contest_id`, `recipies_pic`, `recipe_title`, `recipe_description`, `user_name`, `user_email`, `submit_date`, `winner`, `user_pic`, `user_description`) VALUES
(1, '30', '54', '54', '154', '54', '53', '', '5', '4', '', 'n', '', 1, 'adcef', 'faef', 'caefcz', 'hola', '', '0000-00-00', '', '', 'efaef'),
(2, '5', '1-5', 'kjk', 'kih5', 'hk', '66', '5652', '656', '65', '656', '65', '656', 1, '', 'ljmkl', 'ijljhlkjlmholijnkl', 'ijlj', '', '2018-05-15', '1', '', 'ythjhzerb'),
(3, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', 13, '14', '15', '16', '17', '18', '0000-00-00', '20', '21', '22'),
(4, '', '', '', '', '', '', '', '', '', '', '', '', 2, '', '', '', '', '', '2018-05-15', '', '', ''),
(5, '1', '1', 'easy', '1', '1', '1', '1', '1', '1', '1', '1', '1', 2, '', 'a', '1', 'sk', 'a@gmail.com', '2018-05-15', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recipies`
--

CREATE TABLE `tbl_recipies` (
  `reciepe_id` int(11) NOT NULL,
  `prepation_time` varchar(30) NOT NULL,
  `cooking_time` varchar(30) NOT NULL,
  `diffulty` varchar(30) NOT NULL,
  `serve` varchar(30) NOT NULL,
  `calories` varchar(30) NOT NULL,
  `protiens` varchar(30) NOT NULL,
  `carbs` varchar(30) NOT NULL,
  `fat` varchar(30) NOT NULL,
  `saturation` varchar(30) NOT NULL,
  `fiber` varchar(30) NOT NULL,
  `sugar` varchar(30) NOT NULL,
  `salt` varchar(30) NOT NULL,
  `catogaries_id` int(11) NOT NULL,
  `recipies_pic` varchar(100) NOT NULL,
  `recipe_title` varchar(30) NOT NULL,
  `recipe_description` varchar(100) NOT NULL,
  `is_paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recipies`
--

INSERT INTO `tbl_recipies` (`reciepe_id`, `prepation_time`, `cooking_time`, `diffulty`, `serve`, `calories`, `protiens`, `carbs`, `fat`, `saturation`, `fiber`, `sugar`, `salt`, `catogaries_id`, `recipies_pic`, `recipe_title`, `recipe_description`, `is_paid`) VALUES
(1, '10 Mints', '30 Mints', 'Easy', '4-6', '0g', '0g', '0g', '0g', '0g', '0g', '0g', '3g', 1, 'Maxican.jpg', 'Mexican Tortilla Casserole', 'Mexican food has its own great taste. This dish is prepared with beans, corns and cheese.', 1),
(2, '15 min + 1 hour', '30 Mints', 'Normal', '4-6', '20g', '10g', '5g', '0.5g', '5g', '2g', '4tsp', '2tsp', 1, 'drumstick.jpg', 'Baked Drumstick', 'Baked drumstick with this yougurt based garlic sauce allow you to enjoy exotic food', 0),
(3, '25 Mins', '-', 'Normal', '6', '0g', '0g', '0g', '0g', '0g', '0g', '50g', '20g', 1, 'gulabjamun.jpg', 'Gulab Jamun Cake', 'Gulab jamun is a very popular and traditional sweet in Pakistan that is also served at festivals.', 0),
(4, '10', '35-40 Mints', 'Normal', '4-6', '20g', '10g', '25g', '10g', '60g', '30g', '1 Cup', '0g', 3, 'Gajarkahalwa.PNG', 'Gajar ka Halwa', 'Gajar ka Halwa is so-simple-to-make dessert tastes absolutely divine.', 1),
(5, '1 Hour', '-', 'Easy', '5', '25g', '40g', '20g', '10g', '15g', '20g', '25g', '0g', 3, 'SesameHoneyFudge.PNG', 'Sesame Honey Fudge', 'Sesame Honey Fudge is a Middle Eastern treat made with tahini.', 1),
(6, '10 Mints', '20 Mints', 'Easy', '4', '5g', '10', '13g', '10g', '30g', '25g', '½ cup', '0g', 3, 'Badamkahalwa.PNG', 'Badam ka Halwa', 'Almonds are considered the world’s healthiest food rich in vitamin E, copper, magnesium.', 0),
(7, '20 Mints', '25 - 30 Mints', 'Hard', '2 - 3', '10g', '15g', '20g', '25g', '30g', '35g', '0g', '0g', 4, 'ChickenOmelet.PNG', 'Chicken Omelet', 'Give a flavorful taste to your omelet. Addition of chicken makes it so tempting.', 1),
(8, '10 Mints', '20 Mints', 'Easy', '2 - 3', '10g', '8g', '6g', '4g', '7g', '3g', '0g', '0g', 4, 'ItalianRiceOmelet.PNG', 'Italian Rice Omelet', 'Rice Omelet sounds different and off course it is different in taste.', 1),
(9, '15 Mins', '25 Mins', 'Hard', '4', '20g', '10g', '1picece', '10g', '5g', '35g', '0g', '3g', 7, 'GrilledFish.PNG', 'Grilled Fish', 'Change the traditional way to cook fish. Grill it to get the maximum benefits from this super food.', 0),
(10, '2 Hour + 15 Min', '15 Mins', 'Easy', '2 - 3', '20g', '10g', '25g', '10g', '5g', '35g', '0g', '1g', 7, 'FishFry.PNG', 'Fish Fry', 'Easy yet simple recipe of Fish is best for your coming weekend dinner or lunch menu.', 0),
(14, '10 Mints', '30 Mints', 'Normal', '3 - 4', '5g', '10', '13g', '25g', '30g', '2g', '0g', 'Salt 1 tsp leveled', 1, 'ChineseSoup.PNG', 'Chinese Soup', 'A Chinese soup that\'s healthy and delicious and it is also prepared easily.', 0),
(16, '5min', '10min', 'normal', '2', '', '', '', '', '', '', '', '', 1, 'Array', 'Pina Cola', 'sdafadsfdsfsd', 0),
(17, '5min', '10min', 'normal', '2', '', '', '', '', '', '', '', '', 1, 'Array', 'dsafas', 'sdfsdafsdfsdafsdafdsdfs', 0),
(18, '8mint', 'pony 2 mint', 'Sahi hy', 'sary 3', '2', '2', '2', '2', '2', '2', '2', '2', 1, '', 'a', 'testing', 1),
(19, '10', '62', 'easy', '5', '30', '65', '565', '78456', '5456', '45', '45', '56', 1, '', 'B', '54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tips`
--

CREATE TABLE `tbl_tips` (
  `tips_id` int(11) NOT NULL,
  `tips_img` varchar(255) NOT NULL,
  `tips_desspcription` varchar(200) NOT NULL,
  `tips_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tips`
--

INSERT INTO `tbl_tips` (`tips_id`, `tips_img`, `tips_desspcription`, `tips_title`) VALUES
(1, 'img19.jpg', 'pakistan', 'How to decorate cookies'),
(2, 'img2.jpg', 'kuch bhi', 'Make your own bread'),
(3, 'img3.jpg', '', 'How to make shushi'),
(4, 'img4.jpg', '', 'Barbeque party'),
(5, 'img5.jpg', '', 'How to make cheese cake'),
(6, 'img6.jpg', '', 'asfddsfd'),
(7, 'img7.jpg', '', 'asdfsdafasdfasdf'),
(8, 'img8.jpg', '', 'asdfsdafasdfasdf'),
(12, 'img5.jpg', 'pakistan', 'adeen'),
(13, '', 'yhih uk;mll[p', 'juoi'),
(14, 'Screenshot (1).png', 'iqra university', 'iqra'),
(15, '', 'doodh my ', 'Doodh na phatny ki tip');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `favorite_spices` varchar(30) NOT NULL,
  `favorite_appliances` varchar(30) NOT NULL,
  `favorite_cusine` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `profile_pic` varchar(70) NOT NULL,
  `subcribtion_type` varchar(100) NOT NULL,
  `subcribtion_date` varchar(100) NOT NULL,
  `user_description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `favorite_spices`, `favorite_appliances`, `favorite_cusine`, `user_name`, `Email`, `password`, `role_id`, `profile_pic`, `subcribtion_type`, `subcribtion_date`, `user_description`) VALUES
(24, 'rah', '', 'asdffasdfasd', 'fasdfasdf', 'asdfasf', 'rah@gmail.com', '', '12345', 0, '', 'yearly', '2017/12/19', ''),
(25, 'raheel', 'admi', 'hot n spicy', 'jucier', 'asdfasf', 'raheel', '', '12345', 2, '', 'yearly', '2017/12/19', 'fefawtcetcetcextwtfx4t3\r\n4xt34t34wt4taw4tgsdfsdfsdfef\r\nqFweFECrfwetgwefsdfw4etgwes\r\ntfwetfwegfw4tgw4t'),
(41, 'admin', 'admin', 'yum yum', 'khuch bhi chaly ga', 'pta nhy', 'admin', 'admin@gmail.com', '12345', 1, 'koi nhy hy', 'yearly', '', 'asdfghjkl;'),
(42, '', '', '', '', '', 'mk', 'creativemoizkhan@gmail.com', '12345678', 2, '', 'monthly', '2018-05-15', ''),
(43, '', '', '', '', '', 'hamza', 'hamza@gmail.com', '12345', 2, '', 'yearly', '2018-05-16', ''),
(44, '', '', '', '', '', 'a', '', '', 2, '', '', '2018-05-23', ''),
(45, '', '', '', '', '', 'a', 'adeen.khan.53@gmail.com', '12345', 2, '', '', '2018-05-23', ''),
(46, '', '', '', '', '', 'adeen', 'Ad@gmail.com', '12345', 2, '', 'yearly', '2018-07-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_ingredient`
--

CREATE TABLE `tbl_user_ingredient` (
  `Ingredient_id` int(11) NOT NULL,
  `Ingredient_name` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_ingredient`
--

INSERT INTO `tbl_user_ingredient` (`Ingredient_id`, `Ingredient_name`, `quantity`, `recipe_id`) VALUES
(1, 'Oil ', '1 tbsp', 1),
(2, 'Chopped onion', '1 cup', 1),
(3, 'Minced garlic', '1 tsp', 1),
(4, 'Chili powder', '1 ½ tsp', 1),
(5, 'Ground cumin', '1 tsp', 1),
(6, 'Chicken drumstick', '8', 2),
(7, 'Garlic paste', '1 tsp', 2),
(8, 'Chili powder', '1 tsp or to taste', 2),
(9, 'Paprika ', '1 tsp', 2),
(10, 'Salt ', '1 tsp or to taste', 2),
(11, 'Vanilla sponge cake ', '1 (9x9 inches)', 3),
(12, 'Whipped cream as required', '-', 3),
(13, 'Mini gulab jamun ', '20-25', 3),
(14, 'Saffron ', '1 pinch (optional)', 3),
(15, 'Gulab jamun syrup ', '1 cup (warm', 3),
(16, 'Carrot shredded', '2 kg', 4),
(17, 'Milk ', '1 litre', 4),
(18, 'Solid milk (khoya) ', '250 grams', 4),
(19, 'Sugar ', '1 cup', 4),
(20, 'Clarified butter ', '4 tbsp', 4),
(21, 'Tahini ', '½ cup', 5),
(22, 'Honey ', '¼ cup', 5),
(23, 'Butter ', '2 tsp', 5),
(24, 'Pinch of salt', '1 tsp', 5),
(25, 'Semolina ', '250 grams', 6),
(26, 'Milk ', '2 cups', 6),
(27, 'Sugar', '½ cup', 6),
(28, 'Almond paste ', '1 cup', 6),
(29, 'Clarified butter ', '1 cup', 6),
(30, 'Chicken breast ', '1 (cut into tiny cubes)', 7),
(31, 'Salt ', '¼ tsp', 7),
(32, 'Black pepper ', '¼ tsp ', 7),
(33, 'Coriander leaves ', '1 tbsp', 7),
(34, 'Tomato chopped ', '1 (into tiny cubes)', 7),
(35, 'Oil ', '1 tbsp', 8),
(36, 'Scallions ', '1 (finely chopped)', 8),
(37, 'Cooked long grain rice ', '1/2 cup', 8),
(38, 'Salt ', '½ tsp ', 8),
(39, 'Chili powder ', '1/2 tsp (optional)', 8),
(40, 'Fish fillet ', '2 ', 9),
(41, 'Soya sauce ', '2 tbsp ', 9),
(42, 'White vinegar ', '2 tbsp', 9),
(43, 'Mustard powder', '1 tsp ', 9),
(44, 'Lemon ', '2', 9),
(55, 'Fish ', '½ kg (slices)', 10),
(56, 'Chili powder ', '1 tsp heaped', 10),
(57, 'Salt ', '1 tsp leveled', 10),
(58, 'Lemon juice ', '1 tbsp ', 10),
(59, 'Egg ', '1', 10),
(60, 'Pina Cola', '2', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_recipies`
--

CREATE TABLE `tbl_user_recipies` (
  `reciepe_id` int(11) NOT NULL,
  `prepation_time` varchar(30) NOT NULL,
  `cooking_time` varchar(30) NOT NULL,
  `diffulty` varchar(30) NOT NULL,
  `serve` varchar(30) NOT NULL,
  `calories` varchar(30) NOT NULL,
  `protiens` varchar(30) NOT NULL,
  `carbs` varchar(30) NOT NULL,
  `fat` varchar(30) NOT NULL,
  `saturation` varchar(30) NOT NULL,
  `fiber` varchar(30) NOT NULL,
  `sugar` varchar(30) NOT NULL,
  `salt` varchar(30) NOT NULL,
  `catogaries_id` int(11) NOT NULL,
  `recipies_pic` varchar(100) NOT NULL,
  `recipe_title` varchar(30) NOT NULL,
  `recipe_description` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `submit_date` varchar(50) NOT NULL,
  `is_paid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_recipies`
--

INSERT INTO `tbl_user_recipies` (`reciepe_id`, `prepation_time`, `cooking_time`, `diffulty`, `serve`, `calories`, `protiens`, `carbs`, `fat`, `saturation`, `fiber`, `sugar`, `salt`, `catogaries_id`, `recipies_pic`, `recipe_title`, `recipe_description`, `user_name`, `user_email`, `submit_date`, `is_paid`, `user_id`) VALUES
(2, 'ez', 'ez', 'ez', 'ez', 'ez', 'ez', 'ez', 'ez', 'ez', 'ez', 'ez', 'ez', 0, 'SCAN90-1.jpg', 'ez', 'ez', 'ez', 'ezaz@gmail.com', '8541313', 0, 25),
(3, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 0, 'avatar3.jpg', 'qQq', 'q', 'q', 'q@gmail.com', '8541313', 0, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_announce`
--
ALTER TABLE `tbl_announce`
  ADD PRIMARY KEY (`anounce_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`Contact_Id`);

--
-- Indexes for table `tbl_contest`
--
ALTER TABLE `tbl_contest`
  ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `tbl_ingredient`
--
ALTER TABLE `tbl_ingredient`
  ADD PRIMARY KEY (`Ingredient_id`);

--
-- Indexes for table `tbl_ingredient_competition`
--
ALTER TABLE `tbl_ingredient_competition`
  ADD PRIMARY KEY (`Ingredient_id`);

--
-- Indexes for table `tbl_recipe_competition`
--
ALTER TABLE `tbl_recipe_competition`
  ADD PRIMARY KEY (`recipe_competition_id`);

--
-- Indexes for table `tbl_recipies`
--
ALTER TABLE `tbl_recipies`
  ADD PRIMARY KEY (`reciepe_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  ADD PRIMARY KEY (`tips_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_ingredient`
--
ALTER TABLE `tbl_user_ingredient`
  ADD PRIMARY KEY (`Ingredient_id`);

--
-- Indexes for table `tbl_user_recipies`
--
ALTER TABLE `tbl_user_recipies`
  ADD PRIMARY KEY (`reciepe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_announce`
--
ALTER TABLE `tbl_announce`
  MODIFY `anounce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `Contact_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_contest`
--
ALTER TABLE `tbl_contest`
  MODIFY `contest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_ingredient`
--
ALTER TABLE `tbl_ingredient`
  MODIFY `Ingredient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_ingredient_competition`
--
ALTER TABLE `tbl_ingredient_competition`
  MODIFY `Ingredient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_recipe_competition`
--
ALTER TABLE `tbl_recipe_competition`
  MODIFY `recipe_competition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_recipies`
--
ALTER TABLE `tbl_recipies`
  MODIFY `reciepe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  MODIFY `tips_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_user_ingredient`
--
ALTER TABLE `tbl_user_ingredient`
  MODIFY `Ingredient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_user_recipies`
--
ALTER TABLE `tbl_user_recipies`
  MODIFY `reciepe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
