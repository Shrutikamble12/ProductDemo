<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_registration extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_registration_model');
        
    }



    public function index()
	{
        $data['alldata']=$this->Member_registration_model->getdetailMemberRegistration();
        $current_date = date('Y-m-d', strtotime('now'));
    $data['formatted_date'] = date('d-M-Y', strtotime($current_date));
    
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('Member_registration/Member_registration_detailview',$data);
		$this->load->view('common/footer_view');
	

	}

    public function create(){

        
        // $data['Structuredata']=$this->Business_model->getstructure();
        $data['pepardata']=$this->Member_registration_model->getpepar();


		$this->load->view('common/header_view');
		$this->load->view('Member_registration/Member_registration_view',$data);
		$this->load->view('common/footer_view');
    }
   

	function insertMember(){
        $Member_fullname= $this->input->post('Member_fullname'); 
        $peparname= $this->input->post('peparname');
        $Mobile= $this->input->post('Mobile');
        $DOB=$this->input->post('DOB');
        $Registration_date=$this->input->post('Registration_date');
       

       $fields=array('Member_fullname'=>$Member_fullname,
                     'peparname'=>$peparname,
                      'Mobile'=>$Mobile,
                      'DOB'=> date('Y-m-d', strtotime($this->input->post('DOB'))),                    
                      'Registration_date'=> date('Y-m-d', strtotime($this->input->post('Registration_date')))                    
                     


                    );

                    // echo "<pre>";
                    // print_r($fields);
            $this->Member_registration_model->insertdata($fields);
			echo json_encode($fields);

            // echo json_encode($fields);
        
    
   } 


   public function update()
   {
       $id=$this->uri->segment(3);
          $data['data']=$this->Member_registration_model->getbyid($id);
          $data['pepardata']=$this->Member_registration_model->getpepar();

        
       //  echo "<pre>";
       // print_r($data);
        
		$this->load->view('common/header_view');
		$this->load->view('Member_registration/Member_registration_view',$data);
		$this->load->view('common/footer_view');
   }


   public function updateregistration()
   {
       $Mr_Id= $this->input->post('Mr_Id'); 
       $Member_fullname= $this->input->post('Member_fullname'); 
       $peparname= $this->input->post('peparname');
        $Mobile= $this->input->post('Mobile');
        $DOB=$this->input->post('DOB');
        $Registration_date=$this->input->post('Registration_date');



        $fields=array( 'Mr_Id'=>$Mr_Id,
            'Member_fullname'=>$Member_fullname,
            'peparname'=>$peparname,
        'Mobile'=>$Mobile,
        'DOB'=>$DOB,
        'Registration_date'=>$Registration_date
    
    );
       $this->Member_registration_model->update($fields);
   }

}
?>