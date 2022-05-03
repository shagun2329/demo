<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        
        $this->load->model('login_user');
       
        $data['fetch'] = $this->login_user->get_user_data();
        
      
        
        $this->load->view('dashboard',$data);
        
        
        
        
    }
    public function delete($name)
    {
      
     $this->load->model('login_user');
     $data['id']=$name;
     $data['dlt']=$this->login_user->delete_db($data);
     if($data['dlt'])
     {
         echo"record deleted sucessfull";
     }
     else
     {
         echo"error";

     }

    }
    public function Update($user)
    {
        
        
        $this->load->model('login_user');
        $data1['id'] = $user;
        $data1['update'] = $this->login_user->update_db($data1);
        
        $this->load->view('update',$data1);

        
        
        
    }
    public function Update_data()
    {
        

        $this->load->model('login_user');

       ['id']=$this->input->post('id');
        $dat['name']=$this->input->post('name');
        $dat['email']=$this->input->post('email');
        $dat['num']=$this->input->post('num');
       $xyz=$this->login_user->update_db_edit($dat);    
       if($xyz)
       {
           echo"updated";
       }
       else
       {
           echo"error";
       }
    }
  

}

/* End of file Dashboard.php */
