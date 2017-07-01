<?php

class describe extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->photo();
	}

	public function archive($albumID = DEFAULT_ALBUM, $id = '') {
		
		$searchTerm = "";
		$getData = $this->model->getGetData();
		if(isset($getData['searchTerm']) && $getData['searchTerm'] != "")
		$searchTerm = $getData['searchTerm'];
		
		$data = array();
		$data = $this->model->getArchiveDetails($albumID, $id);
		$result = $this->model->getAlbumDetails($albumID);
		
		if($searchTerm != "")	{
			
			$tempArray = json_decode($data->description, true);
			$tempArray['searchTerm'] = $searchTerm;
			$data->description =  json_encode($tempArray);
		}
		
		$data->albumDescription = $result->description;
		$data->neighbours = $this->model->getNeighbourhood($id);
		($data) ? $this->view('describe/archive', $data) : $this->view('error/index');
	}

	public function photo($albumID = DEFAULT_ALBUM , $id = '') {

		$getData = $this->model->getGetData();
		if(isset($getData['searchTerm']))
		$searchTerm = $getData['searchTerm'];
		$data = $this->model->getPhotoDetails($albumID, $id);

		if(isset($searchTerm) && $searchTerm != "")	{
			
			$tempArray = json_decode($data->description, true);
			$tempArray['searchTerm'] = $searchTerm;
			$data->description =  json_encode($tempArray);
		}	

		$data->neighbours = $this->model->getPhotosNeighbourhood($albumID, $id);
		($data) ? $this->view('describe/photo', $data) : $this->view('error/index');
	}
}

?>
