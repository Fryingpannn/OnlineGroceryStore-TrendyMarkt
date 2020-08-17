<?php
//session_abort();
session_start();
    $_SESSION['productList']=0;
if(empty($_SESSION['orderID'])){
    $newOrderXML = simplexml_load_file("user1OrderID.xml");
    $userHistory = simplexml_load_file("user1file.xml");
    $nbrOrders = $userHistory->OrderQTY;
    echo $nbrOrders;
    console_log("this is the number of orders".$nbrOrders);
    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($newOrderXML->asXML());
    $dom->formatOutput = true;
    $dom->saveXML();
    $nameOrder="orderID".($nbrOrders+1).".xml";
    $dom->save($nameOrder);

    $_SESSION['orderID']=$nameOrder;
    $userHistory = simplexml_load_file("user1file.xml");
    $userHistory->OrderQTY=$nbrOrders+1;
    $dom1 = new DOMDocument('1.0');
    $dom1->preserveWhiteSpace = false;
    $dom1->formatOutput = true;
    $dom1->loadXML($userHistory->asXML());
    $dom1->formatOutput = true;
    $dom1->saveXML();
    $dom1->save("user1file.xml");
    console_log("this is the ID of the order".$_SESSION['orderID']);
    console_log("this is the name of the new order".$nameOrder);
}else{
    console_log("this is the ID of the EXISTING order : ".$_SESSION['orderID']);
}
function addToCart(){
    if(empty($_SESSION['prodID'])){
        $_SESSION['prodID']=array();
        $_SESSION['prodtQTY']=array();
    }
    array_push(  $_SESSION['prodID'], $_POST['itemSerialID']);
    array_push(  $_SESSION['prodQTY'], $_POST['itemQuantity']);


    $fullPath = $_SERVER['PHP_SELF'];
    $productID = substr($fullPath, -12, -4);
    //$productID for cartpage would /p4-cart
    console_log("this is product id : ".$productID);
    if(isset($_POST["itemQuantity"])){
        if(isset( $_SESSION[$productID])) {
            $_SESSION[$productID] = $_SESSION[$productID] + $_POST["itemQuantity"];
            console_log("IF: this is the product id " . $productID . " with the QTY : " . $_SESSION[$productID]);
        }else{
       //    $_SESSION[productList]+=1;
            $_SESSION[$productID] =$_POST["itemQuantity"];

        }
    }else{
       // console_log("this is the array ".$_SESSION['prodID']);
        $_SESSION[ $productID]="0";
        console_log("ELSE: this is the product id ".$productID." with the QTY : ".$_SESSION[$productID]);
    }
}/**
function addCartPage(){
    //foreach ($_SESSION['prodID'] as $key => $productID){
      //  console_log("this is the key ".$key." and the product id : ".$productID);
        //$stringname = "Quantity".$productID;
    //    console_log("this s the stringname : ".$stringname);
        if(isset($_POST[$stringname])){
            $_SESSION[ $productID]=$_POST[$stringname];
            console_log("this s the stringname : ".$_SESSION[ $productID]);

        }else{
            $_SESSION[ $productID]='';
         //   array_unset($_SESSION['prodID'][$key]);
            console_log("this s the stringname : ".$_SESSION[ $productID]);
        }
    }
}

//$nameOrder = $_SESSION['orderID'];
//$thisOrder = simplexml_load_file($nameOrder);
//$_SESSION[$prodID] = $_POST['itemQuantity'];
foreach ($thisOrder->itemList->item as $item) {
    echo $item;
    $itemSerialID = $item->itemSerialID;
    echo "<br>" . (string)$itemSerialID;
    if ($productID == $itemSerialID) {
        $item->itemQuantity = $_POST['itemQuantity'] + ($item->itemQuantity);
        echo "<br>" . $item->itemQuantity;
        $dom = new DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($thisOrder->asXML());
        $dom->formatOutput = true;
        $dom->saveXML();
        $dom->save($nameOrder);
        break;
    }
 * }
*/

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}