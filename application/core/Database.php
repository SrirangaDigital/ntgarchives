<?php

class Database extends PDO {

	public function __construct() {
	
	}

	public function connect($db) {

		$db = $this->prependDB($db);
		if(!(defined($db . '_USER'))) {
		    
		    return null;
		}

		try {
		    $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' .  $db, constant($db . '_USER'), constant($db . '_PASSWORD'));
		    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		    $sth = $dbh->prepare(CHAR_ENCODING_SCHEMA);
			$sth->execute();

		    return $dbh;
		}
		catch(PDOException $e) {
		    // echo $e->getMessage();
		    return null;
	    }
	}

	public function createDB($db, $schema) {

		$db = $this->prependDB($db);
		//~ echo $db;
		try {
		    $dbh = new PDO('mysql:host=' . DB_HOST . ';', constant($db . '_USER'), constant($db . '_PASSWORD'));
		    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    
		    $schema = str_replace(':db', $db, $schema);

			$sth = $dbh->prepare($schema);
			$sth->execute();
		}
		catch(PDOException $e) {
		    echo $e->getMessage();
	    }
	}

	public function createTable($table, $dbh, $schema) {
		$sth = $dbh->prepare($schema);
		$sth->execute();
	}

	public function dropTable($table, $dbh) {
	
		$sth = $dbh->prepare('DROP TABLE IF EXISTS '. $table);
		$sth->execute();
	}

	public function insertData($table, $dbh, $data) {

		// Take list of keys as in schema and data
	    $keys = implode(', ', array_keys($data));
	    // form unnamed placeholders with count number of ? marks
	    $bindValues =  str_repeat('?, ', count($data) - 1) . ' ?';
	    $sth = $dbh->prepare('INSERT INTO ' . $table . ' (' . $keys .') VALUES (' . $bindValues . ')');

		$sth->execute(array_values($data));
	}
	
	public function insertPhotoData($table, $dbh, $data) {
		// Take list of keys as in schema and data
	    $keys = implode(', ', array_keys($data));
	    // form unnamed placeholders with count number of ? marks
	    $bindValues =  str_repeat('?, ', count($data) - 1) . ' ?';
	    $sth = $dbh->prepare('INSERT INTO ' . $table . ' (' . $keys .') VALUES (' . $bindValues . ')');
		$sth->execute(array_values($data));
	}

	public function executeQuery($dbh = null, $query = '') {

	    $sth = $dbh->prepare($query);
		$sth->execute();
	}

	public function prependDB($db = DEFAULT_JOURNAL) {
		
		return DB_PREFIX . strtoupper($db);
		return $db;
	}
	
	public function updateData($table, $dbh, $data) {


		$sth1 = $dbh->prepare('SELECT * FROM ' . $table . ' where id=:id');

	    $sth1->bindParam(':id', $data['id']);
		$sth1->execute();
		
		$numRows = $sth1->rowCount();
		
		if($numRows)
		{
			//Updating Existing article;
			$sth = $dbh->prepare('UPDATE ' . $table . ' SET 
			journal=:journal, volume=:volume, issue=:issue, month=:month, year=:year, 
			info=:info, hassup=:hassup, title=:title, feature=:feature, page=:page, 
			abstract=:abstract, keywords=:keywords, authors=:authors, dates=:dates    
			where id=:id');

			$sth->bindParam(':journal', $data['journal']);
			$sth->bindParam(':volume', $data['volume']);
			$sth->bindParam(':issue', $data['issue']);
			$sth->bindParam(':month', $data['month']);
			$sth->bindParam(':year', $data['year']);
			$sth->bindParam(':info', $data['info']);
			$sth->bindParam(':hassup', $data['hassup']);
			$sth->bindParam(':title', $data['title']);
			$sth->bindParam(':feature', $data['feature']);
			$sth->bindParam(':page', $data['page']);
			$sth->bindParam(':abstract', $data['abstract']);
			$sth->bindParam(':keywords', $data['keywords']);
			$sth->bindParam(':authors', $data['authors']);
			$sth->bindParam(':dates', $data['dates']);
			$sth->bindParam(':id', $data['id']);

			$sth->execute();
		}		
		else
		{
			//Inserting a New Article;

			$sth = $dbh->prepare('INSERT INTO ' . $table . ' VALUES (
			:journal,:volume,:issue,:month,:year,:info,:hassup,:title,:feature,:page,:abstract,:keywords,:authors,:dates,:id)');			

			$sth->bindParam(':journal', $data['journal']);
			$sth->bindParam(':volume', $data['volume']);
			$sth->bindParam(':issue', $data['issue']);
			$sth->bindParam(':month', $data['month']);
			$sth->bindParam(':year', $data['year']);
			$sth->bindParam(':info', $data['info']);
			$sth->bindParam(':hassup', $data['hassup']);
			$sth->bindParam(':title', $data['title']);
			$sth->bindParam(':feature', $data['feature']);
			$sth->bindParam(':page', $data['page']);
			$sth->bindParam(':abstract', $data['abstract']);
			$sth->bindParam(':keywords', $data['keywords']);
			$sth->bindParam(':authors', $data['authors']);
			$sth->bindParam(':dates', $data['dates']);
			$sth->bindParam(':id', $data['id']);
	
			$sth->execute();
		}
			
	}
	
}

?>
