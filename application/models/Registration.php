<?php
    class Registration extends CI_Model {

        
        public function insert_entry($data)
        {
            
            $dataset = array(
                "first_name" => $data["firstName"],
                "last_name" => $data["lastName"],
                "address" => $data["address1"].", " . $data["address2"] ,
                "city" => $data["city"],
                "email" => $data["email"],
                "password" => $data["password"],
                "contact_number" => $data["contactNumber"],
                "position" => 'customer', //position block added to set privilages as a farmer use this option on farmer's regform
                //"profile_image" => $data["path_img"]
            );
                // $this->title    = $_POST['title']; // please read the below note
                // $this->content  = $_POST['content'];
                // $this->date     = time();

                $eee = $this->db->insert('user', $dataset);
                return $eee;//var_dump($eee);
        }

       

}

?>