<?php

$name = $_POST['name'];
$sname = $_POST['Sname'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$dbuser = "root";
$dbpass = "root";
$dbname = "bokamar";
$host = "localhost:3306";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  );
  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass, $options);
    echo "طم توصيل";
    
  } catch (PFOException $e) {
    echo $e->getMassage();
    exit();
  }
  
  
     

?>