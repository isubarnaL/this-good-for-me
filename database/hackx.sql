-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackx`
--
-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` int(20) DEFAULT NULL COMMENT '1 = admin, 2 = user ',
  `p_image` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id` , `user_name`, `email`, `password`, `role`, `p_image`) VALUES
('1','subarna', 'hello@gmail.com', 'Hello123',  1, 'SAM_2677.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `food_tables`
--

CREATE TABLE `food_tables` (
`count` int(11) NOT NULL,
`food_id` int(11) NOT NULL,
  `food_name` varchar(255) DEFAULT NULL,
  `food_nutri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_tables`
--

 INSERT INTO `food_tables` (`count` ,`food_id` , `food_name`,  `food_nutri`) VALUES
 ('1','1','Apple','VTC' ),
 ('2','1','Apple','FR' ),
  ('3','5','Banana','VTC' ),
   ('4','5','Banana','FR' ),
   ('5','9','Meat','PT'),
   ('6','11','Milk','PT');

-- --------------------------------------------------------

--
-- Table structure for table `med_tables`
--

CREATE TABLE `med_tables` (
`med_id` int(11) NOT NULL,
  `med_name` varchar(255) DEFAULT NULL,
  `med_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_tables`
--

INSERT INTO `med_tables` (`med_id` , `med_name`,  `med_type`) VALUES
('1','Aspirin','PK' ),
('5','ibuprofen','PK' ),
('9','Diazepam','ST' )
;
-- --------------------------------------------------------

--
-- Table structure for table `f_tables`
--

CREATE TABLE `f_tables` (
`food_id` int(11) NOT NULL,
  `food_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_tables`
--

INSERT INTO `f_tables` (`food_id` , `food_name`) VALUES
('1','Apple' ),
('5','banana' ),
('9','Meat' ),
('11','Milk' )
;

-- --------------------------------------------------------

--
-- Table structure for table `nutri_tables`
--

CREATE TABLE `nutri_tables` (
`nutri_id` varchar(11) NOT NULL,
  `nutri_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nutri_tables`
--

INSERT INTO `nutri_tables` (`nutri_id` , `nutri_name`) VALUES
('PT','Protein'),
('CB','Carbohydrates'),
('VTA','Vitamin A'),
('VTB','Vitamin B'),
('VTC','Vitamin C'),
('MR','Minerals'),
('FB','Fiber'),
('FT','Fat');


-- --------------------------------------------------------

--
-- Table structure for table `medtype_tables`
--

CREATE TABLE `medtype_tables` (
`medtype_id` varchar(11) NOT NULL,
  `medtype_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medtype_tables`
--

INSERT INTO `medtype_tables` (`medtype_id` , `medtype_name`) VALUES
('PK','Painkiller'),
('ST','Sedative');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `med_tables`
--
ALTER TABLE `med_tables`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `f_tables`
--
ALTER TABLE `f_tables`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `nutri_tables`
--
ALTER TABLE `nutri_tables`
  ADD PRIMARY KEY (`nutri_id`);

--
-- Indexes for table `food_tables`
--
ALTER TABLE `food_tables`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `medtype_tables`
--
ALTER TABLE `medtype_tables`
  ADD PRIMARY KEY (`medtype_id`);

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `food_tables`
--
ALTER TABLE `food_tables`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `f_tables`
--
ALTER TABLE `f_tables`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


--
-- Indexes for table `med_tables`
--
ALTER TABLE `med_tables`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


