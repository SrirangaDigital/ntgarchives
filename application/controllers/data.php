<?php

class data extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->insertPhotoDetails();
	}

	public function insertDetails(){

		$this->model->db->createDB(DB_NAME, DB_SCHEMA);
		$dbh = $this->model->db->connect(DB_NAME);

		$this->model->db->dropTable(METADATA_TABLE_L1, $dbh);
		$this->model->db->createTable(METADATA_TABLE_L1, $dbh, METADATA_TABLE_L1_SCHEMA);

		$this->model->db->dropTable(METADATA_TABLE_L2, $dbh);
		$this->model->db->createTable(METADATA_TABLE_L2, $dbh, METADATA_TABLE_L2_SCHEMA);

		$this->model->db->createTable(METADATA_TABLE_L3, $dbh, METADATA_TABLE_L3_SCHEMA);
		$this->model->db->createTable(METADATA_TABLE_L4, $dbh, METADATA_TABLE_L4_SCHEMA);
		
		//List albums
		$archives = array("01"=>"Brochures");

		foreach($archives as $key => $value)
		{
			$archivesPath = PHY_ARCHIVES_URL . $value . "/";
		
			$albums = $this->model->listFiles($archivesPath, 'json');
			if($albums) {

				$this->model->insertAlbums($key, $albums, $dbh);

				foreach ($albums as $album) {

					// List photos
					$letters = $this->model->listFiles(str_replace('.json', '/', $album), 'json');

					if($letters) {

						$this->model->insertLetters($key, $letters, $dbh);
					}
					else{

						echo 'Album ' . $album . ' does not have any data' . "\n";
					}
				}
			}
			else{

				echo 'No albums to insert';
			}
		}
		$dbh = null;
	}

	public function updateAlbumJson($albumIdWithType) {
		
		$data = $this->model->getPostData();
		$fileContents = array();
		
		foreach($data as $value){

			$fileContents[$value[0]] = $value[1];
		}
		$archiveType = $this->model->getArchiveType($albumIdWithType);

		$albumID = $fileContents['albumID'];

		$path = PHY_ARCHIVES_URL . $archiveType . '/'. $albumID . ".json";
		
		$fileContents = json_encode($fileContents,JSON_UNESCAPED_UNICODE);


		if(file_put_contents($path, $fileContents))
		{
			$this->updateAlbumDetails($albumIdWithType, $fileContents);
			//~ $this->view('data/albumDataUpdated');
			$this->updateRepo();
		}
		else
		{
			echo "Problem in writing data to a file";
		}
	}
	
	private function updateAlbumDetails($albumIdWithType, $fileContents){
		
		$dbh = $this->model->db->connect(DB_NAME);
		$this->model->db->updateAlbumDescription($albumIdWithType, $fileContents, $dbh);
		$this->model->updateDetailsForEachArchive($albumIdWithType, $fileContents, $dbh);
	}
	
	public function updateArchiveJson($albumIdWithType) {
		
		$data = $this->model->getPostData();
		$fileContents = array();

		foreach($data as $value){

			$fileContents[$value[0]] = $value[1];
		}
		$archiveType = $this->model->getArchiveType($albumIdWithType);

		$albumID = $fileContents['albumID'];
		$archiveID = $albumIdWithType . '__' . $fileContents['id'];

		$path = PHY_ARCHIVES_URL . $archiveType . '/'. $albumID . '/' . $fileContents['id'] . ".json";

		$fileContents = json_encode($fileContents,JSON_UNESCAPED_UNICODE);

		if(file_put_contents($path, $fileContents))
		{
			$this->updateArchiveDetails($archiveID,$albumIdWithType,$fileContents);
			//~ $this->view('data/archiveDataUpdated');
			$this->updateRepo();
		}
		else
		{
			echo "Problem in writing data to a file";
		}
	}

	private function updateArchiveDetails($archiveID,$albumIdWithType,$fileContents){

			$dbh = $this->model->db->connect(DB_NAME);
			$albumDescription = $this->model->getAlbumDetails($albumIdWithType);
			$albumDescription = $albumDescription->description;
			$archiveDescription = $fileContents;

			$combinedDescription = json_encode(array_merge(json_decode($archiveDescription, true), json_decode($albumDescription, true)));

			$this->model->db->updateArchiveDescription($archiveID,$albumIdWithType,$combinedDescription,$dbh);

	}

	private function updateRepo(){

		$statusMsg = array();

		$repo = Git::open(PHY_BASE_URL . '.git');

		// Before all operations, a git pull is done to sync local and remote repos.
		$repo->run('pull ' . GIT_REMOTE . ' master');
		array_push($statusMsg, 'Repo synced with remote');

		$files = $this->model->getChangesFromGit($repo);
		array_push($statusMsg, 'Files to be updated listed');

		$user['email'] = $_SESSION['email'];
		$user['password'] = $_SESSION['password'];
		$split = explode('@', $_SESSION['email']);
		$user['name'] = $split[0];

		if($files['A']){ 
				$this->model->gitProcess($repo, $files['A'], 'add', GIT_ADD_MSG, $user);
				array_push($statusMsg, ' Addition of JSON for Albums and Archives are completed');
		}	
		if($files['M']){ 
				$this->model->gitProcess($repo, $files['M'], 'add', GIT_MOD_MSG, $user);
				array_push($statusMsg, ' Modification of JSON for Albums and Archives are completed');
		}		
		if($files['D']){ 
				$this->model->gitProcess($repo, $files['D'], 'rm', GIT_DEL_MSG, $user);
				array_push($statusMsg, ' Deleted of JSON for Albums / Archives are completed');
		}	
		
		$repo->run('push ' . GIT_REMOTE . ' master');
		
		array_push($statusMsg, 'Local changes pushed to remote');

		$this->view('data/taskCompleted', $statusMsg, '');
	}
}

?>
