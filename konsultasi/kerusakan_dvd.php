<?php
	include 'selalu.html';
?>
<body>
		<div id="content">
		<h2><a href="index_konsul.php">Konsultasi</a> > Kerusakan DVD</h2><hr>
			<?php
				include("database.php");
			?>
			<?php 
			if(!isset($_GET['idpertanyaan'])){
				$sqlp = "select * from kerusakan_dvd where mulai='Y'";
				$rs=mysql_query($sqlp);
				$data=mysql_fetch_array($rs);
				echo "<form>";
				echo "<legend>DIAGNOSA <small> Mari mulai Mendiagnosa </small></legend>";
				echo "<center><h2>".$data['solusi_dan_pertanyaan']."</h2></center><br>";
				echo "<input type='radio' name='idpertanyaan' value='".$data['bila_benar']."'>Ya<br>";
				echo "<input type='radio' name='idpertanyaan' value='".$data['bila_salah']."'>Tidak<br>";
				echo "<input type='submit' value='Lanjut'>";
			}else{
				$idsolusi=$_GET['idpertanyaan'];
				$sqlp = "select * from kerusakan_dvd where id=$idsolusi";
				$rs=mysql_query($sqlp);
				$data=mysql_fetch_array($rs);				
				echo "<form>";
				echo "<legend>DIAGNOSA <small> Mari mulai Mendiagnosa </small></legend>";
				echo "<center><h2>".$data['solusi_dan_pertanyaan']."</h2></center><br>";
				if($data['selesai']!="Y"){
					echo "<input type='radio' name='idpertanyaan' value='".$data['bila_benar']."'>Ya<br>";
					echo "<input type='radio' name='idpertanyaan' value='".$data['bila_salah']."'>Tidak<br>";
					echo "<input type='submit' value='Lanjut'>";
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