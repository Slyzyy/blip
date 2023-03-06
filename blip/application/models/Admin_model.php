<?php 
class Admin_model extends CI_Model{

	public function __construct()
	{
	   $this->load->database();
	}

 	public function update_role($data,$table,$where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }

}

 ?>