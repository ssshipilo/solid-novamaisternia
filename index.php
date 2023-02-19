<?php

// Use this namespace
use Steampixel\Route;

// Include router class
include './router/routing_tax.php';

// Define a global basepath
define('BASEPATH','/');

// Home
Route::add('/', function() {
  include('index_start.php');
}, 'get');

// Front door
Route::add('/front_door', function() {
  include('./pages/front_door.php');
}, 'get');

// Gate
Route::add('/gate', function() {
  include('./pages/gate.php');
}, 'get');

// Other
Route::add('/other', function() {
  include('./pages/other.php');
}, 'get');

// Loft furniture
Route::add('/loft', function() {
  include('./pages/loft.php');
}, 'get');

// Loft furniture
Route::add('/interior', function() {
  include('./pages/interior.php');
}, 'get');

// Route::pathNotFound(function($path) {
//   header('HTTP/1.0 404 Not Found');
//   include('./404.php');
// });

// Add a 405 method not allowed route
Route::methodNotAllowed(function($path, $method) {
  // Do not forget to send a status header back to the client
  // The router will not send any headers by default
  // So you will have the full flexibility to handle this case
  header('HTTP/1.0 405 Method Not Allowed');
  echo 'Error 405 :-(<br>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});

// Run
Route::run(BASEPATH);
