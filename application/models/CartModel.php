<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartModel extends CI_Model {

    


     public function addToCart($data)
        {  
            //var_dump($data);
            $dataset = array(
               
                "email" => $data["email"],
                "age" => $data["age"],
                "itemName" => $data["itemName"],
               
                
            );
                
                $eeese2 = true;//$this->db->insert('sell_idtem', $dataset);
                return $dataset;//var_dump($eee);
        }
   



}