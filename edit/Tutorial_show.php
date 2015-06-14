<?php
	session_start();
	$username = $_SESSION['username'];
	$isLoggedIn = $_SESSION['isLoggedIn'];
	 
	if($isLoggedIn != '1'){
		session_destroy();
		header('Location: belumlogin.php');
	}
	include 'selalu.html';
	if(ISSET ($_POST['input'])) {
		$id			= ($_POST['id']);
		$artikel 	= ($_POST['art']);
		$gambar		= ($_POST['gambar']);
		$ymd		= ($_POST['YYMMDD']);
		$update = mysql_query("INSERT INTO artikel values('$id','$artikel','$gambar','$ymd')");
	}

?>
<body>
	<div id="pagewrap">	
		<div id="popuptamdat"> 
		<?php
			include '../database.php';
			$username = $_SESSION['username'];
			$isLoggedIn = $_SESSION['isLoggedIn'];
			 
			if($isLoggedIn != '1'){
				session_destroy();
				header('Location: belumlogin.php');
			}
		?>
		<form name="tamdat" action="Tutorial_show.php" method="post">
			<center>
				<table>
					<form method="POST" name="input">
						<tr>
							<td>ID</td>
							<td><input type="text" name="id"></td>
						</tr>
						<tr>
							<td>Artikel</td>
							<td><input type="text" name="solper"></td>
						</tr>
						<tr>
							<td>Gambar</td>
							<td><input type="text" name="benar"></td>
						</tr>
						<tr>
							<td>DiTambahkan</td>
							<td><input type="text" name="salah"></td>
						</tr>
						<tr>
							<td></td><td><input type="submit" name="input" value="input">&nbsp;<a href="javascript:tamdat('hide');">Batal</a></td>
						</tr>
					</form>
				</table>
			</center>
		</form>
		</div>
		
		<div id="header">
			<center><h1>Sistem Pakar Diagnosa Komputer</h1></center>
		</div>

		<div class="admin">
			Selamat datang "<b><?php echo $username; ;?></b>", <a href="../logout.php">logout</a><br>
			<center><h2>Data Tutorial</h2></center>
			<div style="width=auto; height:65%; overflow:auto;"><center>
				<table cellpadding="5" cellspacing="1" border="1">
					<tr>
						<th>ID</th>
						<th>Artikel</th>
						<th>Gambar</th>
						<th>DiTambahkan</th>
						<th>Action</th>
					</tr>

					<?php
						$query=mysql_query("select * from artikel");
						while($lihat=mysql_fetch_array($query))
						{
					?>
						<tr class="font" bgcolor="grey">
							<td align='center'><?php echo $lihat['ID'] ?></td>
							<td><?php echo $lihat['art'] ?></td>
							<td align='center'><?php echo $lihat['Gambar'] ?></td>
							<td align='center'><?php echo $lihat['YYMMDD'] ?></td>
							<td width='80px' align='center'><a href="kerusakanVGA_edit.php?ID=<?php echo $lihat['ID']?>">Edit</a>|| <a href='kerusakanVGA_delete.php?ID=<?php echo $lihat['ID']?>' onClick='return confirm(\"Apakah Anda benar ingin menghapus?\")'>Hapus</a>
						</tr>
				<?php
					}
				?>  
				</center></table>
			</div>
			<br>
			<center>
				<a href="../admin.php">Kembali</a> ||
				<a href="javascript:tamdat('show');">Tambah Data</a>
			</center>
		</div>
		
		<div id="footer">
			<center>Copyright 2015-2016 Kelompok</center>
		</div>
	</div>
</body>
</html>