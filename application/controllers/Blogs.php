<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Controller
{

	public function index()
	{
		if ($this->input->get('id')) {
			$data['tampil_berita'] = $this->db->get_where('news', ['id'=> $this->input->get('id')])->row_array(); 
		}else{
			$data['tampil_berita'] = false;
		}
		// title
		$data['title'] = 'Berita Terbaru';

		// User Login
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['news'] = $this->db->get('news')->result_array();

		$this->load->view('temp/header', $data);
		$this->load->view('blogs', $data);
		$this->load->view('temp/footer');
	}
}
