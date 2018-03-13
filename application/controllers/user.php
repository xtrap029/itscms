<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');

		if(!$this->session->userdata('user')){
			header('location:index.php?/home/login');
		}

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('homemodel');
	}

	public function index(){
		$data['gospels'] = $this->homemodel->getGospels();
		$this->load->view('user',$data);
	}

	public function add(){
		if($_POST){
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'content', 'required');
			if ($this->form_validation->run() == FALSE){
				$this->load->view('add');
			}
			else{
				extract($_POST);
				$this->homemodel->addGospel($title,$content);
				header('location:index.php?/user/');
			}
		}
		else{
			$this->load->view('add');
		}
	}

	public function delete($id){
		$this->homemodel->deleteGospel($id);
		header('location:index.php?/user');
	}

	public function edit($id){
		if($_POST){
			///validation here
			extract($_POST);
			$this->homemodel->updateGospel($id,$title,$content);
			header('location:index.php?/user/edit/'.$id);
		}
		else{
			$data['gospel'] = $this->homemodel->getGospel($id);
			$this->load->view('edit',$data);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		header('location:index.php?/home');
	}
}