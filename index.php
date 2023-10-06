<?php
/*
 * Processing all URLs for Vivey
 * 
 */
session_start();
require_once 'base-config.php';
require_once SOURCE.'router.php';
require_once SOURCE.'theme.php';
$url = str_replace('/','\/',BASE_URL);

$router = new ViveyRouter();
$router->route('/^'.$url.'?$/', function(){
	$page='index';
	include SOURCE.'content.php';
    // print "Home Page - Load index.php";
 });
$router->route('/^'.$url.'([\w-]+)\/?$/', function($page){
	if(is_file("content/{$page}.txt"))
		include SOURCE.'content.php';
 	else include NOT_FOUND;
    // print "Direct Page - Load {$task}.php";
 });
$router->route('/^'.$url.'([\w-]+)\/([\w-]+)\/?$/', function($folder,$page){
	if(is_file("{$folder}/{$page}.php"))
 	  include "{$folder}/{$page}.php";
	else include "404.php";
   // print "Folder Page - Load {$folder}/{$task}.php";
 });
$router->route('/^'.$url.'([\w-]+)\/([\w-]+)\/([\w-]+)\/?$/', function($section,$cat,$task){
	if($section == 'blog') 
 	  include "blog-posts/blogpost.php";
 	else if($section == 'portfolio') 
 	  include "pfolio/{$cat}-{$task}.php";
	else include "404.php";
   // print "Folder Cat Page - Load {$section}/{$cat}/{$task}.php";
 });
$router->route('/^'.$url.'([\w-]+)\/([\w-]+)\/([\w-]+)\/([\w-]+)\/?$/', function($city, $region, $task, $subtask){
    print "city={$city}, region={$region}, task={$task}, subtask={$subtask}";
 });


$router->execute($_SERVER['REQUEST_URI']);


 // print '<p>Request URI : '.$_SERVER['REQUEST_URI'] . '</p>';

