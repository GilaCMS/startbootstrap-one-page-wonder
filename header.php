<!DOCTYPE html>
<html lang="en">
<?php View::head()?>

<head>
  <base href="<?=Config::base()?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>One Page Wonder - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <?=View::css('themes/one-page-wonder/vendor/bootstrap/css/bootstrap.min.css')?>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <?=View::css('themes/one-page-wonder/css/one-page-wonder.min.css" rel="stylesheet')?>
  <?=View::css('themes/one-page-wonder/css/one-page-wonder.css')?>
  <?=View::script('text/javascript" src="assets/core/gila.min.js')?>
  
  <style type="text/css">
    .navbar-nav a{
      text-transform: uppercase;
      font-size: .8rem;
      font-weight: 700;
      letter-spacing: .1rem;
      color: #f2f2f2;
      padding-right: .5rem;
      padding-left: .5rem;
    }
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">One Page Wonder</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          View::menu(); 
          if(Session::userId()>0){?>
            <li class="">
              <a class="" href="<?=Config::base()?>user/login">Sign Out</a>
            </li>
          <?php }else{ ?>
            <li class="">
              <a class="" href="<?=Config::base()?>user/login">Sign In</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>