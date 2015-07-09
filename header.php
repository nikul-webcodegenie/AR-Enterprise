<?php 
$url = $_SERVER['REQUEST_URI']; 
$baseName = basename($url); 
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>AR Enterprise</title>
</head>

<body class="page-homepage navigation-fixed-top page-slider" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<!-- Wrapper -->
<div class="wrapper">
    <div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="contact">
                    <figure><strong>Phone:</strong>+9913812604</figure>
                    <figure><strong>Email:</strong>arenterprise53@yahoo.com</figure>
                </div>
            </div>
        </div>
        <div class="container">
            <header class="navbar" id="top" role="banner">
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li <?php if($baseName == 'index.php') {  ?> class="active" <?php } ?> ><a href="index.php">Home</a></li>
                        <li <?php if($baseName == 'about.php') {  ?> class="active" <?php } ?>><a href="about.php">About Us</a></li>
                        <li <?php if($baseName == 'contact.php') {  ?> class="active" <?php } ?>><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header><!-- /.navbar -->
        </div><!-- /.container -->
    </div><!-- /.navigation -->