<?php

    class More_product extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('product/more_product');
            $this->load->view('templates/footer');
        }


    }



?>