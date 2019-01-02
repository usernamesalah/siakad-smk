<?php 

class Kepala extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->module = 'kepala';
	}

	public function index()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'dashboard';
        $this->template($this->data, $this->module);
    }

	public function guru()
    {
        $this->load->model('Users');

        $this->data['guru']     = Users::has('teacher')->get();
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'guru';
        $this->template($this->data, $this->module);
    }

    public function detail_guru()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'detail_guru';
        $this->template($this->data, $this->module);
    }

    public function siswa()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'siswa';
        $this->template($this->data, $this->module);
    }

    public function detail_siswa()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'detail_siswa';
        $this->template($this->data, $this->module);
    }

    public function visimisi()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'input_visimisi';
        $this->template($this->data, $this->module);
    }

    public function laporan_nilai()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'nilai';
        $this->template($this->data, $this->module);
    }

    public function absensi_guru()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'input_visimisi';
        $this->template($this->data, $this->module);
    }

    
}