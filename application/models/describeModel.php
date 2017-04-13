<?php

class describeModel extends Model {

	public function __construct() {

		parent::__construct();
	}
	
	public function getArchiveDetails($albumID, $id) {

		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;
		
		$result=  $this->db->archiveDetailsFromDB($albumID, $id, $dbh);
		$dbh = null;
		return $result;
	}
}

?>
