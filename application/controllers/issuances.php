<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Issuances extends CI_Controller {

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
		// $this->load->view('menu');
		$this->load->model("residents_model");
		$data['residents'] = $this->residents_model->getResidents();
		$this->load->view('header');
		$this->load->view('form_issuances', $data );
	}
	
	public function print_live_in_certificate(){
	    $this->load->library('pdfgenerator');
			$data['users']=array(
				array('firstname'=>'I am','lastname'=>'Programmer','email'=>'iam@programmer.com'),
				array('firstname'=>'I am','lastname'=>'Designer','email'=>'iam@designer.com'),
				array('firstname'=>'I am','lastname'=>'User','email'=>'iam@user.com'),
				array('firstname'=>'I am','lastname'=>'Quality Assurance','email'=>'iam@qualityassurance.com')
			);
		$this->load->view('header');
	    $html = $this->load->view('live_in_certificate', $data, true);
	    // $filename = 'report_'.time();
	    $filename = 'live_in_certificate';
	    $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}

	public function barangay_clearance(){
	    $this->load->library('pdfgenerator');
			$data['users']=array(
				array('firstname'=>'I am','lastname'=>'Programmer','email'=>'iam@programmer.com'),
				array('firstname'=>'I am','lastname'=>'Designer','email'=>'iam@designer.com'),
				array('firstname'=>'I am','lastname'=>'User','email'=>'iam@user.com'),
				array('firstname'=>'I am','lastname'=>'Quality Assurance','email'=>'iam@qualityassurance.com')
			);
		$this->load->view('header');
	    $html = $this->load->view('barangay_clearance', $data, true);
	    // $filename = 'report_'.time();
	    $filename = 'live_in_certificate';
	    $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}
}
