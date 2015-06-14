<?php
class database{
    // properti
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "project";

    // method koneksi MySQL
    function connectMySQL() {
        mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
        mysql_select_db($this->dbName) or die("Database tidak ada!");
    }

	//method tambah data
	function tambahBantuan($id, $bantuan){
		$query = "insert into bantuan (ID_bantuan, bantuan)values ('$id','$bantuan')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=user_show.php'>";
	}
	
	function tambahUser($user, $pass){
		$query = "insert into user (username, password)values ('$user','$pass')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=user_show.php'>";
	}

	function tambahKerusakanDVD($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "insert into kerusakan_dvd (id, solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai) values ('$id', '$solper','$benar', '$salah','$mulai','$selesai')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=KerusakanDVD_show.php'>";
	}
	
	function tambahKerusakanMOBO($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "insert into kerusakan_mobo (solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai)values ('$solper','$benar', '$salah','$mulai','$selesai')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=KerusakanMOBO_show.php'>";
	}

	function tambahKerusakanPSU($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "insert into kerusakan_psu (solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai)values ('$solper','$benar', '$salah','$mulai','$selesai')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=KerusakanPSU_show.php'>";
	}

	function tambahKerusakanVGA($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "insert into kerusakan_vga (solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai)values ('$solper','$benar', '$salah','$mulai','$selesai')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=KerusakanVGA_show.php'>";
	}	

	function tambahPerformaHDD($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "insert into performa_hdd (solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai)values ('$solper','$benar', '$salah','$mulai','$selesai')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=PerformaHDD_show.php'>";
	}
	
	function tambahPerformaMOBO($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "insert into performa_mobo (solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai)values ('$solper','$benar', '$salah','$mulai','$selesai')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=PerformaMOBO_show.php'>";
	}	

	function tambahPerformaVGA($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "insert into performa_vga (solusi_dan_pertanyaan, bila_benar, bila_salah, mulai, selesai)values ('$solper','$benar', '$salah','$mulai','$selesai')";
		$hasil = mysql_query($query);
		
		if($hasil)
			echo"<meta http-equiv='refresh' content='0; url=PerformaVGA_show.php'>";
	}
	

