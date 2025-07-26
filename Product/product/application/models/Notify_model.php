<?php
  class Notify_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('newpayment',$model);
			//return $sql->result();
	} 

  
  public function insertmemberinfo($model)
	{
		return $this->db->insert('memberinfo',$model);
			//return $sql->result();
	} 

  

  public function getdetailMemberPayment()
  {      
   
    //  $this->db->select('newpayment.Id,newpayment.Fk_MrId,newpayment.Mamount,newpayment.Pdate,memberinfo.Member_fullname');
     $this->db->select('newpayment.Id,newpayment.Fk_MrId,newpayment.Mamount,newpayment.Pdate,memberinfo.Member_fullname,Mobile');
     $this->db->from('newpayment');
     $this->db->join('memberinfo','newpayment.Fk_MrId = memberinfo.Mr_Id','left');
    //  $this->db->join('student_sub','studentdetails.Subject = student_sub.sub_id','left');
     $this->db->order_by('newpayment.Id','DESC');
     $query = $this->db->get();
     return $query->result();
          
  }
 


  
  public function getmembername()
  {      
   
     $this->db->select('memberinfo.Mr_Id,memberinfo.Member_fullname,memberinfo.Mobile');
     $this->db->from('memberinfo');
     $query = $this->db->get();
     return $query->result();
          
  }

  public function getpaymentdata($booke)
  {      
    $this->db->select('newpayment.Id,newpayment.Mamount,newpayment.Pdate,memberinfo.Member_fullname');
    $this->db->from('newpayment');
    $this->db->join('memberinfo','newpayment.Fk_MrId = memberinfo.Mr_Id','left');
    $this->db->where('memberinfo.Mr_Id',$booke);
    $this->db->order_by('Id', 'DESC');
 $query = $this->db->get();
 return $query->result();
          
  }
  
  public function getbyid($id)
		{
		  $this->db->select("newpayment.Id,newpayment.Fk_MrId,newpayment.Mamount,newpayment.Pdate");
	    $this->db->where('Id',$id);
      $query = $this->db->get('newpayment');
			return $query->result();
		}
		
    public function update($model)
    {
       return $sql = $this->db->where('Id',$model['Id'])->update('newpayment',$model); 
    } 
}



