<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	public function index()
	{
		// title        
		$data['title'] = 'Tentang';

		// User Login
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// Telp 
		$data['telp'] = $this->db->get_where('content', ['type' => 'telp'])->row_array();

		// alamat
		$data['alamat'] = $this->db->get_where('content', ['type' => 'alamat'])->row_array();

		$this->load->view('temp/header', $data);
		$this->load->view('about');
		$this->load->view('temp/footer');

		if($this->input->post('message')){
				$data = [
					'name' => $this->input->post('first-name') . ' ' . $this->input->post('last-name'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'message' => $this->input->post('message')
				];

				$this->db->insert('saran', $data);
		}


	}
}
