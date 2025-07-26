<?php
class Payment_success_model extends CI_Model {

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

    // public function getdetails($Mr_Id)
    // {      
    //     $this->db->select('newpayment.Id, newpayment.Mname, newpayment.Mamount, newpayment.Pdate, memberinfo.Member_fullname');
    //     $this->db->from('newpayment');
    //     $this->db->join('memberinfo', 'newpayment.Mname = memberinfo.Mr_Id', 'left');
    //     $this->db->where('newpayment.Mname', $Mr_Id);
    //     $this->db->order_by('newpayment.Id', 'DESC');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    
    // public function getMonthData()
    // {  
        
    //     $date = validate($_GET['month']);
    //     $Mname = validate($_GET['name']);    
    //     $this->db->select('newpayment.Id, newpayment.Mname, newpayment.Mamount, newpayment.Pdate, memberinfo.Member_fullname');
    //     $this->db->from('newpayment');
    //     $this->db->join('memberinfo', 'newpayment.Mname = memberinfo.Mr_Id', 'left');
    //     $this->db->where('newpayment.Pdate=',$date AND 'newpayment.Mname=',$Mname);
    //     // $this->db->where('newpayment.Mname', $Mr_Id);
    //     $this->db->order_by('newpayment.Id', 'DESC');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    


// public function getMonthData($selectedDate)
// {
//     $this->db->select('newpayment.Id, newpayment.Mname, newpayment.Mamount, newpayment.Pdate, memberinfo.Member_fullname');
//     $this->db->from('newpayment');
//     $this->db->join('memberinfo', 'newpayment.Mname = memberinfo.Mr_Id', 'left');

  

    
//     $yearMonth = date('2024-07', strtotime($selectedDate));

//     // Create conditions to fetch data for the entire month
//     $startDate = $yearMonth . '-01'; // First day of the selected month
//     $endDate = date('Y-m-t', strtotime($startDate)); // Last day of the selected month

//     // Modify the where condition to fetch data for the entire month
//     $this->db->where('newpayment.Pdate >=', $startDate);
//     $this->db->where('newpayment.Pdate <=', $endDate);

//     $query = $this->db->get();

//     if ($query->num_rows() > 0) {
//         return $query->result();
//     } else {
//         return array();
//     }
// }

}
?>