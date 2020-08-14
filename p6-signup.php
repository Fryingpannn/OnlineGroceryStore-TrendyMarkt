<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the sign up page for the grocery store Trendy Markt where we sell the trendiest ingredients.">
    <meta name="author" content="Maya McRae">
    <title>Trendy Markt Grocery Store</title>
    <!-- (adding bootstrap CDN)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Navigation bar-->
    <nav class="site-header sticky-top py-1 border rounded">
        <div class="container d-flex justify-content-between">
          <a class="py-2" href="index.php">Home</a> 
          <a class="py-2" href="p13-aboutus.php">About us</a> 
          <a class="py-2" href="p4-cart.php">Cart</a>
          <a class="py-2" href="p5-signin.php">Login</a>
        </div>
      </nav>
   <!-- Banner/Header -->
   <div class="border rounded banner shadow-lg p-1 text-center text-white">
    <h1 class="display-4 font-weight-normal">Register<span class="spinner spinner-grow spinner-grow-sm text-success"></span></h1>
    <div class="col-md-4 mx-auto my-3" id="carouselSlides" data-ride="carousel">
        <div class="carousel-inner">
            <div class="container ">
            <div class="carousel-item active">
                <img class="d-center w-100" src="Pictures/Fish.jpg" alt="Fish slide" height="300" >
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="Pictures/fruits1.jpeg" alt="Apple slide" height="300">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="Pictures/pastry2.jpeg" alt="Pastry slide" height="300"> 
          </div>
        </div>
        </div>
            </div>
  </div>
