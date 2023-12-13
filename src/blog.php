<?php defined('VIVEY') or die('get Vivey');

if(!isset($page)) $page='index';

// Get Site info
$siteinfo = json2array("site-json.php");
// Get blog list
$contents = json2array("blog-json.php");

foreach($contents as $key => $value) {
    if($key==$page) {
        // Prepare the content
        $title = $value['title'];
        $keyword = $value['keyword'];
        $description = $value['description'];
        $content = file_get_contents(CONTENT_PATH.$page.'.txt');

        // Display content
        print the_header('',$pageinfo,$siteinfo);
        echo $content;
        print the_footer();
    }

}
