<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FavoriteSites extends CI_Controller {
	public function index()
	{
		$this->load->view('favoritesites_view');
		
	}
}