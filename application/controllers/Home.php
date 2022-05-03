<?php

class Home extends CI_Controller 
{
    public function index()
    {
        $this->load->view("register");

        $this->load->model('login_user');
       
        $data['fetch'] = $this->login_user->get_user_data();
        $this->load->view('dashboard',$data);

        
    }
    public function register()
    {

        $this->load->model("db_project");

        $data['name']=$this->input->post('name');
        $data['email']=$this->input->post('email');
        $data['num']=$this->input->post('num');
       $qw=$this->db_project->register_db($data);        
        if( $qw)
        {
            
           
           
        }
     

       
    }
  
       
       
    
   
}


?>