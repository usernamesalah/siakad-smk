<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */

class RoboFile extends \Robo\Tasks
{
    public function push($commitMessage, $origin = "origin", $branch = "master")
    {
    	$this->say("Pushing code to repository...");
    	$this->taskGitStack()
    		->stopOnFail()
    		->add('.')
    		->commit($commitMessage)
    		->push($origin, $branch)
    		->run();
    }

    public function test()
    {
        echo 'Robo installed';
    }

    private function read_file($file)
    {
        $file = __DIR__."/Robo/output.php";
        $f = fopen($file, "r");
        $lines = array();

        while ($line = trim(fgets($f)))
        {
            $nl = mb_strtolower($line,'UTF-8');
            $lines[] = $nl;
        }

        return $lines;
    }

    public function editFile($file, $line_number, $content)
    {
        $lines = $this->read_file($file);
        var_dump($lines);
        $lines[$line_number - 1] = $content;
        $this->taskWriteToFile($file)
            ->lines($lines)
            ->run();
    }

    public function create_route($func_name, $model, $primary_key)
    {
        
        $lines = [
            '<?php',
            'public function ' . $func_name . '()',
            '{',
            '    $this->data[\'' . $primary_key . '\'] = $this->uri->segment(3);',
            '    $this->check_allowance(!isset($this->data[\'' . $primary_key . '\']));',
            '    $this->load->model(\'' . $model . '\');',
            '    $this->data[\'data\'] = $this->' . $model . '->get_row([\'' . $primary_key . '\' => $this->data[\'' . $primary_key . '\']]);',
            '    $this->check_allowance(!isset($this->data[\'data\']), [\'Data tidak ditemukan\', \'danger\']);',
            '}'
        ];

        $this->taskWriteToFile('Robo/output.php')
            ->lines($lines)
            ->run();
    }
}