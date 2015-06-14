-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2015 at 08:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan_psu`
--

CREATE TABLE IF NOT EXISTS `kerusakan_psu` (
  `ID` bigint(15) NOT NULL,
  `solusi_dan_pertanyaan` varchar(500) NOT NULL,
  `bila_benar` bigint(15) NOT NULL,
  `bila_salah` bigint(15) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan_psu`
--

INSERT INTO `kerusakan_psu` (`ID`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Apakah ada daya listik masuk?', 11, 10, 'Y', 'N'),
(10, 'Sumber listrik AC dalam kondisi baik?', 101, 100, 'Y', 'N'),
(100, 'Permasalahan ada pada terminal listrik. Coba dengan terminal yang lain.', 0, 0, 'N', 'Y'),
(101, 'Apakah pengaturan 110/220V disetel dengan benar?', 1011, 1010, 'Y', 'N'),
(1010, 'Pilih pengaturan voltase yg sesuai pada bagian belakang power supply.', 0, 0, 'N', 'Y'),
(1011,'Apakah tombol Power Switch telah terhubung dengan benar pada Motherboard?', 10111, 10110, 'Y', 'N'),
(10110, 'Periksa buku manual motherboard. Sambungkan tombol panel depan (Power, Reset, dll) pada motherboard dengan benar.', 0, 0, 'N', 'Y'),
(10111, 'Tombol power rusak?', 101111, 101110, 'Y', 'N'),
(101110, 'Konektor daya dari power supply sudah tersambung dengan benar pada motherboard?', 1011101, 1011100, 'Y', 'N'),
(1011100, 'Sambungkan konektor daya power supply dengan benar pada motherboard.', 0, 0, 'N', 'Y'),
(1011101, 'Apakah hard disk dapat berputar?', 10111011, 10111010, 'Y', 'N'),
(10111010, 'Coba dengan konektor ATA / SATA yang lain. Apakah hard disk berputar?', 101110101, 101110100, 'Y', 'N'),
(101110100, 'Coba Hard Disk di komputer lain.', 0, 0, 'N', 'Y'),
(101110101, 'Kebel konektor SATA/ATA atau konektor dari Power Supply yang rusak.', 0, 0, 'N', 'Y'),
(10111011, 'Apakah ada kemungkinan ada adapter (vidio card, sound card, dll) yang bermasalah?', 101110111, 101110110, 'Y', 'N'),
(101110110, 'Coba lepas semua komponen rangkai diluar case. Apakah komputer bisa menyala dengan baik?', 1011101101, 1011101100, 'Y', 'N'),
(1011101100, 'Ganti Power Supply.', 0, 0, 'N', 'Y'),
(1011101101, 'Kemungkinan terjadi konsleting pada casing ketika motherboard terpasang atau gemetri casing yang tidak kompatible dengan motherboard.', 0, 0, 'N', 'Y'),
(101110111, 'Lepas semua adapter kecuali vidio card. Coba nyalakan komputer. Apakah ada layar muncul di monitor?', 1011101111, 1011101110, 'Y', 'N'),
(1011101110, 'Mungkin ada kerusakan pada VGA. <br><h3><a href="kerusakan_vga.php">Klik disini untuk pergi ke proses diagnosis kerusakan VGA</a></h3>', 0, 0, 'N', 'Y'),
(1011101111, 'Pasang komponen selanjutnya apakah komputer dapat booting?', 10111011111, 10111011110, 'Y', 'N'),
(10111011110, 'Komponen rusak atau tidak kompatible.', 0, 0, 'N', 'Y'),
(10111011111, 'Install driver. Apakah ada konflik pada device manager?', 101110111111, 101110111110, 'Y', 'N'),
(101110111110, 'Kembali pada langkah sebelumnya (Pasang komponen selanjutnya) / Klik back pada browser dua kali.', 0, 0, 'N', 'Y'),
(101110111111, 'Pastikan driver terbaru terinstall pada sistem operasi.', 0, 0, 'N', 'Y'),
(101111, 'Ganti tombol Power. Atau gunakan tombol reset.', 0, 0, 'N', 'Y'),
(11, 'Apakah muncul boot screen BIOS atapun OS?', 111, 110, 'Y', 'N'),
(110, 'Proses pada diagnosis kerusakan vidio card? <br><h3><a href="kerusakan_vga.php">Klik disini untuk pergi ke proses diagnosis kerusakan VGA</a></h3>', 0, 0, 'N', 'Y'),
(111, 'Komputer baru dirakit?', 1111, 1110, 'Y', 'N'),
(1110, 'Menyala setelah booting kedua?', 11101, 11100, 'Y', 'N'),
(11100, 'Terdengar suara beep?', 111001, 111000, 'Y', 'N'),
(111000, 'Apakah ada komponen baru yang terpasang?', 1110001, 1110000, 'Y', 'N'),
(1110000, 'Apakah hard disk dapat berputar?', 11100001, 11100000, 'Y', 'N'),
(11100000, 'Coba dengan konektor ATA / SATA yang lain. Apakah hard disk berputar?', 111000001, 111000000, 'Y', 'N'),
(111000000, 'Coba Hard Disk di komputer lain.', 0, 0, 'N', 'Y'),
(111000001, 'Kebel konektor SATA/ATA atau konektor dari Power Supply yang rusak.', 0, 0, 'N', 'Y'),
(11100001, 'Apakah ada kemungkinan ada adapter (vidio card, sound card, dll) yang bermasalah?', 111000011, 111000010, 'Y', 'N'),
(111000010, 'Coba lepas semua komponen rangkai diluar case. Apakah komputer bisa menyala dengan baik?', 1110000101, 1110000100, 'Y', 'N'),
(1110000100, 'Ganti Power Supply.', 0, 0, 'N', 'Y'),
(1110000101, 'Kemungkinan terjadi konsleting pada casing ketika motherboard terpasang atau gemetri casing yang tidak kompatible dengan motherboard.', 0, 0, 'N', 'Y'),
(111000011, 'Lepas semua adapter kecuali vidio card. Coba nyalakan komputer. Apakah ada layar muncul di monitor?', 1110000111, 1110000110, 'Y', 'N'),
(1110000110, 'Proses pada diagnosis kerusakan VGA? <br><h3><a href="kerusakan_vga.php">Klik disini untuk pergi ke proses diagnosis kerusakan VGA</a></h3>', 0, 0, 'N', 'Y'),
(1110000111, 'Pasang komponen selanjutnya apakah komputer dapat booting?', 11100001111, 11100001110, 'Y', 'N'),
(11100001110, 'Komponen rusak atau tidak kompatible.', 0, 0, 'N', 'Y'),
(11100001111, 'Install driver. Apakah ada konflik pada device manager?', 111000011111, 111000011110, 'Y', 'N'),
(111000011110, 'Kembali pada langkah sebelumnya (Pasang komponen selanjutnya) / Klik back pada browser dua kali.', 0, 0, 'N', 'Y'),
(111000011111, 'Pastikan driver terbaru terinstall pada sistem operasi.', 0, 0, 'N', 'Y'),
(1110001, 'Lepas komponen yang baru dipasang. Coba lagi.', 0, 0, 'N', 'Y'),
(111001, 'Proses pada diagnosis kerusakan motherboard, processor dan RAM.<br><h3><a href="kerusakan_mobo.php">Klik disini untuk pergi ke proses diagnosis kerusakan motherboard, processor dan RAM</a></h3>', 0, 0, 'N', 'Y'),
(11101, 'Masalah pada sinyal power_ok (power_good) yang prematur. Coba power supply lain (kemungkinan kualitas power supply yang buruk).', 0, 0, 'N', 'Y'),
(1111, 'Periksa kebutuhan daya pada komponen - komponen yang terpasang. Pastikan daya Power Supply mencukupi.', 0, 0, 'N', 'Y');

--
-- Table structure for table `kerusakan_hdd`
--

CREATE TABLE IF NOT EXISTS `kerusakan_hdd` (
  `ID` bigint(15) NOT NULL,
  `solusi_dan_pertanyaan` varchar(500) NOT NULL,
  `bila_benar` bigint(15) NOT NULL,
  `bila_salah` bigint(15) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan_hdd`
--

INSERT INTO `kerusakan_hdd` (`ID`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Drive terdaftar pada BIOS?', 11, 10, 'Y', 'N'),
(11, 'Masalah pada CD atau DVD?', 111, 110, 'Y', 'N'),
(111, 'Proses pada Diagnosis Permasalahan CD / DVD.<br><h3><a href="kerusakan_dvd.php">Klik disini untuk pergi ke proses diagnosis kerusakan DVD/CD</a></h3>', 0, 0, 'N', 'Y'),
(110, 'Apakah Hard Drive berputar?', 1101, 1100, 'Y', 'N'),
(1101, 'Coba tukar kabel power had drive dengan yang lain.', 0, 0, 'N', 'Y'),
(1100, 'Apakah BIOS mendeteksi mode transfer dengan benar untuk Hard Drive PATA (lama)?', 11001, 11000, 'Y', 'N'),
(11000, 'Hard Drive PATA membutuhkan kabel 80 konduktor.', 0, 0, 'N', 'Y'),
(11001, 'Apakah FDISK mengenali Drive?', 110011, 110010, 'Y', 'N'),
(110011, 'Proses pada Diagnosis Masalah Boot & Performa Hard Drive. <br><h3><a href="performa_hdd.php">Klik disini untuk pergi ke proses diagnosis Masalah boot & Performa Hard Drive</a></h3>', 0, 0, 'N', 'Y'),
(110010, 'Cek lagi kabel IDE (pastikan dalam kondisi bagus dan terpasang dengan baik, jika tidak yakin coba dengan kabel yang lain). Pastikan juga tidak setting read only pada jumper (biasanya setting ini hanya di SCSI). Jika masih belum dikenali FDISK, kemungkinan MBR rusak. Jika anda tidak takut kehilangan data, coba format MBR hard drive.', 0, 0, 'N', 'Y'),
(10, 'Apakah hard disk dapat berputar?', 101, 100, 'Y', 'N'),
(100, 'Coba tukar kabel power hard drive. Jika hard drive dapat berputar, kemungkinan besar kabel yang sebelumnya rusak.', 0, 0, 'N', 'Y'),
(101, 'Drive SATA?', 1011, 1010, 'Y', 'N'),
(1011, '300 MB/s SATA2?', 10111, 10110, 'Y', 'N'),
(10111, 'Periksa pengaturan jumper, jika anda menggunakan 150MB/s controller.', 0, 0, 'N', 'Y'),
(10110, 'Koneksi data bagus?', 101101, 101100, 'Y', 'N'),
(101100, 'Periksa kabel SATA, pastikan kedua sisi dalam kondisi baik. Coba kabel pada drive lain atau sebaliknya.', 0, 0, 'N', 'Y'),
(101101, 'BIOS pada motherboard lama, mungkin gagal dalam mendeteksi drive dengan interface SATA.', 0, 0, 'N', 'Y'),
(1010, 'Pengaturan Master / Slave sudah benar?', 10101, 10100, 'Y', 'N'),
(10100, 'Pengaturan CS(Cable Select) sudah benar?', 101001, 101000, 'Y', 'N'),
(101000, 'Atur konfirgurasi Master - Slave. Atau gunakan setting Cable Select (CS).', 0, 0, 'N', 'Y'),
(10101, 'Kabel terpasang dengan baik? Jika ragu, lepas dan pasang lagi dengan benar dan kencang.', 101011, 101010, 'Y', 'N'),
(101001, 'Kabel terpasang dengan baik? Jika ragu, lepas dan pasang lagi dengan benar dan kencang.', 1010011, 1010010, 'Y', 'N'),
(101010, 'Pasang kembali kabel IDE dan juga kabel powernya. Jika masih belum berhasil, coba kabel yang lain.', 0, 0, 'N', 'Y'),
(1010010, 'Pasang kembali kabel IDE dan juga kabel powernya. Jika masih belum berhasil, coba kabel yang lain.', 0, 0, 'N', 'Y'),
(101011, 'Kabel IDE terkunci dengan baik pada slot yang tepat? Jangan sampe tertukar dengan Floppy (baca manual motherboard). Jangan sampai terbaik juga.', 1010111, 1010110, 'Y', 'N'),
(1010011, 'Kabel IDE terkunci dengan baik pada slot yang tepat? Jangan sampe tertukar dengan Floppy (baca manual motherboard). Jangan sampai terbaik juga.', 10100111, 10100110, 'Y', 'N'),
(1010110, 'Pastikan konektor terpasang dengan benar pada slot di drive dan motherboard. Pin 1 pada drive biasanya terletak disamping slot power.', 0, 0, 'N', 'Y'),
(10100110, 'Pastikan konektor terpasang dengan benar pada slot di drive dan motherboard. Pin 1 pada drive biasanya terletak disamping slot power.', 0, 0, 'N', 'Y'),
(1010111, 'Ganti kabel IDE. Jika masih belum dikenali BIOS. Kemungkinan Slot pada motherboard rusak, atau hard drive yang rusak.', 0, 0, 'N', 'Y'),
(10100111, 'Ganti kabel IDE. Jika masih belum dikenali BIOS. Kemungkinan Slot pada motherboard rusak, atau hard drive yang rusak.', 0, 0, 'N', 'Y');

--
-- Table structure for table `performa_hdd`
--

CREATE TABLE IF NOT EXISTS `performa_hdd` (
  `ID` bigint(15) NOT NULL,
  `solusi_dan_pertanyaan` varchar(500) NOT NULL,
  `bila_benar` bigint(15) NOT NULL,
  `bila_salah` bigint(15) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performa_hdd`
--

INSERT INTO `performa_hdd` (`ID`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'OS pada drive dapat booting?', 11, 10, 'Y', 'N'),
(10, 'Setting boot order pada BIOS sudah diatur?', 101, 100, 'Y', 'N'),
(100, 'Set drive yang terinstall OS pada prioritas boot order pertama.', 0, 0, 'N', 'Y'),
(101, 'Booting OS lewat CD?', 1011, 1010, 'Y', 'N'),
(1010, 'Proses ke Diagnosis Kerusakan ATA Drive. <br><h3><a href="kerusakan_hdd.php">Klik disini untuk pergi ke proses diagnosis kerusakan SATA/ATA Hard Drive</a></h3>', 0, 0, 'N', 'Y'),
(1011, 'Dapat masuk OS (Live OS) via CD / USB dan anda dapat melihat isi har drive?', 10111, 10110, 'Y', 'N'),
(10111, 'OS yg corrupt(rusak), atau kemungkinan ada virus juga. Back up data yg penting. Coba antivirus dan perbaikan OS.', 0, 0, 'N', 'Y'),
(10110, 'Punya back up data?', 101101, 101100, 'Y', 'N'),
(101101, 'Repair OS atau instal ulang OS. Kalau gagal, coba detkesi partisi dengan FDISK ( hancurkan semua data) dan coba.', 0, 0, 'N', 'Y'),
(101100, 'Kalau data penting, coba antivirus dan dokter software disk atau kirim drive untuk perbaikan data.', 0, 0, 'N', 'Y'),
(11, 'Performa hard drive lambat atau berisik?', 111, 110, 'Y', 'N'),
(111, 'Ada minimal 20% space yang kosong?', 1111, 1110, 'Y', 'N'),
(1110, 'Hapus data yang tidak diperlukan untuk menambah space, atau tambahkan hard drive baru.', 0, 0, 'N', 'Y'),
(1111, 'Sudah melakukan ScanDisk dan Disk Defragment?', 11111, 11110, 'Y', 'N'),
(11110, 'Jalankan ScanDisk dan Disk Defragment. Tutup semua proses jika akan restart.', 0, 0, 'N', 'Y'),
(11111, 'Hard Drive selalu berisik?', 111111, 111110, 'Y', 'N'),
(111111, 'Mungkin hard drive masih dapat bertahan dengan suara berisik. Tetapi pastikan anda mempunya back up data untuk jaga - jaga kalau hard drive anda rusak.', 0, 0, 'N', 'Y'),
(111110, 'Tidak ada solusi. Coba Diagnosis lain.', 0, 0, 'N', 'Y'),
(110, 'Apakah hard disk terdengar berputar kemudian diam?', 1101, 1100, 'Y', 'N'),
(1101, 'Periksa Power Managament pad BIOS dan Sistem Operasi (Windows atau yang lain).', 0, 0, 'N', 'Y'),
(1100, 'Apakah ada data error?', 11001, 11000, 'Y', 'N'),
(11001, 'Pastikan ada free space minimal 10%. Kemudian cek dari virus. Kemudian coba lakukan thorough ScanDIsk.', 0, 0, 'N', 'Y'),
(11000, 'Masalah (error) pada konfigurasi RAID 0?', 110001, 110000, 'Y', 'N'),
(110001, 'Data untuk performa tinggi sehingga lebih baik punya back up.', 0, 0, 'N', 'Y'),
(110000, 'Masalah (error) pada konfigurasi RAID 1?', 1100001, 1100000, 'Y', 'N'),
(1100001, 'Data di-mirror pada tiap hard disk, jika ada yang rusak, cukup ganti salah satu.', 0, 0, 'N', 'Y'),
(1100000, 'Masalah (error) pada konfigurasi RAID 5?', 11000001, 11000000, 'Y', 'N'),
(11000000, 'Masalah tak tertentukan atau pengendali RAID. Coba deteksi lain atau gantikan pengendali dengan yg identik.', 0, 0, 'N', 'Y'),
(11000001, 'Data terstrip lebih dari 3 atau lebih drive, gantikan drive yg gagal dan bangun kembali array dari software pengendali RAID.', 0, 0, 'N', 'Y');

--
-- Table structure for table `kerusakan_mobo`
--

CREATE TABLE IF NOT EXISTS `kerusakan_mobo` (
  `ID` bigint(15) NOT NULL,
  `solusi_dan_pertanyaan` varchar(500) NOT NULL,
  `bila_benar` bigint(15) NOT NULL,
  `bila_salah` bigint(15) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan_mobo`
--

INSERT INTO `kerusakan_mobo` (`ID`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Apakah muncul "boot screen", BIOS atapun OS?', 11, 10, 'Y', 'N'),
(10, 'Diagnosis Power Supply telah dilakukan?', 101, 100, 'Y', 'N'),
(100, 'Proses ke Diagnosis Kerusakan Power Supply.<br><h3><a href="kerusakan_psu.php">Klik disini untuk pergi ke proses diagnosis kerusakan Power Supply</a></h3>', 0, 0, 'N', 'Y'),
(101, 'Diagnosis Vidio Card telah dilakukan?', 1011, 1010, 'Y', 'N'),
(1010, 'Proses ke Diagnosis Kerusakan Vidio Card.<br><h3><a href="kerusakan_vga.php">Klik disini untuk pergi ke proses diagnosis kerusakan VGA</a></h3>', 0, 0, 'N', 'Y'),
(1011, 'RAM telah terpasang dengan baik dan cocok?', 10111, 10110, 'Y', 'N'),
(10110, 'Lepas dan pasang kembali RAM.', 0, 0, 'N', 'Y'),
(10111, 'Apakah processor sudah terpasang dengan benar? (Jika tidak yakin, coba periksa dahulu, atau jawab "TIDAK")', 101111, 101110, 'Y', 'N'),
(101110, 'Lepas dan pasang kembali processor dan heatsink dengan benar.', 0, 0, 'N', 'Y'),
(101111, 'Kipas pendingin processor aktif?', 1011111, 1011110, 'Y', 'N'),
(1011110, 'Periksa apakah konektor power kipas (fan) heatsink sudah tersambung. Jika sudah dan kipas tetap tidak menyala, ganti dengan yang baru.', 0, 0, 'N', 'Y'),
(1011111, 'Terdengan bunyi beep?', 10111111, 10111110, 'Y', 'N'),
(10111110, 'Pengaturan motherboard (jumper, slot, dll) dalam kondisi default? (Mungkin anda baru mengutak-atik jumper, pin atau konektor pada motherboard)', 101111101, 101111100, 'Y', 'N'),
(101111100, 'Kembalikan pengaturan jumper, pin atau konektor pada motherboard pada posisi semula.', 0, 0, 'N', 'Y'),
(101111101, 'Coba lepas semua komponen, rangkai diluar case. Apakah komputer bisa menyala dengan baik?', 1011111011, 1011111010, 'Y', 'N'),
(1011111010, 'Coba gunakan processor lain (pinjam) yang compatible, apakah PC dapat menyala?', 10111110101, 10111110100, 'Y', 'N'),
(10111110100, 'Motherboard yang buruk / rusak.', 0, 0, 'N', 'Y'),
(10111110101, 'Processor bermasalah. Ketika mengganti, pastikan voltase dan heatsink berjalan baik.', 0, 0, 'N', 'Y'),
(1011111011, 'Kemungkinan terjadi konsleting pada casing ketika motherboard terpasang, atau gemetri casing yang tidak kompatible dengan motherboard.', 0, 0, 'N', 'Y'),
(10111111, 'Ganti RAM denngan tipe yang compatible dengan motherboard.', 0, 0, 'N', 'Y'),
(11, 'Stuck (berhenti) pada boot screen?', 111, 110, 'Y', 'N'),
(110, 'Proses ke Diagnosis Performa Motherboard, Processor, dan RAM.<br><h3><a href="performa_mobo.php">Klik disini untuk pergi ke proses diagnosis kerusakan Motherboard, RAM dan Processor</a></h3>', 0, 0, 'N', 'Y'),
(111, 'Coba hanya sambungkan Power Supply, motherboard, minimum RAM, Processo, heatsink, dan Vidio Card (jika menggunakan). Apakah sistem masih membeku (tidak dapat menyala)?', 1111, 1110, 'Y', 'N'),
(1110, 'Proses ke Diagnosis Konflik Hardware <br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Konflik Hardware</a></h3>', 0, 0, 'N', 'Y'),
(1111, 'Coba tukar posisi RAM, apakah sistem masih belum dapat menyala? Jika iya, coba ganti dengan RAM yang sudah pasti dalam kondisi baik (pinjam).', 0, 0, 'N', 'Y'),
(11110, 'Ganti RAM denngan tipe yang compatible dengan motherboard.', 0, 0, 'N', 'Y'),
(11111, 'Pengaturan CMOS/BIOS default?', 111111, 111110, 'Y', 'N'),
(111110, 'Coba kembalikan pengaturan BIOS pada default.', 0, 0, 'N', 'Y'),
(111111, 'Heatsink (pendingin) processor aktif?', 1111111, 1111110, 'Y', 'N'),
(1111110, 'Instal heatsink baru, sambungkan kipas. Mungkin terlambat untuk processor anda.', 0, 0, 'N', 'Y'),
(1111111, 'Coba lepas semua komponen, rangkai diluar case. Apakah komputer bisa menyala dengan baik?', 0, 0, 'N', 'Y'),
(11111110, 'Coba gunakan processor lain (pinjam) yang compatible, apakah PC dapat menyala?', 111111101, 111111100, 'Y', 'N'),
(111111100, 'Motherboard yang buruk / rusak.', 0, 0, 'N', 'Y'),
(111111101, 'Processor bermasalah. Ketika mengganti, pastikan voltase dan heatsink berjalan baik.', 0, 0, 'N', 'Y'),
(11111111, 'Kemungkinan terjadi konsleting pada casing ketika motherboard terpasang, atau gemetri casing yang tidak kompatible dengan motherboard.', 0, 0, 'N', 'Y');

--
-- Table structure for table `performa_mobo`
--

CREATE TABLE IF NOT EXISTS `performa_mobo` (
  `ID` bigint(15) NOT NULL,
  `solusi_dan_pertanyaan` varchar(500) NOT NULL,
  `bila_benar` bigint(15) NOT NULL,
  `bila_salah` bigint(15) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performa_mobo`
--

INSERT INTO `performa_mobo` (`ID`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Diminta password (BIOS password, bukan pada OS)?', 11, 10, 'Y', 'N'),
(11, 'Jika anda tidak tahu, coba cari manual motherboard, itu mendeskripsikan operasi dari jumper "bersihkan kata sandi".', 0, 0, 'N', 'Y'),
(10, 'Masuk pada Loading Sistem Operasi?', 101, 100, 'Y', 'N'),
(100, 'Proses pada Diagnosis Performa Hard Drive.<br><h3><a href="performa_hdd.php">Klik disini untuk pergi ke proses diagnosis Kinerja Hard Drive</a></h3>', 0, 0, 'N', 'Y'),
(101, 'Apakah terjadi reboot berulang saat PC dinyalakan?', 1011, 1010, 'Y', 'N'),
(1011, 'Kondisi listrik bagus?', 10111, 10110, 'Y', 'N'),
(10111, 'Kemungkinan power supply kurang baik (kurang mencukupi kebutuhan sistem).', 0, 0, 'N', 'Y'),
(10110, 'Beli UPS untuk perlindungan pada listrik yang tidak stabil dan listrik padam.', 0, 0, 'N', 'Y'),
(1010, 'Apakah tiba - tiba system tiba - tiba freeze / membeku (berhenti) saat booting?', 10101, 10100, 'Y', 'N'),
(10101, 'Software virus kadaluwarsa?', 101011, 101010, 'Y', 'N'),
(101010, 'Pasang update virus terbaru, periksa sisa space hard disk.', 0, 0, 'N', 'Y'),
(101011, 'Casing atau komputer panas?(Periksa suhu di BIOS)', 1010111, 1010110, 'Y', 'N'),
(1010110, 'Sepertinya RAM bermasalah, atau power supply. Jalankan lagi Diagnosis yang berkaitan.', 0, 0, 'N', 'Y'),
(1010111, 'Casing panas,periksa kipas casing, pastikan ada air flow agar panas dapat keluar dari casing. Processor panas, ganti heatsink, gunakan pasta.', 0, 0, 'N', 'Y'),
(10100, 'Masalah pada Audio?', 101001, 101001, 'Y', 'N'),
(101001, 'Proses ke Diagnosis Kerusakan Audio.<br><h3><a href="kerusakan_Audio.php">Klik disini untuk pergi ke proses diagnosis kerusakan Audio</a></h3>', 0, 0, 'N', 'Y'),
(101000, 'Masalah pada Network (Jaringan)?', 1010001, 1010000, 'Y', 'N'),
(1010001, 'Proses ke Diagnosis Kerusakan Jaringan. <br><h3><a href="kerusakan_jaringan.php">Klik disini untuk pergi ke proses diagnosis kerusakan Jaringan</a></h3>', 0, 0, 'N', 'Y'),
(1010000, 'Port USB bermasalah?', 10100001, 10100000, 'Y', 'N'),
(10100001, 'Kalau port USB mati, rusak,lambat, instal adapter pci to USB.', 0, 0, 'N', 'Y'),
(10100000, 'Masalah pada Keyboard, mouse?', 101000001, 101000000, 'Y', 'N'),
(101000001, 'Kalau koneksi PS2 gagal, ganti dengan usb.', 0, 0, 'N', 'Y'),
(101000000, 'Setting waktu kembali pada tanggal tertentu? Berulang-ulang setelah PC dimatikan.', 0, 0, 'N', 'Y'),
(1010000001, 'Ganti baterai BIOS pada motherboard.', 0, 0, 'N', 'Y'),
(1010000000, 'Identifikasi hardware (Processor, RAM, dll) salah?', 10100000001, 10100000000, 'Y', 'N'),
(10100000001, 'Update driver motherboard untuk Windows (OS lainya). Kalau identifikasi hardware bios yang salah, coba lakukan update (flash) BIOS (sedikit beresiko).', 0, 0, 'N', 'Y'),
(10100000000, 'Tidak berkesimpulan. Coba deteksi lain.', 0, 0, 'N', 'Y');

--
-- Table structure for table `kerusakan_vga`
--

CREATE TABLE IF NOT EXISTS `kerusakan_vga` (
  `ID` bigint(15) NOT NULL,
  `solusi_dan_pertanyaan` varchar(500) NOT NULL,
  `bila_benar` bigint(15) NOT NULL,
  `bila_salah` bigint(15) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan_vga`
--

INSERT INTO `kerusakan_vga` (`ID`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Apakah ada daya listik masuk?', 11, 10, 'Y', 'N'),
(10, 'Proses ke Diagnosis Kerusakan Power Supply <br><h3><a href="kerusakan_vga.php">Klik disini untuk pergi ke proses diagnosis kerusakan Power Supply</a></h3>', 0, 0, 'N', 'Y'),
(11, 'Apakah muncul tampilan pada layar monitor?', 111, 110, 'Y', 'N'),
(111, 'Muncul pesan "no power" pada monitor?', 1111, 1110, 'Y', 'N'),
(1111, 'Sambungkan power tambahan pada Vidio Card.', 0, 0, 'N', 'Y'),
(1110, 'Muncul pesan "no signal" pada monitor?', 11101, 11100, 'Y', 'N'),
(11100, 'Stuck (Berhenti) pada layar BIOS?', 11100, 111000, 'Y', 'N'),
(111000, 'Proses ke Diagnosis Kinerja VGA.<br><h3><a href="performa_vga.php">Klik disini untuk pergi ke proses diagnosis kinerja VGA</a></h3>', 0, 0, 'N', 'Y'),
(111001, 'Apakah ada komponen baru yang dipasang?', 1110011, 1110010, 'Y', 'N'),
(11101110, 'Apakah ada komponen baru yang dipasang?', 111011101, 111011100, 'Y', 'N'),
(110110110, 'Apakah ada komponen baru yang dipasang?', 1101101101, 1101101100, 'Y', 'N'),
(110111110, 'Apakah ada komponen baru yang dipasang?', 1101111101, 1101111100, 'Y', 'N'),
(1110011, 'Dapat menyala dengan satu Vidio Card?', 11100111, 11100110, 'Y', 'N'),
(111011101, 'Dapat menyala dengan satu Vidio Card?', 1110111011, 1110111010, 'Y', 'N'),
(1101101101, 'Dapat menyala dengan satu Vidio Card?', 11011011011, 11011011010, 'Y', 'N'),
(1101111101, 'Dapat menyala dengan satu Vidio Card?', 11011111011, 11011111010, 'Y', 'N'),
(11100111, 'Proses ke Diagnosis Konflik Hardware.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Konflik Hardware</a></h3>', 0, 0, 'N', 'Y'),
(1110111011, 'Proses ke Diagnosis Konflik Hardware.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Konflik Hardware</a></h3>', 0, 0, 'N', 'Y'),
(11011011011, 'Proses ke Diagnosis Konflik Hardware.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Konflik Hardware</a></h3>', 0, 0, 'N', 'Y'),
(11011111011, 'Proses ke Diagnosis Konflik Hardware.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Konflik Hardware</a></h3>', 0, 0, 'N', 'Y'),
(11100110, 'Dapat menyala dengan Vidio Card baru?', 111001101, 111001100, 'Y', 'N'),
(1110010, 'Dapat menyala dengan Vidio Card baru?', 11100101, 11100100, 'Y', 'N'),
(1110111010, 'Dapat menyala dengan Vidio Card baru?', 11101110101, 11101110100, 'Y', 'N'),
(111011100, 'Dapat menyala dengan Vidio Card baru?', 1110111001, 1110111000, 'Y', 'N'),
(11011011010, 'Dapat menyala dengan Vidio Card baru?', 110110110101, 110111110100, 'Y', 'N'),
(11011111010, 'Dapat menyala dengan Vidio Card baru?', 110111110101, 110111110100, 'Y', 'N'),
(111001101, 'Vidio card yang lama rusak.', 0, 0, 'N', 'Y'),
(11100101, 'Vidio card yang lama rusak.', 0, 0, 'N', 'Y'),
(11101110101, 'Vidio card yang lama rusak.', 0, 0, 'N', 'Y'),
(1110111001, 'Vidio card yang lama rusak.', 0, 0, 'N', 'Y'),
(110110110101, 'Vidio card yang lama rusak.', 0, 0, 'N', 'Y'),
(110111110101, 'Vidio card yang lama rusak.', 0, 0, 'N', 'Y'),
(111001100, 'Proses ke Diagnosis Kerusakan Motherboard.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Kerusakan Motherboard</a></h3>', 0, 0, 'N', 'Y'),
(11100100, 'Proses ke Diagnosis Kerusakan Motherboard.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Kerusakan Motherboard</a></h3>', 0, 0, 'N', 'Y'),
(11101110100, 'Proses ke Diagnosis Kerusakan Motherboard.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Kerusakan Motherboard</a></h3>', 0, 0, 'N', 'Y'),
(1110111000, 'Proses ke Diagnosis Kerusakan Motherboard.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Kerusakan Motherboard</a></h3>', 0, 0, 'N', 'Y'),
(110110110100, 'Proses ke Diagnosis Kerusakan Motherboard.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Kerusakan Motherboard</a></h3>', 0, 0, 'N', 'Y'),
(110111110100, 'Proses ke Diagnosis Kerusakan Motherboard.<br><h3><a href="konflik_hardware.php">Klik disini untuk pergi ke proses diagnosis Kerusakan Motherboard</a></h3>', 0, 0, 'N', 'Y'),
(11101, 'Kabel VGA dalam kondisi baik?', 111011, 111010, 'Y', 'N'),
(110110, 'Kabel VGA dalam kondisi baik?', 1101101, 1101100, 'Y', 'N'),
(111010, 'Periksa ujung konektor VGA.', 0, 0, 'N', 'Y'),
(1101100, 'Periksa ujung konektor VGA.', 0, 0, 'N', 'Y'),
(111011, 'Apakah monitor sudah dites?', 1110111, 1110110, 'Y', 'N'),
(1101101, 'Apakah monitor sudah dites?', 11011011, 11011010, 'Y', 'N'),
(1110110, 'Coba monitor pada PC atau laptop yg pasti menyala.', 0, 0, 'N', 'Y'),
(11011010, 'Coba monitor pada PC atau laptop yg pasti menyala.', 0, 0, 'N', 'Y'),
(1110111, 'Kabel VGA rusak atau bengkok?', 11101111, 11101110, 'Y', 'N'),
(11011011, 'Kabel VGA rusak atau bengkok?', 110110111, 110110110, 'Y', 'N'),
(11011111, 'Kabel VGA rusak atau bengkok?', 110111111, 110111110, 'Y', 'N'),
(11101111, 'Perbaiki atau ganti kabel VGA.', 0, 0, 'N', 'Y'),
(110110111, 'Perbaiki atau ganti kabel VGA.', 0, 0, 'N', 'Y'),
(110111111, 'Perbaiki atau ganti kabel VGA.', 0, 0, 'N', 'Y'),
(110, 'Monitor menyala?', 1101, 1100, 'Y', 'N'),
(1100, 'Periksa sumber listrik monitor. Pastikan konektor power tertancap pada monitor.', 0, 0, 'N', 'Y'),
(1101, 'Pengaturan brigtness & contrast sudah tepat?', 11011, 11010, 'Y', 'N'),
(11010, 'Atur brigtness dan contrast dengan tepat sehingga tampilan monitor dapat dilihat oleh mata.', 0, 0, 'N', 'Y'),
(11011, 'Terdenga bunyi beep?', 110111, 110110, 'Y', 'N'),
(110111, 'Vidio Card terpasang dengan baik?', 1101111, 1101110, 'Y', 'N'),
(1101110, 'Lepas dan pasang lagi vidio card.', 0, 0, 'N', 'Y'),
(1101111, 'RAM terpasang dengan baik?', 11011111, 11011110, 'Y', 'N'),
(11011110, 'Lepas dan pasang lagi RAM.', 0, 0, 'N', 'Y');


--
-- Table structure for table `performa_vga`
--

CREATE TABLE IF NOT EXISTS `performa_vga` (
  `ID` bigint(15) NOT NULL,
  `solusi_dan_pertanyaan` varchar(500) NOT NULL,
  `bila_benar` bigint(15) NOT NULL,
  `bila_salah` bigint(15) NOT NULL,
  `mulai` char(1) NOT NULL,
  `selesai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performa_vga`
--

INSERT INTO `performa_vga` (`ID`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Gambar pada monitor bergelombang(berombak)?', 11, 10, 'Y', 'N'),
(11, 'Jika monitor CRT, coba pindahkan (jauhkan dari interferensi). Apakah menampilkan gambr dengan benar?', 111, 110, 'Y', 'N'),
(111, 'Ada interferensi magnetik. Coba jauhkan semaksimal mungkin dari sumber interferensi seperti radio, handphone,dll.', 0, 0, 'N', 'Y'),
(110, 'Coba tukar Vidio Card, atau coba monitor di PC lain. Kemudian cek apakah monitor sudah menampilkan gambar dengan benar?', 1101, 1100, 'Y', 'N'),
(1101, 'Vidio Card bermasalah.', 0, 0, 'N', 'Y'),
(1100, 'Monitor Rusak. ', 0, 0, 'N', 'Y'),
(10, 'Monitor menampilkan gambar / tulisan (bios screen)?', 101, 100, 'Y', 'N'),
(100, 'Proses ke Diagnosis Kerusakan Vidio Card. <br><h3><a href="kerusakan_vga.php">Klik disini untuk pergi ke proses diagnosis kerusakan VGA</a></h3>', 0, 0, 'N', 'Y'),
(101, 'Muncul warna pink yang aneh? Atau kehilangan beberapa warna primer?', 1011, 1010, 'Y', 'N'),
(1010, 'Gambar berkedip (flicker)?', 10101, 10100, 'Y', 'N'),
(10101, 'Coba turunkan resolusi. Apakah masih terjadi flickering (gambar berkedip)?', 101011, 101010, 'Y', 'N'),
(101011, 'Kemungkinan masalah Driver Vidio Card atau pengaturanya.', 0, 0, 'N', 'Y'),
(101010, 'Masih berkedip (flickering) dengan lampu ruangan yg mati?', 1010101, 1010100, 'Y', 'N'),
(1010101, 'Monitor kualitas rendah atau monitor yg buruk/adapter cocok.', 0, 0, 'N', 'Y'),
(1010100, 'Beberapa orang sensitfi dengan cahaya flourescent. Walau sebenarnya tidak ada masalah dengan vidio card.', 0, 0, 'N', 'Y'),
(10100, 'Ada bayangan jejak kursor mouse?', 101001, 101000, 'Y', 'N'),
(101001, 'Memori vidio card bermasalah. ', 0, 0, 'N', 'Y'),
(101000, 'Kinerja vidio lambat (jelek)?', 1010001, 1010000, 'Y', 'N'),
(1010000, 'Ukuran teks berubah, blur, gambar ganda?', 10100001, 10100000, 'Y', 'N'),
(10100000, 'Periksa pengaturan monitor.', 0, 0, 'N', 'Y'),
(10100001, 'Periksa setelan ukuran desktop, atau coba memilih resolusi layar yg berbeda.', 0, 0, 'N', 'Y'),
(1010001, 'Adapter baru terinstal?', 10100011, 10100010, 'Y', 'N'),
(10100011, 'Aplikasi atau game mungkin membutuhkan performa adapter yg lebih tinggi.', 0, 0, 'N', 'Y'),
(10100010, 'Cek driver (pastikan driver terbaru terinstall). Jika masih bermasalah periksa pada Diagnosis Kerusakan Motherboard, RAM dan Processor.<br><h3><a href="kerusakan_mobo.php">Klik disini untuk pergi ke proses diagnosis kerusakan Motherboard, RAM dan Processor</a></h3>', 0, 0, 'N', 'Y'),
(1011, 'Cek apakah ada pin yang rusak pada kabel VGA? Tancapkan kabel VGA dengan kencang, jika ada baut pengencang, pastikan terpasang.', 0, 0, 'N', 'Y'),
(10111, 'Ganti kabel VGA. Memperbaiki kabel VGA cukup rumit.', 0, 0, 'N', 'Y'),
(10110, 'Coba tukar Vidio Card. Kemudian coba apakah PC dapat menampilkan gambar dengan benar?', 101101, 101100, 'Y', 'N'),
(101100, 'Monitor bermasalah. ', 0, 0, 'N', 'Y'),
(101101, 'Vidio Card bermasalah.', 0, 0, 'N', 'Y');

--
-- Table structure for table `kerusakan_dvd`
--

CREATE TABLE IF NOT EXISTS `kerusakan_dvd` (
  `ID` int(11) DEFAULT NULL,
  `solusi_dan_pertanyaan` varchar(500) DEFAULT NULL,
  `bila_benar` int(11) DEFAULT NULL,
  `bila_salah` int(11) DEFAULT NULL,
  `mulai` char(1) DEFAULT NULL,
  `selesai` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan_dvd`
--

INSERT INTO `kerusakan_dvd` (`ID`, `solusi_dan_pertanyaan`, `bila_benar`, `bila_salah`, `mulai`, `selesai`) VALUES
(1, 'Apakah DVD/CD Tidak nyala / tidak berfungsi  sama sekali ?', 2, 0, 'Y', 'N'),
(2, 'Apakah sudah di cek kabel di CPU yang terhubung ke DVD/CD anda ?', 3, 0, 'Y', 'N'),
(3, 'Dipastikan DVD/CD kamu rusak.', 27, 0, 'N', 'N'),
(0, 'Kami mengdiagnosa apabila DVD/CD nyala Tapi tidak dapat membaca DVD atau  CD di pastikan ada komponen yang rusak di dalamnya sebainya Cek ke teknisi.', 0, 0, 'N', 'Y'),
(27, 'Dipastikan hardware DVD/CD kamu rusak, kami mengdiagnosa sebainya Cek dan lakukan perawatan ke Teknisi.', 0, 0, 'N', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
