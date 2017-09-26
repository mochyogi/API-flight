<?php
 
require 'flight/Flight.php';
require 'api.php';
 
Flight::route('POST /login', 'login');
// Flight::map('notFound', function(){
//     // Display custom 404 page
//     include 'errors/404.html';
// });
// Flight::route('/', function(){
//   echo 'hello world!';
// });

Flight::start();
 
?>