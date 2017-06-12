<?php


class listingModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function listAlbums($defaultArchive, $pagedata) {
		
		$perPage = 10;
		$page = $pagedata["page"];
		$start = ($page-1) * $perPage;
		
		if($start < 0) $start = 0;
		
		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L1 . ' WHERE albumID LIKE \''. $defaultArchive . '%\' ORDER BY albumID' . ' limit ' . $start . ',' . $perPage);
		
		$sth->execute();
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {
			
			$result->albumID = $result->albumID;
			$ids = explode("__", $result->albumID);
			$result->image = $this->getFirstImageInAlbum($defaultArchive, $ids[1]);
			$count = $this->getBrochureCount($defaultArchive, $ids[1]);
			$result->brochureCount = ($count == 1) ? $count . ' Brochure' : $count . ' Brochures';
			$result->title = $this->getDetailByField($result->description, 'Title');
			$result->event = $this->getDetailByField($result->description, 'Event');
			array_push($data, $result);
		}
		
		$dbh = null;
		
		if(!empty($data)){
			
			$data["hidden"] = '<input type="hidden" class="pagenum" value="' . $page . '" />';
			$data['Archive'] = $defaultArchive;
		}
		else{

			$data["hidden"] = '<div class="lastpage"></div>';	
		}

		return $data;
	}

	public function listArchives($albumID, $pagedata) {
		
		$perPage = 10;
		$page = $pagedata["page"];
		$start = ($page-1) * $perPage;
		
		if($start < 0) $start = 0;
		
		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L2 . ' WHERE albumID = :albumID ORDER BY id limit ' . $start . ',' . $perPage);
		$sth->bindParam(':albumID', $albumID);

		$sth->execute();
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {
			
			$result->albumID = $result->albumID;
			$ids = explode("__", $result->id);
			$result->image = $this->getFirstImageInArchive($ids);
			$count = $this->getArchivePageCount($ids);
			$result->pageCount = ($count == 1) ? $count . ' Page' : $count . ' Pages';
			$result->title = $this->getDetailByField($result->description, 'Title');
			$result->event = $this->getDetailByField($result->description, 'Event');
			array_push($data, $result);
		}
			
		$dbh = null;
		
		if(!empty($data)){
			
			$data["hidden"] = '<input type="hidden" class="pagenum" value="' . $page . '" />';
		}
		else{

			$data["hidden"] = '<div class="lastpage"></div>';	
		}
		
		$data['albumDetails'] = $this->getAlbumDetails($albumID);
		
		
		return $data;
	}
	
	public function listPhotoAlbums($archive) {

		$dbh = $this->db->connect(DB_NAME);

		if(is_null($dbh)) return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L1 . ' WHERE albumID LIKE \'' . $archive . '__%\' ORDER BY imageAvailable DESC');
		$sth->execute();
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {
			array_push($data, $result);
		}
		
		$dbh = null;
		return $data;
	}
}

?>
