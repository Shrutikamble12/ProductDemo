<?php
  class Cart_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
      public function insertdata($model)
	{
		return $this->db->insert('products',$model);
			//return $sql->result();
	} 

  public function insert_product($data) {
    $this->db->insert('products', $data);
    return $this->db->insert_id();
}



  public function getdetailCart()
  {      
   
     $this->db->select('products.id,products.name,products.price,product_images.image_path');
     $this->db->from('products');
   $this->db->join('product_images','products.id = product_images.product_id','left');
     $this->db->order_by('products.id','DESC');
     $query = $this->db->get();
     return $query->result();
          
  }

public function insert_image($data) {
    return $this->db->insert('product_images', $data);
}

public function get_all_products() {
    $this->db->select('p.*, GROUP_CONCAT(pi.image_path) as images');
    $this->db->from('products p');
    $this->db->join('product_images pi', 'p.id = pi.product_id', 'left');
    $this->db->group_by('p.id');
    return $this->db->get()->result();
}


public function add_to_cart($data) {
    return $this->db->insert('cart_items', $data);
}

public function get_cart_items($user_id) {
    $this->db->select('c.*, p.name, p.price, pi.image_path');
    $this->db->from('cart_items c');
    $this->db->join('products p', 'c.product_id = p.id', 'left');
    $this->db->join('product_images pi', 'p.id = pi.product_id', 'left');
    $this->db->where('c.user_id', $user_id);
    $this->db->group_by('c.id'); // Each cart entry
    return $this->db->get()->result();
}


public function update_product($productId, $data) {
    $this->db->where('id', $productId);
    return $this->db->update('products', $data);
}

public function delete_images_by_product($productId) {
    // Optional: Delete files from the server too if you want
    $images = $this->db->get_where('product_images', ['product_id' => $productId])->result();
    foreach ($images as $img) {
        $file = FCPATH . $img->image_path;
        if (file_exists($file)) {
            unlink($file);
        }
    }

    // Delete image records
    $this->db->where('product_id', $productId);
    $this->db->delete('product_images');
}



public function getbyid($id)
{
    $this->db->select('products.id, products.name, products.price, product_images.image_path');
    $this->db->from('products');
    $this->db->join('product_images', 'products.id = product_images.product_id', 'left');
    $this->db->where('products.id', $id);
    $query = $this->db->get(); // ✅ Remove 'products' from here
    return $query->result();
}


}



