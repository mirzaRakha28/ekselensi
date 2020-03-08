
<?php
//  var_dump($_SESSION['cart']);die(); 
 ?>
<div class="row" style="margin-top: 107px;">
        <div class="col" style="color: rgb(0,0,0);">
            <h1 class="text-left text-center" style="color: rgb(0,0,0);">Estimasi Produksi</h1>
        </div>
    </div>
    <div class="table-responsive" style="margin-top: 0px;padding-top: 60px;padding-right: 60px;padding-left: 60px;font-family: Montserrat, sans-serif;">
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th style="width: 139px;max-width: 139px;min-width: 139px;">Ukuran</th>
                    <th style="width: 100px;min-width: 100px;max-width: 100px;">Kuantitas</th>
                    <th style="width: 160px;min-width: 160px;max-width: 160px;">Harga</th>
                    <th style="width: 55px;min-width: 55px;max-width: 55px;"></th>
                </tr>
            </thead>
            <tbody>
            
            <?php if(array_key_exists("cart",$_SESSION)) :  ?>
            <?php $cart=$_SESSION['cart']; $total=0;  $index=0;
                foreach($_SESSION['cart'] as $key => $value) : 
                    if($value == null){
                        break;
                    }
                $data = $value; 
                $total+= intval($data->harga); ?>
                    <tr id="elm<?= $index ?>">
                        <td class="text-break" style="min-width: 272px;max-width: 272px;">
                            <div class="row">
                                <div class="col" style="width: 128px;padding-right: 0px;padding-left: 21px;">
                                    <img style="min-width: 100px;min-height: 100px;max-height: 100px;max-width: 100px;margin-left: 50px;width: 100px;height: 100px;" src="<?= base_url('').$data->gambar?>">
                                </div>
                                <div class="col" style="padding-right: 153px;">
                                    <p style="width: 246px;font-family: Montserrat, sans-serif;margin-bottom: 0px;">
                                        <strong><?= $data->nama_produk?>&nbsp;</strong>
                                    </p>
                                    <p>
                                        <em>category : <?php switch ($data->kategori) {
                                                case 1:
                                                    echo "Outdoor";
                                                    break;
                                                case 2:
                                                    echo "Indoor";
                                                    break;
                                                case 3:
                                                    echo "Ecosolvent";
                                                    break;
                                                case 4:
                                                    echo "Docuprint";
                                                    break;
                                                default:
                                                    echo "-";
                                                    break;
                                            }?>
                                        </em></p>
                                </div>
                            </div>
                        </td>
                        <td>
                
                            <input oninput="validity.valid||(value='');" id="panjang<?=$index?>" value="<?= $data->panjang?>" class="float-left" type="number" data-toggle="tooltip" data-bs-tooltip="" style="<?php if($data->subKategori == '2') echo 'display:none;'?> width: 40px;margin-right: 6px;" min="1" title="panjang">
                            <p class="float-left" style="<?php if($data->subKategori == '2') echo 'display:none;'?> margin-right: 11px;font-family: Roboto, sans-serif;">x</p>
                            <input oninput="validity.valid||(value='');" id="lebar<?=$index?>" value="<?= $data->lebar?>" type="number" data-toggle="tooltip" data-bs-tooltip="" style="<?php if($data->subKategori == '2') echo 'display:none;'?> width: 40px;" min="1" title="lebar">

                        </td>
                        <td>
                            <input oninput="validity.valid||(value='');" id="quantity<?=$index?>" value="<?=  $data->quantity?>" class="float-left" type="number" data-toggle="tooltip" data-bs-tooltip="" style="width: 40px;margin-right: 6px;" min="1" title="unit">
                        </td>
                        <td>
                            <p class="text-break" style="width: 136px;min-width: 136px;max-width: 136px;">Rp 
                                <span style="display: none;" id="harga<?=$index?>" value="<?=$data->harga?>" >
                                    <?=$data->harga?>
                                </span>
                                <!-- dengan format harga -->
                                <span id="tampilanHarga<?=$index?>" value="<?=$data->harga?>" >
                                    <?=number_format($data->harga,2,",",'.')?>
                                </span>
                            </p>
                        </td>
                        <td>
                            <form action="<?= base_url('product/cart/index2') ?>" method="get">
                                <input type="hidden" name="indexProductToDel" value="<?=$key?>">
                                <button  id="btnDelete<?=$index?>" value="<?=$index?>" class="btn btn-danger btnDelete" style="border-radius:10%;">
                                <i class="icon ion-android-delete"></i>
                            </form>
                        </button>
                    </td>
                    </tr>
                <?php $index++; endforeach ?>
                <?php endif ?>
                <tr id="total">
                    <td><strong>Total</strong></td>
                    <td><br></td>
                    <td><br></td>
                    <td><strong>Rp 
                            <span style="display:none" id="totalHarga" value="<?= isset($total)? $total: 0?>">
                                <?= isset($total)? $total : 0 ?>
                            </span>
                            <!-- degnan format harga yang akan ditampilkan -->
                            <span id="tampilanTotalHarga" value="<?= isset($total)? $total: 0?>">
                                <?= isset($total)? number_format($total,2,",",".") : 0 ?>
                            </span>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td><strong>Estimasi Waktu Pengerjaan</strong></td>
                    <td><br></td>
                    <td><br></td>
                    <td><strong>5 Hari</strong></td>
                </tr>
                <tr>
                    <td><strong>Estimasi Waktu Pengiriman</strong></td>
                    <td><br></td>
                    <td><br></td>
                    <td><strong>5 Hari</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card border-danger" style="margin-right: 50px;margin-left: 50px;">
        <div class="card-body">
            <h4 class="card-title">Disclaimer</h4>
            <p class="card-text">harga dan waktu estimasi akan berubah sewaktu-waktu</p>
        </div>
    </div>
    <a href="https://wa.me/62882210714854" target="_blank" class="cd-top  cd-top--fade-out cd-top--show" style="background-image: url(&quot;<?= base_url()?>assets/img/wa.png&quot;);background-size: contain;background-color: rgba(232,98,86,0);"></a>


    <script>
        const btnDeletes = document.querySelectorAll('.btnDelete')
        const total      = document.querySelector('#total')
        const totalHarga = total.querySelector('#totalHarga')
        const tampilanTotalHarga = document.querySelector('#tampilanTotalHarga')


        for(let index=0;index < btnDeletes.length;index++){
            // btnDeletes[index].addEventListener('click',event=>{
            //     let selector = '#elm'+ btnDeletes[index].value
            //     let elmToDel = document.querySelector(selector)
            //     let hargaElmToDel = elmToDel.querySelector('#harga'+index)
            //     let hargaToDel = parseInt(hargaElmToDel.innerText)>0 ? parseInt(hargaElmToDel.innerText): 0;
            //     totalHarga.innerHTML = parseInt(totalHarga.innerText) - hargaToDel;
            //     // elmToDel.remove();
            // })

            const panjang   = document.querySelector('#panjang'+index)
            const lebar     = document.querySelector('#lebar'+index)
            const quantity  = document.querySelector('#quantity'+index)
            const harga     = document.querySelector('#harga'+index)
            const tampilanHarga = document.querySelector('#tampilanHarga'+index)
            const hargaSatuan = parseInt(harga.innerHTML)/parseInt(panjang.value)/parseInt(lebar.value)/parseInt(quantity.value);

            function updateHarga() {
                let p = parseInt(panjang.value)>0 ? parseInt(panjang.value) : 0;
                let l = parseInt(lebar.value)  >0 ? parseInt(lebar.value) : 0;
                let q = parseInt(quantity.value)>0 ? parseInt(quantity.value): 0;
                let temp = parseInt(totalHarga.innerText)-parseInt(harga.innerText)
                harga.innerHTML = p*l*q*hargaSatuan
                totalHarga.innerHTML = temp + p*l*q*hargaSatuan;
                tampilanTotalHarga.innerHTML = currency(parseInt(totalHarga.innerHTML), { separator: '.' , decimal:','}).format(); // => "1.234,56"
                tampilanHarga.innerHTML = currency(p*l*q*hargaSatuan,{separator:'.',decimal:','}).format();
            }

            panjang.addEventListener('input',event=>updateHarga())
            lebar.addEventListener('input',event=>updateHarga())
            quantity.addEventListener('input',event=>updateHarga())
        }

        
    </script>