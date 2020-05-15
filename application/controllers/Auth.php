<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');

		if($this->form_validation->run() == false){
			$data['title'] = 'Login';
			$this->load->view('temp/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('temp/auth_footer');
		}else{
			$this->_login();
		}
	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['email'=>$email])->row_array();
		
		if($user){
			// user ada
			if($user['is_active'] == 1){
				//user aktiv
				if(password_verify($password,$user['password'])){
					//password sesuai
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id'] == 1){
						redirect('admin');
					}else{
						redirect('user');
					}
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">This email is not been activated!</div>');
				redirect('auth');
			}
		}else{
			// user tidak ada
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth');
		}

	}

	public function register()
	{
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');


		if($this->form_validation->run() == false){
			$data['title'] = 'Register';
			$this->load->view('temp/auth_header', $data);
			$this->load->view('auth/register');
			$this->load->view('temp/auth_footer');
		}else{
			$data = [
				'name'  => htmlspecialchars($this->input->post('name'),true),
				'email' => htmlspecialchars($this->input->post('email'),true),
				'image' => 'default.png',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			// Model
			$this->db->insert('user',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please login!</div>');
			redirect('auth');

		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">You have been logged out!</div>');
			redirect('auth');
	}
}
