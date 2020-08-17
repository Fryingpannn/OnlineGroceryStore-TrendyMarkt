<?php ?>
<!DOCTYPE html>
<html>
  <?php 
  session_start();
  $BaseItems = simplexml_load_file("productlist.xml");
  ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Grocery Store, list, backstore, products, edit ">
<meta name="description" content="This is the Edit product option in the backstore">
<meta name="author" content="Lea Lakkis">
<script type = "text/javascript"  src = "product_list.js" ></script>
<script type="text/Javascript" src="validation.js"></script>
<script type="text/Javascript" src="validationr.js"></script>
<script type="text/Javascript" src="validationrr.js"></script>
<title>Backstore</title>
   <!-- (adding bootstrap CDN)-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link href="main.css" rel="stylesheet" type="text/css" >
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
        
                <form action="p8-productadd.php" method="get">
                    <label> Item Aisle : </label>
                    <select name="itemAisle">
                        <option ></option>
                        <option value="Fruit">Fruit</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Meat">Meat</option>
                        <option value="Dairy">Dairy</option>
                        <option value="Snacks">Snacks</option>
                        <option value="Pastry">Pastry</option>
                    </select>
                    <br>
                    <label> Item name : <input type = 'text' name="itemName" > </label><br>
                    <label> Item description : <input type = 'text' name="itemDescription" id="Productdescription"> </label><br>
                    <label> Item Rating :  <input type = 'text' name="itemRating" id="itemRating"> </label><br>
                    <label> Item price :  <input type = 'text' name="itemPrice" id="Price"> </label><br>
                    <label> Item Serial number : <input type = 'text' name="itemSerial" id="Inventory"> </label><br>
                    <label> Item Stock Quantity : <input type = 'text' name="stockQuantity" id="Inventory"> </label><br>
                    <label> Ingredient : <input type = "textarea" name="itemIngredients" id="itemIngredients"> </label><br>
                    
          
        
                    <br>
                    <input type="submit" id="mgmtAdd" value="submit">
                </form>
                <br><br>
               
            </div>

               </div>
</br>
</div>
<?php
if(isset($_GET['itemName'])&&isset($_GET["itemAisle"])) {

    $newProduct = $BaseItems->addChild("item");
    $newProduct->addChild("itemAisle");
    $newProduct->addChild("itemName");
    $newProduct->addChild("itemDescription");
    $newProduct->addChild("itemRating");
    $newProduct->addChild("itemPrice");
    $newProduct->addChild("itemUnit");
    $newProduct->addChild("itemSerial");
    $newProduct->addChild("itemIngredients");
    $newProduct->addChild("stockQuantity");

    $itemAisle = $_GET["itemAisle"];
    $itemName = $_GET['itemName'];
    $itemDescription = $_GET['itemDescription'];
    $itemRating = $_GET["itemRating"];
    $itemPrice = $_GET['itemPrice'];
    $itemSerial = $_GET['itemSerial'];
    $itemIngredients = $_GET['itemIngredients'];
    $stockQuantity = $_GET['stockQuantity'];
    
    $BaseItems->item[count($BaseItems)-1]->itemAisle= $_GET["itemAisle"];
    $BaseItems->item[count($BaseItems)-1]->itemName=$_GET['itemName'];
    $BaseItems->item[count($BaseItems)-1]->itemDescription= $_GET['itemDescription'];
    $BaseItems->item[count($BaseItems)-1]->itemRating = $_GET["itemRating"];
    $BaseItems->item[count($BaseItems)-1]->itemPrice= $_GET['itemPrice'];
    $BaseItems->item[count($BaseItems)-1]->itemSerial= $_GET['itemSerial'];
    $BaseItems->item[count($BaseItems)-1]->itemIngredients = $_GET['itemIngredients'];
    $BaseItems->item[count($BaseItems)-1]->stockQuantity= $_GET['stockQuantity'];



//new file for new product:
    $itemstotal=0;
    $itemsInAisle=0;
    foreach($BaseItems->item as $key => $value){
        if($BaseItems->item[$itemstotal]->itemAisle==$_GET["itemAisle"]){
            $itemsInAisle++;
        }
        $itemstotal++;
    }

    $fileName="p3-".$_GET["itemAisle"]."$itemsInAisle".".php";
    echo $fileName;
    echo copy("p3-snack1.html", $fileName);

}

$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($BaseItems->asXML());
$dom->formatOutput = true;
$dom->saveXML();
$dom->save("productlist.xml");

//$newProduct->addChild("publisher", "Game publisher");
//$newProduct->addAttribute("type", "Game type");
//$BaseItems->BaseItems->addChild("item","test");
//$BaseItems->item[count($BaseItems)]>addChild("itemName","test2");

?>

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
</div>

<script type = "text/javascript"  src = "product_list.js" ></script>
<script type="text/Javascript" src="validation.js"></script>
<script type="text/Javascript" src="validationr.js"></script>
<script type="text/Javascript" src="validationrr.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>