	//method tampil data
	function tampilBantuan(){
		$query = mysql_query("select * from bantuan");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function tampilUser(){
		$query = mysql_query("select * from user");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}

	function tampilKerusakanDVD(){
		$query = mysql_query("select * from kerusakan_dvd");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}

	function tampilKerusakanMOBO(){
		$query = mysql_query("select * from kerusakan_mobo");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}	

	function tampilKerusakanPSU(){
		$query = mysql_query("select * from kerusakan_psu");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	
	function tampilKerusakanVGA(){
		$query = mysql_query("select * from kerusakan_vga");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}

	function tampilPerformaHDD(){
		$query = mysql_query("select * from performa_hdd");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}

	function tampilPerformaMOBO(){
		$query = mysql_query("select * from performa_mobo");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}

	function tampilPerformaVGA(){
		$query = mysql_query("select * from performa_vga");
		while ($row = mysql_fetch_array($query))
			$data[] = $row;
		return $data;
	}
	

	//method delete data
	function deleteBantuan($id){
		$query = mysql_query ("delete from bantuan where ID_bantuan='$id'");
	}
	
	function deleteUser($id){
		$query = mysql_query ("delete from user where id='$id'");
	}
	
	function deleteKerusakanDVD($id){
		$query = mysql_query ("delete from kerusakan_dvd where ID='$id'");
	}
	
	function deleteKerusakanMOBO($id){
		$query = mysql_query ("delete from kerusakan_mobo where ID='$id'");
	}	

	function deleteKerusakanPSU($id){
		$query = mysql_query ("delete from kerusakan_psu where ID='$id'");
	}

	function deleteKerusakanVGA($id){
		$query = mysql_query ("delete from kerusakan_vga where ID='$id'");
	}

	function deletePerformaHDD($id){
		$query = mysql_query ("delete from performa_hdd where ID='$id'");
	}

	function deletePerformaMOBO($id){
		$query = mysql_query ("delete from performa_mobo where ID='$id'");
	}
	
	function deletePerformaVGA($id){
		$query = mysql_query ("delete from performa_vga where ID='$id'");
	}	
	

	//method baca data
	function bacaBantuan ($field, $id){
		$query = "select * from bantuan where ID_Bantuan ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID_bantuan')
			return $data['ID_bantuan'];
		else if ($field == 'bantuan')
			return $data['bantuan'];
	}
	
	function bacaUser ($field, $id){
		$query = "select * from user where id ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'username')
			return $data['username'];
		else if ($field == 'password')
			return $data['password'];
	}
	
	function bacaKerusakanDVD ($field, $id){
		$query = "select * from kerusakan_dvd where ID ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID')
			return $data['ID'];
		else if ($field == 'solusi_dan_pertanyaan')
			return $data['solusi_dan_pertanyaan'];
		else if ($field == 'bila_benar')
			return $data['bila_benar'];
		else if ($field == 'bila_salah')
			return $data['bila_salah'];
		else if ($field == 'mulai')
			return $data['mulai'];
		else if ($field == 'selesai')
			return $data['selesai'];
	}	

	function bacaKerusakanMOBO ($field, $id){
		$query = "select * from kerusakan_mobo where ID ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID')
			return $data['ID'];
		else if ($field == 'solusi_dan_pertanyaan')
			return $data['solusi_dan_pertanyaan'];
		else if ($field == 'bila_benar')
			return $data['bila_benar'];
		else if ($field == 'bila_salah')
			return $data['bila_salah'];
		else if ($field == 'mulai')
			return $data['mulai'];
		else if ($field == 'selesai')
			return $data['selesai'];
	}
	
	function bacaKerusakanPSU ($field, $id){
		$query = "select * from kerusakan_psu where ID ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID')
			return $data['ID'];
		else if ($field == 'solusi_dan_pertanyaan')
			return $data['solusi_dan_pertanyaan'];
		else if ($field == 'bila_benar')
			return $data['bila_benar'];
		else if ($field == 'bila_salah')
			return $data['bila_salah'];
		else if ($field == 'mulai')
			return $data['mulai'];
		else if ($field == 'selesai')
			return $data['selesai'];
	}	

	function bacaKerusakanVGA ($field, $id){
		$query = "select * from kerusakan_vga where ID ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID')
			return $data['ID'];
		else if ($field == 'solusi_dan_pertanyaan')
			return $data['solusi_dan_pertanyaan'];
		else if ($field == 'bila_benar')
			return $data['bila_benar'];
		else if ($field == 'bila_salah')
			return $data['bila_salah'];
		else if ($field == 'mulai')
			return $data['mulai'];
		else if ($field == 'selesai')
			return $data['selesai'];
	}

	function bacaPerformaHDD ($field, $id){
		$query = "select * from performa_hdd where ID ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID')
			return $data['ID'];
		else if ($field == 'solusi_dan_pertanyaan')
			return $data['solusi_dan_pertanyaan'];
		else if ($field == 'bila_benar')
			return $data['bila_benar'];
		else if ($field == 'bila_salah')
			return $data['bila_salah'];
		else if ($field == 'mulai')
			return $data['mulai'];
		else if ($field == 'selesai')
			return $data['selesai'];
	}

	function bacaPerformaMOBO ($field, $id){
		$query = "select * from performa_mobo where ID ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID')
			return $data['ID'];
		else if ($field == 'solusi_dan_pertanyaan')
			return $data['solusi_dan_pertanyaan'];
		else if ($field == 'bila_benar')
			return $data['bila_benar'];
		else if ($field == 'bila_salah')
			return $data['bila_salah'];
		else if ($field == 'mulai')
			return $data['mulai'];
		else if ($field == 'selesai')
			return $data['selesai'];
	}

	function bacaPerformaVGA ($field, $id){
		$query = "select * from performa_vga where ID ='$id'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		if ($field == 'ID')
			return $data['ID'];
		else if ($field == 'solusi_dan_pertanyaan')
			return $data['solusi_dan_pertanyaan'];
		else if ($field == 'bila_benar')
			return $data['bila_benar'];
		else if ($field == 'bila_salah')
			return $data['bila_salah'];
		else if ($field == 'mulai')
			return $data['mulai'];
		else if ($field == 'selesai')
			return $data['selesai'];
	}
	

	//method update data
	function updateBantuan($id, $bantuan){
		$query = "update bantuan set bantuan='$bantuan' where ID_bantuan='$id'";
		mysql_query ($query);
	}
	
	function updateUser($id, $user, $pass){
		$query = "update user set username='$user', password='$pass' where id='$id'";
		mysql_query ($query);
	}

	function updateKerusakanDVD($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "update kerusakan_dvd set solusi_dan_pertanyaan='$solper', bila_benar='$benar', bila_salah='$salah', mulai='$mulai', selesai='$selesai' where id='$id'";
		mysql_query ($query);
	}	
	
	function updateKerusakanMOBO($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "update kerusakan_mobo set solusi_dan_pertanyaan='$solper', bila_benar='$benar', bila_salah='$salah', mulai='$mulai', selesai='$selesai' where id='$id'";
		mysql_query ($query);
	}	

	function updateKerusakanPSU($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "update kerusakan_psu set solusi_dan_pertanyaan='$solper', bila_benar='$benar', bila_salah='$salah', mulai='$mulai', selesai='$selesai' where id='$id'";
		mysql_query ($query);
	}
	
	function updateKerusakanVGA($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "update kerusakan_vga set solusi_dan_pertanyaan='$solper', bila_benar='$benar', bila_salah='$salah', mulai='$mulai', selesai='$selesai' where id='$id'";
		mysql_query ($query);
	}	

	function updatePerformaHDD($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "update performa_hdd set solusi_dan_pertanyaan='$solper', bila_benar='$benar', bila_salah='$salah', mulai='$mulai', selesai='$selesai' where id='$id'";
		mysql_query ($query);
	}

	function updatePerformaMOBO($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "update performa_mobo set solusi_dan_pertanyaan='$solper', bila_benar='$benar', bila_salah='$salah', mulai='$mulai', selesai='$selesai' where id='$id'";
		mysql_query ($query);
	}

	function updatePerformaVGA($id, $solper, $benar, $salah, $mulai, $selesai){
		$query = "update performa_vga set solusi_dan_pertanyaan='$solper', bila_benar='$benar', bila_salah='$salah', mulai='$mulai', selesai='$selesai' where id='$id'";
		mysql_query ($query);
	}
	
}
?>