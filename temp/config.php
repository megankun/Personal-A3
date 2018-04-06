<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', 'root');
  define('DB_DATABASE', 'test');
  if( ! $db =  mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE,'3306','/Applications/MAMP/tmp/mysql/mysql.sock') ) {
    die('No connection: ' . mysqli_connect_error());
  }
 ?>
