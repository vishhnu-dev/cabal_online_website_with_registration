$(document).ready( function() {
	// Formulário ajax as json data, vishnu: 04/09/21
	$(".btn-registro").on( "click", function( event ) {
		event.preventDefault();

		flag = true;
   //  var fields = $('input.required');
   //  for(var i=0;i<fields.length;i++){
   //    if($(fields[i]).val() == ""){
   //    	flag = false;
			// 	$(".error-land").addClass("has-warning");
   //      swal({
			// 	  title: "Todos campos são obrigatórios!",
			// 	  icon: "info",
			// 	  button: "Entendi"
			// 	});
   //    }
   //  }

   //  var passwd  = document.getElementById('user_password').value;
	  // var passwdconf = document.getElementById('user_password_confirmation').value;
	  // if (passwd !== passwdconf) {
	  // 	flag = false;
	  	
	  // 	$(".pass").addClass("has-error");
	  //   swal({
			//   title: "A senhas informadas são diferentes",
			//   icon: "error",
			//   button: "Entendi"
			// });
	  // }

   // 	if (grecaptcha.getResponse() == "") {
   // 		flag = false;
   //   	swal({
			//   title: "Complete o reCaptcha para prosseguir...",
			//   icon: "error",
			//   button: "Entendi"
			// });
	 	// }

    if (flag) {
    	// var arcandius_data_form = $(this).serialize();
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
	      success: function(data) {
	      	console.log(data);
          if(data.type == 'error') {
            console.log(data);
          }else{
            console.log(data)
          }
	      }
	    });
    }else{
    	return false;
    }
	});
});