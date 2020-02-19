<?php

    class Karir extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('karir/karir');
            $this->load->view('templates/footer');
        }


    }



?>