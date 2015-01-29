<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengganti extends CI_Model {
	
	public function getPengganti()
	{
		$query=Array();
		$sqlPengganti = "select jadwal.sesi, jadwal_pengganti.tanggal, dosen.nama_dosen, matkul.kode_mk, matkul.nama_matkul, matkul.sks, kelas.nama_kelas, ruang.nama_ruang from jadwal, jadwal_pengganti, dosen, matkul, kelas, ruang";
		$query = $this->db->query($sqlPengganti)->result_array();
		return $query;
	}
}
