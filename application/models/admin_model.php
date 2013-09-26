<?php

class Admin_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insert_group($group)
	{
		$this->db->insert('groups', $group);
	}

	function insert_user($user)
	{
		$this->db->insert('users', $user);
	}

	function load_groups()
	{

		$sql = "SELECT * FROM groups";
		$query = $this->db->query($sql);

		$count=$query->num_rows(); 

			if ($count > 0){
			
			foreach($query->result_array() as $result){
			$dataset= $result;
			$groups[]= $dataset;

			}

			return $groups;
		}

		else echo 'no result';
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

}	
	
?>