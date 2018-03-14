<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class destination extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		
		if(!$this->session->userdata('user')){
			header('location:'.base_url().'login');
		}

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-red">','</p>');

		$this->load->model('destinationModel');	
	}

	public function index(){
		$data['data'] = $this->destinationModel->lists();
		$this->load->view('destination_index', $data);
	}

	public function add(){
		if($_POST){
			$this->form_validation->set_rules('code', 'Code', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			if ($this->form_validation->run() == TRUE){
				extract($_POST);
				$exists = $this->destinationModel->exists($code);

				if(empty($exists)){
					$this->destinationModel->add(strtoupper($code), $description);
					header('location:'.base_url().'destination');
				}
				else{
					$data['error'] = "Code already exists.";
				}
			}
		}

		$this->load->view('destination_add');
	}

	public function update($id){		
		if($_POST){
			$this->form_validation->set_rules('code', 'Code', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			if ($this->form_validation->run() == TRUE){
				extract($_POST);
				$exists = $this->destinationModel->exists($code, $id);

				if(empty($exists)){
					$this->destinationModel->update($id, $code, $description);
					header('location:'.base_url().'destination');
				}
				else{
					$data['error'] = "Code already exists.";
				}				
			}
		}

		$data['data'] = $this->destinationModel->get($id);
		$this->load->view('destination_update', $data);
	}

	public function delete($id){
		$this->destinationModel->delete($id);
		header('location:'.base_url().'destination');
	}
}