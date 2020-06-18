<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{

        public function index()
        {
                

                // title
                $data['title'] = 'Alumni';

                // User Login
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                // banner alumni
                $data['banner'] = $this->db->get_where('content', ['type' => 'banner-alumni'])->row_array();

                // about
                $data['about'] = $this->db->get_where('content', ['type' => 'about'])->row_array();

                // alumni pelaut
                $data['alumni_laut'] = $this->db->get_where('alumni', ['profesi' => 'pelaut'])->result_array();

                // alumni darat
                $data['alumni_darat'] = $this->db->get_where('alumni', ['profesi' => 'darat'])->result_array();

                // alumni pelaut
                $data['alumni_militer'] = $this->db->get_where('alumni', ['profesi' => 'militer'])->result_array();

                $this->load->view('temp/header', $data);
                $this->load->view('alumni', $data);
                $this->load->view('temp/footer');
        }
        public function pelaut()
        {
                // title
                $data['title'] = 'Alumni Pelaut';

                // User Login
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                // banner alumni
                $data['banner'] = $this->db->get_where('content', ['type' => 'banner-alumni'])->row_array();

                // alumni pelaut
                $data['daftarAlumni'] = $this->db->get_where('alumni', ['profesi' => 'pelaut'])->result_array();

                $this->load->view('temp/header', $data);
                $this->load->view('daftar-alumni');
                $this->load->view('temp/footer');
        }
        public function militer()
        {
                // title
                $data['title'] = 'Alumni Militer';

                // User Login
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                // banner alumni
                $data['banner'] = $this->db->get_where('content', ['type' => 'banner-alumni'])->row_array();

                // alumni pelaut
                $data['daftarAlumni'] = $this->db->get_where('alumni', ['profesi' => 'militer'])->result_array();

                $this->load->view('temp/header', $data);
                $this->load->view('daftar-alumni');
                $this->load->view('temp/footer');
        }
        public function darat()
        {
                // title
                $data['title'] = 'Alumni Darat';

                // User Login
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                // banner alumni
                $data['banner'] = $this->db->get_where('content', ['type' => 'banner-alumni'])->row_array();

                // alumni pelaut
                $data['daftarAlumni'] = $this->db->get_where('alumni', ['profesi' => 'darat'])->result_array();

                $this->load->view('temp/header', $data);
                $this->load->view('daftar-alumni');
                $this->load->view('temp/footer');
        }
}
