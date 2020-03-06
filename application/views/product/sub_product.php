<img src="<?= base_url().$kategori->bigImage?>" style="width: 1500;max-width: 100%;min-width: 100%;">
    <div style="height: 41px;margin-left: 104px;margin-bottom: 0px;margin-top: 10px;">
        <p class="font-weight-bolder" style="font-family: Montserrat, sans-serif;"> <a href="<?= base_url('product/product_jasa')?>">Produk dan Jasa</a> &gt; <a href="<?= base_url('product/more_product').'?k='.$_GET['k'] ?>">
        <?php
            switch ($_GET['k']) {
                case 1:
                    echo "Outdoor";
                    break;
                case 2:
                    echo "Indoor";
                    break;
                case 3:
                    echo "Ecosolvent";
                    break;
                case 4:
                    echo "Docuprint";
                    break;
                
                default:
                  echo "Outdoor";
                    break;
            }
        ?>
        
        </a> &gt; <a href="#">
        <?php
            switch ($_GET['sk']) {
                case 1:
                    echo "Tanpa Media";
                    break;
                case 2:
                    echo "Dengan Media";
                    break;
                case 3:
                    echo "Paket Produk";
                    break;
                case 4:
                    echo "Car Branding";
                    break;
                case 5:
                    echo "Kertas A3+";
                    break;
                case 6:
                    echo "Kartu Nama";
                    break;
                default:
                    echo "Tanpa Media";
                    break;
            }
        ?>
        
        </a></p>
    </div>
    <div class="row" style="margin-top: 10px;margin-right: 20px;margin-left: 20px;">
        <div class="col" style="padding-left: 80px;padding-right: 80px;">
            <h1><?= ucfirst($subKategori->nama_subKategori)?></h1>
            <p><?= ucfirst($subKategori->deskripsi) ?></p>
            <div>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(254,209,54);width: 111px;">Sort</button>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="<?= base_url('product/sub_product/terendah').'?k='.$_GET['k'].'&sk='.$_GET['sk'] ?>">Terendah</a>
                        <a class="dropdown-item" role="presentation" href="<?= base_url('product/sub_product/tertinggi').'?k='.$_GET['k'].'&sk='.$_GET['sk'] ?>">Tertinggi</a>
                    </div>
                </div>
            </div>
            <p></p>
            <input type="hidden"  id="statusAddProductToCart" name="statusAddProductToCart" value="<?= isset($statusAddProductToCart) ? $statusAddProductToCart : ''?>">
            
            
            <?php $counter=0; foreach($produk as $brg) :?>
            <div class="row no-gutters my-3" style="margin-bottom: 3px;">
                <div class="col">
                    <div class="container border-warning shadow-lg flex-grow-1" style="height: auto;margin-bottom: 18px;max-height: auto;min-height: auto;"><img class="float-left" src="<?= base_url('').$brg->gambar ?>" style="width: auto;min-width: auto;max-width: auto;height: auto;min-height: auto;max-height: auto;">
                        <div class="card">
                            <div class="card-body float-left" style="height: auto;min-height: auto;max-height: auto;">
                                <h4 class="card-title" style="margin-bottom: 1px;color: rgb(248,129,18);"><?= ucfirst($brg->nama_produk) ?></h4>
                                <p class="card-text">(Harus Segera diganti..)Deskripsi bahan backlight china outdoor<br><?= ucfirst($subKategori->deskripsi) ?><br></p>
                                <p class="card-text"><strong>Harga </strong>: &nbsp; Rp. &nbsp;<?= number_format($brg->harga,2,",",".")?> per Meter Persegi<br></p>
                                
                                <div class="container">
                                    <div class="row no-gutters">
                                    <div class="col-sm-auto">

                                    <form action="<?= base_url('product/product')?>" method="post">
                                        <input type="hidden" name="productId" value="<?= $brg->id ?>">
                                        <button class="btn btn-primary border rounded" type="submit" style="margin-right: 15px;">
                                            Lihat
                                        </button>
                                    </form>

                                    </div>
                                    <div class="col-sm-auto">
                                    
                                    <?php $isInCart = false; ?>
                                    <?php if(isset($_SESSION['cart'])):  ?>
                                        <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                                            <?php if(intval($value->id) ==  intval($brg->id)): ?>
                                                <span class="my-auto badge badge-success align-self-center"  style="margin-right: 15px;" >
                                                        <div>
                                                        <i class=" material-icons" style="font-size: 2.5em;  ">
                                                        check_circle_outline
                                                        </i>
                                                        </div>
                                                </span>
                                                <?php $isInCart = true ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endif ?>

                                    </div>
                                    <div class="col-sm-auto"></div>
                                        <form action="<?php  
                                            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

                                            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                            echo $url; 

                                            ?>" method="post">
                                            <fieldset  <?= $isInCart ? 'disabled' : ''?>>
                                                    <input type="hidden" name="productIDToaddToCart" value="<?= $brg->id?>">
                                                    <button class="btn btn-primary border rounded" type="submit" style="background-color: rgb(245,111,25);">
                                                        <i class="fa fa-plus"></i>
                                                        &nbsp;Tambah ke Keranjang
                                                    </button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                

                                
                            </div>
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
        // console.log(statusAddProductToCart.value.length)
        if(statusAddProductToCart.value == 'success'){
            Swal.fire({
                title   : 'Good job!',
                text    :'Barang Berhasil DiTambahkan ke Keranjang',
                icon    : 'success',
                confirmButtonText:'<i class="fa fa-thumbs-up"></i> Lanjutkan Pilih Barang!',
            }).then(result=>{
               
                const badge = document.querySelector("#badge");
                badge.className += " bounce-6"
                console.log(badge,badge.className);
            })
            statusAddProductToCart.value = '';
            // console.log("berhasil")
        } else if(statusAddProductToCart.value == 'redundan'){
            

          
        }  

        


    </script>

    

