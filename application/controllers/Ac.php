<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ac extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('am');
    }
	public function index()
	{
		$this->load->view('daftar');
	}

	public function list_history($j)
	{
		$stat = $j;
		$this->load->view('print_history',array('daftar' => $this->am->get_list($j), 'stat' => $stat));
	}


}
