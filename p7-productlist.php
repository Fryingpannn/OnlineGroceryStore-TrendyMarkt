

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grocery Store, list, backstore, products">
    <meta name="description" content="This is the All product page of the backstore">
    <meta name="author" content="Lea Lakkis">
    <script type = "text/javascript"  src = "product_list.js" ></script>
    <title>Backstore</title>
   <!-- (adding bootstrap CDN)-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link href="main.css" rel="stylesheet" type="text/css">

<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      del1(this);
      myFunction(this);
      
    }
  };
  xmlhttp.open("GET", "productlist.xml", true);
  xmlhttp.send();
}
       
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><td style='width: 2cm;'><input type='checkbox' name='choose'style='align-items:center;' onclick='selectALL(this.checked)' ><span class='circle' style='width: 100%;'> All</span></td><td style='font-size: small;'>Product</td><td style='font-size: small;'>Inventory</td><td style='font-size: small;'>Price</td><td style='font-size: small;'>Description</td><td style='font-size: small;'>Ingredient</td><td style='font-size: small;'>Serial Number</td></tr>";
  var x = xmlDoc.getElementsByTagName("item");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td ><input type='checkbox' name='select' id= 'select'/></td><td>"+
    x[i].getElementsByTagName("itemName")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("stockQuantity")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("itemPrice")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("itemDescription")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("itemIngredients")[0].childNodes[0].nodeValue +
    "</td><td>"+
    x[i].getElementsByTagName("itemSerial")[0].childNodes[0].nodeValue +
    "</td></tr>";  
  }
  document.getElementById("datatable").innerHTML = table;
   
}

  function passvalues() {
   var data=document.getElementById("filter").value;
        localStorage.setItem("textvalue",data);
          return false;
}
function del1(xml){
  var count=0;
        var xmlDoc = xml.responseXML;

        var check=document.getElementsByName('select');
              for(var i=1;i<check.length;i++){
                  if(check[i].checked==true){
                    var x =xmlDoc.getElementsByTagName("item")[count];
                    xmlDoc.documentElement.removeChild(x);
                    count++;
                    console.log("hello");
                  }
               
              }

          }


    </script>


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
  <a href="#" style="text-decoration: none;">Product</a>
  <ul>
    <li style="list-style-type: none; "> <a href="p7-productlist.php" style="text-decoration: none;"> All Product</a></li>
    <li style="list-style-type: none;"> <a> Inventory</a></li>
    <li style="list-style-type: none;"> <a href="p11-orderlist.php"> Orders</a></li>
 </ul>
</div>
<div class="content">


    
    <h1><i>Product</i><span style="font-size: 14px;" class="text-info"> &nbsp (You must enter a product name to edit it)</span></h1>
            <a style="float: right;" class="btn btn-outline-info" href="p8-productadd.php">Add Product</a>
   
<form name="product_list" action="" method="get" id=listform>
     <input type="text" id="filter" name="search" placeholder="ENTER PRODUCT NAME HERE" style="float: left;">
      <a href="p8-productedit.php" class="btn btn-outline-info" role="button" id="edit" formaction="p8-productedit.php" onclick="passvalues();"  style="float: right;" >edit</a>
    <table style="width: 100%; border: none;" id="datatable">



    </table>
    </form>


    <script type = "text/javascript"  src = "product_list.js" ></script>
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
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      

</div>
</body>
</html>