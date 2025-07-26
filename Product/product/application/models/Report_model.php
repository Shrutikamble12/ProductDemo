<?php
class Report_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertdata($model)
    {
        return $this->db->insert('newpayment', $model);
    } 

    public function insertmemberinfo($model)
    {
        return $this->db->insert('memberinfo', $model);
    } 

    public function getmembername()
    {      
        $this->db->select('Mr_Id, Member_fullname,Mobile');
        $this->db->from('memberinfo');
        $query = $this->db->get();
        return $query->result();
    }

    
  
  

}
?>