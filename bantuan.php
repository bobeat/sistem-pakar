<?php
	include 'selalu.html';
?>
<body>
	<div id="pagewrap"> 
		<div id="header">
		</div>
		
		<div id="navbar">
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="konsultasi/index_konsul.php">Konsultasi</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="#">Bantuan</a></li>
				<li><a href="javascript:login('show');">Login</a></li>
			</ul>
		</div>
		
		<div id="content">
			<h2>Bantuan</h2>
				<a href='?bt=aplikasi'>Bantuan Aplikasi</a><br>
				<a href='?bt=komponen'>Komponen Komputer</a>
				<?php			
					if(isset($_GET['bt'])){
						if($_GET['bt']=='aplikasi'){
							include 'bantuan/aplikasi.html';
						}
						else if($_GET['bt'] == 'komponen'){
							include 'bantuan/komponen.html';
						}
					}
				?>
		</div>
    
		<div id="footer">
			<center>Copyright 2015-2016 Kelompok</center>
		</div>
	</div>
</body>