<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/content');
		$this->load->view('template/footer');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('AuthController/login');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$data = $this->db->get_where('user', ['email' => $email])->row_array();
			if ($data) {
				if (password_verify($password, $data['password'])) {
					redirect('welcome');
				} else {
					redirect('AuthController/login');
				}
			} else {
				redirect('AuthController/login');
			}
		}
	}

	public function register()
	{
		$Full_name = $this->input->post('Full_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = [
			'nama' => $Full_name,
			'email' => $email,
			'role_id' => 1,
			'aktif' => 1,
			'password' => password_hash($password, PASSWORD_DEFAULT)
		];

		$this->db->insert('user', $data);
		redirect('AuthController');
	}

	// TABEL
	public function table1()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['table1'] = $this->db->get('data_peternak')->result_array();
		$data['title'] = "Data Peternak";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/table1');
		$this->load->view('template/footer');
	}

	//  proses tambah kriteria
	public function tambahdatapeternak()
	{
		$nama_peternak = $this->input->post('nama_peternak');
		$keadaan_ekonomi = $this->input->post('keadaan_ekonomi');
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
		$jumlah_tanggungan = $this->input->post('jumlah_tanggungan');
		$jumlah_pengeluaran = $this->input->post('jumlah_pengeluaran');
		$lokasi_ternak = $this->input->post('lokasi_ternak');

		$data = [
			'nama_peternak' => $nama_peternak,
			'keadaan_ekonomi' => $keadaan_ekonomi,
			'pendidikan_terakhir' => $pendidikan_terakhir,
			'jumlah_tanggungan' => $jumlah_tanggungan,
			'jumlah_pengeluaran' => $jumlah_pengeluaran,
			'lokasi_ternak' => $lokasi_ternak,
		];

		$this->db->insert('data_peternak', $data);
		redirect('AuthController/datapeternak');
	}

	public function table2()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['table2'] = $this->db->get('kode_kriteria')->result_array();
		$data['title'] = "Data Kriteria";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/table2');
		$this->load->view('template/footer');
	}
	//  proses tambah kriteria
	public function tambahkodekriteria()
	{
		$kode_kriteria = $this->input->post('kode_kriteria');
		$kriteria = $this->input->post('kriteria');
		$bobot_nilai = $this->input->post('bobot_nilai');

		$data = [
			'kode_kriteria' => $kode_kriteria,
			'kritria' => $kriteria,
			'bobot_nilai' => $bobot_nilai,
		];

		$this->db->insert('kode_kriteria', $data);
		redirect('AuthController/kodekriteria');
	}

	function hapusKriteria($id)
	{
		$where = [
			'id_table2' => $id
		];
		$this->AuthController->hapusKriteria($where);
		redirect('Welcome/table2');
	}

	public function table3()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['items'] = $this->db->get('alternatif')->result_array();
		$data['title'] = "Data Alternatif";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/table3');
		$this->load->view('template/footer');
	}

	public function tambahdataalternatif()
	{
		$kode_alternatif = $this->input->post('kode_alternatif');
		$nama_alternatif = $this->input->post('nama_alternatif');
		$data = [
			'kode_alternatif' => $kode_alternatif,
			'nama_alternatif' => $nama_alternatif,
		];
		$this->db->insert('alternatif', $data);
		redirect('AuthController/dataalternatif');
	}

	public function user()
	{
		$data["users"] = $this->db->get('user')->result_array();
		$data['title'] = "Data User";
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/header');
		$this->load->view('dashboard/user', $data);
		$this->load->view('template/footer');
	}

	public function perhitungan()
	{
		//
	}
}
