<?php

class searchModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function formQuery($data, $orderBy = '') {

		$textArray = array();
		$textQuery = '';
	
		$filter = '';
		$words = array();

		if(isset($data['fulltext'])) {

			$filter = 'id IN (SELECT id FROM fulltextsearch WHERE MATCH (text) AGAINST (? IN BOOLEAN MODE))';
			array_push($words, $data['fulltext']);
			unset($data['fulltext']);
		}

		$data = $this->regexFilter($data);

		if($filter != '') array_unshift($data['filter'], $filter);
		$data['words'] = array_merge($words, $data['words']);


		$sqlFilter = (count($data['filter'] > 1)) ? implode(' and ', $data['filter']) : array_values($data['filter']);
		$sqlStatement = 'SELECT * FROM ' . METADATA_TABLE . ' WHERE ' . $textQuery . $sqlFilter . $orderBy;

		$data['query'] = $sqlStatement;
		$data['words'] = array_merge($textArray, $data['words']);

		return $data;
	}

	public function executeQuery($data) {

		$dbh = $this->db->connect(DB_NAME);

		$sth = $dbh->prepare($data['query']);
		$sth->execute($data['words']);

		$data = null;
		$i = 0;
		while($result = $sth->fetch(PDO::FETCH_OBJ))
		{
			$data[$i] = $result;
	        $i++;
		}
		$dbh = null;

		return $data;
	}

	public function regexFilter($var) {

		$data['filter'] = array();
		$data['words'] = array();

		if (empty($var)) return $data;

		while (list($key, $val) = each($var)) {

			$filterArr = array();

			$val = html_entity_decode($val, ENT_QUOTES);

			// Only paranthesis and hyphen will be quoted to include them in search
		    $val = preg_replace('/(\(|\)|\-)/', "\\\\$1", $val);
		    $words = preg_split('/ /', $val);
		    $words = array_filter($words, 'strlen');
		    
			$data['words'] = array_merge($data['words'], $words);

		    foreach($words as $word) {
		    	$filterArr[] = $key . ' REGEXP ?';
		    }

		    $filter[$key] = implode(' ' . SEARCH_OPERAND . ' ', $filterArr);
		}

		$data['filter'] = $filter;

		return $data;
	}

	public function formGeneralQuery($data, $table, $orderBy = '', $limit = '') {

		$data = $this->regexFilter($data);

		$sqlFilter = (count($data['filter'] > 1)) ? implode(' and ', $data['filter']) : array_values($data['filter']);
		$sqlStatement = 'SELECT * FROM ' . $table . ' WHERE ' . $sqlFilter . $orderBy . $limit;

		$data['query'] = $sqlStatement;

		return $data;
	}

	public function getSearchResults($data){

		$perPage = 10;
		$page = $data["page"];
		$description = $data["description"];
		unset($data['page']);

		$limit = ' LIMIT ' . ($page - 1) * $perPage . ', ' . $perPage;
		
		$data = $this->preProcessPOST($data);
		$query = $this->formGeneralQuery($data, METADATA_TABLE_L2, ' ORDER BY id', $limit);
		
		$dbh = $this->db->connect(DB_NAME);
		$sth = $dbh->prepare($query['query']);
		$sth->execute($query['words']);

		$data = [];
		while($result = $sth->fetch(PDO::FETCH_OBJ)) {

			$result->randomImagePath = $this->getArtefactThumbnail($result->id);
			$result->field = $this->getMatchingField($result->description, $description);
			array_push($data, $result);
		}
		$dbh = null;

		if(!empty($data)) {
			
			$data['description'] = $description;
		}
		else {

			$data = 'noData';
		}
		//~ var_dump($data); exit;
		return $data;
	}
	
	public function getMatchingField($description, $searchTerm){

		$searchTerm = $searchTerm;
		$terms = explode(' ', $searchTerm);
		$termsRegex = implode('|', $terms);
		$descArray = json_decode($description, true);

		$matches = [];
		if(isset($descArray['Type'])) array_push($matches, '<strong>Type</strong> : ' . $descArray['Type']);

		foreach ($terms as $term) {
			
			foreach ($descArray as $key => $value) {
			
				if(preg_match('/' . $term . '/i', $value)){

					$value = preg_replace("/($termsRegex)/i", "<span class=\"highlight\">$1</span>", $value);
					array_push($matches, '<strong>' . $key . '</strong> : ' . $value);
					unset($descArray{$key});
				}
			}			
		}
		return implode($matches, '<br />');
	}
}

?>
