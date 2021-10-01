-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Okt 2019 pada 14.22
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_angkatan`
--

CREATE TABLE `tbl_angkatan` (
  `id_angkatan` int(10) NOT NULL,
  `thn_angkatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_angkatan`
--

INSERT INTO `tbl_angkatan` (`id_angkatan`, `thn_angkatan`) VALUES
(1, '2015'),
(2, '2016'),
(3, '2017'),
(4, '2018'),
(5, '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_infokos`
--

CREATE TABLE `tbl_infokos` (
  `id_kos` int(10) NOT NULL,
  `link_kos_jbr` varchar(255) NOT NULL,
  `link_kos_bws` varchar(255) NOT NULL,
  `link_tanggapan` varchar(255) NOT NULL,
  `nama_cp` varchar(255) NOT NULL,
  `link_cp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_infokos`
--

INSERT INTO `tbl_infokos` (`id_kos`, `link_kos_jbr`, `link_kos_bws`, `link_tanggapan`, `nama_cp`, `link_cp`) VALUES
(1, 'https://getbootstrap.com/docs/4.0/components/card/', 'https://getbootstrap.com/docs/4.0/components/card/', 'https://getbootstrap.com/docs/4.0/components/card/', 'Rangga Akhir Aprian Aselole', 'https://api.whatsapp.com/send?phone=62895337396656');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_listjurusan` int(10) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_listjurusan`, `nama_jurusan`) VALUES
(1, 'Produksi Pertanian'),
(2, 'Teknologi Pertanian'),
(3, 'Peternakan'),
(4, 'Manajemen Agribisnis'),
(5, 'Teknologi Informasi'),
(6, 'Bahasa, Komunikasi Dan Pariwisata'),
(7, 'Kesehatan'),
(8, 'Teknik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_listlayanan` int(10) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_listlayanan`, `nama_layanan`) VALUES
(1, 'Kartu Tanda Mahasiswa(KTM)'),
(2, 'Sarana Prasarana'),
(3, 'Pembangunan'),
(4, 'Jas Lab'),
(5, 'Uang Kuliah Tunggal(UKT)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_layanan_advokasi`
--

CREATE TABLE `tbl_layanan_advokasi` (
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `kritik_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_layanan_advokasi`
--

INSERT INTO `tbl_layanan_advokasi` (`id_layanan`, `nama`, `email`, `angkatan`, `prodi`, `jurusan`, `layanan`, `kritik_saran`) VALUES
(1, 'Rangga', 'rangga.aprian03@gmail.com', '', '20', '5', '3', 'Kementerian Kesejahteraan Mahasiswa merupakan kementerian yang membantu memenuhi informasi kebutuhan mahasiswa dilingkup internal maupun eksternal. Dimana kementerian ini mengambil peran dan tanggung jawab untuk menumbuhkan kemandirian pemenuhan kebutuhan mahasiswa dan menjadi pusat pengumpulan data mahasiswa. Kementerian Kesejahteraan Mahasiswa mempunyai satu menteri, satu sekretaris, lima staf ahli, dan empat staf muda.'),
(2, 'metty', 'mettyah17@gmail.com', '', '7', '5', '1', 'svjhdkjasdjakjsd'),
(3, 'Bahrul', 'bahrularif10@gmail.com', '', '11', '7', '2', 'sfsfsdfsdf'),
(4, 'sadsasads', 'sadsad@gmail.com', '', '2', '1', '2', 'asdasdsad'),
(5, 'sadsadsa', 'asdsad@gmail.com', '', '17', '5', '5', 'asdjnasjdnjsad'),
(6, 'sadasdsa', 'rangga.aprian03@gmail.com', '', '18', '2', '5', 'asdsadasdsad'),
(7, 'rangga aprian', 'rangga.aprian03@gmail.com', '2017', '15', '2', '2', 'ads'),
(8, 'rangga aprian', 'rangga.aprian03@gmail.com', '2016', 'D-IV Teknik Informatika', 'Teknologi Informasi', 'Uang Kuliah Tunggal(UKT)', 'Terlalu Mahal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mitra`
--

CREATE TABLE `tbl_mitra` (
  `id_mitra` int(10) NOT NULL,
  `link_mitra` varchar(255) NOT NULL,
  `nama_cp` varchar(255) NOT NULL,
  `link_cp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mitra`
--

INSERT INTO `tbl_mitra` (`id_mitra`, `link_mitra`, `nama_cp`, `link_cp`) VALUES
(1, 'https://getbootstrap.com/docs/4.0/components/card/', 'Metty Ok  Sip', 'https://api.whatsapp.com/send?phone=62895337396656');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `id_partner` int(10) NOT NULL,
  `link_partner` varchar(255) NOT NULL,
  `nama_cp` varchar(255) NOT NULL,
  `link_cp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_partner`
--

INSERT INTO `tbl_partner` (`id_partner`, `link_partner`, `nama_cp`, `link_cp`) VALUES
(1, 'https://getbootstrap.com/docs/4.0/components/card/', 'Mitta Anugrah Heny', 'https://api.whatsapp.com/send?phone=62895337396656');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_listprodi` int(10) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`id_listprodi`, `nama_prodi`) VALUES
(1, 'D-III Produksi Tanaman Holtikultura'),
(2, 'D-III Produksi Tanaman Perkebunan'),
(3, 'D-III Teknologi Industri Pangan'),
(4, 'D-III Produksi Ternak'),
(5, 'D-III Manajemen Agribisnis'),
(6, 'D-III Keteknikan Pertanian'),
(7, 'D-III Manajemen Informatika'),
(8, 'D-III Teknik Komputer'),
(9, 'D-III Bahasa Inggris Terapan'),
(10, 'D-IV Akuntansi Sektor Publik'),
(11, 'D-IV Gizi Klinik'),
(12, 'D-IV Teknik Energi Terbarukan'),
(13, 'D-IV Mesin Otomotif'),
(14, 'D-IV Teknik Produksi Benih'),
(15, 'D-IV Teknologi Produksi Tanaman Pangan'),
(16, 'D-IV Budidaya Tanaman Perkebunan'),
(17, 'D-IV Teknologi Rekayasa Pangan'),
(18, 'D-IV Manajemen Bisnis Unggas'),
(19, 'D-IV Manajemen Agro Industri'),
(20, 'D-IV Teknik Informatika'),
(21, 'D-IV Rekam Medik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_struktur`
--

CREATE TABLE `tbl_struktur` (
  `id_struktur` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `motto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`id_struktur`, `nama`, `jabatan`, `motto`, `foto`) VALUES
(1, 'Rangga Akhir Aprian', 'Mbohh', 'sadosaoid', 'gallery/testimonial-3.jpg'),
(2, 'rangga aprian ok', 'staff', 'gak rohhhh Matio', 'gallery/testimonial-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_angkatan`
--
ALTER TABLE `tbl_angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `tbl_infokos`
--
ALTER TABLE `tbl_infokos`
  ADD PRIMARY KEY (`id_kos`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_listjurusan`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_listlayanan`);

--
-- Indexes for table `tbl_layanan_advokasi`
--
ALTER TABLE `tbl_layanan_advokasi`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`id_listprodi`);

--
-- Indexes for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_angkatan`
--
ALTER TABLE `tbl_angkatan`
  MODIFY `id_angkatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_infokos`
--
ALTER TABLE `tbl_infokos`
  MODIFY `id_kos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_listjurusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id_listlayanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_layanan_advokasi`
--
ALTER TABLE `tbl_layanan_advokasi`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  MODIFY `id_mitra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `id_partner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `id_listprodi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
