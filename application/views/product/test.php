<form action="<?php  
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    echo $url; 

    ?>" method="post">
    <input type="hidden" name="productIDToaddToCart" value="<?= $brg->id?>">
    <button class="btn btn-primary border rounded" type="submit" style="background-color: rgb(245,111,25);">
        <i class="fa fa-plus"></i>
        &nbsp;Tambah ke Keranjang
    </button>
</form>