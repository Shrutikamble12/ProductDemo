<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model');
        
    }

    public function index()
	{
        $data['alldata']=$this->Cart_model->getdetailCart();
     
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
        $this->load->view('Cart/Cart_detailview',$data);
		$this->load->view('common/footer_view');
	

	}

    public function create(){
        
        // $data['Mnamedata']=$this->Cart_model->getmembername();
        // $data['Statedata']=$this->bank_model->getState();


		$this->load->view('common/header_view');
		$this->load->view('Cart/Cart_view');
		$this->load->view('common/footer_view');
    }
   
    private function upload_file($file_name, $upload_path = './upload/')
    {
        // Ensure upload directory exists and is writable
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
        }
 
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = 5120; // 5MB
        $config['encrypt_name'] = TRUE; // Use encrypted file names
 
        $this->upload->initialize($config);
 
        if (!$this->upload->do_upload($file_name)) {
            // If upload fails, return false or the current file
            return $this->input->post("hidden_photo{$file_name}");
        } else {
            $upload_data = $this->upload->data();
            return $upload_data['file_name'];
        }
    }



public function insertCart() {
    $name = $this->input->post('name');
    $price = $this->input->post('price');

    $productData = array(
        'name' => $name,
        'price' => $price
    );

    $productId = $this->Cart_model->insert_product($productData);

    // Handle Multiple Images
    if (!empty($_FILES['images']['name'][0])) {
        $filesCount = count($_FILES['images']['name']);
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name'] = $_FILES['images']['name'][$i];
            $_FILES['file']['type'] = $_FILES['images']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['images']['error'][$i];
            $_FILES['file']['size'] = $_FILES['images']['size'][$i];

            $config['upload_path'] = './Assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = time() . '_' . $_FILES['file']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $imageData = array(
                    'product_id' => $productId,
                    'image_path' => 'Assets/uploads/' . $uploadData['file_name']
                );
                $this->Cart_model->insert_image($imageData);
            }
        }
    }

    echo json_encode(['status' => 'success']);
}


public function getProductsApi() {
    $products = $this->cart_model->get_all_products();
    foreach ($products as &$product) {
        $product->images = explode(',', $product->images);
    }
    echo json_encode(['status' => 'success', 'products' => $products]);
}

public function addToCartApi() {
    $product_id = $this->input->post('product_id');
    $quantity = $this->input->post('quantity') ?? 1;

    if (!$product_id) {
        echo json_encode(['status' => 'error', 'message' => 'Product ID is required']);
        return;
    }

    $data = array(
        'user_id' => 1, // Hardcoded user
        'product_id' => $product_id,
        'quantity' => $quantity
    );

    $this->Cart_model->add_to_cart($data);
    echo json_encode(['status' => 'success', 'message' => 'Product added to cart']);
}
public function getCartApi() {
    $user_id = 1; // Hardcoded
    $cartItems = $this->Cart_model->get_cart_items($user_id);

    echo json_encode([
        'status' => 'success',
        'cart' => $cartItems
    ]);
}


   public function update()
   {
       $id=$this->uri->segment(3);
          $data['data']=$this->Cart_model->getbyid($id);
        //   $data['pepardata']=$this->Member_registration_model->getpepar();

        
       //  echo "<pre>";
       // print_r($data);
        
		$this->load->view('common/header_view');
		$this->load->view('Cart/Cart_view',$data);
		$this->load->view('common/footer_view');
   }


public function updateCart() {
    $productId = $this->input->post('id');
    $name = $this->input->post('name');
    $price = $this->input->post('price');

    // 1. Update product details
    $productData = array(
        'name' => $name,
        'price' => $price
    );
    $this->Cart_model->update_product($productId, $productData);

    // 2. Optional: Delete old images (if needed)
    $this->Cart_model->delete_images_by_product($productId);

    // 3. Handle new images upload
    if (!empty($_FILES['images']['name'][0])) {
        $filesCount = count($_FILES['images']['name']);
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['file']['name'] = $_FILES['images']['name'][$i];
            $_FILES['file']['type'] = $_FILES['images']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['images']['error'][$i];
            $_FILES['file']['size'] = $_FILES['images']['size'][$i];

            $config['upload_path'] = './Assets/uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = time() . '_' . $_FILES['file']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $uploadData = $this->upload->data();
                $imageData = array(
                    'product_id' => $productId,
                    'image_path' => 'Assets/uploads/' . $uploadData['file_name']
                );
                $this->Cart_model->insert_image($imageData);
            }
        }
    }

    echo json_encode(['status' => 'success']);
}


    
}



?>