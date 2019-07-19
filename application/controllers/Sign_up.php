<?php
class Sign_up extends CI_Controller{
	public function load_signup()
	{
		if( $this->session->userdata('user_id'))	
				return redirect('loadbooks');
		$this->load->helper('form');
		$this->load->view('public/sign_up');
	}
	public function load_login()
	{
		if( $this->session->userdata('user_id'))	
				return redirect('loadbooks');
		$this->load->helper('form');
		$this->load->view('public/login');
	}
	public function signup()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname','First Name','required|min_length[2]|max_length[30]|trim');
		$this->form_validation->set_rules('lname','Last Name','required|min_length[2]|max_length[30]|trim');
		$this->form_validation->set_rules('birthdate','Birthdate','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[30]|trim|is_unique[users.username]');
		$this->form_validation->set_rules('password','Password','required|min_length[5]|max_length[30]|trim|is_unique[users.password]');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run())
		{
			$fname		=$this->input->post('fname');
			$lname		=$this->input->post('lname');
			$birthdate  =$this->input->post('birthdate');
			$gender		=$this->input->post('gender');	
			$email 		=$this->input->post('email');
			$username 	=$this->input->post('username');
			$password 	=$this->input->post('password');
			$data =array(
				'fname'=>$fname,
				'lname'=>$lname,
				'birthdate'=>$birthdate,
				'gender'=>$gender,
				'email'=>$email,
				'username'=>$username,
				'password'=>$password,
			);
			$this->load->model('books');
			if($this->books->create_user($data))
			{
				$this->session->set_userdata('user_id',$uid);
			}
			return $this->redirectAndFlash($this->load->view('public/index'),"Account created successful","Account not created successful");
		}
		else
		{
			//fails
			//echo "Validation failed";
			$this->load->view('public/sign_up');
			//echo validation_errors();
		}
	}
	private function redirectAndFlash($successful,$successmsg,$failmsg)
		{
			if($successful)
				{
					$this->session->set_flashdata('feedback',$successmsg);
					$this->session->set_flashdata('feedback_class','alert-success');
				}
				else
				{
					$this->session->set_flashdata('feedback',$failmsg);
					$this->session->set_flashdata('feedback_class','alert-danger');
				}
				return redirect('mainpage/index');
		}
		public function login()
		{
			$uid = $this->input->post('uid');
			$pw = $this->input->post('pw');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('uid','User Name','required|alpha|max_length[21]|trim');
			$this->form_validation->set_rules('pw','Password','required');
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
			$this->load->model('books');
			if($this->form_validation->run())
			{
				if($this->books->login_check($uid,$pw))
				{
					$this->session->set_userdata('user_id',$uid);
					return redirect('loadbooks');
				}
				else{
					$this->load->helper('form');
					$this->session->set_flashdata('fail_msg','Login Credential are invalid');
					$this->load->view('public/login');
				}
			}else
			{

				$this->load->helper('form');
				$this->load->view('public/login');
	
			}
		}
		public function logout()
		{
			echo "<script>alert('Heelo');</script>";
			$this->session->unset_userdata('user_id');
			return redirect('mainpage'); 
		}
		
}

?>