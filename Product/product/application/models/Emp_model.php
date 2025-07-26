<?php
  class Emp_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('studentregistration_master',$model);
			//return $sql->result();
	} 

  public function getdetailMemberRegistration()
  {      
   
     $this->db->select('studentregistration_master.Id,studentregistration_master.mobileNo,studentregistration_master.navId,studentregistration_master.Mobile,studentregistration_master.DOB,studentregistration_master.Registration_date,pepar_master.pepar_name');
     $this->db->from('studentregistration_master');
    //  $this->db->join('business_structure','business.Business_Structure = business_structure.Structure_ID','left');
     $this->db->join('pepar_master','studentregistration_master.peparname = pepar_master.pepar_Id','left');
     $this->db->order_by('studentregistration_master.Id','DESC');
     $query = $this->db->get();
     return $query->result();
          
  }

  public function getpepar()
  {      
   
     $this->db->select('pepar_master.*');
     $this->db->from('pepar_master');
     $query = $this->db->get();
     return $query->result();
          
  }


  public function getbyid($id)
		{
      $this->db->select('studentregistration_master.Id,studentregistration_master.mobileNo,studentregistration_master.navId,studentregistration_master.Mobile,studentregistration_master.DOB,studentregistration_master.Registration_date,');
	    $this->db->where('Id',$id);
      $query = $this->db->get('studentregistration_master');
			return $query->result();
		}
		
    public function update($model)
    {
       return $sql = $this->db->where('Id',$model['Id'])->update('studentregistration_master',$model); 
    } 
}
