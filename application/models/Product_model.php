<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_model
{

  function create_product()
   {

      $data = array(
        'name'              => $this->input->post('name'),
        'price'             => $this->input->post('price'),
        'company_name'      => $this->input->post('company_name'),
        'quantity'          => $this->input->post('quantity'),
        'description'       => $this->input->post('description'),
        );

      $this->db->insert('products',$data);
      $id = $this->db->insert_id();
      return $id;
    }
    function get_all_products()
    {
       $this->db->select('*');
       $this->db->from('products');
       $query = $this->db->get();
       return $query->result();
    }
}
