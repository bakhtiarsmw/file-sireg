<?php class Admin_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        
    }
    function getLogin($username){
        $this->db->select("*");
        $this->db->from("admin");
        $this->db->where(
            array(
                "USERNAME"=>$this->db->escape_like_str($this->db->escape_str($username))
            )
        );
        $query = $this->db->get();
	    if($query->num_rows()>0){
	        return $query->row();
	    }
	    else
	    	return FALSE;
    }
    function getLoginMember($username){
        $this->db->select("*");
        $this->db->from("member");
        $this->db->where(
            array(
                "EMAIL"=>$this->db->escape_str($username)
            )
        );
        $query = $this->db->get();
	    if($query->num_rows()>0){
	        return $query->row();
	    }
	    else
	    	return FALSE;
    }
    //---------------------- Input -----------------------//
    function getAllReg(){
        $query=$this->db->query("SELECT * FROM regulasi");
        if($query->num_rows()>0){
            return $query->result();
        }
        else
            return FALSE;
    }
    function insert(){    
        $a_data = $this->input->post('JUDUL');
        $b_data = $this->input->post('MENIMBANG');
        $c_data = $this->input->post('MENGINGAT');
        $d_data = $this->input->post('NORMA');
        $e_data = $this->input->post('LAMPIRAN');
        $f_data = $this->input->post('PASAL');
        $g_data = $this->input->post('PENGESAHAN');
        $h_data = $this->input->post('PENJELASAN');
        // $date = 

        $a_data_1=str_replace("'", "@", $a_data);
        $a=str_replace('"', '#', $a_data_1);

        $b_data_1=str_replace("'", "@", $b_data);
        $b=str_replace('"', '#', $b_data_1);

        $c_data_1=str_replace("'", "@", $c_data);
        $c=str_replace('"', '#', $c_data_1);

        $d_data_1=str_replace("'", "@", $d_data);
        $d=str_replace('"', '#', $d_data_1);

        $e_data_1=str_replace("'", "@", $e_data);
        $e=str_replace('"', '#', $e_data_1);

        $f_data_1=str_replace("'", "@", $f_data);
        $f=str_replace('"', '#', $f_data_1);

        $g_data_1=str_replace("'", "@", $g_data);
        $g=str_replace('"', '#', $g_data_1);

        $h_data_1=str_replace("'", "@", $h_data);
        $h=str_replace('"', '#', $h_data_1);


        
        $query = $this->db->query("INSERT into regulasi (`JUDUL`,`MENIMBANG`, `MENGINGAT`,`NORMA`,`PASAL`,`PENJELASAN`,`LAMPIRAN`) VALUES ('$a','$b','$c','$d','$f','$g','$h','$e')");
        if($this->db->affected_rows()>0){
            return $this->db->insert_id();
        }
        else
            return FALSE;
    }

    function getAllRegByID($id){
        $query=$this->db->query("SELECT * FROM regulasi WHERE ID = '$id'");
        if($query->num_rows()>0){
            return $query->row();
        }
        else
            return FALSE;
    } 
    function getAllRegByIDReport($id){
        $query=$this->db->query("SELECT * FROM regulasi WHERE ID = '$id'");
        if($query->num_rows()>0){
            return $query->result();
        }
        else
            return FALSE;
    } 
    function getAllEvByID($id){
            $query=$this->db->query("SELECT * FROM evaluasi WHERE E_ID = '$id'");
            if($query->num_rows()>0){
                return $query->row();
            }
            else
                return FALSE;
        } 
    function update(){    
        $id = $this->input->post('id');
        $a_data = $this->input->post('judul');
        $b_data = $this->input->post('menimbang');
        $c_data = $this->input->post('mengingat');
        $d_data = $this->input->post('norma');
        $e_data = $this->input->post('lampiran');
        $f_data = $this->input->post('pasal');
        $g_data = $this->input->post('pengesahan');
        $h_data = $this->input->post('penjelasan');
        // $date = 

        $a_data_1=str_replace("'", "@", $a_data);
        $a=str_replace('"', '#', $a_data_1);

        $b_data_1=str_replace("'", "@", $b_data);
        $b=str_replace('"', '#', $b_data_1);

        $c_data_1=str_replace("'", "@", $c_data);
        $c=str_replace('"', '#', $c_data_1);

        $d_data_1=str_replace("'", "@", $d_data);
        $d=str_replace('"', '#', $d_data_1);

        $e_data_1=str_replace("'", "@", $e_data);
        $e=str_replace('"', '#', $e_data_1);

        $f_data_1=str_replace("'", "@", $f_data);
        $f=str_replace('"', '#', $f_data_1);

        $g_data_1=str_replace("'", "@", $g_data);
        $g=str_replace('"', '#', $g_data_1);

        $h_data_1=str_replace("'", "@", $h_data);
        $h=str_replace('"', '#', $h_data_1);
        // $date = 
        
        $query = $this->db->query("UPDATE regulasi SET `JUDUL` = '$a',`MENIMBANG` = '$b', `MENGINGAT` = '$c',`NORMA` = '$d',`LAMPIRAN` = '$e', `PASAL` = '$f', PENGESAHAN='$g', PENJELASAN='$h' WHERE ID='$id'");
        if($this->db->affected_rows()>0){
            return TRUE;
        }
        else
            return FALSE;
    }
    
    function updatev(){    
        $id = $this->input->post('id');
        $a_data = $this->input->post('judul');
        $b_data = $this->input->post('menimbang');
        $c_data = $this->input->post('mengingat');
        $d_data = $this->input->post('norma');
        $e_data = $this->input->post('lampiran');
        
        $a_data_1=str_replace("'", "@", $a_data);
        $a=str_replace('"', '#', $a_data_1);

        $b_data_1=str_replace("'", "@", $b_data);
        $b=str_replace('"', '#', $b_data_1);

        $c_data_1=str_replace("'", "@", $c_data);
        $c=str_replace('"', '#', $c_data_1);

        $d_data_1=str_replace("'", "@", $d_data);
        $d=str_replace('"', '#', $d_data_1);

        $e_data_1=str_replace("'", "@", $e_data);
        $e=str_replace('"', '#', $e_data_1);
        
        $query = $this->db->query("UPDATE evaluasi SET `EJUDUL` = '$a',`EMENIMBANG` = '$b', `EMENGINGAT` = '$c',`ENORMA` = '$d' WHERE E_ID='$id'");
        if($this->db->affected_rows()>0){
            return TRUE;
        }
        else
            return FALSE;
    }
    
    function updateJenis(){
        $id = $this->input->post('id');
        $nama_kategori =  ($this->input->post('nama_kategori'));
        
        $query = $this->db->query("UPDATE kategori SET `NAMA_KATEGORI` = '$nama_kategori' WHERE ID='$id'");
        if($this->db->affected_rows()>0){
            return TRUE;
        }
        else
            return FALSE;
    }
    function deleteJenisByID($id){
        $query = $this->db->query("DELETE FROM kategori WHERE ID = '$id'");
        if($this->db->affected_rows()>0){
            return TRUE;
        }
        else
            return FALSE;
    }

}