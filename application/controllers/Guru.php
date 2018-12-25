<?php 

class Guru extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'guru';
	}

	public function index()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function data_kelas()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'kelas';
		$this->template($this->data, $this->module);
	}

	public function data_absen()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'absen';
		$this->template($this->data, $this->module);
	}

	public function data_siswa()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'siswa';
		$this->template($this->data, $this->module);
	}

	public function data_nilai()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'nilai';
		$this->template($this->data, $this->module);
	}

	public function data_mata_pelajaran()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}
}