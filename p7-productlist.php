<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grocery Store, list, backstore, products">
    <meta name="description" content="This is the All product page of the backstore">
    <meta name="author" content="Lea Lakkis">
<title>Backstore</title>
   <!-- (adding bootstrap CDN)-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link href="main.css" rel="stylesheet" type="text/css">
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
<div class="sidebar">
    <a href="p2-aisle-vegetable.html">Home</a>
    <li style="list-style-type: none"><a href="p9-user.html">User List</a></li>
  <a href="#" style="text-decoration: none;">Product</a>
  <ul>
    <li style="list-style-type: none; "> <a href="p7-productlist.html" style="text-decoration: none;"> All Product</a></li>
    <li style="list-style-type: none;"> <a> Inventory</a></li>
    <li style="list-style-type: none;"> <a href="p11-orderlist.html"> Orders</a></li>
 </ul>
</div>
<div class="content">
    <h1><i>Product</i></h1>
    <input type="text" name="search" placeholder="search" style="float: left;"></input>
            <a style="float: right;" class="btn btn-outline-info" href="p8-productadd.html">Add Product</a>
            <a style="float: right;" class="btn btn-outline-info" href="p8-productedit.html" onclick="cannotedittwo()">Edit</a>
            <a style="float: right;" class="btn btn-outline-info" href="#" onclick=Delete(datatable)>Delete</a>
    <table style="width: 100%; border: none;" id="datatable">
        <form>
        <tr>
            <td style="width: 2cm;  ">
                <input type="checkbox" name="choose"style="align-items: center;" onclick="selectALL(this.checked)" >
                <span class="circle" style="width: 100%;"> All</span>
            </td>
            <td></td>
            <td style="font-size: small;">
                Product
            </td>
            <td style="font-size: small;">
                Inventory
            </td>
            
            <td style="font-size: small;">Price</td>

            <td style="font-size: small;">Description</td>
            <td style="font-size: small;">Ingredient</td>
        </tr>
        <tr >
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td style="font-size: small;">
                <img src="Pictures/snacks3.jpeg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;"> 
                Brown Sugar Yogourt
            </td>
            <td style="font-size: small;">5 in stock</td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Snacks:Yogourt</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td style="font-size: small;">
                <img src="Pictures/snacks4.jpeg" style="width: 2cm;
                height: 2cm">

            </td>
            <td style="color: #6f7379;font-size: small;">
                Flower Cookies
            </td>
            <td style="font-size: small;">10 in stock</td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Snacks:Cookies</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/snacks7.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Ramen noodles
            </td style="font-size: small;">
            <td style="font-size: small;">10 in stock</td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Snacks:Noodles</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/tomato.jpg" style="width: 2cm;
                height: 2cm">

            </td>
            <td style="color: #6f7379; font-size: small;">  
                Tomato
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Vegetable:Tomato</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/peas.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Peas
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Vegetable:Peas</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/peppers.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Peppers
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Vegetables:Peppers</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/Fish.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Fish
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
           
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Meat:Fish</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/burger.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Burger
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Meat:Burger</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/kebabs.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Kebab
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Meat:Kebab</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/cheese.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Cheese
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Dairy and milk:Cheese</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/milk.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Milk
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Dairy and milk:Milk</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr>
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/eggs.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;">
                Eggs
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">  $</td>
            <td style="font-size: small;">Dairy and milk:Eggs</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr >
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/orange.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;"> 
                Oranges
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Fruit:Orange</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr >
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/mango.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;"> 
                Mango
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Fruit: Mango</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr >
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/peach.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;"> 
                Peach
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Fruit:Peach</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr >
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/cinnamon-rolls-4421067_1920.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;"> 
                Cinnamom rolls
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Baked goods:cinnamon rolls</td>
            <td style="font-size: small;">coming soon </td>
        </tr>
        <tr >
            <td >
                <input type="checkbox" name="select" style="align-items: center;">
                <span class="circle"> </span>
            </td>
            <td >
                <img src="Pictures/macarons-2548827_1920.jpg" style="width: 2cm;
                height: 2cm">
            </td>
            <td style="color: #6f7379; font-size: small;"> 
                Macaron
            </td>
            <td style="font-size: small;">
                50 in stock
            </td>
            <td style="font-size: small;">$</td>
            <td style="font-size: small;">Baked goods:Macaron</td>
            <td style="font-size: small;">coming soon </td>
            <tr >
                <td >
                    <input type="checkbox" name="select" style="align-items: center;">
                    <span class="circle"> </span>
                </td>
                <td >
                    <img src="Pictures/baked-goods-1846460_1920.jpg" style="width: 2cm;
                    height: 2cm">
                </td>
                <td style="color: #6f7379; font-size: small;"> 
                    Cake
                </td>
                <td style="font-size: small;">
                    50 in stock
                </td>
                <td style="font-size: small;">$</td>
                <td style="font-size: small;">Baked goods:Cake</td>
                 <td style="font-size: small;">coming soon </td>
            </tr>
        </tr>
        </form>
    </table>
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
              <li><a class="text-muted" href="#">Mohammd Ali Zahir</a></li>
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
</div>
<script type="text/Javascript" src="product-list-edit.js"></script>
<script type="text/Javascript" src="product-list-editr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>