<?php

    class Product_jasa extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('product/product_jasa');
            $this->load->view('templates/footer');
        }


    }



?>