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
                            hello
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col"><i class="fa fa-search" style="margin-left: 22px;"></i><input class="shadow-sm" type="search" style="margin-left: 9px;background-color: rgba(255,255,255,0);" placeholder="Pencarian"></div>
                        <div class="col"><a href="<?= base_url('admin/form_product')?>"><i class="fa fa-plus-circle" style="margin-right: 10px;"></i>Tambahkan Produk</a></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row no-gutters justify-content-start">
                        <div class="col">
                            <div class="dropdown" style="margin-bottom: 20px;width: 200px;"><button class="btn btn-primary dropdown-toggle border rounded-0" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-left: 31px;padding: -6px;background-color: rgb(255,255,255);color: rgb(255,107,0);">Semua Kategori</button>
                                <div
                                    class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="dropdown" style="margin-bottom: 20px;width: 194px;margin-right: 0px;"><button class="btn btn-primary dropdown-toggle text-left border rounded-0" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-left: 31px;padding: -6px;background-color: rgb(255,255,255);color: rgb(255,107,0);">Semua Subkategori</button>
                            <div
                                class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive" style="font-size: 13px;margin-left: 20px;margin-right: 20px;">
        <table class="table">
            <thead>
                <tr>
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
                <tr>
                    <td><br>Flexy China 370 gram (tanpa sambung)<br><br></td>
                    <td><br>65000<br></td>
                    <td><br>Flexy China adalah bahan seperti terpal dengan ketebalan 270 /440 yang diimport dari Negara China. Bahan Flexy China ini adalah versi yang paling murah sehingga dapat bersaing di pasar cetak Digital Printing di Jakarta.<br><br></td>
                    <td>1</td>
                    <td>Meter Persegi</td>
                    <td>Outdoor</td>
                    <td>Tanpa Media</td>
                    <td><br>Tidak bisa laminating<br><br></td>
                    <td>/assets/img/felxy1.png</td>
                    <td><a href="#" style="margin-right: 20px;">Edit</a><a href="#" style="margin-right: 20px;">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
<script>

    const alertOnce = document.querySelector("#alertOnce");
    if(alertOnce.innerText == 'true'){
        Swal.fire({
                title   : 'Login Berhasil',
                text    :'Email atau Password Salah!',
                icon    : 'success',
                confirmButtonText:'<i class="fa fa-thumbs-up"></i> Welcome!',
            })
    }
</script>
    