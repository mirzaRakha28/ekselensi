<?php

    class Cart extends CI_Controller{
        // method index
        public function index(){
            if(isset($_POST) && $_POST != null){
                if(!$this->checkInsideSession()){
                    $cart = $this->createObjectCart();
                    // bikin session dengan id cart dan isi dengan array of cart
                    if(!isset($_SESSION['cart'])){
                        $_SESSION['cart'] = array($cart);
                    } else {
                        array_push($_SESSION['cart'],$cart);
                    }  
                }
            }
            
            $this->load->view('templates/header');
            $this->load->view('product/cart');
            $this->load->view('templates/footer');
        }
        // akhir methode index

        // methode createObjectCart
        public function createObjectCart()
        {   
            $cart = new Data();
            $cart->gambar       = $_POST['gambar'];
            $cart->nama_produk  = $_POST['nama_produk'];
            $cart->kategori     = $_POST['kategori'];
            $cart->subKategori  = $_POST['subKategori'];
            $cart->panjang      = $_POST['panjang'];
            $cart->lebar        = $_POST['lebar'];
            $cart->quantity     = $_POST['quantity'];
            $cart->harga        = $_POST['harga'];
            return $cart;
        }
        // akhir method createObjectCart

            // method checkInsideSession
            public function checkInsideSession(){
                $check = false;
                $sessionToCheck = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
                if($sessionToCheck == null){
                    return $check;
                }
                for($index=0;$index<count($sessionToCheck);$index++){
                    if($_POST['nama_produk'] ===$sessionToCheck[$index]->nama_produk ){
                        $sessionToCheck[$index]->quantity++;
                        $check = true;
                        break;
                    }
                }
                return $check;
            }
        // akhir method checkInsideSession
        
        // method removeNullCart
        // public function removeNullCart(){
        //     $sessionToCheck = $_SESSION['cart'];
        //     if( $sessionToCheck != null){
        //         for($index=0;$index<count($_SESSION['cart']);$index++){
        //             if($sessionToCheck[$index]->nama_produk == null ){
        //                 unset($_SESSION['cart'][$index]);
        //             }
        //         }
                
        //     }
        // }
        // akhir method removeNullCart

    } 
    // akhir class Cart

    // awal class Data
    class Data{
    }
    // akhir class Data
?>