<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_jadwal extends CI_Model {
	
	public function getJadwal()
	{
		$query=Array();
		$sqlJadwal = "select jadwal.sesi, jadwal.hari, dosen.nama_dosen, matkul.kode_mk, matkul.nama_matkul, matkul.sks, kelas.nama_kelas, ruang.nama_ruang from jadwal, dosen, matkul, kelas, ruang";
		$query = $this->db->query($sqlJadwal)->result_array();
		return $query;
	}

	function insert($data)
	{
		$newdata = array('');
	}

	/*
	public function getData()
	{
		$query=Array();
		$sqlData = "select dosen.nama_dosen, matkul.kode_mk, matkul.nama_matkul, matkul.sks, kelas.nama_kelas from dosen, matkul, kelas;";
		$query = $this->db->query($sqlData)->result_array();
		return $query;
	}
	*/
}
