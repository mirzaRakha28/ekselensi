<?php
    class KarirModel extends CI_Model{
        public function tampil_data(){
            return $this->db->get('karir');
        }
        public function add_data($data,$table){
            return $this->db->insert($table, $data);
        }
        public function delete($data){
            $this->db->delete('karir',array('id'=>$data));

        }
    }
?>
