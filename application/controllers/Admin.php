<?php 

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'admin';

        // $this->load->library('gz');
        // $this->load->library('ci_jwt');

        // $this->data['token'] = $this->session->userdata('token');
        // if (!isset($this->data['token']))
        // {
        //     $this->session->sess_destroy();
        //     $this->flashmsg('Anda harus login untuk mengakses halaman tersebut', 'warning');
        //     redirect('login');
        //     exit;
        // }

        // $this->data['payload']  = $this->ci_jwt->decode($this->data['token']);

        // $response = json_decode($this->gz->POST('token', $this->data));
        // if (!isset($response))
        // {
        //     $this->session->sess_destroy();
        //     $this->flashmsg('Anda harus login untuk mengakses halaman tersebut', 'warning');
        //     redirect('login');
        //     exit;
        // }
        // if ($response->status === 'failed')
        // {
        //     $this->session->sess_destroy();
        //     $this->flashmsg($response->message, 'warning');
        //     redirect('login');
        //     exit;
        // }
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

    public function data_semester()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'semester';
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
}