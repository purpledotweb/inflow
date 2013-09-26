<?php

class Login_model extends CI_Model {

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



	function load_existing_by_group($group)
	{

		$sql = "SELECT * FROM `users` WHERE group like '%".$group."%'";
		$query = $this->db->query($sql);

		$count=$query->num_rows(); 

			if ($count > 0){
			
			foreach($query->result() as $result){
			$dataset= $result;
			$phone_numbers[]= $dataset->student_phone;


			}
			

			return $phone_numbers;
		}

		else echo 'no result';
	}

	function build_query_string($data)
	{

/*
	$data = array(
           'title' => $title,
           'name' => $name,
           'date' => $date
        );

$this->db->insert('mytable', $data);
*/
	}

	function prepare_data_array($data)
	{
		$columns = $this->db->list_fields('students');
		foreach($columns as $column)
		{
			if(array_key_exists($column, $data))
			{
				echo "if in_array went through: " . $column . " <br>";

				if ($data[$column] == 'on')
				{
					$new_data[$column] = 1;
				}
				else
				{
					$new_data[$column] = $data[$column];
				}
			}
			else
			{

				if ($column != 'id' && $column != 'registration_time')
				{
					echo "if in_array did not go through <br>";
					$new_data[$column] = 0;
				}
			}
		}
		return $new_data;
	}

	function write_to_db($data)
	{
		if($this->check_if_exists($data['student_phone']))
		{
			echo 'nr. exists';
			$this->db->where('student_phone', $data['student_phone']);
			$this->db->update('students', $data);
		}
		else
		{
			echo 'nr. NOT exists';

			$this->db->insert('students', $data);
		}
	}

	

	function login($user)
	{
	   	$query = $this->db->get_where('users', array('Name' => $user['username']));
        $count = $query->num_rows();

        if($count === 0)
        {
        	return false;
        } else {
        	return true;
        }
	}

}	
	
?>