<?php  ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the product (eggs) page for the grocery store Trendy Markt where we sell the trendiest ingredients.">
    <meta name="author" content="Matthew Pan & Mira aji ">
    <title>Brown Sugar Yogourt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body onload="loadProductPage()">
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
<span></span>
        <p class="small pt-4">We buy these items in bulk after carefully analyzing the latest food trends to deliver
            you the most popular nutriments at the cheapest price. </p>
    </div>
</div>

<!------------ Product section -->
    <div class="container productwrap shadow-lg mt-3">
        <div class="row">
            <div class="col-md-4 order-2 order-md-1 p-2 m-3 border">
                <img src="testestest" name="itemPicPath" id="itemPic" alt="snacks1">
            </div>
            <div class="col-md-7 order-1 order-md-2 p-2 my-3 border rounded">
                <p class="text-center pt-3 font-weight-bold">Trendy</p>
                <h2 style="display: inline-block" class="p-3 ml-2 border rounded shadow-sm" name="itemName" id="itemName"></h2>
                <span class="badge badge-success align-top m-1 shadow">NEW!</span>
                <p class="m-2 ml-3">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </p>
                <p class="lead font-weight-bold text-warning m-4">CAD $<var name='itemPrice' id="itemPrice"></var></p>
                <p class="m-4"><strong>Unit: </strong>   <var  id="itemUnit"></var> </p>
                <p class="m-4"><strong>Availability: </strong>In Stock</p>
                <p class="m-4"><strong>Ingredients:</strong></p>
                <ul>
                    <li>Milk</li>
                    <li>Brown Sugar
                    </li>
                    <li>Chocolate</li>
                </ul>
                <form method="Post">
                <label for="qty" class="ml-4"><strong>Quantity:</strong>
                    <input type="text" id="qty" name="itemQuantity" class="small w-25 text-right" value="1">
                    <button class="btn btn-outline-success btn-sm" href="#" type="submit" role="submit" onclick="addThisMuch()">Add to Cart</button>
                </label>
                </form >
                <p>
                    <button class="btn btn-info btn-sm m-2 mr-3 rounded-pill" data-toggle="collapse" data-target="#moreinfo">More info</button>
                    <div id="moreinfo" class="collapse text-wrap" ><var id="itemDescription"></var>
                    </div>
                </p>
            </div>
        </div>
    </div>
  <script type="text/javascript" src="CartScript.js "></script>
    <!-- Footer -->
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
    <script type="text/Javascript" src="validation.js"></script>
    <script src="validationr.js"></script>
  </body>

</html>