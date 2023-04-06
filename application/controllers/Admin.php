<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
	$this->_gotoPage();   

	$data['user'] = $this->db->get_where('tb_user',['username' => $this->session->userdata('username')])->row_array();

	$this->load->view('admin',$data);
	}

	private function _gotoPage(){

		if ($this->session->userdata('role') == 2){
			redirect('user');
		}

		if ($this->session->userdata('role') == 3){
			redirect('staff');
		}

		if($this->session->userdata('role') == NULL){
			redirect('homepage');
		}
	}

}
