<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('common_parts/html_head');
		$this->load->view('common_parts/header');
		$this->load->view('home');
		$this->load->view('common_parts/footer');
		$this->load->view('common_parts/html_foot');
	}
}
