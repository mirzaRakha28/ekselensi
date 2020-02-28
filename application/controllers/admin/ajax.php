<?php

$keyword = $_GET['keyword'];
$produk = $this->ProductModel->getProductLike($keyword);

 ?>

<?php $counter=1; foreach ($produk as $key => $value) : ?>       
        <tr>
            <td><?= $counter;  ?></td> <?php $counter++; ?>
            <td><br><?= ucfirst($value->nama_produk) ?><br><br></td>
            <td><br><?= $value->harga ?><br></td>
            <td><br><?= ucfirst(substr($value->deskripsi,0,50)).'....' ?><br><br></td>
            <td><?= $value->minimum_quantity ?></td>
            <td><?= ucfirst($value->satuan) ?></td>
            <td><?php switch (intval($value->kategori_id)) {
                case 1:
                    echo 'Outdoor';
                    break;
                case 2:
                    echo 'Indoor';
                    break;
                case 3:
                    echo 'Ecosolvent';
                    break;
                case 4:
                    echo 'Docuprint';
                    break;
                case 5:
                    echo'salah';
                    break;
                                                        
                default:
                    echo'Outdoor';
                    break;
            } ?></td>
            <td><?php switch (intval($value->subkategori_id)) {
                case 1:
                    echo 'Tanpa Media';
                    break;
                case 2:
                    echo 'Dengan Media';
                    break;
                case 3:
                    echo 'Paket Produk';
                    break;
                case 4:
                    echo 'Car Branding';
                    break;
                case 5:
                    echo'Kertas A3+';
                    break;
                case 6:
                    echo'Kartu Nama';
                    break;
                                                        
                default:
                    echo'default';
                    break;
            } ?></td>

            <td><br><?= ucfirst($value->ket);?><br><br></td>
            <td><img class="img-thumbnail" src="<?= base_url('').$value->gambar ?>" alt="gambar"></td>
            <td>
                <a href="<?= base_url('admin/product/formUpdate?id=').$value->id ?>" style="margin-right: 20px;"><i class="btn btn-success icon ion-android-create"></i></a>
                <a href="<?= base_url('admin/product/delete?id=').$value->id ?>" style="margin-right: 20px;"><i class="btn btn-danger icon ion-android-delete"></i></a>
                </td>
        </tr>

    <?php endforeach ?>