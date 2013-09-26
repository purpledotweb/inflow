<?php
class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Admin_model');
	}

	function index()
	{
		$this->load->view('html_head');
		$this->load->view('index');
		$this->load->view('html_foot');
	}

	function logged_in()
		{
			$user['username']= $_POST['username'];
			$user['password']=$_POST['password'];

			if($this->Login_model->login($user))
			{
				$this->dashboard();
				$this->load->library('session');
				$newdata = array(
                   'username'  => $_POST['username'],
                   'logged_in' => TRUE
               );

				$this->session->set_userdata($newdata);
			}
			else echo "wrong username";
		}	 


	function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->load->view('html_head');
		$this->load->view('index');
		$this->load->view('html_foot');
	}	  	

	function dashboard()
		{
			$groups['Name']=$this->Admin_model->load_groups();
			$this->load->view('html_head');
			$this->load->view('send_sms',$groups);
			$this->load->view('html_foot');
		}	

}
?>
