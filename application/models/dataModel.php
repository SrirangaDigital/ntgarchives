<?php

class dataModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function listFiles($path, $type) {
	
		return glob($path . '*.' . $type);
		
	}

	public function insertAlbums($key, $albums, $dbh) {

		foreach ($albums as $album) {
			
			$photoAvailable = 1;
			$albumID = preg_replace('/.*\/(.*)\.json/', "$1", $album);
			
			// This is to set flag based on photo availablity (ONLY FOR PHOTOS ARCHIVES)
			if($key == PHOTOS)
			{
				count(glob(PHY_ARCHIVES_JPG_URL . $this->archives[$key] . "/" . $albumID . "/thumbs/*.JPG")) > 0 ? $photoAvailable = 1 : $photoAvailable = 0;
			}
			
			$data['albumID'] = $key . "__" . $albumID;
			$data['description'] = $this->getJsonFromFile($album);
			$data['imageAvailable'] = $photoAvailable;
			
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
			
			//~ $albumDescription = $this->getAlbumDetails($data['albumID']);
			//~ $albumDescription = $albumDescription->description;
			$letterDescription = $this->getJsonFromFile($letter);
			
			
			$data['description'] = json_encode(json_decode($letterDescription, true), JSON_UNESCAPED_UNICODE);

			$this->db->insertData(METADATA_TABLE_L2, $dbh, $data);
		}
	}
	
	public function updateDetailsForEachArchive($albumIdWithType, $fileContents, $dbh){
		
		$archiveType = $this->getArchiveType($albumIdWithType);
		$albumID = $this->getActualID($albumIdWithType);
		$archivePath = PHY_ARCHIVES_URL . $archiveType . '/'. $albumID . '/';
		$archives = $this->listFiles($archivePath, 'json');

		if($archives){

			foreach ($archives as $archive) {

				$id = preg_replace('/.*\/(.*)\.json/', "$1", $archive);
				
				$archiveID = $albumIdWithType . "__" . $id;
				$archiveDescription = $this->getJsonFromFile($archive);
				$combinedDescription = json_encode(array_merge(json_decode($archiveDescription, true), json_decode($fileContents, true)));
				$this->db->updateArchiveDescription($archiveID, $albumIdWithType,$combinedDescription,$dbh);
				 
			}
		}
	}

	public function getJsonFromFile($path) {
		return file_get_contents($path);
	}
	
	public function getChangesFromGit($repo) {

		// Get status in porcelain mode
		$status = (string) $repo->status();
		

		// Replace '??' with A which means untracked files which are to be added
		$status = str_replace('??', 'A', $status);
		$status = preg_replace('/\h+/m', ' ', $status);
		$status = preg_replace('/^\h/m', '', $status);

		$lines = preg_split("/\n/", $status);
		
		$files['A'] = $files['M'] = $files['D'] = array();
		

		foreach ($lines as $file) {
			
			// Extract files into three bins - A->Added, M->Modified and D->Deleted. 
			if((preg_match('/^([AMD])\s(.*)/', $file, $matches)) && (preg_match('/public\/Archives\/Brochures/', $file)) || (preg_match('/public\/Archives\/NewsPapers/', $file))) {

				array_push($files[$matches[1]], $matches[2]);
			}
		}

		return $files;
	}

	public function gitProcess($repo, $files, $operation, $message, $user) {

		if(($operation == 'addAll')&&(is_array($files))) {

			$path = preg_replace('/(.*)\/.*/' , "$1", $files[0]);
			$repo->run('add --all ' . $path);
		}
		else{

			foreach ($files as $file) {
				
				$repo->{$operation}($file);
			}
		}

		// $message = str_replace(':journal', $journal, $message);
		$repo->run('-c "user.name=' . $user['name'] . '" -c "user.email=' . $user['email'] . '" commit -m "' . escapeshellarg($message) . '"');
	}

	public function formatStatus($statements) {

		$status = '<ul>';
		foreach ($statements as $statement) {
	
			$status .= '<li>' . $statement . '</li>';
		}
		$status .= '</ul>';
		return $status;
	}
}

?>
