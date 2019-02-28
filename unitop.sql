-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 01:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cats`
--

CREATE TABLE `tbl_cats` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_cats`
--

INSERT INTO `tbl_cats` (`cat_id`, `cat_title`) VALUES
(1, 'Laptop'),
(2, 'Äiá»‡n thoáº¡i'),
(3, 'MÃ¡y tÃ­nh báº£ng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `page_content` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`page_id`, `page_title`, `created_at`, `page_content`) VALUES
(1, 'Gioi thieu', '2019-02-25 19:34:57', '<p><strong>Gioi thieu</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>'),
(2, 'Lien he', '2019-02-25 19:54:11', '<p><strong>Lien he</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_desc` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_thumb` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_title`, `price`, `code`, `product_desc`, `product_thumb`, `product_content`, `cat_id`) VALUES
(1, 'Samsung Galaxy A8 Star', 8990000, 'N#1', 'CÆ¡ há»™i trÃºng 100 bao lÃ¬ xÃ¬ trá»‹ giÃ¡ 2 tá»· Ä‘á»“ng', 'https://cdn.tgdd.vn/Products/Images/42/166247/samsung-galaxy-a8-star-black-400x400.jpg', '<p>Thiáº¿t káº¿ mang váº» Ä‘áº¹p hiá»‡n Ä‘áº¡i\r\nÄiá»‡n thoáº¡i Samsung má»›i sá»Ÿ há»¯u thiáº¿t káº¿ váº«n khÃ¡ quen thuá»™c vá»›i thÃ¢n hÃ¬nh cÃ³ pháº§n nam tÃ­nh, máº¡nh máº½ vÃ  hiá»‡n Ä‘áº¡i, Ä‘an xen má»™t chÃºt má»m máº¡i Ä‘áº¿n tá»« cÃ¡c gÃ³c cáº¡nh vÃ  máº·t lÆ°ng cá»§a mÃ¡y.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/42/166247/samsung-galaxy-a8-star-review-15.jpg\'></p>', 2),
(2, 'iPhone Xs Max 256GB', 37990000, 'N#2', 'Giáº£m 2 triá»‡u khi thanh toÃ¡n qua tháº» Mastercard vÃ  <b>1 K.mÃ£i</b> khÃ¡c', 'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-white-400x400.jpg', '<p>Sau 1 nÄƒm mong chá», chiáº¿c smartphone cao cáº¥p nháº¥t cá»§a Apple Ä‘Ã£ chÃ­nh thá»©c ra máº¯t mang tÃªn iPhone Xs Max. MÃ¡y cÃ¡c trang bá»‹ cÃ¡c tÃ­nh nÄƒng cao cáº¥p nháº¥t tá»« chip A12 Bionic, dÃ n loa Ä‘a chiá»u cho tá»›i camera kÃ©p tÃ­ch há»£p trÃ­ tuá»‡ nhÃ¢n táº¡o.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-gold-5.jpg\'></p>', 2),
(3, 'OPPO F9 6GB', 8490000, 'N#3', 'Giáº£m ngay 500.000Ä‘', 'https://cdn.tgdd.vn/Products/Images/42/186998/oppo-f9-6gb-red-400x400.jpg', '<p>LÃ  chiáº¿c Ä‘iá»‡n thoáº¡i OPPO Ä‘Æ°á»£c nÃ¢ng cáº¥p cáº¥u hÃ¬nh, cá»¥ thá»ƒ lÃ  RAM lÃªn tá»›i 6 GB, OPPO F9 6GB cÃ²n trang bá»‹ nhiá»u tÃ­nh nÄƒng Ä‘á»™t phÃ¡ nhÆ° sá»Ÿ há»¯u cÃ´ng nghá»‡ sáº¡c VOOC má»›i nháº¥t, máº·t lÆ°ng chuyá»ƒn mÃ u Ä‘á»™c Ä‘Ã¡o, mÃ n hÃ¬nh trÃ n viá»n giá»t nÆ°á»›c vÃ  camera chá»¥p chÃ¢n dung tÃ­ch há»£p trÃ­ tuá»‡ nhÃ¢n táº¡o A.I hoÃ n háº£o.</p><p><img src=\'https://cdn.tgdd.vn/Files/2018/08/15/1109958/oppof9-30_800x450_800x450.jpg\'></p>', 2),
(4, 'HP 15 da1023TU i5 8265U (5NK81PA)', 14890000, 'N#4', 'Táº·ng tai nghe Kanen IP-2050 vÃ  <b>2 K.mÃ£i</b> khÃ¡c', 'https://cdn.tgdd.vn/Products/Images/44/195384/hp-15-da1023tu-i5-8265u-4gb-1tb-win10-5nk81pa-33397-thumb-400x400.jpg', '<p>Laptop HP 15 da1023TU (5NK81PA) vá»«a Ä‘Æ°á»£c HP cho ra máº¯t, vá»›i thÃ¢n hÃ¬nh cháº¯c cháº¯n vÃ  trá»ng lÆ°á»£ng khÃ´ng quÃ¡ náº·ng Ä‘á»ƒ báº¡n cÃ³ thá»ƒ mang theo bÃªn mÃ¬nh háº±ng ngÃ y. Cáº¥u hÃ¬nh mÃ¡y cháº¡y mÆ°á»£t mÃ  á»©ng dá»¥ng vÄƒn phÃ²ng, Ä‘á»“ hoáº¡ cÆ¡ báº£n. ÄÃ¢y sáº½ lÃ  lá»±a chá»n Ä‘Ã¡ng cÃ¢n nháº¯c cho sinh viÃªn, nhÃ¢n viÃªn vÄƒn phÃ²ng.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/44/195384/hp-15-da1023tu-i5-8265u-4gb-1tb-win10-5nk81pa-content-thietketgdd.jpg\'></p>', 1),
(5, 'HP Envy 13 ah1011TU i5 8265U', 22490000, 'N#5', 'Táº·ng tai nghe Kanen IP-2050 vÃ  <b>2 K.mÃ£i</b> khÃ¡c', 'https://cdn.tgdd.vn/Products/Images/44/196906/hp-envy-13-ah1011tu-i5-8265u-8gb-256gb-win10-5hz2-33397-thumb-400x400.jpg', '<p>Thiáº¿t káº¿ má»ng nháº¹, hiá»‡n Ä‘áº¡i vÃ  sang trá»ng\r\nLÃ  chiáº¿c laptop cao cáº¥p, sang trá»ng, mÃ¡y Ä‘Æ°á»£c khoÃ¡c lÃªn mÃ¬nh má»™t chiáº¿c Ã¡o kim loáº¡i nguyÃªn khá»‘i vá»›i 4 gÃ³c cáº¡nh vuÃ´ng vá»©c Ä‘Æ°á»£c gia cÃ´ng ráº¥t tá»‰ má»‰ toÃ¡t lÃªn sá»± máº¡nh máº½, lá»‹ch lÃ£m vÃ  sang trá»ng. CÃ¹ng vá»›i thiáº¿t káº¿ má»ng nháº¹ chá»‰ 1.2kg ráº¥t phÃ¹ há»£p cho viá»‡c di chuyá»ƒn háº±ng ngÃ y Ä‘áº¿n cÃ´ng ty cÃ¹ng vá»›i chiáº¿c mÃ¡y tÃ­nh xÃ¡ch tay.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/44/196906/hp-envy-13-ah1011tu-i5-8265u-8gb-256gb-win10-5hz2-33397-content-thietketgdd.jpg\'></p>', 1),
(6, 'Asus Vivobook S15 S530UA i5 8250U (BQ290T)', 17390000, 'N#6', 'Táº·ng Balo Laptop Lenovo vÃ  <b>1 K.mÃ£i</b> khÃ¡c', 'https://cdn.tgdd.vn/Products/Images/44/193863/asus-s530ua-i5-8250u-4gb-16gb-1tb-win10-bq290t-33397-thumb333-400x400.jpg', '<p>Thiáº¿t káº¿ kim loáº¡i, trá»ng lÆ°á»£ng nháº¹ Ä‘áº§y sang trá»ng\r\n Laptop Asus S530UA BQ290T Ä‘Æ°á»£c hoÃ n thiá»‡n vá» ngoÃ i kim loáº¡i cháº¯c cháº¯n, má»ng chá»‰ 18 mm giÃºp tá»•ng thá»ƒ mÃ¡y thanh thoÃ¡t vÃ  sang trá»ng. Trá»ng lÆ°á»£ng khÃ¡ nháº¹ chá»‰ 1.8 kg phÃ¹ há»£p viá»‡c mang vÃ¡c háº±ng ngÃ y Ä‘áº¿n cÃ´ng sá»Ÿ, lá»›p há»c cá»§a sinh viÃªn, nhÃ¢n viÃªn vÄƒn phÃ²ng.</p><p><img src=\'https://cdn.tgdd.vn/Products/Images/44/193863/asus-s530ua-i5-8250u-4gb-16gb-1tb-win10-bq290t-33397-thietkettgdd.gif\'></p>', 1),
(13, 'OPPO F9 6GB', 8490000, 'N#13', 'Giáº£m ngay 500.000Ä‘', 'https://cdn.tgdd.vn/Products/Images/42/186998/oppo-f9-6gb-red-400x400.jpg', '<p>LÃ  chiáº¿c Ä‘iá»‡n thoáº¡i OPPO Ä‘Æ°á»£c nÃ¢ng cáº¥p cáº¥u hÃ¬nh, cá»¥ thá»ƒ lÃ  RAM lÃªn tá»›i 6 GB, OPPO F9 6GB cÃ²n trang bá»‹ nhiá»u tÃ­nh nÄƒng Ä‘á»™t phÃ¡ nhÆ° sá»Ÿ há»¯u cÃ´ng nghá»‡ sáº¡c VOOC má»›i nháº¥t, máº·t lÆ°ng chuyá»ƒn mÃ u Ä‘á»™c Ä‘Ã¡o, mÃ n hÃ¬nh trÃ n viá»n giá»t nÆ°á»›c vÃ  camera chá»¥p chÃ¢n dung tÃ­ch há»£p trÃ­ tuá»‡ nhÃ¢n táº¡o A.I hoÃ n háº£o.</p><p><img src=\'https://cdn.tgdd.vn/Files/2018/08/15/1109958/oppof9-30_800x450_800x450.jpg\'></p>', 2),
(14, 'OPPO F9 6GB', 8490000, 'N#14', 'Giáº£m ngay 500.000Ä‘', 'https://cdn.tgdd.vn/Products/Images/42/186998/oppo-f9-6gb-red-400x400.jpg', '<p>LÃ  chiáº¿c Ä‘iá»‡n thoáº¡i OPPO Ä‘Æ°á»£c nÃ¢ng cáº¥p cáº¥u hÃ¬nh, cá»¥ thá»ƒ lÃ  RAM lÃªn tá»›i 6 GB, OPPO F9 6GB cÃ²n trang bá»‹ nhiá»u tÃ­nh nÄƒng Ä‘á»™t phÃ¡ nhÆ° sá»Ÿ há»¯u cÃ´ng nghá»‡ sáº¡c VOOC má»›i nháº¥t, máº·t lÆ°ng chuyá»ƒn mÃ u Ä‘á»™c Ä‘Ã¡o, mÃ n hÃ¬nh trÃ n viá»n giá»t nÆ°á»›c vÃ  camera chá»¥p chÃ¢n dung tÃ­ch há»£p trÃ­ tuá»‡ nhÃ¢n táº¡o A.I hoÃ n háº£o.</p><p><img src=\'https://cdn.tgdd.vn/Files/2018/08/15/1109958/oppof9-30_800x450_800x450.jpg\'></p>', 2),
(17, 'OPPO F9 6GB', 8490000, 'N#17', 'Giáº£m ngay 500.000Ä‘', 'https://cdn.tgdd.vn/Products/Images/42/186998/oppo-f9-6gb-red-400x400.jpg', '<p>LÃ  chiáº¿c Ä‘iá»‡n thoáº¡i OPPO Ä‘Æ°á»£c nÃ¢ng cáº¥p cáº¥u hÃ¬nh, cá»¥ thá»ƒ lÃ  RAM lÃªn tá»›i 6 GB, OPPO F9 6GB cÃ²n trang bá»‹ nhiá»u tÃ­nh nÄƒng Ä‘á»™t phÃ¡ nhÆ° sá»Ÿ há»¯u cÃ´ng nghá»‡ sáº¡c VOOC má»›i nháº¥t, máº·t lÆ°ng chuyá»ƒn mÃ u Ä‘á»™c Ä‘Ã¡o, mÃ n hÃ¬nh trÃ n viá»n giá»t nÆ°á»›c vÃ  camera chá»¥p chÃ¢n dung tÃ­ch há»£p trÃ­ tuá»‡ nhÃ¢n táº¡o A.I hoÃ n háº£o.</p><p><img src=\'https://cdn.tgdd.vn/Files/2018/08/15/1109958/oppof9-30_800x450_800x450.jpg\'></p>', 2),
(18, 'OPPO F9 6GB', 8490000, 'N#18', 'Giáº£m ngay 500.000Ä‘', 'https://cdn.tgdd.vn/Products/Images/42/186998/oppo-f9-6gb-red-400x400.jpg', '<p>LÃ  chiáº¿c Ä‘iá»‡n thoáº¡i OPPO Ä‘Æ°á»£c nÃ¢ng cáº¥p cáº¥u hÃ¬nh, cá»¥ thá»ƒ lÃ  RAM lÃªn tá»›i 6 GB, OPPO F9 6GB cÃ²n trang bá»‹ nhiá»u tÃ­nh nÄƒng Ä‘á»™t phÃ¡ nhÆ° sá»Ÿ há»¯u cÃ´ng nghá»‡ sáº¡c VOOC má»›i nháº¥t, máº·t lÆ°ng chuyá»ƒn mÃ u Ä‘á»™c Ä‘Ã¡o, mÃ n hÃ¬nh trÃ n viá»n giá»t nÆ°á»›c vÃ  camera chá»¥p chÃ¢n dung tÃ­ch há»£p trÃ­ tuá»‡ nhÃ¢n táº¡o A.I hoÃ n háº£o.</p><p><img src=\'https://cdn.tgdd.vn/Files/2018/08/15/1109958/oppof9-30_800x450_800x450.jpg\'></p>', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fullname` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `age` int(11) NOT NULL,
  `earn` int(11) NOT NULL COMMENT 'Đơn vị $'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `fullname`, `email`, `gender`, `password`, `age`, `earn`) VALUES
(9, 'lehang123', 'Le Hang', 'lehang@gmail.com', 'female', '5a8e17e5e24acb67c7e0eb88a5e1ac87', 0, 0),
(10, 'huuthien123', 'Huu Thien', 'huuthien@gmail.com', 'male', '9210885d4d351e375fa19b8b90e52dc9', 0, 0),
(12, 'nguyenanh123', 'Anh Nguyen Nguyen', 'anh.nguyen@insa-cvl.fr', 'male', '79053613ee13603570ec159d6963394e', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cats`
--
ALTER TABLE `tbl_cats`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cats`
--
ALTER TABLE `tbl_cats`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_cats` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
