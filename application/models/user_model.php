<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
	public function getUsers(){
		$query = $this->db->get('users_tbl');
		return $query->result();
	}

	public function addUser(){
		$newUser =  $this->input->post('addedUser');
		$res = $this->db->insert('users_tbl', $newUser );
		if($res > 0){
			return 'Successfully Added!';	
		}else{
			return 'Failed!try again';
		}
	}	
}