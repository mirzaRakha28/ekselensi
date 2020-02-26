<?php

    class AdminModel extends CI_Model{

        public function getAdminByUserName($username)
        {
            return $this->db->get_where('admin',["username"=>$username])->row();
        }

        public function getAdminByEmail($email)
        {
            return $this->db->get_where('admin',['email'=>$email])->result();
        }

    }

?>