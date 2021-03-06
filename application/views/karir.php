<div class="page-content-wrapper">
            <div class="container-fluid">
            
            <div class="row-sm-12">
                <a class="col-lg-auto mx-auto font-weight-bold btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <a class="col-sm-auto font-weight-bold float-right my-2 mx-2 btn btn-primary" href="<?= base_url('admin/logout')?>">Logout</a>
            </div>

                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Karir</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col"><i class="fa fa-search" style="margin-left: 22px;"></i><input class="shadow-sm" type="search" style="margin-left: 9px;background-color: rgba(255,255,255,0);" placeholder="Pencarian"></div>
                        <div class="col"><a href="<?= base_url('admin/form_karir')?>"><i class="fa fa-plus-circle" style="margin-right: 10px;"></i>Tambahkan Pekerjaan</a></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row no-gutters justify-content-start">
                        <div class="col">
                            <div class="dropdown" style="margin-bottom: 20px;width: 200px;"><button class="btn btn-primary dropdown-toggle border rounded-0" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-left: 31px;padding: -6px;background-color: rgb(255,255,255);color: rgb(255,107,0);">Sort</button>
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
                        <th>Judul Pekerjaan</th>
                        <th>Deskripsi Pekerjaan</th>
                        <th>Tanggal Upload</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Gaji Terendah</th>
                        <th>Gaji Tertinggi</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($kerja as $job) : ?>
                    <tr>
                        <td><?= $job->job;?></td>
                        <td><?= ucfirst(substr($job->deskripsi,0,20)).'...'?></td>
                        <td><?= $job->tanggal;?></td>
                        <td><?= $job->jenis;?></td>
                        <td>Rp. <?=number_format($job->gajiTerendah,2,",",".")?><br></td>
                        <td>Rp. <?= number_format($job->gajiTertinggi,2,",",".")?><br></td>
                        <td><?= $job->namaPerusahaan;?><br></td>
                        <td><?= $job->alamat;?><br></td>
                        <td><a href="<?= site_url('admin/karir/edit/'.$job->id);?>"  style="margin-right: 20px;">Edit</a>
                        <a href="#" class="delete_data"style="margin-right: 20px;"id="<?= $job->id;?>">Delete</a></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
<script>
    $(document).ready(function(){
        $('.delete_data').click(function(){
            var id = $(this).attr("id");
            if(confirm("delete ?")){
                window.location="<?php echo base_url();?>admin/karir/delete/"+id;
            }else{
                return false;   
            }
        });
    });
    
    </script>