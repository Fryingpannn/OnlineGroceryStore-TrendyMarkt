<?php session_start(); ?>
<!doctype html>
<html lang="en">
<style>
    .contest-cont { display:flex; flex-wrap: wrap;justify-content:center;}
    .contest-form{border-style:solid; border-radius:8px; border-width:thin; border-color: darkgrey; align-self: flex-end; margin:20px; padding:10px;}
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the contest page for the grocery store Trendy Markt where we sell the trendiest ingredients.">
    <meta name="author" content="Ribelle El Ayoubi">
    <title>Trendy Markt Grocery Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<nav>
    <nav class="site-header sticky-top py-1 border border rounded">
        <div class="container d-flex flex-row justify-content-between">
            <a class="py-2" href="index.php">Home</a> 
            <a class="py-2" href="p13-aboutus.php">About us</a> 
            <a class="py-2" href="p4-cart.php">Cart</a>
            <a class="py-2" href="p6-signup.php">Sign up</a>
        </div>
    </nav>
    <div class="border rounded banner shadow-lg p-1 text-center text-white">
        <div class="col-md-6 mx-auto my-3">
            <h1 class="display-4 font-weight-normal">Trendy Markt <span class="spinner spinner-grow spinner-grow-sm text-success"></span></h1>
            <p class="lead font-weight-normal">The Latest Food Trends</p>
            <p class="small pt-4">We buy these items in bulk after carefully analyzing the latest food trends to deliver
                you the most popular nutriments at the cheapest price. </p>
        </div>
    </div>
    <div class="container text-center contest-cont pt-3" style="max-width: 90% ">
        <div class="row" style="max-width: 90% "><img style="max-width: 90%" src="Pictures/contest.JPG"></div>
        <form class="contest-form row-2 w-75 text-center border">

             <label for="fname">First name:</label>
            <input type="text" id="fname" > &nbsp;<br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" ><br><br>
            <label for="fname">E-mail address:</label>
            <input type="email" id="email" > <br><br>
            <input type="checkbox" id="adult"> I have read and agree to the terms of this contest
            <br><br>
            <button class="btn btn-outline-info ml-2 small" id="contSub" type="submit" href="#"> Enter Contest! </button>
        </form>
    </div>
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
    <script type="text/javascript">
        document.getElementById("contSub").addEventListener('click', function(){alert("You successfully entered the contest! You should receive an e-mail shortly with the contest details")});
    </script>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    </body>
</html>
