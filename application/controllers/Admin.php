<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    private $_layout = "dashboard";
    public function __construct(){
        parent::__construct();
        $this->load->library('Authlibrary');
        $this->authlibrary->check_auth();
        $this->load->model('Admin_model');
        $this->load->helper('tgl_indo');
        $this->load->helper('cut');
    }
    /*public function index()
    { 
        $this->load->view('main');
    }*/
	public function index()
    { 
        $menu = array(
            "menu" => "dashboard",
            "detail" => ""
        );
        $this->session->set_userdata($menu);
        $data['page'] = 'main';
        // $data['data'] = $this->Admin_model->getAllInput();
        $this->load->view($this->_layout, $data);
    }

    //---------------------Input Regulasi--------------------//
    public function regulasi()
    { 
        $menu = array(
            "menu" => "regulasi",
            "detail" => ""
        );
        $this->session->set_userdata($menu);
        $data['page'] = 'regulasi';
        $data['data'] = $this->Admin_model->getAllReg();
        $this->load->view($this->_layout, $data);
    }

    public function addregulasi()
	{ 
        $menu = array(
            "menu" => "regulasi",
            "detail" => ""
        );
        $this->session->set_userdata($menu);
        $data['page'] = 'addregulasi';
        // $data['data'] = $this->Admin_model->getAllInput();
        $this->load->view($this->_layout, $data);
	}

    public function detail($id)
    { 
        $menu = array(
            "menu" => "regulasi",
            "detail" => ""
        );
        $this->session->set_userdata($menu);
        $data['page'] = 'detail';
        $data['data'] = $this->Admin_model->getAllRegByID($id);
        $data['datax'] = $this->Admin_model->getAllEvByID($id);
        $this->load->view($this->_layout, $data);
    }
    
    public function evaluasi()
    { 
        $menu = array(
            "menu" => "evaluasi",
            "detail" => ""
        );
        $this->session->set_userdata($menu);
        $data['page'] = 'evaluasi';
        $data['data'] = $this->Admin_model->getAllReg();
        $this->load->view($this->_layout, $data);
    }
    
    public function evalu($id)
    { 
        $menu = array(
            "menu" => "evalu",
            "detail" => ""
        );
        $this->session->set_userdata($menu);
        $data['page'] = 'evalu';
        $data['data'] = $this->Admin_model->getAllRegByID($id);
        $data['datax'] = $this->Admin_model->getAllEvByID($id);
        $this->load->view($this->_layout, $data);
    }

    public function report_regulasi()
    {
        $id_regulasi=$this->uri->segment(3);
        $judul = $this->Admin_model->getAllRegByIDReport($id_regulasi);
        foreach ($judul as $row);
        $rpl = substr(strip_tags($row->JUDUL),0,50);
        $out = str_replace('&nbsp;',' ',preg_replace("/\r|\n/", " ", $rpl));
        // echo preg_replace("/\r|\n/", "", $rpl);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetTitle('Laporan Regulasi');
        $html = $this->load->view('report_regulasi',[],true);
        $html_pengesahan = $this->load->view('report_regulasi_pengesahan',[],true);
        $html_penjelasan = $this->load->view('report_regulasi_penjelasan',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->AddPage();
        $mpdf->WriteHTML($html_pengesahan);
        $mpdf->AddPage();
        $mpdf->WriteHTML($html_penjelasan);
        $mpdf->Output($out.'.pdf','D'); // it downloads the file into the user system, with give name
    }
    
    public function insert(){                
        $id = $this->Admin_model->insert();
        redirect('admin-website/regulasi.html', "location");
    }

    public function update(){                
        $data = $this->Admin_model->update();
        $id = $this->input->post('id');
        redirect('admin-website/regulasi.html', "location");
    }
    public function updatev(){                
        $data = $this->Admin_model->updatev();
        $id = $this->input->post('id');
        redirect('admin-website/evaluasi.html', "location");
    }

    public function storeJenis(){                
        $id = $this->Admin_model->storeJenis();
        redirect('admin-website/jenis.html', "location");
    }
    public function editJenis($id){
        $data['kategori'] = $this->Admin_model->getAllJenis();
        $data['data'] = $this->Admin_model->getJenisByID($id);
        $data['page'] = 'editJenis';
        $this->load->view($this->_layout, $data);
    }
    public function updateJenis(){
        $data = $this->Admin_model->updateJenis();
        redirect('admin-website/jenis.html', "location");
    }
    public function deleteJenis($id){
        $data['data'] = $this->Admin_model->deleteJenisByID($id);
        redirect('admin-website/jenis.html', "location");
    }

}