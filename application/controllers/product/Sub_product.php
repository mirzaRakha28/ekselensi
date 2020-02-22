<?php

    class Sub_product extends CI_Controller{

        public function index(){

            $data['produk'] = $this->ProductModel->getProduct(intval($_GET['k']),intval($_GET['sk']));
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }


    }



?>