<div class="page-content-wrapper">
                <div class="row-sm-12">
                    <a class="col-lg-auto mx-auto font-weight-bold btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                    <a class="col-sm-auto font-weight-bold float-right my-2 mx-2 btn btn-primary" href="<?= base_url('admin/logout')?>">Logout</a>
                </div>
                
                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Sub Kategori</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col"><i class="fa fa-search" style="margin-left: 22px;"></i><input class="shadow-sm" type="search" style="margin-left: 9px;background-color: rgba(255,255,255,0);" placeholder="Pencarian"></div>
                        <div class="col"><a href="<?= base_url('admin/form_sub_category')?>"><i class="fa fa-plus-circle" style="margin-right: 10px;"></i>Edit Subkategori</a></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row no-gutters justify-content-start" style="margin-bottom: 30px">
                        <div class="col">
                            <div style="margin-bottom: 20px;width: 200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive" style="font-size: 13px;margin-left: 20px;margin-right: 20px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sub Kategori</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                foreach($subkategori as $row){
                    echo ('
                    
                    <tr>
                    <td> <strong>'.strtoupper($row->nama_subKategori).'</strong></td>
                    <td>'.$row->deskripsi.'</td>
                    <td> <img class="img-thumbnail" style="max-width:150px;" src="'.base_url().$row->image.'" alt="gambar"></td>
                        
                    </tr>
                    ');

                }
            
            ?>
                </tbody>
            </table>
        </div>
    </div>