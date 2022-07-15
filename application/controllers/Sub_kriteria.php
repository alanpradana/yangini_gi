<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sub_kriteria extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['items'] = $this->db->get('sub_kriteria')->result_array();
		$data['title'] = "Sub kriteria";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/sub_kriteria/index');
		$this->load->view('template/footer');
	}
}
