<?php
session_start();
?>

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
<body onload="loadXMLDoc()">
     <nav class="site-header shadow-lg sticky-top py-1 border border rounded">
      <div class="container d-flex flex-row justify-content-between">
         <a class="py-2" href="index.php">Home</a>
        <a class="py-2" href="p13-aboutus.php">About us</a>  <!--Back store functions-->
        <a class="py-2" href="p4-cart.php">Cart</a>
        <a class="py-2" href="p6-signup.php">Sign up</a>
      </div>
    </nav>
    <div class="sidebar">
    <a href="index.php">Home</a>
    <li style="list-style-type: none"><a href="p9-user.php">User List</a></li>
  <a href="p7-productlist.php" style="text-decoration: none;">Product</a>
  <ul>
    <li style="list-style-type: none; "> <a href="p7-productlist.php" style="text-decoration: none;"> All Product</a></li>
    <li style="list-style-type: none;"> <a> Inventory</a></li>
    <li style="list-style-type: none;"> <a href="p11-orderlist.php"> Orders</a></li>
 </ul>
</div>

    <form method="get" >
        <h2><i>Orders</i></h2>
        <p class="text-right">
       <a class="btn btn-outline-info" href="p12-orderadd.php" role="button" >Add Order</a>
          
        <a href="p12-orderedit.php" class="btn btn-outline-info" role="button" id="edit" onclick="passvalues();" formaction="p12-orderedit.php" >edit</a>
            
            <input type="submit"  class="btn btn-outline-info" role="button" name="delete" value="delete" formaction="orderdelete.php" /></p>

<div class="content">
  <div class="container-text"> 
   
      <table id="tab"></table>
     
    </div>
        </div>
    </form>
    
     <script>
         
      function passvalues() {
   var data=document.getElementById("filter").value;
        localStorage.setItem("textvalue",data);
          return false;
}
    function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "Order.xml", true);
  xmlhttp.send();
}
       
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><td style='height:50px'; colspan='2'>All</td><td colspan='3'><input type='text' id='filter' name='filter' placeholder='order number to delete/edit'/></td></tr><tr><td style='height:50px'>Order number</td><td>Customer</td><td>Ship to</td><td>Date</td><td>Total</td></tr>";
  var x = xmlDoc.getElementsByTagName("olist");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td style='height:50px'>"+
    x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("customer")[0].childNodes[0].nodeValue +
    "</td><td>"+
         x[i].getElementsByTagName("shipping")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("created")[0].childNodes[0].nodeValue +
    "</td><td>"+x[i].getElementsByTagName("total")[0].childNodes[0].nodeValue +"</td></tr>";
  }
  document.getElementById("tab").innerHTML = table; 
    
} 
    </script>

 
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