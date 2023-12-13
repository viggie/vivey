<?php
// Top navigation with URL, Name in array
// Add a new array to add a page in nav
$navlink = [
    ['about', 'About Us'],
    ['contact', 'Contact Us']
  ];

// Get Site info
$siteinfo = json2array("site-json.php");

// Display content
print the_header($navlink,$siteinfo,$siteinfo);
echo "<h1>Oops</h1>
<p>The page doesn't exist.  Please click on the navigation to browse other pages.</p>";
print the_footer();
