-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table berakhlak-jatim.beritas
DROP TABLE IF EXISTS `beritas`;
CREATE TABLE IF NOT EXISTS `beritas` (
  `id_berita` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_berita` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.beritas: ~2 rows (approximately)
REPLACE INTO `beritas` (`id_berita`, `judul_berita`, `headline_berita`, `path_berita`, `isi_berita`, `tags`, `foto_berita`, `created_at`, `updated_at`) VALUES
	(1, 'Workshop Penguatan Penggerak Budaya Kerja menuju Birokrasi Profesional di Jawa Timur', 'Workshop Budaya Kerja', 'workshop-penguatan-penggerak-budaya-kerja-menuju-birokrasi-profesional-di-jawa-timur', '<p><strong><em>Malang - </em></strong>Presiden RI Joko Widodo telah melaunching nilai-nilai dasar (core values) ASN BerAKHLAK pada tanggal <em>27 Juli 2021</em>, keseragaman core values melalui BerAKHLAK menjadi fondasi dalam penguatan budaya kerja ASN yang solid dan profesional. Upaya penguatan budaya kerja BerAKHLAK tentu membutuhkan sumber daya yang memadai, oleh sebab itu Pemerintah Provinsi Jawa Timur melalui Biro Organisasi terus melakukan peningkatan kualitas sumber daya manusia aparatur, diantaranya melalui kegiatan Workshop Penguatan Penggerak Budaya Kerja menuju Birokrasi Profesional di Jawa Timur yang dilaksanakan pada hari senin s.d selasa tanggal 30 s.d 31 Mei 2022 bertempat di Hotel Harris Malang, Acara dibuka oleh Asisten Administrasi Umum Setda Provinsi Jawa Timur, Bapak Drs. Sjaichul Ghulam, M.M dan Laporan Panitia disampaikan Kepala Biro Organisasi, Bapak Dr. Ramliyanto,S.P,M.P.</p><p>Hadir secara langsung sebagai narasumber Deputi Bidang SDM Aparatur Kementerian PANRB RI Bapak Dr. Ir. Alex Denni,M.M, dalam kesempatan ini disampaikan bahwa dengan ditetapkannya satu core values, maka budaya kerja akan kokoh dan mengakar kuat karena tidak akan mudah diganti setiap waktu oleh pemimpin instansi. Fenomena yang sering terjadi adalah kerapkali jika terjadi pergantian pemimpin instansi, maka core values akan berubah. Sehingga core values-nya belum sempat mengakar kuat menjadi budaya kerja. Kenyataannya membangun budaya kerja tidak bisa dibangun dalam waktu singkat. Perlu upaya yang terus-menerus dari waktu ke waktu dalam jangka panjang.</p><p>Deputi Alex mengungkapkan, hal yang tidak kalah pentingnya dalam penguatan budaya kerja ASN adalah hadirnya sosok pimpinan sebagai change leader.</p><blockquote>“Bukan hanya menjadi role model, namun sebagai guardian bagi core values ASN sesuai panduan perilaku BerAKHLAK,” - Alex Denni.</blockquote><p>Adapun peserta kegiatan berasal dari Penggerak Budaya Kerja Perangkat Daerah Provinsi dan Pemerintah Kabupaten/Kota di Jawa Timur, tim Penggerak Budaya Kerja ASN ini nantinya akan bertugas untuk terus menggelorakan, memantau, dan mendampingi instansi pemerintah dalam penerapan nilai-nilai dasar ASN.</p><p><br></p><p><br></p><p>NOVEMBER, 2022</p>', NULL, 'upload/foto_berita\\IMG_6394.JPG', '2023-01-03 00:47:37', '2023-01-08 06:33:34'),
	(2, 'Pertama di Indonesia, Gubernur Jawa Timur Kukuhkan Desa BerAKHLAK', 'Desa BerAKHLAK', 'pertama-di-indonesia,-gubernur-jawa-timur-kukuhkan-desa-berakhlak', '<p>Sejak dilaunchingnya core values ASN BerAKHLAK dan Employer Branding Bangga Melayani Bangsa oleh Presiden RI pada tanggal 27 Juli 2021, Pemerintah Provinsi Jawa Timur secara aktif melakukan Internalisasi core values dan Employer Branding ASN secara terus- menerus baik pada ASN Pemerintah Provinsi, Kabupaten/Kota bahkan sampai dengan tingkat Pemerintahan Desa.</p><p>Rabu (7/12) bertempat di alun - alun Caruban Kabupaten Madiun dalam rangkaian acara Festival Inovasi Desa Tahun 2022, Bersama dengan Menteri PAN dan RB Abdullah Azwar Anas, Gubernur Jawa Timur Inisiasi Pengukuhan Desa BerAKHLAK (Berorientasi Pelayanan, Akuntabel, Kompeten, Harmonis, Loyal, Adaptif, Kolaboratif) kegitan ini merupakan pertama di Indonesia dan merupakan bentuk komitmen Gubernur Jawa Timur terhadap core values BerAKHLAK.</p><blockquote>“Desa sebagai ujung tombak pelayanan publik dan dalam rangka memajukan pembangunan yang akan berdampak langsung terhadap kesejahteraan masyarakat sewajarnya melaksanakan core values BerAKHLAK dengan mengubah pola pikir dan pola tindak agar dapat bekerja menuju tatanan baru yang lebih produktif dan inovatif. ”, <strong>Kata Khofifah dalam sambutannya</strong>.</blockquote><p>Dalam kegiatan ini Gubernur Jawa Timur Kukuhkan 3 Desa BerAKHLAK yaitu :</p><ol><li>Desa Cermo, Kecamatan Kare, Kabupaten Madiun;</li><li>Desa Balun, Kecamatan Turi, Kab. Lamongan;</li><li>Desa Setail, Kecamatan Genteng, Kab. Banyuwangi.</li></ol><p>Desa BerAKHLAK merupakan desa piloting dan pelopor pelaksanaan core values BerAKHLAK pada pemerintahan Desa.</p><p>Pengukuhan Desa BerAKHLAK ini semoga menjadi penguat semangat untuk memberikan pelayanan yang terbaik kepada masyarakat.</p>', NULL, 'upload/foto_berita\\desa-berakhlak.jpg', '2023-01-03 03:09:41', '2023-01-08 06:29:58');

-- Dumping structure for table berakhlak-jatim.contents
DROP TABLE IF EXISTS `contents`;
CREATE TABLE IF NOT EXISTS `contents` (
  `id_content` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `id_kategori` bigint(20) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_budaya_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latar_belakang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sasaran` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kondisi_sebelum` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `implementasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kondisi_sesudah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manfaat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peran_pimpinan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monev` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sk_tim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dok_pembangunan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_content`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.contents: ~10 rows (approximately)
REPLACE INTO `contents` (`id_content`, `id_user`, `id_kategori`, `image`, `nama_budaya_kerja`, `path`, `latar_belakang`, `tujuan`, `sasaran`, `kondisi_sebelum`, `implementasi`, `kondisi_sesudah`, `manfaat`, `peran_pimpinan`, `monev`, `link`, `sk_tim`, `anggaran`, `sop`, `dok_pembangunan`, `created_at`, `updated_at`) VALUES
	(1, 2, 2, 'upload/images/SiQ3Oe06C5mQbM8z9dcL1N0YmJjQ69S6rn2yQXGj.png', 'coba coba aja', 'coba-coba-aja', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'\'\'\'\'\'\'', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'', '\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\'\'\'\'', '\'\'', 'upload/data_dukung/qhVSImk7OmfscRp3WkTJIr9JBHYF1POsomk0PUfE.pdf', NULL, NULL, NULL, '2022-11-07 20:16:46', '2022-12-26 18:27:33'),
	(2, 2, 7, NULL, 'coba se kayak gmn', 'coba-se-kayak-gmn', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 20:19:51', '2022-11-07 20:19:51'),
	(3, 2, 4, 'upload/images/XBOE6h4dAXJW7GyjKPKkpecV56EILKZngDJ0QDbT.jpg', 'coba ae', 'coba-ae', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 21:28:52', '2022-11-07 21:28:52'),
	(4, 3, 7, 'upload/images/VwlxAAgT0KpRpcFELxO4HoYBfHGS0cx54uyC1xKy.png', 'culoboyo-rek', 'culoboyo-rek', '\'\'\'\'\'\'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\'\'\'\'\'\'', '\'\'\'\'\'\'\'\'\'\'\'\'', '\'\'\'\'\'\'\'\'\'\'\'\'', '\'\'\'\'\'\'\'\'\'\'\'\'', '\'\'\'\'\'\'\'\'\'\'\'\'', '\'\'\'\'\'\'\'\'\'\'\'\'', '\'\'\'\'\'\'\'\'\'\'\'\'', '\'\'\'\'\'\'\'\'\'\'\'\'', '\'\'\'\'\'\'321321321', '\'\'\'321321321\'', NULL, NULL, NULL, NULL, '2022-11-09 09:27:43', '2022-12-19 09:36:54'),
	(6, 3, 7, 'upload/images/G8Rn0XD508XGWOTE1QoQeAiSnkX0RCBIZrwmaoa2.png', 'swurabaya coba coba', 'swurabaya-coba-coba', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis, velit in malesuada aliquet, tortor justo facilisis dui, a lacinia nulla lacus sit amet massa. Maecenas consequat non dui ornare feugiat. Fusce in nunc sit amet dui hendrerit porta a sit amet eros. Vestibulum molestie ligula non arcu sollicitudin, sit amet semper lorem aliquet. Morbi sagittis dui nec nisl rhoncus, eu blandit nisl aliquet. Praesent et maximus diam. Proin sapien odio, porttitor quis rhoncus eu, dictum vitae justo. Mauris lorem massa, malesuada sed tortor quis, aliquet fringilla dui. Mauris in magna interdum, scelerisque nunc in, fermentum massa. Mauris volutpat, ligula at sodales facilisis, urna tortor luctus neque, et consequat metus eros egestas mauris. Proin nec massa nisi. Aliquam erat volutpat.', 'Integer lobortis erat eu lectus congue, eu vestibulum est scelerisque. Suspendisse facilisis vestibulum eleifend. Praesent faucibus mattis varius. Integer ullamcorper est purus, id interdum mi pretium ut. Ut orci diam, vestibulum eget sem sit amet, lobortis venenatis ante. Phasellus mollis dolor vitae porttitor sagittis. Donec eu sem elementum, tincidunt augue et, sagittis felis. Donec nunc sem, semper vitae nibh et, iaculis vehicula orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus iaculis varius.', 'Sed vitae orci in nisi imperdiet vehicula sed et dui. Integer dignissim finibus quam, quis porta nibh vulputate sed. Donec tellus neque, sodales eget congue non, eleifend in augue. Vivamus urna arcu, fermentum eu pretium sit amet, tincidunt sed purus. Nam consequat sed lacus vitae sagittis. Phasellus nec lacinia odio. Phasellus ut enim sed lacus pharetra dapibus ac sit amet augue. Donec vel ullamcorper est. Vivamus dolor mi, mollis sed mauris non, ultricies maximus elit.', 'Nullam dictum elit vitae diam hendrerit luctus et ac orci. Aliquam eu nulla tempor ipsum condimentum bibendum. Cras dictum sagittis turpis ut facilisis. Nunc auctor lorem quis hendrerit maximus. Fusce tempor quis felis sit amet euismod. Fusce sed tristique dui, a volutpat ligula. Phasellus eleifend sapien eget cursus consectetur. Maecenas porta, magna a rutrum volutpat, nibh purus mattis orci, sit amet molestie mauris ex vitae massa. Mauris ac quam lorem. Aenean ac fringilla velit. Nam fermentum ex ex, vitae bibendum magna facilisis at. Morbi nec velit posuere lacus interdum mattis. Maecenas a ligula quis nisi viverra iaculis.', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum rhoncus ligula ac nulla mollis feugiat. In ante velit, dapibus sit amet elit a, lobortis egestas mauris. Vestibulum vel ultricies leo. Curabitur elit magna, dignissim in fermentum ac, consectetur sed mi. Etiam ullamcorper felis vitae nisl porta, ut dignissim est auctor. Praesent nec lacus quis ante faucibus sagittis. Aenean eros mauris, aliquam sed scelerisque at, dignissim vitae justo. Mauris pharetra orci vitae mi hendrerit, quis interdum erat finibus. Nulla gravida tincidunt venenatis. Vivamus ac diam arcu. Sed tincidunt ipsum elementum massa consequat consectetur. Nam sollicitudin sem in tincidunt consectetur. Nullam justo turpis, varius at lorem ut, luctus pulvinar diam. Quisque vehicula diam enim, sit amet mattis lectus congue mattis. Integer sed mi ac neque semper ultricies vitae ac dolor.', 'Nullam dictum elit vitae diam hendrerit luctus et ac orci. Aliquam eu nulla tempor ipsum condimentum bibendum. Cras dictum sagittis turpis ut facilisis. Nunc auctor lorem quis hendrerit maximus. Fusce tempor quis felis sit amet euismod. Fusce sed tristique dui, a volutpat ligula. Phasellus eleifend sapien eget cursus consectetur. Maecenas porta, magna a rutrum volutpat, nibh purus mattis orci, sit amet molestie mauris ex vitae massa. Mauris ac quam lorem. Aenean ac fringilla velit. Nam fermentum ex ex, vitae bibendum magna facilisis at. Morbi nec velit posuere lacus interdum mattis. Maecenas a ligula quis nisi viverra iaculis.', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum rhoncus ligula ac nulla mollis feugiat. In ante velit, dapibus sit amet elit a, lobortis egestas mauris. Vestibulum vel ultricies leo. Curabitur elit magna, dignissim in fermentum ac, consectetur sed mi. Etiam ullamcorper felis vitae nisl porta, ut dignissim est auctor. Praesent nec lacus quis ante faucibus sagittis. Aenean eros mauris, aliquam sed scelerisque at, dignissim vitae justo. Mauris pharetra orci vitae mi hendrerit, quis interdum erat finibus. Nulla gravida tincidunt venenatis. Vivamus ac diam arcu. Sed tincidunt ipsum elementum massa consequat consectetur. Nam sollicitudin sem in tincidunt consectetur. Nullam justo turpis, varius at lorem ut, luctus pulvinar diam. Quisque vehicula diam enim, sit amet mattis lectus congue mattis. Integer sed mi ac neque semper ultricies vitae ac dolor.', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum rhoncus ligula ac nulla mollis feugiat. In ante velit, dapibus sit amet elit a, lobortis egestas mauris. Vestibulum vel ultricies leo. Curabitur elit magna, dignissim in fermentum ac, consectetur sed mi. Etiam ullamcorper felis vitae nisl porta, ut dignissim est auctor. Praesent nec lacus quis ante faucibus sagittis. Aenean eros mauris, aliquam sed scelerisque at, dignissim vitae justo. Mauris pharetra orci vitae mi hendrerit, quis interdum erat finibus. Nulla gravida tincidunt venenatis. Vivamus ac diam arcu. Sed tincidunt ipsum elementum massa consequat consectetur. Nam sollicitudin sem in tincidunt consectetur. Nullam justo turpis, varius at lorem ut, luctus pulvinar diam. Quisque vehicula diam enim, sit amet mattis lectus congue mattis. Integer sed mi ac neque semper ultricies vitae ac dolor.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis, velit in malesuada aliquet, tortor justo facilisis dui, a lacinia nulla lacus sit amet massa. Maecenas consequat non dui ornare feugiat. Fusce in nunc sit amet dui hendrerit porta a sit amet eros. Vestibulum molestie ligula non arcu sollicitudin, sit amet semper lorem aliquet. Morbi sagittis dui nec nisl rhoncus, eu blandit nisl aliquet. Praesent et maximus diam. Proin sapien odio, porttitor quis rhoncus eu, dictum vitae justo. Mauris lorem massa, malesuada sed tortor quis, aliquet fringilla dui. Mauris in magna interdum, scelerisque nunc in, fermentum massa. Mauris volutpat, ligula at sodales facilisis, urna tortor luctus neque, et consequat metus eros egestas mauris. Proin nec massa nisi. Aliquam erat volutpat.', NULL, NULL, NULL, NULL, NULL, '2022-11-13 20:46:13', '2022-11-13 20:46:13'),
	(9, 2, 7, 'upload/images/8ad4rJkXdWa8ZVfduLHPRLGJar5FWgCUvgJ0hxZu.jpg', 'Lontong Balap', 'lontong-balap', 'dsadsadsa', NULL, 'dsad', 'sadsads', 'adsad', NULL, NULL, NULL, NULL, NULL, 'upload/data_dukung/tud9Q5Ll9343g4VySWBvhIqwycfrT44sv2lNDTxz.pdf', NULL, NULL, NULL, '2022-12-20 01:30:42', '2022-12-20 01:31:29'),
	(11, 20, 7, NULL, 'pisgor', 'pisgor', '\'ghjnin\'', '\'fgrjnkhou\'', '\'hbfsrjk\'', '\'ghkbjl\'', '\'ghbdhjk\'', '\'ghvdjknll\'', '\'ghbnklju\'', '\'hnliihklm\'', 'Cek cek oke', '\'\'', NULL, NULL, NULL, NULL, '2022-12-29 22:40:15', '2022-12-29 22:47:44'),
	(12, 20, 3, NULL, 'pisgor 1.2', 'pisgor-1.2', 'mencoba mencoba lssolwjriwlkjsdsacpasdarwa', 'gini gini gini gitu', 'gitu gitu gini', 'jadi dulu itu bla bla bla', 'jadi ketika', 'setelah adanya bla bla bla', 'manfaat dari', 'pimpinan kami selama ini', 'monep monep monep', 'https://www.youtube.com/watch?v=QrZFBPHyX_I', NULL, NULL, NULL, NULL, '2022-12-29 23:17:58', '2022-12-29 23:19:38'),
	(13, 20, 7, NULL, 'Sistem Integrasi Bersama Kinerja Implementasi Budaya Cettar (SIBEKISAR)', 'sistem-integrasi-bersama-kinerja-implementasi-budaya-cettar-(sibekisar)', '<p class="ql-align-justify">Arah pembangunan Provinsi Jawa Timur yang tertuang dalam Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Provinsi Jawa Timur Tahun 2019-2024 adalah Terwujudnya Masyarakat Jawa Timur yang Adil, Sejahtera, Unggul dan Berahlak dengan Tata Kelola Pemerintah yang Partisipatoris Inklusif Melalui Kerja Bersama dan Semangat Gotong Royong. Untuk mewujudkan visi tersebut makasasaran pembangun Provinsi Jawa Timur dijalankan melalui program- program pembangunan daerah sesuai dengan nilai (value) dari pokok-pokok visi yang telah ditetapkan. Sebagai upaya untuk mencapai visi yang telah dirumuskan dan ditetapkan,maka hal tersebut didukung dengan misi pembangunan daerah lima tahun kedepan. Misi merupakan upaya-upaya yang akan dilaksanakan dalam rangka mewujudkan visi pembangunan Provinsi Jawa Timur. Misi Jawa Timur 2019-2024 tertuang dalam 5 (lima) pokok misi pembangunan yakni salah satunya “Tata Kelola Pemerintah yang Bersih, Inovatif, Terbuka, Partisipatoris Memperkuat Demokrasi Kewargaan untuk Menghadirkan Ruang Sosial yang Menghargai Prinsip Kebhinekaan”. Sebagai upaya untuk mewujudkan tata kelola pemerintah yang optimal dan berkualitas tersebut dalam menjalankan tugas dan fungsinya, maka dibutuhkan pelayanan publik yang berkualitas pula. Hal ini bertujuan agar tugas dan fungsi yang dijalankan oleh pemerintah dapat terukur dan sesuai dengan tujuan yang hendak dicapai. Mengingat baik tidaknya administrasi publik atau pemerintahan dilihat dari seberapa jauh pelayanan publiknya sesuai dengan tuntutan, kebutuhan dan harapan masyarakat (Thohadalam Nurdin, 2019:1). Oleh karena itu, dibutuhkan pelayanan publik yang berkualitas untuk mencapai kepuasan masyarakat, sehingga berdampak terhadap peningkatan kinerja pemerintah melalui Perangkat Daerah. Guna mewujudkan tata kelola pemerintahan di Jawa Timur sesuai misi pembangunan, maka strategi terbaik adalah melalui inovasi daerah yang diciptakan melaui standar penilaian dan tolok ukur untuk menilai kinerja perangkat daerah melalui slogan yang menjadi sebuah semangat pembangunan daerah untuk mendukung dan memperkuat serta meningkatkan kinerja Perangkat Daerah yaitu melalui CETTAR (Cepat, Efisien, Tanggap, Transparan, Akuntabel dan Responsif). Mengingat berdasarkan Peraturan Pemerintah Nomor 38 Tahun 2017 tentang Inovasi Daerah, CETTAR merupakan bentuk pembaharuan dalam penyelenggaraan Pemerintah Daerah guna meningkatkan kinerja penyelenggaraan Pemerintah Daerah Jawa Timur. CETTAR merupakan kultur kerja, filsafat kerja, system kerja menuju kinerja terbaik yang didukung dengan nilai atau prinsip didalamnya. Prinsip CETTAR selaras dengan prinsip inovasi daerah yakni peningkatan efisiensi, perbaikan efektivitas, perbaikan kualitas pelayanan, tidak menimbulkan konflik kepentingan, berorientasi kepada kepentingan umum, dilakukan secara terbuka, memenuhi nilai kepatutan, dan dapat dipertanggung jawabkan hasilnya tidak untuk kepentingan diri sendiri. Prinsip atau nilai yang terdapat dalam CETTAR,bertujuan agar proses pembangunan sebagai penyambung proses kolaborasi, partnership, dan inklusi antara Pemerintah Jawa Timur dengan masyarakat dan sector privat sebagai arena untuk memacu birokrasi pemerintah,sehingga mampu untuk menyediakan pelayanan yang bersih dan anti-korupsi, prima dan berkadilan bagi masyarakat sesuai dengan nilai-nilai yang diharapkan dan dapat menciptakan budaya kerja yang sesuai dengan harapan bersama. Mengingat, CETTAR juga menjadi salah satu pemenuhan Nawa Bhakti Satya Gubernur Jawa Timur periode 2019-2024 demi menciptakan Jawa Timur yang lebih sejahtera dan penuh kemuliaan melalui bhakti ke-8 Jatim Amanah“Menyelenggarakan Pemerintahan yang Bersih, Efektif, dan Anti Korupsi”. Sebagai upaya meningkatkan kinerja serta kualitas pelayanan publik, maka perlu adanya perubahan sikap dan perilaku aparatur sipil negara di Pemerintah Provinsi Jawa Timur dan guna meningkatkan perubahan sikap serta perilaku aparatur sipil negara perlu adanya pengembangan budaya kerja di lingkungan Pemerintah Provinsi Jawa Timur. Budaya kerja berdasarkan Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi RI Nomor 39 Tahun 2012 tentang Pedoman Pengembangan Budaya Kerja dan Peraturan Gubernur Jawa Timur Nomor 75 Tahun 2014 tentang Pedoman Pengembangan Penerapan Budaya Kerja di Jawa Timur, diartikan sebagai sikap dan perilaku individu dan kelompok yang didasari atas nilai-nilai yang diyakini kebenarannya dan telah menjadi sifat serta kebiasaan dalam melaksanakan tugas dan pekerjaan sehari- hari. Budaya kerja merupakan suatu komitmen organisasi, dalam upaya membangun sumberdaya manusia, proses kerja, dan hasil kerja yang lebih baik. Budaya kerja berkaitan erat dengan perilaku dalam menyelesaikan pekerjaan. Perilaku ini merupakan cerminan dari sikap kerja yang didasari nilai-nilai dan norma-norma yang dimiliki oleh setiap individu. Budaya kerja sangat mendukung Reformasi Birokrasi yakni dapat meningkatkan kualitas kinerja organisasi serta membentuk sumber daya manusia (SDM) aparatur profesional yang mampu menyelenggarakan pelayanan prima kepada masyarakat dan manajemen pemerintahan yang baik. Oleh karena itu, dibutuhkan pengembangan terhadap budaya CETTAR.</p>', '<ol><li>Memudahkan Penilaian budaya kerja sesuai dengan spirit (CETTAR) dari Gubernur Jawa Timur agar dapat diimplementasikan dengan baik oleh PD </li><li>Penilaian budaya kerja CETTAR dapat terintegrasi dengan berbagai indikator kinerja yang selama ini sudah dilakukan oleh Perangkat Daerah melalui sistem penilaian yang Real Time, Quick Response, Anti Lelet , Jaga Momentum, Akuntabel, dan Transparan berbasis teknologi informasi</li></ol>', '1. Terwujudnya sistem penilaian yang real time\r\n2. Terwujudnya Perangkat Daerah dan Pemerintah Kab/Kota Cettar', 'Pemerintah Provinsi Jawa Timur tidak bisa mengukur tingkat kinerja Perangkat Daerah Provinsi dan Pemerintah Kabupaten/Kota di Jawa Timur, sehingga belum bisa terlihat tingkat kecettarannya', 'Pembangunan Aplikasi Sibekisar dengan Tahapan yaitu :\r\n1. FGD Cettar untuk mengetahui penjelasan serta indikator masing-masing akronim\r\n2. Membuat naskah akademik pembangunan aplikasi sibekisar\r\n3. Rapat Koordinasi Penentuan Perangkat Daerah Pengampu\r\n4. Pembangunan Aplikasi Sibekisar\r\n5. Uji coba Aplikasi Sibekisar', 'Pemerintah Provinsi Jawa Timur dapat mengukur  kinerja Perangkat Daerah dan Pemerintah Kab/Kota secara real time sesuai dengan indikator budaya Cettar yang telah ditetapkan', '1. Meningkatkan kerja sama antar individu, antar kelompok dan antar unit kerja;\r\n2. Meningkatkan koordinasi, integrasi, sinkronisasi dan keselarasan dalam organisasi;\r\n3. Memperlancar komunikasi dan hubungan kerja;\r\n4. Menumbuhkan kepemimpinan dan partisipatif;\r\n5. Mengeliminir hambatan-hambatan psikologis dan kultural; dan\r\n6. Menciptakan suasana kerja yang menyenangkan sehingga merangsang kreatifitas pegawai dan pada akhirnya meningkatkan kinerja instansi dan peningkatan pelayanan publik.', 'Ide Pembangunan aplikasi muncul dari Kepala Biro Organisasi, selain itu Kepala Biro secara aktif memantau setiap tahapan dalam pembangunan aplikasi sibekisar', 'Moniroring dan Evaluasi secara kontinyu dilakukan diantaranya melakukan update secara berkala terkait inputan nilai indikator cettar', 'https://www.youtube.com/watch?v=SwqZPxvtctY&ab_channel=BiroOrganisasiJatim', 'upload/data_dukung/9OevfZ5RiBxsPKh6dYUpgEOC6EEfmx7a6exDQ67i.pdf', NULL, 'upload/data_dukung/sop\\INTRODUCTION DATA MINING.pdf', 'upload/data_dukung/dok_pembangunan\\foto klampis.pdf', '2023-01-03 23:46:22', '2023-01-08 08:33:22'),
	(18, 1, 3, NULL, 'coba', 'coba', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>testssss</p>', '<p>testsadsaw2222</p>', '<p>test</p>', NULL, NULL, NULL, NULL, NULL, '2023-01-08 06:39:23', '2023-01-08 06:40:29');

-- Dumping structure for table berakhlak-jatim.data_pendukung
DROP TABLE IF EXISTS `data_pendukung`;
CREATE TABLE IF NOT EXISTS `data_pendukung` (
  `id_data_pendukung` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_content` bigint(20) unsigned NOT NULL,
  `sk-tim` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggaran` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sop` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dok-pembangunan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_data_pendukung`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.data_pendukung: ~0 rows (approximately)

-- Dumping structure for table berakhlak-jatim.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table berakhlak-jatim.kategoris
DROP TABLE IF EXISTS `kategoris`;
CREATE TABLE IF NOT EXISTS `kategoris` (
  `id_kategori` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.kategoris: ~7 rows (approximately)
REPLACE INTO `kategoris` (`id_kategori`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Berorientasi Pelayanan', '2023-01-02 20:51:16', '2023-01-02 20:51:16'),
	(2, 'Akuntabel', '2023-01-02 20:51:16', '2023-01-02 20:51:16'),
	(3, 'Kompeten', '2023-01-02 20:51:16', '2023-01-02 20:51:16'),
	(4, 'Harmonis', '2023-01-02 20:51:16', '2023-01-02 20:51:16'),
	(5, 'Loyal', '2023-01-02 20:51:17', '2023-01-02 20:51:17'),
	(6, 'Adaptif', '2023-01-02 20:51:17', '2023-01-02 20:51:17'),
	(7, 'Kolaboratif', '2023-01-02 20:51:17', '2023-01-02 20:51:17');

-- Dumping structure for table berakhlak-jatim.levels
DROP TABLE IF EXISTS `levels`;
CREATE TABLE IF NOT EXISTS `levels` (
  `id_level` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.levels: ~2 rows (approximately)
REPLACE INTO `levels` (`id_level`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2023-01-02 20:51:17', '2023-01-02 20:51:17'),
	(2, 'OPD/Kab/Kota', '2023-01-02 20:51:17', '2023-01-02 20:51:17');

-- Dumping structure for table berakhlak-jatim.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.migrations: ~10 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_10_29_073556_create_contents_table', 1),
	(6, '2022_10_30_154429_create_kategoris_table', 1),
	(7, '2022_10_31_032350_create_levels_table', 1),
	(8, '2022_11_04_035221_create_data_pendukung_table', 1),
	(9, '2022_12_25_145311_create_beritas_table', 1),
	(10, '2023_01_03_034004_create_sliders_table', 1);

-- Dumping structure for table berakhlak-jatim.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.password_resets: ~0 rows (approximately)

-- Dumping structure for table berakhlak-jatim.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table berakhlak-jatim.sliders
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id_slider` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_slider` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_slider` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan_slider` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_slider` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_aktif` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.sliders: ~3 rows (approximately)
REPLACE INTO `sliders` (`id_slider`, `judul_slider`, `link_slider`, `urutan_slider`, `foto_slider`, `is_aktif`, `created_at`, `updated_at`) VALUES
	(1, '1', NULL, '1', 'upload/foto_slider\\slider-1.jpg', NULL, '2023-01-03 02:16:40', '2023-01-08 06:52:27'),
	(3, '2', 'https://drive.google.com/drive/folders/1POQaL5jpmFkAUDOoqQxHwWeSvB1yPfqC?usp=share_link', '2', 'upload/foto_slider\\slider-2.jpg', '1', '2023-01-03 03:11:06', '2023-01-08 06:52:36'),
	(4, '3', NULL, '3', 'upload/foto_slider\\slider-default.jpg', '1', '2023-01-03 03:11:35', '2023-01-08 06:52:47');

-- Dumping structure for table berakhlak-jatim.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_level` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telfon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table berakhlak-jatim.users: ~89 rows (approximately)
REPLACE INTO `users` (`id_user`, `id_level`, `name`, `username`, `password`, `telfon`, `alamat`, `bio`, `email`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Admin Biro Organisasi', 'admin', '$2y$10$k3DdXcPKeEFyYU3gTR7F6O.Dc101lkR6sb5i9iURGN9wMKE2bc/FC', '087885000374', 'Kantor Gubernur Lantai 4. Jl. Pahlawan No. 110 Surabaya', 'disini senang, disana senang', 'rorgan.jatim@gmail.com', 'upload/avatar\\Logo Birorgan 2021 white-03.png', NULL, '2025-12-22 07:53:00', '2023-01-08 06:35:12'),
	(2, 2, 'Badan Kepegawaian Daerah', 'bkd', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 2, 'Badan Kesatuan Bangsa dan Politik', 'bakesbangpol', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 2, 'Badan Penanggulangan Bencana Daerah', 'bpbd', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(5, 2, 'Badan Pendapatan Daerah', 'bapenda', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 2, 'Badan Penelitian dan Pengembangan', 'balitbang', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(7, 2, 'Badan Pengelola Keuangan dan Aset Daerah', 'bpkad', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(8, 2, 'Badan Pengembangan Sumber Daya Manusia', 'bpsdm', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(9, 2, 'Badan Penghubung Daerah Provinsi', 'bpdp', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(10, 2, 'Badan Perencanaan Pembangunan Daerah', 'bappeda', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(11, 2, 'Bakorwil Bojonegoro', 'bakorwil_bojonegoro', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(12, 2, 'Bakorwil Jember', 'bakorwil_jember', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(13, 2, 'Bakorwil Madiun', 'bakorwil_madiun', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(14, 2, 'Bakorwil Malang', 'bakorwil_malang', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(15, 2, 'Bakorwil Pamekasan', 'bakorwil_pamekasan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(16, 2, 'Biro Administrasi Pembangunan', 'biro_ap', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(17, 2, 'Biro Adpim', 'biro_adpim', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(18, 2, 'Biro Hukum', 'biro_hukum', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(19, 2, 'Biro Kesejahteraan Rakyat', 'biro_kesra', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(20, 2, 'Biro Organisasi', 'rorgan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', '+62313533832', 'Kantor Gubernur Lantai 4. Jl. Pahlawan No. 110 Surabaya', 'Smarter, better, stronger !', 'rorgan.jatim@gmail.com', 'upload/avatar\\Logo Birorgan 2021_Artboard 3.png', NULL, '2025-12-22 07:53:00', '2023-01-08 08:28:53'),
	(21, 2, 'Biro Pemerintahan dan Otonomi Daerah', 'biro_otoda', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(22, 2, 'Biro Pengadaan Barang/Jasa', 'biro_pbj', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(23, 2, 'Biro Perekonomian', 'biro_ekonomi', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(24, 2, 'Biro Umum', 'biro_umum', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(25, 2, 'Dinas Energi dan Sumber Daya Mineral', 'esdm', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(26, 2, 'Dinas Kebudayaan dan Pariwisata', 'disbudpar', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(27, 2, 'Dinas Kehutanan', 'dishut', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(28, 2, 'Dinas Kelautan dan Perikanan', 'dkp', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(29, 2, 'Dinas Kepemudaan dan Olahraga', 'dispora', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(30, 2, 'Dinas Kesehatan', 'dinkes', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(31, 2, 'Dinas Komunikasi dan Informatika', 'diskominfo', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(32, 2, 'Dinas Koperasi dan Usaha Kecil Menengah', 'dinkop', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(33, 2, 'Dinas Lingkungan Hidup', 'dlh', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(34, 2, 'Dinas Pemberdayaan Masyarakat dan Desa', 'dpmd', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(35, 2, 'Dinas Pendidikan', 'dindik', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(36, 2, 'Dinas Perhubungan', 'dishub', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(37, 2, 'Dinas Perindustrian dan Perdagangan', 'disperindag', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(38, 2, 'Dinas Perkebunan', 'disbun', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(39, 2, 'Dinas Perpustakaan dan Kearsipan', 'disperpusip', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(40, 2, 'Dinas Pertanian dan Ketahanan Pangan', 'disperta', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(41, 2, 'Dinas Perumahan Rakyat KPCK', 'pupr', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(42, 2, 'Dinas Peternakan', 'peternakan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(43, 2, 'Dinas PU Bina Marga', 'pu_binamarga', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(44, 2, 'Dinas PU SDA', 'pusda', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(45, 2, 'Dinas Sosial', 'dinsos', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(46, 2, 'Dinas Tenaga Kerja dan Transmigrasi', 'disnakertrans', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(47, 2, 'DP3AK', 'dp3ak', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(48, 2, 'DPMPTSP', 'dpmptsp', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(49, 2, 'Inspektorat', 'inspektorat', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(50, 2, 'Kabupaten Trenggalek', 'kab_trenggalek', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(51, 2, 'Kabupaten Bangkalan', 'kab_bangkalan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(52, 2, 'Kabupaten Banyuwangi', 'kab_banyuwangi', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(53, 2, 'Kabupaten Blitar', 'kab_blitar', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(54, 2, 'Kabupaten Bojonegoro', 'kab_bojonegoro', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(55, 2, 'Kabupaten Bondowoso', 'kab_bondowoso', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(56, 2, 'Kabupaten Gresik', 'kab_gresik', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(57, 2, 'Kabupaten Jember', 'kab_jember', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(58, 2, 'Kabupaten Jombang', 'kab_jombang', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(59, 2, 'Kabupaten kediri', 'kab_kediri', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(60, 2, 'Kabupaten Lamongan', 'kab_lamongan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(61, 2, 'Kabupaten Lumajang', 'kab_lumajang', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(62, 2, 'Kabupaten Madiun', 'kab_madiun', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(63, 2, 'Kabupaten Magetan', 'kab_magetan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(64, 2, 'Kabupaten Malang', 'kab_malang', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(65, 2, 'Kabupaten Mojokerto', 'kab_mojokerto', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(66, 2, 'Kabupaten Nganjuk', 'kab_nganjuk', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(67, 2, 'Kabupaten Ngawi', 'kab_ngawi', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(68, 2, 'Kabupaten Pacitan', 'kab_pacitan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(69, 2, 'Kabupaten Pamekasan', 'kab_pamekasan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(70, 2, 'Kabupaten Pasuruan', 'kab_pasuruan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(71, 2, 'Kabupaten Ponorogo', 'kab_ponorogo', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(72, 2, 'Kabupaten Probolinggo', 'kab_probolinggo', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(73, 2, 'Kabupaten Sampang', 'kab_sampang', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(74, 2, 'Kabupaten Sidoarjo', 'kab_sidoarjo', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(75, 2, 'Kabupaten Situbondo', 'kab_situbondo', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(76, 2, 'Kabupaten Sumenep', 'kab_sumenep', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(77, 2, 'Kabupaten Tuban', 'kab_tuban', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(78, 2, 'Kabupaten Tulungagung', 'kab_tulungagung', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(79, 2, 'Kota Batu', 'kota_batu', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(80, 2, 'Kota Blitar', 'kota_blitar', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(81, 2, 'Kota Kediri', 'kota_kediri', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(82, 2, 'Kota Madiun', 'kota_madiun', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(83, 2, 'Kota Malang', 'kota_malang', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(84, 2, 'Kota Mojokerto', 'kota_mojokerto', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(85, 2, 'Kota Pasuruan', 'kota_pasuruan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(86, 2, 'Kota Probolinggo', 'kota_probolinggo', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(87, 2, 'Kota Surabaya', 'kota_surabaya', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '2025-12-22 07:53:00', '2025-12-22 07:53:00'),
	(89, 2, 'Satuan Polisi Pamong Praja', 'satpolpp', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(90, 2, 'Sekretariat DPRD', 'sekwan', '$2y$10$mRg/RQIKVo/0N9mF/vosd.z0QcuUVoUFknRwS65lvldEWViaCuZ/q', NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
