<?php

    class More_product extends CI_Controller{

        public function index(){
            if(isset($_GET['k'])){
                die();
                $_COOKIE['kategori'] = $_GET['k'];
                
            }
            $data['kategori'] = $this->CategoryModel->getCategory(intval($_GET['k']));
            $data['subKategori'] = $this->SubCategoryModel->getAllSubCategory();
            // var_dump($data['subKategori']);die();
            $this->load->view('templates/header');
            $this->load->view('product/more_product',$data);
            $this->load->view('templates/footer');
        }


    }



?>