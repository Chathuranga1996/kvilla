<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EnterItemsModel extends CI_Model {

    

    public function fetchCategory() {//Admin controller
       
        $this->db->order_by('category','ASC');
        $query = $this->db->get('category');
        return $query->result();
    
     }

     public function insert_new($data)//Admin controller
        {   
            $dataset = array(
                "category" => $data["itemCategory"],
                "item_name" => $data["itemName"],
                
            );
                // $this->title    = $_POST['title']; // please read the below note
                // $this->content  = $_POST['content'];
                // $this->date     = time();

                $eeese = $this->db->insert('item', $dataset);
                return $eeese;//var_dump($eee);
        }
        
    public function fetchSellItems() { //Admin controller
        date_default_timezone_set("Asia/Colombo");
        $today = date('Y-m-d');
       // $date = new \Datetime('now');
       // $time = time();
       // var_dump($date);
        $this->db->select('category, item_name, qty, sell_date');
        $this->db->where('sell_date',$today);//match sell date with today
        $this->db->group_by('item_name');
        $this->db->order_by('item_name','ASC');
        $this->db->select_sum('qty');
       // $this->db->where('sell_date',$today);
        $farmerSellData = $this->db->get('sell_item');
        
        
        return $farmerSellData; //->result();
    
     }


     //add new itms to inventory
     public function insert_inventory($senditem)//Admin controller
        {   
            date_default_timezone_set("Asia/Colombo");//add new daily price to farmer's sell-items table
            $sellToday = date('Y-m-d');
            $dataset2 = array( 
                "unit_price" => $senditem["unitPrice"]*80/100,// krish villa keep 20% as profit. farmer gets 80% price
            );

            $dataset = array( //add new itms to inventory
                "sell_date" => $senditem["sellDate"],
                "item_category" => $senditem["category"],
                "item_name" => $senditem["itemName"],
                "qty_added" => $senditem["qty"],
                "wast_percentage" => $senditem["wastParcentage"],
                "total_qty_sell" => $senditem["totalQty"],
                "unit_price" => $senditem["unitPrice"]
                
            );
                $this->db->where('sell_date', $sellToday);
                $this->db->where('item_name', $senditem["itemName"]);
                $this->db->update('sell_item', $dataset2);

                $eeese = $this->db->insert('inventory', $dataset);
                return $eeese;
        }


        //show inventory in admin's view
        public function fetchInventory() { //Admin controller
            date_default_timezone_set("Asia/Colombo");
            $today = date('Y-m-d');
           // $date = new \Datetime('now');
           // $time = time();
           // var_dump($date);
            $this->db->select('*');
            $this->db->where('sell_date',$today);//match sell date with today
            //$this->db->group_by('item_name');
            $this->db->order_by('item_name','ASC');
           // $this->db->select_sum('qty');
           // $this->db->where('sell_date',$today);
            $inventory = $this->db->get('inventory');
            
            
            return $inventory; //->result();
        
         }

        



}