-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 11, 2024 at 01:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sig_hypertensi_banjar`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `populasi` int(11) NOT NULL,
  `koordinat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`koordinat`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `warna`, `populasi`, `koordinat`) VALUES
(1, 'martapura-barat', 'blue', 0, '[ [-3.4143, 114.8009], [-3.4068, 114.7956], [-3.3717, 114.7419], [-3.3332, 114.7596], [-3.3194, 114.7674], [-3.3084, 114.7795], [-3.2991, 114.7839], [-3.2822, 114.7783], [-3.2541, 114.781], [-3.2541, 114.8374], [-3.2495, 114.8651], [-3.3108, 114.8578], [-3.3272, 114.8609], [-3.3324, 114.8564], [-3.3383, 114.8457], [-3.3433, 114.8428], [-3.3468, 114.8478], [-3.3587, 114.8578], [-3.3634, 114.8462], [-3.3664, 114.8434], [-3.3656, 114.8424], [-3.3804, 114.8402], [-3.3862, 114.8376], [-3.3898, 114.832], [-3.3883, 114.8225], [-3.3902, 114.819], [-3.4029, 114.8127], [-3.4143, 114.8024], [-3.4143, 114.8009] ]'),
(3, 'aranio', 'red', 30000000, '[ [-3.6343, 115.1221], [-3.6457, 115.1059], [-3.6643, 115.0899], [-3.6683, 115.0835], [-3.687, 115.0322], [-3.693, 115.0117], [-3.7028, 114.9989], [-3.7001, 114.9834], [-3.7123, 114.9772], [-3.7275, 114.9655], [-3.7307, 114.9568], [-3.7306, 114.9503], [-3.729, 114.9438], [-3.7226, 114.9368], [-3.7022, 114.9345], [-3.6879, 114.9353], [-3.6677, 114.9446], [-3.6389, 114.9682], [-3.6336, 114.9686], [-3.6194, 114.9924], [-3.6047, 115.0003], [-3.5929, 115.0041], [-3.5534, 115.002], [-3.5363, 115.0102], [-3.5103, 115.0012], [-3.4997, 115.005], [-3.4909, 115.0152], [-3.4827, 115.0371], [-3.4711, 115.0475], [-3.4426, 115.0634], [-3.4301, 115.0746], [-3.4244, 115.0862], [-3.4251, 115.0942], [-3.4281, 115.0999], [-3.4249, 115.1121], [-3.4166, 115.1241], [-3.4057, 115.1297], [-3.396, 115.1276], [-3.3863, 115.1214], [-3.383, 115.134], [-3.385, 115.1489], [-3.382, 115.1603], [-3.3837, 115.1763], [-3.3802, 115.187], [-3.3735, 115.1991], [-3.3632, 115.2105], [-3.3604, 115.2174], [-3.3628, 115.2261], [-3.3692, 115.2352], [-3.3725, 115.2443], [-3.3705, 115.2726], [-3.3664, 115.2819], [-3.3657, 115.2911], [-3.3805, 115.3241], [-3.3849, 115.3389], [-3.3837, 115.3552], [-3.3803, 115.3723], [-3.3754, 115.3869], [-3.3755, 115.3959], [-3.3774, 115.3956], [-3.3818, 115.3985], [-3.3924, 115.3981], [-3.4358, 115.3903], [-3.443, 115.3933], [-3.4455, 115.4024], [-3.4501, 115.4103], [-3.4527, 115.41], [-3.4581, 115.402], [-3.4633, 115.399], [-3.4772, 115.3803], [-3.4909, 115.3878], [-3.5017, 115.3908], [-3.5083, 115.3735], [-3.5097, 115.3607], [-3.5086, 115.3494], [-3.5097, 115.3426], [-3.5138, 115.3337], [-3.5202, 115.3256], [-3.5316, 115.3181], [-3.5497, 115.3114], [-3.5624, 115.2964], [-3.5723, 115.2735], [-3.5776, 115.2693], [-3.5811, 115.2716], [-3.5801, 115.2658], [-3.5897, 115.2597], [-3.5978, 115.2445], [-3.6036, 115.2371], [-3.6076, 115.2193], [-3.6078, 115.197], [-3.6102, 115.1884], [-3.6202, 115.1717], [-3.6338, 115.1535], [-3.635, 115.1496], [-3.6343, 115.1221] ]'),
(4, 'aluh-aluh', 'green', 5000, '[\n        [-3.5329, 114.6051],\n        [-3.5328, 114.5859],\n        [-3.5436, 114.5169],\n        [-3.5337, 114.518],\n        [-3.5335, 114.515],\n        [-3.5246, 114.5157],\n        [-3.5162, 114.5184],\n        [-3.5151, 114.5168],\n        [-3.5111, 114.5165],\n        [-3.5057, 114.5185],\n        [-3.503, 114.5176],\n        [-3.4792, 114.5204],\n        [-3.4645, 114.5164],\n        [-3.4586, 114.5191],\n        [-3.46, 114.5202],\n        [-3.4608, 114.5226],\n        [-3.4605, 114.5234],\n        [-3.4559, 114.5217],\n        [-3.4542, 114.524],\n        [-3.455, 114.5212],\n        [-3.4535, 114.5201],\n        [-3.4391, 114.5233],\n        [-3.4203, 114.5195],\n        [-3.4111, 114.5118],\n        [-3.4014, 114.5105],\n        [-3.3733, 114.5233],\n        [-3.3681, 114.5264],\n        [-3.3677, 114.5281],\n        [-3.3594, 114.5269],\n        [-3.3485, 114.538],\n        [-3.3475, 114.5344],\n        [-3.3528, 114.5237],\n        [-3.3417, 114.5338],\n        [-3.3519, 114.5732],\n        [-3.3628, 114.5995],\n        [-3.3982, 114.5893],\n        [-3.4072, 114.588],\n        [-3.4141, 114.5895],\n        [-3.4158, 114.5952],\n        [-3.4138, 114.6053],\n        [-3.417, 114.6104],\n        [-3.4306, 114.619],\n        [-3.4349, 114.6156],\n        [-3.4492, 114.6094],\n        [-3.4574, 114.6113],\n        [-3.4608, 114.6027],\n        [-3.4659, 114.6061],\n        [-3.4786, 114.6108],\n        [-3.4916, 114.6145],\n        [-3.5024, 114.6153],\n        [-3.5245, 114.6158],\n        [-3.5331, 114.6113],\n        [-3.5329, 114.6051]\n    ]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
