-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2025 at 02:18 PM
-- Server version: 10.11.11-MariaDB-cll-lve
-- PHP Version: 8.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futuraix_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `advertisement_id` varchar(255) DEFAULT NULL,
  `advertisement_name` varchar(255) DEFAULT NULL,
  `advertisement_image` varchar(255) DEFAULT NULL,
  `advertisement_description` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `advertisement_id`, `advertisement_name`, `advertisement_image`, `advertisement_description`, `created_at`, `updated_at`) VALUES
(1, 'adv_1', 'sideadvertisement_1', 'uploads/advertisements/01JRWS9727C4AM2B4KFP9GNN8V.png', 'displays side advertisement_1', '2025-04-15 13:12:42', '2025-04-15 13:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('00b89681dbc94d2b652bc6e259ce6b49e41a1ea7', 'i:1;', 1745491004),
('00b89681dbc94d2b652bc6e259ce6b49e41a1ea7:timer', 'i:1745491004;', 1745491004),
('1552f2b94901bcc03741d09d24c84b42182d1d16', 'i:2;', 1738055452),
('1552f2b94901bcc03741d09d24c84b42182d1d16:timer', 'i:1738055452;', 1738055452),
('15a93c861ca1fce5b4afcf09eefcd26929cc578c', 'i:1;', 1745322843),
('15a93c861ca1fce5b4afcf09eefcd26929cc578c:timer', 'i:1745322843;', 1745322843),
('1ab0085f89b287bee57af778f66996fae043d989', 'i:2;', 1737546215),
('1ab0085f89b287bee57af778f66996fae043d989:timer', 'i:1737546215;', 1737546215),
('27bed42d169a8810086831a9c665f66beeb7d8ed', 'i:1;', 1742186766),
('27bed42d169a8810086831a9c665f66beeb7d8ed:timer', 'i:1742186766;', 1742186766),
('27bf1bac75a19ae9004b18ce0dd97d1216825102', 'i:1;', 1745659973),
('27bf1bac75a19ae9004b18ce0dd97d1216825102:timer', 'i:1745659973;', 1745659973),
('2a10c5b7f2a56e1d9219c3d04a46b4fbb685b201', 'i:1;', 1744783371),
('2a10c5b7f2a56e1d9219c3d04a46b4fbb685b201:timer', 'i:1744783371;', 1744783371),
('3169db35bb8d85a6b1f6f19fe57ae5851bae68b9', 'i:1;', 1738159200),
('3169db35bb8d85a6b1f6f19fe57ae5851bae68b9:timer', 'i:1738159200;', 1738159200),
('31701b478e1fef1ec18abb2bd9c98011992ac081', 'i:1;', 1745048184),
('31701b478e1fef1ec18abb2bd9c98011992ac081:timer', 'i:1745048184;', 1745048184),
('3233ca8d43f25b2eff26274ac84be7d366e2b80e', 'i:2;', 1745647366),
('3233ca8d43f25b2eff26274ac84be7d366e2b80e:timer', 'i:1745647366;', 1745647366),
('3593a58109dffc8eed26ddb2cf294e5a8b54f6bd', 'i:1;', 1741983841),
('3593a58109dffc8eed26ddb2cf294e5a8b54f6bd:timer', 'i:1741983841;', 1741983841),
('364ce7010080b7bb75b13968f08c24b2aa9421de', 'i:1;', 1727284803),
('364ce7010080b7bb75b13968f08c24b2aa9421de:timer', 'i:1727284803;', 1727284803),
('46bc68393dc23f7ce5f9a574762e0062f224816a', 'i:2;', 1745918246),
('46bc68393dc23f7ce5f9a574762e0062f224816a:timer', 'i:1745918246;', 1745918246),
('4c5f10c6abf1e4f0c917c05a0f532216c526c333', 'i:1;', 1741375975),
('4c5f10c6abf1e4f0c917c05a0f532216c526c333:timer', 'i:1741375975;', 1741375975),
('604cc023dfbcd95d13de9cffbdbb346c8c6d30e6', 'i:1;', 1745930851),
('604cc023dfbcd95d13de9cffbdbb346c8c6d30e6:timer', 'i:1745930851;', 1745930851),
('6404b4af4dbe57644cfb6df4483887e683131bc6', 'i:1;', 1737979857),
('6404b4af4dbe57644cfb6df4483887e683131bc6:timer', 'i:1737979857;', 1737979857),
('64cbe8bb770ad8b6b7350fe10da871ccfcff8639', 'i:1;', 1744636593),
('64cbe8bb770ad8b6b7350fe10da871ccfcff8639:timer', 'i:1744636593;', 1744636593),
('65435d9c6e15842434a49b315cc4714759b4fe4d', 'i:1;', 1727299475),
('65435d9c6e15842434a49b315cc4714759b4fe4d:timer', 'i:1727299475;', 1727299475),
('721b2b8860ba36cc2f41aabb53fe5f13e3f0222b', 'i:1;', 1728641089),
('721b2b8860ba36cc2f41aabb53fe5f13e3f0222b:timer', 'i:1728641089;', 1728641089),
('78eeb700b617fb8008023c62358ea30cc381fea7', 'i:2;', 1745494043),
('78eeb700b617fb8008023c62358ea30cc381fea7:timer', 'i:1745494043;', 1745494043),
('7ba6ad7562a6e2e08000ace3e7890c20c7977c94', 'i:1;', 1741465425),
('7ba6ad7562a6e2e08000ace3e7890c20c7977c94:timer', 'i:1741465425;', 1741465425),
('887309d048beef83ad3eabf2a79a64a389ab1c9f', 'i:1;', 1744722819),
('887309d048beef83ad3eabf2a79a64a389ab1c9f:timer', 'i:1744722819;', 1744722819),
('8be86052c260208c6dff12e0f14c3167e5486357', 'i:1;', 1737606978),
('8be86052c260208c6dff12e0f14c3167e5486357:timer', 'i:1737606978;', 1737606978),
('90f9353700b690fb0a0f89dcd26834152a7be71f', 'i:1;', 1744604911),
('90f9353700b690fb0a0f89dcd26834152a7be71f:timer', 'i:1744604911;', 1744604911),
('9849e420a8ba763fff86960ecec906a6eb4c21b6', 'i:1;', 1728157478),
('9849e420a8ba763fff86960ecec906a6eb4c21b6:timer', 'i:1728157478;', 1728157478),
('98cbdbbbc0b0c017cd46ba27f4f766279486d88a', 'i:1;', 1737538644),
('98cbdbbbc0b0c017cd46ba27f4f766279486d88a:timer', 'i:1737538644;', 1737538644),
('9bf58420c6960152a9356511a6d3a36c96629407', 'i:1;', 1745526600),
('9bf58420c6960152a9356511a6d3a36c96629407:timer', 'i:1745526600;', 1745526600),
('9fd7fed7189f89610c77a793784391cb019efc06', 'i:1;', 1741812081),
('9fd7fed7189f89610c77a793784391cb019efc06:timer', 'i:1741812081;', 1741812081),
('a64ee6e3066be66926d966a1d78ae8cd1b9dd1b0', 'i:1;', 1741250439),
('a64ee6e3066be66926d966a1d78ae8cd1b9dd1b0:timer', 'i:1741250439;', 1741250439),
('b043bb2edb46290b16ed3a70354562223e0e9e06', 'i:1;', 1737615305),
('b043bb2edb46290b16ed3a70354562223e0e9e06:timer', 'i:1737615305;', 1737615305),
('cf21e2d60e53b8b9148d3eed1edb00a886c6ad9e', 'i:1;', 1741288424),
('cf21e2d60e53b8b9148d3eed1edb00a886c6ad9e:timer', 'i:1741288424;', 1741288424),
('d2c25d14c71239d1589c2b405bc6c86da0fcf748', 'i:1;', 1738057912),
('d2c25d14c71239d1589c2b405bc6c86da0fcf748:timer', 'i:1738057912;', 1738057912),
('da152d5a0203daa62a8d3fbefe031a492db3e5ad', 'i:2;', 1728466377),
('da152d5a0203daa62a8d3fbefe031a492db3e5ad:timer', 'i:1728466377;', 1728466377),
('e1d7f3f839a2c781aa14e6e32650e921d9eb8d9a', 'i:1;', 1745601746),
('e1d7f3f839a2c781aa14e6e32650e921d9eb8d9a:timer', 'i:1745601746;', 1745601746),
('eeca11823cac0424ec343d5e5cb1c6c86cac855b', 'i:1;', 1737546751),
('eeca11823cac0424ec343d5e5cb1c6c86cac855b:timer', 'i:1737546751;', 1737546751),
('f5a8923e86b676062945342aa122430665ebdd71', 'i:1;', 1744739404),
('f5a8923e86b676062945342aa122430665ebdd71:timer', 'i:1744739404;', 1744739404),
('f6cb53171c041d1ad4c6f9835005604d35969d33', 'i:1;', 1744358994),
('f6cb53171c041d1ad4c6f9835005604d35969d33:timer', 'i:1744358994;', 1744358994),
('ff3a38865182200bf25a8e211f907e24fb0a7e37', 'i:1;', 1745672801),
('ff3a38865182200bf25a8e211f907e24fb0a7e37:timer', 'i:1745672801;', 1745672801),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:12:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:12:\"add vehicles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:13:\"post feedback\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:10:\"add prices\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:14:\"create tickets\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:4;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:12:\"add stations\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:4;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:12:\"manage users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:23:\"manage station managers\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:14:\"answer tickets\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:16:\"approve sections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:15:\"reject sections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:15:\"update sections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:15:\"delete sections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}}s:5:\"roles\";a:4:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:4:\"User\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"Super Admin\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:15:\"Station Manager\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:5:\"Admin\";s:1:\"c\";s:3:\"web\";}}}', 1746002487);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complaint_id` varchar(255) DEFAULT NULL,
  `date_logged` timestamp NULL DEFAULT NULL,
  `time` time DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `station_id` varchar(255) DEFAULT NULL,
  `complainant` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `display` tinyint(1) DEFAULT 1,
  `attachments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `complaint_id`, `date_logged`, `time`, `user_id`, `station_id`, `complainant`, `status`, `display`, `attachments`, `created_at`, `updated_at`) VALUES
(1, 'Comp_1', '2024-04-12 19:00:00', '10:25:06', 'user_1', 'Edo-0002', 'I called the filling station manager to lodge the complaint on your behalf. The station disputes that this never happened and has asked for documentation to support this. Please if you have ant pictures, receipts or other details that supports this event, kindly upload here', 'Processing', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(2, 'Comp_2', '2024-04-25 19:00:00', '14:10:02', 'user_9', 'Lago-0001', 'Thank you very much for your help so far. Please find attached the invoices. The Estimate shows this will be more than N2m to fix.', 'Processing', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(3, 'Comp_3', '2024-04-24 19:00:00', '11:18:37', 'user_15', 'Lago-0010', 'Defective Windshield Wiper Installation: \"The attendant at [Gas Station Name] replaced my windshield wipers, but they were faulty and caused a near-accident in heavy rain. Their shoddy work put my safety in jeopardy!\" (Potential lawsuit: negligence, product liability)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(4, 'Comp_4', '2024-05-03 19:00:00', '01:32:18', 'user_10', 'Lago-0005', 'Deceptive Repair Services: \"[Gas Station Name] mechanics recommended unnecessary repairs on my car, and now it\'s worse than before. They took advantage of my lack of knowledge and charged me for services I didn\'t need!\" (Potential lawsuit: fraud, deceptive business practices)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(5, 'Comp_5', '2024-05-06 19:00:00', '06:17:54', 'user_18', 'Lago-0001', 'Improper Disposal of Hazardous Waste: \"I witnessed employees at [Gas Station Name] dumping used oil and antifreeze down the drain. This is a serious environmental hazard, and they should be held accountable!\" (Potential lawsuit: environmental violation)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(6, 'Comp_6', '2024-05-10 19:00:00', '15:25:06', 'user_23', 'Oyo-0002', 'Selling Age-Restricted Products to Minors: \"I witnessed an employee at [Gas Station Name] selling cigarettes to a teenager without checking their ID. This is illegal and irresponsible, putting underage customers at risk!\" (Potential lawsuit: negligence, violation of minor sales laws)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(7, 'Comp_7', '2024-05-17 19:00:00', '10:04:57', 'user_11', 'Lago-0007', 'Employee Physical Assault: \"An argument erupted between me and an attendant at [Gas Station Name] over a pump malfunction. They became aggressive, shoving me to the ground. This is assault, and I shouldn\'t have to be physically threatened!\" (Potential lawsuit: assault and battery)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(8, 'Comp_8', '2024-05-20 19:00:00', '20:36:48', 'user_19', 'Edo-0002', 'Improperly Secured Propane Tank: \"While filling a propane tank at [Gas Station Name], the attendant dropped it, causing a leak. This could have been a major safety hazard, and their negligence is unacceptable!\" (Potential lawsuit: negligence, endangerment)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(9, 'Comp_9', '2024-05-31 19:00:00', '22:13:09', 'user_12', 'Lago-0009', 'Exploding Gas Pump: \"I filled my car at [Gas Station Name] and the pump malfunctioned, spraying gasoline everywhere! I narrowly avoided a fire, and now my car is covered in a flammable mess. They haven\'t offered to clean it or compensate for the potential danger!\" (Potential lawsuit: product liability, negligence)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(10, 'Comp_10', '2024-06-03 19:00:00', '18:01:00', 'user_20', 'Lago-0013', 'Overcharging for Tow Truck Service: \"[Gas Station Name] called their affiliated tow truck company after a minor car issue. The tow truck charged an exorbitant fee with no upfront disclosure, taking advantage of my stranded situation!\" (Potential lawsuit: price gouging, unfair business practices)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(11, 'Comp_11', '2024-06-14 19:00:00', '14:48:25', 'user_13', 'Lago-0013', 'Fake \"Cash Only\" Scam: \"I tried to pay for gas at [Gas Station Name] with a credit card, but the machine was supposedly \"down.\" I suspect this is a scam to force cash transactions and avoid taxes. This is illegal!\" (Potential lawsuit: fraud, tax evasion)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(12, 'Comp_12', '2024-06-18 19:00:00', '09:32:51', 'user_21', 'Oyo-0002', 'Racial Profiling: \"I was racially profiled by an attendant at [Gas Station Name] who refused service and accused me of loitering. This is blatant discrimination and I will not tolerate it!\" (Potential lawsuit: racial discrimination)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(13, 'Comp_13', '2024-06-24 19:00:00', '12:00:00', 'user_17', 'Kadu-0002', 'Illegal Towing: \"My car was towed from the parking lot at [Gas Station Name] even though I was a paying customer. Their signage regarding towing was unclear and deceptive. This is illegal!\" (Potential lawsuit: wrongful tow)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(14, 'Comp_14', '2024-06-27 19:00:00', '07:43:21', 'user_23', 'Oyo-0002', 'Refusal to Assist Disabled Customer: \"As a disabled driver, I requested assistance pumping gas at [Gas Station Name], but the attendant refused, citing company policy. This is discriminatory and a violation of the Americans with Disabilities Act!\" (Potential lawsuit: disability discrimination)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(15, 'Comp_15', '2024-06-28 19:00:00', '05:00:00', 'user_14', 'Oyo-0002', 'False Advertising of Restroom Facilities: \"[Gas Station Name] advertised clean restrooms, but they were filthy and unusable. This is false advertising, and it\'s unacceptable during a long road trip!\" (Potential lawsuit: deceptive advertising)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(16, 'Comp_16', '2024-07-01 19:00:00', '16:50:23', 'user_22', 'Kadu-0001', 'Selling Expired Food Items: \"I unknowingly purchased expired food at the convenience store inside [Gas Station Name]. This could cause food poisoning, and they shouldn\'t be selling unsafe products!\" (Potential lawsuit: product liability, negligence)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(17, 'Comp_17', '2024-07-02 19:00:00', '19:27:31', 'user_15', 'Edo-0001', 'False Promise of Gift Card with Purchase: \"[Gas Station Name] advertised a free gift card with a specific gas purchase, but they refused to honor the promotion at checkout. This is false advertising, and I deserve what was promised!\" (Potential lawsuit: breach of contract, deceptive advertising)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(18, 'Comp_18', '2024-07-07 19:00:00', '00:08:17', 'user_17', 'Kadu-0003', 'Slippery Spill Not Cleaned Up: \"I slipped on a large puddle of spilled soda at [Gas Station Name] and sustained a serious injury. They didn\'t clean up the spill or warn customers, leading to my accident!\" (Potential lawsuit: premises liability, negligence)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(19, 'Comp_19', '2024-07-09 19:00:00', '03:54:12', 'user_16', 'Edo-0003', 'Faulty Credit Card Reader: \"My credit card information was stolen after using the chip reader at [Gas Station Name]. They claim they\'re not responsible, but their system clearly malfunctioned and compromised my financial security!\" (Potential lawsuit: data breach, fraud)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(20, 'Comp_20', '2024-07-11 19:00:00', '23:59:59', 'user_5', 'Edo-0002', 'Underfilled Gas Tank: \"I paid for a full tank at [Gas Station Name] but the gauge clearly shows it\'s not full. When I confronted the attendant, they were rude and dismissive. I\'m being cheated out of money!\" (Potential lawsuit: deceptive trade practices, breach of contract)', 'Open', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(21, 'COMP_00021', '2025-01-07 03:48:32', '03:48:32', 'US-00032', 'Lago-0013', 'As I drove out of the fuel station on 01/01/2025, the car started sputtering and soon the engine died. The only reason for this would be the fuel that I just bought from this station. Some moments later, I visited the station to lodge a complaint but the manager, Alaseri (Mrs) was insulting accusing me of demarketing their brand which could not have been responsible for my agony except the old age of my car.', 'pending', 1, 'uploads/complaints/jcZzXATEu8ibWuvFAB970JfytPZ6tve7xStsvGAo.pdf', '2025-01-07 03:48:32', '2025-01-07 03:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_replies`
--

CREATE TABLE `complaint_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complaint_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `reply_by` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `station_id` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `time` time DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `user_rating` int(11) DEFAULT NULL,
  `attachments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `station_id`, `date`, `time`, `user_id`, `comment`, `user_rating`, `attachments`, `created_at`, `updated_at`) VALUES
