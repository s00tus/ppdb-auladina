<!--2 november 2022-->
<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['regis'])) {
    $nama_siswa = $_POST['nama_siswa'];
    $nama_ortu = $_POST['nama_ortu'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['sekolah'];

	$query = "INSERT INTO siswa (nama_siswa, nama_ortu, nohp, email, alamat, sekolah)
            VALUES ('$nama_siswa','$nama_ortu','$nohp','$email','$alamat','$sekolah')";

    mysqli_query($connect, $query);

    if(move_uploaded_file($tempname, $folder)){
        header("Location:kartu-pendaftar.php");
    } else
        header("Location:kartu-pendaftar.php");
}
?>