<div id="demo" class="carousel slide" data-ride="carousel"></div>
    <!-- Default form register -->
    <form action="includes/signup.inc.php" method="post">
    <div>
        <div class="container " style="padding-top: 16px; color: grey;">Profile</div>
        <!-- If user input error, display error message -->
        <?php
            if(isset($_GET['error'])){  //<!-- Checking the error that we wrote in URL -->
                if($_GET['error'] == 'emptyfields')
                    echo '<p class="text-center text-danger lead">Please fill in the name, email and password fields.</p>';
                else if($_GET['error'] == 'usertaken')
                    echo '<p class="text-center text-danger lead">Email already registered. Please change your email.</p>';
            }
            else if(isset($_GET['signup']))
                if($_GET['signup'] == "success")
                    echo '<p class="text-center text-success lead">Sign up successfull! Click <a href="p5-signin.php">here</a> to login.</p>';
        ?>
    <div class="border rounded  container productwrap shadow-lg mt-3" style=" padding-left: 60px; padding-top: 40px;  padding-bottom: 40px;">
        <div class="row">
                <div class="collum30">
                    <label for="first_name">First Name*</label>
                </div>
                <div class="collum70">
                    <input type="text" name="first_name" id = "first_name">
                </div>
            </div>
            <div class="row">
                <div class="collum30">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="collum70">
                    <input type="text" name="last_name" id="last_name">
                </div>
            </div>
            <div class="row">
                <div class="collum30">
                    <label for="address">Address</label>
                </div>
                <div class="collum70">
                    <input type="text" name="address" id="address">
                </div>
            </div>  
            <div class="row">
                <div class="collum30">
                    <label for="postalcode">Postal Code</label>
                </div>
                <div class="collum70">
                    <input type = "text" name="postalcode" id = "postalcode"/>
                </div>
            </div>
            <div class="row">
                <div class="collum30">
                    <label for="province">Province</label>
                </div>
                <div class="collum70">
                    <select id="province" name="province">
                        <option value="province">Alberta</option>
                        <option value="province">British Columbia</option>
                        <option value="province">Manitoba</option>
                        <option value="province">New Brunswick</option>
                        <option value="province">Newfoundland and Labrador</option>
                        <option value="province">Northwest Territories</option>
                        <option value="province">Nova Scotia</option>
                        <option value="province">Nunavut</option>
                        <option value="province">Ontario</option>
                        <option value="province">Prince Edward Island</option>
                        <option value="province">Quebec</option>
                        <option value="province">Saskatchewan</option>
                        <option value="province">Yukon</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="collum30">
                    <label for="select_language">Select Language</label>
                </div>
            <div class="collum70">
                <select id="language" name="language">
                    <option value="lang">English</option>
                    <option value="lang">Français</option>
                </select>
            </div>
            </div>
            <div class="row">
                <div class="collum30">
                    <label for="email">Email*</label>
                </div>
                <div class="collum70">
                    <input id="email" type="email" name="mail">
                </div>
            </div>
            <div class="row">
                <div class="collum30">
                    <label for="email">Confirm Email*</label>
                </div>
                <div class="collum70">
                    <input id="confemail" type="email" name="mail-repeat">
                </div>
            </div>
            <div class="row">
                <div class="collum30">
                    <label for="password">Password*</label>
                </div>
                <div class="collum70">
                    <input type="password" name="password" id="password"/>
                </div>
            </div>
            <div class="row">
                <div class="collum30">
                    <label for="confirm_password">Confirm Password*</label>
                </div>
                <div class="collum70">
                    <input type="password" name="password-repeat" id="confpw">
                </div>
            </div>
            </div><br><br>
        </div>
        <script type="text/Javascript" src="p6-signup-validation.js"></script>
        <script src="p6-signup-validationr.js"></script>
            <div class="border rounded  container productwrap shadow-lg mt-3 "  style="border:  2px  solid #001f3f ; padding-left: 40px; padding-top: 40px; padding-bottom: 40px;"  width="50%">
        <h3 align="center">Subscribe for the latest deals </h3>
        <div class="">
            <form class="border-class"></form>
                <label><input type="checkbox" name="subscriptions" value="updates" checked="checked">
                </label> <span> I would like to receive updates about Trendy Markt's updates, promotions and events,
                    related to the Points Plus Program. </span>
                <br><br>
                <label> <input type="checkbox" name="subscriptions" value="news">
                    <span>I would like news about the Trendy Markt newsletter, and will receive the following:
                        <ul>
                            <li>
                                Recipe ideas, and trendy menus based on Trendy Markt's online Flyers
                            </li>
                            <li>Nutritional information</li>
                            <li>Special offers and promotions</li>
                            <li>Events, and information on our products and services</li>
                        </ul>
                    </span>
                </label>
                <br>
                <label><input type="checkbox" name="consent" value="conditions">
                    <span><em>I acknowledge that by clicking 'sign-up', I am consenting to the information above and
                            understand that I can withdraw at anytime. </em></span>
                </label>
                <br><br>
                <h5> <u> Consent to the Conditions and Personal Information Protection Policy</u> </h5>
    <label><input type="checkbox" name="consent" id="consent" value="conditions">
    </label> <span> *Yes, I have read and accept the terms and conditions. By checking this box, I agree to them.
    </span>
    <br>
    </div><br><button class="btn btn-outline-success" role="submit" name="signup-submit">Create Account</button>
    <p id="demo"></p>
        </div>
    </form>
    <footer class="container py-5">
        <div class="row">
          <div class="col-12 col-md"> 
            <small class="d-block mb-3 text-muted">© 2020-2021 <br> Soen 287</small>
          </div>
          <div class="col-6 col-md">
            <h5>Team</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Matthew Pan</a></li>
              <li><a class="text-muted" href="#">Ribelle El Ayoubi</a></li>
              <li><a class="text-muted" href="#">Mohammad Ali Zahir</a></li>
              <li><a class="text-muted" href="#">Maya McRae</a></li>
              <li><a class="text-muted" href="#">Lea Lakkis</a></li>
              <li><a class="text-muted">Mira Aji</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="">Locations (Coming soon)</a></li>
              <li><a class="text-muted">Privacy</a></li>
              <li><a class="text-muted">Terms</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Coming Soon</a></li>
            </ul>
          </div>
        </div>
      </footer><table>
        <form action=""></form>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</table></div><style type="text/css"></style></div></body>
</html>