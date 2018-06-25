-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2018 at 03:12 AM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vokasine_tkj`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(1) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `isi`, `photo`, `tanggal`) VALUES
(2, 'About Vokasi Blog', 'Vokasi.net merupakan blog yang mengkaji tentang pendidikan vokasi secara umum. Harapan dari blog ini dapat menambah pengetahuan kita bersama tentang apa nilai dari vokasi itu sendiri baik dari sudut pandang secara nasional ataupun secara internasional. Hal ini dapat menjadi sebuah pintu untuk pegiat dalam dunia pendidikan vokasi mencari informasi ataupun memberikan informasi.\r\n\r\nPendidikan kejuruan yang sering kini kenal dengan SMK (Sekolah Menengah Kejuruan) untuk tingkat menengah. Hal ini juga dikenal dengan nama Diploma untuk tingkat pendidikan tinggi yang terdiri dari D1 (Diploma 1), D2 (Diploma 2), D3 (Diploma 3) dan D4 (Diploma 4) yang setara dengan pendidikan akademik strata 1. Hal ini lah menjadi kelompok dalam pendidikan vokasi di Indonesia.', 'Logo.png', '2018-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `penulis`, `tanggal`, `gambar`, `kategori`) VALUES
(17, 'Sekilas tentang pendidikan vokasi', 'Wikipedia (2018) menyatakan bahwa “vocational education is education that prepares people to work in various jobs, such as a trade, a craft, or as a technician.” Pendidikan kejuruan adalah pendidikan yang mempersiapkan orang untuk bekerja dalam berbagai pekerjaan, seperti perdagangan, kerajinan tangan, atau sebagai teknisi. Kemudian ini juga dikenal dengan Technical and Vocational Education and Training (TVET). Technical and Vocational Education and Training (TVET) is concerned with the acquisition of knowledge and skills for the world of work (UNESCO-UNEVOC, 2017). Technical and Vocational Education and Training (TVET) berkaitan dengan perolehan pengetahuan dan keterampilan untuk dunia kerja.\r\n\r\nHal tersebut merupakan konsep dasar dari istilah pendidikan vokasi. Wikipedia dengan mempersiapkan orang untuk bekerja dan UNESCO-UNEVOC dengan memperoleh pengetahuan dan keterampilan untuk dunia kerja. Sehinga dapat dilihat bahwa pendidikan vokasi atau kejuruan meruapakan pendidikan yang mempersiapkan orang untuk bekerja melalui pengetahuan dan keterampilan.\r\n\r\nFinch & Crunkilton (1999, 10) mengemukakan “Superimposed on the formal and informal element of education are two categories that reflect the board goal associated with it. These two type of education my be referred to as education for life and education for earning a living.” Melapisi formal dan informal unsur pendidikan adalah dua kategori yang mencerminkan tujuan papan yang terkait dengannya. Kedua jenis pendidikan saya disebut sebagai pendidikan untuk kehidupan dan pendidikan untuk mencari nafkah. Berdasarkan klasifikasi tersebut secara umum pendidikan dapat dibagi dua, yaitu pendiddikan umum atau pendidikan untuk kehidupan (education for life), dan pendidikan kejuruan atau pendidikan untuk mencari nafkah (education for earning a living).\r\n\r\nHal ini merupakan mendukung konsep sebelumnya yaitu pendidikan kejuruan merupakan pendidikan untuk bekerja (education for work). Harapan dari pendidikan kejuruan yang utama yatiu dimana siswa dan mahasiswa dapat bekerja atau melanjutkan pendidikan tinggi sesuai bidangnya keahliannya. Pendidikan kejuruan merupakan pendidikan menengah yang mempersiapkan peserta didik terutama untuk bekerja dalam bidang tertentu (UU No. 20 Tahun 2003, 27).\r\n\r\nSumber:\r\n\r\nFinch, Curtiz R. and Crunkilton, John R, 1999. Curiculum Development in Vocational and Technical Education. Boston: Allyn & Bacon\r\n\r\nUndang-undang Republik Indonesia Nomor 20 tahun 2003 tentang Sistem Pendidikan Nasional\r\n\r\nUNESCO-UNEVOC, 2017. What is TVET?. http://www.unevoc.unesco.org/go.php?q=What+is+TVET. (Diakses pada Diakses pada 9 Maret 2018)\r\n\r\nWikipedia, 2018. Vocational education. https://en.wikipedia.org/wiki/Vocational_education (Diakses pada 9 Maret 2018)\r\n\r\n', 'admin', '2018-06-06', 'Blog.png', 'vokasi');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `id_blog` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(1) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `latitude`, `longitude`, `alamat`, `nama`, `telp`, `email`) VALUES
(2, '-0.2944979', '100.41042059999995', 'Perumahan Lansano Permai Blok H2, Kel. Ampang Gadang, Kenagarian Ampang Gadang, Kec. Ampek Angkek, Kab. Agam, Provinsi Sumatera Barat', 'Andri Eka Putra', '085264656026', 'andriekaputra90@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(3) NOT NULL,
  `judul1` varchar(50) NOT NULL,
  `deskripsi1` varchar(100) NOT NULL,
  `file1` varchar(100) NOT NULL,
  `judul2` varchar(50) DEFAULT NULL,
  `deskripsi2` varchar(100) DEFAULT NULL,
  `file2` varchar(100) DEFAULT NULL,
  `judul3` varchar(50) DEFAULT NULL,
  `deskripsi3` varchar(100) DEFAULT NULL,
  `file3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `judul1`, `deskripsi1`, `file1`, `judul2`, `deskripsi2`, `file2`, `judul3`, `deskripsi3`, `file3`) VALUES
(4, 'vokasi.net', 'Logo Vokasi.net', 'Header1.jpg', 'troubleshootingpc.vokasi.net', 'Logo troubleshootingpc', 'Header2.jpg', 'Perkembangan Information and Comunication Technolo', 'Perkembangan Information and Comunication Technology', 'Header3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id` int(1) NOT NULL,
  `judul` varchar(10) NOT NULL,
  `sub_judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id`, `judul`, `sub_judul`) VALUES
