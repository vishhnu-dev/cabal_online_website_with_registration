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

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	#proteção csrf
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		// if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		//     $output = json_encode( array( 'type' => 'error', 'text' => 'Request must come from Ajax, getout !'));
		//     die($output);
		// }
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


		// if( empty($_REQUEST["g-recaptcha-response"]) || 
		// 		empty($_POST["user_token"]) ||
		// 		empty($_POST["user_full_name"]) ||
		// 		empty($_POST["user_username"]) ||
		// 		empty($_POST["user_password"]) ||
		// 		empty($_POST["user_password_confirmation"]) ||
		// 		empty($_POST["user_email"]) ||
		// 		empty($_POST["user_whatsapp"]) ||
		// 		empty($_POST["user_securytitoken"])
		// 	) {
			// $output = json_encode(array('type'=> 'error', 'text' => "Preencha todos os campos !"));
			// die($output);
		// } else {
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// vars
			$reCaptcha = $_REQUEST["g-recaptcha-response"];
			$fullname = filter_var(trim($_POST["user_full_name"]), FILTER_SANITIZE_STRING);
			$username = filter_var(trim($_POST["user_username"]), FILTER_SANITIZE_STRING);
			$password = $_POST["user_password"];
			$password_confirmation = $_POST["user_password_confirmation"];
			$email = filter_var(trim($_POST["user_email"]), FILTER_VALIDATE_EMAIL);
			$whatsapp = $_POST["user_whatsapp"];
			$token = filter_var(trim($_POST["user_securytitoken"]), FILTER_SANITIZE_STRING);
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// $output = json_encode(array('type'=> 'error', 'text' => "
			// 																													".$reCaptcha."
			// 																												  ".$fullname."
			// 																												  ".$username."
			// 																												  ".$password."
			// 																												  ".$password_confirmation."
			// 																												  ".$email."
			// 																												  ".$whatsapp."
			// 																												  ".$token."
			// 																												"));

			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// recaptcha
			// $postdata = http_build_query(["secret"=>"6Lde5kYcAAAAANKpL5egqPd0Vh1FY2BL4zulUJ6f","response"=>$reCaptcha]);
	  //   $opts = ['http' =>
	  //       [
	  //           'method'  => 'POST',
	  //           'header'  => 'Content-type: application/x-www-form-urlencoded',
	  //           'content' => $postdata
	  //       ]
	  //   ];
	  //   $context  = stream_context_create($opts);
	  //   $result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
	  //   $json = json_decode($result);
	    
			// // var_dump($json);

			// if (isset($json->success) && $json->success) { 
			// 	$output = json_encode(array('type' => 'success', 'text' => "RECAPTCHA SUCESSSO"));
			// 	die($output);
			// } else { 
			// 	$output = json_encode(array('type' => 'error', 'text' => "nop"));
			// 	die($output);
			// }

			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//MÉTODOS E HELPERS
			function native_value($valor){
			 	$valor = trim($valor);
			  $valor = str_replace(".", "", $valor);
			  $valor = str_replace("(", "", $valor);
			  $valor = str_replace(")", "", $valor);
			  $valor = str_replace(" ", "", $valor);
			  $valor = str_replace("-", "", $valor);
			  $valor = str_replace("+", "", $valor);
			  return $valor;
			}

			// $number = preg_match('@[0-9]@', $password);
		 //  $uppercase = preg_match('@[A-Z]@', $password);
		 //  $lowercase = preg_match('@[a-z]@', $password);
		 //  $specialChars = preg_match('@[^\w]@', $password);

		 //  $number2 = preg_match('@[0-9]@', $password_confirmation);
		 //  $lowercase2 = preg_match('@[a-z]@', $password_confirmation);
		 //  $specialChars2 = preg_match('@[^\w]@', $password_confirmation);

		 //  $lowercase3 = preg_match('@[a-z]@', $token);

		  // NATIVE VALUES
			$whatsapp_formated = native_value($whatsapp);
			///////////////////////////////////////////////////////

			//
			// VALIDAÇÕES
			// if (strlen($fullname) < 6) {
			//     $output = json_encode(array('type' => 'error', 'text' => 'Nome deve conter no mínimo 8 caracteres.'));
			//     die($output);
			// }
			// if (strlen($username) < 6) {
			//     $output = json_encode(array('type' => 'error', 'text' => 'Username deve conter no mínimo 6 caracteres.'));
			//     die($output);
			// }

			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// PASSWD
		 //  if(strlen($password) < 8 || !$number || !$lowercase || !$specialChars) {
		 //    $output = json_encode(array('type' => 'error', 'text' => 'Senha: mínimo 8 caracteres sendo eles (letras minúsculas, números e carateres especiais(@!~^).'));
		 //    die($output);
		 //  }

		 //  if(strlen($password) < 8 || !$number2 || !$lowercase2 || !$specialChars2) {
		 //    $output = json_encode(array('type' => 'error', 'text' => 'Confimar senha: mínimo 8 caracteres sendo eles (letras minúsculas, números e carateres especiais(@!~^) aceitos.'));
		 //    die($output);
		 //  }
		 //  if ($password !== $password_confirmation) {
			//     $output = json_encode(array('type' => 'error', 'text' => 'As senhas informadas são diferentes.'));
			//     die($output);
			// }
		 //  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			//     $output = json_encode(array('type' => 'error', 'text' => 'O email não possue um formato válido.'));
			//     die($output);
			// }

			// if (strlen($whatsapp) < 10) {
			//     $output = json_encode(array('type' => 'error', 'text' => 'WhatsApp Inválido.'));
			//     die($output);
			// }
			// if (strlen($token) < 6) {
			//     $output = json_encode(array('type' => 'error', 'text' => 'Token deve conter no mínimo 6 caracteres(letras minúsculas apenas).'));
			//     die($output);
			// }
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		// $output = json_encode(array('type' => 'error', 'text' => hash('sha256', $_POST['user_password'])));
  //   die($output);


			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			require 'config/db.php';
			$login = 0;
			$username_select = $_POST['user_username'];
			$email_select = $_POST['user_email'];
			// CHECK USERNAME ALREADY IN USE
			// $username_sql = "SELECT * FROM dbo.cabal_auth_table WHERE ID='".$username_select."' ";
   // 		if ($result = sqlsrv_query($conn, $username_sql) !== false) {
			// 	$output = json_encode(array('type' => 'error', 'text' => 'Username em uso !'));
   //  		die($output);
			// }else{
			// 	 die( print_r( sqlsrv_errors(), true));
			// }
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// CHECK IF EMAIL IS ALREADY IN USE
			$email_sql = "SELECT * FROM dbo.cabal_auth_table WHERE Email = '".$email_select."'";
			if ($result = sqlsrv_query($conn, $email_sql) !== false) {
				$output = json_encode(array('type' => 'error', 'text' => 'Email em uso !'));
    		die($output);
			}else{
				 die( print_r( sqlsrv_errors(), true));
			}
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			$sql = "INSERT INTO dbo.cabal_auth_table (uName, ID, Password, Email, ArcandiusWhatsapp, ArcandiusToken, Login) VALUES (?, ?, PWDENCRYPT(?), ?, ?, ?, ?)";
			$params = array($fullname, $username, $password, $email, $whatsapp_formated, $token, $login);
			$vishnu_res = sqlsrv_query($conn, $sql, $params);
			
			if($vishnu_res === false ) {
			  die( print_r( sqlsrv_errors(), true));
			}else{
				$output = json_encode(array('type' => 'error', 'text' => 'cadastrou!'));
    		die($output);
			}

			sqlsrv_close($conn);

			unset($_SESSION['user_token']);
			unset($_SESSION['user_full_name']);
			unset($_SESSION['user_username']);
			unset($_SESSION['user_password']);
			unset($_SESSION['user_confirmpassword']);
			unset($_SESSION['user_email']);
			unset($_SESSION['user_whatsapp']);
			unset($_SESSION['user_securitykey']);
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// }
	} else {
    $output = json_encode(array('type' => 'error', 'text' => 'Requisicao indevida, getout !'));
    die($output);
  }
?>