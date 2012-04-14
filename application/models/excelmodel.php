<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ExcelModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	
	public function getArray($excelObj){
		$data = array();
		$data['title'] = $excelObj->getCell('A4')->getValue();
		$data[$excelObj->getCell('A7')->getValue()]	= $excelObj->getCell('B7')->getValue();
		$data[$excelObj->getCell('A9')->getValue()]	= $excelObj->getCell('B9')->getValue();
		$data[$excelObj->getCell('A11')->getValue()] = $excelObj->getCell('B11')->getValue();
		$data[$excelObj->getCell('A14')->getValue()] = 
			array( $excelObj->getCell('B15')->getValue() => $excelObj->getCell('E15')->getValue(),
				   $excelObj->getCell('B16')->getValue() => $excelObj->getCell('E16')->getValue(),
				   'total' => $excelObj->getCell('E17')->getCalculatedValue()
			);
		$data[$excelObj->getCell('A19')->getValue()] = 
			array( $excelObj->getCell('B19')->getValue() => $excelObj->getCell('E19')->getValue(),
				   $excelObj->getCell('B20')->getValue() => $excelObj->getCell('E20')->getValue(),
			);
		$data[$excelObj->getCell('A25')->getValue()] = $excelObj->getCell('E25')->getCalculatedValue();
		
		return $data;
	
	}

}