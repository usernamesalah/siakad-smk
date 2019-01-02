<?php 

class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->data['user_id']  = $this->session->userdata('user_id');
        if (isset($this->data['user_id']))
        {
            $this->data['role_id'] = $this->session->userdata('role_id');
            switch ($this->data['role_id'])
            {
                case 1: redirect('siswa');
                case 2: redirect('guru');
                case 3: redirect('admin');
                case 4: redirect('kepala');
            }
        }
	}

	public function index()
	{
		if ($this->POST('login'))
        {
            $this->load->model('Users');
            $user = Users::where('username', $this->POST('username'))
                ->where('password', md5($this->POST('password')))
                ->first();
            if (isset($user))
            {
                $this->session->set_userdata([
                    'user_id'   => $user->user_id,
                    'username'  => $user->username,
                    'role_id'   => $user->role_id
                ]);
            }

            $this->flashmsg('Username atau password salah', 'danger');
            redirect('login');
        }

        $this->data['title']			= 'Login';
        $this->data['global_title']		= $this->title;
        $this->load->view('login', $this->data);
	}
}