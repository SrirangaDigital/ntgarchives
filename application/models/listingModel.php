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
			$result->brochureCount = ($count == 1) ? $count . ' ' . substr_replace($this->archives[$ids[0]], "", -1) : $count . ' ' . $this->archives[$ids[0]];
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
	
	public function listPhotoAlbums($archive, $pagedata) {
		
		$perPage = 10;
		$page = $pagedata["page"];
		$start = ($page-1) * $perPage;
		if($start < 0) $start = 0;
		
		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh)) return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L1 . ' WHERE albumID LIKE \'' . $archive . '__%\' ORDER BY imageAvailable DESC limit ' . $start . ',' . $perPage);
		$sth->execute();
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {
			
			$result->imagePath = $this->includeRandomThumbnailFromPhotoALbum($result->albumID);
			$result->imageCount = $this->getLettersCount($result->albumID);
			$result->description = $this->getDetailByField($result->description, 'drama' , 'dance' , 'film' , 'subject' , 'card-type');
			
			array_push($data, $result);
		}
		
		if(!empty($data)){
			
			$data["hidden"] = '<input type="hidden" class="pagenum" value="' . $page . '" />';
		}
		else{

			$data["hidden"] = '<div class="lastpage"></div>';	
		}
		
		$dbh = null;
		return $data;
	}
	
	public function listPhotos($albumID) {

		$dbh = $this->db->connect(DB_NAME);
		
		if(is_null($dbh)) return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L2 . ' WHERE albumID = :albumID ORDER BY id');
		$sth->bindParam(':albumID', $albumID);
		$sth->execute();
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {
			
			array_push($data, $result);
		}
		
		if(!empty($data)){
			
			$data['albumDetails'] = $this->getAlbumDetails($albumID);
		}
		$dbh = null;
		return $data;
	}
	
	public function includeRandomThumbnailFromPhotoALbum($id = '') {
		
		$photos = "";
		$archiveType = $this->getArchiveType($id);
		$albumID = $this->getAlbumID($id);
		$photos = glob(PHY_ARCHIVES_JPG_URL . $archiveType . '/' .  $albumID . '/thumbs/*.JPG');
		
		$randNum = rand(0, sizeof($photos) - 1);
        if(count($photos) > 0 )
        {
			$photoSelected = $photos[$randNum];
			return str_replace(PHY_ARCHIVES_JPG_URL, ARCHIVES_JPG_URL, $photoSelected);
		}
    }
    
    public function getArchiveType($combinedID) {

		$ids = preg_split('/__/', $combinedID);
		$archives = $this->archives;
		return $archives[$ids[0]];
    }
    
    public function getAlbumID($combinedID) {

        return preg_replace('/^(.*)__/', '', $combinedID);
    }
    
    public function getLettersCount($id = '') {

			$archiveType = $this->getArchiveType($id);
			$archivePath = PHY_ARCHIVES_URL . $archiveType . "/";
			$albumID = $this->getAlbumID($id);

			$count = sizeof(glob($archivePath . $albumID . '/*.json'));
			if($archiveType == "Brochures")
			{
				return ($count > 1) ? $count . ' Brochures' : $count . ' Brochure';
			}
			elseif($archiveType == "Articles")
			{
				return ($count > 1) ? $count . ' Articles' : $count . ' Article';
			}
			elseif($archiveType == "Photos")
			{
				return ($count > 1) ? $count . ' Photos' : $count . ' Photo';
			}
			else
			{
				return ($count > 1) ? $count . ' Items' : $count . ' Item';
			}
    }
    
    public function getDetailByField($json = '', $firstField = '', $secondField = '' , $thirdField = '' , $fourthField = '', $fifthField = '') {

        $data = json_decode($json, true);

        if (isset($data[$firstField])) {
      
            return $data[$firstField];
        }
        elseif (isset($data[$secondField])) {
      
            return $data[$secondField];
        }
        elseif (isset($data[$thirdField])) {
      
            return $data[$thirdField];
        }
        elseif (isset($data[$fourthField])) {
      
            return $data[$fourthField];
        }
        elseif (isset($data[$fifthField])) {
      
            return $data[$fifthField];
        }

        return '';
    }
}

?>
