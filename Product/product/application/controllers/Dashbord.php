<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashbord extends CI_Controller{


    public function create(){
        
        // $data['Mnamedata']=$this->Member_payment_model->getmembername();
        // $data['Statedata']=$this->bank_model->getState();


		$this->load->view('common/header_view');
		$this->load->view('Dashbord/Dashbord_view');
		$this->load->view('common/footer_view');
    }
   
	public function __construct()
    {
        parent::__construct();
        // $this->load->model('Member_payment_model');
        
    }



    public function index()
	{
        // $data['alldata']=$this->Member_payment_model->getdetailMemberPayment();

		// $this->load->view('common/header_view');
        $this->load->view('Dashbord/Dashbord_view');
		// $this->load->view('common/footer_view');
	

	}

    
}



?>