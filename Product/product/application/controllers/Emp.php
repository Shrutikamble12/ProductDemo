<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Emp extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Emp_model');
        
    }



    public function index()
	{
        $data['alldata']=$this->Emp_model->getdetailMemberRegistration();
        $current_date = date('Y-m-d', strtotime('now'));
    $data['formatted_date'] = date('d-M-Y', strtotime($current_date));
    
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('Emp/Emp_detailview',$data);
		$this->load->view('common/footer_view');
	

	}

    public function create(){

        
        // $data['Structuredata']=$this->Business_model->getstructure();
        // $data['pepardata']=$this->Emp_model->getpepar();


		$this->load->view('common/header_view');
		$this->load->view('Emp/Emp_view');
		$this->load->view('common/footer_view');
    }
   

	function insertEmp(){
        $mobileNo= $this->input->post('mobileNo');
        $navId= $this->input->post('navId'); 
        // $peparname= $this->input->post('peparname');
        // $Mobile= $this->input->post('Mobile');
        // $DOB=$this->input->post('DOB');
        // $Registration_date=$this->input->post('Registration_date');
       

       $fields=array('mobileNo'=>$mobileNo,
                     'navId'=>$navId,
                      'Mobile'=>$Mobile
                    //   'DOB'=> date('Y-m-d', strtotime($this->input->post('DOB'))),                    
                    //   'Registration_date'=> date('Y-m-d', strtotime($this->input->post('Registration_date')))                    
                     


                    );

                    // echo "<pre>";
                    // print_r($fields);
            $this->Emp_model->insertdata($fields);
			echo json_encode($fields);

            // echo json_encode($fields);
        
    
   } 


   public function update()
   {
       $id=$this->uri->segment(3);
          $data['data']=$this->Emp_model->getbyid($id);
          $data['pepardata']=$this->Emp_model->getpepar();

        
       //  echo "<pre>";
       // print_r($data);
        
		$this->load->view('common/header_view');
		$this->load->view('Emp/Emp_view',$data);
		$this->load->view('common/footer_view');
   }


   public function updateEmp()
   {
       $Id= $this->input->post('Id'); 
       $mobileNo= $this->input->post('mobileNo'); 
       $navId= $this->input->post('navId');
        // $Mobile= $this->input->post('Mobile');
        // $DOB=$this->input->post('DOB');
        // $Registration_date=$this->input->post('Registration_date');



        $fields=array( 'Id'=>$Id,
            'mobileNo'=>$mobileNo,
            'navId'=>$navId
        // 'Mobile'=>$Mobile,
        // 'DOB'=>$DOB,
        // 'Registration_date'=>$Registration_date
    
    );
       $this->Emp_model->update($fields);
   }

}
?>