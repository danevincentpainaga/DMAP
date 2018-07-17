<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
	public function getUsers(){
		$this->db->select('*');
		$this->db->from('users_tbl');
		$this->db->join('status_tbl', 'status_tbl.status_id = users_tbl.statusId');
		$query = $this->db->get();
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

	public function getUserDetails($id){
		$this->db->select('*');
		$this->db->from('users_tbl');
		$this->db->where('user_id', $id);
		$this->db->join('status_tbl', 'status_tbl.status_id = users_tbl.statusId');
		$query = $this->db->get();
		return $query->result();
	}

	public function updateUser($updatedUser){
		$this->db->where('user_id', $updatedUser['user_id'] );
		$res = $this->db->update('users_tbl', $updatedUser);
		if($res > 0){
			return 'Successfully Updated';	
		}else{
			return 'Failed!try again';
		}
	}

	public function deleteUserData($userId){
		$this->db->where('user_id', $userId);
		$res = $this->db->delete('users_tbl');
		if($res > 0){
			return 'Successfully Deleted!';	
		}else{
			return 'Failed!try again';
		}
	}
}