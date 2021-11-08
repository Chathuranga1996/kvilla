<?php
    class RegisterDelAgent extends CI_Model {

        //delivery agent model from registerform 
        public function regDeliveryAgent($data)
        {
            
            $dataset = array(
                "first_name"                => $data["firstName"],
                "last_name"                 => $data["lastName"],
                "email"                     => $data["email"],
                "driving_license_number"    => $data["licenseNumber"],
                "vehicle_type"              => $data["vehicleType"],
                "vehicle_model"             => $data["vehicleModel"],
                "vehicle_reg_number"        => $data["vehicleRegNumber"]
                
            );

            $dataset2 = array(
                "first_name" => $data["firstName"],
                "last_name" => $data["lastName"],
                "address" => $data["address1"].", " . $data["address2"] ,
                "city" => $data["city"],
                "email" => $data["email"],
                "password" => $data["passwordRetype"],
                "contact_number" => $data["contactNumber"],
                "position" => 'deliver', //position block added to set privilages as a farmer use this option on farmer's regform
                //"profile_image" => $data["path_img"]
            );
                // $this->title    = $_POST['title']; // please read the below note
                // $this->content  = $_POST['content'];
                // $this->date     = time();

                $exee = $this->db->insert('delivery_agent', $dataset);
                $exee21 = $this->db->insert('user', $dataset2);
                // if($exee == $exee21){
                    return $exee21;

                    echo($exee21);
                // }else{
                //     return 0;//var_dump($eee);
                // }
                   
        }

       

}

?>