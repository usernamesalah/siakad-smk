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
        $this->load->model('Users');

        if ($this->POST('submit'))
        {
            $user = new Users();
            $user->username     = $this->POST('username');
            $user->password     = md5($this->POST('password'));
            $user->role_id      = 2;
            $user->name         = $this->POST('name');
            $user->gender       = $this->POST('gender');
            $user->birthplace   = $this->POST('birthplace');
            $user->birthdate    = $this->POST('birthdate');
            $user->address      = $this->POST('address');
            $user->save();

            $this->load->model('Teachers');
            $teacher = new Teachers([
                'nip'               => $this->POST('nip'), 
                'last_education'    => $this->POST('last_education')
            ]);
            $user->teacher()->save($teacher);
            
            $this->flashmsg('Data guru berhasil ditambahkan');
            redirect('admin/data-guru');
        }

        $this->data['guru']     = Users::has('teacher')->get();
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
        $this->load->model('Lessons');
        if ($this->POST('submit'))
        {
            $lesson = new Lessons();
            $lesson->department_id  = $this->POST('department_id');
            $lesson->title          = $this->POST('title');
            $lesson->description    = $this->POST('description');
            $lesson->semester       = $this->POST('semester');
            $lesson->save();

            $this->flashmsg('Data mata pelajaran berhasil ditambahkan');
            redirect('admin/data-mata-pelajaran');
        }
        $this->load->model('Departments');
        $this->data['jurusan']  = Departments::get();
        $this->data['mapel']    = Lessons::has('department')->get();
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'mapel';
        $this->template($this->data, $this->module);
    }

    public function data_tahun_ajaran()
    {
        $this->load->model('School_years');
        if ($this->POST('submit'))
        {
            $school_year = new School_years();
            $school_year->school_year = $this->POST('school_year');
            $school_year->save();

            $this->flashmsg('Data tahun ajaran berhasil ditambahkan');
            redirect('admin/data-tahun-ajaran');
        }
        $this->data['tahun_ajaran']     = School_years::get();
        $this->data['title']            = 'Dashboard';
        $this->data['content']          = 'tahun_ajaran';
        $this->template($this->data, $this->module);
    }

    public function data_kelas()
    {
        $this->load->model('Classes');
        if ($this->POST('submit'))
        {
            $class = new Classes();
            $class->class_name = $this->POST('class_name');
            $class->save();

            $this->flashmsg('Data kelas berhasil ditambahkan');
            redirect('admin/data-kelas');
        }
        $this->data['kelas']    = Classes::get();
        $this->data['title']    = 'Dashboard';
        $this->data['content']  = 'kelas';
        $this->template($this->data, $this->module);
    }

    public function data_jadwal()
    {
        $this->load->model('Schedules');
        if ($this->POST('submit'))
        {
            $schedule = new Schedules();
            $schedule->class_id     = $this->POST('class_id');
            $schedule->lesson_id    = $this->POST('lesson_id');
            $schedule->teacher_id   = $this->POST('teacher_id');
            $schedule->year_id      = $this->POST('year_id');
            $schedule->semester     = $this->POST('semester');
            $schedule->started_at   = $this->POST('started_at');
            $schedule->ended_at     = $this->POST('ended_at');
            $schedule->save();

            $this->flashmsg('Data jadwal pelajaran berhasil ditambahkan');
            redirect('admin/data-jadwal');
        }

        $this->load->model('Classes');
        $this->load->model('Lessons');
        $this->load->model('Teachers');
        $this->load->model('School_years');

        $this->data['kelas']        = Classes::get();
        $this->data['mapel']        = Lessons::get();
        $this->data['guru']         = Teachers::get();
        $this->data['tahun_ajaran'] = School_years::get();
        $this->data['jadwal']       = Schedules::with('class', 'lesson', 'teacher', 'year')->get();
        $this->data['title']        = 'Dashboard';
        $this->data['content']      = 'jadwal';
        $this->template($this->data, $this->module);
    }

    public function data_nilai()
    {
        $this->load->model('Score_types');
        if ($this->POST('submit'))
        {
            $score_type = new Score_types();
            $score_type->type_name      = $this->POST('type_name');
            $score_type->description    = $this->POST('description');
            $score_type->percentage     = $this->POST('percentage');
            $score_type->save();   

            $this->flashmsg('Data penilaian berhasil ditambahkan');
            redirect('admin/data-nilai');
        }
        $this->data['penilaian']    = Score_types::get();
        $this->data['title']        = 'Dashboard';
        $this->data['content']      = 'nilai';
        $this->template($this->data, $this->module);
    }

    public function data_jurusan()
    {
        $this->load->model('Departments');
        if ($this->POST('submit'))
        {
            $department = new Departments();
            $department->department_name    = $this->POST('department_name');
            $department->description        = $this->POST('description');
            $department->save();

            $this->flashmsg('Data jurusan berhasil ditambahkan');
            redirect('admin/data-jurusan');
            exit;
        }

        $this->data['jurusan']  = Departments::get();
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