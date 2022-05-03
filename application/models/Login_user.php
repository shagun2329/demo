<?php
class Login_user extends CI_Model
{
    public function get($data,$table_name,$status){
        
        if($status){       
            return $this->db->where('email',$data['email'])->where('num',$data['pass'])->get($table_name)->row_array();
        }else{
            return $this->db->get($table_name)->result_array();
        }
    }
    public function get_user_data(){
        return $this->db->get('user_register')->result_array();
    }

    public function delete_db($data)
    {
        $dele=$data['id'];

        
        return $this->db->where('id',$dele)->delete('user_register');
    }

    public function update_db($data1)
    {
        $idd=$data1['id'];
        // print_r($idd);
        // die;
       
         return $this->db->where('id',$idd)->get('user_register')->row_array();

    }
    public function update_db_edit($dat)
    {
        $idd=$dat['id'];
        $n=$dat['name'];
        $e=$dat['email'];
        $num=$dat['num'];
        // print_r($idd);
        // die;
       
        
        $query = $this->db->query("update user_register set name='$n' , email='$e' , num='$num' where id='$idd'");
        return $query;
    }

}

?>