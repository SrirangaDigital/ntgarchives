<?php

class testing extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->albums();
	}

	public function albums() {
		
		$data = $this->model->getGetData();
		
		unset($data['url']);
		
		if(!(isset($data["page"]))){
		
			$data["page"] = 1;
		
		}
		
		$result = $this->model->listAlbums($data);
		
		if($data["page"] == 1){
		
			($result) ? $this->view('testing/testalbums', $result) : $this->view('error/index');
		
		}
		else{
		
			echo json_encode($result);
		
		}
	}

	public function photos($album = DEFAULT_ALBUM) {
		
		$data = $this->model->getGetData();
		
		unset($data['url']);
		
		if(!(isset($data["page"]))){
		
			$data["page"] = 1;
		
		}
	
		$result = $this->model->listPhotos($album,$data);

		if($data["page"] == 1){
		
			($result) ? $this->view('testing/testphotos', $result) : $this->view('error/index');
		
		}
		else{
			
			echo json_encode($result);			
		}
	}
}

?>
