-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2021 at 08:13 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro3`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `password`, `phonenumber`) VALUES
(1, 'scott', 'ss@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '372884232');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `title`, `content`, `slug`) VALUES
(1, 'Product Plan 02 : Endowment Assurance Plan (With Profit)', '<p><strong>Introduction :</strong></p>\r\n\r\n<p>Endowment Insurance is most familiar &amp; popular life insurance plan in the country. This plan encourages force savings to fulfill your dream. It ensures safe investment, provides financial security, and brings mental peace.</p>\r\n\r\n<p><strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>This plan assures the policyholder to receive the desired amount with accrued bonuses at the maturity of the policy or to the nominees for immature death of policyholder</li>\r\n	<li>Policy term may be for 10 years, 15 years, 20 years.</li>\r\n	<li>Policy holder may surrender the policy at least after the full payment of two consecutive year&rsquo;s premium and will receive surrender value quoted at the time of surrender.</li>\r\n	<li>Policy holder may obtain a loan (maximum 90% of surrender value) against the policy by mortgaging it.</li>\r\n	<li>Accidental Death Benefits (ADB) &amp; Permanent Disabilities Accidental Benefits (PDAB) may be covered</li>\r\n	<li>Income tax rebate may be obtained by taking the policy.</li>\r\n	<li>The claim amount is also tax free</li>\r\n</ul>\r\n\r\n<p><strong>Benefit:</strong></p>\r\n\r\n<p><strong>Survival Benefit</strong></p>\r\n\r\n<ul>\r\n	<li>The policy owner will receive full sum assured along with accrued bonuses on maturity at the end of the term.</li>\r\n</ul>\r\n\r\n<p><strong>Death Benefit</strong></p>\r\n\r\n<ul>\r\n	<li>The nominee of the policyholder will receive full sum assured along with bonuses accrued on death of the policyholder within the term of the policy together with bonuses accrued up to the date of his/her death.</li>\r\n</ul>\r\n', 'product-plan-02-endowment-assurance-plan-with-profit-'),
(2, 'Product Plan 03 : Three Stage Payment Assurance Plan (With Profit)', '<p><strong>Introduction :</strong></p>\r\n\r\n<p>If you make the habit of savings today definitely you might lead a peaceful, quiet &amp; happy life in future. Three Stage Payment Assurance Plan is the most fabulous &amp; popular Life Insurance Plan to its prospective clients throughout the country. This Plan provides high insurance protection and attractive returns on paid premium. It encourages savings to fulfill insured&rsquo;s prospective future life.</p>\r\n\r\n<p><strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>This plan assures emergency inflows of cash for necessity of policyholder</li>\r\n	<li>Premiums can be paid annually, half yearly &amp; quarterly</li>\r\n	<li>Policy term would be for 12 years, 15 years, 18 years, 21 years &amp; 24 years</li>\r\n	<li>This policy would be surrendered after two yearly installments are paid.</li>\r\n	<li>Policy holder may obtain a loan (maximum 90% of surrender value) against the policy.</li>\r\n	<li>Accidental Death Benefits (ADB) &amp; Permanent Disabilities Accidental Benefits (PDAB) may be covered</li>\r\n	<li>Income tax rebate may be obtained by taking the policy.</li>\r\n	<li>The claim amount is also tax free</li>\r\n</ul>\r\n\r\n<p><strong>Benefit:</strong></p>\r\n\r\n<p><strong>Survival Benefit</strong></p>\r\n\r\n<ul>\r\n	<li>The policy holder will receive 25% of the basic sum assured at the end of the one third of the premium payment term.</li>\r\n	<li>The policy holder will receive another 25% of the basic sum assured at the end of two-third of the premium payment term</li>\r\n	<li>The policy holder will receive remaining 50% of the basic sum assured together with accrued bonus on maturity at the end of the term.</li>\r\n</ul>\r\n\r\n<p><strong>Death Benefit</strong></p>\r\n\r\n<ul>\r\n	<li>The nominee will receive full sum assured on death of the policyholder within the term of the policy together with the bonus accrued up to the date of his/her death.</li>\r\n</ul>\r\n', 'product-plan-03-three-stage-payment-assurance-plan-with-profit-'),
(3, 'Product Plan 04: Four Stage Payment Assurance Plan (With Profit)', '<p><strong>Introduction :</strong></p>\r\n\r\n<p>To fulfill the situation demand and policyholder gets the payment security in 4 installments, Mercantile Islami Life Insurance Limited launched this most popular product for our prospective customers. As the policyholder getting the installment during the term of the policy, they can utilize the money to bear the child education expense, to establish new business line and others.</p>\r\n\r\n<p><strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>This plan assures emergency inflows of cash for necessity of policyholder</li>\r\n	<li>Premiums can be paid annually, half yearly &amp; quarterly</li>\r\n	<li>Policy term would be for 12 years, 16 years, 20 years &amp; 24 years</li>\r\n	<li>This policy would be surrendered after two yearly installments are paid.</li>\r\n	<li>Policy holder may obtain a loan (maximum 90% of surrender value) against the policy.</li>\r\n	<li>Accidental Death Benefits (ADB) &amp; Permanent Disabilities Accidental Benefits (PDAB) may be covered.</li>\r\n	<li>Income tax rebate may be obtained by taking the policy.</li>\r\n	<li>The claim amount is also tax free.</li>\r\n</ul>\r\n\r\n<p><strong>Benefit:</strong></p>\r\n\r\n<p><strong>Survival Benefit</strong></p>\r\n\r\n<ul>\r\n	<li>The policy holder will receive 20% of the basic sum assured at the end of the one-fourth of the premium payment term.</li>\r\n	<li>The policy holder will receive another 20% of the basic sum assured at the end of two-fourth of the premium payment term.</li>\r\n	<li>The policy holder will receive another 20% of the basic sum assured at the end of three-fourth of the premium payment term.</li>\r\n	<li>The policy holder will receive remaining 40% of the basic sum assured together with accrued bonus on maturity at the end of the term.</li>\r\n</ul>\r\n\r\n<p><strong>Death Benefit</strong></p>\r\n\r\n<ul>\r\n	<li>The nominee will receive full sum assured on death of the policyholder within the term of the policy together with the bonus accrued up to the date of his/her death</li>\r\n</ul>\r\n', 'product-plan-04-four-stage-payment-assurance-plan-with-profit-'),
(4, 'Product Plan 06: Hajj Bimas (With Profit)', '<p><strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>This plan assures the policyholder to receive the full sum assured together with accrued bonuses on maturity.</li>\r\n	<li>The nominee of the policyholder will receive full sum assured with accrued bonuses on death of the policyholder.</li>\r\n	<li>Minimum policy term would be for 5 years, and maximum would be for 15 years.</li>\r\n	<li>Minimum face amount/ basic sum assured of the policy would be BDT 100,000 and maximum would be BDT 10,00,000.</li>\r\n	<li>Premiums can be paid annually, half yearly &amp; quarterly.</li>\r\n	<li>Minimum age of buying policy is 20 years and maximum age is 55 years.</li>\r\n	<li>This policy would be surrendered after two yearly installments are paid.</li>\r\n	<li>Policy holder may obtain a loan (maximum 90% of surrender value) against the policy.Accidental Death Benefits (ADB) &amp; Permanent Disabilities Accidental Benefits (PDAB) may be covered.Income tax rebate may be obtained by taking the policy.The claim amount is also tax free.</li>\r\n</ul>\r\n\r\n<p><strong>Benefit:</strong></p>\r\n\r\n<p><strong>Survival Benefit</strong></p>\r\n\r\n<ul>\r\n	<li>The policyholder will receive the full sum assured together with accrued bonuses on maturity at the end of the term. The policyholder can utilize the maturity benefit for performing Hajj or for any other purpose. If he/she requires cash benefit before the maturity of the policy he/she can surrender the policy and receive cash surrender value to be quoted by the Company at the time of surrender of the policy.</li>\r\n</ul>\r\n\r\n<p><strong>Death Benefit</strong></p>\r\n\r\n<ul>\r\n	<li>The nominee will receive full sum assured on death of the policyholder within the term of the policy together with accrued bonuses.</li>\r\n</ul>\r\n', 'product-plan-06-hajj-bimas-with-profit-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
