<?php 
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// PROTEÇÃO CSRF
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		  header("Location: http://localhost:8000/error_404.html");
		  exit();
		}

		session_start();

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if( empty($_REQUEST["g-recaptcha-response"]) || 
				empty($_POST["user_token"]) ||
				empty($_POST["user_full_name"]) ||
				empty($_POST["user_username"]) ||
				empty($_POST["user_password"]) ||
				empty($_POST["user_password_confirmation"]) ||
				empty($_POST["user_email"]) ||
				empty($_POST["user_whatsapp"]) ||
				empty($_POST["user_securytitoken"])
			) {
				$output = json_encode(array('type'=> 'error', 'text' => "Preencha todos os campos."));
				die($output);
		} else {
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
			}

		  // NATIVE VALUES
		  $lowercase3 = preg_match('@[a-z]@', $token);
			$whatsapp_formated = native_value($whatsapp);
			///////////////////////////////////////////////////////

			
			// VALIDAÇÕES
			if (strlen($fullname) < 8) {
			  $output = json_encode(array('type' => 'error', 'text' => 'Nome deve conter no mínimo 8 caracteres.'));
			  die($output);
			}
			if (strlen($username) < 6) {
			  $output = json_encode(array('type' => 'error', 'text' => 'Username deve conter no mínimo 6 caracteres.'));
			  die($output);
			}

			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// PASSWD
		  if(strlen($password) < 8 ) {
		    $output = json_encode(array('type' => 'error', 'text' => 'Senha: mínimo 8 caracteres.'));
		    die($output);
		  }

		  if(strlen($password) < 8 ) {
		    $output = json_encode(array('type' => 'error', 'text' => 'Confimar Senha: mínimo 8 caracteres.'));
		    die($output);
		  }
		  if ($password !== $password_confirmation) {
			    $output = json_encode(array('type' => 'error', 'text' => 'As senhas informadas são diferentes.'));
			    die($output);
			}

		  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $output = json_encode(array('type' => 'error', 'text' => 'O email não possue um formato válido.'));
			  die($output);
			}

			if (strlen($whatsapp) < 9) {
		    $output = json_encode(array('type' => 'error', 'text' => 'WhatsApp Inválido.'));
		    die($output);
			}
			if (strlen($token) < 6) {
		    $output = json_encode(array('type' => 'error', 'text' => 'Token deve conter no mínimo 6 caracteres(letras minúsculas apenas).'));
		    die($output);
			}
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			// recaptcha
			$postdata = http_build_query(["secret"=>"6Lde5kYcAAAAANKpL5egqPd0Vh1FY2BL4zulUJ6f", "response"=>$reCaptcha]);
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
			
			if (isset($json->success) && $json->success) { 
			} else { 
				$output = json_encode(array('type' => 'error', 'text' => "reCaptcha_fail"));
				die($output);
			}
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			//  USUARIO
			require 'config/db.php';
			$login = 0;
			$username_select = $_POST['user_username'];
			$email_select = $_POST['user_email'];
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			// CHECK USERNAME ALREADY IN USE
			$username_sql = "SELECT * FROM dbo.cabal_auth_table WHERE ID='".$username_select."'";
			$stmt = sqlsrv_query($conn, $username_sql, array(), array( "Scrollable" => 'static' ));

			if ($stmt !== NULL) {  
	      $row_count = sqlsrv_num_rows($stmt);

	      if ($row_count > 0 ){
	        $output = json_encode(array('type' => 'error', 'text' => 'username_fail'));
    			die($output);
	      }
	   		sqlsrv_free_stmt($stmt);
	   	}
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			$email_sql = "SELECT * FROM dbo.cabal_auth_table WHERE Email='".$email_select."'";
			$stmt_email = sqlsrv_query($conn, $email_sql, array(), array( "Scrollable" => 'static' ));

			if ($stmt_email !== NULL) {  
	      $row_count = sqlsrv_num_rows($stmt_email);

	      if ($row_count > 0 ){
	        $output = json_encode(array('type' => 'error', 'text' => 'email_fail'));
    			die($output);
	      }
	   		sqlsrv_free_stmt($stmt_email);
	   	}
			
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			$login = 0;
			require 'config/db.php';

			$sql = "INSERT INTO dbo.cabal_auth_table (uName, ID, Password, Email, ArcandiusWhatsapp, ArcandiusToken, Login) VALUES (?, ?, PWDENCRYPT(?), ?, ?, ?, ?)";
			$params = array($fullname, $username, $password, $email, $whatsapp_formated, $token, $login);
			$vishnu_res = sqlsrv_query($conn, $sql, $params);

			if($vishnu_res === false ) {
			  $output = json_encode(array('type' => 'error', 'text' => 'Erro no cadastro.'));
    		die($output);
			}else{
				sqlsrv_free_stmt($vishnu_res);
				$output = json_encode(array('type' => 'sucess', 'text' => 'cadastrou!'));
    		die($output);
			}

			unset($_SESSION['user_token']);
			unset($_SESSION['user_full_name']);
			unset($_SESSION['user_username']);
			unset($_SESSION['user_password']);
			unset($_SESSION['user_confirmpassword']);
			unset($_SESSION['user_email']);
			unset($_SESSION['user_whatsapp']);
			unset($_SESSION['user_securitykey']);
			
			sqlsrv_close($conn);
			exit();
		}
	} else {
    header("Location: http://localhost:8000/error_404.html");
	  exit();
	}
?>