<?php
// 404 default error page

// Get Site info
$siteinfo = json2array("site-json.php");
$pageinfo = $siteinfo;
$pageinfo['title'] = '404 Page not found';
// Get Page list
$contents = json2array("content-json.php");
$navlink = [];
foreach($contents as $key => $value) {
    $navlink[] = [$value['url'],$value['menuname']];
}

// Display content
http_response_code(404);
print the_header($navlink,$pageinfo,$siteinfo);
echo "<h1>Oops</h1>
<p>The page doesn't exist.  Please click on the navigation to browse other pages.</p>";
print the_footer();
