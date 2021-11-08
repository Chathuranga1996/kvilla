
<?php

// if (!defined('BASEPATH')) {
//     exit('No direct script access allowed');
// }

class FarmFetch extends CI_Model {

 
   
   public function farmName($email) {
       // $this->db->order_by('farm_name','ASC');
        $this->db->select('*');
        $this->db->from('farmer');
        $this->db->where('email',$email);
        $query = $this->db->get();
        return $query;  //->result();
    



    }

}


