<?php

    class Product extends CI_Controller{

        public function index(){
           
            $data['data'] = $this->ProductModel->getProductByProductID(intval($_POST['productId']));
            // var_dump($data);die();
            $this->load->view('templates/header');
            $this->load->view('product/product',$data);
            $this->load->view('templates/footer');
        }


    }



?>