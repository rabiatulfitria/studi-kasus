<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
	<link rel="icon" href="img/logo_donat.png">

  <title>TokoDonat | Kentang</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="data_penjual.php" class="logo">TokoDonat <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">admin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="data_penjual.php"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="index.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">  
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Data</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="data_penjual.php">Produk</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Edit Data Produk</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="data_penjual.php">Home</a></li>
              <li><i class="fa fa-table"></i>Data</li>
              <li><i class="fa fa-th-list"></i>Edit Data</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Edit Data Produk
              </header>
        
              <?php 
                require("../koneksi.php");
                $id = $_GET['id'];
                $query = mysqli_query($db_con,"SELECT * FROM produk_donat WHERE id='$id'");
                while ($data = mysqli_fetch_array($query)) {
                    $id = $data['id'];
                    $nama_donat = $data['nama_donat'];
                    $nama_kategori = $data['nama_kategori'];
                    $harga = $data['harga'];
                    $status = $data['status'];
                    $gambar = $data['gambar'];

                }
                ?>
              <div class="panel-body">
                <form action="data_penjual_edit_db.php?id=<?php echo $id; ?>" method="post" id="editDataProduk" novalidate="novalidate" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>ID produk</label>
                    <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" id="id" placeholder="ID Produk">
                  </div>
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_donat" class="form-control" value="<?php echo $nama_donat; ?>" id="namadonat" placeholder="Nama Produk">
                  </div>
                  <div class="form-group">
                    <label>Kategori</label>
                    <select type="text" name="nama_kategori" class="form-control" value="<?php echo $nama_kategori; ?>" id="namakategori" aria-label="label for the select">
                      <option value=""></option>
                      <option value="Donat Ukuran Regular">Donat Ukuran Regular</option>
                      <option value="Donat Ukuran Regular">Donat Ukuran Mini</option>
                    </select>  
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <select type="number" name="harga" class="form-control" value="<?php echo $harga; ?>" id="harga" aria-label="label for the select" placeholder="Harga">
                      <option value=""></option>
                      <option value="5000">5000</option>
                      <option value="6000">6000</option>
                      <option value="9500">9500</option>
                      <option value="10000">10000</option>
                    </select>  
                  </div>
                  <div class="form-group">
                    <label>Stok Donat</label>
                    <input type="text" name="status" class="form-control" value="<?php echo $status; ?>" id="status" placeholder="Stok Donat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Unggah Foto</label>
                    <input type="file" name="gambar" value="<?php echo $gambar; ?>" id="exampleInputFile" placeholder="Foto Produk" onchange="displayFileName(this)"> 
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <style>
    .error {
    border-color: red !important;
    color: red !important;
   }
  </style>
<script>

$(document).ready(function () {
  $('#editDataProduk').validate({
      rules: {
          id: {
            required: true,
          },
          nama_donat: {
            required: true,
          },
          nama_kategori: {
            required: true
          },
          harga: {
            required: true
          },
          status: {
            required: true
          },
          gambar: {
            required: true
          }
      },
      messages: {
          nama_donat: {
          required: "Harap isikan nama produk",
          },
          nama_kategori: {
          required: "Harap isikan kategori produk",
          },
          harga: {
          required: "Harap isikan harga produk",
          },
          status: {
          required: "Harap isikan stok produk",
          },
          gambar: {
          required: "Harap cantumkan gambar produk",
          }
      },
      submitHandler: function () {
        form.submit();
      }  
    });
  });

  function displayFileName(input) {
    var label = document.querySelector('.custom-file-label');
    label.textContent = input.files[0].name;
  }

</body>
</html>
