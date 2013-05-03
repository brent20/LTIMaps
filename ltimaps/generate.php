
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Insert a map!</title>
 <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 450px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="text"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  
</head>
<body><BR>
   
   <!-- Google Maps LTI Tool for Instructure's Canvas LMS
        Brent Saltzman, Emerging Technologies
        Copyright 2013 Creighton University
        Division of Information Technology -->
    
    <div class="container">
<div class="form-signin">
  <?php  
   
   $street = $_POST['address'];
   $city = $_POST['city'];
   $state= $_POST['state'];
   $h= $_POST['h'];
   $w= $_POST['w'];

   
   $address = $street.' '.$city.' '.$state;
   
  $map = urlencode("https://maps.google.com/maps?q=". $address ."&output=embed");
   
   ?>
 <center><h4 class="form-signin-heading">How's it look?</h4></center>
   <?php

echo "<iframe width='$w' height='$h' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?q=\"$address&output=embed'></iframe>
" 

 ?>
 

<center>


<?php
$url = $_GET["url"]; 

$hw = '&width=' . $h .'&height=' . $w ; 

echo "<a href='" . $url . "?embed_type=iframe&url=" . $map . $hw . "'class='btn btn-block btn-success'> Embed it!</a>"; 
?>



</center>


</div></div>