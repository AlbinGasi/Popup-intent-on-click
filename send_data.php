<?php
require_once 'server/load.php';
use server\Main;
$main = new Main;

if(isset($_POST['email'])){
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$email = trim($_POST['email']);

	if($main->check_user_data($first_name,$last_name,$email)){
		if($main->send_email($email,$first_name,$last_name)){
			$res = ['messageStatus'=> 'success','messageContent'=>'Thank you for your interest in our products; we\'ve sent a download link to your email address.'];
			echo json_encode(array($res));
		}else{
			$res = ['messageStatus'=> 'error','messageContent'=>'Error, please contact Site Administrator'];
		echo json_encode(array($res));
		}
	}else{
		$res = ['messageStatus'=> 'error','messageContent'=>'There is some error, please check your data.'];
		echo json_encode(array($res));
	}



}






?>