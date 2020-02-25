<?php

    class Sub_product extends CI_Controller{
        public function hello()
        {
            header('Cache-Control: no cache'); //no cache
            session_cache_limiter('private_no_expire'); // works
            //session_cache_limiter('public'); // works too
            if(!isset($_SESSION)){session_start();}
        }

        public function index(){ 
            $this->hello();
            $status = $this->addToCart();
            // var_dump($status);die();
            $data['statusAddProductToCart'] = $status != "false" ? $status : ''; 
            $data['produk'] = $this->ProductModel->getProduct(intval($_GET['k']),intval($_GET['sk']));
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }
        public function terendah(){
            // var_dump($_GET);die();
            $this->hello();
            $status = $this->addToCart();
            $data['statusAddProductToCart'] = $status != "false" ? $status : ''; 
            $data['produk'] = $this->ProductModel->getAsc(intval($_GET['k']),intval($_GET['sk']));
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }
        public function tertinggi(){
            $this->hello();
            $status = $this->addToCart();
            $data['statusAddProductToCart'] = $status != "false" ? $status : ''; 
            $data['produk'] = $this->ProductModel->getDesc(intval($_GET['k']),intval($_GET['sk']));
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }


        public function addToCart()
        {    
            // var_dump($_POST["productIDToaddToCart"]);die();
            if(isset($_POST) && $_POST !== null && isset($_POST['productIDToaddToCart']) && !empty($_POST['productIDToaddToCart'])){
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
                    unset($_POST); 
                    // header('Cache-Control: no cache');
                    return 'success';
                }else {
                    // unset($_POST);header('Cache-Control: no cache');
                    return 'redundan';
                }
                
            } else {
                // header('Cache-Control: no cache');
                return 'false';
            }

            /// coba pake get
            // // var_dump($_POST["productIDToaddToCart"]);die();
            // if(isset($_GET['productIDToaddToCart']) && !empty($_GET['productIDToaddToCart'])){
            //     $product = $this->ProductModel->getProductByProductID($_GET['productIDToaddToCart']);
            //     // var_dump($data);die();
            //     if(!$this->checkInsideSession($product)){
            //         $cart = $this->createObjectCart($product);
            //         // bikin session dengan id cart dan isi dengan array of cart
            //         if(!isset($_SESSION['cart'])){
            //             $_SESSION['cart'] = array($cart);
            //         } else {
            //             array_push($_SESSION['cart'],$cart);
            //         }
            //         unset($_GET['productIDToaddToCart']); 
            //         $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

            //         $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            //         var_dump( $_SERVER);die();
            //         echo $url; die();

                    
            //         return 'success';
            //     }else {
            //         unset($_GET['productIDToaddToCart']);
            //         $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

            //         $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            //         var_dump( $_SERVER);die();
            //         echo $url; die();
            //         return 'success';
            //     }
                
            // } else {
            //     return 'false';
            // }
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