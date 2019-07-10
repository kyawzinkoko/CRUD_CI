<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_model
{

  function create_product()
   {

      $data = array(
        'name'          => $this->input->post('name'),
        'price'         => $this->input->post('price'),
        'quantity'      => $this->input->post('quantity'),
        'description'   => $this->input->post('description'),
        );

      $this->db->insert('productc',$data);
      $id = $this->db->insert_id();
      return $id;
    }
}
