<?php
    session_start();
?>
<!DOCTYPE html>
<html class="js no-touch">
<head>
<title><?php if (isset($titleToUse)) {
    echo $titleToUse; ?> - <?php
       } ?>CJ's Zone</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="/includes/template/styles/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="/includes/template/styles/general.min.css">
</head>
<body id="page">

    <header role="banner">
    <div>
            <h1 class="logo">
                <a href="/">
                    <img src="/static/images/core/logo/fplogosmall.png" alt="CJsZone">
                </a>    
            </h1>

            <ul class="nav-account">

            <?php
            if (isset($_SESSION["loggedin"])) {
                echo '<li><a href="/account/">My Account</a></li>';
            } else {
                echo '<li><a href="/account/login/">Login or Register</a></li>';
            }
            ?>
            </ul>
            
            <ul id="nav-anchors" class="nav-anchors" role="menu">
                <li><a href="#nav" id="menu-anchor">Menu</a></li>
            </ul>
            
        <nav id="nav" class="nav reveal" style="display:none;">
            <ul role="navigation">
                <li class="nav-item nav-top"><a class="nav-top-link" href="/">Home</a></li>
            </ul>
        </nav>
    </div>
    </header>
<div class="content">
