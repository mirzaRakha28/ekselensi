
    
    <div class="d-in ne-block d-sm-inline" style="height: 166px;margin-top: 57px;min-height: 0px;">
    <img src="<?= base_url().$kategori->bigImage?>" style="min-width: 100%;">
        
    </div>
    <div class="container" style="margin-top: 0px;">
        <div class="row justify-content-center">
            <div class="col">
                <p class="text-center" style="font-size: 49px;font-family: Montserrat, sans-serif;">
                <strong><?= ucfirst($kategori->nama_kategori) ?></strong></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-auto col-xl-8 offset-lg-2">
                <p class="text-break text-center" style="font-family: Montserrat, sans-serif;margin-right: 10px;margin-left: 10px;"><?= ucfirst($kategori->deskripsi);?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-group">
               <?php if($_COOKIE['kategori'] != 4) :  ?>
                    <div class="card mx-2 rounded">
                        <a href = "<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'1' ?>">
                        <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[0]->image?>">
                        <div class="card-body">
                            <h4 class="card-title">Tanpa Media</h4>
                        </a>
                            <p class="card-text"><?= ucfirst($subKategori[0]->deskripsi)?></p>
                         </div>
                    </div>
                    <div class="card mx-2">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'2' ?>">
                        <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[1]->image?>">
                        <div class="card-body">
                            <h4 class="card-title">Dengan Media</h4>
                        </a>
                            <p class="card-text"><?= ucfirst($subKategori[1]->deskripsi)?></p>
                         </div>
                    </div>
                    <div class="card mx-2">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'3' ?>">
                        <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[2]->image?>">
                        <div class="card-body">
                            <h4 class="card-title">Paket Produk</h4>
                        </a>
                            <p class="card-text"><?= ucfirst($subKategori[2]->deskripsi)?></p>
                         </div>
                    </div>
                    <?php if($_COOKIE['kategori'] == 1 || $_COOKIE['kategori'] == 3) : ?>
                        <div class="card mx-2">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'4' ?>">
                        <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[3]->image?>">
                        <div class="card-body">
                            <h4 class="card-title">Car Branding</h4>
                        </a>
                            <p class="card-text"><?= ucfirst($subKategori[3]->deskripsi)?></p>
                         </div>
                    <?php endif ?>
                    <?php else : ?>
                        <div class="card mx-2">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'4' ?>">
                        <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[4]->image?>">
                        <div class="card-body">
                            <h4 class="card-title">Docuprint(A3+)</h4>
                        </a>
                            <p class="card-text"><?= ucfirst($subKategori[4]->deskripsi)?></p>
                         </div>

                         <div class="card mx-2">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'4' ?>">
                        <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[5]->image?>">
                        <div class="card-body">
                            <h4 class="card-title">Kartu Nama</h4>
                        </a>
                            <p class="card-text"><?= ucfirst($subKategori[4]->deskripsi)?></p>
                         </div>
                    <?php endif ?>   


                </div>
            </div>
        </div>
    </div>

</div>