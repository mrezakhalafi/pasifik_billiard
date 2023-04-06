<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index(){
	$this->_gotoPage();   

	$data['user'] = $this->db->get_where('tb_user',['username' => $this->session->userdata('username')])->row_array();

	$this->load->view('staff',$data);
	}

	private function _gotoPage(){

		if ($this->session->userdata('role') == 1){
			redirect('admin');
		}

		if ($this->session->userdata('role') == 2){
			redirect('user');
		}

		if($this->session->userdata('role') == NULL){
			redirect('homepage');
		}
	}

}
