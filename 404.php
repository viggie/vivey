<?php
// Top navigation with URL, Name in array
// Add a new array to add a page in nav
$navlink = [
    ['about', 'About Us'],
    ['contact', 'Contact Us']
  ];

// Get Page list
$jsonvalues = file(JSON_PATH."site-json.php");
// remove php security code in file
unset($jsonvalues[0]);
$jsonvalues = implode($jsonvalues);
$contents = json_decode($jsonvalues, true);

// Prepare the content
$title = $contents['title'];
$keyword = $contents['keyword'];
$description = $contents['description'];

// Display content
print the_header($navlink,$title,$keyword,$description);
echo "<h1>Oops</h1>
<p>The page doesn't exist.  Please click on the navigation to browse other pages.</p>";
print the_footer();
