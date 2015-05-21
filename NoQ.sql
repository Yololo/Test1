CREATE DATABASE  IF NOT EXISTS `NoQ` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `NoQ`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: localhost    Database: NoQ
-- ------------------------------------------------------
-- Server version	5.6.21-enterprise-commercial-advanced

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `ID` int(8) NOT NULL AUTO_INCREMENT,
  `cusID` int(8) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `cusID` (`cusID`),
  CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`cusID`) REFERENCES `login` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homepage` (
  `ID` int(8) NOT NULL AUTO_INCREMENT,
  `homeID` int(8) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `homeID` (`homeID`),
  CONSTRAINT `homepage_ibfk_1` FOREIGN KEY (`homeID`) REFERENCES `restaurant` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homepage`
--

LOCK TABLES `homepage` WRITE;
/*!40000 ALTER TABLE `homepage` DISABLE KEYS */;
/*!40000 ALTER TABLE `homepage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `ID` int(8) NOT NULL AUTO_INCREMENT,
  `imageID` int(8) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `imageID` (`imageID`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`imageID`) REFERENCES `login` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,1,'res1_1.jpg'),(2,2,'res2_1.jpg'),(3,3,'res3_1.jpg'),(4,4,'res4_1.jpg'),(5,5,'res5_1.jpg'),(6,6,'res6_1.jpg'),(7,7,'res7_1.jpg'),(8,8,'res8_1.jpg'),(9,9,'res9_1.jpg'),(10,10,'res10_1.jpg'),(11,11,'res11_1.jpg'),(12,12,'res12_1.jpg'),(13,13,'res13_1.jpg'),(14,14,'res14_1.jpg'),(15,15,'res15_1.jpg'),(16,16,'res16_1.jpg'),(17,1,'res1_4.jpg'),(18,1,'res1_2.jpg'),(19,1,'res1_3.jpg'),(20,2,'res2_2.jpg'),(21,2,'res2_3.jpg'),(22,2,'res2_4.jpg'),(23,3,'res3_2.jpg'),(24,3,'res3_3.jpg'),(25,3,'res3_4.jpg'),(26,4,'res4_2.jpg'),(27,4,'res4_3.jpg'),(28,4,'res4_4.jpg'),(29,5,'res5_2.jpg'),(30,5,'res5_3.jpg'),(31,5,'res5_4.jpg'),(32,6,'res6_4.jpg'),(33,6,'res6_2.jpg'),(34,6,'res6_3.jpg'),(35,7,'res7_2.jpg'),(36,7,'res7_3.jpg'),(37,7,'res7_4.jpg'),(38,8,'res8_2.jpg'),(39,8,'res8_3.jpg'),(40,8,'res8_4.jpg'),(41,9,'res9_2.jpg'),(42,9,'res9_3.jpg'),(43,9,'res9_4.jpg'),(44,10,'res10_2.jpg'),(45,10,'res10_3.jpg'),(46,10,'res10_4.jpg'),(47,11,'res11_2.jpg'),(48,11,'res11_3.jpg'),(49,11,'res11_4.jpg'),(50,12,'res12_2.jpg'),(51,12,'res12_3.jpg'),(52,12,'res12_4.jpg'),(53,13,'res13_2.jpg'),(54,13,'res13_3.jpg'),(55,13,'res13_4.jpg'),(56,14,'res14_2.jpg'),(57,14,'res14_3.jpg'),(58,14,'res14_4.jpg'),(59,15,'res15_2.jpg'),(60,15,'res15_3.jpg'),(61,15,'res15_4.jpg'),(62,16,'res16_2.jpg'),(63,16,'res16_3.jpg'),(64,16,'res16_4.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `ID` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'res1','123','2'),(2,'res2','123','2'),(3,'res3','123','2'),(4,'res4','123','2'),(5,'res5','123','2'),(6,'res6','123','2'),(7,'res7','123','2'),(8,'res8','123','2'),(9,'res9','123','2'),(10,'res10','123','2'),(11,'res11','123','2'),(12,'res12','123','2'),(13,'res13','123','2'),(14,'res14','123','2'),(15,'res15','123','2'),(16,'res16','123','2');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger after_new_login
After Insert ON login
For Each Row
Begin
Insert Into image(imageID) Values (NEW.ID);
IF (NEW.status = '1') THEN
Insert Into customer(cusID) Values (NEW.ID);
ELSE
Insert Into restaurant(resID) Values (NEW.ID);
END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurant` (
  `ID` int(8) NOT NULL AUTO_INCREMENT,
  `resID` int(8) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `opHour` varchar(20) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `resID` (`resID`),
  CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`resID`) REFERENCES `login` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurant`
--

LOCK TABLES `restaurant` WRITE;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
INSERT INTO `restaurant` VALUES (1,1,'Blue Frog Bar','Chaoyangmen District Sanlitun Tai KooLi Building 4 3F4-3 no.1','010-64154303','10:00am - 24:00am','GREAT FOOD COMES FIRST  Every day, more than 11 million guests visit BLUE FROG restaurants around the world. And they do so because our restaurants are known for serving high-quality, great-tasting, and affordable food. Founded in 1954, BLUE FROG is the second largest fast food hamburger chain in the world. The original HOME OF THE WHOPPER, our commitment to premium ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50 successful years.  Every day BK received their signature sesame seeds buns from local bakery. Inspect them each shipment to ensure buns delivered in best condition. Our sesame seeds buns always fresh, never frozen.  100% beef patties using in our signature. All patties are grilled on proprietary broiler developed for BF cooked over real flames.  Thick Cut Bacon naturally smoked with hickory, hardwood & never frozen. Every morning BF team members prepare bacon for service throughout the day. '),(2,2,'HuoLuHuo James','Haidian District Chengfu Rd. no.35 Dongyuan Building 6th floor','010-62566300','10:00am - 22:00pm','Along with the Seared Kobe Beef on Mini Yorkshire Pudding and the Truffled Gruyère Fondue, HuoLuHuo has never left the lounge menu. Most remember briefly intimating to a customer that I might be replacing the grilled cheese, and was practically accosted! Because this snack is only available in the lounge and at the dining bar, people will go to sneaky lengths to order it. There have been guests who have left the table, walked to the lounge, ordered a sandwich, eaten it—and then returned to the table as if nothing had happened!\n\nLike a cheesesteak to a Philadelphian, grilled cheese and short rib sandwiches are my comfort food for late-night lounging. And Can\'t get enough of the slow-cooked short rib. There are myriad uses for it, from picking and shredding it into a hash with roasted potatoes, garlic, and herbs to a hearty breakfast with poached or fried eggs and toast. Slice it and serve it with mashed potatoes. But it\'s a dish that everyone should try at least once.\n'),(3,3,'Taeryo Grilled House','Chaoyang District Chaoyang Park Rd. 6 Solana Shopping Center','010-59056235','10:00am - 24:00am','Grill & Supreme Buffet\n\nWe offer All You Can Eat Buffet and many other delicious Japanese food.\nWe open 7 days a week.\nWe offer lots of delicious appetizers and an exotic range of Drinks. Come in, sit back and relax and watch your favorite game with your family and friends or bring your laptop and link to our free Wi-Fi service.\n\nIn addition, the Teppanyaki offers a very affordable Catering Service. Our dining facilities are perfect for holding parties or functions. It can comfortably accommodate 30-60 guests (Reservations required).\n \nOur restaurant offers a wide array of authentic Japanese Food.\nTry our delicious food and service today. Come in for a Japanese Lunch Special or during evenings for a delicious Japanese style dinner. You can also online order your favorite Japanese Food for take out.\nIf you have any suggestion to our food or service, please go to the customer feedback page and leave us your suggestion or review. We will respond to your suggestion as soon as possible.\n'),(4,4,'MeiWei Indonesian Food','Chaoyangmen District Sanlitun Worker Stadium 3rd floor','010-64094988','10:30am - 24:00am','A Journey of Taste\n\nIndonesia, aptly dubbed the spice islands centuries ago by European spice traders, is a chain of more than 13,000 beautiful islands stretching across more than 5,000 miles of the equator. Indonesia’s many different islands & regions, from Sumatra in the west to Irian Jaya in the east, have each developed their own traditional culinary dishes. The diversity of each region’s culture, local herbs and spices & taste have resulted in a rich variety of the highly flavorful cuisine collectively called Indonesian. \n\nSince 1994, If you come to Borobudur Restaurant, you can find various authentic Indonesian cuisine including tropical drinks from many different regions. Known as World’s most popular Indonesian restaurant. Asian Week had it right when they said we serve the best Indonesian food in the Bay Area! \n'),(5,5,'Imperial Duck','Dongcheng District QianMen West Rd. Building no.14','010-83193102','10:00am - 22:00pm','In this world, the most famous culinary is arguably Chinese. Moreover, its most famous dishes are Roasted Duck and BBQ meat. Chinese immigrants have migrated to all corners around the world for decades or even centuries. Many of its best chefs have moved to London and have developed its own style of Roasted Duck, which, especially for Thais, are more and more appreciated over the original Hong Kong style. The London style is famous for its juiciness and tenderness of the meat plus its thin skin but with the right thickness of fat layer underneath, and now Imperial Duck is able to bring you the authentic London style of Roasted Duck and BBQ meat.\nRecommendation :\n-Imperial Roasted Duck -Imperial BBQ Pork  -Imperial Crispy Belly Pork  -Stewed Beef  Brisket in Hot Pot    \n'),(6,6,'Banana Leaf','Haidian District ZhongGuanCun Rd. Shopping Center Area B no.15 ','010-59863666','10:00am - 24:00am','Banana Leaf authentic Malaysian and Thai Cuisine!  Rich, spicy and full of surprises! Our full-service dining offers Open-Kitchen style cooking that leads you right into the actions: Flames, Aromas, Sizzling in front of your eyes!\nBanana Leaf’s heritage is a delightful diversity  Malay, Thai, Indian and Chinese. \n\nFeast on our favorite dishes:\nRoti Canai or Prata, is a crispy multi-layer Malay-Indian style pancake served with bean curry sauce.  Or, try our best known Malay Satay, skewers of meat and poultry roasted over grill and then dipped in a peanut sauce.  Above all, definitely try our delicious  Mango Prawn, prepared with prawns, green and red peppers in a spicy mango sauce along with shredded mango all in a mango shell.   \n\nOur favorite Tropical creations also include: Rendang Beef, Melaka Fish, Indian Mee Goreng and Pineapple Fried Rice dishes……\n\nCome, share this exciting and unique Tropical Malaysian and Thai experience in the South Bay with us!\n'),(7,7,'JinDingXuan Dimsum','Dongcheng District Hepingli West Rd. no 77 ','010-64296699','06:00am - 05:00am','Cantonese chain that specializes in just about everything including dim sum. The quality is only so-so and the place is loud, but who can resist the pull of 24/7 !. Be wary of the tacky auctions they hold on a nightly basis. Readers voted it  Best Cantonese  and  Outstanding Dim Sum  in the Beijinger\'s 2011 Restaurant Awards.\nDim sum is a style of Cantonese food prepared as small bite-sized or individual portions of food traditionally served in small steamer baskets or on small plates. Dim sum is also well known for the unique way it is served in some restaurants, whereby fully cooked and ready-to-serve dim sum dishes are carted around the restaurant for customers to choose their orders while seated at their tables.\n\nEating dim sum at a restaurant is usually known in Cantonese as going to  drink tea  (yum cha), as tea is typically served with dim sum\nSoho Xiandaicheng\n30-50 per person\nSmoking\nChinese bank cards\n'),(8,8,'Mama\'s Kitchen','Dongcheng District Wangfujing Rd. North no.138 Beijing APM 6th Floor','010-65275115','10:00am - 24:00am','Welcome to Mama’s Kitchen. We have been proudly serving authentic Chinese Cuisine for over 10 years. We take great pride in using only the freshest, quality ingredients to create flavorful but also low grease and healthy dishes to our customers.\nMama’s Kitchen have been selected as the best Chinese food in town for the past 10 years. We serve many kinds of noodles, wonton, Pastries , appetizer and Side dished, also our authentic Bird Soup that received awards from the World’s Finest Soup. So, just reserve our table and we will serve you as a special guest .\n'),(9,9,'Sizzler Steak','Xicheng District Xizhimen Rd. West Ring Plaza Gaide Mall building 4 no.32','010-58302199','10:00am - 22:00pm','From USA Choice steaks cut fresh in-house every day,soups and baked goods – all created from scratch in real kitchens –Sizzler is the Innovator of the new  Family Casual  segment. Guests order and pay in line, enjoying Sizzler\'s signature salad bar and fresh baked breads until server who refills beverages delivers their meals, clear tableware and tend to other needs. Sizzler serves lunch and dinner; some locations feature Sunday brunch.\nSizzler’s menu offers USDA choice tri tip steaks cut fresh daily, seafood (including fresh Salmon) and fresh ground beef burgers, complemented by Sizzler\'s famous 50+ item salad bar that includes hot appetizers, a make-it-yourself taco bar, hand-made salads, made from-scratch soups, and desserts. The Endless Salad Bar features fresh-from-the source fruits and vegetables with a variety of dressings, many of which are made in-house daily.\n,a total of 18 Sizzler menu items now meet the high standards for Healthy Dining Options'),(10,10,'Pepper Lunch','Haidian District QingheZhong Rd. 68 Huarunwu cai no.563L','010-64750076','10:00am - 22:00pm','The most distinctive feature of Pepper Lunch is our unique serving style;  Sizzle-it-your-way  DIY serving style by which our customers cook for themselves with approximately 300 degree C (570 degree F) iron plates.\nYou can not only enjoy the tasty steak, but also experience the excitement and entertainment of watching your steak sizzling in front of you.\n Sizzle-It-Your-Way  -- Cook your steak perfectly done and seasoned as you wish.\nEven the tastiest steak can be spoiled when it goes cold after a while.\nYou must have had this type of disappointing experience before.\nAt Pepper Lunch, we serve our steak on a special iron plate (patented in Japan) that keeps the temperature at approximately 80 degrees C (175 degrees F) for 20 minutes. That means you can enjoy your steak piping hot until the last bite.\nWith our inventive iron plate, it is only at Pepper Lunch that you can enjoy your steak piping hot until the last bite.\n'),(11,11,'Squid Dumpling','HuaJiaDi Rd. Wanjing Plaza 2nd Floor','010-64750036','08:00am - 24:00am','Squid Dumpling rare in the city, the flavor of the squid mixed with the blended secret sauce since 1898.'),(12,12,'Coco Curry','Chaoyang District Chaoyang North Rd. 101 Datuo plaza 6th floor','010-85529112','10:00am - 22:00pm','CoCo Ichibanya is the famous curry house from Japan with 30 years experience in Japanese food business. It boasts varieties of Japanese Curry with unique and creative style along with the best quality ingredient to make tasty curry. Diners can choose their rice portion, either less or more, and even the spiciness of the curry!\n\nThe expertise of CoCo Ichibanya in creating Japanese curry is widely accepted in Japan and other countries thus leading to its great success for the title  The King of Japanese Curry.  Moreover, CoCo Ichibanya is also the largest curry chain in the world in term of the number of branches. There are about 1,268 branches (and counting!) around the world in countries such as US, Japan, China, Taiwan, South Korea, Hong Kong and Thailand.\nJapanese Curry Rice with Various Toppings and Levels of Curry Spicy\n\nCocoIchi has you craving for more, as they serve decent priced tasty dishes . \nI recommend Cheese Fries.\n'),(13,13,'Honeymoon Dessert','Xicheng District Xizhimen Rd. West Ring Plaza Gaide Mall B1 floor','010-58301563','10:00am - 22:00pm','With the finest strawberries from Korea, Honeymoon Dessert launches its new  STRAWBERRY  series. Each strawberry is grown in greenhouse with rigorous production monitoring control, the best quality could therefore be assured. Korean strawberry is famous for its soft pulp and pleasant smell.\n STRAWBERRY  series come with four new desserts including: X’mas Special - Strawberry Cake, Strawberry Glutinous Dumplings, Strawberry Tofu Pudding and Strawberry Sago. \n\nChinese Style Dessert brings the feeling of nourishment, especially suitable for winter season. Honeymoon Dessert launches a series of warm and healthy Chinese Style Dessert in this winter. Let’s stay warm together!\n\nIt’s time to eat well, stay well! Honeymoon Dessert launches  All Day Breakfast  series including All Day Breakfast, Waffle and Fruit Tea to promote  Eat Well, Stay Well  lifestyle. Cheer up your day with  All Day Breakfast  series now!\n'),(14,14,'Oppa Fried Chicken','Dongcheng District Chongwenmen New World Shitangbai Building 3','010-67089429','10:00am - 24:00am','Oppa, the real Korean fried chicken, started in 2003 as a small family-owned restaurant in Busan and has since evolved into a chain of fast casual restaurants in Korea with branches in Seoul, Daejeon and Chungnam, as well in China and Japan.\n\nFour chicken sauces\nCustomers can choose between four special sauces for its crispy fried chicken, which are made from boneless thigh filets.\nYang-yam is the original Korean-style fried chicken recipe sauce with the chicken sprinkled with sesame seeds. The flavor is a balanced mix of sweet, sour and salty.\n\nJack Daniels is Holdak’s version of the popular Jack Daniels sauce, popularized by the American chain TGIFriday’s. Holdak’s Jack Daniels fried chicken is topped with caramelized onions which added to the sweetness of the dish.\nThe best of Holdak’s sauces is the Padak, which. The Padak’s freshly sliced spring onions and a light zesty modern Asian flavor lift the dish above the run-of-the-mill fast-food fare.\n'),(15,15,'Matsuko','Chaoyang District Liangmaqiao Rd. 39 First Shanghai Center 1st floor','010-84534062','11:00am - 21:00am','Serving up one of Beijing\'s best known buffets since 1992, this chain of Japanese restaurant feeds hungry white collar types with its bountiful spread of sushi, sashimi, noodles and more. The daily lunch buffet (RMB 98, Mon-Fri 11.30am-2pm, RMB 108 Sat-Sun 11am-2.30pm) features over 60 kinds of dishes, ranging from eel with teriyaki sauce and tempura shrimp to sushi rolls and desserts. Children under 110 cm eat for free. Be forewarned that the different branches charge different prices for the buffet. Voted  Outstanding Japanese  in the Beijinger\'s 2011 Reader Restaurant Awards.'),(16,16,'Tous Les Jours cafe','Dongcheng District Dongsi North Rd. 257','010-84046683','08:00am - 24:00am','TOUS les JOURS is a French-Asian Bakery, meaning of ‘EVERYDAY’,  serving a unique selection of bakery goods and beverages made with the highest quality ingredients from South Korea. For more information TOUS les JOURS Korea (CJ Group) , please visit www.tlj.co.kr\n\nBeginning with its launch in the United States in 2004, It has established a reputable bakery café system in the United States, building on a brand image that is respected in Asian American communities and is expanding into other mainstream markets.\n\nRight-out-of-the-oven freshness is essential for tasty bread, and TOUS les JOURS promises you’ll be delighted by the baked goods we make right on the premises.\n\nA European styled bakery-\nA friendly service to your home, your family,\nand to your neighbors.\n\nBaked like your mothers goods…\nonly with fresh and pure\nnatural ingredients\n\nTous Les Jours Different from the start.\nTous Les Jours We start with flour.\nConsidering health as your top priority.\nbaking the traditional way.\n');
/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger after_new_restaurant
After Insert ON  restaurant
For Each Row
Begin
Insert Into seat(restaurantID, tableID) Values (NEW.ID, '1');
Insert Into seat(restaurantID, tableID) Values (NEW.ID, '2');
Insert Into seat(restaurantID, tableID) Values (NEW.ID, '3');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `seat`
--

DROP TABLE IF EXISTS `seat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seat` (
  `ID` int(8) NOT NULL AUTO_INCREMENT,
  `restaurantID` int(8) DEFAULT NULL,
  `tableID` char(1) DEFAULT NULL,
  `seat` int(4) DEFAULT '0',
  `occupied` int(4) DEFAULT '0',
  `waiting` int(4) DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `restaurantID` (`restaurantID`),
  CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`restaurantID`) REFERENCES `restaurant` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seat`
--

LOCK TABLES `seat` WRITE;
/*!40000 ALTER TABLE `seat` DISABLE KEYS */;
INSERT INTO `seat` VALUES (1,1,'1',50,0,0),(2,1,'2',50,0,0),(3,1,'3',50,0,0),(4,2,'1',65,0,0),(5,2,'2',65,0,0),(6,2,'3',65,0,0),(7,3,'1',70,0,0),(8,3,'2',70,0,0),(9,3,'3',70,0,0),(10,4,'1',55,0,0),(11,4,'2',55,0,0),(12,4,'3',55,0,0),(13,5,'1',42,0,0),(14,5,'2',42,0,0),(15,5,'3',42,0,0),(16,6,'1',70,0,0),(17,6,'2',70,0,0),(18,6,'3',70,0,0),(19,7,'1',95,0,0),(20,7,'2',95,0,0),(21,7,'3',95,0,0),(22,8,'1',65,0,0),(23,8,'2',65,0,0),(24,8,'3',65,0,0),(25,9,'1',47,0,0),(26,9,'2',47,0,0),(27,9,'3',47,0,0),(28,10,'1',61,0,0),(29,10,'2',61,0,0),(30,10,'3',61,0,0),(31,11,'1',35,0,0),(32,11,'2',35,0,0),(33,11,'3',35,0,0),(34,12,'1',82,0,0),(35,12,'2',82,0,0),(36,12,'3',82,0,0),(37,13,'1',25,0,0),(38,13,'2',25,0,0),(39,13,'3',25,0,0),(40,14,'1',20,0,0),(41,14,'2',20,0,0),(42,14,'3',20,0,0),(43,15,'1',53,0,0),(44,15,'2',53,0,0),(45,15,'3',53,0,0),(46,16,'1',27,0,0),(47,16,'2',27,0,0),(48,16,'3',27,0,0);
/*!40000 ALTER TABLE `seat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-20 15:37:25
