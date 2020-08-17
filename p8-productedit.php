<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Grocery Store, list, backstore, products, edit ">
<meta name="description" content="This is the Edit product option in the backstore">
<meta name="author" content="Lea Lakkis">
<title>Backstore</title>
   <!-- (adding bootstrap CDN)-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body onload="loadXMLDoc()">
  <nav class="site-header sticky-top py-1 border rounded">
    <div class="container d-flex justify-content-between">
      <a class="py-2" href="index.php">Home</a> 
      <a class="py-2" href="p13-aboutus.php">About us</a> 
      <a class="py-2" href="p4-cart.php">Cart</a>
      <a class="py-2" href="p6-signup.php">Sign up</a>
    </div>
  </nav>
<div class="sidebar">
    <a href="index.php">Home</a>
    <li style="list-style-type: none"><a href="p9-user.php">User List</a></li>
  <a href="p7-productlist.php" style="text-decoration: none;">Product</a>
  <ul>
    <li style="list-style-type: none; "> <a href="p7-productlist.php" style="text-decoration: none;">All Product</a></li>
    <li style="list-style-type: none;"> <a> Inventory</a></li>
    <li style="list-style-type: none;"> <a href="p11-orderlist.php"> Orders</a></li>
 </ul>
</div>
<div class="content">
    <h1><i>Product</i></h1>
            <table  style="width: 100%;border: none 100px; height: 3cm;">
                <th>Add The product</th>
                <tr>
                </tr>
            </table>
            <div class="container-text">
              <form style="float: right;">
               <!-- <label for="img" >Select an image</label>
                <input type="file"id="image" name="image" accept="image" onchange=validateImage()>-->
              </form>
                <h1>The input element</h1>
            <form method="get" id="form" action="productedit.php">
              
            </form>
            </div>
</br>
</div>
<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "productlist.xml", true);
  xmlhttp.send();
}
       
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var form="";
    var n=localStorage.getItem("textvalue");
var url=document.location.href;
  var x = xmlDoc.getElementsByTagName("item");
  for (i = 0; i <x.length; i++) 
      {
         if(x[i].getElementsByTagName("itemName")[0].childNodes[0].nodeValue==n)
          {
        
              form +=  " <label for='Name'>Product name:</label> <input type='text' name='name' id='name' contenteditable='true' value='"+ x[i].getElementsByTagName("itemName")[0].childNodes[0].nodeValue+"'/><br><br> <label for='inventory'>Inventory stock:</label><input  type='text' name='inventory' id='Inventory' contenteditable='true' value='"+ x[i].getElementsByTagName("stockQuantity")[0].childNodes[0].nodeValue+"'/><br><br><label for='Price'>Price of product: </label><input type='text' name='Price' id='Price'contenteditable='true' value='"+ x[i].getElementsByTagName("itemPrice")[0].childNodes[0].nodeValue+"'/><br><br><label for:Price>Product description</label> <textarea id='Productdescription' name='description' rows='3' cols='40' contenteditable='true'>"+x[i].getElementsByTagName("itemDescription")[0].childNodes[0].nodeValue+"</textarea><br><br><label for:Price>Product description</label> <textarea id='Ingredient description' name='Ingredient' rows='3' cols='40' contenteditable='true'>"+x[i].getElementsByTagName("itemIngredients")[0].childNodes[0].nodeValue+"</textarea><br><br> <input type='submit' value='save' class='btn btn-outline-info' role='button' name='sub';/>";
      }
   
  }
      document.getElementById("form").innerHTML = form; }
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
              <li><a class="text-muted" href="#">Mohammed Ali Zahir</a></li>
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