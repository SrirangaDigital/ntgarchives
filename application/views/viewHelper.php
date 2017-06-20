<?php

class viewHelper extends View {

    public function __construct() {

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
    
    public function getAlbumID($combinedID) {

        return preg_replace('/^(.*)__/', '', $combinedID);
    }
    
    public function getPhotoID($combinedID) {

        return preg_replace('/(.*)__(.*)__/', '', $combinedID);
    }

    public function getArchiveType($combinedID) {

		$ids = preg_split('/__/', $combinedID);
		$archives = $this->arrayOfArchives;
		return $archives[$ids[0]];
    }
    public function displayArchiveType($combinedID) {

		echo '( ' . $this->getArchiveType($combinedID) . ' )';
    }

    public function getPath($combinedID){
		$archiveType = $this->getArchiveType($combinedID);
		$ids = preg_split('/__/', $combinedID);
		$ActualPath = PHY_ARCHIVES_JPG_URL . $archiveType . '/' . $ids[1] . '/' . $ids[2];
		return $ActualPath;
    }

    public function includeRandomThumbnail($id = '') {
		
		$archiveType = $this->getArchiveType($id);
		$id = $this->getAlbumID($id);
        $folders = glob(PHY_ARCHIVES_JPG_URL . $archiveType . '/' . $id . '/*',GLOB_ONLYDIR);
        
        $randNum = rand(0, sizeof($folders) - 1);
        $folderSelected = $folders[$randNum];
        $pages = glob($folderSelected . '/thumbs/*.JPG');
        $randNum = rand(0, sizeof($pages) - 1);
        $pageSelected = $pages[0];

        return str_replace(PHY_ARCHIVES_JPG_URL, ARCHIVES_JPG_URL, $pageSelected);
    }

    public function includeRandomThumbnailFromArchive($id = '') {
        
        $imgPath = $this->getPath($id);
        $pages = glob($imgPath .  '/thumbs/*.JPG');
        //~ $randNum = rand(0, sizeof($pages) - 1);
        $randNum = rand(0, 0);
        $pageSelected = $pages[0];

        return str_replace(PHY_ARCHIVES_JPG_URL, ARCHIVES_JPG_URL, $pageSelected);
    }

    public function displayFieldData($json, $albumID = '') {

        $data = json_decode($json, true);
        $searchTerm = "";
        if(isset($data['searchTerm']) && $data['searchTerm'] != "")
        {
			$searchTerm = str_replace(" ", "|", $data['searchTerm']);
			unset($data['searchTerm']);
		}
        
		$pdfFilePath = '';
        if(isset($data['id'])) {
			
            $actualID = $this->getAlbumID($data['id']);

            if($data['Type'] == "Brochure")
            {
				$ArchivePath = BROCHURE_URL;
			}
            elseif($data['Type'] == "News Paper")
            {
                $ArchivePath = NEWSPAPERS_URL;
            }
            elseif($data['Type'] == "Photos")
            {
                $ArchivePath = PHOTO_URL;
            }
            
			$pdfFilePath = $ArchivePath . $albumID . '/' . $actualID . '/index.pdf';
            $phypdfFilePath = $pdfFilePath;
            $phypdfFilePath = str_replace(ARCHIVES_URL, PHY_ARCHIVES_JPG_URL, $pdfFilePath);
            $pdfFilePath = str_replace(ARCHIVES_URL, ARCHIVES_JPG_URL, $pdfFilePath);
			
			unset($data['albumID']);
        }

        $html = '';
        $html .= '<ul class="list-unstyled">';

        foreach ($data as $key => $value) {

            if($value){
				
				if(preg_match("/$searchTerm/i"	, $value) && $searchTerm != "") {
					
					$html .= '<li><strong>' . $key . ':</strong><span class="image-desc-meta" style="background-color:#D2C17D;">' . $value . '</span></li>' . "\n";
					//~ $html .= '<li><strong>' . $key . ':</strong><span class="image-desc-meta">' . preg_replace("/($searchTerm)/i", '<span style="background-color:#A79A66;">$1</span>', $value) . '</span></li>' . "\n";
                }
                else{

                    $html .= '<li><strong>' . $key . ':</strong><span class="image-desc-meta">' . $value . '</span></li>' . "\n";
                }
            }    
        }

        // $html .= '<li>Do you know details about this picture? Mail us at heritage@iitm.ac.in quoting the image ID. Thank you.</li>';

        if(isset($phypdfFilePath) && file_exists($phypdfFilePath)){
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
            // echo '<span class="">';

            echo '<img class="img-small img-responsive" data-original="'.str_replace(PHY_PUBLIC_URL, PUBLIC_URL, $mainFile).'" src="' . str_replace(PHY_PUBLIC_URL, PUBLIC_URL, $file) . '" >';

            // echo '</span>';
        }
        // echo $albumID . '->' . $letterID;
        echo '</div>';

    }


    public function insertReCaptcha() {

		require_once('vendor/recaptchalib.php');

        $publickey = "6Ld9gRQUAAAAABN0ern9If3yH1cIXlKV19TXu5Wj";
        $privatekey = "6Ld9gRQUAAAAAJ7NKpEvpqlVStQk45SoPUGK1DO9";

        echo '<div class="g-recaptcha" data-sitekey="'. $publickey . '"></div>';
    }
    public function displayDataInForm($json, $auxJson='') {

        $data = json_decode($json, true);
        
        if ($auxJson) $data = array_merge($data, json_decode($auxJson, true));
        
        $count = 0;
        $formgroup = 0;

        foreach ($data as $key => $value) {
             //~ echo "Key: $key; Value: $value\n";
             if($key == 'albumID') {
				if (preg_match('/__/', $value)) {
				$id = preg_split('/__/', $value);
				$value = $id[1];
				}
			 }
            $disable = (($key == 'id') || ($key == 'albumID'))? 'readonly' : '';
            echo '<div class="form-group" id="frmgroup' . $formgroup . '">' . "\n";
            echo '<input type="text" class="form-control" name="id'. $count . '[]"  value="' . $key . '"' . $disable  . ' />&nbsp;' . "\n";
            echo '<input type="text" class="form-control" name="id'. $count . '[]"  value="' . $value . '"' . $disable . ' />' . "\n";
            if($disable != "readonly"){
                echo '<input type="button"  onclick="removeUpdateDataElement(\'frmgroup'. $formgroup .'\')" value="Remove" />' . "\n";                
            }
            echo '</div>' . "\n";
            $count++;
            $formgroup++;
        }

        echo '<div id="keyvalues">' . "\n";
        echo '</div>' . "\n";
        echo '<input type="button" id="keyvaluebtn" onclick="addnewfields(keyvaluebtn)" value="Add New Fields" />' . "\n";
        echo '<input type="submit" id="submit" value="Update Data" />' . "\n";
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
		
		$photoSelected = PHY_PUBLIC_URL . "images/noimageavailable.jpg";
		return str_replace(PHY_PUBLIC_URL, PUBLIC_URL, $photoSelected);
    }

    public function getActualID($combinedID) {

        return preg_replace('/^(.*)__/', '', $combinedID);
    }

}

?>
