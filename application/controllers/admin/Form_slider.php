<?php

    // halaman beranda
    class Form_slider extends CI_Controller{

        public function index(){
            $data['barang'] = $this->SliderModel->tampil_data()->result();
            $this->load->view('templates/header_admin');
            $this->load->view('form_slider',$data);
            $this->load->view('templates/footer_admin');
        }
        public function add_product(){
            var_dump($_POST);
            $title = $this->input->post('title');
            $subtitle = $this->input->post('subtitle');
            $link = $this->input->post('link');
            $gambar=$_FILES['gambar']['name'];
            if($gambar=''){}else{
                $config ['upload_path']='./assets/img/';
                $config ['allowed_types']='jpg|jpeg|png|gif';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('gambar')){
                    echo "gambar gagal";
                }else{
                    $gambar = $this->upload->data('file_name');
                }
            }
            var_dump($gambar);
            $data = array(
                'title' => $title,
                'subtitle' => $subtitle,
                'link' => $title,
                'gambar' => $gambar
            );
            var_dump($gambar);
            $this->SliderModel->add_data($data,'slide');
            redirect('admin/slider');


        }
        
        public function delete(){

        }
    }


?>