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

    public function editSubKategori($subkategori,$deskripsi)
        {
            // $data = array(
            //     'kategori' => $kategori,
            //     'deskripsi' => $deskripsi
            //  );
        
            $this->db->query(
                "UPDATE `subkategori` 
                SET `deskripsi` = '$deskripsi'
                 WHERE `id` = $subkategori");
        }
}

?>