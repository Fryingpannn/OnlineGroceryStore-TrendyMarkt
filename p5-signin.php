<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta char="utf-8">
        <meta name="viewport" content="width=device-width" initial-scale="1">
        <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
        <meta name="description" content="This is the login page for the grocery store Trendy Markt where we sell the trendiest ingredients.">
        <meta name="author" content="Matthew Pan">
        <meta name="google-signin-client_id" content="289354389291-vhhpc27pnpu5o3rn7kf8h46bbpfudpje.apps.googleusercontent.com">
        <title>Trendy Markt Grocery Store</title>
    <!-- bootstrap + icon + css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet" type="text/css">
    </head>
    <body class="login-bg">
        <nav class="site-header sticky-top py-1 border rounded">
            <div class="container d-flex justify-content-between">
              <a class="py-2" href="p13-aboutus.php">About us</a> 
              <a class="py-2" href="index.php">Home</a>
              <a class="py-2" href="p6-signup.php">Sign up</a>
            </div>
        </nav>
        <div class="container login border rounded">
          <h1 class="lead display-4 ">Login
          <button class="btn btn-info btn-sm m-2 mr-3 rounded-pill float-right" data-toggle="collapse" data-target="#moreinfo">Admin</button>
                    <p id="moreinfo" class="collapse text-wrap lead text-warning font-weight-bold" style="font-size: 14px;">
                </br>Login as administrator to access backstore.</br></br>
                    u: admin@trendymarkt.com</br>
                    p: admin
                    </p>
          </h1>
          <?php
          if(isset($_GET['error']) && $_GET['error'] == 'wrongpwd') 
            echo '<p class="text-danger text-center">Incorrect password.</br>Please try again.</p>';
          else if(isset($_GET['error']) && $_GET['error'] == 'emailDNE')
          echo '<p class="text-danger text-center">Unregistered email.</br>Please try again.</p>';
          ?>
          <form class="form-group" action="includes/login.inc.php" method="post">
                <div class="textbox">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <input class="form-control" type="email" id="loginEmail" name="email" placeholder="Email" onmouseover="this.focus();">
                </div>
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input class="form-control" type="password" id="loginPass" name="pwd" placeholder="Password" onmouseover="this.focus();"></br>
                </div>
                <div class="form-check pr-0 pt-1">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                    <button href="index.php" class="btn btn-danger mt-2" type="submit" name="login-submit" onclick="emptyLogin();">Sign in</button>
                    <div class="g-signin2 d-flex align-items-center justify-content-center pt-3" data-onsuccess="onSignIn"></div>
            </form>
            <p class="text-center font-weight-bold">Forgot password? <a href="p6-signup.php">Click here</a></p>
            <p class="text-center font-weight-bold">Not a member? <a href="p6-signup.php">Sign up now!</a></p>
        </div>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script type="text/Javascript" src="validation.js"></script>
        <script type="text/Javascript" src="loginr.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>