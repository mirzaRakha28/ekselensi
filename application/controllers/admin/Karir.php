<?php

    // halaman beranda
    class Karir extends CI_Controller{

        public function index(){
            if(!isset($_SESSION['isAdminLogin']) && $_SESSION['isAdminLogin'] !== true){
                redirect(base_url('admin')); exit;
            }
            $data['kerja'] = $this->KarirModel->tampil_data()->result();
            $this->load->view('templates/header_admin');
            $this->load->view('karir',$data);
            $this->load->view('templates/footer_admin');
        }
        public function delete(){
            $data = $this->uri->segment(4);
            $this->KarirModel->delete($data);
            redirect('admin/karir');
        }
        public function edit($id){
            
            $data['kerja']= $this->KarirModel->edit(intval($id));
            $this->load->view('templates/header_admin');
            $this->load->view('form_karir_update',$data);
            $this->load->view('templates/footer_admin');
        }
       
        

        public function update()
        {
            

            // ambil data datanya

            $job            = $_POST['job'];
            $deskripsi      = $_POST['deskripsi'];
            $gajiTerendah   = $_POST['gajiTerendah'];
            $gajiTertinggi  = $_POST['gajiTertinggi'];

            $jenis          = $_POST['jenis'];
            $id             = $_POST['id'];
            $namaPerusahaan = $_POST['namaPerusahaan'];
            $alamat         = $_POST['alamat'];
            
                // update database
                $data = array(
                    'job' => $job,
                    'deskripsi'=>$deskripsi,
                    'jenis' => $jenis,
                    'gajiTerendah' =>$gajiTerendah,
                    'gajiTertinggi' => $gajiTertinggi,
                    'namaPerusahaan' => $namaPerusahaan,
                    'alamat' => $alamat
                 );

                $this->KarirModel->updateKarirByID($id,$data);

                if($this->db->affected_rows()){
                    redirect('admin/karir');
                }
                redirect('admin/karir');
            
        }

    }



?>