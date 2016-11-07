<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Optimal Care - Contact us</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/nivo-lightbox.css">
	<link rel="stylesheet" href="assets/css/style.css">
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/assets/js/validate.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	
	<!-- Nav -->
	<header>
		<div id="search-bar" class="animated">
			<div class="container">
				<div class="row">
					<form action="#" name="search" class="col-xs-12">
						<input type="text" name="search" placeholder="Type and Hit Enter"><i id="search-close" class="fa fa-close"></i>
					</form>
				</div>
			</div>
		</div>
		<nav class="navigation">
			<div class="container">
				<div class="row">
					<div class="logo-wrap col-md-3 col-xs-6">
						<a href="index.html"><img src="assets/img/main-logo.png" alt="" style="height: 60px;"></a>
					</div>
					<div class="menu-wrap col-md-8 ">
						<ul class="menu">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<span><a href="producto.html">Products</a></span>
								<ul class="submenu">
									<li><a href="baby.html">Baby</a></li>
									<li><a href="toilet.html">Toilet</a></li>
									<li><a href="facial.html">Facial</a></li>
									<li><a href="cleaning.html">Cleaning</a></li>
								</ul>
							</li>
							<!--
							<li>
								<span>Causes</span>
								<ul class="submenu">
									<li><a href="causes-grid.html">Causes Grid</a></li>
									<li><a href="causes-list.html">Causes List</a></li>
									<li><a href="causes-single.html">Causes Single</a></li>
								</ul>
							</li>
							-->
							<li>
								<a href="about-us.html">About</a>
							</li>
							<!--
							<li>
								<span>Blog</span>
								<ul class="submenu">
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-single.html">Blog Single</a></li>
								</ul>
							</li>
							-->
							<li class="active" >
								<a href="contact-us.html">Contact</a>
							</li>
							<li>
								<a href="contact-us.html">Consumer</a>
							</li>
							<li>
								<a href="contact-us_es.html" style="background-color: #ffbd0f;">Español</a>
							</li>
						</ul>
					</div>
					<div class="col-md-1 col-xs-6">
						<div id="menu-toggle">
							<i class="fa fa-bars"></i>
						</div>
						<!--
						<div id="search-toggle">
							<i class="fa fa-search"></i>
						</div>
						-->	
					</div>
				</div>
			</div>
		</nav>
	</header>

	<!-- Banner -->
	<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>Contact Us</h2>
				<div class="short-text">
					<div class="sep l"></div>
					<h5>Home<i class="fa fa-angle-double-right"></i>Contact Us</h5>
					<div class="sep r"></div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- contact wrapper -->
	<div class="contact-page-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="widget-title">
						<h4>Where You Can Find Us</h4>
						<div class="sep">
						<div class="sep-inside"></div>
					</div>
					</div>
					<br />					
					<p class="description">Optimal Care S.A. benefits from a 20,000 m2 facility located 50 km outside Madrid in Yunquera de Henares (Guadalajara).</p>
					<div class="row">
						<div class="col-sm-4 widget">
							<h4>Address</h4>
							<i class="fa fa-map-marker"></i>
							<p>Avda. Filipinas s/n 
								<br/>
								19210 Yunquera de Henares - Guadalajara
								<br/>
								(Spain)
							</p>
						</div>
						<div class="col-sm-4 widget">
							<h4>Phone</h4>
							<i class="fa fa-phone"></i>
							<p>Phone 0034 949 331 055
								<br/>
								Fax 0034 949 331 319
							</p>
						</div>
						<div class="col-sm-4 widget">
							<h4>E-mail</h4>
							<i class="fa fa-envelope"></i>
							<p>optimal@optimalcaresa.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="comment-form-wrapper clearfix">
						<div class="widget-title ">
							<h4>Contact Us</h4>
							<div class="sep">
								<div class="sep-inside"></div>
							</div>
						</div>
			<form class="comment-form row altered" method="post" action="/enviar.php">

<!--- -------------------------------------------------------------------------------------------------- --->
	<div class="field col-sm-4">
	<h4>Name</h4>
          <input type="text" class="text" value="<?php if (isset($_SESSION['namec'])) { echo $_SESSION['namec'] ;}?>" id="name" name="name" placeholder="Nombre *">
                                <script type="text/javascript">
var f1 = new LiveValidation('name');
f1.add(Validate.Presence);
f1.add( Validate.Length, { minimum: 2, maximum: 40 } );
f1.add( Validate.Format, { pattern: /^[a-zA-ZüÜáéíóúÁÉÍÓÚñÑ ]+$/i } )
                                </script>
    </div>
<!--- -------------------------------------------------------------------------------------------------- --->
		<div class="field col-sm-4">
		<h4>E-mail</h4>
          <input type="text" class="text" value="<?php if (isset($_SESSION['emailc'])) { echo $_SESSION['emailc'] ;}?>" id="email" name="email" placeholder="Email *">
                            <script type="text/javascript">
var f2 = new LiveValidation('email');
f2.add(Validate.Presence);
f2.add( Validate.Format, { pattern: /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i } );
f2.add( Validate.Length, { minimum: 6, maximum: 70 } );
		          			</script>
		</div>
<!--- -------------------------------------------------------------------------------------------------- --->
		<div class="field col-sm-4">
		<h4>Subject</h4>
          <input type="text" class="text" value="<?php if (isset($_SESSION['subjectc'])) { echo $_SESSION['subjectc'] ;}?>" id="subject" name="subject" placeholder="Asunto *">
                                <script type="text/javascript">
