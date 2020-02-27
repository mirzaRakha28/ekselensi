<?php

    // halaman beranda
    class Form_product extends CI_Controller{

        public function index(){

            
            $this->load->view('templates/header_admin');
            $this->load->view('form_product');
            $this->load->view('templates/footer_admin');
        }

        public function addProduct()
        {
            
            // ambil semua data dari $_POST dan $_FILES;
            $nama_produk = $_POST['nama_produk'];
            $harga       = $_POST['harga'];
            $deskripsi   = $_POST['deskripsi'];
            $satuan      = $_POST['satuan'];
            $minimum_quantity = intval($_POST['minimum_quantity']);
            $kategori    = intval($_POST['kategori']) ;
            $subKategori = intval($_POST['subkategori']);
            $keterangan  = $_POST['keterangan'];

            $gambar = $this->upload();
            if(!$gambar){
                echo `<script> alert(" gagal upload gambar") </script>`;
            }

            $this->ProductModel->addProduct($nama_produk,$harga,$deskripsi,$satuan,$minimum_quantity,$kategori,$subKategori,$gambar,$keterangan);

            if($this->db->affected_rows()){
                echo `<script> alert(" Produk berhasil ditambahkan") </script>`;

                redirect(base_url('admin/product'));
            }

            
        }

        public function upload()
        {
            $namafile   = $_FILES['gambar']['name'];
            $ukuranFile = $_FILES['gambar']['size'];
            $error      = $_FILES['gambar']['error'];
            $tempName   = $_FILES['gambar']['tmp_name'];
            $nama       = uniqid(); 

            $extensiValid   = ['jpg','jpeg','png'];
            $fileExtensi    = explode('.',$namafile);
            $fileExtensi    = strtolower(end($fileExtensi));
            $nama           = $nama.'.'.$fileExtensi;

            if(!in_array($fileExtensi,$extensiValid)){
                echo `<script> alert(" gagal upload gambar") </script>`;
                return false;
            } elseif ($ukuranFile < 10240000) {
                move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/ekselensi/assets/img/'.$nama);
                return 'assets/img/'.$nama;
            }

        }


    }



?>