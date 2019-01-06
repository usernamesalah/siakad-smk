<?php 

class Kepala extends MY_Controller
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
        if (!isset($this->data['role_id']) or $this->data['role_id'] != 4)
        {
            $this->session->sess_destroy();
            $this->flashmsg('Anda harus login sebagai kepala sekolah untuk mengakses halaman tersebut', 'danger');
            redirect('login');
        }

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
        $this->data['teacher_id'] = $this->uri->segment(3);
        $this->check_allowance(!isset($this->data['teacher_id']));

        $this->load->model('Teachers');
        $this->data['guru']     = Teachers::with('user')->find($this->data['teacher_id']);
        $this->check_allowance(!isset($this->data['guru']), ['Data guru tidak ditemukan', 'danger']);

        $this->data['title']    = 'Detail Guru';
        $this->data['content']  = 'detail_guru';
        $this->template($this->data, $this->module);
    }

    public function siswa()
    {
        $this->load->model('Users');
        $this->data['users']    = Users::has('student')->get();
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'siswa';
        $this->template($this->data, $this->module);
    }

    public function detail_siswa()
    {
        $this->data['student_id']   = $this->uri->segment(3);
        $this->check_allowance(!isset($this->data['student_id']));

        $this->load->model('Students');
        $this->data['siswa']    = Students::with('user')->find($this->data['student_id']);
        $this->check_allowance(!$this->data['siswa'], ['Data siswa tidak ditemukan', 'danger']);
        
        $this->data['title']    = 'Detail Data Siswa';
        $this->data['content']  = 'detail_siswa';
        $this->template($this->data, $this->module);
    }

    public function visimisi()
    {
        $this->load->model('Headmasters');
        $this->data['headmaster'] = Headmasters::where('user_id', $this->data['user_id'])
                                    ->get()
                                    ->first();
        if ($this->POST('submit'))
        {
            $this->data['headmaster']->vision     = $this->POST('vision');
            $this->data['headmaster']->mission    = $this->POST('mission');
            $this->data['headmaster']->save();

            $this->flashmsg('Visi misi berhasil disimpan');
            redirect('kepala/visimisi');
        }
        $this->data['title']    = 'Visi Misi';
        $this->data['content']  = 'input_visimisi';
        $this->template($this->data, $this->module);
    }

    public function laporan_nilai()
    {
        $this->load->model('Users');
        $this->load->model('School_years');
        $this->load->model('Classes');
        $this->data['siswa']        = Users::has('student')->get();
        $this->data['tahun_ajaran'] = School_years::get();
        $this->data['kelas']        = Classes::get();

        if ($this->POST('submit'))
        {
            $student_id = $this->POST('student_id');
            $year_id    = $this->POST('year_id');
            $semester   = $this->POST('semester');
            $class_id   = $this->POST('class_id');

            $this->load->model('Scores');
            $scores = Scores::with('lesson')
                        ->where('student_id', $student_id)
                        ->where('year_id', $year_id)
                        ->where('semester', $semester)
                        ->selectRaw('DISTINCT lesson_id')
                        ->get();
            $results = [];
            foreach ($scores as $score)
            {
                $results []= [
                    'mapel'     => $score->lesson,
                    'harian'    => Scores::where('lesson_id', $score->lesson_id)
                                    ->where('type_id', 1)
                                    ->where('student_id', $student_id)
                                    ->where('year_id', $year_id)
                                    ->where('semester', $semester)
                                    ->selectRaw('SUM(score) AS score')
                                    ->first(),
                    'uts'       => Scores::where('lesson_id', $score->lesson_id)
                                    ->where('type_id', 2)
                                    ->where('student_id', $student_id)
                                    ->where('year_id', $year_id)
                                    ->where('semester', $semester)
                                    ->selectRaw('SUM(score) AS score')
                                    ->first(),
                    'uas'       => Scores::where('lesson_id', $score->lesson_id)
                                    ->where('type_id', 3)
                                    ->where('student_id', $student_id)
                                    ->where('year_id', $year_id)
                                    ->where('semester', $semester)
                                    ->selectRaw('SUM(score) AS score')
                                    ->first()
                ];
            }
            echo json_encode($results);
            exit;
        }

        $this->data['title']        = 'Laporan Nilai';
        $this->data['content']      = 'nilai';
        $this->template($this->data, $this->module);
    }

    public function absensi_guru()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'absensi';
        $this->template($this->data, $this->module);
    }

    public function detail_absensi()
    {
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'detail_absensi';
        $this->template($this->data, $this->module);
    }


    
}