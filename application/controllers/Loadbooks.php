<?php
	class Loadbooks extends CI_Controller{
		public function __construct()
		{
			
			parent::__construct();
			if(! $this->session->userdata('user_id'))	
				return redirect('mainpage');
			
			$this->load->helper('form');
			
		}

		public function index()
		{
			$this->load->model('books');
			$result = $this->books->book_list();
			$this->load->view('private/menubar',['result'=>$result]);
		}
		public function feedback()
		{
			$this->load->model('books');
			$result = $this->books->book_list();
			$this->load->view('private/feedback');
		}
		public function record_feedback()
		{

			

			$this->load->model('books');
			if($this->books->feedback($_POST))
				$this->session->set_flashdata('msg','Feedback Successfully Submitted');
			else
				$this->session->set_flashdata('msg','Feedback Unsuccessfully');
			$this->load->view('private/feedback');
		}
		public function load_order(){
			$this->load->model('books');
			$orders = $this->books->get_order();
			/*echo "<pre>";
			print_r($orders);
			echo "</pre>";*/
			$this->load->view('private/orders',['orders' =>$orders]);
		}
		public function load_cart(){
			$this->load->model('books');
			$orders = $this->books->get_cart();
			/*echo "<pre>";
			print_r($orders);
			echo "</pre>";*/
			$this->load->view('private/cart',['orders' =>$orders]);
		}
	
	public function fg_pw()
	{
		$this->session->set_userdata('pw','forgot');
	}
	public function record_pw()
	{
		$this->session->set_userdata('pw','forgot');
	}
	public function delete_order()
	{
		
		$this->load->model('books');
		//print_r($_POST);
		$this->books->delete_ord($_POST);
		//$this->load_order();
		return $this->load_order();
	}
	public function delete_cart()
	{
		
		$this->load->model('books');
		//print_r($_POST);
		$this->books->delete_crt($_POST);
		//$this->load_cart();
		return $this->load_cart();
	}
}
?>