<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model("Model_home");
		$this->load->model("Model_common");
		$this->load->model("Model_login");
	}
	
	
// Home Page
	public function index()
	{
		$data['title'] = "Home Page";
		$data['content'] = $this->load->view("home/homepage_view", $data, true);
		$this->load->view("home/common/main_view", $data);	
	}


// Login 
	public function login(){
		if($this->input->post()){
			
			$this->Model_login->validate();
			
			if($this->session->userdata('login')==true){
				
				if($this->session->userdata('username')=='mega'){
					$url = base_url()."testingpanel";
					redirect($url, 'refresh');
				}elseif($this->session->userdata('username')=='max'){
					$url = base_url()."testingpanel/maxi";
					redirect($url, 'refresh');
				}elseif($this->session->userdata('username')=='maxm'){
					$url = base_url()."testingpanel/maxm";
					redirect($url, 'refresh');
				}
				
				
			}else{
				ufr("Wrong Username or Password", "welcome");
			}
			
		}else{
			$data['title'] = "Login";
			$data['content'] = $this->load->view("home/login_view", $data, true);
			$this->load->view("home/common/main_view", $data);
		}

	}		
	

	
	
	
	
}
