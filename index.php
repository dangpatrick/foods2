<?php

//This is my CONTROLLER page

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the auto autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('Debug',3);

//Define a default route (home page)
$f3->route('GET /', function(){
    //echo"My food page2";
    $view = new Template();
    echo $view->render('views/home.html');
});
/*
 * Creating additional routes notes
 * Ex: Breakfast route below
 * 1. f3 object instantiated above -> invoking a method (java - $f3. (dot)-method call - PHP $f3 -> route
 * 2. route method takes 2 parameters (route (Always GET or POST), anonymous function (, function())
 * 3. 'GET / - default use forward slash - additional routes we give name aka breakfast - 'GET /breakfast' - map onto this route
 * 4. server is now looking for an actual directory called breakfast in foods dir. Goal is we only want to name a route
 * 5. Tell server, if we want to add additional route, GO BACK TO SERVER PAGE/CONTROLLER PAGE
 * 6. Controller page handles by using an htaccess file
 * 7. htaccess file solves 2 problems -
 * 7.1. No going through pages directly / only through routes
 * 7.2. Typing in URL, we want our index/controller page to handle all request needs to go through the controller.
 *
 */
//Define a breakfast route
$f3->route('GET /breakfast', function(){
    //echo "Breakfast";
    $view = new Template();
    echo $view->render('views/breakfast.html');

});



//Run fat free
$f3->run();
