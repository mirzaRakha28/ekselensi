var dataBarang ="Drone";
var hargaBarang= 1600000;
var stokBarang= 5;

function showBarang(){
    var listBarang = document.getElementById("list-barang");
    listBarang.innerHTML += "<li>" + dataBarang + "|" + hargaBarang + "|" + stokBarang + "</li>";
}

function addBarang(){
    var jumlahInput = document.getElementById("jumlahPesanan").value;
    var tagihan = jumlahInput * hargaBarang;
    if(jumlahInput <= stokBarang){
        document.getElementById("container").innerHTML = "Tagihan anda adalah Rp. " = tagihan;
    } else if(jumlahInput > stokBarang){
        document.getElementById("container").innerHTML = "Stok Barang Tidak Cukup";
    }
}


showBarang();