(2, 'vokasi.net', 'Troubleshooting Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(3) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(6, 'vokasi');

-- --------------------------------------------------------

--
-- Table structure for table `p1`
--

CREATE TABLE `p1` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `tipe` varchar(1) NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  `konten` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p1`
--

INSERT INTO `p1` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(2, 4, '4-', 'Q', '-', 'Apakah Komputer Hidup?', 'Ini merupakan pertanyaan awal'),
(3, 4, '41', 'A', '1', 'System Ready', 'Komputer/ PC dalam keadaan baik dan normal serta tidak ada permasalahan'),
(4, 4, '40', 'Q', '0', 'Apakah koneksi kabel power tidak longgar?', 'Cek kabel power yang berada pada konektor Power Supply yang berada di belakang Chasing apakah longgar atau tidak'),
(10, 4, '401', 'Q', '1', 'Apakah Power Supply Unit (PSU) oke?', 'Cek apakah PSU hidup atau tidak'),
(11, 4, '400', 'A', '0', 'Pasang kembali kabel power dan ganti kabel power', 'Pasang kembali kabel power karena longgar dan ganti kabel power lain jika belum berhasil juga'),
(12, 4, '4011', 'Q', '1', 'Apakah Fisik Memory ada cacat?', 'Cek apakah Memory ada goresan di kuningannya atau patah'),
(13, 4, '4010', 'Q', '0', 'Apakah lampu di indikator di PSU atau Motherboard menyala?', 'Cek apakah lampu indikator PSU menyala jika memiliki lampu indikator dan cek juga lampu indikator pada Motherboard hidup atau mati pertanda arus masuk dari PSU ke Motherboard'),
(14, 4, '40111', 'A', '1', 'Coba ganti Memory', 'Coba ganti Memory karena Memory lama ada masalah dan tidak terbaca lagi oleh PC'),
(15, 4, '40110', 'Q', '0', 'Apakah Fisik VGA Card ada cacat?', 'Cek apakah VGA card ada masalah jika memiliki VGA Card Eksternal'),
(16, 4, '401101', 'A', '1', 'Coba ganti VGA Card', 'Coba ganti VGA Card karena VGA Card ada masalah dan tidak terbaca lagi oleh PC atau pindahkan Kabel VGA ke VGA Internal'),
(17, 4, '401100', 'Q', '0', 'Apakah Fisik Motherboard ada cacat?', 'Cek apakah kaki-kaki pada Motherboad ada patah atau komponen ada yang hangus dan mungkun ada bagian Motherboard yang patah  '),
(18, 4, '4011001', 'A', '1', 'Coba ganti Motherboard', 'Coba ganti Motherboard karena Motherboard ada masalah sehingga tidak terbaca oleh PC. Sesuaikan dengan jumlah port dari PSU dan Socket Processor.'),
(19, 4, '4011000', 'Q', '0', 'Apakah Processor ada cacat?', 'Cek apakah kali-kali pada Processor ada yang bengkok'),
(20, 4, '40110001', 'A', '1', 'Coba ganti Processor', 'Coba ganti Processor karena ada masalah sehingga tidak terbaca lagi oleh PC. Sesuaikan dengan Socket yang ada Processor.'),
(21, 4, '40110000', 'A', '0', 'Hubungi Service Center', 'Hubungi Service Center dari Motherboard anda jika PC merupakan PC Build Up.'),
(22, 4, '40101', 'Q', '1', 'Apakah kipas PSU berputar?', 'Cek apakah kipas pada PSU berputar atau tidak'),
(23, 4, '40100', 'A', '0', 'Ganti PSU karena PSU tidak menyala', 'Ganti PSU karena PSU tidak menyala. Hal ini menyebabkan PC tidak bisa hidup karena merupakan Sumber Arus dari PC.'),
(24, 4, '401011', 'Q', '1', 'Apakah Fisik Memory ada cacat?', 'Cek apakah Memory ada goresan di kuningannya atau patah'),
(25, 4, '401010', 'A', '0', 'PSU kotor karena debu', 'PSU kotor karena debu. Debu akan menyebabkan terhambatnya kinerja dari kipas PSU pada khususnya. Sehingga membuat PSU tidak bekerja optimal.'),
(28, 4, '4010111', 'A', '1', 'Coba ganti Memory', 'Coba ganti Memory karena Memory lama ada masalah dan tidak terbaca lagi oleh PC'),
(29, 4, '4010110', 'Q', '0', 'Apakah Fisik VGA Card ada cacat?', 'Cek apakah VGA card ada masalah jika memiliki VGA Card Eksternal'),
(30, 4, '40101101', 'A', '1', 'Coba ganti VGA Card', 'Coba ganti VGA Card karena VGA Card ada masalah dan tidak terbaca lagi oleh PC atau pindahkan Kabel VGA ke VGA Internal'),
(31, 4, '40101100', 'Q', '0', 'Apakah Fisik Motherboard ada cacat?', 'Cek apakah kaki-kaki pada Motherboad ada patah atau komponen ada yang hangus dan mungkun ada bagian Motherboard yang patah'),
(32, 4, '401011001', 'A', '1', 'Coba ganti Motherboard', 'Coba ganti Motherboard karena Motherboard ada masalah sehingga tidak terbaca oleh PC. Sesuaikan dengan jumlah port dari PSU dan Socket Processor.'),
(33, 4, '401011000', 'Q', '0', 'Apakah Processor ada cacat?', 'Cek apakah kali-kali pada Processor ada yang bengkok'),
(34, 4, '4010110001', 'A', '1', 'Coba ganti Processor', 'Coba ganti Processor karena ada masalah sehingga tidak terbaca lagi oleh PC. Sesuaikan dengan Socket yang ada Processor.'),
(35, 4, '4010110000', 'A', '0', 'Hubungi Service Center', 'Hubungi Service Center dari Motherboard anda jika PC merupakan PC Build Up.');

-- --------------------------------------------------------

--
-- Table structure for table `p2`
--

CREATE TABLE `p2` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p2`
--

INSERT INTO `p2` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(2, 6, '6-', 'Q', '-', 'Apakah ada tampilan di layar/ monitor?', 'Ini merupakan pertanyaan awal'),
(4, 6, '61', 'A', '1', 'System Ready', 'Komputer/ PC dalam keadaan baik dan normal serta tidak ada permasalahan'),
(5, 6, '60', 'Q', '0', 'Apakah Kabel Power/ Kabel Data VGA terpasang sempurna?', 'Cek Kabel Power/Kabel Data VGA yang berada pada konektor Power Supply untuk Kabel Power dan Port VGA untuk Kabel Data VGA yang berada di belakang Chasing apakah sudah terpasang sempurna atau tidak'),
(6, 6, '601', 'Q', '1', 'Apakah pada Memory Longgar?', 'Cek apakah Memory terpasang longgar atau tidak'),
(7, 6, '600', 'A', '0', 'Pasang kembali Kabel Power/ Kabel Data VGA', 'Pasang kembali Kabel Power/ Kabel Data VGA yang berada di belakang Chasing'),
(8, 6, '6011', 'A', '1', 'Buka dan pasang kembali Memory', 'Buka dan pasang kembali Memory. Hal ini disebabkan karena Memory yan terpasang longgar atau pindahka ke Socket Memory yang lain jika memiliki Socket Memory lebih  dari satu.'),
(9, 6, '6010', 'Q', '0', 'Apakah Kaki/ IC Memory pada RAM kotor?', 'Cek apakah Kaki/ IC Memory pada RAM/ Memory ada tergores atau tidak'),
(10, 6, '60101', 'A', '1', 'Bersihkan kaki/ IC Memory dengan karet penghapus', 'Bersihkan kaki/ IC Memory dengan karet penghapus supaya goresan pada kaki/ IC Memory hilang.'),
(11, 6, '60100', 'A', '0', 'Ganti Memory Baru dan sesuaikan dengan slot pada Motherboard', 'Ganti Memory Baru dan sesuaikan dengan slot pada Motherboard seperti DDR2 atau DDR3.');

-- --------------------------------------------------------

--
-- Table structure for table `p3`
--

CREATE TABLE `p3` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p3`
--

INSERT INTO `p3` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 7, '7-', 'Q', '-', 'Apakah komputer berbunyi Beep 1x pendek?', 'Ini merupakan pertanyaan awal'),
(2, 7, '71', 'A', '1', 'System Ready', 'Komputer/ PC dalam keadaan baik dan normal serta tidak ada permasalahan'),
(3, 7, '70', 'Q', '0', 'Apakah  komputer berbunyi Beep 1x panjang?', 'Bunyi ini akan terdengar agak keras pada saat proses Booting PC pertama dihidupkan.'),
(5, 7, '701', 'Q', '1', 'Apakah pada Memory Longgar?', 'Cek apakah Memory terpasang longgar atau tidak'),
(6, 7, '700', 'Q', '0', 'Apakah komputer berbunyi Beep 1x panjang dan 3x pendek?', 'Bunyi ini akan terdengar agak keras pada saat proses Booting PC pertama dihidupkan.'),
(7, 7, '7011', 'A', '1', 'Buka dan pasang kembali Memory', 'Buka dan pasang kembali Memory. Hal ini disebabkan karena Memory yan terpasang longgar atau pindahka ke Socket Memory yang lain jika memiliki Socket Memory lebih dari satu.'),
(8, 7, '7010', 'Q', '0', 'Apakah Kaki/ IC Memory pada RAM kotor?', 'Cek apakah Kaki/ IC Memory pada RAM/ Memory ada tergores atau tidak'),
(9, 7, '70101', 'A', '1', 'Bersihkan kaki/ IC Memory dengan karet penghapus', 'Bersihkan kaki/ IC Memory dengan karet penghapus supaya goresan pada kaki/ IC Memory hilang.'),
(10, 7, '70100', 'A', '0', 'Ganti Memory Baru dan sesuaikan dengan slot pada Motherboard', 'Ganti Memory Baru dan sesuaikan dengan slot pada Motherboard seperti DDR2 atau DDR3.'),
(11, 7, '7001', 'Q', '1', 'Apakah pada VGA Card Longgar?', 'Cek apakah VGA Card terpasang longgar atau tidak jika PC memiliki VGA Card Eksternal.'),
(13, 7, '7000', 'Q', '0', 'Apakah komputer berbunyi Beep 1x panjang dan 2x pendek?', 'Bunyi ini akan terdengar agak keras pada saat proses Booting PC pertama dihidupkan.'),
(14, 7, '70011', 'A', '1', 'Buka dan pasang kembali VGA Card dan bersihkan Slot VGA dengan kuas', 'Buka dan pasang kembali VGA Card dan bersihkan Slot VGA dengan kuas. Hal ini disebabkan debu yang ada di dalam  Chasing.'),
(19, 7, '70010', 'Q', '0', 'Apakah Kaki/ IC Memory pada VGA Card kotor?', 'Cek apakah Kaki/ IC Memory pada VGA Card ada tergores atau tidak jika PC memiliki VGA Card Eksternal.'),
(20, 7, '700101', 'A', '1', 'Bersihkan kaki/ IC VGA Card dengan karet penghapus', 'Bersihkan kaki/ IC VGA Card dengan karet penghapus supaya goresan pada kaki/ IC VGA Card hilang  tidak jika PC memiliki VGA Card Eksternal.'),
(23, 7, '700100', 'A', '0', 'Ganti VGA Card Baru', 'Ganti VGA Card Baru dan sesuaikan dengan slot pada Motherboard jika PC memiliki VGA Card Eksternal. Bisa juga dengan pindahkan Kabel Data VGA ke VGA Onboard.'),
(24, 7, '70001', 'Q', '1', 'Apakah Kabel Power/ Kabel Data VGA terpasang sempurna?', 'Cek Kabel Power/Kabel Data VGA yang berada pada konektor Power Supply untuk Kabel Power dan Port VGA untuk Kabel Data VGA yang berada di belakang Chasing apakah sudah terpasang sempurna atau tidak.'),
(25, 7, '70000', 'Q', '0', 'Apakah komputer berbunyi Beep dengan Frekuensi Tinggi?', 'Bunyi ini akan terdengar agak keras pada saat proses Booting PC pertama dihidupkan.'),
(26, 7, '700011', 'Q', '1', 'Apakah pada VGA Card Longgar?', 'Cek apakah VGA Card terpasang longgar atau tidak  jika PC memiliki VGA Card Eksternal.'),
(27, 7, '700010', 'A', '0', 'Pasang kembali Kabel Power/ Kabel Data VGA', 'Pasang kembali Kabel Power/ Kabel Data VGA yang berada di belakang Chasing'),
(28, 7, '7000111', 'A', '1', 'Buka dan pasang kembali VGA Card dan bersihkan Slot VGA dengan kuas', 'Buka dan pasang kembali VGA Card dan bersihkan Slot VGA dengan kuas. Hal ini disebabkan debu yang ada di dalam Chasing.'),
(29, 7, '7000110', 'Q', '0', 'Apakah Kaki/ IC VGA Card pada VGA Card kotor?', 'Cek apakah Kaki/ IC VGA Card pada VGA Card ada tergores atau tidak jika PC memiliki VGA Card Eksternal.'),
(30, 7, '70001101', 'A', '1', 'Bersihkan kaki/ IC VGA Card dengan karet penghapus', 'Bersihkan kaki/ IC VGA Card dengan karet penghapus supaya goresan pada kaki/ IC VGA Card hilang.'),
(31, 7, '70001100', 'A', '0', 'Ganti VGA Card Baru', 'Ganti VGA Card Baru dan sesuaikan dengan slot pada Motherboard jika PC memiliki VGA Card Eksternal. Bisa juga dengan pindahkan Kabel Data VGA ke VGA Onboard.'),
(32, 7, '700001', 'Q', '1', 'Apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) kotor?', 'Cek apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) tertumpuk debu karena sudah lama tidak dipakai'),
(33, 7, '700000', 'Q', '0', 'Apakah komputer berbunyi Beep dengan Frekuensi Tinggi/ Rendah?', 'Bunyi ini akan terdengar agak keras pada saat proses Booting PC pertama dihidupkan.'),
(34, 7, '7000011', 'A', '1', 'Bersihkan menggunakan kuas dan Vacum Cleaner', 'Bersihkan menggunakan kuas dan Vacum Cleaner pada bagian di bawah Kipas CPU (Fan) / HAS (Heatsink Surface Area). Gunakan kompresor jika sudah parah.'),
(35, 7, '7000010', 'Q', '0', 'Apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) macet?', 'Cek apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) berputar saat menggunakan PC atau tidak'),
(36, 7, '70000101', 'A', '1', 'Bersihkan kipas CPU (Fan) / HAS (Heatsink Surface Area)', 'Buka karet dan stiker penutup bearing pada bagian belakang Kipas CPU (Fan) / HAS (Heatsink Surface Area). Beri oil/ minyak pada bagian bearing Kipas CPU (Fan) / HAS (Heatsink Surface Area) sambil kipas diputar perlahan agar oil/ minyak meresap. Setelah selesai tutup kembali dengan karet dan stiker.'),
(37, 7, '70000100', 'A', '0', 'Ganti Kipas CPU (Fan) / HAS (Heatsink Surface Area)', 'Ganti Kipas CPU (Fan) / HAS (Heatsink Surface Area) karena sudah macet aau tidak berfungsi lagi.'),
(38, 7, '7000001', 'Q', '1', 'Apakah  Processor/ CPU sudah terpasang benar?', 'Cek apakah Processor/ CPU sudah terpasang benar atau lihat pada bagian kaki-kaki pada Processor/ CPU ada patah atau tidak.'),
(39, 7, '7000000', 'A', '0', 'Ganti Processor / CPU atau Motherboard', 'Ganti Processor / CPU atau Motherboard jika memang sudah rusak.'),
(43, 7, '70000011', 'Q', '1', 'Apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) kotor?', 'Cek apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) tertumpuk debu karena sudah lama tidak dipakai'),
(44, 7, '70000010', 'A', '0', 'Buka dan pasang kembali Processor/ CPU', 'Buka dan pasang kembali Processor/ CPU mungkin saja processor terlalu panas. '),
(45, 7, '700000111', 'A', '1', 'Bersihkan menggunakan Vacum Cleaner', 'Bersihkan menggunakan kuas dan Vacum Cleaner pada bagian di bawah Kipas CPU (Fan) / HAS (Heatsink Surface Area). Gunakan kompresor jika sudah parah.'),
(46, 7, '700000110', 'Q', '0', 'Apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) macet?', 'Cek apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) berputar saat menggunakan PC atau tidak'),
(47, 7, '7000001101', 'A', '1', 'Bersihkan kipas CPU (Fan) / HAS (Heatsink Surface Area)', 'Buka karet dan stiker penutup bearing pada bagian belakang Kipas CPU (Fan) / HAS (Heatsink Surface Area). Beri oil/ minyak pada bagian bearing Kipas CPU (Fan) / HAS (Heatsink Surface Area) sambil kipas diputar perlahan agar oil/ minyak meresap. Setelah selesai tutup kembali dengan karet dan stiker.'),
(48, 7, '7000001100', 'Q', '0', 'Apakah pasta pada CPU (Fan) / HAS (Heatsink Surface Area) dan Processor/ CPU kering?', 'Cek pasta pada Processor apakah sudah kering atau tidak.'),
(49, 7, '70000011001', 'A', '1', 'Bersihkan pasta CPU (Fan) / HAS (Heatsink Surface Area)', 'Bersihkan pasta lama pada CPU (Fan) / HAS (Heatsink Surface Area) dan Processor/ CPU yang telah mengering. Beri pasta baru kembali pada Processor/ CPU'),
(50, 7, '70000011000', 'A', '0', 'Ganti Processor/ CPU dan sesuaikan dengan kompabilitas dari Motherboard', 'Coba ganti Processor karena ada masalah sehingga tidak terbaca lagi oleh PC. Sesuaikan dengan Socket yang ada Processor.');

-- --------------------------------------------------------

--
-- Table structure for table `p4`
--

CREATE TABLE `p4` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p4`
--

INSERT INTO `p4` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 8, '8-', 'Q', '-', 'Apakah komputer menampilkan text pesan “DISK BOOT FAILURE, INSERT SYSTEM DISK AND PRESS ENTER”?', 'Teks ini keluar pada proses POST(Power On Self Test). Ini merupakan pertanyaan awal.'),
(2, 8, '81', 'Q', '1', 'Apakah keluar text pesan “HARDDISK initializing” saat POST?', 'Hal ini keluar pada proses POST(Power On Self Test).'),
(3, 8, '80', 'A', '0', 'System Ready', 'Komputer/ PC dalam keadaan baik dan normal serta tidak ada permasalahan'),
(4, 8, '811', 'A', '1', 'Tunggu beberapa saat, beberapa harddisk membutuhkan waktu untuk dikenali', 'Tunggu beberapa saat, beberapa harddisk membutuhkan waktu untuk dikenali'),
(5, 8, '810', 'Q', '0', 'Apakah keluar text pesan “HARD DISK INSTALL FAILURE” saat POST?', 'Teks ini keluar pada proses POST(Power On Self Test).'),
(6, 8, '8101', 'A', '1', 'Pengendali hardisk tdak ditemukan, pasang kembali kabel data pada Harddisk secara benar', 'Pengendali hardisk tdak ditemukan, pasang kembali kabel data pada Harddisk secara benar.'),
(7, 8, '8100', 'Q', '0', 'Apakah keluar text pesan “Hard disk(s) diagnosis fail” saat POST?', 'Teks ini keluar pada proses POST(Power On Self Test).'),
(8, 8, '81001', 'A', '1', 'Satu atau lebih harddisk rusak saat proses diagnose', 'Satu atau lebih harddisk rusak saat proses diagnose jika terpasang lebih dari satu harddisk.'),
(11, 8, '81000', 'Q', '0', 'Lakukan Installasi Ulang Sistem Operasi, Apakah setelah di instalasi ulang Sistem Operasi berhasil?', 'Lakukan Installasi Ulang Sistem Operasi untuk mengecek apakah harddisk bermasalah atau tdak'),
(12, 8, '810001', 'A', '1', 'Hard disk dalam keadaan Bad Sector', 'Hard disk dalam keadaan Bad Sector. Dengan kondisi tidak  mampu lagi untuk menjadi System, hanya untuk Data Disarankan Backu data atau ganti dengan hardisk baru untuk System.'),
(13, 8, '810000', 'A', '0', 'Ganti Harddisk yang baru', 'Ganti Harddisk yang baru disebabkan harddisk tidak berfungsi lagi.');

