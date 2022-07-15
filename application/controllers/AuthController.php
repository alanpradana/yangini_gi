<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function index()
    {
        $data['title']="login";
        $this->load->view('auth/login',$data);
    }

    public function register()
    {
        $this->load->view('auth/register');
    }


    //hapusdatakriteria
    function hapusKriteria($id)
    {
		$where = [
			"id" => $id
		];
	  $this->db->where($where);
	  $this->db->delete('kode_kriteria');
	  return redirect("welcome/table2");
    }

    //hapusdatakriteria
    function hapusAlternatif($id)
    {
		$where = [
			"id" => $id
		];
	  $this->db->where($where);
	  $this->db->delete('alternatif');
	  return redirect("welcome/table3");
    }


    //Data Kriteria
  function kodekriteria()
  {
    return $this->db->get('kode_kriteria');
  }

  //data kriteria
  function tambahkodekriteria()
  {
    $dataKriteria=$this->input->post('kodeKriteria');
    $kriteria=$this->input->post('kriteria');
    $bobotNilai=$this->input->post('bobotNilai');
    $data=[
      'kode_kriteria'=> $dataKriteria,
      'kriteria'=> $kriteria,
      'bobot_nilai'=> $bobotNilai
    ];

    $this->db->insert('kode_kriteria',$data);
    redirect('welcome/table2');
  }

  //data peternak
  function datapeternak()
  {
    return $this->db->get('data_peternak');
  }

  //data peternak
  function tambahdatapeternak()
  {

    $nama_peternak=$this->input->post('nama_peternak');
    $keadaan_ekonomi=$this->input->post('keadaan_ekonomi');
    $pendidikan_terakhir=$this->input->post('pendidikan_terakhir');
    $jumlah_tanggungan=$this->input->post('jumlah_tanggungan');
    $jumlah_pengeluaran=$this->input->post('jumlah_pengeluaran');
    $lokasi_ternak= $this->input->post('lokasi_ternak');
    $data=[
      'nama_peternak'=>$nama_peternak,
      'keadaan_ekonomi'=>$keadaan_ekonomi,
      'pendidikan_terakhir'=>$pendidikan_terakhir,
      'jumlah_tanggungan'=>$jumlah_tanggungan,
      'jumlah_pengeluaran'=>$jumlah_pengeluaran,
      'lokasi_ternak'=>$lokasi_ternak
    ];
    $this->db->insert('data_peternak',$data);
    redirect('welcome/table1');
  }

  //data alternatif
  function dataalternatif()
  {
    return $this->db->get('alternatif');
  }
  function tambahdataalternatif()
  {
    $kode_alternatif=$this->input->post('kode_alternatif');
    $nama_alternatif=$this->input->post('nama_alternatif');
    $data=[
      'kode_alternatif'=>$kode_alternatif,
      'nama_alternatif'=>$nama_alternatif,
    ];
    $this->db->insert('alternatif',$data);
    redirect('welcome/table3');
  }

}
