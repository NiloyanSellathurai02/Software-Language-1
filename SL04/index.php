<?php
/**
 * Server variabelen
 * 
 * 
 * SERVER
 * GET
 * POST
 */


 $App = require "private.php";

 $db = $App['database'];

//  die(var_dump($dbconn));

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details.php",
    "/skills" => "controllers/skills.php",
    "/contact" => "controllers/contact.php"
];

if (array_key_exists($_SERVER['REQUEST_URI'] , $routes)){
    require $routes[$_SERVER['REQUEST_URI']];
}else{
    echo "404";
}


/**
 * Routing
 * Waar in de applicatie ben je?
 *
 * Voor het gebruik gaan we er gebruik van maken van de volgende opbouw
 * - index(home)
 * - contact
 * - details
 *      - profiel
 *      - cijfers
 *      - ervaringen
 *      - hobby
 * - about
 */




/**
 * PDO - connect to database
 *
//  */
// $servername = "localhost";
// $username = "root";
// $password = "";

try {
  $conn = new PDO("mysql:host=$db[servername];dbname=$db[dbname]", $db['username'], $db['drowssap']);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();


}

//  require 'views/index.view.php';
