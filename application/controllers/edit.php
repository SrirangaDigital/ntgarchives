<?php


class edit extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

	}

	public function archive($albumID, $photoID) {

		if(isset($_SESSION['login'])){
	
			$data = $this->model->editAlbum($albumID, $photoID);
			($data) ? $this->view('edit/archive', $data) : $this->view('error/index');
		}
		else
		{
			$this->redirect('user/login');
		}
	}

	public function archives($albumID) {

		if(isset($_SESSION['login'])){
			$data = $this->model->editArchive($albumID);
			//~ var_dump($data);
			($data) ? $this->view('edit/archives', $data) : $this->view('error/index');
		}
		else
		{
			$this->redirect('user/login');
		}
	}

}

?>
