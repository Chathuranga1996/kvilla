
<?php

// if (!defined('BASEPATH')) {
//     exit('No direct script access allowed');
// }

class ShopItemModel extends CI_Model {

 
   
   public function shopModel()
   {

            date_default_timezone_set("Asia/Colombo");//add new daily price to farmer's sell-items table
            $sellToday = date('Y-m-d');

       // $this->db->order_by('farm_name','ASC');
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->where('sell_date',$sellToday);
        $query = $this->db->get();
      
        return $query->result();
    



    }

}


