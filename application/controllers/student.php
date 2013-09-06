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

	function register()
	{
		$phone_number = $_POST['phone_number'];
		$this->registration_form($phone_number, $this->Student_model->check_if_exists($phone_number));
	}

	function registered()
	{
		$data = $_POST;
		$for_db = $this->Student_model->prepare_data_array($data);
		echo '<pre>';
		var_dump($for_db);
		echo '</pre>';
		$this->Student_model->write_to_db($for_db);
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
