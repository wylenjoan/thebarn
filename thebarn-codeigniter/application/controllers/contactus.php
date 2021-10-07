<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {
	
	public function index()	{
		$data['contacts'] = $this->contact_model->get_contacts();
		$this->load->view('contactus_view', $data);		
	}

	public function create() {
		// $data['contacts'] = $this->contact_model->get_contacts();

		$this->form_validation->set_rules('name', 'name', 'required|is_unique[contacts.name]');
		$this->form_validation->set_rules('message', 'message', 'required');
		
		if($this->form_validation->run() === FALSE) {
			$data['contacts'] = $this->contact_model->get_contacts();
			$this->load->view('contactus_view', $data);	
		} else {
			$name = $this->input->post('name');
			$message = $this->input->post('message');
			if (!empty($name) && !empty($message)) {
				$this->contact_model->insert_contact($name, $message);
				redirect('contactus');
			}
		}
	}
}