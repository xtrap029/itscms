<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if(!$this->session->userdata('user')){
			header('location:'.base_url().'login');
		}

		$this->load->model('homemodel');	
	}

	public function index(){
		$this->load->view('home');
	}
}