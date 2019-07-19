<?php

class Mainpage extends CI_Controller{
	public function __construct()
		{
			
			parent::__construct();
			
			if( $this->session->userdata('user_id'))	
				return redirect('loadbooks');
			
			$this->load->helper('form');
			
		}

	public function index()
	{
		
		$this->load->view('public/index');

	}
	public function forgot_password()
	{
		
	}
	public function play_song()
	{
		$this->load->view('Audio player/main');
	}
}
?>