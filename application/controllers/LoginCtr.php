<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCtr extends CI_Controller {

	public function login()
	{
        $this->load->model('LoginModel');
		$res = $this->LoginModel->userLogin($this->input->post());
        //print_r($res);
        if(count($res)){           //(count($res)){

            //$this->load->model('Userpos');
            //$ress = $this->Userpos->userPosition($this->input->post());
            //if($ress =true){
                echo json_encode(true);
           // }


            

            

        }else{
            echo json_encode(false);
        }
        //echo json_encode($this->input->post());
		
	}

}