-- --------------------------------------------------------

--
-- Table structure for table `p5`
--

CREATE TABLE `p5` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p5`
--

INSERT INTO `p5` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 9, '9-', 'Q', '-', 'Apakah komputer selalu “Safe Mode” saat Booting?', 'Ini merupakan pertanyaan awal.'),
(2, 9, '91', 'Q', '1', 'Restart Komputer, Apakah setelah restart berhasil?', 'Coba Restart PC bisa kembali normal atau tidak'),
(4, 9, '90', 'A', '0', 'System Ready', 'Komputer/ PC dalam keadaan baik dan normal serta tidak ada permasalahan'),
(5, 9, '911', 'A', '1', 'Permasalahan pada saat proses Booting', 'Ada masalah pada Prosess POST (Power On Self Test). '),
(6, 9, '910', 'Q', '0', 'Lakukan instalasi Ulang Sistem Operasi, Apakah setelah di instalasi ulang Sistem Operasi berhasil?', 'Lakukan Installasi Ulang Sistem Operasi untuk mengecek apakah harddisk bermasalah atau tdak'),
(7, 9, '9101', 'A', '1', 'Hard disk dalam keadaan Bad Sector', 'Hard disk dalam keadaan Bad Sector. Dengan kondisi tidak mampu lagi untuk menjadi System, hanya untuk Data Disarankan Backu data atau ganti dengan hardisk baru untuk System.'),
(8, 9, '9100', 'A', '0', 'Ganti Harddisk yang baru', 'Ganti Harddisk yang baru disebabkan harddisk tidak berfungsi lagi.');

-- --------------------------------------------------------

--
-- Table structure for table `p6`
--

CREATE TABLE `p6` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p6`
--

