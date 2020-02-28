<?php

    class Test extends CI_Controller{
        public function index()
        {
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            $url = explode('?',$url);
            $temp = explode('&',end($url));

            $hello = $url[0].'?'.$temp[0];
            var_dump($url);
            var_dump($temp);

            var_dump($hello);
            
            die();

        }
    }

 ?>