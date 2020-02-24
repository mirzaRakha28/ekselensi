<?php

    class Sub_product extends CI_Controller{

        public function index(){ 
            $data['statusAddProductToCart'] = $this->addToCart(); 
            $data['produk'] = $this->ProductModel->getProduct(intval($_GET['k']),intval($_GET['sk']));
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }
        public function terendah(){
            $data['statusAddProductToCart'] = $this->addToCart(); 
            $data['produk'] = $this->ProductModel->getAsc(intval($_GET['k']),intval($_GET['sk']));
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }
        public function tertinggi(){
            $data['statusAddProductToCart'] = $this->addToCart(); 
            $data['produk'] = $this->ProductModel->getDesc(intval($_GET['k']),intval($_GET['sk']));
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }


        public function addToCart()
        {
            if(isset($_POST['productIDToaddToCart']) && !empty($_POST['productIDToaddToCart'])){
                $product = $this->ProductModel->getProductByProductID($_POST['productIDToaddToCart']);
                // var_dump($data);die();
                if(!$this->checkInsideSession($product)){
                    $cart = $this->createObjectCart($product);
                    // bikin session dengan id cart dan isi dengan array of cart
                    if(!isset($_SESSION['cart'])){
                        $_SESSION['cart'] = array($cart);
                    } else {
                        array_push($_SESSION['cart'],$cart);
                    }
                    
                    return "success";
                }else {
                    return "success";
                }
                
            }
        }

        public function createObjectCart($product)
        {   
            $cart = new Data();
            $cart->gambar       = $product->gambar;
            $cart->nama_produk  = $product->nama_produk;
            $cart->kategori     = $product->kategori_id;
            $cart->subKategori  = $product->subkategori_id;
            $cart->panjang      = 1;
            $cart->lebar        = 1;
            $cart->quantity     = 1;
            $cart->harga        = $product->harga;
            return $cart;
        }
        // akhir method createObjectCart

            // method checkInsideSession
            public function checkInsideSession($product){
                $check = false;
                $sessionToCheck = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
                if($sessionToCheck == null){
                    return $check;
                }
                foreach($sessionToCheck as $data){
                    if($product->nama_produk === $data->nama_produk ){
                        $oldQuantity = $data->quantity;
                        $data->quantity++;
                        $data->harga = intval($data->harga)/$oldQuantity * intval($data->quantity);
                        $check = true;
                        break;
                    }
                }
                return $check;
            }
        // akhir method checkInsideSession

    


    }

    // awal class Data
    class Data{
    }
    // akhir class Data



?>