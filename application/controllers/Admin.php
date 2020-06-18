<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index(){
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        // alumni laut
        $data['alumniPelaut'] = $this->db->get_where('alumni',['profesi'=>'pelaut'])->result_array();

        // alumni militer
        $data['alumniMiliter'] = $this->db->get_where('alumni',['profesi'=>'militer'])->result_array();

        // alumni darat
        $data['alumniDarat'] = $this->db->get_where('alumni',['profesi'=>'darat'])->result_array();

        
        $this->load->view('temp/admin_header', $data);
        $this->load->view('temp/admin_sidebar', $data);
        $this->load->view('temp/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('temp/admin_footer');
        
    }

}