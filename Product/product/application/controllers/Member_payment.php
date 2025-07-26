<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_payment extends CI_Controller{


    public function create(){
        
        $data['Mnamedata']=$this->Member_payment_model->getmembername();
        // $data['Statedata']=$this->bank_model->getState();


		$this->load->view('common/header_view');
		$this->load->view('Member_payment/Member_payment_view',$data);
		$this->load->view('common/footer_view');
    }
   
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_payment_model');
        
    }
    
     public function dropdownshare() 
    {
      $data=$this->Member_payment_model->getmembername();
      echo json_encode($data);
    }

public function update()
   {
       $id=$this->uri->segment(3);
          $data['data']=$this->Member_payment_model->getbyid($id);
          $data['Mnamedata']=$this->Member_payment_model->getmembername();

        


        
        //  echo "<pre>";
        // print_r($data['data']);

      
          $this->load->view('common/header_view');
          $this->load->view('Member_payment/Member_payment_view',$data);
          $this->load->view('common/footer_view');
   }

    public function index()
	{
        $data['alldata']=$this->Member_payment_model->getdetailMemberPayment();

    $current_date = date('Y-m-d', strtotime('now'));
    $data['formatted_date'] = date('d-M-Y', strtotime($current_date));
        // echo "<pre>";
        // print_r($data['alldata'][0]);

		$this->load->view('common/header_view');
        $this->load->view('Member_payment/Member_payment_detailview',$data);
		$this->load->view('common/footer_view');
	

	}
    

	function insertMpayment(){
        $Fk_MrId= $this->input->post('Fk_MrId'); 
        $Mamount= $this->input->post('Mamount');
        $Pdate=$this->input->post('Pdate');
    

       

       $fields=array('Fk_MrId'=>$Fk_MrId,
                      'Mamount'=>$Mamount,
                      'Pdate'=> date('Y-m-d', strtotime($this->input->post('Pdate')))                    

                      


                    );

                    // echo "<pre>";
                    // print_r($fields);
            $this->Member_payment_model->insertdata($fields);
			echo json_encode($fields);

            // echo json_encode($fields);
        
    
   } 

   function insertMember(){
    $Member_fullname= $this->input->post('Member_fullname'); 
    $Mobile= $this->input->post('Mobile');
    $DOB=$this->input->post('DOB');
    $Registration_date=$this->input->post('Registration_date');
    
   

   $fields=array('Member_fullname'=>$Member_fullname,
                  'Mobile'=>$Mobile,
                  'DOB'=>$DOB,
                  'Registration_date'=>$Registration_date
                 


                );

                // echo "<pre>";
                // print_r($fields);
        $this->Member_payment_model->insertmemberinfo($fields);
        echo json_encode($fields);

        // echo json_encode($fields);
    

} 



public function getpaymentdata()
    {
      
      $newspepar= $this->input->post('Mr_Id');
      $data=$this->Member_payment_model->getpaymentdata($newspepar);
      
           $i=0;
           if(!empty($data)){
                                             foreach($data as $rw=>$value){
                                                
                                             echo "<tr>";
                                             echo "<td class='id-cell'>".$value->Id."</td>";
                                             //  echo "<td>".$value->Member_fullname."</td>";
                                            echo "<td><input type='hidden' class='Mamount' value='".$value->Mamount."'>".$value->Mamount."</td>";
                                             echo "<td>".date('d-M-Y', strtotime($value->Pdate))."</td>";
                                            //  echo "<td>".$value->Month."</td>";

 
                                             $i++;
                                         
                                             echo "</tr>";                        
                                         }
                                         if($data){
                                            echo "<tr class='tableShow'>";
                                                  
                                            
                                            // echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
                                            echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:14px;
                                            margin-right:3px;">Count=</span><span id="text" style="color:blue;font-weight:bold;font-size:14;"></span><input type="hidden" class="idcount border-0" id="idcount" name="idcount" autofocus="autofocus" value=""  required></td>';
                                    


                                            echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:18px;
                                            margin-right:3px;">₹</span><span id="textt" style="color:blue;font-weight:bold;font-size:20;"></span><input type="hidden" class="BillTot border-0" id="BillTot" name="BillTot" autofocus="autofocus" value=""  required></td>';
                                    
                                            echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
                                            
                                            
                        
                                           
                                    
                                    
                                            echo "</tr>";
                                    
                                            }
                                            else{
                                                echo "<tr>";
                                                echo "<td>No record found</td>";
                                                echo "</tr>";
                                            }
                                     }
  
          
      
                               
    }



//   public function getpaymentdata()
//     {
      
//       $newspepar= $this->input->post('Mr_Id');
//       $data=$this->Member_payment_model->getpaymentdata($newspepar);
      
//           $i=0;
//           if(!empty($data)){
//                                              foreach($data as $rw=>$value){
                                                
//                                              echo "<tr>";
//                                              echo "<td class='id-cell'>".$value->Id."</td>";
//                                              //  echo "<td>".$value->Member_fullname."</td>";
//                                             echo "<td><input type='hidden' class='Mamount' value='".$value->Mamount."'>".$value->Mamount."</td>";
//                                              echo "<td>".date('d-M-Y', strtotime($value->Pdate))."</td>";
//                                             //  echo "<td>".$value->Month."</td>";

 
//                                              $i++;
                                         
//                                              echo "</tr>";                        
//                                          }
//                                          if($data){
//                                             echo "<tr class='tableShow'>";
                                                  
                                            
//                                             // echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
//                                             echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:14px;
//                                             margin-right:3px;">Count=</span><span id="text" style="color:blue;font-weight:bold;font-size:14;"></span><input type="hidden" class="idcount border-0" id="idcount" name="idcount" autofocus="autofocus" value=""  required></td>';
                                    


//                                             echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:18px;
//                                             margin-right:3px;">₹</span><span id="textt" style="color:blue;font-weight:bold;font-size:20;"></span><input type="hidden" class="BillTot border-0" id="BillTot" name="BillTot" autofocus="autofocus" value=""  required></td>';
                                    
//                                             echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
                                            
                                            
                        
                                           
                                    
                                    
//                                             echo "</tr>";
                                    
//                                             }
//                                             else{
//                                                 echo "<tr>";
//                                                 echo "<td>No record found</td>";
//                                                 echo "</tr>";
//                                             }
//                                      }
  
          
      
                               
//     }

    

   

   public function updatepayment()
   {
       $Id= $this->input->post('Id'); 
    //   $Fk_MrId= $this->input->post('Fk_MrId'); 
       $Mamount= $this->input->post('Mamount');
       $Pdate=$this->input->post('Pdate');
       

       $fields=array(
                     'Id'=>$Id,
                    // 'Fk_MrId'=>$Fk_MrId,
                      'Mamount'=>$Mamount,
                      'Pdate'=>$Pdate
                


                   );
       $this->Member_payment_model->update($fields);
   }

    
}



?>