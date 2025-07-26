<?php
  class Firmcheckmodel extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
      public function get_user_by_mobile($mobileNo) {
        // Query to find the user with the given mobile number
        $this->db->where('mobileNo', $mobileNo);
        $query = $this->db->get('businessregistration_master'); // Ensure this is the correct table name
        
        // If a user with this mobile number exists, return the first row
        if ($query->num_rows() > 0) {
            return $query->row(); // Return the user object
        }
        
        // If no user is found, return null
        return null;
    }

}
?>