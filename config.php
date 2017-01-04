<?php
session_start();
/*$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'login_db';*/

try {

  //$connection = new PDO("mysql:host={$DB_HOST};dbname:{$DB_NAME},$DB_USER,$DB_PASSWORD");
  $connection=new PDO('mysql:dbname=login_db;host=127.0.0.1','root','');
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo $e->getMessage();
}
include_once 'class.user.php';
$user = new User($connection);
?>
