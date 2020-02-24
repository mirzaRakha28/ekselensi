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
                <?php 
                // var_dump($data);die(); 
                ?>
                <form action="<?=base_url('product/cart')?>" method="post">
                    <input type="hidden" name="gambar" value="<?=$data->gambar?>">
                    <input type="hidden" name="nama_produk" value="<?=$data->nama_produk?>">
                    <input type="hidden" name="kategori" value="<?=intval($data->kategori_id)?>">
                    <input type="hidden" name="subKategori" value="<?=intval($data->subkategori_id)?>">
        
                    <h1><?= $data->nama_produk ?><br></h1>
                    <p><?= $data->deskripsi ?></p>

                    
                        <div style="<?php if($data->subkategori_id == '2') echo 'display:none;'?>">
                            <label style ="<?php if($data->subkategori_id == '2') echo 'display:none;'?>">Ukuran &nbsp; :&nbsp;</label>
                            <input oninput="validity.valid||(value='');" name="panjang" id="panjang" value="1" type="number" min="1"  style="<?php if($data->subkategori_id == '2') echo 'display:none;'?>width: 43px;margin-right: 12px;">
                            <label style="<?php if($data->subkategori_id == '2') echo 'display:none;'?>margin-right: 10px;">x&nbsp;</label>
                            <input oninput="validity.valid||(value='');" name="lebar" id="lebar" value="1" type="number"  min="1" style="<?php if($data->subkategori_id == '2') echo 'display:none;'?>width: 43px;margin-right: 12px;">
                        </div>

                    <div>
                        <label>Quantity :&nbsp;</label>
                        <input oninput="validity.valid||(value='');" name="quantity" id="quantity" value="1" type="number"  min="1"  style="width: 43px;margin-right: 12px;">
                    </div>
                    <p style="margin-bottom: -3px;">Waktu Estimasi : &nbsp;(pake ajax?)</p>
                    <p id="satuan" style="display:none"><?= $data->harga?></p>
                    <p>Harga : &nbsp; Rp &nbsp;<span id="harga" ><?=  isset($data->harga)? number_format($data->harga,2,",",".") : 0  ?></span></p>
                    
                    <input id="hargaHidden" type="hidden" name="harga" value="<?=$data->harga?>">
                    <h2 class="text-center text-success">
                        <button class="btn btn-primary border rounded" type="submit" style="background-color: rgb(245,111,25);">
                            <i class="fa fa-plus"></i>
                            &nbsp;Tambah ke Keranjang
                        </button>
                    </h2>

                </form>
                
            </div>
        </div>
    </div>

    <Script>
        const panjang   = document.querySelector('#panjang')
        const lebar     = document.querySelector('#lebar')
        const quantity  = document.querySelector('#quantity')
        const harga     = document.querySelector('#harga')
        const satuan    = document.querySelector('#satuan')
        const hargaHidden = document.querySelector("#hargaHidden")
        const hargaSatuan = parseInt(satuan.innerHTML);

        console.log(panjang,lebar,quantity,harga,hargaHidden);

        function updateHarga() {
            let p = parseInt(panjang.value)
            let l = parseInt(lebar.value)
            let q = parseInt(quantity.value)>0 ? parseInt(quantity.value) : 0;
            hargaHidden.value = p*l*q*hargaSatuan
            harga.innerHTML = currency(parseInt(p*l*q*hargaSatuan), { separator: '.' , decimal:','}).format();
            
        }

        panjang.addEventListener('input',event=>updateHarga())
        lebar.addEventListener('input',event=>updateHarga())
        quantity.addEventListener('input',event=>updateHarga())
    </Script>