<?php
    class RegFarmer extends CI_Model {

        
        public function insert_farmer($data)
        {
            
            $dataset = array(
                "farm_name" => $data["farmName"],
                "email" => $data["email"],
                "size_perches" => $data["farmsize"]
                
            );

            $dataset2 = array(
                "first_name" => $data["firstName"],
                "last_name" => $data["lastName"],
                "address" => $data["address1"].", " . $data["address2"] ,
                "city" => $data["city"],
                "email" => $data["email"],
                "password" => $data["password"],
                "contact_number" => $data["contactNumber"],
                "position" => 'farmer', //position block added to set privilages as a farmer use this option on farmer's regform
                //"profile_image" => $data["path_img"]
            );
                // $this->title    = $_POST['title']; // please read the below note
                // $this->content  = $_POST['content'];
                // $this->date     = time();

                $exee = $this->db->insert('farmer', $dataset);
                $exee21 = $this->db->insert('user', $dataset2);
                // if($exee == $exee21){
                    return $exee21;
                // }else{
                //     return 0;//var_dump($eee);
                // }
                   
        }

       

}

?>