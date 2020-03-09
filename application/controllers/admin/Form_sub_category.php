<?php

    // halaman beranda
    class Form_sub_category extends CI_Controller{

        public function index(){
            $this->load->view('templates/header_admin');
            $this->load->view('form_sub_category');
            $this->load->view('templates/footer_admin');
        }
        public function addSubKategori()
        {
            // var_dump($_POST);
            // var_dump($_FILES);die();

            // var_dump($_SERVER['DOCUMENT_ROOT']);die();

            // ambil semua data dari $_POST dan $_FILES;
            $kategori = $_POST['kategori'];
            $deskripsi  = $_POST['deskripsi'];
            $data = $this->SubCategoryModel->getGambar($kategori);
            unlink($data->image);
            $image = $this->upload();
            if(!$image){
                 echo `<script> alert(" gagal upload gambar") </script>`;
            }
            $this->SubCategoryModel->editSubKategori($kategori,$deskripsi,$image);

            if($this->db->affected_rows()){
            
                echo `<script> alert(" Produk berhasil ditambahkan") </script>`;

                redirect(base_url('admin/sub_category'));
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

            if(!in_array($fileExtensi,$extensiValid)){
                echo `<script> alert(" gagal upload gambar") </script>`;
                return false;
            } elseif ($ukuranFile <10240000) {
                move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/ekselensi/assets/img/'.$nama.$fileExtensi);
                return 'assets/img/'.$nama.$fileExtensi;
            }

        }
    }

?>