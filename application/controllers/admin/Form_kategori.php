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

            $image = $this->upload($_FILES['gambar']);
             if(!$image){
                 echo `<script> alert(" gagal upload gambar") </script>`;
            }
            $bigImage = $this->upload($_FILES['gambarBesar']);
             if(!$bigImage){
                 echo `<script> alert(" gagal upload gambar") </script>`;
            }

            $this->CategoryModel->editKategori($kategori,$deskripsi,$image,$bigImage);

            if($this->db->affected_rows()){
                echo `<script> alert(" Produk berhasil ditambahkan") </script>`;

                redirect(base_url('admin/kategori'));
            }

            
        }
        public function upload($gambar)
        {
            $namafile   = $gambar['name'];
            $ukuranFile = $gambar['size'];
            $error      = $gambar['error'];
            $tempName   = $gambar['tmp_name'];
            $nama       = uniqid();

            $extensiValid   = ['jpg','jpeg','png'];
            $fileExtensi    = explode('.',$namafile);
            $fileExtensi    = strtolower(end($fileExtensi));

            if(!in_array($fileExtensi,$extensiValid)){
                echo `<script> alert(" gagal upload gambar") </script>`;
                return false;
            } elseif ($ukuranFile <10240000) {
                move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/ekselensi/assets/img/'.$nama.'.'.$fileExtensi);
                return 'assets/img/'.$nama.'.'.$fileExtensi;
            }

        }



    }



?>