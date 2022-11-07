<!-- 4 november 2022-->
<!DOCTYPE html>
<html>
  	<?php
    	ob_start();
   		@session_start();
    
    	include 'koneksi.php';
   	?>
	
	<head>
		<meta charset="utf-8">
		<title>PPDB SMPIT Auladina Indonesia</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style2.css">
	</head>

	<body>
		<div class="wrapper2">
			<div class="inner2">
				<form method="POST" action="regis-proses.php" method="POST" enctype="multipart/form-data">
					<h3>Pendaftaran<br> Peserta Didik Baru</h3>
					<?php
                        $kode_siswa = $_GET['kode_siswa'];
						$nama_siswa = $_GET['nama_siswa'];
                    ?>

					<div class="form-wrapper">
						Registrasi berhasil!<br>
						<i>Kartu ini juga dikirim melalui email</i>
					</div>
					<table>

					</table>
                    <button name="submit" type="submit">Cetak Kartu</button>
				</form>
				<div class="image-holder">
					<img src="header.jpg" alt="SMPIT Auladina Indonesia" width="500px">
				</div>
			</div>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
