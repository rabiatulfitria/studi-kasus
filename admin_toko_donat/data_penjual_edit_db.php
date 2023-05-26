<?php
	require('../koneksi.php');
    $id = $_GET['id'];

	$nama_donat	= $_POST['nama_donat'];
	$nama_kategori = $_POST['nama_kategori'];
	$harga	= $_POST['harga'];
	$status = $_POST['status'];

	if(isset($_FILES)){
	$gambar = $_POST['gambar']['name'];
	$tipe_file = $_FILES['gambar']['type'];
	$lokasi_ambil_file = $_FILES['gambar']['tmp_name'];
	$lokasi_simpan_file = "../images/".$gambar;
	}

	move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);

	$result = mysqli_query($db_con, "UPDATE produk_donat SET nama_donat='$nama_donat',nama_kategori='$nama_kategori',harga='$harga',status='$status',gambar='$gambar' WHERE id='$id';");
	echo "UPDATE produk_donat SET nama_donat='$nama_donat',nama_kategori='$nama_kategori',harga='$harga',status='$status',gambar='$gambar' WHERE id='$id';";
	
	// echo "<meta http-equiv='refresh' content='0;url=data_penjual.php'>";

?>
