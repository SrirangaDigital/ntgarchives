<?php

class mail extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {
		
		$this->send();
	}

	public function send() {
		
		$data = $this->model->getPostData();
		($data) ? $this->postman($data) : $this->view('error/prompt', array('msg' => FB_FAILURE_MSG));
	}

	public function postman($data) {

		$mail = new PHPMailer();

		if(!$data['g-recaptcha-response']){
			$this->view('error/prompt', array('msg' => FB_CAPTCHA_MSG));
		}
		else{
	
			$secretKey = "6Le_DBsTAAAAAH8rvyqjPXU9jxY5YJxXct76slWv";
	        $ip = $_SERVER['REMOTE_ADDR'];
	        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=". $data['g-recaptcha-response'] . "&remoteip=".$ip);
	        $responseKeys = json_decode($response,true);

	        if(intval($responseKeys["success"])){
				$mail->isMail();
				$mail->setFrom($data['email'], $data['name']);
				$mail->addReplyTo($data['email'], $data['name']);
				$mail->addAddress(SERVICE_EMAIL, SERVICE_NAME);
				$mail->Subject = FB_SUBJECT_PREFIX;
				$data['message'] = preg_replace('/&#13;&#10;/', '<br />', $data['message']);
				$mail->MsgHTML($data['message']);

				if($mail->send()) {

					$this->view('page/prompt', array('msg' => FB_SUCCESS_MSG));
				}
				else {

					$this->view('error/prompt', array('msg' => FB_FAILURE_MSG));
				}
			}
			else{
					$this->view('error/prompt', array('msg' => FB_CAPTCHA_RESP_MSG));
			}
		}
	}
}

?>