<!-- 3 november 2022-->
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
				<form class="form2" method="POST" action="daftar-proses.php" method="POST" enctype="multipart/form-data">
					<h3>Pendaftaran<br> Peserta Didik Baru</h3>
					<div class="form-wrapper form-price">
						<label for="nama_siswa">Nama Siswa</label>
						<input type="text" name="nama_siswa" class="form-control" required>
					</div>
					<div class="form-wrapper form-price">
						<label for="nama_ortu">Nama Orang Tua</label>
						<input type="text" name="nama_ortu" class="form-control" required>
					</div>
					<div class="form-wrapper form-price">
						<label for="nohp">Nomor Hp</label>
						<input type="text" name="nohp" class="form-control" maxlength="14">
					</div>
					<div class="form-wrapper">
						<label for="email" class="label-input">Email</label>
						<input type="text" name="email" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<label for="alamat" class="label-comment">Alamat</label>
						<textarea name="alamat" id="alamat" class="form-control" style="height: 69px"></textarea>
					</div>
					<div class="form-wrapper form-select">
						<label for="sekolah">Mendaftar di</label>
						<div class="form-holder3">
							<select name="sekolah" id="sekolah" class="form-control3">
								<option disabled="disabled" selected="selected">Pilih Sekolah</option>
								<option value="SMPIT Auladina Boarding School" class="option">SMPIT Auladina Boarding School</option>
								<option value="SMPIT Auladina Pringsewu" class="option">SMPIT Auladina Pringsewu</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="foto" class="label-input">Foto Siswa</label>
						<input type="file" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="bukti" class="label-input">Bukti Transfer</label>
						<small><i>Harap lakukan transfer ke rekening:<br><b>BNI xxxxx a.n Fulan</b></i></small>
						
					</div>
					<div class="form-wrapper">
						<label for="bukti" class="label-input"></label>
						<input type="file" class="form-control">
					</div>
                    <button name="regis" type="submit">Register</button>
					<a href="index.php">Kembali</a>
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
