<?php
class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

function create_groups()
	    {
	    	$this->load->view('html_head');
			$this->load->view('create_groups');
			$this->load->view('html_foot');
	    }	

	function group_created()
		{
			$group['Name'] = $_POST['name'];
			$this->Admin_model->insert_group($group);

			$this->load->view('html_head');
			$this->load->view('group_created', $group);
			$this->load->view('html_foot');
		}

	function create_users()
	    {

	    	$groups['Name']=$this->Admin_model->load_groups();
	    	$this->load->view('html_head');
			$this->load->view('create_users', $groups);
			$this->load->view('html_foot');
	    }	

	 function user_created()
		{
			$user['Name']= $_POST['name'];
			$user['Phone']=$_POST['phone'];
			$user['groups']=(serialize($_POST['group']));
			$this->Admin_model->insert_user($user);

			$this->load->view('html_head');
			$this->load->view('user_created', $user);
			$this->load->view('html_foot');
		}
	}
?>	