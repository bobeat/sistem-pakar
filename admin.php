<?php
	include 'selalu.html';
	
	$username = $_SESSION['username'];
	$isLoggedIn = $_SESSION['isLoggedIn'];
	 
	if($isLoggedIn != '1'){
		session_destroy();
		header('Location: belumlogin.php');
	}
?>

<body>
	<div id="pagewrap"> 
		<div id="header">
		</div>
		
		<div class="admin">
			Selamat datang "<b><?php echo $username; ;?></b>", <a href="logout.php">logout</a><br><br>
			<div style="width=auto; height:auto; overflow:auto;" align="center">
				<table cellpadding="5" cellspacing="1" border="1">
					<tr>
						<th>Data</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>User</td>
						<td align="center"><a href="edit/user_show.php">Edit</a></td>
					<tr>
						<td>Profile</td>
						<td align="center"><a href="kosong">Edit</a></td>
					<tr>
						<td>Bantuan</td>
						<td align="center"><a href="edit/bantuan_show.php">Edit</a></td>
					<tr>
						<td>Kerusakan DVD</td>
						<td align="center"><a href="edit/KerusakanDVD_show.php">Edit</a></td>
					<tr>
						<td>Kerusakan Motherboard, RAM dan Processor</td>
						<td align="center"><a href="edit/KerusakanMOBO_show.php">Edit</a></td>
					<tr>
						<td>Kerusakan Power Supply</td>
						<td align="center"><a href="edit/KerusakanPSU_show.php">Edit</a></td>
					<tr>
						<td>Kerusakan VGA</td>
						<td align="center"><a href="edit/KerusakanVGA_show.php">Edit</a></td>
					<tr>
						<td>Masalah Booting dan Kinerja Hard Drive</td>
						<td align="center"><a href="edit/PerformaHDD_show.php">Edit</a></td>
					<tr>
						<td>Masalah Kinerja Motherboard, RAM dan Processor</td>
						<td align="center"><a href="edit/PerformaMOBO_show.php">Edit</a></td>
					<tr>
						<td>Masalah Kinerja VGA</td>
						<td align="center"><a href="edit/PerformaVGA_show.php">Edit</a></td>
				</table>
			</div>
		</div>

		<div id="footer">
			<center>Copyright 2015-2016 Kelompok</center>
		</div>
	</div>
</body>
</html>