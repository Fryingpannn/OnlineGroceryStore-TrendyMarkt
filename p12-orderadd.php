
<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the edit order page for the grocery store Trendy Markt where you can edit your order.">
    <meta name="author" content="Mira aji">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="val.js"></script>
    <link href="main.css" rel="stylesheet" type="text/css">
    <title>edit</title>
        <style>
            table{
                background-color:white;
                width:100%;
                font-family:helvetica;
            line-height:4; }
            form{
                border-style:outset;}
            p{
                line-height:3; 
            }
            span{
                display:block;
                font-family:helvetica;         
            }
           .a{
                color:gray;
            }
            div.content{
                margin-left:200px;
                 padding: 1px 16px;
            height: 1000px;
            }

            @media screen and (max-width: 700px) {
.sidebar {
  width: 100%;
  height: auto;
  position: relative;
}
.sidebar a {float: left;}
div.content {margin-left:0;}
}
        </style>
    </head>
    <body>
        <nav class="site-header shadow-lg sticky-top py-1 border border rounded">
      <div class="container d-flex flex-row justify-content-between">
       <a class="py-2" href="index.php">Home</a>
        <a class="py-2" href="p13-aboutus.php">About us</a>  <!--Back store functions-->
        <a class="py-2" href="p4-cart.php">Cart</a>
        <a class="py-2" href="p5-signup.html">Sign up</a>
      </div>
    </nav>
    <div class="sidebar">
    <a href="index.php">Home</a>
    <li style="list-style-type: none"><a href="p9-user.php">User List</a></li>
  <a href="P7-productlist.php" style="text-decoration: none;">Product</a>
  <ul>
    <li style="list-style-type: none; "> <a href="P7-productlist.php" style="text-decoration: none;"> All Product</a></li>
    <li style="list-style-type: none;"> <a> Inventory</a></li>
    <li style="list-style-type: none;"> <a href="p11-orderlist.php"> Orders</a></li>
 </ul>
</div>
   <div class="content">
        <span class="a"> <a style="color:gray;"class="orders" href="p11-orderlist.php">&lt; Orders</a></span>
       <h2><i>Add/Edit order</i></h2>
   
        <form method="get" id="myForm" name="fo" onsubmit="validate()" action="AddOrder.php";>
            <p><span> <label for="orderno">Order number</label></span>
            
                <span> <input type="number" name="number" id="orderno"/></span>
            </p>
            <p><span> <label for="datee">Date created</label></span>
                <span><input  type="date" name="created" id="datee" 
               /></span>
            </p>
            <p>
         <span>
             <label for="customer"> Customer</label></span>
                <span><input type="text" name="customer" placeholder="Last name, First name" id="name"/>
                </span>
            </p>
            <p>
           <span>
               <label for:address>Shipping</label> </span>  
                <span><textarea id="address" name="shipping" rows="3" cols="40" contenteditable="true"></textarea>  </span>
            </p>
        <p>
            <span>
                <label for:total>Total</label></span>
            <span><input type="text" name="total"/></span>
            </p>
            <p>
           
            <input type="submit" value="save" class="btn btn-outline-info"role="button"
                  name="submit" onclick="checkName()";/>
            </p>
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
    </footer>
            </body>
</html>