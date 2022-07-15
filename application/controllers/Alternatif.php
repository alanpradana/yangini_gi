<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['items'] = $this->db->get('alternatif')->result_array();
		$data['title'] = "Data Alternatif";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/table3');
		$this->load->view('template/footer');
	}

    public function create()
	{
		$kode_alternatif = $this->input->post('kode_alternatif');
		$nama_alternatif = $this->input->post('nama_alternatif');
		$data = [
			'kode_alternatif' => $kode_alternatif,
			'nama_alternatif' => $nama_alternatif,
		];
		$this->db->insert('alternatif', $data);
		redirect('Alternatif/index');
	}
    //hapusdatakriteria
    function destroy($id)
    {
		$where = [
			"id" => $id
		];
	  $this->db->where($where);
	  $this->db->delete('alternatif');
	  return redirect("Alternatif/index");
    }
}

