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
}

?>
