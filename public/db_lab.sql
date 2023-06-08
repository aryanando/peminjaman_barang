-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 10:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `type` int(4) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `type`, `foto`) VALUES
(1, 'NB 100', 1, NULL),
(2, 'NB 110', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(32) NOT NULL,
  `id_siswa` int(32) NOT NULL,
  `id_barang` int(32) NOT NULL,
  `tanggal_pinjam` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_kembali` timestamp NULL DEFAULT NULL,
  `penanggung_jawab` int(32) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_siswa`, `id_barang`, `tanggal_pinjam`, `tanggal_kembali`, `penanggung_jawab`) VALUES
(1, 1, 2, '2023-05-29 05:46:31', '2023-05-30 04:52:12', 1),
(2, 6, 2, '2023-05-29 05:47:03', '2023-05-29 06:07:05', 1),
(3, 7, 2, '2023-05-29 05:48:15', '2023-05-29 06:07:08', 1),
(4, 1, 2, '2023-05-29 05:49:37', '2023-05-29 06:08:03', 1),
(5, 1, 2, '2023-05-29 05:49:55', '2023-05-30 04:52:15', 1),
(6, 1, 2, '2023-05-29 05:50:38', '2023-05-29 06:08:11', 1),
(7, 6, 2, '2023-05-29 05:51:01', '2023-05-29 06:11:26', 1),
(8, 1, 2, '2023-05-29 05:51:41', '2023-05-29 06:13:18', 1),
(9, 1, 2, '2023-05-29 05:53:05', '2023-05-29 06:13:27', 1),
(10, 1, 2, '2023-05-29 05:53:22', '2023-05-29 06:13:31', 1),
(11, 1, 2, '2023-05-29 05:54:08', '2023-05-29 06:13:33', 1),
(12, 1, 2, '2023-05-29 05:54:28', '2023-05-29 06:13:35', 1),
(13, 1, 2, '2023-05-29 05:54:49', '2023-05-29 06:13:36', 1),
(14, 6, 2, '2023-05-29 05:55:17', '2023-05-29 06:13:39', 1),
(15, 1, 2, '2023-05-29 05:59:25', '2023-05-29 06:13:41', 1),
(16, 1, 2, '2023-05-29 05:59:36', '2023-05-29 06:13:48', 1),
(17, 1, 2, '2023-05-29 05:59:56', '2023-05-29 06:13:50', 1),
(18, 1, 2, '2023-05-29 06:01:14', '2023-05-29 06:13:54', 1),
(19, 1, 2, '2023-05-29 06:02:45', '2023-05-29 06:14:00', 1),
(20, 1, 2, '2023-05-29 06:03:29', '2023-05-29 06:15:31', 1),
(21, 1, 2, '2023-05-29 06:04:06', '2023-05-29 06:15:33', 1),
(22, 6, 2, '2023-05-29 06:04:26', '2023-05-29 06:15:35', 1),
(23, 6, 2, '2023-05-29 06:05:02', '2023-05-29 06:15:37', 1),
(24, 1, 2, '2023-05-29 06:05:58', '2023-05-29 06:15:38', 1),
(25, 6, 2, '2023-05-29 06:06:33', '2023-05-29 06:15:40', 1),
(26, 11, 2, '2023-05-29 06:17:32', '2023-05-29 06:32:48', 1),
(27, 1, 2, '2023-05-29 06:21:45', '2023-05-29 06:32:51', 1),
(28, 1, 2, '2023-05-29 06:28:51', '2023-05-29 06:32:53', 1),
(29, 1, 2, '2023-05-29 06:29:11', '2023-05-29 06:32:55', 1),
(30, 1, 2, '2023-05-29 06:29:28', '2023-05-29 06:32:57', 1),
(31, 1, 2, '2023-05-29 06:29:47', '2023-05-29 06:32:59', 1),
(32, 1, 2, '2023-05-29 06:30:21', '2023-05-29 06:33:01', 1),
(33, 1, 2, '2023-05-29 06:30:59', '2023-05-29 06:33:03', 1),
(34, 1, 2, '2023-05-29 06:31:24', '2023-05-29 06:33:05', 1),
(35, 1, 2, '2023-05-29 06:32:06', '2023-05-29 06:33:07', 1),
(36, 1, 2, '2023-05-29 09:17:51', '2023-05-30 00:15:58', 1),
(37, 1, 2, '2023-05-30 00:16:31', '2023-05-30 00:16:49', 1),
(38, 1, 2, '2023-05-30 00:18:04', '2023-05-30 00:18:26', 1),
(39, 1, 2, '2023-05-30 00:19:14', '2023-05-30 00:19:26', 1),
(40, 1, 2, '2023-05-30 00:21:05', '2023-05-30 00:21:14', 1),
(41, 1, 2, '2023-05-30 00:21:46', '2023-05-30 00:22:02', 1),
(42, 1, 2, '2023-05-30 00:44:55', '2023-05-30 00:47:47', 1),
(43, 1, 2, '2023-05-30 00:47:55', '2023-05-30 04:52:19', 1),
(44, 1, 2, '2023-05-30 04:52:24', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `foto` varchar(64) DEFAULT NULL,
  `ortu` varchar(64) DEFAULT NULL,
  `jurusan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nama`, `foto`, `ortu`, `jurusan`) VALUES
