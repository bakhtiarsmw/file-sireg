<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {    
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }
	public function index()
	{ 
		$this->load->view('login');
	}
    public function loginPost(){
        $username = $this->input->post('usernamess');
        $password = $this->input->post('passwordss');
        $user = $this->Admin_model->getLogin($username);
        if($user){
            if($user->PASSWORD==$password){
                $sessionData = array(
                    'admin' => $username,
                );
                $this->session->set_userdata($sessionData); 
                redirect("admin-website","refresh");
            }
            redirect("admin-website/login.html","refresh");
        }else{
            redirect("admin-website/login.html","refresh");
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect("admin-website/login.html","refresh");
    }
}