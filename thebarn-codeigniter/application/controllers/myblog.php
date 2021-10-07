<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyBlog extends CI_Controller {
	public function index()
	{
		$this->load->view('myblog_view');
		
	}
}