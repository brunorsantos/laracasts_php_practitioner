<?php


$query = require 'core/Bootstrap.php';


//require 'routes.php';


$uri = trim($_SERVER['REQUEST_URI'],'/');



require Router::load('routes.php')->direct($uri);




