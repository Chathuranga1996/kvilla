<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterFarmer extends CI_Controller {

	

	public function registerfam(){
		$this->load->model('RegFarmer');
		$response = $this->RegFarmer->insert_farmer($this->input->post());
		

		// $this->load->model('Registration');
		// $response2 = $this->Registration->insert_entry($this->input->post());

		//print_r($response);
		//var_dump($response);
		//alert($response);
		if($response){
			echo json_encode(true);
			//redirect('/Dashboard', 'refresh');
			//$this->load->view('Dashboard');
			//return(true);
			//print_r($response);
		}else{
			echo json_encode(false);
			//return(false);
		}
		//echo json_encode(array($this->input->post()));
	}


}