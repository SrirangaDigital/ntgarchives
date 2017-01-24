<?php


class listingModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function listAlbums($defaultType) {
		
		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L1 . ' WHERE albumID LIKE \''. $defaultType . '%\' ORDER BY albumID');
		
		$sth->execute();
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {

			array_push($data, $result);
		}
		$dbh = null;
		return $data;
	}

	public function listArchives($albumID) {
		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L2 . ' WHERE albumID = :albumID ORDER BY id');
		$sth->bindParam(':albumID', $albumID);

		$sth->execute();
		$data = array();
		
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {

			array_push($data, $result);
		}

		$dbh = null;
		$data['albumDetails'] = $this->getAlbumDetails($albumID);
		return $data;
	}
}

?>
