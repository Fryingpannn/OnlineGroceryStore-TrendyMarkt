<?php session_start(); 
 var_dump($_SESSION);
 ?>
<!doctype html>

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
            <a class="btn btn-outline-success" href="p5-signin.php" role="button">Login</a>
            <p class="small pt-4">We buy these items in bulk after carefully analyzing the latest food trends to deliver
                you the most popular nutriments at the cheapest price. </p>
        </div>
    </div>
</nav>

<body>
<div class="container" style="padding:5px;">
    <div class="container-fluid ">
        <div class="row page-header mb-2 pl-3 pt-3 pb-3" >
            Your Trendy Markt Cart:
        </div>
        <div class="row">
            <div class="col-lg-9" id="frameWork">

             <?php 
    if(empty(!$_SESSION['name'])){
        $name = $_SESSION['name'];
        $price = $_SESSION['price']; 
        $qty = $_SESSION['qty'];
        $pic = $_SESSION['pic'];
       
        for($i = 0; $i < count($name); $i++){
            echo '<div class="row list pt-2 pb-2" id="Mango">
            <img src="'.$pic[$i].'" class="product-image col-4 ">
            <div class="col">
                <div class="row mb-2">
                    <div class="col align-self-left ml-2 font-weight-bold" id="name0">'.$name[$i].'</div>
                    <div class="col align-self-right ml-2 font-weight-bold " id="eachTag0"> $ <var id="each0">'.$price[$i].'</var> ea.</div>
                </div>
                <div class="row mt-1 mb-2 border-top">
                    <div class="col-sm-6  pt-2">
                        <div class="row">
                            <div class="col ml-4"><a class="btn btn-outline-info " id="Substracting0"><i class="fa fa-minus"></i></a></div>
                            <div class="col input-group" ><input type="text" class="form-control QTY" id="Quantity0" value="'.$qty[$i].'"></div>
                            <div class="col "> <a class="btn btn-outline-info " id="Adding0"><i class="fa fa-plus"></i></a></div>
                        </div>
                    </div>
                    <div class="col-sm-6  pt-2">
                        <div class="row">
                            <div class="col-7 text-center pt-1" style="font-size:19px" id="totTag0"> $ <var  id="tot0"></var></div>
                            <div class="col ml-2"><a class="btn btn-outline-info" id="Deleting0"><i class="fa fa-close"></i> </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    }
    else {
        echo "<h2 class='text-center'>Empty cart</h2>";
    }
            ?> 


            </div>
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
                <div class="row p-2 " style="justify-content: center"> <a class="btn btn-outline-info" style="justify-content:center;"  href="p4-cart.php">Check Out</a></div>
                <div class="row p-2" style="justify-content: center"><a class="btn btn-outline-info "  href="index.php">Continue Shopping</a></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

            CartStorage = window.localStorage;
            function cartItem  (name, unit, itemprice, quantity, picturepath){
                return {
                    name: name,
                    unit: unit, // " ea." or "/lb"
                    itemprice: itemprice,
                    quantity: quantity,
                    total: function(){ return this.itemprice*this.quantity;},
                    picturepath: picturepath,
                }
            }
            let cartList = [];
            cartList[0] = cartItem("Mango", "ea.", 1.99, 0, "Pictures/Mango-2.jpg" );
            cartList[1] = cartItem("Apple", "/lb", 2.00, 0, "Pictures/appl3.jpg");
            cartList[2] = cartItem("Peach", "ea.", 1.40, 0, "Pictures/peach2.jpg");

            //LOADING PREEXISTING VALUES
            function checkvalues() {
                if (!isNaN(CartStorage.getItem("nbrItems"))) {
                    for (i = 0; i < cartList.length; i++) {
                        let IDstring = "Quantity"+i;
                        document.getElementById(IDstring).placeholder = CartStorage.getItem(IDstring);
                        cartList[i].quantity=Number(CartStorage.getItem(IDstring));
                        calSingleTotal(cartList[i].name);
                    }
                    calnbrItems();
                    calpretotal()
                    calQST();
                    calGST();
                    calTotal();
                }
            }

            checkvalues();
            document.getElementById("Adding0").addEventListener('click',()=> addplus("Mango"));
            document.getElementById("Substracting0").addEventListener('click',()=>  subminus("Mango"));
            document.getElementById("Deleting0").addEventListener('click', ()=> deletefruit("Mango"));
            document.getElementById("Adding1").addEventListener('click',()=> addplus("Apple"));
            document.getElementById("Substracting1").addEventListener('click',()=>  subminus("Apple"));
            document.getElementById("Deleting1").addEventListener('click', ()=> deletefruit("Apple"));
            document.getElementById("Adding2").addEventListener('click',()=> addplus("Peach"));
            document.getElementById("Substracting2").addEventListener('click',()=>  subminus("Peach"));
            document.getElementById("Deleting2").addEventListener('click', ()=> deletefruit("Peach"));

            function savingQTYArray(){
                for (i = 0; i < cartList.length; i++) {
                    let IDstring = "Quantity"+i;
                    CartStorage.setItem(IDstring, document.getElementById(IDstring).placeholder);
                }
            }
            function calpretotal(){
                let pretotal1=0;
                for (i = 0; i < cartList.length; i++) {
                    pretotal1 +=cartList[i].total();
                }
                if(pretotal1.toString().length>3){
                    pretotal1 = Number(pretotal1.toFixed(3));
                }
                document.getElementById("pretotal").textContent = pretotal1;
            }
            function calnbrItems() {
                nbrItems=0;
                for (i = 0; i < cartList.length; i++) {
                    nbrItems += cartList[i].quantity;
                }
                document.getElementById("nbrItems").textContent = nbrItems;
                CartStorage.setItem("nbrItems", nbrItems);
                return nbrItems;
            }
            function calGST(){
                let pretotal1 = Number(document.getElementById("pretotal").textContent);
                let gst1 = pretotal1*0.05;
                if(gst1.toString().length>3){
                    gst1 = Number(gst1.toFixed(2));
                }
                document.getElementById("GST").textContent = gst1;
            }
            function calQST(){
                let pretotal1 = Number(document.getElementById("pretotal").textContent);
                let qst1 = pretotal1*0.09975;
                if(qst1.toString().length>3){
                    qst1 = Number(qst1.toFixed(2));
                }
                document.getElementById("QST").textContent = qst1;
            }
            function calTotal(){
                let pretotal1 = Number(document.getElementById("pretotal").textContent);
                let gst1 = Number(document.getElementById("GST").textContent);
                let qst1 = Number(document.getElementById("QST").textContent);
                let total1 = pretotal1+gst1+qst1;
                if(total1.toString().length>3){
                    total1 = Number(total1.toFixed(2));
                }
                document.getElementById("TOTAL").textContent = total1;
            }
            function addplus(fruitx) {
                let index = cartList.findIndex(cartList => cartList.name === fruitx);
                cartList[index].quantity++;
                let IDstring = "Quantity"+index;
                document.getElementById(IDstring).placeholder = cartList[index].quantity;
                CartStorage.setItem(IDstring, cartList[index].quantity.toString());
                calnbrItems();
                calpretotal();
                calSingleTotal(fruitx);
                calGST();
                calQST();
                calTotal();
            }
            function subminus(fruitx) {
                let index = cartList.findIndex(cartList => cartList.name === fruitx);
                if (cartList[index].quantity!=0) {
                    cartList[index].quantity--;
                    let IDstring = "Quantity" + index;
                    document.getElementById(IDstring).placeholder = cartList[index].quantity;
                    CartStorage.setItem(IDstring, cartList[index].quantity.toString());
                    calnbrItems();
                    calpretotal();
                    calSingleTotal(fruitx);
                    calGST();
                    calQST();
                    calTotal();
                }
            }
            function calSingleTotal(fruitx){
                let index = cartList.findIndex(cartList => cartList.name === fruitx);
                let IDstring = "tot"+index;
                let temp = cartList[index].total();
                if(temp.toString().length>3){
                    temp = Number(temp.toFixed(3));
                }
                document.getElementById(IDstring).textContent = temp;
            }
            function deletefruit(fruitx){
                let index = cartList.findIndex(cartList => cartList.name === fruitx);
                cartList[index].quantity=0;
                let IDstring = "Quantity" + index;
                document.getElementById(IDstring).placeholder = "0";
                document.getElementById(cartList[index].name).style.display="none";
                CartStorage.setItem(IDstring,"0");
                calnbrItems();
                calpretotal();
                calSingleTotal(fruitx);
                calGST();
                calQST();
                calTotal();
            }


        </script>


        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <small class="d-block mb-3 text-muted">&copy; 2020-2021 <br> Soen 287</small>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../../../assets/js/vendor/popper.min.js"></script>
        <script src="../../../../dist/js/bootstrap.min.js"></script>
        <script src="../../../../assets/js/vendor/holder.min.js"></script>
    </div>
</body>
</body>
</html>