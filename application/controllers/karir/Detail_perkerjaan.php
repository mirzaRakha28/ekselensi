<?php

    class Detail_perkerjaan extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('karir/detail_perkerjaan');
            $this->load->view('templates/footer');
        }
    }



?>