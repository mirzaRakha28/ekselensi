<?php

    class Sub_product extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product');
            $this->load->view('templates/footer');
        }


    }



?>