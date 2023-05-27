<?php
	require('../koneksi.php');
	
	$nama_donat	= $_POST['nama_donat'];
	$nama_kategori = $_POST['nama_kategori'];
	$harga	= $_POST['harga'];
	$status = $_POST['status'];

	$gambar = $_FILES['gambar']['name'];
	$tipe_file = $_FILES['gambar']['type'];
	$lokasi_ambil_file = $_FILES['gambar']['tmp_name'];
	$lokasi_simpan_file = "../images/".$gambar;

	move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);

	$tambah_data 		= "INSERT INTO produk_donat 
					      (nama_donat,nama_kategori,harga,status,gambar)
					      VALUE ('$nama_donat','$nama_kategori','$harga','$status','$gambar')";
	// echo "INSERT INTO produk_donat 
	// (nama_donat,nama_kategori,harga,status,gambar)
	// VALUE ('$nama_donat','$nama_kategori','$harga','$status','gambar')";
	// exit();
	$query  	 		= mysqli_query($db_con, $tambah_data);
	// echo "<meta http-equiv='refresh' content='0;url=data_penjual.php'>";
?>