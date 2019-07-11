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
                redirect('product/show','refresh');
            } else {
                $this->session->set_flashdata('error','An Error occured.Please Tryagain');
                redirect ('product/show','refresh');

            }
        }
        $this->load->view('create_product');
    }
    public function show()
    {
        $this->load->model('Product_model');
        $products = $this->Product_model->get_all_products();
        $data['products'] = $products;
        $this->load->view('show',$data);
    }
    public function update($id)
    {
        $this->load->model('Product_model');

         if(isset($_POST ['update'])){

            if ($this->Product_model->updateproduct($id))
            {
                $this->session->set_flashdata('success','Product Added Successfully');
                redirect('product/update/'. $id,'refresh');
            } else {
                $this->session->set_flashdata('error','An Error occured.Please Tryagain');
                redirect ('product/update/'. $id,'refresh');

            }
        }
        $data['product'] = $this->Product_model->getProduct($id);
        $this->load->view('update',$data);
    }

}
