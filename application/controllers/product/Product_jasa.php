<?php

    class Product_jasa extends CI_Controller{

        public function index(){
            $data['kategori'] = $this->CategoryModel->AllCategory();
            // var_dump($data);die();
            $this->load->view('templates/header');
            $this->load->view('product/product_jasa',$data);
            $this->load->view('templates/footer');
        }


    }



?>