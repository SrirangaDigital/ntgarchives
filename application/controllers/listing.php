<?php


class listing extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->albums();
	}

	public function albums($defaultArchive = DEFAULT_ARCHIVE) {
		
		$data = $this->model->getGetData();
		unset($data['url']);
		
		if(!(isset($data["page"])))
			$data["page"] = 1;
	
		$result = $this->model->listAlbums($defaultArchive,$data);
		
		if($data["page"] == 1)
			($result) ? $this->view('listing/albums', $result) : $this->view('error/index');
		else
			echo json_encode($result, JSON_UNESCAPED_UNICODE, JSON_UNESCAPED_SLASHES);
	}

	public function archives($album = DEFAULT_ALBUM) {

		$data = $this->model->listArchives($album);
		($data) ? $this->view('listing/archives', $data) : $this->view('error/index');
	}
}

?>
