<?php

class describe extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->photo();
	}

	public function archive($albumID = DEFAULT_ALBUM, $id = '', $searchTrem = '') {
		
		$data = array();
		$data = $this->model->getArchiveDetails($albumID, $id);
		$result = $this->model->getAlbumDetails($albumID);
		
		if($searchTrem != "")	{
			
			$tempArray = json_decode($data->description, true);
			$tempArray['searchTerm'] = $searchTrem;
			$data->description =  json_encode($tempArray);
		}
		
		$data->albumDescription = $result->description;
		$data->neighbours = $this->model->getNeighbourhood($id);
		($data) ? $this->view('describe/archive', $data) : $this->view('error/index');
	}

	public function photo($albumID = DEFAULT_ALBUM , $id = '') {

		$data = $this->model->getPhotoDetails($albumID, $id);
		$data->neighbours = $this->model->getPhotosNeighbourhood($albumID, $id);
		($data) ? $this->view('describe/photo', $data) : $this->view('error/index');
	}
}

?>
