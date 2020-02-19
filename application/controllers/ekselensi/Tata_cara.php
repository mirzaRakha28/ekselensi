<?php

    class Tata_cara extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('ekselensi/tata_cara');
            $this->load->view('templates/footer');
        }


    }



?>