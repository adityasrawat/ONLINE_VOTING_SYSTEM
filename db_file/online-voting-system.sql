
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `online-voting-system`
--
-- --------------------------------------------------------
--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `password`, `address`, `photo`, `status`, `votes`, `role`) VALUES
(4, 'Shahebaz Khan Shabbir Khan Pathan', 9511846837, 123, 'Andheri East, Near Govt. College, Mumbai', 'boy.png', 1, 0, 1),
(5, 'Soehl Khan Salim Khan Pathan', 9511846838, 123, 'Andheri East, Near Govt. College, Pune', 'Animal-Heroes-cartoon-icon-19.png', 1, 1, 2),
(6, 'Shoaib Khan Shabbir Khan Pathan', 9511846839, 123, 'Andheri East, Near Govt. College, Goa', 'plant.png', 1, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;







