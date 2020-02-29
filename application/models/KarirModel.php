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
        public function edit($id){
            $this->db->from('karir');
            $this->db->where('id',$id);
            $query = $this->db->get();
            return $query->row();
        }
        public function getProductByProductID($product_Id)
        {
            return $this->db->get_where("karir",["id"=>$product_Id])->row();
        }

        public function updateKarirByID($id,$data)
        {
            $this->db->where('id',$id);
           $this->db->update('karir',$data);
        }
    }
?>