INSERT INTO `p6` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 10, '10-', 'Q', '-', 'Apakah layar/monitor gelap saat loading Sistem Operasi', 'Ini merupakan pertanyaan awal.'),
(2, 10, '101', 'A', '1', 'Setup driver dari untuk layar atau monitor tidak tepat. Lakukan Instalasi driver VGA', 'Setup driver dari untuk layar atau monitor tidak tepat. Lakukan Instalasi driver VGA'),
(3, 10, '100', 'A', '0', 'Monitor berkedip saat digunakan, Apakah monitor berkedip saat digunakan?', 'Coba diagnosis pada permasalahan Monitor berkedip saat digunakan');

-- --------------------------------------------------------

--
-- Table structure for table `p7`
--

CREATE TABLE `p7` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p7`
--

INSERT INTO `p7` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 11, '11-', 'Q', '-', 'Apakah monitor berkedip saat digunakan', 'Ini merupakan pertanyaan awal.'),
(2, 11, '111', 'A', '1', 'Setup display properties', 'Masuk ke display properties. Tekan tab setting dan advance. Kemudian klik adapter. Pilih refresh rate sesuai dengan pengguna komputer'),
(3, 11, '110', 'A', '0', 'Tampilan tiba-tiba rusak sedang komputer menjadi Hang', 'Coba diagnosis pada permasalahan Tampilan tiba-tiba rusak sedang komputer menjadi Hang');

-- --------------------------------------------------------

--
-- Table structure for table `p8`
--

CREATE TABLE `p8` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p8`
--

