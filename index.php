<?php
require 'langs.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
\Slim\Extras\Views\Mustache::$mustacheDirectory = "Mustache/";
$app = new \Slim\Slim(array(
  'view' => new \Slim\Extras\Views\Mustache()
));

$availableLangs = array('en','it','ru');

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, and `Slim::delete`
 * is an anonymous function.
 */

// GET route
$app->get('/', function ($lang = 'en') use ($app, $langs, $availableLangs) {
  $req = $app->request();
  $userLang = $req->headers('HTTP_ACCEPT_LANGUAGE');
  $userLang = substr($userLang,0,2);
  if( in_array($userLang, $availableLangs) ) {
    require "langs/$userLang.php";
  } else {
    require "langs/en.php";
  }
  
  $app->render('0.2.php', $langs);
});

$app->get('/:lang', function($lang) use ($app, $langs, $availableLangs) {
  if( !in_array($lang, $availableLangs) ) { $app->redirect('/404'); }
  require "langs/$lang.php";
  $req = $app->request();
  
  $app->render('0.2.php', $langs);
});

$app->get('/404', function() use ($app) {
  echo "404";
});

/*
// POST route
$app->post('/post', function () {
    echo 'This is a POST route';
});

// PUT route
$app->put('/put', function () {
    echo 'This is a PUT route';
});

// DELETE route
$app->delete('/delete', function () {
    echo 'This is a DELETE route';
});
*/

$app->run();