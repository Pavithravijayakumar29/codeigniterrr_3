<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('welcome_message');	
	// }

	public function index()
	{
		// for base_url 
		$this->load->helper('url');

		$this->load->library('session');
		$this->load->view('home');
			
	}

	public function save()
	{
		
		$this->load->helper('url');

		         // session intr for store data
		$this->load->library('session');

		$name = $this->input->post('name');

		         // session set function(k,v)
		$this->session->set_userdata('savename',$name);
      
		redirect('Welcome');
	}

	public function clear(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->unset_userdata('savename');
		redirect('Welcome');
	}

}
