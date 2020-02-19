<?php

    class Cart extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('product/cart');
            $this->load->view('templates/footer');
        }


    }



?>