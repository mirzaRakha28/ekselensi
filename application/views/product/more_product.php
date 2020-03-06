
    
    <div class="d-in ne-block d-sm-inline" style="height: 166px;margin-top: 57px;min-height: 0px;">
    <img src="<?= base_url().$kategori->bigImage?>" style="min-width: 100%;">
        
    </div>
    <div class="row" style="margin-top: 36px;margin-right: 20px;margin-left: 20px;">
        <div class="col">
            <h1><?= ucfirst($kategori->nama_kategori) ?></h1>
            <p><?= ucfirst($kategori->deskripsi);?></p>
        </div>
    </div>
    <div class="table-responsive" style="margin-top: 52px;margin-left: 20px;margin-right: 20px;width: 1074px;">
        <table class="table">
            <tbody>
            <?php if($_COOKIE['kategori'] != 4) :  ?>
                <tr>
                    <td style="width: 348px;max-width: 348px;min-width: 348px;min-height: 515px;max-height: 515px;">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'1' ?>">
                            <div class="card" style="height: 279px;max-height: 279px;max-width: 324px;min-height: 279px;min-width: 324px;">
                                <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[0]->image?>">
                                <div class="card-body">
                                    <h4 class="card-title">Tanpa Media</h4>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td style="width: 348px;max-width: 348px;min-width: 348px;min-height: 515px;max-height: 515px;">
                    <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'2' ?>"><div class="card" style="height: 279px;max-height: 490px;max-width: 324px;">
                            <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[1]->image?>">
                            <div class="card-body">
                                <h4 class="card-title">Dengan Media</h4>
                            </div>
                        </div></a>
                    </td>
                    <td style="width: 348px;max-width: 348px;min-width: 348px;min-height: 515px;max-height: 515px;">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'3' ?>">
                        <div class="card" style="height: 279px;max-height: 490px;max-width: 324px;"><img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[2]->image?>">
                            <div class="card-body">
                                <h4 class="card-title">Paket Produk</h4>
                            </div>
                        </div></a>
                    </td>
                    <?php if($_COOKIE['kategori'] == 1 || $_COOKIE['kategori'] == 3) : ?>
                        <td style="width: 348px;max-width: 348px;min-width: 348px;min-height: 515px;max-height: 515px;">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'4' ?>"><div class="card" style="height: 279px;max-height: 490px;max-width: 324px;">
                                <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[3]->image?>">
                                <div class="card-body">
                                    <h4 class="card-title">Car Branding</h4>
                                </div>
                            </div></a>
                        </td>
                    <?php endif ?>
                <?php else : ?>
                    <td style="width: 348px;max-width: 348px;min-width: 348px;min-height: 515px;max-height: 515px;">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'5' ?>"><div class="card" style="height: 279px;max-height: 490px;max-width: 324px;">
                                <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[4]->image?>">
                                <div class="card-body">
                                    <h4 class="card-title">Docuprint(Kertas A3) </h4>
                                </div>
                            </div>
                        </a>
                    </td>

                    <td style="width: 348px;max-width: 348px;min-width: 348px;min-height: 515px;max-height: 515px;">
                        <a href="<?= base_url('product/sub_product').'?k='.$_COOKIE['kategori'].'&sk='.'6' ?>"><div class="card" style="height: 279px;max-height: 490px;max-width: 324px;">
                                <img class="card-img-top w-100 d-block" src="<?= base_url().$subKategori[5]->image?>">
                                <div class="card-body">
                                    <h4 class="card-title">Kartu Nama</h4>
                                </div>
                            </div>
                        </a>
                    </td>
                <?php endif ?>
                </tr>
            </tbody>
        </table>
    </div>