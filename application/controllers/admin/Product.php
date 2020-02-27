<?php

    // halaman beranda
    class Product extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] !== true){
                redirect(base_url('admin')); exit;
            }elseif ($_SESSION['isAdminLogin'] && !isset($_SESSION['alertOnce'])) {
                $_SESSION['alertOnce'] = true;
            } 
            $_SESSION['alertOnce'] = true;
            $data['produk'] = $this->ProductModel->getAllProduct();
            // var_dump($data['produk']);die();
            $this->load->view('templates/header_admin');
            $this->load->view('product',$data);
            $this->load->view('templates/footer_admin');
        }

        public function delete()
        {
            if(isset($_GET['id']) && !empty($_GET['id'])){
                $this->ProductModel->deleteProductByID(intval($_GET['id']));
                redirect(base_url('admin/product'));
            }
            redirect(base_url('admin/product'));
        }

        public function formUpdate()
        {
            if(isset($_GET['id'])&& !empty($_GET['id'])){
                $data['produk'] = $this->ProductModel->getProductByProductID($_GET['id']);
                $this->load->view('templates/header_admin');
                $this->load->view('form_update_product',$data);
                $this->load->view('templates/footer_admin');
            }else {
                redirect(base_url('admin/product'));
            }
            
        }

        public function update()
        {
            // var_dump($_POST);die();

            // ambil data datanya

            $nama_produk = $_POST['nama_produk'];
            $harga       = $_POST['harga'];
            $deskripsi   = $_POST['deskripsi'];
            $satuan      = $_POST['satuan'];
            $minimum_quantity = intval($_POST['minimum_quantity']);
            $kategori    = intval($_POST['keterangan']);
            $subKategori = intval($_POST['subkategori']);
            $gambarLama  = $_POST['gambarLama'];
            $keterangan  = $_POST['keterangan'];
            $produk_id   = $_POST['id'];

            if($_FILES['gambar']['error'] === 4){
                $gambar = $gambarLama;
            }else {
                $gambar = $this->upload();

                // update database
                $data = array(
                    'nama_produk' => $nama,
                    'deskripsi' => $deskripsi,
                    'harga' => $harga,
                    'minimum_quantity'=> $minimum_quantity,
                    'satuan' => $satuan,
                    'kategori_id'=> $kategori,
                    'subkategori_id'=> $subKategori,
                    'ket'=>$keterangan,
                    'gambar'=>$gambar
                 );

                $this->ProductModel->updateProductByID($produk_id,$data);

                if($this->db->affected_rows()){
                    redirect('admin/product');
                }
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