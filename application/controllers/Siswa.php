<?php 

class Siswa extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->data['user_id']  = $this->session->userdata('user_id');
        if (!isset($this->data['user_id']))
        {
            $this->session->sess_destroy();
            $this->flashmsg('Anda harus login untuk mengakses halaman tersebut', 'danger');
            redirect('login');
        }

        $this->data['role_id'] = $this->session->userdata('role_id');
        if (!isset($this->data['role_id']) or $this->data['role_id'] != 1)
        {
            $this->session->sess_destroy();
            $this->flashmsg('Anda harus login sebagai siswa untuk mengakses halaman tersebut', 'danger');
            redirect('login');
        }

		$this->module = 'siswa';
	}

    public function index()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'dashboard';
        $this->template($this->data, $this->module);
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
        $this->data['content']  = 'jadwal';
        $this->template($this->data, $this->module);
    }

    public function kelas()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'kelas';
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