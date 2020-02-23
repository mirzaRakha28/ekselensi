<?php

    class Sub_product extends CI_Controller{

        public function index(){

            $data['produk'] = $this->ProductModel->getProduct(intval($_GET['k']),intval($_GET['sk']));
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }
        public function terendah(){
            $data['produk'] = $this->ProductModel->getAsc();
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }
        public function tertinggi(){
            $data['produk'] = $this->ProductModel->getDesc();
            $this->load->view('templates/header');
            $this->load->view('product/Sub_product',$data);
            $this->load->view('templates/footer');
        }


    }



?>