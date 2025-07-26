<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model('New_login_model');
		
    }

	public function index()
	{
        
       $this->load->view('New_login_view');
	}

    public function login_validate()
    {
        $username =$this->input->post('username');
        $password =$this->input->post('password');

        $data=$this->New_login_model->AdminLogin($username,$password);
        //  print_r($username);
        //  print_r($password);
        if(!empty($data))
          {
            $newdata = array(

                'username'=>$username,
                'password'=>$data[0]->password,
                'loginId'=>$data[0]->loginId,

                );
                // $this->session->sess_expiration = '10';
                $this->session->set_userdata($newdata);
                echo 1;

                // redirect('Login/index');


            }
            else
            {
                echo 2;
            }

    }
    
    
    


    function logout(){

        session_destroy();

        redirect('New_login/index');


    }
}