var f3 = new LiveValidation('subject');
f3.add(Validate.Presence);
f3.add( Validate.Length, { minimum: 2, maximum: 70 } );
f3.add( Validate.Format, { pattern: /^[a-zA-ZüÜáéíóúÁÉÍÓÚñÑ ]+$/i } )
                                </script>
        </div>
<!--- -------------------------------------------------------------------------------------------------- --->
		<div class="field col-sm-12">
		<h4>Message</h4>
          <textarea name="message" id="message" placeholder="Mensaje *"><?php if (isset($_SESSION['messagec'])) { echo $_SESSION['messagec'] ;}?></textarea>
                        <script type="text/javascript">
var f4 = new LiveValidation('message');
f4.add(Validate.Presence);
f4.add( Validate.Length, { maximum: 320 } );
f4.add( Validate.Format, { pattern: /^$|^[0-9A-Za-z üÜáéíóúÁÉÍÓÚñÑ\(\)\.\?\¿,¡!;:a\r\nb\r\nc]+$/i } );
							</script>
		</div>
<!--- -------------------------------------------------------------------------------------------------- --->
          <div class="clearfix"> </div>
          <!-- NOCAPTCHA RECAPTCHA -->
		  <!--
          <div class="captchacontainer">
				<!-- <div class="g-recaptcha" hl="es" data-sitekey="6LdwBxUTAAAAAA267SdE9VNazqDACAN-k0PSUS2k"></div> -->
				<!--<div class="g-recaptcha" hl="es" data-sitekey="6LdOUAsUAAAAAObPEOF8ZQJs-yIdXDI0gum9ZTwC"></div>
				-->
		  <!-- NOCAPTCHA RECAPTCHA -->
		  <!-- // -->
		  <!-- MENSAJES POR SESION-->
						<?php if (isset($_SESSION['errorcaptcha'])) {echo "<p id='formSubmitMessageERROR' class='errormessage'>Por favor completa correctamente el captcha</p>";} unset ($_SESSION['errorcaptcha']); ?>
					    <?php if (isset($_SESSION['sent'])) {echo "<p id='formSubmitMessage' class='okmessage'>Tu mensaje se ha enviado correctamente</p>";} unset ($_SESSION['sent']); ?>
		   <!-- MENSAJES POR SESION-->
          <button class="btn btn-big btn-solid" type="submit"><i class="fa fa-paper-plane"></i><span>Send Message</span></button>
        </div>
      </form>

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm')
        .formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and can\'t be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        /*remote: {
                            url: 'remote.php',
                            message: 'The username is not available'
                        },*/
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        }
                    }
                }
            }
        })
        .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the FormValidation instance
            var bv = $form.data('formValidation');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Foter -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="about widget clearfix">
						<img src="assets/img/main-logo.png" alt="">
						<p>Your Partner in Wipes.
							<br/>
							Personal care and household products.
						</p>
						<!--
						<div class="social-media-icons">
							<a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
							<a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
							<a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
							<a href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
							<a href="#"><i class="fa fa-skype"></i><span>Skype</span></a>

						</div>
						-->
					</div>
				</div>
				<div class="col-md-2 col-sm-6 ">
				</div>
				<div class="col-md-2 col-sm-6 ">
					<div class="quick-links widget clearfix">
						<h4 class="title">Quick Links</h4>
						<div class="links">
							<a href="about-us.html"><i class="fa fa-angle-double-right"></i>About Us</a>
							<a href="producto.html"><i class="fa fa-angle-double-right"></i>Products</a>
							<a href="#"><i class="fa fa-angle-double-right"></i>Terms and Conditions</a>
							<a href="#"><i class="fa fa-angle-double-right"></i>Privacy Policy</a>
							<!-- <a href="#"><i class="fa fa-angle-double-right"></i>Blog</a> -->
							<!-- <a href="#"><i class="fa fa-angle-double-right"></i>Campains</a> -->
						</div>
					</div>
				</div>
				<!--
				<div class="col-md-3 col-sm-6 ">
					<div class="tags-outer widget clearfix">
						<h4 class="title">Tags</h4>
						<div class="tags">
							<a href="#"><span>Cause</span></a>
							<a href="#"><span>Lipsum</span></a>
							<a href="#"><span>Donation</span></a>
							<a href="#"><span>Charitable</span></a>
							<a href="#"><span>Homeless</span></a>
							<a href="#"><span>Blog</span></a>
							<a href="#"><span>Minimal</span></a>
							<a href="#"><span>Health</span></a>
							<a href="#"><span>Education</span></a>
							<a href="#"><span>LifStyle</span></a>
						</div>
					</div>
				</div>
				-->
				<!--
				<div class="col-md-4 col-sm-6">
					<div class="subcribe widget clearfix">
						<h4 class="title">Subscribe</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate provident amet reprehenderit!</p>
						<form action="#">
							<div class="field">
								<input type="email" name="e-mail" placeholder="Your E-mail">
							</div>
							<div class="field">
								<button class="btn btn-min btn-solid"><span>Subscibe</span></button>
							</div>
						</form>
					</div>
				</div>
				-->
			</div>
		</div>
		<div class="footer-bar">
			<div class="container">
				<!-- <h5>Created With <i class="fa fa-heart"></i> by Kemoboy Design.  &copy; Copyright <a href="#">Humanit 2016</a> | All Rights Reserved</h5> -->
				<h5>© 2016 - Optimal Care.</h5>
			</div>
		</div>
	</footer>  
	
	<!-- Scripts -->
	<script type="text/javascript" src="assets/js/jquery2.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js
	"></script>
	<script type="text/javascript" src="assets/owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
	<script type="text/javascript" src="assets/js/js.js"></script>

</body>
</html>