<?php

    class Tata_cara extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('product_jasa');
            $this->load->view('templates/footer');
        }


    }



?>