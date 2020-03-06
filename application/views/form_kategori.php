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
                    </div> <br>

                    <label for="gamber">Gambar Kecil :</label>
                    <input id="gamber" name ="gambar"type="file" required>
                    <span style="margin-left : 46px; color: red; margin-top : 30px" >Notes : ukuran gambar dimensi width 640px x height 426px </span>
                    
                    <br><br>
                    <label for="gambarBesar">Gambar Besar :</label>
                    <input id="gambarBesar" name ="gambarBesar"type="file" required>
                    <span style="margin-left : 46px; color: red; margin-top : 30px" >Notes : ukuran gambar dimensi width 1280px x height 348px </span>
                    <br><br>

                    <button class="btn btn-primary btn-lg float-right d-xl-flex justify-content-xl-center align-items-xl-center"
                        type="submit" style="margin-right: 138px;">Submit</button> 
                    </form>
            </div>
