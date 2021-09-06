$(document).ready(function(){
	/* Menu scroll */
	$('a[href^="#"]').on('click',function (e) {
	  e.preventDefault();
	  var target = this.hash;
	  $target = $(target);
	  $('html, body').stop().animate({
	      'scrollTop':  $target.offset().top
	  }, 900, 'swing', function () {
	  });
	  $('.navbar-toggle:visible').trigger('click');
	});

	// box de mensagem
	// TOLLTIP BOX
  $(function () {
    $('[data-toggle="tooltip"]').css('z-index', '1001')
    $('[data-toggle="tooltip"]').tooltip()
  })

	// scroll up animation
  $(window).scroll(function () {
      if ($(this).scrollTop() > 70) {
          $(".ancor-up").fadeIn(1000);
      } else {
          $(".ancor-up").fadeOut(1000);
      }
  });

  $(".ancor-up").click(function () {
    $("html, body").animate({scrollTop: 0}, '1000', 'swing');
  });
  // end
    
	$('.formulario-box').hide();
	$('.newaccount-form').hide();
	$('.login-form').hide();
	
	$('.btn-close').click(function (){
		$('.formulario-box').hide("slide", { direction: "left" }, 500);
		$('.newaccount-form').hide("slide", { direction: "left" }, 500);
		$('.login-form').hide("slide", { direction: "left" }, 500);
	});

	$('.btn-login, .btn-login-mob').click(function () {
		if ( $('.formulario-box').css('display') == 'none' || $('.formulario-box').css("visibility") == "hidden") {
			$('.newaccount-form').hide("slide", { direction: "left" }, 500);
			$('.formulario-box').show("slide", { direction: "left" }, 500);
			$('.login-form').show("slide", { direction: "left" }, 500);
		}else{
			$('.formulario-box').hide("slide", { direction: "left" }, 200);
			$('.login-form').hide("slide", { direction: "left" }, 200);
			if ( $('.newaccount-form').css('display') != 'none' || $('.formulario-box').css("visibility") != "hidden") {
				setTimeout(function(){
					$('.newaccount-form').hide("slide", { direction: "left" }, 500);
					$('.formulario-box').show("slide", { direction: "left" }, 500);
					$('.login-form').show("slide", { direction: "left" }, 500);
				}, 300);
			}
		}
	});

	$('.btn-registro, .btn-registro-mob').click(function () {
		if ( $('.formulario-box').css('display') == 'none' || $('.formulario-box').css("visibility") == "hidden") {
			$('.login-form').hide("slide", { direction: "left" }, 500);
			$('.formulario-box').show("slide", { direction: "left" }, 500);
			$('.newaccount-form').show("slide", { direction: "left" }, 500);
		} else {
			$('.formulario-box').hide("slide", { direction: "left" }, 200);
			$('.newaccount-form').hide("slide", { direction: "left" }, 200);						
			if ( $('.newaccount-form').css('display') != 'none' || $('.formulario-box').css("visibility") != "hidden") {
				setTimeout(function(){
					$('.login-form').hide("slide", { direction: "left" }, 500);
					$('.formulario-box').show("slide", { direction: "left" }, 500);
					$('.newaccount-form').show("slide", { direction: "left" }, 500);
				}, 300);				
			}
		}		
	});


	$(".login-request").hover(function(){
	  $('.formulario-box').css('border-top', '3px solid coral');
	  }, function(){
	  $('.formulario-box').css('border-top', '3px solid #212121');
	});

	$(".new-account-request").hover(function(){
	  $('.formulario-box').css('border-bottom', '3px solid coral');
	  }, function(){
	  $('.formulario-box').css('border-bottom', '3px solid #212121');
	});

	// email field lowercase //
  	$("input[type='email']").on('keyup change', function() {    
	    email = $(this).prop('value')
	    email = email.toLowerCase();
	    email = email.replace(/[^\S]/g,'');
	    email = email.substr(email.search(/\w/g));
	    email = email.replace(/\s/g,'');
	    $(this).attr('value', email);
  	});

  	/////////////////////////
  	// MASCARA DE TELEFONE //
	/////////////////////////
	let pwdbehavior = function (val) {
	    return val.replace(/\D/g, '').length == 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	pwdptions = {
	    placeholder: "(__) _____-____",
	    onKeyPress: function(val, e, field, options) {
	        field.mask(pwdbehavior.apply({}, arguments), options);
      	}
	}
	$('.phone_with_ddd').mask(pwdbehavior, pwdptions);

	$('#user_securytitoken').mask('SSSSSS', {placeholder: "SSSSSS"});

	$('.email').mask("A", {
		translation: {
			"A": { pattern: /[\w@\-.+]/, recursive: true }
		}
	});
});