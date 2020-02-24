<img src="<?= base_url()?>assets/img/test3.png" style="width: 1500;max-width: 100%;min-width: 100%;">
    <div style="height: 41px;margin-left: 104px;margin-bottom: 0px;margin-top: 10px;">
        <p style="font-family: Montserrat, sans-serif;">Produk dan Jasa &gt; Outdoor Printing &gt; Tanpa Media</p>
    </div>
    <div class="row" style="margin-top: 10px;margin-right: 20px;margin-left: 20px;">
        <div class="col" style="padding-left: 80px;padding-right: 80px;">
            <h1>Tanpa Media</h1>
            <div>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(254,209,54);width: 111px;">Sort</button>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="<?= base_url('product/sub_product/terendah').'?k='.$_GET['k'].'&sk='.$_GET['sk'] ?>">Terendah</a>
                        <a class="dropdown-item" role="presentation" href="<?= base_url('product/sub_product/tertinggi').'?k='.$_GET['k'].'&sk='.$_GET['sk'] ?>">Tertinggi</a>
                    </div>
                </div>
            </div>
            <p></p>
            <span style="display:none" id="statusAddProductToCart">
                 <?= isset($statusAddProductToCart) ? $statusAddProductToCart : 'null'?> 
            </span>
            
            <?php $counter=0; foreach($produk as $brg) :?>

                <?php 
                    // var_dump($_GET);die(); 
                    ?>

                <div class="row no-gutters my-3" style="margin-bottom: 3px;">
                <div class="col">
                    <div class="container border-warning shadow-lg flex-grow-1" style="height: auto;margin-bottom: 18px;max-height: auto;min-height: auto;"><img class="float-left" src="<?= base_url('').$brg->gambar ?>" style="width: auto;min-width: auto;max-width: auto;height: auto;min-height: auto;max-height: auto;">
                        <div class="card">
                            <div class="card-body float-left" style="height: auto;min-height: auto;max-height: auto;">
                                <h4 class="card-title" style="margin-bottom: 1px;color: rgb(248,129,18);"><?= $brg->nama_produk ?></h4>
                                <p class="card-text">Deskripsi bahan backlight china outdoor<br><?= $brg->deskripsi ?><br></p>
                                <p class="card-text"><strong>Harga </strong>: &nbsp; Rp. &nbsp;<?= number_format($brg->harga,2,",",".")?> per Meter Persegi<br></p>
                                
                                <form action="<?= base_url('product/product')?>" method="post">
                                    <input type="hidden" name="productId" value="<?= $brg->id ?>">
                                    <button class="btn btn-primary border rounded" type="submit" style="margin-right: 15px;">
                                        Lihat
                                    </button>
                                </form>

                                <!-- <a href="<?= base_url('product/product')?>"> -->
                                <form action="<?php 
                                    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
                                    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                    echo $url; 
                                
                                    ?>" method="post">
                                    <input type="hidden" name="productIDToaddToCart" value="<?= $brg->id?>">
                                    <button class="btn btn-primary border rounded" type="submit" style="background-color: rgb(245,111,25);">
                                        <i class="fa fa-plus"></i>
                                        &nbsp;Tambahk ke Keranjang
                                    </button>
                                </form>
                                <!-- </a> -->
                            </div>
                    </div>
                </div>
            </div>
            <?php $counter++?>
            <?php endforeach?>
        </div>
    </div>


    <script>
        const statusAddProductToCart = document.querySelector('#statusAddProductToCart');
        if(statusAddProductToCart.innerText == 'success'){
            Swal.fire({
                title   : 'Good job!',
                text    :'Barang Berhasil DiTambahkan ke Keranjang',
                icon    : 'success',
                confirmButtonText:'<i class="fa fa-thumbs-up"></i> Lanjutkan Pilih Barang!',
            })
        } 

    </script>

