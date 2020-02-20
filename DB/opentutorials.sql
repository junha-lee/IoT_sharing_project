-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 20-02-17 18:22
-- 서버 버전: 8.0.18
-- PHP 버전: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `opentutorials`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `api_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PW` int(10) NOT NULL,
  `URL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `device`
--

INSERT INTO `device` (`id`, `api_name`, `PW`, `URL`, `information`, `image_path`) VALUES
(3, 'first api', 12341234, 'http://114.71.220.66:8000/IoT', 'IoT devices temperature', 'bitnami.png'),
(4, 'second api', 12354555, 'http://114.71.220.66:8000/', 'hello!!', 'wampstack.png');

-- --------------------------------------------------------

--
-- 테이블 구조 `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_Name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `userinfo`
--

INSERT INTO `userinfo` (`id`, `First_Name`, `Last_Name`, `Email`, `password`, `Phone_Number`, `subject`) VALUES
(3, 'Junha', 'Lee', 'junha4304@gmail.com', 'sk430499', '01079374304', 'machine learning'),
(4, 'ck', 'lee', 'ccke98@naver.com', 'admin1', '01038334897', 'Military science'),
(5, 'erase', 'choi', 'junha_lee@naver.com', 'sk4304', '01087984850', 'Platform');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
