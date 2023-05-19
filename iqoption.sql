-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2021 at 05:30 AM
-- Server version: 5.7.32-35-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbczedvfwvh4pr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `wallet` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `wallet`, `name`) VALUES
(1, 'support@empiretradingpro.com', '$2y$10$EH9CF5RFgOBR6wwnu.6SXOpGc60lK5FAPGP2NTzxBT9mZ42Y4HX8m', '3HJQTxgnh3FzURnfqsqiq3vhEyzJB87Hh4', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `account_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `plan` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `bank` varchar(150) NOT NULL,
  `account_name` varchar(150) NOT NULL,
  `account_number` varchar(150) NOT NULL,
  `ssn` varchar(150) NOT NULL,
  `pobox` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  `status` int(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `account_id`, `name`, `email`, `phone`, `plan`, `country`, `bank`, `account_name`, `account_number`, `ssn`, `pobox`, `token`, `status`, `date`, `password`) VALUES
(46, 'rTA8os', 'Theresa Kalumba', 'theresakalumba2020@gmail.com', '', '', 'Zambia', '', '', '', '', '', 'DI9hMIliBe1Swo9', 0, '2020-10-28 11:50:22pm', '$2y$10$Ccz77dgdrz5zLg6VOFTq6efpyKsryC3HRxeKArmqaer4arUvN65Pq'),
(33, 'UFqCj5', 'Raymond Timothy long', 'raymondlong602@gmail.com', '', '', 'United States', '', '', '', '', '', 'fbnJWsACsmZz', 1, '2020-09-13 12:39:12pm', '$2y$10$BO9e.kMjZvMWvIKgvvPpA.b7cT/EDZouvSnMMPh2uCwMfbzNVaR8i'),
(55, '7Y6ZJP', 'Matthew R Chandler', 'matt2438@gmail.com', '', 'Mini Plan', 'United States', '', '', '', '', '', '3KIKREKTllFo', 1, '2020-11-13 10:03:09pm', '$2y$10$4wdro4IVC2JFbfaNfHwkoufWXOkjuV23nhq9cnu9RhZzVmvLlZ.bm'),
(36, 'SdxFO6', 'Brett nelson', 'frankmurphy016@gmail.com', '', '', 'United States', '', '', '', '', '', 'eIr0zhsFtQCAig4', 1, '2020-09-25 12:56:20pm', '$2y$10$RMdQvZe8oKYziqFLDAbMz.viOqVVDDC70IRstBOuyUUGfi.0sdSeq'),
(37, '49AiWS', 'Charles Broussard', 'Charlesbroussard22@gmail.com', '', 'Mini Plan', 'United States', '', '', '', '', '', '', 1, '2020-09-30 02:17:17am', '$2y$10$MnFKao1eOBjC0Dg/Tw00buUlSDXAlfjgzYE7ETkJILEvUD0wHldue'),
(56, 'Jwwv18', 'BRUCE MADISON', 'brucemad1@yahoo.com', '', '', 'United States', '', '', '', '', '', 'cI7a2fDUXkw1', 1, '2020-12-03 10:11:47am', '$2y$10$MpDDVPYzzg1baWWFq9D74ulvSiKR.ttgz4TebfnI.eSeBs9DJYXg6'),
(38, 'wPJ1Ah', 'Paul Gryson', 'Paulgryson60@hotmail.com', '', '', 'United Kingdom', '', '', '', '', '', 'fIhCj3fkT9G3', 1, '2020-10-03 08:52:51pm', '$2y$10$TUIZKIGEvktOjmQfV2S2recaXPvGddcGly5RCc/szGHflni0WfUMS'),
(39, 'N4dboD', 'Mohamed menla hoseyin ', 'apo.hosen555@gmail.com', '', '', 'Turkey', '', '', '', '', '', 'bMyFG2UvcyQT', 1, '2020-10-05 09:54:03am', '$2y$10$kj3rfj3lSIFzmQ9hsJXkhOENaVhl2EU3O.TktRWMqcWUtMjoz.Jf.'),
(34, 'mORuzD', 'Shawn Greene', 'GreenLyionInc@Gmail.com', '', 'Mini Plan', 'United States', '', '', '', '', '', 'Onf9NQCwoVG6', 1, '2020-09-18 10:59:36pm', '$2y$10$EHPxjDaPpuiOBN0kzQhzl.R2KQB2OrTczTuc5nFZBUNfYQNYd8BMO'),
(35, 'SR43dj', 'Marcus Grant', 'mgrant7@sbcglobal.net', '', 'Mini Plan', 'United States', '', '', '', '', '', 'XBdFeMCRXCMe', 1, '2020-09-18 11:24:43pm', '$2y$10$ONomiSS5.lpSnHrqX0IHg.Y6IVdEicKAy5VzxRvvihURSwoaGAPem'),
(40, 'G0jL2A', 'Mohamed menla hoseyin ', 'aposham43@gmail.com', '', '', 'Turkey', '', '', '', '', '', '', 0, '2020-10-05 09:59:15am', '$2y$10$MnFKao1eOBjC0Dg/Tw00buUlSDXAlfjgzYE7ETkJILEvUD0wHldue'),
(41, 'BWYjiE', 'Thomas edison', 'thomasbrandon385@gmail.com', '', '', 'Afghanistan', '', '', '', '', '', 'uWSMmgp5WgKb', 1, '2020-10-05 01:38:23pm', '$2y$10$wPndRij9wvzq.s63ZYr5veZB4.whCFsvLkeBW0ODGPI0HlUGN5xjO'),
(42, '3pkc1W', 'jeffrey c cooper', 'mudrunnersinc@yahoo.com', '', '', 'United States', '', '', '', '', '', 'Hi5KOKCzEDsX', 1, '2020-10-13 10:37:29pm', '$2y$10$M0xRFhtt9wjrmvWAsQ9Q3uW04FdOkdiWX6t5uGRDVlF0BlH1zJydO'),
(43, '9Cgesp', 'Tchouanga', 'ftchouanga@gmail.com', '', '', 'Cameroon', '', '', '', '', '', 'cK1zmCUgOTDB', 0, '2020-10-14 12:33:25am', '$2y$10$vsGqXyOWdOUolaknuZa5Euk33oEBJxZVAluF9GIyI7fFvMqEzDmHy'),
(44, 'OnzqSd', 'Anel', 'Anelmorley@gmail.com', '', '', 'South Africa', '', '', '', '', '', '', 1, '2020-10-15 10:07:51am', '$2y$10$MnFKao1eOBjC0Dg/Tw00buUlSDXAlfjgzYE7ETkJILEvUD0wHldue'),
(45, 'PNN3B0', 'Benjamin franklin', 'captainthomas0017@gmail.com', '', '', 'Nigeria', '', '', '', '', '', 'l1VFd2xBKZom', 0, '2020-10-15 10:51:25am', '$2y$10$Ktqu.hTJHBMXch/gYpuVWuuQdUYc3twORlsja6ZcUfsQgzCASs/lW'),
(68, 'nljeow', 'Paul Jones Martins', 'collinssoftwares@gmail.com', '', '', 'Nigeria', '', '', '', '', '', 'uNx9JwcfpYu1', 0, '2021-02-23 01:20:59pm', '$2y$10$JvnaFPZZEPCEr/ZSPnXTPex9gQ6RedPz8JXbOqP38C2la/iBxX4DS'),
(48, 'uxMvc1', 'OyibodeOyibode ', 'oyibodenielden0007@gmail.com', '', '', 'United States', '', '', '', '', '', '', 1, '2020-10-29 12:48:57am', '$2y$10$MnFKao1eOBjC0Dg/Tw00buUlSDXAlfjgzYE7ETkJILEvUD0wHldue'),
(49, 'T3iqyj', 'OyibodeOyibode ', 'emily.graham.me@gmail.com', '', '', 'United States', '', '', '', '', '', '', 0, '2020-10-29 12:51:54am', '$2y$10$MnFKao1eOBjC0Dg/Tw00buUlSDXAlfjgzYE7ETkJILEvUD0wHldue'),
(50, '8zFDpA', 'Max S Pranger', 'spseal176@gmail.com', '', '', 'United States', '', '', '', '', '', 'wVS5yI3pVze3', 1, '2020-10-29 11:24:42pm', '$2y$10$2.UPRdbDrE2OOlu5NBRTguSRBFlrf4w1rktrQry09kCsd8PH4yoxq'),
(54, 'K4biv0', 'Zewelanji namwawa', 'Lanjinams@gmail.com', '', '', 'Zambia', '', '', '', '', '', 'EGV3CSYEzRzT', 0, '2020-11-11 01:38:42pm', '$2y$10$YGtOBO1lKEQgQCcyYwI9YeLtXBnRc5pJPj1xZJ.KOzELZrhRoGDHG'),
(57, '7WsUdT', 'Charles Russell', 'Russchib@gmail.com', '', 'Mini Plan', 'United States', '', '', '', '', '', 'YnCM5ItBnzjR', 1, '2020-12-03 09:19:32pm', '$2y$10$sxEfaj7g8UyF6VkxHYPrauWia8F9xN3aD4Za/pDtk42YB/u7nZMo.'),
(58, 'nRkUEH', 'Martin Kinga', 'guamamk@gmail.com', '', '', 'Kenya', '', '', '', '', '', 'VN1PN6lQsaiH', 1, '2020-12-09 03:56:18pm', '$2y$10$YubhNoNQO49RNVYIpMCeDuolDs4b0XveZ70WGPOSZ..OxSNZQA5v2'),
(59, 'YJsF5d', 'Jessica Allen', 'jessyallen815@gmail.com', '', 'Mini Plan', 'United States', '', '', '', '', '', 'Bl6jVkgFaafC', 1, '2021-01-02 02:10:43am', '$2y$10$LbtglWRMPCZ11YjymO19XuyI/hmXRGitMdkBEeI7bPYHTXPhRYtPK'),
(60, 'ZCX5Fr', 'Goodman', 'Goodmanngubo@gmail.com', '', '', 'South Africa', '', '', '', '', '', 'qmVX9rWSTq8m', 1, '2021-01-07 08:17:42pm', '$2y$10$vhOJ0uLoUOndk/0sMpFgFuTRA9HT.Ukcm2aX1ipXHatINAXlnbQSi'),
(61, 'wdwDRX', 'Sifiso wonderboy Mbadu ', 'sifisombadu@gmail.com', '', '', 'South Africa', '', '', '', '', '', 'efr3jmLyIWkz', 1, '2021-01-13 02:43:35am', '$2y$10$2oE7qni.rsuc0u3bzGO92uMqvnes1KLE6H8udw.UoFHA4IJ4GJZP.'),
(62, 'FVNict', 'Abidhussain', 'Asidhussain27@gmail.com', '', '', 'Pakistan', '', '', '', '', '', '', 1, '2021-01-13 05:31:17pm', '$2y$10$AY8XGfsoIW.glPswgmvTVueQ/m8qsLlQml7GrH3grZkFBdmsQvUxa'),
(63, '8V2sjR', 'gfkkxyhc', 'sample@email.tst', '', '', 'Afghanistan', '', '', '', '', '', '', 0, '2021-01-22 11:05:26am', '$2y$10$nAFygRohCkGKjlGZZDqsiOaZZ1y.eQDZxlv8b6bGVh.Kw7F4MLrVq'),
(65, 'aSEXvH', 'TINASHE TICHAYEVA NANGO', 'tinashe4u@gmail.com', '', '', 'South Africa', '', '', '', '', '', '9QMlDT6vYelj', 0, '2021-02-15 06:14:41pm', '$2y$10$njC.P9DgbOcVH4hkB4HjeuX7ZOOdpJKKtde8RpNYOsFn9Y2WI/CmK'),
(66, 'GWQNNi', 'Matthew C Burgin', 'matthewcburgin@yahoo.com', '', '', 'United States', '', '', '', '', '', 'Mb340ew9W2sj', 0, '2021-02-18 01:34:06am', '$2y$10$WoK3afuDNRoGgZ7fpcvUlu8K.h5Pn0OvY5CbdHEtZ99votJC5PU4.'),
(67, 'y9yMK8', 'AGOGO COLLINS', 'agogocollins80@gmail.com', '', '', 'Nigeria', '', '', '', '', '', 'oG9DRJfLQ6wB', 1, '2021-02-23 05:21:38am', '$2y$10$yOgdWkszHz8xAcdCCaKkbODEPZV3fozURB24pUnO9hRoe2nTzYsIu'),
(69, '3KqbGs', 'Michael', 'jehoshaphativworin@gmail.com', '', '', 'Afghanistan', '', '', '', '', '', 'kIjNdBH7xuur', 1, '2021-02-26 08:39:40pm', '$2y$10$xrCEhQMrmmhQKg6w8HA6xeTDHhhYg6enEgq3JVL2yfgx5.drA3aK.'),
(70, 'NUr46E', 'James Wainaina', 'jmwaurag@gmail.com', '', '', 'Kenya', '', '', '', '', '', 'OpHf8TqQlqya', 1, '2021-02-27 05:18:57am', '$2y$10$84kvgKS8TiA6AQ9Vd8tB8e3viypznvy.6qseYmTKpivUPa1nXSMuS'),
(71, 'vinQy4', 'Mahmmud mostafa', 'mahmmudsabboba@gmail.com', '', '', 'Egypt', '', '', '', '', '', 'bT4rZ1sctEEL', 1, '2021-02-27 08:00:05pm', '$2y$10$HR0xVuhNR9vMEAn8ttlBa.jdFRxYTK.2BxOU8Na5yXDavkTq3tPSa'),
(72, 'mZDXY7', 'Anil bridgelall', 'sallyboodhram1995@gmail.com', '', '', 'United States', '', '', '', '', '', '88dGc9uv2evC', 1, '2021-03-27 02:25:23am', '$2y$10$CePM/uq6ADT.I/4d58bH5.wmB.gbYL8jADj8Cerhq4I003yomzdjW'),
(73, 'pNY6o9', 'Terry', 'ws0741859@gmail.com', '', 'Mini Plan', 'Nigeria', '', '', '', '', '', '8FrIwmwzIqDX', 1, '2021-04-03 05:03:15am', '$2y$10$wh8QtLGpjWAIhDbdDrczwe8Fgcza4QZpsZoIF80HSVutWdP7uKadW'),
(74, 'PlBQi1', 'swapnil verma', 'swapnil.verma64@gmail.com', '', '', 'India', '', '', '', '', '', 'K2JjtYHh3tyP', 1, '2021-05-29 11:11:56am', '$2y$10$L7GbkENMCDoQJKquqfgHxOECQxXYWepuGqB5MXEzyVbSuXBaGLJte'),
(75, 'cb0xKc', 'Vincent aswani ombato', 'vincentombato@gmail.com', '254759129684', 'Mini Plan', 'Kenya', 'Equity', 'Equity', '0706778733', '', '', 'bWruoWuHTuSr', 1, '2021-07-27 06:40:44pm', '$2y$10$q/kKEbjIzP8mZNoTQ8920u36MVB1FKub/E.y7DSIMbKjNS42MPnlK'),
(76, 'bK7Ve9', 'Carlie Scharling', 'whoami003@protonmail.com', '', '', 'Austria', '', '', '', '', '', 'L39zVG6JyWCo', 1, '2021-07-28 05:23:48pm', '$2y$10$rdWQDFTCOLa7YpkeY6ttXuJmGBYeU/bUSs.S1wndKjnTssbCpZyki'),
(77, 'VvzR0B', 'Martin St John', 'martin@snjhn.com', '8184037542', '', 'United States', 'Navy Federal Credit Union', 'Martin St John', '7091075460', '', '', 'R0Is51IVzdQh', 1, '2021-08-03 08:17:48pm', '$2y$10$6rIiJ5Vr2HCznuw0WHWEr.BKzRtb4hwx78PI.HNbxVGf/HbP4oLHG'),
(78, 'FLFU3f', 'BRUCE MADISON', 'jeff.forex533@gmail.com', '', 'Silva Plan', 'United States', '', '', '', '', '', 'CX1M63Wh4ndL', 1, '2021-08-03 08:53:03pm', '$2y$10$UNoHSJPFjaNDuxCNuounG.I.MW/l1GFBwDokFOUUOJDPExRbbc8IC'),
(79, '9MkYrK', 'Brad Herts ', 'Williamsmiller810@gmail.com', '', '', 'United States', '', '', '', '', '', '', 1, '2021-08-13 05:56:42pm', '$2y$10$frxLBj8CTC7wdXyyEvE8yeFvZFxzkzNyZkI9Pxb2KacV7t7TZywDq'),
(80, 'm01EXx', 'Brad herts', 'Bookergrassie021@gmail.com', '', '', 'United States', '', '', '', '', '', 'ExicUfEhrVqD', 1, '2021-08-13 05:59:28pm', '$2y$10$8Ob2p2z7JmfnaGSyCdggn.RsXiW5NoAFjGd.t3TEkxLmi4e6XDSVq'),
(81, 'HmYru7', 'Bruno Andrade', 'bruno2000silvestre@hotmail.com', '', 'Mini Plan', 'United States', '', '', '', '', '', '78uBGqbXYyIN', 1, '2021-09-03 06:06:29pm', '$2y$10$te6huG1f7kleCz5SSX6qM.FVhnttMgtZ.62pIghIcB7JzghFe/9GG'),
(82, 'hMhzkJ', 'Leonidas Diamantopoulos', 'leonidasangel2013@gmail.com', '', '', 'Greece', '', '', '', '', '', 's3AtwLZqjLMd', 1, '2021-09-10 04:57:45pm', '$2y$10$Nsrn2OcL0GBACafmhlA67eJwjSvGuAt2vjEjlLQxSbxG8c9LWCH7O'),
(83, 'YyzJ8U', 'Albert kantussan', 'Albertalieukantussan@email.com', '', '', 'Gambia', '', '', '', '', '', 'uh1wHaZ8s2xc', 1, '2021-09-13 04:58:49pm', '$2y$10$73O183mN.DBlgViDw7LutuRFGLgZcC5HBujzazpuQtlKLqJGxOv82'),
(84, 'dvcbC2', 'Joel Abraham', 'joelbambs@gmail.com', '', '', 'India', '', '', '', '', '', 'IIImGR1MrP1Q', 1, '2021-09-15 06:32:30pm', '$2y$10$db8ZWasBjO4fTCDc4Nh9YuzGxYU//i/xFkvvfYkamShkW.MUHW6m2'),
(85, '1XH3f3', 'Joel Abraham', 'jayofficia@gmail.com', '', '', 'India', '', '', '', '', '', 'hogpE04eIm2q', 1, '2021-09-15 06:33:39pm', '$2y$10$U3JVJkKusjRQJ3/Sxiyop.siCotWNgpTJZ7E/ZQWak2J7m9YLlyny'),
(86, 'UJZ8E5', 'BRIDGET K EDGINGTON', 'williamsbrooks037@gmail.com', '4062754329', '', 'United States', 'Wels', '005633567', '476876', '', '', 'JrGfFR6Kqbmy', 1, '2021-09-25 01:05:48am', '$2y$10$t8N9m9Tgz4TebAuzqXI64OOm5XU3n24kYDsFMNlRrfZp2KV/GtRj6'),
(87, '6ZAn4S', 'Olivia Pardal Mata', 'oliviamata117@gmail.com', '919462908', '', 'Portugal', 'Millenium- BCP', 'Olivia Mata', '53178214', '', '', 'GiLa2NPOzIx5', 1, '2021-09-26 10:26:52am', '$2y$10$MwkKD0fTv0GLC29toTlwYeIMSS1LyXJVjfr0rvafJTgjuD3gQddi.'),
(88, 'LGdzpU', 'RAMSON', 'ramsonscott533@gmail.com', '', '', 'United States', '', '', '', '', '', 'HVBcgOfzCxfl', 1, '2021-09-28 03:01:48pm', '$2y$10$XwfOM9ImRfrzr18nc0m5derSbJuojoeLjk3sdviTT3caEbNT8XZf2'),
(89, 'kf6XpI', 'Rose Polume', 'rpolume74@gmail.com', '', '', 'Papua New Guinea', '', '', '', '', '', '8IZV6DJBfCE8', 1, '2021-10-01 10:59:10am', '$2y$10$IZF7uRZkAZBVotTkxHM0k.6M2w5cndnvX2tV4s1W3j8MfSFFMNF6m'),
(90, 'xmOxug', 'Sullyanne Sisii', 'smsisii143@gmail.com', '', 'Mini Plan', 'Papua New Guinea', '', '', '', '', '', 'R2xddDwV3SgS', 1, '2021-10-06 01:26:52pm', '$2y$10$y7nLtTg8M6bP8iBUSMokBOl0UTSJBJ8K1sf9W7f1H5PWzsjsYaisW'),
(91, 'uUVeDo', 'ROBERT CRUMP', 'mikeyc6363@gmail.com', '', 'Silva Plan', 'United States', '', '', '', '', '', 'rIsCnt4aWJqy', 1, '2021-10-08 08:13:12pm', '$2y$10$pM7U5pwSMIJoLVimzDexBern1QKtalwrlkbRGWUp2hoXBrF87UtAe'),
(92, 'wTl5MZ', 'James Saa Bundoo', 'futurepresident54@gmail.com', '', '', 'Liberia', '', '', '', '', '', 'g9AlGGDdJlBd', 1, '2021-10-11 06:31:19pm', '$2y$10$b7jfnzfo/tJnqskDIxAThuIDJQHOLMeRLOiCVzGAaKg96Tn4sRWQe'),
(93, 'cel726', 'Bedriye', 'Yagmurmuptelasii@outlook.com', '', '', 'Turkey', '', '', '', '', '', 'LgkwIaegrtzq', 1, '2021-10-14 01:00:57am', '$2y$10$CMziUikVhZsjQIviOIIAuuzFRxTSGoTZuK0ss2./Il3kFIlao1cvS'),
(94, 'u3qqFs', 'mark moncher', 'mmu@Mail.com', '', '', 'United States', '', '', '', '', '', 'asqknIua3Pks', 1, '2021-10-16 03:59:48pm', '$2y$10$M3wZl4tRD9XxSrTn4BxIw.2EFoTTTprKfBro5TU3ERdp.z4hznoJW'),
(95, '4lp0D7', 'Gershon Wajntraub', 'gershonw1@gmail.com', '', 'Mini Plan', 'United States', '', '', '', '', '', 'xldOCHJM2dnR', 1, '2021-11-03 03:44:43am', '$2y$10$hwn8zwRYQNYUGCY9oSiFMubTVQTHrB0W231ygp/mhWcY0Uj3SYtnW'),
(96, '5fpOBJ', 'Leighton Peters ', 'leightonpeters@hotmail.com', '2143347099', '', 'United States', 'Chase Banke', 'IQ invest', '881644587', '', '', 'YnZbpR2VYP0P', 1, '2021-11-11 04:22:27pm', '$2y$10$oSyLItASwBgpaFhQhlB81OQZ3ZI1Qr/7ceDPrfxxzr7nq.VXDVnES'),
(97, 'p63PBA', 'Dustin Baker', 'dbake@nym.hush.com', '', '', 'Canada', '', '', '', '', '', 'gxBEAzmIoiO2', 1, '2021-11-24 09:26:38am', '$2y$10$TVGOPskpXotJkY090eJBOeD1WXZgZVkg16pyHEnNB0jpk0SYne96a');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `transact_id` varchar(100) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `bonus` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `date`, `transact_id`, `client_id`, `status`, `balance`, `profit`, `bonus`) VALUES
(35, '2020-11-20 12:31:23am', '082742100247', '7Y6ZJP', 'Completed', '75', '18', '0'),
(34, '2020-11-18 10:03:25pm', '458003304430', '7Y6ZJP', 'Completed', '71', '14', '0'),
(33, '2020-11-17 08:44:58pm', '885235314768', '7Y6ZJP', 'Completed', '65', '8', '0'),
(21, '2020-10-17 01:04:28am', '649499199890', 'OnzqSd', 'Completed', '500', '500', '50'),
(22, '2020-10-20 12:11:02am', '383490579984', 'OnzqSd', 'Completed', '1490', '990', '50'),
(27, '2020-10-23 03:53:47am', '369434292803', 'OnzqSd', 'Completed', '5350', '4800', '50'),
(24, '2020-10-21 04:14:07pm', '531444448809', '6Kl0TZ', 'Completed', '2000', '300', '0'),
(25, '2020-10-21 04:14:44pm', '556186830562', '6Kl0TZ', 'Completed', '3000', '200', '0'),
(26, '2020-10-21 04:17:02pm', '505629064597', 'OnzqSd', 'Completed', '3700', '3200', '50'),
(28, '2020-10-26 11:14:42pm', '383969056079', 'OnzqSd', 'Completed', '6850', '6300', '50'),
(29, '2020-10-28 10:58:30pm', '193463752819', 'OnzqSd', 'Completed', '8450', '7900', '50'),
(30, '2020-11-13 10:34:37pm', '264984134100', '7Y6ZJP', 'Completed', '48', '0', '0'),
(31, '2020-11-13 11:46:27pm', '351572211754', '7Y6ZJP', 'Completed', '57', '0', '0'),
(32, '2020-11-16 09:54:17pm', '486430841724', '7Y6ZJP', 'Completed', '61', '4', '0'),
(36, '2020-11-21 08:09:47am', '779120878561', '7Y6ZJP', 'Completed', '79', '22', '0'),
(37, '2020-11-23 09:46:28am', '933484604958', '7Y6ZJP', 'Completed', '85', '28', '0'),
(38, '2020-11-23 11:04:49am', '155081025241', '7Y6ZJP', 'Completed', '85', '22', '0'),
(39, '2020-11-23 12:35:19pm', '082915480679', 'OnzqSd', 'Completed', '0.0', '0', '0'),
(40, '2020-11-23 11:32:43pm', '931693699608', '7Y6ZJP', 'Completed', '89', '26', '0'),
(41, '2020-11-25 09:30:41pm', '559404852775', '7Y6ZJP', 'Completed', '93', '30', '0'),
(42, '2020-11-26 12:10:20am', '927495247119', '7Y6ZJP', 'Completed', '97', '34', '0'),
(43, '2020-11-27 09:28:44pm', '335614452992', '7Y6ZJP', 'Completed', '101', '38', '0'),
(44, '2020-11-30 11:02:52pm', '043317648265', '7Y6ZJP', 'Completed', '105', '42', '0'),
(45, '2020-12-02 04:13:44pm', '807158344163', '7Y6ZJP', 'Completed', '109', '48', '0'),
(46, '2020-12-02 04:13:51pm', '315754905913', '7Y6ZJP', 'Pending', '109', '48', '0'),
(47, '2020-12-02 04:14:42pm', '141799804110', '7Y6ZJP', 'Completed', '109', '48', '0'),
(48, '2020-12-02 11:57:14pm', '961471129261', '7Y6ZJP', 'Completed', '113', '52', '0'),
(49, '2020-12-03 10:14:39am', '789678743968', 'Jwwv18', 'Pending', '17600', '14100', '0'),
(50, '2020-12-03 11:04:22pm', '917049179900', '7Y6ZJP', 'Completed', '117', '56', '0'),
(51, '2020-12-08 01:16:48am', '026464572937', '7Y6ZJP', 'Completed', '121', '60', '0'),
(52, '2020-12-10 10:19:44am', '146812235366', '7Y6ZJP', 'Completed', '133', '72', '0'),
(53, '2020-12-10 11:56:55pm', '607443790677', '7Y6ZJP', 'Completed', '137', '76', '0'),
(54, '2020-12-15 12:24:19am', '668011435838', '7Y6ZJP', 'Completed', '141', '80', '0'),
(55, '2021-01-12 12:31:16am', '910046251892', '7Y6ZJP', 'Completed', '751', '80', '0'),
(56, '2021-01-12 02:36:47am', '089424441841', '7Y6ZJP', 'Completed', '800', '129', '0'),
(57, '2021-01-13 12:25:18am', '212468930771', '7Y6ZJP', 'Completed', '849', '178', '0'),
(58, '2021-01-14 06:42:32am', '434591813785', '7Y6ZJP', 'Completed', '938', '267', '0'),
(59, '2021-01-14 11:59:55pm', '955493623665', '7Y6ZJP', 'Completed', '1022', '351', '0'),
(60, '2021-01-15 06:08:22pm', '750227846539', '7Y6ZJP', 'Completed', '1142', '471', '0'),
(61, '2021-01-16 12:27:47am', '398556789372', '7Y6ZJP', 'Completed', '1231', '560', '0'),
(62, '2021-01-16 09:57:00am', '084092128443', '7Y6ZJP', 'Completed', '1301', '630', '0'),
(63, '2021-01-18 11:41:56pm', '413946801722', '7Y6ZJP', 'Completed', '1421', '750', '0'),
(64, '2021-01-20 01:24:40am', '761682746204', '7Y6ZJP', 'Completed', '1506', '835', '0'),
(65, '2021-01-20 07:02:37pm', '288646696979', '7Y6ZJP', 'Completed', '1553', '883', '0'),
(66, '2021-01-22 12:38:34am', '931951760305', '7Y6ZJP', 'Completed', '1645', '975', '0'),
(67, '2021-01-23 08:09:29am', '725638371975', '7Y6ZJP', 'Completed', '1781', '1111', '0'),
(68, '2021-01-26 06:05:27am', '084177664215', '7Y6ZJP', 'Completed', '1989', '1222', '0'),
(69, '2021-01-27 01:41:11pm', '060499374169', '7Y6ZJP', 'Completed', '2069', '1302', '0'),
(70, '2021-02-20 04:37:20pm', '654350058806', 'GWQNNi', 'Completed', '5300', '3300', '0'),
(71, '2021-02-20 04:39:20pm', '151180288603', '7Y6ZJP', 'Completed', '5300', '3300', '0'),
(72, '2021-02-23 11:17:26pm', '370745547280', '7Y6ZJP', 'Completed', '8600', '6600', '0'),
(73, '2021-02-23 11:17:58pm', '913630380016', '7Y6ZJP', 'Completed', '8650', '6650', '0'),
(74, '2021-03-02 01:38:11pm', '885495244087', '7Y6ZJP', 'Completed', '11950', '9950', '0'),
(75, '2021-04-25 12:07:05pm', '403115415429', '7Y6ZJP', 'Completed', '12250', '10250', '0'),
(76, '2021-05-03 05:38:56am', '593577358609', '7Y6ZJP', 'Completed', '12850', '10850', '0'),
(77, '2021-05-10 11:15:26pm', '332334354112', '7Y6ZJP', 'Completed', '13350', '11350', '0'),
(78, '2021-08-03 09:03:46pm', '846951169136', 'FLFU3f', 'Pending', '3050', '2800', '0'),
(79, '2021-09-25 01:07:54am', '591356216519', 'UJZ8E5', 'Completed', '1000', '1000', '0'),
(80, '2021-09-25 01:10:17am', '277646332785', 'UJZ8E5', 'Completed', '1200', '1200', '0'),
(81, '2021-09-25 01:11:18am', '109559223588', 'UJZ8E5', 'Completed', '3000', '0', '0'),
(82, '2021-09-28 06:50:08pm', '578915446010', '6ZAn4S', 'Completed', '123', '0', '0'),
(83, '2021-10-09 08:54:38am', '291204496593', 'FLFU3f', 'Pending', '3550', '3300', '0'),
(84, '2021-10-09 10:37:11am', '553332857717', 'VvzR0B', 'Completed', '500', '0', '0'),
(85, '2021-10-11 03:16:45pm', '875108864028', '6ZAn4S', 'Completed', '240', '0', '0'),
(86, '2021-10-11 10:00:58pm', '542530257678', 'VvzR0B', 'Completed', '533', '33', '0'),
(87, '2021-10-11 10:08:41pm', '149445995119', '6ZAn4S', 'Completed', '256', '16', '0'),
(88, '2021-10-13 10:49:56am', '026486116639', '6ZAn4S', 'Completed', '272', '32', '0'),
(89, '2021-10-13 10:52:18am', '416213617532', 'VvzR0B', 'Completed', '566', '66', '0'),
(90, '2021-10-14 12:20:01am', '763629177683', 'uUVeDo', 'Completed', '210', '0', '0'),
(91, '2021-10-14 12:21:04am', '265101565845', 'uUVeDo', 'Completed', '216', '0', '0'),
(92, '2021-10-14 12:51:21am', '425239415348', '6ZAn4S', 'Completed', '288', '48', '0'),
(93, '2021-10-14 12:52:26am', '292585308864', 'VvzR0B', 'Completed', '599', '99', '0'),
(94, '2021-10-15 04:59:01am', '323597934638', 'uUVeDo', 'Completed', '231', '15', '0'),
(95, '2021-10-15 05:01:56am', '264056131834', '6ZAn4S', 'Completed', '304', '64', '0'),
(96, '2021-10-15 05:04:08am', '273997649564', 'VvzR0B', 'Completed', '632', '132', '0'),
(97, '2021-10-16 12:49:02am', '312561424111', '6ZAn4S', 'Completed', '320', '80', '0'),
(98, '2021-10-16 12:51:06am', '791274134781', 'uUVeDo', 'Completed', '246', '30', '0'),
(111, '2021-10-22 07:22:01am', '454811843631', 'VvzR0B', 'Completed', '764', '264', '0'),
(100, '2021-10-19 07:49:18am', '605979775379', 'uUVeDo', 'Completed', '278', '62', '0'),
(101, '2021-10-19 07:50:24am', '955080608385', '6ZAn4S', 'Completed', '340', '80', '0'),
(102, '2021-10-20 09:45:32am', '538614639893', 'uUVeDo', 'Completed', '309', '93', '0'),
(103, '2021-10-20 09:46:34am', '384360327051', '6ZAn4S', 'Completed', '380', '120', '0'),
(110, '2021-10-20 11:28:45pm', '081704284512', 'uUVeDo', 'Completed', '333', '117', '0'),
(106, '2021-10-20 11:13:35pm', '715452648025', '6ZAn4S', 'Completed', '410', '170', '0'),
(107, '2021-10-20 11:23:37pm', '359992669107', 'VvzR0B', 'Completed', '665', '165', '0'),
(108, '2021-10-20 11:24:02pm', '738864242144', 'VvzR0B', 'Completed', '698', '198', '0'),
(109, '2021-10-20 11:25:06pm', '433592295827', 'VvzR0B', 'Completed', '731', '231', '0'),
(112, '2021-10-22 07:24:57am', '582138339615', 'uUVeDo', 'Completed', '374', '131', '0'),
(113, '2021-10-22 03:21:21pm', '186798956039', '6ZAn4S', 'Completed', '585', '170', '0'),
(114, '2021-10-23 12:00:13pm', '633520057280', 'uUVeDo', 'Completed', '389', '146', '0'),
(115, '2021-10-23 12:09:48pm', '767071533792', 'VvzR0B', 'Completed', '797', '297', '0'),
(116, '2021-10-26 09:56:20pm', '070417468818', 'VvzR0B', 'Completed', '863', '363', '0'),
(117, '2021-10-26 10:04:39pm', '428160432311', 'uUVeDo', 'Completed', '405', '162', '0'),
(118, '2021-10-26 10:05:07pm', '580031876257', 'uUVeDo', 'Completed', '425', '182', '0'),
(119, '2021-10-29 08:45:14am', '257755993923', 'VvzR0B', 'Completed', '896', '396', '0'),
(120, '2021-10-29 08:45:57am', '338434223899', 'VvzR0B', 'Completed', '929', '429', '0'),
(121, '2021-11-03 08:56:14pm', '278517689575', 'uUVeDo', 'Completed', '455', '212', '0'),
(122, '2021-11-03 08:56:31pm', '718083378546', 'uUVeDo', 'Completed', '425', '232', '0'),
(123, '2021-11-03 08:56:52pm', '643148375822', 'uUVeDo', 'Completed', '446', '253', '0'),
(124, '2021-11-04 08:39:56pm', '702355919099', 'uUVeDo', 'Completed', '466', '273', '0'),
(125, '2021-11-09 12:30:34am', '644002812481', 'uUVeDo', 'Completed', '496', '310', '0'),
(126, '2021-11-09 12:32:51am', '419562146349', 'VvzR0B', 'Pending', '1127', '627', '0'),
(127, '2021-11-09 12:32:59am', '919233703353', 'VvzR0B', 'Completed', '1127', '627', '0'),
(128, '2021-11-09 12:41:45am', '754628941542', 'uUVeDo', 'Completed', '695', '310', '0'),
(129, '2021-11-11 09:20:09pm', '306882736957', '5fpOBJ', 'Completed', '5500', '0', '0'),
(130, '2021-11-11 09:23:31pm', '678040292646', 'VvzR0B', 'Completed', '1140', '640', '0'),
(131, '2021-11-11 09:23:45pm', '082232894619', 'VvzR0B', 'Completed', '1173', '673', '0'),
(132, '2021-11-11 09:29:12pm', '047142643695', 'uUVeDo', 'Completed', '735', '350', '0'),
(133, '2021-11-12 04:19:36am', '081770656410', '5fpOBJ', 'Completed', '5984', '484', '0'),
(134, '2021-11-13 07:13:07am', '863325898298', '5fpOBJ', 'Completed', '6468', '968', '0'),
(135, '2021-11-13 07:15:03am', '020756660417', 'VvzR0B', 'Completed', '1206', '706', '0'),
(136, '2021-11-13 07:33:26am', '768120551927', 'uUVeDo', 'Completed', '765', '383', '0'),
(137, '2021-11-16 09:05:20am', '740586637252', '5fpOBJ', 'Completed', '6952', '1452', '0'),
(138, '2021-11-17 05:18:31pm', '085848562692', '5fpOBJ', 'Completed', '7436', '1936', '0'),
(139, '2021-11-17 05:45:51pm', '794457396978', '5fpOBJ', 'Completed', '6936', '1436', '0'),
(140, '2021-11-20 08:08:50am', '362685759238', 'uUVeDo', 'Completed', '815', '433', '0'),
(141, '2021-11-20 08:09:59am', '533953833473', 'uUVeDo', 'Completed', '860', '478', '0'),
(142, '2021-11-20 08:10:51am', '963079784587', 'uUVeDo', 'Completed', '905', '523', '0'),
(143, '2021-11-20 08:12:43am', '026490758459', 'uUVeDo', 'Completed', '955', '578', '0'),
(144, '2021-11-20 08:13:40am', '934613000558', 'uUVeDo', 'Completed', '1005', '628', '0'),
(145, '2021-11-20 08:14:14am', '072139721062', 'uUVeDo', 'Completed', '1005', '762', '0'),
(146, '2021-11-20 08:16:09am', '327730448343', '5fpOBJ', 'Completed', '7420', '1920', '0'),
(147, '2021-11-20 08:16:52am', '096856945128', '5fpOBJ', 'Completed', '7904', '2404', '0'),
(148, '2021-11-23 08:10:42pm', '441950024393', '5fpOBJ', 'Completed', '8394', '2894', '0'),
(149, '2021-11-23 08:11:12pm', '043262842434', '5fpOBJ', 'Completed', '8884', '3834', '0'),
(150, '2021-11-23 08:12:33pm', '241929229534', 'uUVeDo', 'Completed', '1035', '792', '0'),
(151, '2021-11-24 11:07:26pm', '510752166291', '5fpOBJ', 'Completed', '9404', '3834', '0'),
(152, '2021-11-24 11:27:40pm', '431826764508', 'uUVeDo', 'Completed', '1160', '792', '0'),
(153, '2021-11-24 11:28:04pm', '938979032270', 'uUVeDo', 'Completed', '1360', '792', '0'),
(154, '2021-11-25 08:57:52pm', '507521577160', '5fpOBJ', 'Completed', '10644', '5075', '0'),
(155, '2021-11-28 07:43:52pm', '306395864962', '5fpOBJ', 'Completed', '11884', '6315', '0'),
(156, '2021-11-29 05:15:03pm', '936850928692', 'uUVeDo', 'Completed', '1660', '1092', '0'),
(157, '2021-11-29 05:15:51pm', '513058569048', 'uUVeDo', 'Completed', '1770', '1202', '0'),
(158, '2021-12-03 01:37:27am', '613101156278', '5fpOBJ', 'Completed', '13124', '7555', '0'),
(159, '2021-12-03 01:38:30am', '337097752043', '5fpOBJ', 'Completed', '14364', '8795', '0'),
(161, '2021-12-03 01:41:04am', '344008647275', '5fpOBJ', 'Completed', '15604', '10035', '0'),
(162, '2021-12-03 01:41:55am', '765245255273', '5fpOBJ', 'Completed', '16884', '11275', '0'),
(163, '2021-12-08 10:11:17pm', '716233215552', 'uUVeDo', 'Completed', '2320', '1752', '0'),
(164, '2021-12-08 10:18:24pm', '229898964816', '5fpOBJ', 'Completed', '20604', '14995', '0'),
(165, '2021-12-14 12:07:20pm', '955954768880', 'uUVeDo', 'Completed', '2520', '1952', '0'),
(166, '2021-12-14 12:08:10pm', '423659551735', 'uUVeDo', 'Completed', '2890', '2072', '0'),
(167, '2021-12-18 04:53:25am', '116538408220', '5fpOBJ', 'Completed', '26804', '21195', '0'),
(168, '2021-12-18 04:56:34am', '537801922124', '5fpOBJ', 'Completed', '28044', '22435', '0'),
(169, '2021-12-22 04:34:46pm', '609422489303', 'uUVeDo', 'Completed', '3070', '2252', '0');

-- --------------------------------------------------------

--
-- Table structure for table `withrawals`
--

CREATE TABLE `withrawals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `account_id` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(200) NOT NULL,
  `transact_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withrawals`
--

INSERT INTO `withrawals` (`id`, `name`, `email`, `phone`, `bank`, `account`, `number`, `account_id`, `amount`, `type`, `date`, `transact_id`, `status`) VALUES
(55, 'Brett nelson', 'frankmurphy016@gmail.com', 'N/A', '', '', '', 'SdxFO6', '400', 'Deposit', '2020-09-25 01:04:07pm', '896006944379', 'sent'),
(110, 'Olivia Pardal Mata', 'oliviamata117@gmail.com', '919462908', 'Millenium- BCP', 'Olivia Mata', '53178214', '6ZAn4S', '585', 'Withdrawal', '2021-10-26 06:26:43pm', '247915638441', 'sent'),
(57, 'Mohamed menla hoseyin ', 'apo.hosen555@gmail.com', 'N/A', '', '', '', 'N4dboD', '100', 'Deposit', '2020-10-05 10:36:16am', '603778010487', 'sent'),
(58, 'Mohamed menla hoseyin ', 'apo.hosen555@gmail.com', 'N/A', '', '', '', 'N4dboD', '100', 'Deposit', '2020-10-05 10:36:34am', '638709749763', 'sent'),
(59, 'Mohamed menla hoseyin ', 'apo.hosen555@gmail.com', 'N/A', '', '', '', 'N4dboD', '500', 'Deposit', '2020-10-05 10:37:10am', '446990682040', 'sent'),
(60, 'Mohamed menla hoseyin ', 'apo.hosen555@gmail.com', 'N/A', '', '', '', 'N4dboD', '199961996', 'Deposit', '2020-10-05 10:38:28am', '110464688605', 'sent'),
(61, 'Anel', 'Anelmorley@gmail.com', 'N/A', '', '', '', 'OnzqSd', '0', 'Deposit', '2020-10-16 08:14:33pm', '145384742236', 'sent'),
(62, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', '', '', '', '7Y6ZJP', '48.00', 'Deposit', '2020-11-13 10:22:46pm', '749025796656', 'sent'),
(63, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', '', '', '', '7Y6ZJP', '48.00', 'Deposit', '2020-11-13 10:22:54pm', '865954141180', 'sent'),
(64, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', '', '', '', '7Y6ZJP', '10', 'Deposit', '2020-11-13 11:41:36pm', '206290763062', 'sent'),
(65, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', '', '', '', '7Y6ZJP', '10', 'Deposit', '2020-11-13 11:41:43pm', '521329262032', 'sent'),
(66, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', '', '', '', '7Y6ZJP', '7', 'Deposit', '2020-11-23 06:20:34am', '227891801692', 'sent'),
(70, 'BRUCE MADISON', 'brucemad1@yahoo.com', 'N/A', 'N/A', 'N/A', 'N/A', 'Jwwv18', '16000', 'Withdrawal', '2020-12-03 10:16:18am', '272667332117', 'sent'),
(71, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', '', '', '', '7Y6ZJP', '623', 'Deposit', '2021-01-11 04:40:44pm', '200841555446', 'sent'),
(112, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '100', 'Deposit', '2021-11-06 06:43:42pm', '593501230985', 'sent'),
(74, 'Mahmmud mostafa', 'mahmmudsabboba@gmail.com', 'N/A', '', '', '', 'vinQy4', '50', 'Deposit', '2021-02-27 08:29:48pm', '706631777254', 'sent'),
(95, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', '7Y6ZJP', '13350', 'Withdrawal', '2021-10-09 09:26:38pm', '708367271521', 'Approved'),
(77, 'Anil bridgelall', 'sallyboodhram1995@gmail.com', 'N/A', '', '', '', 'mZDXY7', '300', 'Deposit', '2021-03-27 02:27:53am', '773687054945', 'sent'),
(78, 'Anil bridgelall', 'sallyboodhram1995@gmail.com', 'N/A', '', '', '', 'mZDXY7', '300', 'Deposit', '2021-03-27 02:30:39am', '093878384375', 'sent'),
(79, 'Vincent aswani', 'vincentombato@gmail.com', 'N/A', '', '', '', 'cb0xKc', '500', 'Deposit', '2021-07-27 06:47:14pm', '696066052169', 'sent'),
(80, 'Martin St John', 'martin@snjhn.com', 'N/A', '', '', '', 'VvzR0B', '1000', 'Deposit', '2021-08-03 08:21:05pm', '225130484406', 'sent'),
(81, 'BRUCE MADISON', 'jeff.forex533@gmail.com', 'N/A', '', '', '', 'FLFU3f', '1000', 'Deposit', '2021-08-03 08:58:55pm', '951973957105', 'sent'),
(82, 'BRUCE MADISON', 'jeff.forex533@gmail.com', 'N/A', '', '', '', 'FLFU3f', '1000', 'Deposit', '2021-08-03 08:58:56pm', '260452498432', 'sent'),
(83, 'Brad herts', 'Bookergrassie021@gmail.com', 'N/A', '', '', '', 'm01EXx', '200', 'Deposit', '2021-08-13 06:00:23pm', '616578615305', 'sent'),
(84, 'Vincent aswani', 'vincentombato@gmail.com', 'N/A', '', '', '', 'cb0xKc', '500', 'Deposit', '2021-08-15 07:43:45pm', '532132970426', 'sent'),
(85, 'Vincent aswani', 'vincentombato@gmail.com', 'N/A', '', '', '', 'cb0xKc', '500', 'Deposit', '2021-08-15 07:44:10pm', '956753010402', 'sent'),
(86, 'Vincent aswani', 'vincentombato@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', 'cb0xKc', '5000', 'Withdrawal', '2021-08-15 07:46:54pm', '795981118462', 'sent'),
(88, 'Vincent aswani', 'vincentombato@gmail.com', 'N/A', '', '', '', 'cb0xKc', '1000', 'Deposit', '2021-08-27 05:01:43am', '620328166385', 'sent'),
(89, 'Olivia Pardal Mata', 'oliviamata117@gmail.com', '919462908', '', '', '', '6ZAn4S', '110', 'Deposit', '2021-09-28 02:39:51pm', '704700039564', 'sent'),
(90, 'Olivia Pardal Mata', 'oliviamata117@gmail.com', '919462908', '', '', '', '6ZAn4S', '110', 'Deposit', '2021-09-28 02:40:15pm', '915377687901', 'sent'),
(92, 'RAMSON', 'ramsonscott533@gmail.com', 'N/A', '', '', '', 'LGdzpU', '400', 'Deposit', '2021-09-28 03:02:41pm', '697859466357', 'sent'),
(93, 'BRUCE MADISON', 'jeff.forex533@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', 'FLFU3f', '3000', 'Withdrawal', '2021-10-08 08:33:04pm', '905325906297', 'Approved'),
(94, 'BRUCE MADISON', 'jeff.forex533@gmail.com', 'N/A', '', '', '', 'FLFU3f', '500', 'Deposit', '2021-10-08 08:54:27pm', '444544817984', 'Approved'),
(111, 'Olivia Pardal Mata', 'oliviamata117@gmail.com', '919462908', 'Millenium- BCP', 'Olivia Mata', '53178214', '6ZAn4S', '585', 'Withdrawal', '2021-10-26 06:27:02pm', '995217273006', 'sent'),
(98, 'Olivia Pardal Mata', 'oliviamata117@gmail.com', '919462908', '', '', '', '6ZAn4S', '120', 'Deposit', '2021-10-11 09:07:28am', '153144906321', 'sent'),
(99, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '230.00', 'Deposit', '2021-10-12 06:07:48pm', '460174245131', 'sent'),
(100, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '230.00', 'Deposit', '2021-10-12 06:08:12pm', '033096675070', 'sent'),
(101, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '230.00', 'Deposit', '2021-10-12 06:12:34pm', '104497892061', 'sent'),
(102, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '215', 'Deposit', '2021-10-13 02:09:44am', '295230003359', 'sent'),
(103, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '215', 'Deposit', '2021-10-13 02:10:06am', '315130075924', 'sent'),
(113, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '100', 'Deposit', '2021-11-06 06:44:28pm', '431070734829', 'sent'),
(114, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '200.00', 'Deposit', '2021-11-07 07:30:20am', '857624990056', 'sent'),
(115, 'Leighton Peters ', 'leightonpeters@hotmail.com', '2143347099', 'Chase Banke', 'IQ invest', '881644587', '5fpOBJ', '500.00', 'Withdrawal', '2021-11-16 08:26:16pm', '147857883062', 'Approved'),
(116, 'Leighton Peters ', 'leightonpeters@hotmail.com', '2143347099', 'Chase Banke', 'IQ invest', '881644587', '5fpOBJ', '1000.00', 'Withdrawal', '2021-11-26 03:00:49am', '130607606519', 'Approved'),
(117, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '150', 'Deposit', '2021-11-26 08:26:08pm', '650291449236', 'sent'),
(118, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '150', 'Deposit', '2021-11-26 08:31:38pm', '265405885141', 'sent'),
(119, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', '', '', '', 'uUVeDo', '150', 'Deposit', '2021-11-26 08:41:39pm', '128691396925', 'sent'),
(123, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', '7Y6ZJP', '13500', 'Withdrawal', '2021-12-03 06:25:11am', '715530267926', 'sent'),
(121, 'Leighton Peters ', 'leightonpeters@hotmail.com', '2143347099', 'Chase Banke', 'IQ invest', '881644587', '5fpOBJ', '2000.00', 'Withdrawal', '2021-12-01 07:34:53pm', '222188720470', 'sent'),
(122, 'Matthew R Chandler', 'matt2438@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', '7Y6ZJP', '13350', 'Withdrawal', '2021-12-03 12:37:56am', '908956369136', 'sent'),
(124, 'Leighton Peters ', 'leightonpeters@hotmail.com', '2143347099', 'Chase Banke', 'IQ invest', '881644587', '5fpOBJ', '5000.00', 'Withdrawal', '2021-12-07 03:16:18pm', '420057817330', 'sent'),
(125, 'Leighton Peters ', 'leightonpeters@hotmail.com', '2143347099', 'Chase Banke', 'IQ invest', '881644587', '5fpOBJ', '10000', 'Withdrawal', '2021-12-12 12:48:29am', '884261451427', 'sent'),
(126, 'ROBERT CRUMP', 'mikeyc6363@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', 'uUVeDo', '300', 'Withdrawal', '2021-12-15 11:45:57pm', '831304578942', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withrawals`
--
ALTER TABLE `withrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `withrawals`
--
ALTER TABLE `withrawals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
