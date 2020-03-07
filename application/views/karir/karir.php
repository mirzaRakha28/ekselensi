<img src="<?= base_url('') ?>assets/img/test3.png" style="max-width: auto;width: 1500px;min-width: 100%;">
    <div class="card" style="height: 689px;padding-right: 20px;">
        <div class="card-body border-primary" style="padding: 168px;width: 1184px;padding-top: 0px;padding-left: 147px;">
            <div class="row" style="margin-top: 36px;margin-right: 0px;margin-left: 0px;">
                <div class="col" style="padding-left: 0px;padding-right: 0px;">
                    <h1>Karir</h1>
                    <p>PT Ekselensi Printing and Design membuka beberapa kesempatan kerja, diantaranya adalah sebagai berikut : &nbsp;<br><br></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h4>Lowongan Pekerjaan</h4>
                </div>
                <div class="col-md-7">
                    <h4>Keterangan</h4>
                </div>
            </div>
            <hr>
            <?php foreach ($job as $kerjaan) : ?>
                <div class="row shadow">
                    <div class="col-md-5">
                        <div class="media">
                            <div></div>
                            <div class="media-body">
                                <h4><a href="#" style="color: rgb(245,146,16);"><?=ucfirst($kerjaan->job)?></a></h4><span class="badge badge-success"></span>
                                <p class="text-muted">Dipublish pada: <span><?=$kerjaan->tanggal?></span><br>Jenis Pekerjaan : <?=$kerjaan->jenis?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <p><?=ucfirst($kerjaan->deskripsi)?></p>
                        <p style="font-size: 18px;">Rp. <span><?=number_format($kerjaan->gajiTerendah,2,",",".")?></span>- <span><?=number_format($kerjaan->gajiTertinggi,2,",",".")?></span></p>
                        <p class="text-muted" style="margin-bottom: 0px;"><?=$kerjaan->namaPerusahaan?></p>
                        <p class="text-muted" style="margin-bottom: 0px;"><i class="fa fa-map-marker" style="margin-right: 9px;"></i><?=$kerjaan->alamat?></p>
                    </div>
                <!-- <div class="col-md-3 col-xl-2 offset-xl-1 text-right">
                    <div class="btn-group" role="group"></div>
                </div> -->
                </div>
                <hr>
            <?php endforeach ?>


                <!-- <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active" style="color: #f15922;background-color: #f15922;"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div> -->
        </div>
    </div>
