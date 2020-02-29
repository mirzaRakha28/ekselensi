<div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="row" style="height: 66px;">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-bottom: 68px;font-family: Montserrat, sans-serif;margin-left: 37px;"><strong>Slider</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <form style="margin-right: 0px;margin-left: 46px;" enctype= "multipart/form-data" action="<?=  base_url('admin/slider/update')?>" method="post">
            <input type="hidden" name="id" value="<?= $slide->id;?>">
            <label>Title</label>
            <input class="form-control" type="text" name="title"style="width: 363px;" value="<?php echo $slide->title;?>"  required>
            <label>Sub-Title</label>
            <input class="form-control" type="text" name="subtitle" tyle="width: 363px;" inputmode="numeric"value="<?php echo $slide->subtitle;?>" >
            <label>Link&nbsp;</label>
            <input class="form-control"type="text" name="link"style="width: 363px;" inputmode="numeric" <?php echo $slide->subtitle;?>>
            <label style="margin-right: 37px;margin-top: 19px;">Gambar&nbsp;</label>
            <input type="hidden" name="gambarLama" value="<?=$slide->gambar?>">
            <input type="file" name="gambar" <?= $_SERVER['DOCUMENT_ROOT'].`/ekselensi/`.$slide->gambar?>><button class="btn btn-primary btn-lg float-right d-xl-flex justify-content-xl-center align-items-xl-center"   type="submit" style="margin-right: 138px;">Submit</button>
        </form>
        </div>