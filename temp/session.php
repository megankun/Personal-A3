<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];

   // firstname of the user
   $ses_sql = mysqli_query($db,"select firstname from users where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $firstname = $row['firstname'];

   //id of the user
   $ses_sql = mysqli_query($db,"select id from users where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $user_id = $row['id'];

   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
   }
?>
