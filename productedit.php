<?php
session_start();

 if(isset($_GET['sub'])){
     $newnumber=$_GET['name'];
     $newdate=$_GET['inventory'];
     $newcus=$_GET['Price'];
     $newship=$_GET['description'];
     $newtot=$_GET['Ingredient'];
     
 $url=("productlist.xml");
$doc=simplexml_load_file($url);
 
$elements = $doc->xpath("//item[itemName='$newnumber']");
foreach ($elements as $info) 
     {
   $info->itemName[0]=$newnumber;
        
    $info->stockQuantity[0]=$newdate;
   
    $info->itemPrice[0]=$newcus;
   
   $info->itemDescription[0]=$newship;
   
   $info->itemIngredients[0]=$newtot;
        
     } 
     $doc->asXML();
     file_put_contents($url,$doc->asXML());
 
     echo("product has been successfully edited. Press on the link to go back to the product list <a href='p7-productlist.php'>go back</a>");
 }
?>