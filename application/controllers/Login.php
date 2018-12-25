<?php 

class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('gz');
        $this->load->library('ci_jwt');

        $this->data['token'] = $this->session->userdata('token');
        if (isset($this->data['token']))
        {
        	$this->data['payload'] = $this->ci_jwt->decode($this->data['token']);
        	switch ($this->data['payload']->role_id)
	        {
	        	case 1:
	        		redirect('admin');
	        		break;

	        	case 2:
	        		redirect('manager');
	        		break;

	        	case 3:
	        		redirect('employee');
	        		break;
	        }
        }
	}

	public function index()
	{
		if ($this->POST('login'))
        {
            $this->data = [
                'username'  => $this->POST('username'),
                'password'  => $this->POST('password')
            ];

            $response = json_decode($this->gz->POST('auth', $this->data));
            if ($response->status === 'success')
            {
                $this->session->set_userdata(['token' => $response->data->token]);
                $this->flashmsg($response->message);
                redirect('login');
            }

            $this->flashmsg($response->message, 'danger');
        }

        $this->data['title']			= 'Login';
        $this->data['global_title']		= $this->title;
        $this->load->view('login', $this->data);
	}
}