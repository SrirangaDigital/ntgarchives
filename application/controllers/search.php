<?php

class search extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->field();
	}

	public function field() {
		
		$data = $this->model->getGetData();
		unset($data['url']);

		// Check if any data is posted. For this journal name should be excluded.
		if($data) {

			$data = $this->model->preProcessPOST($data);
			
			$query = $this->model->formGeneralQuery($data, METADATA_TABLE_L2);

			$result = $this->model->executeQuery($query);
			($result) ? $this->view('search/result', $result) : $this->view('error/noResults', 'search/index/');
		}
		else {

			$this->view('error/index');
		}
	}
}

?>