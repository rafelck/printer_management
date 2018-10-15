<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ac extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('am');
    }
	public function index()
	{
		$this->load->view('d_lunas');
	}
}
