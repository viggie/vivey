<?php
/*
 * Processing all URLs for Vivey
 * 
 */
session_start();
require_once 'src/config.php';
require_once SOURCE.'router.php';
require_once SOURCE.'theme.php';

$router = new ViveyRouter();
$router->route('/^\/viggie\/?$/', function(){
	include 'content/index.php';
    // print "Home Page - Load index.php";
 });
$router->route('/^\/viggie\/([\w-]+)\/?$/', function($task){
	if(is_file("content/{$task}.php"))   
 	  include "content/{$task}.php";
 	  else include "404.php";
    // print "Direct Page - Load {$task}.php";
 });
$router->route('/^\/viggie\/([\w-]+)\/([\w-]+)\/?$/', function($folder,$task){
	if(is_file("{$folder}/{$task}.php"))
 	  include "{$folder}/{$task}.php";
	else include "404.php";
   // print "Folder Page - Load {$folder}/{$task}.php";
 });
$router->route('/^\/viggie\/([\w-]+)\/([\w-]+)\/([\w-]+)\/?$/', function($section,$cat,$task){
	if($section == 'blog') 
 	  include "blog-posts/blogpost.php";
 	else if($section == 'portfolio') 
 	  include "pfolio/{$cat}-{$task}.php";
	else include "404.php";
   // print "Folder Cat Page - Load {$section}/{$cat}/{$task}.php";
 });
$router->route('/^\/viggie\/([\w-]+)\/([\w-]+)\/([\w-]+)\/([\w-]+)\/?$/', function($city, $region, $task, $subtask){
    print "city={$city}, region={$region}, task={$task}, subtask={$subtask}";
 });


$router->execute($_SERVER['REQUEST_URI']);


 // print '<p>Request URI : '.$_SERVER['REQUEST_URI'] . '</p>';

