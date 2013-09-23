<?php

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	function welcome()
	{
		echo "hello, world!";
	/*
		$this->load->view('html_head');
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('slider');
		$this->load->view('side_bar');
		$this->load->view('main_home');
		$this->load->view('footer');
		$this->load->view('html_foot');
	*/
	}
}

?>