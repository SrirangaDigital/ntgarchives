<?php

class testingModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function listAlbums($pagedata) {

		$perPage = 7;

		$page = $pagedata["page"];

		$start = ($page-1) * $perPage;

		if($start < 0) $start = 0;

		$dbh = $this->db->connect(DB_NAME);

		if(is_null($dbh)) return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L1 . ' ORDER BY albumID' . ' limit ' . $start . ',' . $perPage);
		
		$sth->execute();
		
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {

			$result->Randomimage = $this->getRandomImage($result->albumID);
			$result->Photocount = $this->getPhotoCount($result->albumID);
			$result->Event = $this->getDetailByField($result->description, 'Event');

			array_push($data, $result);
		}
		
		$dbh = null;
		
		$data = array_filter($data);
		
		if(!empty($data)){

			$data["hidden"] = '<input type="hidden" class="pagenum" value="' . $page . '" />';
		}
		else{

			$data["hidden"] = '<div class="lastpage"></div>';	
		}
		
		return $data;
	}

	public function listPhotos($albumID,$pagedata) {

		$perPage = 7;

		$page = $pagedata["page"];

		$start = ($page-1) * $perPage;

		if($start < 0) $start = 0;

		$dbh = $this->db->connect(DB_NAME);
		
		if(is_null($dbh)) return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L2 . ' WHERE albumID = :albumID ORDER BY id' . ' limit ' . $start . ',' . $perPage);

		$sth->bindParam(':albumID', $albumID);

		$sth->execute();
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {
			
			$result->actualID = $this->getActualID($result->id);
			$result->Caption = $this->getDetailByField($result->description, 'Caption');
			array_push($data, $result);
		}

		$dbh = null;

		if(!empty($data)){
			
			$data['albumDetails'] = $this->getAlbumDetails($albumID);
			$data["hidden"] = '<input type="hidden" class="pagenum" value="' . $page . '" />';
		}
		else{

			$data["hidden"] = '<div class="lastpage"></div>';	
		}

		return $data;
	}
}

?>
