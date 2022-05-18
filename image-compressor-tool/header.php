<?php
include('functions.php');
$home        = '';
$other_pages = '';

if (strpos($url, 'index') !== false) {
  $home = 'active';
}
else {
  $other_pages = 'active';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Image Compressor Tool - Made by Ricko Aguirre</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/colors.css" rel="stylesheet">
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <style type="text/css">
      .navbar-dark .navbar-nav .nav-link {
          color: rgba(255,255,255,.7);
      }
      .custom-container {
          background-color: white;
          border-radius: 4px;
      }
    </style>
  </head>
  <body style="background-color: #ebebeb;">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Image Compressor Tool</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= $home ?>">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
          <li class="nav-item dropdown <?= $other_pages ?>">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compression</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="./standard-compression.php">Standard</a>
              <a class="dropdown-item" href="#">Zstandard</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav float-right">
          <li class="nav-item">
            <a class="nav-link disabled white-text" href="#">Made by Ricko Aguirre</a>
          </li>
        </ul>
      </div>
    </nav>