<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhotoGallery extends CI_Controller {
	public function index()
	{
		$this->load->view('photogallery_view');
		
	}
}