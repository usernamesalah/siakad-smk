<?php 

class Kepala extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->module = 'kepala';
	}

	public function guru()
    {
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

    
}