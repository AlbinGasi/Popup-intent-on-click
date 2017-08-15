<?php
namespace server;
class Main
{

	public function check_user_data($first_name,$last_name,$email){
		$errors = true;

		if($email == ""){
			$errors = false;
		}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors = false;
		}else if($first_name == ""){
			$errors = false;
		}else if(strlen($first_name)<2){
			$errors = false;
		}else if($last_name == ""){
			$errors = false;
		}else if(strlen($last_name)<2){
			 $errors = false;
		}

		return $errors;
	}

	public function send_email($send_to,$first_name,$last_name){
		$subject = "Download White Paper";
		$formcontent = "Hi ".$first_name." ".$last_name.", check out our works and...";

		$emailheader  = "MIME-Version: 1.0" . "\r\n";
		$emailheader .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
		$emailheader .= "From: info@albingasi.com \r\n";
		$emailheader .= "Reply-To: info@albingasi.com \r\n";
		$emailheader .= "X-Mailer: PHP/" . phpversion();
		$emailheader .= "X-Priority: 1" . "\r\n"; 
	
		if($mail = mail($send_to, $subject, $formcontent, $emailheader)){
			return true;
		}else{
			return false;
		}
	}
}


?>