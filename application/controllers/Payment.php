<?php
class Payment extends CI_Controller{
	public function payment_first()
	{
		$product = array();
		$this->session->set_userdata('status','product');
		$this->load->model('books');
		$this->books->add_to_cart($_POST);
		
		$product = $_POST;

		$this->load->view('private/payment_first',['product'=>$product]);
		//print_r($product);
	}
	public function payment_second()
	{
		$this->load->model('books');
		$this->books->add_to_order($_POST);
		return redirect('loadbooks');
	}
}
?>