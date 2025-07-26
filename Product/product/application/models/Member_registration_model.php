<?php
  class Member_registration_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('memberinfo',$model);
			//return $sql->result();
	} 

  public function getdetailMemberRegistration()
  {      
   
     $this->db->select('memberinfo.Mr_Id,memberinfo.Member_fullname,memberinfo.peparname,memberinfo.Mobile,memberinfo.DOB,memberinfo.Registration_date,pepar_master.pepar_name');
     $this->db->from('memberinfo');
    //  $this->db->join('business_structure','business.Business_Structure = business_structure.Structure_ID','left');
     $this->db->join('pepar_master','memberinfo.peparname = pepar_master.pepar_Id','left');
     $this->db->order_by('memberinfo.Mr_Id','DESC');
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
      $this->db->select('memberinfo.Mr_Id,memberinfo.Member_fullname,memberinfo.peparname,memberinfo.Mobile,memberinfo.DOB,memberinfo.Registration_date,');
	    $this->db->where('Mr_Id',$id);
      $query = $this->db->get('memberinfo');
			return $query->result();
		}
		
    public function update($model)
    {
       return $sql = $this->db->where('Mr_Id',$model['Mr_Id'])->update('memberinfo',$model); 
    } 
}
