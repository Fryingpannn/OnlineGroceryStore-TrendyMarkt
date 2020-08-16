<?php
session_start();
 if(isset($_GET['sub'])){
     $newnumber=$_GET['number'];
     $newdate=$_GET['created'];
     $newcus=$_GET['customer'];
     $newship=$_GET['shipping'];
     $newtot=$_GET['total'];
     
 $url=("Order.xml");
$doc=simplexml_load_file($url);
 
$elements = $doc->xpath("//olist[number='$newnumber']");
foreach ($elements as $info) 
     {
   $info->number[0]=$newnumber;
        
    $info->created[0]=$newdate;
   
    $info->customer[0]=$newcus;
   
   $info->shipping[0]=$newship;
   
   $info->total[0]=$newtot;
        
     } 
     $doc->asXML();
     file_put_contents($url,$doc->asXML());
    
     echo("Order has been successfully edited. Press on the link to go back to the order list <a href='p11-orderlist.php'>go back</a>");
 }

?>



    