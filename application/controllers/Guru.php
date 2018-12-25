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

	public function data_absensi()
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

	public function data_penilaian()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'nilai';
		$this->template($this->data, $this->module);
	}

	public function data_jadwal()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'jadwal';
		$this->template($this->data, $this->module);
	}

	public function input_nilai()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'input_nilai';
		$this->template($this->data, $this->module);
	}
}