<!-- 7 november 2022-->
<!DOCTYPE html>
<html>
  	<?php
    	ob_start();
   		@session_start();
    
    	include 'koneksi.php';
        $kode_regis = '2022-001';
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
                    <h3>Data Peserta<br>Didik Baru</h3>
                    
                    <?php
                        $query = "SELECT * FROM siswa where kode_regis='$kode_regis'";
                        $result = mysqli_query($connect, $query);

                        while($data = mysqli_fetch_assoc($result)){
                            $id = $data['kode_regis'];
                    ?>
					<div class="form-wrapper">
						<label for="foto" class="label-input">Foto Siswa</label>
                        <img src="">
					</div>
					<div class="form-wrapper form-price">
						<label for="nama_siswa">Nama Siswa</label>
						<input type="text" name="nama_siswa" class="form-control" value="<?php echo $data['nama_siswa']; ?>" readonly>
					</div>
					<div class="form-wrapper form-price">
						<label for="nama_ortu">Nama Orang Tua</label>
						<input type="text" name="nama_ortu" class="form-control" value="<?php echo $data['nama_ortu']; ?>" readonly>
					</div>
					<div class="form-wrapper form-price">
						<label for="nohp">Nomor Hp</label>
						<input type="text" name="nohp" class="form-control" value="<?php echo $data['nohp']; ?>" readonly>
					</div>
					<div class="form-wrapper">
						<label for="email" class="label-input">Email</label>
						<input type="text" name="emaik" class="form-control" value="<?php echo $data['email']; ?>" readonly>
					</div>
					<div class="form-wrapper">
						<label for="alamat" class="label-comment">Alamat</label>
						<textarea name="alamat" id="alamat" class="form-control" style="height: 69px" readonly><?php echo $data['alamat']; ?></textarea>
					</div>
					<div class="form-wrapper form-select">
						<label for="sekolah">Mendaftar di</label>
						<input type="text" name="sekolah" class="form-control" value="<?php echo $data['sekolah']; ?>" readonly>
					</div>
					<div class="form-wrapper form-select">
                        Kartu Pendaftar
					</div>
                    <table style="background: url('kartu.jpg') no-repeat; background-size: cover;">
                        <tr>
                            <td><?php echo $data['nama_siswa']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $data['kode_regis']; ?></td>
                        </tr>
                    </table>
                    <button name="logout" type="submit">Keluar</button>
                    <a href="logout.php">Keluar</a>
                    <?php } ?>
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
