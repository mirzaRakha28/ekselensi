<?php 

class SubCategoryModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSubCategory($id)
    {
        return $this->db->get_where("subkategori",["id"=>$id])->row();
    }

    public function getAllSubCategory()
    {
        return $this->db->get('subkategori')->result();
    }

    public function editSubKategori($subkategori,$deskripsi,$image,$bigImage)
        {
            // $data = array(
            //     'kategori' => $kategori,
            //     'deskripsi' => $deskripsi
            //  );
        
            $this->db->query(
                "UPDATE `subkategori` 
                SET `deskripsi` = '$deskripsi', `image` = '$image',`BigImage` = '$bigImage'
                 WHERE `id` = $subkategori");
        }
}

?>