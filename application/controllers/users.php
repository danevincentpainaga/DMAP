<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {

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
		$this->load->model('user_model');
		$data['users'] = $this->user_model->getUsers();
		$this->load->view('header');
		$this->load->view('users', $data );
	}
	public function addUsers()
	{
		$this->load->view('header');
		$this->load->view('addUsers');
	}

	public function addNewUser(){
		$this->load->model('user_model');
		$res = $this->user_model->addUser();
		echo $res;
	}

	public function updateUser($id){
		$this->load->view('header');
		$this->load->model('user_model');
		$data['userDetails'] = $this->user_model->getUserDetails($id);
		$this->load->view('updateUser', $data );
	}

	public function updateUserDetails(){
		$this->load->model('user_model');
		$message = $this->user_model->updateUser($this->input->post('updatedUser'));
		echo $message;
	}

	public function deleteUser(){
		$this->load->model('user_model');
		$user = $this->user_model->deleteUserData($this->input->post('userId'));
		echo $user;
	}
}
