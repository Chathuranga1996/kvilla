<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in')!== TRUE){
        redirect('Login');
        }

    }
    
	function index(){
        if($this->session->userdata('position')==='customer'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/CustomerDashboard');
            $this->load->view('InsertIMG/InsertImages');
            $this->load->view('Structure/Footer');
        }elseif($this->session->userdata('position')==='farmer'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/CustomerDashboard');
            $this->load->view('Structure/Footer');
        }elseif($this->session->userdata('position')==='admin'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/CustomerDashboard');
            $this->load->view('Structure/Footer');
        }elseif($this->session->userdata('position')==='deliver'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/CustomerDashboard');
            $this->load->view('Structure/Footer');
        }
        else{
            echo "access denied";
        }


    }

    function cartItem(){
        $this->load->model('CartModel');
        $cartArr = $this->CartModel->addToCart($this->input->post()); // make db table

       // $cart['addCart'] = $this->input->post();
		// $cartArr = array(
        //     'item' =>$_POST['itemName'],
        //     'itememail' =>$_POST['email'],
        //     'itemage' => $_POST['age']
        // );

       // $cartArr = $this->load->view('Cart',$this->input->post());
       
       // $this->cart->insert($cartArr);
       
       
        // $this->load->view('Functionalities/inventory', $cartArr);
        // $cartArr = $this->input->post();
        //$xx = $this->load->view('Cart', $cartArr);

        //  $cartArr= $this->load->post();
        //  //$x = $this->load->view('Dashboard/CustomerDashboard', $this->load->post());
       // $this->load->view('Dashboard/CustomerDashboard', $cartdata);
        
		 if($cartArr){
             
           
		  	echo json_encode(true);
              
        // //     //$cartItems['addedCart'] = $this->EnterItemsModel->fetchInventory();
         
        // //     //var_dump("wwww");

           //  $cartx['cartdata'] = $this->EnterItemsModel->fetchInventory();
           

		
		 }else{
		 	echo json_encode(false);
        // //    // var_dump("wqqwww");
		 }
         

         //$inventory['inventoryItems'] = $this->EnterItemsModel->fetchInventory();
          //  $this->load->view('Functionalities/inventory', $inventory);

         
    }

    function cartLoader(){
        $this->load->model('CartModel');
        $crt['cart'] = $this->CartModel->addToCart();
        $this->load->view('Cart', $crt);


    }


        

}