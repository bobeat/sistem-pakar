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
			<center><h1>Sistem Pakar Diagnosa Komputer</h1></center>
		</div>

		<div class="admin">
			Selamat datang "<b><?php echo $username; ;?></b>", <a href="../logout.php">logout</a><br>
			<center>
				<h2>Data Kerusakan PSU</h2>
				<?php
					include 'proses.php';
					$db=new database();
					$db->connectMySQL();

					if (isset($_GET['aksi'])) {
						if ($_GET['aksi'] == 'hapus') {
							// baca ID dari parameter ID Anggota yang akan dihapus
							$id = $_GET['id'];
							// proses hapus data anggota berdasarkan ID via method
							$db->deleteKerusakanPSU($id);
						}elseif ($_GET['aksi'] == 'tambah') {
						echo"<br>
							<form method=POST action='?aksi=tambahKerusakanPSU'>
								<table>
									<tr><td>ID</td><td>:</td><td><input type='text' name='id' placeholder='Masukan id' size='13' required></td></tr>
									<tr><td>Solusi dan pertanyaan</td><td>:</td><td><textarea name='solper' placeholder='solusi' required></textarea></td></tr>
									<tr><td>Bila benar</td><td>:</td><td><input type=text name='bila_benar' size='13' placeholder='input' required></td></tr>
									<tr><td>Bila salah</td><td>:</td><td><input type=text name='bila_salah' size='13' placeholder='input' required></td></tr>
									<tr><td>Mulai</td><td>:</td><td><select name='mulai'><option>Y</option><option>N</option></td></tr>
									<tr><td>Selesai</td><td>:</td><td><select name='selesai'><option>Y</option><option>N</option></td></tr>
									<tr><td></td><td></td><td><input type=submit value='simpan'></td></tr>
								</table>
							</form>
							";
						} elseif ($_GET['aksi'] == 'tambahKerusakanPSU') {
							$id=$_POST['id'];
							$solper = $_POST['solper'];
							$benar = $_POST['bila_benar'];
							$salah = $_POST['bila_salah'];
							$mulai = $_POST['mulai'];
							$selesai = $_POST['selesai'];
							$db->tambahKerusakanPSU($id, $solper, $benar, $salah, $mulai, $selesai);
						} elseif ($_GET['aksi'] == 'edit') {
							// baca ID anggota yang akan diedit
							$id = $_GET['id'];

							// menampilkan form edit anggota pakai method bacaDataAnggota()
				?>	
							<center><form method="post" action="<?php $_SERVER['PHP_SELF'] ?>?aksi=update">
								<table>
									<tr><td>ID</td><td>:</td><td><input type='text' name='id' value="<?php echo $db->bacaKerusakanPSU('ID', $id); ?>" size="13" disabled></td><input type="hidden" name="id" value="<?php echo $id; ?>"></tr>
									
									<tr><td>Solusi dan Pertanyaan</td><td>:</td><td><textarea name='solper' cols='40' required><?php echo $db->bacaKerusakanPSU('solusi_dan_pertanyaan', $id); ?></textarea></td></tr>
									
									<tr><td>Bila benar</td><td>:</td><td><input type="text" name="bila_benar" value="<?php echo $db->bacaKerusakanPSU('bila_benar', $id); ?>" size="13" required></td></tr>
									
									<tr><td>Bila salah</td><td>:</td><td><input type="text" name="bila_salah" value="<?php echo $db->bacaKerusakanPSU('bila_salah', $id); ?>" size="13" required></td></tr>	
									
									<tr><td>Mulai</td><td>:</td><td><input type="text" name="mulai" value="<?php echo $db->bacaKerusakanPSU('mulai', $id); ?>" size="1" required></td></tr>	
									
									<tr><td>Selesai</td><td>:</td><td><input type="text" name="selesai" value="<?php echo $db->bacaKerusakanPSU('selesai', $id); ?>" size="1" required></td></tr> 

									<tr><td></td><td></td><td><input type="submit" name="submit" value="Update Data"></td>
								</table>
								</form>
							</center>

						<?php
							} else if ($_GET['aksi'] == 'update') {
								// proses update data anggota
								$id = $_POST['id'];
								$solper = $_POST['solper'];
								$benar = $_POST['bila_benar'];
								$salah = $_POST['bila_salah'];
								$mulai = $_POST['mulai'];
								$selesai = $_POST['selesai'];

								// update data via method
								$db->updateKerusakanPSU($id, $solper, $benar, $salah, $mulai, $selesai);
							}
					}
						?>			
			</center>
			<?php
				$arrayKerusakanPSU = $db->tampilKerusakanPSU();
				echo "<div style='width=auto; height:350; overflow:auto;'>
				<center>
					<table cellpadding='5' cellspacing='1' border='1'>
					<tr>
						<th>ID</th>
						<th>Solusi dan pertanyaan</th>
						<th>Bila benar</th>
						<th>Bila salah</th>
						<th>Mulai</th>
						<th>Selesai</th>
						<th>Action</th>
					</tr>";

					foreach ($arrayKerusakanPSU as $data) {
					echo "<tr class='font' bgcolor='grey'>
							<td align='center'>".$data['ID']."</td>
							<td>".$data['solusi_dan_pertanyaan']."</td>
							<td align='center'>".$data['bila_benar']."</td>
							<td align='center'>".$data['bila_salah']."</td>
							<td align='center'>".$data['mulai']."</td>
							<td align='center'>".$data['selesai']."</td>
							<td align='center'><a href='".$_SERVER['PHP_SELF']."?aksi=edit&id=".$data['ID']."'>Edit</a>||<a href='".$_SERVER['PHP_SELF']."?aksi=hapus&id=".$data['ID']."'>Delete</a>
						</tr>";
				}
			?>
					</table>
				</center>
			</div>
			
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