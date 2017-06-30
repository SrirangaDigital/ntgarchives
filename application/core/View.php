<?php

class View {

    public $arrayOfArchives = array(BROCHURES => "Brochures" , NEWSPAPERS => "NewsPapers" , PHOTOS => "Photos");
 	
	public function __construct() {

	}
	
	public function getActualPath($path = '', $folderList = array()) {

		$pathRegex = str_replace('/', '\/[0-9]+\-*', $path) . '$';
		$pathMatched = array_values(preg_grep("/$pathRegex/", $folderList));
		
		if(isset($pathMatched[0])) {

			return str_replace(PHY_FLAT_URL, 'flat/', $pathMatched[0]);
		}
		else{

			// Second pass to check whether the path is pointing to a file other than index in a given folder
			$pathArray = preg_match('/(.*)\/(.*)/', $path, $matches);
			$secondTry = $matches[1];
			$suffix = $matches[2];

			$pathRegex = str_replace('/', '\/[0-9]+\-*', $secondTry) . '$';
			$pathMatched = array_values(preg_grep("/$pathRegex/", $folderList));

			return (isset($pathMatched[0])) ? str_replace(PHY_FLAT_URL, 'flat/', $pathMatched[0]) . '/' . $suffix : '';
		}
	}

	public function getNavigation($path = '') {

		// Include only folders beginning with a number
		$dirs = glob($path . '[0-9]*', GLOB_ONLYDIR);
		natsort($dirs);
		
		if(!(empty($dirs))) {
			
			foreach ($dirs as $key => $value) {

				$subNav = $this->getNavigation($value . '/');
				if($subNav) {

					$dirs{$key} = array($value);
					array_push($dirs{$key}, $subNav);
				}
			}
			return $dirs;
		}
	}

	public function getFolderList($navigation = array()) {

		$folderList = array();
		$iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($navigation));
		foreach($iterator as $value) {
  			array_push($folderList, $value);
		}
		return $folderList;
	}

	public function showDynamicPage($data = array(), $path = '', $actualPath = '', $navigation = array()) {

		require_once 'application/views/viewHelper.php';
		$viewHelper = new viewHelper();
		$pageTitle = $this->getPageTitle($viewHelper, $path);

		require_once 'application/views/header.php';
		
		// if(preg_match('/flat\/Home/', $path)) require_once 'application/views/carousel.php';
		
		if(file_exists('application/views/' . $actualPath . '.php')) {
		    require_once 'application/views/' . $actualPath . '.php';
		}
		elseif(file_exists('application/views/' . $actualPath . '/index.php')) {
		    require_once 'application/views/' . $actualPath . '/index.php';
		}
		else{
		    require_once 'application/views/error/index.php';
		}

		// Side bar can be included by un-commenting the following line
		// require_once($this->getSideBar($actualPath, $journal));
		if(!(preg_match('/flat\/Home/', $path))) require_once 'application/views/footer.php';
	}

	public function showFlatPage($data = array(), $path = '', $actualPath = '', $journal = '', $navigation = array(), $current = array()) {

		require_once 'application/views/viewHelper.php';
		$viewHelper = new viewHelper();
		$pageTitle = $this->getPageTitle($viewHelper, $path);

		require_once 'application/views/header.php';
		require_once 'application/views/flatPageContainer.php';
		// require_once($this->getSideBar($actualPath, $journal));
		require_once 'application/views/footer.php';
    }

    private function processNavPath($path) {

        $path = preg_replace('/\/[0-9]+\-/', '/', $path);
        $path = explode('/', $path);
        $path = htmlentities(str_replace('_', ' ', $path[count($path) - 1]), ENT_COMPAT, "UTF-8");
    	// Letters which are to be forced to lower-case need to handled below
    	return preg_replace('/IASc/', 'IAS<span class="lower-case">c</span>', $path);
    }

    private function getPageTitle($viewHelper, $path) {

		if(preg_match('/flat/', $path)){

			// Remove trailing slashes
			$path = preg_replace('/\/$/', '', $path);
			$paths = explode('/', $path);
			// Remove 'flat' from the URL
			unset($paths[0]);
			$paths = array_reverse($paths);
			$paths = array_unique($paths);
			$pageTitle = implode(' | ', $paths);
			return preg_replace('/_/', ' ', $pageTitle);
		}
		else{

			return '';
		}
    }
}

?>
