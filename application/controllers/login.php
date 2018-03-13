<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('user')){
			header('location:'.base_url().'home');
		}

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-red">','</p>');
		$this->load->model('loginModel');
	}

	public function index(){
		if($_POST){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('login');
			}
			else{
				extract($_POST);
				$login = $this->loginModel->login($username,sha1($password));

				if(!empty($login)){
					$this->session->set_userdata('user', $username);
					header('location:'.base_url().'home');
				}
				else{
					$data['error'] = "Wrong Credentials";
					$this->load->view('login', $data);
				}
			}
		}
		else{
			$this->load->view('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		header('location:'.base_url().'login');
	}
}