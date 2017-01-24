<?php

class describeModel extends Model {

	public function __construct() {

		parent::__construct();
	}
	
	public function getDetails($journal = DEFAULT_JOURNAL, $volume = DEFAULT_VOLUME, $issue = DEFAULT_ISSUE, $page = DEFAULT_PAGE) {

		$dbh = $this->db->connect($journal);
		if(is_null($dbh))return null;
			
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE . ' WHERE journal=:journal AND volume=:volume AND issue=:issue AND page=:page');
		$sth->bindParam(':journal', $journal);
		$sth->bindParam(':volume', $volume);
		$sth->bindParam(':issue', $issue);
		$sth->bindParam(':page', $page);
		
		$sth->execute();

		$result = $sth->fetch(PDO::FETCH_OBJ);
		$dbh = null;
		return $result;
	}

	public function getDetailsByName($name = '', $fetch = 'FELLOW') {

		$dbh = $this->db->connect(GENERAL_DB_NAME);
		if(is_null($dbh))return null;
		
		$bindName = preg_replace('/\_/', ' ', $name);
		$sth = $dbh->prepare('SELECT * FROM ' . constant($fetch . '_TABLE') . ' WHERE name=:name');
		$sth->bindParam(':name', $bindName);
		
		$sth->execute();

		$result = $sth->fetch(PDO::FETCH_OBJ);
		$dbh = null;
		return $result;
	}
}

?>