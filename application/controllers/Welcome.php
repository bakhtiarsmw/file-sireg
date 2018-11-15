<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }
	public function index()
	{
		// $data['page'] = "home";
        // $menu = array("menu"=>"home");
        $data['data'] = $this->Admin_model->getAllReg();
        $this->load->view('layout/main', $data);
	}
}
