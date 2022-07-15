<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['items'] = $this->db->get('kriteria')->result_array();
		$data['title'] = "Data Peternak";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/kriteria/index');
		$this->load->view('template/footer');
	}

	public function create()
	{
		$data = [
			"kode_kriteria" =>  $this->input->post("kode_kriteria"),
			"nama_kriteria" => $this->input->post("nama_kriteria"),
			"bobot_kriteria" => $this->input->post("bobot_kriteria")
		];

		$this->db->insert('kriteria', $data);
		redirect('Kriteria');
	}

	public function destroy($id)
	{
		$this->db->where('id', $id);
		$this->db->delete("kriteria");
		redirect('Kriteria');
	}
}
