<?php
class database {
	private $dbHost = "localhost";
	private $dbUser = "root";
	private $dbPass = "";
	private $dbName = "project";

	// method koneksi MySQL
	function connectMySQL() {
		mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
		mysql_select_db($this->dbName) or die("Database tidak ada!");
	}

	// method tambah data (insert)
	function addUser($id, $username, $password) {
		$query = "INSERT INTO user (id,username,password) VALUES ('$id', '$username', '$password')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/user_show.php");
		else
			echo "Data gagal disimpan ke database";
	}
	
	function addKerusakanDVD($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "INSERT INTO kerusakan_dvd (ID, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) VALUES ('$id', '$solper', '$benar', '$salah', '$mulai', '$selesai')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/KerusakanDVD_show.php");
		else
			echo "Data gagal disimpan ke database";
	}

	function addKerusakanHDD($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "INSERT INTO kerusakan_hdd (ID, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) VALUES ('$id', '$solper', '$benar', '$salah', '$mulai', '$selesai')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/KerusakanHDD_show.php");
		else
			echo "Data gagal disimpan ke database";
	}
	
	function addKerusakanMOBO($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "INSERT INTO kerusakan_mobo (ID, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) VALUES ('$id', '$solper', '$benar', '$salah', '$mulai', '$selesai')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/KerusakanMOBO_show.php");
		else
			echo "Data gagal disimpan ke database";
	}
	
	function addKerusakanPSU($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "INSERT INTO kerusakan_psu (ID, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) VALUES ('$id', '$solper', '$benar', '$salah', '$mulai', '$selesai')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/KerusakanPSU_show.php");
		else
			echo "Data gagal disimpan ke database";
	}
	
	function addKerusakanVGA($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "INSERT INTO kerusakan_vga (ID, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) VALUES ('$id', '$solper', '$benar', '$salah', '$mulai', '$selesai')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/KerusakanVGA_show.php");
		else
			echo "Data gagal disimpan ke database";
	}
	
	function addPerformaHDD($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "INSERT INTO performa_hdd (ID, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) VALUES ('$id', '$solper', '$benar', '$salah', '$mulai', '$selesai')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/performaHDD_show.php");
		else
			echo "Data gagal disimpan ke database";
	}
	
	function addPerformaMOBO($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "INSERT INTO performa_mobo (ID, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) VALUES ('$id', '$solper', '$benar', '$salah', '$mulai', '$selesai')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/performaMOBO_show.php");
		else
			echo "Data gagal disimpan ke database";
	}
	
	function addPerformaVGA($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "INSERT INTO performa_vga (ID, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) VALUES ('$id', '$solper', '$benar', '$salah', '$mulai', '$selesai')";
		$hasil = mysql_query($query);
		if ($hasil)
			header("location:edit/performaVGA_show.php");
		else
			echo "Data gagal disimpan ke database";
	}
	
	// method tampil data
	function showUser() {
		$query = mysql_query("SELECT * FROM user");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function showKerusakanDVD() {
		$query = mysql_query("SELECT * FROM kerusakan_dvd");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function showKerusakanHDD() {
		$query = mysql_query("SELECT * FROM kerusakan_hdd");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function showKerusakanMOBO() {
		$query = mysql_query("SELECT * FROM kerusakan_mobo");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function showKerusakanPSU() {
		$query = mysql_query("SELECT * FROM kerusakan_psu");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function showKerusakanVGA() {
		$query = mysql_query("SELECT * FROM kerusakan_vga");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function showPerformaHDD() {
		$query = mysql_query("SELECT * FROM performa_hdd");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function showPerformaMOBO() {
		$query = mysql_query("SELECT * FROM performa_mobo");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function showPerformaVGA() {
		$query = mysql_query("SELECT * FROM performa_vga");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}

	
	// method hapus data
	function deleteUser($id) {
		$query = mysql_query("DELETE FROM user WHERE ID='$id'");
	}
	
	function deleteKerusakanDVD($id) {
		$query = mysql_query("DELETE FROM kerusakan_dvd WHERE ID='$id'");
	}
	
	function deleteKerusakanHDD($id) {
		$query = mysql_query("DELETE FROM kerusakan_hdd WHERE ID='$id'");
	}
	
	function deleteKerusakanMOBO($id) {
		$query = mysql_query("DELETE FROM kerusakan_mobo WHERE ID='$id'");
	}
	
	function deleteKerusakanPSU($id) {
		$query = mysql_query("DELETE FROM kerusakan_psu WHERE ID='$id'");
	}
	
	function deleteKerusakanVGA($id) {
		$query = mysql_query("DELETE FROM kerusakan_vga WHERE ID='$id'");
	}
	
	function deletePerformaHDD($id) {
		$query = mysql_query("DELETE FROM performa_hdd WHERE ID='$id'");
	}
	
	function deletePerformaMOBO($id) {
		$query = mysql_query("DELETE FROM performa_mobo WHERE ID='$id'");
	}
	
	function deletePerformaVGA($id) {
		$query = mysql_query("DELETE FROM performa_vga WHERE ID='$id'");
	}

	// method membaca data anggota 
	function readKerusakanDVD($field, $id){
		$query = "SELECT * FROM kerusakan_dvd WHERE id_anggota = '$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID')
			return $data['ID'];
		else if ($field == 'solusi_dan_pertanyaan')
			return $data['solusi_dan_pertanyaan'];
		else if ($field == 'bila_benar')
			return $data['bila_benar'];
		if ($field == 'bila_salah')
			return $data['bila_salah'];
		else if ($field == 'mulai')
			return $data['mulai'];
		else if ($field == 'selesai')
			return $data['selesai'];
	}

	// method untuk proses update data anggota
	function updateKerusakanDVD($id, $solper, $benar, $salah, $mulai, $selesai) {
		$query = "UPDATE anggota SET ID='$id', solusi_dan_pertanyaan='$solper', bila_benar='$benar' bila_salah='$salah', mulai='$mulai', selesai='$selesai' WHERE ID='$id'";
		mysql_query($query);
	}
}
?>
