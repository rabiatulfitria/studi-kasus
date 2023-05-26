<?php
	require('../koneksi.php');
    $id = $_GET['id_produk'];

	$nama_file_baru = $_POST['foto_produk']['name'];
	$ukuran_file = $_POST['foto_produk']['size'];
	$tipe_file = $_POST['foto_produk']['type'];
	$lokasi_ambil_file = $_POST['foto_produk']['tmp_name'];
	$lokasi_simpan_file = "../images/".$nama_file_baru;

	$input_nama_produk	= $_POST["nama_donat"];
	$input_kategori_produk = $_POST["nama_kategori"];
	$input_harga_produk	= $_POST["harga"];
	$stok_produk = $_POST["status"];

	move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);

	$result = mysqli_query($db_con, "UPDATE `produk_donat` SET gambar='$nama_file_baru',nama_donat='$input_nama_produk',nama_kategori='$input_kategori_produk',harga='$input_harga_produk',status='$stok_produk' WHERE id_produk='$id';");

	echo "<meta http-equiv='refresh' content='0;url=data_penjual.php'>";
?>