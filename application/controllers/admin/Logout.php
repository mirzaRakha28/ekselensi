<?php 
 class Logout extends CI_Controller{
     public function index()
     {
         unset($_SESSION['isAdminLogin']);
         unset($_SESSION['alertOnce']);
         unset($_SESSION['loginGagal']);

         redirect(base_url('admin'));
     }
 }

?>