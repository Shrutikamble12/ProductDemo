<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notify extends CI_Controller{


    public function create(){
        
        $data['Mnamedata']=$this->Notify_model->getmembername();
        // $data['Statedata']=$this->bank_model->getState();


		$this->load->view('common/header_view');
		$this->load->view('Notification/Notify_view',$data);
		$this->load->view('common/footer_view');
    }
   
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Notify_model');
        
    }
    
     public function dropdownshare() 
    {
      $data=$this->Notify_model->getmembername();
      echo json_encode($data);
    }

public function update()
   {
       $id=$this->uri->segment(3);
          $data['data']=$this->Notify_model->getbyid($id);
          $data['Mnamedata']=$this->Notify_model->getmembername();

        


        
        //  echo "<pre>";
        // print_r($data['data']);

      
          $this->load->view('common/header_view');
          $this->load->view('Notify/Notify_view',$data);
          $this->load->view('common/footer_view');
   }

    public function index()
	{
        $data['alldata']=$this->Notify_model->getdetailMemberPayment();

    $current_date = date('Y-m-d', strtotime('now'));
    $data['formatted_date'] = date('d-M-Y', strtotime($current_date));
        // echo "<pre>";
        // print_r($data['alldata'][0]);

		$this->load->view('common/header_view');
        $this->load->view('Notify/Notify_detailview',$data);
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
            $this->Notify_model->insertdata($fields);
			echo json_encode($fields);
// After inserting payment
$this->Notifications->send_push('New Payment Received', 'A new payment was added by a member.');

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
        $this->Notify_model->insertmemberinfo($fields);
        echo json_encode($fields);

        // echo json_encode($fields);
    

} 


public function save_subscription() {
        $json = file_get_contents('php://input');
        $data = json_decode($json);

        // Store the endpoint, keys in DB for later use
        $insert = [
            'endpoint' => $data->endpoint,
            'p256dh' => $data->keys->p256dh,
            'auth' => $data->keys->auth,
        ];
        $this->db->insert('push_subscriptions', $insert);
    }

    public function send_push($title = 'Payment Saved', $body = 'New member payment recorded.') {
        require_once(APPPATH . 'libraries/WebPush/vendor/autoload.php');

        $auth = [
            'VAPID' => [
                'subject' => 'mailto:you@example.com',
                'publicKey' => '<YOUR_PUBLIC_VAPID_KEY>',
                'privateKey' => '<YOUR_PRIVATE_VAPID_KEY>',
            ],
        ];

        $webPush = new \Minishlink\WebPush\WebPush($auth);
        $subscriptions = $this->db->get('push_subscriptions')->result();

        foreach ($subscriptions as $sub) {
            $subscription = \Minishlink\WebPush\Subscription::create([
                'endpoint' => $sub->endpoint,
                'publicKey' => $sub->p256dh,
                'authToken' => $sub->auth,
            ]);

            $webPush->sendOneNotification($subscription, json_encode([
                'title' => $title,
                'body' => $body,
            ]));
        }

        foreach ($webPush->flush() as $report) {
            if ($report->isSuccess()) {
                echo "Notification sent successfully.";
            } else {
                echo "Notification failed: " . $report->getReason();
            }
        }
    }
   

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
       $this->Notify_model->update($fields);
   }

    
}



?>