-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jun 2020 pada 13.27
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(11) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `nmproduk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `detail`, `nmproduk`) VALUES
('K01', 'Klepon merupakan salah satu makanan tradisional atau kue tradisional yang termasuk kedalam jajanan pasar. Makanan ini terbuat dari tepung beras ketan yang dibentuk sepeti bola-bola kecil yang kemudian didalamnya diisi gula merah lalu direbus dalam air yang mendidih. Salah satu tanda apabila makanan ini sudah matang adalah munculnya kepermukaan air. Klepon yang sudah matang dan ditiriskan lalu digelindingkan diatas parutan kelapa agar melekat, sehingga kelepon nampak berbalur parutan kelapa.\r\nMakanan ini sangat cocok dinikmati sebagai cemilan diwaktu luang bersama teman, keluarga maupun sanak saudara yang sedang berkunjung. Makanan ini juga dapat dihidangkan sebagai “jamuan” bagi para tamu apabila sedang mengadakan acara atau pesta.\r\n\r\nSaai ini Klepon mulai tergeser keberadaannya dari makanan luar, maka dari itu ayo kita lestarikan warisan nenek moyang kita salah satunya jajanan Klepon. Harganya murah , ramah dikantong sehat serta banyak manfaatnya bagi kesehatan ', 'Klepon'),
('K02', ' Bika Ambon adalah salah satu makanan khas jenis kue basah yang berasal dari Kota Medan, Sumatera Utara. Kue satu ini memiliki ciri khas dengan warnanya yang kuning dan memiliki rongga-rongga di bagian dalamnya. Selain itu kue Bika Ambon juga memiliki citarasa dan aroma yang khas sehingga membuat kita ketagihan untuk menyantapnya. Di Kota Medan sendiri, kue Bika Ambon ini sudah sangat terkenal dan menjadi salah satu icon kuliner kebanggaan masyarakat di sana. Sehingga selalu menjadi buruan para pecinta kuliner maupun para wisatawan saat berkunjung ke sana. Bika Ambon ini memiliki cita rasa yang sangat khas. Rasanya yang legit berpadu dengan teksturnya yang kenyal tentu menimbulkan sensasi tersendiri saat kita menyantapnya. Selain itu aromanya yang kuat juga sangat menggugah selera.', 'Bika Ambon'),
('K03', 'Bicara Black Forest Cake, kita pasti teringat pada kue dengan base bolu cokelat berhias krim dan taburan cokelat serut, tak ketinggalan buah ceri bertangkai yang menjadi ciri khas utamanya. Tidak salah memang, karena biasanya seperti itu yang sering kita lihat di etalase toko-toko kue. Mulai dari toko kue kecil hingga cake shop modern pasti menjual kue ini.\r\n\r\nCita rasa whip cream dan sponge coklat yang menggiurkan dan sangat lembut, juga dengan taburan coklat yang pasti akan membuat anda bahagia.', 'Black Forest'),
('K04', 'Siapa yang tidak kenal dengan cupcake? Cupcake menjadi tren di semua kalangan, mulai dari kalangan anak kecil, remaja, hingga dewasa. Kue ini merupakan salah satu kue yang berhasil memikat para penikmat kue karena memanjakan lidah dengan rasanya yang manis sekaligus memanjakan mata dengan tampilannya yang cantik. Cupcake sendiri dapat diartikan sebagai kue yang berukuran mungil yang dikemas dalam wadah mangkuk kertas kecil.\n\nKue yang memiliki tekstur lembut ini memang tak ada habisnya untuk dikreasikan. Dengan inovasi dan kreatifitas, cupcake bisa dibentuk dan dihias sedemikian rupa sehingga menarik perhatian para konsumen.\n\nUntuk mendapatkan produk cupcake dengan kualitas yang premium, sebaiknya membeli produk cup cake di toko kami', 'Cup Cake');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `tentang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `tentang`) VALUES
(111, 'Kami pernah mendengar pepatah yang berbunyi "Cake, like real love, took time, strong loving hands and patience. it lived, rising and growing to fruition only under the most perfect circumstances."\nKue, seperti cinta sejati, membutuhkan waktu, tangan yang penuh kasih dan kesabaran. ia hidup, tumbuh dan membuahkan hasil hanya di bawah keadaan yang paling sempurna."\n\nSama seperti kami yang selalu berusaha menyebarkan cinta dan kasih melalui kue kue yang kami hidangkan kepada para pembeli. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
