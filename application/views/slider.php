<div class="page-content-wrapper">
            <div class="row-sm-12">
                <a class="col-lg-auto mx-auto font-weight-bold btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <a class="col-sm-auto font-weight-bold float-right my-2 mx-2 btn btn-primary" href="<?= base_url('admin/logout')?>">Logout</a>
            </div>
            <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Slider</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col"><i class="fa fa-search" style="margin-left: 22px;"></i><input class="shadow-sm" type="search" style="margin-left: 9px;background-color: rgba(255,255,255,0);" placeholder="Pencarian"></div>
                        <div class="col"><a href="<?= base_url('admin/form_slider')?>"><i class="fa fa-plus-circle" style="margin-right: 10px;"></i>Tambahkan Slider</a></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive" style="font-size: 13px;margin-left: 20px;margin-right: 20px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Link</th>
                            <th>Gambar</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($barang as $dt) : ?>
                        <tr>
                            <td><?= $dt->title;?></td>
                            <td><?= $dt->subtitle;?><br></td>
                            <td><?= $dt->link;?></td>
                            <td><?= $dt->gambar;?></td>
                            <td><a href="#" style="margin-right: 20px;">Edit</a>
                            <a href="#" class="delete_data"  style="margin-right: 20px;" id="<?= $dt->id;?>">Delete</a></td>
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
                window.location="<?php echo base_url();?>admin/slider/delete/"+id;
            }else{
                return false;   
            }
        });
    });
    
    </script>


        
