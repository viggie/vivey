<?php defined('VIVEY') or die('get Vivey');

if(!isset($page)) $page='index';
$showed = false;

// Get Page list
$jsonvalues = file(JSON_PATH."content-json.php");
// remove php security code in file
unset($jsonvalues[0]);
$jsonvalues = implode($jsonvalues);
$contents = json_decode($jsonvalues, true);

$navlink = [];
foreach($contents as $key => $value) {
    $navlink[] = [$value['url'],$value['menuname']];
    if($key==$page) {
        // Prepare the content
        $title = $value['title'];
        $keyword = $value['keyword'];
        $description = $value['description'];
        $content = file_get_contents(CONTENT_PATH.$page.'.txt');

        $showed = true;
    }
}

// Render page

if($showed) {
    print the_header($navlink,$title,$keyword,$description);
    echo $content;
    print the_footer();
} else {
    include NOT_FOUND;
}

