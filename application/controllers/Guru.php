<?php 

class Guru extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->module = 'guru';
	}

	public function index()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'dashboard';
		$this->template($this->data, $this->module);
	}

	public function data_kelas()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'kelas';
		$this->template($this->data, $this->module);
	}

	public function data_absensi()
	{
		$this->data['semester']		= $this->GET('semester');
		$this->data['schedule_id']	= $this->GET('schedule_id');


		$this->load->model('Schedules');
		$this->data['jadwal']	= Schedules::with('year', 'lesson', 'class')->find($this->data['schedule_id']);

		if ($this->data['semester'] == 'Odd')
        {
        	$this->data['start_month']	= '07';
        	$this->data['end_month']	= '12';
        	$this->data['year']			= $this->data['jadwal']->year->start_year;
        }
        else
        {
        	$this->data['start_month']	= '01';
        	$this->data['end_month']	= '06';
        	$this->data['year']			= $this->data['jadwal']->year->end_year;
        }

		$this->data['beginning']    = new DateTime($this->data['year'] . '-' . $this->data['start_month'] . '-01');
        $this->data['ending']       = new DateTime($this->data['year'] . '-' . $this->data['end_month'] . '-31');
        $this->data['ending']->setTime(0, 0, 1);

        $this->data['interval']     = DateInterval::createFromDateString('1 day');
        $this->data['dateperiod']	= iterator_to_array(new DatePeriod($this->data['beginning'], $this->data['interval'], $this->data['ending']));
        $period = [];
        foreach ($this->data['dateperiod'] as $row)
        {
        	$period []= $row;
        	if ($row->format('Y-m-d') == date('Y-m-d'))
        	{
        		break;
        	}
        }
        $this->data['period']       = array_reverse($period);
        $this->data['locale']   = [
            'Saturday'  => 'Sabtu',
            'Friday'    => 'Jumat',
            'Thursday'  => 'Kamis',
            'Wednesday' => 'Rabu',
            'Tuesday'   => 'Selasa',
            'Monday'    => 'Senin'
        ];

		$this->data['title']	= 'Data Absensi Mata Pelajaran ' . $this->data['jadwal']->lesson->title . ' Kelas ' . $this->data['jadwal']->class->class_name . ' Semester ' . ($this->data['semester'] == 'Odd' ? 'Ganjil' : 'Genap') . ' Tahun Ajaran ' . $this->data['jadwal']->year->school_year;
		$this->data['content']	= 'absensi_siswa';
		$this->template($this->data, $this->module);
	}

	public function absensi()
	{
		$this->data['semester']		= $this->GET('semester');
		$this->data['schedule_id']	= $this->GET('schedule_id');
		$this->data['date']			= $this->GET('date');
		$this->data['locale']   = [
            'Saturday'  => 'Sabtu',
            'Friday'    => 'Jumat',
            'Thursday'  => 'Kamis',
            'Wednesday' => 'Rabu',
            'Tuesday'   => 'Selasa',
            'Monday'    => 'Senin'
        ];
		$this->data['day']			= $this->data['locale'][$this->GET('day')];
		$this->data['day_en']		= $this->GET('day');

		$this->load->model('Schedules');
		$this->data['jadwal']	= Schedules::with('class', 'year', 'lesson')->find($this->data['schedule_id']);

		$this->data['kelas']	= Classes::with(['members' => function($query) {
			$query->where('year_id', $this->data['jadwal']->year->year_id);
		}, 'members.student', 'members.student.attendance' => function($query) {
			$query->where('date', $this->data['date']);
		}])->find($this->data['jadwal']->class->class_id);

		$this->data['title']	= 'Absensi';
		$this->data['content']	= 'absensi';
		$this->template($this->data, $this->module);
	}

	public function data_siswa()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'siswa';
		$this->template($this->data, $this->module);
	}

	public function data_penilaian()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'nilai';
		$this->template($this->data, $this->module);
	}

	public function tahun_ajaran()
	{
		$this->load->model('School_years');
		$this->data['years']	= School_years::orderBy('year_id', 'DESC')->get();
		$this->data['title']	= 'Tahun Ajaran';
		$this->data['content']	= 'tahun_ajaran';
		$this->template($this->data, $this->module);
	}

	public function data_jadwal()
	{
		$this->data['year_id'] 	= $this->GET('year_id');
		$this->data['semester']	= $this->GET('semester');

		$this->load->model('School_years');
		$this->data['year']		= School_years::find($this->data['year_id']);
		$this->load->model('Schedules');
		$this->data['jadwal']	= Schedules::with('class', 'lesson')->where([
			'semester' 	=> $this->data['semester'],
			'year_id'	=> $this->data['year_id']
		])->get();
		$this->data['title']	= 'Data Jadwal';
		$this->data['content']	= 'jadwal';
		$this->template($this->data, $this->module);
	}

	public function mapel_diajarkan()
	{
		// schedule group by lesson, class, year
		// klik detail -> muncul daftar siswa beserta input nilainya
		// 
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'mapel';
		$this->template($this->data, $this->module);
	}

	public function visi_misi()
	{
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'visimisi';
		$this->template($this->data, $this->module);
	}

	public function siswa_kelas_mapel()
	{
		$lesson_id 	= $this->GET('lesson_id');
		$year_id 	= $this->GET('year_id');
		$semester 	= $this->GET('semester');
		$this->data['year_id']		= $year_id;
		$this->data['lesson_id']	= $lesson_id;

		$this->load->model('Students');
		$this->data['siswa']	= Students::with('user', 'scores')->whereHas('scores', function($query) use ($lesson_id, $year_id, $semester) {
			$query->where('scores.lesson_id', $lesson_id);
			$query->where('scores.year_id', $year_id);
			$query->where('scores.semester', $semester);
		})->get();
		$this->data['title']	= 'Dashboard';
		$this->data['content']	= 'kelas_mapel';
		$this->template($this->data, $this->module);
	}

	public function input_nilai()
	{
		$student_id = $this->GET('student_id');
		$lesson_id 	= $this->GET('lesson_id');
		$year_id 	= $this->GET('year_id');
		$this->data['student_id'] 	= $student_id;
		$this->data['lesson_id']	= $lesson_id;
		$this->data['year_id']		= $year_id;

		if ($this->POST('submit'))
		{
			$this->load->model('Scores');
			$score = new Scores();
			$score->student_id 		= $student_id;
			$score->lesson_id 		= $lesson_id;
			$score->type_id 		= $this->POST('type_id');
			$score->score 			= $this->POST('score');
			$score->additional_info	= $this->POST('additional_info');
			$score->year_id			= $this->data['year_id'];
			$score->save();
			$this->flashmsg('Nilai berhasil ditambahkan');
			redirect('guru/input-nilai?student_id=' . $student_id . '&lesson_id=' . $lesson_id);
		}
		
		$this->load->model('Score_types');
		$this->load->model('Students');
		$this->data['siswa'] = Students::with(['user', 'scores' => function($query) use ($lesson_id) {
			$query->where('scores.lesson_id', $lesson_id);
		}, 'scores.type'])->find($student_id);

		$this->load->model('Lessons');
		$this->data['mapel'] = Lessons::find($lesson_id);
		
		$this->data['types']	= Score_types::get();
		$this->data['title'] 	= 'Input Nilai ' . $this->data['mapel']->title;
		$this->data['content']	= 'input_nilai';
		$this->template($this->data, $this->module);
	}
}