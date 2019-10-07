<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: leden.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Welcome</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Rosario&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/styles/logoutHeader.css" />
    <style type="text/css"></style>
  </head>
  <body>
    <div class="page-header">
      <h4>Welkom op het leden portaal</h4>
      <button class="btn"><a href="logout.php">Afmelden</a></button>
    </div>
