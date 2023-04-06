<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
	$this->_gotoPage();   

	$data['user'] = $this->db->get_where('tb_user',['username' => $this->session->userdata('username')])->row_array();

	$this->load->view('user',$data);
	}

	private function _gotoPage(){

		if ($this->session->userdata('role') == 1){
			redirect('admin');
		}

		if ($this->session->userdata('role') == 3){
			redirect('staff');
		}

		if($this->session->userdata('role') == NULL){
			redirect('homepage');
		}
	}

}
