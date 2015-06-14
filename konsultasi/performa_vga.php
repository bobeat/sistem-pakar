<?php
	include 'selalu.html';
?>
<body>
		<div id="content">
		<h2><a href="index_konsul.php">Konsultasi</a> > Performa VGA</h2><hr>
			<?php
				include("database.php");
			?>
			<?php 
			if(!isset($_GET['idpertanyaan'])){
				$sqlp = "select * from performa_vga where mulai='Y'";
				$detail=mysql_query("select performa_vga.solusi_dan_pertanyaan, detail_performavga.nama_detail from performa_vga, detail_performavga where performa_vga.ID=detail_performavga.ID_detail");
				$rs=mysql_query($sqlp);
				$dadet=mysql_fetch_array($detail);
				$data=mysql_fetch_array($rs);
				echo "<form>
					<legend>DIAGNOSA <small> Mari mulai Mendiagnosa </small></legend>
					<center><h2>".$data['solusi_dan_pertanyaan']."</h2></center>
					<fieldset><legend>Detail</legend><table align='center'><tr><td align='justify'>".$dadet['nama_detail']."</td></tr></table></fieldset><br>
					<input type='radio' name='idpertanyaan' value='".$data['bila_benar']."' checked>Ya<br>
					<input type='radio' name='idpertanyaan' value='".$data['bila_salah']."'>Tidak<br>
					<button type='submit'>Lanjut</button>";
			}else{
				$idsolusi=$_GET['idpertanyaan'];
				$sqlp = "select * from performa_vga where ID=$idsolusi";
				$detail=mysql_query("select performa_vga.solusi_dan_pertanyaan, detail_performavga.nama_detail from performa_vga, detail_performavga where detail_performavga.ID=$idsolusi");
				$rs=mysql_query($sqlp);
				$data=mysql_fetch_array($rs);
				$dadet=mysql_fetch_array($detail);				
				echo "<form>
					<legend>DIAGNOSA <small> Mari mulai Mendiagnosa </small></legend>
					<center><h2>".$data['solusi_dan_pertanyaan']."</h2></center>
					<fieldset><legend>Detail</legend><table align='center'><tr><td align='justify'>".$dadet['nama_detail']."</td></tr></table></fieldset><br>";
				if($data['selesai']!="Y"){
					echo "<input type='radio' name='idpertanyaan' value='".$data['bila_benar']."' checked>Ya<br>
						<input type='radio' name='idpertanyaan' value='".$data['bila_salah']."'>Tidak<br>
						<button type='submit'>Lanjut</button>";
				}else{
				//jika ingin menambah pertanyaan
				}
				echo "</form>";
			}
			?>
		</div>
		
		<div id="sidebar">
			<center>
				<a href="../Index.php">Home</a><br>
				<b>Konsultasi</b><br>
				<a href="../tutorial.php">Tutorial</a><br>
				<a href="../profile.php">Profile</a><br>
				<a href="../bantuan.php">Bantuan</a><br>
				<a href="javascript:login('show');">Login Admin</a>
			</center>
		</div>
    
		<div id="footer">
			<center>Copyright 2015-2016 Kelompok</center>
		</div>
	</div>
</body>
</html>