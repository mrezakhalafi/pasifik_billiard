<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index(){
	$this->_gotoPage();   

	$this->load->view('homepage');

	}

	private function _gotoPage(){

		if ($this->session->userdata('role') == 1){
			redirect('admin');
		}

		if ($this->session->userdata('role') == 2){
			redirect('user');
		}

		if($this->session->userdata('role') == 3){
			redirect('staff');
		}
	}

	public function tambahUser(){

		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[password2]',['matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!']);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password]');
		$this->form_validation->set_rules('alamat','Alamat','required');

		if ($this->form_validation->run() == FALSE) {
		$this->load->view('homepage');
		}else{

		$data = [
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"jenis_kelamin" => $this->input->post('jenis_kelamin', true),		
			"email" => $this->input->post('email', true),
			"password" => password_hash($this->input->post('password', true),PASSWORD_DEFAULT),
			"alamat" => $this->input->post('alamat', true),
			"role" => 2
		];

			$this->db->insert('tb_user',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data role berhasil ditambahkan!</div>');
			redirect('Homepage');
		}
	}	

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');		
		
		$user = $this->db->get_where('tb_user',['username' => $username])->row_array();

		if($username==null && $password==null){
			$result = 0;
		}elseif($password==null){
			$result = 1;
		}elseif($username==null){
			$result = 2;
		}else{
		if($user['username'] == $username){
			if(password_verify($password, $user['password'])){
				$data = [
						'username' => $user['username'],
						'role' => $user['role']
					];
				$this->session->set_userdata($data);
				if($user['role']==1){
					$result = 10;
				}elseif($user['role']==2){
					$result = 20;
				}elseif($user['role']==3){
					$result = 30;
				}
			}else{
				$result = 4;
			}
		}else{
			$result = 3;
		}
	}	
		echo json_encode($result);
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		redirect('homepage');
	}
}