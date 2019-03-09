<?php 
/*
 * Layout Theme
 * Author Viggie <viggie@viggie.com>
 * 
 */


function the_header($title="Web Developer",$keyword, $desc) {
  $url = BASE_URL;
  $navlink = array( 'about', 'blog');

$html = <<<END
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="$desc">
  	<meta name="keyword" content="$keyword">
    <meta name="generator" content="Vivey">

    <title> $title  </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
  </head>

  <body id="page-top">
    <div id="page-preloader"><span class="spinner"></span></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="$url">Vivey</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="$url$navlink[0]">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="$url$navlink[1]">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" style="margin-top:75px">
    <div class="row">
    <div class="col">

END;

return $html;
}

function the_footer( $copyright="",$addjs="") {
	$url = BASE_URL;
	$html = '';

$html .= <<<END

    </div>
    </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright"> $copyright </span>
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
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    $addjs
	
  </body>
</html>


END;

return $html;
}
