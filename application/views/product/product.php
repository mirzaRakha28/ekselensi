<div style="height: 41px;margin-left: 104px;margin-bottom: 0px;margin-top: 10px;">
        <p style="font-family: Montserrat, sans-serif;color: rgb(0,0,0);">Produk dan Jasa &gt; Outdoor Printing &gt; Tanpa Media &gt; Bahan Back Light China Outdoor<br><br></p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12"><img class="img-thumbnail img-fluid flex-grow-0 center-block" src="<?= base_url().$data->gambar?>" style="width: 450px;min-width: 450px;max-width: 450px;height: 450px;min-height: 450px;max-height: 450px;margin-left: 110px;"></div>
                </div>
            </div>
            <div class="col-md-5">

                <form action="<?=base_url('product/cart')?>" method="post">
                    <input type="hidden" name="gambar" value="<?=$data->gambar?>">
                    <input type="hidden" name="nama_produk" value="<?=$data->nama_produk?>">
                    <input type="hidden" name="kategori" value="<?=intval($data->kategori_id)?>">
                    <input type="hidden" name="subKategori" value="<?=intval($data->subkategori_id)?>">
        
                    <h1><?= $data->nama_produk ?><br></h1>
                    <p><?= $data->deskripsi ?></p>

                    <div>
                        <label>Ukuran &nbsp; :&nbsp;</label>
                        <input name="panjang" id="panjang" value="1" type="number" min="1"  style="width: 43px;margin-right: 12px;">
                        <label style="margin-right: 10px;">x&nbsp;</label>
                        <input name="lebar" id="lebar" value="1" type="number"  min="1" style="width: 43px;margin-right: 12px;">
                    </div>

                    <div>
                        <label>Quantity :&nbsp;</label>
                        <input name="quantity" id="quantity" value="1" type="number"  min="1"  style="width: 43px;margin-right: 12px;">
                    </div>
                    <p style="margin-bottom: -3px;">Waktu Estimasi : &nbsp;(pake ajax?)</p>
                    <p>Harga : &nbsp;<span id="harga"><?= $data->harga ?></span></p>
                    
                    <input id="hargaHidden" type="hidden" name="harga" value="<?=$data->harga?>">
                    <h2 class="text-center text-success"><button class="btn btn-primary border rounded" type="submit" style="background-color: rgb(245,111,25);"><i class="fa fa-plus"></i>&nbsp;Tambah ke Keranjang</button></h2>
                </form>
            </div>
        </div>
    </div>

    <Script>
        const panjang   = document.querySelector('#panjang')
        const lebar     = document.querySelector('#lebar')
        const quantity  = document.querySelector('#quantity')
        const harga     = document.querySelector('#harga')
        const hargaHidden = document.querySelector("#hargaHidden")
        const hargaSatuan = parseInt(harga.innerHTML);

        function updateHarga() {
            let p = parseInt(panjang.value)
            let l = parseInt(lebar.value)
            let q = parseInt(quantity.value)
            hargaHidden.value = harga.innerHTML = p*l*q*hargaSatuan
            
        }

        panjang.addEventListener('input',event=>updateHarga())
        lebar.addEventListener('input',event=>updateHarga())
        quantity.addEventListener('input',event=>updateHarga())
    </Script>