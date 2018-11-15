<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Authlibrary {
    protected $CI;
    public function __construct(){
        $this->CI =& get_instance();
    }

    public function check_auth(){
        if(!$this->CI->session->userdata('admin')){
            redirect("admin-website/login.html");
        }
    }
}