-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 05:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `id_alumni` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `keterangan` text NOT NULL,
  `keterangan_lanjut` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`id_alumni`, `nama`, `jenis_kelamin`, `keterangan`, `keterangan_lanjut`, `foto`) VALUES
(5, 'Carli Wiranata', 'Laki-laki', 'Telkom Indonesia merupakan perusahaan telekomunikasi terkemuka di Indonesia. Banyak alumni dari berbagai perguruan tinggi di Indonesia yang bekerja di Telkom Indonesia, baik sebagai engineer, manajer, analis, atau dalam peran lainnya.', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px;\">Bekerja di Telkom Indonesia bisa menjadi pilihan menarik bagi para lulusan yang memiliki minat dalam teknologi informasi, teknik telekomunikasi, manajemen, dan bidang terkait lainnya. Selain itu, Telkom Indonesia juga memiliki berbagai program pengembangan karir dan pelatihan untuk karyawan, sehingga para alumni memiliki kesempatan untuk terus mengembangkan keterampilan mereka selama bekerja di perusahaan tersebut.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px 0px;\">Bagi para alumni yang tertarik untuk bekerja di Telkom Indonesia, disarankan untuk memantau lowongan pekerjaan yang tersedia di situs web resmi perusahaan atau melalui platform pencarian kerja online. Mendaftar ke program magang atau pelatihan juga bisa menjadi langkah awal yang baik untuk memperoleh pengalaman kerja di industri telekomunikasi.</p>', 'galeri-2.jpeg'),
(6, 'William', 'Laki-laki', 'Bekerja di Telkom Indonesia bisa menjadi pilihan menarik bagi para lulusan yang memiliki minat dalam teknologi informasi, teknik telekomunikasi, manajemen, dan bidang terkait lainnya.', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px;\">Telkom Indonesia merupakan perusahaan telekomunikasi terkemuka di Indonesia. Banyak alumni dari berbagai perguruan tinggi di Indonesia yang bekerja di Telkom Indonesia, baik sebagai engineer, manajer, analis, atau dalam peran lainnya. Mereka biasanya terlibat dalam pengembangan infrastruktur telekomunikasi, layanan internet, layanan komunikasi korporat, dan berbagai aspek lain dari industri telekomunikasi.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px;\">Bekerja di Telkom Indonesia bisa menjadi pilihan menarik bagi para lulusan yang memiliki minat dalam teknologi informasi, teknik telekomunikasi, manajemen, dan bidang terkait lainnya. Selain itu, Telkom Indonesia juga memiliki berbagai program pengembangan karir dan pelatihan untuk karyawan, sehingga para alumni memiliki kesempatan untuk terus mengembangkan keterampilan mereka selama bekerja di perusahaan tersebut.</p>', 'prof-dwikorita.jpg'),
(7, 'Fikri Haikal Purba', 'Laki-laki', 'Bagi para alumni yang tertarik untuk bekerja di Telkom Indonesia, disarankan untuk memantau lowongan pekerjaan yang tersedia di situs web resmi perusahaan atau melalui platform pencarian kerja online.', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px;\">Telkom Indonesia merupakan perusahaan telekomunikasi terkemuka di Indonesia. Banyak alumni dari berbagai perguruan tinggi di Indonesia yang bekerja di Telkom Indonesia, baik sebagai engineer, manajer, analis, atau dalam peran lainnya. Mereka biasanya terlibat dalam pengembangan infrastruktur telekomunikasi, layanan internet, layanan komunikasi korporat, dan berbagai aspek lain dari industri telekomunikasi.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px;\">Bekerja di Telkom Indonesia bisa menjadi pilihan menarik bagi para lulusan yang memiliki minat dalam teknologi informasi, teknik telekomunikasi, manajemen, dan bidang terkait lainnya. Selain itu, Telkom Indonesia juga memiliki berbagai program pengembangan karir dan pelatihan untuk karyawan, sehingga para alumni memiliki kesempatan untuk terus mengembangkan keterampilan mereka selama bekerja di perusahaan tersebut.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px 0px;\">Bagi para alumni yang tertarik untuk bekerja di Telkom Indonesia, disarankan untuk memantau lowongan pekerjaan yang tersedia di situs web resmi perusahaan atau melalui platform pencarian kerja online. Mendaftar ke program magang atau pelatihan juga bisa menjadi langkah awal yang baik untuk memperoleh pengalaman kerja di industri telekomunikasi.</p>', 'foto-guru-1.jpg'),
(8, 'admin', 'Laki-laki', 'Bekerja di Telkom Indonesia bisa menjadi pilihan menarik bagi para lulusan yang memiliki minat dalam teknologi informasi, teknik telekomunikasi, manajemen, dan bidang terkait lainnya.', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px;\">Bekerja di Telkom Indonesia bisa menjadi pilihan menarik bagi para lulusan yang memiliki minat dalam teknologi informasi, teknik telekomunikasi, manajemen, dan bidang terkait lainnya. Selain itu, Telkom Indonesia juga memiliki berbagai program pengembangan karir dan pelatihan untuk karyawan, sehingga para alumni memiliki kesempatan untuk terus mengembangkan keterampilan mereka selama bekerja di perusahaan tersebut.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px 0px;\">Bagi para alumni yang tertarik untuk bekerja di Telkom Indonesia, disarankan untuk memantau lowongan pekerjaan yang tersedia di situs web resmi perusahaan atau melalui platform pencarian kerja online. Mendaftar ke program magang atau pelatihan juga bisa menjadi langkah awal yang baik untuk memperoleh pengalaman kerja di industri telekomunikasi.</p>', 'galeri-21.jpeg'),
(9, 'William', 'Laki-laki', 'Lomba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.', '<p style=\"text-align: justify; \"><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">K</span>eberhasilan dalam Lomba LKS tidak hanya mengukur kemampuan siswa dalam bidang akademis, tetapi juga kemampuan mereka untuk berkolaborasi, berkomunikasi, dan menyelesaikan tugas-tugas praktis dalam batas waktu yang ditentukan. Lomba semacam ini juga memberikan kesempatan bagi siswa untuk menunjukkan potensi dan keterampilan mereka kepada dunia industri dan masyarakat umum.<br></p>', 'prof-dwikorita1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id_banner`, `judul`, `keterangan`, `foto`) VALUES
(1, 'Selamat Datang di Website Resmi SMKN 1 Galang', 'Selamat bergabung di komunitas pendidikan kami yang penuh inspirasi dan prestasi. Di SMKN 1 Galang, kami menghadirkan lingkungan belajar yang berkualitas dan berpengalaman untuk membantu siswa meraih potensi terbaik mereka. Kami menyediakan berbagai program pendidikan yang berag', 'banner-siswa.jpg'),
(3, 'Selamat Datang di Website Resmi SMKN 1 Galang!', 'Kami dengan bangga menyambut Anda di dunia daring kami, tempat di mana pembelajaran bertemu dengan inovasi. Di SMKN 1 Galang, kami berkomitmen untuk memberikan pendidikan berkualitas tinggi yang menginspirasi dan membantu siswa mencapai potensi terbaik mereka.', 'banner-siswa1.jpg'),
(4, 'Selamat Datang di Website Resmi SMKN 1 Galang!', 'Kami dengan bangga menyambut Anda di dunia daring kami, tempat di mana pembelajaran bertemu dengan inovasi. Di SMKN 1 Galang, kami berkomitmen untuk memberikan pendidikan berkualitas tinggi yang menginspirasi dan membantu siswa mencapai potensi terbaik mereka.', 'banner-siswa2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `keterangan_lanjut` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `tanggal`, `keterangan`, `keterangan_lanjut`, `foto`) VALUES
(8, 'Lomba LKS Teknik Komputer dan Jaringan (TKJ)', '2024-03-01', 'Lomba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px;\">Lomba LKS (Lomba Kompetensi Siswa) SMK (Sekolah Menengah Kejuruan) tingkat provinsi adalah kompetisi yang diadakan untuk menguji kemampuan siswa dalam berbagai bidang keahlian sesuai dengan program studi yang mereka ambil di SMK. Biasanya, lomba ini mencakup beragam kategori seperti teknologi, bisnis, kejuruan, dan lain-lain. Peserta dari setiap sekolah akan bersaing dalam berbagai tes praktis dan teoritis yang relevan dengan bidang keahlian mereka.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px;\">Lomba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px 0px;\">Keberhasilan dalam Lomba LKS tidak hanya mengukur kemampuan siswa dalam bidang akademis, tetapi juga kemampuan mereka untuk berkolaborasi, berkomunikasi, dan menyelesaikan tugas-tugas praktis dalam batas waktu yang ditentukan. Lomba semacam ini juga memberikan kesempatan bagi siswa untuk menunjukkan potensi dan keterampilan mereka kepada dunia industri dan masyarakat umum.</p>', 'juara-olimpiade.jpeg'),
(9, 'Lomba LKS Rekayasa Perangkat Lunak (RPL)', '2024-03-15', 'Lomba LKS (Lomba Kompetensi Siswa) SMK (Sekolah Menengah Kejuruan) tingkat provinsi adalah kompetisi yang diadakan untuk menguji kemampuan siswa dalam berbagai bidang keahlian sesuai dengan program studi yang mereka ambil di SMK.', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px;\">Lomba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px 0px;\">Keberhasilan dalam Lomba LKS tidak hanya mengukur kemampuan siswa dalam bidang akademis, tetapi juga kemampuan mereka untuk berkolaborasi, berkomunikasi, dan menyelesaikan tugas-tugas praktis dalam batas waktu yang ditentukan. Lomba semacam ini juga memberikan kesempatan bagi siswa untuk menunjukkan potensi dan keterampilan mereka kepada dunia industri dan masyarakat umum.</p>', 'galeri-2.jpeg'),
(11, 'Lomba LKS Teknik Komputer dan Jaringan (TKJ)', '2024-03-01', 'Lomba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia. dwdadasa', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px;\">Lomba LKS (Lomba Kompetensi Siswa) SMK (Sekolah Menengah Kejuruan) tingkat provinsi adalah kompetisi yang diadakan untuk menguji kemampuan siswa dalam berbagai bidang keahlian sesuai dengan program studi yang mereka ambil di SMK. Biasanya, lomba ini mencakup beragam kategori seperti teknologi, bisnis, kejuruan, dan lain-lain. Peserta dari setiap sekolah akan bersaing dalam berbagai tes praktis dan teoritis yang relevan dengan bidang keahlian mereka.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px;\">Lomba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px 0px;\">Keberhasilan dalam Lomba LKS tidak hanya mengukur kemampuan siswa dalam bidang akademis, tetapi juga kemampuan mereka untuk berkolaborasi, berkomunikasi, dan menyelesaikan tugas-tugas praktis dalam batas waktu yang ditentukan. Lomba semacam ini juga memberikan kesempatan bagi siswa untuk menunjukkan potensi dan keterampilan mereka kepada dunia industri dan masyarakat umum.</p>', 'juara-olimpiade1.jpeg'),
(12, 'Lomba LKS Teknik Komputer dan Jaringan (TKJ)', '2024-03-15', 'Siswa TKJ Medan menunjukkan keunggulan dalam Lomba Kompetensi Siswa (LKS). Dengan keterampilan di bidang Teknik Komputer dan Jaringan (TKJ), mereka berhasil meraih prestasi gemilang di tingkat Sumatera Utara. Kemenangan ini mencerminkan dedikasi dan kerja keras siswa TKJ Medan.', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px;\">Lomba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px 0px;\">Keberhasilan dalam Lomba LKS tidak hanya mengukur kemampuan siswa dalam bidang akademis, tetapi juga kemampuan mereka untuk berkolaborasi, berkomunikasi, dan menyelesaikan tugas-tugas praktis dalam batas waktu yang ditentukan. Lomba semacam ini juga memberikan kesempatan bagi siswa untuk menunjukkan potensi dan keterampilan mereka kepada dunia industri dan masyarakat umum.</p>', 'galeri-21.jpeg'),
(13, 'Lomba LKS Teknik Komputer dan Jaringan (TKJ) 2024', '2024-12-15', 'Siswa TKJ Medan menunjukkan keunggulan dalam Lomba Kompetensi Siswa (LKS). Dengan keterampilan di bidang Teknik Komputer dan Jaringan (TKJ), mereka berhasil meraih prestasi gemilang di tingkat Sumatera Utara. Kemenangan ini mencerminkan dedikasi dan kerja keras siswa TKJ Medan.', '<p style=\"text-align: justify; \">Siswa TKJ Medan menunjukkan keunggulan dalam Lomba Kompetensi Siswa (LKS). Dengan keterampilan di bidang Teknik Komputer dan Jaringan (TKJ), mereka berhasil meraih prestasi gemilang di tingkat Sumatera Utara. Kemenangan ini mencerminkan dedikasi dan kerja keras siswa TKJ Medan. Prestasi ini tidak hanya membanggakan tim, tetapi juga memperkuat posisi sekolah sebagai lembaga pendidikan yang berkompeten di bidang TKJ.<br></p>', 'foto-guru-2.jpg'),
(14, 'Lomba LKS Teknik Komputer dan Jaringan (TKJ)', '2024-03-15', 'omba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.', '<p><span style=\"text-align: justify;\">omba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</span></p><p><span style=\"text-align: justify;\">omba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</span></p><p><span style=\"text-align: justify;\">omba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</span><span style=\"text-align: justify;\"><br></span><span style=\"text-align: justify;\"><br><div style=\"text-align: justify;\"><br></div></span></p>', 'siswa-berqurban.jpg'),
(15, 'Sekolah Menengah XYZ Menjadi Tuan Rumah Kompetisi Judul Nasional', '2024-03-16', 'omba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.', '<p style=\"text-align: justify; \"><span style=\"\" segoe=\"\" ui\",=\"\" tahoma,=\"\" geneva,=\"\" verdana,=\"\" sans-serif;=\"\" font-size:=\"\" 12px;=\"\" font-weight:=\"\" 600;=\"\" text-align:=\"\" justify;\"=\"\">omba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</span></p><p><div style=\"text-align: justify;\">omba LKS tingkat provinsi biasanya diadakan sebagai tahap seleksi untuk mengirimkan perwakilan provinsi ke lomba nasional. Pemenang dari lomba provinsi akan mewakili provinsinya dalam lomba nasional, di mana mereka akan bersaing dengan perwakilan dari seluruh Indonesia.</div><div style=\"text-align: justify;\"><br></div></p>', 'galeri-1.jpg'),
(16, 'LKP UTAMA JAYA', '2024-03-18', 'wdadaw aw awdwd', '<p>wdawd wdwdaa</p>', 'siswa-berqurban1.jpg'),
(17, 'SMK AKP GALANG', '2024-03-19', 'wadwadwdwad', '<p>wdadadadadwdwadwa</p>', 'foto-guru-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekskul`
--

CREATE TABLE `tb_ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ekskul`
--

INSERT INTO `tb_ekskul` (`id_ekskul`, `nama_ekskul`, `keterangan`, `foto`) VALUES
(1, 'Pramuka', '<p style=\"text-align: justify; \"><b><u>Ekstrakurikuler Pramuka</u></b> adalah kegiatan di luar jam pelajaran yang bertujuan untuk membentuk kepribadian, kedisiplinan, kemandirian, dan rasa tanggung jawab siswa. Dalam ekskul Pramuka, siswa belajar keterampilan survival, pengetahuan alam, serta keterampilan sosial melalui kegiatan seperti perkemahan, penjelajahan alam, dan pelatihan kepemimpinan. Melalui ekskul Pramuka, siswa dapat mengembangkan rasa kebersamaan, semangat gotong royong, dan nilai-nilai kepatuhan terhadap norma dan aturan. Ekskul Pramuka juga memberikan kesempatan bagi siswa untuk meningkatkan kemampuan berpikir kritis, mengambil keputusan, dan menghadapi tantangan dalam situasi yang berbeda. Partisipasi aktif dalam ekskul Pramuka dapat membantu siswa menjadi individu yang lebih mandiri, bertanggung jawab, dan siap menghadapi berbagai situasi kehidupan.<br></p>', 'siswa-berqurban.jpg'),
(2, 'Sepak Bola', '<p style=\"text-align: justify; \"><b><u>Ekskul sepak bola</u> </b>merupakan kegiatan yang melibatkan siswa dalam latihan teknik dan taktik sepak bola secara teratur. Para peserta akan diajarkan keterampilan dasar seperti dribbling, passing, dan shooting, serta strategi permainan yang efektif. Melalui ekskul ini, siswa dapat mengembangkan kebugaran fisik, kerjasama tim, dan disiplin diri. Pertandingan antar-sekolah atau turnamen menjadi bagian penting dalam menguji kemampuan serta memperkuat semangat persatuan dalam tim. Ekskul sepak bola juga dapat menjadi sarana untuk memupuk nilai-nilai seperti sportivitas, rasa tanggung jawab, dan keterampilan kepemimpinan.<br></p>', 'banner-siswa.jpg'),
(4, 'Bulu Tangkis', '<div style=\"\"><b><u>Ekskul bulu tangkis</u></b> merupakan kegiatan yang melibatkan siswa dalam latihan teknik dan strategi permainan bulu tangkis secara berkala. Peserta akan dibimbing untuk menguasai keterampilan dasar seperti pukulan forehand, backhand, smash, dan drop shot. Selain meningkatkan keterampilan teknis, ekskul ini juga berkontribusi pada peningkatan kebugaran fisik dan refleks siswa. Turnamen antar-sekolah atau pertandingan bersama klub bulu tangkis di luar sekolah sering menjadi bagian dari kegiatan ekskul ini. Melalui ekskul bulu tangkis, siswa dapat mengembangkan kerjasama tim, keuletan, dan semangat kompetisi yang sehat.</div>', 'juara-olimpiade.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `title`, `subtitle`, `foto`) VALUES
(1, 'Acara Sekolah', 'Kurban di sekolah', 'siswa-berqurban.jpg'),
(2, 'awd', 'wad', 'foto-guru-1.jpg'),
(3, 'wd', 'wad', 'foto-guru-2.jpg'),
(4, 'wdw', 'dwdwdwdw', 'juara-olimpiade.jpeg'),
(5, 'wadadad', 'adadada', 'galeri-2.jpeg'),
(6, 'wdada', 'adada', 'galeri-1.jpg'),
(7, 'wdadawd', 'wdadwa', 'banner-siswa.jpg'),
(8, 'ada', 'dada', 'bu-susi-p.jpg'),
(9, 'awdad', 'adada', 'prof-dwikorita.jpg'),
(10, 'Kegiatan belajar mengajar', 'dadad', 'galeri-21.jpeg'),
(13, 'wadad', 'adwawd', 'foto-guru-11.jpg'),
(14, 'wda', 'dadadw', 'code.png'),
(15, 'wadad', 'adada', 'edit.png'),
(16, 'wda', 'adad', 'Screenshot_(8).png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` char(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `gelar` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama`, `jenis_kelamin`, `mapel`, `gelar`, `foto`) VALUES
(2, '', 'Ridho', 'Laki-laki', 'MM', 'S.Kom', 'foto-guru-1.jpg'),
(3, '3232323', 'Fikri Haikal Purba', 'Laki-laki', 'PWPB', 'S.Kom', 'foto-guru-11.jpg'),
(4, '', 'Fikri Haikal Purba', 'Laki-laki', 'BASIS DATA', 'S.Kom', 'foto-guru-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `nohp` char(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `link_ppdb` varchar(255) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_ig` varchar(255) NOT NULL,
  `link_yt` varchar(255) NOT NULL,
  `sambutan` text NOT NULL,
  `sambutan_lanjutan` text NOT NULL,
  `penutup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_identitas`
--

INSERT INTO `tb_identitas` (`id_identitas`, `nama_sekolah`, `slogan`, `logo`, `nohp`, `email`, `link_ppdb`, `link_fb`, `link_ig`, `link_yt`, `sambutan`, `sambutan_lanjutan`, `penutup`) VALUES
(1, 'SMK NEGERI 1 GALANG', 'SEKOLAH PENCETAK GENERASI TELADAN DAN BERPRESTASI', 'LOGO_SMK.png', '083800778657', 'smkn1galang@sch.com', 'https://siap-ppdb.com/', 'https://www.facebook.com/?locale=id_ID', 'https://www.instagram.com/', 'https://www.youtube.com/?hl=ID', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas veniam quidem aliquid cupiditate illum nesciunt possimus ad sapiente architecto recusandae aspernatur laudantium, iure odit incidunt repellendus vero qui! Odio omnis repellendus perspiciatis asperiores optio. Porro magnam perspiciatis maiores? Aperiam a doloribus sit culpa rerum voluptatem labore quos odit nobis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem quo quos dolorum ratione illo quia vero quae voluptates architecto nisi, voluptatibus dignissimos molestiae enim numquam error eos tempore reprehenderit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas veniam quidem aliquid cupiditate illum nesciunt possimus ad sapiente architecto recusandae aspernatur laudantium, iure odit incidunt repellendus vero qui! Odio omnis repellendus perspiciatis asperiores optio. Porro magnam perspiciatis maiores? Aperiam a doloribus sit culpa rerum voluptatem labore quos odit nobis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem quo quos dolorum ratione illo quia vero quae voluptates architecto nisi, voluptatibus dignissimos molestiae enim numquam error eos tempore reprehenderit.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil vitae laboriosam dolorum optio eaque odit recusandae asperiores reiciendis, id qui facere quaerat aliquam quam eum, sed laudantium perspiciatis. Officiis, optio!');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `keterangan`, `foto`) VALUES
(1, 'Rekayasa Perangkat Lunak (RPL)', '<p style=\"text-align: justify; \">RPL merupakan singkatan dari Rekayasa Perangkat Lunak dan jadi salah satu jurusan yang ada di SMK Negeri 1 Pabelan RPL adalah sebuah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen<br></p>', 'Untitled1.png'),
(4, 'Teknik Komputer dan Jaringan (TKJ)', '<p style=\"text-align: justify; \">Mengenal Jurusan TKJ (Teknik Komputer Jaringan) TKJ Adalah singkatan dari Teknik Komputer Jaringan. TKJ merupakan sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar.<br></p>', 'Untitled.png'),
(5, 'Teknik dan Bisnis Sepeda Motor (TBSM)', '<p style=\"text-align: justify; \"><span style=\"\" google=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 20px;\"=\"\">Teknik dan Bisnis Sepeda Motor</span><span style=\"\" google=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 20px;\"=\"\">&nbsp;(TBSM) adalah Jurusan yang mempelajari ilmu-ilmu yang berkaitan tentang sepeda motor, jurusan yang banyak diminati oleh siswa terutama siswa laki-laki.</span><br></p>', 'Untitled11.png'),
(6, 'Tata Busana (TB)', '<p style=\"box-sizing: inherit; margin-bottom: 1.5em;\"><span style=\"box-sizing: inherit;\"><b>Apa itu jurusan Tata Busana ?</b></span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 1.5em;\">Jurusan Tata Busana adalah Jurusan yang diperuntukkan bagi mereka yang ingin mengembangkan bakat dan minatnya dalam hal jahit menjahit, sampai dengan membuat produk yang berkualitas. Pada intinya jurusan ini mengakomodir para siswa yang memiliki minat dalam hal&nbsp;<span style=\"box-sizing: inherit;\">fashion</span>.</p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 1.5em;\">Jurusan Tata Busana SMK Negeri 1 Pabelan bukanlah jurusan yang baru di Sekolah ini. Lulusannya pun banyak mengisi pos-pos lapangan kerja yang bergerak di bidangnya.</p>', 'TB2-1024x682.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `judul`, `tgl_awal`, `tgl_akhir`, `alamat`, `keterangan`, `foto`) VALUES
(2, 'Lomba LKS Rekayasa Perangkat Lunak (RPL)', '2024-03-01', '2024-03-07', 'Medan, Indonesia', '<p style=\"text-align: justify; \">Siswa Medan meraih kemenangan gemilang dalam Lomba Kompetensi Siswa (LKS) Sumatera Utara, mencerminkan persiapan matang dan dedikasi tim. Kemenangan ini bukan hanya prestasi tim, tetapi juga mengukuhkan reputasi sekolah sebagai lembaga pendidikan unggul. Dedikasi, kerja keras, dan kolaborasi erat menjadi kunci keberhasilan mereka. Prestasi ini memberikan inspirasi bagi siswa lain untuk mengejar impian mereka, membangun semangat persaingan sehat, dan menciptakan sejarah baru di dunia kompetisi pendidikan Sumatera Utara dan Sumatera Selatan.</p>', 'galeri-2.jpeg'),
(4, 'Lomba LKS Teknik Komputer dan Jaringan (TKJ)', '2024-03-01', '2024-03-05', 'Medan, Indonesia', '<p style=\"text-align: justify; \">Siswa TKJ Medan menunjukkan keunggulan dalam Lomba Kompetensi Siswa (LKS). Dengan keterampilan di bidang Teknik Komputer dan Jaringan (TKJ), mereka berhasil meraih prestasi gemilang di tingkat Sumatera Utara. Kemenangan ini mencerminkan dedikasi dan kerja keras siswa TKJ Medan. Prestasi ini tidak hanya membanggakan tim, tetapi juga memperkuat posisi sekolah sebagai lembaga pendidikan yang berkompeten di bidang TKJ. Dengan kemenangan ini, siswa TKJ Medan menorehkan sejarah positif dalam dunia kompetisi pendidikan.<br></p>', 'juara-olimpiade.jpeg'),
(5, 'Juara 1 lomba cerdas cermat', '2024-03-11', '2024-03-15', 'Medan, Indonesia', '<p style=\"text-align: justify; \">Juara 1 dalam lomba cerdas cermat adalah tim yang telah menunjukkan pengetahuan dan keterampilan luar biasa dalam menjawab pertanyaan dengan cepat dan tepat. Mereka layak mendapatkan penghargaan sebagai pemenang tertinggi dalam kompetisi tersebut.<br></p>', 'juara-olimpiade1.jpeg'),
(6, 'Juara 1', '2024-03-15', '2024-03-18', 'Medan, Indonesia', '<div style=\"text-align: justify;\">Kemenangan bukan hanya tentang menang, tapi tentang semangat, dedikasi, dan ketekunan. Hari ini, kita adalah juara pertama karena kita tidak pernah menyerah. Terima kasih kepada tim, pelatih, dan semua yang telah mendukung kita. Ini bukan akhir, tapi awal dari perjalanan yang lebih besar!</div>', 'banner-siswa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `keterangan`, `foto`, `judul`) VALUES
(2, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 15px; letter-spacing: 0.3px; line-height: 1.7; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"font-weight: bold;\">MISI :</strong></p><ol style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px;\"><li>Mengembangkan iklim belajar yang kompetitiF dengan memberdayakan potensi yang ada.</li><li>Meningkatkan kompetensi Tenaga Pendidik dan Kependidikan.</li><li>Meningkatkan kualitas dan kuantitas sarana dan prasarana dan lingkungan.</li><li>Menjalin kerjasama yang saling mendukung dan menguntungkan dengan dunia usaha dan dunia industri.</li><li>Meningkatkan pembinaan siswa melalui pendidikan berkarakter dan lingkungan.</li><li>Menciptakan lingkungan sekolah yang asri, nyaman dan kondusif.</li></ol><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 15px; letter-spacing: 0.3px; line-height: 1.7; color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\"><strong style=\"font-weight: bold;\">VISI :</strong></p><ol style=\"margin-bottom: 10px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px;\"><li>Mengembangkan iklim belajar yang kompetitiF dengan memberdayakan potensi yang ada.</li><li>Meningkatkan kompetensi Tenaga Pendidik dan Kependidikan.</li><li>Meningkatkan kualitas dan kuantitas sarana dan prasarana dan lingkungan.</li><li>Menjalin kerjasama yang saling mendukung dan menguntungkan dengan dunia usaha dan dunia industri.</li><li>Meningkatkan pembinaan siswa melalui pendidikan berkarakter dan lingkungan.</li><li>Menciptakan lingkungan sekolah yang asri, nyaman dan kondusif.&nbsp;</li></ol>', 'TB2-1024x682.png', 'Visi dan Misi SMK NEGERI 1 GALANG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sarana`
--

CREATE TABLE `tb_sarana` (
  `id_sarana` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sarana`
--

INSERT INTO `tb_sarana` (`id_sarana`, `judul`, `keterangan`, `foto`) VALUES
(2, 'Lab Komputer', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px;\">Lab komputer sekolah adalah ruang khusus di sekolah yang dilengkapi dengan beberapa komputer yang digunakan untuk keperluan pendidikan dan pembelajaran. Lab komputer ini biasanya dilengkapi dengan perangkat keras dan perangkat lunak yang dibutuhkan untuk mendukung pengajaran dalam berbagai mata pelajaran, termasuk ilmu komputer, bahasa, matematika, sains, dan lain-lain.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px;\">Fungsi utama dari lab komputer sekolah adalah untuk memberikan akses kepada siswa dan guru untuk menggunakan teknologi dalam pembelajaran, mengembangkan keterampilan komputer dan literasi digital, serta memfasilitasi proses pembelajaran yang interaktif dan berbasis teknologi. Di dalam lab komputer, siswa dapat belajar tentang pengoperasian komputer, pemrograman, pengolahan kata, spreadsheet, presentasi, penggunaan internet, dan berbagai aplikasi pendidikan lainnya.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px 0px;\">Selain itu, lab komputer juga dapat digunakan untuk menguji kemampuan siswa melalui ujian online atau latihan komputer, serta untuk kegiatan ekstrakurikuler seperti klub komputer atau pengembangan perangkat lunak. Penggunaan lab komputer yang efektif dapat membantu meningkatkan kualitas pendidikan dengan memanfaatkan potensi teknologi dalam proses pembelajaran.</p>', 'lab.jpg'),
(3, 'Masjid', '<p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px;\">Masjid sekolah adalah fasilitas yang biasanya ada di sekolah-sekolah yang berfungsi sebagai tempat ibadah bagi siswa dan staf sekolah. Biasanya, masjid sekolah dibangun atau dialokasikan sebagai tempat untuk melaksanakan ibadah shalat lima waktu, shalat Jumat, dan kegiatan keagamaan lainnya seperti pengajian, ceramah agama, dan tadarus Al-Quran.</p><p style=\"text-align: justify; border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px;\">Fungsi masjid di sekolah tidak hanya sebagai tempat ibadah, tetapi juga sebagai pusat kegiatan keagamaan dan spiritualitas bagi siswa dan staf sekolah. Masjid sekolah juga sering digunakan sebagai tempat untuk mengajarkan nilai-nilai moral, etika, dan ajaran agama kepada siswa. Selain itu, masjid sekolah dapat menjadi tempat untuk memupuk rasa persaudaraan dan kebersamaan di antara anggota sekolah.</p>', 'WhatsApp-Image-2022-03-10-at-07.png'),
(4, 'Lapangan Futsal', '<p style=\"text-align: justify; \">Lapangan futsal sekolah adalah fasilitas yang dibangun di lingkungan sekolah untuk memberikan ruang bagi siswa untuk bermain futsal. Fasilitas ini dapat berupa lapangan futsal dalam ruangan atau lapangan terbuka di area sekolah.<br></p>', 'IMG_20211104_090926-scaled.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$pOTpmHU8.4sJ/Z12474hieeEKvrnefITs03AkzQawf.hNldY7dlfi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_sarana`
--
ALTER TABLE `tb_sarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_identitas`
--
ALTER TABLE `tb_identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sarana`
--
ALTER TABLE `tb_sarana`
  MODIFY `id_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
