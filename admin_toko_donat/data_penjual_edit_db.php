<?php
	require('../koneksi.php');
    $id = $_GET['id'];

	$nama_donat	= $_POST['nama_donat'];
	$nama_kategori = $_POST['nama_kategori'];
	$harga	= $_POST['harga'];
	$status = $_POST['status'];

	print_r($_FILES);
	if(isset($_FILES)){
	$gambar = $_FILES['gambar']['name'];
	$tipe_file = $_FILES['gambar']['type'];
	$lokasi_ambil_file = $_FILES['gambar']['tmp_name'];
	$lokasi_simpan_file = "../images/".$gambar;
	}

	move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);

	$edit_data      = "UPDATE produk_donat (nama_donat,nama_kategori,harga,status,gambar)
	                  SET nama_donat='$nama_donat',nama_kategori='$nama_kategori',harga='$harga',status='$status',gambar='$gambar' WHERE id='$id';";
	$query          = mysqli_query($db_con, $edit_data);				  
	// echo "UPDATE produk_donat SET nama_donat='$nama_donat',nama_kategori='$nama_kategori',harga='$harga',status='$status',gambar='$gambar' WHERE id='$id';";
	// exit();
	// echo "<meta http-equiv='refresh' content='0;url=data_penjual.php'>";

?>
