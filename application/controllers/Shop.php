<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
    {
        $this->load->view('Structure/Header');
		$this->load->view('Shop');
       // $this->load->view('DynamicSelectItems/ShopItem');
		

        //load sell items to shopitems view
        $this->load->model('ShopItemModel');
        $shopItems['shopItem'] = $this->ShopItemModel->shopModel();
        $this->load->view('DynamicSelectItems/ShopItem', $shopItems);


        $this->load->view('Structure/Footer');

    }

    

	
	

	



}
