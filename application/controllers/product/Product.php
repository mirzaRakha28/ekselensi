<?php
    // harus 
    class Data{}

    class Product extends CI_Controller{

        

        public function index(){
            header('Cache-Control: no cache'); //no cache
            // session_cache_limiter('private_no_expire'); // works
            // session_cache_limiter('public'); // works too
            if(!isset($_SESSION)){session_start();}

            if(!isset($_POST['productId'])){
                return redirect(base_url('product/product_jasa'));
            }

            $data['data'] = $this->ProductModel->getProductByProductID(intval($_POST['productId']));
            // var_dump($data);die();
            $this->load->view('templates/header');
            $this->load->view('product/product',$data);
            $this->load->view('templates/footer');

        }


    }



?>