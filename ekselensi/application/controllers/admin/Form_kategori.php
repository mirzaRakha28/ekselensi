<?php

    // halaman beranda
    class Form_kategori extends CI_Controller{

        public function index(){

            
            $this->load->view('templates/header_admin');
            $this->load->view('form_kategori');
            $this->load->view('templates/footer_admin');
        }
        public function addKategori()
        {
            // var_dump($_POST);
            // var_dump($_FILES);die();

            // var_dump($_SERVER['DOCUMENT_ROOT']);die();

            // ambil semua data dari $_POST dan $_FILES;
            $kategori = $_POST['kategori'];
            $deskripsi  = $_POST['deskripsi'];

            //$gambar = $this->upload();
            // if(!$gambar){
            //     echo `<script> alert(" gagal upload gambar") </script>`;
            // }

            $this->CategoryModel->editKategori($kategori,$deskripsi);

            if($this->db->affected_rows()){
                echo `<script> alert(" Produk berhasil ditambahkan") </script>`;

                redirect(base_url('admin/kategori'));
            }

            
        }


    }



?>