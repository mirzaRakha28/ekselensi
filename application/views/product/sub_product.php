<img src="<?= base_url()?>assets/img/test3.png" style="width: 1500;max-width: 100%;min-width: 100%;">
    <div style="height: 41px;margin-left: 104px;margin-bottom: 0px;margin-top: 10px;">
        <p style="font-family: Montserrat, sans-serif;">Produk dan Jasa &gt; Outdoor Printing &gt; Tanpa Media</p>
    </div>
    <div class="row" style="margin-top: 10px;margin-right: 20px;margin-left: 20px;">
        <div class="col" style="padding-left: 80px;padding-right: 80px;">
            <h1>Tanpa Media</h1>
            <div>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: rgb(255,255,255);color: rgb(254,209,54);width: 111px;">Sort</button>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="<?= base_url('product/sub_product/terendah') ?>">Terendah</a><a class="dropdown-item" role="presentation" href="<?= base_url('product/sub_product/tertinggi') ?>">Tertinggi</a></div>
                </div>
            </div>
            <p></p>
            
            <?php $counter=0; foreach($produk as $brg) :?>
                <div class="row no-gutters my-3" style="margin-bottom: 3px;">
                <div class="col">
                    <div class="container border-warning shadow-lg flex-grow-1" style="height: auto;margin-bottom: 18px;max-height: auto;min-height: auto;"><img class="float-left" src="<?= base_url('').$brg->gambar ?>" style="width: auto;min-width: auto;max-width: auto;height: auto;min-height: auto;max-height: auto;">
                        <div class="card">
                            <div class="card-body float-left" style="height: auto;min-height: auto;max-height: auto;">
                                <h4 class="card-title" style="margin-bottom: 1px;color: rgb(248,129,18);"><?= $brg->nama_produk ?></h4>
                                <p class="card-text">Deskripsi bahan backlight china outdoor<br><?= $brg->deskripsi ?><br></p>
                                <p class="card-text"><strong>Harga </strong>: &nbsp;Rp<?= $brg->harga ?> per Meter Persegi<br></p>
                                
                                <form action="<?= base_url('product/product')?>" method="post">
                                    <input type="hidden" name="productId" value="<?= $produk[$counter]->id ?>">
                                    <button class="btn btn-primary border rounded" type="submit" style="margin-right: 15px;">
                                        Lihat
                                    </button>
                                </form>

                                <a href="<?= base_url('product/product')?>">
                                    <button class="btn btn-primary border rounded" type="button"
                                        style="background-color: rgb(245,111,25);">
                                        <i class="fa fa-plus"></i>
                                        &nbsp;Tambahakan
                                    </button>
                                </div>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <?php $counter++?>
            <?php endforeach?>
        </div>
    </div>

