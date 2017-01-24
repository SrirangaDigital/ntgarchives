<?php

class viewHelper extends View {

    public function __construct() {

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

    public function getLettersCount($id = '') {

			$archiveType = $this->getArchiveType($id);
			$archivePath = PHY_PUBLIC_URL . $archiveType . "/";
			$albumID = $this->getAlbumID($id);

			$count = sizeof(glob($archivePath . $albumID . '/*.json'));
			if($archiveType == "Letters")
			{
				return ($count > 1) ? $count . ' Letters' : $count . ' Letter';
			}
			elseif($archiveType == "Articles")
			{
				return ($count > 1) ? $count . ' Articles' : $count . ' Article';
			}
			else
			{
				return ($count > 1) ? $count . ' Items' : $count . ' Item';
			}
    }

    public function getAlbumID($combinedID) {

        return preg_replace('/^(.*)__/', '', $combinedID);
    }

    public function getArchiveType($combinedID) {

		$ids = preg_split('/__/', $combinedID);
		$archives = array("01"=>"Letters", "02"=>"Articles", "04"=>"Miscellaneous", "05"=>"Unsorted");
		return $archives[$ids[0]];
    }

    public function getPath($combinedID){
		$archiveType = $this->getArchiveType($combinedID);
		$ids = preg_split('/__/', $combinedID);
		$ActualPath = PHY_PUBLIC_URL . $archiveType . '/' . $ids[1] . '/' . $ids[2];
		return $ActualPath;
    }

    public function includeRandomThumbnail($id = '') {
		
		$archiveType = $this->getArchiveType($id);
		$id = $this->getAlbumID($id);
        $letters = glob(PHY_PUBLIC_URL . $archiveType . '/' . $id . '/*',GLOB_ONLYDIR);
        
        $randNum = rand(0, sizeof($letters) - 1);
        $letterSelected = $letters[$randNum];
        $pages = glob($letterSelected . '/thumbs/*.JPG');
        $randNum = rand(0, sizeof($pages) - 1);
        $pageSelected = $pages[$randNum];

        return str_replace(PHY_PUBLIC_URL, PUBLIC_URL, $pageSelected);
    }

    public function includeRandomThumbnailFromLetter($id = '') {
        
        $imgPath = $this->getPath($id);
        $pages = glob($imgPath .  '/thumbs/*.JPG');
        $randNum = rand(0, sizeof($pages) - 1);
        $pageSelected = $pages[$randNum];

        return str_replace(PHY_PUBLIC_URL, PUBLIC_URL, $pageSelected);
    }

    public function displayFieldData($json, $auxJson='') {

        $data = json_decode($json, true);
        
        if ($auxJson) $data = array_merge($data, json_decode($auxJson, true));

        $pdfFilePath = '';
        if(isset($data['id'])) {
			
            $actualID = $this->getAlbumID($data['id']);
            if($data['Type'] == "Letter")
            {
				$ArchivePath = LETTERS_URL;
			}
			elseif($data['Type'] == "Article")
			{
				$ArchivePath = ARTICLES_URL;
			}
			elseif($data['Type'] == "Miscellaneous")
			{
				$ArchivePath = MISCELLANEOUS_URL;
			}
			elseif($data['Type'] == "Unsorted")
			{
				$ArchivePath = UNSORTED_URL;
			}
			$pdfFilePath = $ArchivePath . $data['albumID'] . '/' . $actualID . '/index.pdf';
            
            $data['id'] = $data['albumID'] . '/' . $data['id'];
            unset($data['albumID']);
        }

        $html = '';
        $html .= '<ul class="list-unstyled">';

        foreach ($data as $key => $value) {

            if($value){

                if(preg_match('/keyword/i', $key)) {

                    $html .= '<li class="keywords"><strong>' . $key . ':</strong><span class="image-desc-meta">';
                    
                    $keywords = explode(',', $value);
                    foreach ($keywords as $keyword) {
       
                        $html .= '<a href="' . BASE_URL . 'search/field/?description=' . $keyword . '">' . str_replace(' ', '&nbsp;', $keyword) . '</a> ';
                    }
                    
                    $html .= '</span></li>' . "\n";
                }
                else{

                    $html .= '<li><strong>' . $key . ':</strong><span class="image-desc-meta">' . $value . '</span></li>' . "\n";
                }
            }    
        }

        // $html .= '<li>Do you know details about this picture? Mail us at heritage@iitm.ac.in quoting the image ID. Thank you.</li>';

        if($pdfFilePath != ''){
            $html .= '<li><a href="'.$pdfFilePath.'" target="_blank">Click here to view PDF</a></li>'; 
        }

        $html .= '</ul>';

        return $html;
    }

    public function displayThumbs($id){

        $imgPath = $this->getPath($id);
        $filesPath = $imgPath . '/thumbs/*' . PHOTO_FILE_EXT;
        $files = glob($filesPath);


        echo '<div id="viewletterimages" class="letter_thumbnails">';
        foreach ($files as $file) {

            $mainFile = $file;
            $mainFile = preg_replace('/thumbs\//', '', $mainFile);
            echo '<span class="img-small">';

            echo '<img class="img-responsive" data-original="'.str_replace(PHY_PUBLIC_URL, PUBLIC_URL, $mainFile).'" src="' . str_replace(PHY_PUBLIC_URL, PUBLIC_URL, $file) . '" >';

            echo '</span>';
        }
        // echo $albumID . '->' . $letterID;
        echo '</div>';

    }


    public function insertReCaptcha() {

        require_once('vendor/recaptchalib.php');

        $publickey = "6Le_DBsTAAAAACt5YrgWhjW00CcAF0XYlA30oLPc";
        $privatekey = "6Le_DBsTAAAAAH8rvyqjPXU9jxY5YJxXct76slWv";

        echo recaptcha_get_html($publickey);
    }

}

?>
