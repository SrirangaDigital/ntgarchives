<?php


class listing extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->albums();
	}

	public function albums($defaultArchive = DEFAULT_ARCHIVE) {

		$data = $this->model->listAlbums($defaultArchive);
		($data) ? $this->view('listing/albums', $data) : $this->view('error/index');
	}

	public function archives($album = DEFAULT_ALBUM) {

		$data = $this->model->listArchives($album);
		($data) ? $this->view('listing/archives', $data) : $this->view('error/index');
	}
}

?>
