<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterForm extends CI_Controller {

	
	// customer registration
	public function registercust(){
		$this->load->model('Registration');
		$response = $this->Registration->insert_entry($this->input->post());
		//print_r($response);
		//var_dump($response);
		//alert($response);
		if($response){
			echo json_encode(true);
			//header('location:'. base_url().'index.php/Dash');
			//$this->load->helper('url');
			//redirect('/account/login', 'refresh');
			//console.log("Message here");
			//return(true);
		}else{
			echo json_encode(false);
			//return(false);
		}
		//echo json_encode(array($this->input->post()));
	}


	// upload images
	public function upload_file(){
		$config['allowed_types'] = 'jpg|png';
		$config['upload_path'] = './upload/';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('image')){
			//$this->load->model('AddImagePath');
			//$this->AddImagePath->insert_images($this->upload->data());
    		//$data = array('upload_data' => $this->upload->data());
			//$this->load->model('AddImagePath');
			//$response = $this->Registration->insert_entry($this->input->post());
			//print_r($this->upload->data()["full_path"]);
			//print_r($response);

					$pathimg = $this->upload->data()["full_path"];
			//print_r($pathimg);
					$imgpath = array("path_img"=>$pathimg);
					//$this->load->view('Dashboard/CustomerDashboard',$imgpath);
					//print_r($imgpath);
			//$xx = "path";
					$this->load->model('AddImagePath');
					$response = $this->AddImagePath->insert_images($imgpath);
			//$this->Registration->insert_images($pathimg);
			// $this->AddImagePath->insert_images($pathimg);
			//print_r($imgpath);


			// $data['path_img'] = $pathimg;
			// // $data['city'] = "apr";
			// // $data['subject'] = "sth";
			// // $data['return'] = true;
			// $this->addImagePath->insert_images($data);

			
			//redirect('Customer');
			echo "<script>alert('image uploaded successfully!');history.go(-1);</script>";

		}else{
			print_r($this->upload->display_errors());
		}
	}








	//delivery Agent
	public function RegisterDeliveryAgent(){
		$this->load->model('RegisterDelAgent');
		$response = $this->RegisterDelAgent->regDeliveryAgent($this->input->post());
		

		if($response){
			echo json_encode(true);
			//print_r($response);
		}else{
			echo json_encode(false);
			//return(false);
		}
	
	}
}