<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('hello');
	}

	public function greeting($name, $surname)
	{
		$this->load->view('hello', array(
			'name' => $name,
			'surname' => $surname,
		));
	}
}
