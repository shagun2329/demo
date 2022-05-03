<?php
class Login_pg extends CI_Controller
{
    public function index()
    {
        $this->load->view('facebook_login');
    }
    public function login()
    {
        $this->load->model("login_user");
        $data['email']=$this->input->post('email');
        $data['pass']=$this->input->post('pass');
        $data['login'] = $this->login_user->get($data,'user_register',1);
        if($data['login'])
        {   
            $this->session->set_flashdata('status','Login Successfull'); 
            redirect(base_url('dashboard'));  
            

        }
        else
        {
            $this->session->set_flashdata('error_msg','Login Failed'); 
            redirect(base_url('login_pg'));   
        }
        
    }
}




?>