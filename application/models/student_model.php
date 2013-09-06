<?php

class Student_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function check_if_exists($phone_number)
	{
	   	$query = $this->db->get_where('students', array('student_phone' => $phone_number));
        $count = $query->num_rows();

        if($count === 0)
        {
        	return false;
        } else {
        	return true;
        }
	}

	function load_existing_by_number($phone_number)
	{
		$sql = "SELECT * FROM students WHERE student_phone = ?";
		$query = $this->db->query($sql, ($phone_number));

		foreach($query->result_array() as $result){
			$dataset = $result;
		}

		return $dataset;
	}

	function write_to_db($data) {
		$datatest = $data;
		return $datatest;
	}
}
?>