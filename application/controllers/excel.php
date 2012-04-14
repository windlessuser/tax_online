<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('docreader');
		$this->load->model('excelmodel');
	}
	
	public function index(){
		$this->docreader->setFile('files/test/input_sample.xlsx');
		$data = $this->excelmodel->getArray($this->docreader->getExcelObj());
		var_dump($data);
	}

}