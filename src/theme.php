<?php 
/*
 * Layout Theme
 * Author Viggie <viggie@viggie.com>
 * 
 * Uses Bootstrap 4.3.1 in CDN.  You can change it to your preferrred CSS framework.  Just be sure to modify the class names in html as necessary
 */

function the_header($navlink, $title="Web Developer",$keyword="", $desc="") {
  $url = BASE_URL;
  $navhtml = '';

  // Building navigation
  if(is_array($navlink)) {
    foreach($navlink as $nav) {
      $navhtml .= '
      <li class="nav-item">
        <a class="nav-link" href="'.$url.$nav[0].'">'.$nav[1].'</a>
      </li>';
    }
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

    <title> $title  </title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="$url">Vivey</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto">
            $navhtml
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" style="margin-top:75px">
    <div class="row">
    <div class="col" style="min-height:75vh;">

END;

return $html;
}

function the_footer( $copyright="",$addjs="") {
	$url = BASE_URL;
	$html = '';
  $year = date("Y");

$html .= <<<END

    </div>
    </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col">
            <span class="copyright"> &copy; $year $copyright </span>
          </div>
          <div class="col">
            <ul class="list-inline float-end" style="font-size: 1.3rem;">
              <li class="list-inline-item ms-2">
                <a href="https://twitter.com/viggie" class="text-dark" target="_blank">
                  <i class="bi bi-twitter-x"></i>
                </a>
              </li>
                <li class="list-inline-item ms-2">
                  <a href="https://www.linkedin.com/in/viggie/" class="text-dark" target="_blank">
                    <i class="bi bi-linkedin"></i>
                  </a>
                </li>
              <li class="list-inline-item ms-2">
                <a href="https://www.facebook.com/viggie.bala" class="text-dark" target="_blank">
                  <i class="bi bi-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    $addjs
	
  </body>
</html>


END;

return $html;
}
