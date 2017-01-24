<?php

class article extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->fulltext();
	}

	public function fulltextRename($journal = DEFAULT_JOURNAL, $volume = DEFAULT_VOLUME, $issue = DEFAULT_ISSUE, $page = DEFAULT_PAGE) {

		// Rename resource pdf to contain journal details, copy it to Read-write directory called downloads and do an absolute redirect.
		$resourceURL = $journal . '/' . $volume . '/' . $issue . '/' . $page . '.pdf';
		$downloadURL = $journal . '_' . $volume . '_' . $issue . '_' . $page . '.pdf';

		// Flush files created more than 10 minutes ago
		exec('find ' . PHY_DOWNLOAD_URL . ' -mmin +10 -type f -name "*.pdf" -exec rm {} \;');

		if(file_exists(PHY_DOWNLOAD_URL . $downloadURL)) {

			$this->absoluteRedirect(DOWNLOAD_URL . $downloadURL);
		}
		elseif(file_exists(PHY_VOL_URL . $resourceURL)) {

			$hasCopied = @copy(PHY_VOL_URL . $resourceURL, PHY_DOWNLOAD_URL . $downloadURL);
			($hasCopied) ? $this->absoluteRedirect(DOWNLOAD_URL . $downloadURL) : $this->view('error/blah');
		}
		else{

			$this->view('error/index');
		}
	}
}

?>