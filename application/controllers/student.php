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

	function check_number($phone_number)
	{
		$phone_check = $this->Student_model->check_if_exists($phone_number);

		if ($phone_check === true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function register()
	{
		$phone_number = $_POST['phone_number'];
		$this->registration_form($phone_number, $this->check_number($phone_number));
	}

	function registration_form($phone_number, $exists)
	{
		if ($exists === true)
		{
			$dataset = $this->Student_model->load_existing_by_number($phone_number);
			$data['info'] = array_slice($dataset, 0, 5);
			$data['selected_courses'] = array_slice($dataset, 5);

			$this->load->view('html_head');
			$this->load->view('registration_form', $data);
			$this->load->view('html_foot');
		}
		else
		{
			$dataset = $this->db->list_fields('students');
			$data['info'] = array('student_phone' => $phone_number);
			$data['default_courses'] = array_slice($dataset, 5);

			$this->load->view('html_head');
			$this->load->view('registration_form', $data);
			$this->load->view('html_foot');
		}

	}
}
?>
