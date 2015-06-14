<?php
	include 'selalu.html';
?>
<body>
		<div id="navbar">
			<ul id="nav">
				<li><a href="../index.php">Home</a></li>
				<li><a href="#">Konsultasi</a></li>
				<li><a href="../profile.php">Profile</a></li>
				<li><a href="../bantuan.php">Bantuan</a></li>
				<li><a href="javascript:login('show');">Login</a></li>
			</ul>
		</div>

		<div id="content">
			<h2>Konsultasi</a></h2><hr><br>
				Pilih salah satu diagnosis dibawah ini :<br>
				<select onChange="window.location.href=this.value">
					<option value="#">Pilih kerusakan...</option>
					<option value="#">----------------------------------------</option>
					<option value="kerusakan_hdd.php">Kerusakan ATA/SATA Hard Drive</option>
					<option value="kerusakan_dvd.php">Kerusakan DVD</option>
					<option value="kerusakan_mobo.php">Kerusakan Motherboard, RAM dan Processor</option>
					<option value="kerusakan_psu.php">Kerusakan Power Supply</option>
					<option value="kerusakan_vga.php">Kerusakan VGA</option>
					<option value="performa_hdd.php">Masalah Booting dan Kinerja Hard Drive</option>
					<option value="performa_mobo.php">Masalah Kinerja Motherboard, RAM dan Processor</option>
					<option value="performa_vga.php">Masalah Kinerja VGA</option>
				</select>
				
			<br><br><br>Tidak tahu komponen komputer? <a href="../bantuan.php?bt=komponen">klik disini!</a>
		</div>

		<div id="footer">
				<center>Copyright 2015-2016 Kelompok</center>
		</div>
	</div>
</body>
</html>