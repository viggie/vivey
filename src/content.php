<?php defined('VIVEY') or die('get Vivey');

if(!isset($page)) $page='index';
$showed = false;

// Get Site info
$siteinfo = json2array("site-json.php");
// Get Page list
$contents = json2array("content-json.php");
$navlink = [];

foreach($contents as $key => $value) {
    $navlink[] = [$value['url'],$value['menuname']];
    if($key==$page) {
        // Prepare the content
        $pageinfo = $value;
        $content = file_get_contents(CONTENT_PATH.$page.'.txt');

        $showed = true;
    }
}

// Render page

if($showed) {
    print the_header($navlink,$pageinfo,$siteinfo);
    echo $content;
    print the_footer($siteinfo['copyright']);
} else {
    include NOT_FOUND;
}

