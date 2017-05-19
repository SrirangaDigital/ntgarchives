<?php

class Model {
	
	public $archives = array("01"=>"Brochures", "02" => "NewsPapers");
	public function __construct() {

		$this->db = new Database();
	}

	public function getPostData() {

		if (isset($_POST['submit'])) {

			unset($_POST['submit']);	
		}

		if(!array_filter($_POST)) {
		
			return false;
		}
		else {

			return array_filter(filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS));
		}
	}

	public function getGETData() {

		if(!array_filter($_GET)) {
		
			return false;
		}
		else {

			return filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);
		}
	}

	public function preProcessPOST ($data) {

		return array_map("trim", $data);
	}

	public function encrypt ($data) {

		return sha1(SALT.$data);
	}
	
	public function sendLetterToPostman ($fromName = SERVICE_NAME, $fromEmail = SERVICE_EMAIL, 
		$toName = SERVICE_NAME, $toEmail = SERVICE_EMAIL, $subject = 'Bounce', 
		$message = '', $successMessage = 'Bounce', $errorMessage = 'Error') {

	    $mail = new PHPMailer();
        $mail->isSendmail();
        $mail->isHTML(true);
        $mail->setFrom($fromEmail, $fromName);
        $mail->addReplyTo($fromEmail, $fromName);
        $mail->addAddress($toEmail, $toName);
        $mail->Subject = $subject;
        $mail->Body = $message;
        
        return $mail->send();
 	}

 	public function bindVariablesToString ($str = '', $data = array()) {

 		unset($data['count(*)']);
	    
	    while (list($key, $val) = each($data)) {
	    
	        $str = preg_replace('/:'.$key.'/', $val, $str);
		}
	    return $str;
 	}

	public function getAlbumDetails($albumID) {
		
		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;
		
		$sth = $dbh->prepare('SELECT * FROM ' . METADATA_TABLE_L1 . ' WHERE albumID = :albumID');
		$sth->bindParam(':albumID', $albumID);

		$sth->execute();
		
		$result = $sth->fetch(PDO::FETCH_OBJ);
		$dbh = null;
		return $result;
	}

	public function getNeighbourhood($id) {
		
		$ids = preg_split('/__/', $id);
		$atype = $this->archives[$ids[0]];
		$albumID = $ids[1];
		$albumPath = PHY_ARCHIVES_URL . $atype . '/' . $albumID;

		$actualID = $ids[2];

		$letterPath = $albumPath . "/" . $actualID . '.json';
		// var_dump($letterPath);

		$files = glob($albumPath . "/*" . '.json');
		// var_dump($files);
		$match = array_search($letterPath, $files);

		if(!($match === False)){
			
			$data['prev'] = (isset($files[$match-1])) ? preg_replace("/.*\/(.*)\.json/", "$1", $files[$match-1]) : '';
			$data['next'] = (isset($files[$match+1])) ? preg_replace("/.*\/(.*)\.json/", "$1", $files[$match+1]) : '';

			return $data;
		}	
		else{

			return False;
		}

	}
	
	public function getArchiveType($combinedID) {

        return preg_replace('/^(.*)__(.*)/', '$1', $combinedID);
    }
	public function getActualID($combinedID) {

        return preg_replace('/^(.*)__/', '', $combinedID);
    }

    public function getRandomImage($id){

        $photos = glob(PHY_PHOTO_URL . $id . '/thumbs/*.JPG');
        $randNum = rand(0, sizeof($photos) - 1);
        $photoSelected = $photos[$randNum];

        return str_replace(PHY_PHOTO_URL, PHOTO_URL, $photoSelected);   	
    }

    public function getPhotoCount($id = '') {

        $count = sizeof(glob(PHY_PHOTO_URL . $id . '/*.json'));
        return ($count > 1) ? $count . ' Photographs' : $count . ' Photograph';
    }

    public function getDetailByField($json = '', $firstField = '', $secondField = '') {

        $data = json_decode($json, true);

        if (isset($data[$firstField])) {
      
            return $data[$firstField];
        }
        elseif (isset($data[$secondField])) {
      
            return $data[$secondField];
        }

        return '';
    }
    
    public function getBrochureCount($selectedArchive, $albumID){
		
		$folderList = glob(PHY_ARCHIVES_JPG_URL . $this->archives[$selectedArchive] . '/' . $albumID . "/*", GLOB_ONLYDIR);
		return sizeof($folderList);	
	}
	
    public function getArchivePageCount($ids){
		
		$pageCount = glob(PHY_ARCHIVES_JPG_URL . $this->archives[$ids[0]] . '/' . $ids[1] . '/' . $ids[2] . '/thumbs/*.JPG');
		return sizeof($pageCount);	
	}
	
    public function getFirstImageInAlbum($selectedArchive, $albumID){
		
		$folderList = glob(PHY_ARCHIVES_JPG_URL . $this->archives[$selectedArchive] . '/' . $albumID . "/*", GLOB_ONLYDIR);
		$files = glob($folderList[rand(0, sizeof($folderList)-1)] . '/thumbs/*.JPG');
		$fileSelected = $files[0];
		return str_replace(PHY_ARCHIVES_JPG_URL, ARCHIVES_JPG_URL, $fileSelected);   	
    }
    
    public function getFirstImageInArchive($ids){
		
		$files = glob(PHY_ARCHIVES_JPG_URL . $this->archives[$ids[0]] . '/' . $ids[1] . '/' . $ids[2] . "/*.JPG");
		$fileSelected = $files[0];
		return str_replace(PHY_ARCHIVES_JPG_URL, ARCHIVES_JPG_URL, $fileSelected);   	
    }
}

?>
