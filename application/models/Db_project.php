<?php

class Db_project extends CI_Model 
{

    public function register_db($data){
        $this->db->insert('user_register',$data);

        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
    }
   

   
}

