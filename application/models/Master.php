<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Model
{
	public function getSubKeriteria()
	{
		$this->db->select('kriteria.nama_kriteria, sub_kriteria.id, sub_kriteria.kretera_id, sub_kriteria.sub_kriteria, sub_kriteria.bobot_nilai ')
			->from('sub_kriteria')
			->join('kriteria', 'kriteria.id = sub_kriteria.kretera_id');
		return $this->db->get();
	}
}
