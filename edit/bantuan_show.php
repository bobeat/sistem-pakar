<?php
	session_start();
	$admin = $_SESSION['username'];
	$isLoggedIn = $_SESSION['isLoggedIn'];
	 
	if($isLoggedIn != '1'){
		session_destroy();
		header('Location: belumlogin.php');
	}

	include 'selalu.html';
?>
<body>
	<div id="pagewrap">
		<div id="header">
		</div>

		<div class="admin">
			Selamat datang "<b><?php echo $admin; ;?></b>", <a href="../logout.php">logout</a><br>
			<center>
				<h2>Data Bantuan</h2>
				<?php
					include 'proses.php';
					$db=new database();
					$db->connectMySQL();

					if (isset($_GET['aksi'])){
					if ($_GET['aksi'] == 'hapus'){
						// baca ID dari parameter ID Anggota yang akan dihapus
						$id = $_GET['id'];
						// proses hapus data anggota berdasarkan ID via method
						$db->deleteBantuan($id);
						}elseif ($_GET['aksi'] == 'tambah'){
							echo"<br>
							<form method=POST action='?aksi=tambahData'>
							<table>
							<tr><td>ID Bantuan</td><td><input type='text' name='id' placeholder='Masukan ID' required></td></tr>
							<tr><td>Bantuan</td><td><textarea name='bantuan' cols='40' rows='10' placeholder='Ketikan sesuatu' required></textarea></td></tr>
							<tr><td></td><td><input type=submit value='simpan'></td></tr>
							</table>
							</form>";
						}elseif ($_GET['aksi'] == 'tambahData'){
							$id = $_POST['id'];
							$bantuan = $_POST['bantuan'];
							$db->tambahBantuan($id, $bantuan);
						}elseif ($_GET['aksi'] == 'edit'){
							// baca ID anggota yang akan diedit
							$id = $_GET['id'];
							// menampilkan form edit anggota pakai method bacaDataAnggota()
							?>	
							<center><form method="post" action="<?php $_SERVER['PHP_SELF'] ?>?aksi=update">
							<table>
							<tr><td>ID Bantuan</td><td>:</td>
							<td><input type="text" value="<?php echo $db->bacaBantuan('ID_bantuan', $id); ?>" disabled></td>
							</tr>
							<tr><td>Bantuan</td><td>:</td>
							<td><textarea name='bantuan' cols='40' placeholder='Ketikan sesuatu' required><?php echo $db->bacaBantuan('bantuan', $id); ?></textarea></td>
							</tr>

							</table>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<input type="submit" name="submit" value="Update Data">
							</form></center>

						<?php
						} else if ($_GET['aksi'] == 'update'){
							// proses update data anggota
							$id = $_POST['id'];
							$bantuan = $_POST['bantuan'];
							// update data via method
							$db->updateBantuan($id, $bantuan);
						}
					}
				?>
			</center>
				<?php
					$arraybantuan = $db->tampilBantuan();
					echo "<div style='width=auto; height:auto; overflow:auto;'>
					<center>
					<table cellpadding='5' cellspacing='1' border='1'>
						<tr>
							<th>ID Bantuan</th>
							<th>Bantuan</th>
							<th>Action</th>
						</tr>";

						foreach ($arraybantuan as $data){
							echo "<tr class='font' bgcolor='white'>
							<td align='center'>".$data['ID_bantuan']."</td>
							<td align='center'>".$data['bantuan']."</td>
							<td><a href='".$_SERVER['PHP_SELF']."?aksi=edit&id=".$data['ID_bantuan']."'>Edit</a>||<a href='".$_SERVER['PHP_SELF']."?aksi=hapus&id=".$data['ID_bantuan']."'>Delete</a>
							</tr>";
					}
				?>
					</table></center></div>

			<center>
				<a href="../admin.php">Kembali</a> ||
				<a href="?aksi=tambah">Tambah Data</a>
			</center>
		</div>

		<div id="footer">
			<center>Copyright 2015-2016 Kelompok</center>
		</div>
	</div>
</body>