<?php
    class AddImagePath extends CI_Model {

        
        public function insert_images($data)
        {
            $mail =  $this->session->userdata('email');
            //var_dump($data);
            $dataset = array(
                "profile_image" => $data["path_img"],
               
               );
                // $this->title    = $_POST['title']; // please read the below note
                // $this->content  = $_POST['content'];
                // $this->date     = time();

               $this->db->where('email', $mail);
              $eese= $this->db->update('user',$dataset);
                //return $eese;//var_dump($eee);
        }

       

}

?>