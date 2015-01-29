<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->model('model_jadwal');
		$data['query'] = $this->model_jadwal->getJadwal();
		$this->load->view('view_jadwal',$data);
		$this->load->view('template');
	}

	function insert()
	{
		if($_POST){
		$action = isset($_POST['action']) ? trim(strip_tags($_POST['action'])) : '';
        $pesan = '';
			$nama=trim(strip_tags($_POST['sesi']));
			$id=trim(strip_tags($_POST['id_jadwal']));
			$data['id_jadwal']=$id;
			$data['sesi']=$nama;

			$this->muat($pesan);	
		}
	}

	/*
	public function data()
	{
		$this->load->model('model_jadwal');
		$data['query'] = $this->model_jadwal->getData();
		$this->load->view('view_pengganti',$data);

	}
	*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */