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
			
			if(!(isset($data["page"]))){
			
				$data["page"] = 1;
			}
			$result = $this->model->getSearchResults($data);
			
			if($result != 'noData')
			{
				$result['searchTerm'] = $data['description'];
			
				if($data["page"] == 1){
					($result) ? $this->view('search/result', $result) : $this->view('error/noResults', 'search/index/');
				}
				else{
					echo json_encode($result);
				}
			}
			elseif ($result != 'noData' && $data['page'] == 1)
			{
				$this->view('error/noResults');
			}
			else
			{
				echo json_encode($result);
			}
	
		}
		else {
			$this->view('error/noResults');
		}
	}
}

?>