(1, '3056015357', 'BERNIKA MAYANGSARI', '', 'Sukamto', 'TKJ'),
(2, '0032567956', 'FITRIA AYUNING TYAS', '', 'Ach Munip', 'TKJ'),
(3, '363421196', 'KHAFI ADAM', '', 'Widodo', 'TKJ'),
(4, '0049217790', 'MARCHIL YANUAR DINI', '', 'Suyanto', 'TKJ'),
(5, '0029407029', 'MUHAMMAD BAIDI', '', 'Ngatiman', 'TKJ'),
(6, '0045951575', 'MUHAMMAD IVAN ZULMI', '', 'Agus Wijaya', 'TKJ'),
(7, '0036185247', 'MUHAMMAD KRISNA YUDHA', '', 'Budiono', 'TKJ'),
(8, '0054217683', 'MUHAMMAD RIFAI ANDRIANTO', '', 'Gianto', 'TKJ'),
(9, '0045523556', 'MUHAMMAD ZIDAN AFROCHI', '', 'Imam Purbo Pranoto', 'TKJ'),
(10, '3031630071', 'RIZKI KHOIRUL ANAM', '', 'Sumarjianto', 'TKJ'),
(11, '0045778526', 'SESWITO ALIWIBOWO', '', 'Markaban', 'TKJ'),
(12, '0058452651', 'ARJUN SETIA AJI PUTRA', '', 'Ulfian', 'MM'),
(13, '0042624016', 'ARMADONA KUBROLLAYAL', '', 'Abdul Muntolib', 'MM'),
(14, '0055003151', 'DEDY AFDAL SETIAWAN', '', 'Budiono', 'MM'),
(15, '0047219416', 'DENI CANDRA APRILIANTO', '', 'Markimun', 'MM'),
(16, '0047642714', 'FABIAN RESA HERNANDA', '', 'Samsu Hari', 'MM'),
(17, '0047982442', 'FERY ANDRIANSYAH', '', 'Samsul Hadi', 'MM'),
(18, '0053461177', 'FRISTITA AYUNDA FINESA', '', 'Rudi Heri Kuswanto', 'MM'),
(19, '0052408718', 'HENGKI FERGI ANSYA', '', 'Sugiono', 'MM'),
(20, '0047171697', 'KARISTA SERLIANANDA', '', 'Agus Wanto', 'MM'),
(21, '0042637213', 'MAYA AYU HIDAYAT', '', 'Susanto Widayat', 'MM'),
(22, '0054591408', 'MOHAMAD SOLIHAN', '', 'Supi\'i', 'MM'),
(23, '0056695929', 'MUHAMAD YUSUF AZRIEL ZUNAEDI', '', 'Aan Zunaedi', 'MM'),
(24, '0046892296', 'MUHAMMAD FAHRIZQI SEPTIAWAN', '', 'Bambang Agung Mulyono', 'MM'),
(25, '0064246167', 'NIHAYATUL WAFIROH', '', 'Sukeri Latif', 'MM'),
(26, '0041342654', 'NOVITA SRI WULANDARI', '', 'Radji', 'MM'),
(27, '0059363396', 'SANTANU WIRYO AJI', '', 'Musafak', 'MM'),
(28, '0057737372', 'SEBASTIAN ADZANANG TRI DHARMA PUTRA YOHANNA', '', 'Maryohan', 'MM'),
(29, '0057942347', 'SHASKY KIRANA ZAHRANI', '', 'Bayu Nopria Deddy', 'MM'),
(30, '0052770539', 'SURYA ACHMAD BAYHAQY', '', 'Mochamad Soleh', 'MM'),
(31, '0041982192', 'TEO RAMADHANI', '', 'Slamet', 'MM'),
(32, '0046372642', 'TRI WIDAYATI ', '', 'Untung Sutrisno', 'MM'),
(33, '0041106653', 'TRIO DAVID PURWADINATA', '', 'Choirul Anwar', 'MM'),
(34, '0046581647', 'VIO ANDRIAN', '', 'Musyafa Akmad', 'MM'),
(35, '0057561284', 'ZAINUL', '', 'Suhut', 'MM'),
(36, '0041822182', 'ADITYA BAGAS RAMADHAN', '', 'Mohamad Sugianto', 'BDP'),
(37, '0056692731', 'AINUL NUR MELDA LAKSONO', '', 'Joni Laksono', 'BDP'),
(38, '0041009026', 'ARDELIA NATALIE SAPUTRI', '', 'Edi Purnomo', 'BDP'),
(39, '0049464375', 'ARI ADITYA SYAHPUTRA', '', 'Sukir', 'BDP'),
(40, '0054019578', 'ARIEL WILLIAM ARDHANI', '', 'Supriadi', 'BDP'),
(41, '0046092242', 'ARVINDHA VRINANDHA ZAHROTU ILMI KHOVIVAH', '', 'Agus Setiyawan', 'BDP'),
(42, '0052701660', 'AURELLIA PUTRI HENDRAWAN', '', 'Devi Hendrawan', 'BDP'),
(43, '0046970782', 'DAFIT CANDRA ROMADHONI', '', 'Kehono', 'BDP'),
(44, '0036478097', 'DAFIT SANDI SEPTITO', '', 'Sunanto', 'BDP'),
(45, '0049171141', 'DEKA AGUSTIA PUTRA', '', 'Sugiyanto', 'BDP'),
(46, '0034945804', 'DHUHA NUR FADILLAH', '', 'Sabari', 'BDP'),
(47, '0034320013', 'DIMAS YOGA SAPUTRA', '', 'Saiful', 'BDP'),
(48, '0051087886', 'DIVA REVALINA OLIVIA', '', 'Ngadirno', 'BDP'),
(49, '0041647018', 'ERINA WIDYADHANA', '', 'Moch Ansoriy', 'BDP'),
(50, '0046483455', 'FAHIRA NUR CANTIKA', '', 'Jupriyanto', 'BDP'),
(51, '0053699339', 'FAHMIRUL FERDIANSYAH', '', 'Suryanto', 'BDP'),
(52, '0042328164', 'GISELLA WIJAYANINGTIAS', '', 'Ngateman Ponidi', 'BDP'),
(53, '0063974900', 'HENDRA IRAWAN', '', 'Nuradi', 'BDP'),
(54, '0047250632', 'HERWINA MAYA SARI', '', 'Tomi Suwardi', 'BDP'),
(55, '0058885179', 'INTAN DWI NISWARA', '', 'Nurawi', 'BDP'),
(56, '3056824425', 'INTAN ROFILI ANDINI', '', 'Adi Kusno Hartoyo', 'BDP'),
(57, '0049791726', 'IRSYAH RIYAN NASRIL NATANIAN PRAYOGI', '', 'M. Rofik', 'BDP'),
(58, '3037065014', 'ISLAMIA NASMA AMALIA SYAHIDAH', '', 'Suwandi', 'BDP'),
(59, '68808099', 'JESIKA HESVIANA', '', 'Ngasiyan', 'BDP'),
(60, '0053812173', 'KETUT SRI SHANTI RAHAYU', '', 'Yono', 'BDP'),
(61, '3043033558', 'KEZA ADI SEPTIAN', '', 'Asrofi', 'BDP'),
(62, '0031283994', 'KHULIMATUS SA\'DIYAH', '', 'Mat Sholeh', 'BDP'),
(63, '0051318301', 'MAULINA ZIADAHTUL ILMIYAH', '', 'Wasito', 'BDP'),
(64, '0054584057', 'MEI DWI LESTARI', '', 'Suwarno', 'BDP'),
(65, '0055314528', 'MUHAMAD YUSUF WAHYU PRASTYO', '', 'Prayit', 'BDP'),
(66, '3054969069', 'MIZAN FARUK UBAIDILLAH', '', 'Mudeni', 'BDP'),
(67, '3057086577', 'MOCH ILHAM ANDIKA SYAHPUTRA', '', 'Suja\'i', 'BDP'),
(68, '0047829473', 'MUCHAMAD AGUNG SATRIYO WIBOWO', '', 'Sutrisno', 'BDP'),
(69, '0057944816', 'MUHAMMAD ALFAIZIN SEMIFTAHUL HUDA', '', 'Sholeh', 'BDP'),
(70, '0051050968', 'MUHAMMAD NURIL ANWAR', '', 'Mundirin', 'BDP'),
(71, '0059632702', 'NABILA AZZAHRA KHODIRU NISA', '', 'Durochim', 'BDP'),
(72, '58130755', 'NABILA PUTRI AL ZAHROH', '', 'Yudianto', 'BDP'),
(73, '0055592162', 'NADIA CINTIYA BELLA', '', 'Cipto Mariono', 'BDP'),
(74, '0044236773', 'NOVA ELIA', '', 'Wachid', 'BDP'),
(75, '0051967988', 'NOVA RIZKIYA MARITA', '', 'Andoyo ', 'BDP'),
(76, '0056808153', 'NOVAL IRSA PUTRA', '', 'Choirul Arifin', 'BDP'),
(77, '0051051171', 'NUR ILASAKARIDA', '', 'Sugiarto', 'BDP'),
(78, '0041125963', 'PINGKAN OCTASA RAHMADANI ', '', 'Kasim', 'BDP'),
(79, '0058476628', 'RAKHA BIMA ANDRIANSYAH', '', 'Agus Boedi Pramono', 'BDP'),
(80, '0047679236', 'RAVAEL BRAHMASTYA ZULFA', '', 'Edi Sumarno', 'BDP'),
(81, '0051494797', 'REFA ALYA HIKMA', '', 'Zaenal Efendi', 'BDP'),
(82, '0042000069', 'REZA ADITYA SAPUTRA', '', 'Budi Setyo Wibowo', 'BDP'),
(83, '0042406370', 'RIRIS NUR AISSAH', '', 'Supriadi Purwito', 'BDP'),
(84, '45515534', 'RISKY PUTRA PRATAMA', '', 'Achmad Dono', 'BDP'),
(85, '0055568854', 'RISMA WULANDARI', '', 'Suhari', 'BDP'),
(86, '0042517346', 'RIZAL NASRULLAH', '', 'Ali Nurimad', 'BDP'),
(87, '0059170217', 'RIZKY ARDIANSYAH', '', 'Edi Sukamto', 'BDP'),
(88, '0059871079', 'ROBI ARDIANSYAH ANANTA INDRA KUSUMA', '', 'Eming Gunawan', 'BDP'),
(89, '0054256269', 'ROY IBRAHIM ALFAN NOOR', '', 'Sun\'an', 'BDP'),
(90, '0053614124', 'SANIA ASWHA IVELLA', '', 'Didik Susanto', 'BDP'),
(91, '0055564915', 'SANIEL WAHYU TANGGARA', '', 'Jutek', 'BDP'),
(92, '0043465482', 'SASSY RAMADHANA AZAHRA', '', 'Ketut Suswanto', 'BDP'),
(93, '0053958394', 'SELVIANA NUR AVITASARI', '', 'Imam Nurul Huda', 'BDP'),
(94, '0042380565', 'SEPTYAN DWIYANTO BANDRANG KEBLATING PANINGAL', '', 'Sunarto', 'BDP'),
(95, '0052468647', 'VALENTINA APRILIA MAHAKASIH', '', 'Suprayitno', 'BDP'),
(96, '0045690573', 'WAHYU DEYA AMANDA SUGIARTO', '', 'Musmulidi Rudik', 'BDP'),
(97, '0052044614', 'WHINDY EGITA RAMADANI', '', 'Sugianto', 'BDP'),
(98, '0049708927', 'YAYANG DANI ISWADI', '', 'Suyadi', 'BDP'),
(99, '0059562146', 'YORINDA ISVA EMILIA', '', 'Sugianto', 'BDP'),
(100, '0041067773', 'YUSUF ZIDAN YUNASTI', '', 'Aji Eko Wahyudi', 'BDP'),
(101, '0048169793', 'ZAHROTUL MUFIDAH', '', 'Mohamad Soleh', 'BDP'),
(102, '0050956615', 'ADAM UBAIDILLAH', '', 'Ridwan', 'AKL'),
(103, '0052008843', 'AHMAD YUSUF', '', 'Kadianto', 'AKL'),
(104, '0044392333', 'ALMI NUR ROHMA', '', 'Sugianto', 'AKL'),
(105, '0046804411', 'ALYA DWIYANTI', '', 'Agus Dwi Anto', 'AKL'),
(106, '0053476261', 'AMANDA AGUSTINA', '', 'Kasmari', 'AKL'),
(107, '0052203190', 'AMANDA LUKITA DANISWARA', '', 'Sakri', 'AKL'),
(108, '0046862884', 'ANANDA AMELIA PUTRI ', '', 'Sugianto', 'AKL'),
(109, '0046872778', 'ANGGI DIVA YOLANDA PUTRI', '', 'Suit Doyo', 'AKL'),
(110, '0043948524', 'ASTRID PUTRI ANJELLYTA', '', 'Suliyono', 'AKL'),
(111, '0051218556', 'AUDI NINDI PUTRI NADILA', '', 'Kusnin', 'AKL'),
(112, '0049930613', 'AULIA NUR RAHMA', '', 'Suliono', 'AKL'),
(113, '0051357172', 'AVEL ALMEYRA VIO EKA PUTRI', '', 'Didik Budiono', 'AKL'),
(114, '0052945789', 'CATUR YULIANTO', '', 'Agus Mulyadi', 'AKL'),
(115, '0045857503', 'DEBI ASISKA', '', 'Supakat', 'AKL'),
(116, '0044637434', 'DENIS ADI MAULANA', '', 'Sujono', 'AKL'),
(117, '0044775011', 'DIMAS KUNCORO', '', 'Hero Kemat', 'AKL'),
(118, '0055870892', 'DWI WULANDARI', '', 'Sugiono', 'AKL'),
(119, '0043801868', 'ELLA SAFIRA ANGGRAINI', '', 'Joko Asih', 'AKL'),
(120, '0046370763', 'ELSA OKTAVIA', '', 'Bambang Darmawan', 'AKL'),
(121, '0046078045', 'ELVIANA', '', 'Sutiono ', 'AKL'),
(122, '0047490362', 'ERSYA WILDHA OKTAVIA RAMADHAN', '', 'Winarto', 'AKL'),
(123, '0047158732', 'FAIZAL FITRIANTO', '', 'Winarti', 'AKL'),
(124, '0050956635', 'FEBRIANTI DWI SAHARANI', '', 'Sutikno', 'AKL'),
(125, '0059941218', 'GABRIEL MOHAMAD NASRUDDIN SUPANDRIYO', '', 'Bayo Wola Ate', 'AKL'),
(126, '0056022950', 'GITA FATIKHA RAHMAFATUL IZZA', '', 'Sugiono', 'AKL'),
(127, '0044782349', 'HELEN AGUSTIN PRIATMA', '', 'Suprianto', 'AKL'),
(128, '0057600618', 'IFTITAH ANINDA MAYROTUL AISIYAH', '', 'Andik Purwanto', 'AKL'),
(129, '0053949070', 'IKA RAHMAWATI CAHYANING RAHAYU', '', 'Achmad', 'AKL'),
(130, '0047403481', 'IMELDA NUR FLORENTINA', '', 'Muji Slamet ', 'AKL'),
(131, '0036762067', 'INTAN NUR MAISAROH', '', 'Boari', 'AKL'),
(132, '0056369171', 'INTAN SANDIA EKA PUTRI', '', 'Sarpai', 'AKL'),
(133, '0053807777', 'IRENE REVA REGISTA', '', 'Moh Iksan', 'AKL'),
(134, '0049395542', 'JOKO TENGER', '', 'Saroni Nochan', 'AKL'),
(135, '0053551622', 'KEISHA DAVINA AZAHRA', '', 'Rojikin ', 'AKL'),
(136, '0048809739', 'KRISNAWATI', '', 'Ketang', 'AKL'),
(137, '0047622723', 'LARAS KENAKA ARDHITA PRAMESWARI', '', 'Slamet Riadi', 'AKL'),
(138, '3053634049', 'MAISA MAULIDIA RAHMA DINA', '', 'Warsito', 'AKL'),
(139, '0043798973', 'MEY LANI PUTRI WULANDARI', '', 'Yasali', 'AKL'),
(140, '0056695114', 'MIEKE AMELIA NOLDY', '', 'Noldy', 'AKL'),
(141, '0045401896', 'MIKI ARI SAPUTRA', '', 'Supratikno', 'AKL'),
(142, '0042945020', 'MUHAMMAD ALWI SAMUDERA', '', 'Agus Susanto', 'AKL'),
(143, '0058526305', 'NADIA ZANIAR ARISTA', '', 'Abdul Choyi', 'AKL'),
(144, '0046360817', 'NANDO VALENTINO', '', 'Hadi Sutikno', 'AKL'),
(145, '0055331767', 'NOVELYA ANANTA ABILA', '', 'Sugeng Riyadi', 'AKL'),
(146, '0051613916', 'NOVI ANGGRAENI', '', 'Tunali', 'AKL'),
(147, '0057407812', 'NUR INDAH PUJA NINGRUM', '', 'Ahmad Djumaedi', 'AKL'),
(148, '3042396382', 'NUR INDAH SUSIYANTI', '', 'Sugianto Aji', 'AKL'),
(149, '0054661806', 'NURIL KHABIBAH FAIZATUL KHUSNA ', '', 'Budiono', 'AKL'),
(150, '0046938268', 'PUPUT MAULUDIYAH', '', 'Suwarno', 'AKL'),
(151, '0041105357', 'PUTRI TRIA AFRIZA', '', 'Slamet Hariadi', 'AKL'),
(152, '0059065484', 'RIFAT ZAKARY ', '', 'Yusuf', 'AKL'),
(153, '0052820954', 'RIKA SUSANTI', '', 'Dayat', 'AKL'),
(154, '0043243062', 'RIO VAIS SURYA MAHENDRA', '', 'Moch Arifin', 'AKL'),
(155, '0051844288', 'RIZKY AULIA CHRISTANTI', '', 'Sumardiyono', 'AKL'),
(156, '0053855841', 'SAVELA MEI DWI E', '', 'Suwoto', 'AKL'),
(157, '0048702349', 'SILVIANA DEWI OKTAVIA', '', 'Mad Sulianto', 'AKL'),
(158, '0047165014', 'SEPTIAN EVENDY ANUGRAH PRATAMA', '', 'Sukadi', 'AKL'),
(159, '0051452647', 'SEVYA WAHYUNITA', '', 'Rokim', 'AKL'),
(160, '0057706212', 'SHOHIBAH ERDA AFIFAH', '', 'Shohirun', 'AKL'),
(161, '3057324673', 'SILVIA ROBIATUL ADAWIYAH', '', 'H. Ja\'far', 'AKL'),
(162, '3045444717', 'SINDI AGUSTINA', '', 'Sioto', 'AKL'),
(163, '0047268159', 'SITI NUR HALIZA', '', 'Zaenal Arifin', 'AKL'),
(164, '0059701818', 'TARISNA MELA MARELITA', '', 'Sudiono', 'AKL'),
(165, '0054318478', 'TETI SORAYA SUSI WULANDARI', '', 'Susianto ', 'AKL'),
(166, '0042703694', 'ULFATUL KHOIROH', '', 'Sunaji', 'AKL'),
(167, '46733885', 'VENITA LAILATUL FAJARIYAH', '', 'Suwarno', 'AKL'),
(168, '0053512829', 'VINDA OKTAVIA', '', 'Suwoto ', 'AKL'),
(169, '0054979435', 'VITA WAHYUNINGTIAS', '', 'Suprapto', 'AKL'),
(170, '0047847385', 'WAHYU MAULITA SAPUTRI', '', 'Mustofa', 'AKL'),
(171, '0036532352', 'YULI ASTUTIK', '', '-', 'AKL'),
(172, '0048556297', 'YULIA DAMAYANTI', '', 'Mukhit', 'AKL'),
(173, '3053445617', 'ZAHRO RENATA', '', 'Heri Purwanto', 'AKL'),
(174, '0057438141', 'ZALFAA MEYLA FAYZA', '', 'Sugeng Winarto', 'AKL'),
(175, '0043840916', 'ZANUBA DWI ALISYA AULIYAH', '', 'Al Bastomi ', 'AKL'),
(176, '0044264942', 'ADELIA PUSPITA RINI', '', 'Sodikin', 'PBS'),
(177, '0059593769', 'ANISA EKA WIDYA SARI', '', 'Ahmad Khomari', 'PBS'),
(178, '0046302924', 'DAVIT SAFRILA ERLANGGA', '', 'Suryanto', 'PBS'),
(179, '0046959950', 'CLARISTA VERONIKA Z.', '', 'Sudarsono', 'PBS'),
(180, '0042671834', 'DITA DWI RAMADHANI', '', 'AGUS HERMAWAN', 'PBS'),
(181, '0048245700', 'LINA PUSPITA RINI', '', 'Amin', 'PBS'),
(182, '0055894367', 'MARTHA DHEA AULIA PHAHSYA', '', 'Franky Ferdian', 'PBS'),
(183, '0059167625', 'RISMA AYU', '', 'Agus Suwarno', 'PBS'),
(184, '3043935511', 'SELA SEPTIA PUTRI', '', 'Pitoni', 'PBS'),
(185, '0048431503', 'WIDYA EKA PARAMITHA', '', 'Edi Suyanto', 'PBS'),
(186, '0047158705', 'YESSYCA ANGGI PUSPITA', '', 'Bambang Puspito', 'PBS');

-- --------------------------------------------------------

--
-- Table structure for table `type_barang`
--

CREATE TABLE `type_barang` (
  `id` int(4) NOT NULL,
  `type` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_barang`
--

INSERT INTO `type_barang` (`id`, `type`) VALUES
(1, 'Laptop'),
(2, 'Speaker'),
(3, 'HDMI Converter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `barang_ibfk_1` (`type`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `peminjaman_ibfk_2` (`id_barang`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_barang`
--
ALTER TABLE `type_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `type_barang`
--
ALTER TABLE `type_barang`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`type`) REFERENCES `type_barang` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
