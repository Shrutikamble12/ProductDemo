<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_success extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_success_model');
        
    }



    // public function index()
	// {
    //     $data['alldata']=$this->Member_registration_model->getdetailMemberRegistration();
    //     // echo "<pre>";
    //     // print_r($data);

	// 	$this->load->view('common/header_view');
    //     $this->load->view('Member_registration/Member_registration_detailview',$data);
	// 	$this->load->view('common/footer_view');
	

	// }

    public function create(){

        
       
        // $data['Statedata']=$this->bank_model->getState();

        $data['Mnamedata']=$this->Payment_success_model->getmembername();
		$this->load->view('common/header_view');
		$this->load->view('Payment_success/Payment_success_view',$data);
		$this->load->view('common/footer_view');
    }
   
    // public function getdetails()
    // {
      
    //   $newspepar= $this->input->post('Mr_Id');
    //   $data=$this->Payment_success_model->getdetails($newspepar);
      
        //    $i=0;
        //    if(!empty($data)){
        //                                      foreach($data as $rw=>$value){
                                                
        //                                      echo "<tr>";
        //                                      echo "<td>".$value->Id."</td>";
        //                                      echo "<td>".$value->Member_fullname."</td>";
        //                                     echo "<td><input type='hidden' class='Mamount' value='".$value->Mamount."'>".$value->Mamount."</td>";
        //                                      echo "<td>".date('d-M-Y', strtotime($value->Pdate))."</td>";
        //                                     //  echo "<td>".$value->Month."</td>";

 
        //                                      $i++;
                                         
        //                                      echo "</tr>";                        
        //                                  }
        //                                  if($data){
        //                                     echo "<tr class='tableShow'>";
                                                  
                                            
        //                                     echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
        //                                     echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
        //                                     echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:18px;
        //                                     margin-right:3px;">₹</span><span id="textt" style="color:blue;font-weight:bold;font-size:20;"></span><input type="hidden" class="BillTot border-0" id="BillTot" name="BillTot" autofocus="autofocus" value=""  required></td>';
                                    
        //                                     echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
                                            
                                            
                        
                                           
                                    
                                    
        //                                     echo "</tr>";
                                    
        //                                     }
        //                                     else{
        //                                         echo "<tr>";
        //                                         echo "<td>No record found</td>";
        //                                         echo "</tr>";
        //                                     }
        //                              }
  
          
      
                               
    // }


   
    public function getMonthData()
    {
      
        
        $month = $this->input->post('month');
        $Fk_MrId = $this->input->post('Fk_MrId');
       

    
        
        // $month = $this->db->escape_str($month);
        // $name = $this->db->escape_str($name);
    
        
        $this->db->select('newpayment.Id, newpayment.Fk_MrId, newpayment.Mamount, newpayment.Pdate, memberinfo.Member_fullname, memberinfo.Mobile,');
        $this->db->from('newpayment');
        $this->db->join('memberinfo', 'newpayment.Fk_MrId = memberinfo.Mr_Id', 'left');
        
        if ($month) {
            $this->db->like('Pdate', $month, 'after');
        }
       

        if ($Fk_MrId && $Fk_MrId != '0') {
            $this->db->where('Fk_MrId', $Fk_MrId);
        }
        
        $this->db->order_by('Id', 'DESC');
        $query = $this->db->get();
    
        
        $data = $query->result();
    
        if (!empty($data)) {
            foreach ($data as $value) {
                echo "<tr>";
                echo "<td class='id-cell'>".$value->Id."</td>"; 
             echo "<td>{$value->Member_fullname} - {$value->Mobile}</td>";
                echo "<td><input type='hidden' class='Mamount' value='{$value->Mamount}'>{$value->Mamount}</td>";
                echo "<td>" . date('d-M-Y', strtotime($value->Pdate)) . "</td>";
                echo "</tr>";
            }
            
            
            echo "<tr class='tableShow'>";
            // echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
            echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:14px;
            margin-right:3px;">Count=</span><span id="text" style="color:blue;font-weight:bold;font-size:14;"></span><input type="hidden" class="idcount border-0" id="idcount" name="idcount" autofocus="autofocus" value=""  required></td>';
            echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
            echo '<td style="padding: 5px 6px!important;width:10%;">
                    <span style="color:blue;font-weight:bold;font-size:18px;margin-right:3px;">₹</span>
                    <span id="textt" style="color:blue;font-weight:bold;font-size:20;"></span>
                    <input type="hidden" class="BillTot border-0" id="BillTot" name="BillTot" autofocus="autofocus" value="" required>
                  </td>';
            echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
            echo "</tr>";
        } else {
        
            echo "<tr>";
            echo "<td colspan='4'>No Record Found</td>";
            echo "</tr>";
        }
    }
    
    public function getUnsuccessData()
    {
        $month = $this->input->post('month');
        $Fk_MrId = $this->input->post('Fk_MrId');
    
        
        $this->db->select('newpayment.Fk_MrId');
        $this->db->from('newpayment');
        if ($month) {
            $this->db->like('Pdate', $month, 'after'); 
        }
        $paid_members_query = $this->db->get_compiled_select();
    
        
        $this->db->select('Mr_Id, Member_fullname, Mobile');
        $this->db->from('memberinfo');
        

        if ($Fk_MrId && $Fk_MrId != '0') {
            $this->db->where('Mr_Id', $Fk_MrId);
        }
    
        
        if ($month) {
            $this->db->where_not_in('Mr_Id', $paid_members_query, FALSE);
        } else {
            
            $this->db->where_not_in('Mr_Id', $paid_members_query, FALSE);
        }
    
        $this->db->order_by('Mr_Id', 'DESC');
        $query = $this->db->get();
        $data = $query->result();
    
        
        if (!empty($data)) {
            foreach ($data as $value) {
                echo "<tr>";
                echo "<td class='id-cel'>".$value->Mr_Id."</td>"; 
                echo "<td>{$value->Member_fullname} - {$value->Mobile}</td>";
                echo "<td>0</td>";  // No payment amount
                echo "<td>No Payment</td>";  // No payment message
                echo "</tr>";
            }
    
            echo "<tr class='tableShow'>";
            // echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
            echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:14px;
            margin-right:3px;">Count=</span><span id="untext" style="color:blue;font-weight:bold;font-size:14;"></span><input type="hidden" class="newcount border-0" id="newcount" name="newcount" autofocus="autofocus" value=""  required></td>';
            echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
            echo '<td style="padding: 5px 6px!important;width:10%;">
                    <span style="color:blue;font-weight:bold;font-size:18px;margin-right:3px;">₹</span>
                    <span id="textt" style="color:blue;font-weight:bold;font-size:20;"></span>
                    <input type="hidden" class="BillTot border-0" id="BillTot" name="BillTot" autofocus="autofocus" value="" required>
                  </td>';
            echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
            echo "</tr>";
        } else {
            echo "<tr>";
            echo "<td colspan='4'>No Record Found</td>";
            echo "</tr>";
        }
    }
    

    
    }
    

    

?>