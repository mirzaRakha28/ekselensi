<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin</title>
    <link rel="stylesheet" href="<?= base_url()?>assets_admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="<?= base_url()?>assets_admin/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets_admin/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="<?= base_url()?>assets_admin/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="<?= base_url()?>assets_admin/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="<?= base_url()?>assets/fonts/ionicons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
<script>

    $(document).ready(function(){
        // $('#keyword').on('keyup',function(){
        //     $.get('./ajax.php?keyword='+ $('#keyword').val(), function(){
        //         $('#kotak').html(data);
        //     })
        // })

        // $('#kotak').load("<?= base_url('application/views/ajax.php?keyword')?>"+ $('#keyword').val());
    })
</script>
</head>
<body>
<div id="wrapper">
        <div id="sidebar-wrapper" style="background-color: rgb(255,122,0);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="<?= base_url('admin') ?>" style="color: rgb(255,255,255);"><strong><em>Ekselensi Admin</em></strong></a></li>
                <li> <a href="<?= base_url('admin/product')?>" style="color: rgb(255,255,255);">Produk</a></li>
                <li> <a href="<?= base_url('admin/slider')?>" style="color: rgb(255,255,255);">Slider</a></li>
                <li> <a href="<?= base_url('admin/karir')?>" style="color: rgb(255,255,255);">Karir</a></li>
                <li><a href="<?= base_url('admin/kategori')?>" style="color: rgb(255,255,255);">Kategori</a></li>
                <li><a href="<?= base_url('admin/sub_category')?>" style="color: rgb(255,255,255);">Sub Kategori</a></li>
                <li><a href="<?= base_url('admin/logout')?>" style="color: rgb(255,255,255);">Logout</a></li>
            </ul>
        </div>