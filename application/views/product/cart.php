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
            <?php $cart=$_SESSION['cart']; $total=0; 
            for($index=0;$index<count($_SESSION['cart']);$index++) : 
            $data = $cart[$index];
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
                            <input id="panjang<?=$index?>" value="<?= $data->panjang?>" class="float-left" type="number" data-toggle="tooltip" data-bs-tooltip="" style="width: 40px;margin-right: 6px;" min="1" title="panjang">
                            <p class="float-left" style="margin-right: 11px;font-family: Roboto, sans-serif;">x</p>
                            <input id="lebar<?=$index?>" value="<?= $data->lebar?>" type="number" data-toggle="tooltip" data-bs-tooltip="" style="width: 40px;" min="0" title="lebar">
                        </td>
                        <td>
                            <input id="quantity<?=$index?>" value="<?= $data->lebar?>" class="float-left" type="number" data-toggle="tooltip" data-bs-tooltip="" style="width: 40px;margin-right: 6px;" min="1" title="panjang">
                        </td>
                        <td>
                            <p class="text-break" style="width: 136px;min-width: 136px;max-width: 136px;">Rp <span id="harga<?=$index?>"><?= $data->harga?></span></p>
                        </td>
                        <td>
                            <button id="btnDelete<?=$index?>" value="<?=$index?>" class="btn btn-danger btnDelete" style="border-radius:10%;">
                            <i class="icon ion-android-delete"></i>
                        </button>
                    </td>
                    </tr>
                <?php endfor ?>
                <tr id="total">
                    <td><strong>Total</strong></td>
                    <td><br></td>
                    <td><br></td>
                    <td><strong>Rp <span id="totalHarga" value="<?=$total?>"><?=$total?></span></strong></td>
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
            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        </div>
    </div>
    <a href="https://wa.me/62882210714854" target="_blank" class="cd-top  cd-top--fade-out cd-top--show" style="background-image: url(&quot;<?= base_url()?>assets/img/wa.png&quot;);background-size: contain;background-color: rgba(232,98,86,0);"></a>


    <script>
        const btnDeletes = document.querySelectorAll('.btnDelete')
        const total      = document.querySelector('#total')
        const totalHarga = total.querySelector('#totalHarga')

        for(let index=0;index < btnDeletes.length;index++){
            btnDeletes[index].addEventListener('click',event=>{
                let selector = '#elm'+ btnDeletes[index].value
                let elmToDel = document.querySelector(selector)
                let hargaElmToDel = elmToDel.querySelector('#harga'+index)
                let hargaToDel = parseInt(hargaElmToDel.innerText)>0 ? parseInt(hargaElmToDel.innerText): 0;
                totalHarga.innerHTML = parseInt(totalHarga.innerText) - hargaToDel;
                elmToDel.remove();
            })

            const panjang   = document.querySelector('#panjang'+index)
            const lebar     = document.querySelector('#lebar'+index)
            const quantity  = document.querySelector('#quantity'+index)
            const harga     = document.querySelector('#harga'+index)
            const hargaSatuan = parseInt(harga.innerHTML)/parseInt(panjang.value)/parseInt(lebar.value)/parseInt(quantity.value);

            function updateHarga() {
                let p = parseInt(panjang.value)
                let l = parseInt(lebar.value)
                let q = parseInt(quantity.value)
                let temp = parseInt(totalHarga.innerText)-parseInt(harga.innerText)
                harga.innerHTML = p*l*q*hargaSatuan
                totalHarga.innerHTML = temp + p*l*q*hargaSatuan;
                
            }

            panjang.addEventListener('input',event=>updateHarga())
            lebar.addEventListener('input',event=>updateHarga())
            quantity.addEventListener('input',event=>updateHarga())
        }

        
    </script>