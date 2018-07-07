<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class residents_model extends CI_Model{

	public function getResidents(){
		// $query = $this->db->get('householdHead');
		// $result = $query->result();
		// $ids = array();
		// foreach ($result as $key => $value) {
		// 	$ids[] = $value->householdHead_id;//array('household_head_id' => $value->householdHead_id );
		// }
		// print_r($ids);
		// $query = $this->db->get_where('residents', array('household_head_id' => 17 ) );
		// print_r($query->result());
		$this->db->select('*');
		$this->db->from('householdHead');
		$this->db->join('residents', 'residents.household_head_id = householdHead.householdHead_id');
		$this->db->join('status_tbl', 'status_tbl.status_id = residents.statusId');
		$query = $this->db->get();
		return $query->result();
		// return json_encode($query->result());
	}

	public function update($id){
		$this->db->select('*');
		$this->db->from('residents');
		$this->db->where('resident_id', $id);
		$this->db->join('status_tbl', 'status_tbl.status_id = residents.statusId');
		$query = $this->db->get();
		return $query->result();
	}

	public function add(){
		if(isset($_POST['arr'])){
			$arr = array();
			$householdHead = array(
				'h_lastname' => $this->input->post('arr')['lastname'],
				'h_firstname' => $this->input->post('arr')['firstname'],
				'h_middlename' => $this->input->post('arr')['middlename'],
				'h_maiden' => $this->input->post('arr')['maiden'],
				'h_qualifier' => $this->input->post('arr')['qualifier'],
				'h_placeofbirth' => $this->input->post('arr')['placeofbirth'],
				'h_dateofbirth' => $this->input->post('arr')['dateofbirth'],
				'h_sex' => $this->input->post('arr')['sex'],
				'h_civilstatus' => $this->input->post('arr')['civilstatus'],
				'h_citizenship' => $this->input->post('arr')['citizenship'],
				'h_occupation' => $this->input->post('arr')['occupation'],
				'h_educational_attainment' => $this->input->post('arr')['educational_attainment'],
			);

			$this->db->insert('householdHead', $householdHead );
			$id = $this->db->insert_id();
			if($id > 0){
				foreach ($this->input->post('arr')['rel'] as $key => $value) {
					// $arr[] = $value;
					$res = array(
						'lastname' => $value['lastname'],
						'firstname' => $value['firstname'],
						'middlename' => $value['middlename'],
						'maiden' => $value['maiden'],
						'relation' => $value['relation'],
						'placeofbirth' => $value['placeofbirth'],
						'dateofbirth' => $value['dateofbirth'],
						'sex' => $value['sex'],
						'civilstatus' => $value['civilstatus'],
						'citizenship' => $value['citizenship'],
						'occupation' => $value['occupation'],
						'educational_attainment' => $value['educational_attainment'],
						'household_head_id' => $id,
					);
					$arr[] = $res;
				}	
				$this->db->insert_batch('residents', $arr );			
			}
			return $arr;//$arr;
		}
	}

	public function updateResidentData($residentObj){
		// $this->db->insert('householdHead', $householdHead );
		// print_r($residentObj);
		$this->db->where('resident_id', $residentObj['resident_id']);
		$res = $this->db->update('residents', $residentObj); 
		if($res > 0){
			return 'Successfully Updated';	
		}else{
			return 'Failed!try again';
		}
	}	
}