<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('LoginUser');
    }

	// public function index()
	// {
	// 	$this->load->view('Structure/Header');
	// 	$this->load->view('Login');
	// 	$this->load->view('Structure/Footer');
		
	// }

    function auth(){
        $email = $this->input->post('email',TRUE);
        $password = $this->input->post('password',TRUE);
        $result = $this->LoginUser->userLogin($email,$password);
        if($result->num_rows()>0){
            $data = $result->row_array();
            $firstName = $data['first_name'];
            $email = $data['email'];
            $position = $data['position']; 

            $sesdata = array(
                'first_name' => $firstName,
                'email' => $email,
                'position' => $position,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            if($position === 'farmer'){
               
                // $this->load->model('FarmFetch');
                // $email = $this->input->post('email',TRUE);//
                // $resultfrm = $this->FarmFetch->farmName($email);//
                // if($resultfrm->num_rows()>0){//
                //     $farmName = $data['farm_name'];//
                //     $email = $data['email'];//
                    
                //     $sdata = array(//
                //         'farm_name' => $farmName,//
                //         'email' => $email//
                //     );//
                //     $this->session->set_userdata($sdata);//
                // }//
                // $this->load->model('FarmFetch');//
                // $data2['farm_name'] = $this->FarmFetch->farmName();//
                // $this->load->view('DynamicSelectItems/FarmerItemSelect',$data2);//
                
                
                return redirect('Farmer');
            }elseif($position === 'customer'){
                redirect('Customer');
            }elseif($position === 'admin'){
                redirect('Admin');
            }elseif($position === 'deliver'){
                redirect('Deliver');
            }else{
                echo "<script>alert('invalid');history.go(-1);</script>";
            }
            $this->load->view('Login');

        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome');
    }


}
