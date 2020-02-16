<?php

    class Cart extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('
            cart');
            $this->load->view('templates/footer');
        }


    }



?>