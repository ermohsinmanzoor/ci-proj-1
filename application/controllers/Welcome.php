<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message.php');
	}

	public function myview()
	{
		echo "Welcome to the codeigniyter project!";
		$this->load->view('myview.php');
	}
}

// http://127.0.0.1/ci-proj-1/index.php/welcome/myview

// base_url = http://127.0.0.1/ci-proj-1/index.php/

// controller = welcome

// method/functio = myview