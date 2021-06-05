-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2021 pada 03.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` enum('admin','kepala','gudang') NOT NULL,
  `kd_petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `nama`, `posisi`, `kd_petugas`) VALUES
('mzhasanah', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 'Mau\'idzoh Hasanah', 'admin', '19095'),
('tania', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 'Tania Shafira', 'kepala', '1901'),
('lina', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 'Lina AlFairizi', 'gudang', '19099'),
('yusril123', 'yusril4a', 'Yusril Arbizal', 'kepala', '19057'),
('okta456', 'okta4a', 'Okta Pratama', 'admin', '19115'),
('dayat789', 'dayat4a', 'Nurhidayat', 'admin', '19113');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nama`, `spesialis`, `alamat`, `no_tlp`) VALUES
('DK001', 'Alhambra Muhammad Halim', 'Mata', 'Cirebon', 6285222),
('DK002', 'Ida Faridah', 'Tulang', 'Tasikmalaya', 6283112),
('DK003', 'Barokah Hamdalah', 'Kulit', 'Majalengka', 6287634),
('DK009', 'Nur Basmalah', 'THT', 'Bandung', 6289127);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `kd_petugas` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` int(50) NOT NULL,
  `posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`kd_petugas`, `nama`, `alamat`, `no_tlp`, `posisi`) VALUES
('19003', 'Muhammad Yovan', 'Lembang', 6285891, 'Administrasi'),
('19004', 'Santi Nirwana', 'Jalan Setapak', 6281229, 'Gudang'),
('19005', 'Subhan', 'Indramayu', 6283657, 'Kurir'),
('19006', 'Ni\'matul Maula', 'Karawang', 6281345, 'Apoteker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `eksistensi` enum('Tersedia','Terpakai') NOT NULL,
  `file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`no`, `nama`, `bulan`, `eksistensi`, `file`) VALUES
(1, 'Laporan Obat Tersedia Bulan Januari', 'Januari', 'Tersedia', 'Laporan Obat Tersedia Pada Bulan Januari 2021.pdf'),
(2, 'Laporan Obat Terpakai Bulan Januari', 'Januari', 'Terpakai', 'Laporan Obat Terpakai Pada Bulan Januari 2021.pdf'),
(3, 'Laporan Obat Tersedia Bulan Februari', 'Februari', 'Tersedia', 'Laporan Obat Tersedia Pada Bulan Februari 2021.pdf'),
(4, 'Laporan Obat Terpakai Bulan Februari', 'Februari', 'Terpakai', 'Laporan Obat Terpakai Pada Bulan Februari 2021.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `no` int(11) NOT NULL,
  `kd_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `lokasi_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`no`, `kd_obat`, `nama_obat`, `jenis_obat`, `lokasi_obat`) VALUES
(1, 'A007', 'Betadin', 'Luka', 'Cabang 3'),
(2, 'A009', 'Handsaplast', 'Luka', 'Etalase'),
(3, 'A015', 'Komic', 'Tenggorokan', 'Gudang'),
(4, 'A019', 'Caplangue', 'Angin', 'Cabang 1'),
(5, 'A065', 'AntiAir', 'Angin', 'Etalase');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kd_pelanggan` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `kd_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`kd_pelanggan`, `nama_obat`, `kd_obat`) VALUES
('P98002', 'Caplangue', 'A019'),
('P98017', 'Handsaplast', 'A009'),
('P98032', 'Betadin', 'A007'),
('P98090', 'Komic', 'A015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `kd_beli` varchar(50) NOT NULL,
  `kd_obat` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`kd_beli`, `kd_obat`, `harga`, `tgl_beli`) VALUES
('B010', 'A015', 73000, '2021-06-16'),
('B013', 'A019', 7000, '2021-07-29'),
('B019', 'A065', 100000, '2021-06-02'),
('B201', 'A007', 90000, '2021-05-22'),
('B209', 'A009', 850000, '2021-06-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `kd_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`kd_obat`, `nama_obat`, `stok`, `kadaluarsa`) VALUES
('A007', 'Betadin', 16, '2025-04-06'),
('A009', 'Handsaplast', 204, '2040-12-24'),
('A015', 'Komic', 46, '2034-06-26'),
('A019', 'Caplangue', 79, '2029-10-15'),
('A065', 'AntiAir', 98, '2039-05-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kd_supplier` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`kd_supplier`, `nama`, `alamat`, `no_tlp`) VALUES
('SP8001', 'Naufal Zaki AlJauhari', 'Jamlang', 6289724),
('SP8002', 'Qaireen Thalita Zahra', 'Karang Anyar', 6281673),
('SP8003', 'Fatimah Aulia Az Zahra', 'Tegal', 6285342),
('SP8004', 'Mayesa Mughni El Fauziah', 'Padalarang', 6287931),
('SP8005', 'Nadhifa Silmi Al Fatya', 'Megu Cilik', 6281294);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kd_petugas`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`),
  ADD KEY `foreignkey` (`kd_obat`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kd_beli`),
  ADD KEY `foreign` (`kd_obat`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kd_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `foreignkey` FOREIGN KEY (`kd_obat`) REFERENCES `stok` (`kd_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`kd_obat`) REFERENCES `stok` (`kd_obat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
