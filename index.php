<?php session_start(); 
// $namer = $_SESSION['qty'][0];
// if(isset($_SESSION['qty'])) 
//  echo $namer."hello";?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="trendymarkt, grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the home page for the grocery store Trendy Markt where we sell the trendiest ingredients.">
    <meta name="author" content="Matthew Pan">
    <title>Trendy Markt Grocery Store</title>
    <!-- (adding bootstrap CDN)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body>  <!--Navigation bar-->
    <nav class="site-header sticky-top py-1 border rounded">
      <div class="container d-flex justify-content-between">
        <a class="py-2" href="index.php">Home</a> 
        <a class="py-2" href="p13-aboutus.php">About us</a> 
        <a class="py-2" href="p4-cart.php">Cart</a>
        <?php
        if(!isset($_SESSION['userId']))
          echo '<a class="py-2" href="p6-signup.php">Sign up</a>';
        if(isset($_SESSION['userName']) && $_SESSION['userName'] == 'admin')
          echo '<a class="btn btn-warning text-dark" type="button" role="button" href="p7-productlist.php">Back Store</a>';
        ?>
      </div>
    </nav>
    <!--<div class="btnposition"><a class="btn btn-warning" type="button" role="button" href="p7-productlist.php">Back Store (Markers Only!)</a></div>-->
    <!-- Banner/Header -->
    <div class="border rounded banner shadow-lg p-1 text-center text-white">
      <div class="col-md-6 mx-auto my-3">
        <h1 class="display-4 font-weight-normal">Trendy Markt <span class="spinner spinner-grow spinner-grow-sm text-success"></span></h1>
        <p class="lead font-weight-normal">The Latest Food Trends</p>
        <!-- The session ids were set during the login phase. Here, if a user session exists, we display logout, otherwise we display login. The html are 'echo'ed to the page, 
             use dots to join php elements such as $name. If double quotes instead, html would not work because of interpolation. -->
        <?php 
        $name = $_SESSION['userName'];
        if(isset($_SESSION['userId'])){
          echo '<div class="container border rounded m-3 p-2" style="width: 30%; position: relative; left: 48%; transform: translate(-50%);">Hi '.$name.',<br>You are logged in!</div>
          <form action="includes/logout.inc.php" method="post"><button class="btn btn-outline-secondary" type="submit" name="logout-submit">Logout</button></form>';
        }
        else {
          echo '<p class="d-flex justify-content-center w-25 p-1 m-3 border rounded" style="position:relative; left:35%;">You are logged out.</p>
          <a class="btn btn-outline-success" href="p5-signin.php" role="button">Login</a>';
        }
        ?>
        <p class="small mt-2">We buy these items in bulk after carefully analyzing the latest food trends to deliver 
          you the most popular nutriments at the cheapest price. </p>
      </div>
    </div>
    <!-- First row of 2 aisles -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <a href="p2-aisle-vegetable.php"> <!-- 1st aisle -->
      <div class="veggies aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
        <div class="my-3 py-3 border" >
          <h2 class="display-5">Trendy Vegetables</h2>
          <p class="display-5">Aisle 1</p>
        </div>
        <div style="height: 300px;"></div>
      </div>
      </a>
      <a href="p2-aisle-fruit.php">  <!-- 2nd aisle -->
      <div class="fruits aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
        <div class="my-3 py-3 border">
          <h2 class="display-5">Trendy Fruits</h2>
          <p class="display-5">Aisle 2</p>
        </div>
        <div style="height: 303px;"></div>
      </div>
      </a>
    </div>
    <!-- 2nd row of aisles -->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <a href="p2-aisle-dairy.php"> <!-- 3rd aisle -->
        <div class="dairy aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
          <div class="my-3 p-3 border">
            <h2 class="display-5">Trendy Dairy</h2>
            <p class="display-5">Aisle 3</p>
          </div>
          <div style="height: 300px;"></div>
        </div>
      </a>
      <a href="p2-aisle-meat.php">  <!-- 4th aisle -->
        <div class="meat aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
          <div class="my-3 py-3 border">
            <h2 class="display-5">Trendy Meat</h2>
            <p class="display-5">Aisle 4</p>
          </div>
          <div style="height: 300px;"></div>
        </div>
      </a>
    </div>
    <!-- 3rd row of aisles -->
    <div class="d-md-flex flex-md-equal w-100 my-md-6 pl-md-3">
      <a href="p2-aisle-snack.php"> <!-- 5th aisle -->
      <div class="snacks aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
        <div class="my-3 p-3 border">
          <h2 class="display-5">Trendy Snacks</h2>
          <p class="display-5">Aisle 5</p>
        </div>
        <div style="height: 300px;"></div>
      </div>
      </a>
      <a href="p2-aisle-pastry.php"> <!-- 6th aisles -->
        <div class="pastry aisle border rounded shadow-lg mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black-50 overflow-hidden">
          <div class="my-3 py-3 border">
            <h2 class="display-5">Trendy Pastry</h2>
            <p class="display-5">Aisle 6</p>
          </div>
          <div style="height: 300px;"></div>
        </div>
      </a>
    </div>
    <!-- 4th row; miscellaneous-->
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <a href="/" onclick="return false;" >
        <div class="other1 aisle shadow-lg border rounded bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3 border">
            <h2 class="display-5">Locations</h2>
            <p class="display-5">Coming Soon</p>
          </div>
          <div style="height: 300px;"></div>
        </div>
      </a>
      <a href="p14-contest.php"> <!-- social -->
      <div class="other2 aisle border rounded shadow-lg bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3 border">
          <h2 class="display-5">Contest</h2>
          <p class="display-5">Draw to win!</p>
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
    <!-- footer -->
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; 2020-2021 </br> Soen 287</small>
        </div>
        <div class="col-6 col-md">
          <h5>Team</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Matthew Pan</a></li>
            <li><a class="text-muted">Ribelle El Ayoubi</a></li>
            <li><a class="text-muted">Mohammad Ali Zahir</a></li>
            <li><a class="text-muted">Maya McRae</a></li>
            <li><a class="text-muted">Lea Lakkis</a></li>
            <li><a class="text-muted">Mira Aji</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Locations (Coming soon)</a></li>
            <li><a class="text-muted">Privacy</a></li>
            <li><a class="text-muted">Terms</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted">Coming Soon</a></li>
            <li><a class="text-muted" href="#top">Jump to top of page</a></li>
          </ul>
        </div>
      </div>
    </footer>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>