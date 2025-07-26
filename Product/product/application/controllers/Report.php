<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
        
    }



  
    public function create(){

        
        

        // $data['Statedata']=$this->bank_model->getState();

        $data['Mnamedata']=$this->Report_model->getmembername();
		$this->load->view('common/header_view');
		$this->load->view('Report/Report_view',$data);
		$this->load->view('common/footer_view');
    }
   
    public function getDateRangeData()
    {
        

        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $Fk_MrId = $this->input->post('Fk_MrId');
    
        $this->db->select('newpayment.Id, newpayment.Fk_MrId, newpayment.Mamount, newpayment.Pdate, memberinfo.Member_fullname, memberinfo.Mobile,');
        $this->db->from('newpayment');
        $this->db->join('memberinfo', 'newpayment.Fk_MrId = memberinfo.Mr_Id', 'left');
    
        if ($startDate && $endDate) {
            $this->db->where('Pdate >=', $startDate);
            $this->db->where('Pdate <=', $endDate);
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
            // echo '<td style="padding: 5px 6px!important;width:10%;"></td>';
            echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:14px;
            margin-right:3px;">Count=</span><span id="text" style="color:blue;font-weight:bold;font-size:14;"></span><input type="hidden" class="idcount border-0" id="idcount" name="idcount" autofocus="autofocus" value=""  required></td>';
            echo '<td style="padding: 5px 6px!important;width:10%;"></td>';
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
    
//     public function getUnpaidData()
// {
//     $startDate = $this->input->post('startDate');
//     $endDate = $this->input->post('endDate');
//     $Fk_MrId = $this->input->post('Fk_MrId');

//     // Query to get paid members
//     $this->db->select('newpayment.Fk_MrId');
//     $this->db->from('newpayment');
//     if ($startDate && $endDate) {
//         $this->db->where('Pdate >=', $startDate);
//         $this->db->where('Pdate <=', $endDate);
//     }
//     $paid_members_query = $this->db->get_compiled_select();

//     // Query to get all members
//     $this->db->select('Mr_Id, Member_fullname');
//     $this->db->from('memberinfo');
    
//     if ($Fk_MrId && $Fk_MrId != '0') {
//         $this->db->where('Mr_Id', $Fk_MrId);
//     }

//     // Exclude paid members
//     if ($startDate && $endDate) {
//         $this->db->where_not_in('Mr_Id', $paid_members_query, FALSE);
//     }

//     $this->db->order_by('Mr_Id', 'DESC');
//     $query = $this->db->get();
//     $data = $query->result();

//     if (!empty($data)) {
//         foreach ($data as $value) {
//             echo "<tr>";
//             echo "<td class='id-cel'>".$value->Mr_Id."</td>"; 
//             echo "<td>{$value->Member_fullname}</td>";
//             echo "<td>0</td>";  // No payment amount
//             echo "<td>No Payment</td>";  // No payment message
//             echo "</tr>";
//         }

//         echo "<tr class='tableShow'>";
//         echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:18px;"></span><span id="untext" style="color:blue;font-weight:bold;font-size:20;"></span><input type="hidden" class="newcount border-0" id="newcount" name="newcount" autofocus="autofocus" value=""  required></td>';
//         echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
//         echo '<td style="padding: 5px 6px!important;width:10%;">
//                 <span style="color:blue;font-weight:bold;font-size:18px;margin-right:3px;">₹</span>
//                 <span id="textt" style="color:blue;font-weight:bold;font-size:20;"></span>
//                 <input type="hidden" class="BillTot border-0" id="BillTot" name="BillTot" autofocus="autofocus" value="" required>
//               </td>';
//         echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
//         echo "</tr>";
//     } else {
//         echo "<tr>";
//         echo "<td colspan='4'>No Record Found</td>";
//         echo "</tr>";
//     }
// }

// public function getUnpaidData() {
//     $startDate = $this->input->post('startDate');
//     $endDate = $this->input->post('endDate');
//     $Fk_MrId = $this->input->post('Fk_MrId');

//     // List of months in the year
//     $months = [
//         '01' => 'January', '02' => 'February', '03' => 'March',
//         '04' => 'April', '05' => 'May', '06' => 'June',
//         '07' => 'July', '08' => 'August', '09' => 'September',
//         '10' => 'October', '11' => 'November', '12' => 'December'
//     ];

//     // Get member IDs who made payments within the date range
//     $this->db->select('Fk_MrId, DATE_FORMAT(Pdate, "%Y-%m") as month');
//     $this->db->from('newpayment');
//     $this->db->where('Pdate >=', $startDate);
//     $this->db->where('Pdate <=', $endDate);
//     $this->db->group_by('Fk_MrId, month');
//     $paid_members_query = $this->db->get_compiled_select();

//     // Get all members
//     $this->db->select('Mr_Id, Member_fullname');
//     $this->db->from('memberinfo');
//     if ($Fk_MrId && $Fk_MrId != '0') {
//         $this->db->where('Mr_Id', $Fk_MrId);
//     }
//     $members_query = $this->db->get();
//     $members = $members_query->result();

//     $data = [];
//     foreach ($members as $member) {
//         $memberId = $member->Mr_Id;

//         // Check for each month
//         foreach ($months as $month => $monthName) {
//             $monthStart = date('Y') . '-' . $month . '-01';
//             $monthEnd = date('Y') . '-' . $month . '-31'; // Last day of the month

//             $this->db->select('1');
//             $this->db->from('newpayment');
//             $this->db->where('Fk_MrId', $memberId);
//             $this->db->where('Pdate >=', $monthStart);
//             $this->db->where('Pdate <=', $monthEnd);
//             $payment_exists = $this->db->get()->num_rows() > 0;

//             if (!$payment_exists) {
//                 $data[] = [
//                     'Mr_Id' => $memberId,
//                     'Member_fullname' => $member->Member_fullname,
//                     'Month' => $monthName,
//                     'Amount' => 0,
//                     'Payment_date' => 'No Payment'
//                 ];
//             }
//         }
//     }

//     if (!empty($data)) {
//         foreach ($data as $value) {
//             echo "<tr>";
//             echo "<td class='id-cel'>".$value['Mr_Id']."</td>";
//             echo "<td>{$value['Member_fullname']}</td>";
//             echo "<td>{$value['Amount']}</td>";
//             echo "<td>{$value['Month']}</td>";
//             echo "</tr>";
//         }

//         // Calculations for total amount and count
//         echo "<tr class='tableShow'>";
//         echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:18px;
//         margin-right:3px;"></span><span id="untext" style="color:blue;font-weight:bold;font-size:20;"></span><input type="hidden" class="newcount border-0" id="newcount" name="newcount" autofocus="autofocus" value=""  required></td>';
//         echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
//         echo '<td style="padding: 5px 6px!important;width:10%;">
//                 <span style="color:blue;font-weight:bold;font-size:18px;margin-right:3px;">₹</span>
//                 <span id="textt" style="color:blue;font-weight:bold;font-size:20;"></span>
//                 <input type="hidden" class="BillTot border-0" id="BillTot" name="BillTot" autofocus="autofocus" value="" required>
//               </td>';
//         echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
//         echo "</tr>";
//     } else {
//         echo "<tr>";
//         echo "<td colspan='4'>No Record Found</td>";
//         echo "</tr>";
//     }
// }

public function getUnpaidData() {
    $startDate = $this->input->post('startDate');
    $endDate = $this->input->post('endDate');
    $Fk_MrId = $this->input->post('Fk_MrId');

    // List of months in the year
    $months = [
        '01' => 'January', '02' => 'February', '03' => 'March',
        '04' => 'April', '05' => 'May', '06' => 'June',
        '07' => 'July', '08' => 'August', '09' => 'September',
        '10' => 'October', '11' => 'November', '12' => 'December'
    ];

    // Determine if a date range is provided
    $hasDateRange = !empty($startDate) && !empty($endDate);

    // Fetch payments based on date range or current month
    if ($hasDateRange) {
        // Payments within the selected date range
        $this->db->select('Fk_MrId, DATE_FORMAT(Pdate, "%Y-%m") as month');
        $this->db->from('newpayment');
        $this->db->where('Pdate >=', $startDate);
        $this->db->where('Pdate <=', $endDate);
        $this->db->group_by('Fk_MrId, month');
        $payments_query = $this->db->get();
        $payments = $payments_query->result_array();

        // Find members with payments after the end date
        $this->db->select('Fk_MrId');
        $this->db->from('newpayment');
        $this->db->where('Pdate >', $endDate);
        $future_payments_query = $this->db->get();
        $future_payments = $future_payments_query->result_array();
        $futurePaymentMembers = array_column($future_payments, 'Fk_MrId');
    } else {
        // No date range provided, get payments for the current month
        $currentMonthStart = (new DateTime('first day of this month'))->format('Y-m-01');
        $currentMonthEnd = (new DateTime('last day of this month'))->format('Y-m-t');

        $this->db->select('Fk_MrId, DATE_FORMAT(Pdate, "%Y-%m") as month');
        $this->db->from('newpayment');
        $this->db->where('Pdate >=', $currentMonthStart);
        $this->db->where('Pdate <=', $currentMonthEnd);
        $this->db->group_by('Fk_MrId, month');
        $payments_query = $this->db->get();
        $payments = $payments_query->result_array();

        $futurePaymentMembers = []; // No need to check for future payments
    }

    // Fetch all members
    $this->db->select('Mr_Id, Member_fullname, Mobile');
    $this->db->from('memberinfo');
    if ($Fk_MrId && $Fk_MrId != '0') {
        $this->db->where('Mr_Id', $Fk_MrId);
    }
    $members_query = $this->db->get();
    $members = $members_query->result();

    // Store payment data by member and month
    $paymentData = [];
    foreach ($payments as $payment) {
        $paymentData[$payment['Fk_MrId']][$payment['month']] = true;
    }

    $data = [];
    foreach ($members as $member) {
        $memberId = $member->Mr_Id;

        // Determine the date range for the current member
        $startDateTime = $hasDateRange ? new DateTime($startDate) : new DateTime('first day of this month');
        $endDateTime = $hasDateRange ? new DateTime($endDate) : new DateTime('last day of this month');

        $hasPaymentInRange = false;

        // Loop through each month within the selected date range or current month
        while ($startDateTime <= $endDateTime) {
            $month = $startDateTime->format('Y-m');
            $monthName = $months[$startDateTime->format('m')] ?? 'Unknown';

            // Check if payment exists for the member in this month
            $payment_exists = isset($paymentData[$memberId][$month]);

            if ($payment_exists) {
                $hasPaymentInRange = true;
                break; // Exit loop if payment found
            }

            // Move to the next month
            $startDateTime->modify('first day of next month');
        }

        // If no payment exists within the range, add to unpaid list
        if (!$hasPaymentInRange && !in_array($memberId, $futurePaymentMembers)) {
            $data[] = [
                'Mr_Id' => $memberId,
                'Member_fullname' => $member->Member_fullname,
                'Mobile' => $member->Mobile,
                'Month' => $months[(new DateTime())->format('m')] ?? 'Unknown',
                'Amount' => 0,
                'Payment_date' => 'No Payment'
            ];
        }
    }

    // Output results
    if (!empty($data)) {
        foreach ($data as $value) {
            echo "<tr>";
            echo "<td class='id-cel'>".$value['Mr_Id']."</td>";
            echo "<td>{$value['Member_fullname']} - {$value['Mobile']}</td>";
            echo "<td>{$value['Amount']}</td>";
            echo "<td>{$value['Month']}</td>";
            echo "</tr>";
        }

        // Calculations for total amount and count
        echo "<tr class='tableShow'>";
        echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:14px;margin-right:3px;">Count=</span><span id="untext" style="color:blue;font-weight:bold;font-size:14;"></span><input type="hidden" class="newcount border-0" id="newcount" name="newcount" autofocus="autofocus" value="" required></td>';
        echo "<td style='padding: 5px 6px!important;width:10%;'></td>";
        echo '<td style="padding: 5px 6px!important;width:10%;"><span style="color:blue;font-weight:bold;font-size:18px;margin-right:3px;">₹</span><span id="textt" style="color:blue;font-weight:bold;font-size:20;"></span><input type="hidden" class="BillTot border-0" id="BillTot" name="BillTot" autofocus="autofocus" value="" required></td>';
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