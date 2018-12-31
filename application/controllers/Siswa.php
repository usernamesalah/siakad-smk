<?php 

class Siswa extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'siswa';
	}

	public function nilai()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'nilai';
        $this->template($this->data, $this->module);
    }

    public function jadwal()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'nilai';
        $this->template($this->data, $this->module);
    }

    public function kelas()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'nilai';
        $this->template($this->data, $this->module);
    }

    public function data_diri()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'detail_siswa';
        $this->template($this->data, $this->module);
    }

    public function edit_data_diri()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'edit_siswa';
        $this->template($this->data, $this->module);
    }

    public function visi_misi()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'visimisi';
        $this->template($this->data, $this->module);
    }

}