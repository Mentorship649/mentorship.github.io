-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 06, 2022 at 08:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentor`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `aid` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aid`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `bid` int(11) NOT NULL,
  `batchname` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`bid`, `batchname`) VALUES
(1, 2018),
(2, 2019),
(3, 2020),
(4, 2021),
(5, 2022),
(6, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bcode` int(10) NOT NULL,
  `bname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bcode`, `bname`) VALUES
(2, 'AUTOMOBILE ENGINEERING '),
(5, 'CHEMICAL ENGINEERING'),
(6, 'CIVIL ENGINEERING'),
(7, 'COMPUTER ENGINEERING'),
(9, 'ELECTRICAL ENGINEERING'),
(16, 'INFORMATION TECHNOLOGY'),
(19, 'MECHANICAL ENGINEERING'),
(51, 'CDDM '),
(55, 'FABRICATION TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `hodreg`
--

CREATE TABLE `hodreg` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `hid` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `conpwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hodreg`
--

INSERT INTO `hodreg` (`fname`, `lname`, `hid`, `branch`, `email`, `mobile`, `pwd`, `conpwd`) VALUES
('wefc', 'fsdvfvcdfds', 'fdvscd', 'INFORMATION TECHNOLOGY', 'xyz@gmail.com', 4555, '123', '123'),
('demo', 'demo', 'hod', 'I.T', 'xyz@gmail.com', 7864896327, '123', '123'),
('JAINIL', 'SHAH', 'JN', 'INFORMATION TECHNOLOGY', 'pqr@gmail.com', 5241789632, 'HOD*BPTI', 'HOD*BPTI'),
('priyraj', 'parmar', 'nothing', 'AUTO MOBILE', 'upadhyay@gmail.com', 5874123658, '125', '125');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_details`
--

CREATE TABLE `meeting_details` (
  `start_url` varchar(500) NOT NULL,
  `join_url` varchar(500) NOT NULL,
  `meeting_id` varchar(100) NOT NULL,
  `passcode` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meeting_details`
--

INSERT INTO `meeting_details` (`start_url`, `join_url`, `meeting_id`, `passcode`, `topic`, `stime`) VALUES
('https://us05web.zoom.us/s/87694865578?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg3Njk0ODY1NTc4IiwiZXhwIjoxNjQ4MzIxNzQ0LCJpYXQiOjE2NDgzMTQ1NDQsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.s7NsHfOheIhanO0v2wqhyQHdh7KeePVoiTFsRBAuMt4', 'https://us05web.zoom.us/j/87694865578?pwd=K29CUURpekdXRXhNb1owTVhFSVI4Zz09', '87694865578', 'tni0yv', 'shubhamTest5', '27/03/2022 22:38:00'),
('https://us05web.zoom.us/s/86451690297?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg2NDUxNjkwMjk3IiwiZXhwIjoxNjQ4MzIyMDk3LCJpYXQiOjE2NDgzMTQ4OTcsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.czmNrMUTAhqNJmVB2cN7re1mm9ZVwEH2qeCH7jfmx00', 'https://us05web.zoom.us/j/86451690297?pwd=SDhGa0VtcUQ4M3lkT3VnZ3FQeWVJdz09', '86451690297', '05LmTR', 'shubhamTest10', '30/03/2022 22:44:00'),
('https://us05web.zoom.us/s/86715649796?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg2NzE1NjQ5Nzk2IiwiZXhwIjoxNjQ4NDA0NDYwLCJpYXQiOjE2NDgzOTcyNjAsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.ycCw95pOiYc2ePRKrZaC83DCsUGuAp22w0anEBwMoGA', 'https://us05web.zoom.us/j/86715649796?pwd=TjdnNkV2U3pKeklMbWZDNDd1RW94Zz09', '86715649796', 'be7tSc', 'topic', '29/03/2022 21:37:00'),
('https://us05web.zoom.us/s/83880695142?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6IjgzODgwNjk1MTQyIiwiZXhwIjoxNjQ4NDA1MjU1LCJpYXQiOjE2NDgzOTgwNTUsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.4UkLiq8BUro98IjhKt2ghP5sk59wo8nmtXpc_2uFan4', 'https://us05web.zoom.us/j/83880695142?pwd=RzJVWlpwcjlSUHUwWEhLQjNUZjNUUT09', '83880695142', 'jVC7ZJ', 'topic009', '29/03/2022 21:50:00'),
('https://us05web.zoom.us/s/89809719839?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg5ODA5NzE5ODM5IiwiZXhwIjoxNjQ4NDA3NzQ0LCJpYXQiOjE2NDg0MDA1NDQsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.nzRj_ruEWfywxBP8vE6LHmtfdd7ys8l-aSZwrTXDJ5o', 'https://us05web.zoom.us/j/89809719839?pwd=emtHUVA4bVhORmpGZFhNR2MyUDJOdz09', '89809719839', 'p9TY3b', 'Mentorship', '29/03/2022 22:28:00'),
('https://us05web.zoom.us/s/82423681464?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6IjgyNDIzNjgxNDY0IiwiZXhwIjoxNjUxNjk3NzY1LCJpYXQiOjE2NTE2OTA1NjUsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.ymhTlAY3B0-cnER-tYu0_dhYTMP4Pm2Hc9_LT0Kz05c', 'https://us05web.zoom.us/j/82423681464?pwd=dkRFOUFSMUNsbkdNeGJ5U3ZhcXVUQT09', '82423681464', '2bNtuy', 'liveTest', '06/05/2022 00:00:00'),
('https://us05web.zoom.us/s/83881827845?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6IjgzODgxODI3ODQ1IiwiZXhwIjoxNjUxNjk3ODg3LCJpYXQiOjE2NTE2OTA2ODcsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.AblpuMbbUJhNC3iR8sCRmUrEXXuoIQ1gNZpnJd4vPmk', 'https://us05web.zoom.us/j/83881827845?pwd=S0VhcFhvcnBYSXpHU3M2MnV0UzREQT09', '83881827845', 'An0aLz', 'newtestlocal', '05/05/2022 03:30:00'),
('https://us05web.zoom.us/s/86131680410?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg2MTMxNjgwNDEwIiwiZXhwIjoxNjUxODUxMTU1LCJpYXQiOjE2NTE4NDM5NTUsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.gKFc3CdeBLsiP_xH-SJASCT9TnNlP2AphmyvNbIK7Tk', 'https://us05web.zoom.us/j/86131680410?pwd=T0hVbmdVKy9INUxaRDczVWk4K1p1dz09', '86131680410', 'm6KEBm', 'newone', '07/05/2022 00:00:00'),
('https://us05web.zoom.us/s/83232144210?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6IjgzMjMyMTQ0MjEwIiwiZXhwIjoxNjUxODUxOTc5LCJpYXQiOjE2NTE4NDQ3NzksImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.KBaFxgUfDnJ3qA7ZyKXvLB9y7m5mvMnRdqt7EDYlOM0', 'https://us05web.zoom.us/j/83232144210?pwd=VjNSUFR6MXI4TTdXUjVjck9obC9ZUT09', '83232144210', 'w3UPrL', 'shubhamTest87', '06/05/2022 20:16:00'),
('https://us05web.zoom.us/s/85801785331?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6Ijg1ODAxNzg1MzMxIiwiZXhwIjoxNjUxODUyMjY5LCJpYXQiOjE2NTE4NDUwNjksImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.YJgqOewO8GiLyJh5x8nKyWNQNKbOMs8sQ8Gj-kTpq3M', 'https://us05web.zoom.us/j/85801785331?pwd=WGxDV2FWeFdFa3RMSTBDb2htRDhFZz09', '85801785331', 'naGU0T', 'jns', '06/05/2022 20:20:00'),
('https://us05web.zoom.us/s/81783373079?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6IjgxNzgzMzczMDc5IiwiZXhwIjoxNjUxODUyNDIxLCJpYXQiOjE2NTE4NDUyMjEsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.9wU2k9OXoWcBgamJZwPjHfpTI0AYDY19ioiOa3vdDLM', 'https://us05web.zoom.us/j/81783373079?pwd=eVBvdUpsRGFtc05iZDBNeFFOYk84Zz09', '81783373079', '8yQC1f', 'dfvfdv dfcx', '06/05/2022 19:24:00'),
('https://us05web.zoom.us/s/81284484492?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJhdWQiOiJjbGllbnRzbSIsInVpZCI6IjJpbTJnVklhUk0tdUdwWk5CWnRtQnciLCJpc3MiOiJ3ZWIiLCJzayI6IjAiLCJzdHkiOjEwMCwid2NkIjoidXMwNSIsImNsdCI6MCwibW51bSI6IjgxMjg0NDg0NDkyIiwiZXhwIjoxNjUxODUyNDIyLCJpYXQiOjE2NTE4NDUyMjIsImFpZCI6ImxaVU13aWJ0UkNtbUxaVjJwMzVoUGciLCJjaWQiOiIifQ.xkBYg_R5MoVmyk0kb__X7H_Y8XPEd5_iQKQh0yELrNM', 'https://us05web.zoom.us/j/81284484492?pwd=bThUcjNiMFBBT0V3VDFNK3BidXdsUT09', '81284484492', '9h6pRD', 'dfvfdv dfcx', '06/05/2022 19:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `mentorreg`
--

CREATE TABLE `mentorreg` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mid` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `conpwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentorreg`
--

INSERT INTO `mentorreg` (`fname`, `lname`, `mid`, `branch`, `mobile`, `email`, `pwd`, `conpwd`) VALUES
('JIGNA', 'GANDHI', '101', 'INFORMATION TECHNOLOGY', 8574125263, 'jigna@bpti.com', 'jg', 'jg'),
('HARDIK', 'JAGAD', '102', 'INFORMATION TECHNOLOGY', 2145859652, 'hardik@bpti.com', 'hj', 'hj'),
('AJAYPALSINH', 'GOHIL', '103', 'INFORMATION TECHNOLOGY', 8574962541, 'ajaypalsinh@bpti.com', 'ag', 'ag');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semid` int(5) NOT NULL,
  `semname` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semid`, `semname`) VALUES
(1, 1),
(2, 2),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentmeetingdetails`
--

CREATE TABLE `studentmeetingdetails` (
  `meetingid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `enrollment` varchar(20) NOT NULL,
  `datebirth` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `admission` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `midsem` varchar(10) NOT NULL,
  `spi` varchar(10) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `attendance` varchar(10) NOT NULL,
  `behaviour` varchar(40) NOT NULL,
  `problem` varchar(1000) NOT NULL,
  `ms` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmeetingdetails`
--

INSERT INTO `studentmeetingdetails` (`meetingid`, `fname`, `lname`, `enrollment`, `datebirth`, `gender`, `branch`, `semester`, `batch`, `admission`, `mobile`, `email`, `midsem`, `spi`, `cgpa`, `attendance`, `behaviour`, `problem`, `ms`) VALUES
(3, 'UPADHYAY', 'shubham', '196490316147', '06/04/2010', 'Male', 'INFORMATION TECHNOLOGY', '6', '2019', '2019', '8574125263', 'upadhyay@gmail.com', '25', '7.78', '8', 'above70%', 'Average, ', 'xjasjakcnkjnjsdn  cnsncklsmcmsdkmkc', '2022-03-25T11:04'),
(4, 'SHAH ', 'JAINIL', '196490316131', '21/01/2004', 'Male', 'INFORMATION TECHNOLOGY', '6', '2019', '2019', '8574125263', 'xyz@gmail.com', '22', '7', '8', 'above70%', 'Average, ', 'WQNDSJKXNAIOJIAJWDJISMCIKLS', '2022-03-26T11:55'),
(8, 'xy', 'xy', '787778777665', '23/5/2004', 'Male', 'COMPUTER ENGINEERING', '7', '2019', '2019', '2145859652', 'xyz@gmail.com', '25', '7', '7.69', 'above70%', 'Average, ', 'good', '2022-03-29T14:33'),
(9, 'yz', 'yz', '123521547855', '06/02/2003', 'Male', 'ELECTRICAL ENGINEERING', '7', '2021', '2019', '5149523632', 'pqr@gmail.com', '50', '7.78', '8', 'below70%', 'Bad', 'jnbjhbm,', '2022-03-31T14:48'),
(10, 'SHAH ', 'test2', '1238876775757', '21/01/2004', 'Female', 'ELECTRICAL ENGINEERING', '4', '2019', '2019', '8574125263', 'pqr@gmail.com', '22', '7.78', '8', 'above70%', 'Good', 'fbfgb', '2022-03-29T14:54');

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE `studentreg` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `enrollment` bigint(15) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `datebirth` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `admission` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `conpwd` varchar(30) NOT NULL,
  `mentor` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`fname`, `lname`, `enrollment`, `sem`, `datebirth`, `gender`, `branch`, `batch`, `admission`, `mobile`, `email`, `pwd`, `conpwd`, `mentor`) VALUES
('SHAH ', 'JAINIL', 196490316131, '4', '21/01/2004', 'Male', 'INFORMATION TECHNOLOGY', '2022', '2019', 1425254950, 'jainil@gmail.com', 'sj', 'sj', '0'),
('UPADHYAY', 'SHUBHAM', 196490316147, '7', '06/02/2003', 'Male', 'COMPUTER ENGINEERING', '2022', '2019', 9898989898, 'shubham@gmail.com', 'us', 'us', '0'),
('VALA', 'CHIRAG', 196490316152, '6', '25/04/2006', 'Male', 'INFORMATION TECHNOLOGY', '2019', '2019', 8382732363, 'chirag@gmail.com', 'vc', 'vc', 'HARDIK'),
('deep', 'kanojiya', 256321458963, '6', '02/03/01', 'Male', 'INFORMATION TECHNOLOGY', '2018', '2018', 5214789652, 'pqr@gmail.com', '456', '456', '0'),
('priyraj', 'parmar', 7485963215254, '7', '02/5/6003', 'Male', 'INFORMATION TECHNOLOGY', '2018', '2018', 8574526321, 'no@gmail.com', '789', '789', 'HARDIK');

-- --------------------------------------------------------

--
-- Table structure for table `yearofadmission`
--

CREATE TABLE `yearofadmission` (
  `yid` int(11) NOT NULL,
  `yname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yearofadmission`
--

INSERT INTO `yearofadmission` (`yid`, `yname`) VALUES
(1, '2018'),
(2, '2019'),
(3, '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bcode`);

--
-- Indexes for table `hodreg`
--
ALTER TABLE `hodreg`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `mentorreg`
--
ALTER TABLE `mentorreg`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semid`);

--
-- Indexes for table `studentmeetingdetails`
--
ALTER TABLE `studentmeetingdetails`
  ADD PRIMARY KEY (`meetingid`);

--
-- Indexes for table `studentreg`
--
ALTER TABLE `studentreg`
  ADD PRIMARY KEY (`enrollment`);

--
-- Indexes for table `yearofadmission`
--
ALTER TABLE `yearofadmission`
  ADD PRIMARY KEY (`yid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `studentmeetingdetails`
--
ALTER TABLE `studentmeetingdetails`
  MODIFY `meetingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `yearofadmission`
--
ALTER TABLE `yearofadmission`
  MODIFY `yid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
