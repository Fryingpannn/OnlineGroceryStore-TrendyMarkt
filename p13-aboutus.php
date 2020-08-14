<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the about us page for the grocery store Trendy Markt where we sell the trendiest ingredients.">
    <meta name="author" content="Maya McRae ">
    <title>Trendy Markt Grocery Store</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
body {font-family: Arial, Helvetica, sans-serif;margin: 0;}
html {box-sizing: border-box;}
*, *:before, *:after {box-sizing: inherit;}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 32px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}
.about-section {
  padding: 50px;
  text-align: center;
  background-color:#001f3f;
  color: white;
}
.container {padding: 0 16px;}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.title {color: grey;}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: grey;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.button:hover {background-color: #555;}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;}}
</style>
</head>
<body>
    <nav class="site-header sticky-top py-1 border rounded">
      <div class="container d-flex justify-content-between">
        <a class="py-2" href="index.php">Home</a> 
        <a class="py-2" href="p13-aboutus.php">About us</a> 
        <a class="py-2" href="p4-cart.php">Cart</a>
        <a class="py-2" href="p6-signup.php">Sign up</a>
      </div>
    </nav>
    <!-- Banner/Header -->
    <div class="border rounded banner shadow-lg p-1 text-center text-white">
      <div class="col-md-6 mx-auto my-3">
        <h1 class="display-4 font-weight-normal">Trendy Markt <span class="spinner spinner-grow spinner-grow-sm text-success"></span></h1>
        <p class="lead font-weight-normal">The Latest Food Trends</p>
        <?php
        if(!isset($_SESSION['userId']))
          echo '<a class="btn btn-outline-success" href="p5-signin.php">Login</a>';
        ?>
        <p class="small pt-4">About Us</p>
      </div>
    </div>
<h2 class="display-4 text-center p-2">Get to know Us</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Pictures/cat.jpeg" alt="the_team" height="300">
      <div class="container">
        <h3>The Team</h3>
        <p class="title">CEO & Founders </p>
        <p>We are a team of computer science and software engineering students at Concordia. Having a passion for technology and good food, we have decided to combine our interests into this terrific startup; Trendy Markt.</p>
        <p>(Note: we don't have our pictures, so have this cat instead. It accurately depicts our process of building this website.)</p>
        <p>ceoteam@trendymarkt.com</p>
        <p class="col-md-11 text-center" ><button type="button" class="btn btn-outline-warning"><a href="mailto:ceoteam@trendymarkt.com" class="text-warning">Contact</a> </button></p>
        </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="Pictures/aboutus1.jpeg" alt="store" height="300">
      <div class="container">
        <h2>Our Markt</h2>
        <p class="title">Trendy Markt</p>
        <p>A physical place to cultivate our ideas<br> </p>
       <br>
        <p>As we are an online delivery store, our on-site store isn't open yet, but it's under construction and almost done! Feel free to pay us a visit, you may end up getting free food! :)<br> </p>
        <p>contact@trendymarkt.com</p>
        <p class="col-md-11 text-center"><button type="button" class="btn btn-outline-warning">Get Directions</button></p>
        </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="Pictures/aboutus5.jpeg" alt="donate" height="300">
      <div class="container ">
        <h2>Homegrown & Sustainable</h2>
        <p class="title">Our Passion</p>
        <p>We believe strongly in supporting our local communities and being sustainable.</p>
        <p>Giving back to the Community is good business. Click below to find out how we do this. </p>
        <p>sustainability@trendymarkt.com</p>
        <p class="col-md-11 text-center"><button type="button" class="btn btn-outline-warning mt-3">More Info</button></p>
        </div>
    </div>
  </div>
</div>
    <!-- Footer -->
    <footer class="container py-5">
        <div class="row">
          <div class="col-12 col-md"> 
            <small class="d-block mb-3 text-muted">&copy; 2020-2021 </br> Soen 287</small>
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
      </footer>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
  </html>
</body>