INSERT INTO `p8` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 12, '12-', 'Q', '-', 'Apakah  tampilan tiba-tiba rusak sadang komputer menjadi Hang?', 'Ini merupakan pertanyaan awal.'),
(2, 12, '121', 'Q', '1', 'VGA terlalu panas, Apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) kotor?', 'Cek apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) tertumpuk debu karena sudah lama tidak dipakai'),
(3, 12, '120', 'A', '0', 'Komputer sering hang, Apakah komputer sering hang?', 'Coba diagnosis pada permasalahan Komputer sering hang'),
(4, 12, '1211', 'A', '1', 'Bersihkan menggunakan Vacum Cleaner', 'Bersihkan menggunakan kuas dan Vacum Cleaner pada bagian di bawah Kipas CPU (Fan) / HAS (Heatsink Surface Area). Gunakan kompresor jika sudah parah.'),
(5, 12, '1210', 'Q', '0', 'Apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) macet?', 'Cek apakah Kipas CPU (Fan) / HAS (Heatsink Surface Area) berputar saat menggunakan PC atau tidak'),
(6, 12, '12101', 'A', '1', 'Bersihkan kipas CPU (Fan) / HAS (Heatsink Surface Area)', 'Buka karet dan stiker penutup bearing pada bagian belakang Kipas CPU (Fan) / HAS (Heatsink Surface Area). Beri oil/ minyak pada bagian bearing Kipas CPU (Fan) / HAS (Heatsink Surface Area) sambil kipas diputar perlahan agar oil/ minyak meresap. Setelah selesai tutup kembali dengan karet dan stiker'),
(7, 12, '12100', 'A', '0', 'Ganti Kipas CPU (Fan) / HAS (Heatsink Surface Area)', 'Ganti Kipas CPU (Fan) / HAS (Heatsink Surface Area). Hal ini disebabkan karena CPU (Fan) / HAS (Heatsink Surface Area) tidak berfungsi lagi.');

-- --------------------------------------------------------

--
-- Table structure for table `p9`
--

CREATE TABLE `p9` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p9`
--

INSERT INTO `p9` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 13, '13-', 'Q', '-', 'Apakah komputer sering hang?', 'Ini merupakan pertanyaan awal.'),
(2, 13, '131', 'Q', '1', 'Apakah ada software yang crash?', 'Cek apakah ada Software/ perangkat luak yang error debugnya. Hal ini mungkin disebkna oleh virus atau sedang dalam keadaan \"Not Responding\".'),
(3, 13, '130', 'A', '0', 'Komputer sering Crash, Apakah komputer sering Crash?', 'Coba diagnosis pada permasalahan Komputer sering Crash'),
(4, 13, '1311', 'A', '1', 'End Task pada Software', 'Tekan Ctrl + Alt + Del. Pilih Task Manager. Klik End Task pada program yang “Not Responding”'),
(5, 13, '1310', 'Q', '0', 'Apakah ada hardware yang mengalami konflik?', 'Cek apakah ada Hardware/ Perangkat Keras yang mengalai konflik.'),
(6, 13, '13101', 'A', '1', 'Klik “add new” hardware pada device manager', 'Klik kanan pada This PC unttuk Windows 8, 8.1 dan 10 atau Computer pada Windows 7. Pilih Manage. Kik Device Manager. Maka akan tampil Window dari Device Manager. Klik kanan pada \"Computer Name\" dan Kik \"Scan for hardware change\".  '),
(7, 13, '13101', 'Q', '1', 'Lakukan Repair Sistem Operasi, Apakah setelah direpair Sistem Operasi masing sering crash??', 'Lakukan Repair System Operasi melalui CD/DVD atau Flashdisk untuk mengecek apakah ada Software/ Perangkat Lunak yang bermasalah. '),
(8, 13, '131011', 'A', '1', 'Lakukan instalasi Ulang Sistem Operasi, Apakah setelah di instalasi ulang Sistem Operasi berhasil?', 'Lakukan Installasi Ulang Sistem Operasi untuk mengecek apakah System Operasi sedang ada masalah'),
(9, 13, '131010', 'A', '0', 'Ada software yang crash', 'Ada Software/ Peragkat Lunak yang error. Uninstall Software terebut atau bisa jadi diseakan oleh PC anda sedang ada Virus.');

-- --------------------------------------------------------

--
-- Table structure for table `p10`
--

CREATE TABLE `p10` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p10`
--

