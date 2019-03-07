<?php 
/*
 * Layout Theme
 * Author Viggie <viggie@viggie.com>
 * 
 */


function the_header($title="Web Developer",$keyword, $desc, $navlink='',$captchajs='') {
	$url = BASE_URL;
    $navstyle = '';
	if ($navlink == 'white') {
		$navstyle = <<<END
<style type="text/css">
@media (min-width:992px) { 
	#mainNav .navbar-nav .nav-item .nav-link{color:#fff}
}
</style>
END;
   }

$html = <<<END
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="$desc">
	<meta name="keyword" content="$keyword">
    <meta name="generator" content="Vivey">

    <title> $title ::  </title>

    <!-- Bootstrap core CSS -->
    <link href="$url/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="$url/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="$url/assets/css/agency.min.css" rel="stylesheet">
    $navstyle
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2091755-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());   gtag('config', 'UA-2091755-1');
	</script>
	
	$captchajs

  </head>

  <body id="page-top">
    <div id="page-preloader"><span class="spinner"></span></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="$url">Viggie</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="$url/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="$url/portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="$url/about-viggie">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="$url/blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="$url/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
END;
/*
if($parallax != 'No') {

//	$bg = array('pa-blore-sky.jpg', 'pa-chittoor.jpg', 'pa-dharmapuri.jpg', 'pa-falls-closeup.jpg', 'pa-road.jpg', 'pa-sivasamudra.jpg', 'pa-tpk.jpg', 'pa-paddy-fields.jpg' );
//	$i = rand(0, count($bg)-1);
//	$selectedBg = "$bg[$i]";


$html .= <<<END
	
	<div id="parallax" style=" background: url('$parallax') center center no-repeat;"></div>
END;
}
*/

return $html;
}

function the_footer( $footercontact="N",$addjs="") {
	$url = BASEURL;
	$html = '';

 if($footercontact == 'Y') :
$html = <<<END
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Viggie</h2>
            <h3 class="section-subheading text-muted">Just write. I'm eager to help.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
                  <div id="success"></div>
          </div>
        </div>
      </div>
    </section>

END;
 endif;


$html .= <<<END

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; 2003 - 2017 Viggie.com</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/viggie" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/viggie/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/viggie.bala" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                Based on <a href="https://startbootstrap.com/template-overviews/agency/" target="_blank">Agency</a>
              </li>
              <li class="list-inline-item">
                theme from <a href="https://startbootstrap.com/" target="_blank">Start Bootstrap</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="$url/vendor/jquery/jquery.min.js"></script>
    <script src="$url/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="$url/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="$url/assets/js/jqBootstrapValidation.js"></script>
    <script src="$url/assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="$url/assets/js/agency.min.js"></script>

	$addjs
	
  </body>
</html>


END;

return $html;
}
