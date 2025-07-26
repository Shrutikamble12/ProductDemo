<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firmcheck extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('Firmcheckmodel');
        
    }
    public function create()
	{
        
		$this->load->view('common/header_view');
		$this->load->view('Firmcheckview');
		$this->load->view('common/footer_view');
	

	}
    public function check_mobile()
    {
        $mobileNo = $this->input->post('mobileNo');
        
        // Check if the mobile number exists in the database
        $this->load->model('Firmcheckmodel');
        $user = $this->Firmcheckmodel->get_user_by_mobile($mobileNo);
        
        if (!$user) {
            // Mobile number not found in the database
            echo json_encode(['status' => 'not_registered']);
        } else {
            // Mobile number found, check if navId is 1 (verified)
            if ($user->navId == 1) {
                // User is verified
                echo json_encode(['status' => 'verify']);
            } else {
                // Mobile number exists, but navId is not 1 (not verified)
                echo json_encode(['status' => 'not_verified']);
            }
        }
    }
// 	public function index()
// 	{
//         $data['alldata']=$this->Bookie_model->getdetailview();
       

//         // echo "<pre>";
//         // print_r($data);

// 		$this->load->view('common/header_view');
// 		$this->load->view('Bookie/BookieDetailsview',$data);
// 		$this->load->view('common/footer_view');
	

// 	}


//     function insertBookie(){
//         $BookieName= $this->input->post('BookieName'); 
//         $Mobile= $this->input->post('Mobile'); 
//         $Password= $this->input->post('Password'); 
//         $Address= $this->input->post('Address');
//        $Gender= $this->input->post('Gender');
//        $Jama= $this->input->post('Jama');
//        $Nave= $this->input->post('Nave');
       
      
     
//        $fields=array('BookieName'=>$BookieName,
//                       'Mobile'=>$Mobile,
//                       'Password'=>$Password,
//                       'Address'=>$Address,
//                       'Gender'=>$Gender,
//                       'Jama'=>$Jama,
//                       'Nave'=>$Nave,
                      
                      

                     
                      
//                       'created_date'=>date('Y-m-d H:i:s'),
//                       'created_by'=>1,
//                       'modified_date'=>date('Y-m-d H:i:s'),
//                       'modified_by'=>1
//             );
//             $this->Bookie_model->insertdata($fields);
//          echo json_encode($fields);
    
//    } 
//    // This code for Edit and Update data 

//    public function update()
//    {
//        $id=$this->uri->segment(3);
//        $data['data']=$this->Bookie_model->getbyid($id);
  

      
//     $this->load->view('common/header_view');
//     $this->load->view('Bookie/Bookie_view',$data);
//     $this->load->view('common/footer_view');
//    }

//    public function updateBookie()
//    {
//         $BookieId= $this->input->post('BookieId'); 
//         $BookieName= $this->input->post('BookieName'); 
//         $Mobile= $this->input->post('Mobile'); 
//         $Password= $this->input->post('Password'); 
//         $Address= $this->input->post('Address');
//         $Gender= $this->input->post('Gender');
//         $Jama= $this->input->post('Jama');
//         $Nave= $this->input->post('Nave');
        
   
  
 
//    $fields=array(
//             'BookieId'=>$BookieId,
//             'BookieName'=>$BookieName,
//             'Mobile'=>$Mobile,
//             'Password'=>$Password,
//             'Address'=>$Address,
//             'Gender'=>$Gender,
//             'Jama'=>$Jama,
//             'Nave'=>$Nave
   

  
   
       
//         );
//         $this->Bookie_model->update($fields);
//    }

	
	
}