INSERT INTO `p10` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 14, '14-', 'Q', '-', 'Apakah komputer sering Crash?', 'Ini merupakan pertanyaan awal'),
(3, 14, '141', 'Q', '1', 'Apakah koneksi kabel power tidak longgar?', 'Cek kabel power yang berada pada konektor Power Supply yang berada di belakang Chasing apakah longgar atau tidak'),
(4, 14, '140', 'A', '0', 'System Ready', 'Komputer/ PC dalam keadaan baik dan normal serta tidak ada permasalahan'),
(5, 14, '1411', 'Q', '1', 'Apakah Power Supply Unit (PSU) oke?', 'Cek apakah PSU hidup atau tidak'),
(6, 14, '1410', 'A', '0', 'Pasang kembali kabel power dan ganti kabel power', 'Pasang kembali kabel power karena longgar dan ganti kabel power lain jika belum berhasil juga'),
(7, 14, '14111', 'Q', '1', 'Apakah Fisik Memory ada cacat?', 'Cek apakah Memory ada goresan di kuningannya atau patah'),
(8, 14, '14110', 'Q', '0', 'Apakah lampu di indikator di PSU atau Motherboard menyala?', 'Cek apakah lampu indikator PSU menyala jika memiliki lampu indikator dan cek juga lampu indikator pada Motherboard hidup atau mati pertanda arus masuk dari PSU ke Motherboard'),
(9, 14, '141111', 'A', '1', 'Coba ganti Memory', 'Coba ganti Memory karena Memory lama ada masalah dan tidak terbaca lagi oleh PC'),
(10, 14, '141110', 'Q', '0', 'Apakah Fisik VGA Card ada cacat?', 'Cek apakah VGA card ada masalah jika memiliki VGA Card Eksternal'),
(11, 14, '1411101', 'A', '1', 'Coba ganti VGA Card', 'Coba ganti VGA Card karena VGA Card ada masalah dan tidak terbaca lagi oleh PC atau pindahkan Kabel VGA ke VGA Internal'),
(12, 14, '1411100', 'Q', '0', 'Apakah Fisik Motherboard ada cacat?', 'Cek apakah kaki-kaki pada Motherboad ada patah atau komponen ada yang hangus dan mungkun ada bagian Motherboard yang patah'),
(13, 14, '14111001', 'A', '1', 'Coba ganti Motherboard', 'Coba ganti Motherboard karena Motherboard ada masalah sehingga tidak terbaca oleh PC. Sesuaikan dengan jumlah port dari PSU dan Socket Processor.'),
(14, 14, '14111000', 'Q', '0', 'Apakah Processor ada cacat?', 'Cek apakah kaki-kaki pada Processor ada yang bengkok'),
(15, 14, '141110001', 'A', '1', 'Coba ganti Processor', 'Coba ganti Processor karena ada masalah sehingga tidak terbaca lagi oleh PC. Sesuaikan dengan Socket yang ada Processor.'),
(16, 14, '141110000', 'A', '0', 'Hubungi Service Center', 'Hubungi Service Center dari Motherboard anda jika PC merupakan PC Build Up.'),
(17, 14, '141101', 'Q', '1', 'Apakah kipas PSU berputar?', 'Cek apakah kipas pada PSU berputar atau tidak'),
(18, 14, '141100', 'A', '0', 'Ganti PSU karena PSU tidak menyala', 'Ganti PSU karena PSU tidak menyala. Hal ini menyebabkan PC tidak bisa hidup karena merupakan Sumber Arus dari PC.'),
(19, 14, '1411011', 'Q', '1', 'Apakah Fisik Memory ada cacat?', 'Cek apakah Memory ada goresan di kuningannya atau patah'),
(20, 14, '1411010', 'A', '0', 'PSU kotor karena debu', 'PSU kotor karena debu. Debu akan menyebabkan terhambatnya kinerja dari kipas PSU pada khususnya. Sehingga membuat PSU tidak bekerja optimal.'),
(21, 14, '14110111', 'A', '1', 'Coba ganti Memory', 'Coba ganti Memory karena Memory lama ada masalah dan tidak terbaca lagi oleh PC'),
(22, 14, '14110110', 'Q', '0', 'Apakah Fisik VGA Card ada cacat?', 'Cek apakah VGA card ada masalah jika memiliki VGA Card Eksternal'),
(23, 14, '141101101', 'A', '1', 'Coba ganti VGA Card', 'Coba ganti VGA Card karena VGA Card ada masalah dan tidak terbaca lagi oleh PC atau pindahkan Kabel VGA ke VGA Internal'),
(24, 14, '141101100', 'Q', '0', 'Apakah Fisik Motherboard ada cacat?', 'Cek apakah kaki-kaki pada Motherboad ada patah atau komponen ada yang hangus dan mungkun ada bagian Motherboard yang patah'),
(25, 14, '1411011001', 'A', '1', 'Coba ganti Motherboard', 'Coba ganti Motherboard karena Motherboard ada masalah sehingga tidak terbaca oleh PC. Sesuaikan dengan jumlah port dari PSU dan Socket Processor.'),
(26, 14, '1411011001', 'Q', '1', 'Apakah Processor ada cacat?', 'Cek apakah kali-kali pada Processor ada yang bengkok'),
(27, 14, '14110110011', 'A', '1', 'Coba ganti Processor', 'Coba ganti Processor karena ada masalah sehingga tidak terbaca lagi oleh PC. Sesuaikan dengan Socket yang ada Processor.'),
(28, 14, '14110110010', 'A', '0', 'Hubungi Service Center', 'Hubungi Service Center dari Motherboard anda jika PC merupakan PC Build Up.');

-- --------------------------------------------------------

--
-- Table structure for table `p11`
--

CREATE TABLE `p11` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p11`
--

INSERT INTO `p11` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 15, '15-', 'Q', '-', 'Apakah Sound Card terdeteksi?', 'Ini merupakan pertanyaan awal.'),
(3, 15, '151', 'A', '1', 'Cek mouse berfungsi pada komputer, Apakah mouse berfungsi pada komputer', 'Coba diagnosis pada permasalahan mouse tidak berfungsi pada komputer'),
(4, 15, '150', 'Q', '0', 'Apakah pada  Device Manager sudah ada?', 'Cek apakah pada Device Manager sudah terdeteksi atau belum. Cara membuka Device Manager:\r\n\r\n1. Klik kanan pada This PC unttuk Windows 8, 8.1 dan 10 atau Computer pada Windows 7. Pilih Manage. \r\n\r\n2. Kik Device Manager. Maka akan tampil Window dari Device Manager. '),
(5, 15, '1501', 'A', '1', 'Update driver Sound Card', 'Klik kanan pada This PC unttuk Windows 8, 8.1 dan 10 atau Computer pada Windows 7. Pilih Manage. Kik Device Manager. Maka akan tampil Window dari Device Manager. Cek pada \"Sound, video, and game controller\" apakah ada tanda seru (!). Kemudian Klik Kanan dan Klik Update Driver Software.'),
(6, 15, '1500', 'Q', '0', 'Install driver Sound Card, Apakah masih belum keluar suara tetapi sound card sudah terdeteksi?', 'Install lagi Driver dari Sound Card dari Software Drivernya. Cek apakah masih belum keluar suara atau belum.'),
(7, 15, '15001', 'Q', '1', 'Apakah tombol speaker ter-mute?', 'Cek apakah tanda Sound yang terletak di kanan bawah Task Bar ada tanda silang pada pada Icon Speaker.'),
(8, 15, '15000', 'A', '0', 'Sound card sudah terdeteksi', 'Sound card sudah terdeteksi'),
(9, 15, '150011', 'A', '1', 'Hilangkan tanda mute pada speaker', 'Hilangkan tanda mute pada speaker. Dengan cara Klik Icon  Speker pada Kanan Bawah Task Bar dan hilangkan tanda checklis pada Mute. Kalau pada Leptop/ Notebook bisa gunakan kombinasi tombol Fn + Function atau Fn + Alt + Function sesuai dengan tipe Leptop/ Notebook.  '),
(10, 15, '150010', 'Q', '0', 'Apakah konektor ada yang patah?', 'Cek apakah ada konektor Jack 3,5 nya ada patah atau tidak.'),
(11, 15, '1500101', 'A', '1', 'Ganti konektor dengan tipe yang sama', 'Ganti konektor dengan cara memasang Sound Card Offboard Kemungkinan ada masalah pada Sound Card Onboard.'),
(12, 15, '1500100', 'A', '0', 'Update atau install ulang driver sound card', 'Update atau install ulang driver sound card. Melalui Software Driver Sound Card atau Device Manager. Bisa juga dengan melalui online. Caranya dengan cara:\r\n\r\n1. Klik kanan pada This PC unttuk Windows 8, 8.1 dan 10 atau Computer pada Windows 7. \r\n\r\n2. Pilih Manage. \r\n\r\n3. Kik Device Manager. Maka akan tampil Window dari Device Manager. \r\n\r\n4. Cek pada \"Sound, video, and game controller\" apakah ada tanda seru (!). \r\n\r\n5. Kemudian Klik Kanan dan Klik Update Driver Software.\r\n\r\n6. Klik \"Search automatically for updated driver software\" untuk memcari file driver secara otomatis baik offline maupun onlne.\r\n\r\n7. Klik \"Browse my computer for driver software\". Kemudian Klik \"Browse\" untuk memcari letak drivernya.');

-- --------------------------------------------------------

--
-- Table structure for table `p12`
--

CREATE TABLE `p12` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p12`
--

