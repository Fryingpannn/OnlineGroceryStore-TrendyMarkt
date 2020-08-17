<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the snack aisle page for the grocery store Trendy Markt where we sell the trendiest ingredients.">
    <meta name="author" content="Mira aji">
    <title>Aisle 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>  <!-- Navigation bar-->
    <nav class="site-header shadow-lg sticky-top py-1 border border rounded">
      <div class="container d-flex flex-row justify-content-between">
        <a class="py-2" href="index.php">Home</a> 
        <a class="py-2" href="p13-aboutus.php">About us</a> 
        <a class="py-2" href="p4-cart.php">Cart</a>
        <a class="py-2" href="p6-signup.php">Sign up</a>
      </div>
    </nav>
    <!-- Banner/Header -->
    <div class="border rounded banner shadow-lg p-1 text-center text-white">
      <div class="col-md-6 mx-auto my-3">
        <h1 class="display-4 font-weight-normal">Trendy Dairy<span class="spinner spinner-grow spinner-grow-sm text-warning">
            </span></h1>
        <p class="lead font-weight-normal">Aisle 3</p>
        <?php
        if(!isset($_SESSION['userId']))
          echo '<a class="btn btn-outline-success" href="p5-signin.php">Login</a>';
        ?>
        <p class="small pt-4">All items are 100% quality ensured and carefully packaged using sustainable cartons.</br>Have a look at our wonderful snack collection!</p>
      </div>
    </div>
    <!-- Row of 3 products -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <a href="p3-10000001.php"> 
          
      <div class="dairy1 aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
        <div class="my-3 py-3 border" >
          <h4 class="display-5">Eggs</h4>
          <p class="display-5 small">Are you egg-noring me?</p>
        </div>
        <div style="height: 300px;"></div>
      </div>
      </a>
      <a href="p3-10000002.php"> 
      <div class="dairy2 aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
        <div class="my-3 py-3 border">
          <h2 class="display-5">Milk</h2>
          <p class="display-5 small">You'll love it</p>
        </div>
        <div style="height: 303px;"></div>
      </div>
      </a>
      <a href="p3-10000003.php"> 
        <div class="dairy3 aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
          <div class="my-3 p-3 border">
            <h2 class="display-5">Cheese</h2>
            <p class="display-5">Cheesiest cheese</p>
          </div>
          <div style="height: 300px;"></div>
        </div>
      </a>
    </div>
    <!-- email subscription -->
    <div class="container shadow-lg pt-4 pb-3 pt-2 mt-4 w-75 text-center border rounded-pill">
      <form class="row">
        <div class="col">
          <label for="email" class="lead">Enter your email to receive 10$ off on your first purchase!&nbsp
            <input type="email" name="email" id="email" class="col-12 col-md-3">
            <button class="btn btn-outline-warning m-2" type="submit" href="#">Submit</button>
          </label>
        </div>
      </form>
    </div>
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
            <li><a class="text-muted" href="#">Mira Aji</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Locations (Coming soon)</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
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