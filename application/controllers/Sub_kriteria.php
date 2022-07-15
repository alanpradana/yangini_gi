<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sub_kriteria extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['items'] = $this->db->get('sub_kriteria')->result_array();
		$data['items_kriteria'] = $this->db->get('kriteria')->result_array();
		$data['title'] = "Sub kriteria";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/sub_kriteria/index');
		$this->load->view('template/footer');
	}

	public function create()
	{
		$data = [
			'kretera_id' => $this->input->post('kretera_id'),
			'sub_kriteria' => $this->input->post('sub_kriteria'),
			'bobot_nilai' => $this->input->post('bobot_nilai'),
		];
		$this->db->insert('sub_kriteria', $data);
		redirect('Sub_kriteria');
	}

	public function edit($id)
	{
		$this->db->set('kretera_id', $this->input->post('kretera_id'));
		$this->db->set('sub_kriteria', $this->input->post('sub_kriteria'));
		$this->db->set('bobot_nilai', $this->input->post('bobot_nilai'));
		$this->db->where(["id" => $id]);
		$this->db->update('sub_kriteria');
		redirect('Sub_kriteria');
	}
}
