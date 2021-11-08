<?php

// if (!defined('BASEPATH')) {
//     exit('No direct script access allowed');
// }

class LoginModel extends CI_Model {

    

    public function userLogin($logData) {

        //  $this->db->where('email', $email);
        //  $this->db->where('password', $password);
        //  $query = $this->db->get('user');
        
        //  if($query->num_rows()==1){
        //     return $query->result_array();
        //  }else{
        //      return false;
        //  }


     $query = $this->db->get_where('user',array('email' => $logData['email'], 'password' => $logData['password']));

     if($query){
        // $this->db->select('position');
        // $this->db->from('user');
        // $this->db->where('user',array('email' => $logData['email'], 'password' => $logData['password']));
        // //$this->db->where('name', $name);
         //alert("ss");
        // print_r($query);
        return $query->result_array();
     }
    //   return $query->result_array();
      //var_dump($query);
    }



}
