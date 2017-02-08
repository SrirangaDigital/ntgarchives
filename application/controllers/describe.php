<?php

class describe extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->photo();
	}

	public function archive($albumID = DEFAULT_ALBUM, $id = '') {

		$data = $this->model->getArchiveDetails($albumID, $id);
		$data->neighbours = $this->model->getNeighbourhood($id);
		
		($data) ? $this->view('describe/archive', $data) : $this->view('error/index');
	}
}

?>
