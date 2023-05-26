<?php
	require('../koneksi.php');
	$nama_file_baru = $_FILES['foto_produk']['name'];
	$ukuran_file = $_FILES['foto_produk']['size'];
	$tipe_file = $_FILES['foto_produk']['type'];
	$lokasi_ambil_file = $_FILES['foto_produk']['tmp_name'];
	$lokasi_simpan_file = "../images/".$nama_file_baru;
	
	$input_nama_produk	= $_POST["nama_donat"];
	$input_kategori_produk = $_POST["nama_kategori"];
	$input_harga_produk	= $_POST["harga"];
	$stok_produk = $_POST["status"];

	move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);

	$tambah_data 		= "INSERT INTO produk_donat 
					      (gambar,nama_donat,nama_kategori,harga,status)
					      VALUE ($nama_file_baru','$input_nama_produk','$input_kategori_produk','$input_harga_produk','$stok_produk')";
	$query  	 		= mysqli_query($db_con, $tambah_data);
	echo "<meta http-equiv='refresh' content='0;url=data_penjual.php'>";
?>