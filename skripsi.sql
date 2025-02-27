-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2025 at 05:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `email`, `nama`, `password`, `role`) VALUES
(1, 'johanesalex774@gmail.com', 'Johannes Alexander Putra', '$2y$10$yTNTu.zp1tp4YKrbMeMYdeKliioYrJ.81iVvjc./TFMYBaBNB4o6m', 1),
(2, 'sitimaryam@gmail.com', 'Siti Maryam, S.Kom., M.Kom.', '$2y$10$fmG/TSTpMWEN8CMRFOIkTekg90rSKHma7cdjeGHd/ZTb/2XUTqika', 1),
(46, 'doni@gmail.com', 'Doni', '$2y$10$AZx.dhjVoXndDr3u5YQnde6fNos.HLZzkMVJA9juKVpPXkE4FAMOa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_attempttest`
--

CREATE TABLE `tb_attempttest` (
  `id_attempt` int NOT NULL,
  `id_siswa` int NOT NULL,
  `id_test` int NOT NULL,
  `masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_comments`
--

CREATE TABLE `tb_comments` (
  `id_comment` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `id_user` int NOT NULL,
  `comment` text COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_globalchat`
--

CREATE TABLE `tb_globalchat` (
  `id_globalchat` int NOT NULL,
  `sender_id` int NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_groupchat`
--

CREATE TABLE `tb_groupchat` (
  `id_groupchat` int NOT NULL,
  `sender_id` int NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `kelompok` int NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasilapersepsi`
--

CREATE TABLE `tb_hasilapersepsi` (
  `id_hasilapersepsi` int NOT NULL,
  `id_siswa` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `jawaban` text COLLATE utf8mb4_general_ci NOT NULL,
  `orientasi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasilprepost`
--

CREATE TABLE `tb_hasilprepost` (
  `id_hasiltest` int NOT NULL,
  `id_siswa` int NOT NULL,
  `jawaban` text COLLATE utf8mb4_general_ci NOT NULL,
  `memahami_masalah` int NOT NULL,
  `merencanakan_pemecahan_masalah` int NOT NULL,
  `melaksanakan_pemecahan_masalah` int NOT NULL,
  `memeriksa_kembali` int NOT NULL,
  `score` int NOT NULL,
  `benar` int NOT NULL,
  `salah` int NOT NULL,
  `kosong` int NOT NULL,
  `id_test` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasilquiz`
--

CREATE TABLE `tb_hasilquiz` (
  `id_hasilquiz` int NOT NULL,
  `id_siswa` int NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `benar` int NOT NULL,
  `salah` int NOT NULL,
  `nilai` int NOT NULL,
  `memahami_masalah` int NOT NULL,
  `merencanakan_pemecahan_masalah` int NOT NULL,
  `melaksanakan_pemecahan_masalah` int NOT NULL,
  `memeriksa_kembali` int NOT NULL,
  `kosong` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasilrefleksi`
--

CREATE TABLE `tb_hasilrefleksi` (
  `id_refleksi` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `seberapa_paham` text COLLATE utf8mb4_general_ci NOT NULL,
  `seberapa_baik` text COLLATE utf8mb4_general_ci NOT NULL,
  `seberapa_sulit` text COLLATE utf8mb4_general_ci NOT NULL,
  `seberapa_cukup` text COLLATE utf8mb4_general_ci NOT NULL,
  `penghambat` text COLLATE utf8mb4_general_ci NOT NULL,
  `saran` text COLLATE utf8mb4_general_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_siswa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasiltugas`
--

CREATE TABLE `tb_hasiltugas` (
  `id_hasiltugas` int NOT NULL,
  `nilai` int DEFAULT NULL,
  `id_pertemuan` int NOT NULL,
  `id_siswa` int NOT NULL,
  `komentar` text COLLATE utf8mb4_general_ci,
  `penilaian` text COLLATE utf8mb4_general_ci,
  `penilaian_sikap` text COLLATE utf8mb4_general_ci,
  `nilai_sikap` int DEFAULT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `upload` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `scored_at` timestamp NULL DEFAULT NULL,
  `memahami_masalah` int DEFAULT NULL,
  `merencanakan_pemecahan_masalah` int DEFAULT NULL,
  `melaksanakan_pemecahan_masalah` int DEFAULT NULL,
  `memeriksa_kembali` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `materi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int NOT NULL,
  `id_siswa` int NOT NULL,
  `pretest` int DEFAULT NULL,
  `posttest` int DEFAULT NULL,
  `tugas_1` int DEFAULT NULL,
  `tugas_2` int DEFAULT NULL,
  `tugas_3` int DEFAULT NULL,
  `tugas_4` int DEFAULT NULL,
  `quiz_1` int DEFAULT NULL,
  `quiz_2` int DEFAULT NULL,
  `quiz_3` int DEFAULT NULL,
  `quiz_4` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_siswa`, `pretest`, `posttest`, `tugas_1`, `tugas_2`, `tugas_3`, `tugas_4`, `quiz_1`, `quiz_2`, `quiz_3`, `quiz_4`) VALUES
(45, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertemuan`
--

CREATE TABLE `tb_pertemuan` (
  `id_pertemuan` int NOT NULL,
  `pertemuan` int NOT NULL,
  `penjelasan` text COLLATE utf8mb4_general_ci NOT NULL,
  `aktif` int NOT NULL,
  `tp` text COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `apersepsi` text COLLATE utf8mb4_general_ci NOT NULL,
  `dateline_tgs` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pertemuan`
--

INSERT INTO `tb_pertemuan` (`id_pertemuan`, `pertemuan`, `penjelasan`, `aktif`, `tp`, `gambar`, `apersepsi`, `dateline_tgs`) VALUES
(1, 1, 'Pada pertemuan pertama kita akan membahas jenis-jenis percabangan dan percabangan tunggal', 1, 'Siswa mampu menentukan solusi permasalahan dengan percabangan tunggal, Siswa mampu menerapkan percabangan satu kasus untuk menyelesaikan permasalahan, Siswa mampu memanipulasi percabangan satu kasus untuk menyelesaikan permasalahan \n', 'percabangantunggal.png', 'Apakah Anda pernah mendengar mengenai percabangan tunggal dan apa itu percabangan dan bagaimana percabangan tunggal menurut anda?', '2024-01-16 16:10:00'),
(2, 2, 'Pada pertemuan kedua kita akan membahas percabangan dua kasus, tiga kasus atau lebih, dan switch', 1, 'Siswa mampu menentukan solusi permasalahan dengan percabangan dua kasus, Siswa mampu menerapkan percabangan dua kasus untuk menyelesaikan permasalahan, Siswa mampu memanipulasi percabangan dua kasus untuk menyelesaikan permasalahan, Siswa mampu menentukan solusi permasalahan dengan percabangan  tiga kasus/lebih, Siswa mampu menerapkan percabangan tiga kasus / lebih untuk menyelesaikan permasalahan, Siswa mampu memanipulasi percabangan tiga kasus / lebih untuk menyelesaikan permasalahan, Siswa mampu menentukan solusi permasalahan dengan percabangan switch, Siswa mampu menerapkan switch , Siswa mampu memanipulasi percabangan switch untuk menyelesaikan permasalahan', 'percabanganduakasus.png', 'Apakah Anda pernah mendengar percabangan dua kasus, tiga kasus, dan switch, jika pernah bagaimana perbedaannya?', '2024-01-16 16:59:03'),
(3, 3, 'Pada pertemuan ketiga kita akan membahas jenis-jenis perulangan ,perulangan for, dan while', 1, 'Siswa mampu menentukan solusi permasalahan dengan perulangan for,  Siswa mampu menerapkan perulangan for untuk menyelesaikan permasalahan, Siswa mampu memanipulasi perulangan for untuk menyelesaikan permasalahan, Siswa mampu menentukan solusi permasalahan dengan perulangan while, Siswa mampu menerapkan perulangan while untuk menyelesaikan permasalahan, Siswa mampu memanipulasi perulangan while untuk menyelesaikan permasalahan', 'perulanganwhile.png', 'Apakah anda pernah mendengar perulangan for dan while, jika pernah kira-kira bagaimana perbedaannya?', '2024-01-22 06:48:48'),
(4, 4, 'Pada pertemuan keempat kita akan mempelajari perulangan do while', 1, 'Siswa mampu menentukan solusi permasalahan dengan perulangan do while, Siswa mampu menerapkan perulangan do while untuk menyelesaikan permasalahan, Siswa mampu memanipulasi perulangan do while untuk menyelesaikan permasalahan', 'perulangandowhile.png', 'Apakah anda pernah mendengar perulangan do while, jika pernah kira-kira bagaimana perbedaan dengan perulangan sebelum-sebelumnya?', '2024-01-23 05:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int NOT NULL,
  `id_pengirim` int NOT NULL,
  `id_lawan` int NOT NULL,
  `pesan` text COLLATE utf8mb4_general_ci NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prepost`
--

CREATE TABLE `tb_prepost` (
  `id_soal` int NOT NULL,
  `soal` text COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_a` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_b` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_c` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_d` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_e` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kunci` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_test` int NOT NULL,
  `id_ps` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_quiz`
--

CREATE TABLE `tb_quiz` (
  `id_soal` int NOT NULL,
  `soal` text COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_a` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_b` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_c` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_d` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_e` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kunci` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pembahasan` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_pertemuan` int NOT NULL,
  `id_ps` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_random`
--

CREATE TABLE `tb_random` (
  `id_random` int NOT NULL,
  `id_user` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kelompok` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_test`
--

CREATE TABLE `tb_test` (
  `id_tes` int NOT NULL,
  `nama` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `aktif` int NOT NULL,
  `waktu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_test`
--

INSERT INTO `tb_test` (`id_tes`, `nama`, `aktif`, `waktu`) VALUES
(1, 'pretest', 1, 80),
(2, 'posttest', 1, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `tugas` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_youtube`
--

CREATE TABLE `tb_youtube` (
  `id_youtube` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `youtube` text COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_attempttest`
--
ALTER TABLE `tb_attempttest`
  ADD PRIMARY KEY (`id_attempt`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_globalchat`
--
ALTER TABLE `tb_globalchat`
  ADD PRIMARY KEY (`id_globalchat`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `tb_groupchat`
--
ALTER TABLE `tb_groupchat`
  ADD PRIMARY KEY (`id_groupchat`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `tb_hasilapersepsi`
--
ALTER TABLE `tb_hasilapersepsi`
  ADD PRIMARY KEY (`id_hasilapersepsi`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_hasilprepost`
--
ALTER TABLE `tb_hasilprepost`
  ADD PRIMARY KEY (`id_hasiltest`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_test` (`id_test`);

--
-- Indexes for table `tb_hasilquiz`
--
ALTER TABLE `tb_hasilquiz`
  ADD PRIMARY KEY (`id_hasilquiz`),
  ADD KEY `id_pertemuan` (`id_pertemuan`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_hasilrefleksi`
--
ALTER TABLE `tb_hasilrefleksi`
  ADD PRIMARY KEY (`id_refleksi`),
  ADD KEY `id_pertemuan` (`id_pertemuan`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_hasiltugas`
--
ALTER TABLE `tb_hasiltugas`
  ADD PRIMARY KEY (`id_hasiltugas`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_pertemuan`
--
ALTER TABLE `tb_pertemuan`
  ADD PRIMARY KEY (`id_pertemuan`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id` (`id_pengirim`),
  ADD KEY `id_lawan` (`id_lawan`);

--
-- Indexes for table `tb_prepost`
--
ALTER TABLE `tb_prepost`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_test` (`id_test`);

--
-- Indexes for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_random`
--
ALTER TABLE `tb_random`
  ADD PRIMARY KEY (`id_random`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`id_tes`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_youtube`
--
ALTER TABLE `tb_youtube`
  ADD PRIMARY KEY (`id_youtube`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_attempttest`
--
ALTER TABLE `tb_attempttest`
  MODIFY `id_attempt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `id_comment` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_globalchat`
--
ALTER TABLE `tb_globalchat`
  MODIFY `id_globalchat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_groupchat`
--
ALTER TABLE `tb_groupchat`
  MODIFY `id_groupchat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `tb_hasilapersepsi`
--
ALTER TABLE `tb_hasilapersepsi`
  MODIFY `id_hasilapersepsi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tb_hasilprepost`
--
ALTER TABLE `tb_hasilprepost`
  MODIFY `id_hasiltest` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_hasilquiz`
--
ALTER TABLE `tb_hasilquiz`
  MODIFY `id_hasilquiz` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_hasilrefleksi`
--
ALTER TABLE `tb_hasilrefleksi`
  MODIFY `id_refleksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_hasiltugas`
--
ALTER TABLE `tb_hasiltugas`
  MODIFY `id_hasiltugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_pertemuan`
--
ALTER TABLE `tb_pertemuan`
  MODIFY `id_pertemuan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
  MODIFY `id_soal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_random`
--
ALTER TABLE `tb_random`
  MODIFY `id_random` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `id_tes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_youtube`
--
ALTER TABLE `tb_youtube`
  MODIFY `id_youtube` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_attempttest`
--
ALTER TABLE `tb_attempttest`
  ADD CONSTRAINT `tb_attempttest_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD CONSTRAINT `tb_comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_akun` (`id`),
  ADD CONSTRAINT `tb_comments_ibfk_2` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_globalchat`
--
ALTER TABLE `tb_globalchat`
  ADD CONSTRAINT `tb_globalchat_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_groupchat`
--
ALTER TABLE `tb_groupchat`
  ADD CONSTRAINT `tb_groupchat_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_hasilapersepsi`
--
ALTER TABLE `tb_hasilapersepsi`
  ADD CONSTRAINT `tb_hasilapersepsi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`),
  ADD CONSTRAINT `tb_hasilapersepsi_ibfk_2` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_hasilprepost`
--
ALTER TABLE `tb_hasilprepost`
  ADD CONSTRAINT `tb_hasilprepost_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`),
  ADD CONSTRAINT `tb_hasilprepost_ibfk_2` FOREIGN KEY (`id_test`) REFERENCES `tb_test` (`id_tes`);

--
-- Constraints for table `tb_hasilquiz`
--
ALTER TABLE `tb_hasilquiz`
  ADD CONSTRAINT `tb_hasilquiz_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`),
  ADD CONSTRAINT `tb_hasilquiz_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_hasilrefleksi`
--
ALTER TABLE `tb_hasilrefleksi`
  ADD CONSTRAINT `tb_hasilrefleksi_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`),
  ADD CONSTRAINT `tb_hasilrefleksi_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_hasiltugas`
--
ALTER TABLE `tb_hasiltugas`
  ADD CONSTRAINT `tb_hasiltugas_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`),
  ADD CONSTRAINT `tb_hasiltugas_ibfk_2` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD CONSTRAINT `tb_materi_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_pengirim`) REFERENCES `tb_akun` (`id`),
  ADD CONSTRAINT `tb_pesan_ibfk_2` FOREIGN KEY (`id_lawan`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
  ADD CONSTRAINT `tb_quiz_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_random`
--
ALTER TABLE `tb_random`
  ADD CONSTRAINT `tb_random_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD CONSTRAINT `tb_tugas_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_youtube`
--
ALTER TABLE `tb_youtube`
  ADD CONSTRAINT `tb_youtube_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
