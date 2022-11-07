<!-- 7 november 2022-->
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
				<form method="POST" action="">
					<h3>Login<br> Peserta Didik Baru</h3>
					<div class="form-wrapper form-price">
						<label for="kode_regis">No.Regis</label>
						<input type="text" name="kode_regis" class="form-control">
					</div>
					<div class="form-wrapper form-price">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
                    <button name="login" type="submit">Login</button>
					<a href="index.php">Kembali</a>
				</form>
				<div class="image-holder">
					<img src="header.jpg" alt="SMPIT Auladina Indonesia" width="500px">
				</div>
			</div>
		</div>

		<?php
		$login = @$_POST['login'];

		if($login){
			$kode_regis = mysqli_real_escape_string($connect, @$_POST['kode_regis']);
		if($kode_regiss == ""){
			?>  <script type="text/javascript">alert("Kore registrasi tidak boleh kosong");</script> <?php
			} else{
				$query = "SELECT * FROM siswa WHERE kode_regis='$kode_regis'";
				$result = mysqli_query($connect, $query);
				$data = mysqli_fetch_assoc($result);
				$cek = mysqli_num_rows($result);
					if($cek >= 1){
						$_SESSION['kode_regis'] = $kode_regis;
						header("Location:detail.php");
					}   else{
						echo "<script> alert('Kode regis tidak terdaftar!'); </script>";
					}
				}
		}?>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
