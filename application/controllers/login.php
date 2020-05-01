<?php

class Login extends MY_Controller{
	public function index(){
		
		if($this->session->userdata('id'))
			return redirect('admin/dashboard');
		$this->load->helper('form');
		$this->load->view('public/admin_login.php');


	}
	
	public function admin_login(){
		//echo "Reached Login";
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		//echo "User= $user and Pass= $pass";
		
		$this->load->model('loginmodel');
		$login_id = $this->loginmodel->login_valid($user, $pass);
		if($login_id){
			//echo "Authentication successfull";
			//$this->load->library('session');
			$this->session->set_userdata('id', $login_id);
			//$this->load->view('admin/dashboard');
			return redirect('admin/dashboard');
		}
		else{
			//echo "Athentication failed";
			$this->session->set_flashdata('login_failed','Please Enter correct UserId or Password');
			redirect('login');
			
		}
	}

	public function logout(){
		$this->session->unset_userdata('id');
		return redirect('login');
	}

}