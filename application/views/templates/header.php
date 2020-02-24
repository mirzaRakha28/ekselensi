    
    <?php
        // if(isset($_GET['k'])){
        //     setcookie('kategori',$_GET['k']);
        //     // var_dump($_COOKIE['kategori']);die();
        // }

        // if(isset($_GET['sk'])){
        //     setcookie('subKategori',$_GET['sk']);
        // }

        
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ekselensi</title>
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?= base_url()?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Bold-BS4-Animated-Back-To-Top.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Job-management.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/User-Payment-Overview-Rows---Panel-Container.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/WOWSlider-about-us-2.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/WOWSlider-about-us.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Articale-List-With-Image-Zoom.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Features-Clean.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Good-login-dropdown-menu-1.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Good-login-dropdown-menu.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Header-Blue.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Product-Details.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Swipe-Slider-7.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Testimonial-Slider-9-1.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Testimonial-Slider-9.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <style>
        .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="color: rgb(241,89,34);background-color: rgb(241,89,34);background-image: url(<?= base_url('assets/img/graditen.png') ?>);height: 56px;padding: 29px;margin: 0;">
        <div class="container"><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <a href="<?= base_url('')?>">
                 <img src="<?= base_url()?>assets/img/ekslen.png"  style="width: 127px;">
            </a>
                <div class="collapse navbar-collapse" id="navbarResponsive" style="width: 937px;padding: 109px;margin: 0;height: 61px;padding-bottom: 0px;padding-top: 0px;">
                    <ul class="nav navbar-nav text-uppercase">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('') ?>">Beranda</a></li>
                        <li class="nav-item dropdown"><a class="dropbtn nav-link"  aria-expanded="false" href="<?= base_url('product/product_jasa') ?>">Produk dan jasa</a>
                            <div class=" dropdown-content dropdown-menu dropdown-menu-left" role="menu" style="color: rgb(242,136,22);font-family: Montserrat, sans-serif;">
                                <a class="dropdown-item" role="presentation" href="<?= base_url('product/more_product').'?k='.'1' ?>">ouTDOOR PRINTING</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('product/more_product').'?k='.'2'  ?>">iNDOOR pRINTING</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('product/more_product').'?k='.'3'  ?>">eCOSOLVENT PRINTING</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('product/more_product').'?k='.'4'  ?>">dOCUPRINTING</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('product/more_product').'?k='.'1'  ?>">OFFSET PRINTING</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('product/more_product').'?k='.'1'  ?>">DESIGN DAN MULTIMEDIA</a>
                                <a class="dropdown-item" role="presentation" href="<?= base_url('product/more_product').'?k='.'1'  ?>">MERCHANDISES</a>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('galeri/galeri')?>">GALERI</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('karir/karir')?>">KARIR</a></li>
                        <li class="nav-item dropdown"><a class="dropbtn nav-link"  aria-expanded="true" href="<?= base_url('ekselensi/about')?>">EKSEleNSI</a>
                            <div class="dropdown-content dropdown-menu" role="menu" style="font-family: Montserrat, sans-serif;font-size: 15px;">
                            <a class="dropdown-item" role="presentation" href="<?= base_url('ekselensi/about')?>">SEKILAS INFO</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('ekselensi/visi_misi')?>">VISI DAN MISI</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('ekselensi/tata_nilai')?>">TATA NILAI BISNIS</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('ekselensi/struktur')?>">STRUKTUR</a>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('product/cart') ?>"><i class="fas fa-calculator" style="font-size: 20px;"></i></a></li>
                    </ul>
                </div>
        </div>
    </nav>




