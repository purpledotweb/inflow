<?php
class Student extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Student_model');

	}

	function welcome()
	{
		$this->load->view('html_head');
		$this->load->view('number_check');
		$this->load->view('html_foot');
	}

	function check_number()
	{
		$phone_number = $_POST['phone_number'];
		$phone_check = $this->Student_model->check_if_exists($phone_number);

		if ($phone_check === true)
		{
			// if number exists, load filled out form
			$this->load_existing_by_number($phone_number);
		}
		else
		{
			// if number does not exist, load empty form
			$this->register_new($phone_number);
		}
	}

	function register_new($phone_number)
	{
		$data['phone_number'] = $phone_number;
		$this->load->view('html_head');
		$this->load->view('registration_form', $data);
		$this->load->view('html_foot');
	}

	function load_existing_by_number($phone_number)
	{
		$data = $this->Student_model->load_existing_by_number($phone_number);
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
		$this->load->view('html_head');
		$this->load->view('registration_form', $data);
		$this->load->view('html_foot');	}
}
?>
