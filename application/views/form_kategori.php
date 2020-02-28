    <div class="page-content-wrapper">
                <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                    <div class="row" style="height: 66px;">
                        <div class="col-md-12">
                            <div>
                                <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Kategori</strong></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <form style="margin-right: 0px;margin-left: 46px;"enctype="multipart/form-data"action="<?= base_url('admin/form_kategori/addKategori') ?>" method="post"><label>Judul Kategori</label>
                    <div class="dropdown">
                        <select  name="kategori">
                            <option value="1">Outdoor</option>
                            <option value="2">Indoor</option>
                            <option value="3">Ecosolvent</option>
                            <option value="4">Docuprinting</option>
                        </select>
                    </div><label style="margin-top: 11px;">Deskripsi</label><textarea name ="deskripsi" class="form-control" style="width: 363px;" ></textarea><label style="margin-right: 37px;margin-top: 19px;">Gambar Banner</label>
                    <input name ="gambar"type="file"><button class="btn btn-primary btn-lg float-right d-xl-flex justify-content-xl-center align-items-xl-center"
                        type="submit" style="margin-right: 138px;">Submit</button></form>
            </div>
