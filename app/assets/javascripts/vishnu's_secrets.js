$(document).ready( function() {
	// Formulário ajax as json data, vishnu: 04/09/21
	$(".btn-registro").on( "click", function() {
		var arcandius_data_form = new FormData($('#arcandius_user_new_account')[0]);
		$.ajax({
			url: "usuario.php",
			type: 'POST',
			dataType:'JSON',
			cache: false,
			processData: false,
			contentType: false,
			data: arcandius_data_form,
			timeout: 8000,
			async: false,
	    success: function(data) {
	      if(data.type == 'error') {
	      	console.log(data);
	      	console.log(data.text);
	      	typeof(data.text);
	      	switch(data.text) {
					  case "reCaptcha_fail":
	          	swal({
	    				  title: 'Recaptcha Incorreto ou expirou.',
	    				  icon: "error",
	    				  button: "Entendi",
	    					}).then(function(){
	    						location.reload(true);
    					});
					    break;
					  case "username_fail":
	          	swal({
	    				  title: 'Username já está em uso.',
	    				  icon: "error",
	    				  button: "Entendi",
	    					}).then(function(){
	    						location.reload(true);
	    				});
					    break;
					  case "email_fail":
	  	      	swal({
	  					  title: 'Email já está em uso.',
	  					  icon: "error",
	  					  button: "Entendi"
	  						}).then(function(){
	  							location.reload(true);
	  						});
					  	break;
					  default:
					    swal({
							  title: data.text,
							  icon: "warning",
							  button: "Entendi"
							});
					}
	      }else{
	      	console.log(data);
	        swal({
					  title: "Tudo pronto para Jogar! Obrigado por se cadastrar.",
					  icon: "success",
					  button: "Yeahh!"
						}).then(function(){
							location.reload(true);
					});
	      }
	    }
	  });
	});
});