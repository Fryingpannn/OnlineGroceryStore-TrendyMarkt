<?php 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the cart content page for the grocery store Trendy Markt where we sell the trendiest ingredients.">
    <meta name="author" content="Ribelle El Ayoubi">
    <title>Trendy Markt Grocery Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .QTY{min-width:40px; max-width:40px; justify-content: center; text-align: center;
        }
        .page-header {font-size:20px; color: #85144b; font-weight: bold}
        .product-image{ border:solid; max-height:100%; border-radius:15px;border-width: thin; border-color:darkgrey;}

    </style>

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
    <span></span>
            <p class="small pt-4">We buy these items in bulk after carefully analyzing the latest food trends to deliver
                you the most popular nutriments at the cheapest price. </p>
        </div>
    </div>
</nav>

<body onload = "cartPageLoad()">
<form type="Post">
<div class="container" style="padding:5px;">
    <div class="container-fluid ">
            <div class="row page-header mb-2 pl-3 pt-3 pb-3" >
            Your Trendy Markt Cart:
            </div>
            <div class="row">
                <div class="col-lg-9" id="frameWork"></div>
                <div class="col  product-image">
                    <div class="row page-header p-4 " style="text-align: center; justify-content: center; font-size:18px;">Cart Total :</div>
                    <div class="row p-2" >
                        <div class="col" style=" justify-content: right;"># items : </div>
                        <div class="col" style=" justify-content: left;" id="nbrItems"> </div>
                    </div>
                    <div class="row p-2" >
                        <div class="col" style=" justify-content: right;"> SubTotal:  </div>
                        <div class="col" style=" justify-content: left;">$ <var id="pretotal"></var> </div>
                    </div>
                    <div class="row p-2" >
                        <div class="col font-weight-bold" style=" justify-content: right;"> GST (2%) : </div>
                        <div class="col font-weight-bold" style=" justify-content: left;" > $ <var id="GST"></var></div>
                    </div>
                    <div class="row p-2" >
                        <div class="col font-weight-bold" style=" justify-content: right;"> QST (9.975%) : </div>
                        <div class="col font-weight-bold" style=" justify-content: left;"> $ <var id="QST"></var> </div>
                    </div>
                    <div class="row p-2" >
                        <div class="col" style=" justify-content: right; font-size:15px; font-weight:bold;"> TOTAL : </div>
                        <div class="col" style=" justify-content: left; font-size:15px;  font-weight:bold;"> $ <var id="TOTAL"></var> </div>
                    </div>

                    <div class="row p-2 " style="justify-content: center">
                        <a class="btn btn-outline-info"  value="Check Out" name="checkout" href="index.php" onclick="alert('Successful Purchase. Thanks for shopping at Trendy Markt!');">Check Out</a>
                    </div>

                    <div class="row p-2" style="justify-content: center"><a class="btn btn-outline-info "  href="index.php">Continue Shopping</a></div>
                </div>
            </div>
    </div>
</div>
</form>
<script type="text/javascript" src="CartScript.js">
//txt = xmlDoc.getElementsByTagName("title")[0].childNodes[0].nodeValue;
</script>
<!--<?phpaddCartPage();?>-->
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
</div>

</body>
</html>