INSERT INTO `p12` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 16, '16-', 'A', '-', 'Apakah mouse berfungsi pada komputer?', 'Ini merupakan pertanyaan awal.'),
(2, 15, '151', 'A', '1', 'Cek keyboard berfungsi pada komputer, Apakah keyboard berfungsi pada komputer?', 'Coba diagnosis pada permasalahan keyboard tidak berfungsi pada komputer'),
(3, 16, '160', 'Q', '0', 'Apakah mouse sudah terpasang dengan benar?', 'Cek apakah mouse sudah terpasang dengan benar khususnya pada port PS2'),
(4, 16, '1601', 'Q', '1', 'Apakah kabel pada mouse tidak ada yang putus', 'Cek apakah kabel mouse tidak ada yang putus atau terbuka'),
(5, 16, '16011', 'Q', '1', 'Ganti mouse yang baru, Apakah  ganti mouse yang baru masih tidak berfungsi?', 'Ganti mode yang baru atau yang lain. Cek apakah sudah berfungsi atau belum'),
(6, 16, '160', 'A', '0', 'Cek port di Motherboard', 'Coba cek port di Motherboard ada masalah atau tidak'),
(7, 16, '160111', 'Q', '1', 'Ganti dengan port USB, Apakah ganti dengan port USB masih tidak berfungsi?', 'Coba ganti dengan mouse Port USB jika masih belum juga berfungsi'),
(8, 16, '1601111', 'Q', '1', 'Repair Sistem Operasi, Apakah setelah di repair masih tidak berfungsi?', 'Lakukan Repair System Operasi melalui CD/DVD atau Flashdisk untuk mengecek apakah tidak berfungsi juga.'),
(9, 16, '1601110', 'A', '0', 'Ada kesalahan pada Port PS2 di Motherboard', 'Ada kesalahan pada Port PS2 di Motherboard. Coba gunakan mouse dengan port USB.'),
(10, 16, '16011111', 'A', '1', 'Lakukan Instalasi Sistem Operasi', 'Lakukan Installasi Ulang Sistem Operasi untuk mengecek apakah port masih bermaslah atau tidak'),
(11, 16, '16011110', 'A', '0', 'Ada software yang crash', 'Ada Software/ Peragkat Lunak yang error. Uninstall Driver terebut atau bisa jadi diseakan oleh PC anda sedang ada Virus. Dengan cara:\r\n\r\n1. Klik kanan pada This PC unttuk Windows 8, 8.1 dan 10 atau Computer pada Windows 7. Pilih Manage. \r\n\r\n2. Kik Device Manager. Maka akan tampil Window dari Device Manager. \r\n\r\n3. Pilih Mouse yang sedang terpasang pada \"Mice and Pointing Device\". Klik kanan dan Kik \"Uninstall\".\r\n\r\n4. Kilik OK');

-- --------------------------------------------------------

--
-- Table structure for table `p13`
--

CREATE TABLE `p13` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p13`
--

INSERT INTO `p13` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(3, 17, '17-', 'Q', '-', 'Apakah keyboard berfungsi pada komputer?', 'Ini merupakan pertanyaan awal.'),
(4, 17, '171', 'A', '1', 'Cek semua fungsi tombol keyboard dalam keadaan baik.', 'Coba diagnosis pada permasalahan tidak semua fungsi tombol keyboard dalam keadaan baik'),
(5, 17, '170', 'Q', '0', 'Apakah keyboard sudah terpasang dengan benar?', 'Cek apakah keyboard sudah terpasang dengan benar khususnya pada port PS2'),
(6, 17, '1701', 'Q', '1', 'Apakah kabel pada keyboard tidak ada yang putus?', 'Cek apakah kabel keyboard tidak ada yang putus atau terbuka'),
(7, 17, '1700', 'A', '0', 'Buka dan pasang kembali pada port di Motherboard', 'Buka dan pasang kembali pada port di Motherboard. Mungkin saja pemasangannya longgar.'),
(8, 17, '17011', 'Q', '1', 'Ganti keyboard yang baru, Apakah  ganti keyboard yang baru masih tidak berfungsi?', 'Ganti mode yang baru atau yang lain. Cek apakah sudah berfungsi atau belum'),
(9, 17, '17010', 'A', '0', 'Cek port di Motherboard', 'Coba cek port di Motherboard ada masalah atau tidak'),
(10, 17, '170111', 'Q', '1', 'Ganti dengan port USB, Apakah ganti dengan port USB masih tidak berfungsi?', 'Coba ganti dengan mouse Port USB jika masih belum juga berfungsi'),
(11, 17, '170110', 'A', '0', 'Ada masalah pada port di Motherboard', 'Ada kesalahan pada Port PS2 di Motherboard. Coba gunakan mouse dengan port USB.'),
(12, 17, '1701111', 'Q', '1', 'Repair Sistem Operasi, Apakah setelah di repair masih tidak berfungsi?', 'Lakukan Repair System Operasi melalui CD/DVD atau Flashdisk untuk mengecek apakah tidak berfungsi juga.'),
(13, 17, '1701110', 'A', '0', 'Ada kesalahan pada Port PS2 di Motherboard', 'Ada kesalahan pada Port PS2 di Motherboard. Coba gunakan mouse dengan port USB.'),
(14, 17, '17011111', 'A', '1', 'Lakukan Instalasi Sistem Operasi', 'Lakukan Installasi Ulang Sistem Operasi untuk mengecek apakah port masih bermaslah atau tidak'),
(15, 17, '17011110', 'A', '0', 'Ada software yang crash', 'Ada Software/ Peragkat Lunak yang error. Uninstall Driver terebut atau bisa jadi diseakan oleh PC anda sedang ada Virus. Dengan cara:\r\n\r\n1. Klik kanan pada This PC unttuk Windows 8, 8.1 dan 10 atau Computer pada Windows 7. Pilih Manage. \r\n\r\n2. Kik Device Manager. Maka akan tampil Window dari Device Manager. \r\n\r\n3. Pilih Keyboard yang sedang terpasang pada \"keyboard\". Klik kanan dan Kik \"Uninstall\".\r\n\r\n4. Kilik OK');

-- --------------------------------------------------------

--
-- Table structure for table `p14`
--

CREATE TABLE `p14` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p14`
--

INSERT INTO `p14` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 18, '18-', 'Q', '-', 'Apakah semua fungsi tombol keyboard dalam keadaan baik?', 'Ini merupakan pertanyaan awal.'),
(2, 18, '181', 'A', '1', 'System Ready', 'Komputer/ PC dalam keadaan baik dan normal serta tidak ada permasalahan'),
(3, 18, '180', 'A', '0', 'Adanya debu jalur penekanan karakter', 'Adanya debu jalur penekanan karakter pada keyboard. Bersihkan dengan kuas. Jika masih belum juga berfungsi bisa jadi adanya kerusaka pada satu jalur keyboard sehingga tidak berfungsinya semua tombol.');

-- --------------------------------------------------------

--
-- Table structure for table `p15`
--

