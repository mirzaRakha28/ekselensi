<div class="page-content-wrapper">
            <span style="display:none;" id="alertOnce"><?= isset($_SESSION['alertOnce']) ? 'true' : '' ?></span>
        <div class="container">
            <div class="row-sm-12">
                <a class="col-auto font-weight-bold btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <a class="col-sm-auto font-weight-bold float-right my-2 mx-2 btn btn-primary" href="<?= base_url('admin/logout')?>">Logout</a>
            </div>
                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>   
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Produk</strong></h1>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-auto">
                            <form class="form-group" action="<?= base_url('admin/product') ?>" method="post">
                                <button class="mx-2 btn btn-primary text-light" type="submit"><i class="fa fa-search" style=""></i></button>
                                <input autofocus name="keyword" id="keyword" class=" shadow-sm border rounded-1" type="search" style="margin-left: 9px;background-color: rgba(255,255,255,0);" placeholder="Nama Barang/Deskripsi/Keterangan">
                            </form>
                        </div>
                        <div class="col"><a href="<?= base_url('admin/form_product')?>"><i class="fa fa-plus-circle" style="margin-right: 10px;"></i>Tambahkan Produk</a></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row no-gutters justify-content-start">
                        <div class="col">
                        <?php  
                            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

                            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            
                        ?>
                            <div class="dropdown" style="margin-bottom: 20px;width: 200px;">
                                <button class="btn btn-primary dropdown-toggle border rounded-0" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-left: 31px;padding: -6px;background-color: rgb(255,255,255);color: rgb(255,107,0);">
                                <?php if(isset($_GET['k']) && !empty($_GET['k'])){
                                        switch (intval($_GET['k'])) {
                                            case 1:
                                                echo 'Outdoor';
                                                break;
                                            case 2:
                                                echo 'Indoor';
                                                break;
                                            case 3:
                                                echo 'Ecosolvent';
                                                break;
                                            case 4:
                                               echo 'Docuprint';
                                                break;
                                            
                                                                                    
                                            default:
                                               echo'Semua Kategori';
                                                break;
                                        }
                                }else {
                                    echo "Semua Kategori";
                                } ?>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="btn btn-light dropdown-item" role="presentation" href="<?= base_url('admin/product')?>">Semua Kategori</a>
                                    <a class="btn btn-light dropdown-item" role="presentation" href="<?= base_url('admin/product').'?k=1'?>">Outdoor</a>
                                    <a class="btn btn-light dropdown-item" role="presentation" href="<?= base_url('admin/product').'?k=2'?>">Indoor </a>
                                    <a class="btn btn-light dropdown-item" role="presentation" href="<?= base_url('admin/product').'?k=3'?>">Ecosolvent </a>
                                    <a class="btn btn-light dropdown-item" role="presentation" href="<?= base_url('admin/product').'?k=4'?>">Docuprint </a>
                                </div>
                                
                            </div>
                    </div>
                    <div class="col">
                        <div class="dropdown" style="margin-bottom: 20px;width: 194px;margin-right: 0px;">
                            <button class="btn btn-primary dropdown-toggle text-left border rounded-0" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-left: 31px;padding: -6px;background-color: rgb(255,255,255);color: rgb(255,107,0);">
                                <?php if(isset($_GET['sk']) && !empty($_GET['sk'])){
                                        switch (intval($_GET['sk'])) {
                                            case 1:
                                                echo 'Tanpa Media';
                                                break;
                                            case 2:
                                                echo 'Dengan Media';
                                                break;
                                            case 3:
                                                echo 'Paket Produk';
                                                break;
                                            case 4:
                                               echo 'Car Branding';
                                                break;
                                            case 5:
                                                echo'Kertas A3+';
                                                break;
                                                                                    
                                            default:
                                               echo'Kartu Nama';
                                                break;
                                        }
                                }else {
                                    echo "Semua SubKategori";
                                } ?>
                            </button>
                            <div
                                class="dropdown-menu" role="menu">
                                <!-- <a class="dropdown-item" role="presentation" href="<?php 
                                // if(isset($_GET['k'])){
                                //     echo $url;
                                // }elseif(isset($_GET['sk']) && !isset($_GET['k'])){
                                //    $url = explode('?',$url);
                                //    $url = $url[0];
                                //    echo $url;
                                // }elseif(isset($_GET['sk']) && isset($_GET['k'])){
                                //     $url = explode('&',$url);
                                //     $url = $url[0];
                                //     echo $url;
                                // }
                                    
                                    // ?>
                                    ">Semua SubKategori</a> -->
                                <a class="dropdown-item" role="presentation" href="<?php if(isset($_GET['k'])){echo $url.'&sk=1';}else{$url=explode('?',$url);$url=$url[0];echo $url.'?sk=1';}?>">Tanpa Media</a>
                                <a class="dropdown-item" role="presentation" href="<?php if(isset($_GET['k'])){echo $url.'&sk=2';}else{echo $url.'?sk=2';}?>">Dengan Media</a>
                                <a class="dropdown-item" role="presentation" href="<?php if(isset($_GET['k'])){echo $url.'&sk=3';}else{echo $url.'?sk=3';}?>">Paket Produk</a>
                                <a class="dropdown-item" role="presentation" href="<?php if(isset($_GET['k'])){echo $url.'&sk=4';}else{echo $url.'?sk=4';}?>">Car Branding</a>
                                <a class="dropdown-item" role="presentation" href="<?php if(isset($_GET['k'])){echo $url.'&sk=5';}else{echo $url.'?sk=5';}?>">Kertas A3+</a>
                                <a class="dropdown-item" role="presentation" href="<?php if(isset($_GET['k'])){echo $url.'&sk=6';}else{echo $url.'?sk=6';}?>">Kartu Nama</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive" style="font-size: 13px;margin-left: 20px;margin-right: 20px;">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Kuantitas Min</th>
                    <th>Satuan</th>
                    <th>Kategori</th>
                    <th>Sub Kategori</th>
                    <th>Keterangan</th>
                    <th>Gambar</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
            <div class="container" id="kotak">
                <?php $counter=1; foreach ($produk as $key => $value) : ?>
                   

                    <tr>
                        <td><?= $counter;  ?></td> <?php $counter++; ?>
                        <td><br><?= ucfirst($value->nama_produk) ?><br><br></td>
                        <td><br><?= $value->harga ?><br></td>
                        <td><br><?= ucfirst(substr($value->deskripsi,0,50)).'....' ?><br><br></td>
                        <td><?= $value->minimum_quantity ?></td>
                        <td><?= ucfirst($value->satuan) ?></td>
                        <td><?php switch (intval($value->kategori_id)) {
                            case 1:
                                echo 'Outdoor';
                                break;
                            case 2:
                                echo 'Indoor';
                                break;
                            case 3:
                                echo 'Ecosolvent';
                                break;
                            case 4:
                               echo 'Docuprint';
                                break;
                            case 5:
                                echo'salah';
                                break;
                                                                    
                            default:
                               echo'Outdoor';
                                break;
                        } ?></td>
                        <td><?php switch (intval($value->subkategori_id)) {
                            case 1:
                                echo 'Tanpa Media';
                                break;
                            case 2:
                                echo 'Dengan Media';
                                break;
                            case 3:
                                echo 'Paket Produk';
                                break;
                            case 4:
                               echo 'Car Branding';
                                break;
                            case 5:
                                echo'Kertas A3+';
                                break;
                            case 6:
                                echo'Kartu Nama';
                                break;
                                                                    
                            default:
                               echo'default';
                                break;
                        } ?></td>

                        <td><br><?= ucfirst($value->ket);?><br><br></td>
                        <td><img class="img-thumbnail" src="<?= base_url('').$value->gambar ?>" alt="gambar"></td>
                        <td>
                            <a href="<?= base_url('admin/product/formUpdate?id=').$value->id ?>" style="margin-right: 20px;"><i class="btn btn-success icon ion-android-create"></i></a>
                            <a href="<?= base_url('admin/product/delete?id=').$value->id ?>" style="margin-right: 20px;"><i class="btn btn-danger icon ion-android-delete"></i></a>
                            </td>
                    </tr>

                <?php endforeach ?>
            </div>
            </tbody>
        </table>
    </div>
    </div>
   
    