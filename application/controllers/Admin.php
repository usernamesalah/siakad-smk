<?php 

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'admin';
	}

	public function index()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

    public function data_guru()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'guru';
        $this->template($this->data, $this->module);
    }

    public function data_siswa()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'siswa';
        $this->template($this->data, $this->module);
    }

    public function data_mata_pelajaran()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'mapel';
        $this->template($this->data, $this->module);
    }

    public function data_tahun_ajaran()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'tahun_ajaran';
        $this->template($this->data, $this->module);
    }

    public function data_kelas()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'kelas';
        $this->template($this->data, $this->module);
    }

    public function data_jadwal()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'jadwal';
        $this->template($this->data, $this->module);
    }

    public function data_nilai()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'nilai';
        $this->template($this->data, $this->module);
    }

    public function data_jurusan()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'jurusan';
        $this->template($this->data, $this->module);
    }

    public function laporan_nilai()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'nilai';
        $this->template($this->data, $this->module);
    }
}