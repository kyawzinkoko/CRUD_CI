<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function create()
    {
        if(isset($_POST ['create'])){
            $this->load->model('Product_model');

            if ($this->Product_model->create_product())
            {
                $this->session->set_flashdata('success','Product Added Successfully');
                redirect('product/create','refresh');
            } else {
                $this->session->set_flashdata('error','An Error occured.Please Tryagain');
                redirect ('product/create','refresh');

            }
        }
        $this->load->view('create_product');
    }

}
