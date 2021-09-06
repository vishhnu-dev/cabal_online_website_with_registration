<?php 
	session_start();
	// $output = json_encode(array('type'=> 'error', 'text' => "
		// 																													".$_REQUEST["g-recaptcha-response"]."
		// 																												  ".$_POST["user_full_name"]."
		// 																												  ".$_POST["user_username"]."
		// 																												  ".$_POST["user_password"]."
		// 																												  ".$_POST["user_password_confirmation"]."
		// 																												  ".$_POST["user_email"]."
		// 																												  ".$_POST["user_whatsapp"]."
		// 																												  ".$_POST["user_securytitoken"]."
		// 																												"));
	 //    die($output);
	// require 'config/db.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		    $output = json_encode( array( 'type' => 'error', 'text' => 'Request must come from Ajax, getout !'));
		    die($output);
		}

		if (!isset($_REQUEST["g-recaptcha-response"], 
							 $_POST["user_token"],
							 $_POST["user_full_name"],
							 $_POST["user_username"],
							 $_POST["user_password"],
							 $_POST["user_password_confirmation"],
							 $_POST["user_email"],
							 $_POST["user_whatsapp"],
							 $_POST["user_securytitoken"])) {

			$output = json_encode(array('type'=> 'error', 'text' => "Falta campos"));
			die($output);
	    
		} else {
			$reCaptcha = $_REQUEST["g-recaptcha-response"];
			// $fullname = filter_var(trim($_POST["user_full_name"]), FILTER_SANITIZE_STRING);
			// $username = filter_var(trim($_POST["user_username"]), FILTER_SANITIZE_STRING);
			// $password = filter_var(trim($_POST["user_password"]), FILTER_SANITIZE_STRING);
			// $password_confirmation = filter_var(trim($_POST["user_password_confirmation"]), FILTER_SANITIZE_STRING);
			// $email = filter_var(trim($_POST["user_email"]), FILTER_SANITIZE_STRING);
			// $whatsapp = filter_var(trim($_POST["user_whatsapp"]), FILTER_SANITIZE_STRING);
			// $token = filter_var(trim($_POST["user_securytitoken"]), FILTER_SANITIZE_STRING);
		}

		$postdata = http_build_query(["secret"=>"6Lde5kYcAAAAANKpL5egqPd0Vh1FY2BL4zulUJ6f","response"=>$reCaptcha]);
    $opts = ['http' =>
        [
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata
        ]
    ];
    $context  = stream_context_create($opts);
    $result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
    $json = json_decode($result);

		// var_dump($json);

		if (isset($json->success) && $json->success) { 
			$output = json_encode(array('type' => 'success', 'text' => "RECAPTCHA SUCESSSO"));
			die($output);
		} else { 
			$output = json_encode(array('type' => 'error', 'text' => "nop"));
			die($output);
		}




		// if (strlen($username) < 6) {
		//     $output = json_encode(array('type' => 'error', 'text' => 'Name is too short!'));
		//     echo($output);
		// }
		unset($_SESSION['user_token']);
		unset($_SESSION['user_full_name']);
		unset($_SESSION['user_username']);
		unset($_SESSION['user_password']);
		unset($_SESSION['user_confirmpassword']);
		unset($_SESSION['user_email']);
		unset($_SESSION['user_whatsapp']);
		unset($_SESSION['user_securitykey']);
	} else {
    $output = json_encode(array('type' => 'error', 'text' => 'Requisicao indevida, getout !'));
    die($output);
  }
?>