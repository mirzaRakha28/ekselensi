<?php 
    class CategoryModel extends CI_Model{
        public function getCategory($id)
        {
            return $this->db->get_where('kategori',['id'=>$id])->row();
        }
    }
?>