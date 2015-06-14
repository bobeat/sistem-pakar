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
			<center><h1>Sistem Pakar Diagnosa Komputer</h1></center>
		</div>

		<div class="admin">
			Selamat datang "<b><?php echo $admin; ;?></b>", <a href="../logout.php">logout</a><br>
			<center>
				<h2>Data Kerusakan DVD</h2>
				<?php
					include 'proses.php';
					$db=new database();
					$db->connectMySQL();

					if (isset($_GET['aksi'])){
					if ($_GET['aksi'] == 'hapus'){
						// baca ID dari parameter ID Anggota yang akan dihapus
						$id = $_GET['id'];
						// proses hapus data anggota berdasarkan ID via method
						$db->deleteUser($id);
						}elseif ($_GET['aksi'] == 'tambah'){
							echo"<br>
							<form method=POST action='?aksi=tambahUser'>
							<table>
							<tr><td>Username</td><td><input type=text name='user' placeholder='Masukan username' required></td></tr>
							<tr><td>Password</td><td><input type=text name='password' placeholder='Masukan password' required></td></tr>
							<tr><td></td><td><input type=submit value='simpan'></td></tr>
							</table>
							</form>";
						}elseif ($_GET['aksi'] == 'tambahUser'){
							$user = $_POST['user'];
							$pass = $_POST['password'];
							$db->tambahUser($user, $pass);
						}elseif ($_GET['aksi'] == 'edit'){
							// baca ID anggota yang akan diedit
							$id = $_GET['id'];
							// menampilkan form edit anggota pakai method bacaDataAnggota()
							?>	
							<center><form method="post" action="<?php $_SERVER['PHP_SELF'] ?>?aksi=update">
							<table>
							<tr><td>UserName</td><td>:</td>
							<td><input type="text" name="user" value="<?php echo $db->bacaUser('username', $id); ?>" required></td>
							</tr>
							<tr><td>Password</td><td>:</td>
							<td><input type="password" name="password" value="<?php echo $db->bacaUser('password', $id); ?>" required></td>
							</tr>

							</table>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<input type="submit" name="submit" value="Update Data">
							</form></center>

						<?php
						} else if ($_GET['aksi'] == 'update'){
							// proses update data anggota
							$id = $_POST['id'];
							$user = $_POST['user'];
							$pass = $_POST['password'];
							// update data via method
							$db->updateUser($id, $user, $pass);
						}
					}
				?>
			</center>
				<?php
					$arrayuser = $db->tampilUser();
					echo "<div style='width=auto; height:auto; overflow:auto;'>
					<center>
					<table cellpadding='5' cellspacing='1' border='1'>
					<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Action</th>
					</tr>";

					foreach ($arrayuser as $data){
						echo "<tr class='font' bgcolor='grey'>
						<td align='center'>".$data['id']."</td>
						<td>".$data['username']."</td>
						<td align='center'>".$data['password']."</td>
						<td align='center'><a href='".$_SERVER['PHP_SELF']."?aksi=edit&id=".$data['id']."'>Edit</a>||<a href='".$_SERVER['PHP_SELF']."?aksi=hapus&id=".$data['id']."'>Delete</a>
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