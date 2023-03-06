-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 05:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `name`, `email`, `messages`) VALUES
(2, 'auzan', 'auzanzaky63@gmail.com', 'bagus !');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(14, ' LEAF PRINT JACKET', 'Jacket featuring a high collar, long sleeves with ribbed trims, front welt pockets, inside pocket detail and a zip-up front.', 'Men', 999990, 18, '2.png'),
(15, 'TECHNICAL PARKA WITH POUCH POCKET', 'Technical parka with a high collar and long sleeves with elastic cuffs. Front patch pocket with flap and a contrast slogan print detail. Hem can be adjusted at the sides.', 'Men', 949000, 75, '3.png'),
(16, 'BASIC HOODIE', 'Loose-fitting hoodie with an adjustable hood and long sleeves. Featuring a front pouch pocket and ribbed trims.', 'Men', 549000, 49, '21.png'),
(17, 'TEXTURED CHECK OVERSHIRT', 'Relaxed fit collared overshirt featuring long sleeves with buttoned cuffs, a chest patch pocket and a button-up front.', 'Men', 999990, 55, 'shirts2.png'),
(18, 'FADED-EFFECT ASYMMETRIC SHIRT', 'Oversize shirt with a stand-up collar, long sleeves and buttoned cuffs. Featuring an asymmetric hem with side vents and asymmetric button at the front.', 'Men', 699990, 65, 'shirts1.png'),
(19, 'TEXTURED OVERSHIRT', 'Relaxed fit collared overshirt with long sleeves and snap-button cuffs. Featuring a faded effect, chest patch pockets with flaps and button fastening on the front.', 'Men', 699990, 35, 'shirts3.png'),
(20, 'SCOOP NECK BLAZER', 'Scoop neck blazer with long sleeves. Front pockets with flaps. Double-breasted button fastening at the front with metal buttons.', 'Women', 1199990, 25, 'blazers2.png'),
(21, 'TWEED BLAZER', 'Round neck blazer with long sleeves and pronounced shoulders. Featuring front pockets and frayed trims.', 'Women', 1199990, 25, 'blazers3.png'),
(22, 'V-NECK BLAZER', 'V-neck blazer featuring long sleeves with pronounced shoulders, front flap pockets, a back vent and front fastening with metal hook.', 'Women', 999990, 45, 'blazers1.png'),
(23, 'DRESS WITH GATHERED WAIST', 'Round neck midi dress with short elasticated sleeves. Featuring a gathered waist and invisible zip fastening at the back.', 'Women', 999990, 39, 'DRESS_WITH_GATHERED_WAIST_1080_x_1080.png'),
(24, 'BELTED SHIRT DRESS', 'Collared dress featuring long sleeves with elastic trim. Front patch pockets. Button-up fastening on the front and a contrast belt.', 'Women', 949000, 63, 'BELTED_SHIRT_DRESS_1080_x_1080.png'),
(25, 'KNIT MIDI DRESS', 'Midi sleeveless knit dress with a high neck.', 'Women', 479000, 46, 'KNIT_MIDI_DRESS_1080_x_1080.png'),
(26, 'SHORT RIBBED BEANIE', 'Ribbed knit beanie made from a spun cotton fabric. Turn-up brim.', 'Accessories', 229900, 76, 'SHORT_RIBBED_BEANIE_1080_X_1080.png'),
(28, 'TEXTURED SOFT CAP', ' Peak cap with adjustable fastening.', 'Accessories', 229900, 53, 'TEXTURED_SOFT_CAP_1080_x_1080.png'),
(29, 'WIDE-BRIMMED WOOL HAT', ' Wide-brimmed wool hat with matching band detail.', 'Accessories', 599900, 32, 'WIDE-BRIMMED_WOOL_HAT_1080_x_1080.png'),
(30, 'DIAGONAL PRINT JACQUARD SOCKS', 'Contrast diagonal-stripe jacquard knit socks with ribbed cuffs.', 'Accessories', 119000, 89, 'DIAGONAL_PRINT_JACQUARD_SOCKS_1080_x_1080.png'),
(31, 'POLKA DOT JACQUARD SOCKS', 'Jacquard knit socks with contrast polka dots and ribbed cuffs.', 'Accessories', 119990, 76, 'POLKA_DOT_JACQUARD_SOCKS_1080_x_1080.png'),
(32, 'TEXTURED WOOL BLEND SOCKS', 'Socks in a spun wool blend with ribbed elastic cuffs.', 'Accessories', 139900, 56, 'TEXTURED_WOOL_BLEND_SOCKS_1080_x_1080.png'),
(33, 'FABRIC HIGH-TOP HIKING SNEAKERS', 'Sandy brown high-top sneakers with lace-up fastening. The entire upper is fabric except the tongue and an inside piece, which are made of synthetic rubber. Facing with nine pairs of eyelets and metal appliqués. Hiking look with sock-style design at the ank', 'Men', 1099900, 45, '1.png'),
(34, 'SMART BACKPACK', 'Smart backpack with an embossed grainy texture on the outer material. Three zip pockets. The inside of the main compartment has a pocket for electronic devices and laptops of up to 13 inches. Medium-sized pocket on the back. Two adjustable shoulder straps ', 'Men', 1099900, 78, '22.png'),
(35, 'SOCK-STYLE SNEAKERS WITH CHUNKY SOLE', 'Black laceless sneakers made of technical fabric. The upper is made of a single piece. Sock-style design with medium leg. Thick maxi air cushion sole.', 'Men', 1399000, 54, '31.png'),
(36, 'LEATHER COWBOY-HEEL ANKLE BOOTS WITH SQUARE TOE', 'Black leather cowboy-heel ankle boots. Leather upper. Stretch leg. Square toe. Inner zip fastening.', 'Women', 2199000, 35, 'LEATHER_COWBOY-HEEL_ANKLE_BOOTS_WITH_SQUARE_1080_x_1080.png'),
(37, 'QUILTED NYLON BACKPACK', 'Maxi crossbody bag available in different colours: black and silver. Quilted exterior and front flap. Chain shoulder strap in combined materials. Lined interior with pocket. Metal clasp fastening.', 'Women', 699900, 51, 'QUILTED_NYLON_BACKPACK_1080_x_1080.png'),
(38, 'SHINY TECHNICAL FABRIC CROSSBODY BELT BAG', 'Black crossbody belt bag in technical fabric with a shiny finish. Front pocket with lined interior and zip closure. Transparent vinyl back pocket for ID card. Adjustable belt in combined materials with metal clasp closure. Lined interior with zip pocket. Z', 'Women', 549900, 56, 'SHINY_TECHNICAL_FABRIC_CROSSBODY_BELT_1080_x_1080.png'),
(39, 'MINIMALIST WATCH WITH EMBOSSED BROWN LEATHER STRAP', 'Minimalist analogue watch with a round case in gold and mineral crystal. The hours are marked with lines on a white face. Brown leather strap with animal embossing. Fastening with buckle and double loop. Water resistant up to 50 m / 19.6″etres (5 ATM); can', 'Accessories', 1699900, 23, 'watches1.png'),
(40, 'MINIMALIST WATCH WITH ROUND CASE AND METAL', 'Minimalist analogue watch with a round black case in silver and mineral crystal. The hours are marked with lines on a black face. It has a smaller face indicating the day of the week in numbers and letters. Black metal strap. Automatic safety clasp. Links ', 'Accessories', 1399900, 21, 'watches2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(28, 'dwd', 'wdw', '2020-02-12 22:22:39', '2020-02-12 22:22:39'),
(29, 'Auzan Zaky', 'bogor', '2020-02-13 10:03:55', '2020-02-13 10:03:55'),
(30, 'Auzan Zaky', 'Bogor', '2020-02-13 10:12:32', '2020-02-13 10:12:32'),
(31, 'azzahrah salsabilla', 'pasir kuda', '2020-03-09 15:00:22', '2020-03-09 15:00:22'),
(32, 'azzahrah salsabilla', 'Jl. Taman Sari Persada, RT.02/RW.15', '2020-04-24 09:41:33', '2020-04-24 09:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(16, 29, 14, ' LEAF PRINT JACKET', 1, 999990, ''),
(17, 30, 16, 'BASIC HOODIE', 1, 549000, ''),
(18, 31, 21, 'TWEED BLAZER', 1, 1199990, ''),
(19, 31, 14, ' LEAF PRINT JACKET', 1, 999990, ''),
(20, 32, 26, 'SHORT RIBBED BEANIE', 1, 229900, ''),
(21, 32, 21, 'TWEED BLAZER', 1, 1199990, ''),
(22, 32, 38, 'SHINY TECHNICAL FABRIC CROSSBODY BELT BAG', 1, 549900, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` BEFORE INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Vania', 'vania@gmail.com', 'wanda.jpg', '$2y$10$9A2OEkg.c8/UNy./ppa8DOb1f0sEXN9/55iwtnPnm9faEeqH7yKni', 1, 1, 1581220082),
(3, 'user', 'user@gmail.com', 'default.jpg', '$2y$10$VgA.gWebpjzjtsKc7kcod.XGICpdpU8F7A2DGEJZhDWGxinpqVfCi', 2, 1, 1581225602),
(4, 'test', 'test@gmail.com', 'default.jpg', '$2y$10$ZbECreruS11uzyjgELv98.4CnrZYeoo3PKRInXk9UFpkPNXcYkHAG', 2, 1, 1581302789),
(5, 'rue', 'rue@gmail.com', 'default.jpg', '$2y$10$g3MUmBfFivfmzB1TvWLBHeAA8irxeYf.bvgezqSWjK4qTO6Hh8n3K', 2, 0, 1581316406),
(6, 'Auzan', 'auzanzaky63@gmail.com', 'default.jpg', '$2y$10$eScvpUBSvt6GXwPt4qrwg.pT.3PzeXVjfItYS.jhNW94sroiv2SUW', 2, 1, 1581347500),
(7, 'azzahrah soen', 'ijahsoen@gmail.com', 'default.jpg', '$2y$10$aWFcMUvbvHzg9Dm1DHQu2ut.AZH4teRg/vZmN8bFFhasaFaaQ0qkW', 2, 1, 1583740670);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 2),
(8, 1, 3),
(10, 1, 7),
(11, 1, 9),
(15, 1, 11),
(16, 2, 12),
(17, 1, 12),
(18, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(10, 'Item Management'),
(11, 'Messages'),
(12, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-home', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(5, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(6, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tag', 1),
(16, 10, 'Item List', 'admin_cart/data_barang', 'fas fa-fw fa-database', 1),
(17, 10, 'Invoice', 'admin_cart/invoice', 'fas fa-fw fa-file-invoice', 1),
(18, 11, 'User Feedback', 'contact/list', 'fas fa-fw fa-sticky-note', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
