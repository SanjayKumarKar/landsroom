-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2022 at 01:28 AM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chugh_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_redirection`
--

CREATE TABLE `tb_redirection` (
  `redirection_id` int(11) NOT NULL,
  `redirection_old_url` text NOT NULL,
  `redirection_new_url` text NOT NULL,
  `IsDel` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1=Deleted,0=Not deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_redirection`
--

INSERT INTO `tb_redirection` (`redirection_id`, `redirection_old_url`, `redirection_new_url`, `IsDel`) VALUES
(2, 'https://www.chugh.com/practice-areas/tax', 'https://www.chugh.com/practicearea/tax-law', '0'),
(3, 'https://www.chugh.com/diversity-and-inclusion', 'https://www.chugh.com/diversity-inclusion-at-chugh-llp', '0'),
(4, 'https://www.chugh.com/awards-and-recognitions', 'https://www.chugh.com/awards-recognitions', '0'),
(5, 'HTTPS://WWW.CHUGH.COM/CHUGH-LLP-DIRECTORY', 'https://www.chugh.com/our-team', '0'),
(6, 'https://www.chugh.com/our-team/navneet-chugh', 'https://www.chugh.com/teamdetails/1', '0'),
(7, 'https://www.chugh.com/our-team/gladys-v-gervacio', 'https://www.chugh.com/teamdetails/2', '0'),
(8, 'https://www.chugh.com/our-team/nishita-patel', 'https://www.chugh.com/teamdetails/3', '0'),
(9, 'https://www.chugh.com/our-team/minh-luong', 'https://www.chugh.com/teamdetails/4', '0'),
(10, 'https://www.chugh.com/our-team/jacqueline-gonzalez-valle', 'https://www.chugh.com/teamdetails/6', '0'),
(11, 'https://www.chugh.com/our-team/sonia-sidhu', 'https://www.chugh.com/teamdetails/7', '0'),
(12, 'https://www.chugh.com/our-team/carmen-c-lopez', 'https://www.chugh.com/teamdetails/8', '0'),
(13, 'https://www.chugh.com/our-team/deepa-badhwar', 'https://www.chugh.com/teamdetails/9', '0'),
(14, 'https://www.chugh.com/our-team/toni-ordona', 'https://www.chugh.com/teamdetails/10', '0'),
(15, 'https://www.chugh.com/our-team/patricia-rodriguez-galvan', 'https://www.chugh.com/teamdetails/12', '0'),
(16, 'https://www.chugh.com/our-team/mireya-diaz', 'https://www.chugh.com/teamdetails/13', '0'),
(17, 'https://www.chugh.com/our-team/catherine-ramos-samonte', 'https://www.chugh.com/teamdetails/14', '0'),
(18, 'https://www.chugh.com/our-team/marian-jumaquio-2', 'https://www.chugh.com/teamdetails/15', '0'),
(19, 'https://www.chugh.com/our-team/balween-kaur', 'https://www.chugh.com/teamdetails/16', '0'),
(20, 'https://www.chugh.com/our-team/yxey-flores', 'https://www.chugh.com/teamdetails/18', '0'),
(21, 'https://www.chugh.com/our-team/benjamin-fortuna', 'https://www.chugh.com/teamdetails/20', '0'),
(22, 'https://www.chugh.com/our-team/hugo-cobian', 'https://www.chugh.com/teamdetails/22', '0'),
(23, 'https://www.chugh.com/our-team/juan-valdez', 'https://www.chugh.com/teamdetails/23', '0'),
(24, 'https://www.chugh.com/our-team/corazon-a-chua', 'https://www.chugh.com/teamdetails/24', '0'),
(25, 'https://www.chugh.com/our-team/christine-chavez', 'https://www.chugh.com/teamdetails/25', '0'),
(26, 'https://www.chugh.com/our-team/carolyn-rosales', 'https://www.chugh.com/teamdetails/26', '0'),
(27, 'https://www.chugh.com/our-team/micheal-bautista', 'https://www.chugh.com/teamdetails/27', '0'),
(28, 'https://www.chugh.com/our-team/eric-christopher-wun', 'https://www.chugh.com/teamdetails/28', '0'),
(29, 'https://www.chugh.com/our-team/francesca-a-echavarria', 'https://www.chugh.com/teamdetails/29', '0'),
(30, 'https://www.chugh.com/our-team/patricia-ramirez', 'https://www.chugh.com/teamdetails/30', '0'),
(31, 'https://www.chugh.com/our-team/daniela-ochoa', 'https://www.chugh.com/teamdetails/33', '0'),
(32, 'https://www.chugh.com/our-team/gerardo-mendez', 'https://www.chugh.com/teamdetails/34', '0'),
(33, 'https://www.chugh.com/our-team/johoanna-marroquin', 'https://www.chugh.com/teamdetails/35', '0'),
(34, 'https://www.chugh.com/our-team/jacquiline-marroquin', 'https://www.chugh.com/teamdetails/37', '0'),
(35, 'https://www.chugh.com/our-team/sindi-guevara', 'https://www.chugh.com/teamdetails/38', '0'),
(36, 'https://www.chugh.com/our-team/alejandro-gonzalez', 'https://www.chugh.com/teamdetails/39', '0'),
(37, 'https://www.chugh.com/our-team/kirti-kalra', 'https://www.chugh.com/teamdetails/40', '0'),
(38, 'https://www.chugh.com/our-team/melissa-chan', 'https://www.chugh.com/teamdetails/41', '0'),
(39, 'https://www.chugh.com/our-team/navdeep-toor-meamber', 'https://www.chugh.com/teamdetails/42', '0'),
(40, 'https://www.chugh.com/our-team/lihua-tan', 'https://www.chugh.com/teamdetails/43', '0'),
(41, 'https://www.chugh.com/our-team/ragene-cortero', 'https://www.chugh.com/teamdetails/44', '0'),
(42, 'https://www.chugh.com/our-team/deepika-singh', 'https://www.chugh.com/teamdetails/46', '0'),
(43, 'https://www.chugh.com/our-team/nita-tsang', 'https://www.chugh.com/teamdetails/48', '0'),
(44, 'https://www.chugh.com/our-team/rajashree-rajasekaran', 'https://www.chugh.com/teamdetails/49', '0'),
(45, 'https://www.chugh.com/our-team/claire-ariete', 'https://www.chugh.com/teamdetails/51', '0'),
(46, 'https://www.chugh.com/our-team/hooman-yavi', 'https://www.chugh.com/teamdetails/52', '0'),
(47, 'https://www.chugh.com/our-team/xue-bai', 'https://www.chugh.com/teamdetails/53', '0'),
(48, 'https://www.chugh.com/our-team/rachana-n-panchal', 'https://www.chugh.com/teamdetails/54', '0'),
(49, 'https://www.chugh.com/our-team/michelle-velasco', 'https://www.chugh.com/teamdetails/56', '0'),
(50, 'https://www.chugh.com/our-team/anil-malik', 'https://www.chugh.com/teamdetails/57', '0'),
(51, 'https://www.chugh.com/our-team/shilpa-goklani', 'https://www.chugh.com/teamdetails/58', '0'),
(52, 'https://www.chugh.com/our-team/justin-kennedy', 'https://www.chugh.com/teamdetails/59', '0'),
(53, 'https://www.chugh.com/our-team/sanghamitra-mahanta', 'https://www.chugh.com/teamdetails/61', '0'),
(54, 'https://www.chugh.com/our-team/hemaxi-shah', 'https://www.chugh.com/teamdetails/62', '0'),
(55, 'https://www.chugh.com/our-team/oi-shan-tang', 'https://www.chugh.com/teamdetails/63', '0'),
(56, 'https://www.chugh.com/our-team/daniel-terrizzano', 'https://www.chugh.com/teamdetails/64', '0'),
(57, 'https://www.chugh.com/our-team/rebecca-vallard', 'https://www.chugh.com/teamdetails/66', '0'),
(58, 'https://www.chugh.com/our-team/payal-chhabria', 'https://www.chugh.com/teamdetails/67', '0'),
(59, 'https://www.chugh.com/our-team/soriya-un', 'https://www.chugh.com/teamdetails/68', '0'),
(60, 'https://www.chugh.com/our-team/manuel-uy', 'https://www.chugh.com/teamdetails/69', '0'),
(61, 'https://www.chugh.com/our-team/kristianne-anagaran', 'https://www.chugh.com/teamdetails/70', '0'),
(62, 'https://www.chugh.com/our-team/tatiana-salazar', 'https://www.chugh.com/teamdetails/71', '0'),
(63, 'https://www.chugh.com/our-team/aiko-lu', 'https://www.chugh.com/teamdetails/72', '0'),
(64, 'https://www.chugh.com/our-team/diya-mathews', 'https://www.chugh.com/teamdetails/73', '0'),
(65, 'https://www.chugh.com/our-team/min-kim', 'https://www.chugh.com/teamdetails/74', '0'),
(66, 'https://www.chugh.com/our-team/vandana-marath', 'https://www.chugh.com/teamdetails/75', '0'),
(67, 'https://www.chugh.com/our-team/neha-mahajan', 'https://www.chugh.com/teamdetails/77', '0'),
(68, 'https://www.chugh.com/our-team/luciene-guzzi', 'https://www.chugh.com/teamdetails/78', '0'),
(69, 'https://www.chugh.com/our-team/kumarie-singh', 'https://www.chugh.com/teamdetails/80', '0'),
(70, 'https://www.chugh.com/our-team/sergio-gonzalez', 'https://www.chugh.com/teamdetails/81', '0'),
(71, 'https://www.chugh.com/our-team/apoorva-nadkarni', 'https://www.chugh.com/teamdetails/82', '0'),
(72, 'https://www.chugh.com/our-team/easwari-baskaran', 'https://www.chugh.com/teamdetails/83', '0'),
(73, 'https://www.chugh.com/our-team/zoe-mirza', 'https://www.chugh.com/teamdetails/89', '0'),
(74, 'https://www.chugh.com/our-team/andrea-mora-alcauter', 'https://www.chugh.com/teamdetails/90', '0'),
(75, 'https://www.chugh.com/our-team/sara-flad', 'https://www.chugh.com/teamdetails/91', '0'),
(76, 'https://www.chugh.com/our-team/mengxin-cui', 'https://www.chugh.com/teamdetails/92', '0'),
(77, 'https://www.chugh.com/our-team/ujwala-bagal', 'https://www.chugh.com/teamdetails/93', '0'),
(78, 'https://www.chugh.com/our-team/mona-soliman', 'https://www.chugh.com/teamdetails/94', '0'),
(79, 'https://www.chugh.com/our-team/jagan-timirisa', 'https://www.chugh.com/teamdetails/95', '0'),
(80, 'https://www.chugh.com/our-team/angelita-chavez', 'https://www.chugh.com/teamdetails/96', '0'),
(81, 'https://www.chugh.com/our-team/mabel-latham', 'https://www.chugh.com/teamdetails/97', '0'),
(82, 'https://www.chugh.com/our-team/maria-yepez', 'https://www.chugh.com/teamdetails/98', '0'),
(83, 'https://www.chugh.com/our-team/ashima-chock', 'https://www.chugh.com/teamdetails/99', '0'),
(84, 'https://www.chugh.com/our-team/nadine-chen', 'https://www.chugh.com/teamdetails/100', '0'),
(85, 'https://www.chugh.com/our-team/sharmila-karingula', 'https://www.chugh.com/teamdetails/102', '0'),
(86, 'https://www.chugh.com/our-team/pooja-javalagi', 'https://www.chugh.com/teamdetails/103', '0'),
(87, 'https://www.chugh.com/our-team/shabeera-shaik', 'https://www.chugh.com/teamdetails/104', '0'),
(88, 'https://www.chugh.com/our-team/uday-kumar-datla', 'https://www.chugh.com/teamdetails/105', '0'),
(89, 'https://www.chugh.com/our-team/fareed-shaik', 'https://www.chugh.com/teamdetails/107', '0'),
(90, 'https://www.chugh.com/our-team/michelle-masurkar', 'https://www.chugh.com/teamdetails/109', '0'),
(91, 'https://www.chugh.com/our-team/m-vijay-krishna-rao', 'https://www.chugh.com/teamdetails/111', '0'),
(92, 'https://www.chugh.com/our-team/mahesh-kumar-billa', 'https://www.chugh.com/teamdetails/112', '0'),
(93, 'https://www.chugh.com/practice-areas/corporate-law', 'https://www.chugh.com/practicearea/corporate-law', '0'),
(94, 'https://www.chugh.com/practice-areas/tax', 'https://www.chugh.com/practicearea/tax-law', '0'),
(95, 'https://www.chugh.com/practice-areas/immigration', 'https://www.chugh.com/practicearea/immigration', '0'),
(96, 'https://www.chugh.com/practice-areas/intellectual-property', 'https://www.chugh.com/practicearea/intellectual-property', '0'),
(97, 'https://www.chugh.com/practice-areas/international', 'https://www.chugh.com/practicearea/international', '0'),
(98, 'https://www.chugh.com/practice-areas/landlord-and-tenant', 'https://www.chugh.com/practicearea/landlord-tenant', '0'),
(99, 'https://www.chugh.com/practice-areas/litigation', 'https://www.chugh.com/practicearea/litigation', '0'),
(100, 'https://www.chugh.com/practice-areas/mergers-and-acquisition', 'https://www.chugh.com/practicearea/mergers-and-acquisition', '0'),
(101, 'https://www.chugh.com/practice-areas/personal-injury', 'https://www.chugh.com/practicearea/personal-injury', '0'),
(102, 'https://www.chugh.com/practice-areas/real-estate', 'https://www.chugh.com/practicearea/real-estate', '0'),
(103, 'https://www.chugh.com/practice-areas/tax-law', 'https://www.chugh.com/practicearea/tax-law', '0'),
(104, 'https://www.chugh.com/practice-areas/family-law', 'https://www.chugh.com/practicearea/family-law', '0'),
(105, 'https://www.chugh.com/practice-areas/class-action', 'https://www.chugh.com/practicearea/class-action', '0'),
(106, 'https://www.chugh.com/careers', 'https://www.chugh.com/career', '0'),
(107, 'https://www.chugh.com/our-team/jioselin-azusena-juarez-contreras', 'https://www.chugh.com/teamdetails/118', '0'),
(108, 'https://www.chugh.com/our-team/leticia-salazar', 'https://www.chugh.com/teamdetails/119', '0'),
(109, 'https://www.chugh.com/our-team/dolores-co/', 'https://www.chugh.com/teamdetails/120', '0'),
(110, 'https://www.chugh.com/our-team/neharika-salhotra', 'https://www.chugh.com/teamdetails/121', '0'),
(111, 'https://www.chugh.com/our-team/maria-bisutti/', 'https://www.chugh.com/teamdetails/122', '0'),
(112, 'https://www.chugh.com/our-team/arianna-gonzalez/', 'https://www.chugh.com/teamdetails/123', '0'),
(113, 'https://www.chugh.com/our-team/brayana-macias', 'https://www.chugh.com/teamdetails/124', '0'),
(114, 'https://www.chugh.com/our-team/kayla-fernandez', 'https://www.chugh.com/teamdetails/125', '0'),
(115, 'https://www.chugh.com/our-team/marlene-zambrano-castillo', 'https://www.chugh.com/teamdetails/126', '0'),
(116, 'https://www.chugh.com/our-team/utkarsh-sharma', 'https://www.chugh.com/teamdetails/127', '0'),
(117, 'https://www.chugh.com/our-team/xuandi-pham', 'https://www.chugh.com/teamdetails/128', '0'),
(118, 'https://www.chugh.com/our-team/swapnali-kelkar', 'https://www.chugh.com/teamdetails/129', '0'),
(119, 'https://www.chugh.com/our-team/neelima-gangula', 'https://www.chugh.com/teamdetails/130', '0'),
(120, 'https://www.chugh.com/our-team/tereza-kucerova', 'https://www.chugh.com/teamdetails/131', '0'),
(121, 'https://www.chugh.com/our-team/priyanka-bommu', 'https://www.chugh.com/teamdetails/133', '0'),
(122, 'https://www.chugh.com/our-team/shivkumar-k-mudaliar', 'https://www.chugh.com/teamdetails/134', '0'),
(123, 'https://www.chugh.com/our-team/annapurnadevi-katta', 'https://www.chugh.com/teamdetails/135', '0'),
(124, 'https://www.chugh.com/our-team/swapna-rakamolla/', 'https://www.chugh.com/teamdetails/117', '0'),
(125, 'https://www.chugh.com/our-team/jioselin-azusena-juarez-contreras/', 'https://www.chugh.com/our-team/jioselin-juarez-contreras', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_redirection`
--
ALTER TABLE `tb_redirection`
  ADD PRIMARY KEY (`redirection_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_redirection`
--
ALTER TABLE `tb_redirection`
  MODIFY `redirection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
