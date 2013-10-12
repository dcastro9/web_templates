<?php
function db_connect(){
  $username = "username";
  $password = "password";
  
  try {
    $db = new PDO('mysql:host=localhost;dbname=dbname',
                $username,
                $password,
                array(PDO::ATTR_PERSISTENT => true)
                );
    return $db;
  } catch (PDOException $e) {
    print "Error: " . $e->getMessage() . "<br/>";
    die();
    return null;
  }
}

?>