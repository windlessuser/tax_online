<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DocReader {


	public $objPHPExcel;
	
	public function __construct($filename = ""){
		if(strlen($filename)){
			$this->setFile($filename);
		}
		else{
			require_once APPPATH . 'libraries/phpexcel/Classes/PHPExcel.php';
			$this->objPHPExcel = new PHPExcel();
		} 	
	}

	public function setFile($filename){
		if(file_exists($filename)){
			require_once APPPATH . 'libraries/phpexcel/Classes/PHPExcel/IOFactory.php';
			$this->objPHPExcel = PHPExcel_IOFactory::load($filename);
		}
		else
			die($filename . ' not found!');
	}
		
	public function getExcelObj(){
		return $this->objPHPExcel->getActiveSheet();
	}

}