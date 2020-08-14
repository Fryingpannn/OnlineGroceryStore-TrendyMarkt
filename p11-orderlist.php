<?php session_start(); ?>
<!doctype html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="grocery store, food, ingredients, trendy, meat, vegetables, fruits, snacks, pastry, soen287">
    <meta name="description" content="This is the order list page for the grocery store Trendy Markt where all the orders are kept.">
    <meta name="author" content="Mira Aji">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="main.css" rel="stylesheet" type="text/css">
<title>
order table
</title>
    <style>
        tr,table{
            border-collapse:collapse;
            width:80%;
            border-style:outset;
            border-color:white;
            border-width:thin;
           
          } 
        div.content{
            margin-left:200px;
            padding: 1px 16px;
            height: 1000px;
          width: 100%;
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
         <a class="py-2" href="index.html">Home</a>
        <a class="py-2" href="p13-aboutus.php">About us</a>  <!--Back store functions-->
        <a class="py-2" href="p4-cart.php">Cart</a>
        <a class="py-2" href="p6-signup.php">Sign up</a>
      </div>
    </nav>
    <div class="sidebar">
    <a href="index.html">Home</a>
    <li style="list-style-type: none"><a href="p9-user.html">User List</a></li>
  <a href="p7-productlist.html" style="text-decoration: none;">Product</a>
  <ul>
    <li style="list-style-type: none; "> <a href="p7-productlist.html" style="text-decoration: none;"> All Product</a></li>
    <li style="list-style-type: none;"> <a> Inventory</a></li>
    <li style="list-style-type: none;"> <a href="p11-orderlist.html"> Orders</a></li>
 </ul>
</div>

    
    <form>
        <h2><i>Orders</i></h2>
        <p class="text-right">
       <a class="btn btn-outline-info" href="p12-orderedit.html" role="button" >Add Order</a>
        <a href="p12-orderedit.html" class="btn btn-outline-info" role="button" >edit</a>
            <a href="#"  class="btn btn-outline-info" role="button" >delete</a></p>

<div class="content">
  <div class="container-text">           
    <table>
        <tr>
        <td style="height:50px;" colspan="3">All</td>
            <td colspan="3"><input type="text" name="filter" placeholder="Filter orders"/></td>
        </tr>
    <tr style="height:100px; line-height: 3;">
        <td>
          <span class="checkbox"> <input type="checkbox" name="select" value="order"/> </span> 
        </td>
        <td>Order</td>
        <td> 
            Purchased
        </td>
        <td> 
    Ship to
        </td>
        <td>
       Date
        </td>
        <td>Total</td>
        </tr>
    </table> 
  </div>
    </form>
  <</div>  
    

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