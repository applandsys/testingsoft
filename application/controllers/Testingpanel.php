<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testingpanel extends CI_Controller {
	
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
		$data['content'] = $this->load->view("home/testingpanel_view", $data, true);
		$this->load->view("home/common/main_view", $data);	
	}
	
	public function maxi()
	{
		$data['title'] = "Home Page";
		$data['content'] = $this->load->view("home/testingpanel_maxi_view", $data, true);
		$this->load->view("home/common/main_view", $data);	
	}

	public function maxm()
	{
		$data['title'] = "Home Page";
		$data['content'] = $this->load->view("home/testingpanel_maxm_view", $data, true);
		$this->load->view("home/common/main_view", $data);	
	}
	
	
	
	public function signout()
	{
		
		$this->session->sess_destroy(); 
		$destination = base_url();
		redirect($destination);
	}
	
	
	
}
