<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residents extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();

		// Load url helper
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->model("residents_model");
		$data['residents'] = $this->residents_model->getResidents();
		$this->load->view('residents', $data );
		// echo json_encode($data);
	}
	
	public function addResidents()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('add_residents');
	}

	public function res(){
		$this->load->model('residents_model');
		$q = $this->residents_model->add();
		print_r($q);
	}

	public function getResidentId($id){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->model('residents_model');
		$data['resident_data'] = $this->residents_model->update($id);
		$this->load->view('updateResidents', $data );
	}

	public function updateResidents(){
		$this->load->model('residents_model');
		$updated = $this->residents_model->updateResidentData($this->input->post('res'));
		echo $updated;
	}
}
