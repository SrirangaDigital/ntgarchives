<?php

class dataModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function listFiles($path, $type) {
		//~ echo $path . "<br />";
		return glob($path . '*.' . $type);
		
	}

	public function insertAlbums($key, $albums, $dbh) {

		foreach ($albums as $album) {
			
			$albumID = preg_replace('/.*\/(.*)\.json/', "$1", $album);
			$data['albumID'] = $key . "__" . $albumID;
			$data['description'] = $this->getJsonFromFile($album);
			
			$this->db->insertData(METADATA_TABLE_L1, $dbh, $data);
		}
	}

	public function insertLetters($key, $letters, $dbh) {

		foreach ($letters as $letter) {
			//~ echo $letter."<br />";
			$data['id'] = preg_replace('/.*\/(.*)\.json/', "$1", $letter);
			$data['albumID'] = preg_replace('/.*\/(.*)\/.*\.json/', "$1", $letter);
			$data['albumID'] = $key . "__" . $data['albumID'];
			$data['id'] = $data['albumID'] . "__" . $data['id'];
			$albumDescription = $this->getAlbumDetails($data['albumID']);
			$albumDescription = $albumDescription->description;
			$letterDescription = $this->getJsonFromFile($letter);
			
			$data['description'] = json_encode(array_merge(json_decode($letterDescription, true), json_decode($albumDescription, true)),JSON_UNESCAPED_UNICODE);

			$this->db->insertData(METADATA_TABLE_L2, $dbh, $data);
		}
	}

	public function getJsonFromFile($path) {
		return file_get_contents($path);
	}
}

?>
