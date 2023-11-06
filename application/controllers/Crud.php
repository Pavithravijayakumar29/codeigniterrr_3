<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller 
{

public function __construct()
{
	parent::__construct();

	$this->load->database();

	$this->load->model("crude_model");

	$this->load->helper('url');

}

public function savedata()
{

	$this->load->view('insert');

	if($this->input->post('save'))
	{
		$data['first_name']=$this->input->post('first_name');
		$data['last_name']=$this->input->post('last_name');
		$data['email']=$this->input->post('email');

		$response =  $this->crude_model->saverecords($data);

		if($response==true){
			echo "Insert Successfully";
		}else{
			echo "Insert Failed";
		}

	}

}

// public function displaydata(){
// 	$result['data'] = $this->crud_model->display_records();
// 	$this->load->view('display_records',$result);
// }

// public function updatedata(){
// 	$id = $this->input->get('id');
// 	$result["data"] = $this->crud_model->displayrecordsById($id);
// 	$this->load->view('update_records',$result);
// 	if($this->input->post('update')){
// 		$first_name=$this->input->post('first_name');
// 		$last_name=$this->input->post('last_name');
// 		$email=$this->input->post('email');
// 		$this->crud_model->update_records($first_name,$last_name,$email,$id);
// 		echo "Data updated Successfully!!!";
// 	}
// }

}

?>
