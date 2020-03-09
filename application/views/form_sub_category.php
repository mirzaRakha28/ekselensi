
        <div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Sub Kategori</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <form style="margin-right: 0px;margin-left: 46px;"enctype="multipart/form-data"action="<?= base_url('admin/form_sub_category/addSubKategori') ?>" method="post"><label>Judul SubKategori</label>
                    <div class="dropdown">
                        <select  name="kategori">
                            <option value="1">Tanpa Media</option>
                            <option value="2">Dengan Media</option>
                            <option value="3">Paket Produk</option>
                            <option value="4">Car Branding</option>
                            <option value="5">Lembar A3+</option>
                            <option value="6">Kartu Nama</option>
                        </select>
                    </div><label style="margin-top: 11px;">Deskripsi</label><textarea name ="deskripsi" class="form-control" style="width: 363px;" required></textarea>
                    <label style="margin-right: 37px;margin-top: 19px;">Gambar Banner</label>
                    <input name ="gambar"type="file" required><button class="btn btn-primary btn-lg float-right d-xl-flex justify-content-xl-center align-items-xl-center"
                        type="submit" style="margin-right: 138px;">Submit</button></form>
                        <p style="margin-left : 46px; color: red; margin-top : 30px" >Notes : ukuran gambar dimensi width 1280px x height 348px </p>

        </div>


