-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 03:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jad` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sem` int(11) NOT NULL,
  `sem_name` int(11) NOT NULL,
  `sem_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jad`, `id_user`, `id_sem`, `sem_name`, `sem_date`) VALUES
(4, 6, 15, 0, '2017-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `list_seminar`
--

CREATE TABLE `list_seminar` (
  `id_sem` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sem_name` varchar(255) NOT NULL,
  `sem_date` date NOT NULL,
  `sem_desc` text NOT NULL,
  `link_reg` varchar(255) NOT NULL,
  `sem_cp` varchar(255) NOT NULL,
  `sem_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_seminar`
--

INSERT INTO `list_seminar` (`id_sem`, `id_user`, `sem_name`, `sem_date`, `sem_desc`, `link_reg`, `sem_cp`, `sem_img`) VALUES
(13, 5, 'Gema Tekno 9 “Mahakarya Generasi Penuh Prestasi” – UIN SGD Bandung, 15-17 Desember 2017', '2017-12-15', 'HIMANITRO Universitas Islam Negeri Sunan Gunung Djati Bandung mempersembahkan : Gema Tekno 9 “Mahakarya Generasi Penuh Prestasi”.\r\n\r\nBuat kalian segera tandai kalendermu karena kita bakal seru-seruan selama 3 hari berturut-turut. Ada apakah di gema tekno 9? Kita punya banyak acara loh guys ????. .\r\n\r\n>Seminar Nasional Teknik Elektro (SENTER) 2017\r\nPemateri :\r\n- Deddy Mizwar* (Wakil Gubernur Jawa Barat)\r\n- Budi Raharjo, M.Sc, Ph.D (Pakar IT)\r\n- Nidya Rahmanita (Konsultan Bitcoin.co.id)\r\nUntuk registrasi peserta bit.ly/SENTER2017\r\n>Tekno Musik\r\nKita mendatangkan artis-artis populer, seperti:\r\n- HIVI!\r\n- Hanin Dhiya\r\n- Adera\r\nTiket online : bit.ly/tiketonlinegemtek9\r\nSelain kedua acara tersebut, kita juga masih banyak acara yang gak kalah keren. Buat kalian yang ingin berjualan atau numpang hits cocok banget nih.\r\n\r\n- Bazaar\r\n- Donor Darah\r\n- Pesta Rakyat', 'http://bit.ly/SENTER2017', '081221183126 (Aries)', '/img/Gema-Tekno-9-Mahakarya-Generasi-Penuh-Prestasi-UIN-SGD-Bandung-15-17-Desember-2017.jpg'),
(14, 5, 'Seminar Social Media Effect', '2017-12-05', 'Seminar “Gain The Advantage of Social Media By Creativity”\n\nWho are the Speakers ?\n\n- Rudiantara S. Stat. MBA\n(Menteri Komunikasi dan Informatika Indonesia) *under confirmation\n- Kombes. Pol. Dr. Drs. M. Fadil Imran, M.Si.\n- Direktorat Tindak Pidana Siber (Dirtipid Siber Bareskrim Polri)\n- Enda Nasution\n(Bapak Blogger Indonesia)\n- Skinnyfabs (Youtuber)\nWhat will you get ?\n\n- Certificate\n- Snack', '', 'Felicia (081808092616)', '/img/Seminar-Social-Media-Effect-Trisakti-University-Campus-A-5-Desember-2017-768x1086.jpg'),
(15, 5, 'Indonesia Sharia Economic Outlook (ISEO)', '2017-12-05', 'Indonesia Sharia Economic Outlook (ISEO) yaitu berupa acara Seminar dan Launching Outlook mengenai perkembangan Ekonomi Islam pada era ini yang mengangkat tema “Ekonomi dan Keuangan Syariah sebagai Arus Baru Perekonomian Indonesia” dan meliputi 10 sektor ekonomi syariah yang terdiri dari:\r\n\r\n-Lembaga,Kebijakan,dan Makroekonomi\r\n-Sektor Perbankan Syariah dan BPRS\r\n-Pasar Modal dan Pasar Uang Syariah\r\n-IKNB-Syariah\r\n-Keuangan Mikro Islam\r\n-Keuangan Sosial Islam : Zakat & Wakaf\r\n-Industri Halal\r\n-Pariwisata Halal\r\n-Pendidikan Pesantren dan Kampus,serta\r\n-Pengelolaan Dana Haji', '', 'LINE: @nun0919f', '/img/Indonesia-Sharia-Economic-Outlook-ISEO-Universitas-Indonesia-5-Desember-2017.jpg'),
(16, 6, 'SI FEST (Sistem Informasi Festival) – Universitas Budi Luhur, 27-29 November 2017', '2017-11-27', 'HIMASI (HImpunan Mahasiswa Sistem Informasi) Universitas Budi Luhur Jakarta proudly present Enforce “Technology For The Future Of Business”.\r\n\r\nKami mengajak mahasiswa/i Universitas Budi Luhur maupun luar Universitas Budi Luhur untuk berpartisipasi dalam acara SI Fest 2017 yang di selenggarakan oleh I HIMASI Universitas Budi Luhur. Yang akan dilaksanakan pada tanggal 27 November s/d 29 November 2017.\r\n\r\nMark the date:\r\n\r\nSeminar Nasional “Strategi dalam Technopreneurship”\r\nSenin, 27 November 2017\r\n09.00 WIB – 12.40 WIB\r\nGedung Auditorium Universitas Budi Luhur\r\nHTM:\r\nMahasiswa UBL : Rp. 15.000, ; OTS Rp. 20.000\r\nMahasiswa Non UBL : Rp. 30.000,-\r\nGet :\r\nIlmu\r\nCertificate\r\nDoorprize\r\nSnack\r\nLomba Analisa Sistem Informasi\r\nSelasa, 28 November 2017\r\n09.00 WIB – 12.00 WIB\r\nMax 2 Orang\r\nHTM : Free\r\nAuditorium Universitas Budi Luhur\r\nTechnical Meeting\r\n17 November 2017\r\n16.00 WIB – Selesai\r\nRuang Kelas\r\nGet :\r\nIlmu\r\nCertificate\r\nUang Tunai\r\nSnack\r\nSeminar “Start Up E-Budgeting For Bussiness”\r\nRabu, 29 November 2017\r\n13.00 WIB – 17.30 WIB\r\nGedung Auditorium Universitas Budi Luhur\r\nHTM :\r\nMahasiswa UBL Rp. 15.000,- ; OTS Rp. 20.000\r\nMahasiswa Non UBL = Rp. 30.000,-\r\nGet :\r\nIlmu\r\nCertificate\r\nDoorprize\r\nSnack\r\nLomba Selfie Contest\r\nSenin, 27 November 2017 – Rabu, 29 November 2017\r\nHTM : Free\r\nGet : Doorprize\r\nOpen For Bazaar\r\nSenin, 27 November 2017 s.d Rabu 29 November 2017\r\n09.00 WIB – 16:00 WIB\r\nGedung Auditorium Universitas Budi Luhur dan Lapangan Universitas Budi Luhur\r\nKuota terbatas\r\nSpecial performance (Tari Saman Lon Sayang (SLS), Gema Luhur Choir (GLC) & Kreativitas Musik Mahasiswa )\r\n\r\nSo, what are you waiting for? Let’s join us and see you there! #SIFEST2017', '', 'Indri Ramadhani (0895-3528-93382)', '/img/SI-FEST-Sistem-Informasi-Festival-Universitas-Budi-Luhur-27-29-November-2017.jpg'),
(17, 6, 'Seminar Nasional Dies Natalis PKK ke-50', '2017-11-24', 'Dalam rangka kegiatan Dies Natalies PKK FPTK UPI Ke-50 Departemen PKK proudly present:\r\n\r\nSeminar Kewirausahaan\r\nTema : Peran Pendidikan Kesejahteraan Keluarga dalam Membangun Industri Kreatif Menyongsong Era Milenial\r\n\r\nNarasumber: Dr.Heni Hendrayati,S.Ip,M.M (Dosen Prodi Manajemen FPEB UPI)\r\n\r\nSeminar Keluarga Sejahtera\r\nTema : Membangun Karakter Bangsa Melalui Pendidikan Kesejahteraan Keluarga dalam Rangka Mewujudkan Pembangunan Manusia yang Berkelanjutan\r\n\r\nNarasumber : Prof. Dr. Ir. Euis Sunarti,M.Si (Guru Besar Bidang Ketahanan dan Pemberdayaan Keluarga IPB / Ketua Penggiat Keluarga (GIGA) Indonesia)\r\n\r\n—\r\n\r\nInclude : seminar kit, sertifikat, makan siang\r\n\r\nRegistrasi :\r\nNama_Instansi_umum/mahasiswa kirim ke : 089509312087\r\n\r\nPembayaran melalui transfer ke no. rekening 0393623379 a.n Sarah Eka Humaira', '', '089509312087 (Anggi)', '/img/Seminar-Nasional-Dies-Natalis-PKK-ke-50-Universitas-Pendidikan-Indonesia-24-November-2017-768x1061.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_name` varchar(255) NOT NULL,
  `id_sem` int(11) NOT NULL,
  `sem_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `uname`, `pass`, `name`, `email`, `phone`) VALUES
(4, 'poni', 'e10adc3949ba59abbe56e057f20f883e', 'poni', 'dwikiaja32@yahoo.co.id', '085694419450'),
(5, 'ai', 'e10adc3949ba59abbe56e057f20f883e', 'Arie Brian', 'ai@ai.com', '085823623617'),
(6, 'nizar', 'e10adc3949ba59abbe56e057f20f883e', 'nizar', 'nizar@bawang.com', '38495');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jad`);

--
-- Indexes for table `list_seminar`
--
ALTER TABLE `list_seminar`
  ADD PRIMARY KEY (`id_sem`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `list_seminar`
--
ALTER TABLE `list_seminar`
  MODIFY `id_sem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