(1, 'Lago-0002', '2024-07-12 19:00:00', '13:05:00', 'Anonymous', '\"There was dirt all around the station. The flood water from the last rain is still yet to be cleaned and is messy', 2, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(2, 'Lago-0004', '2024-07-12 19:00:00', '10:10:00', 'Anonymous', 'Oump3 hardly works and the queue of people buying fuels in jerry cans was not well managed. It was very rowdy at the station', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(3, 'Lago-0007', '2024-07-12 19:00:00', '22:15:10', 'Anonymous', 'The attendant were respectful and service was prompt, good job guys', 5, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(4, 'Lago-0009', '2024-07-12 19:00:00', '13:05:00', 'Anonymous', 'The restroom was smelly, very messy that I could not sit to do my business there', 0, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(5, 'Lago-0011', '2024-07-12 19:00:00', '10:10:00', 'Anonymous', 'This station is the best. They have several pumps and the attendants are always respectful with a smile', 5, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(6, 'Lago-0013', '2024-07-12 19:00:00', '22:15:10', 'Anonymous', 'The electricity faileed as fuel was being pumped into my car. It took another 10minutes before they could power up the generator to continue pumping', 2, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(7, 'Oyo-0002', '2024-07-12 19:00:00', '13:05:00', 'Anonymous', 'Beware of touts and beggars at this station. Keep your valuables out of sight. The security at this station is almost non-existent and you are on your own at night', 2, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(8, 'Oyo-0004', '2024-07-12 19:00:00', '10:10:00', 'Anonymous', 'I am suspicious of the calibration of their meter. I normally buy 60 litres to fill my tank elsewhere but had to buy 70 today at theis filling station yet my tank is not full', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(9, 'Edo-0001', '2024-07-12 19:00:00', '22:15:10', 'Anonymous', 'Daylight robbery. The attendants are insane, they won\'y give me my change and I had to leave after wasting my time. Never will I nuy fuel here again', 0, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(10, 'Edo-0003', '2024-07-12 19:00:00', '13:05:00', 'Anonymous', 'Too much noise. They need to get the pump 4 serviced, other things are good in this station', 3, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(11, 'Kadu-0001', '2024-07-12 19:00:00', '10:10:00', 'Anonymous', 'Brand new station. Clean everywhere. They even offered to clean my windscreen. I am quite impressed', 5, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(12, 'Kadu-0003', '2024-07-12 19:00:00', '22:15:10', 'Anonymous', 'Rats. Rats. This is a rodent infested station and efforts are not being made to keep it clean', 2, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(13, 'Kadu-0004', '2024-07-12 19:00:00', '13:05:00', 'Anonymous', 'The music they play in this store is the worst! It\'s ear-splitting and gives me a headache. Can\'t you play something more calming', 2, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(14, 'Fct-0001', '2024-07-12 19:00:00', '10:10:00', 'Anonymous', 'The attendant kept begging me for weekend money, they need to do something about that . I don’t find that comfortable', 1, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(15, 'Kadu-0001', '2025-01-07 00:00:00', '03:38:07', 'US-00032', 'I was thrilled at the cleanliness and the quality of service delivery by the station attendants. They welcomed me with a smile, used the available water to clean my windscreen and asked me to watch the fuel meter as they filled my car. I feld thrilled by them', 2, '', '2025-01-07 03:38:07', '2025-01-07 03:38:07'),
(16, 'Lago-0001', '2025-04-24 00:00:00', '06:29:37', 'US-00036', 'comment', 5, '', '2025-04-24 06:29:37', '2025-04-24 06:29:37'),
(17, 'ST-00036', '2025-04-24 00:00:00', '20:17:44', 'US-00036', 'dsfsdf', 4, '', '2025-04-24 20:17:44', '2025-04-24 20:17:44'),
(18, 'ST-00048', '2025-04-24 00:00:00', '20:20:23', 'US-00036', 'fsdf', 4, '', '2025-04-24 20:20:23', '2025-04-24 20:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_17_105329_create_stations_table', 1),
(5, '2024_09_17_105335_create_prices_table', 1),
(6, '2024_09_17_105613_create_feedback_table', 1),
(7, '2024_09_17_105617_create_complaints_table', 1),
(8, '2024_09_17_135816_add_fields_to_users_table', 1),
(9, '2024_09_17_155717_create_vehicles_table', 1),
(10, '2024_09_18_204647_create_permission_tables', 1),
(11, '2024_09_19_130923_create_complaint_replies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 9),
(1, 'App\\Models\\User', 10),
(1, 'App\\Models\\User', 11),
(1, 'App\\Models\\User', 12),
(1, 'App\\Models\\User', 13),
(1, 'App\\Models\\User', 14),
(1, 'App\\Models\\User', 15),
(1, 'App\\Models\\User', 16),
(1, 'App\\Models\\User', 17),
(1, 'App\\Models\\User', 18),
(1, 'App\\Models\\User', 19),
(1, 'App\\Models\\User', 21),
(1, 'App\\Models\\User', 22),
(1, 'App\\Models\\User', 25),
(1, 'App\\Models\\User', 29),
(1, 'App\\Models\\User', 30),
(1, 'App\\Models\\User', 31),
(1, 'App\\Models\\User', 32),
(1, 'App\\Models\\User', 35),
(1, 'App\\Models\\User', 36),
(1, 'App\\Models\\User', 39),
(1, 'App\\Models\\User', 40),
(1, 'App\\Models\\User', 41),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 24),
(2, 'App\\Models\\User', 37),
(2, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 27),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 26);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('as1211d@gmail.com', '$2y$12$sRMjhA1kuciXAeSlzzXcseGAi6dJjjnOMxecQnkeNQjcnti80bz4G', '2025-04-24 16:39:53'),
('finishing@mailinator.com', '$2y$12$h..VPFpUOE.RL10nBNGw6OyfDH0TJM7dpmEdI/vmXWN0UZqskoSRa', '2025-04-25 15:34:44'),
('gouravdangayach@iirm.ac.in', '$2y$12$4VgDJ71mtbw5khzqxF.jIOwfnfIbmLEo3mWp5qFd4jpp028maUOgi', '2025-04-28 07:48:01'),
('rehmatclick@gmail.com', '$2y$12$egT2DvV2NDGq6e1ux5Br3OkIKtcRwhmAqmTtKLobKoHIxTpKgw4le', '2025-04-29 13:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add vehicles', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(2, 'post feedback', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(3, 'add prices', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(4, 'create tickets', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(5, 'add stations', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(6, 'manage users', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(7, 'manage station managers', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(8, 'answer tickets', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(9, 'approve sections', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(10, 'reject sections', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(11, 'update sections', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(12, 'delete sections', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `system_date` timestamp NOT NULL,
  `system_time` time NOT NULL,
  `purchase_date` timestamp NOT NULL,
  `purchase_time` time NOT NULL,
  `user_geolocation` varchar(255) DEFAULT NULL,
  `litres` decimal(8,2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `station_id` varchar(255) NOT NULL,
  `verified_by` varchar(255) DEFAULT 'Pending',
  `approved_by` varchar(255) DEFAULT 'Pending',
  `photo` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `fuel_type`, `system_date`, `system_time`, `purchase_date`, `purchase_time`, `user_geolocation`, `litres`, `price`, `phone_no`, `user_id`, `station_id`, `verified_by`, `approved_by`, `photo`, `comment`, `created_at`, `updated_at`) VALUES
(1, NULL, '2024-07-12 19:00:00', '13:05:00', '2024-07-11 19:00:00', '09:00:00', '9.096647456315642, 7.379888677705723', 38.70, 900.00, '8031234567', 'unregistered', 'Fct-0001', 'user_6', 'user_1', NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(2, NULL, '2024-07-11 19:00:00', '10:10:00', '2024-07-11 19:00:00', '10:10:00', '6.4424023846475444, 3.3605716339855434', 52.40, 720.00, '9057654321', 'unregistered', 'Lago-0002', 'NV', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(3, NULL, '2024-07-11 19:00:00', '22:15:10', '2024-07-11 19:00:00', '12:39:10', '6.462399932005145, 3.5543447731571662', 11.90, 725.00, '8169870123', 'user_8', 'Lago-0007', 'NV', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(4, NULL, '2024-07-12 19:00:00', '13:05:00', '2024-07-11 19:00:00', '03:29:00', '9.096647456315642, 7.379888677705723', 67.20, 920.00, '7024568901', 'unregistered', 'Oyo-0001', 'user_6', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(5, NULL, '2024-07-12 19:00:00', '10:10:00', '2024-07-11 19:00:00', '00:34:00', '6.4424023846475444, 3.3605716339855434', 29.10, 908.00, '9183721540', 'unregistered', 'Oyo-0002', 'user_6', 'user_1', NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(6, NULL, '2024-07-12 19:00:00', '22:15:10', '2024-07-11 19:00:00', '12:39:10', '6.462399932005145, 3.5543447731571662', 4.50, 935.00, '8090135792', 'unregistered', 'Oyo-0003', 'user_6', 'user_1', NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(7, NULL, '2024-07-12 19:00:00', '13:05:00', '2024-07-11 19:00:00', '03:29:00', '9.096647456315642, 7.379888677705723', 18.30, 895.00, '7016482359', 'unregistered', 'Oyo-0004', 'NV', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(8, NULL, '2024-07-12 19:00:00', '10:10:00', '2024-07-12 19:00:00', '00:34:00', '6.4424023846475444, 3.3605716339855434', 92.80, 912.75, '9072810463', 'unregistered', 'Oyo-0005', 'user_2', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(9, NULL, '2024-07-12 19:00:00', '22:15:10', '2024-07-12 19:00:00', '12:39:10', '6.462399932005145, 3.5543447731571662', 14.10, 900.00, '8145903271', 'unregistered', 'Edo-0001', 'user_2', 'user_1', NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(10, NULL, '2024-07-12 19:00:00', '13:05:00', '2024-07-12 19:00:00', '03:29:00', '9.096647456315642, 7.379888677705723', 41.60, 932.00, '8081357920', 'unregistered', 'Edo-0002', 'NV', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(11, NULL, '2024-07-12 19:00:00', '10:10:00', '2024-07-12 19:00:00', '00:34:00', '6.4424023846475444, 3.3605716339855434', 75.90, 910.00, '7058214637', 'unregistered', 'Edo-0003', 'user_6', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(12, NULL, '2024-07-11 19:00:00', '22:15:10', '2024-07-11 19:00:00', '12:39:10', '6.462399932005145, 3.5543447731571662', 33.50, 899.50, '9139041758', 'unregistered', 'Edo-0004', 'NV', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(13, NULL, '2024-07-11 19:00:00', '13:05:00', '2024-07-11 19:00:00', '03:29:00', '9.096647456315642, 7.379888677705723', 8.90, 895.00, '8102658914', 'unregistered', 'Kadu-0001', 'NV', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(14, NULL, '2024-07-11 19:00:00', '10:10:00', '2024-07-11 19:00:00', '00:34:00', '6.4424023846475444, 3.3605716339855434', 58.20, 896.98, '7043185206', 'unregistered', 'Kadu-0002', 'user_6', NULL, NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(15, NULL, '2024-07-11 19:00:00', '22:15:10', '2024-07-11 19:00:00', '12:39:10', '6.462399932005145, 3.5543447731571662', 21.40, 893.78, '9025791380', 'unregistered', 'Fct-0001', 'user_6', 'user_1', NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(16, NULL, '2024-07-12 19:00:00', '13:05:00', '2024-07-11 19:00:00', '03:29:00', '9.096647456315642, 7.379888677705723', 6.10, 890.57, '8171426890', 'unregistered', 'Lago-0002', 'user_6', 'user_1', NULL, NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(17, 'petrol', '2024-09-29 00:41:59', '05:41:59', '2024-09-28 19:00:00', '05:40:00', '39.665664,66.9253632', 123.00, 12312.00, '7324466722', 'unregistered', 'sdcsadcsadcas', 'Pending', 'Pending', '', NULL, '2024-09-29 00:41:59', '2024-09-29 00:41:59'),
(18, 'deseil', '2024-09-29 01:03:17', '06:03:17', '2024-09-28 19:00:00', '06:00:00', NULL, 112.00, 33.00, '12312312', 'unregistered', 'asdasd', 'Pending', 'Pending', '', NULL, '2024-09-29 01:03:17', '2024-09-29 01:03:17'),
(19, 'Petrol', '2024-11-30 16:30:26', '16:30:26', '2024-11-30 00:00:00', '16:25:00', NULL, 150.00, 15000.00, '7564', 'unregistered', 'Lago-0002', 'Pending', 'Pending', '', NULL, '2024-11-30 16:30:26', '2024-11-30 16:30:26'),
(20, 'Diesel', '2025-01-07 02:32:31', '02:32:31', '2025-01-02 00:00:00', '02:14:00', '-31.9155,115.8601', 120.00, 12500.00, '070569884569', 'unregistered', 'Agip Filling Station', 'Pending', 'Pending', '', NULL, '2025-01-07 02:32:31', '2025-01-07 02:32:31'),
(21, 'Diesel', '2025-01-07 02:45:49', '02:45:49', '2025-01-07 00:00:00', '02:45:00', '-31.9155,115.8601', 20.00, 20.00, '00', 'unregistered', 'Kadu-0001', 'Pending', 'Pending', '', NULL, '2025-01-07 02:45:49', '2025-01-07 02:45:49'),
(22, 'Petrol', '2025-01-07 09:22:00', '09:22:00', '2025-01-07 00:00:00', '17:15:00', '-31.9155,115.8601', 35.00, 36000.00, '070825 4988', 'unregistered', 'Lovedey Petrol Station', 'Pending', 'Pending', '', NULL, '2025-01-07 09:22:00', '2025-01-07 09:22:00'),
(23, 'Super', '2025-01-23 06:37:16', '06:37:16', '2025-01-23 00:00:00', '06:32:00', NULL, 0.10, 0.45, '+8143434354534', 'unregistered', 'sxf', 'Pending', 'Pending', '', NULL, '2025-01-23 06:37:16', '2025-01-23 06:37:16'),
(24, 'Super', '2025-01-23 06:43:18', '06:43:18', '2025-01-23 00:00:00', '06:32:00', NULL, 0.05, 0.04, '+83432323', 'unregistered', 'Edo-0001', 'Pending', 'Pending', '', NULL, '2025-01-23 06:43:18', '2025-01-23 06:43:18'),
(25, 'Super', '2025-01-27 05:35:31', '05:35:31', '2025-01-27 00:00:00', '05:33:00', NULL, 5.00, 4865.00, '+919977227253', 'unregistered', 'cz', 'Pending', 'Pending', '', NULL, '2025-01-27 05:35:31', '2025-01-27 05:35:31'),
(28, 'Super', '2025-01-27 05:54:17', '05:54:17', '2025-01-27 00:00:00', '05:52:00', NULL, 12.00, 1213.00, '132123123123', 'unregistered', 'washington', 'Pending', 'Pending', '', NULL, '2025-01-27 05:54:17', '2025-01-27 05:54:17'),
(29, 'Super', '2025-01-27 06:16:12', '06:16:12', '2025-01-27 00:00:00', '06:15:00', NULL, 23.00, 12345.00, '2323', 'unregistered', 'fs', 'Pending', 'Pending', '', NULL, '2025-01-27 06:16:12', '2025-01-27 06:16:12'),
(30, 'Super', '2025-01-27 06:21:24', '06:21:24', '2025-01-27 00:00:00', '06:20:00', NULL, 31.00, 1234.00, '211111111', 'unregistered', 'dsad', 'Pending', 'Pending', '', NULL, '2025-01-27 06:21:24', '2025-01-27 06:21:24'),
(31, 'Super', '2025-01-27 06:59:32', '06:59:32', '2025-01-27 00:00:00', '12:27:00', NULL, 1.00, 8858.00, '08858691931', 'unregistered', 'Lago-0002', 'Pending', 'Pending', '', NULL, '2025-01-27 06:59:32', '2025-01-27 06:59:32'),
(32, 'Super', '2025-01-27 09:51:01', '09:51:01', '2025-01-27 00:00:00', '15:15:00', '22.7611821,75.8838831', 2.00, 212.00, '08254485464', 'unregistered', 'dfsdsfsdfdsfdsf', 'Pending', 'Pending', '', NULL, '2025-01-27 09:51:01', '2025-01-27 09:51:01'),
(33, 'Super', '2025-01-29 06:09:16', '06:09:16', '2025-01-29 00:00:00', '11:31:00', '22.7611821,75.8838831', 2.00, 242.00, '08858691931', 'unregistered', 'Oyo-0003', 'Pending', 'Pending', '', NULL, '2025-01-29 06:09:16', '2025-01-29 06:09:16'),
(34, 'Super', '2025-01-29 09:32:00', '09:32:00', '2025-01-29 00:00:00', '14:59:00', '22.7611821,75.8838831', 2.00, 222.00, '08858691931', 'unregistered', 'dsfdf', 'Pending', 'Pending', '', NULL, '2025-01-29 09:32:00', '2025-01-29 09:32:00'),
(35, 'CNG', '2025-01-29 10:14:05', '10:14:05', '2025-01-29 00:00:00', '15:43:00', '22.7611821,75.8838831', 3.00, 798.00, '08254485464', 'unregistered', 'malvi', 'Pending', 'Pending', '', NULL, '2025-01-29 10:14:05', '2025-01-29 10:14:05'),
(36, 'Petrol', '2025-02-02 09:22:32', '09:22:32', '2025-02-02 00:00:00', '09:20:00', '-31.8988,116.0557', 25.00, 12500.00, '+2348030303030', 'unregistered', 'HELLLOA', 'Pending', 'Pending', '', NULL, '2025-02-02 09:22:32', '2025-02-02 09:22:32'),
(37, 'Petrol', '2025-03-06 19:31:35', '19:31:35', '2025-03-06 00:00:00', '00:59:00', '8.5164032,76.955648', 100.00, 10000.00, '071234567', 'unregistered', 'portugal', 'Pending', 'Pending', '', NULL, '2025-03-06 19:31:35', '2025-03-06 19:31:35'),
(38, 'Petrol', '2025-03-06 19:39:28', '19:39:28', '2025-03-06 00:00:00', '01:06:00', '8.5164032,76.955648', 100.00, 10000.00, '071111111', 'unregistered', 'saudi', 'Pending', 'Pending', '', NULL, '2025-03-06 19:39:28', '2025-03-06 19:39:28'),
(39, 'Petrol', '2025-03-06 19:56:23', '19:56:23', '2025-03-06 00:00:00', '01:24:00', '8.5164032,76.955648', 100.00, 99999.00, '081234567', 'unregistered', 'spain', 'Pending', 'Pending', '', NULL, '2025-03-06 19:56:23', '2025-03-06 19:56:23'),
(40, 'Petrol', '2025-03-06 20:07:58', '20:07:58', '2025-03-06 00:00:00', '01:36:00', '8.5164032,76.955648', 100.00, 100.00, '071234567', 'unregistered', 'pluto', 'Pending', 'Pending', '', NULL, '2025-03-06 20:07:58', '2025-03-06 20:07:58'),
(41, 'Petrol', '2025-03-07 19:36:49', '19:36:49', '2025-03-07 00:00:00', '01:06:00', '10.0499456,76.3265024', 100.00, 1000.00, '081234566', 'unregistered', 'spain', 'Pending', 'Pending', '', NULL, '2025-03-07 19:36:49', '2025-03-07 19:36:49'),
(42, 'Diesel', '2025-03-08 20:25:09', '20:25:09', '2025-03-07 00:00:00', '01:53:00', '9.58464,76.546048', 100.00, 1000.00, '071234567', 'unregistered', 'america', 'Pending', 'Pending', '', NULL, '2025-03-08 20:25:09', '2025-03-08 20:25:09'),
(43, 'Petrol', '2025-03-12 20:07:20', '20:07:20', '2025-03-11 00:00:00', '01:05:00', '24.8742964,67.0274815', 11.00, 12213.00, '092321313', 'unregistered', 'danasdsa', 'Pending', 'Pending', '', NULL, '2025-03-12 20:07:20', '2025-03-12 20:07:20'),
(44, 'Petrol', '2025-03-14 20:22:29', '20:22:29', '2025-03-14 00:00:00', '20:14:00', '8.912896,76.5591552', 123456.00, 12345.00, '071234567', 'unregistered', 'demo12', 'Pending', 'Pending', '', NULL, '2025-03-14 20:22:29', '2025-03-14 20:22:29'),
(45, 'Petrol', '2025-03-14 20:24:35', '20:24:35', '2025-03-14 00:00:00', '20:24:00', '8.912896,76.5591552', 12345.00, 12345.00, '078912345', 'unregistered', 'Lago-0002', 'Pending', 'Pending', '', NULL, '2025-03-14 20:24:35', '2025-03-14 20:24:35'),
(46, NULL, '2025-03-14 20:35:45', '20:35:45', '2025-03-14 00:00:00', '20:34:00', '8.912896,76.5591552', 100.00, 900.00, '', 'unregistered', 'Kadu-0002', 'Pending', 'Pending', '', NULL, '2025-03-14 20:35:45', '2025-03-14 20:35:45'),
(47, 'Diesel', '2025-03-14 20:38:39', '20:38:39', '2025-03-14 00:00:00', '20:34:00', '8.912896,76.5591552', 150.00, 800.00, '', 'unregistered', 'Lago-0007', 'Pending', 'Pending', '', NULL, '2025-03-14 20:38:39', '2025-03-14 20:38:39'),
(48, 'Petrol', '2025-03-17 01:20:30', '01:20:30', '2025-03-17 00:00:00', '01:11:00', '-31.885128281786443,115.81544771604491', 20.00, 99999.00, '', 'unregistered', 'NNPC', 'Pending', 'Pending', '', NULL, '2025-03-17 01:20:30', '2025-03-17 01:20:30'),
(49, 'Petrol', '2025-04-14 04:58:34', '04:58:34', '2025-04-14 00:00:00', '08:08:00', '25.3214483,55.379998', 11.00, 133.00, '', 'unregistered', 'adawa', 'Pending', 'Pending', '', NULL, '2025-04-14 04:58:34', '2025-04-14 04:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'User', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(2, 'Station Manager', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(3, 'Admin', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11'),
(4, 'Super Admin', 'web', '2024-09-25 11:23:11', '2024-09-25 11:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 4),
(2, 1),
(2, 4),
(3, 1),
(3, 4),
(4, 1),
(4, 2),
(4, 4),
(5, 2),
(5, 4),
(6, 3),
(6, 4),
(7, 3),
(7, 4),
(8, 3),
(8, 4),
(9, 3),
(9, 4),
(10, 3),
(10, 4),
(11, 3),
(11, 4),
(12, 3),
(12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('44iGc0oFw4HxzPJyBuz5UMtzfGwqwFKopIydzmCC', 27, '87.201.150.6', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibEJQNE43SjBlclJZM0dXeDdLRGNxNjNHNnJSaDBSSE9NaWU2RU9uNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vbmV3LmZ1dHVyYWl4LmNvbS9hZG1pbi91c2VycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyNztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJENja25VZHlBRnQxMTRQa2h5ZEVrOWVYeDU3ZzR6R3QwODY4dFk3WlZOWnRkS3BHeWNWQ2ZhIjt9', 1745930806),
('cF2WzEcjeV0ox8E9EOdPWuXv9XayVqMbd4SkyWPI', NULL, '149.154.156.95', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVlCNkhMOEgxUmFhcFJZUVZyRU0zRk1POVJSdnZ5Vmx5R3d6NFZMTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmV3LmZ1dHVyYWl4LmNvbS9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745934415),
('K9tlO5o99UA8u8PKRgwSOee5RK51IpLIEm7syTLl', NULL, '87.201.150.6', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieXJIZ090WDZsQmdUa0RiVzhlaDdaUjNDTWxoNXBUR1ZER1lIeEZmMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vbmV3LmZ1dHVyYWl4LmNvbS9mb3Jnb3QiO31zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM0OiJodHRwczovL25ldy5mdXR1cmFpeC5jb20vZGFzaGJvYXJkIjt9fQ==', 1745932357),
('xwLilO14E5npjq3Zwei9uTc5ovjZB0pOKB3iq49H', NULL, '122.176.150.189', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzNYVE5XRjlscmRxWmxYbWt0N1JVOTZjajR5Q2dYa0xJc3JlZFZkdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vbmV3LmZ1dHVyYWl4LmNvbS9hYm91dC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745933379),
('YyKOB2LIGWyo51EIvvZJ5L02ZjUVeio84cLmsm4M', NULL, '178.115.32.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmRJVFpGT0JrYkhOSnpVWVZaYVdHTTlFcXFEbnZ2SHV3TjVrdlFRUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vbmV3LmZ1dHVyYWl4LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745934608);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `station_id` varchar(255) NOT NULL,
  `station_name` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `local_government_area` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `station_manager_id` varchar(255) DEFAULT NULL,
  `station_phone1` varchar(255) DEFAULT NULL,
  `station_phone2` varchar(255) DEFAULT NULL,
  `purchased_slip_photo` varchar(255) DEFAULT NULL,
  `station_photo` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `opening_hours` varchar(255) DEFAULT NULL,
  `closing_time` varchar(255) DEFAULT NULL,
  `geolocation` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `date_verified` timestamp NULL DEFAULT NULL,
  `date_approved` timestamp NULL DEFAULT NULL,
  `added_by` varchar(255) DEFAULT 'Unregistered',
  `verifier` varchar(255) DEFAULT 'Pending',
  `approver` varchar(255) DEFAULT 'Pending',
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `station_id`, `station_name`, `city`, `state`, `local_government_area`, `country`, `station_manager_id`, `station_phone1`, `station_phone2`, `purchased_slip_photo`, `station_photo`, `street_address`, `opening_hours`, `closing_time`, `geolocation`, `date_created`, `date_verified`, `date_approved`, `added_by`, `verifier`, `approver`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Lago-0001', 'AP Fuel Station', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '36.997042,151.243666', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(2, 'Lago-0002', 'TotalEnergies', 'Apapa', 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42 Liverpool Road', NULL, NULL, '6.4424023846475444, 3.3605716339855434', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(3, 'Lago-0003', 'Forte Oil Filling Station', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '43.566596,-15.986025', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(4, 'Lago-0004', 'Oando Filling Station', 'Ikoyi', 'Lagos', NULL, NULL, 'user_3', '2341270400', NULL, NULL, NULL, '112 Awolowo Road', NULL, '22:00:00', '-59.16751,-85.963481', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(5, 'Lago-0005', 'MRS Filling Station', 'Lagos Island', 'Lagos', NULL, NULL, 'user_7', '23414614500', NULL, NULL, NULL, 'TBS, Igbosere Road', NULL, NULL, '12.689203,16.225375', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(6, 'Lago-0006', 'Mobil Station', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-68.43898,26.167025', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(7, 'Lago-0007', 'Northwest Petrol Station', 'Lekki', 'Lagos', '106104', NULL, NULL, NULL, NULL, NULL, NULL, '1A Lekki - Epe Express Road, Lekki Penninsula II', NULL, NULL, '6.45866622445333, 3.5560786666999564', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(8, 'Lago-0008', 'Conoil Filling Station', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-81.979297,140.399294', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(9, 'Lago-0009', 'Shell', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-66.214691,149.890136', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(10, 'Lago-0010', 'NNPC Filling Station', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-82.586867,27.201629', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(11, 'Lago-0011', 'Majok Oil', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-58.53272,-128.794', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(12, 'Lago-0012', 'World Oil', 'Ikoyi', 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '58.815546,9.513959', '2024-07-11 19:00:00', NULL, NULL, 'user_1', 'Awaiting', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(13, 'Lago-0013', 'TotalEnergies', 'Lekki', 'Lagos', NULL, NULL, NULL, '2348150857371', NULL, NULL, NULL, 'Before Lagos Business School, Olokonla', NULL, NULL, '40.098522,130.396554', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(14, 'Lago-0014', 'ENYO Station', 'Lekki', 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stillwaters', NULL, '1900-01-01 00:00:00', '12.486374,-78.412562', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_20', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(15, 'Lago-0015', 'TotalEnergies', 'Ikeja', 'Lagos', NULL, NULL, NULL, '2348037260339', NULL, NULL, NULL, '19 Toyin Street', NULL, NULL, '-66.495164,-15.24883', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_20', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(16, 'Oyo-0001', 'Fatgbems Filling Station', 'Ibadan', 'Oyo', NULL, NULL, NULL, '23414538694', NULL, NULL, NULL, NULL, NULL, NULL, '-30.071464,121.92759', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_20', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(17, 'Oyo-0002', 'SAO Filling Station', 'Ibadan', 'Oyo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monatan', NULL, NULL, '-81.13063,151.890302', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_20', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(18, 'Oyo-0003', 'Bovas', 'Ibadan', 'Oyo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ashi', NULL, NULL, '-58.340868,-127.429391', '2024-07-11 19:00:00', NULL, NULL, 'user_15', 'Awaiting', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(19, 'Oyo-0004', 'Mania Petrol Station', 'Ibadan', 'Oyo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Temidire Street, Ologuneru', NULL, '1900-01-01 00:00:00', '-86.068045,-126.953276', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_16', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(20, 'Oyo-0005', 'Ibiwoye Oil & Gas', 'Ibadan', 'Oyo', NULL, NULL, NULL, '2348061135662', NULL, NULL, NULL, 'Old Ife Road', NULL, '1900-01-01 00:00:00', '-19.035783,60.957421', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_17', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(21, 'Edo-0001', 'Danco Petrol Station', 'Benin City', 'Edo', NULL, NULL, NULL, '2347059826414', NULL, NULL, NULL, 'Child Avenue', NULL, NULL, '-4.901613,40.238818', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(22, 'Edo-0002', 'Autofuel', 'Benin City', 'Edo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Agbor Highway', NULL, NULL, '-72.316586,-93.652181', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(23, 'Edo-0003', 'MRS Filling Station', 'Benin City', 'Edo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 Sakponba Street, Benin-Sapele Road', NULL, '1900-01-01 00:00:00', '-32.298577,120.028174', '2024-07-11 19:00:00', NULL, NULL, 'user_1', 'Awaiting', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(24, 'Edo-0004', 'AP Fuel Station', 'Benin City', 'Edo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7 Benin City - Ehor Road', NULL, '1900-01-01 00:00:00', '-11.693921,71.514475', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_20', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(25, 'Kadu-0001', 'Mobil Station', 'Kaduna', 'Kaduna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ali Akilu Road', NULL, NULL, '47.312408,-131.584076', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_20', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(26, 'Kadu-0002', 'Petrofac Filling Station', 'Kaduna', 'Kaduna', NULL, NULL, NULL, '2348099042237', NULL, NULL, NULL, 'Kachia Road/Refinery Junction', NULL, NULL, '-40.044194,-155.386834', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_20', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(27, 'Kadu-0003', 'TotalEnergies', 'Zaria', 'Kaduna', NULL, NULL, NULL, '23464639541', NULL, NULL, NULL, 'Kaduna Zaria Road', NULL, NULL, '77.251359,29.101417', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:35', '2024-09-25 11:23:35'),
(28, 'Kadu-0004', 'A.A. Rano', 'Zaria', 'Kaduna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Zaria - Sokoto Road', NULL, NULL, '-52.422465,116.729739', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(29, 'Fct-0001', 'NNPC Mega Station', 'Gwarimpa', 'FCT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Zuba-Kubwa Expressway', NULL, '1900-01-01 00:00:00', '9.120925308759253, 7.429017412197774', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'user_2', 'super_admin', NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(30, 'Lago-0016', 'Igbira Oil Resources', 'Ikorodu', 'Lagos', '106104', NULL, NULL, NULL, NULL, NULL, NULL, 'Lagos Road', NULL, NULL, '6.45866622445333, 3.5560786666999564', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'Rejected', 'super_admin', 'Wrong entry, station does not exist', '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(31, 'Lago-0017', 'Jengbetiele Oil', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-2.131996,129.067932', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'Rejected', 'super_admin', NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(32, 'Lago-0018', 'Shell', 'Isolo', 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dramedria Way, Ago Palace', NULL, NULL, '8.78466,83.244689', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'Rejected', 'super_admin', NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(33, 'Lago-0019', 'NNPC Filling Station', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-74.246604,151.119832', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'Rejected', 'super_admin', NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(34, 'Lago-0020', 'Majok Oil', NULL, 'Lagos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-81.440567,57.001051', '2024-07-11 19:00:00', '2024-07-11 19:00:00', '2024-07-12 19:00:00', 'user_1', 'Rejected', 'super_admin', NULL, '2024-09-25 11:23:36', '2024-09-25 11:23:36'),
(35, 'ST-00035', 'sdcsadcsadcas', NULL, NULL, NULL, NULL, NULL, '7324466722', NULL, NULL, NULL, 'asdcasdcs', NULL, NULL, NULL, '2024-09-29 00:41:58', NULL, NULL, 'unregistered', 'Pending', 'super_admin', 'Not verified', '2024-09-29 00:41:58', '2024-09-29 00:41:58'),
(36, 'ST-00036', 'asdasd', NULL, NULL, NULL, NULL, NULL, '123123213123', NULL, NULL, NULL, 'adasdasd', NULL, NULL, NULL, '2024-09-29 01:03:17', NULL, NULL, 'unregistered', 'Pending', 'super_admin', 'Not verified', '2024-09-29 01:03:17', '2024-09-29 01:03:17'),
(37, 'ST-00037', 'Agip Filling Station', 'Abuja', 'FCT', '0000', 'Nigeria', NULL, '0498803910', NULL, NULL, NULL, '34 Garki Road', '05:14:10', '17:14:17', NULL, '2025-01-07 02:32:31', NULL, '2025-01-07 09:15:22', 'super_admin', 'Pending', 'super_admin', 'Not verified', '2025-01-07 02:32:31', '2025-01-07 09:15:22'),
(38, 'ST-00038', 'Lovedey Petrol Station', 'Abraka', 'Abia', NULL, 'Nigeria', NULL, '08052364545', NULL, NULL, NULL, '16 Abraka Way, Abia', '05:40:22', '17:40:30', NULL, '2025-01-07 09:22:00', '2025-01-07 09:47:54', '2025-01-07 09:43:49', 'super_admin', 'Super Admin', 'super_admin', 'I called the User and he provided more details which were helpful. I was also able to validate with the station owner', '2025-01-07 09:22:00', '2025-01-07 09:47:54'),
(39, 'demo12', 'demotest', 'berlin', 'gremany', '123', 'gremany', 'stn123', '6578987658', '1234567890', NULL, NULL, 'test brelin', '18:13:10', '19:13:15', NULL, NULL, NULL, '2025-01-29 14:06:41', 'US-00030', 'Pending', 'super_admin', 'demo for testing', '2025-01-22 11:44:13', '2025-01-29 14:06:41'),
(40, 'ST-00040', 'sxf', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '2025-01-23 06:37:16', NULL, '2025-01-29 14:06:46', 'US-00029', 'Pending', 'super_admin', 'Not verified', '2025-01-23 06:37:16', '2025-01-29 14:06:46'),
(41, 'ST-00041', 'cz', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '2025-01-27 05:35:31', NULL, '2025-01-29 14:06:51', 'unregistered', 'Pending', 'super_admin', 'Not verified', '2025-01-27 05:35:31', '2025-01-29 14:06:51'),
(45, 'ST-00042', 'washington', NULL, NULL, NULL, NULL, NULL, '123456789', NULL, NULL, NULL, '123 William Street, New York, NY, USA', NULL, NULL, NULL, '2025-01-27 05:54:17', NULL, '2025-01-29 14:07:55', 'unregistered', 'Pending', 'super_admin', 'Not verified', '2025-01-27 05:54:17', '2025-01-29 14:07:55'),
(46, 'ST-00046', 'fs', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '2025-01-27 06:16:12', NULL, '2025-01-29 14:07:35', 'unregistered', 'Pending', 'super_admin', 'Not verified', '2025-01-27 06:16:12', '2025-01-29 14:07:35'),
(47, 'ST-00047', 'dsad', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '2025-01-27 06:21:24', NULL, '2025-01-29 14:07:06', 'unregistered', 'Pending', 'super_admin', 'Not verified', '2025-01-27 06:21:24', '2025-01-29 14:07:06'),
(48, 'ST-00048', 'dfsdsfsdfdsfdsf', NULL, NULL, NULL, NULL, NULL, '0997437253', NULL, 'uploads/purchased_slip_photo/DgxhyK76YAI39xJVqSKUU09MdLRyq5QsuPWWSkic.png', 'uploads/station_photo/nAAUUKWR4eoHpKJMxtRPssXksJQAXuioeEULoqyM.png', '123 William Street, New York, NY, USA', NULL, NULL, NULL, '2025-01-27 09:51:01', NULL, '2025-01-29 14:07:15', 'unregistered', 'Pending', 'super_admin', 'Not verified', '2025-01-27 09:51:01', '2025-01-29 14:07:15'),
(49, 'ST-00049', 'dsfdf', NULL, NULL, NULL, NULL, NULL, '09977227253', NULL, NULL, NULL, 'vijaynagar', NULL, NULL, NULL, '2025-01-29 09:32:00', NULL, NULL, 'US-00029', 'Pending', 'super_admin', 'Not verified', '2025-01-29 09:32:00', '2025-01-29 09:32:00'),
(50, 'ST-00050', 'malvi', NULL, NULL, NULL, NULL, NULL, '09977237253', NULL, NULL, NULL, 'vijaynagar', NULL, NULL, NULL, '2025-01-29 10:14:05', NULL, NULL, 'US-00029', 'Pending', 'super_admin', 'Not verified', '2025-01-29 10:14:05', '2025-01-29 10:14:05'),
(51, 'ST-00051', 'HELLLOA', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, '2025-02-02 09:22:32', NULL, NULL, 'unregistered', 'Pending', 'super_admin', 'Not verified', '2025-02-02 09:22:32', '2025-02-02 09:22:32'),
(57, 'ST-00052', 'america', NULL, NULL, NULL, NULL, NULL, '081234567', NULL, NULL, NULL, 'times square, new york', NULL, NULL, '9.58464,76.546048', '2025-03-08 20:25:09', NULL, '2025-03-08 20:25:25', 'unregistered', 'Pending', 'super_admin', 'Not verified', '2025-03-08 20:25:09', '2025-03-08 20:25:25'),
(58, 'ST-00058', 'danasdsa', NULL, NULL, NULL, NULL, NULL, '091231231', NULL, NULL, NULL, 'asdasdasdas', NULL, NULL, '24.8742964,67.0274815', '2025-03-12 20:07:20', NULL, NULL, 'US-00036', 'Pending', 'super_admin', 'Not verified', '2025-03-12 20:07:20', '2025-03-12 20:07:20'),
(59, 'ST-00059', 'NNPC', NULL, NULL, NULL, NULL, NULL, '080258890', NULL, NULL, NULL, '7 Ajao Road, Ikeja. Lagos', NULL, NULL, '-31.885128281786443,115.81544771604491', '2025-03-17 01:20:30', NULL, NULL, 'unregistered', 'Pending', 'super_admin', 'Not verified', '2025-03-17 01:20:30', '2025-03-17 01:20:30'),
(60, 'ST-00060', 'adawa', NULL, NULL, NULL, NULL, NULL, '095151515', NULL, NULL, NULL, 'asdada', NULL, NULL, '25.3214483,55.379998', '2025-04-14 04:58:34', NULL, NULL, 'super_admin', 'Pending', 'super_admin', 'Not verified', '2025-04-14 04:58:34', '2025-04-14 04:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `approved_by` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `identity_doc` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `rego` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `title`, `first_name`, `middle_name`, `surname`, `category`, `date_of_birth`, `phone1`, `phone2`, `street_address`, `created_by`, `approved_by`, `city`, `state`, `country`, `zip`, `identity_doc`, `photo`, `model`, `rego`, `make`, `year`, `status`, `name`, `email`, `company_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user_1', 'Mr', 'Olu', 'Abi', 'Daramola', 'Admin', '1950-01-24', NULL, NULL, NULL, NULL, 'Pending', 'Ibadan', 'Oyo', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Olu Daramola', 'oludaramola@yahoo.com', 0, NULL, '$2y$12$llyRz/pLCtGkWWlGwuXJLejO6F1A0W.877SwulzEiMHlA7WdPuDnO', NULL, '2024-09-25 11:23:12', '2024-09-25 11:23:12'),
(2, 'user_2', NULL, 'Ifejerika', NULL, 'Adumobi', 'Super Admin', '1957-03-12', NULL, NULL, NULL, NULL, 'Pending', 'Onitsha', 'Anambra', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Ifejerika Adumobi', 'i.adumobi@fuelwatch.ng', 0, NULL, '$2y$12$cdV49qazB0V/VDvWbJu0wul5RjJV1pAZBP44szZS8iXOt1w76STZC', NULL, '2024-09-25 11:23:12', '2024-09-25 11:23:12'),
(3, 'user_3', NULL, 'Chinwe ', NULL, 'Eze', 'Station Manager', '1962-07-08', NULL, NULL, NULL, NULL, 'Pending', 'Ibadan', 'Oyo', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Chinwe  Eze', 'chinweeze@google.com', 0, NULL, '$2y$12$c/r/m9T7cymW8QZNuOinoeRMTVvYFwNz6DEwneZU8rUpuIJ7kzGtO', NULL, '2024-09-25 11:23:13', '2024-09-25 11:23:13'),
(4, 'user_4', 'Madam', 'Ekaete', 'Iniebong', 'Inyang', 'User', '1968-09-20', NULL, NULL, NULL, NULL, 'Pending', 'Kaduna', 'Kaduna', 'Nigeria', NULL, NULL, NULL, 'Corolla', 'EKY4545', 'Toyota', NULL, 'active', 'Ekaete Inyang', 'iniebonglovely@teteregun.org', 0, NULL, '$2y$12$0sLyIJuWVNdHty.nApLgK.8qpXs4uKrW7qvurVv35RDJ3HWmEuDbK', NULL, '2024-09-25 11:23:13', '2024-09-25 11:23:13'),
(5, 'user_5', NULL, 'Ndifereke', NULL, 'Udoh', 'User', '1974-02-02', NULL, NULL, NULL, NULL, 'Pending', 'Lekki ', 'Lagos', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Ndifereke Udoh', 'Ndifereke.Udoh@gmail.com', 0, NULL, '$2y$12$qX8ybsZOXzoAWvJe3TZfcOepIP05tFQ0LSIjnzykGF.gYhubt.sfG', NULL, '2024-09-25 11:23:14', '2024-09-25 11:23:14'),
(6, 'user_6', NULL, 'Omotilewa', 'Oluwadara', 'Malomo', 'Super Admin', '1979-05-15', NULL, NULL, NULL, NULL, 'Pending', 'Yaba', 'Lagos', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Omotilewa Malomo', 'Omotilewa.Malomo@yahoo.com', 0, NULL, '$2y$12$ZN2YEvoRAQF4XkXbBYN/N.ve/ULulLk5zZYHuQBwq5ibaa.G8MzQS', NULL, '2024-09-25 11:23:14', '2024-09-25 11:23:14'),
(7, 'user_7', NULL, 'Bada', NULL, 'badaru', 'Station Manager', '1983-10-21', NULL, NULL, NULL, NULL, 'Pending', 'Kaduna', 'Kaduna', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Bada badaru', 'bada.badaru@upper.com', 0, NULL, '$2y$12$by.uCR1bGR7ME1xAwSquvu7/PuP9WUtbwmpkHg0vhZg9XZaYxt3cS', NULL, '2024-09-25 11:23:15', '2024-09-25 11:23:15'),
(8, 'user_8', NULL, 'tiwalade', NULL, 'awojobi', 'User', '1988-01-01', NULL, NULL, NULL, NULL, 'Pending', 'Enugu', 'Enugu', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'tiwalade awojobi', 'tiwalade.awojobi@mahogany.org', 0, NULL, '$2y$12$Vzm/35INlEd9uiBdc.FLIeHswc7T6rDQhrm0VOQSEXgaPxdcTRP0G', NULL, '2024-09-25 11:23:16', '2024-09-25 11:23:16'),
(9, 'user_9', 'Lolo', 'Nancy', 'ndlovu', 'ojobo', 'User', '1992-04-23', NULL, NULL, NULL, NULL, 'Pending', 'Port Harcourt', 'Rivers', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Nancy ojobo', 'nancy.ojobo@daba.net', 0, NULL, '$2y$12$HKQAMVfM7yIy4miqG1r0n.KnlLp6K9HjYzRlNm3z8PYK7ltEmrAba', NULL, '2024-09-25 11:23:17', '2024-09-25 11:23:17'),
(10, 'user_10', NULL, 'Wesley', NULL, 'snipe', 'User', '1997-08-17', NULL, NULL, NULL, NULL, 'Pending', 'Abuja', 'FCT', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Wesley snipe', 'wesley.snipe@laspada.ng', 0, NULL, '$2y$12$j7Y0YqHxKnVeY3.EAuwKcOgspxlRYWlBXm3WRaLz1RCXNbvw2zV8G', NULL, '2024-09-25 11:23:17', '2024-09-25 11:23:17'),
(11, 'user_11', NULL, 'Lola', NULL, 'Johnson', 'User', '2000-12-29', NULL, NULL, NULL, NULL, 'Pending', 'Iseri', 'Lagos', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Lola Johnson', 'lola.johnson@gmail.com', 0, NULL, '$2y$12$z0lcbU6bnaL.YEUQWxSmB.wcWwMaxaBH7jSsNlXJ2aC5yrreKzvIm', NULL, '2024-09-25 11:23:18', '2024-09-25 11:23:18'),
(12, 'user_12', 'Igwe', 'Chukwuemeka', NULL, 'Nnaji', 'User', '1953-03-05', NULL, NULL, NULL, NULL, 'Pending', 'Calabar', 'Cross River', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Chukwuemeka Nnaji', 'chukwuemeka_odutola@tutamail.com', 0, NULL, '$2y$12$kKxpjWKyrDJVQ6C0joxDMOHrqddaz76akQT4BiotSXV76T4PecIRq', NULL, '2024-09-25 11:23:19', '2024-09-25 11:23:19'),
(13, 'user_13', NULL, 'Omolola', NULL, 'Okoroafor', 'User', '1960-06-19', NULL, NULL, NULL, NULL, 'Pending', 'Benin', 'Edo', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Omolola Okoroafor', 'lola.okoroafor@hotmail.com', 0, NULL, '$2y$12$87m3kWS3/HfJHtiA7BuWBe6J0LW4CWP9.YA2DlexXW0hHmt5mIsj6', NULL, '2024-09-25 11:23:20', '2024-09-25 11:23:20'),
(14, 'user_14', 'Mr', 'Ahmed', NULL, 'Ajayi', 'User', '1966-11-10', NULL, NULL, NULL, NULL, 'Pending', 'Kano', 'Kano', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Ahmed Ajayi', 'ifeoma.ajayi@gmx.com', 0, NULL, '$2y$12$qLsa/QvSDn5uD2TLzgo5q.DmKitzaLirlPOdLih0P.DKJnDJJ2V16', NULL, '2024-09-25 11:23:21', '2024-09-25 11:23:21'),
(15, 'user_15', NULL, 'Dafe', NULL, 'Omotosho', 'User', '1971-02-26', NULL, NULL, NULL, NULL, 'Pending', 'Ugheli', 'Delta', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Dafe Omotosho', 'dafe.omotosho@gmx.com', 0, NULL, '$2y$12$ZdJlqGLQoru3jZ.x0e94S..SYnx3ced5qpgp.Ru1VQsoACWgXB5om', NULL, '2024-09-25 11:23:22', '2024-09-25 11:23:22'),
(16, 'user_16', NULL, 'Adeola', NULL, 'Johnson', 'User', '1976-06-08', NULL, NULL, NULL, NULL, 'Pending', 'Enugu', 'Enugu', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Adeola Johnson', 'adeola.johnson@mail.com', 0, NULL, '$2y$12$0Nvb54J0j7/exPQI3hTEseK7pQ71VOP51mu0S3nEsWWISWj1/2zN.', NULL, '2024-09-25 11:23:23', '2024-09-25 11:23:23'),
(17, 'user_17', 'Alhaji', 'Usman', NULL, 'Johnson', 'User', '1981-10-28', NULL, NULL, NULL, NULL, 'Pending', 'Kano', 'Kano', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Usman Johnson', 'usman99johnson@fastmail.com', 0, NULL, '$2y$12$dwueEX.McpNPPQ6lfupk2ueC0TXCzADpLJqFzDHxRhXDh0LkqN87u', NULL, '2024-09-25 11:23:24', '2024-09-25 11:23:24'),
(18, 'user_18', NULL, 'Ejiro', NULL, 'Abubakar', 'User', '1987-02-14', NULL, NULL, NULL, NULL, 'Pending', 'Apapa', 'Lagos', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Ejiro Abubakar', 'ejiro.abubakar@mail.com', 0, NULL, '$2y$12$FRhdPT3iZPEQKtd8kb6g6.RuaFl2k1R0Y5RYkVxNCeoagaz.p95Tu', NULL, '2024-09-25 11:23:25', '2024-09-25 11:23:25'),
(19, 'user_19', NULL, 'Sade', NULL, 'Odutola', 'User', '1991-05-07', NULL, NULL, NULL, NULL, 'Pending', 'Abuja', 'FCT', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Sade Odutola', 'sadeodutola@tutamail.com', 0, NULL, '$2y$12$0VpA25T27TlubcZ3Sf1i8.nPKzkXysJRmpnqF033U1Y56hPkBUZOe', NULL, '2024-09-25 11:23:26', '2024-09-25 11:23:26'),
(20, 'user_20', 'HRH', 'Nneka', NULL, 'Johnson', 'Admin', '1996-09-23', NULL, NULL, NULL, NULL, 'Pending', 'Onitsha', 'Anambra', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Nneka Johnson', 'nneka_a.johnson@gmx.com', 0, NULL, '$2y$12$VzlbROE3UMMkqI/ie0bSJOP6SUQVuPu3G3IZZfNycCMO8FXbnm38W', NULL, '2024-09-25 11:23:27', '2024-09-25 11:23:27'),
(21, 'user_21', NULL, 'Lolade', NULL, 'Afolabi', 'User', '2001-12-31', NULL, NULL, NULL, NULL, 'Pending', 'Bauchi', 'Bauchi', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Lolade Afolabi', 'ifeoma.afolabi@aol.com', 0, NULL, '$2y$12$I0axJIC0bxk97KbcA24Bpu/K/Ln/8SE.Ieze3phy/ZP6s6pcIL.WG', NULL, '2024-09-25 11:23:28', '2024-09-25 11:23:28'),
(22, 'user_22', NULL, 'Adetomiwa', NULL, 'Adebayo', 'User', '1955-04-09', NULL, NULL, NULL, NULL, 'Pending', 'Abia', 'Abia', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Adetomiwa Adebayo', 'lola.adebayo@tutamail.com', 0, NULL, '$2y$12$0Mk.Vluo022RYjQ.FlQKBerHpT6v4PdRjx/kA3tfoFxj7xAuhmUjG', NULL, '2024-09-25 11:23:29', '2024-09-25 11:23:29'),
(23, 'user_23', NULL, 'Chike', NULL, 'Onwuegbu', 'Station Manager', '1961-07-22', NULL, NULL, NULL, NULL, 'Pending', 'Ibadan', 'Oyo', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Chike Onwuegbu', 'ifeoma.onwuegbu@hotmail.com', 0, NULL, '$2y$12$yoCGGEImYdiL5w5eYL/Rc.iJ7bSe3XlN1IZ3OChCTN/f11GWqxDRG', NULL, '2024-09-25 11:23:29', '2024-09-25 11:23:29'),
(24, 'user_24', NULL, 'Tunde', NULL, 'Mohammed', 'Station Manager', '1967-12-04', NULL, NULL, NULL, NULL, 'Pending', 'Yaba', 'Lagos', 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Tunde Mohammed', 'tundemohammed@aol.com', 0, NULL, '$2y$12$6lYXfuRq9QZeLGhEAjZGTOtMdM9TqHuKbSSfxdoXL/YU23c7qYSj.', NULL, '2024-09-25 11:23:30', '2024-09-25 11:23:30'),
(25, 'user_25', NULL, 'Ejiro', NULL, 'Odutola', 'User', '1982-03-13', NULL, NULL, NULL, NULL, 'Pending', NULL, NULL, 'Nigeria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Ejiro Odutola', 'ejiro.odutola@gmx.com', 0, NULL, '$2y$12$znaKgGCXsRstqbEOlOXNJO0Z2JFwChAltoMOMa5ClB7MmHY2NOpPC', NULL, '2024-09-25 11:23:31', '2024-09-25 11:23:31'),
(26, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Super Admin', 'super@admin.com', 0, NULL, '$2y$12$.vIo6I5vEFZnNROiq/dYzOe3NdzDy0XvEKkKGcTmY2Ceb4P6M4AwW', 'pCTUrxShpqclmvd1RooFylV71SWit0VsBQbuj748aFKlO55TRgISjHBzu3rK', '2024-09-25 11:23:32', '2024-09-25 11:23:32'),
(27, 'super_admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Admin', 'admin@admin.com', 0, NULL, '$2y$12$CcknUdyAFt114PkhydEk9eXx57g4zGt0868tY7ZVNZtdKpGycVCfa', 'k0sfvzWHfF2wYQMeBd5TfnPydMliz2hjS9O6DsxmYQXVceLS6Q82duSa1tps', '2024-09-25 11:23:33', '2024-09-25 11:23:33'),
(29, 'US-00029', NULL, 'fuel', NULL, 'user1', 'User', '2024-10-05', '143515656165', '65165165165', '1616asd6ad1a6sd1a6dsadsads', NULL, 'Super Admin', 'asdasdas`', 'asdasdas', 'asdadasdas', '165161', NULL, 'uploads/user/zNYFFMasu8r5Y7IGRO4WPB50s3JLeI55bStm6cbA.png', '23321', '2233', '32132', '5665156', 'active', 'fuel user1', 'fueluser1@fuel.com', 0, NULL, '$2y$12$TswBuUHTzxg0JrGRSq/9f.M9mI.0irX54pNgAn6wDwopGczRZ/FAq', NULL, '2024-10-05 19:27:36', '2025-01-28 12:52:11'),
(30, 'US-00030', NULL, 'test', NULL, 'user', 'User', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'test user', 'test@gmail.com', 0, NULL, '$2y$12$3i7no.8pbwtRhRUZ9UMLee/cCvK2DDSvSU.c5OZXsX1QtGOwGsgXi', NULL, '2024-11-13 07:39:47', '2024-11-13 07:39:47'),
(31, 'US-00031', NULL, 'Test2', NULL, 'User2', 'User', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Test2 User2', 'test2@gmail.com', 0, NULL, '$2y$12$PUEUOWbaZQShQQmXMzrw1OEyihGRDApBkk0liQDbEZt6ZS.pSp9/S', NULL, '2024-11-13 07:42:13', '2024-11-13 07:42:13'),
(32, 'US-00032', NULL, 'Zaid', NULL, 'Yahaya', 'User', NULL, NULL, NULL, NULL, NULL, 'Super Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Zaid Yahaya', 'zaidyahaya@zaid.com', 0, NULL, '$2y$12$J6va132W4jVtDqwO/1qwEOPkxHcZkfAuyd0CdUpa.hXsD6PPM12qy', NULL, '2025-01-07 02:38:07', '2025-01-07 02:47:49'),
(34, 'US-000239', NULL, 'mohd', NULL, 'user1', 'Admin', '2024-10-05', '143515656165', '65165165165', '1616asd6ad1a6sd1a6dsadsads', NULL, 'Super Admin', 'asdasdas`', 'asdasdas', 'asdadasdas', '165161', NULL, 'uploads/user/zNYFFMasu8r5Y7IGRO4WPB50s3JLeI55bStm6cbA.png', '23321', '2233', '32132', '5665156', 'active', 'fuel user1 admin', 'fueluser1admin@fuel.com', 0, NULL, '$2y$12$KpWb6aB2Odka1yl5DRJxv.UzbE27RY9esQuySc6WW1N9y5GdClVuy', NULL, '2024-10-05 19:27:36', '2025-01-28 12:48:24'),
(35, 'US-00035', NULL, 'arman', NULL, 'rajput', 'User', NULL, NULL, NULL, NULL, NULL, 'Super Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'arman rajput', 'armanrajput@gmail.com', 0, NULL, '$2y$12$vCW9.1B.ySEOPVyZy.sgBeaKMUA0z1S4t4T3OeKwIHz9VojSWQj0i', NULL, '2025-01-27 12:06:24', '2025-01-27 12:10:35'),
(36, 'US-00036', NULL, 'Arman', NULL, 'rajput', 'User', NULL, NULL, NULL, NULL, NULL, 'Super Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Arman rajput', 'rehmatclick@gmail.com', 0, NULL, '$2y$12$QF4tKFMg/jSaMybCkIRH8.CSolhYzJzFaAlYaKimbzOgDFgBUcMlm', NULL, '2025-01-28 09:05:32', '2025-01-28 09:10:56'),
(37, 'SM-00037', NULL, 'Matteo', NULL, 'Hilpert', 'Station Manager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Matteo Hilpert', 'your.email+fakedata81180@gmail.com', 0, NULL, '$2y$12$78M6w2jJTS9tJLrET6byFOxpxmhdgct3iLh7RuiMuEBPLNuBgGBCi', NULL, '2025-01-28 09:41:09', '2025-01-28 09:41:09'),
(38, 'SM-00038', NULL, 'Bria', NULL, 'Schuppe', 'Station Manager', '1993-06-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Bria Schuppe', 'your.email+fakedata96515@gmail.com', 0, NULL, '$2y$12$u4mVrIkw6H0Ncb7UtbSHceBCmsUdd7/9LP55Qm22I216dWe4N80zy', NULL, '2025-01-28 09:43:53', '2025-01-28 09:43:53'),
(39, 'US-00039', NULL, 'Ananya', NULL, 'Bajpai', 'User', '1996-06-06', NULL, NULL, NULL, NULL, 'Super Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Ananya Bajpai', 'gouravdangayach@iirm.ac.in', 0, NULL, '$2y$12$EGG5I22h5AEc4ADHN9b/d.xwWCghet5Plx7avVjCGhgWfwC.yFroK', NULL, '2025-01-29 06:11:03', '2025-01-29 06:11:03'),
(40, 'US-00040', NULL, 'Gourav', NULL, 'test', 'User', '1996-06-06', NULL, NULL, NULL, NULL, 'Super Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'Gourav test', 'gouravdangayach@gmail.com', 0, NULL, '$2y$12$6F5OGDvKe.30wmjsWK2Z5.z4GNacvaryPI4b.h8zozxT67ER9xG4m', NULL, '2025-04-24 09:01:27', '2025-04-24 09:54:54'),
(41, 'US-00041', NULL, 'asda', NULL, 'asdas', 'User', NULL, NULL, NULL, NULL, NULL, 'Super Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', 'asda asdas', 'as1211d@gmail.com', NULL, NULL, '$2y$12$Azu1S.xHJ7OacBWJhFg1U.MFkPp/yiqjUx/drNzk0ulkRlF2ml.Ju', NULL, '2025-04-24 16:30:18', '2025-04-24 16:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `street_address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `user_id`, `title`, `first_name`, `middle_name`, `last_name`, `street_address`, `street_address_2`, `city`, `state`, `zipcode`, `country`, `phone1`, `phone2`, `dob`, `registration_number`, `make`, `model`, `year`, `photo`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'US-00032', 'Mr.', 'daniel', 'Abimibola', 'Ileri', '38 Ayobo Road', NULL, 'Agege', 'Abia', '6021', 'Nigeria', '04988039', NULL, NULL, NULL, 'Caterpillar', 'Kawasaki', '2010', 'uploads/vehicle/dNBjkfZgtZo00nScy6otzK2BVygZgKMG8RNhHugO.pdf', 0.0000000, 0.0000000, '2025-01-07 07:33:52', '2025-01-07 07:33:52'),
(2, 'US-00041', 'asdasd', 'asdsad', 'asda', 'asda', 'asdas', NULL, 'asdas', 'Abia', 'asda', 'Nigeria', '12312', NULL, NULL, NULL, '12312', '121312', '2025', '', 0.0000000, 0.0000000, '2025-04-24 16:34:45', '2025-04-24 16:34:45'),
(9, 'US-00036', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20222222', 'TATA', '2024', '2024', 'uploads/vehicle/DCA51OoK3f4FuFcYBZVp9iPKKTB9ctKmpPEyq4hH.png', 0.0000000, 0.0000000, '2025-04-25 20:38:43', '2025-04-25 20:38:43'),
(10, 'US-00036', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20222222', 'TATA', '2024', '2024', '/home/futuraix/new.futuraix.com/public/uploads/vehicle/img1.jpg', 0.0000000, 0.0000000, '2025-04-25 20:48:49', '2025-04-25 20:48:49'),
(11, 'US-00036', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 's', 's', 's', '2023', '', 0.0000000, 0.0000000, '2025-04-25 20:52:43', '2025-04-25 20:52:43'),
(12, 'US-00036', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 's', 's', 's', '2020', 'uploads/vehicle/WV07c3ihmTfcWxZsJLbxkVPKbpvE3SUTB19zcAWK.png', 0.0000000, 0.0000000, '2025-04-25 20:53:09', '2025-04-25 20:53:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaints_user_id_index` (`user_id`),
  ADD KEY `complaints_station_id_index` (`station_id`);

--
-- Indexes for table `complaint_replies`
--
ALTER TABLE `complaint_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaint_replies_complaint_id_index` (`complaint_id`),
  ADD KEY `complaint_replies_user_id_index` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_station_id_index` (`station_id`),
  ADD KEY `feedback_user_id_index` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_user_id_index` (`user_id`),
  ADD KEY `prices_station_id_index` (`station_id`),
  ADD KEY `prices_verified_by_index` (`verified_by`),
  ADD KEY `prices_approved_by_index` (`approved_by`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stations_station_id_unique` (`station_id`),
  ADD KEY `stations_station_name_index` (`station_name`),
  ADD KEY `stations_city_index` (`city`),
  ADD KEY `stations_state_index` (`state`),
  ADD KEY `stations_station_manager_id_index` (`station_manager_id`),
  ADD KEY `stations_added_by_index` (`added_by`),
  ADD KEY `stations_verifier_index` (`verifier`),
  ADD KEY `stations_approver_index` (`approver`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`),
  ADD KEY `users_title_index` (`title`),
  ADD KEY `users_category_index` (`category`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `complaint_replies`
--
ALTER TABLE `complaint_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