CREATE TABLE `p15` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p15`
--

INSERT INTO `p15` (`id`, `id_masalah`, `kode`, `tipe`, `jawaban`, `konten`, `detail`) VALUES
(1, 20, '20-', 'Q', '-', 'Apakah bisa masuk BIOS dan melakukan Booting System Operasi?', 'Ini merupakan pertanyaan awal.'),
(2, 20, '201', 'A', '1', 'System Ready dan lanjutkan Proses Instalasi', 'Komputer/ PC dalam keadaan baik dan normal serta tidak ada permasalahan dan bisa lanjutkan proses installasi System Operasi.'),
(3, 20, '200', 'Q', '0', 'Apakah pada saat masuk BIOS meminta password?', 'Cek apakah saat membuka BIOS (Basic Input Ouput System) meminta password atau tidak'),
(4, 20, '2001', 'A', '1', 'Buka Baterai CMOS pada motherboard dan hidupkan kembali', 'Buka Baterai CMOS pada motherboard dan hidupkan kembali untuk mereset BIOS (Basic Input Ouput System).'),
(5, 20, '2000', 'Q', '0', 'Apakah masih ada password?', 'Cek apakah masih ada password atau tidak saat membuka BIOS (Basic Input Ouput System).'),
(6, 20, '20001', 'A', '1', 'Cari jumper clear password dan hidupkan kembali', 'Cari jumper clear password pada Motherboard dan hidupkan kembali untuk mereset password pada BIOS (Basic Input Ouput System).'),
(7, 20, '20000', 'Q', '0', 'Apakah jam, tanggal dan setting BIOS selalu berubah?', 'Cek apakah waktu berupa jam dan tanggal pada PC selalu berubah walaupun sudah di atur.'),
(8, 20, '200001', 'A', '1', 'Baterai CMOS sudah lemah. Ganti Baterai CMOS', 'Baterai CMOS sudah lemah. Ganti Baterai CMOS sehingga waktu selalu berubah-berubah.'),
(9, 20, '200000', 'A', '0', 'Pilh boot untuk melakakukan installasi ulang Sistem Operasi', 'Pilh boot untuk melakakukan installasi ulang Sistem Operasi seperti CD/DVD atau Flashdisk. Kalau tidak menemukan USB HDD cari \"Hardisk Priority\" khusus untuk jika menginstalasi menggunakan Flashdisk.');

-- --------------------------------------------------------

--
-- Table structure for table `p16`
--

CREATE TABLE `p16` (
  `id` int(3) NOT NULL,
  `id_masalah` int(3) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tipe` varchar(1) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `konten` varchar(100) DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pakar`
--

CREATE TABLE `pakar` (
  `id` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tentang` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakar`
--

INSERT INTO `pakar` (`id`, `nama`, `username`, `password`, `tentang`, `photo`, `tanggal`) VALUES
(2, 'Andri Eka Putra', '4ndr3p', '281356906352b49f8c02a8caa48f2111', 'Seorang staf pengajar SMK (Sekolah menengah kejuruan pada kompetensi keahlian Teknik Komputer dan Jaringan.', 'Blog.png', '2018-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `permasalahan`
--

CREATE TABLE `permasalahan` (
  `id` int(3) NOT NULL,
  `kode` varchar(3) NOT NULL,
  `permasalahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permasalahan`
--

INSERT INTO `permasalahan` (`id`, `kode`, `permasalahan`) VALUES
(4, 'p1', 'Komputer Tidak Hidup'),
(6, 'p2', 'Tidak ada tampilan di layar/ monitor'),
(7, 'p3', 'Komputer tidak ada berbunyi Beep 1x pendek'),
(8, 'p4', 'Komputer menampilkan text pesan “DISK BOOT FAILURE, INSERT SYSTEM DISK AND PRESS ENTER”'),
(9, 'p5', 'komputer selalu “Safe Mode” saat Booting'),
(10, 'p6', 'Layar/monitor gelap saat loading Sistem Operasi'),
(11, 'p7', 'Monitor berkedip saat digunakan'),
(12, 'p8', 'Tampilan tiba-tiba rusak sedang komputer menjadi Hang'),
(13, 'p9', 'Komputer sering hang'),
(14, 'p10', 'Komputer sering Crash'),
(15, 'p11', 'Sound Card tidak terdeteksi'),
(16, 'p12', 'Mouse tidak berfungsi pada komputer'),
(17, 'p13', 'Keyboard tidak berfungsi pada komputer'),
(18, 'p14', 'Tidak semua fungsi tombol keyboard dalam keadaan baik'),
(20, 'p15', 'Tidak bisa masuk BIOS untuk melakukan Installasi Ulang Sistem Operasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '200ceb26807d6bf99fd6f4f0d1ca54d4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_blog` (`id_blog`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p1`
--
ALTER TABLE `p1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p2`
--
ALTER TABLE `p2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p3`
--
ALTER TABLE `p3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p4`
--
ALTER TABLE `p4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p5`
--
ALTER TABLE `p5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p6`
--
ALTER TABLE `p6`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p7`
--
ALTER TABLE `p7`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p8`
--
ALTER TABLE `p8`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p9`
--
ALTER TABLE `p9`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p10`
--
ALTER TABLE `p10`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p11`
--
ALTER TABLE `p11`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p12`
--
ALTER TABLE `p12`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p13`
--
ALTER TABLE `p13`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p14`
--
ALTER TABLE `p14`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p15`
--
ALTER TABLE `p15`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `p16`
--
ALTER TABLE `p16`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_masalah` (`id_masalah`);

--
-- Indexes for table `pakar`
--
ALTER TABLE `pakar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permasalahan`
--
ALTER TABLE `permasalahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `p1`
--
ALTER TABLE `p1`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `p2`
--
ALTER TABLE `p2`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `p3`
--
ALTER TABLE `p3`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `p4`
--
ALTER TABLE `p4`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `p5`
--
ALTER TABLE `p5`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p6`
--
ALTER TABLE `p6`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p7`
--
ALTER TABLE `p7`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p8`
--
ALTER TABLE `p8`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `p9`
--
ALTER TABLE `p9`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `p10`
--
ALTER TABLE `p10`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `p11`
--
ALTER TABLE `p11`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `p12`
--
ALTER TABLE `p12`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `p13`
--
ALTER TABLE `p13`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `p14`
--
ALTER TABLE `p14`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p15`
--
ALTER TABLE `p15`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `p16`
--
ALTER TABLE `p16`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakar`
--
ALTER TABLE `pakar`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permasalahan`
--
ALTER TABLE `permasalahan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p1`
--
ALTER TABLE `p1`
  ADD CONSTRAINT `p1_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p2`
--
ALTER TABLE `p2`
  ADD CONSTRAINT `p2_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p3`
--
ALTER TABLE `p3`
  ADD CONSTRAINT `p3_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p4`
--
ALTER TABLE `p4`
  ADD CONSTRAINT `p4_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p5`
--
ALTER TABLE `p5`
  ADD CONSTRAINT `p5_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p6`
--
ALTER TABLE `p6`
  ADD CONSTRAINT `p6_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p7`
--
ALTER TABLE `p7`
  ADD CONSTRAINT `p7_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p8`
--
ALTER TABLE `p8`
  ADD CONSTRAINT `p8_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p9`
--
ALTER TABLE `p9`
  ADD CONSTRAINT `p9_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p10`
--
ALTER TABLE `p10`
  ADD CONSTRAINT `p10_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p11`
--
ALTER TABLE `p11`
  ADD CONSTRAINT `p11_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p12`
--
ALTER TABLE `p12`
  ADD CONSTRAINT `p12_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p13`
--
ALTER TABLE `p13`
  ADD CONSTRAINT `p13_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p14`
--
ALTER TABLE `p14`
  ADD CONSTRAINT `p14_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p15`
--
ALTER TABLE `p15`
  ADD CONSTRAINT `p15_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p16`
--
ALTER TABLE `p16`
  ADD CONSTRAINT `p16_ibfk_1` FOREIGN KEY (`id_masalah`) REFERENCES `permasalahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
